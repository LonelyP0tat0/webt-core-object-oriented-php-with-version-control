<?php

namespace src;

require_once "AbstractVideo.php";

class YouTubeVideo extends AbstractVideo {

    public function __construct(string $title, string $id)
    {
        parent::__construct($title, "YouTube", $id);
    }

    /**
     * @return string        //Kommentar dokumentiert die erstellten Variablen        
     */

    public function getIFrame(): string {
        return '<iframe src="https://www.youtube.com/embed/' . $this->id . '?autoplay=1&mute=1 " width="420" height="237" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' ;
    }
}