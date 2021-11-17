<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ChatRoom | Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Lato&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <img src="img/ChatRoom.png">
    </header>
    <main>
        <div id="panel">
            <div id="join-form">
                <fieldset>
                    <legend>Join</legend>
                    <form action="chat.php" method="post">
                        <div>
                            Nickname <br/>
                            <input type="text" name="nickname" id="nickname" value="<?php if(isset($_SESSION['nick'])){echo $_SESSION['nick'];} ?>"> </br>
                        </div>
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label> </br>
                        <input type="submit" value="Join">
                    </form>
                </fieldset>
                
            </div>
            <div id="logo">
                <img src="img/ChatRoom.png">
            </div>
        </div>
    </main>
    <footer>
        Copyright &copy; 2021 ChatRoom.com
    </footer>
</body>
</html>