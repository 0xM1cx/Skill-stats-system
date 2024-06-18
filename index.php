
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Login</title>
</head>

<body class="h-dvh flex items-center justify-center flex-wrap">

    <div class=" flex items-center justify-center flex-col flex-1 min-w-60">
        <h1 class="text-2xl font-bold">LOGIN</h1>
        <p class="mt-1 text-lg font-medium">Talent Management System</p>

        <div class="w-3/5 mt-4">
            <form class="flex flex-col items-center justify-center gap-4" action="./models/auth.php" method="POST">

                <div class=" py-3 px-5 rounded-2xl bg-violet-50 w-full">
                    <i class="bi-person-bounding-box"></i>
                    <input name="username" class=" px-3 py-1 bg-violet-50 outline-none" type="text" placeholder="Username" required>
                </div>
                <div class=" py-3 px-5 rounded-2xl bg-violet-50 w-full">
                    <i class="bi-shield-lock"></i>
                    <input name="password" class=" px-3 py-1 bg-violet-50 outline-none" type="password" placeholder="Password" required>
                </div>

                <button id="login-button" class="text-white w-full py-3 rounded-2xl" type="submit">Login Now</button>
            </form>
        </div>
        <a class="mt-3 hover:text-sky-400" href="./views/register.php">Register Account</a>

        <p class="my-8 relative z-10 bg-white" id="or-text">or</p>

        <div class="flex flex-col w-3/5 gap-4">
            <div class="flex items-center justify-center gap-x-2 border border-slate-400 rounded-lg py-3 " role="button">
                <img id="google-img" src="./assets/images/google.png" alt="Google Icon">
                <p>Login with Google</p>
            </div>

            <div class="flex items-center justify-center gap-x-2 border border-slate-400 rounded-lg py-3">
                <img id="facebook-img" src="./assets/images/facebook.png" alt="Facebook Icon">
                <p>Login with Facebook</p>
            </div>
        </div>
    </div>
    <div id="hero" class="h-full flex-1">

    </div>
    <script>
        document.getElementById('login-button').addEventListener('click', function(event) {
            const usernameInput = document.querySelector('input[name="username"]');
            if (usernameInput.value === '') {
                alert('Please enter your username');
                event.preventDefault(); // prevent form submission
            }
        });
    </script>

</body>

</html>