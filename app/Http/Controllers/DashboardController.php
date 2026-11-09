<?php

namespace App\Http\Controllers;

use App\Models\Informacje;
use App\Models\PlanyLekcji;
use App\Models\Wydarzenia;
use App\Models\Zastepstwa;
use App\Models\ZblizajaceWydarzenia;

class DashboardController extends Controller
{
    public function showDashboard()
    {

        $wydarzenia_galeria = Wydarzenia::pokazWydarzenia();
        $plany_lekcji = PlanyLekcji::pokazPlany();
        $zastepstwo_dzis = Zastepstwa::pokazZastepstwoNaDzis();
        $zastepstwo_jutro = Zastepstwa::pokazZastepstwoNaJutro();
        $zblizajace_wydarzenia_tabelka = ZblizajaceWydarzenia::pokazZblizajaceWydarzenia();
        $wazne_informacje = Informacje::pokazWazneInformacje();

        return view('dashboard', compact(
            'wydarzenia_galeria', 
            'plany_lekcji', 
            'zastepstwo_dzis',
            'zastepstwo_jutro',
            'zblizajace_wydarzenia_tabelka', 
            'wazne_informacje'
            ));
    }
}