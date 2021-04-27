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
                "spo" => "NULL",
                "status"=>"NULL",
            ],
            [
                "name" => "Adamawa",
                "spo" => "NULL",
                "status" => "active",
            ],
            [
                "name" => "Akwa Ibom",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Anambra",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Bauchi",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Bayelsa",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Benue",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Borno",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Cross River",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Delta",
                "spo" => "NULL",
                "status" => "active",
            ],
            [
                "name" => "Ebonyi",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Edo",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Ekiti",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Enugu",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "FCT - Abuja",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Gombe",
                "spo" => "NULL",
                "status" => "active",
            ],
            [
                "name" => "Imo",
                "spo" => "NULL",
                "status" => "active",
            ],
            [
                "name" => "Jigawa",
                "spo" => "NULL",
                "status" => "active",
            ],
            [
                "name" => "Kaduna",
                "spo" => "NULL",
                "status" => "active",
            ],
            [
                "name" => "Kano",
                "spo" => "NULL",
                "status" => "active",
            ],
            [
                "name" => "Katsina",
                "spo" => "NULL",
                "status" => "active",
            ],
            [
                "name" => "Kebbi",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Kogi",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Kwara",
                "spo" => "NULL",
                "status" => "active",
            ],
            [
                "name" => "Lagos",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Nasarawa",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Niger",
                "spo" => "NULL",
                "status" => "active",
            ],
            [
                "name" => "Ogun",
                "spo" => "NULL",
                "status" => "active",
            ],
            [
                "name" => "Ondo",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Osun",
                "spo" => "NULL",
                "status" => "active",
            ],
            [
                "name" => "Oyo",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Plateau",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Rivers",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Sokoto",
                "spo" => "NULL",
                "status" => "NULL",
            ],
            [
                "name" => "Taraba",
                "spo" => "NULL",
                "status" => "active",
            ],
            [
                "name" => "Yobe",
                "spo" => "NULL",
                "status" => "active",
            ],
            [
                "name" => "Zamfara",
                "spo" => "NULL",
                "status" => "NULL",
            ],
        ]);
    }
}
