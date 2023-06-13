<?php
include 'dbcon.php';

if (isset($_POST['submit_btn'])) {
    $fname = mysqli_real_escape_string($con,$_POST['full-name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $pass = mysqli_real_escape_string($con,$_POST['password']);
    $phone = mysqli_real_escape_string($con,$_POST['tel']);
    $address = mysqli_real_escape_string($con,$_POST['address']);
    $pname = mysqli_real_escape_string($con,$_POST['pet-name']);
    $p_gender = mysqli_real_escape_string($con,$_POST['gender']);
    $species = mysqli_real_escape_string($con,$_POST['species']);
    $date = date('Y-m-d', strtotime($_POST['birth-date']));
    $breed = mysqli_real_escape_string($con,$_POST['breed']);
    $colmarks = mysqli_real_escape_string($con,$_POST['color-markings']);
    /* The First values are the variable name in html file and the second values are the variable names inside the php code */
    $query = "INSERT INTO registration(full-name, email, password, tel, address, pet-name, gender, species, birth-date, breed, color-markings) VALUES ('$fname', '$email', '$pass', '$phone', '$address', '$pname', $p_gender,'$species', '$date', '$breed', '$colmarks')";

    $result = mysqli_query($con, $query);

    if ($result) {
        $_SESSION['status'] = "Registration Successful";
        header("location:register.php");
    } else {
        $_SESSION['status'] = "Registration Failed";
        header("location:register.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <script src="https://kit.fontawesome.com/bbc16bf572.js" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="register.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <title>Pet Allies</title>
    </head>
<body>
    <section class="container">

        <?php
        
        if (isset($_SESSION['status'])) {
            echo "<h4>".$_SESSION['status']."<h4>";
            unset($_SESSION['status']);
        }

        ?>

        <header>Registration Form</header>
        <form action="#" class="form" method="POST">
            <!---------- Input Box  ---------->
            <div class="input-box">
                <label>Full Name</label>
                <input type="text" name="full-name" placeholder="Enter your Full Name" required>
            </div>
            <div class="input-box">
                <label>Email</label>
                <input type="text" name="email" placeholder="Enter your Email" required>
            </div>
            <div class="input-box">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>
            <div class="input-box">
                <label>Phone Number</label>
                <input type="tel" name="tel" placeholder="Enter your Phone Number">
            </div>
            <div class="input-box">
                <label>Address</label>
                <input type="text" name="address" placeholder="Enter your Address">
            </div>
            <div class="input-box">
                <label>Pet Name</label>
                <input type="text" name="pet-name" placeholder="Enter your Pet's Name">
            </div>
            <!---------- Gender Box ---------->
            <div class="sex-box">
                <h3>Pet's Sex</h3>
                <div class="sex-option">
                    <div class="sex">
                        <input type="radio" id="check" name="gender" value="Male" required/>
                        <label for="check">Male</label>
                    </div>
                    <div class="sex">
                        <input type="radio" id="check" name="gender" value="Female" required/>
                        <label for="check">Female</label>
                    </div>
                </div>
            </div>
            <!---------- Input Box Column Div ---------->
            <div class="column">
                <div class="input-box">
                    <label>Species</label>
                    <input type="text" name="species" placeholder="Species" required>
                </div>
                <div class="input-box">
                    <label>Date of Birth</label>
                    <input type="date" name="birth-date" required>
                </div>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>Breed</label>
                    <input type="text" name="breed" placeholder="Breed" required>
                </div>
                <div class="input-box">
                    <label>Color Markings</label>
                    <input type="text" name="color-markings" placeholder="Color Markings" required>
                </div>
            </div>
            <!---------- Terms and Condition ---------->
            <div class="field-terms">
                <input type="checkbox" class="check-button" required>
                <label class="check">I Accept the Terms and Conditions</label>
            </div>
            <button type="button" class="btn btn-primary" name="submit_btn">Submit</button>
        </form>
    </section>
</body>
</html>