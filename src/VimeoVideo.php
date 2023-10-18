<?php

namespace src;

require_once "AbstractVideo.php";

class VimeoVideo extends AbstractVideo {

    public function __construct(string $title, string $id)
    {
        parent::__construct($title, "Vimeo", $id);             //ist das was von Abstractvideo extended wird -> geht nur mit konstruktor
                                                               //(child has properties of parent)
    }

    /**
     * @return string
     */
    public function getIFrame(): string {
        return '<iframe src="https://player.vimeo.com/video/' . $this->id . '" width="420" height="237" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
    }

}