<?php
$title = 'Learn PHP';
$heading = 'Fundamentals of PHP';
$rule_5 = 'They are case sensitive. So, `$name` and `$Name` are two different variables.'
?>

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
  <title><?= $title ?></title>
</head>

<body class="bg-[#111]">
  <header class="bg-[#ff4500] text-[#111] p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold"><?= $title ?></h1>
    </div>
  </header>
  <div class="container mx-auto p-2 mt-8">
    <div class="bg-[#87ceeb] text-[#111] rounded-lg shadow-md p-2">
      <h2 class="text-2xl font-semibold mb-2"><?= $heading ?></h2>
      <h4>Topics:</h4>
      <p><em>Variable Rules</em></p>
      <ul>
        <li>All variables are prefixed with a dollar sign ($).</li>
        <li>They must start with a letter or an underscore.</li>
        <li>They cannot start with a number.</li>
        <li>They can only contain letters, numbers, and underscores.</li>
        <li><?php echo $rule_5 ?></li>
      </ul>
      <p><em>Conventions</em></p>
      <ul>
        <li>Underscores: $server_name</li>
        <li>Camel Case: $serverName</li>
        <li>Pascal Case: $ServerName</li>
        <li>lowercase: $servername</li>
      </ul>
      <p></p>
      <h4>Notes:</h4>
      <p></p>
    </div>
  </div>
</body>

</html>