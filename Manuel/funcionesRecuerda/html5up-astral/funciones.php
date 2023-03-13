<?php
    function cabeza($titulo){
        echo "<!DOCTYPE HTML>
        <html>
            <head>
                <title>$titulo</title>
                <meta charset='utf-8'/>
                <meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no'/>
                <link rel='stylesheet' href='assets/css/main.css' />
                <noscript><link rel='stylesheet' href='assets/css/noscript.css' /></noscript>
            </head>
    ";
    }

    function cuerpo($nombre){
        echo "
        <body class='is-preload'>
    
        <!-- Wrapper-->
            <div id='wrapper'>
    
                <!-- Nav -->
                    <nav id='nav'>
                        <a href='#' class='icon solid fa-home'><span>Home</span></a>
                        <a href='#work' class='icon solid fa-folder'><span>Work</span></a>
                        <a href='#contact' class='icon solid fa-envelope'><span>Contact</span></a>
                        <a href='https://twitter.com/ajlkn' class='icon brands fa-twitter'><span>Twitter</span></a>
                    </nav>
    
                <!-- Main -->
                    <div id='main'>
    
                        <!-- Me -->
                            <article id='home' class='panel intro'>
                                <header>
                                    <h1>$nombre</h1>
                                    <p>Senior Astral Projectionist</p>
                                </header>
                                <a href='#work' class='jumplink pic'>
                                    <span class='arrow icon solid fa-chevron-right'><span>See my work</span></span>
                                    <img src='images/me.jpg' alt='' />
                                </a>
                            </article>
    
                        <!-- Work -->
                            <article id='work' class='panel'>
                                <header>
                                    <h2>Work</h2>
                                </header>
                                <p>
                                    Phasellus enim sapien, blandit ullamcorper elementum eu, condimentum eu elit.
                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                    luctus elit eget interdum.
                                </p>
                                <section>
                                    <div class='row'>
                                        <div class='col-4 col-6-medium col-12-small'>
                                            <a href='#' class='image fit'><img src='images/pic01.jpg' alt=''></a>
                                        </div>
                                        <div class='col-4 col-6-medium col-12-small'>
                                            <a href='#' class='image fit'><img src='images/pic02.jpg' alt=''></a>
                                        </div>
                                        <div class='col-4 col-6-medium col-12-small'>
                                            <a href='#' class='image fit'><img src='images/pic03.jpg' alt=''></a>
                                        </div>
                                        <div class='col-4 col-6-medium col-12-small'>
                                            <a href='#' class='image fit'><img src='images/pic04.jpg' alt=''></a>
                                        </div>
                                        <div class='col-4 col-6-medium col-12-small'>
                                            <a href='#' class='image fit'><img src='images/pic05.jpg' alt=''></a>
                                        </div>
                                        <div class='col-4 col-6-medium col-12-small'>
                                            <a href='#' class='image fit'><img src='images/pic06.jpg' alt=''></a>
                                        </div>
                                        <div class='col-4 col-6-medium col-12-small'>
                                            <a href='#' class='image fit'><img src='images/pic07.jpg' alt=''></a>
                                        </div>
                                        <div class='col-4 col-6-medium col-12-small'>
                                            <a href='#' class='image fit'><img src='images/pic08.jpg' alt=''></a>
                                        </div>
                                        <div class='col-4 col-6-medium col-12-small'>
                                            <a href='#' class='image fit'><img src='images/pic09.jpg' alt=''></a>
                                        </div>
                                        <div class='col-4 col-6-medium col-12-small'>
                                            <a href='#' class='image fit'><img src='images/pic10.jpg' alt=''></a>
                                        </div>
                                        <div class='col-4 col-6-medium col-12-small'>
                                            <a href='#' class='image fit'><img src='images/pic11.jpg' alt=''></a>
                                        </div>
                                        <div class='col-4 col-6-medium col-12-small'>
                                            <a href='#' class='image fit'><img src='images/pic12.jpg' alt=''></a>
                                        </div>
                                    </div>
                                </section>
                            </article>
    
                        <!-- Contact -->
                            <article id='contact' class='panel'>
                                <header>
                                    <h2>Contact Me</h2>
                                </header>
                                <form action='#' method='post'>
                                    <div>
                                        <div class='row'>
                                            <div class='col-6 col-12-medium'>
                                                <input type='text' name='name' placeholder='Name' />
                                            </div>
                                            <div class='col-6 col-12-medium'>
                                                <input type='text' name='email' placeholder='Email' />
                                            </div>
                                            <div class='col-12'>
                                                <input type='text' name='subject' placeholder='Subject' />
                                            </div>
                                            <div class='col-12'>
                                                <textarea name='message' placeholder='Message' rows='6'></textarea>
                                            </div>
                                            <div class='col-12'>
                                                <input type='submit' value='Send Message' />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </article>
    
                    </div>
    
                <!-- Footer -->
                    <div id='footer'>
                        <ul class='copyright'>
                            <li>&copy; Untitled.</li><li>Design: <a href='http://html5up.net'>HTML5 UP</a></li>
                        </ul>
                    </div>
    
            </div>  
        ";
    }

    function pie(){
        echo "
        <!-- Scripts -->
        <script src='assets/js/jquery.min.js'></script>
        <script src='assets/js/browser.min.js'></script>
        <script src='assets/js/breakpoints.min.js'></script>
        <script src='assets/js/util.js'></script>
        <script src='assets/js/main.js'></script>

        </body>
    </html>  
   "; 
    }
?>