<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;

Route::get('/', function () {
    /*return view('home',[
        'greeting' => 'Hello', //greeting
        'name' => 'Sandeep Kushwaha'
    ]);*/

    return view('home',[
        'jobs' => [
            [
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'title' => 'Teacher',
                'salary' => '$40,000'
            ]
        ]
    ]);
});

Route::get('/about', function () {
    //return "About Page";
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// $jobs = [
//         [
//             'id' => 1,
//             'title' => 'Director',
//             'salary' => '$50,000'
//         ],
//         [
//             'id' => 2,
//             'title' => 'Programmer',
//             'salary' => '$10,000'
//         ],
//         [
//             'id' => 3,
//             'title' => 'Teacher',
//             'salary' => '$40,000'
//         ],
// ];

// class Job {
//     public static function all() {
//         return [
//             [
//                 'id' => 1,
//                 'title' => 'Director',
//                 'salary' => '$50,000'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Programmer',
//                 'salary' => '$10,000'
//             ],
//             [
//                 'id' => 3,
//                 'title' => 'Teacher',
//                 'salary' => '$40,000'
//             ],
//         ];
//     }
// }

Route::get('/jobs', function () {
    return view('jobs',['jobs'=> Job::all()]);
});

Route::get('/job/{id}', function($id) {
    
    // $job = Arr::first($jobs, function($job) use ($id){
    //     return $job['id'] === $id;
    // });

    //$job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);
    $job = Job::find($id);

    return view('job',['job' => $job]);
});

