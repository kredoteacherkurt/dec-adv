<?php 
include 'booksAction.php';

$book_id =  $_GET['book_id'];

$booksObj->deleteBook($book_id);
?>