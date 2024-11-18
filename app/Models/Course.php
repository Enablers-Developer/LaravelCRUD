<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Course extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'course';

    protected $fillable = [
        'cid', 'cname', 'clocation', 'cfee',
    ];

}
