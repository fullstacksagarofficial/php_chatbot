<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
            integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
        <link rel="stylesheet" href="../style2.css">
    </head>

    <body>
        <div class="wrapper">
            <section class="chat-area">

                <!-- //three dot start  -->
                <div class="dotcontainer">
                    <div id="menu-wrap">
                        <input type="checkbox" class="toggler" />
    
                        <div class="dots">
                            <div></div>
                        </div>
    
                        <!-- //dropdown menu  -->
                        <div class="menu">
                            <div>
                                <ul>
                                    <li><a href="#" class="link">Logout</a></li>
                                    <li><a href="#" class="link">Option two</a></li>
                                    <li><a href="#" class="link">Option three</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //three dot end  -->


                <div class="chat-box">
                    <!-- //bot message here  -->
                    <div class="chat incoming">
                        <img src="https://www.atechseva.com/demo/cms/assets/img/avtar.png" alt="">
                        <div class="details">
                            <p>Hi how can i help you ?</p>
                        </div>
                    </div>
                    <!-- //user message shown here  -->
                    <div class="chat outgoing">
                        <div class="details">
                            <p>wefw wew wr</p>
                        </div>
                    </div>
                </div>
                <form action="#" class="typing-area">
                    <input type="text" class="incoming_id" name="incoming_id" value="" hidden>
                    <input type="text" name="message" class="input-field" placeholder="Type a message here..."
                        autocomplete="off">
                    <button><i class="fab fa-telegram-plane"></i></button>
                </form>
            </section>
        </div>
    </body>

</html>