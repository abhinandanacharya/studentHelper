<?php 
	
	//$email = $_SESSION['user_name'];
	///extract($_POST);
	$obj = new db();
	$qry = "select * from mca ";
	$row = $obj->show_where($qry);
	// print_r($row); exit();
	foreach($row as $res1)
	{
		
	}
	//if (count($row) > 0){
	?>

	<div class="container">
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
  -->           <td><?php echo $result['file_name'];?></td>
  				 <td><?php echo $result['file_path'];?></td>

              <td><a href="admin/<?=$result['file_path']?>"download><button class="btn btn-primary" >download</button></a></td>
           	</tr>
		</tbody>
	<?php
	}
	echo '</table></div></div></div>';



