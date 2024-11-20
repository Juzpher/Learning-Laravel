<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => "$50,000",
            ],
            [
                'id' => 2,
                'title' => 'Manager',
                'salary' => "$40,000",
            ],
            [
                'id' => 3,
                'title' => 'Engineer',
                'salary' => "$30,000",
            ],
            [
                'id' => 4,
                'title' => 'Intern',
                'salary' => "$10,000",
            ],
        ],
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => "$50,000",
        ],
        [
            'id' => 2,
            'title' => 'Manager',
            'salary' => "$40,000",
        ],
        [
            'id' => 3,
            'title' => 'Engineer',
            'salary' => "$30,000",
        ],
        [
            'id' => 4,
            'title' => 'Intern',
            'salary' => "$10,000",
        ],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
