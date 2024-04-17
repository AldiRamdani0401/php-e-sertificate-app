<?php

namespace AldiRamdani\E\Sertificate\App;

class View {
    public static function render(string $view, $model) {
        require __DIR__ . '/../View/template/header.php';
        require __DIR__ . '/../View/' . $view . '.php';
        require __DIR__ . '/../View/template/footer.php';
    }

    public static function renderSinglePage(string $view, $model){
        require __DIR__ . '/../view/' . $view . '.php';
    }
}