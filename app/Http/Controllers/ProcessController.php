<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use App\Models\Student;
use App\Models\employee;
use App\Models\Designation;
use App\Models\Hostel;
use Illuminate\Http\Request;
use App\Models\Leaveapplication;
use App\Models\Leavetype;
use App\Models\Book;
use App\Models\Assignment;
use App\Models\Holiday;
use App\Models\News;
use App\Models\Complain;
use App\Models\Notice;
use App\Models\Syllabus;
use App\Models\Section;
use App\Models\Department;
use Illuminate\Support\Facades\Hash;

class ProcessController extends Controller
{
    //Process new student
    public function addProspect(Request $request)
    {
        $request->validate([
            'course' => 'required',
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'NIN' => 'required|',
            'phone' => 'required',
            'email' => 'required',
            'admitDate' => 'required',
            'admitNo' => 'required',
            'religion' => 'required',
            'passport' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'pfirstname' => 'required|min:3',
            'plastname' => 'required|min:3',
            'pdate_of_birth' => 'required',
            'pgender' => 'required',
            'pphone' => 'required',
            'pprofession' => 'required',
            'paddress' => 'required',
            'stype' => 'required',
            'sclass' => 'required',
            'nationality' => 'required',
            'state' => 'required',
            'address' => 'required',
            'postal' => 'required',
            'ssection' => 'required',
            'sgroup' => 'required',
            'lga' => 'required',
            'rollno' => 'required',
            'regno' => 'required',
            'transfercert'  => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $STD = new student();
        $STD->firstname= $request->input('firstname');
        $STD->lastname= $request->input('lastname');
        $STD->dob= $request->input('date_of_birth');
        $STD->gender= $request->input('gender');
        $STD->NIN= $request->input('NIN');
        $STD->phone= $request->input('phone');
        $STD->email= $request->input('email');
        $STD->admitdate= $request->input('admitDate');
        $STD->admitno= $request->input('admitNo');
        $STD->religion= $request->input('religion');
        $STD->student_img= $request->input('passport');
        $STD->parentfirst= $request->input('pfirstname');
        $STD->parentlast= $request->input('plastname');
        $STD->parentdob= $request->input('pdate_of_birth');
        $STD->parentphone= $request->input('pphone');
        $STD->parentprof= $request->input('pprofession');
        $STD->first_choice= $request->input('course'); //Course of Study
        $STD->parentaddr= $request->input('paddress');
        $STD->guarfirst= $request->input('guardfname');
        $STD->guarlast= $request->input('guardlname');
        $STD->guardob= $request->input('gdate_of_birth');
        $STD->guarphone= $request->input('gphone');
        $STD->guarprof= $request->input('gprofession');
        $STD->guargender= $request->input('ggender');
        $STD->guaradd= $request->input('gaddress');
        $STD->studtype= $request->input('stype');
        $STD->class= $request->input('sclass');
        $STD->section= $request->input('ssection');
        $STD->group= $request->input('sgroup');
        $STD->rollno= $request->input('rollno');
        $STD->regno= $request->input('regno');
        $STD->discount= $request->input('discount');
        $STD->seclang= $request->input('slanguage');
        $STD->prevschool= $request->input('prevschool');
        $STD->prevclass= $request->input('prevclass');
        $STD->transfercertificate= $request->input('transfercert');
        $STD->address= $request->input('address');
        $STD->postal= $request->input('postal');
        $STD->nationality= $request->input('nationality');
        $STD->state= $request->input('state');
        $STD->lga= $request->input('lga');
        $STD->bsc= $request->input('bsc');
        $STD->waec= $request->input('waec');
        $STD->status= "Active";

        if($request->hasFile('passport'))
        {
            $file = $request->file('passport');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'.$extension;
            $file->move('uploads/user/', $filename);//move file to uploads/listings directory
            $STD->student_img = 'uploads/user/'.$filename;
        }
        if($request->hasFile('transfercert'))
        {
            $file = $request->file('transfercert');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'.$extension;
            $file->move('uploads/transfer/', $filename);//move file to uploads/listings directory
            $STD->transfercertificate = 'uploads/transfer/'.$filename;
        }
        if($request->hasFile('bsc'))
        {
            $file = $request->file('bsc');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'.$extension;
            $file->move('uploads/bsc/', $filename);//move file to uploads/listings directory
            $STD->bsc = 'uploads/bsc/'.$filename;
        }
        if($request->hasFile('waec'))
        {
            $file = $request->file('waec');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'.$extension;
            $file->move('uploads/waec/', $filename);//move file to uploads/listings directory
            $STD->waec = 'uploads/waec/'.$filename;
        }

        $STD->save();

        $utype = "STD";
        $password = "password";
        $usr = new User();
        $usr->firstname= $request->input('firstname');
        $usr->lastname= $request->input('lastname');
        $usr->email= $request->input('email');
        $usr->phone= $request->input('phone');
        $usr->utype= $utype;
        $usr->password= Hash::make($password);

        $usr->save();


        //$listing->save(); ...save to database
        session()->flash('success', 'Your application Successful');
        return redirect('/system/prospective');
    }

    //Process New Staff
    public function addStaff(Request $request)
    {
        $request->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'department' => 'required',
            'phone' => 'required',
            'national_id' => 'required',
            'designation' => 'required',
            'address' => 'required',
            'email' => 'required',
            'salary_pay_grade' => 'required',
            'salary_type' => 'required',
            'religion' => 'required',
            'role' => 'required',
            'degree' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
            'resume' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        $emp = new employee();
        $emp->firstname = $request->input('firstname');
        $emp->lastname = $request->input('lastname');
        $emp->department = $request->input('department');
        $emp->gender = $request->input('gender');
        $emp->NIN = $request->input('national_id');
        $emp->dob = $request->input('date_of_birth');
        $emp->phone = $request->input('phone');
        $emp->address = $request->input('address');
        $emp->designation = $request->input('designation');
        $emp->email = $request->input('email');
        $emp->salary_grade = $request->input('salary_pay_grade');
        $emp->salary_type = $request->input('salary_type');
        $emp->religion = $request->input('religion');
        $emp->emp_type = $request->input('role');
        $emp->degree = $request->input('degree');
        $emp->resume = $request->input('resume');

        //upload degree
        if($request->hasFile('degree'))
        {
            $file = $request->file('degree');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'.$extension;
            $file->move('uploads/bsc/', $filename);//move file to uploads/listings directory
            $emp->degree = 'uploads/bsc/'.$filename;
        }

        if($request->hasFile('resume'))
        {
            $file = $request->file('resume');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'.$extension;
            $file->move('uploads/bsc/', $filename);//move file to uploads/listings directory
            $emp->resume = 'uploads/bsc/'.$filename;
        }

        $emp->save();


        $usr = new User();
        $usr->firstname= $request->input('firstname');
        $usr->lastname= $request->input('lastname');
        $usr->email= $request->input('email');
        $usr->phone= $request->input('phone');
        $usr->utype= $request->input('role');
        $usr->password= Hash::make($request->input('password'));

        $usr->save();

        //$listing->save(); //save to database
        session()->flash('success', 'Your application Successful');
        return redirect('/system/employee');


    }


     //Process Designation
     public function addDesignation(Request $request)
     {
         $request->validate([
            'designation_note' => 'required',
            'designation_message' => 'required',
         ]);

         $dsg = new Designation();
         $dsg->designation_note= $request->input('designation_note');
         $dsg->designation_message= $request->input('designation_message');

         $dsg->save();

        //$listing->save(); //save to database
        session()->flash('success', 'Designation type created successfully');
        return redirect('/system/designation');
     }

     public function addLeavetype(Request $request)
     {
         $request->validate([
            'leave_name' => 'required'
         ]);

        //  dd($request);

         $leavetype = new Leavetype();
         $leavetype->leavename= $request->input('leave_name');

         $leavetype->save();

        //$listing->save(); //save to database
        session()->flash('success', 'Leave type created successfully');
        return redirect('/system/leave');
     }

    public function addLeaveapp(Request $request)
    {
        $request->validate([
            'applicationType' =>'required',
            'applicant' =>'required',
            'leaveType' =>'required',
            'leaveFrom' =>'required',
            'leaveTo' =>'required',
            'leaveReason' =>'required'
        ]);


        $leaveApp = new Leaveapplication();
        $leaveApp->applicantType= $request->input('applicationType');
        $leaveApp->applicant= $request->input('applicant');
        $leaveApp->leaveType= $request->input('leaveType');
        $leaveApp->leaveFrom= $request->input('leaveFrom');
        $leaveApp->leaveTo= $request->input('leaveTo');
        $leaveApp->status= "Pending";
        $leaveApp->leaveReason= $request->input('leaveReason');
        $leaveApp->leaveAttach= $request->input('attach');

        if($request->hasFile('attach'))
        {
            $file = $request->file('attach');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'.$extension;
            $file->move('uploads/leaveapp/', $filename);//move file to uploads/listings directory
            $leaveApp->leaveAttach = 'uploads/leaveapp/'.$filename;
        }
        // dd($leaveApp);
        $leaveApp->save();

        //$listing->save(); //save to database
        session()->flash('success', 'Leave application has been submitted successfully');
        return redirect('/system/leave');
    }

    public function addSchedule(Request $request)
    {
         $request->validate([
            'exam_type' =>'required',
            'class' =>'required',
            'subject' =>'required',
            'exam_date' =>'required',
            'start_time' =>'required',
            'end_time' =>'required',
            'room_no' =>'required',
            'note' =>'required'
        ]);

    }

    public function addSuggestion(Request $request)
    {
        $request->validate([
            'suggestion_title' =>'required',
            'exam' =>'required',
            'class' =>'required',
            'subject' =>'required',
            'suggestion' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
            'note' =>'required',
        ]);
    }

    public function addSection(Request $request)
    {
        $request->validate([
            'section_name' => 'required',
            'class' => 'required',
            'lecturer' => 'required',
            'note' => 'required',
        ]);
        $sections = new Section();
        $sections->section_name=$request->input('section_name');
        $sections->class=$request->input('class');
        $sections->lecturer=$request->input('lecturer');
        $sections->note=$request->input('note');

        $sections->save();
        session()->flash('success', 'Section has been created successfully');
        return redirect('/system/section');

    }
    public function addSyllabus(Request $request)
    {
        $request->validate([
            'syllabus_title' => 'required',
            'class' => 'required',
            'subject' => 'required',
            'syllabus' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'note' => 'required',
        ]);
        $syllabi = new Syllabus();
        $syllabi->title=$request->input('title');
        $syllabi->class=$request->input('class');
        $syllabi->subject=$request->input('subject');
        $syllabi->syllabus=$request->input('syllabus');
        $syllabi->note=$request->input('note');

        if($request->hasFile('syllabus'))
        {
            $file = $request->file('syllabus');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'.$extension;
            $file->move('uploads/syllabi/', $filename);//move file to uploads/listings directory
            $syllabi->assignment = 'uploads/syllabi/'.$filename;
        }
        $syllabi->save();
        session()->flash('success', 'Syllabus has been created successfully');
        return redirect('/system/syllabus');
    }
    public function addDepartment(Request $request)
    {
        $request->validate([
            'department_name' => 'required',
            'department_id' => 'required',
        ]);
        $department = new Department();
        $department->department_name=$request->input('department_name');
        $department->department_id=$request->input('department_id');

        $department->save();
        session()->flash('success', 'Department has been created successfully');
        return redirect('/system/department');
    }
    public function addAssignment(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'class' => 'required',
            'subject' => 'required',
            'deadline' => 'required',
            'assignment' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'note' => 'required',
        ]);
        $assignment = new Assignment();
        $assignment->title=$request->input('title');
        $assignment->class=$request->input('class');
        $assignment->subject=$request->input('subject');
        $assignment->deadline=$request->input('deadline');
        $assignment->assignment=$request->input('assignment');
        $assignment->note=$request->input('note');

        if($request->hasFile('assignment'))
        {
            $file = $request->file('assignment');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'.$extension;
            $file->move('uploads/assignments/', $filename);//move file to uploads/listings directory
            $assignment->assignment = 'uploads/assignments/'.$filename;
        }
        $assignment->save();
        session()->flash('success', 'Assignment has been created successfully');
        return redirect('/system/assignment');
    }
    
    public function addHostel(Request $request)
    {
        $request->validate([
            'hostel_name' => 'required',
            'hostel_type' => 'required',
            'address' => 'required',
            'note' => 'required',
        ]);
        $hostel = new Hostel();
        $hostel->name=$request->input('hostel_name');
        $hostel->type=$request->input('hostel_type');
        $hostel->address=$request->input('address');
        $hostel->note=$request->input('note');

        $hostel->save();
        session()->flash('success', 'Hostel has been created successfully');
        return redirect('/system/hostel');
    }

    public function addCourse(Request $request)
    {
        $request->validate([
            'course' => 'required',
            'course_code'  => 'required',
            'unit'  => 'required'
        ]);
        $course = new Course();
        $course->course = $request->input('course');
        $course->title = $request->input('course_code');
        $course->unit = $request->input('unit');
        $course->description = $request->input('description');
        $course->lecturer = $request->input('lecturer');

        $course->save();
        session()->flash('success', 'Course has been created successfully');
        return redirect('/system/course');
    }
    public function addHoliday(Request $request)
    {
        $request->validate([
            'holiday_title' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'note' => 'required'
        ]);
        $holiday = new Holiday();
        $holiday->holiday_title = $request->input('holiday_title');
        $holiday->from_date = $request->input('from_date');
        $holiday->to_date = $request->input('to_date');
        $holiday->note = $request->input('note');

        $holiday->save();
        session()->flash('success', 'Holiday has been created successfully');
        return redirect('/system/holiday');
    }
    public function addNews(Request $request)
    {
        $request->validate([
            'news_title' => 'required',
            'date' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'note' => 'required'
        ]);
        $news = new News();
        $news->news_title = $request->input('news_title');
        $news->date = $request->input('date');
        $news->img = $request->input('img');
        $news->note = $request->input('note');

        $news->save();
        session()->flash('success', 'News has been created successfully');
        return redirect('/system/news');
    }
    public function addNotice(Request $request)
    {
        $request->validate([
            'notice_title' => 'required',
            'date' => 'required',
            'notice_for' => 'required',
            'note'=> 'required'
        ]);
        $notices = new Notice();
        $notices->notice_title = $request->input('notice_title');
        $notices->date = $request->input('date');
        $notices->notice_for = $request->input('notice_for');
        $notices->note = $request->input('note');

        $notices->save();
        session()->flash('success', 'Notice has been created successfully');
        return redirect('/system/notice');
    }
    public function addCertificate(Request $request)
    {
        $request->validate([
            'certificate_name' => 'required',
            'school_name' => 'required',
            'certificate_text' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    }
    public function addComplain(Request $request)
    {
        $request->validate([
            'cuser_type' => 'required',
            'complain_type' => 'required',
            'complain_date' => 'required',
            'complain' => 'required',
        ]);
        $complains = new Complain();
        $complains->cuser_type = $request->input('cuser_type');
        $complains->complain_type = $request->input('complain_type');
        $complains->complain_date = $request->input('complain_date');
        $complains->complain = $request->input('complain');

        $complains->save();
        session()->flash('success', 'Complain has been created successfully');
        return redirect('/system/complain');
    }
    public function addBook(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'bookid' => 'required',
            'isbn' => 'required',
            'edition' => 'required',
            'author' => 'required',
            'language' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'almira' => 'required',
            'cover' => 'required|mimes:pdf,jpeg,png,jpg|max:3072',
        ]);
        $book = new book();
        $book->title= $request->input('title');
        $book->bookid= $request->input('bookid');
        $book->isbn= $request->input('isbn');
        $book->edition= $request->input('edition');
        $book->author= $request->input('author');
        $book->language= $request->input('language');
        $book->price= $request->input('price');
        $book->quantity= $request->input('quantity');
        $book->almira= $request->input('almira');
        $book->cover= $request->input('cover');


        if($request->hasFile('cover'))
        {
            $file = $request->file('cover');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'.$extension;
            $file->move('uploads/book/', $filename);//move file to uploads/listings directory
            $book->cover = 'uploads/book/'.$filename;
        }
        // dd($book);
        $book->save();

        //$listing->save(); //save to database
        session()->flash('success', 'Book has been submitted successfully');
        return redirect('/system/book');
    }
}
