<?php include'inc/header.php';?>
<?php include'inc/nav.php';?>
<?php include'db/db_connect.php';?>

  <div class="container">
     <div class="form-control form-contant2">
        <div class="row">
	        	<div class="col-sm-12">
					<div class="card contact_list">
						<div class="card-header form-head">
							<h3>Contact Number Management System</h3>
						</div>

				 		<div class="d-grid gap-2 add-number">
				 			<a href="addnumber.php" class="btn btn-success">Create New Contac</a>
						</div>
						<div class="card-body">
						    <div class="card-text">
						    	<p>This is Your Contact lists</p>
						    </div>
		<div class="table-responsive col-sm-12 table-top">
	     
	      <table class="table table-bordered table-condensed table-hover">
		
				<tr>
					  <th>Id</th>
					  <th>Name</th>
					  <th>Phone Number</th>
					  <th>email</th>
					  <th>Person Status</th>
					  <th>City</th>
					  <th colspan="2">Action</th>
				 </tr>
			 
			 
			 <?php 
			 
			$id_sql = "select * from contact_name";
		  
		   $id_query = $conn->query($id_sql);
		  
		   while($result = $id_query->fetch_assoc()){?>
			    <tr>
					 
					  <td><?php echo $result['ID'];?></td>
					  <td><?php echo $result['names'];?></td>
					  <td><?php echo $result['phone'];?></td>
					  <td><?php echo $result['email'];?></td>
					  <td><?php echo $result['person'];?></td>
					  <td><?php echo $result['city'];?></td>
					  <td class="edit">
					  
					     <a href=""><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp; &nbsp;&nbsp;Edit</a>
						 
						</td>
					  <td class="delete">
					     <a href="">
					      <i class="fa fa-trash" aria-hidden="true"></i>&nbsp; &nbsp;&nbsp;Delete
						 </a>
						</td>
				 </tr>
				 <?php }?>
			 

				</table>
		      </div> 
						</div>
					</div>
			</div>
           <div class="col-sm-12"> 

	            

	       </div>
        </div> 
     </div>
</div>
<?php include'inc/footer.php';?>


