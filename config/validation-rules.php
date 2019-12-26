<?php

return [
    'register' => [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email',
        'password' => 'required|string|min:8',
    ],
    'login' => [
        'email' => 'required|string|email|max:255',
        'password' => 'required|string|min:8',
    ],
    'forgot-password' => [
        'email' => 'required|email',
    ],
    'password-reset' => [
        'token' => 'required',
        'password' => 'required|min:8',
    ],
];