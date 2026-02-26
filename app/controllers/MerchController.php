<?php

namespace app\controllers;

class MerchController
{
    public static function showMerch($app)
    {
        $app->render('layout', [
            'page' => 'merch',
            'title' => 'Merchandise',
            'description' => 'Découvrez la boutique officielle de l\'IT University. Sweats, t-shirts et accessoires premium pensés pour les devs. Portez fièrement nos couleurs !'
        ]);
    }
}
