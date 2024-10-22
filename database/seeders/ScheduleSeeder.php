<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('schedules')->insert([
            ['subject' => 'Pelajaran 1', 'start_time' => '07:30:00', 'end_time' => '08:15:00', 'sound_file' => 'bell1.mp3'],
            ['subject' => 'Pelajaran 2', 'start_time' => '08:15:00', 'end_time' => '09:00:00', 'sound_file' => 'bell2.mp3'],
            ['subject' => 'Pelajaran 3', 'start_time' => '09:00:00', 'end_time' => '09:45:00', 'sound_file' => 'bell3.mp3'],
            ['subject' => 'Istirahat', 'start_time' => '09:45:00', 'end_time' => '10:15:00', 'sound_file' => 'break.mp3'],
            ['subject' => 'Pelajaran 4', 'start_time' => '10:15:00', 'end_time' => '11:00:00', 'sound_file' => 'bell4.mp3'],
            ['subject' => 'Pelajaran 5', 'start_time' => '11:00:00', 'end_time' => '11:45:00', 'sound_file' => 'bell5.mp3'],
            ['subject' => 'Pelajaran 6', 'start_time' => '11:45:00', 'end_time' => '12:30:00', 'sound_file' => 'bell6.mp3'],
            ['subject' => 'Pelajaran 7', 'start_time' => '12:30:00', 'end_time' => '13:15:00', 'sound_file' => 'bell7.mp3'],
            ['subject' => 'Upacara Bendera', 'start_time' => '07:00:00', 'end_time' => '07:30:00', 'sound_file' => 'flag_ceremony.mp3'],
            ['subject' => 'Sholat Jum’at', 'start_time' => '11:30:00', 'end_time' => '12:15:00', 'sound_file' => 'jumat.mp3'],
        ]);
    }
    
}
