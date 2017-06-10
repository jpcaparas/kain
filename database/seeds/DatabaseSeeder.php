<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @todo Replace factory with manual inserts before public release
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Establishment::class, 20)
            ->create()
            ->each(function ($e) {
                /**
                 * @var \Illuminate\Database\Eloquent\Model $e
                 */
                $e->contact()->save(factory(\App\Models\Contact::class)->make());
            });
    }
}
