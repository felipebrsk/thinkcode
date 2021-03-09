<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use App\Models\UserCourse;
use Illuminate\Http\Request;
use App\Models\Plan;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('created_at', 'desc')->paginate(8);
        return view('main-menu.all-courses', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('main-menu.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course;

        $course->name = $request->name;
        $course->chapters = $request->chapters;
        $course->challenges = $request->challenges;
        $course->total_average = $request->total_average;
        $course->category_id = $request->category_id;
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            \Image::make($image)->resize(800, 600)->save($location);
            $course->picture = $filename;
        }
        $course->save();
    }

    public function mail()
    {
        return view('main-menu.mail');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $findCourse = Course::find($id);
        $plans = Plan::all();

        return view('main-menu.show', compact('findCourse', 'plans'));
    }

    public function courseContent($id)
    {
        $courseContent = Course::find($id);
        $mediaGeral = DB::table('user_courses')->where('course_id','=', $courseContent->id)->select()->avg('average');
        $users = DB::table('user_courses')->where('course_id','=', $courseContent->id)->select('id')->count();

        return view('courses.content')->with([
            'course' => $courseContent,
            'mediaGeral' => $mediaGeral,
            'users' => $users,
        ]);
    }

    public function courseBuy(Request $request)
    {
        $usuario = DB::table('user_courses')->where('user_id', '=', Auth::user()->id)->where('course_id', '=', $request->course_id)->count();

        if($usuario > 0){
            return back()->withErrors('Você já está inscrito nesse curso.');
        }else{
            UserCourse::firstOrcreate([
                'user_id' => Auth()->user() ? Auth()->user()->id : null,
                'course_id' => $request->course_id,
                'challenge' => 1,
                'chapter' => 1,
            ]);
            return redirect()->route('my-courses');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editCourse = Course::find($id);
        $category = Category::all();
            if (!$editCourse) {
                return redirect("course.create");
            }
        return view("main-menu.create", compact("editCourse", "category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);

        $course->name = $request->name;
        $course->chapters = $request->chapters;
        $course->challenges = $request->challenges;
        $course->total_average = $request->total_average;
        $course->category_id = $request->category_id;
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            \Image::make($image)->resize(800, 600)->save($location);
            $course->picture = $filename;
        }
        $course->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
