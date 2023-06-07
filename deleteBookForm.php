<?php
include("parts/header.php");
include("functions.php");
$save_title = $_GET['title'];
?>

<h2 class="text-center mb-5 text-uppercase text-danger fst-italic">Delete Book</h2>


<p class="text-center text-danger fs-3">Attention ! vous allez supprimer le livre : <?php echo $save_title ?> </p>

<p class="text-center text-danger fs-3">Pour supprimer ce livre, veuillez recopier le titre dans le champ de saisie</p>

<div class="d-flex justify-content-center">
    <form action="" method="post" class="my-5">

        <label for="title" class="mx-3">Titre du livre :</label>
        <input type="text" name="title">

        <input type="submit" value="SUPPRIMER" class="mx-3" id="btn-delete">
    </form>
</div>

<div class="my-5 d-flex justify-content-center flex-column align-items-center">
    <p class="text-success text-uppercase">Home</p>
    <a href="index.php"><img src="uploads/return.png" width="40px" alt=""></a>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
    if ($save_title == $_POST['title']) {
        deleteBook();
    } else {
        header('Location: error.php');
    }
}
include("parts/footer.php");
?>