<?php
   require_once "pdo.php";
   
   session_start();
   
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>cleverdeals | Dashboard</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./css/style.css">
	<script src="./js/script.js"></script>
</head>
<body>
	<div class="container-fluid">
		<section id="searchbar">
			<div class="cover">
				<form method="POST" >
					<section id="searchbar-rows">
						<div class="tab-items">
							<div class="search-tabs">
								<a id="BuyTab" tabindex="0" class="active" href="javascript:void(0)" onclick="changeTab(0)">Buy</a>
								<a id="RentTab" tabindex="1" href="javascript:void(0)" onclick="changeTab(1)">Rent/ PG</a>
								<a id="ProjectTab" tabindex="2" href="javascript:void(0)" onclick="changeTab(2)">Projects</a>
								<a id="CommercialTab" tabindex="3" href="javascript:void(0)" onclick="changeTab(3)">Commercial</a>
								<a id="DealerTab" tabindex="4" href="javascript:void(0)" onclick="changeTab(4)">Dealers</a>
							</div>
						</div>
						<div id="activetab">
						<div id="searchbar-wraper">
							<div class='searchBox'>
								<div class="ptype dropdown">
									<a class="btn dropdown-toggle" type="button" data-toggle="dropdown">All Residential</a>
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
								<div class="ptype querybar">
									<input class="querybox" name="keyword" onfocus="showMenu()" onfocusout="hideMenu()"
										placeholder="Type Location or Project/Society or Keyword" type="text" autocomplete="off" required="field is required">
								</div>
								<input type="submit" class="btn btn-primary " id="submit_query" value="Search" name="bsearch"/>
							</div>
							<!--Search Filters Start Here-->
							<div class="filters fade hidden" onclick="this.classList.remove('fade');" style="margin-right: -20px;">
								<div class="stype dropdown">
									<div class="form-group">
                                        <select class="form-control" name="cs" >
                                            <option disabled hidden selected="">Construction Status</option>
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
                                            <option>5 </option>
                                            <option>10 </option>
                                            <option>15 </option>
                                            <option>20 </option>
                                            <option>25 </option>
                                            <option>30 </option>
                                            <option>35 </option>
                                            <option>40 </option>
                                            
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
								<div class="stype dropdown">
									<a class="btn dropdown-toggle" type="button" data-toggle="dropdown">Posted By</a>
									<ul class="dropdown-menu">
										<li class="dropdown-item"><input type="checkbox" value="0" name="siteType">Owner</li>
										<li class="dropdown-item"><input type="checkbox" value="1" name="siteType">Dealer</li>
										<li class="dropdown-item"><input type="checkbox" value="2" name="siteType">Builder</li>
									</ul>
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
		</section>
	</div>
	   <?php if(!isset($_POST['bsearch']) AND !isset($_POST['rsearch']) AND !isset($_POST['psearch']) AND !isset($_POST['csearch']) AND !isset($_POST['dsearch'])){ ?>
     <!-- PROPERTY LISTING -->
    <div class="row text-center" style="dispaly:flex; flex-wrap: wrap; padding:40px;margin: 0px;">

        <div class="col-md-3 col-sm-12">
            <div class="thumbnail gallery">
                <img src="imgs/feature1.jpg">
                <div class="caption">
                    <h4>80 lacs onwards</h4>
                    <h4>Upper Road 3411,
                     no.34 CA</h4>
                </div>
                <p>
                    <a href="#" class="btn btn-primary">More Info</a>
                </p>
            </div>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="thumbnail gallery">
                <img src="imgs/feature2.jpg">
                <div class="caption">
                    <h4>80 lacs onwards</h4>
                    <h4>Delhi Housing Society, Dwarka</h4>
                </div>
                <p>
                    <a href="#" class="btn btn-primary">More Info</a>
                </p>
            </div>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="thumbnail gallery">
                <img src="imgs/feature3.jpg">
                <div class="caption">
                    <h4>80 lacs onwards</h4>
                    <h4>Block H, Vikaspuri, Delhi, 110018</h4>
                </div>
                <p>
                    <a href="#" class="btn btn-primary">More Info</a>
                </p>
            </div>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="thumbnail gallery">
                <img src="imgs/feature3.jpg">
                <div class="caption">
                    <h4>80 lacs onwards</h4>
                    <h4>kanhiya Nagar Tri Nagar ,Delhi,110035</h4>
                </div>
                <p>
                    <a href="#" class="btn btn-primary">More Info</a>
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
   $sql="SELECT * FROM address join project ON address.AddressId = project.AddressId join floor_plan ON project.ProjectID = floor_plan.ProjectId
WHERE Status_of_Completion= IF(:xyz is NULL,Status_of_Completion,:xyz) AND  Sale_rate=IF(:tr IS NULL,Sale_rate, :tr) AND bedroom=IF(:ct is NULL,bedroom,:ct) AND Location=:lo";
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
  Sale_rate=IF(:tr IS NULL,Sale_rate, :tr) AND 
 bedroom=IF(:ct IS NULL,bedroom, :ct) AND Location=:lo";
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
 bedroom=IF(:ct IS NULL,bedroom, :ct) AND Location=:lo";
   $stmt=$pdo->prepare($sql);
   $stmt->execute(array(":tr"=>$tr,":ct"=>$ct,":lo"=>$lo));
	
}
?>
<div class="row text-center" style="dispaly:flex; flex-wrap: wrap; padding:40px;margin: 0px;">
 <?php if($stmt->rowCount()>0)
    {  ?>
            <h1><?php echo 'PROPERTIES FOUND:' . "<br>" . "\n"; ?></h1>
            <?php echo "<br>" . "\n"; ?>
         <?php   
           $prop_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  $count=0;
  foreach ($prop_rows as $row){ 
           $count=$count+1;
     ?>
 
        <div class="col-md-3 col-sm-12" >
            <div class="thumbnail gallery ">
                <!--<img src="upload/<?php echo $row['image']?>">-->
                <div class="caption">
                    <h4><?php echo htmlentities($row['Location']); ?></h4>
                    <h4><?php echo htmlentities($row['Property_Name']); ?></h4>
                </div>
                <p>
                    <a href="#" class="btn btn-primary">More Info</a>
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
</body>
</html>
