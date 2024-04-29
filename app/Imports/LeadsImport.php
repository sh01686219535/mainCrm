<?php

namespace App\Imports;

use App\Models\Lead;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class LeadsImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            Lead::create([
                'name' => $row[0],
                'email' => $row[1],
                'phone' => $row[2],
                'address' => $row[3],
                'city' => $row[4],
                'state' => $row[5],
                'company' => $row[6],
                'position' => $row[7],
                'zip_code' => $row[8],
                'country' => $row[9],
                'website' => $row[10],
                'description' => $row[11],
                'status' => $row[12],
                'source' => $row[13],
                'sales_people_id' => $row[14],
                'team_leader_id' => $row[15],
            ]);
        }
    }
}
