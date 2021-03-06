
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Billing Software</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <script src="assets/jquery/jquery.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
   <style>
	.notification .badge {
	  position: absolute;
	  top:0px;
	  padding:2px 5px;
	  border-radius: 50%;
	  background: red;
	  color: white;
	  margin-left: -16px;
	}
	.modal{
		padding: 0px 28px !important;
	}
	.mobile{
		display:none;
	}
	.system{
		display:block;
	}
	@media only screen and (max-width: 780px) {
     .mobile{
		display:block;
	}
	.system{
		display:none;
	}
	.mobile nav ul li a,.fa{
		color:black !important;
	}
	a{
		color:black;
	}
  }
}
   </style>
   

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
	<div class="sticky-top" style="height:900px;">
    <div class="border-right fixed-left" id="sidebar-wrapper">
	  
      <div class="sidebar-heading"><img src="images/logo.png" class="img-responsive img-fluid"></div>
      <div class="list-group list-group-flush mt-5">
	    <ul>
		    <li class="">
				<a href="dashboard.php">
					<i class="fa fa-home"></i>
					<span>Home</span>
				</a>
			</li>
			<hr class="hr-dashed hr-menu">
			<li class="">
				<a href="viewCat.php">
					<i class="fa fa-list-alt"></i>
					<span>Category</span>
				</a>
			</li>
			<hr class="hr-dashed hr-menu">
		    <li class="sidebar-dropdown">
			<a class="" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-product-hunt"></i>
					<span>Product</span> <i class="fa fa-caret-right float-right pt-2" style="font-size:15px;"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="upload-product.php"><i class="fa fa-plus" style="font-size:15px;"></i>Add Product</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="viewProducts.php"><i class="fa fa-eye" style="font-size:15px;"></i>View Product</a>
              </div>			
			</li>
			<hr class="hr-dashed hr-menu">
		    <li class="sidebar-dropdown">
			<a class="" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-institution"></i>
					<span>Store</span> <i class="fa fa-caret-right float-right pt-2" style="font-size:15px;"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="productlist_catwise.php"><i class="fa fa-list" style="font-size:15px;"></i>Store Detail</a>				
               <!-- <a class="dropdown-item" href="productlist_catwise.php">
				<i class="fa fa-list" style="font-size:15px;"></i>Category Wise List</a>-->
              </div>			
			</li>
			<hr class="hr-dashed hr-menu">
			<li class="">
				<a href="generate-bill.php">
					<i class="fa fa-fax"></i>
					<span>Generate Bill</span>
				</a>
			</li>
			<hr class="hr-dashed hr-menu">
			<li class="sidebar-dropdown">
			<a class="" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-cogs"></i>
					<span>Setting</span> <i class="fa fa-caret-right float-right pt-2" style="font-size:15px;"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="add-customer.php"><i class="fa fa-plus" style="font-size:15px;"></i>Add Customer</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="view-customer.php"><i class="fa fa-eye" style="font-size:15px;"></i>View Customer</a>
				<div class="dropdown-divider"></div>
                <a class="dropdown-item" href="addusers.php"><i class="fa fa-plus" style="font-size:15px;"></i>Add User</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="view-user.php"><i class="fa fa-eye" style="font-size:15px;"></i>View User</a>
              </div>
						
			</li>
			
			
		</ul> 
       
      </div>
    </div>
	</div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->	
	
    <div id="page-content-wrapper">


      <nav class="navbar navbar-expand-lg navbar-light border-bottom system">
        <!--<button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>-->
		<h3 style="text-shadow: 1px 1px 2px blue,0 0 0.2em darkblue;color: black;font-size: 30px;margin-left:30%;" class="text-uppercase">Billing Software</h3>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
		    <li class="nav-item mr-2 dropdown bell">
			   <a href="#" class=" nav-link notification" id="notice" data-toggle="dropdown">
				  <i class="fa fa-bell"  style="color:blue"></i>
				  
				  <span class="badge" >78</span>
				</a>
				<div class="dropdown-menu" style="background-color:white;">
					<a class="dropdown-item"  data-value="1" onclick="me();">8</a>';
				</div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" data-toggle="dropdown"><img src="images/user-icon.png" style="width:20px;height:20px"> <b>
			 SANJU</b></a>
			    <div class="dropdown-menu dropdown-menu-right" style="background-color:white;">
					<a class="dropdown-item" href="">View Profile</a>
					<a  class="dropdown-item"href="" data-toggle="modal" data-target="#myModal">Change Password</a>
				 
				  
				</div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php"><img src="images/logout.png" style="width:20px;height:20px"> <b>Logout</b></a>
            </li>
			
            
          </ul>
        </div>
      </nav>
	  
	  <nav class="navbar navbar-expand-lg navbar-light border-bottom mobile">
        <!--<button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>-->
		<h3 style="text-shadow: 1px 1px 2px blue,0 0 0.2em darkblue;color: black;font-size: 30px;margin-left:30%;" class="text-uppercase">Billing Software</h3>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
		    <li class="nav-item">
				<a href="dashboard.php" class="nav-link">
					<i class="fa fa-home"></i>
					<span>Home</span>
				</a>
			</li>
			<hr class="hr-dashed hr-menu">
			<li class="nav-item">
				<a href="viewCat.php" class="nav-link">
					<i class="fa fa-list-alt"></i>
					<span>Category</span>
				</a>
			</li>
			<hr class="hr-dashed hr-menu">
		    <li class="nav-item">
			<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-product-hunt"></i>
					<span>Product</span> <i class="fa fa-caret-right float-right pt-2" style="font-size:15px;"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" style="background-color:white;">
                <a class="dropdown-item" href="upload-product.php"><i class="fa fa-plus" style="font-size:15px;"></i>Add Product</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="viewProducts.php"><i class="fa fa-eye" style="font-size:15px;"></i>View Product</a>
              </div>			
			</li>
			<hr class="hr-dashed hr-menu">
		    <li class="nav-item">
			<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-institution"></i>
					<span>Store</span> <i class="fa fa-caret-right float-right pt-2" style="font-size:15px;"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" style="background-color:white;">
                <a class="dropdown-item" href="productlist_catwise.php"><i class="fa fa-list" style="font-size:15px;"></i>Store Detail</a>				
               <!-- <a class="dropdown-item" href="productlist_catwise.php">
				<i class="fa fa-list" style="font-size:15px;"></i>Category Wise List</a>-->
              </div>			
			</li>
			<hr class="hr-dashed hr-menu">
			<li class="nav-item">
				<a href="generate-bill.php" class="nav-link">
					<i class="fa fa-fax"></i>
					<span>Generate Bill</span>
				</a>
			</li>
			<hr class="hr-dashed hr-menu">
			<li class="nav-item dropdown">
			<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-cogs"></i>
					<span>Setting</span> <i class="fa fa-caret-right float-right pt-2" style="font-size:15px;"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" style="background-color:white;">
                <a class="dropdown-item" href="add-customer.php"><i class="fa fa-plus" style="font-size:15px;"></i>Add Customer</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="view-customer.php"><i class="fa fa-eye" style="font-size:15px;"></i>View Customer</a>
				<div class="dropdown-divider"></div>
                <a class="dropdown-item" href="addusers.php"><i class="fa fa-plus" style="font-size:15px;"></i>Add User</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="view-user.php"><i class="fa fa-eye" style="font-size:15px;"></i>View User</a>
              </div>		
			</li>
		    <li class="nav-item mr-2 dropdown bell">
			   <a href="#" class=" nav-link notification" id="notice" data-toggle="dropdown">
				  <i class="fa fa-bell"  style="color:blue"></i>
				  
				  <span class="badge" >SANJU111</span>
				</a>
				<div class="dropdown-menu" style="background-color:white;">
					
						<a class="dropdown-item"  data-value="1" onclick="me();">5</a>';
				</div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" data-toggle="dropdown"><img src="images/user-icon.png" style="width:20px;height:20px"> <b>
			 SANJU</b></a>
			    <div class="dropdown-menu dropdown-menu-right" style="background-color:white;">
					<a class="dropdown-item" href="">View Profile</a>
					<a  class="dropdown-item"href="" data-toggle="modal" data-target="#myModal">Change Password</a>
				 
				  
				</div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php"><img src="images/logout.png" style="width:20px;height:20px"> <b>Logout</b></a>
            </li>
			
            
          </ul>
        </div>
      </nav>
	  
	  <!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		   <h4>Change Password</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
		<form action="header.php" method="POST">
		<input type="hidden" value="TRUE" name="CHANGEPASS">
		  <div class="row">
		    <div class="col-md-12">
				<div class="form-group">
					<input type="text" name="Current_pwd" id="Current_pwd" placeholder="Enter Current Password" style="width:100%"> 		
				</div>		
			</div>
          </div>
		  <div class="row">
			<div class="col">
				<div class="form-group">
					<input type="text" name="change_pwd" id="change_pwd" placeholder="Enter New Password">
				</div>		
			</div>
			 <div class="col">
				<div class="form-group">
					<input type="text" name="confirm_pwd" id="confirm_pwd" placeholder="Confirm New Password"> 		
				</div>		
			</div>
          </div> 
		  <div class="row">
		    <div class="col-md-12">
				<center>
				
				<input type="submit" name="submit" class="btn btn-success btn-md" value="SUBMIT">
				</center>	
			</div>
          </div> 
			 
		</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- ----------------  END HEADER -------------------- -->

  @yield('Section')
  
<!-- Start footer --------------------->
   <style>
    @media only screen and (max-width: 780px) {
	 .footer p{
			 font-size:11px;
			 margin-bottom:0px;
		    padding-top:0px;
	 }
     .row{
		 margin-top:10px !important;
	 }	 
	}
 </style>
 <div class="container-fluid footer" style="bottom:0;position:fixed;width:100%">
	    <div class="row no-gutters" id="footer">
			<div class="col-md-4">
			  <p id="time"></p>
			</div>
			<div class="col-md-2"><p id="use">Login User: Sanju</p></div>
			<div class="col-md-6 float-left"><p>@copyright <?= date('Y'); ?> Design by <a href="" target="_blank" class="text-white">Sanju Developer</p></a></div>
		</div>
	  </div>
      
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <!-- Bootstrap core JavaScript -->
 
 
 <script>

    $(function(){

    
       setInterval(function()
        { 
          days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
          months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
          var date = new Date(); 
          var hours = date.getHours();
          var minutes = date.getMinutes();
          var ampm = hours >= 12 ? 'pm' : 'am';

          var datetime = days[date.getDay()]+ ","
                +date.getDate() + ","
                + months[date.getMonth()]  + "," 
                + date.getFullYear() + " @ "  
                + hours + ":"  
                + minutes + ":" 
                + date.getSeconds()+" "+ampm;
                $('#time').text(datetime);
        },1000);
    });
  </script>
  

</body>

</html>
