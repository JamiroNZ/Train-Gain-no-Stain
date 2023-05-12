<?= $this->extend('index') ?>
<?= $this->section('content') ?>


    <p>Pet Grooming</p>
    <div class="background-image-container" >
        <img src="assets/img/petgrooming.jpg" alt="" >
    </div>
    <br>    
<div class="form">
        <p>Appointment Form</p>
        <form action="/groom" method="post">
            <label for="petName">
                Pet Name:
                <input type="text" id="petName" name="petName"><br>
            </label>

            <label for="petType">
                Pet Type:
                <select name="petType" id="petType">
                <option value="cat">Cat</option>
                <option value="dog">Dog</option>
                <option value="rabbit">Rabbit</option>
                <option value="hamster">Hamster</option>
                <option value="bird">Bird</option>
                </select>
            </label>
            <br>
            <label for="groomingType">Grooming Type:
                <select name="groomingType" id="groomingType">
                <option value="bath">Bath</option>
                <option value="spa">Spa</option>
                <option value="style">Styling fur</option>
                <option value="checkup">Checkup</option>
                </select>
            </label>
            <br>
            <label for="appointmentDate">Appointment Date:
                <input type="date" id="appointmentDate" name="appointmentDate"><br>
            </label>

            <label for="appointmentTime">Appointment Time:
                <input type="time" id="appointmentTime" name="appointmentTime"><br>
            </label>

            <input type="submit" value="Submit">
            </table>
        </form>
    </div>

<?= $this->endSection() ?>