<?php
date_default_timezone_set("Europe/Amsterdam");


$team = [
    //firstname
    'Rowin' => [
        'Surname'   => 'van Gils',
        'DoB'       => '20/05/2004',
        'Age'       => 19,
        'Height'    => 1.73,
        'IsStudent' => true,
        'Grades'    => [
            'Frontend'      => 7.8,
            'Backend'       => 8.0,
            'Vaardigheden'  => 8
        ],
        'FavColors' => [
            'Blue',
            'Purple'
        ],
        'Hobbies'   => [
            'Skating',
            'Gaming',
            'Guitar'
        ],
        'Contact'   => 'rowinvgils@gmail.com',
        'address'   => 'nergens',
    ],

    'Barry' => [
        'Surname'   => 'van den Berg',
        'Dob'       => '18/03/2004',
        'Age'       => 19,
        'Height'    => 1.83,
        'IsStudent' => true,
        'Grades'    => [
            'Frontend'      => 6.0,
            'Backend'       => 8.0,
            'Vaardigheden'  => 1.0
        ],
        'FavColors' => [
            'Aquamarine',
            'Beaver' //de kleur niet het dier
        ],
        'Hobbies'   => [
            'Gamen',
            'Muziek'
        ],
        'Contact'   => 'barryvdnberg@gmail.com',
        'address'   => 'alkmaar'
    ]
];

foreach($team as $member => $modules) {
    $v ='/views/details.view.php?var='.$member;
    echo "<div>
            <h3>
                
                <a href='$v'>$member</a>
            </h3>
            <p>";
//    foreach($modules as $module) {
//        echo $module . "<br>";
//    }
//    echo "</p></div>";

}

