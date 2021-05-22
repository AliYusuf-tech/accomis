<?php

namespace App\Imports;

use App\Models\HealthFacility;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class HealthFacilityImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {

        // // foreach ($rows as $key => $value) {
        // //     if($key > 0){
        // //         $health = HealthFacility::create([
        // //             'state' => $value[2],
        // //             'LGA' => $value[4],
        // //             'Ward' => now(),
        // //             'Facility' => Hash::make($password),
        // //             'LGA' => $value[4],
        // //             'CBO' => $value[4],
        // //             'CBO_Email' => $value[4],
        // //             'SPO' => $value[4],
        // //             'SPO_Email' => $value[4],
        // //             'status' => $value[4],
        // //             'year' => $value[4],
        // //             'month' => $value[4],
        // //             'day' => $value[4],
        // //         ]);

        // //     }

        // }
        return "error";

    }
}
