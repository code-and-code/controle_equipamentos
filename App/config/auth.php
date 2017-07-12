<?php

return [
    'auth' => [
        'class'          => 'App\Models\Usuario',
        'viewLogin'      => 'login',
        'viewRegister'   => 'register',
        'required'       => ['email','password'],
        'redirect'       => '/user',
        'notauthorized'  => '/login/entrar'
    ],

];
