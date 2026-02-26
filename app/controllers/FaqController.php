<?php

namespace app\controllers;

class FaqController
{
    public static function showFaq($app)
    {
        $app->render('layout', [
            'page' => 'faq',
            'title' => 'FAQ',
            'description' => 'Vous avez des questions sur l\'IT University ? Admissions, modalités de paiement, diplômes et vie étudiante : trouvez toutes les réponses dans notre FAQ.'
        ]);
    }
}
