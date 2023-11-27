<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    //index page
    public function index()
    {
      return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function program()
    {
        return view('programme');
    }

    public function admission()
    {
        return view('admission');
    }

    public function contact()
    {
        return view('contact');
    }



    public function apply(Request $request)
    {
        $request->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'password' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'confirm_password' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date_of_birth' => 'required',
            'nationality' => 'required',
            'lga' => 'required',
            'state' => 'required',
            'postal' => 'required'
        ]);

        $em = $request->input('email');
        $check = Student::where('email', $em)->first();

        if($check){
            session()->flash('error', 'This account already exists');
            return redirect('/admissions');
        }else{
            $dt = date('Y');
        //random transfer code
        $randomString = Str::random(5);
        $string = $randomString;
        $code = "COR".$string.$dt;

        $student = new Student();
        $student->firstname= $request->input('firstname');
        $student->lastname= $request->input('lastname');
        $student->email= $request->input('email');
        $student->phone= $request->input('phone');
        $student->gender= $request->input('gender');
        $student->dob= $request->input('date_of_birth');
        $student->regno= $code;
        $student->address= $request->input('address');
        $student->state= $request->input('state');
        $student->postal= $request->input('postal_code_apply');
        $student->nationality= $request->input('nationality');
        $student->lga= $request->input('lga');
        // $student->bsc= $request->input('bsc');
        // $student->first_choice= $request->input('choice');
        // $student->waec= $request->input('waec');
        // $student->student_img= $request->input('photo');
        // $student->second_choice= $request->input('choice2');



            $student->save();



            $utype = "STD";

            $usr = new User();
            $usr->firstname= $request->input('firstname');
            $usr->lastname= $request->input('lastname');
            $usr->email= $request->input('email');
            $usr->phone= $request->input('phone');
            $usr->utype= $utype;
            $usr->password= Hash::make($request->input('password'));
            //upload user image
            // if($request->hasFile('photo'))
            // {
            //     $file = $request->file('photo');
            //     $extension = $file->getClientOriginalExtension();
            //     $filename = time(). '.'.$extension;
            //     $file->move('uploads/user/', $filename);//move file to uploads/listings directory
            //     $usr->photo = 'uploads/user/'.$filename;
            // }

            $usr->save();


        //$listing->save(); //save to database
        session()->flash('success', 'Your application Successful');
        return redirect()->route('continue', ['regno' => $code]);
        //return redirect('/continue', ['code'=>$code]);
        }


    }

    public function continueafter()
    {
        return view('continueafter');
    }

    public function continue($regno)
    {
        return view('continue', ['regno'=>$regno]);
    }


    public function continuesummary($regno)
    {
        $std = Student::where('regno', $regno)->first();
        return view('continuesummary', ['std'=>$std]);
    }

    public function updateStudent(Request $request , $regno)
    {
        $request->validate([
            'choice' => 'required',
            'photo'    => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'waec'    => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'bsc'    => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);


        $student = Student::where('regno', $regno)->first();//Student::find($regno);
        //dd($student);
        $student->first_choice =  $request->input('choice');
        $student->second_choice = $request->input('choice2');


        //upload waec result
        if($request->hasFile('waec'))
            {
                $file = $request->file('waec');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.'.$extension;
                $file->move('uploads/waec/', $filename);//move file to uploads/listings directory
                $student->waec = 'uploads/waec/'.$filename;
            }

            //upload bsc certificate
            if($request->hasFile('bsc'))
            {
                $file = $request->file('bsc');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.'.$extension;
                $file->move('uploads/bsc/', $filename);//move file to uploads/listings directory
                $student->bsc = 'uploads/bsc/'.$filename;
            }

            //upload passport
            if($request->hasFile('photo'))
            {
                $file = $request->file('photo');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.'.$extension;
                $file->move('uploads/photo/', $filename);//move file to uploads/listings directory
                $student->student_img = 'uploads/photo/'.$filename;
            }

            $student->save();
            session()->flash('success', 'Your Application Has Been Completed Successful');
            //return redirect('/');
            return redirect()->route('continuesummary', ['regno' => $regno]);

    }

    public function updateStudentAfter(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password'    => 'required|min:6'

        ]);

        $email = $request->input('email');

        $student = Student::where('email', $email)->first();//Student::find($regno);
        if(!$student){
            session()->flash('error', 'Your Account Does Not Exist');
            return redirect('/admissions');
        }else{
        $regno  =$student->regno;

        session()->flash('success', 'Your application Successful');
        return redirect()->route('continue', ['regno' => $regno]);
        }
    }
}
