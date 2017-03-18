<?php
namespace BookProject\Model;

class Book
{
    public $title;

    function __construct($title = null)
    {
        $this->title = $title;
    }
}
