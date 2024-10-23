<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed data untuk classes
        DB::table('classes')->insert([
            ['kelas' => '7a'],
            ['kelas' => '7b'],
            ['kelas' => '7c'],
            ['kelas' => '8a'],
            ['kelas' => '8b'],
            ['kelas' => '8c'],
            ['kelas' => '9a'],
            ['kelas' => '9b'],
        ]);

        // Seed data untuk subjects
        DB::table('subjects')->insert([
            ['kode_pelajaran' => 'K1', 'nama' => 'Matematika'],
            ['kode_pelajaran' => 'C7', 'nama' => 'IPA'],
            ['kode_pelajaran' => 'D11', 'nama' => 'Bahasa Indonesia'],
            ['kode_pelajaran' => 'B15', 'nama' => 'IPS'],
            ['kode_pelajaran' => 'F7', 'nama' => 'Bahasa Inggris'],
            ['kode_pelajaran' => 'H12', 'nama' => 'PJOK'],
        ]);

        // Seed data untuk schedules
        DB::table('schedules')->insert([
            [
                'hari' => 'Senin',
                'start_time' => Carbon::createFromTime(7, 0),
                'end_time' => Carbon::createFromTime(7, 40),
                'jam_ke' => 1,
                'kelas_id' => 1, // 7a
                'pelajaran_id' => 1, // Matematika
                'sound_file' => 'bell1.mp3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'hari' => 'Senin',
                'start_time' => Carbon::createFromTime(7, 0),
                'end_time' => Carbon::createFromTime(7, 40),
                'jam_ke' => 1,
                'kelas_id' => 2, // 7b
                'pelajaran_id' => 2, // IPA
                'sound_file' => 'bell1.mp3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Tambahkan data lain untuk kelas dan jam pelajaran yang lain sesuai kebutuhan
        ]);

        // Seed data untuk schedule_class_subject (many-to-many relationship)
        DB::table('schedule_class_subject')->insert([
            ['schedule_id' => 1, 'class_id' => 1, 'subject_id' => 1],
            ['schedule_id' => 2, 'class_id' => 2, 'subject_id' => 2],
            // Tambahkan data untuk jadwal lain
        ]);
    }
}
