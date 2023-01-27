<?php include'inc/header.php';?>
<?php include'inc/nav.php';?>

<div class="container">
   <form action="" method="post">
     <div class="form-contant-edit">
        <div class="row">
           <div class="col-sm-12"> 
				   <div class="form-head-edit">
					  <h3>Contact Number Management System</h3>
				   </div>
			
             <div class="form-box"> 
			 <div class="form-group">
					<label>Name : </label>
					<input type="text" class="form-control" name="name" required autocomplete>
				 </div>
				 
				 <div class="form-group">
					<label>Phone Number : </label>
					<input type="text" class="form-control" name="phone" required autocomplete>
				 </div>
				 
				 <div class="form-group">
					<label>Email : </label>
					<input type="email" class="form-control" name="email"required autocomplete>
				 </div>
				 
				 <div class="form-group">
					<label>Person Status : </label>
						<select name="person"  class="form-control">
							  <option>Select Person Status</option>
							  <option>Family</option>
							  <option>Friend</option>
							  <option>Coworker</option>
							  <option>Relative</option>
							  
						</select>
				 </div>
			 
				 <div class="form-group">
					<label>City : </label>
					<input type="text" class="form-control" name="city"required autocomplete>
				 </div>
			 

				 
			  </div>  
			

			  
		   </div> 

	     </div>
		 
		 <div class="col-sm-offset-4 col-sm-4">
                  <div class="form-group create">
		           <button type="submit" class="btn btn-block" name="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;&nbsp;Update</button>
	              </div>
         </div>
		 
       </div> 
       
    
 </form>

  </div>
  
<?php include'inc/footer.php';?>