<?php

namespace App\Http\Controllers;

use App\Models\CallLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CallLogController extends Controller
{
    public function index(Request $request)
    {
        $query = CallLog::query();

        if ($request->has('agent_id')) {
            $query->where('agent_id', $request->input('agent_id'));
        }

        if ($request->has('status')) {
            $query->where('status', $request->input('status'));
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

        if ($request->has('between')) {
            $query->whereBetween('created_at', [$startDate, $endDate]);


        }


        $callLogs = $query->paginate(50);;

        if ($callLogs->isEmpty()) {
            return response()->json(['message' => 'No call logs found'], 404);
        }




        foreach ($callLogs as $log) {
            if (!Gate::allows('view-call-log', $log)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Unauthorized to view some call logs.'
                ], 403);
            }else{
                return response()->json([
                'status' => 'success',
                'data' => $callLogs
                ]);

            }
        }



    }
}
