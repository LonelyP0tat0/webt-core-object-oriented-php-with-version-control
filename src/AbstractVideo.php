<?php

namespace src;    //Hat nichts mit dem Ordner zu tun, gruppiert lediglich Klassen zusammen, um eine Funktion auszuführen                                        

require_once "InterfaceVideo.php";  //Wenn es InterfaceVideo nicht gibt, läuft der code dieses files nichts  

abstract class AbstractVideo implements InterfaceVideo{    //abstrakte klassen braucht man als basisklasse
                                                //von abstrakten klassen sind keine instanzen möglich - man verwendet hier andere klassen mit extends abstrakte klasse 
    protected string $title;                    //Kann von anderen Klassen im CodeBlock verwendet werden, außerhalb aber nicht
    protected string $origin;
    protected string $id;

    /**
     * @param string $title      
     * @param string $origin     //Generiert Dokumentation von Attributen, wird verwendet, um sich im Code zurechtzufinden
     * @param string $id
     */

    public function __construct(string $title, string $origin, string $id)
    {
        $this->title = $title;
        $this->origin = $origin;
        $this->id = $id;
    }

    /**
     * @return string
     */

    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */

    public function getOrigin(): string
    {
        return "from " . $this->origin;    //zeigt origin von video (zb from youtube)
    }

    /**
     * @return string
     */

    abstract public function getIFrame(): string;
}