<?php
namespace AldiRamdani\E\Sertificate\Controller;

use AldiRamdani\E\Sertificate\App\View;

class GeneralUserController {
    public static function index() : void {
        $model = [
            'title' => 'Sisvakat | Validasi Sertifikat',
            'logo' => 'Sisvakat'
        ];

        View::renderSinglePage('GeneralUser/index', $model);
    }
}