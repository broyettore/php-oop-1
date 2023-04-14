<?php

class AnimeMovie {
    public $name;
    public $genre;
    public $lang;
    public $description;
    public $vote;

    public function __construct(string $_name, string $_genre, string $_lang, string $_description, int $_vote)
    {
        $this->name = "Movie: " . $_name;
        $this->genre = "Genre: " . $_genre;
        $this->lang = "Language: " . $_lang;
        $this->description = "Review: " . $_description;
        $this->vote = "Vote: " . $_vote;
    }
};