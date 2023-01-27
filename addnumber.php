<?php include 'inc/header.php';?>
<?php include 'inc/nav.php';?>





<div class="container">
  <form action="" method="post">
     <div class="form-contant">
        <div class="row">
		
		<?php
		
        // public function add_data($data){
        //     $std_name = $data['std_name'];
        //     $std_roll = $data['std_roll'];
        //     $std_img = $_FILES['std_img']['name'];
        //     $tmp_name = $_FILES['std_img']['tmp_name'];

        //     $query = "INSERT INTO students(std_name,std_roll,stg_img) VALUE('$std_name',$std_roll,'$std_img')";

        //     if(mysqli_query($this->conn, $query)){
        //         move_uploaded_file($tmp_name, 'upload/'.$std_img);
        //         return "Information Added Successfully";
        //     }
        // }




		if($_SERVER['REQUEST_METHOD']=='POST'){
			$name  = $_POST['name'];	
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$person= $_POST['person'];
			$city  = $_POST['city'];
			
			
				
		 if($name == ''){
		    echo '<h3>Name feild must not be empty</h3>';
		 }
		 
		 if($phone == ''){
		    echo '<h3>phone feild must not be empty</h3>';
		 }
		 if (strlen((string)$phone)!==11) {
			echo '<h3>please enter a valid number</h3>';
		 }
		 if($email == ''){
		    echo '<h3>email feild must not be empty</h3>';
		 }
		 
		 if($person == ''){
		    echo '<h3>person feild must not be empty</h3>';
		 }
		 
		 if($city == ''){
		    echo '<h3>city feild must not be empty</h3>';
		


		}else{
		 
         $insert = "INSERT INTO contact_name(names,phone,email,person,city)values('$name','$phone','$email','$person','$city')";

         $insert_result = $conn->query($insert);
		 
		 if($insert_result){
		   echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Done!</strong> Date inserted successfully.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		 }else{
		    echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Wrong!</strong> Date  not inserted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		 }
		 
		 
	}	 
			
	
	}	
		?>
		
		
           <div class="col-sm-12"> 
				   <div class="form-head-add">
					  <h3>Contact Number Management System</h3>
				   </div>
		
	  <div class="form-box">
	  
				 <div class="form-group">
					<label>Name : </label>
					<input type="text" class="form-control"  name="name" placeholder="Enter Contact Name" required autocomplete >
				 </div>
				 
				 <div class="form-group">
					<label>Phone Number : </label>
					<input type="text" class="form-control"  name="phone" placeholder="Enter Phone Number" required maxlength="11" autocomplete>
				 </div>
				 
				 <div class="form-group">
					<label>Email : </label>
					<input type="email" class="form-control"  name="email" placeholder="Enter Email" required autocomplete>
				 </div>
				 
				 
				 <div class="form-group">
					<label>Person Status : </label>
						 <select name="person"  class="form-control" required>
							  <option>Select Person Status</option>
							  <option value="Family">Family</option>
							  <option value="Friend">Friend</option>
							  <option value="Coworker">Coworker</option>
							  <option value="Relative">Relative</option>
							  
						</select>
				 </div>
			 
				 <div class="form-group">
					<label>City : </label>
					<input type="text" class="form-control"  name="city" placeholder="Enter City name" required autocomplete>
				 </div>
		   </div> 
	     </div>
		 
		 <div class="col-sm-offset-4 col-sm-4">
                  <div class="form-group create">
		           <button type="submit" class="btn btn-block" name="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;&nbsp;Create</button>
	              </div>
         </div>
		 
       </div> 
    </div>
 </form>
</div>
<?php include'inc/footer.php';?>
