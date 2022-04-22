<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Group 4 | Member Information</title>
        <!-- CSS File -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="background">
        <!-- -------- HEADER ------- -->
            <div class="header">
                <h1>ABCR2 COOPERATIVE INCORPORATED</h1>
                <h3>143 Tinadhana St., Brgy. Pinagtagpo, Vigan City</h3>
                <h3>Tel #: 7834-2341</h3><br><br>
            </div>

        <!-- -------- INFORMATION ------- -->
                <div class="information">
                <?php
                    $lname = $_POST["lName"];
                    $fname = $_POST["fName"];
                    $minitial = $_POST["mInitial"];
                    $address = $_POST["address"];
                    $contact = $_POST["contact"];
                    $dateBirth = $_POST["dateBirth"];
                    $gender = $_POST["gender"];
                    $ofcAddress = $_POST["ofcAddress"];
                    $position = $_POST["position"];
                    $ofcContact = $_POST["ofcContact"];
                    $empStat = $_POST["empStat"];
                    $salary = $_POST["salary"];
                    $coborrower = $_POST["coborrower"];
                    ?>
                
                <h2>Member Information</h2>
                <div class="personal">
                    <div class="name">
                        <?php echo "<h3>$lname, $fname $minitial</h3>"; ?>
                    </div>
                </div>
                    <div class="myInfo">
                        <?php 
                            echo "<h4>Address: $address</h4>";
                            echo "<h4>Contact: $contact</h4>";
                            echo "<h4>Date of Birth: $dateBirth</h4>";
                            echo "<h4>Gender: $gender</h4>";
                            echo "<h4>Office Address: $ofcAddress</h4>";
                            echo "<h4>Position: $position</h4>";
                            echo "<h4>Office Contact: $ofcContact</h4>";
                            echo "<h4>Employment: $empStat</h4>";
                            echo "<h4>Salary: $salary</h4>";
                            echo "<h4>Co-Borrower: $coborrower</h4>";
                        ?>
                    </div>
                <div class="btn">
                    <button type="return"><a href="Group4_Registration.php">Back to Registration</button>
                </div>
            </div>
            </div>
    </body>
</html>