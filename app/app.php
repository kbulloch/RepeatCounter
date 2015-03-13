<?php
    //require the needed files
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

        //instantiate a new counter object
        $repeat_counter = new RepeatCounter;

        //get user input from the form
        $phrase = $_GET['user_string'];
        $query = $_GET['user_query'];

        //calculate the number of repeats
        $number_of_repeats = $repeat_counter->countRepeats($phrase, $query);

        //render the results page
        return $app['twig']->render('results.twig', array(
            'the_count' => $number_of_repeats,
            'the_string' => $GLOBALS['the_string'],
            'the_query' => $GLOBALS['the_query']
        ));
    });

    return $app;
?>
