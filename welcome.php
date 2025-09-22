<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIP Area</title>
    <?php require __DIR__ . '/includes/bootstrapcdnlinks.php'; ?>
</head>
<body class="p-3">
    <?php require __DIR__ . '/includes/navigation.php'; ?>

    <?php if ($_GET['member'] === 'false'): 
        header('Location: signup.php');
        exit;
    ?>

    <?php else: ?>
        <div class="container">
            <h1>Welcome, Movie Club member!</h1>
        </div>
    <?php endif; ?>
    
</body>
</html>