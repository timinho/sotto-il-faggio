<!DOCTYPE html>

<?php
  include('translations.php');
  include('functions.php');
?>

<html lang="<?php echo getLanguage() ?>">
  <head>
    <?php include('header.php') ?>
  </head>
  <body>

    <header>
      <?php include('logo.php') ?>
    </header>

    <main class="main pt-4">
      <div class="container">
          <?php include('carousel.php') ?>

          <?php include('sm_navigation.php') ?>
          
          <?php include( getPage() . '.php'); ?>
      </div>
    </main>

    <?php include('modals.php') ?>
    <?php include('footer.php') ?>

  </body>
</html>
