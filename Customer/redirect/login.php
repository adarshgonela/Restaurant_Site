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
    <div class="w-full h-100">
      <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12 ">Log in to your account</h1>
      
      <form class="mt-6" action="../sql/loginSql.php" method="post">
        <div>
          <label for="email" class="block text-gray-700 font-bold ">Email Address:</label>  
          <input type="email" id="email" name="email" placeholder="Enter Email Address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete="email" required>
        </div>

        <div class="mt-4">
          <label for="password" class="block text-gray-700 font-bold">Password:</label>
          <input type="password" id="password" name="password" placeholder="Enter Password" minlength="6" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-4 pr-4 pb-4 pl-4 mt-2 text-base block bg-white border-gray-300 rounded-md"/>
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

