<?php

namespace app\controllers;

class ActualiteController
{
    // public static function showActualite($app)
    // {
    //     $pageId = '100064841042452';
    //     $accessToken = 'access_token';

    //     $url = "https://graph.facebook.com/v19.0/{$pageId}/posts?fields=message,created_time,full_picture,permalink_url&limit=9&access_token={$accessToken}";

    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 

    //     $response = curl_exec($ch);
    //     $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //     curl_close($ch);

    //     $posts = [];
    //     if ($httpCode == 200 && $response) {
    //         $fbData = json_decode($response, true);
    //         if (isset($fbData['data'])) {
    //             $posts = $fbData['data'];
    //         }
    //     }

    //     $app->render('layout', [
    //         'page' => 'actualite',
    //         'title' => 'Actualités & Événements',
    //         'description' => 'Restez informé de toutes les actualités, événements et nouveautés de l\'IT University. Suivez la vie de notre campus et les exploits de nos étudiants !',
    //         'posts' => $posts
    //     ]);
    // }

    public static function showActualite($app)
    {
        $posts = [
            [
                'id' => '101',
                'message' => "🚀 HACKATHON INTERNE ITU : LE GRAND DÉFI EST LANCÉ !
Étudiants de l'ITU (S3 à M2), il est temps de faire briller votre créativité et votre talent ! Nous lançons 3 hackathons exclusifs pour transformer l'ITUniversity.
🎨 1. ITU MERCH DESIGN : Redéfinissez notre identité visuelle (Tee-shirts, Hoodies, Accessoires...). 
💻 2. ITU WEBSITE REDESIGN : Modernisez notre vitrine numérique. 
👥 3. ITU ALUMNI PLATFORM : Bâtissez le réseau de demain.
📅 LE PROGRAMME
Inscriptions : Dès maintenant jusqu'au Jeudi 19/02 à 14h00 !
Regroupement technique : Vendredi 20/02 (Remise des cahiers des charges).
Final : Pitch & Délibération le Vendredi 27/02.
⚠️ INFORMATIONS IMPORTANTES :
Équipes : 3 à 5 personnes.
Places : Limité à 8 équipes par discipline !
🔗 INSCRIVEZ-VOUS ICI : https://docs.google.com/.../1FAIpQLSeYV6.../viewform
#ITU #HackathonInterne #Innovation #StudentLife #Design #Code",
                'created_time' => '2026-02-24T10:00:00+0000',
                'full_picture' => '/assets/images/itu-actu.jpg',
                'permalink_url' => '#'
            ],
            [
                'id' => '102',
                'message' => "Alors les gars, on se donne rendez-vous au Palais des Sports ? 💚🔥 \n#NextGen #ITUniversity #Smatchin2026",
                'created_time' => '2026-02-20T14:30:00+0000',
                'full_picture' => '/assets/images/itu-actu-2.jpg',
                'permalink_url' => '#'
            ],
            [
                'id' => '103',
                'message' => "🏆 Fiers de nos Alumni !\nFélicitations à la promotion qui vient de valider son Master MBDS avec brio. Plus de 80% d'entre eux ont déjà signé leur CDI avant même la remise des diplômes. L'excellence au rendez-vous. 👏✨",
                'created_time' => '2026-02-15T09:15:00+0000',
                'full_picture' => '/assets/images/background/contact-bg-1.jpg',
                'permalink_url' => '#'
            ]
        ];

        $app->render('layout', [
            'page' => 'actualite',
            'title' => 'Actualités & Événements',
            'description' => 'Restez informé de toutes les actualités, événements et nouveautés de l\'IT University. Suivez la vie de notre campus !',
            'posts' => $posts
        ]);
    }
}