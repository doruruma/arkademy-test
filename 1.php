<?php


# ===================
# Author : Andra Yuda
# ===================


function getProfile($name, $age)
{
    $elementary = new stdClass();
    $elementary->school = 'SDN 3 Kota Tangerang';
    $elementary->year_in = '2008';
    $elementary->year_out = '2014';

    $junior = new stdClass();
    $junior->school = 'MTsN 1 Kota Tangerang';
    $junior->year_in = '2014';
    $junior->year_out = '2017';

    $vocational = new stdClass();
    $vocational->school = 'SMKN 4 Kota Tangerang';
    $vocational->year_in = '2017';
    $vocational->year_out = 'Not Graduated Yet';
    $vocational->major = 'Software Engineer';

    $data = [
        'name' => $name,
        'age' => $age,
        'address' => 'Pesona Lebak Wangi 2 : Blok C1 - 12A Jl. Garuda : Kedaung Barat : Sepatan Timur : Kab. Tangerang',
        'hobbies' => ['Game', 'snack'],
        'is_married' => false,
        'list_of_school' => [
            'elementary_school' => $elementary,
            'junior_high_school' => $junior,
            'vocational_high_school' => $vocational,
        ],
        'skills' => [
            'PHP CodeIgniter' => 'intermediate',
            'PHP Laravel' => 'intermediate',
            'Java' => 'intermideate',
            'Express JS' => 'beginner',
            'HTML & CSS & JS' => 'intermediate'
        ],
        'interest_in_coding' => true
    ];
    echo json_encode($data);
}

getProfile('Andra Yuda', '17');
