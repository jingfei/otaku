<!DOCTYPE html>
<html style="height:100%;width:100%">
<head>
	<title>otaku fashion</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="user.css" />
	<script src="js/jquery-1.2.6.min.js" type="text/javascript"></script>
	<script src="js/masonry.pkgd.min.js"></script>
<script>
jQuery(window).load(function(){
	$(".plan").each(function(){
		var H = $(this).height();
//		var H = $(this).find("img").height();
		$(this).height(H+15);
	});
  var container = document.querySelector('#pricing-table');
  var msnry = new Masonry( container, {
    columnWidth: 230
  });
});
</script>
</head>
<body style="background-color:black;height:100%;width:100%;overflow:hidden">
	<div id="logo" style="width:100%;text-align:center">
		<img src="images/logo.png" style="height:200px;width:90%;" />
	</div>

	<div id="pricing-table" class="clear" style="overflow-x:auto">
		<div class="plan">
			<h3>2015/01/14<span>59</span></h3>
			<img src="1.jpg" style="width:180px"/>
		</div>
		<div class="plan" id="most-popular">
			<h3>2014/12/31<span>29</span></h3>
			<img src="2.jpg" style="width:180px"/>
		</div>
		<div class="plan">
            <h3>2014/11/08<span>17</span></h3>
            <img src="3.jpg" style="width:180px"/>
        </div>
		<div class="plan">
            <h3>2014/11/08<span>17</span></h3>
            <img src="3.jpg" style="width:180px"/>
        </div>
		<div class="plan">
            <h3>2014/11/08<span>17</span></h3>
            <img src="3.jpg" style="width:180px"/>
        </div>
		<div class="plan">
			<h3>2014/11/08<span>17</span></h3>
			<img src="3.jpg" style="width:180px"/>
		</div>
		<div class="plan">
			<h3>2014/10/25<span>9</span></h3>
			<img src="4.jpg" style="width:180px"/>
		</div> 	
	</div>
</body>
</html>