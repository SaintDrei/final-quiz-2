<?php

/*
Pallette : 
5BC0EB blue
FDE74C yellow
9BC53D green
C3423F red
404E4D grey
*/
?>


<html>
    <head>
        <title>Pre-Final Quiz #2</title>
        
        <link type="text/css" rel="stylesheet" href="style2.css">
        <script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
        <meta charset="UTF-8">
        <meta name="description" content="RU Dank Nuff Quiz">
        <meta name="keywords" content="Dank,memes,quiz,game">
        <meta name="author" content="Andrei Mishael Santos">
        <link rel="shortcut icon" type="image/png" href="content/dank.png" />
    <script>
        $(document).ready(function(){
        
            var colors = ["#CCCCCC","#9BC53D","#FDE74C", "#5BC0EB"];                
            var rand = Math.floor(Math.random()*colors.length);           
            $('body').css("background-color", colors[rand]);

            $(".start-button").hover(function(){
               $(".start-button").html("I be dank!"); 
                
            });
            $(".start-button").mouseleave(function(){
                $(".start-button").html("GIMME!");
            })
        });   
        
    </script>
    </head>
    <body>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=716548748516386";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <div class="col">
            <div class="Logo col">
                <div class="row logo-top  dankfont">RU  Dank</div>
                <div class="row logo-bot  dankfont">NUFF? </div>
                <div class="row dankfont"><span class="logo-small">A glorious quiz to test your knowledge of memes!</span></div>
            </div>
            <div class="registration-container">
                <form>
                  <div class="button-cont">
                    <input class="tbox" name="name" type="text" placeholder="Mah name is...">
                    <br>    
                    <input class="tbox" name="email" type="email" placeholder="My Email address">
                    <br><br>
                    </div>
                    <div id="fb-root"></div>

                    <div class="button-cont">
                 <button class="start-button" type="submit">Gimme the quiz!</button>
                        <div class="fb-share-button" data-href="http://andreimishaelsantos.me/trivia-game/" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fandreimishaelsantos.me%2Ftrivia-game%2F&amp;src=sdkpreparse">Share</a></div>
                     
                    </div>
                  
                </form>
                
            </div>
        </div>
    </body>
    
</html>