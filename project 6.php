<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examination Instructions</title>
<style>
    .margin{margin-left: 13px;}
    a{text-decoration: none;}
    button{border: none;}

    #back{background-color: crimson;color: white;padding: 8px;padding-left: 15px;padding-right: 15px;border-color: white;font-size: 16px;margin-top: 10px;}
    #start{background-color: crimson;color: white;padding: 8px;padding-left: 5px;padding-right: 5px;border-color: white;font-size: 16px;margin-top: 10px;
          margin-left: 1000px;}
    #back:hover{background-color: rgb(1,143,1);transition: 0.2s ease-in-out;cursor: pointer;border-radius: 10px;transform: scale(105%);}
    #start:hover{background-color: rgb(1,143,1);transition: 0.2s ease-in-out;cursor: pointer;border-radius: 10px;transform: scale(105%);}
</style>
</head>
<body style="cursor: default;">
    <h2 style="color: crimson;">Examination Instructions - Read All </h2>
    <p>You have selected the following subjects:</p>
    <ul id="subjectlist"></ul>
    <div class="margin">
    </div>
<p style="color: crimson;"><b>Practical Mode</b></p>
<P style="margin-top: -8px;">Total Number of Questions: 50<br>Total Time Given:35 minutes</P>
<p style="color: crimson;"><b>CBT Instructions</b></p>
<p style="margin-top: -10px;">You will be given 20 questions in English Language and 10 questions on each of the other subjects (a total of 50 questions). 
    The questions will be presented 1 each in series starting with<br> English Language. Once you have answered a question you will be required to click on "Next" to move to the next question and click "Finish" when you are done with all questions. if at<br>
    anytime, you can no longer continue, you can click on "Quit Exam" to see your performance Analysis.<br><br>
    You will be given 35 minutes to answer all 50 questions and submit. If at any point, you're unable to finish on time, you will be automatically shown the summary of your performance.<br><br>
    Keep trying everytime, everyday and JAMB, WAEC, NECO, NABTEB exam will be a walk over for you. To start now, click on the "Start Exam" button below.</p>
<form action="">
 <a href="http://localhost/php%20files/project%205.php" name="back" id="back"> Back</a>
 <a href="http://localhost/php%20files/project%207.php" name="start" id="start">Start Exam</a>
    </form>
<script>
    const selectedsubjects=
    JSON.parse(localStorage.getItem('subjcts1')) || [];
    const list = document.getElementById('subjectlist');
    selectedsubjects.forEach(subject=>{
        const li = document.createElement("li");
        li.textContent = subject;
        list.appendChild(li);
    });
</script>
</body>
</html>