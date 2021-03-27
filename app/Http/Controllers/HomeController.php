<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\UserCourse;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();

        //Select the relationship
        $usersMedia = UserCourse::with('user')->take(20)->orderByDesc('average')->get();

        //Select the average of media table
        $media = DB::table('user_courses')->where('user_id', '=', Auth::user()->id)->select()->avg('average');

        //Select the columns that are below the average (of the user)
        $count = DB::table('user_courses')->where('user_id', '=', Auth::user()->id)->where('average', '<', 5)->count();

        //Select all the averages of the user
        $geral = DB::table('user_courses')->where('user_id', '=', Auth::user()->id)->select('average')->count();

        //Calculate the percentage of courses below the average
        $percent = $count / $geral * 100;

        return view('main-menu.home')->with([
            'users' => $users,
            'media' => $media,
            'count' => $count,
            'percent' => $percent,
            'usersMedia' => $usersMedia,
            'geral' => $geral,
        ]);
    }
    public function MyCourses()
    {        
        return view('main-menu.my-courses');
    }
    public function myProfile()
    {
        return view('profile.profile');
    }
    public function edit($id)
    {
        $user = User::find($id);

        if($user->id != Auth::user()->id){
            abort(404);
        }
        if($user == null){
            abort(404);
        }

        return view('profile.edit-profile', compact('user'));
    }

    public function update(UserUpdateRequest $request)
    {
        $user = auth()->user();
        $input = $request->except('password', 'password_confirmation', 'profile_picture');
        
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/profiles/' . $filename);
            \Image::make($image)->resize(800, 600)->save($location);
                if ($user->profile_picture != null) {
                    \Storage::delete($user->profile_picture);
                }
            $user->profile_picture = $filename;
            $user->fill($input)->save();

            return back()->with('success_message', 'Perfil e/ou foto alterados com sucesso!');
        }

        if(!$request->filled('password')){
            $user->fill($input)->save();
            
            return back()->with('success_message', 'Perfil atualizado com sucesso!');
        }


        if(!$request->filled('profile_picture')){
            $user->password = bcrypt($request->password);
            $user->fill($input)->save();
            
            return back()->with('success_message', 'Perfil e/ou senha atualizados com sucesso!');
        }
    }
}
