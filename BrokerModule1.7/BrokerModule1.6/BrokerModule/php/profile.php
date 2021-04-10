<?php
  session_start();

  $_SESSION['valid'] = true;
  $_SESSION['FirstName'] = "Some";
  $_SESSION['LastName'] = "Dude";
  $_SESSION['UserName'] = "SomeDude";
  $_SESSION['Email'] = "somedude@gmail.com";
  $_SESSION['Number'] = 1234567890;
  $_SESSION['Address1'] = "201, Some Flats, Near Building";
  $_SESSION['Address2'] = "Colony Y";
  $_SESSION['City'] = "City1";
  $_SESSION['State'] = "SomeState";
  $_SESSION['Pincode'] = 123456;
  $_SESSION['Experience'] = 3;
  $_SESSION['profile_image'] = '../images/profileimg.jfif';
  $_SESSION['Turnover'] = 3000000;
  $_SESSION['RERA'] = 1234567;
  $_SESSION['Temp'] = "Data here";

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>User Profile Page</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css'><link rel="stylesheet" href="../css/profile_style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="../js/profile.js"></script>
</head>

<body>
<!-- partial:index.partial.html -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<body>
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="127.0.0.1:550/index.html" target="_blank">CleverDeals</a>
        <!-- Form -->
        <!-- <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form> -->
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Profile Picture" src="<?php echo $_SESSION['profile_image']?>">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['FirstName']." ".$_SESSION['LastName'] ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span onClick="logout(this)">Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(<?php echo $_SESSION['profile_image']?>); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?php echo $_SESSION['FirstName'] ?></h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your buy or sell requests.</p>
            <a href="#!" class="btn btn-info">Edit profile</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-6 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <!-- <div class="card-profile-image">
                   <a href="#">
                    <img src="<?php echo $_SESSION['profile_image']?>" class="rounded-circle">
                    <span class="avatar avatar-sm rounded-circle">
                      <img alt="Profile Picture" src="<?php echo $_SESSION['profile_image']?>">
                    </span>
                  </a>
                </div> -->
              </div>
            </div>
            <div class="card-header border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <p><b>Looking to become an impaneled CleverDeals broker?</b></p>
              <p>Fill in the form below to your lesiure, and submit the information for processing once you've filled all fields! <p>
              <hr class="my-4">
                
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex">            
                    <!-- IMPANELED BROKER FORM -->
                    <form class="flex-fill">
                      <div class="row">
                        <div class="col">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-turnover">Turnover</label>
                            <input type="number" id="input-turnover" class="edit-data-turnover form-control form-control-alternative" placeholder="Amount in Rs." value="<?php echo $_SESSION['Turnover'] ?>">
                            <!-- <p class="display-data display-data-turnover ni mr-2 big-text"><?php echo $_SESSION['Turnover'] ?></p> -->
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-rera">RERA Certification No.</label>
                            <input type="text" id="input-rera" class="edit-data-rera form-control form-control-alternative" placeholder="RERA Certification Number" value="<?php echo $_SESSION['RERA'] ?>">
                            <!-- <p class="display-data display-data-rera ni mr-2 big-text"><?php echo $_SESSION['RERA'] ?></p> -->
                          </div>
                        </div>
                      </div>
                      
                      <hr class="my-4">
                      <!-- Education -->
                      <h6 class="heading-small text-muted mb-4">Education</h6>
                      <div class="pl-lg-4">
                        <div class="form-group focused">
                          <div class="row">
                            <div class="col">
                              <label class="form-control-label" for="input-education">Highest Educational Qualification</label>
                            </div>
                            <div class="col">
                              <select name="Education">
                              <option value="SSC">Secondary School Certification</option>
                              <option value="HSC">Higher Secondary Certification</option>
                              <option value="bachelors" selected>Bachelor's Degree</option>
                              <option value="masters">Master's Degree</option>
                              </select>
                            </div>
                          </div>  
                        </div>
                      </div>
                      
                      <!-- Other Details-->
                      <hr class="my-4">
                      <div class="row pl-lg-3">
                        <h6 class="heading-small text-muted mb-4">Other Relevant Skills</h6>
                      </div> 
                        <div class="pl-lg-4">
                          <div class="form-group focused">
                            <div class="row">
                            <label class="form-control-label" for="input-username">Language Proficiency</label>
                            </div>
                            <div class="row">
                              <div class="col">
                                <input type = "checkbox" name = "lang" value = "English">&nbsp&nbspEnglish  
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">  
                                <input type = "checkbox" name = "lang" value = "Hindi">&nbsp&nbspHindi
                              </div>
                            </div>
                            <div class = "row">
                              <div class = "h-50 my-auto col-lg-2">
                                <input class="" type="checkbox" name = "lang" value = "Other">&nbsp&nbspOther
                              </div>
                              <div class = "col-lg-10">
                                <input type='text' class="w-50 form-control form-control-alternative">
                              </div>
                            </div>
                            
                          </div>                    
                        </div>

                      <hr class="my-4">
                      <!-- Past Work Experience -->
                      <div class="row">
                        <div class="col">
                          <h6 class="heading-small text-muted mb-4">Previous Work Experience</h6>
                        </div>
                        <div class="col">
                          <button style="float: right;" type="button" class="btn btn-circle btn-sm btn-outline-secondary" onClick="addExp(); return false;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-supported-dps="24x24" fill="currentColor" class="mercado-match" width="20" height="20" focusable="false">
                              <path d="M21 13h-8v8h-2v-8H3v-2h8V3h2v8h8z"></path>
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="row">
                        <div class="row pl-lg-4 flex-fill mr-lg-3">
                            <div class="col">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-username">Position</label>
                                    <input type="text" id="input-position" class="form-control form-control-alternative" placeholder="Manager">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-company">Company Name</label>
                                    <input type="text" id="input-company" class="form-control form-control-alternative" placeholder="ABC Pvt. Ltd.">
                                </div>
                            </div>
                        </div>    
                    
                        <div class="row pl-lg-4 flex-fill mr-lg-3">
                            <div class="col">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-refName">Reference Name</label>
                                    <input type="text" id="input-refName" class="form-control form-control-alternative" placeholder="Mr. Bossman">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-refNum">Reference Contact Number</label>
                                    <input type="tel" id="input-refNum" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control form-control-alternative" placeholder="9998887777">
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="exp-box"> 
                      </div>
                       
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <button id="edit-btn" value="edit" class="btn btn-sm btn-primary" onClick="edit_profile(this)">Edit Profile</button>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="edit-data-username edit-data form-control form-control-alternative" placeholder="Username" value="<?php echo $_SESSION['UserName'] ?>">
                        <p class="display-data display-data-username ni mr-2 big-text"><?php echo $_SESSION['UserName'] ?></p>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="edit-data edit-data-email form-control form-control-alternative" placeholder="<?php echo $_SESSION['Email'] ?>">
                        <p class="display-data display-data-email ni mr-2 big-text"><?php echo $_SESSION['Email'] ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="edit-data edit-data-fname form-control form-control-alternative" placeholder="First name" value="<?php echo $_SESSION['FirstName'] ?>">
                        <p class="display-data display-data-fname ni mr-2 big-text"><?php echo $_SESSION['FirstName'] ?></p>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="edit-data edit-data-lname form-control form-control-alternative" placeholder="Last name" value="<?php echo $_SESSION['LastName'] ?>">
                        <p class="display-data display-data-lname ni mr-2 big-text"><?php echo $_SESSION['LastName'] ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address-1">Address Line 1</label>
                        <input id="input-address-1" class="edit-data edit-data-address1 form-control form-control-alternative" placeholder="Home/Flat Number" value="<?php echo $_SESSION['Address1'] ?>" type="text">
                        <p class="display-data display-data-address1 ni mr-2 big-text"><?php echo $_SESSION['Address1'] ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address-2">Address Line 2</label>
                        <input id="input-address-2" class="edit-data edit-data-address2 form-control form-control-alternative" placeholder="Landmarks/Locality" value="<?php echo $_SESSION['Address2'] ?>" type="text">
                        <p class="display-data display-data-address2 ni mr-2 big-text"><?php echo $_SESSION['Address2'] ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="edit-data edit-data-city form-control form-control-alternative" placeholder="City" value="<?php echo $_SESSION['City'] ?>">
                        <p class="display-data display-data-city ni mr-2 big-text"><?php echo $_SESSION['City'] ?></p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-state">State</label>
                        <input type="text" id="input-state" class="edit-data edit-data-state form-control form-control-alternative" placeholder="State" value="<?php echo $_SESSION['State'] ?>">
                        <p class="display-data display-data-state ni mr-2 big-text"><?php echo $_SESSION['State'] ?></p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-postal-code">Postal code</label>
                        <input type="number" id="input-postal-code" class="edit-data edit-data-pincode form-control form-control-alternative" placeholder="Postal code" value="<?php echo $_SESSION['Pincode'] ?>">
                        <p class="display-data display-data-pincode ni mr-2 big-text"><?php echo $_SESSION['Pincode'] ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                    <label>Experience</label>
                    <div class="row">
                    <span class="big-text">I have an experience of&nbsp</span>
                    <input type='number' class="edit-data edit-data-experience form-control form-control-alternative" style="width:10%; height:calc(2rem + 2px)" value="<?php echo $_SESSION['Experience'] ?>">
                    <span class="display-data display-data-experience ni mr-2 big-text"><?php echo $_SESSION['Experience'] ?></span>
                    <span class="big-text">years</span> </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script>
  // function logout(obj){
  //   <?php 
  //   session_unset(); 
  //   header("Location: ../index.php"); 
  //   ?> 
  // }
</script>
</body>
</html>
