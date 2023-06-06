<?php
include("parts/header.php");
include("functions.php");
$bookDetails = getDetailBook();
?>


<h2 class="text-center mb-5">Book TITLE</h2>

<div class="d-flex justify-content-center">
    <?php foreach ($bookDetails as $bookDetail) : ?>
        <div class="card p-5 ">
            <p class="text-center"> <?php echo $bookDetail['title'] ?> </p>
            <p class="text-center"> <?php echo $bookDetail['book_id'] ?> </p>
            <p class="text-center"> <?php echo $bookDetail['content'] ?> </p>
        </div>
    <?php endforeach; ?>
</div>

<?php
include("parts/footer.php");
?>