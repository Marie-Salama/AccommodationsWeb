<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //nearly 18 admins
        DB::table('admins')->insert([
            ['name' => 'Amr Hassan', 'email' => 'amrhassan@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456789', 'photo' => 'https://img.freepik.com/free-photo/positive-brunet-man-with-crossed-arms_1187-5797.jpg?size=626&ext=jpg&ga=GA1.1.1128979091.1706343120&semt=sph', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sara Ali', 'email' => 'saraali@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456790', 'photo' => 'https://img.freepik.com/free-photo/positive-woman-with-crossed-arms_1187-5707.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'John Doe', 'email' => 'johndoe@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456791', 'photo' => 'https://img.freepik.com/free-photo/man-with-crossed-arms_1187-5807.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jane Smith', 'email' => 'janesmith@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456792', 'photo' => 'https://img.freepik.com/free-photo/woman-smiling_1187-5697.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ahmed Salah', 'email' => 'ahmedsalah@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456793', 'photo' => 'https://img.freepik.com/free-photo/smiling-man_1187-5877.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mona Ahmed', 'email' => 'monaahmed@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456794', 'photo' => 'https://img.freepik.com/free-photo/smiling-woman_1187-5687.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Omar Mohamed', 'email' => 'omarmohamed@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456795', 'photo' => 'https://img.freepik.com/free-photo/portrait-man_1187-5837.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nadia Hassan', 'email' => 'nadiahassan@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456796', 'photo' => 'https://img.freepik.com/free-photo/smiling-woman_1187-5697.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ali Kamal', 'email' => 'alikamal@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456797', 'photo' => 'https://img.freepik.com/free-photo/man-with-smile_1187-5857.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Laila Mansour', 'email' => 'lailamansour@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456798', 'photo' => 'https://img.freepik.com/free-photo/woman-smiling_1187-5707.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Youssef Saeed', 'email' => 'youssefsaeed@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456799', 'photo' => 'https://img.freepik.com/free-photo/portrait-man_1187-5807.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fatima Ahmed', 'email' => 'fatimaahmed@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456700', 'photo' => 'https://img.freepik.com/free-photo/smiling-woman_1187-5687.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hassan Mahmoud', 'email' => 'hassanmahmoud@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456701', 'photo' => 'https://img.freepik.com/free-photo/man-with-smile_1187-5857.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Noor Khaled', 'email' => 'noorkhaled@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456702', 'photo' => 'https://img.freepik.com/free-photo/smiling-woman_1187-5707.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Salma Hassan', 'email' => 'salmahassan@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456703', 'photo' => 'https://img.freepik.com/free-photo/woman-smiling_1187-5697.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Karim Ali', 'email' => 'karimali@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456704', 'photo' => 'https://img.freepik.com/free-photo/man-with-crossed-arms_1187-5807.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hoda Emad', 'email' => 'hodaemad@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456705', 'photo' => 'https://img.freepik.com/free-photo/smiling-woman_1187-5687.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mustafa Ibrahim', 'email' => 'mustafaibrahim@example.com', 'password' => Hash::make('123456789'), 'phone' => '0123456706', 'photo' => 'https://img.freepik.com/free-photo/portrait-man_1187-5817.jpg?size=626&ext=jpg', 'email_verified_at' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
