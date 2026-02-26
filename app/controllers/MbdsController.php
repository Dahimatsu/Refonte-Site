<?php

namespace app\controllers;

class MbdsController
{
    public static function showMbds($app)
    {
        $app->render('layout', [
            'page' => 'mbds',
            'title' => 'Master Big Data & Science des Données',
            'description' => 'Devenez un spécialiste de la data avec le Master MBDS de l\'IT University. Maîtrisez le Big Data et la Data Science pour propulser votre carrière IT.'
        ]);
    }
}
