<!DOCTYPE html>
<html lang="en">

<head>
  <!-- DO NOT FORGET TO INCLUDE THESE TAGS -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Gymify | Coach Dashboard</title>
  <!-- Include Global files -->
  <?php require '../components/globals.php' ?>
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

.timetable-slot {
  position: relative;
  width: 100%;
  height: 60px;
  border: 1px solid #ddd;
  background-color: #f5f5f5;
  margin-bottom: 8px;
  cursor: pointer;
}

.timetable-slot:hover {
  background-color: #e5e5e5;
}

.timetable-slot .event {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 14px;
  color: #333;
  font-weight: bold;
  text-align: center;
}

.timetable-slot .event-name {
  margin-bottom: 2px;
}

.timetable-slot .event-time {
  color: #666;
}


</style>

<body class = "bg-white">
  <?php require '../components/Navigation/Navigation.php' ?>

  <?php
  $userName = "Kak Kaka";
  $profilePic = "/assets/images/gym/GymPhoto1.jpeg";
  ?>

  <div class="relative  m-4 bg-white">
    <div class="relative">
      <div class="rounded-full overflow-hidden w-16 h-16 cursor-pointer" id="profilePicDropdown">
        <img src="<?php echo $profilePic; ?>" alt="Profile Picture" class="object-cover w-full h-full">
      </div>
      <div id="profileDropdown" class="hidden absolute z-50 left-0 mt-2 w-40 bg-white border border-gray-300 rounded-lg shadow-lg">
        <a href="/editProfile.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 transition-colors duration-300 text-black rounded-full p-4 rounded-lg">Edit Profile</a>
        <a href="/changePassword.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 transition-colors duration-300 text-black rounded-full p-4 rounded-lg">Change Password</a>
        <a href="/create/course.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 transition-colors duration-300 text-black rounded-full p-4 rounded-lg">Create New Course</a>
        <a href="/order/equipment.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 transition-colors duration-300 text-black rounded-full p-4 rounded-lg">Equipment Request</a>
        <a href="/logout.php" class="block px-4 py-2 text-white-800 hover:bg-red-300 transition-colors duration-300 text-white rounded-full p-4 background-color: bg-red-500 rounded-lg">Logout</a>
      </div>
    </div>
  </div>

<h1 class="text-2xl lg:text-3xl text-center font-bold text-gray-800 p-4">Courses</h1>
<div class="grid grid-cols-2 grid-rows-2 gap-4 mx-auto p-4 lg:p-8 ">

  <a href="#" class="col-span-1 row-span-1 bg-orange-600 p-4 rounded-md hover:bg-orange-400 text-slate-100 hover:text-slate-800 transition-colors duration-300 text-lg tracking-wider">Course 1</a>
  <a href="#" class="col-span-1 row-span-1 bg-orange-600 p-4 rounded-md hover:bg-orange-400 text-slate-100 hover:text-slate-800 transition-colors duration-300 text-lg tracking-wider">Course 2</a>
  <a href="#" class="col-span-1 row-span-1 bg-orange-600 p-4 rounded-md hover:bg-orange-400 text-slate-100 hover:text-slate-800 transition-colors duration-300 text-lg tracking-wider">Course 3</a>
  <a href="#" class="col-span-1 row-span-1 bg-orange-600 p-4 rounded-md hover:bg-orange-400 text-slate-100 hover:text-slate-800 transition-colors duration-300 text-lg tracking-wider">Course 4</a>
</div>

<br> 
<div class="mt-4 text-center mx-auto p-4 lg:p-8">
  <h2 class="text-xl font-bold text-gray-800">Timetable</h2>
  <form id="timetableForm">
    <div>
      <label for="meetingName" class="text-gray-800">Meeting Name:</label>
      <input type="text" id="meetingName" name="meetingName" placeholder="Enter meeting name" class="w-full px-4 py-2 bg-gray-100 rounded-lg" required>
    </div>
  <div>
      <label for="startTime" class="text-gray-800">Start Time:</label>
      <input type="time" id="startTime" name="startTime" class="w-full px-4 py-2 bg-gray-100 rounded-lg" required>
    </div>
    <div>
      <label for="endTime" class="text-gray-800">End Time:</label>
      <input type="time" id="endTime" name="endTime" class="w-full px-4 py-2 bg-gray-100 rounded-lg" required>
    </div>
    <button type="submit" class="bg-orange-600 hover:bg-orange-400 hover:text-slate-800 transition-colors duration-300 text-white rounded-full py-2 px-4 mt-4">
      Add Meeting
    </button>
  </form>
  <div id="timetable" class="flex flex-wrap justify-center mt-2">
    <!-- Timetable slots go here -->
  </div>
</div>




    <div class="flex-1/4 bg-white">
      <div class="p-4 rounded-lg">    
      <h1 class="text-2xl lg:text-3xl text-center font-bold text-gray-800 p-4">Review</h1>
    <button id="addReviewBtn" class="bg-orange-600 hover:bg-orange-400 hover:text-slate-800 transition-colors duration-300 text-white rounded-full p-4 w-10 h-10 flex items-center content-center">
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
            <button type="submit" class="bg-orange-600 hover:bg-orange-400 hover:text-slate-800 transition-colors duration-300 text-white rounded-full py-2 px-4">
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
      }, {
        once: true
      });
    });



var profilePicDropdown = document.getElementById("profilePicDropdown");
var profileDropdown = document.getElementById("profileDropdown");

var isDropdownOpen = false;

profilePicDropdown.addEventListener("click", function(event) {
  event.stopPropagation();

  if (!isDropdownOpen) {
    profileDropdown.classList.remove("hidden");
    profileDropdown.classList.add("fade-in");
  } else {
    profileDropdown.classList.remove("fade-in");
    profileDropdown.addEventListener("transitioned", function() {
      profileDropdown.classList.add("hidden");
    }, {
      once: true
    });
  }

  isDropdownOpen = !isDropdownOpen;
});

    const timetableForm = document.getElementById("timetableForm");
    const timetable = document.getElementById("timetable");

    timetableForm.addEventListener("submit", function(event) {
      event.preventDefault();

      const meetingName = document.getElementById("meetingName").value;
      const startTime = document.getElementById("startTime").value;
      const endTime = document.getElementById("endTime").value;

      const slotElement = document.createElement("div");
      slotElement.classList.add("timetable-slot");
      slotElement.innerHTML = `
        <div class="event">
          <div class="event-name">${meetingName}</div>
          <div class="event-time">${startTime} - ${endTime}</div>
        </div>
      `;

      timetable.appendChild(slotElement);

      timetableForm.reset();
    });




document.addEventListener("click", function(event) {
  if (!profilePicDropdown.contains(event.target) && !profileDropdown.contains(event.target)) {
    profileDropdown.classList.remove("fade-in");
    profileDropdown.classList.add("hidden");
    isDropdownOpen = false;
  }
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
        }, {
          once: true
        });
      }
    });
  </script>
</body>

</html>
