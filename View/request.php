<?php include "../includes/cdnlinks.php"; include "navigation.php" ?>

<div class="container mt-5">
    <h1>Request</h1>

    <form id="requestForm">
      <div class="input-group mb-3">
        <label class="input-group-text" for="categoryGroup">Options</label>
        <select class="form-select" id="categoryGroup">
          <option selected disabled>Choose Category:</option>
          <option value="1">Category 1</option>
          <option value="2">Category 2</option>
          <option value="3">Category 3</option>
        </select>
      </div>

      <div id="checkboxContainer"></div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script>
    const categories = {
      1: ["Item 1", "Item 2", "Item 3"],
      2: ["Item 4", "Item 5", "Item 6"],
      3: ["Item 7", "Item 8", "Item 9"]
    };

    const categorySelect = document.getElementById("categoryGroup");
    const checkboxContainer = document.getElementById("checkboxContainer");

    categorySelect.addEventListener("change", function() {
      const categoryId = this.value;
      const categoryItems = categories[categoryId];

      // Clear previous checkboxes
      checkboxContainer.innerHTML = "";

      // Create checkboxes for selected category
      categoryItems.forEach(item => {
        const checkboxDiv = document.createElement("div");
        checkboxDiv.classList.add("input-group", "mb-3");

        const checkboxInput = document.createElement("input");
        checkboxInput.classList.add("form-check-input");
        checkboxInput.setAttribute("type", "checkbox");
        checkboxInput.setAttribute("value", item);

        const checkboxLabel = document.createElement("label");
        checkboxLabel.classList.add("form-check-label");
        checkboxLabel.textContent = item;

        checkboxDiv.appendChild(checkboxInput);
        checkboxDiv.appendChild(checkboxLabel);

        checkboxContainer.appendChild(checkboxDiv);
      });
    });

    document.getElementById("requestForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent form submission for demonstration

      // Collect selected items
      const selectedItems = Array.from(document.querySelectorAll("#checkboxContainer input[type='checkbox']:checked"))
        .map(checkbox => checkbox.value);

      // Output selected items (you can replace this with your submission logic)
      console.log("Selected items:", selectedItems);
    });
  </script>

