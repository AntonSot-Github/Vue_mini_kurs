<?php
//Данный файл находится в routes/
use Illuminate\Support\Facades\Route;

Route::get('/cars', function () {

    return [

        [
            'id' => 1,
            'manufacturer' => 'Mazda',
            'model' => '323',
            'year' => 1991,
        ],

        [
            'id' => 2,
            'manufacturer' => 'Pegeot',
            'model' => '406',
            'year' => 2007,
        ],

        [
            'id' => 3,
            'manufacturer' => 'Mercedes',
            'model' => '200',
            'year' => 2010,
        ],

        [
            'id' => 4,
            'manufacturer' => 'Skoda',
            'model' => 'SuperB',
            'year' => 2014,
        ],

    ];

});

