<?php 

include __DIR__ . '/autoload.php';

use BookProject\Controller\BookController;
use BookProject\Model as ProjectModel;

$bookController = new BookController();

$book1 = new ProjectModel\Book('Test Book 1');

echo $bookController->detailAction($book1) . PHP_EOL;

$book2 = new ProjectModel\Book('Test Book 2');

echo $bookController->detailAction($book2) . PHP_EOL;
