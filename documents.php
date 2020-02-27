<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ni-Just System</title>
	<link rel="stylesheet" href="css/samples.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="toolbarconfigurator/lib/codemirror/neo.css">
</head>
<body id="main">
<main>
	<div class="adjoined-top"  style="margin-top:0em;padding-top:0px">
		<div class="grid-container">
			<div class="content grid-width-100">
				<h1 style="font-family:Monotype corsiva;font-size:40px">
					<img src="img/coat.png" onerror="this.src='img/coat.png'; this.onerror=null;" alt="CKEditor Sample" style="height:100px;position:relative;bottom:-5px">Ni-JUST System
				</h1>
				<p style="font-size:13px">
					A Speech-to-text System for the Nigerian Judiciary Sytem 
				</p>
			</div>
		</div>
	</div>

		<div class="adjoined-bottom">
			<div class="grid-container">
				<div class="grid-width-100 grid-height-100" style="">
<h3 style="color:#fff">All Documents</h3><br/>
<?php 
$conn = mysqli_connect("localhost","root","","nijust") or die("Error Connecting");
$query = mysqli_query($conn,"SELECT * FROM dictations");
while($row = mysqli_fetch_array($query)){ 
?>
<div class="panel-group" id="accordion">

<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row["id"]; ?>"><?php echo substr($row["title"],0,50); ?></a>
</h4>
</div>
<div id="collapse<?php echo $row["id"]; ?>" class="panel-collapse collapse">
<div class="panel-body">
    <p align="right"><button class="btn btn-success"><span class="fa fa-edit"></span></button> <button class="btn btn-danger"><span class="fa fa-trash-o"></span></button></p>
<?php echo $row["dictation"]; ?></div>
</div>
</div>
<?php } ?>
</div>

				</div>
			</div>
		</div>



        <script src="jquery.min.js"></script>
	<script src="ckeditor.js"></script>
	<!--script src="js/sample.js"></script-->
        <script src="adapters/jquery.js"></script>
        <script src="script.js"></script>
        <script src="js/bootstrap.js"></script>
