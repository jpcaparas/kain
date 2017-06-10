<?php

use Illuminate\Database\Seeder;

class TestingDatabaseSeeder extends Seeder
{
    const RECORD_COUNT = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Establishment::class, self::RECORD_COUNT)
            ->create()
            ->each(function ($e) {
                /**
                 * @var \Illuminate\Database\Eloquent\Model $e
                 */
                $e->contact()->save(factory(\App\Models\Contact::class)->make());
            });
    }
}
