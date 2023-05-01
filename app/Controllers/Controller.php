<?php

namespace App\Controllers;

use App\Models\ClientTemplate;
use App\Models\GiphyResults;


class Controller
{
    public function trending(): GiphyResults{
        $clientTemplate = new ClientTemplate();
        $gifs = $clientTemplate->trending();
        return new GiphyResults('gifs.view.twig', ['gifs' => $gifs]);
    }

    public function random(): GiphyResults{
        $clientTemplate = new ClientTemplate();
        $gifs = $clientTemplate->random();
        return new GiphyResults('gifs.view.twig', ['gifs' => $gifs]);
    }


    public function search(): GiphyResults{
        $clientTemplate = new ClientTemplate();
        $gifs = $clientTemplate->trending();
        return new GiphyResults('gifs.view.twig', ['gifs' => $gifs]);
    }

    public function home(): void{

    }
}