<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Welcome to Our Pet Care Website!</h1>
    <p class="lead">Our website offers pet care services that are tailored towards grooming, training, and feeding pets to make them look fabulous, be physically healthy, and well-fed during the duration of the session chosen by our clients.</p>
  </div>
</div>

<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="assets/img/petgrooming.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pet Grooming</h5>
      <p class="card-text">Groom Your Pets!</p>
      <a href="/groom" class="btn btn-primary">Book Now</a>    
      <br>
      <br>
      <a href="/groomapps" class="btn btn-primary">See grooming appointments</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="assets/img/pettraining.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pet Training</h5>
      <p class="card-text">Train Your Pets!</p>
      <a href="/train" class="btn btn-primary">Book Now</a>
      <br>
      <br>
      <a href="/trainapps" class="btn btn-primary">See training appointments</a>
    </div>
  </div>
</div>


<?= $this->endSection() ?>