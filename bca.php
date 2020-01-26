<?php 
	
	//$email = $_SESSION['user_name'];
	///extract($_POST);
// var_dump($name);die;
	$obj = new db();
	$qry = "select * from bca ";
	$row = $obj->show_data($qry);
	foreach($row as $res1)
	{
		
	}
	?>

	<div class="container mt-5">
		<div >
			<table class="table table-hover table-bordered table-responsive-sm table-dark">
				<thead class="thead-light">
				    <tr>
				      <th scope="col">S. No.</th>
				      <th scope="col">File Name</th>
				        <th scope="col">path</th>
				      <th scope="col">download</th>
	<?php
	$index=1;
	foreach ($row as $result)
		
	{	
		?>
		<tbody>
		<tr">
			<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
			<td><?php echo $index++; ?></td>
			<!-- <td><?php echo $result['id'];?></td>
  -->           <td><?php echo $result['file'];?></td>
  				 <td><?php echo $result['path_name'];?></td>

            <td><a href="admin/<?=$result['path_name']?>"download><button class="btn btn-primary" >download</button></a></td>
           	</tr>
		</tbody>
	<?php
	}
	echo '</table></div></div></div>';


?>
