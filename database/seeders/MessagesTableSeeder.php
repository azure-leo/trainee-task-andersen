<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = [
            [
                'name' => 'Message One',
                'email' => 'Email1@gmail.com',
                'message' => 'Message 1 !'
            ],
            [
                'name' => 'Message Two',
                'email' => 'Email2@gmail.com',
                'message' => 'Message 2 !'
            ]
            ];

            foreach($messages as $key => $value) {
                Message::create($value);
            }
    }
}
