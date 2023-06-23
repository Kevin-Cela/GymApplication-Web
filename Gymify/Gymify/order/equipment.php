<!DOCTYPE html>
<html>

<head>
  <title>Gymify | Order Equipment</title>
  <!-- Include Global files -->
  <?php require '../components/globals.php' ?>
</head>

<body class="equipment-background">
  <?php require '../components/Navigation/Navigation.php' ?>
  <img src="/assets/logo/svg/logo-no-background.svg" alt="Logo" class="w-28 h-28 lg:mb-6 pt-3 mx-auto">
  <h1 class="text-center text-2xl lg:text-5xl text-logo-orange font-bold drop-shadow-2xl shadow-black py-2 lg:py-6 pb-4">Request Equipment</h1>
  <div class="container mx-auto">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="mx-auto border rounded-lg p-5 border-slate-400 bg-body-light w-9/12 md:w-1/2 lg:w-1/3 drop-shadow-lg shadow-lg ">
      <div class="input-group mb-4">
        <label for="course_name" class="text-slate-800 tracking-wider text-base lg:text-lg">
          Equipment Name
        </label>
        <input type="text" id="course_name" class="input-special" name="name" placeholder="Enter equipment name" value="<?php echo $name; ?>" required>
        <span class="error"><?php echo $nameErr; ?></span>
      </div>
      <div class="input-group mb-4">
        <label for="course_type" class="text-slate-800 tracking-wider text-base lg:text-lg">
          Equipment Type
        </label>
        <select id="course_type" class="input-special" name="type" placeholder="Enter equipment type" required>
          <option value="option_1">Equipment 1</option>
          <option value="option_2">Equipment 2</option>
          <option value="option_3">Equipment 3</option>
          <option value="option_4">Equipment 4</option>
        </select>
        <span class="error"><?php echo $typeErr; ?></span>
      </div>
      <div class="input-group mb-4">
        <label for="numbers" class="text-slate-800 tracking-wider text-base lg:text-lg">
          Number of Equipments
        </label>
        <input type="number" placeholder="Enter number of equipments" class="input-special" id="numbers" name="numbers" min="1" max="10" value="<?php echo $numbers; ?>">
      </div>
      <span class="error"><?php echo $numbersErr; ?></span>
      <label for="course_description" class="text-slate-800 tracking-wider text-base lg:text-lg">Description</label>
      <textarea id="course_description" class="input-special" name="course_description" placeholder="Enter reason of request" value="<?php echo $course_description; ?>" required></textarea>
      <span class="error"><?php echo $descErr; ?></span>
      <div class="w-full flex flex-row items-center content-center justify-evenly">
        <button type="submit" class="w-fit h-fit px-8 py-2 bg-logo-orange hover:bg-body-dark transition-colors duration-500 ease-in-out text-slate-300 tracking-wider">Send</button>
        <a href="/coach/dashboard.php" class="w-fit h-fit px-8 py-2 bg-sky-600 hover:bg-sky-800 transition-colors duration-300 ease-in-out text-slate-300 tracking-wider">
          Back
        </a>
      </div>
    </form>
  </div>
  <?php require '../components/Footer/Footer.php' ?>

</body>

</html>
