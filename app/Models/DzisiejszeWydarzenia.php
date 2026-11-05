<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Table(name: 'dzisiejsze_wydarzenia', timestamps: false)]
#[Fillable(['dane', 'dzien_wydarzenia'])]
class DzisiejszeWydarzenia extends Model
{
    protected function casts(): array {

        return [ 
            'dane' => 'array', 
        ];

    }

    public static function pokazDzisiejszeWydarzenia() {
        return DzisiejszeWydarzenia::where('dzien_wydarzenia', today('Europe/Warsaw')->toDateString())->limit(1)->get();
    }
}
