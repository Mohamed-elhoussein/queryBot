<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TargetAchievement;

class TargetAchievementController extends Controller
{
    public function index(Request $request)
    {
        $query = TargetAchievement::query();

        if ($request->has('agent_id')) {
            $query->where('agent_id', $request->input('agent_id'));
        }

        if ($request->has('time')) {
            $query->whereTime('created_at', $request->input('time'));//date('H:m:s')

        }

        if ($request->has('day')) {
            $query->whereDay('created_at', $request->input('day'));//date('d')

        }


        if ($request->has('month')) {
            $query->whereMonth('created_at', $request->input('month'));//date('M')

        }


        if ($request->has('year')) {
            $query->whereYear('created_at', $request->input('year'));//date('Y')

        }

        $achievements = $query->get();

        if ($achievements->isEmpty()) {
            return response()->json(['message' => 'No achievements found'], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $achievements
        ]);
    }
}
