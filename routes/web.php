<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});



Route::get('/posts', function () {
    $posts = [
        [
            'id' => 1,
            'slug' => 'first-post',
            'title' => 'First Post',
            'author' => 'Mhd Firdaus',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        ],
        [
            'id' => 2,
            'slug' => 'second-post',
            'title' => 'Second Post',
            'author' => 'Nisa Madina',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        ],
        [
            'id' => 3,
            'slug' => 'third-post',
            'title' => 'Third Post',
            'author' => 'Aulia Rahman',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        ],
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'first-post',
            'title' => 'First Post',
            'author' => 'Mhd Firdaus',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        ],
        [
            'id' => 2,
            'slug' => 'second-post',
            'title' => 'Second Post',
            'author' => 'Nisa Madina',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        ],
        [
            'id' => 3,
            'slug' => 'third-post',
            'title' => 'Third Post',
            'author' => 'Aulia Rahman',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        ],
    ];
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] === $slug;
    });
    return view('post', ['title' => $post['title'], 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
