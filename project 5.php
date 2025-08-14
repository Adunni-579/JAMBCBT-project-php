<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject selection</title>
    <script>
        document.addEventListener('DOMContentLoaded', ()=>{
            const form = document.getElementById("subjectform");
            const checkboxes = form.querySelectorAll('input[type="checkbox"]:not(:disabled)');
            const maxselectable = 3;
            function updatecheckbox(){
                const checkedcount = 
                [...checkboxes].filter(cb => cb.checked).length;
                checkboxes.forEach(cb => {
                    if (!cb.checked){
                        cb.disabled = checkedcount >= maxselectable;
                    }
                });
            }
            checkboxes.forEach(cb => {cb.addEventListener('change', updatecheckbox);
        });
        form.addEventListener('submit',(e)=>{
            e.preventDefault();
            const selected = ["English Language"];
            checkboxes.forEach(cb=>{
                if (cb.checked)
                selected.push(cb.value);
            });
            localStorage.setItem('subjcts1',
            JSON.stringify(selected));
            window.location.href="http://localhost/php%20files/project%206.php";
        });
        });
    </script>
    <style>
        .flex{display: flex;font-size: 13px;border: 2px solid gray;padding-top: 7px;padding-left: 5px;margin-right: 10px;padding-bottom: 10px;}
        button{border-style: none;cursor: pointer; background-color:crimson; color:white; padding:5px; width: 120px;}
        :checked{cursor: pointer;}
        .y{margin-left: 40%;}
        a{border-style: none;cursor: pointer; text-align:center; background-color:crimson; color:white; padding:5px; width: 150px;text-decoration: none;}
 
        a:hover{background-color: rgb(1, 143, 1); color:gold;transition: 0.2s ease-in-out;cursor: pointer;border-radius: 10px;transform: scale(105%);}
    button:hover{background-color: rgb(1, 143, 1);color:gold;transition: 0.2s ease-in-out;cursor: pointer;border-radius: 10px;transform: scale(105%);}
    .master{display: inline-flex; margin-left:925px;}
    </style>
</head>
<body style="cursor: default;font-family: 'arial';">
    <p style="font-size: x-large;color: crimson;">Take an Exam - JAMB Simulator</p>
    <p>Welcome to MySchool's Past Question Examination Center, where you will study past questions for your upcoming exam. To start studing past questions right now, please select
    the subjects to be examined on. English Language is compulsory, so you are allowed to select 3 other subjests of your choice below.After selection, click next to enter exam hall.</p>
      <form action="" class="form1" id="subjectform">
        <div class="flex">
        <div class="x">
     <input type="checkbox" name="sub1" id="sub1" value="English Language"checked disabled>English Language<br><br>
     <input type="checkbox" name="sub2" id="sub2" value="Chemistry">Chemistry<br><br>
     <input type="checkbox" name="sub3" id="sub3" value="Biology">Biology<br><br>
     <input type="checkbox" name="sub4" id="sub4" value="Literature in English">Current Affairs<br><br>
     <input type="checkbox" name="sub5" id="sub5" value="Commerce">Commerce<br><br>
     <input type="checkbox" name="sub6" id="sub6" value="Government">Goverment<br><br>
     <input type="checkbox" name="sub7" id="sub7" value="Agricultural Scrience">Agricultural Science<br><br>
     <input type="checkbox" name="sub8" id="sub8" value="History">History<br><br>
     <input type="checkbox" name="sub9" id="sub9" value="Fine Arts">Fine Arts<br><br>
     <input type="checkbox" name="sub10" id="su10" value="French">French<br><br>
     <input type="checkbox" name="sub11" id="sub11" value="Insurance">Insurance<br><br>
     <input type="checkbox" name="sub12" id="sub12" value="Further Math">Further Math<br><br>
     <input type="checkbox" name="sub13" id="sub13" value="Igbo">Igbo<br><br>
     <input type="checkbox" name="sub14" id="sub14" value="Home-economics">Home-economics<br><br>
      </div>
     <div class="y">
     <input type="checkbox" name="sub15" id="sub15" value="Mathematics">Mathematics<br><br>
     <input type="checkbox" name="sub16" id="sub16" value="Physics">Physics<br><br>
     <input type="checkbox" name="sub17" id="sub17" value="Geography">Geography<br><br>
     <input type="checkbox" name="sub18" id="sub18" value="Economics">Economics<br><br>
     <input type="checkbox" name="sub19" id="sub19" value="Sweet sixteen">Sweet sixteen<br><br>
     <input type="checkbox" name="sub20" id="sub20" value="Music">Music<br><br>
     <input type="checkbox" name="sub21" id="sub21" value="Animal Husbandary">Animal Husbandary<br><br>
     <input type="checkbox" name="sub22" id="sub22" value="Civic Education">Civic Education<br><br>
     <input type="checkbox" name="sub23" id="sub23" value="yoruba">yoruba<br><br>
     <input type="checkbox" name="sub24" id="sub24" value="Arabic">Arabic<br><br>
     <input type="checkbox" name="sub25" id="sub25" value="Hausa">Hausa<br><br>
     <input type="checkbox" name="sub26" id="sub26" value="Account - priciple of account">Account - priciple of account<br><br>
     <input type="checkbox" name="sub27" id="sub27" value="Christian Religious Knowledge">Christian Religious Knowledge<br><br>
     <input type="checkbox" name="sub28" id="sub28" value="Islamic Religious Knowledge">Islamic Religious Knowledge<br><br>
     </div>
     </div>
     <br>
     <div class="master" style="gap:12px;">
     <button type="submit" name="exam" id="Exam">exam Mode</button>
        <br><br>
     <a href="" name="practice Mode" id="Practice" >practice Mode</a>
     </div>
   </form>
</body>
</html>