<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="assets/css/styles2.css">
</head>
<body>
<header role="banner">
  <h1>Admin Panel</h1>
  <ul class="utilities">
    <br>
    <li class="users"><a href="#">My Account</a></li>
    <li class="logout warn"><a href="">Log Out</a></li>
  </ul>
</header>

<nav role='navigation'>
  <ul class="main">
    <li class="dashboard"><a href="admindashboard">Dashboard</a></li>
    <li class="edit"><a href="#">Edit Website</a></li>
    <li class="write"><a href="#">Write news</a></li>
    <li class="comments"><a href="#">Ads</a></li>
    <li class="users"><a href="#">Manage Users</a></li>
  </ul>
</nav>

<main role="main">

<h1 class="mb-4">Hello <?= session('name') ?> </h1>
  
  <section class="panel important">
    <h2>Write a post</h2>
      <?= $this->renderSection('content')?>
  </section>

</main>
</body>
</html>