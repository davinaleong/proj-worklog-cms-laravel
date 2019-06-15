<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

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
                $entry = \factory(Entry::class)->create([
                    'log_id' => $log->id
                ]);

                foreach(range(1, 3) as $index) {
                    \factory(Item::class)->create([
                        'item_id' => $entry->id
                    ]);
                }
            }
        }
    }
}
