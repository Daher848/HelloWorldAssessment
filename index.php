<?php 
    include('userInfo.php'); 
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <title>Hello World Registration Form</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    
    <body>
    
        <div id="formBody" align="center">
            <h1>Hello World Registration Form</h1>
            <hr>
            <form id="registrationForm" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <div>
                    <input class="inputBox" name="firstName" type="text" value="<?= $first_name ?>" placeholder="First Name"><br>
                    <span class="error"><?= $first_name_error ?></span>
                </div>
                <div>
                    <input class="inputBox" name="lastName" type="text" value="<?= $last_name ?>" placeholder="Last Name"><br>
                    <span class="error"><?= $last_name_error ?></span>
                </div>
                <div>
                    <input class="inputBox" name="addressOne" type="text" value="<?= $address_one ?>" placeholder="Street Address"><br>
                    <span class="error"><?= $address_one_error ?></span>
                </div>
                <input class="inputBox" type="text" name="addressTwo" value="<?= $address_two ?>"placeholder="Apartment, Suite, Unit, Building, etc."><br>
                <div>
                    <input class="inputBox" name="city" type="text" value="<?= $city ?>" placeholder="City"><br>
                    <span class="error"><?= $city_error ?></span>
                </div>
                <div>
                    <select class="dropDownBox" name="state">
                        <option value="" disabled selected>State</option>
                        <option <?php if ($state == "AL") echo 'selected'; ?> value="AL">AL</option>
                        <option <?php if ($state == "AK") echo 'selected'; ?> value="AK">AK</option>
                        <option <?php if ($state == "AZ") echo 'selected'; ?> value="AZ">AZ</option>
                        <option <?php if ($state == "AR") echo 'selected'; ?> value="AR">AR</option>
                        <option <?php if ($state == "CA") echo 'selected'; ?> value="CA">CA</option>
                        <option <?php if ($state == "CO") echo 'selected'; ?> value="CO">CO</option>
                        <option <?php if ($state == "CT") echo 'selected'; ?> value="CT">CT</option>
                        <option <?php if ($state == "DC") echo 'selected'; ?> value="DC">DC</option>
                        <option <?php if ($state == "DE") echo 'selected'; ?> value="DE">DE</option>
                        <option <?php if ($state == "FL") echo 'selected'; ?> value="FL">FL</option>
                        <option <?php if ($state == "GA") echo 'selected'; ?> value="GA">GA</option>
                        <option <?php if ($state == "HI") echo 'selected'; ?> value="HI">HI</option>
                        <option <?php if ($state == "ID") echo 'selected'; ?> value="ID">ID</option>
                        <option <?php if ($state == "IL") echo 'selected'; ?> value="IL">IL</option>
                        <option <?php if ($state == "IN") echo 'selected'; ?> value="IN">IN</option>
                        <option <?php if ($state == "IA") echo 'selected'; ?> value="IA">IA</option>
                        <option <?php if ($state == "KS") echo 'selected'; ?> value="KS">KS</option>
                        <option <?php if ($state == "KY") echo 'selected'; ?> value="KY">KY</option>
                        <option <?php if ($state == "LA") echo 'selected'; ?> value="LA">LA</option>
                        <option <?php if ($state == "ME") echo 'selected'; ?> value="ME">ME</option>
                        <option <?php if ($state == "MD") echo 'selected'; ?> value="MD">MD</option>
                        <option <?php if ($state == "MA") echo 'selected'; ?> value="MA">MA</option>
                        <option <?php if ($state == "MI") echo 'selected'; ?> value="MI">MI</option>
                        <option <?php if ($state == "MN") echo 'selected'; ?> value="MN">MN</option>
                        <option <?php if ($state == "MS") echo 'selected'; ?> value="MS">MS</option>
                        <option <?php if ($state == "MO") echo 'selected'; ?> value="MO">MO</option>
                        <option <?php if ($state == "MT") echo 'selected'; ?> value="MT">MT</option>
                        <option <?php if ($state == "NE") echo 'selected'; ?> value="NE">NE</option>
                        <option <?php if ($state == "NV") echo 'selected'; ?> value="NV">NV</option>
                        <option <?php if ($state == "NH") echo 'selected'; ?> value="NH">NH</option>
                        <option <?php if ($state == "NJ") echo 'selected'; ?> value="NJ">NJ</option>
                        <option <?php if ($state == "NM") echo 'selected'; ?> value="NM">NM</option>
                        <option <?php if ($state == "NY") echo 'selected'; ?> value="NY">NY</option>
                        <option <?php if ($state == "NC") echo 'selected'; ?> value="NC">NC</option>
                        <option <?php if ($state == "ND") echo 'selected'; ?> value="ND">ND</option>
                        <option <?php if ($state == "OH") echo 'selected'; ?> value="OH">OH</option>
                        <option <?php if ($state == "OK") echo 'selected'; ?> value="OK">OK</option>
                        <option <?php if ($state == "OR") echo 'selected'; ?> value="OR">OR</option>
                        <option <?php if ($state == "PA") echo 'selected'; ?> value="PA">PA</option>
                        <option <?php if ($state == "RI") echo 'selected'; ?> value="RI">RI</option>
                        <option <?php if ($state == "SC") echo 'selected'; ?> value="SC">SC</option>
                        <option <?php if ($state == "SD") echo 'selected'; ?> value="SD">SD</option>
                        <option <?php if ($state == "TN") echo 'selected'; ?> value="TN">TN</option>
                        <option <?php if ($state == "TX") echo 'selected'; ?> value="TX">TX</option>
                        <option <?php if ($state == "UT") echo 'selected'; ?> value="UT">UT</option>
                        <option <?php if ($state == "VT") echo 'selected'; ?> value="VT">VT</option>
                        <option <?php if ($state == "VA") echo 'selected'; ?> value="VA">VA</option>
                        <option <?php if ($state == "WA") echo 'selected'; ?> value="WA">WA</option>
                        <option <?php if ($state == "WV") echo 'selected'; ?> value="WV">WV</option>
                        <option <?php if ($state == "WI") echo 'selected'; ?> value="WI">WI</option>
                        <option <?php if ($state == "WY") echo 'selected'; ?> value="WY">WY</option>
                    </select><br>
                    <span class="error"><?= $state_error ?></span>
                </div>
                <div>
                    <input id="zip" name="zip" class="inputBox" value="<?= $zip ?>" type="number" placeholder="Zip"><br>
                    <span class="error"><?= $zip_error ?></span>
                </div>
                <div>
                    <select class="dropDownBox" name="country">
                        <option value="" disabled selected>Country</option>
                        <option <?php if ($country == "United States") echo 'selected'; ?> value="United States">United States</option>
                    </select><br>
                    <span class="error"><?= $country_error ?></span>
                </div>
                <input type="submit" id="register" name="submit" value="Register">
            </form>
        </div>
        
        <script>
        
            function validateForm() {

                var zip = document.forms["registrationForm"]["zip"].value;
                
                if (zip.length != 5 && zip.length != 9) {
                    
                    alert("Your zip code should be either 5 or 9 digits long!");
                    
                    return false;
                }
                
                return true;
            }
            
        </script>
        
    </body>
    
</html>