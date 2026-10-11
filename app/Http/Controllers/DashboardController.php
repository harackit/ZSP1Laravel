<?php

namespace App\Http\Controllers;

use App\Models\Wydarzenia;

class DashboardController extends Controller
{
    public function showDashboard()
    {

        $wydarzenia = Wydarzenia::ostatnieWydarzenia();

        return view('dashboard', compact('wydarzenia'));
    }
}