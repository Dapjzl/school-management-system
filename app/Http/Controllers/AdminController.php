<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\employee;
use App\Models\Hostel;
use App\Models\Book;
use App\Models\Assignment;
use App\Models\Designation;
use App\Models\Holiday;
use App\Models\News;
use App\models\Notice;
use App\Models\Leaveapplication;
use App\Models\Complain;
use App\Models\Department;
use App\Models\Section;
use App\Models\Syllabus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    //
    public function index()
    {
        if(Auth::user()->utype=="ADM"){
            return view('dashboard.index');
        }
        elseif(Auth::user()->utype=="STD"){
            return view('dashboard.student');
        }

    }
    public function lecturer()
    {
        return view('dashboard.lecturer.index');
    }
    public function student()
    {
        return view('dashboard.student.index');
    }
    public function registered()
    {
        $regs = Student::all();
        return view('dashboard.student.registered',['regs'=>$regs] );
    }
    public function prospective()
    {
        $pros = Student::all();
        return view('dashboard.student.prospective', ['pros'=>$pros]);
    }
    public function staff()
    {
        return view('dashboard.staff.index');
    }
    public function department()
    {
        $departments = Department::all();
        return view('dashboard.department.index', ['departments'=>$departments]);
    }
    public function course()
    {
        $courses = Course::all();
        $lecturers = employee::where('emp_type', 'LEC')->get();
        return view('dashboard.course.index', ['courses'=>$courses, 'lecturers'=>$lecturers]);
    }
    public function library()
    {
        return view('dashboard.library.index');
    }
    public function librarymembers()
    {
        return view('dashboard.library.members');
    }
    public function book()
    {
        $books = Book::all();
        return view('dashboard.library.book', ['books'=>$books]);
    }
    public function issue(){
        return view('dashboard.library.issue');
    }
    public function ebook(){
        return view('dashboard.library.ebook');
    }
    public function holiday()
    {
        $holidays = Holiday::all();
        return view('dashboard.announcement.holiday', ['holidays'=>$holidays]);
    }
    public function identitycard()
    {
        $pros = Student::all();
        return view('dashboard.identitycard.index', ['pros'=>$pros]);
    }
    public function accounting()
    {
        return view('dashboard.account.index');
    }
    public function announcement()
    {
        return view('dashboard.announcement.index');
    }
    public function notice()
    {
        $notices = Notice::all();
        return view('dashboard.announcement.notice', ['notices'=>$notices]);
    }
    public function news()
    {
        $news = News::all();
        return view('dashboard.announcement.news', ['news'=>$news]);
    }
    public function assignment()
    {
        $assignments = Assignment::all();
        return view('dashboard.assignment.index', ['assignments'=>$assignments]);
    }
    public function attendance()
    {
        return view('dashboard.attendance.index');
    }
    public function certificate()
    {
        return view('dashboard.certificate.index');
    }
    public function class()
    {
        return view('dashboard.class.index');
    }
    public function routine()
    {
        return view('dashboard.class.routine');
    }
    public function complain()
    {
        $complains = Complain::all();
        return view('dashboard.complain.index', ['complains'=>$complains]);
    }
    public function event()
    {
        return view('dashboard.event.index');
    }
    public function exam()
    {
        return view('dashboard.exam.index');
    }
    public function examattendance()
    {
        return view('dashboard.exam.attendance');
    }
    public function exammark()
    {
        return view('dashboard.exam.mark');
    }
    public function examschedule()
    {
        return view('dashboard.exam.schedule');
    }
    public function examsuggestion()
    {
        return view('dashboard.exam.suggestion');
    }
    public function frontoffice()
    {
        return view('dashboard.frontoffice.index');
    }
    public function frontend()
    {
        return view('dashboard.frontend');
    }
    public function generatecard()
    {
        return view('dashboard.generatecard');
    }
    public function guardian()
    {
        return view('dashboard.guardian');
    }
    public function hostel()
    {
        $hostels = Hostel::all();
        return view('dashboard.hostel.index', ['hostels'=> $hostels]);
    }
    public function humanresources()
    {
        return view('dashboard.humanresources');
    }
    public function transcript()
    {
        return view('dashboard.student.transcript');
    }
    public function leave()
    {
        $leaves = Leaveapplication::all();
        return view('dashboard.humanresources.leave', ['leaves'=>$leaves]);
    }
    public function mailandsms()
    {
        return view('dashboard.mailandsms');
    }
    public function material()
    {
        return view('dashboard.material');
    }
    public function mediagallery()
    {
        return view('dashboard.mediagallery');
    }
    public function message()
    {
        return view('dashboard.message');
    }
    public function payroll()
    {
        return view('dashboard.report.payroll');
    }
    public function profile()
    {
        $eml = Auth::user()->email;
        $usr = Student::where('email', $eml)->first();
        return view('dashboard.profile.index', ['user' => $usr]);
    }
    public function report()
    {
        return view('dashboard.report');
    }
    public function section()
    {
        $sections = Section::all();
        return view('dashboard.section.index', ['sections'=>$sections]);
    }
    public function subject()
    {
        return view('dashboard.subject');
    }
    public function syllabus()
    {
        $syllabi = Syllabus::all();
        return view('dashboard.syllabus.index', ['syllabi'=>$syllabi]);
    }
    public function transport()
    {
        return view('dashboard.transport');
    }
    public function employee()
    {
        $emps = employee::all();
        return view('dashboard.humanresources.employee', ['emps'=>$emps]);
    }
    public function designation()
    {
        $dsgs = Designation::all();
        return view('dashboard.humanresources.designation', ['dsgs'=>$dsgs]);
    }
    public function expenditure()
    {
        return view('dashboard.report.expenditure');
    }
    public function activity()
    {
        return view('dashboard.report.activity');
    }
    public function income()
    {
        return view('dashboard.report.income');
    }
    public function duefee()
    {
        return view('dashboard.report.duefee');
    }
    public function duebalance()
    {
        return view('dashboard.report.duebalance');
    }
    public function attendancereport()
    {
        return view('dashboard.report.attendancereport');
    }
    public function examreport()
    {
        return view('dashboard.report.examreport');
    }
    public function libraryreport()
    {
        return view('dashboard.report.libraryreport');
    }
    public function studentreport()
    {
        return view('dashboard.report.studentreport');
    }
    public function lecturerreport()
    {
        return view('dashboard.report.lecturers');
    }
    public function transactions()
    {
        return view('dashboard.report.transactions');
    }
    public function transportroute()
    {
        return view('dashboard.report.transactions');
    }
    public function transportmember()
    {
        return view('dashboard.report.transactions');
    }
    public function transportvehicles()
    {
        return view('dashboard.report.transactions');
    }

    public function updateprofile()
    {
        return view('dashboard.profile.updateprofile');
    }















}
