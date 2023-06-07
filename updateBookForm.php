<?php
include("parts/header.php");
?>


<h2 class="text-center mb-5 text-primary fst-italic">UPDATE BOOK TITLE</h2>

<form action="" method="post">
    <label for="connected_user" class="mx-3">"Utilisateur connecté"</label>

    <label for="title" class="mx-3">Titre du livre :</label>
    <input type="text" name="title">

    <input type="submit" value="MODIFIER" class="mx-3" id="btn-update">
</form>

<div class="my-5 d-flex justify-content-center flex-column align-items-center">
    <p class="text-success text-uppercase">Home</p>
    <a href="index.php"><img src="uploads/return.png" width="40px" alt=""></a>
</div>

<?php
include("parts/footer.php");
?>