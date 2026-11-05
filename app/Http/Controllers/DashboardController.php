<?php

namespace App\Http\Controllers;

use App\Models\DzisiejszeWydarzenia;
use App\Models\PlanyLekcji;
use App\Models\Wydarzenia;
use App\Models\Zastepstwa;

class DashboardController extends Controller
{
    public function showDashboard()
    {

        $wydarzenia_galeria = Wydarzenia::pokazWydarzenia();
        $planyLekcji = PlanyLekcji::pokazPlany();
        $zastepstwo = Zastepstwa::pokazDzisiejszeZastepstwo();
        $dzisiejszeWydarzeniaTabelka = DzisiejszeWydarzenia::pokazDzisiejszeWydarzenia();

        return view('dashboard', compact('wydarzenia_galeria', 'planyLekcji', 'zastepstwo', 'dzisiejszeWydarzeniaTabelka'));
    }
}