<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class csvdocument extends Model
{
    protected $fillable = [

        'name',
        'hendel',
        'bio',
        'location',
        'website',
        'JoinDate',
        'followingCount',
        'tweetCount',
        'isVerifed',
        'profileImageUrl',
        'bannerImageUrl',
    ];

    public $timestamps = false;

    use HasFactory;
}
