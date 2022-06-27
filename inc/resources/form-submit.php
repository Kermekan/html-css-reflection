<?php 

/* ---------------------------- Validation Checks --------------------------- */
$fullName = $companyName = $email = $telephone = $subject = $message = "";
$fullNameErr = $companyNameErr = $emailErr = $telephoneErr = $subjectErr = $messageErr = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Name
    if (!empty($_POST['fullName'])) {
        // Check if name has only letters and whitespace
        $fullName = test_input($_POST['fullName']);
        
        if (!preg_match("/^[a-zA-Z ]*$/",$fullName)) {
            $fullNameErr = "Only letters and white space allowed.";
            echo "<div id='form-alert' class='alert error' role='alert'>"
                . "<p>$fullNameErr</p>"
                // . "<i class='icon bi bi-x'></i>"
                . "</div>"; 
        } else {
            $fullNameErr = "";
        }
    } else if(empty($_POST['fullName'])) {
        $fullNameErr = "Name is required.";
        echo "<div id='form-alert' class='alert error' role='alert'>"
            . "<p>$fullNameErr</p>"
            // . "<i class='icon bi bi-x'></i>"
            . "</div>"; 
    }
    // Subject
    if (!empty($_POST["subject"])) {
        $subject = test_input($_POST["subject"]);
        if (strlen($subject) < 5) {
            $subjectErr = "Subject must be at least 5 characters long";
            echo "<div id='form-alert' class='alert error' role='alert'>"
                . "<p>$subjectErr</p>"
                // . "<i class='icon bi bi-x'></i>"
                . "</div>"; 
        } else {
            $subjectErr = "";
        }
    } else if(empty($_POST['subject'])) {
        $subjectErr = "Subject is required.";
        echo "<div id='form-alert' class='alert error' role='alert'>"
            . "<p>$subjectErr</p>"
            // . "<i class='icon bi bi-x'></i>"
            . "</div>"; 
    }
    // Email
    if (!empty($_POST["email"])) {
        $email = test_input($_POST["email"]);
        // Filter Email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format"; 
            echo "<div id='form-alert' class='alert error' role='alert'>"
                . "<p>$emailErr</p>"
                // . "<i class='icon bi bi-x'></i>"
                . "</div>"; 
        } else {
            $emailErrErr = "";
        }
    } else if(empty($_POST['email'])) {
        $emailErr = "Email is required.";
        echo "<div id='form-alert' class='alert error' role='alert'>"
            . "<p>$emailErr</p>"
            // . "<i class='icon bi bi-x'></i>"
            . "</div>"; 
    }
    // Phone
    if (!empty($_POST["telephone"])) {
        $telephone = test_input($_POST["telephone"]);
        // Check if phone number is proper format
        if (!preg_match("/^((\+44\s?\d{4}|\(?\d{5}\)?)\s?\d{6})|((\+44\s?|0)7\d{3}\s?\d{6})$/",$telephone) || strlen($telephone) < 9) {
            $telephoneErr = "Invalid phone number";
            echo "<div id='form-alert' class='alert error' role='alert'>"
                . "<p>$telephoneErr</p>"
                // . "<i class='icon bi bi-x'></i>"
                . "</div>"; 
        } else {
            $telephoneErr = "";
        }
    } else if(empty($_POST['telephone'])) {
        $telephoneErr = "Phone is required.";
        echo "<div id='form-alert' class='alert error' role='alert'>"
            . "<p>$telephoneErr</p>"
            // . "<i class='icon bi bi-x'></i>"
            . "</div>"; 
    }
    // Message
    if (!empty($_POST["message"])) {
        $message = test_input($_POST["message"]);
        if (strlen($message) < 5) {
            $messageErr = "Message must be at least 5 characters long";
            echo "<div id='form-alert' class='alert error' role='alert'>"
                . "<p>$messageErr</p>"
                // . "<i class='icon bi bi-x'></i>"
                . "</div>"; 
        } else {
            $messageErr = "";
        }
    } else if(empty($_POST['message'])) {
        $messageErr = "Message is required.";
        echo "<div id='form-alert' class='alert error' role='alert'>"
            . "<p>$messageErr</p>"
            // . "<i class='icon bi bi-x'></i>"
            . "</div>"; 
    }
    // If Validation is successful
    if ($fullNameErr == "" 
    && $companyNameErr == "" 
    && $emailErr == "" 
    && $telephoneErr == "" 
    && $subjectErr == "" 
    && $messageErr == "") {
        // echo "Success";
        // Query
        $query = "INSERT INTO contact_form(
            fullName, companyName, email, 
            telephone, subject, message) 
            VALUES ('$fullName', '$companyName', '$email', '$telephone', '$subject', '$message')
        ";
        $result = mysqli_query($conn, $query);
        
        // Success Message
        if($result) {
            echo "<div id='form-alert' class='alert success' role='alert'>"
            . "<p>Form submitted successfully</p>"
            // . "<i class='icon bi bi-x'></i>" 
            . "</div>";
            $fullName = $companyName = $email = $telephone = $subject = $message = "";
        } else {
            echo "<div id='form-alert' class='alert error' role='alert'>"
            . "<p>Form submission failed</p>"
            // . "<i class='icon bi bi-x'></i>" 
            . "</div>";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



?>