<?php require_once view('.partials/head.php'); ?>
<?php require_once view('.partials/nav.php'); ?>
<?php require_once view('.partials/banner.php'); ?>
<main>
 <div class="ml-16 pt-8">
    <div class="pb-8">
        <a href="/books" class="text-sky-800 text-xl">Go back....</a>
    </div>
    <p>
        <?= $book["names"] ." ".'is a'." ". $book["category"]. " book."?>
    </p>
 </div>
</main>
<?php require_once view('.partials/footer.php'); ?>