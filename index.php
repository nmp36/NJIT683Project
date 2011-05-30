<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" ID="HEY"  type="text/css"  href="theme.css" />
        <title>.*</title>
       <script type="text/javascript">
function metaKeywords() {//alert('hey');
    //alert(document.getElementsByName("content").item(1));
//document.write(document.links.length);
alert(document.getElementsBytagName('title'));
//alert('hey');
//for (i=0;i<metaCollection.length;i++) {
//nameAttribute = metaCollection[i].name.search(/keywords/);
//
//if (nameAttribute!= -1) {
//alert(metaCollection[i].content);
//}
//}
}

function test()
{
  //alert(document.getElementById("HEY"));
  document.getElementById("HEY").href = "test.css";
   //alert(document.getElementById("HEY").href);
return; 

}
</script> 
    </head>
    <form   name="Form1" method="Post" Action="index.php">
    <body onload="test();">
        {subtitle}Subtitle of second paragraph{/subtitle}
          <?php $rowtitles = array(1 => Pizza1, 2 => Pizza2, 3 => Pizza3)?>
<!-- Display a row of checkboxes for each value in rowtitles -->
<?php for($i=0; $i < sizeof($rowtitles); $i++) {?>
<tr>
<td><?php print $rowtitles[$i];?></td>
<td><input name="pizza1[]" type="checkbox" value= "<?php echo  $rowtitles[$i];?>">"<?php echo  $rowtitles[$i];?>"</td>
<td><input name="pizza2[]" type="checkbox" value= "<?php $rowtitles[$i]; ?>">"<?php echo  $rowtitles[$i];?>"</td>
<td><input name="pizza3[]" type="checkbox" value= "<?php $rowtitles[$i] ?>">"<?php echo  $rowtitles[$i];?>"</td>
</tr><br>
<?php }?> 
  
      <?php include ("newPHPClass.php");  ?>
       <?php  $value = "kem cho"; 
         $test = new newPHPClass();
          $value= $test->get_Name();
          //echo $value;
          $value = "kem cho";
        //$value = $test->editBuffer('lond', 'meta');
        echo $value;
         echo "<H6>  $value";
        ?>
         <?php

    $var = $value;
  
    
    ?>
<?php
// Define array.
$cssFile = 'css2.css';

// use the variable sent from first.php. for example $css=1 and print that here.
echo "<H4> $cssFile";
echo '<link rel="stylesheet" type="text/css" href="' .$cssFile. '" />';
?>


<h1><?php echo  $var ?>
     Name: <input type="submit" ID="HEY" name="fname"   value="<?php echo  $var ?>"/>
     <input type="checkbox" name="vehicle" value="Bike" /><br />
    </body>
    </form>
</html>
