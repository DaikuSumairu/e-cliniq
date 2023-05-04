<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2023-203814',
                'grade' => 'Grade 12',
                'course' => 'STEM - IT',
                'section' => 'STEM231',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2024-038163',
                'grade' => 'Grade 11',
                'course' => 'STEM - Multi Media',
                'section' => 'STEM244',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2023-203170',
                'year' => '1st Year',
                'course' => 'STEM - SS',
                'section' => 'SS231',
            ],
            [
                'name' => 'Masha Scovgachn',
                'email' => 'mscovgachn@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2024-019274',
                'grade' => 'Grade 12',
                'course' => 'ABM',
                'section' => 'ABM241',
            ],
            [
                'name' => 'Eugene Martaho',
                'email' => 'emartaho@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2022-293745',
                'year' => '2nd Year',
                'course' => 'BSCS - IT',
                'section' => 'IT221',
            ],
            [
                'name' => 'Exia Martinez',
                'email' => 'emartinez@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2021-982642',
                'year' => '3rd Year',
                'course' => 'BSCS - SF',
                'section' => 'SF211',
            ],
            [
                'name' => 'Anthony Tenrou',
                'email' => 'atenrou@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2025-019273',
                'grade' => 'Grade 11',
                'course' => 'STEM - Engineering',
                'section' => 'STEM252',
            ],
            [
                'name' => 'Jotarou Mandaba',
                'email' => 'jmandaba@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2020-012938',
                'year' => '3rd Year',
                'course' => 'BSCS - SF',
                'section' => 'SF203',
            ],
            [
                'name' => 'Layla Muntaka',
                'email' => 'lmuntaka@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2023-038271',
                'grade' => 'Grade 12',
                'course' => 'STEM - Engineering',
                'section' => 'STEM232',
            ],
            [
                'name' => 'Mia Khalifa',
                'email' => 'mkhalifa@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2021-371947',
                'year' => '2nd Year',
                'course' => 'BSCS - SS',
                'section' => 'SS211',
            ],
            [
                'name' => 'Kensie Karashi',
                'email' => 'kkarashi@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2024-374916',
                'grade' => 'Grade 12',
                'course' => 'ABM',
                'section' => 'ABM242',
            ],
            [
                'name' => 'Natalie Balagtas',
                'email' => 'nbalagtas@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2020-823645',
                'year' => '2nd Year',
                'course' => 'BSCS - IT',
                'section' => 'IT202',
            ],
            [
                'name' => 'Cardo Dalisay',
                'email' => 'cdalisay@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2024-836471',
                'grade' => 'Grade 12',
                'course' => 'ABM',
                'section' => 'ABM243',
            ],
            [
                'name' => 'Hatiro Watakani',
                'email' => 'hwatakani@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2022-174823',
                'year' => '1st Year',
                'course' => 'BSCS - SF',
                'section' => 'SF223',
            ],
            [
                'name' => 'Angelo Mandaro',
                'email' => 'amandaro@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2023-816481',
                'grade' => 'Grade 11',
                'course' => 'STEM - Multi Media',
                'section' => 'STEM234',
            ],
            [
                'name' => 'Summer Candace Mandaline',
                'email' => 'scmandaline@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2021-913746',
                'year' => '1st Year',
                'course' => 'BSCS - SF',
                'section' => 'SF212',
            ],
            [
                'name' => 'Moscov Giovanni',
                'email' => 'mgiovanni@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2023-137569',
                'grade' => 'Grade 11',
                'course' => 'HUMMS',
                'section' => 'HUMMS231',
            ],
            [
                'name' => 'Charles Calambas',
                'email' => 'ccalambas@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2020-203817',
                'year' => '1st Year',
                'course' => 'BSCS - SS',
                'section' => 'SS201',
            ],
            [
                'name' => 'John Carlo Jinjiki',
                'email' => 'jcjinjiki@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2021-237169',
                'grade' => 'Grade 12',
                'course' => 'STEM - ',
                'section' => '',
            ],
            [
                'name' => 'John Doe',
                'email' => 'jdoe@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '2023-375923',
                'year' => '2nd Year',
                'course' => 'BSCS - SS',
                'section' => 'SS234',
            ],
            /*[
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' =>0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'jdcruz@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayaka Kamisato',
                'email' => 'akamisato@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],
            [
                'name' => 'Ayato Kamisato',
                'email' => 'akamisato2@student.apc.edu.ph',
                'role' => 0,
                'password' => bcrypt('Sample123456'),
                'school_id' => '',
                'year' => '',
                'course' => '',
                'section' => '',
            ],*/
        ];
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
