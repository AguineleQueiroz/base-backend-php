<!doctype html>
<html lang="pt">
<head>
    <!-- metatags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
    <title><?= $title ?? 'Site Template' ?></title>

    <!-- styles -->
    <?php include 'layout/styles.php'; ?>
    <?php include 'layout/scripts.php'; ?>
    <!-- scripts -->

</head>
<body>
    <?php include 'partials/header.php'; ?>
    <main class="content-container">
        <!-- partials contents -->
        <?php
            echo $this->loadContent();
        ?>
    </main>
    <?php include 'partials/footer.php'; ?>

    <!-- scripts -->
</body>
</html>