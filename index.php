<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
include('database.inc.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <title>PHP Chatbot | ATECHSEVA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="wrapper" style="display: none;">
        <!-- //step 1 -->
        <section class="chat-area" id="step1area">
            <div class="chat-box" id="chat-box">
                <div class="chat incoming">
                    <img src="https://www.atechseva.com/images/whatsappdp.png" alt="avatar">
                    <div class="details">
                        <p id="botmsg">Hi How can i help you ?</p>
                    </div>
                </div>
            </div>
            <form class="typing-area" id="usermessageform">
                <input type="text" name="message" id="usermessage" class="input-field" onkeyup="checkmessage()" placeholder="Type a message here..." autocomplete="off">
                <button type="submit" id="usermessageSubmit"><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
    <div class="chatnow" onclick="showchatbox()">
        <div class="flexchat">
            <span class="dot1"></span>
            <span class="dot2"></span>
            <span class="dot3"></span>
        </div>
    </div>
    <script src="js/script.js"></script>
    <script>
        function showchatbox() {
            getchats()
            $('.wrapper').slideToggle('fast', function() {
                $('.chatnow').toggleClass('chatnowactive', $(this).is(':visible'));
                $(".dot1").toggleClass("dotcustom");
            });
        }
    </script>
</body>

</html>