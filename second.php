<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Document</title>
    <style>
        * {
            margin-top: 0px;
            margin: 0px;
            padding: 0px;
            font-family: 'Times New Roman', Times, serif;
            text-align:center;
        }

        body {
            min-height: 100vh;
        }
       
        #sidenav {
            width: 250px;
            transition: 0.3s;
            height: 100vh;
            top: 0;
            right: -250px;
            position: fixed;
            background-color: #d8b05b;
            z-index: 2;
        }

        nav ul li {
            list-style: none;
            color: white;
            font-weight: 700;
            margin: 50px 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
        }

        nav ul li a:hover {
            text-decoration: none;
            color: aliceblue;
        }
        
        #menubtn {
            position: fixed;
            right: 30px;
            top: 20px;
            background-color: #d8b05b;
            border-radius: 4px;
            width: 50px;
            height: 50px;
            text-align: center;
            z-index: 3;
            cursor: pointer;
        }

        #menubtn img {
            width: 20px;
            margin-top: 15px;
        }

        .total {
        background-image: linear-gradient(rgba(0,0,0,0.1),#d8b05b),url(images/tata2.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        height: 100vh;
        }

        .form-box {
            width: 380px;
            height: 200px;
            position: relative;
            margin: 5% auto;
            background: #fff;
            padding: 5px;
            border-radius: 7px;

        }
        

        .button-box {
            margin-top: 5px;
            text-align: center;
        }

        .toggle-btn {
            background: transparent;
            padding: 7px 20px;
            background: linear-gradient(to right, #ff105f, #ffad06);
            border-radius: 7px;
            color: white;
            font-weight: 500;
            border: none;
            text-decoration: none;
        }

        .social {
            margin: 30px auto;
            text-align: center;
        }

        .social img {
            width: 30px;
            margin: 0 12;
            box-shadow: 0 0 20px 0 #7f7f7f3d;
            cursor: pointer;
            border-radius: 50%;
        }

        .btn-show {
            background: transparent;
            padding: 7px 20px;
            background: linear-gradient(to right, #ff105f, #ffad06);
            border-radius: 7px;
            color: white;
            font-weight: 500;
            border: none;
            text-decoration: none;
            margin-top: 10px;
        }

        .social p {
            font-size: 15px;
            font-weight: 700;
            color: #486AAE;
        }

        #monthly,
        #activity,
        #work {
            margin-top: 70px;
            text-align: center;
        }

        select {
            padding: 7px 20px;
            border: none;
            background: linear-gradient(to right, #ff105f, #ffad06);
            font-weight: 700;
            border-radius: 7px;
            text-align: center;
        }

        .input-group1 {
            display: none;
        }

        .input-group2 {
            display: none;
        }

        .input-group3 {
            display: none;
        }

        .toggle-btn:hover {
            background: #ff105f;
        }

        .change {
            margin-top: 50px;
        }

        .mainhead {
            background: transparent;
            font-size: 25px;
            text-align: center;
            color: black;
            margin-top: 0px;
            font-weight: 900;
        }

        #preloader {
            background: #fff url(images/Book.gif) no-repeat center center;
            height: 100vh;
            z-index: 100;
            width: 100%;
            position: fixed;
            transition: 5s;
        }

        table{
            margin-top: 25px;
            width:100%;
            color: #588c7e;
            font: size 30px;
            text-align:center;
            padding:15px;
            
        }
        th{
            background-color: #588c7e;
            color: white;
            padding: 5px;
            max-width:100px;
            text-align:center;
            font-weight:700;
        }
        tr{
            text-align:center;
            font-size:11px;
            margin-left:5px;
        }
        table, th, td {
            border: 1px solid black;
        border-collapse: collapse;
        }  
       
    </style>
</head>

<body>
    <div id="preloader"></div>
    <div id="sidenav">
        <nav>
            <ul>
                <li><a href="index.html">HOME.</a></li>
                <li><a href="">ABOUT US.</a></li>
                <li><a href="">CONTACT US.</a>
                </li>
                <li><a href="php/users.php">OUR CLIENTS.</a></li>
                <li><a href="">LOGIN.</a></li>
            </ul>
        </nav>
    </div>
    <div id="menubtn">
        <img src="images/menu.png" alt="" id="menu">
    </div>

    <div class="total">
        <p class="mainhead">Given Below are options through which we can fetch data according to our Provided
            Conditions.</p>
        <div class="form-box" id="box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="month()" id="month">Month </button>
                <button type="button" class="toggle-btn" onclick="centered()" id="center">Work Center </button>
                <button type="button" class="toggle-btn" onclick="activity()" id="act"> Activity </button>
            </div>
            <div class="social">
                <a href="https://twitter.com/TataSteelLtd"><img
                        src="images/iconfinder_5296516_tweet_twitter_twitter logo_icon_512px.png" alt=""></a>
                <a href="https://www.facebook.com/TataSteelLtd/"><img
                        src="images/iconfinder_5365678_fb_facebook_facebook logo_icon_512px.png" alt=""></a>
                <br>
                <br>
                <p>We Make Our Tomorrow Better by Making Our Today Stronger</p>
            </div>
            <center>
                <form class="input-group1" method="POST" id="monthly" action="second.php">
                    <select name="month">
                        <hr>
                        <option value="">Select a month</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                    <br>
                    <input type="submit" class="btn btn-show" name="search" id="sbtn1">
                    <br>
                </form>
            </center>
            <center>
                <form class="input-group2" method="POST" action="second.php" id="work">
                    <select name="center">
                        <hr>
                        <option value="">Select Work Center.</option>
                        <option value="A01">A01</option>
                        <option value="F01">F01</option>
                        <option value="F02">F02</option>
                        <option value="F03">F03</option>
                        <option value="F04">F04</option>
                        <option value="F05">F05</option>
                        <option value="F06">F06</option>
                        <option value="F07">F07</option>
                        <option value="F08">F08</option>
                        <option value="F09">F09</option>
                        <option value="F10">F10</option>
                        <option value="F11">F11</option>
                        <option value="F12">F12</option>
                        <option value="F13">F13</option>
                        <option value="F14">F14</option>
                        <option value="M01">M01</option>
                        <option value="M02">M02</option>
                        <option value="M03">M03</option>
                        <option value="M04">M04</option>
                        <option value="M05">M05</option>
                        <option value="M06">M06</option>
                        <option value="M07">M07</option>
                        <option value="M08">M08</option>
                        <option value="M09">M09</option>
                        <option value="M10">M10</option>
                        <option value="M11">M11</option>
                        <option value="M12">M12</option>
                        <option value="M13">M13</option>
                        <option value="M14">M14</option>
                        <option value="M15">M15</option>
                        <option value="M16">M16</option>
                        <option value="M17">M17</option>
                        <option value="M18">M18</option>
                        <option value="M19">M19</option>
                        <option value="M20">M20</option>
                        <option value="M21">M21</option>
                        <option value="M22">M22</option>


                    </select>

                    <br>
                    <input type="submit" name="search" class="btn btn-show" id="sbtn2">
                    <br>
                </form>
            </center>
            <center>
                <form class="input-group3" method="POST" action="second.php" id="activity">
                    <select name="activities">
                        <hr>
                        <option value="">Select an activity range.</option>
                        <option value="10">10</option>
                        <option value="30">30</option>
                        <option value="70">70</option>
                        <option value="100">100</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                        <option value="400">400</option>
                        <option value="500">500</option>
                        <option value="600">600</option>
                        <option value="700">700</option>
                        <option value="800">800</option>
                        <option value="900">900</option>
                        <option value="1000">1000</option>
                        <option value="1200">1200</option>
                        <option value="1300">1300</option>
                        <option value="1500">1500</option>
                    </select>

                    <br>
                    <input type="submit" class="btn btn-show" name="search" id="sbtn3">
                    <br>
                </form>
            </center>
        </div>
    </div>
    <div id="page2">
        <table class="tab" >
            <tr>
                <th>Order Number</th>
                <th>Activity</th>
                <th>Work Center</th>
                <th>Bal SAH(Hrs)</th>
                <th>RFD Plan</th>
            </tr>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "shopfloor";
        
            // Create a connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            $data=mysqli_select_db($conn,"shopfloor");
            if(isset($_POST['search'])){
                if($conn->connect_error){
                    die("Connection Failed");
                }
                $mon=$_POST['month'];
                $query="SELECT ono, activity, center, balhr, rfd_plan FROM opr WHERE month='$mon'";
                $query_run=mysqli_query($conn,$query);
                ?>
                <h1>Data fetched from Database Where Month is <?php echo "$mon" ?> are</h1>
                <?php
                while($row=mysqli_fetch_array($query_run)){
                    ?>
                    <tr id="tab1">
                        <td> <?php echo $row['ono'];?></td>
                        <td> <?php echo $row['activity'];?></td>
                        <td> <?php echo $row['center'];?></td>
                        <td> <?php echo $row['balhr'];?></td>
                        <td> <?php echo $row['rfd_plan'];?></td>
                    </tr>
                    <?php
                }
                ?>
                <?php
            }
            ?>
        </table>
       
    </div>
    <div id="page3">
        <table class="tab" >
            <tr>
                <th>Order Number</th>
                <th>Activity</th>
                <th>Month</th>
                
                <th>RFD Plan</th>
                <th>Bal SAH(Hrs)</th>
            </tr>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "shopfloor";
        
            // Create a connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            $data=mysqli_select_db($conn,"shopfloor");
            if(isset($_POST['search'])){
                if($conn->connect_error){
                    die("Connection Failed");
                }
                $mon=$_POST['center'];
                $query="SELECT ono, activity, month, rfd_plan, balhr FROM opr WHERE center='$mon'";
                $query_run=mysqli_query($conn,$query);
                ?>
                <h1>Data fetched from Database Where Work Center is <?php echo "$mon" ?> are</h1>
                <?php
                while($row=mysqli_fetch_array($query_run)){
                    ?>
                    <tr id="tab2">
                        <td> <?php echo $row['ono'];?></td>
                        <td> <?php echo $row['activity'];?></td>
                        <td> <?php echo $row['month'];?></td>
                        <td> <?php echo $row['rfd_plan'];?></td>
                        <td> <?php echo $row['balhr'];?></td>
                    </tr>
                    <?php
                }
                echo "</table>";
            }
            ?>
        </table>
    </div>
    <div id="page4">
        <table class="tab" >
            <tr>
                <th>Order Number</th>
                <th>Work Center</th>
                <th>Month</th>
                
                <th>RFD Plan</th>
                <th>Bal SAH(Hrs)</th>
            </tr>
            <?php
            $servername = "localhost"; 
            $username = "root";
            $password = "";
            $dbname = "shopfloor";
        
            // Create a connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            $data=mysqli_select_db($conn,"shopfloor");
            if(isset($_POST['search'])){
                if($conn->connect_error){
                    die("Connection Failed");
                }
                $mon=$_POST['activities'];
                $query="SELECT ono, center, month, rfd_plan, balhr FROM opr WHERE activity>='$mon'";
                $query_run=mysqli_query($conn,$query);
                ?>
                <h1>Data fetched from Database Where Activity is greater than <?php echo "$mon" ?> are</h1>
                <?php
                while($row=mysqli_fetch_array($query_run)){
                    ?>
                    <tr id="tab3">
                        <td> <?php echo $row['ono'];?></td>
                        <td> <?php echo $row['center'];?></td>
                        <td> <?php echo $row['month'];?></td>
                        <td> <?php echo $row['rfd_plan'];?></td>
                        <td> <?php echo $row['balhr'];?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </div>
    

    <script>
        var menubtn = document.getElementById("menubtn");
        var sidenav = document.getElementById("sidenav");
        var menu = document.getElementById("menu");
        menubtn.onclick = function () {
            if (sidenav.style.right == "-250px") {
                sidenav.style.right = "0"
                menu.src = "images/close.png";
            }
            else {
                sidenav.style.right = "-250px";
                menu.src = "images/menu.png";
            }
        }
    </script>
    <script>
        setTimeout(function () { $('#preloader').hide(); }, 1000);
        var preloader = document.getElementById("preloader");
        function loader() {
            preloader.style.display = 'none';
        }
    </script>
    <script>
        var montab=document.getElementById("page2");
        var centab=document.getElementById("page3");
        var actab=document.getElementById("page4");
        var box = document.getElementById("box");
        var month = document.getElementById("month");
        var center = document.getElementById("center");
        var act = document.getElementById("act");
        var monthly = document.getElementById("monthly");
        var work = document.getElementById("work");
        var activity = document.getElementById("activity");
        month.addEventListener("click", function () {
            box.style.height = "360px";
            work.style.display = "none";
            activity.style.display = "none";
            monthly.style.display = "block";
            montab.style.display="block";
            centab.style.display="none";
            actab.style.display="none";
           
        })
        center.addEventListener("click", function () {
            box.style.height = "360px";
            work.style.display = "block";
            activity.style.display = "none";
            monthly.style.display = "none";
            montab.style.display="none";
            centab.style.display="block";
            actab.style.display="none";
        })
        act.addEventListener("click", function () {
            box.style.height = "360px";
            work.style.display = "none";
            activity.style.display = "block";
            monthly.style.display = "none";
            montab.style.display="none";
            centab.style.display="none";
            actab.style.display="block";
        })   
    </script>
   <script>
        var montab=document.getElementById("page2");
        var centab=document.getElementById("page3");
        var actab=document.getElementById("page4");
        var btnm=document.getElementById("sbtn1");
        var btnc=document.getElementById("sbtn2");
        var btna=document.getElementById("sbtn3");
        btnm.addEventListener("click", function () {
            montab.style.display="block";
            centab.style.display="none";
            actab.style.display="none";
        })
        btnc.addEventListener("click", function () {
            montab.style.display="none";
            centab.style.display="block";
            actab.style.display="none";
        })
        btna.addEventListener("click", function () {
            montab.style.display="none";
            centab.style.display="none";
            actab.style.display="block";
        })
    </script>
</body >
</html>
