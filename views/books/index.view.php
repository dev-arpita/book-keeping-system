<?php view('partials/head.php'); ?>
<?php view('partials/nav.php'); ?>
<?php view('partials/banner.php'); ?>
<main>
 <div class="ml-16 pt-8">
     <ul >
        <?php foreach ($books as $book) : ?>
            <li class="list-disc">
                <a href="/book?id=<?= $book['id'] ?>" class="text-sky-800 font-semibold hover:underline"><?= htmlspecialchars($book["names"]) ?></a>
            </li>
        <?php endforeach; ?>
     </ul>

    <button class="border-2 border-yellow-600 rounded px-4 py-2 mt-8 text-yellow-900 font-bold">
        <a href="/books/create">Create</a>
    </button>
 </div>
</main>
<?php view('partials/footer.php'); ?>