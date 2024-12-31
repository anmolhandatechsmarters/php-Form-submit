<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href="./style.css"/>
    <title>Trip Submission From</title>
</head>
<body>
    <div class="MainContainer">
        <div class="Mainbox">
        <h1>Trip Submission Form for Park</h1>
        <h4>This form is get the Data For User that go to trip in Imbursement park</h4>
        <?php
        if($Insert){
            echo " <div style='color: green; font-weight: bold;'>Successfully Inserted!</div>";
        }
        ?>
        <div>
            <form method="POST" id="formsubmit" action="./conn.php">
                <input placeholder="Enter the Full Name" type="text" name="name"/><br/>
                <input type="email" placeholder="Enter the Email" name="email"/><br/>
                <input placeholder="Enter the Password" type="password" name="password"/><br/>
                <input placeholder="Enter the Phone Number" type="number" name="phonenumber"/><br/>
                <textarea type="text" placeholder="Enter the Full Address" name="address"></textarea><br/>
                <button>Submit</button>
            </form>
        </div>
    </div>
    </div>
<script>
const form=document.getElementById("formsubmit")
form.addEventListner("Submit",(e)=>{
e.preventDefault();
})

</script>
</body>
</html>
