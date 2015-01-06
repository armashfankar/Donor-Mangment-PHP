
<html><body>
<?php include "admin_page_header.html"?>


        <div id="templatemo_main">
        <font color="black">
        	<div class="cbox_fw">
         
                <div class="cleaner"></div>
            </div>
            	<br><br>
            <div class="cbox_fw">
            	<div class="cbox_large float_l">
<?php
mysql_connect ("localhost","root","root")  or die (mysql_error());
mysql_select_db ("ecf");
 
$term = $_POST['fname'];
 
$sql = mysql_query("select * from donors where fname like '%$term%'");
 
echo "<table border=1>
<tr>

<th><font color=red>id</th>
<th><font color=red>First Name</th>
<th><font color=red>Last Name</th>
<th><font color=red>Email</th>
</tr>";

while ($row = mysql_fetch_array($sql)){

echo 
 "<tr><td><font color=black>".$row['id']. "</td><td><font color=black>".$row['fname']."</td><td><font color=black>".$row['lname']."</td><td><font color=black>".$row['email'];
}
echo "</table>";



?>
<br><br><br>






<br>
<div class="as_wrapper">
	<h5 class="tw_bullet">Please Enter Email Address Of <?php echo $term;?> To Send Remender </h5>
    <form action="mail.php" method="post">
    <table class="mytable">
    <tr>
    	<td><input type="email" placeholder="Email" name="email" /></td>
	</tr>
    <tr>
    	<td>
<input type="image" name="send" value="SEND MAIL TO DONORS" src="buttons/sendmail.png" alt="Submit"  /> </td>
	</tr>
    </table>
    </form>
</div>




<br>
<div class="as_wrapper">
	<h5 class="tw_bullet">Please Press Button To Send Reminder To All Donors  </h5>
    <form action="sendtomany.php" method="post">
    <table class="mytable">
    <tr>
    	<td>
<input type="image" name="send" value="SEND REMINDER TO ALL DONORS" src="buttons/bulkmail.png" alt="Submit"  /> </td>
	</tr>
    </table>
    </form>
</div>





<form  method="post" action="remove.php" onSubmit="return fun3()" name="frm">

<h5 class="tw_bullet"><font color="red">Remove Doners</font></h5><br>

<label for="name"> <h5 class="tw_bullet">Donor Id<font color="red">*</font>  </label> 
<input id="name" maxlength="45" name="id" type="text" /> 



<label for="name"> <h5 class="tw_bullet">Donor Name<font color="red">*</font> </label> 
<input id="name" maxlength="45" name="fname" type="text" /> 

<BR>


<input type="image" name="send" value="REMOVE DONORS" src="buttons/remove.png" alt="Submit"  /> 
<br><br>
</form>


					<div class="cleaner h20"></div>
					<div class="cbox_small float_l">
	<br>	
                    	
                                      
                    </div>
              
                 
                        			
                 
                </div>
                <div class="cbox_small float_r">
                	

			 
                    <div class="rp_box">
                  		
                    	
		
                
                      <div class="cleaner"></div>
                  	</div>

                </div>
                <div class="cleaner"></div>
            </div>
            
        </div> <!-- end of main -->





<?php include "foot.html"?>
</body>
</html>
   
