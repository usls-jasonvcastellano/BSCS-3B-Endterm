<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>

  <!-- Adding this comment just for the commit message -->

  <body>
    <div class="container">
        <div class="panel panel-default"></div>
            <div class="panel-body">
                <button type="button" class="btn btn-primary mb-1">Back</button>
                <div class="form-group row">
                    <label for="Category" class="col-sm-3 col-form-label mb-3">Category:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="Qty" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Item_Name" class="col-sm-3 col-form-label mb-3">Item Name:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="Item_Name" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Qty" class="col-sm-3 col-form-label mb-3">Qty:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="Qty" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Price" class="col-sm-3 col-form-label mb-3">Price:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="Price" placeholder="">
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-primary col-3">Submit</button>
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
