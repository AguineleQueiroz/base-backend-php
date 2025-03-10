<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title><?= $title ?? 'Site Template Login' ?></title>

    <!-- styles -->
    <link rel="stylesheet" href="/assets/css/auth/auth.css">
    <!-- scripts -->

</head>
<body>
<section>
    <div class="lg-container">
        <div class="lg-content">
            <a href="#" class="lg-logo">
                <svg id="logo-14" width="73" height="49" viewBox="0 0 73 49" fill="none"  xmlns="http://www.w3.org/2000/svg">
                    <path d="M46.8676 24C46.8676 36.4264 36.794 46.5 24.3676 46.5C11.9413 46.5 1.86765 36.4264 1.86765
                    24C1.86765 11.5736 11.9413 1.5 24.3676 1.5C36.794 1.5 46.8676 11.5736 46.8676 24Z"
                          class="ccustom" fill="#68DBFF">
                    </path>
                    <path d="M71.1324 24C71.1324 36.4264 61.1574 46.5 48.8529 46.5C36.5484 46.5 26.5735 36.4264 26.5735
                    24C26.5735 11.5736 36.5484 1.5 48.8529 1.5C61.1574 1.5 71.1324 11.5736 71.1324 24Z" class="ccompli1"
                          fill="#FF7917">
                    </path>
                    <path d="M36.6705 42.8416C42.8109 38.8239 46.8676 31.8858 46.8676 24C46.8676 16.1144 42.8109 9.17614
                    36.6705 5.15854C30.5904 9.17614 26.5735 16.1144 26.5735 24C26.5735 31.8858 30.5904 38.8239 36.6705 42.8416Z"
                          class="ccompli2" fill="#5D2C02">
                    </path>
                </svg>
            </a>
            <div class="lg-form-content">
                <h3 class="lg-title">
                    Sign in to your account
                </h3>
                <form action="/login" method="POST" class="lg-form">
                    <?= getFlash('message')?>
                    <div class="lg-email-container">
                        <label for="email">Your email</label>
                        <input type="email" name="email" id="email" placeholder="name@company.com" required="">
                    </div>
                    <div class="lg-password-container">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" required="">
                    </div>
                    <div class="lg-forgot-pswd-container">
                        <a href="#" class="lg-forgot-pswd-link text-small">Forgot password?</a>
                    </div>
                    <button class="btn lg-btn-signin" type="submit">Sign in</button>
                    <p class="text-small">
                        Don't have an account yet? <a class="lg-signup-link" href="#">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>