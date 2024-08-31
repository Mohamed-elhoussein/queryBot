<?php

namespace App\Http\Controllers;

use App\Models\CallLog;

use App\Models\AgentPerformance;
use App\Models\TargetAchievement;
use App\Http\Requests\handleQueryRequest;

class QueryBotController extends Controller
{
    public function handleQuery(handleQueryRequest $request)
    {
        $query = strtolower($request->input('query'));
        $response = [];

        if (strpos($query, 'call logs') !== false) {
            $response['call_logs'] = CallLog::all();
        } elseif (strpos($query, 'agent performance') !== false) {
            $response['agent_performance'] = AgentPerformance::all();
        } elseif (strpos($query, 'targets and achievements') !== false) {
            $response['targets_achievements'] = TargetAchievement::all(); // Add more logic as needed
        } else {
            return response()->json(['error' => 'Invalid query'], 400);
        }

        
        return response()->json($response);
    }
}
