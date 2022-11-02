<?php
use App\Models\BooksModel;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Joshua Bennet's PHP Book Collection App" />
    <title>Book Collection</title>
</head>
<body>
<h1>Books</h1>
<div>My Books</div>
    <div>
        <section class="bookShelf">
            <?php
            foreach ($books as $book){
                echo createBook($book);
            }
            ?>
        </section>
    </div>
</body>
</html>
