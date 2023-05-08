<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container mx-auto pt-2">
    <p>Pet Grooming</p>
    <div class="background-image-container" >
        <img src="assets/img/petgrooming.jpg" alt="" >
    </div>
    <br>
    <div>
        <p>Appointment Form</p>
        <form action="/groom" method="post">
            <label for="petName">Pet Name:</label>
            <input type="text" id="petName" name="petName"><br>

            <label for="petType">Pet Type:</label>
            <select name="petType" id="petType">
                <option value="cat">Cat</option>
                <option value="dog">Dog</option>
                <option value="rabbit">Rabbit</option>
                <option value="hamster">Hamster</option>
                <option value="bird">Bird</option>
            </select>
            <br>
            <label for="groomingType">Grooming Type:</label>
            <select name="groomingType" id="groomingType">
                <option value="bath">Bath</option>
                <option value="spa">Spa</option>
                <option value="style">Styling fur</option>
                <option value="checkup">Checkup</option>
            </select>
            <br>
            <label for="appointmentDate">Appointment Date:</label>
            <input type="date" id="appointmentDate" name="appointmentDate"><br>

            <label for="appointmentTime">Appointment Time:</label>
            <input type="time" id="appointmentTime" name="appointmentTime"><br>

            <input type="submit" value="Submit">
            </table>
        </form>
    </div>    
</div>

<?= $this->endSection() ?>