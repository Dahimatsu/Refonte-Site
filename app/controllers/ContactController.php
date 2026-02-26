<?php

namespace app\controllers;

class ContactController
{
    public static function showContact($app)
    {
        $app->render('layout', [
            'page' => 'contact',
            'title' => 'Contact',
            'description' => 'Une question sur nos parcours en informatique ou les admissions ? Contactez l\'équipe de l\'IT University. Nous sommes là pour vous guider !'
        ]);
    }
}
