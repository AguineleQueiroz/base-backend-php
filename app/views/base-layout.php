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
    <!-- scripts -->

</head>
<body class="divide">
    <?php include 'partials/header.php'; ?>
    <div class="main-content">
        <main>
            <?php include 'partials/header-logged.php'; ?>
            <!-- partials contents -->
            <div class="content-container content">
                <?php
                    echo $this->loadContent();
                ?>
            </div>
        </main>
        <?php include 'partials/footer-default.php'; ?>
    </div>
    <!-- scripts -->
    <?php include 'layout/scripts.php'; ?>
</body>
</html>