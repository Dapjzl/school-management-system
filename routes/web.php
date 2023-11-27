<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//frontend route //FrontendController
Route::get('/', [FrontendController::class, 'index'])->name('front');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/programmes', [FrontendController::class, 'program'])->name('programmes');
Route::get('/admissions', [FrontendController::class, 'admission'])->name('admissions');
Route::get('/continue/{regno}', [FrontendController::class, 'continue'])->name('continue');
Route::get('/continueafter', [FrontendController::class, 'continueafter'])->name('continueafter');
Route::get('/continuesummary/{regno}', [FrontendController::class, 'continuesummary'])->name('continuesummary');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
//application
Route::post('/apply', [FrontendController::class, 'apply'])->name('apply');
Route::post('/updateStudent/{regno}', [FrontendController::class, 'updateStudent'])->name('updateStudent');
Route::post('/updateStudentAfter', [FrontendController::class, 'updateStudentAfter'])->name('updateStudentAfter');

//Prevent logged in user from access login or Auth pages
Route::middleware(['middleware' => 'PreventBackHistory'])->group(function() {
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' =>'system', 'middleware' =>['auth', 'PreventBackHistory']], function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/student', [AdminController::class, 'index'])->name('admin.student');
    Route::get('/lecturer', [AdminController::class, 'lecturer'])->name('dashboard.lecturer');
    // Route::get('/student', [AdminController::class, 'student'])->name('dashboard.student');
    Route::get('/staff', [AdminController::class, 'staff'])->name('dashboard.staff');
    Route::get('/department', [AdminController::class, 'department'])->name('dashboard.department');
    Route::get('/course', [AdminController::class, 'course'])->name('dashboard.course');
    Route::get('/holiday', [AdminController::class, 'holiday'])->name('dashboard.holiday');
    Route::get('/accounting', [AdminController::class, 'accounting'])->name('dashboard.accounting');
    Route::get('/attendance', [AdminController::class, 'attendance'])->name('dashboard.attendance');
    Route::get('/assignment', [AdminController::class, 'assignment'])->name('dashboard.assignment');
    Route::get('/announcement', [AdminController::class, 'announcement'])->name('dashboard.announcement');
    Route::get('/certificate', [AdminController::class, 'certificate'])->name('dashboard.certificate');
    Route::get('/class', [AdminController::class, 'class'])->name('dashboard.class');
    Route::get('/class', [AdminController::class, 'routine'])->name('dashboard.routine');
    Route::get('/complain', [AdminController::class, 'complain'])->name('dashboard.complain');
    Route::get('/event', [AdminController::class, 'event'])->name('dashboard.event');
    //Exams
    Route::get('/transcript', [AdminController::class, 'transcript'])->name('dashboard.transcript');
    Route::get('/exam', [AdminController::class, 'exam'])->name('dashboard.exam');
    Route::get('/exammark', [AdminController::class, 'exammark'])->name('dashboard.exammark');
    Route::get('/examschedule', [AdminController::class, 'examschedule'])->name('dashboard.examschedule');
    Route::get('/examsuggestion', [AdminController::class, 'examsuggestion'])->name('dashboard.examsuggestion');
    Route::get('/examresult', [AdminController::class, 'examresult'])->name('dashboard.examresult');
    Route::get('/examattendance', [AdminController::class, 'examattendance'])->name('dashboard.examattendance');
    //Students
    Route::get('/registered', [AdminController::class, 'registered'])->name('dashboard.registered');
    Route::get('/prospective', [AdminController::class, 'prospective'])->name('dashboard.prospective');
    //Section
    Route::get('/section', [AdminController::class, 'section'])->name('dashboard.section');
    //Syllabus
    Route::get('/syllabus', [AdminController::class, 'syllabus'])->name('dashboard.syllabus');
    //Hostel
    Route::get('/hostel', [AdminController::class, 'hostel'])->name('dashboard.hostel');
    //Profile
    Route::get('/profile', [AdminController::class, 'profile'])->name('dashboard.profile');
    //Human Resources
    Route::get('/employee', [AdminController::class, 'employee'])->name('dashboard.employee');
    Route::get('/designation', [AdminController::class, 'designation'])->name('dashboard.designation');
    Route::get('/leave', [AdminController::class, 'leave'])->name('dashboard.leave');
    //Front Office
    Route::get('/frontoffice', [AdminController::class, 'frontoffice'])->name('dashboard.frontoffice');
    //Reports
    Route::get('/expenditure', [AdminController::class, 'expenditure'])->name('dashboard.expenditure');
    Route::get('/activity', [AdminController::class, 'activity'])->name('dashboard.activity');
    Route::get('/income', [AdminController::class, 'income'])->name('dashboard.income');
    Route::get('/duefee', [AdminController::class, 'duefee'])->name('dashboard.duefee');
    Route::get('/duebalance', [AdminController::class, 'duebalance'])->name('dashboard.duebalance');
    Route::get('/attendancereport', [AdminController::class, 'attendancereport'])->name('dashboard.attendancereport');
    Route::get('/examreport', [AdminController::class, 'examreport'])->name('dashboard.examreport');
    Route::get('/libraryreport', [AdminController::class, 'libraryreport'])->name('dashboard.libraryreport');
    Route::get('/studentreport', [AdminController::class, 'studentreport'])->name('dashboard.studentreport');
    Route::get('/payroll', [AdminController::class, 'payroll'])->name('dashboard.payroll');
    Route::get('/lecturerreport', [AdminController::class, 'lecturerreport'])->name('dashboard.lecturerreport');
    Route::get('/transactions', [AdminController::class, 'transactions'])->name('dashboard.transactions');
    //Transport
    Route::get('/transportroute', [AdminController::class, 'transportroute'])->name('dashboard.transportroute');
    Route::get('/transportmember', [AdminController::class, 'transportmember'])->name('dashboard.transportmember');
    Route::get('/transportvehicles', [AdminController::class, 'transportvehicles'])->name('dashboard.transportvehicles');
    //Hostel
    Route::get('/hostel', [AdminController::class, 'hostel'])->name('dashboard.hostel');
    //Generate Id card
    Route::get('/identitycard', [AdminController::class, 'identitycard'])->name('dashboard.identitycard');
    //Announcement
    Route::get('/holiday', [AdminController::class, 'holiday'])->name('dashboard.holiday');
    Route::get('/notice', [AdminController::class, 'notice'])->name('dashboard.notice');
    Route::get('/news', [AdminController::class, 'news'])->name('dashboard.news');
    //Profile
    Route::post('/profile/{user}', [AdminController::class, 'profile'])->name('profile');
    Route::get('/updateprofile', [AdminController::class, 'updateprofile'])->name('dashboard.updateprofile');

    //Processing
    Route::post('/addProspect', [ProcessController::class, 'addProspect'])->name('addProspect');
    Route::post('/addStaff', [ProcessController::class, 'addStaff'])->name('addStaff');
    Route::post('/addLecturer', [ProcessController::class, 'addLecturer'])->name('addLecturer');
    Route::post('/addDesignation', [ProcessController::class, 'addDesignation'])->name('addDesignation');
    Route::post('/addLeavetype', [ProcessController::class, 'addLeavetype'])->name('addLeavetype');
    Route::post('/addLeaveapp', [ProcessController::class, 'addLeaveapp'])->name('addLeaveapp');
    Route::post('/addSchedule', [ProcessController::class, 'addSchedule'])->name('addSchedule');
    Route::post('/addSuggestion', [ProcessController::class, 'addSuggestion'])->name('addSuggestion');
    Route::post('/addSection', [ProcessController::class, 'addSection'])->name('addSection');
    Route::post('/addSyllabus', [ProcessController::class, 'addSyllabus'])->name('addSyllabus');
    Route::post('/addDepartment', [ProcessController::class, 'addDepartment'])->name('addDepartment');
    Route::post('/addAssignment', [ProcessController::class, 'addAssignment'])->name('addAssignment');
    Route::post('/addHostel', [ProcessController::class, 'addHostel'])->name('addHostel');
    Route::post('/addCourse', [ProcessController::class, 'addCourse'])->name('addCourse');
    Route::post('/addHoliday', [ProcessController::class, 'addHoliday'])->name('addHoliday');
    Route::post('/addNews', [ProcessController::class, 'addNews'])->name('addNews');
    Route::post('/addNotice', [ProcessController::class, 'addNotice'])->name('addNotice');
    Route::post('/addCertificate', [ProcessController::class, 'addCertificate'])->name('addCertificate');
    Route::post('/addComplain', [ProcessController::class, 'addComplain'])->name('addComplain');
    Route::post('/addBook', [ProcessController::class, 'addBook'])->name('addBook');

    //Library
    Route::get('/library', [AdminController::class, 'library'])->name('dashboard.library');
    Route::get('/librarymembers', [AdminController::class, 'librarymembers'])->name('dashboard.librarymembers');
    Route::get('/book', [AdminController::class, 'book'])->name('dashboard.book');
    Route::get('/ebook', [AdminController::class, 'ebook'])->name('dashboard.ebook');
    Route::get('/issue', [AdminController::class, 'issue'])->name('dashboard.issue');




});
