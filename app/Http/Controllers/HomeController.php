<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Testimonial;
use App\Models\Experience;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with all portfolio data.
     */
    public function index()
    {
        $projects = Project::latest()->get();
        $testimonials = Testimonial::latest()->get();
        $experiences = Experience::orderBy('start_date', 'desc')->get();

        return view('home.index', compact('projects', 'testimonials', 'experiences'));
    }
}
