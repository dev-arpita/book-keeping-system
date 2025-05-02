<?php require_once './views/partials/head.php'; ?>
<?php require_once './views/partials/nav.php'; ?>
<?php require_once './views/partials/banner.php'; ?>
<main>
 <div class="ml-16 pt-8">
     <ul >
        <?php foreach ($books as $book) : ?>
            <li class="list-disc">
                <a href="/book?id=<?= $book['id'] ?>" class="text-amber-500 hover:underline"> <?= htmlspecialchars($book["names"]) ?></a>
            </li>
        <?php endforeach; ?>
     </ul>

    <button class="border-2 border-indigo-700 rounded px-4 py-2 mt-8 text-fuchsia-500 font-bold">
        <a href="/books/create">Create</a>
    </button>
 </div>
</main>
<?php require_once './views/partials/footer.php'; ?>