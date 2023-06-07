<?php
include("parts/header.php");
include("functions.php");
$bookDetails = getDetailBook();
?>


<h2 class="text-center mb-5 fst-italic">BOOK TITLE</h2>

<div class="d-flex justify-content-center">
    <?php foreach ($bookDetails as $bookDetail) : ?>
        <div class="card p-5 ">
            <p class="text-center"> <?php echo $bookDetail['title'] ?> </p>
            <p class="text-center"> <?php echo $bookDetail['book_id'] ?> </p>
            <p class="text-center"> <?php echo $bookDetail['content'] ?> </p>
        </div>
    <?php endforeach; ?>
</div>

<div class="my-5 d-flex justify-content-center flex-column align-items-center">
    <p class="text-success text-uppercase">Home</p>
    <a href="index.php"><img src="uploads/return.png" width="40px" alt=""></a>
</div>

<?php
include("parts/footer.php");
?>