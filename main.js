function leadingZero(i) {
    return (i < 10)? "0"+i : i;
}

$(function(){
    console.log("start");

    $("#send").click(function() {
        
        var wiadomosc = $("#input").val();
        
        var user = $("#user").text();
        
        $.post("skrypt.php", { 
            text: wiadomosc,
            user: user
         });
        $("#input").val("");
        return false;
    });
    
    function loadLog() {
        var oldscrollHeight = $("#chat-display")[0].scrollHeight - 20; //Scroll height before the request

        $.ajax({
            url: "messages.html",
            cache: false,
            success: function (html) {
                $("#chat-display").html(html); //Insert chat log into the #chatbox div

                //Auto-scroll			
                var newscrollHeight = $("#chat-display")[0].scrollHeight - 20; //Scroll height after the request
                if(newscrollHeight > oldscrollHeight){
                    $("#chat-display").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                }	
            }
        });
    }

    setInterval (loadLog, 500);

    $("#input").keyup(function(event) {
        if (event.keyCode === 13) {
            $("#send").click();
        }
    });

    console.log("stop");
});