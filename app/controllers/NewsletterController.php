<?php

namespace app\controllers;

class NewsletterController
{
    public static function subscribe($app)
    {
        $email = $app->request()->data->emailNewsletter;

        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $date = date('Y-m-d H:i:s');
            $ligne = "[{$date}] - {$email}" . PHP_EOL;


            $dossier = 'assets/data';
            $fichier = $dossier . '/abonnes_newsletter.txt';

            if (!is_dir($dossier)) {
                mkdir($dossier, 0777, true);
            }

            // 3. On écrit dans le fichier
            file_put_contents($fichier, $ligne, FILE_APPEND | LOCK_EX);
        }

        $app->redirect($app->request()->referrer);
    }
}
