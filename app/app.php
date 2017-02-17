<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(
        new Silex\Provider\TwigServiceProvider(),
        array('twig.path' => __DIR__.'/../views')
    );

    $app->get('/', function() use ($app) {
        return $app['twig']->render('word_frequency.html.twig');
    });

    $app->post('/', function() use ($app) {
        $search_word = $_POST['search_word'];
        $string_to_search = $_POST['string_to_search'];
        $word_frequency = '';

        if ($search_word && $string_to_search) {
            $newRepeatCounter = new RepeatCounter;
            $word_frequency = (string) $newRepeatCounter->countRepeats($search_word, $string_to_search);
        }

        return $app['twig']->render(
            'word_frequency.html.twig',
            array(
                'search_word' => $search_word,
                'string_to_search' => $string_to_search,
                'word_frequency' => $word_frequency
            )
        );
    });

    return $app;
?>
