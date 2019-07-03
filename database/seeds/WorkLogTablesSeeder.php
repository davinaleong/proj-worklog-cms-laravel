<?php

use Faker\Factory;
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
        foreach (range(1,10) as $index) {
            $log = \factory(Log::class)->create();
            foreach(range(1, 5) as $index) {
                $entry = \factory(LogEntry::class)->create([
                    'log_id' => $log->id
                ]);

                foreach(range(1, 3) as $index) {
                    \factory(EntryItem::class)->create([
                        'item_id' => $entry->id
                    ]);
                }
            }
        }
    }
}
