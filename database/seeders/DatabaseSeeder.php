<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CallLog;
use Illuminate\Database\Seeder;
use App\Models\AgentPerformance;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::create([
        //     'name' => 'Mohamed',
        //     'email' => 'Mohamed@example.com',
        //     "password"=>12345678,
        // ]);

        CallLog::create([
            'agent_id' => 3,
            "call_time"=>" 2024-08-25",
            'duration' => 280,
            "status"=>"answered",
        ]);

        // AgentPerformance::create([
        //     'agent_id' => '1',
        //     'total_calls' => 3,
        //     'deals_made' => 10,
        //     'booked_calls' => 7,
        //     'average_call_duration' => 4.7,

        // ]);
    }
}
