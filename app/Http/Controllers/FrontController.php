<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAppointmentRequest;
use App\Models\Appointment;
use App\Models\CompanyAbout;
use App\Models\CompanyStatistic;
use App\Models\HeroSection;
use App\Models\OurPrinciple;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\Testimonial;
use DB;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index(){
        $statistics =  CompanyStatistic::orderByDesc('id')->take(4)->get();
        $principles =  OurPrinciple::orderByDesc('id')->take(4)->get();
        $products = Product::orderByDesc('id')->take(3)->get();
        $teams = OurTeam::orderByDesc('id')->take(7)->get();
        $testimonials = Testimonial::orderByDesc('id')->take(4)->get();
        $hero_sections = HeroSection::orderByDesc('id')->take(1)->get();
        return view('front.index', compact('statistics', 'principles', 'products', 'teams', 'testimonials', 'hero_sections'));
    }

    public function team(){
        $teams = OurTeam::take(7)->get();
        $statistics =  CompanyStatistic::orderByDesc('id')->take(4)->get();
        return view('front.team', compact('teams', 'statistics'));
    }
    public function about(){
        $statistics =  CompanyStatistic::orderByDesc('id')->take(4)->get();
        $abouts = CompanyAbout::take(2)->get();

        return view('front.about', compact('statistics', 'abouts'));
    }

    public function appointment(){
        $testimonials = Testimonial::orderByDesc('id')->take(4)->get();
        $products = Product::take(3)->get();
        return view('front.appointment', compact('testimonials', 'products'));
    }

    public function appointment_Store(StoreAppointmentRequest $request){
        DB::transaction(function () use($request){
            $validated = $request->validated();
            $newAppointment = Appointment::create($validated);
        });
        return redirect()->route('front.index');
    }
}
