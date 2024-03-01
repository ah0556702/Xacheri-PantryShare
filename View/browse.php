<?php include "navigation.php"; include "../includes/cdnlinks.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dynamic Requests List</title>

</head>
<body>
  
  <div class="container">
    <h1>Dynamic Requests List</h1>
    <div class="list-container" id="requestList">
      <!-- List items will be dynamically added here -->
    </div>
  </div>

  <script>
  // Simulated data (replace with actual data retrieval logic)
  const requests = [
    "Request 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
    "Request 2: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "Request 3: Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
    // Add more requests here
  ];

  // Function to create list items from the requests array
  function createListItems() {
    const listContainer = document.getElementById("requestList");
    listContainer.innerHTML = ""; // Clear previous items

    requests.forEach((request, index) => {
      const listItem = document.createElement("div");
      listItem.classList.add("request-item");
      listItem.textContent = request;
      listContainer.appendChild(listItem);

      // Add horizontal line after each list item except the last one
      if (index < requests.length - 1) {
        const hr = document.createElement("hr");
        listContainer.appendChild(hr);
      }
    });
  }

  // Initial rendering of list items
  createListItems();
</script>

</body>
</html>
