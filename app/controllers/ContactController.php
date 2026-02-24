<?php

namespace app\controllers;

class ContactController
{
    public static function showContact($app)
    {
        $app->render('layout', [
            'page' => 'contact',
            'title' => 'Contact',
            'description' => 'Faites nous part de vos questions, suggestions ou demandes d\'informations supplémentaires. Nous sommes là pour vous aider et répondre à toutes vos préoccupations concernant nos programmes, les admissions ou tout autre sujet lié à IT University.'
        ]);
    }
}
