<?php

namespace seeders;

use App\Models\Order;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => Str::ulid(),
            'user_id' => User::where('name', 'developer')->first()->id,
            'review' => fake()->paragraphs(1, true),
            'rating' => random_int(1,5),
            'status' => random_int(1,3),
            'model_type' => User::class,
            'model_id' => User::where('name', 'developer')->first()->id,

        ]);
    }
}
