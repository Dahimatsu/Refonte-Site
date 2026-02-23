<?php

namespace app\controllers;

class FaqController
{
    public static function showFaq($app)
    {
        $app->render('layout', [
            'page' => 'faq',
            'title' => 'FAQ',
            'description' => 'IT University est un établissement d’enseignement supérieur privé en informatique créé en 2011,qui a ppour principal objectif de former les futurs professionnels dans les métiers des nouvelles technologies de l’information et de la communication.'
        ]);
    }
}
