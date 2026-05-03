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
        Schema::table('student_timetables', function (Blueprint $table) {
            $table->foreign('subject_id')->references('id')->on('subject');
            $table->foreign('day_id')->references('id')->on('days');
            $table->foreign('hall_id')->references('id')->on('halls');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('lecture_group_id')->references('id')->on('lecturer_groups');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('student_timetables', function (Blueprint $table) {
            //
        });
    }
};
