<?php

namespace app\controllers;

class MerchController
{
    public static function showMerch($app)
    {
        $app->render('layout', [
            'page' => 'merch',
            'title' => 'Merchandise',
            'description' => 'IT University est un établissement d’enseignement supérieur privé en informatique créé en 2011,qui a pour principal objectif de former les futurs professionnels dans les métiers des nouvelles technologies de l’information et de la communication.'
        ]);
    }
}
