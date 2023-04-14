<?php

class HorrorMovie {
    public $name;
    public $genre;
    public $lang;
    public $description;
    public $vote;

    public function __construct(string $_name, string $_genre, string $_lang, string $_description, int $_vote)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->lang = $_lang;
        $this->description = $_description;
        $this->vote = $_vote;
    }
};