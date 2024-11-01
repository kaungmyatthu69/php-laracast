
  
<?php require 'partials/nav.php' ?>
<?php require 'partials/head.php' ?>
<?php require 'partials/banner.php' ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
       <ul>

       <?php foreach ($notes as $note) :?>
        <li>
            <a href="/note?id=<?= $note['id']?>" class="text-blue-500 underline">
            <?= htmlspecialchars($note['body']) ?>
            </a>
        </li>
        <?php endforeach ?>
       </ul>

       <a href='/notes/create' class="text-blue-500 hover:underline mt-5 cursor-pointer">Create new</a>
      

    </div>
  </main>
</div>
<?php require 'partials/footer.php' ?>
