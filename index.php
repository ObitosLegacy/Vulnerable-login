<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Farro:wght@300&display=swap" rel="stylesheet">
    <link href="./style.css" rel="stylesheet" type="text/css"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="body">
  
    <form action="https://vulnerablelogin.herokuapp.com/login.php" method="POST" class="form flex" onclick="checkInput(event)" >
    <div class="advertisment">
        Learn Hacking <i class="green">@</i><i class="purple">virtualarity.com</i>
    </div>
        <fieldset class="fieldset flex">
            <legend class="legend">&nbspLogin</legend>
            <label for="email" class="label">Enter your email</label>
            <input id="email" class="input" name="email" type="text" placeholder="email">
            <label for="pass" class="label">Enter your password</label>
            <input id="pass" class="input" name="pass" type="password" placeholder="password">
            <input id="submit" class="button" type="submit" value="login">
        </fieldset>
    </form>
    <script>
        const email = document.getElementById("email");
        const pass = document.getElementById("pass");
        function checkInput(event) {
            if(event.target.id === "submit"){
                if(email.value === '') {
                    event.preventDefault();
                    email.placeholder = "Don't forget your email!" 
                }else if(pass.value === '') {
                    event.preventDefault();
                    pass.placeholder = "Don't forget your password!" 
                }
            }
        }
    </script>
</body>
</html>