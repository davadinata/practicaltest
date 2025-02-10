<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Valley</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex justify-content-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('home'); ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('catalog'); ?>">Catalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('order'); ?>">Order Status</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('distributor'); ?>">Distributor</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('upload'); ?>">Upload</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/logout'); ?>">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">