<?php 
include 'Database.php';

class Books extends Database{

    public function addBook($bkName,$bkDesc){
        $sql = "INSERT INTO books(book_name,book_desc)VALUES('$bkName','$bkDesc')";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            header('location:homepage.php');

        }else{
            echo "error adding new book";
        }

    }

    public function displayAllBooks(){
        $sql = "SELECT * FROM books";
        $result = $this->conn->query($sql);

        if($result->num_rows>0){
            $booksArray = array();
            while($db_row = $result->fetch_assoc()){
                $booksArray[] = $db_row;
            }

            return $booksArray;


        }else{
            return FALSE;
        }
    }
    public function deleteBook($bookID){
        $sql = "DELETE FROM books WHERE book_id = '$bookID'";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            header('location:homepage.php');
        }else{
            echo "error deleting book";
        }

    }
    public function updateBookInfo($bookID,$bookName,$bookDesc){
        $sql = "UPDATE books SET book_name = '$bookName', book_desc = '$bookDesc' WHERE book_id = '$bookID'";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            header('location:homepage.php');
        }else{
            die($this->conn->error." error updating book");
        }

    }

}


?>