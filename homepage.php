<?php 
include 'booksAction.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                <!-- adding books here -->
                <div class="jumbotron">
                    <p class="lead text-center">
                        ADD NEW BOOKS HERE
                    </p>
                </div>
                    <form action="booksAction.php" method="post">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-book"></i>
                                </span>
                            </div>
                            <input type="text" name="bookName" placeholder="BOOK TITLE" id="" class="form-control">
                        </div>

                        <!-- ----------------- -->
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-book-open"></i>
                                </span>
                            </div>
                            <input type="text" name="bookDesc" placeholder="BOOK DESCRIPTION" id="" class="form-control">
                        </div>

                        <button type="submit" name="save_book" class="btn btn-block btn-outline-primary mt-3">SAVE BOOK</button>
                    </form>

                </div>

                <div class="col-md-6">
                <!-- display list of books here -->
                        <table class="table table-bordered table-hover table-info">
                            <thead>
                                <td>Book ID</td>
                                <td>Book Name</td>
                                <td>Book Description</td>
                                <td colspan="2">Manage Book</td>
                            </thead>
                            <tbody>
                                <?php
                                    // $bookList = $booksObj->displayAllBooks();
                                    // foreach($bookList as $book)
                                    // or
                                    foreach($booksObj->displayAllBooks() as $book):
                                        $bookID = $book['book_id'];
                                ?>
                                    <tr>
                                        <td><?php echo $book['book_id'] ?></td>
                                        <td><?php echo $book['book_name'] ?></td>
                                        <td><?php echo $book['book_desc'] ?></td>  
                                        <td><a href="update.php?book_id=<?php echo $bookID ?>" class="btn btn-outline-warning">Update Book</a></td>
                                        <td><a href="delete.php?book_id=<?php echo $bookID ?>" class="btn btn-outline-danger">Delete Book</a></td>
                                    </tr>
                                    
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>