<?php

namespace Algowrite\LaravelHelpCenter\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaravelHelpCenterModel extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
}