<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title><?= $title ?? 'Site Template Login' ?></title>

    <!-- styles -->
    <?php include '../layout/styles.php'; ?>
    <!-- scripts -->

</head>
<body>
<section>
    <div>
        <a href="#">
            LOGOTYPE
        </a>
        <div>
            <div>
                <h1>
                    Sign in to your account
                </h1>
                <form action="/login" method="POST">
                    <div>
                        <label for="email">Your email</label>
                        <input type="email" name="email" id="email" placeholder="name@company.com" required="">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" required="">
                    </div>
                    <div>
                        <a href="#">Forgot password?</a>
                    </div>
                    <button type="submit">Sign in</button>
                    <p>
                        Don't have an account yet? <a href="#">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>