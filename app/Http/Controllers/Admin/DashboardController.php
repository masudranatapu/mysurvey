<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Survey;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function survey()
    {
        $survey = Survey::latest()->get();
        return view('admin.survey.index', compact('survey'));
    }
}
