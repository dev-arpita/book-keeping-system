<?php require_once './views/partials/head.php'; ?>
<?php require_once './views/partials/nav.php'; ?>
<?php require_once './views/partials/banner.php'; ?>
<main>
<div class="ml-16 pt-8 ">
 <form method="POST" class="flex flex-col max-w-lg gap-6">
    <label for="names">Book Name</label>
    <input type="text" name="names" id="names" >
    <label for="category">Book category</label>
    <input type="text" name="category" id="category">
    <button type="submit" class="border-2 border-blue-800 text-blue-800 font-bold w-[14em] rounded">
      <a href="/books/create">Save</a>
    </button>
 </form>
</main>
<?php require_once './views/partials/footer.php'; ?>