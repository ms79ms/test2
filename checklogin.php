<?php session_start();?>

<?php

 
    $user_name = "root";
    $pass_word = "password";
    $database = "sassa_store";
    $server = "localhost";
    
    $con = mysql_connect($server, $user_name, $pass_word);
    $db_found = mysql_select_db($database, $con);
    
    if ($db_found)
    
         {   
        $username = $_POST['username1'];
        $password = $_POST['password1']; 
        $SQL="SELECT ID,username,password FROM customers WHERE username='$username' and password='$password'";
        $rs = mysql_query($SQL);
        $row=mysql_num_rows($rs);
       while( $row2=mysql_fetch_array($rs))
{$idd=$row2[0];}


      if ($row==1)
       {
       
	  $_SESSION['username']=$username;
      $_SESSION['idd']=$idd;
        echo "Success";
        ?>
<div style="color: #663300; font-size: x-large">
	<?php $handle = fopen("counter_customer.txt", "r"); if(!$handle){ echo "could not open the file" ; } else { $counter = ( int ) fread ($handle,20) ; fclose ($handle) ; $counter++ ;  $handle = fopen("counter_customer.txt", "w" ) ; fwrite($handle,$counter) ; fclose ($handle) ; } ?>
</div>
<?
       
        echo '<script>window.location = "home.php"</script>'; 
         exit;       }
       else 
       {
      

      echo "<script>alert('wrong user or password')</script>";
      echo '<script>window.location = "Register.php"</script>';
           } 
        
        mysql_close($con);
    }
    else
    {
        print "Database NOT Found ";
        mysql_close($con);
    }



?>