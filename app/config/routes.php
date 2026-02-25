<?php

use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

use app\controllers\AccueilController;
use app\controllers\DiplomeController;
use app\controllers\FaqController;
use app\controllers\FormationController;
use app\controllers\MbdsController;
use app\controllers\BiharController;
use app\controllers\ContactController;

/** 
 * @var Router $router 
 * @var Engine $app
 */

$app = Flight::app();

// This wraps all routes in the group with the SecurityHeadersMiddleware
$router->group('', function(Router $router) use ($app) {
	$router->get('/', function () {
		Flight::redirect('/accueil');
	});

	$router->get('/accueil', function () use ($app) {
		AccueilController::showAccueil($app);
	});
	
	$router->get('/diplome', function () use ($app) {
		DiplomeController::showDiplome($app);
	});
	
	$router->get('/faq', function () use ($app) {
		FaqController::showFaq($app);
	});
	
	$router->get('/informatique', function () use ($app) {
		FormationController::showInfo($app);
	});
	
	$router->get('/design', function () use ($app) {
		FormationController::showDesign($app);
	});

	$router->get('/mbds', function () use ($app) {
		MbdsController::showMbds($app);
	});

	$router->get('/bihar', function () use ($app) {
		BiharController::showBihar($app);
	});
	$router->get('/contact', function () use ($app) {
		ContactController::showContact($app);
	});

}, [ SecurityHeadersMiddleware::class ]);