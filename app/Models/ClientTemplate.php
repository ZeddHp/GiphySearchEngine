<?php

namespace App\Models;

class ClientTemplate
{
    protected string $API_KEY;
    protected string $SEARCH_RESULT_LIMIT;
    protected ?string $searchTerm;

    protected int $offset;


    public function __construct()
    {
        $this->API_KEY = $_ENV['API_KEY'];
        $this->SEARCH_RESULT_LIMIT = $_ENV['SEARCH_RESULT_LIMIT'];
        $this->searchTerm = $_GET['searchTerm'];
        $this->offset = rand(0, 4999);
    }

    public function random(): array
    {
        $URLs = [];
        for ($i = 0; $i < $this->SEARCH_RESULT_LIMIT; $i++){
            $uri = "v1/gifs/random?&api_key=$this->API_KEY";
            $response = new ClientRequest($uri);
            $resource = $response->getSearchResults();
            $URLs[] = new Results($resource['images']['fixed_width']['url']);
        }
        return $URLs;
    }

    public function search(): array
    {
        $searchTerm = $_POST['searchTerm'];
        $uri = "v1/gifs/search?q=$searchTerm&api_key=$this->API_KEY&limit=$this->SEARCH_RESULT_LIMIT&offset=$this->offset";
        $response = new ClientRequest($uri);
        $resource = $response->getSearchResults();
        $URLs = [];

        foreach ($resource as $gif) {
            $URLs[] = new Results($gif['images']['fixed_width']['url']);
        }
        return $URLs;
    }

    public function trending(): array
    {
        $uri = "v1/gifs/trending?&api_key=$this->API_KEY&limit=$this->SEARCH_RESULT_LIMIT&offset=$this->offset";
        $response = new ClientRequest($uri);
        $resource = $response->getSearchResults();
        $URLs = [];

        foreach ($resource as $gif) {
            $URLs[] = new Results($gif['images']['fixed_width']['url']);
        }
        return $URLs;
    }
}