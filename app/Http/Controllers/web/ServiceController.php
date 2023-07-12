<?php

namespace App\Http\Controllers\web;

use App\AcademicLevel;
use App\Deadline;
use App\Http\Controllers\Controller;
use App\PaperType;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create()
    {
         $services = Service::orderBy('name', 'ASC')->get();
        // dd($services);

        return view('pages.services.index',compact('services'));
    }

    public function show($slug)
    {
        $service = Service::where(['slug' => $slug])->firstOrFail();

        $paperTypes = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::all();

        return view('pages.services.show',compact('service', 'paperTypes', 'academic_levels', 'deadlines'));
    }
}
