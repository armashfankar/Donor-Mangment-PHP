<html><body>
<?php include "admin_page_header.html"?>


<script language="javascript" >
function fun3()
{
	
	var fname=document.forms.frm.fname.value;


	
	
	if(fname=="")
	{
		alert("Enter your Donors Name To Search!! ");
		return false;
	}

</script>











        <div id="templatemo_main">
        <font color="black">
        	<div class="cbox_fw">
         
                <div class="cleaner"></div>
            </div>
            	<br><br>
            <div class="cbox_fw">
            	<div class="cbox_large float_l">


<h5 class="tw_bullet"><font color="red">Add Doners</font></h5><br>

<a href="donation_from2.php"><img src="buttons/add.png"></a></font></h5><br><br>



<BR><BR>





<form  method="post" action="search.php" onSubmit="return fun3()" name="frm">
<h5 class="tw_bullet"><font color="red">Search For Registered Doners</font></h5><br>

<label for="name"> <h5 class="tw_bullet">Donor Name<font color="red">*</font></h5>  </label> 
<input id="name" maxlength="45" name="fname" type="text" /> <br><br>
<input type="image" name="send" value="SEARCH DONORS" src="buttons/search.png" alt="Submit"  /> 

<br><br>
</form>





<form  method="post" action="search.php" onSubmit="return fun3()" name="frm">
<h5 class="tw_bullet"><font color="red">View All Doners</font></h5><br>
<input type="image" name="send" value="SEARCH DONORS" src="buttons/viewall.png" alt="Submit"  /> 

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
