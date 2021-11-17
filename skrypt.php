<?php

    $wiadomosc = '<div class="message"><div class="author">'.$_POST['user'].':</div><div class="content">'.$_POST['text'].'</div></div>';

    file_put_contents("messages.html", $wiadomosc, FILE_APPEND);

?>