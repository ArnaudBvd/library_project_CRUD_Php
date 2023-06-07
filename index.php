<?php
include("parts/header.php");
include("functions.php");
$books = getAllBooks();
?>

<h2 class="text-center text-uppercase mb-4 fst-italic">All the books</h2>

<div class="my-5 d-flex justify-content-center flex-column align-items-center">
    <img src="uploads/book.png" width="100px" alt="">
</div>

<div class="mt-2 mb-3 ms-2 d-flex">
    <form action="addBookForm.php" method="">
        <input type="submit" value="+ ADD BOOK" id="btn-add-book">
    </form>
</div>

<table>
    <thead class="bg-info">
        <tr>
            <th class="text-uppercase text-light fst-italic fs-4">Title</th>
            <th class="text-uppercase text-light fst-italic fs-4">Detail</th>
            <th class="text-uppercase text-light fst-italic fs-4">Edit</th>
            <th class="text-uppercase text-light fst-italic fs-4">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $book) : ?>
            <tr>
                <td class="fs-5"><?php echo $book['title'] ?></td>
                <td><a href="book-detail.php?id=<?php echo $book['book_id'] ?>"><img src="uploads/loupe.png" width="30px" alt=""></a></td>
                <td><a href="updateBookForm.php?id=<?php echo $book['book_id'] ?>&title=<?php echo $book['title'] ?>&content=<?php echo $book['content'] ?>"><img src="uploads/edit.png" alt="" width="30px"></a></td>
                <td><a href="deleteBookForm.php?id=<?php echo $book['book_id'] ?>&title=<?php echo $book['title'] ?>"><img src="uploads/delete.png" alt="" width="30px"></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot class="bg-info">
        <tr>
            <td class="py-2 td_footer"></td>
            <td class="py-2 td_footer"></td>
            <td class="py-2 td_footer"></td>
            <td class="py-2 td_footer"></td>
        </tr>
    </tfoot>
</table>

<?php
include("parts/footer.php");
?>