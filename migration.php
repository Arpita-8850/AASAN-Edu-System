<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	    body {
        height: 842px;
        width: 595px;
        margin-right: 20px;
		margin-left: 30px;
	    margin-top: 15px;
        }
		
		#border {
		border:solid;
		width: 650px;
		height: 1050px;
		padding-left:30px;
		padding-right:40px;
		}
			
	    #gpm {
        position: relative;
        }
        #gpm img {
        width: 85x;
        height: 85px;
        position: absolute;
        top: 13px;
        right: 585px;
        }
		
		.floated {
			float: left;
			margin-right: 100px;
			margin-bottom: 100px;
		}
		h1 {
			font-size: 25px;
        }
		  
		p {
		   font-size: 15px;
		   line-height: 15%;
          }
		 
		h2 {
			font-size: 35px;
           }
		
		h3 {
		 	font-size: 12px;
		   }
		  
		.cellLabel{
			padding-left: 30px;
		 }  
		.cellValue {
			padding-left: 90px;
		}
		
		#note {
        position: absolute;
        font-size: 15px;
		left: 80px;
		}
		
        #note-2 {
        position: absolute;
        font-size: 15px;
		top:820px;
		left: 70px;
		}
	
        #sign2 {
        position: relative;
        }
        #sign2 img {
        width: 100px;
        height: 80px;
        position: absolute;
        top: 25px;
        right: 90px;
        }	
		
	   #stamp {
       position: relative;
       } 
       #stamp img {
       height: 100px;
       width: 130px;
       position: absolute;
       top: 25px;
       right:450px;
       }	
		
	   p.b { 
       word-spacing: 290px;
	   float: right;
       margin-right: 130px;
	   font-size: 17px;
       }

      .print {
		position: absolute;
		background-color: green;
		color: white;
		font-size: 15px;
		border-color: green;
		top: 1090px;
		padding: 15px 20px;
       }		
	</style>
	
	<?php
		$conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));
		session_start();
		$sId = $_SESSION['sId'];
		$query = "SELECT * FROM general WHERE sr='$sId'";
		$data = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($data);
	?>

	<body>
	    <div id=border>
	    <div id="gpm"><img src="gpm.png"/></div>
		<p class="normal"style="margin-left:500px; margin-top: 20px"><center>MAKING KNOWLEDGE TO WORK</center></p>
		<h1 class="normal"style="margin-top: 20px"><center> GOVERNMENT POLYTECHNIC MUMBAI </center></h1>
		<h3 class="normal"style="margin-top: 5px"><center> 49, ALI YAVAR JUNG MARG, KHERWADI, BANDRA EAST, MUMBAI, MAHARASHTRA (400051) </center></h3>
		<hr><hr>
		
		<p style="margin-left:570px; margin-top: 10px; font-size:12px; position:absolute;">Date: <?php echo $row["dol"]; ?></p>
        <h4 class="normal" style="margin-top:5px"><center>EXAMINATION CELL</h4>    
        <hr style="border-top:3px dotted black">
		
        <h2 class="normal"style="margin-top: 50px"><center><u>MIGRATION CERTIFICATE</center></u></h2>
		<br><br>
        <p style="font-size:16px;"> This is to certify that Mr./Ms.<u><?php echo $row["name"]; ?> </u> bearing Enrollment No. <u> <?php echo $row ["rollno"]; ?> </u></p> <p style="font-size:16px;"> has completed Diploma in echooooo from this Institute. </p>
        <br>
        <p style="font-size:16px;"> This Institute does not have any objection for his/her migration to other Institute for taking admission </p> 
		<p style="font-size:16px;"> or pursuing higher qualification. Institute wishes him/her bright future & career.</p>
		<br><br>

		<div id="stamp"> 
			<img src="clg.jpg" />
		</div>
		
		<div id="sign2"> 
			<img src="sign2.png"/>
		</div>
		<p class="b" style="margin-top: 150px"><strong>Stamp Principal</p>
		
        <div style="margin-left:600px">			
			<input id="printpagebutton" type="submit" name="print" value="PRINT" class="print" onclick="printpage()"/>  
		</div>
	
<script>
  function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print();
		setTimeout(3000);
        printButton.style.visibility = 'visible';
    }
</script>	

</body>
</html>