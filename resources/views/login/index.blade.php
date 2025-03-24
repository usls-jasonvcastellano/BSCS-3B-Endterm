<!DOCTYPE html>
<html lang="en">
  <style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url('https://wallpaperaccess.com/full/2413220.jpg'); 
        background-size: cover;
        background-position: center;
        background-attachment: fixed; 
        background-repeat: no-repeat; 
    }
    .container {
      max-width: 300px;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
      font-family: "Poppins", "sans-serif";
    }

    .question {
      font-size: 25px;
      margin-bottom: 10px;
    }

    a {
      text-decoration: none;
      color: white;
    }
  </style>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    
    <div class="container text-center">
      <div class="m-3 row">
        <label
          for="staticEmail"
          class="col-md-2 col-lg-2 col-xl-3 col-form-label"
          >Email</label
        >
        <div class="col-md-10 col-lg-10 col-xl-9 col">
          <input
            input
            type="email"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder="name@example.com"
          />
        </div>
      </div>
      <div class="m-3 row">
        <label
          for="inputPassword"
          class="col-md-3 col-lg-3 col-xl-4 ol-form-label"
          >Password</label
        >
        <div class="col-md-9 col-lg-9 col-xl-8 col">
          <input type="password" class="form-control" id="inputPassword" />
        </div>
      </div>
      <div class="m-3 row">
        <class="col-12">
        <button type="submit" class="btn btn-success btn-block" onclick="location.href='inventory'">Submit</button>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
