<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use App\Models\Payment;
use App\Models\UserCourse;
use Illuminate\Http\Request;
use App\Models\Plan;
use Cartalyst\Stripe\Exception\CardErrorException;
use Cartalyst\Stripe\Exception\MissingParameterException;

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

    public function courseInfo($id)
    {
        $courseInfo = Course::find($id);
        
        //Select average from each user
        $mediaGeral = DB::table('user_courses')->where('course_id','=', $courseInfo->id)->select()->avg('average');

        //Select how many users are in each course
        $users = DB::table('user_courses')->where('course_id','=', $courseInfo->id)->select('id')->count();

        return view('courses.info')->with([
            'course' => $courseInfo,
            'mediaGeral' => $mediaGeral,
            'users' => $users,
        ]);
    }

    public function courseContent($id)
    {
        $courseContent = Course::find($id);
        $content = DB::table('contents')->where('course_id', $id)->get();

        return view('courses.content')->with([
            'course' => $courseContent,
            'content' => $content,
        ]);
    }

    public function courseBuy(Request $request, $id)
    {
        $buy = Course::find($id);

        //Check if the user_id and course_id exists
        $usuario = DB::table('user_courses')->where('user_id', '=', Auth::user()->id)->where('course_id', '=', $buy->id)->count();

        $intent = $request->user()->createSetupIntent();

        if ($usuario > 0){
            return back()->withErrors('Você já está cadastrado nesse curso!');
        }else{
            return view('checkout', compact('buy', 'intent'));
        }
    }

    /**
     *  Initiate the charge with Stripe and call the protected function to store the informations into Payments Table
     * 
     *  @return \Illuminate\Http\Response
     */
    public function courseStore(Request $request)
    {
        //Create Stripe charge
        try {
            \Stripe::charges()->create([
                'amount' => $request->price,
                'currency' => 'BRL',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'Produtos' => $request->name,
                    'Quantidade' => 1,
                    'Desconto' => collect(session()->get('cupom'))->toJson()
                ],
            ]);
            
            //Call addBoughtToPaymentsTable protected function to store informations into Payments table
            $this->addBoughtToPaymentsTable($request, null);
            
            //Forget de coupon in session
            session()->forget('cupom');
            
            //If success, return back with the success message
            return redirect()->back()->with('success_message', 'Obrigado! Seu pagamento foi aceito com sucesso.');

            //if there is an error with the card, save into Payments table with the error. If there is any parameter error, return back with the error
        } catch (CardErrorException $e) {
            $this->addBoughtToPaymentsTable($request, $e->getMessage());
            return back()->withErrors('Ops! ' . $e->getMessage());
        } catch (MissingParameterException $e){
            return back()->withErrors('Ops! ' . $e->getMessage());
        }
    }

    /**
     *  Protected function to store the infotmations into Payments Table
     *  
     *  @param 
     * 
     *  @return \Illuminate\Http\Response
     */
    protected function addBoughtToPaymentsTable($request, $error)
    {
        $courseBought = Payment::create([
            'error' => $error,
        ]);

        return $courseBought;
    }

    public function courseRequire(Request $request)
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
