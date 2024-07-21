<?php
  echo 'Hello from PHP';
  print 'This is a print statement but I carry on the same line and don\'t start a new line - hence why the echo below is using a <br />';
  echo '<br />';
  echo 'can', 'have', 'multiple', 'values', 'on', 'one', 'line' 

  // Single line comment

  /*
  Multi 
  Line
  Comment
  */
?>  // No need to add ?> at the end of a php file if it is purely php. It needs ?> here because of the HTML below.

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="./billy.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      color: #ff4500;
      font-family: 'Poppins', sans-serif;
      font-weight: 300;
    }
  </style>
  <title><?php echo 'Learn PHP'; ?></title>
</head>

<body class="bg-[#111]">
  <header class="bg-[#ff4500] text-[#111] p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">Learn PHP</h1>
    </div>
  </header>
  <div class="container mx-auto p-2 mt-8">
    <div class="bg-[#87ceeb] text-[#111] rounded-lg shadow-md p-2">
      <h2 class="text-2xl font-semibold mb-2">Fundamentals of PHP</h2>
      <h4>Topics:</h4>
      <p>Tags, printing, comments</p>
      <h4>Notes:</h4>
      <p><?php echo 'Anything in the php tags comes from the server.'; ?></p>
      <p><?= 'Shorthand php tag, without using echo and ;' ?></p>
      <?= '<p>This HTML paragraph is within the shorthand php tags</p>' ?>
    </div>
  </div>
</body>

</html>