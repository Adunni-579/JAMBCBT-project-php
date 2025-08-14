<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a System Account</title>
    <style>
        .box{margin-right: 60%;border: 2px solid gray;margin-bottom: 40px;}
    </style>
    <script>
        function validate(){
            var Password=document.getElementById("password").value;
            var VerifyPassword=document.getElementById("vpassword").value;
            if(Password!==VerifyPassword){                alert("password do not match");
                return false; // prevent form submission
            }
            return true; // allow form submission
        }
    </script>
</head>
<body>
    <p>Create a System Account</p><br>
    <form action="http://localhost/php%20files/cbt%20submission.php" method="POST" style="margin-left: 20px;font-size: medium;padding: 5px;margin-bottom: 10px;" onsubmit="return validate();">
    <div class="box" style="border-radius: 5px;">
    <p style="font-size:85;margin-top: -10px;margin-left: 19px;background-color:white;margin-right: 314px;padding-left: 4px;">Personal Information</p>
    <label for="FirstName"style="margin-left:15px">FirstName:<input type="text" name="firstname" id="firstname"  required style="width: 350px;height: 27px; margin-left:30px;border: 1px solid lightblue;" ></label><br><br>
    <label for="LastName" style="margin-left:15px">LastName:<input type="text" name="lastname" id="lastname" required style="width: 350px; height: 27px;margin-left: 30px;border: 1px solid lightblue;"></label><br><br>
    </div>
    <div class="box 2" style="border-radius: 5px;">
    <p style="font-size:85;margin-top: -10px;margin-left: 19px;background-color:white ;margin-right: 314px;padding-left: 5px;">Login Information</p>
    <label for="Username" style="margin-left:15px">Username:<input type="text" name="username" id="username" required style="width: 350px;height: 27px; margin-left:20px;border: 1px solid lightblue;" ></label><br><br>
   <label for="Password" style="margin-left:15px">Password:<input type="text" name="password" id="password" required style="width: 350px; height: 27px;margin-left: 20px;border: 1px solid lightblue;"></label><br><br>
    <label for="VerifyPassword" style="margin-left:15px">VerifyPassword:<input type="text" name="vpassword" id="vpassword" required style="width: 330px;height: 27px; margin-left:5px;border: 1px solid lightblue;"></label><br><br>
    </div>
    <input type="submit" name="register" value="Register" onclick="validate()" style="margin-left: 427px;background-color: red;padding:10px;border-style:none;" >
    </form>
</body>
</html>