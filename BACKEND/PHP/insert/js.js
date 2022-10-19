	alert("Try to enter username or password to see the panda reacting to your actions.");
$(document).ready(function(){
			$(":text").focus(function(){
				$(".handl").css({
					transform: 'rotate(0deg)',
					bottom: '140px',
					left:'50px',
					height:'45px',
					width:'35px'
				});
				$(".handr").css({
					transform: 'rotate(0deg)',
					bottom: '185px',
					left:'250px',
					height:'45px',
					width:'35px'
				});
				$(".eyeball1").css({
					top: '20px',
					left: '13px'
				});
				$(".eyeball2").css({
					top: '20px',
					left: '8px'
				});
			});
			$(":password").focus(function(){
				$(".eyeball1").css({
					top: '10px',
					left: '10px'
				});
				$(".eyeball2").css({
					top: '10px',
					left: '10px'
				});
				$(".handl").css({
					transform: 'rotate(-150deg)',
					bottom: '215px',
					left:'105px',
					height:'90px',
					width:'40px'
				});
				$(".handr").css({
					transform: 'rotate(150deg)',
					bottom: '308px',
					left:'192px',
					height:'90px',
					width:'40px'
				});
			});
		});