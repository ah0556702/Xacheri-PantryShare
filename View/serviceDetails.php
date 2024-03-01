<?php include "../includes/cdnlinks.php"; include "navigation.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Request Page</title>
</head>
<body>
  <div class="container">
    <!-- Location Address Section -->
    <div class="location-address">
      <h2>Location Address</h2>
      <p>123 Main Street, Cityville, State, Zip Code</p>
    </div>

    <!-- Request Details Summary Section -->
    <div class="request-details">
      <h2>Request Details Summary</h2>
      <h3>Categories:</h3>
      <ul id="categoryList">
        <!-- Categories will be dynamically added here -->
      </ul>
    </div>

    <!-- Fulfill Request Button -->
    <div class="fulfill-request">
      <button><a href="requestList.php">Fulfill Request</a></button>
    </div>
  </div>

  <script>
    // Sample data for categories
    const categories = ["Category 1", "Category 2", "Category 3"];

    // Function to create list items for categories
    function createCategoryList() {
      const categoryList = document.getElementById("categoryList");
      categoryList.innerHTML = ""; // Clear previous items

      categories.forEach(category => {
        const categoryItem = document.createElement("li");
        categoryItem.textContent = category;
        categoryList.appendChild(categoryItem);
      });
    }

    // Initial rendering of category list
    createCategoryList();

    function fulfillRequest() {
      // Add your fulfillment logic here
    }
  </script>
</body>
</html>
