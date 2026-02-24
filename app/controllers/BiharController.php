<?php

namespace app\controllers;

class BiharController
{
    public static function showBihar($app)
    {
        $app->render('layout', [
            'page' => 'bihar',
            'title' => 'Master Big Data & Science des Données',
            'description' => 'IT University est un établissement d’enseignement supérieur privé en informatique créé en 2011, qui a ppour principal objectif de former les futurs professionnels dans les métiers des nouvelles technologies de l’information et de la communication.'
        ]);
    }
}
