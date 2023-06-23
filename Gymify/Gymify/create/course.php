<!DOCTYPE html>
<html>

<head>
  <title>Registration Form</title>
  <!-- Include Global files -->
  <?php require '../components/globals.php' ?>

  <style>
    .btn {
      background-color: #EA3C12;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      border-radius: 20px;

    }
    .btn:hover {
      opacity: 0.8;
      transition-duration: 1s;
    }
  </style> 
</head>

<body class = "login-background">
  <?php require '../components/Navigation/Navigation.php' ?>

  <?php
  $nameErr = $typeErr = $peopleErr = $descErr = '';
  $name = $type = $people = $desc = '';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['name'])) {
      $nameErr = 'Name is required';
    } else {
      $name = test_input($_POST['name']);
    }

    if (empty($_POST['type'])) {
      $typeErr = 'Type is required';
    } else {
      $type = test_input($_POST['type']);
    }

    if (empty($_POST['people'])) {
      $peopleErr = 'People number is required';
    } else {
      $people = test_input($_POST['people']);
    }

    if (empty($_POST['desc'])) {
      $descErr = 'Description is required';
    } else {
      $desc = test_input($_POST['desc']);
    }


    // If there are no errors, you can process the form data further (e.g., store in a database)
    if (empty($nameErr) && empty($typeErr) && empty($peopleErr) && empty($descErr)) {

      header('Location: success.php');
      exit();
    }
  }

  ?>

  <img src="../assets/logo/svg/logo-no-background.svg" alt="Logo" class="w-28 h-28 mb-6 pt-3 mx-auto">

  <h1 class="text-center text-2xl lg:text-3xl text-slate-200">
Create New Course  </h1>


  <div class="my-10 shadow-lg drop-shadow-lg mx-auto p-4 lg:p-8 border border-slate-300 rounded-xl bg-body-light w-10/12 md:w-10/12 lg:w-1/2 xl:w-1/3">

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

      <div class="form-row">
      <div class="w-full h-fit">
          <label for="name" class="text-slate-800 tracking-wider text-base lg:text-lg">Course Name:</label>
          <input type="text" id="name" name="name" class="input-special" placeholder="Enter course name" value="<?php echo $name; ?>" required>
          <span class="error"><?php echo $nameErr; ?></span>
        </div>
      <div class="w-full h-fit">
          <label for="type" class="text-slate-800 tracking-wider text-base lg:text-lg">Course Type:</label>
          <input type="text" id="type" name="type"class="input-special"  placeholder="Enter course type" value="<?php echo $type; ?>" required>
          <span class="error"><?php echo $typeErr; ?></span>
        </div>
      </div>
            <label for="startTime" class="text-slate-800 tracking-wider text-base lg:text-lg">Start Time:<br>
      <input type="time" id="startTime" name="startTime" class="input-special" required>

      <label for="endTime" class="text-slate-800 tracking-wider text-base lg:text-lg">End Time:<br>
      <input type="time" id="startTime" name="startTime" class="input-special" required>

      <label for="date" class="text-slate-800 tracking-wider text-base lg:text-lg">Date:<br>
      <input type="date" id="date" class="input-special" name="date" required>

      
      <label for="price" class="text-slate-800 tracking-wider text-base lg:text-lg">Enter Price in $:<br>
      <input type="number" id="price" class="input-special" placeholder="Enter course price" name="price" min="0" step="0.01" value="<?php echo $price; ?>">

      <label for="people" class="text-slate-800 tracking-wider text-base lg:text-lg">Max Number of People to Attend:</label><br>
      <input type="number" id="people" class="input-special" placeholder="Enter amount of people to attend" name="people" min="1" max="50" value="<?php echo $people; ?>">
      
      
      <br>
      <span class="error"><?php echo $peopleErr; ?></span>
      <script>
        const input = document.getElementById('people');
        input.addEventListener('input', function() {
          if (input.value < 1) {
            input.value = 1;
          } else if (input.value > 50) {
            input.value = 50;
          }
        });
      </script>

      <label for="desc" class="text-slate-800 tracking-wider text-base lg:text-lg">Description:</label>
      <textarea id="email" name="desc" class="input-special" placeholder="Enter course description" value="<?php echo $desc; ?>" required></textarea>
      <span class="error"><?php echo $descErr; ?></span>

    </form>
          <button type="submit" class="btn bg-orange-600">Register</button>
          <button onclick="redirectToPage()" class="btn bg-red-600">Back</button>
          <script>
          function redirectToPage() {
            window.location.href = '/coach/dashboard.php';
            }
            </script>

      </div>
  <?php require '../components/Footer/Footer.php' ?>

</body>

</html>