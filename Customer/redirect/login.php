<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include('../pages/header.php'); ?>
  <title>Responsive Login Page</title>
</head>
<body>
<section class="flex flex-col md:flex-row h-screen items-center">
  
  <!-- Left Side (Image Section) -->
  <div class="bg-indigo-600 w-full md:w-1/2 xl:w-2/3 h-screen">
    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Random image from Unsplash" class="w-full h-full object-cover">
  </div>

  <!-- Right Side (Form Section) -->
  <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12 flex items-center justify-center">
    <div class="w-full">
      <p class="text-4xl font-medium text-center leading-snug font-serif">Login into your  account</p>
      <form class="w-full mt-10 space-y-8" action="#" method="POST">
        <div class="relative">
          <label for="email" class="bg-white pt-0 pr-2 pb-0 pl-2 -mt-3 font-medium text-gray-600 absolute">Email address:</label>
          <input id="email" name="email" placeholder="Enter your email" type="email" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-4 pr-4 pb-4 pl-4 mt-2 text-base block bg-white border-gray-300 rounded-md autofocus autocomplete="email" required>
        </div>
        <div class="relative">
          <label for="password" class="bg-white pt-0 pr-2 pb-0 pl-2 -mt-3 font-medium text-gray-600 absolute">Password:</label>
          <input id="password" name="password" placeholder=" Enter Password" type="password" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-4 pr-4 pb-4 pl-4 mt-2 text-base block bg-white border-gray-300 rounded-md autofocus autocomplete="password" required>
        </div>

        <div class="text-right mt-2">
          <a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
        </div>

        <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg px-4 py-3 mt-6">Log In</button>
      </form>

      

      <p class="mt-8">Need an account? <a href="http://localhost/Github/Restaurant_Site/Customer/redirect/signup.php#" class="text-blue-500 hover:text-blue-700 font-semibold">Create an account</a></p>
    </div>
  </div>

</section>
</body>
</html>

