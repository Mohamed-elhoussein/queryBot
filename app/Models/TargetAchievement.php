<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetAchievement extends Model
{
    use HasFactory;
    protected $fillable = ['agent_id', 'target', 'achieved'];
}
