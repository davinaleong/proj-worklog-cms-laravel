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
        foreach (range(1,10) as $i) {
            $log = \factory(Log::class)->create([
                'creator_id' => 1,
                'title_log' => 'Week '.($i + 1),
            ]);

            foreach(range(1, 5) as $j) {
                $entry = \factory(LogEntry::class)->create([
                    'log_id' => $log->id,
                    'title_entry' => 'Day '.($j + 1)
                ]);

                foreach(range(1, 3) as $k) {
                    \factory(EntryItem::class)->create([
                        'log_entry_id' => $entry->id,
                        'title_item' => 'Entry Item '.($k + 1)
                    ]);
                }
            }
        }
    }
}
