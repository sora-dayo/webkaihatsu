<?php
 session_start();
 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
     header("location: login.php");
     exit;
 }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="chat.js"></script>
     <title>Welcome</title>
     <link rel="stylesheet"   href="test.css" />
     <style>
         body{ 
             font: 14px sans-serif;
             text-align: center; 
         }
     </style>

 </head>
 <body>
     <ul class="topnav">
     <li><a href="logout.php" class="btn btn-danger ml-3">Logout</a></li>
 	<li><a class="active" href="welcome.php">Home</a></li>
 	<li><a href="#news">News</a></li>
 	<li><a href="#contact">Trend</a></li>
 	<li class="right"><a href="#about">About</a></li>
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
     <form method="get" action="#" class="search_container">
     <input type="text" size="25" placeholder="検索">
     <input type="submit" value="&#xf002">
     </form>
     </ul>
     <div class="container">
   <br/>

   <?php
  if(isset($_POST['Msg'])) file_put_contents("message.txt",$_POST['Msg']."<br/>",FILE_APPEND);
 ?>

 <form name="form1" method="post" action="welcome.php">
 <input name="Msg" type="text" size="100" />
 <input type="submit" name="Sub1" value="tubu" />
 </form>

 </br>
 <div >message</div>
 <hr>
 <?php
  echo file_get_contents("message.txt");
 ?>

 <script>
   function previewFile(hoge){
     var fileData = new FileReader();
     fileData.onload = (function() {
       //id属性が付与されているimgタグのsrc属性に、fileReaderで取得した値の結果を入力することで
       //プレビュー表示している
       document.getElementById('preview').src = fileData.result;
     });
     fileData.readAsDataURL(hoge.files[0]);
   }
   </script>

   <div class="row">
     <div ng-repeat="thing in awesomeThings">
     </div>
   </div>
 </div>
 <svg>
   <filter id="glow">
     <feGaussianBlur stdDeviation="2"/>
     <feComposite in2="SourceGraphic"
                  operator="out" result="glow" />
     <feFlood flood-color="white" flood-opacity="0.2" />
     <feComposite in2="SourceGraphic"
                  operator="atop" result="light" />
     <feComposite in="glow" in2="light" />    
   </filter>
   <pattern id="p" patternUnits="userSpaceOnUse"
            width="180px" height="120px"
            patternTransform="scale(1,0.8660254)">
     <g filter="url(#glow)">
       <g class="wrapper">
         <path id="hex" pathLength="388.5"
                  d="M-30,-60 30,-60 60,0
                          30,60 -30,60 -60,0Z"
                  transform="scale(0.935)" />
       </g>
       <use xlink:href="#hex" x="0" y="+120" />
       <use xlink:href="#hex" x="+90" y="+60" />
       <use xlink:href="#hex" x="+180" y="0" />
       <use xlink:href="#hex" x="+180" y="120" />
     </g>
   </pattern>
   <rect fill="url(#p)" width="100%" height="100%"/>
 </svg>
 </body>
 </html>