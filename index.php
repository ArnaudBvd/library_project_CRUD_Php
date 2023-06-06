<?php
include("parts/header.php");
include("functions.php");
$books = getAllBooks();
?>

<h2 class="text-center text-uppercase mb-4">All the books</h2>

<!-- Affiher les livres en BDD -->
<div class="d-flex flex-wrap p-3">

    <?php foreach ($books as $book) : ?>
        <div class="col-3 my-4 d-flex flex-column">
            <p class="text-center text-uppercase"><?php echo $book['title'] ?></p>
            <div class="btn btn-primary w-40 mx-auto">
                <a href="book-detail.php?id=<?php echo $book['book_id'] ?>" class="text-light px-3">DETAIL</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="my-5 d-flex justify-content-center">
    <form action="addBookForm.php" method="">
        <input type="submit" value="AJOUTER UN LIVRE" id="btn-add-book">
    </form>
</div>


<?php
include("parts/footer.php");
?>