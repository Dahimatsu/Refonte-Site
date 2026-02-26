<?php

namespace app\controllers;

class InscriptionController
{
    public static function showInscription($app)
    {
        $app->render('layout', [
            'page' => 'inscription',
            'title' => 'Inscription',
            'description' => 'Prêt à rejoindre l\'élite de la tech ? Découvrez les modalités d\'inscription à l\'IT University et déposez votre candidature pour la prochaine rentrée.'
        ]);
    }
}
