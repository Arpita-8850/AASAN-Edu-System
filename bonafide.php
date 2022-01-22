<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	body { 
        width: 750px;
        margin:auto;
        }
	
    #gpm {
        position: relative;
    }
    #gpm img {
        width: 120x;
        height: 120px;
        position: absolute;
        top: 13px;
        right: 620px;
    }
	
    h2 {
		font-size: 15px;
	}
	
	#sign1 {
        position: relative;
    }
    #sign1 img {
        width: 100px;
        height: 80px;
        position: absolute;
        top: 25px;
        left: 130px;
    }
	
    #sign2 {
        position: relative;
    }
    #sign2 img {
        width: 100px;
        height: 80px;
        position: absolute;
        top: 25px;
        right: 120px;
    }	
		
	#stamp {
       position: relative;
    } 
    #stamp img {
       height: 100px;
       width: 100px;
       position: absolute;
       top: 25px;
       right:330px;
    }	
		
	p.b { 
       word-spacing: 140px;
	   float: right;
       margin-right: 150px;
	   font-size: 17px;
    }

    .print {
      position: absolute;
      background-color: green;
      color: white;
      font-size: 15px;
      border-color: green;
	  top: 800px;
	  padding: 10px 30px;
	}
	</style>
	
	<?php
        $conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));  
        session_start();
        $sId = $_SESSION['sId'];
		$query = "SELECT * FROM bonafide WHERE sr='$sId'";
		$data = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($data);
        // $rollno = $_GET['rollno'];
        // $name = $_GET['name'];
        // echo $rollno;         
	?>
	
	<body>

	<br></br>
		<div id="gpm"><img src="dte.jpg"/></div>
		<h1 class="normal"style="margin-top: 20px; font-size:25px;"><center> GOVERNMENT POLYTECHNIC MUMBAI </center></h1>
		<p class="normal"style="margin-top: 5px"><center> 49, ALI YAVAR JUNG MARG, KHERWADI,</center></p>
		<p class="normal"style="margin-top: 5px"><center> BANDRA EAST, MUMBAI, MAHARASHTRA (400051) </center></p>
		<p class="normal"style="margin-top: 8px"><center> Tel: 1234 5678 / 9876 5432, Fax:2674 4057 </center></p>
		<hr>
		<hr>
		<p style="margin-left:570px; margin-top: 10px; font-size:16px; position:absolute;">Date:<?php echo $row["date"]; ?> </p>
		<p style="margin-left:50px; margin-top: 10px; font-size:16px; position:absolute;">No./Gpm/Bonafide-cre/<?php echo $row["bonafideno"]; ?> </p>
		<br></br>
		<h1 class="normal"style="margin-top: 20px; font-size:30px;"><center><u> BONAFIDE CERTIFICATE </u></center></h1>
		<p style="font-size:20px;"> This is to Certify that, Mr./Miss <u><?php echo $row["name"]; ?> </u> is bonafide student of this institute for the current academic year <u><?php echo $row["year"]; ?></u>. He/She is studying in <u><?php echo $row["standard"]; ?> </u> year of Diploma Programme in <u><?php echo $row["branch"]; ?>  Engineering.</u></p>
		<p style="font-size:20px;"> Her / His enrollment No. <u><?php echo $row["rollno"]; ?>.</u></p>
    	<p style="font-size:20px;"> He / She bears good moral character. </p>
	    <p style="font-size:20px;"> He / She stay in Hostel attached to this Institute.</p>
		<br></br>
		<div id="sign1"> 
		<img src="sign.png" />
		</div>
		
		<div id="stamp"> 
		<img src="stamp.png" />
		</div>
		
		<div id="sign2"> 
		<img src="sign2.png"/>
		</div>
		<p class="b" style="margin-top: 150px"><strong>HOD Stamp Principal</p>
		
    </div>
	<br><br>
	<div style="margin-left:300px">			
		<input id="printpagebutton" type="submit" name="print" value="PRINT" class="print" onclick="printpage()"/>  
        <br><br><br><br>		
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
</center>
</body>
</html>
		
		
		
		
		

		