<!DOCTYPE html>
<html lang="en">

<head>
  <title>Gymify | Manager Dashboard</title>
  <!-- Include Global files -->
  <?php require '../components/globals.php' ?>
  <?php require '../components/Review.php' ?>

  <?php require '../backend/models/manager.php' ?>

</head>

<body class="bg-slate-300">
  <?php require '../components/Navigation/Navigation.php' ?>

  <main class="mx-auto container">
    <div class="relative bg-slate-200 container mx-auto">
      <div class="relative w-fit h-fit flex flex-row items-start content-center justify-between">
        <img src="https://placehold.co/150" width="150" height="150" alt="Profile Picture" class="object-cover w-auto h-auto">
        <div class="w-full h-full flex flex-col items-start p-4 space-y-4 content-center justify-evenly">
          <p class="md:text-xl text-lg">
            <?php echo ($_SESSION['user']->getFirstName() . " " . $_SESSION['user']->getLastName()) ?>
          </p>
          <p class="md:text-lg text-base">
            <?php echo ($_SESSION['user']->getEmail()) ?>
          </p>
          <p class="md:text-lg text-base">
            <?php echo ($_SESSION['user']->getPhoneNumber()) ?>
          </p>
        </div>
      </div>
    </div>
    <h1 class="text-2xl lg:text-3xl text-center tracking-wider text-gray-800 p-4">Latest Reviews</h1>
    <div class="grid w-full h-fit grid-cols-1 md:grid-cols-2 lg:grid-cols-3 bg-slate-200 gap-y-4 lg:gap-y-12 py-6 place-items-center">
      <!-- GET REVIEWS FROM DATABASE -->
      <?php
      # get * ALL * reviews from database
      for ($i = 0; $i < 5; $i++) {

      }
      ?>
    </div>
  </main>
</body>

</html>
