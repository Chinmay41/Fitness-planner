<?php
$servername = "localhost";
$database = "register";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);


session_start();
$name=$_SESSION['username'];
$sql="SELECT * FROM customer WHERE username='$name'";
$r1=$conn->query($sql);
$result=$r1->fetch_all();

echo "<div id='details'><h1>Hello ".$result[0][0]."!</h1>";
$h=$result[0][4];
$w=$result[0][5];
echo "<h2 class='info'> Your Height:".$result[0][4]." <br>Your Weight:".$result[0][5]."</h2>";
$b=$w/($h/100 * $h/100);
$bmi=round($b);
echo "<h2 class='info'>Your BMI:".$bmi."</h2>";
$_SESSION['BMI']=$bmi;
if($bmi<18.5){
echo "<h2 class='red'>You are underweight</h2><br><br>  </div> <br><h3 style='color:green;'>Tip: Eat more frequently. When you're underweight, you may feel full faster. Eat five to six smaller meals during the day rather than two or three large meals.</h3> <br>";

}

if($bmi>18.5 && $bmi<24.9){
echo "<h2 class='info'>You have normal weight</h2><br><br> </div> <br><h3 style='color:green;'>Tip:for Maintaining a Healthy Weight Limit portion size to control calorie intake and add healthy snacks during the day if you want to gain weight.</h3> <br>";
}
if($bmi>25){
    echo "<h2 class='red'>You are overweight</h2><br><br> </div> <br><h3 style='color:green;'>Tip: When in a calorie deficit, your body breaks down body fat and muscle to get the additional energy it needs, resulting in weight loss.</h3> <br>";
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background-image: linear-gradient(to bottom right, #00e3ff, #ffbf00);
        }
        button{
        background-color: black;
        color: #32cde5;
        border-radius:5px;
        height: 30px;
        }
        button:hover{
            cursor: pointer;
        }
        .info{
            color:blue
        }
        .red{
            color:red;
        }
        #details{
            border: 2px solid red;
            border-radius: 20px;
            width: 800px;
            background-color: aliceblue;
            position: relative;
            top: 32px;
        }

/* nav */

.navbar{
        display: flex;
        background-color:black;
        height: 31px;
        padding-top: 12px;
        /* border-radius: 10px; */
        margin-bottom: 4px;
        margin-top: -52px;
        position:sticky;
        top: -1px;
        z-index: 2;
        opacity: 0.6;
        margin-right: -9px;
        margin-left: -6px;
        position: relative;
         top: -343px;
        width: 98%;
       }

        .nav{
            padding: 23px;
            text-decoration: none;
            z-index: 15;
            color: #00ffb4;
        }
        /* .search{
            position: relative;
            left: 700px;
            padding: 5px 43px;
            top: -4px;
        } */


/* nav */
    </style>

</head>
<body>

<!--nav  -->
 
<ul class="navbar" type="none">
        <li><a class="nav" href="home.html">Home</a></li>
        <li><a class="nav" href="calculator.html" >calculators</a></li>
        <li><a class="nav" href="planner.html" >planner</a></li>
        <li><a class="nav" href="contact.html" >Contact us</a></li>
        <li><a class="nav" href="login.php" >login</a></li>
            <!-- <div class="search">
                <input type="text" id="search" placeholder="Search this website">
            </div> -->
        
    </ul>
<!-- nav -->
<br>

<button onclick="plans()"> get your personalised Plan
</button>

 <br><button onclick="logout()">Log Out</button>

<script>
    function logout(){
         
        window.location.href='home.html';
    }

    function plans(){
        var x = "<?php echo"$bmi"?>";
        //let heatlh="normal";
                if(x<18.5){
                    window.location.href='type2.html'
                }
    
                if(x>18.5&&x<24.9){
                    window.location.href='type1.html'
                }
                if(x>25){
                    window.location.href='type3.html'
                }
    }

    
</script>
</body>


