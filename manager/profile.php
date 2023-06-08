<!DOCTYPE html>
<html lang="en">

<head>
  <title>Gymify | Manager Dashboard</title>
  <!-- Include Global files -->
  <?php require '../components/globals.php' ?>
  <?php require '../backend/models/manager.php' ?>
</head>

<body class="bg-slate-300">
  <?php require '../components/Navigation/Navigation.php' ?>
  <div class="relative m-4 bg-slate-200">
    <div class="relative flex flex-row items-center content-center justify-between">
      <img src="https://placehold.co/150" width="150" height="150" alt="Profile Picture" class="object-cover w-auto h-auto">
      <div class="w-full h-full flex flex-col items-start px-4 content-center justify-evenly">
        <p>
          <?php
          ?>
        </p>
        <p class="text-lg">Role :
          <small class="text-base">
            <?php echo $_SESSION['role']; ?>
          </small>
        </p>
      </div>
    </div>
  </div>
  <div class="flex-1/4 bg-slate-200">
    <div class="p-4 rounded-lg">
      <h1 class="text-2xl lg:text-3xl text-center tracking-wider text-gray-800 p-4">Reviews</h1>
    </div>
  </div>
</body>

</html>