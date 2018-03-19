<?php

use Illuminate\Database\Seeder;
use App\Models\VbItemStatus;

class VbItemStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statusArray = [
            'In use',
            'Sold',
            'Stolen',
            'Destroyed',
            'Replacement parts',
        ];

        factory(VbItemStatus::class, count($statusArray))->make()->each(function ($status, $key) use ($statusArray) {
            $status->name = $statusArray[$key];
            $status->save();
        });
    }
}
