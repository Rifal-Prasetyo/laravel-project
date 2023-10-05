<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle"
            style="border: 1px solid black; padding: 3rem; border-radius: 5px;">

            <form>
                <h4>Daftar</h4>
                <div class="mb-3">
                    <label for="usernameInput" class="form-label">Username</label>
                    <input type="email" class="form-control" id="usernameInput">

                </div>
                <div class="mb-3">
                    <label for="emailInput" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="PasswordInput" class="form-label">Password</label>
                    <input type="password" class="form-control" id="PasswordInput">
                </div>
                <div class="mb-3">
                    <label for="confirmPasswordInput" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPasswordInput">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="agree-button">
                    <label class="form-check-label" style="width: 80%" for="agree-button">Dengan mengklik berrati anda
                        menyetujui <a href="http://">Terms of Service</a> Kami</label>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
