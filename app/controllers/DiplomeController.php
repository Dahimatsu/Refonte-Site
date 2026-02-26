<?php

namespace app\controllers;

class DiplomeController
{
    public static function showDiplome($app)
    {
        $app->render('layout', [
            'page' => 'diplome',
            'title' => 'Diplômes',
            'description' => 'Découvrez les diplômes délivrés par l\'IT University. De la Licence au Master en informatique, obtenez une formation reconnue pour exceller dans la Tech.'
        ]);
    }
}
