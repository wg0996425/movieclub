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

    <?php if ($_SERVER['REQUEST_METHOD'] !== 'POST'): ?>
        <div class="container">
            <form action="signup.php" method="post" class="mb-3"></form>
                <label class="form-label mt-2">Name
                    <input class="form-control" type="text" name="name">
                </label>
                <label class="form-label mt-2">Favorite Movie
                    <input class="form-control" type="text" name="favorite_movie">
                </label>
                <br><button class="btn btn-primary mt-3" type="submit">Sign-up!</button>
            </form>
        </div>

    <?php else: ?>
        <h2>Raw POST</h2>
        <pre><?php var_dump($_POST);?></pre>
    <?php endif; ?>
</body>

</html>