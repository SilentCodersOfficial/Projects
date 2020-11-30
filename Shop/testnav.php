<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styled.css" id="styles">
    <script src="https://kit.fontawesome.com/3bfdd3ba56.js" crossorigin="anonymous"></script>
    <script>
    function changeTheme() {
        const link = document.getElementById('styles');
        if (link.href.includes('d')) {
            link.href = 'style.css';
        } else {
            link.href = 'styled.css';
        }
    }    
    </script>
</head>
<body>
    <!-- Header Start  -->
     <div class="header">
         <div class="header-social">
            <a href=""><i class="fab fa-facebook-square fa-customize fa-color"></i></a>
            <a href=""><i class="fab fa-instagram-square fa-customize fa-color"></i></a>
            <a href=""><i class="fab fa-twitter-square fa-customize fa-color"></i></a>
            <a href=""><i class="fab fa-whatsapp-square fa-customize fa-color"></i></a>
        </div>
        <div class="header-contact">
            <a href=""><i class="fas fa-envelope fa-customize fa-color"></i></a>
        </div>
     </div>
     <!-- Header End -->
     <!-- Navbar Start-->
     <nav>
        <ul class="links">
            <a href=""><li>LOREM,<strong>IPSUM.</strong></li></a>
        </ul>
        <ul class="cart">
            <a href=""><li><i class="fas fa-shopping-cart"></i></li></a>
            <li><label class="menu-icon" for="menu-btn"><i class="fas fa-bars"></i></label></li>
        </ul>
        <input class="menu-btn" type="checkbox" id="menu-btn">
        <div class="menu">
            <ul class="silent-menu">
                <a href=""><li><i class="fas fa-home"></i></li></a>
                <a href=""><li><i class="fas fa-book-open"></i></li></a>
                <a href=""><li><i class="fas fa-phone"></i></li></a>
                <a href="#"><li><i class="fas fa-moon" onclick="changeTheme()"></i></li></a>
            </ul>
        </div>
     </nav>
     <!-- Navbar End-->
     <!-- Container Start -->
     <div class="container">
        <div class="item-list">
            <?php
                echo getData();
            ?>
            <div class="item">
                <a href="index.html">
                    <img src="blank.png" alt="blank">
                    <span><b>Lorem, ipsum dolor.</b></span>
                </a>
                    <span class="items">90,00 zł</span></div>
            <div class="item"><a href="index.html"><img src="blank.png" alt="blank"><br><b>Lorem, ipsum dolor.</b></a></div>
            <div class="item"><a href="index.html"><img src="blank.png" alt="blank"><br><b>Lorem, ipsum dolor.</b></a></div>
            <div class="item"><a href="index.html"><img src="blank.png" alt="blank"><br><b>Lorem, ipsum dolor.</b></a></div>
            <div class="item"><a href="index.html"><img src="blank.png" alt="blank"><br><b>Lorem, ipsum dolor.</b></a></div>
            <div class="item"><a href="index.html"><img src="blank.png" alt="blank"><br><b>Lorem, ipsum dolor.</b></a></div>
            <div class="item"><a href="index.html"><img src="blank.png" alt="blank"><br><b>Lorem, ipsum dolor.</b></a></div>
            <div class="item"><a href="index.html"><img src="blank.png" alt="blank"><br><b>Lorem, ipsum dolor.</b></a></div>
            <div class="item"><a href="index.html"><img src="blank.png" alt="blank"><br><b>Lorem, ipsum dolor.</b></a></div>
            <div class="item"><a href="index.html"><img src="blank.png" alt="blank"><br><b>Lorem, ipsum dolor.</b></a></div>
            <div class="item"><a href="index.html"><img src="blank.png" alt="blank"><br><b>Lorem, ipsum dolor.</b></a></div>
            <div class="item"><a href="index.html"><img src="blank.png" alt="blank"><br><b>Lorem, ipsum dolor.</b></a></div>
            <div class="item"><a href="index.html"><img src="blank.png" alt="blank"><br><b>Lorem, ipsum dolor.</b></a></div>
            <div class="item"><a href="index.html"><img src="blank.png" alt="blank"><br><b>Lorem, ipsum dolor.</b></a></div>
            <div class="item"><a href="index.html"><img src="blank.png" alt="blank"><br><b>Lorem, ipsum dolor.</b></a></div>
            <div class="item"><a href="index.html"><img src="blank.png" alt="blank"><br><b>Lorem, ipsum dolor.</b></a></div>
        </div>
     </div>
     <!-- Container End -->
     <!-- Footer-->
     <div class="footer">
        <b>Wszelkie prawa zastrzeżone</b> <i class="far fa-copyright"></i>
     </div>
</body>
<?php
function getConnection() {
        $con = new mysqli('localhost','root','','testdata');
        if($con->connect_errno!=0){return null;};
        $con->query("SET NAMES utf8");
        return $con;
}
function getData(){
$con = getConnection();
	$sql = "SELECT title, price, image FROM data;";
	$result = mysqli_query($con, $sql);
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "<div class='item'>
                        <a href=''>
                            <img src='products/" . $row["image"]. "' alt='blank'>
                            <span><b>" . $row["title"]. "</b></span>
                        </a>
                        <span class='items'>" . $row["price"]. "zł</span></div>";
		}
	} else {
		echo "0 results";
	}
	mysqli_close($con);
	}
?>
</html>