<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event_categories = array(
            array(
            "name" => "Music Festivals",
            "description" => "Immerse yourself in the world of music at these vibrant festivals featuring live performances by renowned artists."
            ),
            array(
            "name" => "Art Exhibitions",
            "description" => "Explore the creativity and beauty of various art forms at these exhibitions showcasing works by talented artists."
            ),
            array(
            "name" => "Food and Wine Events",
            "description" => "Savor delectable cuisines and indulge in exquisite wines at these events celebrating culinary delights."
            ),
            array(
            "name" => "Sports Tournaments",
            "description" => "Witness thrilling sports action and cheer for your favorite teams at these high-stakes tournaments."
            ),
            array(
            "name" => "Technology Conferences",
            "description" => "Stay up-to-date with the latest advancements in technology and connect with industry professionals at these informative conferences."
            ),
            array(
            "name" => "Fashion Shows",
            "description" => "Experience the glamour and style of the fashion world as models showcase the latest trends on the runway."
            ),
            array(
            "name" => "Comedy Nights",
            "description" => "Laugh out loud and enjoy hilarious performances by talented comedians at these entertaining comedy nights."
            ),
            array(
            "name" => "Literary Festivals",
            "description" => "Celebrate literature and engage in discussions with renowned authors at these literary festivals and book fairs."
            ),
            array(
            "name" => "Film Screenings",
            "description" => "Immerse yourself in the world of cinema and watch critically acclaimed films at these screenings and film festivals."
            ),
            array(
            "name" => "Charity Galas",
            "description" => "Support noble causes and make a difference by attending these fundraising galas and charity events."
            )
        );

        foreach ($event_categories as $event_category) {
            \App\Models\Category::create($event_category);
        }
    }
}
