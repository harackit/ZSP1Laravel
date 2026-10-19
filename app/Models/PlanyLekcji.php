<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Table(name: 'plany_lekcji', timestamps: false)]
#[Fillable(['klasa', 'url_zdjecia'])]
class PlanyLekcji extends Model
{
    public static function wszystkiePlany()
    {
        return PlanyLekcji::all();
    }
}
