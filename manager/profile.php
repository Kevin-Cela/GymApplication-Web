<!DOCTYPE html>
<html lang="en">

<head>
  <title>Gymify | Manager Dashboard</title>
  <!-- Include Global files -->
  <?php require '../components/globals.php' ?>
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
      <div class="p-4 rounded-lg border border-slate-700 w-fit h-fit max-h-40">
        <p class="md:text-xl text-lg tracking-wide text-center">Review for Henri Hoxha </p>
        <p class="md:text-xl text-lg tracking-wide text-left">Review Content</p>
        <p class="text-sm tracking-wide text-right">Time published</p>
        <div class="py-4">
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-green-600 hover:bg-green-500 hover:text-slate-800 focus:bg-green-500 transition-colors duration-300 ease-in-out">Approve Review</button>
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-red-600 hover:bg-red-500 hover:text-slate-200 focus:bg-red-500 focus:text-slate-200 transition-colors duration-300 ease-in-out">Decline Review</button>
        </div>
      </div>
      <div class="p-4 rounded-lg border border-slate-700 w-fit h-fit max-h-40">
        <p class="md:text-xl text-lg tracking-wide text-center">Review for Geri Xhaho</p>
        <p class="md:text-xl text-lg tracking-wide text-left">Review Content</p>
        <p class="text-sm tracking-wide text-right">Time published</p>
        <div class="py-4">
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-green-600 hover:bg-green-500 hover:text-slate-800 focus:bg-green-500 transition-colors duration-300 ease-in-out">Approve Review</button>
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-red-600 hover:bg-red-500 hover:text-slate-200 focus:bg-red-500 focus:text-slate-200 transition-colors duration-300 ease-in-out">Decline Review</button>
        </div>
      </div>
      <div class="p-4 rounded-lg border border-slate-700 w-fit h-fit max-h-40">
        <p class="md:text-xl text-lg tracking-wide text-center">Review for Kevi Cela</p>
        <p class="md:text-xl text-lg tracking-wide text-left">Review Content</p>
        <p class="text-sm tracking-wide text-right">Time published</p>
        <div class="py-4">
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-green-600 hover:bg-green-500 hover:text-slate-800 focus:bg-green-500 transition-colors duration-300 ease-in-out">Approve Review</button>
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-red-600 hover:bg-red-500 hover:text-slate-200 focus:bg-red-500 focus:text-slate-200 transition-colors duration-300 ease-in-out">Decline Review</button>
        </div>
      </div>
      <div class="p-4 rounded-lg border border-slate-700 w-fit h-fit max-h-40">
        <p class="md:text-xl text-lg tracking-wide text-center">Review for Alvi Dervishaj </p>
        <p class="md:text-xl text-lg tracking-wide text-left">Review Content</p>
        <p class="text-sm tracking-wide text-right">Time published</p>
        <div class="py-4">
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-green-600 hover:bg-green-500 hover:text-slate-800 focus:bg-green-500 transition-colors duration-300 ease-in-out">Approve Review</button>
          <button class="w-fit h-fit px-3 py-1 tracking-wider text-lg border rounded-md border-red-600 hover:bg-red-500 hover:text-slate-200 focus:bg-red-500 focus:text-slate-200 transition-colors duration-300 ease-in-out">Decline Review</button>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
