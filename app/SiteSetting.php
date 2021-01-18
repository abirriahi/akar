<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected  $table = "akarsitesetting";

    protected $fillable = [
        'slug', 'namesetting', 'value', 'type',
    ];
}
