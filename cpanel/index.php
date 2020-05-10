<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="html/home.css?x=3">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<header>
		<div onclick="opac()" id="namediv">
			<img src="http://jeet.shreekhodiyarind.co.in/admin/css-js/admin.png"/>
			<div id="name">Name&nbsp;&nbsp;<i>&gt;</i></div>
		</div>
		<div id="searchdiv">
			<i class="fa fa-search"></i><input type="text" id="search" placeholder="Search...">
		</div>
		<div id="headerbtns">
			<div>Logout</div>
		</div>
	</header>
	<div id="sidebar">
		<i id="sidebartogglebtn" class="fa fa-bars"></i>
		<div id="sidebar_title">Book Sharing</div>
		<div id="sidemenu">
			<div><i class="fa fa-home"></i><span>Dashboard</span></div>
			<div><i class="fa fa-cog"></i><span>Add authorised</span></div>
			<div><i class="fa fa-search"></i><span>Manage Groups</span></div>
			<div><i class="fa fa-history"></i><span>History</span></div>
			<div><i class="fa fa-paper-plane"></i><span>Notifications</span></div>
			<div><i class="fa fa-trophy"></i><span>Top Peoples</span></div>
		</div>
	</div>
	<iframe src="html/AccountSetting.html" id="myfrm" name="myfrm"></iframe>
	<script type="text/javascript">
	    var userInfo={};
        <?php
        session_start();
        if(!isset($_SESSION['id'])){
//            echo $_COOKIE['key1'];
            header('Location:html/login.php');
        }
        ?>
        $('#name').html('<?php echo $_SESSION['id'];?>');
		var showing=false;
		$('#headerbtns').hide();
		$('#headerbtns').click(function(){
            window.location.replace("html/login.php");
		});
		$('#headerbtns').css('opacity','0');
		function opac(){
			if (showing){
				$('#headerbtns').css('opacity','0');
				setTimeout(function(){$('#headerbtns').hide()},200);
			}else{
				$('#headerbtns').show();
				$('#headerbtns').css('opacity','1');
			}
			showing=!showing;
		}
		$('#sidemenu div').click(function(){
			$('#sidemenu div').css('background-color','');
			$(this).css('background-color','#00BCD4');
			document.myfrm.location.replace("html/"+($('span',this).html()).replace(/\s/g,"")+".html");
		});
		$('#sidemenu div:first-of-type').css('background-color','#00BCD4');
		$('#sidemenu div i').hover(function(){
			if (wid==60)
			$(this).siblings().toggle();
		});
		$('#sidebartogglebtn').click(togglesidebar);
		var opened=false;
		function togglesidebar(){
		    if(opened){
    		    $('#sidebar').css('margin-left',window.innerWidth<500?'calc(60px - 100%)':'-300px');
		    }else{
    		    $('#sidebar').css('margin-left','0px');
		    }
		    opened=!opened;
		}
// 		function togglesidebar(){
// 			wid=360-wid;
// 			$('#sidebar').css('width',wid+'px');
//  			$('#myfrm').css('width','calc(100% - '+wid+'px)');
//  			$('#myfrm').css('margin-left',wid+'px');
// 			$('#searchdiv').css('margin-left',(wid+70)+'px');
// 			if(wid==60){
// 				$('#sidebar_title').html('BS');
// 				$('#sidebar_title').css('text-align','center');
// 				$('#sidemenu div span').toggle();
// 			}else{
// 				$('#sidebar_title').css('text-align','left');
// 				setTimeout(function(){
// 					$('#sidebar_title').html('Book Sharing');
// 					$('#sidemenu div span').toggle();
// 				},100);
// 			}
// 		}
	   // if(window.innerWidth<800){
	   //     if(wid==300)togglesidebar();
    // 		$('#sidebartogglebtn').hide();
    // 		$('#searchdiv').css('margin-left','70px');
    // 		$('#searchdiv input').css('width','120px');
    // 	}
    // 	var oldwidth=window.innerWidth;
//     	window.onresize=function(){
//     	    if(oldwidth!=window.innerWidth){
//     		    if(window.innerWidth<800){
//     		        if(wid==300)togglesidebar();
//     		    }else if(window.innerWidth>800){
//     		        if(wid==60)togglesidebar();
//     		    }
//     	    }
// 		};
	</script>
</body>
</html>