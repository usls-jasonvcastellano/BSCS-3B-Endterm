<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Add Item</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-6 col-sm-6 col-md-8 col-lg-10 col-xl-12">
          <a class="btn btn-primary" href="#" role="button">Back</a>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-6 col-sm-6 col-md-8 col-lg-10 col-xl-12">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Category</span>
            <input
              type="text"
              class="form-control"
              placeholder="Item Category"
              aria-label="itemCategory"
              aria-describedby="basic-addon1"
            />
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-6 col-sm-6 col-md-8 col-lg-10 col-xl-12">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Item Name</span>
            <input
              type="text"
              class="form-control"
              placeholder="Item Name"
              aria-label="itemName"
              aria-describedby="basic-addon2"
            />
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-6 col-sm-6 col-md-8 col-lg-10 col-xl-12">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Quantity</span>
            </div>
            <input
              type="text"
              class="form-control"
              placeholder="Item Quantity"
              aria-label="itemQuantity"
              aria-label="Amount (to the nearest dollar)"
            />
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-6 col-sm-6 col-md-8 col-lg-10 col-xl-12">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Price</span>
            </div>
            <input
              type="text"
              class="form-control"
              placeholder="Item Price"
              aria-label="itemPrice"
            />
            <div class="input-group-append">
              <span class="input-group-text">.00</span>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-6 col-sm-6 col-md-8 col-lg-10 col-xl-12 mx-auto">
          <div class="d-grid gap-2">
            <button class="btn btn-primary" type="button">Submit</button>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
