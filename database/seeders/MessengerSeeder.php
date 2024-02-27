<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Messenger;
use App\Models\MessengerUser;
use Illuminate\Database\Seeder;

class MessengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MessengerUser::create([
            'company_id' => 1,
            'candidate_id' => 1,
            'job_id' => Job::where('company_id', 1)->first()->id,
        ]);
        MessengerUser::create([
            'company_id' => 1,
            'candidate_id' => 2,
            'job_id' => Job::where('company_id', 1)->first()->id,
        ]);

        Messenger::factory()->count(5)->create();
        // Messenger::factory()->count(500)->create();
    }
}