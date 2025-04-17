<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
 
    public function index()
 
    {
 
        return view('welcome');
 
    }
 
    public function admin_dashboard()
 
    {
 
        return view('admin_dashboard');
 
    }
    public function election_dashboard()
 
    {
 
        return view('election_dashboard');
 
    }
    public function results_dashboard()
 
    {
 
        return view('results_dashboard');
 
    }
    public function candidates_dashboard()
 
    {
 
        return view('candidates_dashboard');
 
    }
    public function voters_dashboard()
 
    {
 
        return view('voters_dashboard');
 
    }
    public function candidacy()
 
    {
 
        return view('candidacy');
 
    }
    public function add_voters()
 
    {
 
        return view('add_voters');
 
    }
    
}
