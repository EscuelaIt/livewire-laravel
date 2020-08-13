<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $fillable = ['name', 'category', 'repo', 'uri', 'country'];
}
