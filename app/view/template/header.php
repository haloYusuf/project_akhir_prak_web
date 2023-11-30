<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $data["title"]; ?></title>
    <script src="https://kit.fontawesome.com/ae360afl7e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/<?= $data["css"]; ?>" />
</head>

<body>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <a href="<?=BASE_URL;?>/">Home</a>
            <a href="<?= BASE_URL ?>/menu">Menu</a>
            <?php
            if (isset($_SESSION['user'])) {
                ?>
                <a
                    href="<?= BASE_URL ?><?= isset($_SESSION['access']) && $_SESSION['access'] == 1 ? '/confirmorder' : '/history'; ?>">
                    <?php echo isset($_SESSION['access']) && $_SESSION['access'] == 1 ? 'Confirm Order' : 'History'; ?>
                </a>
                <?php
            }
            ?>
            <a href="<?= BASE_URL ?><?= isset($_SESSION['user']) ? '/logout' : '/login'; ?>" style="font-size: 20px;">
                <?php echo isset($_SESSION['user']) ? 'LOGOUT' : 'LOGIN'; ?>
            </a>
        </nav>
    </header>