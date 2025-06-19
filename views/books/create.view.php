<?php require_once base_path('/views/partials/head.php'); ?>
<?php require_once base_path('/views/partials/nav.php'); ?>
<?php require_once base_path('/views/partials/banner.php'); ?>
<main>
<div class="ml-16 pt-8 ">
 <form method="POST" class="flex flex-col max-w-lg gap-6">

    <label for="names" class="text-yellow-900 font-bold">Book Name</label>
    <input type="text" name="names" id="names" class="px-2 py-1" placeholder="Type here..."
    value="<?= isset($_POST["names"]) ? $_POST["names"] : "" ?>">
    <?php if(isset($errors['names'])):?>
      <p class="text-red-500 text-xs">
        <?= $errors['names'];?>
      </p>
    <?php endif;?>

    <label for="category" class="text-yellow-900 font-bold">Book category</label>
    <input type="text" name="category" id="category" class="px-2 py-1" placeholder="Type here..."
    value="<?= isset($_POST["category"]) ? $_POST["category"] : "" ?>">
    <?php if(isset($errors['category'])):?>
      <p class="text-red-500 text-xs">
        <?= $errors['category']?>
      </p>
    <?php endif;?>

    <button type="submit" class="border-2 border-yellow-600 text-yellow-900 font-bold w-[14em] rounded">
      <a href="/books/create">Save</a>
    </button>
 </form>
</main>
<?php require_once base_path('/views/partials/footer.php');?>