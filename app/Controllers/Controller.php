<?php

namespace App\Controllers;

use App\Models\ClientTemplate;
use App\Models\GiphyResults;


class Controller
{
    public function trending(): GiphyResults{
        $giphyClient = new ClientTemplate();
        $gifCollection = $giphyClient->trending();
        return new GiphyResults('gifs.view.twig', ['gifs' => $gifCollection]);
    }

    public function random(): GiphyResults{
        $giphyClient = new ClientTemplate();
        $gifCollection = $giphyClient->random();
        return new GiphyResults('gifs.view.twig', ['gifs' => $gifCollection]);
    }


    public function search(): GiphyResults{
        $giphyClient = new ClientTemplate();
        $gifCollection = $giphyClient->search();
        return new GiphyResults('gifs.view.twig', ['gifs' => $gifCollection]);
    }

    public function home(): void{

    }
}