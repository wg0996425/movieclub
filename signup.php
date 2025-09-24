<?php
$name = '';
$favorite_movie = '';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $favorite_movie = $_POST['favorite_movie'] ?? '';
    if (trim($name) === '') {
        $errors['name'] = "Name is required";
    }
    if (trim($favorite_movie) === '') {
        $errors['favorite_movie'] = "Favorite Movie is required";
    }

    if (empty($errors)) {
        $qs = 'ok=1&name=' . urlencode($name) . '&favorite_movie=' . urlencode($favorite_movie) . '&member=true';
        header('Location: welcome.php?' . $qs);
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Club Sign-Up</title>
    <?php require __DIR__ . '/includes/bootstrapcdnlinks.php'; ?>
</head>

<body class="p-3">
    <?php require __DIR__ . '/includes/navigation.php'; ?>
    <div class="container">

        <h1>VIP Sign-Up</h1>

        <?php if (($errors)): ?>
            <div class="alert alert-danger">
                Please fix:
                <ul class="mb-0">
                    <?php foreach ($errors as $msg): ?>
                        <li><?= $msg; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if ($_SERVER['REQUEST_METHOD'] !== 'POST' || $errors): ?>
            <div class="container">
                <form action="signup.php" method="post" class="mb-3">
                    <label class="form-label mt-2">Name
                        <input class="form-control" type="text" name="name" value=<?= $name ?>>
                    </label>
                    <label class="form-label mt-2">Favorite Movie
                        <input class="form-control" type="text" name="favorite_movie" value=<?= $favorite_movie ?>>
                    </label>
                    <br><button class="btn btn-primary mt-3" type="submit">Sign-up!</button>
                </form>
            </div>

        <?php else: ?>
            <h2>Raw POST</h2>
            <pre><?php var_dump($_POST); ?></pre>
        <?php endif; ?>
    </div>
</body>

</html>