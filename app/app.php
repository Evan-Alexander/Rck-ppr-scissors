<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    session_start();
    if (empty($_SESSION['game'])) {
        $_SESSION['game'] = array();
    }


    $app->get("/", function() use ($app){
        return $app['twig']->render('game_entry.html.twig');
    });

    $app->post("/view_results", function() use ($app) {
        $game = new RockPaperScissors;
        $get_game = $game->playGame($_POST['player1'], $_POST['player2'] );
        return $app['twig']->render('result.html.twig', array("result" =>
        $get_game));
    });

    return $app;
