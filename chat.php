<?php
    if(!isset($_POST['nickname'])){
        header("Location: index.php");
    }
    else{
        $nick = $_POST['nickname'];
        $_SESSION['nick'] = $nick;
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Chatroom | Live chat</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='chat.css'>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src='main.js'></script>
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Lato&display=swap" rel="stylesheet">


</head>
<body>
    <header>
        <img src="img/ChatRoom.png" alt="Logo ChatRoom">
    </header>
    <main>
        <div id="chat">
                <div id="chat-header">
                    <div>
                        <?php echo 'Welcome <span id="user">'.$nick.'</span>!' ?>
                    </div>
                    <button>Disconnect</button>
                </div>
                <div id="chat-display">
                    <?php

                        if(filesize("messages.html") > 0){
                            $content = file_get_contents("messages.html");
                            echo $content;
                        }

                    ?>
                </div>
                <div id="chat-type">
                    <input type="text" name="message" id="input">
                    <button id="send">Send</button>
                </div>
            
        </div>
    </main>
    <footer>
        Copyright &copy; 2021 ChatRoom.com
    </footer>
</body>
</html>