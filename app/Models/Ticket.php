<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable  = [
        "user_id",
        "agent_id",
        "title",
        "description",
        "status"
    ];
}
