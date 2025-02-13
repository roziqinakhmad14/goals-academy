<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Tutor;
use App\Models\Article;
use App\Models\Category;
use App\Models\ProgramService;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Article::factory(5)->create();

        Category::create([
            'name' => 'Tips Skripsi',
            'slug' => 'tips-skripsi'
        ]);
        Category::create([
            'name' => 'Kegiatan Goals',
            'slug' => 'kegiatan-goals'
        ]);
        Category::create([
            'name' => 'Cerita Kampus',
            'slug' => 'cerita-kampus'
        ]);
        Category::create([
            'name' => 'Diskusi',
            'slug' => 'diskusi'
        ]);

        User::create([
            'name'  => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'phone_number'  => '089231231231',
            'university'    => 'Cambridge',
            'major' => 'Software Engineering',
            'user_level' => 'admin',
            'password'      => bcrypt('admin123'),
            'email_verified_at' => now(),
            'is_completed' => true,
        ]);
        User::create([
            'name'  => 'Moderator',
            'username' => 'moderator',
            'email' => 'moderator@gmail.com',
            'phone_number'  => '089123123123',
            'university'    => 'Cambridge',
            'major' => 'Software Engineering',
            'user_level' => 'moderator',
            'password'      => bcrypt('moderator123'),
            'email_verified_at' => now(),
            'is_completed' => true,
        ]);
        User::create([
            'name'  => 'Yordhan',
            'username' => 'tutor',
            'email' => 'tutor@gmail.com',
            'phone_number'  => '089321321321',
            'university'    => 'Cambridge',
            'major' => 'Software Engineering',
            'user_level' => 'tutor',
            'password'      => bcrypt('tutor123'),
            'email_verified_at' => now(),
            'is_completed' => true,
        ]);
        User::create([
            'name'  => 'Vicky Bellarina',
            'username' => 'ciki',
            'email' => 'ciki@gmail.com',
            'phone_number'  => '087763420871',
            'university'    => 'Universitas Brawijaya',
            'major' => 'FIB',
            'user_level' => 'tutor',
            'password'      => bcrypt('qwe12334'),
            'email_verified_at' => now(),
            'is_completed' => true,
        ]);
        User::create([
            'name'  => 'Ekadian Haris',
            'username' => 'ayukuriii',
            'email' => 'ekadianharis@gmail.com',
            'phone_number'  => '087763420873',
            'university'    => 'Politeknik Negeri Malang',
            'major' => 'Teknik Elektronika',
            'user_level' => 'user',
            'password'      => bcrypt('qwe12334'),
            'email_verified_at' => now(),
            'is_completed' => true,
        ]);

        ProgramService::create([
            'title' => 'Dibimbing Online',
            'category' => 'online',
            'description' => 'Bimbingan skripsi untuk mahasiswa tingkat akhir yang dilaksanakan secara online, durasi 30 menit.',
            'price' => '47000'
        ]);
        ProgramService::create([
            'title' => 'Dibimbing Online Premium',
            'category' => 'online',
            'description' => 'Bimbingan skripsi untuk mahasiswa tingkat akhir yang dilaksanakan secara online, durasi 45 menit.',
            'price' => '85000'
        ]);
        ProgramService::create([
            'title' => 'Dibimbing Offline',
            'category' => 'offline',
            'description' => 'Bimbingan skripsi untuk mahasiswa tingkat akhir yang dilaksanakan secara offline, durasi 60 menit.',
            'price' => '98000'
        ]);

        Tutor::create([
            'user_id'  => '3'
        ]);
        Tutor::create([
            'user_id'  => '4'
        ]);

        // OngoingProgram::create([
        //     'user_id' => 4,
        //     'program_services_id' => 1,
        //     'tutor_id' => 1,
        //     'payment_status' => 'success',
        //     'program_session' => '09:00',
        //     'catatan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, odio.',
        //     'file' => 'F-12 Form Penyerahan.pdf',
        //     'date' => now()->addDays(7)->format('Y-m-d'),
        //     'links' => 'www.google.com',
        //     'is_tutor' => false,
        //     'is_moderator' => false
        // ]);
        // OngoingProgram::create([
        //     'user_id' => 4,
        //     'program_services_id' => 2,
        //     'tutor_id' => 2,
        //     'payment_status' => 'success',
        //     'program_session' => '09:00',
        //     'catatan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, odio.',
        //     'file' => '',
        //     'date' => now()->addDays(20)->format('Y-m-d'),
        //     'is_tutor' => false,
        //     'is_moderator' => false
        // ]);
        // OngoingProgram::create([
        //     'user_id' => 4,
        //     'program_services_id' => 1,
        //     'tutor_id' => 1,
        //     'payment_status' => 'success',
        //     'program_session' => '12:00',
        //     'catatan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, odio.',
        //     'file' => '',
        //     'date' => now()->addDays(20)->format('Y-m-d'),
        //     'links' => 'www.google.com',
        //     'is_tutor' => true,
        //     'is_moderator' => false
        // ]);
        // OngoingProgram::create([
        //     'user_id' => 4,
        //     'program_services_id' => 3,
        //     'tutor_id' => 1,
        //     'payment_status' => 'success',
        //     'program_session' => '12:00',
        //     'catatan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, odio.',
        //     'file' => 'F-12 Form Penyerahan.pdf',
        //     'date' => now()->addDays(10)->format('Y-m-d'),
        //     'links' => 'Nakoa',
        //     'is_tutor' => true,
        //     'is_moderator' => true
        // ]);

        // TutorNotes::create([
        //     'ongoing_program_id' => 1,
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor rem incidunt nostrum reiciendis soluta alias labore nemo dignissimos itaque atque quibusdam id, animi sit quidem iste est molestiae libero perferendis blanditiis distinctio expedita veniam hic. Corrupti ipsam nam nesciunt veniam, doloremque totam quasi reiciendis, sunt ad officiis, dolor libero? Voluptas, est quisquam officiis incidunt facere, neque beatae, illum sed cupiditate adipisci iusto iure ipsum. Dolore natus deleniti asperiores adipisci! Deleniti saepe doloremque suscipit molestiae quas magnam repudiandae cumque eos laborum distinctio sunt modi, nam natus quae? Accusantium, optio tenetur, error reiciendis inventore eos sapiente ipsum quidem necessitatibus expedita molestiae earum!'
        // ]);
        // TutorNotes::create([
        //     'ongoing_program_id' => 2,
        //     'body' => 'sudah bagus program 2 nya'
        // ]);
        // TutorNotes::create([
        //     'ongoing_program_id' => 4,
        //     'body' => 'sudah bagus program 2 nya'
        // ]);
    }
}
