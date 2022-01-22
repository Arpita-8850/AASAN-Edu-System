<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
<style>
    body{
        margin: 100px;
    }
    #gpm {
        position: relative;
    }
    #gpm img {
        width: 150px;
        height: 150px;
        position: absolute;
        top: -29px;
        right: 1200px;
    }
            
    h1 {
        font-size: 40px;
        margin-top: 60px
    }
    h2 {
        font-size: 16px;
        margin-top: 5px
    }  
    p {
        font-size: 25px;
        line-height: 15%;
    }
            
    #paytm {
        position: relative;
    }
    #paytm img {
        width: 360px;
        height: 200px;
        position: absolute;
        top: 25px;
        left: 50px;
    }
            
    #upi {
        position: relative;
    }
    #upi img {
        width: 280px;
        height: 180px;
        position: absolute;
        top: 40px;
        right: 620px; 
    }	
            
    #google {
        position: relative;
    } 
    #google img {
        height:220px;
        width: 220px;
        position: absolute;
        top: 30px;
        right:210px;
    }	
        
    #pay {
        position: relative;
    }
    #pay img {
        width: 240px;
        height: 240px;
        position: absolute;
        right: 620px;
    }
            
    h3 {
        color: red;
        font-size: 30px;
    }      
</style>
<body>
    <div id="gpm"><img src="gpm.png"/></div>
    <h1><center> GOVERNMENT POLYTECHNIC MUMBAI </center></h1>
    <h2><center> 49, ALI YAVAR JUNG MARG, KHERWADI, BANDRA EAST, MUMBAI, MAHARASHTRA (400051) </center></h2>
    <br><br>
    <hr><hr>
    <br>
    <p style="font-family: 'Source Sans Pro', sans-serif;">GPM provides following online transactions:</p>

    <div id="paytm"> 
        <img src="paytm.jpg" />
    </div>
    <div id="upi"> 
        <img src="UPI.png" />
    </div>
    <div id="google"> 
        <img src="google.png"/>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div id="pay"><img src="pay.png"/></div>
    <h3 style="margin-top: 250px;"><font face="calibri"><center><strong> QR CODE for paytm</strong></center></h3>
    <br>

    <div style="margin-left: 20px;">
        <h3><font face="calibri"><strong>Online Payment Details:</strong></h3>
        <p><font face="calibri">Account Name: GPM</p>
        <p><font face="calibri">Mobile number: +91  9860412268</p>
        <p><font face="calibri">Bank Account No. / UPI ID: 3704 0044 0532 0130</p>
        <p><font face="calibri">IFSC Code:  SBIN0005943</p>
        <br>
        
        <h3><font face="calibri"><strong>Demand Draft:</strong></h3>
        <p class="normal"><font face="calibri">Name: Principle Government Polytechnic Mumbai</p>
        <br>
        
        <h3><font face="calibri"><strong>Cash Payment:</strong></h3>
        <p class="normal"><font face="calibri">Contact to the faculty of respective departments.</p>
    </div>
    <center>
        <input type="button" id="cancel" name="cancel" value="BACK" onClick="window.location='student-choose.php';"/>
    </center>
    <br><br>
</body>
</html>