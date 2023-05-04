<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<div class="background-image-container" style="position: relative;">
    <img src="assets/img/catdog.jpg" alt="" style="position: absolute; top: 0; left: 0; z-index: -1; width: 100%; height: auto;">
    <div class="container pt-2 mx-auto" style="background-color: #f5f5f5;">
        <h1 class="font-serif text-xl text-center">Welcome to a pet care website</h1>

        <p>Our services include:</p>

        <br>

        <div class="columns-3">
            <div>    
                <a href="/groom" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pet Grooming</h5>
                </a>
            </div>
            <div>    
                <a href="/train" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pet Training</h5>
                </a>
            </div>
            <div>    
                <a href="/feed" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Feeding Schedule</h5>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection() ?>