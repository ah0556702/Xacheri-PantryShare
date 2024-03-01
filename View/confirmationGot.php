<?php include "../includes/cdnlinks.php"; ?>
<?php include "navigation.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pickup Confirmation</title>
</head>
<body>
  <div class="container">
    <h1>Item Pickup Confirmation</h1>
    <p>Please confirm that you have picked up the item.</p>
    <button id="confirmPickupButton">Confirm Pickup</button>
  </div>

  <script>
    // Function to handle click event on "Confirm Pickup" button
    document.getElementById("confirmPickupButton").addEventListener("click", function() {
      // Redirect to a confirmation page or perform further actions
      window.location.href = "confirmationPage.php";
    });
  </script>
</body>
</html>
