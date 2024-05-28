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
    <div class="bg-indigo-600 w-full md:w-1/2 xl:w-1/3 ">
      <img src="https://img.freepik.com/free-vector/forgot-password-concept-illustration_114360-1123.jpg?w=740&t=st=1716878227~exp=1716878827~hmac=761acee4c52758178f3e6ab2938168f21b92bfd1aa071afdd6b423e6299bd17f">
    </div>

    <!-- Right Side (Form Section) -->
    <div class="bg-white w-full md:w-1/2 xl:w-2/3 right-side px-10 lg:px-20 xl:px-24 flex items-center justify-center">
      <main id="content" role="main" class="w-full max-w-lg mx-auto p-8">
        <div class="bg-white rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 sm:p-8">
            <div class="text-center">
              <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Forgot password?</h1>
              <div class="mt-5 mb-10">
                <form action="password_reset_process.php" method="POST">
                  <div class="grid gap-y-4">
                    <div>
                    <label for="email" class="block text-gray-700 font-bold ">Email Address:</label>
                      <div class="relative">
                        <input type="email" id="email" name="email" class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm" required aria-describedby="email-error">
                      </div>
                      <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a valid email address so we can get back to you</p>
                    </div>
                    <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Reset password</button>
                  </div>
                </form>
              </div>
            </div>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
              Remember your password?
              <a class="text-blue-600 decoration-2 hover:underline font-medium" href="http://localhost/Github/Restaurant_Site/Customer/redirect/login.php#">Login here</a>
            </p>
          </div>
        </div>
        
      </main>
    </div>
  </section>
</body>
</html>
