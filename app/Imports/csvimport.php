<?php

namespace App\Imports;

use App\Models\csvdocument;
// use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class csvimport implements ToModel, WithHeadingRow
{
    /**
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        return new csvdocument([

            'name' => $row['name'] ?? 'tidakada',
            'hendel' => $row['handle'] ?? 'tidakada',
            'bio' => $row['bio'] ?? 'tidakada',
            'location' => $row['location'] ?? 'tidakada',
            'website' => $row['website'] ?? 'tidakada',
            'JoinDate' => $row['joindate'] ?? 'tidakada',
            'followingCount' => $row['followingcount'] ?? 'tidakada',
            'tweetCount' => $row['tweetcount'] ?? 'tidakada',
            'isVerifed' => $row['isverified'] ?? 'tidakada',
            'profileImageUrl' => $row['profileimageurl'] ?? 'tidakada',
            'bannerImageUrl' => $row['bannerimageurl'] ?? 'tidakada',

        ]);
    }
}
