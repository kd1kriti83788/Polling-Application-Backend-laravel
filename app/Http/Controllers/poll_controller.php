<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Seeder;
use App\Models\polling_create;
use App\Models\poll_ans;
use Str;

class poll_controller extends Controller
{
    public function register(){
        return view('register');
    }


    public function registration_detail(Request $request){
       
        $data=$request->all();

        $registration= new User;
        $registration->name=$data['name'];
        $registration->email=$data['email'];
        $registration->password=Hash::make($data['password']);
        $registration->save();
        
        return redirect()->back()->with('success','registered');

    }
    public function login(){
        return view('login_form');
    }

    public function logindetail(Request $request){
        validator(request()->all(),[
            'email'=>['required'],
            'password'=>['required']
        ])->validate();

        
        if(auth()->attempt(request()->only(['email','password']))){

           
                //    print_r( Auth::user()->id );die;
            return redirect('/home');
        }

        return redirect()->back()->withErrors(['email'=>'invalid email or password']);


    }

    public function __invoke(){
        return view('dashboard', [
            'user'=>auth()->user()
        ]);
    }


     
    public function logout(){
        auth()->logout();
        return redirect('/login');
    }

    public function home(){
        $user_detail = Auth::user();
        $poll_table= polling_create::all();
        return view('dashboard',['myuser'=>$user_detail,'poll_data'=>$poll_table,]);
    }

    public function create_poll(){
        $user_detail = Auth::user();

        return view('create_poll',['myuser'=>$user_detail]);
    }

    public function poll_Q_save(Request $request,$id=""){
        $user_detail = Auth::user();
        $poll_table= polling_create::all();
        $rules=[

            'title'=>'required',
            'description'=>'required ',
            'option1'=>'required',
            'option2'=>'required ',
            'option3'=>'required',
            'option4'=>'required ',
            
        ];
        $customMessage=[
            'title.required'=>'title is required',
            'description.required'=>'description is required',
            'option1.required'=>'option1 is required',
            'option2.required'=>'option2 is required',
            'option3.required'=>'option3 is required',
            'option4.required'=>'option4 is required',   
        ];
    
        $this->validate($request,$rules,$customMessage);

        
    $data=$request->all();
    $user_id=$id;
    $new_poll= new polling_create;
    $new_poll->userid= Auth::user()->id;
    $new_poll->title=$data['title'];
    $content_slug= Str::slug($data['title']);
    $new_poll->slug=$content_slug;
    $new_poll->description=$data['description'];
    $new_poll->option1=$data['option1'];
    $new_poll->option2=$data['option2'];
    $new_poll->option3=$data['option3'];
    $new_poll->option4=$data['option4'];
    $new_poll->save();

    $poll = DB::getPdo()->lastInsertId();

    $poll_result= new poll_ans;
    $poll_result->userid=$user_id;
    $poll_result->poll_Que_id=$poll;
    $poll_result->name=Auth::user()->name;
    $poll_result->selected_option=0;
    $poll_result->save();

        return view('dashboard',['myuser'=>$user_detail,'poll_data'=>$poll_table]);
    }

    public function poll__detail(Request $request,$id=""){
        $user_detail = Auth::user();
        $poll_detail=polling_create::where('id', $id)->firstOrFail();
        $poll_table= polling_create::all();
        return view('poll_detailpage',['myuser'=>$user_detail,'poll_data'=>$poll_detail]);
    }

    public function poll_result_save(Request $request,$id=""){
        $data=$request->all();
     
        $poll_result= new poll_ans;
        $poll_result->userid=Auth::user()->id;
        $poll_result->poll_Que_id=$id;
        $poll_result->name=Auth::user()->name;
        $poll_result->selected_option=$data['selected_option'];
        $poll_result->save();
        $user_detail = Auth::user();
        $poll_table= polling_create::all();
        return view('dashboard',['myuser'=>$user_detail,'poll_data'=>$poll_table]);
    }
    public function poll_history(Request $request){
        $user_id = Auth::user()->id;
        $user_detail = Auth::user();
        $poll_detail=polling_create::where('userid', $user_id)->get();   
        // print_r($poll_detail);die;
        // $poll_table= polling_create::all();
        return view('history_page',['myuser'=>$user_detail,'poll_datas'=>$poll_detail]);
    }
    

}
