<?php include "header.php";?>
<h3 align="center" class="text-primary mt-3 ">UPLOAD DATA</h3>
 <div class="container pt-5">
<div class="row">
    <div class="col wow bounceInLeft">
      
        <div class="card-body">
          <h4 class="card-title">INSERT PAPER FOR BCA</h4>
          <div class="form-group">
          <form method="post" role="form" enctype="multipart/form-data"action="index.php?page=uploaddata" >
          <div class="input-group"> 
	<input type="text" name="file" id="file" accept="application/pdf" />
	<a href="../index.php?page=bca">
	<button id="send" type="submit" name="upload" class="btn btn-success">Submit
		</button></a>

</form>
</div>
          
        </div>
      </div>
    </div>

     <div class="col ">
     
        <div class="card-body">
          <h4 class="card-title">INSERT PAPER FOR MCA</h4>
          <div class="form-group">
          <form method="post" role="form" enctype="multipart/form-data"action="index.php?page=formmca" >
          <div class="input-group"> 
	<input type="file" name="file" id="filemca" accept="application/pdf" />
	<a href="../index.php?page=mca">
	<button id="sendmca" type="submit" name="upload" class="btn btn-success">Submit
		</button></a>

</form>
</div>
                   </div>
      </div>
    </div>

    <div class="col wow bounceInRight">
     
        <div class="card-body">
        <h4 class="card-title">INSERT PAPER FOR MSC</h4>
          <div class="form-group">
          <form method="post" role="form" enctype="multipart/form-data"action="index.php?page=mscupload" >
          <div class="input-group"> 
	<input type="file" name="file" id="file" accept="application/pdf" />
	<a href="../index.php?page=msc">
	<button id="sendmsc" type="submit" name="upload" class="btn btn-success">Submit
		</button></a>

</form>
</div>
        </div>
      </div>
    </div>
  </div>
  </div>
