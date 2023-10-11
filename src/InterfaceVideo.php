<?php

namespace src;

interface InterfaceVideo {               //Interface gibt funktionen vor die in der klasse die es implementiert unbedingt vorkommen müssen
    function getTitle(): string;
    function getOrigin(): string;
    function getIFrame(): string;
}