<?php

namespace App\Http\Controllers;

use App\Models\PlanyLekcji;
use App\Models\Wydarzenia;
use App\Models\Zastepstwa;

class DashboardController extends Controller
{
    public function showDashboard()
    {

        $wydarzenia = Wydarzenia::pokazWydarzenia();
        $planyLekcji = PlanyLekcji::pokazPlany();
        $zastepstwo = Zastepstwa::pokazDzisiejszeZastepstwo();

        return view('dashboard', compact('wydarzenia', 'planyLekcji', 'zastepstwo'));
    }
}