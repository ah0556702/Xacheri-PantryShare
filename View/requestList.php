<?php include "../includes/cdnlinks.php"; ?>
<?php include "navigation.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Requested Items</title>
</head>
<body>
  <div class="container">
    <h1>Requested Items</h1>
    <form id="requestedItemsForm">
      <ul id="requestedItemsList">
        <!-- Requested items will be dynamically added here -->
      </ul>
    </form>
    <button id="droppedOffButton">Dropped Off</button>
  </div>

  <script>
    // Sample data for requested items
    const requestedItems = [
      "Item 1",
      "Item 2",
      "Item 3",
      "Item 4",
      "Item 5"
    ];

    // Function to create list items for requested items
    function createRequestedItemsList() {
      const requestedItemsList = document.getElementById("requestedItemsList");
      requestedItemsList.innerHTML = ""; // Clear previous items

      requestedItems.forEach(item => {
        const listItem = document.createElement("li");
        const checkbox = document.createElement("input");
        checkbox.type = "checkbox";
        checkbox.value = item;
        checkbox.addEventListener("change", moveCheckedItem);
        listItem.appendChild(checkbox);
        listItem.appendChild(document.createTextNode(item));
        requestedItemsList.appendChild(listItem);
      });
    }

    // Initial rendering of requested items list
    createRequestedItemsList();

    // Function to move checked item to the bottom of the list
    function moveCheckedItem(event) {
      const listItem = event.target.parentNode;
      const requestedItemsList = listItem.parentNode;
      const checked = event.target.checked;

      if (checked) {
        requestedItemsList.appendChild(listItem);
      } else {
        // Move item back to its original position if unchecked
        requestedItemsList.insertBefore(listItem, requestedItemsList.firstChild);
      }
    }

    // Function to handle click event on "Dropped Off" button
    document.getElementById("droppedOffButton").addEventListener("click", function() {
      // Redirect to confirmationGiver.php page
      window.location.href = "confirmationGiver.php";

      // Notify the other user by redirecting them to confirmationGot.php
      window.open("confirmationGot.php");
    });
  </script>
</body>
</html>
