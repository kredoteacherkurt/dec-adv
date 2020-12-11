<?php 
include 'classes/Books.php';
$booksObj = new Books;



if(isset($_POST['save_book'])){
    $bookName = $_POST['bookName'];
    $bookDesc = $_POST['bookDesc'];

    $booksObj->addBook($bookName,$bookDesc);
}elseif(isset($_POST['update_book'])){
    $bookName = $_POST['bookName'];
    $bookDesc = $_POST['bookDesc'];
    $bookID = $_POST['book_id'];

    $booksObj->updateBookInfo($bookID,$bookName,$bookDesc);
}

?>