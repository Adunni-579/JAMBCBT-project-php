<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam in Section</title>
    <style>
        button:hover{background-color: blue;color: black;}
        button{
            background-color: crimson;color: white;transition: 0.2s ease-in-out;
    cursor: pointer;border-radius: 10px;transform: scale(105%);padding-left: 15px;text-decoration:none;
    padding-right: 15px;padding-top: 10px;padding-bottom: 10px;margin-top: 20px;font-size: 13px;border-style:none;
        }
        </style>
<script>
var countDownDate = new Date("december 05, 2025 00:38:49").getTime();
var x = setInterval(function(){
var now = new Date().getTime();
var distance = countDownDate - now;
var days = Math.floor(distance/(1000 * 60 * 60 *24));
var hours = Math.floor((distance % (1000 * 60 *60 *24))/(1000*60*60));
var minutes = Math.floor((distance% (1000 *60 *60)) / (1000 *60));
var seconds= Math.floor((distance % (1000 * 60))/1000);

document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
if (distance < 0) {
clearInterval(x);
document.getElementById("demo").innerHTML = "";
}
},1000);
</script>

</head>
<body style="cursor: default;">
    <h3 style="">Exam is now in Section......</h3>
     <p id="demo" style="background-color: crimson; width: 120px;color: white;padding: 5px;margin-left: 1100px;margin-top: -37px;"></p>
        <div class="flex" style="display: inline-flex;gap: 10px;">
        <p style="background-color: green;color: white;width: 177px;padding: 5px;text-align: center;
        font-size: 14px;">Current Affairs Exam (Q1-Q5)</p>
        <p style="background-color: crimson;color: white;width: 177px;padding: 5px;text-align: center;
        font-size: 14px;">Chemistry Exam(Q1-Q5)</p>
        <p style="background-color: crimson;color: white;width: 195px;padding: 5px;text-align: center;
        font-size: 14px;">English Language Exam (Q1-Q5)</p>
        <p style="background-color: crimson;color: white;width: 170px;padding: 5px;text-align: center;
        font-size: 14px;">Biology Exam (Q1-Q5)</p>
        </div>
        <br>
        <p>Attempt All Question</p>
    <form name="myform" action="http://localhost/php%20files/current%20affiars%20submission.php" method="POST">
        Student Name:<input type="text" name="studentname" id="student" class="student" style="font-size: 13px; width: 350px;margin-left: 20px;
            height: 30px;border:1px solid black;" placeholder="Enter your full name here">
            <br>
     Q1: Who is the president of Nigeria?<br>
     a. <input type="radio" name="q1" value="a">Dangote<br>
     b. <input type="radio" name="q1" value="b">Tinubu<br>
     c. <input type="radio" name="q1" value="c">Atiku<br><br>
     
     Q2: We have how many state in Nigeria?<br>
     a. <input type="radio" name="q2" value="a">36<br>
     b. <input type="radio" name="q2" value="b">20<br>
     c. <input type="radio" name="q2" value="c">70<br><br>

     Q3. Who is the Governor of Lagos State?<br>
     a. <input type="radio" name="q3" value="a">Otedola<br>
     b. <input type="radio" name="q3" value="b">Obasanjo<br>
     c. <input type="radio" name="q3" value="c">Sanwolu<br><br>

     Q4. What is the Capital of Lagos State?<br>
     a. <input type="radio" name="q4" value="a">illorin<br>
     b. <input type="radio" name="q4" value="b">Abeokuta<br>
     c. <input type="radio" name="q4" value="c">Ikeja<br><br>

     Q5. Nigeria flag consist of how many color?<br>
     a. <input type="radio" name="q5" value="a">5<br>
     b. <input type="radio" name="q5" value="b">2<br>
     c. <input type="radio" name="q5" value="c">10<br><br>
      <button type="submit" name="submit" id="submit" class="submit" value="Submit Exam">
      Submit Exam
    </button>
    </form>
    </div>
    <div class="container" style="display: inline-flex;gap: 13px;">
            <a href="http://localhost/php%20files/Chemistry.php"><button>Next Page >>>></button></a>
        </div>
</body>
</html>