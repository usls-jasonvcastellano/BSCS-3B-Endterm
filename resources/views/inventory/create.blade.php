<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventory Form</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url(https://cdn.pixabay.com/photo/2015/12/03/08/50/paper-1074131_960_720.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      }
      .container-box {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        width: 350px;
        font-family: "Poppins", sans-serif;
      }
      .btn-back {
        background-color: #3a2d1c;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
      }
      .btn-submit {
        background-color: #3a2d1c;
        color: white;
        border: none;
        padding: 10px;
        width: 100%;
        border-radius: 5px;
      }
    </style>
  </head>
  <body>
    <div class="container-box">
      <!-- Back Button -->
      <button class="btn-back mb-3">Back</button>

      <!-- Category Dropdown -->
      <div class="mb-3">
        <label class="form-label">Categories:</label>
        <select class="form-select">
          <option>Select Category</option>
          <option>Textbooks</option>
          <option>Novels</option>
          <option>Magazines</option>
        </select>
      </div>

      <!-- Item Name -->
      <div class="mb-3">
        <label class="form-label">Item Name:</label>
        <input type="text" class="form-control" placeholder="Enter item name" />
      </div>

      <!-- Price -->
      <div class="mb-3">
        <label class="form-label">Price:</label>
        <input type="text" class="form-control" placeholder="Enter price" />
      </div>

      <!-- Quantity -->
      <div class="mb-3">
        <label class="form-label">Qty:</label>
        <input
          type="number"
          class="form-control"
          placeholder="Enter quantity"
        />
      </div>

      <!-- Submit Button -->
      <button class="btn-submit">Submit</button>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
