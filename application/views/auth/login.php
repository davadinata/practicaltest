<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
</head>

<body>
    <form class="user" method="post" action="<?= base_url('/') ?>">
        <div>
            <label>User ID</label>
            <input type="text" class="form-control form-control-user" value="<?= set_value('username') ?>" id="username" name="username" aria-describedby="emailHelp" placeholder="Masukan Username...">
            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div>
            <label>Password</label>
            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>


        <button type="submit" class="btn btn-primary btn-user btn-block">
            Login
        </button>

        <hr>
    </form>
</body>

</html>