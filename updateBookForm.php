<?php
include("parts/header.php");
include('functions.php');
$save_title = $_GET['title'];
?>


<h2 class="text-center mb-5 text-primary fst-italic">UPDATE BOOK</h2>

<p class="text-center text-primary fs-3 mb-5">Attention ! vous vous apprêtez à modifier le livre : <?php echo $save_title ?> </p>

<div class="d-flex justify-content-center">
    <form action="" method="post">

        <label for="title" class="mx-3">Titre du livre :</label>
        <input type="text" name="title">

        <label for="title" class="mx-3">Contenu :</label>
        <input type="text" name="content">

        <input type="submit" value="MODIFIER" class="mx-3" id="btn-update">
    </form>
</div>

<div class="my-5 d-flex justify-content-center flex-column align-items-center">
    <p class="text-success text-uppercase">Home</p>
    <a href="index.php"><img src="uploads/return.png" width="40px" alt=""></a>
</div>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    updateBook();
}
include("parts/footer.php");
?>