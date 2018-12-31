<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RSS</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>		
<body>
	<div class="container list-quiz">
		<h1 class="page-header">Tổng hợp tin tức thể thao - RSS</h1>
		<div class="row my-content">
			<ul class="nav nav-pilis nav-justified">
				<li class="actived"><a href="#vnexpress" data-toggle="tab">VnExpress</a></li>
				<li><a href="#dantri" data-toggle="tab">Dân Trí</a></li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div id="vnexpress" class="tab-pane fade in active"></div>
				<div id="dantri" class="tab-pane fade"></div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		var loadDT = false;
		$(document).ready(function(){
			$('#vnexpress').load('load-data.php', {'type': 'vnexpress'});
			$('a[href=#dantri]').click(function(){
				if(loadDT == false){
					$('#dantri').load('load-data.php', {'type': 'dantri'});
				}
				loadDT = true;
			});
		});
	</script>
</body>
</html>