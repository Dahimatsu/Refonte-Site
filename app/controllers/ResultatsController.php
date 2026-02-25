<?php

namespace app\controllers;

class ResultatsController
{

    private static function lireCSV($nomFichier)
    {
        $chemin = __DIR__ . '/../../public/assets/data/' . $nomFichier;

        if (!file_exists($chemin)) {
            return [];
        }

        $donnees = [];
        if (($handle = fopen($chemin, "r")) !== FALSE) {
            $enTetes = fgetcsv($handle, 1000, ",");
            if ($enTetes) {
                $enTetes = array_map('trim', $enTetes);

                while (($ligne = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    if (count($enTetes) == count($ligne)) {
                        $donnees[] = array_combine($enTetes, array_map('trim', $ligne));
                    }
                }
            }
            fclose($handle);
        }
        return $donnees;
    }

    public static function showResultats($app)
    {
        $parcours = isset($_GET['parcours']) ? $_GET['parcours'] : 'info';
        $nomFichier = ($parcours === 'design') ? 'resultats_design.csv' : 'resultats_info.csv';

        $tousLesCandidats = self::lireCSV($nomFichier);

        $app->render('layout', [
            'page' => 'resultats',
            'title' => 'Résultats d\'Admission',
            'description' => 'Découvrez la liste des admis et la liste d\'attente de l\'IT University pour la rentrée.',
            'candidats' => $tousLesCandidats, 
            'parcours' => $parcours
        ]);
    }
}