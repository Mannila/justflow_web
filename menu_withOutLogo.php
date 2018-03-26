<style>
	.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    opacity: .9;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.logo-menu{
    display: table-cell;
    text-align:  center;
    width: 100%;
}
.logo-menu>img{
    width: 30px;
}
</style>
<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="#"></a>
	  <a href="#"></a>
	  <a href="#"></a>
	  <a href="#"></a>
	  <a href="aboutUs">About Us</a>
	  <a href="features.php">Features</a>
	  <a href="#">FAQ's</a>	  
	  <a href="#">Contact Us</a>
	  <a href="#">Log out</a>
</div>
<span style="font-size:30px;cursor:pointer; display:table-cell;" onclick="openNav()">&#9776;</span>
<script>
	function openNav() {
	    document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
	    document.getElementById("mySidenav").style.width = "0";
	}
</script>