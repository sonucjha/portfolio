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
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('profile_pic')->nullable();
            $table->text('about')->nullable();
            $table->text('about_profile')->nullable();
            $table->text('about_skill')->nullable();
            $table->text('info_list')->nullable();
            $table->text('skill_bars')->nullable();
            $table->string('download_cv')->nullable();
            $table->string('business_email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
