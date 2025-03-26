<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Login Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div
      class="container d-flex justify-content-center align-items-center min-vh-100"
    >
      <div class="row w-100">
        <div class="col-md-6 col-lg-4 col-xl-3 mx-auto">
          <div class="card p-4 shadow">
            <h4 class="text-center">Login</h4>
            <form id="loginForm" action="#" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input
                  type="text"
                  id="username"
                  class="form-control"
                  placeholder="Enter username"
                />
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input
                  type="password"
                  id="password"
                  class="form-control"
                  placeholder="Enter password"
                />
              </div>
              <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document
        .getElementById("loginForm")
        .addEventListener("submit", function (event) {
          event.preventDefault(); // Prevent the default form submission

          const username = document.getElementById("username").value;
          const password = document.getElementById("password").value;

          // Simple validation (replace with your actual authentication logic)
          if (username === "user" && password === "password") {
            window.location.href = "inventory.html"; // Redirect to inventory page
          } else {
            alert("Invalid username or password");
          }
        });
    </script>
  </body>
</html>
