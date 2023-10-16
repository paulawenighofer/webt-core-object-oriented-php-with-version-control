<?php
interface VideoInterface{
    public function getName(): string;
    public function getSource(): string;
    public function getEmbedCode(): string;
}

abstract class videoAbstract implements VideoInterface {
    protected $name;
    protected $source;

    public function __construct($name, $source) {
        $this->name = $name;
        $this->source = $source;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSource(): string {
        return $this->source;
    }

    abstract public function getEmbedCode(): string;
}

class YouTubeVideo extends videoAbstract {
    private $videoId;

    public function __construct($name, $videoId) {
        parent::__construct($name, "YouTube");
        $this->videoId = $videoId;
    }

    public function getEmbedCode(): string {
        return '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $this->videoId . '" title="' . $this->name . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen> </iframe>';
    }
}
