<?php

namespace app\controllers;

class AccueilController
{
    public static function showAccueil($app)
    {
        $app->render('layout', [
            'page' => 'accueil',
            'title' => 'Accueil',
            'description' => 'IT University est un établissement d’enseignement supérieur privé en informatique créé en 2011,qui a pour principal objectif de former les futurs professionnels dans les métiers des nouvelles technologies de l’information et de la communication.'
        ]);
    }
}
