<!DOCTYPE html>
<html lang="en">

<head>
  <!-- DO NOT FORGET TO INCLUDE THESE TAGS -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Gymify | Log In</title>
  <!-- Include Global files -->
  <?php require './components/globals.php' ?>
</head>

<style>
  @keyframes fade-in {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  .fade-in {
    animation: fade-in 0.3s ease-in-out;
  }
</style>

<body>
  <?php require './components/Navigation.php' ?>
  <?php require './components/Login/Validate.php' ?>

<?php
$userName = "Kak Kaka";
$profilePic = "/assets/images/gym/GymPhoto1.jpeg";
?>

<div class="w-full h-fit flex flex-col lg:flex-row items-start justify-start my-0">
  <div class="flex-1 lg:w-1/3 p-4 rounded-lg">
    <div class="flex flex-col items-start">

      <div class="bg-white p-6 rounded-lg">
        <div class="rounded-full overflow-hidden w-16 h-16 mb-4">
          <img src="<?php echo $profilePic; ?>" alt="Profile Picture" class="object-cover w-full h-full">
        </div>
        <h1 class="text-2xl lg:text-3xl font-bold text-gray-800"><?php echo $userName; ?></h1>
      </div>
    </div>
  </div>
  



<div class="flex-1 lg:w-1/3 bg-[#fcdfd8] p-4 rounded-lg">
  <h1 class="text-2xl lg:text-3xl text-left font-bold text-gray-800 p-4">Review</h1>
  <button id="addReviewBtn" class="bg-orange-600 hover:bg-transparent hover:text-slate-800 transition-colors duration-300 text-white rounded-full p-4">
    +
  </button>
  <div id="reviewContent" class="hidden opacity-0 transition-opacity duration-200">
    <form id="reviewForm">
      <div class="flex flex-col space-y-4">
        <div>
          <label for="name" class="text-gray-800">Name:</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" class="w-full px-4 py-2 bg-gray-100 rounded-lg" required>
        </div>
        <div>
          <label for="surname" class="text-gray-800">Surname:</label>
          <input type="text" id="surname" name="surname" placeholder="Enter your surname" class="w-full px-4 py-2 bg-gray-100 rounded-lg" required>
        </div>
        <textarea id="reviewTextarea" class="w-full px-4 py-2 bg-gray-100 rounded-lg" placeholder="Write your review"></textarea>
        
        <!--Cuna ktu do beni lidhjen me menaxherin qe ti shkoj kjo review-->
        <button type="submit" class="bg-orange-600 hover:bg-transparent hover:text-slate-800 transition-colors duration-300 text-white rounded-full py-2 px-4">
          Send
        </button>
      </div>
    </form>
  </div>
  <div id="reviewList" class="mt-4 hidden">
    <div class="bg-white p-4 rounded-lg">
      <h1 class="text-xl font-bold text-gray-800">Latest Review:</h1>
      <div id="latestReview" class="mt-2"></div>
    </div>
  </div>
</div>

<div class="flex-1 lg:w-1/3 bg-[#f6a38f] p-4 rounded-lg">
  <h1 class="text-2xl lg:text-3xl text-left font-bold text-gray-800 p-4">Settings</h1>
  <a href="/newCourse.php" class="block bg-orange-600 text-slate-100 text-lg font-semibold py-2 px-4 rounded-md hover:bg-transparent hover:text-slate-800 transition-colors duration-300 text-center">
    Create New Course
  </a>
  <br>
    <a href="/newEquipment.php" class="block bg-orange-600 text-slate-100 text-lg font-semibold py-2 px-4 rounded-md hover:bg-transparent hover:text-slate-800 transition-colors duration-300 text-center">
    Equipment Request
  </a>
  <!--Cuna ju duhet me bo qe kur te behet logout te fshihen te dhenat-->
  <a href="/logout.php" class="block bg-red-600 text-slate-100 text-lg font-semibold py-2 px-4 rounded-md hover:bg-transparent hover:text-slate-800 transition-colors duration-300 text-center mt-4">
    Logout
  </a>
</div>

</div>
<script>
  reviewForm.addEventListener("submit", function(event) {
    event.preventDefault();

    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;
    var review = document.getElementById("reviewTextarea").value;

    var reviewItem = document.createElement("div");
    reviewItem.classList.add("bg-white", "p-4", "rounded-lg", "mb-4");
    reviewItem.innerHTML = `
      <h2 class="text-lg font-bold text-gray-800">${name} ${surname}</h2>
      <p class="text-gray-600">${review}</p>
    `;

    latestReview.innerHTML = "";
    latestReview.appendChild(reviewItem);

    reviewForm.reset();
    reviewContent.style.opacity = "0";
    reviewContent.addEventListener("transitionend", function() {
      reviewContent.classList.add("hidden");
      reviewList.classList.remove("hidden");
    }, { once: true });
  });

  document.getElementById("addReviewBtn").addEventListener("click", function() {
    var reviewContent = document.getElementById("reviewContent");
    if (reviewContent.classList.contains("hidden")) {
      reviewContent.classList.remove("hidden");
      setTimeout(function() {
        reviewContent.style.opacity = "1";
      }, 10);
    } else {
      reviewContent.style.opacity = "0";
      reviewContent.addEventListener("transitionend", function() {
        reviewContent.classList.add("hidden");
      }, { once: true });
    }
  });
</script>
</body>
</html>


