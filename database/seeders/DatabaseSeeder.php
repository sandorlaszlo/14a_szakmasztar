<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Competitor;
use App\Models\Profession;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Profession::create(["name" => "Szoftverfejlesztő és tesztelő"]);
        Profession::create(["name" => "Informatikai rendszer- és alkalmazás üzemeltető"]);
        Profession::create(["name" => "CAD-CAM informatikus"]);
        Profession::create(["name" => "Gépgyártástechnológiai technikus"]);
        Profession::create(["name" => ""]);

        Competitor::factory(20)->create();
    }
}
