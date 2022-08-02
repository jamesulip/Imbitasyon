<?php

namespace App\Imports;

use App\Models\Invited;
use Maatwebsite\Excel\Concerns\ToModel;

class InviteImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return Invited::updateOrCreate(
            [
                'code'    => $row[1],
            ],
            [
                'name'     => $row[0],
                'code'    => $row[1] ?? \Str::random(4),
                'event_id'    => 1,
                'response_id'    => 1,
                'attending'    => 0,
            ]
        );
    }
}
