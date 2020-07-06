$(function() 
{
	let toggle_menu    = 0 ;
	let already_hidden = 0 ; 
	$("#_display_menu").click(function() 
	{	
      document.getElementById('logo').style.removeProperty('display');
      $("#logo").addClass('brand_logo')         ;
   
	  $('.treeview').mdbTreeview('false');
	  if(toggle_menu === 0 ) 
	  {
		$('.inner_sidebar').animate({
			width : '25%'
		});
		$('.inner_content').animate({
			width : '75%'
		});
		document.getElementById('_display_menu').className = 'fas fa-angle-left bg-success rounded-circle';

		let x = document.querySelectorAll('.hideSmall');
		for (var i = x.length - 1; i >= 0; i--) 
		{
			x[i].className = 'showSmall' ;
		}

		x = document.querySelectorAll('.hideSmall2');
		for (var i = x.length - 1; i >= 0; i--) 
		{
			x[i].classList.remove('hideSmall2') ;
			x[i].classList.add('showSmall2')    ;
		}

		x = document.querySelectorAll('.decoy');
		for (var i = x.length - 1; i >= 0; i--) 
		{
			x[i].style.removeProperty('display')  ;
			x[i].className  = 'decoy rounded-circle backG' ;
		}
			
		toggle_menu = 1 ;
		if (already_hidden===1) 
		{
			x = document.querySelectorAll('.nested');
			for (var i = x.length - 1; i >= 0; i--) 
			{
				x[i].style.removeProperty('display');
			}
		}
	  }
	  else
	  {
	  	document.getElementById('logo').style.display = 'none' ;
      	$("#logo").removeClass('brand_logo')                   ;
   
		$('.inner_sidebar').animate({
				width : '7%'
		});
		$('.inner_content').animate({
				width : '100%'
		});
		document.getElementById('_display_menu').className = 'fas fa-angle-right bg-success rounded-circle'; 

		let x = document.querySelectorAll('.nested');
		for (var i = x.length - 1; i >= 0; i--) 
		{
			x[i].style.display = 'none';
		}

		x = document.querySelectorAll('.showSmall');
		for (var i = x.length - 1; i >= 0; i--) 
		{
			x[i].className = 'hideSmall' ;
		}

		x = document.querySelectorAll('.hideSmall2');
		for (var i = x.length - 1; i >= 0; i--) 
		{
			x[i].classList.remove('showSmall2') ;
		}

		x = document.querySelectorAll('.showSmall2');
		for (var i = x.length - 1; i >= 0; i--) 
		{
			x[i].classList.remove('showSmall2') ;
			x[i].classList.add('hideSmall2')    ;
		}

		x = document.querySelectorAll('.decoy');
		for (var i = x.length - 1; i >= 0; i--) 
		{
			x[i].style.display = 'none' ;
			x[i].className  = 'decoy'   ;
		}

		toggle_menu    = 0 ;
		already_hidden = 1 ;
	  }
	});

	$(".nested li").hover(function() 
	{
		$(this).addClass("myHoverLi");
		$(this).addClass("myHoverLi rounded-pill");
	},function() 
	{
		$(this).removeClass("myHoverLi");
		$(this).removeClass("myHoverLi rounded-pill");
	});

});

function ShowTree(arg) 
{
	if (!arg.classList.contains('fa-angle-down')) 
	{
		arg.className = 'fas fa-angle-down rotate showSmall2' ;
	}
	else
	{
		arg.className = 'fas fa-angle-right rotate showSmall2' ;
	}
	arg.parentElement.querySelector("ul").classList.add("border")         ;
	arg.parentElement.querySelector("ul").classList.add("border-success") ;
	arg.parentElement.querySelector("ul").classList.add("border-top-0")   ;
	arg.parentElement.querySelector("ul").classList.add("border-right-0") ;
	arg.parentElement.querySelector("ul").classList.add("border-bottom-0");
	arg.parentElement.querySelector("ul").classList.add("border-left-2")  ;	

	if (screen.width<1024) 
	{
		arg.parentElement.querySelector("ul").style.width = "150px"       ;
	}
}
