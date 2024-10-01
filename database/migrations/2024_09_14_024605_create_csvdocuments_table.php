<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('csvdocuments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('hendel');
            $table->string('bio');
            $table->string('location');
            $table->string('website');
            $table->string('JoinDate');
            $table->string('followingCount');
            $table->string('tweetCount');
            $table->string('isVerifed');
            $table->string('profileImageUrl');
            $table->string('bannerImageUrl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('csvdocuments');
    }
};
