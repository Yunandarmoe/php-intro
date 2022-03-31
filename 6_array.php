<?php


// Index Array
//$name = "Mg Mg";
//$age = 20;
//$address = "Yangon";

//$user = ["Mg Mg", 20, "Yangon"];


// Associate Array
//$user = ['name' => "Mg Mg", 'age' => 20, 'address' => "Yangon"];
//
//
//echo $user['name'];
//echo $user['age'];
//echo $user['address'];

//$user = [
//  ['name' => "Mg Mg", 'age' => 20, 'address' => "Yangon"];
//  [
//    'name' => "Aye Aye",
//    'age' => 28,
//    'address' => "Mandalay",
//  ],
//]

//
//$users = [ 
//  ['name' => "Aye Aye", 'age' => 30, 'address' => "Mandalay"],
//  [
//      'name' => "Mg Mg",
//      'age' => 28, 
//      'foo' => [
//                  ['bar' => [
//                      'aaa' => [
//                          'bbb' => 'ccc'
//                          ]
//                      ],
//                      'zzz' => 'xyz'
//                  ]
//              ],
//      'address' => [ 'No' => 100, 'Township' => 'Lanmadaw', 'Region' => 'Yangon' ],
//  ],
//];
//
////echo "<pre>";
////print_r($users)[1]["address"];
////echo "</pre>";
//
//echo $users[1]['foo'][0]['bar']['aaa']['bbb'];


# HW
//'name' => "Aye Aye", 'age' => 30, 'address' => "Mandalay" (associated array)
$users = [
    ['name' => "Aye Aye", 'age' => 30, 'address' => "Mandalay"],
    [ // index array
        'name' => "Mg Mg",
        'age' => 28,
        'foo' => [
            [
                'bar' => [
                    'aaa' => [
                        'bbb' => 'ccc',
                        '123' => [
                            456,
                            987 => [
                                'apple', 'orange', 'banana'
                            ]
                        ]
                    ]
                ],
                'zzz' => 'xyz'
            ]
        ],
        'address' => ['No' => 100, 'Township' => 'Lanmadaw', 'Region' => 'Yangon'],
    ],
];
echo $users[1]['foo'][0]['bar']['aaa']['123'][0];
//echo $users[1]['foo'][0]['bar']['aaa']['123'][987][2];

//echo "<pre>";
//print_r($users);
//echo "</pre>";
