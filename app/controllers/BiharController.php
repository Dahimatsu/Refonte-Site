<?php

namespace app\controllers;

class BiharController
{
    public static function showBihar($app)
    {
        $app->render('layout', [
            'page' => 'bihar',
            'title' => 'Master Big Data & Science des Données',
            'description' => 'Devenez expert en Big Data et Science des Données avec le Master BIHAR de l\'IT University. Découvrez notre programme et formez-vous aux métiers de demain.'
        ]);
    }
}
