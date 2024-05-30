<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include('../pages/header.php'); ?>
  <title>Reset Password</title>
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
      <img src="https://img.freepik.com/free-vector/emails-concept-illustration_114360-3925.jpg?size=626&ext=jpg&ga=GA1.1.1444296732.1716354038&semt=ais_user" alt="Emails concept illustration" class="w-full h-full object-cover">
    </div>

    <!-- Right Side (Form Section) -->
    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12 flex items-center justify-center">
    <div class="w-full">
    <div class="bg-white rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700">
    
          <div class="p-6 sm:p-8">
    <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Forgot password?</h1>
      <form class="w-full mt-12 space-y-8" action="#" method="POST">
        <div class="relative">
          <label for="username" class="bg-white pt-0 pr-2 pb-0 pl-2 -mt-3 font-medium text-gray-600 absolute">Username</label>
          <input id="username" name="username" placeholder="Enter your Username" type="text" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-4 pr-4 pb-4 pl-4 mt-2 text-base block bg-white border-gray-300 rounded-md autofocus autocomplete="username" required>
        </div>
              
              <div class="mt-5 mb-10">
                <form action="#" method="POST" novalidate>
                  <div class="grid gap-y-4">
                      <p class="hidden text-xs text-red-600 mt-2" id="email-error" aria-live="assertive">Please include a valid email address so we can get back to you</p>
                    </div>
                    <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Verify password</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </main>
    </div>
  </section>
</body>
</html>
