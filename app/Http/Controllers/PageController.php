<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function HomePage(){
        return view('public.index');
    }
    public function AboutPage(){
        return view('public.about');
    }
    public function ContactPage(){
        return view('public.contact');
    }
    public function JobListPage(){
        return view('public.job-list');
    }
    public function JobDetailsPage(){
        return view('public.job-detail');
    }
    public function CategoryPage(){
        return view('public.category');
    }
    public function TestimonialPage(){
        return view('public.testimonial');
    }
}
