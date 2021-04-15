<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            [
                "name" => "Abia",
                "status"=>"NULL",
            ],
            [
                "name" => "Adamawa",
                "status" => "active",
            ],
            [
                "name" => "Akwa Ibom",
                "status" => "NULL",
            ],
            [
                "name" => "Anambra",
                "status" => "NULL",
            ],
            [
                "name" => "Bauchi",
                "status" => "NULL",
            ],
            [
                "name" => "Bayelsa",
                "status" => "NULL",
            ],
            [
                "name" => "Benue",
                "status" => "NULL",
            ],
            [
                "name" => "Borno",
                "status" => "NULL",
            ],
            [
                "name" => "Cross River",
                "status" => "NULL",
            ],
            [
                "name" => "Delta",
                "status" => "active",
            ],
            [
                "name" => "Ebonyi",
                "status" => "NULL",
            ],
            [
                "name" => "Edo",
                "status" => "NULL",
            ],
            [
                "name" => "Ekiti",
                "status" => "NULL",
            ],
            [
                "name" => "Enugu",
                "status" => "NULL",
            ],
            [
                "name" => "FCT - Abuja",
                "status" => "NULL",
            ],
            [
                "name" => "Gombe",
                "status" => "active",
            ],
            [
                "name" => "Imo",
                "status" => "active",
            ],
            [
                "name" => "Jigawa",
                "status" => "active",
            ],
            [
                "name" => "Kaduna",
                "status" => "active",
            ],
            [
                "name" => "Kano",
                "status" => "active",
            ],
            [
                "name" => "Katsina",
                "status" => "active",
            ],
            [
                "name" => "Kebbi",
                "status" => "NULL",
            ],
            [
                "name" => "Kogi",
                "status" => "NULL",
            ],
            [
                "name" => "Kwara",
                "status" => "active",
            ],
            [
                "name" => "Lagos",
                "status" => "NULL",
            ],
            [
                "name" => "Nasarawa",
                "status" => "NULL",
            ],
            [
                "name" => "Niger",
                "status" => "active",
            ],
            [
                "name" => "Ogun",
                "status" => "active",
            ],
            [
                "name" => "Ondo",
                "status" => "NULL",
            ],
            [
                "name" => "Osun",
                "status" => "active",
            ],
            [
                "name" => "Oyo",
                "status" => "NULL",
            ],
            [
                "name" => "Plateau",
                "status" => "NULL",
            ],
            [
                "name" => "Rivers",
                "status" => "NULL",
            ],
            [
                "name" => "Sokoto",
                "status" => "NULL",
            ],
            [
                "name" => "Taraba",
                "status" => "active",
            ],
            [
                "name" => "Yobe",
                "status" => "active",
            ],
            [
                "name" => "Zamfara",
                "status" => "NULL",
            ],
        ]);
    }
}
