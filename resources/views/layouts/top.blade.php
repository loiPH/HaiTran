<style>

.slogan{
	font-family: 'Oswald', sans-serif;
	font-size: 22px;
}
.topmenu{
	max-width: 1024px;
	width: 100%;
	height: 38px;
	border-top: 2px solid #8b8b8b;
	border-bottom: 2px solid #8b8b8b;
	background-color: #313131;
	font-family: 'Oswald', sans-serif;
	color: white;
	text-align: right;
	padding:6px 5px 0 0;
	font-size: 15px;

}
.logo{
	width: 86px;height: auto;	
}
.subslogan{
	font-family: 'Oswald', sans-serif;
	font-size: 18px;
	color: #a70303;
}

.bgimage{
	background-image: url('images/bglogo3.jpg');
	background-size: auto 180px;
}

.socialnw .w3-row .w3-third .mnl:link{
	/*color: #227192;*/
	font-family: 'Oswald', sans-serif;
}

.hotline{
	margin:3px;
	font-family: 'Oswald', sans-serif;
	color: white;
	padding: 5px;
	width: initial;
	bottom: 0;
}
.topline{
	max-width: 1024px;
	margin: auto;
	display: inherit;
	height: 3px;
	background-color: #313131;
}

.fa{
	background-color: #313131;
	border:none;
	color: white;
}

.fa2{
	background-color: #313131;
	border:none;
	color: white;	
}

.topnav {
	/*background-color: #333;*/
	overflow: hidden;
	font-family: 
	font-family: 'Oswald', sans-serif;I
}


.topnav a:not(:first-child) {display: none;}



@media screen and (max-width: 380px) {

	.w3-col .logo{
		width: 68px;
		height: auto;
		float: left;
	}

	/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */

	.topnav.responsive {position: relative;}

	.topnav.responsive a {
		float: none;
		display: block;
		text-align: left;
	}

	/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */

	.topline{
		display: inherit;
		height: 3px;
		background-color: #313131;
	}

	.shopinfo{
		display: none;
	}

	.w3-col .inclSlogan{
		float: left;
		text-align: left;
	}
	.w3-col .slogan{
		font-size: 21px;
		font-weight: 600;
	}
	.w3-col .subslogan{
		font-size: 15.6px;
		color: #313131;
		font-weight: 580;
	}

	.bgimage{
		background: -webkit-linear-gradient(#fff, #d2d2d2);
		background: -o-linear-gradient(#fff, #d2d2d2);
		background: linear-gradient(#fff, #d2d2d2);
		background-image: url(images/bglogomb.jpg);
		background-size:357px 100px;

	}
	.sla{
		display: none;
	}

	.topmenu span{
		font-size: 16px;
	}


}

@media screen and (max-width: 600px){
	
	.shopinfo{	
		display: none;
	}

	.bgimage{
		background-image: url(images/bglogombipad.jpg);
		background-size:cover;
	}

	.topline{
		display: inherit;
		height: 3px;
		background-color: #313131;
	}
}

/*CHECH INFORMTAION GITHUB CHANGE*/

</style>
{{-- Phần scrip chạy button menu trên responsive website mobile --}}
<script>
	function myFunction() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
			x.className += " responsive";
		} else {
			x.className = "topnav";
		}
	}
</script>


<div class="topmenu">	
	<img class="sla" src="images/mail2.png" alt="" style="width: 22px;height: auto;padding-bottom: 0.2em;"> 
	<span class="sla">Sales.phithienvu@gmail.com |</span> 
	<img src="images/phone.png" alt="" style="width: 18px;height: auto;padding-bottom: 0.2em;"> 

	<span class="hl">HOTLINE: 0909 123 123
	</span>
</div>

<div class="w3-row bgimage">
	<div class="w3-col" style="width: auto;height: auto;text-align: center;padding: 10px 10px 10px 10px;">
		<img class="logo" src="images/logo.png" alt="PHI THIÊN VŨ">
		<div class="inclSlogan">
			<b>
				<p class="slogan">
					<span style="color: #1a4501">PHI THIÊN VŨ</span> 
					<span style="color: #a70303">Co.,ltd</span>
				</p>
			</b>
			<p class="subslogan">THIẾT BỊ MẠNG - LINH KIỆN</p>
		</div>
	</div>
	
</div>
<div class="socialnw">
	<div class="w3-row">
		<div class="w3-third">
			<div class="topnav" id="myTopnav">
				<a class="mnl" href="javascript:void(0);" class="icon" onclick="myFunction()"> DANH MỤC SẢN PHẨM <span style="float: right; ">&#9776;</span></a>
			</div>
		</div>
		<div class="w3-twothird">
			<div class="w3-row" style="float: right;">
				<input class="emailipt" type="text" placeholder="Enter your search here" style="margin: 0px;padding: 3px 10px 2px 10px;float: left;border: none;font-size: 14px;font-family:'Oswald', sans-serif;min-width: 210px; ">
				<button
				style="border: none;padding: 2px 10px 2px 10px;background: linear-gradient(#961d0a, #66190c);color: white;font-family:'Oswald', sans-serif;"> SEARCH
			</button>
		</div>
	</div>	
</div>
</div>

<div class=""></div>