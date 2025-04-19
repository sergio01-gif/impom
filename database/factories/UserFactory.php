<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
{
    return [
        'first_name' => 'IMPOM',
        'last_name' => 'Admin',
        'email' => 'sistemaimpom@gmail.com',
        'email_verified_at' => now(),
        'password' => bcrypt('IMPOM201304#'),
        'remember_token' => Str::random(10),
        'gender' => 'Male',
        'nationality' => 'Moçambicano',
        'phone' => '+258877114327',
        'address' => 'Manica',
        'address2' => 'Chimoio',
        'city' => 'Manica',
        'zip' => '2200',
        'photo' => null,
        'role' => 'admin',
    ];
}


    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
