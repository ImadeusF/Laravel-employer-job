<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //every single job will create 3 tags => hasAttached
        $tags = Tag::factory(3)->create();
        Job::factory(20)->hasAttached($tags)->create(new Sequence([
            'featured' => false,
            'schedule' => 'Full Time'], 
[
            'featured' => true,
            'schedule' => 'Part Time']
        ));
    }
}
