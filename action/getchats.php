<?php

session_start();
date_default_timezone_set('Asia/Kolkata');
include('../database.inc.php');
$response = array();
if (isset($_SESSION['is_email'])) {
    $res = mysqli_query($con, "select * from message where email='" . $_SESSION['is_email'] . "'");
    if (mysqli_num_rows($res) > 0) {
        $html = '';
        $html .= '<div class="dotcontainer" id="dotcontainer">
        <div class="company">
        <div class="info-avatar"><img src="https://www.atechseva.com/images/whatsappdp.png" alt="whatsapp" loading="lazy"></div>   <div>ATECHSEVA</div>
        </div>
        <div id="menu-wrap">
         <input type="checkbox" class="toggler" />
         
         <div class="dots">
             <div></div>
         </div>
         
         <div class="menu">
             <div>
                 <ul>
                     <li><a onclick="logout()" class="link">Logout</a></li>
                 </ul>
             </div>
         </div>
     </div> 
     </div><div class="chat-box" id="chat-box" style="padding-top: 70px;">';
        while ($row = mysqli_fetch_assoc($res)) {
            $message = $row['message'];
            $added_on = $row['added_on'];
            $strtotime = strtotime($added_on);
            $time = date('h:i A', $strtotime);
            $type = $row['type'];
            if ($type == 'user') {
                $class = "outgoing";
                $imgAvatar = "";
                $name = "Me";
            } else {
                $class = "incoming";
                $imgAvatar = "https://www.atechseva.com/images/whatsappdp.png";
                $name = "Chatbot";
            }

            $html .= '
                ' . $imgAvatar !== '' ? '
            <div class="' . $class . ' chat">
                <img src="' . $imgAvatar . '" alt="">
                <div class="details">
                    <p>' . $message . '</p>
                </div>
            </div>' : '<div class="' . $class . ' chat">
                <div class="details">
                    <p>' . $message . '</p>
                </div>
            </div>' . '
                ';
        }
        $html .= ' </div>';
        //dropdown 
        $html .= '<div class="chatforms"><form  class="typing-area" id="usermessageform">
    <input type="text" name="message" id="usermessage" class="input-field"  onkeyup="checkmessage()" placeholder="Type a message here..."
        autocomplete="off">
    <button type="submit" id="usermessageSubmit"><i class="fab fa-telegram-plane"></i></button>
</form></div>';

        $response['success'] = $html;
    } else {
        $response['newuser'] = '<div class="dotcontainer" id="dotcontainer">
        <div class="company">
        <div class="info-avatar"><img src="https://www.atechseva.com/images/whatsappdp.png" alt="whatsapp" loading="lazy"></div>   <div>ATECHSEVA</div>
        </div>
        <div id="menu-wrap">
         <input type="checkbox" class="toggler" />
         <div class="dots">
             <div></div>
         </div>
         <div class="menu">
             <div>
                 <ul>
                     <li><a onclick="logout()" class="link">Logout</a></li>
                 </ul>
             </div>
         </div>
     </div> 
     </div><div class="chat-box" id="chat-box" style="padding-top: 70px;"><div class="chat incoming">
        <img src="https://www.atechseva.com/images/whatsappdp.png" alt="logo">
        <div class="details">
            <p id="botmsg">Hi How can i help you ?</p>
        </div>
    </div></div><div class="chatforms"><form  class="typing-area" id="usermessageform">
    <input type="text" name="message" id="usermessage" class="input-field"  onkeyup="checkmessage()" placeholder="Type a message here..."
        autocomplete="off">
    <button type="submit" id="usermessageSubmit"><i class="fab fa-telegram-plane"></i></button>
</form></div>';
    }
} else {
    $html = '
    <div class="chat-box" id="chat-box">
    <div class="chat incoming">
        <img src="https://www.atechseva.com/images/whatsappdp.png" alt="logo">
        <div class="details">
            <p>Hi How can i help you ?</p>
        </div>
    </div>
</div>
<div class="chatforms"><form class="typing-area emailform" method="POST"  ><input type="email" name="email" class="input-field" id="email" placeholder="Enter your email here to continue..." onkeyup="checkemail()" autocomplete="off" ><button type="submit" id="emailsubmit" disabled><i class="fa fa-envelope"></i></button></form></div>
';

    $response['fail'] = $html;
}
echo json_encode($response);
