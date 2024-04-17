<?php

namespace AldiRamdani\E\Sertificate\Controller;

use AldiRamdani\E\Sertificate\App\View;

class HomeController {
    public static function index(): void {
        $model = [
            'title' => 'Sisvakat | Home',
        ];
        View::render('Home/index', $model);
    }

    public static function register(): void {
        $model = [
            'title' => 'Sisvakat | Register',
        ];
        View::renderSinglePage('Home/register', $model);
    }

    public static function login(): void {
        $model = [
            'title' => 'Sisvakat | Login',
        ];
       View::renderSinglePage('Home/login', $model);
    }
}