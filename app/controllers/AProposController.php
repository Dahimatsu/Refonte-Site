<?php

namespace app\controllers;

class AProposController
{
    public static function showAPropos($app)
    {
        $app->render('layout', [
            'page' => 'apropos',
            'title' => 'À propos - IT University',
            'description' => 'Découvrez l\'histoire, la vision et la pédagogie de l\'IT University Madagascar à Andoharanofotsy.'
        ]);
    }
}