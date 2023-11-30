<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class club_std_details extends Model
{
    use HasFactory;

    protected $fillable = [
        'std_no',
        'name',
        'email',
        'phone',
        'department',
        'club_id',
    ];
}
