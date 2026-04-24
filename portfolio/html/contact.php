<?php
$nameErr = $emailErr = $websiteErr = $genderErr = $DropDownErr = "";
$checkBox = $checkboxErr = $fname = $lname = $email = $website = $gender = $comment = "";

function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name
    if (empty($_POST["fname"])) {
        $nameErr = "*Name is required";
    } else {
        $fname = cleanInput($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
            $nameErr = "*Only letters and white space allowed";
        }
    }
    if (empty($_POST["lname"])) {
        $nameErr = "*Name is required";
    } else {
        $lname = cleanInput($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
            $nameErr = "*Only letters and white space allowed";
        }
    }

    // Email
    if (empty($_POST["email"])) {
        $emailErr = "*Email is required";
    } else {
        $email = cleanInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "*Invalid email format";
        }
    }

    // Website (optional)
    $website = cleanInput($_POST["website"] ?? "");
    if (!empty($website) && !filter_var($website, FILTER_VALIDATE_URL)) {
        $websiteErr = "*Invalid URL";
    }

    // Comment (optional)
    $comment = cleanInput($_POST["comment"] ?? "");

    // Gender
    if (empty($_POST["gender"])) {
        $genderErr = "*Gender is required";
    } else {
        $gender = cleanInput($_POST["gender"]);
    }

    //checkbox
 
    if (empty($_POST["checkbox"])) {
        $checkboxErr = "*Select at least one";
    } else {
        $checkBox = cleanInput($_POST["checkbox"]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramim's Portfolio</title>
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
    <nav class="navbar">
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li>Contact</li>
            <li><a href="../html/education.html">Education</a></li>
            <li><a href="../html/experience.html">Experience</a></li>
            <li><a href="../html/project.html">Project</a></li>

        </ul>
    </nav>
    <h1>Contact Information</h1>
    <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
            <legend>Registration form</legend>
            <table>
                <tr>
                    <td><label for="first name">Name:</label></td>
                    <td><input type="text" id="first name" name="fname" value="<?= $fname ?>">
                    <span class="error"><?= $nameErr ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="last name">Last Name:</label></td>
                    <td><input type="text" id="last name" name="lname" value="<?= $lname ?>">
                    <span class="error"><?= $nameErr ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label>Gender:</label></td>
                    <td>
                        <input type="radio" name="gender" value="male" <?= ($gender == "male") ? "checked" : "" ?>> Male
                        <input type="radio" name="gender" value="female" <?= ($gender == "female") ? "checked" : "" ?>> Female
                        <span class="error"><?= $genderErr ?></span>
                    </td>

                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="text" id="email" name="email" value="<?= $email?>">
                    <span class="error"><?= $emailErr ?></span>
                </td>
                </tr>
                <tr>
                
                <tr>
                    <td><label for="company">Company:</label></td>
                    <td><input type="text" id="company" name="company"></td>
                </tr>
                <tr>
                    <td>
                        <h3>Contact</h3>
                    </td>
                </tr>
                <tr>
                    <td><label>Reason of contact</label></td>
                    <td>
                        <input type="checkbox" name = "checkbox" value="project" <?= ($checkBox == "project") ? "checked" : "" ?>> Project
                        <input type="checkbox" name = "checkbox" value="thesis" <?= ($checkBox == "thesis") ? "checked" : "" ?>> Thesis
                        <input type="checkbox" name = "checkbox" value="job" <?= ($checkBox == "job") ? "checked" : "" ?>> Job
                        <span class="error"><?= $checkboxErr ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="Topics">Topics:</label></td>
                    <td>
                        <select id="Topics" name="Topics">
                            <option>web development</option>
                            <option>Mobile development</option>
                            <option>AL/ML development</option>
                        </select>
                        <span class="error"><?= $DropDownErr ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label>Consultation date</label></td>
                    <td>
                        <input type="datetime-local" name="date" value="datetime-local"> Date
                    </td>

                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Register">
                        <input type="reset" value="reset">
                    </td>
                </tr>


            </table>


        </fieldset>
    </form>
    <br>
    <a href="../index.html">Back to home</a>

</html>