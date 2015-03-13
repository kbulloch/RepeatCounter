<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    //instantiate new silex object
    $app = new Silex\Application();

    //make sure twig is pointed at views directory
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));

    //set up the home page route
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    //set up the results page route
    $app->get("/results", function() use ($app) {
        $phrase = $_GET['user_string'];
    });

    return $app;
?>
