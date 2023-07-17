<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manager extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "manager";
    protected $fillable = [
        'name',
        'email',
        "nip",
        "place_of_birth",
        "day_of_birth",
        "status",
        "nidn",
        "file",
        "manager",
        "university"
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];
}
