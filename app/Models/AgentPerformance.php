<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentPerformance extends Model
{
    use HasFactory;
    protected $fillable = [
        'agent_id',
        'total_calls',
        'deals_made',
        'booked_calls',
        'average_call_duration'
        ];

}
