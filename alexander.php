<?php
    if (!class_exists('KeyCAPTCHA_CLASS')) {
	// Replace '/home/path_to_keycaptcha_file/' with the real path to keycaptcha.php
	include('keycaptcha/keycaptcha.php');
}
        $kc_o = new KeyCAPTCHA_CLASS();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Alexander</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
        <link rel="stylesheet" href="css/alex_css.css">
        <link rel="stylesheet" type="text/css" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    </head>
    <body>
         <div id="window_dimensions" style="position:fixed;right:0;background-color:#345345;width:120px;height:50px;color:#fff;">
        </div>
        <script>
            
            function Maria_want_to_know(){
                var height = window.outerHeight;
                var width = window.outerWidth;

                var monitor = document.getElementById('window_dimensions');

                monitor.innerHTML = 'Height: '+height+'px<br>Width: '+width + 'px';
            }
            
            setInterval('Maria_want_to_know()',300);
        </script>    
        <header>
            <p id="default">Welcome to Alexander's portfolio!</p>
            <p id="name-770">Alexander Begoon</p>
            <p id="subname-770">web developer</p>
        </header>
        <div class="border"></div>
        <ul class="slimmenu">
                <li class="item about"><a href="#about">About</a></li>
                <li class="item portfolio"><a href="#portfolio">Portfolio</a></li>
                <li class="item skills"><a href="#skills">Skills</a></li>
                <li class="item contact"><a href="#contact">Contact me</a></li>
            </ul>
        <div class="container">
            <p class="hello">Hello!<br>My name is Alexander Begoon, I’m a freelance programmer from Russia.</p>
            <h1 class="about" id="about">I'm a web developer</h1>
            <p>I am a highly resourceful, innovative, and competent PHP developer with extensive experience in the layout, design and coding of websites specifically in PHP format.
Possessing considerable knowledge of the development of web applications and scripts using PHP programming language and MySQL databases.
Experienced in developing applications and solutions for a wide range of corporate, charity and public sector clients and having the enthusiasm and ambition to complete projects to the highest standard.</p>
            <h1 class="portfolio" id="portfolio">Portfolio of work</h1>
            <div class="wrapper">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front">
                            <img src="images/buyin.jpg" alt="online_shop" width="100%" height="auto">
                            <h3>Online Shop</h3>
                        </div>
                        <div class="back">
                            <p>Description of the project.I was responsible for....<br>Description of the project.I was responsible for....<br>Description of the project.I was responsible for....<br>Description of the project.I was responsible for....<br>Live you can see on <a href="http://buyin.es">http://buyin.es</a></p>
                        </div>
                    </div>
                </div>
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front">
                            <img src="images/bunchesdirect.jpg" alt="online_shop" width="100%" height="auto">
                            <h3>Bulk and wedding flowers</h3>
                        </div>
                        <div class="back">
                            <p>Description of the project.I was responsible for....<br>Description of the project.I was responsible for....<br>Description of the project.I was responsible for....<br>Description of the project.I was responsible for....<br>Live you can see on <a href="http://bunchesdirect.ca">http://bunchesdirect.ca</a></p>
                        </div>
                    </div>
                </div>
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front">
                            <img src="images/bloomex_mobile.jpg" alt="online_shop" width="100%" height="auto">
                            <h3>Mobile website for ecommerce</h3>
                        </div>
                        <div class="back">
                            <p>Description of the project.I was responsible for....<br>Description of the project.I was responsible for....<br>Description of the project.I was responsible for....<br>Description of the project.I was responsible for....<br>Live you can see on <a href="http://m.bloomex.ca/">http://m.bloomex.ca/</a></p>
                        </div>
                    </div>
                </div>
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front">
                            <img src="images/bloom_a_day.jpg" alt="online_shop" width="100%" height="auto">
                            <h3>Another project of Bloomex company</h3>
                        </div>
                        <div class="back">
                            <p>Description of the project.I was responsible for....<br>Description of the project.I was responsible for....<br>Description of the project.I was responsible for....<br>Description of the project.I was responsible for....<br>Live you can see on <a href="http://www.bloomaday.com/">http://www.bloomaday.com/</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="skills" id="skills">Skills</h1>
            <div class='wrapper'>
                <div class="skill">php</div>
                <div class="skill">oop</div>
                <div class="skill">jquery</div>
                <div class="skill">joomla</div>
                <div class="skill">virtuemart</div>
                <div class="skill">mysql</div>
                <div class="skill">html5</div>
                <div class="skill">html</div>
                <div class="skill">css</div>
                <div class="skill">jquery-mobile</div>
                <div class="skill">javascript</div>
                <div class="skill">cpanel</div>
                <div class="skill">github</div>
                <div class="skill">svn</div>
                <div class="skill">ebay-api</div>
            </div>
            <h1 class="contact" id="contact">Contact me</h1>
            <div class="wrapper">
                <form action="/" method='post' id="contact_form">
                    <div>
                        <label for='contact_name'>
                            <span>Your name</span>
                            <input type="text" id='contact_name' required tabindex="1">
                        </label>
                    </div>
                    <div>
                        <label for='contact_email'>
                            <span>Your email</span>
                            <input type="email" id='contact_email' required tabindex="2">
                        </label>
                    </div>
                    <div>
                        <label for='contact_company'>
                            <span>Your company name</span>
                            <input type="text" id='contact_company'>
                        </label>
                    </div>
                    <div>
                        <label for="contact_message">
                            <span>Message</span>
                            <textarea id='contact_message' required tabindex="3"></textarea>
                        </label>
                    </div>
                    <div>
                        <button name="submit" type="submit" id="postbut">Send me a message</button>
                    </div>
                    <div>
                        <?php echo $kc_o->render_js();?>
                    </div>
                    <input type="hidden" name="capcode" id="capcode" value="false" />
                </form>
                <div class="socio_contacts">
                    <span>email me:</span>
                    <a href="mailto:alexbassmusic@gmail.com">alexbassmusic@gmail.com</a>
                    <span>find me on:</span>
                    <div class="social_icons">
                        <ul class="icons">
                            <li><a href="https://www.odesk.com/users/PHP-developer_~01ae8f6e1a81c189cf?tot=3&pos=0" id="odesk_icon" title="odesk.com"></a></li>
                            <li><a href="https://github.com/alexbassmusic" id="git_icon" title="github.com"></a></li>
                            <li><a href="http://www.linkedin.com/profile/view?id=217625069&authType=name&authToken=zIo-&trk=wvmx-profile-title" id="linkedin_icon" title="linkedin.com"></a></li>
                            <li><a href="#" id="skype_icon" title="skype.com"></a></li>
                            <li><a href="https://plus.google.com/u/0/+AlexanderBegoon/posts" id="google_plus_icon" title="plus.google.com"></a></li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
        <div id="up_button">
            <a href="#" title="up"></a>
        </div>
        <script src="js/button.js"></script>
        <!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-527a5169751f3512"></script>
<script type="text/javascript">
  addthis.layers({
    'theme' : 'transparent',
    'share' : {
      'position' : 'left',
      'numPreferredServices' : 5
    }   
  });
</script>
<!-- AddThis Smart Layers END -->

<script src="js/jquery.slimmenu.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script>
$('ul.slimmenu').slimmenu(
{
    resizeWidth: '770',
    collapserTitle: 'Menu',
    easingEffect:'easeInOutQuint',
    animSpeed:'medium',
    indentChildren: true,
    childrenIndenter: '&raquo;'
});
</script>
        </body>
</html>      