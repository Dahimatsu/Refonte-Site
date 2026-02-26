<?php

namespace app\controllers;

class FormationController
{
    public static function showInfo($app)
    {
        $app->render('layout', [
            'page' => 'info',
            'title' => 'Formations Informatique',
            'description' => 'Formez-vous aux métiers du développement à l\'IT University. De la programmation à l\'architecture logicielle, créez l\'avenir du numérique avec nous.'
        ]);
    }

    public static function showDesign($app)
    {
        $app->render('layout', [
            'page' => 'design',
            'title' => 'Formations Design',
            'description' => 'Révélez votre créativité avec la formation Design de l\'IT University. Maîtrisez l\'UI/UX, le graphisme et la création numérique. Lancez votre carrière !'
        ]);
    }
}
