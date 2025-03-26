<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Add Items to Inventory</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container mt-4">
      <h3 class="text-center mb-4">Add Items to Inventory</h3>

      <form id="inventoryForm" class="mb-4">
        <div class="mb-3">
          <label for="itemName" class="form-label">Item Name</label>
          <input type="text" class="form-control" id="itemName" required />
        </div>
        <div class="mb-3">
          <label for="quantity" class="form-label">Quantity</label>
          <input type="number" class="form-control" id="quantity" required />
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" class="form-control" id="price" required />
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <input type="text" class="form-control" id="category" required />
        </div>
        <button type="submit" class="btn btn-primary w-100">Add Item</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      // Function to handle form submission and add item to inventory
      document
        .getElementById("inventoryForm")
        .addEventListener("submit", function (event) {
          event.preventDefault(); // Prevent form from submitting and page reload

          // Get values from the form fields
          const itemName = document.getElementById("itemName").value;
          const quantity = document.getElementById("quantity").value;
          const price = document.getElementById("price").value;
          const category = document.getElementById("category").value;

          // Call the function to add item to the inventory table (from inventory.html)
          window.opener.addItemToInventory(
            itemName,
            quantity,
            `$${price}`,
            category
          );

          // Clear form fields after submitting
          document.getElementById("inventoryForm").reset();

          window.close(); //close the popup window.
        });
    </script>
  </body>
</html>
