<!DOCTYPE html>
<html lang="en">
<head>
  <?= $this->include('layouts/admin/head')?>
</head>
<body>
  <?= $this->include('layouts/admin/navbar')?>

  <?= $this->include('layouts/admin/sidebar')?>

<main role="main">

  <?= $this->renderSection('content')?>

</main>
</body>
</html>