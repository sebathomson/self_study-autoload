<?php 
namespace BookProject\Controller;

class BookController
{
    public function detailAction(\BookProject\Model\Book $book)
    {
        return $book->title;
    }
}
