<?php
include("conn.php");
include("emp_menu.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>New conection</title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	
	</head>
	<body style="padding-top:50px">
	
	<div class="row">
	
	<form method="post" action="" enctype="multipart/form-data">
		<div class="col-sm-4">
			<img src="image/zz.jpeg"  width="390" height="1700" class="img-rectangle" >
		</div>
		<div class="col-sm-7">
		
		<h1><b><u>New Connection Info</u></b></h1><br>
		<div class="form-group">
				<label class="txt">Connection type :</label>
				<select class="form-control" name="type">
				<option>Select</option>
					<?php
					$query="select * from unit";
					$record=mysql_query($query);
					while($data=mysql_fetch_array($record))
					{
						?>
					<option><?php echo $data[0];?></option>
					<?php
					}	?>
				</select>
				</div>
				<div class="form-group">
				<label class="txt">Unit :</label>
				<input type="number"name="unit" class="form-control"></div>
				<div class="form-group">
				<label class="txt">Division :</label>
				<select class="form-control" name="div">
				<option>Select</option>
					<?php
					$query1="select * from division";
					$record=mysql_query($query1);
					while($data=mysql_fetch_array($record))
					{
						?>
					<option><?php echo $data[1];?></option>
					<?php
					}	?>
				</select>
			</div>
			<div class="form-group">
				<label class="txt">Applicant name :</label>
			<input type="text"name="appl_name" class="form-control"pattern="[A-Za-z]{2,}"></div>
			<div class="form-group">
				<label class="txt">Father's name :</label>
			<input type="text"name="fhname" class="form-control" pattern="[A-Za-z]{2,}"></div>
			<div class="form-group">
				<label class="txt">Date of birth :</label>
			<input type="date"name="date" class="form-control"></div>
			<div class="form-group">
			<label class="txt">Gender: </label>
				<h4><input type="radio" name="gender" value="male">Male &nbsp;
				 <input type="radio" name="gender" value="female">Female</h4>
			</div>
			<div class="form-group">
				<label class="txt">Occupation :</label>
			<input type="text"name="occupation" class="form-control" pattern="[A-Za-z]{2,}"></div>
			<div class="form-group">
				<label class="txt">City/Village name :</label>
			<input type="text"name="city" class="form-control" pattern="[A-Za-z]{2,}"></div>
			<div class="form-group">
				<label class="txt">Street no. :</label>
			<input type="text"name="street" class="form-control"pattern="[0-9A-Za-z]{1,}"></div>
			<div class="form-group">
				<label class="txt">Plot/Flat no. :</label>
			<input type="number"name="plot" class="" pattern="[0-9A-Za-z]{1,}"></div>
			<div class="form-group">
				<label class="txt">Pin code :</label>
			<input type="number"name="pin" class="form-control" pattern="[0-9]{6}"></div>
			<div class="form-group">
				<label class="txt">Email :</label>
			<input type="email"name="email" class="form-control"></div>
			<div class="form-group">
				<label class="txt">mobile no. :</label>
			<input type="number"name="num" class="form-control" pattern="[0-9]{10,12}"></div>
			<div class="form-group">
				<label class="txt">Photo :</label>
				<input type="file"name="img1"class="form-control"placeholder="file not choosen"></div>
			
			<div class="form-group">
				<label class="txt">Address proof :</label>
				<input type="file"name="img2"class="form-control"placeholder="file not choosen"></div>
				<div class="form-group">
				<label class="txt">Add file :</label>
				<input type="file"name="img3"class="form-control"placeholder="file not choosen"></div>
				<div class="form-group">
				<label class="txt">Identity proof :</label>
				<input type="file"name="img4"class="form-control"placeholder="file not choosen"></div>
			<div class="form-group">
				<label class="txt">Id file :</label>
			<input type="text"name="file" class="form-control"></div>
			<div class="form-group">
				<label class="txt">District :</label>
				<select class="form-control" name="district">
				<option>Select</option>
					<option>Aara</option>
					<option>Begusarai</option>
					<option>Patna</option> 
				</select>
			</div>
			<button type="submit"name="b1"class="btn btn-lg btn-info btn-success" value="submit">Insert</button>
			<button type="button" class="btn btn-lg   btn-success" data-toggle="modal"  data-target="#myModal2">view</button>
			 <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Submitted details</h4>
        </div>
        <div class="modal-body">
        <?php
        $query2="select * from new_connection order by con_id desc limit 1";
        $record2=mysql_query($query2);
        $data2=mysql_fetch_array($record2);
        ?>
          <table class="table tb resposive">
		<table class="table table-bordered tab">
		<tr><td colspan="2"><center><img src="<?php echo $data2[15]?>" width="100px" height="100px"style="padding-top:0;padding-left:30px;" class="img-circle"></center></td></tr>
	
<tr><td>Consumer id</td><td><?php echo $data2[0];?></td></tr>
<tr><td>Applicant name</td><td><?php echo $data2[4];?></td></tr>
<tr><td>Date of birth</td><td><?php echo $data2[6];?></td></tr>
<tr><td>Email</td><td><?php echo $data2[7];?></td></tr>
<tr><td>Gender</td><td><?php echo $data2[13];?></td></tr>
<tr><td>Father's name</td><td><?php echo $data2[5];?></td></tr>
<tr><td>Occupation</td><td><?php echo $data2[8];?></td></tr>
<tr><td>Mobile no.</td><td><?php echo $data2[14];?></td></tr>
<tr><td>City/Village name</td><td><?php echo $data2[9];?></td></tr>
<tr><td>Street no.</td><td><?php echo $data2[10];?></td></tr>
<tr><td>Plot/Flat no.</td><td><?php echo $data2[11];?></td></tr>
<tr><td>District</td><td><?php echo $data2[21];?></td></tr>
<tr><td>Pincode</td><td><?php echo $data2[12];?></td></tr>
<tr><td>Division</td><td><?php echo $data2[3];?></td></tr>
<tr><td>Unit</td><td><?php echo $data2[2];?></td></tr>
<tr><td>Connection type</td><td><?php echo $data2[1];?></td></tr>



	
</table></table>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
        
      
      
    </div>
  </div>
  
</div>
		</div>
		
			<button type="button"name="b2"class="btn btn-lg  btn-info btn-warning" data-toggle="modal" data-target="#myModal">Manage</button>
			<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">For Modification</h4>
        </div>
        <div class="modal-body">
          <table class="table tb resposive">
		<table class="table table-bordered tab">
		<thead>
	<tr class="danger">
		<th>consumer-id</th><th>Applicant name</th><th></th><th></th>
	</tr>
	</thead>
		<?php
$query="select * from new_connection";
$record=mysql_query($query);
while($data=mysql_fetch_array($record))
{
	?>
<tbody>
<tr class="info">
	<td><?php echo $data[0];?></td>
	<td><?php echo $data[4];?></td>
	<td><a href="update_connection.php?id=<?php echo $data[0];?>" class="btn btn-md btn-primary">Edit</a></td>
	<td><a href="connection_delete.php?can_id=<?php echo $data[0];?>" class="btn btn-md btn-danger">delete</a></td>
</tr>
</tbody>
<?php
}?>
</table></table>
			
		</div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
        
      
      
    </div>
  </div>
  
</div>
			
		</div>
		</div>
		</form>
		</div>
		</body>
</html>

<?php
if(isset($_POST['b1']))
 {
$con_type=$_POST['type'];
$unit=$_POST['unit'];
$division=$_POST['div'];
$applicant_date=$_POST['appl_name'];
$fh_name=$_POST['fhname'];
$dob=$_POST['date'];
$gender=$_POST['gender'];
$occupation=$_POST['occupation'];
$city_vill_name=$_POST['city'];
$street_no=$_POST['street'];
$plot_flat_no=$_POST['plot'];
$pin_code=$_POST['pin'];
$email=$_POST['email'];
$mob_no=$_POST['num'];
$ft1=$_FILES['img1']['tmp_name'];
$fn1=$_FILES['img1']['name'];
$fpath1="con_pic/".$fn1;
move_uploaded_file($ft1,$fpath1);
$ft2=$_FILES['img2']['tmp_name'];
$fn2=$_FILES['img2']['name'];
$fpath2="address_pic/".$fn2;
move_uploaded_file($ft2,$fpath2);
$ft3=$_FILES['img3']['tmp_name'];
$fn3=$_FILES['img3']['name'];
$fpath3="file_pic/".$fn3;
move_uploaded_file($ft3,$fpath3);
$ft4=$_FILES['img4']['tmp_name'];
$fn4=$_FILES['img4']['name'];
$fpath4="iden_pic/".$fn4;
move_uploaded_file($ft4,$fpath4);
$id_file=$_POST['file'];
$district=$_POST['district'];

$query="insert into new_connection (con_type,unit_1,division_1,applicant_name,fh_name,dob,gender,occupation,city_vill_name,street_no,plot_flat_no,pin_code,email,mob_no,photo,address_proof,add_file,identity_proof,id_file,district,status_2) values('$con_type','$unit','$division','$applicant_date','$fh_name','$dob','$gender','$occupation','$city_vill_name','$street_no','$plot_flat_no','$pin_code','$email','$mob_no','$fpath1','$fpath2','$fpath3','$fpath4','$id_file','$district','active')";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('data inserted')</script>";
	echo"<script>window.location.href='new_conection.php' </script>";
}
else{
	echo"<script>alert('data not inserted')</script>";
	
}
}
?>
