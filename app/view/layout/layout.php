<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $this->layout('title'); ?></title>
    <link rel="stylesheet" href="/styles/color.css">
    <link rel="stylesheet" href="/styles/html.css">
    <link rel="stylesheet" href="/styles/content.css">
    <link rel="stylesheet" href="/styles/container.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="https://unpkg.com/chota@latest">
</head>
<body>
    <header class="parallax-header">
        <?php include dirname(__DIR__, 1) . "/topnavbar.php" ?>
    </header>
    <?php echo $this->layout('content'); ?>

    <footer>
        <?php include dirname(__DIR__, 1) . "/footer.php" ?>
    </footer>
</body>
</html>