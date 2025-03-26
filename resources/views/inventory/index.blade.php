<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Inventory Table</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container mt-4">
      <h3 class="text-center mb-4">Inventory Table</h3>
      <button id="addItemButton" class="btn btn-primary mb-3">Add Item</button>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Item Name</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Category</th>
            </tr>
          </thead>
          <tbody id="inventoryTableBody">
            <tr>
              <td>Item 1</td>
              <td>50</td>
              <td>$10</td>
              <td>Category A</td>
            </tr>
            <tr>
              <td>Item 2</td>
              <td>30</td>
              <td>$15</td>
              <td>Category B</td>
            </tr>
            <tr>
              <td>Item 3</td>
              <td>20</td>
              <td>$20</td>
              <td>Category C</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div id="addItemFormContainer" style="display: none">
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
          <button
            type="button"
            id="cancelAddItem"
            class="btn btn-secondary w-100 mt-2"
          >
            Cancel
          </button>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      // Function to add item to the inventory table
      function addItemToInventory(name, quantity, price, category) {
        const tableBody = document.getElementById("inventoryTableBody");
        const newRow = document.createElement("tr");

        // Create table data for each field
        const itemNameCell = document.createElement("td");
        itemNameCell.textContent = name;
        const quantityCell = document.createElement("td");
        quantityCell.textContent = quantity;
        const priceCell = document.createElement("td");
        priceCell.textContent = price;
        const categoryCell = document.createElement("td");
        categoryCell.textContent = category;

        // Append the cells to the row
        newRow.appendChild(itemNameCell);
        newRow.appendChild(quantityCell);
        newRow.appendChild(priceCell);
        newRow.appendChild(categoryCell);

        // Append the row to the table
        tableBody.appendChild(newRow);
      }

      document
        .getElementById("addItemButton")
        .addEventListener("click", function () {
          document.getElementById("addItemFormContainer").style.display =
            "block";
        });

      document
        .getElementById("cancelAddItem")
        .addEventListener("click", function () {
          document.getElementById("addItemFormContainer").style.display =
            "none";
        });

      document
        .getElementById("inventoryForm")
        .addEventListener("submit", function (event) {
          event.preventDefault();

          const itemName = document.getElementById("itemName").value;
          const quantity = document.getElementById("quantity").value;
          const price = document.getElementById("price").value;
          const category = document.getElementById("category").value;

          addItemToInventory(itemName, quantity, `$${price}`, category);

          document.getElementById("inventoryForm").reset();
          document.getElementById("addItemFormContainer").style.display =
            "none";
        });
    </script>
  </body>
</html>
