<?php require_once './views/partials/head.php'; ?>
<?php require_once './views/partials/nav.php'; ?>
<?php require_once './views/partials/banner.php'; ?>
<main>
 <div class="ml-16 pt-8">
     
    <p>
        <?= $book["names"] ." ".'is a'." ". $book["category"]. " book."?>
    </p>
 </div>
</main>
<?php require_once './views/partials/footer.php'; ?>