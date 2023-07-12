<?php

namespace App\Http\Controllers\web;

use App\AcademicLevel;
use App\Deadline;
use App\Fare;
use App\Http\Controllers\Controller;
use App\Mail\QueryAdminMail;
use App\Mail\QueryMail;
use App\PaperType;
use App\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index(){

        $paperTypes = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::all();
// return true;
        return view('home', compact('paperTypes', 'academic_levels', 'deadlines'));
    }
    public function reviews()
    {
        return view('pages.reviews');
    }
    public function getFare(Request $request)
    {
        return Fare::where(['academic_level_id' => $request->academic_level_id, 'deadline_id' => $request->deadline_id])->firstOrFail();
    }

    public function about(){

        // dd(addCurrency(4));
        return view('pages.about');
    }
    public function queryStore( Request $request){
        // dd($request);
        $query =  Query::create($request->all());
        // return $query->deadlineName;
        // Send mail to user
       Mail::to($query->email)->send(new QueryMail($query));
        // Send mail to admin
       Mail::to(config('app.mail_address'))->send(new QueryAdminMail($query));
       return response()->json(['success' => "Thank you for showing your intrest, We've received your query successfully."]);


        // return redirect()->back()->withSuccess("Thank you for showing your intrest, We've receive your query successfully.");

    }

}
