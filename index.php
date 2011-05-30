<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" ID="cssFile" type="text/css" href="HelloWorldOrig.css" />
        <link rel="Javascript" ID="jsFile" type="text/javascript" href="HelloWorldOrig.js" />
        <title></title>
    </head>
    <body>
        <!-- Original H1 - H6 Values   -->
        <h1>This is H1 Tag Orig. Val.</h1>
        <h2>This is H2 Tag Orig. Val.</h2>
        <h3>This is H3 Tag Orig. Val.</h3>
        <h4>This is H4 Tag Orig. Val.</h4>
        <h5>This is H5 Tag Orig. Val.</h5>
        <h6>This is H6 Tag Orig. Val.</h6>
        
        
        <?php include ("HTMLPHP.php");  ?>
        <?php
        $Main = new HTMLPHP();
        $h1= $Main->get_H1();
        $h2= $Main->get_H2();
        $h3= $Main->get_H3();
        $h4= $Main->get_H4();
        $h5= $Main->get_H5();
        $h6= $Main->get_H6();
        $css=$Main->get_cssFile();
        $js=$Main->get_jsFile();
        
        echo '<b>Server Function modified value of H1 - H6 Tags';
        //echo $value;
        echo "<h1> $h1";
        echo "<h2> $h2";
        echo "<h3> $h3";
        echo "<h4> $h4";
        echo "<h5> $h5";
        echo "<h6> $h6";
        
        echo "<BR>CSS file name is modifield by server function : $css";
        echo "<BR>JS file name is modifield by server function :  $js";
        echo $js;
        echo "<SCRIPT LANGUAGE='javascript'>getOrigFileName();</SCRIPT>";
        echo "<SCRIPT LANGUAGE='javascript'>updateFileName();</SCRIPT>";
        echo "<SCRIPT LANGUAGE='javascript'>getUpdatedFileName();</SCRIPT>";
        ?>
       
        <script type="text/javascript" >
        function getsetFileName()
        {
        alert("Original CSS File :" + document.getElementById("cssFile").href);
        alert("Original JS File : " + document.getElementById("jsFile").href);       

        document.getElementById("cssFile").href = <?php echo "\"$css\"";?>;
        document.getElementById("jsFile").href = <?php echo "\"$js\"";?>; 

        alert("Update CSS File from server : " + document.getElementById("cssFile").href);
        alert("Updated JS File from server : " + document.getElementById("jsFile").href);
            
           
        }
        
        
        </script>
        <br>Click To Modify File Values: <input type="submit" ID="btnSubmit" name="fname" onClick="getsetFileName()"  value="Click"/>
    </body>
</html>
