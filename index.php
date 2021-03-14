<?php
   require_once "pdo.php";
   //require_once "utilities.php";
   session_start();
 ?>  
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CleverDeals</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/slick-theme.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel ="stylesheet" href="css/style.css">
<link rel ="stylesheet" href="css/search.css">
<style>
    #searchBoxDiv{
        background-image: url("https://img.freepik.com/free-photo/close-up-hand-holding-keys-wooden-house-model-against-blue-background_23-2148038680.jpg?size=626&ext=jpg");
        height: 417px; 
        background-position: center; 
        background-repeat: no-repeat; 
        background-size: cover; 
    }
</style>
</head>

<body>
<header>
<nav id="header-nav" class="navbar navbar-default fixed-top" style="margin-bottom:0;">
<div class="container-fluid">
    <div class="navbar-header" style="width: 100%">
        <div  style="display: flex; justify-content: space-between; align-items: center;">
            <div class="menu-btn" style="margin-left:0px">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
                <ul>
                    <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#"><span class="fa fa-smile-o"></span>  User Profile</a>
                    <a href="#"><span class="fa fa-bolt">  Be A Broker</span></a>
                    <a href="#"><span class="fa fa-user-o"> Buyer</span></a>
                    <a href="#"><span class="fa fa-map-marker">  Nearby Properties</span></a>
                    <a href="#"><span class="fa fa-phone">  Contact Us</span></a>
                    <a href="#"><span class="fa fa-paper-plane-o">  Sell With Us</span></a>
                    <a href="#"><span class="fa fa-sign-out"> Logout</span></a>
                    </div>
                </ul>
            </div>

            <div style="margin-left:auto;">
                <a href = " # " class="visible-md visible-lg">
                    <div id="logo-img" alt="logo image"></div>
                </a>
            </div>
        </div> <!-- This is for flexbox -->
    
        <!-- <button type="button" id="navbarToggle" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button> -->
    
    </div>

    <div id="collapsable-nav" class="collapse navbar-collapse">
        <div>
        </div> <!-- Flexbox Div -->
    </div>                                                                                          
</div>
</nav>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>
</header>
         <!-- Search Box Start-->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <!--Buttons-->
        <script src="js/search.js"></script>
        <div id="searchBoxDiv">
            <form method="POST" action="#propsearch" style="margin: 0px;position: absolute;top: 35%;">
            <div style="width: 80%;margin: auto;margin-top:-6%;margin-bottom:3%">
                <h2 id="searchCaption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores excepturi repellat ipsa minus officiis et veritatis, nostrum culpa molestias sunt fugiat earum, adipisci iure deleniti, eveniet itaque corporis? Optio, repudiandae?</h2>
            </div>
                <section id="searchbar-rows" style="margin-left: 280px;">
                    <div class="tab-items">
                        <div class="search-tabs">
                            <a id="BuyTab" tabindex="0" class="active" href="javascript:void(0)" onclick="changeTab(0)">Buy</a>
                            <a id="RentTab" tabindex="1" href="javascript:void(0)" onclick="changeTab(1)">Rent/ PG</a>
                            <a id="ProjectTab" tabindex="2" href="javascript:void(0)" onclick="changeTab(2)">Projects</a>
                            <a id="CommercialTab" tabindex="3" href="javascript:void(0)" onclick="changeTab(3)">Commercial</a>
                            <a id="DealerTab" tabindex="4" href="javascript:void(0)" onclick="changeTab(4)">Dealers</a>
                        </div>
                    </div>
                    <div id="activetab" style="margin-top: 0.7rem">
                    <div id="searchbar-wraper">
                        <div class='searchBox'>
                            <div class="ptype dropdown" style="margin-right: 1rem; border-radius: 10%">
                                <a class="btn dropdown-toggle" type="button" data-toggle="dropdown" style="width:150px">All Residential</a>
                                <ul class="dropdown-menu" style="width: 250px;">
                                    <li style="font-weight: 550;"><input type="checkbox" name="searchtype"> Projects</li>
                                    <li style="font-weight: 550;"><input type="checkbox" checked name="searchtype"> All Residential</li>
                                    <ul style="padding: 0px 15px;">
                                        <li><input type="checkbox" checked name="searchtype"> Residential Apartment</li>
                                        <li><input type="checkbox" checked name="searchtype"> Independent House/Villa</li>
                                        <li><input type="checkbox" checked name="searchtype"> Independent/Builder Floor</li>
                                        <li><input type="checkbox" checked name="searchtype"> Residential Land</li>
                                        <li><input type="checkbox" checked name="searchtype"> Studio Apartment</li>
                                        <li><input type="checkbox" checked name="searchtype"> Farm House</li>
                                        <li><input type="checkbox" checked name="searchtype"> Serviced Apartments</li>
                                        <li><input type="checkbox" checked name="searchtype"> Other</li>
                                    </ul>
                                    <li style="font-weight: 550;"><input type="checkbox" name="searchtype"> All Commercial</li>
                                </ul>
                            </div>
                            <div class="ptype querybar" style="margin-right: 1rem; border-radius: 10%">
                                <input class="querybox" name="keyword" onfocus="showMenu()" onfocusout="hideMenu()"
                                    placeholder="Type Location or Project/Society or Keyword" type="text" autocomplete="off" required="field is required">
                            </div>
                            <input type="submit" class="btn btn-primary " id="submit_query" value="Search" name="bsearch" style="margin-right: 1rem; border-radius: 10%"/>
                        </div>
                        <!--Search Filters Start Here-->
                        <div class="filters fade hidden" onclick="this.classList.remove('fade');">
                            <div class="stype dropdown">
                                <div class="form-group">
                                    <select class="form-control" name="cs" >
                                        <option disabled hidden selected="">Constructio Status</option>
                                        <option>Under Construction</option>
                                        <option>Ready to move</option>
                                        
                                    </select>
                                </div>
                                <!--<a class="btn dropdown-toggle" type="button" data-toggle="dropdown" name="status">Construction Status</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><input type="radio" value="0" name="siteType">Under Construction</li>
                                    <li class="dropdown-item"><input type="radio" value="1" name="siteType">Ready to move</li>
                                </ul>-->
                            </div>
                            <div class="stype dropdown">
                                <div class="form-group">
                                    <select class="form-control" name="budget" >
                                        <option disabled hidden selected>Budget</option>
                                        <option value="5">5 Lacs</option>
                                        <option value="10">10 Lacs</option>
                                        <option value="15">15 Lacs</option>
                                        <option value="20">20 Lacs</option>
                                        <option value="25">25 Lacs</option>
                                        <option value="30">30 Lacs</option>
                                        <option value="35">35 Lacs</option>
                                        <option value="40">40 Lacs</option>
                                        <option value="50">50 Lacs</option>
                                        <option value="60">60 Lacs</option>
                                        <option value="75">75 Lacs</option>
                                        <option value="90">90 Lacs</option>
                                        <option value="100">1 Crore</option>
                                    </select>
                                </div>
                                <!--<a class="btn dropdown-toggle" type="button" data-toggle="dropdown" name="rate">Budget</a>
                                <ul class="dropdown-menu" style="max-height: 150px; overflow-y: scroll; padding: 4px 10px;">
                                    
                                        <li class="dropdown-item">  Range</li>
                                            <li class="dropdown-item"><input type="radio" value="2" name="range">  5 Lacs</li><li class="dropdown-item"><input type="radio" value="3" name="range">  10 Lacs</li><li class="dropdown-item"><input type="radio" value="4" name="range">  15 Lacs</li>
                                            <li class="dropdown-item"><input type="radio" value="5" name="range">  20Lacs</li><li class="dropdown-item"><input type="radio" value="6" name="range">  25 Lacs</li><li class="dropdown-item"><input type="radio" value="7" name="range">  30 Lacs</li>
                                            <li class="dropdown-item"><input type="radio" value="8" name="range">  40 Lacs</li><li class="dropdown-item"><input type="radio" value="9" name="range">  50 Lacs</li><li class="dropdown-item"><input type="radio" value="10" name="range">  60 Lacs</li>
                                            <li class="dropdown-item"><input type="radio" value="11" name="range">  75 Lacs</li><li class="dropdown-item"><input type="radio" value="12" name="range">  90Lacs</li><li class="dropdown-item"><input type="radio" value="13" name="range">  1 Crore</li>
                                            <li class="dropdown-item"><input type="radio" value="14" name="range">  1.5 Crores</li><li class="dropdown-item"><input type="radio" value="15"name="range" >  2 Crores</li><li><input type="radio" value="16">  3 Crores</li>
                                            <li class="dropdown-item"><input type="radio" value="17"name="range">  5 Crores</li><li class="dropdown-item"><input type="radio" value="18" name="range">  10 Crores</li><li class="dropdown-item"><input type="radio" value="19" name="range">  20 Crores</li>
                                    
                                    
                                </ul>-->
                            </div>
                            <div class="stype dropdown">
                                <div class="form-group">
                                    <select class="form-control" name="bedr">
                                        <option disabled hidden selected>Bedroom</option>
                                        <option>1 RK/1 BHK</option>
                                        <option>2 BHK</option>
                                        <option>3 BHK</option>
                                        <option>4 BHK</option>
                                    </select>
                                </div>
                                <!--<a class="btn dropdown-toggle" type="button" data-toggle="dropdown" name="room">Bedroom</a>
                                <ul class="dropdown-menu" style="max-height: 150px; overflow-y: scroll; padding: 4px 10px;">
                                    <li class="dropdown-item">Any</li>
                                    <li class="dropdown-item"><input type="checkbox" value="1" name="siteType"> 1 RK/1 BHK</li>
                                    <li class="dropdown-item"><input type="checkbox" value="2" name="siteType"> 2 BHK</li>
                                    <li class="dropdown-item"><input type="checkbox" value="3" name="siteType"> 3 BHK</li>
                                    <li class="dropdown-item"><input type="checkbox" value="4" name="siteType"> 4 BHK</li>
                                    <li class="dropdown-item"><input type="checkbox" value="5" name="siteType"> 5 BHK</li>
                                    <li class="dropdown-item"><input type="checkbox" value="6" name="siteType"> 6 BHK</li>
                                    <li class="dropdown-item"><input type="checkbox" value="7" name="siteType"> 7 BHK</li>
                                    <li class="dropdown-item"><input type="checkbox" value="8" name="siteType"> 8 BHK</li>
                                    <li class="dropdown-item"><input type="checkbox" value="9" name="siteType"> 9 BHK</li>
                                    <li class="dropdown-item"><input type="checkbox" value="10" name="siteType"> 9+ BHK</li>
                                </ul>-->
                            </div>
                            <div class="stype dropdown" style="float: right;">
                                    <input class="btn btn-default" type="reset" value="clear all" >
                            </div>
                        </div>
                        <!--Search Filters Ends Here-->
                    </div>
                    </div>
                </section>
            </form>
        </div>
        <!-- Search Box End-->


<!-- CAROUSEL FOR BUILDER -->

    <section id="our-projects">
        <div class="slider-div" id="slider">
            <div class="slider123">
                <div class="slides"  style="width: 250px,height: 250px;">
                    <img src="images/feature1.jpg" alt="" class="img-responsive">
                    <p>helloxyz-delhi</p>
                </div>

                <div class="slides" style="width: 250px,height: 250px;">
                    <img src="images/feature2.jpg" alt="" class="img-responsive">
                    <p>helloxyz-delhi</p>
                </div>

                <div class="slides" style="width: 250px,height: 250px;">
                    <img src="images/feature3.jpg" alt="" class="img-responsive">
                    <p>helloxyz-delhi</p>
                </div>

                <div class="slides">
                    <img src="images/feature4.jpg" alt="" class="img-responsive">
                    <p>
                    <p>helloxyz-delhi</p>
                    </p>
                </div>

                <div class="slides">
                    <img src="images/feature1.jpg" alt="" class="img-responsive">
                    <p>helloxyz-delhi</p>
                </div>
            </div>
        </div>

    </section>
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
    <!-- CAROUSEL END -->

  
<?php if(!isset($_POST['bsearch']) AND !isset($_POST['rsearch']) AND !isset($_POST['psearch']) AND !isset($_POST['csearch']) AND !isset($_POST['dsearch'])){ ?>
     <!-- PROPERTY LISTING -->
    <div class="row text-center" style="dispaly:flex; flex-wrap: wrap; padding:40px;margin: 0px;">

        <div class="col-md-3 col-sm-12">
            <div class="thumbnail gallery">
                <img src="images/feature1.jpg">
                <div class="caption">
                    <h4>80 lacs onwards</h4>
                    <h4>Upper Road 3411,
                     no.34 CA</h4>
                </div>
                <p>
                    <a href="details.php?pid=1" class="btn btn-primary">More Info</a>
                </p>
            </div>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="thumbnail gallery">
                <img src="images/feature2.jpg">
                <div class="caption">
                    <h4>80 lacs onwards</h4>
                    <h4>Delhi Housing Society, Dwarka</h4>
                </div>
                <p>
                    <a href="details.php?pid=2" class="btn btn-primary">More Info</a>
                </p>
            </div>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="thumbnail gallery">
                <img src="images/feature3.jpg">
                <div class="caption">
                    <h4>80 lacs onwards</h4>
                    <h4>Block H, Vikaspuri, Delhi, 110018</h4>
                </div>
                <p>
                    <a href="details.php?pid=3" class="btn btn-primary">More Info</a>
                </p>
            </div>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="thumbnail gallery">
                <img src="images/feature3.jpg">
                <div class="caption">
                    <h4>80 lacs onwards</h4>
                    <h4>kanhiya Nagar Tri Nagar ,Delhi,110035</h4>
                </div>
                <p>
                    <a href="details.php?pid=4" class="btn btn-primary">More Info</a>
                </p>
            </div>
        </div>
    </div>
    <!-- PROPERTY LISTING END -->
  <?php }
?>
<!--database search-->
<?php if(isset($_POST['bsearch']) || isset($_POST['rsearch']) || isset($_POST['psearch']) || isset($_POST['csearch']) || isset($_POST['dsearch'])){ 

if(isset($_POST['bsearch'])){
   $lo=$_POST['keyword'];
if(!isset($_POST['cs']))
{
    $xyz= NULL;
}
else{
    $xyz= $_POST['cs'];
}
if(!isset($_POST['budget']))
{
    $tr= NULL;
}
else{
    $tr= $_POST['budget'];
}
if(!isset($_POST['bedr']))
{
    $ct= NULL;
}
else{
    $ct= $_POST['bedr'];
}
   $sql="SELECT * FROM address 
   join project ON address.AddressId = project.AddressId 
   join floor_plan ON project.ProjectID = floor_plan.ProjectId
    WHERE 
    Status_of_Completion = IF(:xyz is NULL,Status_of_Completion,:xyz) 
    AND Sale_rate<=IF(:tr IS NULL,100, :tr) 
    AND bedroom=IF(:ct is NULL,bedroom,:ct) 
    AND (Location=:lo OR Street=:lo OR project.Property_Name=:lo OR project.Property_Type=:lo)";

   $stmt=$pdo->prepare($sql);
   $stmt->execute(array(":xyz"=>$xyz,":tr"=>$tr,":ct"=>$ct,":lo"=>$lo));


}

elseif(isset($_POST['rsearch'])){
$lo=$_POST['keyword'];
if(!isset($_POST['budget']))
{
    $tr= NULL;
}
else{
    $tr= $_POST['budget'];
}
if(!isset($_POST['bedr']))
{
    $ct= NULL;
}
else{
    $ct= $_POST['bedr'];
}
$sql="SELECT * FROM address join project ON address.AddressId = project.AddressId join floor_plan ON project.ProjectID = floor_plan.ProjectId
WHERE 
  Rental_rate=IF(:tr IS NULL,Rental_rate, :tr) AND 
 bedroom=IF(:ct IS NULL,bedroom, :ct) 
 AND (Location=:lo OR Street=:lo OR project.Property_Name=:lo OR project.Property_Type=:lo)";
   $stmt=$pdo->prepare($sql);
   $stmt->execute(array(":tr"=>$tr,":ct"=>$ct,":lo"=>$lo));
    
}

if(isset($_POST['psearch'])){
$lo=$_POST['keyword'];
if(!isset($_POST['budget']))
{
    $tr= NULL;
}
else{
    $tr= $_POST['budget'];
}
if(!isset($_POST['bedr']))
{
    $ct= NULL;
}
else{
    $ct= $_POST['bedr'];
}
$sql="SELECT * FROM address join project ON address.AddressId = project.AddressId join floor_plan ON project.ProjectID = floor_plan.ProjectId
WHERE 
   Sale_rate=IF(:tr IS NULL,Sale_rate, >=:tr) AND 
 bedroom=IF(:ct IS NULL,bedroom, :ct) 
 AND (Location=:lo OR Street=:lo OR project.Property_Name=:lo OR project.Property_Type=:lo)";
   $stmt=$pdo->prepare($sql);
   $stmt->execute(array(":tr"=>$tr,":ct"=>$ct,":lo"=>$lo));
    
}
?>
<div class="row text-center" id="propsearch" style="dispaly:flex; flex-wrap: wrap; padding:40px;margin: 0px;">
 <?php if($stmt->rowCount()>0)
    {  ?>
            <h1><?php echo 'PROPERTIES FOUND:' . "<br>" . "\n"; ?></h1>
            <?php echo "<br>" . "\n"; ?>
         <?php   
           $prop_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  $count=0;
  foreach ($prop_rows as $row){ 
           $count=$count+1;
           $pid= $row['ProjectId'];
     ?>
 
        <div class="col-md-3 col-sm-12" >
            <div class="thumbnail gallery ">
                 <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'">'?>
                <div class="caption">
                    <h4><?php echo htmlentities($row['Location']); ?></h4>
                    <h4><?php echo htmlentities($row['Property_Name']); ?></h4>
                </div>
                <p>
               <?php echo '<a href="details.php?pid=' . $pid. '" class="btn btn-primary" > More Info </a>'; ?>
                </p>
            </div>
        </div>

<?php
     if($count%4==0){
          ?>
          <div class="clearfix visible-md-block visible-lg-block"></div>
          <?php
     }     
}
 }
 else{?>
     <h1><?php echo 'PROPERTIES NOT FOUND:' . "<br>" . "\n"; ?></h1>
 <?php
}
?>
</div>
<?php
}
?>
<!-- End database search-->

<!--About US-->
<section>
    <div class="jumbotron aboutus" style="background-image: url(images/aboutus1.jpg); color:white; margin-bottom: 0px; background-position: center;background-repeat: no-repeat;background-size: cover;">
        <h1>ABOUT <span>US</span></h1>
        <div class="h-linetwo"></div>
        <p>Make Me Builder, aims to offer solutions in the construction market through partners including legal and
            financial experts, architecture and engineering consultants, construction materials, technology providers,
            and contractors.</p>
    </div>
</section>
<!--About US end-->

<!--  WHY US -->
    <section class="choice-section" style="background-image: url(images/Footer-Background-Image.png);">
        <div class="container">
            <link rel="stylesheet" href="css/whyus.css">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>What Makes Us <span>The Preferred Choice</span></h3>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 segment-three mb-30 mobile-footer">
                    <h4>Extensive Range of Properties:</h4>
                    <div class="h-line"></div>

                    <p>With extensive distribution
                        network, Cleverdeals
                        offer for properties is huge.</p>

                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 segment-three mb-30 mobile-footer">
                    <h4>Local Expert Brokers:</h4>
                    <div class="h-line"></div>
                    <p>We ensure that our brokers know
                        best how to fulfil our client needs
                        as the local expert in their
                        respective markets.</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 segment-three mb-30 mobile-footer">
                    <h4>Time Saving Services:</h4>
                    <div class="h-line"></div>
                    <p>Cleverdeals brokers conduct an
                        essential selection of those properties
                        that meet the client’s needs saving
                        the customer’s time.</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 segment-three mobile-footer">
                    <h4>Consolidate pool of Knowledge:</h4>
                    <div class="h-line"></div>
                    <p>Each broker is verified with knowlege in their respective markets.
                    </p>
                </div>
            </div>
        </div>
    </section>
<!--  WHY US -->


<!--footer-->
<footer id="footer">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

       <div class="container-fluid" style="background-image: url(images/footer.jpg);padding:30px" ;>
            <div class="row">
                <div class="col-lg-4 text-center">
                    <div class="footer-link mobile-footer-link">
                        <a href="#">
                            <img style="margin:0 0 20px 0" height="40" src="images/logo.jpg" class="footerlogo">
                        </a>
                    </div>
                </div>
                <!-- <div class="col-lg-8 col-md-8 col-sm-6 mb-30 mobile-footer"> -->
                <div class="col-lg-8 mb-30 mobile-footer">

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-30 mr-30 mobile-footer">
                            <div class="footer-link mobile-footer-link">
                                <div class="section-title mobile-title">
                                    <h4 class="title" style="color:white">About</h4>
                                </div>
                                <ul class="list-mark">
                                    <li><a href="/">About Us</a></li>
                                    <li><a href="/">Career</a></li>
                                    <li><a href="/">Privacy</a></li>
                                    <li><a href="/">Contact</a></li>
                                    <li><a href="/">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-30 mr-30 mobile-footer">
                            <div class="footer-link mobile-footer-link">
                                <div class="section-title mobile-title">
                                    <h4 class="title" style="color:white">Join MMB</h4>
                                </div>
                                <ul class="list-mark">
                                    <li><a href="/">Join as Franchise</a></li>
                                    <li><a href="/">Become MMB Agent</a></li>
                                    <li><a href="/">Why Buy with MMB</a></li>
                                    <li><a href="/">Why Sell with MMB</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-30 mr-30 mobile-footer">
                            <div class="footer-link mobile-footer-link">
                                <div class="section-title mobile-title">
                                    <h4 class="title" style="color:white">Agents and offices</h4>
                                </div>
                                <ul class="list-mark">
                                    <li><a href="/">Become an Agent</a></li>
                                    <li><a href="/">Find an Agent</a></li>
                                    <li><a href="/">Find an Office</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12 mb-30 mobile-footer">
                    <section class="kw-widget" id="subscribe_forms">
                        <h4 class="kw-widget-title n-t" style="color:white"><span>Sign up</span> to our newsletter</h4>
                        <h5 style="color:#337ab7;">and get the latest deals, reviews and articles</h5>
                        <form class="kw-newsletter-form kw-inline-form" method="">
                            <div class="kw-input-wrapper">
                                <input type="email" id="subemail" name="subemail" autocomplete="off"
                                    placeholder="Enter your email address..." class="footermail" required>
                            </div>
                            <!--/ .kw-input-wrapper -->
                            <br><button type="submit" class="btn btn-primary" name="newsletter_submit"
                                id="newsletter_submit">Subscribe</button>
                            <span id="subbsribe_succ" class="error-tool-tip" style="display: none;"></span>
                        </form>

                    </section>
                </div>
              </div>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 mb-30 mobile-footer">
                    <div class="footer-link mobile-footer-link">
                        <p class="dc-p" style="color:white"><span>Disclaimer:</span> </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-30 mobile-footer">
                    <h6 style="color:white">KEEP IN TOUCH</h6>
                    <div class="social-icons-color-hover">
                        <ul style="display: flex;">
                            <li class="social-facebook"><a href="https://www.facebook.com/makemebuilder"
                                   target="blank"><i class="fa fa-facebook"></i>  </a></li>
                            <li class="social-twitter"><a href="https://www.twitter.com/makemebuilder" target="blank"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="social-linkedin"><a href="https://www.linkedin.com/company/make-me-builder"
                                    target="blank"><i class="fa fa-linkedin"></i></a></li>
                            <li class="social-instagram"><a href="https://www.instagram.com/makemebuilder"
                                    target="blank"><i class="fa fa-instagram"></i></a></li>
                            <li class="social-youtube"><a
                                    href="https://www.youtube.com/channel/UCgAT37ZKm9z8F7CgLdkuHkQ" target="blank"><i
                                        class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </footer>

    <script>
        $(document).ready(function(){
            $('#buy').click(function(){
                $('#BuyModal').modal('show');
            });

            $('#rent').click(function(){
                $('#RentModal').modal('show');
            });    

        });

    </script>

<!--end footer-->
  </body>
</html>

