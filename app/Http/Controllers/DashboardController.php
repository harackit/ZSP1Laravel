<?php

namespace App\Http\Controllers;

use App\Models\PlanyLekcji;
use App\Models\Wydarzenia;

class DashboardController extends Controller
{
    public function showDashboard()
    {

        $wydarzenia = Wydarzenia::ostatnieWydarzenia();
        $planyLekcji = PlanyLekcji::wszystkiePlany();

        return view('dashboard', compact('wydarzenia', 'planyLekcji'));
    }
}