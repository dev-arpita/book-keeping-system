<?php require_once './views/partials/head.php'; ?>
<?php require_once './views/partials/nav.php'; ?>
<?php require_once './views/partials/banner.php'; ?>
<main>
 <div class="ml-16 pt-8">
     <ul >
        <?php foreach ($books as $book) : ?>
            <li class="list-disc">
                <a href="/book?id=<?= $book['id'] ?>" class="text-amber-500 hover:underline"> <?= $book["names"] ?> </a>
            </li>
        <?php endforeach; ?>
     </ul>
 </div>
</main>
<?php require_once './views/partials/footer.php'; ?>