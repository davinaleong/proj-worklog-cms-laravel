<?php

use Faker\Factory;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Log;
use App\LogEntry;
use App\EntryItem;

class WorkLogTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Log::class, 10)->create()->each(function ($log) {

            factory(App\LogEntry::class, 5)->create([
                'log_id' => $log->id
            ])->each(function($entry) {

                factory(App\EntryItem::class, 3)->create([
                    'log_entry_id' => $entry->id
                ]);

            });

        });
    }
}
