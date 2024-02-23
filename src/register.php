<?php
  session_start();

  // defined variables
  $name = $_POST['name'];
  $password = $_POST['password'];

  if(isset($name) && isset($password))
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Success!!</title>
  <link href="./output.css" rel="stylesheet">
</head>
<body>
  <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-24">
    <div class="flex w-full mx-auto text-left">
      <div class="relative inline-flex items-center mx-auto align-middle">
        <div class="text-center">
          <h1 class="max-w-5xl text-2xl font-bold leading-none tracking-tighter text-neutral-600 md:text-5xl lg:text-6xl lg:max-w-7xl">
          Welcome <?php $name ?> !!
          </h1>
          <p class="max-w-xl mx-auto mt-8 text-base leading-relaxed text-gray-500">Plz push Logout Button.</p>
          <form action="login.php" method="POST">
            <div class="flex justify-center w-full max-w-2xl gap-2 mx-auto mt-6">
              <div class="mt-3 rounded-lg sm:mt-0">
              <a href="login.php" class="px-5 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 lg:px-10 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Login</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>