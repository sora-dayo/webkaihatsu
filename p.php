
 <?php
 if($_POST){
   //データをcontentに
   $content = $_POST['comment'];

   //ファイルパス　任意
   $file_name = './database/bbs.txt';

   //データを渡す
   fwrite('$file_name, $content');
   //リロード
   header('Location: ./');
 }