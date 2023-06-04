<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Gymify</title>
  <!-- Include Global files -->
  <?php require './components/globals.php' ?>
</head>

<body>
  <?php require './components/Navigation.php' ?>
  <main class="container mx-auto pb-12">
    <div class="w-full h-fit p-4 lg:p-20 flex flex-col gap-4 md:gap-6 lg:gap-0 md:flex-row items-center content-center justify-center">
      <?php require './components/Index/Information.php' ?>
      <?php require './components/Index/FloatingLogo.php' ?>
    </div>
    <div class="w-full h-fit p-4 flex flex-col lg:flex-row gap-6 md:gap-8 lg:gap-0 items-center content-center justify-center">
      <?php require './components/Index/RegisterGymButton.php' ?>
      <?php require './components/Index/ClientButton.php' ?>
    </div>
    <?php require './components/Index/Slideshow.php' ?>
    <?php require './components/Index/ClientHeading.php' ?>
    <?php require './components/Index/RegisterClientButton.php' ?>
  </main>
  <?php require './components/Footer/Footer.php' ?>
</body>

</html>
