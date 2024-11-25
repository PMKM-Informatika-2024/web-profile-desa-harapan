<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Login - Desa Sungai Keran</title>
  <link rel="stylesheet" href="/css/style.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Inter:wght@400;700&family=Lora:wght@400;700&family=Poppins:wght@400;700&family=Lato:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body,
    html {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
    }

    .btn-simpan {
      padding: 7px 20px;
      background-color: var(--pr-color);
      color: var(--sec-color);
      border: none;
      border-radius: 2px;
      text-decoration: none;
      font-family: var(--pr-font);
      font-weight: medium;
      text-align: center;
    }

    .btn-simpan:hover {
      background-color: #16599b;
      color: #f8f9fa;
    }

    @media (max-width: 768px) {
      .btn-simpan {
        padding: 8px 15px;
        font-size: 0.9rem;
      }
    }

    @media (max-width: 576px) {
      .btn-simpan {
        padding: 6px 12px;
        font-size: 0.8rem;
      }
    }
  </style>
</head>

<body>
  <section id="loginForm">
    <div class="login-container">
      <form action="/adminlogin" method="POST" class="form-signin">
        @csrf
        <h2 class="text-center mb-3">Admin Login</h2>
        <input type="text" name="username" id="nipUsername" class="form-control mb-3" placeholder="NIP/Username" required>
        <input type="password" name="password" id="password" class="form-control mb-3" placeholder="Password" required>
        <button class="btn-simpan" type="submit">Login<i class="fas fa-sign-in-alt px-2"></i></button>
        <div id="error-message" class="mt-3 text-danger text-center"></div>
      </form>
    </div>
  </section>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <script>
    // const adminUsername = "admin";
    // const adminPassword = "password123";

    // document.getElementById("loginForm").addEventListener("submit", function (event) {
    //   event.preventDefault();

    //   const username = document.getElementById("username").value;
    //   const password = document.getElementById("password").value;

    //   if (username === adminUsername && password === adminPassword) {
    //     window.location.href = "admin-dashboard.html";
    //   } else {
    //     document.getElementById("error-message").textContent = "Username atau password salah!";
    //   }
    // });
  </script>
</body>

</html>