<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <!-- Include Global files -->
  <?php require './components/globals.php' ?>

  <style>
    body {
      font-family: ./assets/font/Spectral Bold.ttf;
      background-color: #f1f1f1;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ff5733;
      border: 1px solid #dddddd;
      border-radius: 40px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 30px;
      margin-bottom: 30px;

    }
    .fjala {
      text-align: center;
      font-size: 30px;
      }
    .container input[type="text"],
    .container input[type="number"],
    .container input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      background-color: lightgrey;

      border-radius: 20px;
    }
      .container textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    background-color: lightgrey;
    border-radius: 20px;
    resize: vertical;
  }
  
    .container button {
      background-color: #EA3C12;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      border-radius: 20px;

    }
    .container button:hover {
      opacity: 0.8;
      transition-duration: 1s;


    }
    .error {
      color: red;
      margin-bottom: 10px;
    }
    .logo_vogel{
      width: 100px;
      height: 100px;
      margin: 0 auto;
    }
        .links {
      text-align: left;
      margin-top: 10px;
    }
    .links a {
      text-decoration: none;
      margin: 0 5px;
    }
    .container .form-row {
      display: flex;
      justify-content: space-between;
    }
    .container .form-row .input-group {
      width: 48%;
    }
    
  </style>
</head>
<body>
  <?php require './components/Navigation.php' ?>

  <?php
    $nameErr = $typeErr = $numbersErr = $descErr ='';
    $name = $type = $numbers = $desc = '';

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

      if (empty($_POST['numbers'])) {
        $numbersErr = 'Equipment number is required';
      } else {
        $numbers = test_input($_POST['numbers']);
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

<img src="./assets/logo/png/Logo_black_2.png" alt="Logo" class="logo_vogel">

<div class="fjala">
  <h1> Equipment Request </h1>
</div>


  <div class="container bg-footer-dark w-9/12 md:w-1/2 lg:w-1/3">

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      
        <div class="form-row">
        <div class="input-group">
          <label for="name" style = "color: #ECEAE2;">Course Name:</label>
          <input type="text" id="name" name="name" placeholder="Enter equipment name" value="<?php echo $name; ?>" required>
          <span class="error"><?php echo $nameErr; ?></span>
        </div>
        <div class="input-group">
          <label for="type" style = "color: #ECEAE2;">Course Type:</label>
          <input type="text" id="type" name="type" placeholder="Enter equipment type" value="<?php echo $type; ?>" required>
          <span class="error"><?php echo $typeErr; ?></span>
        </div>
      </div>

      <label for="numbers" style="color: #ECEAE2;">Number of Equipments:</label><br>
      <input type="number" id="numbers" name="numbers" min="1" max="10" value="<?php echo $numbers; ?>">
      <br>
      <span class="error"><?php echo $numbersErr; ?></span>
      <script>
      const input = document.getElementById('numbers');
      input.addEventListener('input', function() {
        if (input.value < 1) {
            input.value = 1;
            } else if (input.value > 10) {
                input.value = 10;
                }
                });
                </script>
      
      <label for="desc" style = "color: #ECEAE2;">Description:</label>
      <textarea id="email" name="desc" placeholder="Enter reason of request" value="<?php echo $desc; ?>" required></textarea>
      <span class="error"><?php echo $descErr; ?></span>
   
    </form>
          <button type="submit">Send</button>
          <button onclick="redirectToPage()">Back</button>
          <script>
          function redirectToPage() {
            window.location.href = '/coachDashboard.php';
            }
            </script>

      </div>
  <?php require './components/Footer/Footer.php' ?>

</body>
</html>


