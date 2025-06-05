<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
     protected $table='jobes';
    protected $fillable=[
        'name',
        'email',
        'phone',
        'file_upload',
        'coverletter'
    ];
}
