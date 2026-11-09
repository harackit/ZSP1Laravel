<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Table(name: 'zblizajace_wydarzenia', timestamps: false)]
#[Fillable(['dane', 'dzien_wydarzenia'])]
class ZblizajaceWydarzenia extends Model
{
    protected function casts(): array {
        return [
            'dzien_czas_wydarzenia' => 'datetime',
        ];
    }

    public static function pokazZblizajaceWydarzenia() {
        return ZblizajaceWydarzenia::where('dzien_czas_wydarzenia', '>=', today('Europe/Warsaw')->toDateString())
                                    ->orderBy('dzien_czas_wydarzenia', 'asc')
                                    ->limit(5)
                                    ->get();
    }
}
