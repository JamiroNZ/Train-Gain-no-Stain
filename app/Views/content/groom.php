<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Pet Grooming</h1>
    <p class="lead">Looking for a way to pamper your furry friend? Look no further than our expert grooming services! Our professional groomers know just how to make your pet look and feel their best, from the perfect haircut to a relaxing bath and brush. Whether your pet needs a simple trim or a full-on spa day, we've got you covered. With our top-of-the-line grooming products and techniques, we'll have your pet looking and feeling fabulous in no time. Trust us to give your pet the VIP treatment they deserve!</p>
  </div>
</div>
<div class="container-fluid">
            <div class="row">
                <div class="col-sm">

                </div>
                <div class="col-sm ">
                    <h5 class="mb-4">Appointment Form</h5>

                    <form action="/groom" method="post">

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
                            <label for="groomingType">Grooming Type</label>
                            <select class="form-control" name="groomingType" id="groomingType">
                                <option value="bath">Bath</option>
                                <option value="spa">Spa</option>
                                <option value="style">Styling fur</option>
                                <option value="checkup">Checkup</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="appointmentDate">Appointment Date</label>
                            <input type="date" class="form-control" id="appointmentDate" aria-describedby="emailHelp" required name="appointmentDate">
                        </div>

                        <div class="form-group">
                            <label for="appointmentTime">Appointment Time</label>
                            <input type="time" class="form-control" id="appointmentTime" aria-describedby="emailHelp" required name="appointmentTime">
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