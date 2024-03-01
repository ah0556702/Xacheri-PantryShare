
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="landing" id="landing">
        <a href="#landingPage">
            <img src="images/logo.png" alt="logoIcon">
        </a>
    </div>

    
    <script>
        setTimeout(function(){
            window.location.href = "View/login.php";
        }, 1000);
    </script>
        /*switch($action){
            case "register":
                //$username = $_POST['username'];
                //$fName = $_POST['fName'];
                //$lName = $_POST['lName'];
                //$email = $_POST['email'];

            case "login":
                //$username = $_POST['username'];
                //$password = $_POST['password'];

            case "make_request":
                include "View/requestForm.php";

            case "fulfill_request":
                // redirect to the requests detail page
                // with checkbox values in list form submitted
                // by user in request
            
            case "communicate": // this should just show notification messages such as.. "Your request has been delivered" or "Thank you for fulfilling a request"
                include "View/Messages.php";
        }*/

    ?>
</body>
</html>