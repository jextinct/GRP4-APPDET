<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Group 4 | Registration</title>
        <!-- CSS File -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="background">
        <form action="Group4_MemberInfo.php" method="post">
            <!-- -------- HEADER ------- -->
                <div class="header">
                    <h1>ABCR2 COOPERATIVE INCORPORATED</h1>
                    <h3>143 Tinadhana St., Brgy. Pinagtagpo, Vigan City</h3>
                    <h3>Tel #: 7834-2341</h3><br><br>
                </div>
            <!-- -------- REGISTRATION FORM ------- -->
                    <div class="base">

                        <h2>Registration Form</h2>

                        <div class="row row1">
                            <label for="lName">Name: </label>
                            <input type="text" name="lName" placeholder="Last Name" required>
                            <input type="text" name="fName" placeholder="First Name" required>
                            <input type="text" name="mInitial" placeholder="Middle Initial" required>
                        </div>
                        <br>
                        <div class="row row2">
                            <label for="address">Address: </label>
                            <input type="text" name="address" placeholder="Room/House No., Street Name, Barangay/Village/Subdivision, Municipality/City" required>
                        </div>
                        <br>
                        <div class="row row3">
                            <label for="contact">Contact No.: </label>
                            <input type="text" name="contact" placeholder="09**********" maxlength="11" required>
                            <label for="dateBirth">Date of Birth: </label>
                            <input type="text" name="dateBirth" placeholder="YYYY-MM-DD" maxlength="10" required>
                        </div>
                        <div class="row row4">
                            <label for="gender">Gender: </label>
                            <input type="radio" name="gender" value="MALE">
                            <label for="male" class="light">Male</label>
                            <input type="radio" name="gender" value="FEMALE">
                            <label for="female" class="light">Female</label>
                        </div>
                        <br><br>
                        <div class="row row5">
                            <label for="ofcAddress">Office Address: </label>
                            <input type="text" name="ofcAddress" size="75" placeholder="Building No., Street Name, Municipality/City" required>
                        </div>
                        <br>
                        <div class="row row6">
                            <label for="position">Position: </label>
                            <input type="text" name="position" required>
                            <label for="ofcContact">Office Contact No.: </label>
                            <input type="text" name="ofcContact" placeholder="(02)8802-3425" required>
                        </div>
                        <br>
                        <div class="row row7">
                            <label for="empStat">Employment Status: </label>
                            <select name="empStat">
                                <option value="Permanent">Permanent</option>
                                <option value="Casual">Casual</option>
                            </select>
                            <label for="salary">Monthly Salary: </label>
                            <select name="salary">
                                    <option value="Below Php10,000.00">Below Php10,000.00</option>
                                    <option value="Php10,000.00 - Php20,000.00">Php10,000.00 - Php20,000.00</option>
                                    <option value="Above Php20,000.00">Above Php20,000.00</option>
                            </select>
                        </div>
                        <br>
                        <div class="row row8">
                            <label for="coborrower">Co-Borrower: </label>
                            <input type="text" name="coborrower">
                        </div>
                        <br>
                        <div class="row9">
                        <input type="radio" name="agree" value="agree" required>
                        <label for="agree" class="light">I hereby certify that the above informations are true and agree to send this information to the company.</label>
                        </div>
                    </div>
                    <br>
                    <div class="btn">
                        <button type="submit">Submit</button>
                        <button type="reset">Clear Form</button>
                    </div>
                    </div>
            </form>
        </div>
        <!-- -------- FOOTER ------- -->
            <div class="footer">
            <h5>All rights reserved. © ABCR2 2022</h5>
            </div>
    </body>
</html>