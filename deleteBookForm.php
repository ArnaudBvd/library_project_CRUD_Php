<?php
include("parts/header.php");
include("functions.php");
$bookDetails = getDetailBook();
?>

<h2 class="text-center mb-5 text-uppercase">Delete Book</h2>

<?php foreach($bookDetails as $bookDetail): ?>
<p class="text-center text-danger fs-3">Attention ! vous allez supprimer le livre : <?php echo $bookDetail['title'] ?> </p>
<?php endforeach; ?>


<form action="" method="post">

    <label for="title" class="mx-3">Titre du livre :</label>
    <input type="text" name="title">
    <input type="hidden" name="<?php echo $bookDetail['book_id'] ?>">

    <input type="submit" value="SUPPRIMER" class="mx-3" id="btn-delete">
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
    deleteBook();
} 
include("parts/footer.php");
?>