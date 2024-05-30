<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include('../pages/header.php'); ?>
  <title>Forgot Password</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-+Me9/G/YOX+vBo4+MimnHt9WyjD5UO0eJBL5Ne52GlZ8Dy7MAODzG7Fknh2d+mOzzl06r1zZWq0G7v8MhRFEAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    /* Custom styles */
    @media (min-width: 768px) {
      .right-side {
        height: 100vh; /* Set height to full viewport height */
      }
    }
  </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900">
  <section class="flex flex-col md:flex-row h-screen items-center">

    <!-- Left Side (Image Section) -->
    <div class="bg-indigo-600 w-full md:w-1/2 xl:w-2/3 ">
      <img src="https://img.freepik.com/free-vector/forgot-password-concept-illustration_114360-1123.jpg?w=740&t=st=1716878227~exp=1716878827~hmac=761acee4c52758178f3e6ab2938168f21b92bfd1aa071afdd6b423e6299bd17f">
    </div>

    <!-- Right Side (Form Section) -->
    <div class="bg-white w-full md:w-2/4  xl:w-2/3  right-side  px-20 lg:px-20 xl:px-24 flex items-center justify-center">
    <div class="w-full">
      <p class="text-4xl font-medium text-center leading-snug font-serif">Forgot password ?</p>
      <form class="w-full mt-10 space-y-8" action="#" method="POST">
        <div class="relative">
          <label for="email" class="bg-white pt-0 pr-2 pb-0 pl-2 -mt-3 font-medium text-gray-600 absolute">Email address:</label>
          <input id="email" name="email" placeholder="Enter your email" type="email" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-4 pr-4 pb-4 pl-4 mt-2 text-base block bg-white border-gray-300 rounded-md autofocus autocomplete="email" required>
        </div>
        <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg px-4 py-3 mt-6">Reset password</button>
      </form>

      

      <p class="mt-8">Remember your password? <a href="http://localhost/Github/Restaurant_Site/Customer/redirect/signup.php#" class="text-blue-500 hover:text-blue-700 font-semibold">Login here</a></p>
    </div>
  </div>
  </main>
  </div>
</section>
</body>
</html>
