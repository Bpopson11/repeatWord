<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/WordRepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });


    $app->get("/toCount", function() use ($app) {
        $new_search = new WordRepeatCounter;
        $word_search = $new_search->stringWordCount($_GET['sentence'], $_GET['find']);
        return $app['twig']->render('index.html.twig', array('result' => $word_search));
    });

    return $app;
?>
