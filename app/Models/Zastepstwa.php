<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Table(name: 'zastepstwa', timestamps: false)]
#[Fillable(['dzien_zastepstwa', 'url_zdjecia'])]
class Zastepstwa extends Model
{
    public static function pokazDzisiejszeZastepstwo() 
    {
        return Zastepstwa::where('dzien_zastepstwa', today('Europe/Warsaw')->toDateString())->get();
    }
}
