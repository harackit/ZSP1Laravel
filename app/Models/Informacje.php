<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table(name: 'informacje', timestamps: false)]
#[Fillable(['wazne_informacje'])]
class Informacje extends Model
{
    protected function pokazWazneInformacje() {
        return Informacje::where('id', 1)->first()->get();
    }
}   
