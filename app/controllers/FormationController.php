<?php

namespace app\controllers;

class FormationController
{
    public static function showInfo($app)
    {
        $app->render('layout', [
            'page' => 'info',
            'title' => 'Formations Informatique',
            'description' => 'IT University est un établissement d’enseignement supérieur privé en informatique créé en 2011,qui a ppour principal objectif de former les futurs professionnels dans les métiers des nouvelles technologies de l’information et de la communication.'
        ]);
    }

    public static function showDesign($app)
    {
        $app->render('layout', [
            'page' => 'design',
            'title' => 'Formations Design',
            'description' => 'IT University est un établissement d’enseignement supérieur privé en informatique créé en 2011,qui a ppour principal objectif de former les futurs professionnels dans les métiers des nouvelles technologies de l’information et de la communication.'
        ]);
    }
}
