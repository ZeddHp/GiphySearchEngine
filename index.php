<?php declare(strict_types=1);

require 'vendor/autoload.php';

include 'app/Views/form.view.twig';
include 'router.php';

use App\Models\GiphyResults;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('app/Views');
$twig = new Environment($loader, [
    'cache' => 'app/cache',
]);

/** @var GiphyResults $response */
echo $twig->render('gifs.view.twig', (array)$response->getURLs());




