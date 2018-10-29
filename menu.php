<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

 body{
  background-image: url("http://4.bp.blogspot.com/-VLLxoOK7j3c/VNLozitDOmI/AAAAAAAAASE/b_h0J1C2tMk/s1600/Galaxy%2BViolet%2BWallpaper%2B5.jpg");
  color: white; 
 }

.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    cursor: pointer;
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
    background-color:#009933;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #333;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #009933;
}

.show {
    display: block;
  }

.droite{
  text-align: right;
}

</style>
</head>
<body>

<div class="navbar">
  <a href="accueil.php">Home</a>
 
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()"> Sociétés
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown">
      <a href="BlackStarCorp.php">BlackStar Corp.</a>
      <a href="VadorSon.php">Vador & Son </a>
      <a href="TheJediCompany.php"> The Jedi Company </a>
      <a href="Chewbbatech.php"> Chewbba-tech </a>
      <a href="PortmanIndustries.php"> Portman Industries </a>
      <a href="R2D2Droid.php"> R2D2 & Droids </a>
    </div>
  </div> 
   <div class="dropdown">
    <button class="dropbtn" onclick="myFunction2()"> Secteurs de recherche
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown2">
      <a href="technoplasma.php"> Technologies plasmatiques </a>
      <a href="aerospatial.php"> Aérospatial </a>
      <a href="progdroide.php"> Programmation de droïdes </a>
      <a href="physiquetempo.php"> Physique temporelle </a>
      <a href="balistiquelaser.php"> Balistique Laser </a>
      <a href="mecagravi.php"> Mécanique gravitationnelle </a>
    </div>
  </div> 
   <a href="gestioncompte.php" class="droite" >Compte</a>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
</script>
</body>
</html>
