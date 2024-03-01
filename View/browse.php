<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dynamic Requests List</title>
  <style>
    /* Your CSS styles here */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
    }
    
    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .list-container {
      max-height: 400px;
      overflow-y: auto;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 10px;
    }
    
    .request-item {
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }
    
    .request-item:last-child {
      border-bottom: none;
    }
    
    .request-item:hover {
      background-color: #f9f9f9;
    }
    
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
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
      });
    }

    // Initial rendering of list items
    createListItems();
  </script>
</body>
</html>
