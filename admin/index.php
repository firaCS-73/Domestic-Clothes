<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
	<!-- CSS files-->
	<link rel="stylesheet" href="../fa/svg-with-js/css/fa-svg-with-js.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="css/admin-panel.css">-->
	<link rel="stylesheet" href="css/adminp.css">
</head>
<body>
	
	<!-- header secion-->
	<header>
		<div class="conntainer-fluid">
			<div class="header-content">
				<!-- slider place of header-->
				<div class="side-head">
					<span class="text-white" >Admin Panel</span> &nbsp;
					<i class="fas fa-bars menu-btn text-white"></i>
					
				</div>
				<!--head navigation bar-->
				<div class="header-nav">
					<ul>
						<li><a href="#"><i class="fas fa-shopping-basket"></i>Order</a></li>
						<li><a href="#"><i class="fas fa-truck"></i>Deliver</a></li>
						<li><a href="#"><i class="fas fa-users"></i>User</a></li>
						<li><a href="#"><i class="fas fa-sign-out-alt"></i>Log out</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<div class="wrapper">
	
		<section class="sidebar">
		
			<ul class="nav-bar">
				
			
				<li><a href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
				<li><a href="#"><i class="fas fa-dolly-flatbed"></i>Brand</a></li>
				<li><a href="#"><i class="fas fa-dolly"></i>Category</a></li>
				<li><a href="#"><i class="fas fa-shopping-basket"></i>Products</a></li>
				<li><a href="#"><i class="fas fa-truck"></i>Orders</a></li>
				<li><a href="#"><i class="fas fa-truck"></i>Delivery</a></li>
				<li><a href="#"><i class="fas fa-images"></i>Slider Images</a></li>
				<li><a href="#"><i class="fas fa-cogs"></i>Settings</a></li>
				<li><a href="#"><i class="fas fa-id-badge"></i>Profile</a></li>
				<li><a href="#"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
			
			</ul>
			
		</section>
		<section class="working-panel">
		
			<div class="container-fluid">
				<h1 class="display-4"> Welcome to Dashboard</h1>
				<hr>
				
				<div class="row">
				  <!--catagory widget-->
					<div class="col-md-3">
						
						<div class="card bg-orange-g  text-white">
						
							<div class="card-body">
								<h4 class="font-weight-light"><i class="fas fa-dolly"></i>All Catagory</h4>
								<hr>
								<h5>
									<b>12345</b>
								</h5>
							</div>
							
						</div>
						
					</div>
					<!-- all brands-->
					<div class="col-md-3">
						
						<div class="card bg-green-g  text-white">
						
							<div class="card-body">
								<h4 class="font-weight-light"><i class="fas fa-dolly-flatbed"></i>All Brands</h4>
								
								<hr>
								
								<h5>
									<b>655</b>
								</h5>
							</div>
							
						</div>
						
					</div>
					<!-- all users-->
					<div class="col-md-3">
						
						<div class="card bg-primary-g  text-white">
						
							<div class="card-body">
								<h4 class="font-weight-light"><i class="fas fa-users"></i>All Users</h4>
								
								<hr>
								
								<h5>
									<b>1500</b>
								</h5>
							</div>
							
						</div>
						
					</div>
					<!-- all orders-->
					<div class="col-md-3">
						
						<div class="card bg-golden-g text-white">
						
							<div class="card-body">
								<h4 class="font-weight-light"><i class="fas fa-truck"></i>All Orders</h4>
								
								<hr>
								
								<h5>
									<b>700</b>
								</h5>
							</div>
							
						</div>
						
					</div>
					
					
				</div>
				<div class="all-order" mt-5>
					<h2>New Orders</h2>
					<table class="table table-bordered table-hover"><hr>
					  <thead>
						<tr class="bg-primary text-white">
						  <th scope="col">Order No.</th>
						  <th scope="col">Product Name</th>
						  <th scope="col">Quantity</th>
						  <th scope="col">Date</th>
						  <th scope="col">Paid Status</th>
						  <th scope="col">Order Status</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <th scope="row">1</th>
						  <td>Mark</td>
							<td>3</td>
						  <td>30-3-2021</td>
							<td><span class="badge badge-danger">Unpaid</span></td>
							<td><span class="badge badge-success">Complete</span></td>
						</tr>
						<tr>
						  <th scope="row">2</th>
						  <td>Jacob</td>
							<td>1</td>
						  <td>30-3-2021</td>
							<td><span class="badge  badge-success">Paid</span></td>
							<td><span class="badge badge-info">Process</span></td>
						</tr>
						<tr>
						  <th scope="row">3</th>
						  <td>Larry the Bird</td>
							<td>15</td>
						  <td>30-3-2021</td>
						  <td><span class="badge  badge-success">Paid</span></td>
						  <td><span class="badge badge-danger">Rejected</span></td>
						</tr>
					  </tbody>
					</table>
					<div class="pagination">
						<nav aria-label="Page navigation example">
						  <ul class="pagination">
							<li class="page-item"><a class="page-link" href="#">Previous</a></li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">Next</a></li>
						  </ul>
						</nav>
					
					</div>
				</div>
			</div>
		</section>
		
	</div>
	
	
	
	
	
	<!-- JS files-->
	<script src="../js/jquery.js"></script>
	<script src="../fa/svg-with-js/js/fontawesome-all.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	
</body>
</html>