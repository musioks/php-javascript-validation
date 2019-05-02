<?php
if(isset($_POST['submitData'])){
    $name=htmlspecialchars($_POST['username']);
    echo $name;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP AM- Home</title>
    <style type="text/css">
        #main {
            padding: 10px 200px 10px 500px;
            align-content: center;
        }

        #main.userReg {
            padding: 10px;
        }

        #main .userReg label, input, select, button {
            padding: 10px;
            display: block;
        }

        #message {
            color: red;
        }

    </style>
</head>
<body>
<div id="main">
    <span id="message"></span>
    <form name="userReg" class="userReg" onsubmit="return(checkForm());" method="post" action="<?php $_SERVER['SELF'];?>" novalidate="">
        <label>Name</label>
        <input type="text" name="username" placeholder="Enter your Name">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter your Email">
        <label>Phone</label>
        <input type="text" name="phone" placeholder="Enter your phone number">
        <label>Choose Country</label>
        <select name="country">
            <option value="">--Select Country--</option>
            <option value="Kenya">Kenya</option>
            <option value="Uganda">Uganda</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Tanzania">Tanzania</option>
        </select>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter preferred password">
        <button type="submit" id="submit-btn" name="submitData">Submit Data</button>
    </form>
</div>
<script type="text/javascript">

    function checkForm() {
        let errors = [];
        let username = document.userReg.username.value;
        let email = document.userReg.email.value;
        let phone = document.userReg.phone.value;
        let country = document.userReg.country.value;
        let password = document.userReg.password.value;
        if (username === "") {
            errors.push('Name field should not be empty');

            // document.querySelector('#message').innerHTML=errors;
            // console.log(errors)
            // 	return false;
        }

        if (email === "") {
            errors.push("Email field should not be empty!");
            // document.querySelector('#message').innerHTML=errors;
            // 	return false;
        }
        if (phone === "") {
            errors.push("Phone field should not be empty!");
            // document.querySelector('#message').innerHTML=errors;
            // 	return false;
        }
        if (country === "") {
            errors.push("You must select a country!");
            // document.querySelector('#message').innerHTML=errors;
            // 	return false;
        }
        if (password === "") {
            errors.push("Password field should not be empty!");
            // document.querySelector('#message').innerHTML=errors;
            // 	return false;
        }

        if (errors.length > 0) {
            document.querySelector('#message').innerHTML = "";
            console.log(errors);
            for (let i = 0; i < errors.length; i++) {
                document.querySelector('#message').innerHTML += "<ul><li>"+errors[i] + "</li> </ul>";
            }
            return false;

        } else {
            return true;
        }

    }
</script>
</body>
</html>