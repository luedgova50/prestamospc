<?php

use App\Models\Permits;
use Illuminate\Database\Seeder;

class PermitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Permits::class)->times(50)->create();
    }
}
