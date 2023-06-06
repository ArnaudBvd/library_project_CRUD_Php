<?php
include("parts/header.php");
include("functions.php");
$bookDetails = getDetailBook();
?>


<h2>Book TITLE</h2>

<?php foreach($bookDetails as $bookDetail): ?>
<p> <?php echo $bookDetail['title'] ?> </p>
<p> <?php echo $bookDetail['book_id'] ?> </p>
<p> <?php echo $bookDetail['content'] ?> </p>
<?php endforeach; ?>


<?php
include("parts/footer.php");
?>