<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <title>Form</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.4;
      color: var(--color-white);
      margin: 0;
    }

    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      z-index: -1;
      background: var(--color-darkblue);
      background-image: linear-gradient(115deg,
          rgba(18, 18, 47, 0.8),
          rgba(13, 13, 32, 0.85)),
        url(https://www.teahub.io/photos/full/18-187226_best-steam-profile-backgrounds.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
  </style>
</head>
<div class="container">
    <header class="header">
      <h1 id="title" class="text-center">
      <?php
        $name = $_POST['username'];
        echo "Thank you for your submission, <br>$name</br>";
      ?>
      </h1>
  </header>
</div>
</html>
