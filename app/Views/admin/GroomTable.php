<?= $this->extend('admin') ?>
<?= $this->section('content') ?>
<table>
        <thead>
            <tr>
                <td>No.</td>
                <td>Pet Name</td>
                <td>Pet Type</td>
                <td>Grooming Type</td>
                <td>Appointment Date</td>
                <td>Appointment Time</td>
            </tr>
        </thead>
        <tbody>
        <br />
        <br />
        <?php $no = 0; ?>
        <?php foreach ($groom as $item): ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $item['petName'] ?></td>
                <td><?= $item['petType'] ?></td>
                <td><?= $item['groomingType'] ?></td>
                <td><?= $item['appointmentDate'] ?></td>
                <td><?= $item['appointmentTime'] ?></td>
            </tr>

        <?php endforeach ?>
        </tbody>
    </table>
    <?= $this->endSection() ?>