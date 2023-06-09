<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = array(
            array(
                "name" => "Music Festival Extravaganza",
                "description" => "Immerse yourself in a weekend of music at this lively festival featuring top artists from around the world.",
                "location" => "Central Park",
                "city" => "New York",
                "country" => "USA",
                "date" => "July 15-17, 2023",
                "website" => "https://www.musicfestextravaganza.com/"
            ),
            array(
                "name" => "Art Exhibition: Modern Perspectives",
                "description" => "Explore a collection of contemporary artworks that push the boundaries of artistic expression.",
                "location" => "Metropolitan Museum of Art",
                "city" => "New York",
                "country" => "USA",
                "date" => "August 5 - September 10, 2023",
                "website" => "https://www.metmuseum.org/"
            ),
            array(
                "name" => "Food and Wine Festival",
                "description" => "Indulge in a culinary journey with exquisite dishes and a wide selection of wines from around the world.",
                "location" => "Napa Valley",
                "city" => "California",
                "country" => "USA",
                "date" => "September 22-25, 2023",
                "website" => "https://www.napavalleyfoodandwine.com/"
            ),
            array(
                "name" => "Sports Tournament: International Tennis Open",
                "description" => "Witness world-class tennis players compete in intense matches for the championship title.",
                "location" => "Wimbledon",
                "city" => "London",
                "country" => "United Kingdom",
                "date" => "October 10-16, 2023",
                "website" => "https://www.internationaltennisopen.com/"
            ),
            array(
                "name" => "Tech Conference: Innovate",
                "description" => "Discover the latest technological innovations and connect with industry leaders and visionaries.",
                "location" => "San Francisco Convention Center",
                "city" => "San Francisco",
                "country" => "USA",
                "date" => "November 8-10, 2023",
                "website" => "https://www.innovatetechconference.com/"
            ),
            array(
                "name" => "Fashion Week",
                "description" => "Experience the glamour of the fashion industry as renowned designers showcase their latest collections.",
                "location" => "Milan",
                "city" => "Italy",
                "country" => "Italy",
                "date" => "February 20-26, 2024",
                "website" => "https://www.fashionweekmilan.com/"
            ),
            array(
                "name" => "Comedy Festival: Laugh-A-Thon",
                "description" => "Laugh your heart out with hilarious performances by top comedians from around the world.",
                "location" => "Apollo Theater",
                "city" => "New York",
                "country" => "USA",
                "date" => "March 10-12, 2024",
                "website" => "https://www.laughathoncomedyfestival.com/"
            ),
            array(
                "name" => "Literary Festival: Bookworm's Paradise",
                "description" => "Celebrate the written word with insightful discussions, book signings, and literary activities.",
                "location" => "British Library",
                "city" => "London",
                "country" => "United Kingdom",
                "date" => "April 5-7, 2024",
                "website" => "https://www.bookwormsparadise.com/"
            ),
            array(
                "name" => "Film Festival: Cinematic Showcase",
                "description" => "Experience the magic of cinema with screenings of critically acclaimed films and interactive sessions.",
                "location" => "Cannes",
                "city" => "France",
                "country" => "France",
                "date" => "May 15-25, 2024",
                "website" => "https://www.cinematicshowcase.com/"
            ),
            array(
                "name" => "Charity Gala: Hope for a Cause",
                "description" => "Support noble causes and make a difference in the lives of those in need at this elegant charity gala.",
                "location" => "The Ritz Carlton",
                "city" => "New York",
                "country" => "USA",
                "date" => "June 15, 2024",
                "website" => "https://www.hopeforacausegala.com/"
            )
        );

        foreach ($events as $event) {

            // generate a random number between 1 and 10 and add as the categort_id to the hotel array
            $event['category_id'] = rand(1, 10);

            \App\Models\Event::create($event);
        }
    }
}
