<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/styles1.css">
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>

        <?php if(session()->getFlashData('success')) { ?>
            <div class="alert alert-success">
                <?= session()->get('success') ?>
            </div>
        <?php } ?>

        <?php if(session()->getFlashdata('errors')) { ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('errors') ?>
            </div>
        <?php } ?>

        <form action="/login" method="post">
            <div class="user-box">
                <input type="text" class="form-control" id="example-email" aria-describedby="emailHelp" required name="email" value="<?= old('email') ?>">
                <label for="example-email">Email</label>
            </div>
            <div class="user-box">
                <input type="password" class="form-control" id="example-password" aria-describedby="emailHelp" required name="password" value="<?= old('password') ?>">
                <label for="example-password">Password</label>
            </div>
            <div class="button-form">
                <button type="submit" id="submit">Login</button>
                <div id="register">
                    Don't have an account ?
                    <a href="/register">
                        Register
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>