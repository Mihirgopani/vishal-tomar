<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationEnquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference_id',
        'name',
        'email',
        'phone',
        'practice_area',
        'court_forum',
        'message',
        'ip_address',
        'user_agent',
        'status',
    ];
}

