<?php

namespace Database\Factories;

use App\Models\Announcements;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\announcements>
 */
class AnnouncementsFactory extends Factory
{
    protected $model = Announcements::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'announcement_text' => $this->faker->paragraph(),
            'announcement_date' => $this->faker->dateTimeThisMonth(),
            'announcement_author' => $this->faker->name(),
            'announcement_title' => $this->faker->word()
        ];
    }
}