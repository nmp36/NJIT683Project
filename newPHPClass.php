<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author Dishna
 */
class newPHPClass {
    //put your code here

  var $name = "Nirav Patel." ;
  var $name1="hello";
       
  function get_Name()
  {
      echo  $_POST['stylesheet'];
      echo  $_POST["HELLO"];
      //echo $_SERVER['HTTP_REFERER'];
      if(isset($_SERVER['action'])){
      if (!isset($_POST['action']))
{
//If not isset -> set with dumy value
$_POST['action'] = "undefine";
} 
     // return  $this -> $test;
  return $_REQUEST["fname"];           
  }
  
  }
//    function editBuffer($newContent, $tag){
//        $regex = "#([{]subtitle[}])(.*)([{]/subtitle[}])#e";
//$output = preg_replace($regex,"('<strong>$2</strong>')",$string);
////  # store the buffer in a variable, so that we can manipulate it
////  $page = ob_get_contents();
//// 
////  # check what we want to edit, and do so using regular expressions
////  # store the updated page in another variable
////  switch ($tag){
////    case 'title'        : $newPage = preg_replace('~<title>.*</title>~', '<title>' . $newContent . '</title>', $page);
////	                 
////        break;
////    case 'description'  : $newPage = preg_replace('~<meta name="description" content=".*" />~', '<meta name="description" content="' . $newContent . '" />', $page);
////	                  break;
////    case 'keywords'     : $newPage = preg_replace('~<meta name="keywords" content=".*" />~', '<meta name="keywords" content="' . $newContent . '" />', $page);
////	                  break;
////    case 'container'    : $newPage = preg_replace('~<!-- STARTCON -->.*<!-- ENDCON -->~s', '<!-- STARTCON -->' . $newContent . '<!-- ENDCON -->', $page);
////	                  break;
////  }
//// 
////  ob_end_clean(); // clear the buffer
//// // ob_start(); // start a new buffer
// 
//  # place the updated page into the new buffer
//  return  $output;
//}
}


?>
