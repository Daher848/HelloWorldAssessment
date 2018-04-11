<?php

    $connection = new mysqli("localhost", "DaherAbed", "helloworld", "HelloWorldRegistrationForm");

    //Initialize variables for each input value as well as variables for a possible error for each input value as empty strings
    $first_name_error = $last_name_error = $address_one_error = $city_error = $state_error = $zip_error = $country_error = "";
    $first_name = $last_name = $address_one = $address_two = $city = $state = $zip = $country = "";
    
    //Value that will represent how many errors we have, submit form when value is 0 at end of validation
    $num_errors = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["firstName"])) {
            
            $first_name_error = "First name is required";
            $num_errors++;
        }
        else {
            
            $first_name = $_POST["firstName"];
        }
        
        if (empty($_POST["lastName"])) {
            
            $last_name_error = "Last name is required";
            $num_errors++;
        }
        else {
            
            $last_name = $_POST["lastName"];
        }
        
        if (empty($_POST["addressOne"])) {
            
            $address_one_error = "Street address is required";
            $num_errors++;
        }
        else {
            
            $address_one = $_POST["addressOne"];
        }
        
        if (!empty($_POST["addressTwo"])) {
            
            $address_two = $_POST["addressTwo"];
        }
        
        if (empty($_POST["city"])) {
            
            $city_error = "City is required";
            $num_errors++;
        }
        else {
            
            $city = $_POST["city"];
        }
        
        if (empty($_POST["state"])) {
            
            $state_error = "State is required";
            $num_errors++;
        }
        else {
            
            $state = $_POST["state"];
            
            if (strlen($state) != 2) {
                
                $state_error = "Must use state abbreviation";
                $num_errors++;
            }
        }
        
        if (empty($_POST["zip"])) {
            
            $zip_error = "Zip is required";
            $num_errors++;
        }
        else {
            
            $zip = $_POST["zip"];
            
            if (is_nan($zip)) {
                
                $zip_error = "Zip must contain only integers";
                $num_errors++;
            }
            else if (strlen($zip) != 5 && strlen($zip) != 9) {
                
                $zip_error = "Zip must be either 5 or 9 digits";
                $num_errors++;
            }
        }
        
        if (empty($_POST["country"])) {
            
            $country_error = "Country is required";
            $num_errors++;
        }
        else {
            
            $country = $_POST["country"];
            
            if ($country != "United States") {
                
                $country_error = "You must be from the United States";
                $num_errors++;
            }
        }
        
        //Time to submit the form contingent on there being no errors
        if ($num_errors == 0) {
            
            if ($connection->connect_error) {

                die("Connection failed: " . $connection->connect_error);
            }
            
            date_default_timezone_set('America/Detroit');

            $date = date('Y-m-d H:i:s');

            $sql = "INSERT INTO users (first_name, last_name, address_1, address_2, city, state, zip, country, date_registered) VALUES                              ('$first_name', '$last_name', '$address_one', '$address_two', '$city', '$state', '$zip', '$country', '$date')";

            if ($connection->query($sql) === TRUE) {

                header("Location: confirmation.php");
                exit;
            }
            else {

                echo "Error: " . $sql . "<br>" . $connection->error;
            }
        }
    }

?>