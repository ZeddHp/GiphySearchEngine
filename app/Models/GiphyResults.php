<?php declare(strict_types=1);

namespace App\Models;

class GiphyResults
{
    private string $title;
    private string $URLs;

    public function __construct(string $path, string $URLs)
    {
        $this->title = $path;
        $this->URLs = URLs;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getURLs(): string
    {
        return $this->URLs;
    }

}