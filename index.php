<?php
include("parts/header.php");
include("functions.php");
$books = getAllBooks();
?>

<h2>All the books</h2>

<!-- Affiher les livres en BDD -->

<?php foreach ($books as $book) : ?>
    <a href="book-detail.php?id=<?php echo $book['book_id'] ?>"><p><?php echo $book['title'] ?></p></a>
<?php endforeach; ?>

<br>

<form action="addBookForm.php" method="">
    <input type="submit" value="Ajouter un livre">
</form>



<?php
include("parts/footer.php");
?>