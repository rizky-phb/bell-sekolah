<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->time('start_time'); // Waktu mulai
            $table->time('end_time'); // Waktu selesai
            $table->integer('jam_ke'); // Jam ke 1,2,3,4,5,6
            $table->foreignId('class_id')->constrained('classes')->onDelete('cascade'); // relasi ke class
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade'); // relasi ke subject
            $table->string('sound_file')->nullable(); // Opsional untuk file suara
            $table->timestamps();
        });

        Schema::create('class_subject_schedule', function (Blueprint $table) {
            $table->id();
            $table->foreignId('schedule_id')->constrained('schedules')->onDelete('cascade');
            $table->foreignId('class_id')->constrained('classes')->onDelete('cascade');
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_subject_schedule');
        Schema::dropIfExists('schedules');
    }
};
