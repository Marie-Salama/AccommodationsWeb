<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;


class OwnersTableSeeder extends Seeder
{
    // public function run(): void
    // {
    //     DB::table('owners')->insert([
    //         ['name' => 'Amr Hassan', 'email' => 'amrhassan@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456789', 'photo' => 'https://img.freepik.com/free-photo/positive-brunet-man-with-crossed-arms_1187-5797.jpg?size=626&ext=jpg&ga=GA1.1.1128979091.1706343120&semt=sph'],
    //         ['name' => 'Sara Ali', 'email' => 'saraali@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456790', 'photo' => 'https://img.freepik.com/free-photo/positive-woman-with-crossed-arms_1187-5707.jpg?size=626&ext=jpg'],
    //         ['name' => 'John Doe', 'email' => 'johndoe@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456791', 'photo' => 'https://img.freepik.com/free-photo/man-with-crossed-arms_1187-5807.jpg?size=626&ext=jpg'],
    //         ['name' => 'Jane Smith', 'email' => 'janesmith@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456792', 'photo' => 'https://img.freepik.com/free-photo/woman-smiling_1187-5697.jpg?size=626&ext=jpg'],
    //         ['name' => 'Ahmed Salah', 'email' => 'ahmedsalah@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456793', 'photo' => 'https://img.freepik.com/free-photo/smiling-man_1187-5877.jpg?size=626&ext=jpg'],
    //         ['name' => 'Mona Ahmed', 'email' => 'monaahmed@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456794', 'photo' => 'https://img.freepik.com/free-photo/smiling-woman_1187-5687.jpg?size=626&ext=jpg'],
    //         ['name' => 'Omar Mohamed', 'email' => 'omarmohamed@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456795', 'photo' => 'https://img.freepik.com/free-photo/portrait-man_1187-5837.jpg?size=626&ext=jpg'],
    //         ['name' => 'Nadia Hassan', 'email' => 'nadiahassan@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456796', 'photo' => 'https://img.freepik.com/free-photo/smiling-woman_1187-5697.jpg?size=626&ext=jpg'],
    //         ['name' => 'Ali Kamal', 'email' => 'alikamal@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456797', 'photo' => 'https://img.freepik.com/free-photo/man-with-smile_1187-5857.jpg?size=626&ext=jpg'],
    //         ['name' => 'Laila Mansour', 'email' => 'lailamansour@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456798', 'photo' => 'https://img.freepik.com/free-photo/woman-smiling_1187-5707.jpg?size=626&ext=jpg'],
    //         ['name' => 'Youssef Saeed', 'email' => 'youssefsaeed@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456799', 'photo' => 'https://img.freepik.com/free-photo/portrait-man_1187-5807.jpg?size=626&ext=jpg'],
    //         ['name' => 'Fatima Ahmed', 'email' => 'fatimaahmed@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456700', 'photo' => 'https://img.freepik.com/free-photo/smiling-woman_1187-5687.jpg?size=626&ext=jpg'],
    //         ['name' => 'Hassan Mahmoud', 'email' => 'hassanmahmoud@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456701', 'photo' => 'https://img.freepik.com/free-photo/man-with-smile_1187-5857.jpg?size=626&ext=jpg'],
    //         ['name' => 'Noor Khaled', 'email' => 'noorkhaled@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456702', 'photo' => 'https://img.freepik.com/free-photo/smiling-woman_1187-5707.jpg?size=626&ext=jpg'],
    //         ['name' => 'Salma Hassan', 'email' => 'salmahassan@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456703', 'photo' => 'https://img.freepik.com/free-photo/woman-smiling_1187-5697.jpg?size=626&ext=jpg'],
    //         ['name' => 'Karim Ali', 'email' => 'karimali@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456704', 'photo' => 'https://img.freepik.com/free-photo/man-with-crossed-arms_1187-5807.jpg?size=626&ext=jpg'],
    //         ['name' => 'Hoda Emad', 'email' => 'hodaemad@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456705', 'photo' => 'https://img.freepik.com/free-photo/smiling-woman_1187-5687.jpg?size=626&ext=jpg'],
    //         ['name' => 'Mustafa Ibrahim', 'email' => 'mustafaibrahim@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456706', 'photo' => 'https://img.freepik.com/free-photo/portrait-man_1187-5817.jpg?size=626&ext=jpg'],
    //         ['name' => 'Nourhan Omar', 'email' => 'nourhanomar@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456707', 'photo' => 'https://img.freepik.com/free-photo/smiling-woman_1187-5707.jpg?size=626&ext=jpg'],
    //         ['name' => 'Ramy Khaled', 'email' => 'ramykhaled@gmail.com', 'password' => Hash::make('123456789'), 'phone' => '0123456708', 'photo' => 'https://img.freepik.com/free-photo/man-with-crossed-arms_1187-5797.jpg?size=626&ext=jpg'],
    //     ]);
    // }


    public function run(Faker $faker)
    {
        $names = [
            'Amr Khalid', 'Mona Essam', 'Ahmed Saleh', 'Fatima Hamed', 'Karim Adel',
            'Dalia Fouad', 'Mostafa Nabil', 'Aya Tarek', 'Mohamed Samir', 'Heba Zaher',
            'Omar Wael', 'Marwa Khaled', 'Mahmoud Elias', 'Rania Sameh', 'Youssef Maher',
            'Nada Hesham', 'Sami Tamer', 'Salma Mamdouh', 'Alaa Gamal', 'Ahmad Emad'
        ];

        // $cities = ['Cairo', 'Alexandria', 'Giza', 'Shubra El-Kheima', 'Port Said', 'Suez', 'Luxor', 'Aswan', 'Mansoura', 'Tanta'];
        // $whereToGo = ['Alexandria', 'Cairo', 'Aswan'];
        // $x = [1, 2, 3, 4, 5, 6, 7];

        // foreach ($names as $name) {
        //     DB::table('owners')->insert([
        //         'name' => $name,
        //         'email' => strtolower(str_replace(' ', '', $name)) . $faker->numberBetween(1, 10) . 'owner@gmail.com',
        //         'password' => Hash::make('123456789'),
        //         'phone' => $faker->phoneNumber,
        //         'photo' => 'https://picsum.photos/id/' . $faker->numberBetween(1, 1000) . '/200/200',
        //     ]);
        // }

        // for ($i = 0; $i < 100; $i++) {
        //     DB::table('owners')->insert([
        //         'name' => $faker->randomElement($names),
        //         'email' => strtolower(str_replace(' ', '', $faker->randomElement($names))) . $faker->numberBetween(1, 10) . '1owner@gmail.com',
        //         'password' => Hash::make('123456789'),
        //         'phone' => $faker->phoneNumber,
        //         'photo' => 'https://picsum.photos/id/' . $faker->numberBetween(1, 1000) . '/200/200',
        //     ]);
        // }

        for ($i = 0; $i < 100; $i++) {
            $name = $faker->randomElement($names);
            $email = strtolower(str_replace(' ', '', $name)) . $faker->numberBetween(1, 10) . 'owner@gmail.com';

            // Check if the email already exists
            while (DB::table('owners')->where('email', $email)->exists()) {
                $email = strtolower(str_replace(' ', '', $name)) . $faker->numberBetween(1, 10) . 'owner@gmail.com';
            }

            DB::table('owners')->insert([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make('123456789'),
                'phone' => $faker->phoneNumber,
                'photo' => 'https://picsum.photos/id/' . $faker->numberBetween(1, 1000) . '/200/200',
            ]);
        }
    }
}
