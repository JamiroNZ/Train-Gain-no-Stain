<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<!-- Masthead-->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Pet Training</h1>
    <p class="lead">Are you tired of having an unruly and disobedient furry friend at home? It's time to unleash the true potential of your pet with our top-notch training services! Our expert trainers will teach your pet valuable skills that will make them a true alpha in the animal kingdom. From basic obedience to advanced tricks, we'll work with your pet to build their strength, stamina, and confidence. Don't settle for a weak and timid pet - let us turn your furry friend into a powerful force to be reckoned with!</p>
  </div>
</div>
<div class="container-fluid">
            <div class="row">
                <div class="col-sm">

                </div>
                <div class="col-sm ">
                    <h5 class="mb-4">Appointment Form</h5>

                    <form action="/train" method="post">

                        <div class="form-group">
                            <label for="petName">Pet Name</label>
                            <input type="text" class="form-control" id="petName" aria-describedby="emailHelp" required name="petName">
                        </div>

                        <div class="form-group">
                            <label for="petType">Pet Type</label>
                            <select class="form-control" name="petType" id="petType">
                                <option value="cat">Cat</option>
                                <option value="dog">Dog</option>
                                <option value="rabbit">Rabbit</option>
                                <option value="hamster">Hamster</option>
                                <option value="bird">Bird</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="trainingType">Training Type</label>
                            <select class="form-control" name="trainingType" id="trainingType">
                                <option value="play_catch">Play Catch</option>
                                <option value="obedience_test">Obedience Test</option>
                                <option value="walking">Walking</option>
                                <option value="Weight">Weight Loss</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="trainingDuration">Training Duration</label>
                            <input type="time" class="form-control" id="trainingDuration" aria-describedby="emailHelp" required name="trainingDuration">
                        </div>

                        <div class="form-group">
                            <label for="appointmentDate">Appointment Date</label>
                            <input type="date" class="form-control" id="appointmentDate" aria-describedby="emailHelp" required name="appointmentDate">
                        </div>

                        <br>
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </form>
                </div>
                <div class="col-sm">

                </div>
            </div>
        </div>
<?= $this->endSection() ?>
