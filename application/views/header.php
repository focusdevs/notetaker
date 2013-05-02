<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Note Taker</title>
		<link href="<?php echo base_url(); ?>../css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>../css/bootstrap-responsive.min.css" rel="stylesheet" />
	<style>
	* {margin:0;padding:0;}
	html, body {background:#eee;}
	.container-fluid {min-width:50%;margin:2% 25%;}
	.entry {background:#fff;border-radius:6px 6px 6px 6px;padding:2.5% 4%;margin:1% 0%;position:relative;border:2px solid #e9e9e9;-webkit-box-shadow:0px 4px 2px rgba(, 0, 0, .1);box-shadow:   0px 4px 2px rgba(, 0, 0, .1);}
	.entry .owner {position:absolute;border-radius:6px 0px 6px 0px;bottom:0px;right:0px;height:50px;width:50px;}
	.delete-btn {top:0;left:0;height:25px;width:25px;position:absolute;}
	</style>
	</head>
	<body>
		<div class="navbar navbar-inverse">
			<div class="navbar-inner" style="border-radius:0;padding:1% 2%;">
				<div class="row-fluid">
				<a class="brand" href="#">FocusNotes</a>
				<ul class="nav">
					<li>
						<select name="clients" class="list">
							<option value="">-- Select Client --</option>
							<?php foreach($clients as $client) { ?>
								<option value="<?=$client['id'];?>"><?=$client['domain'];?></option>
							<?php } ?>
						</select>
					</li>
				</ul>
				<ul class="pull-right">
					<li><a href="/focusmx/notes/index.php/home/clients/">Add Client</a></li>
				</ul>
				</div>
			</div>
        </div>
		<div class="container-fluid">
			
			
			
			
			
			
			
			
			