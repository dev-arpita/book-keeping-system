<?php require_once './views/partials/head.php'; ?>
<?php require_once './views/partials/nav.php'; ?>
<?php require_once './views/partials/banner.php'; ?>
<main>
<div class="ml-16 pt-8 ">
 <form action="get" class="flex flex-col max-w-lg gap-6">
    <label for="name">Book Name</label>
    <input type="text" name="name" id="name">
    <label for="category">Book category</label>
    <input type="text" name="category" id="category">
 </form>
</main>
<?php require_once './views/partials/footer.php'; ?>