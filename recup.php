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