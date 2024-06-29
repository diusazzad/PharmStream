<?php

namespace Database\Factories;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    protected $model = Notification::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'id' => $this->faker->uuid,
            'type' => $this->faker->word, // Or customize type generation
            'notifiable_type' => $this->faker->word, // Replace with your actual model
            'notifiable_id' => $this->faker->randomNumber, // Might need adjustment
            'data' => $this->faker->text(200), // Adjust text length as needed
            'read_at' => null,
        ];
    }
}
