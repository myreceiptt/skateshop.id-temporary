<footer class="main-footer clearfix" style="background:url('<?=base_url()?>assets/images/footer.png'); background-size:cover; background-position:center; color:#eee; min-height:30vh">
    <div class="container" style="padding:0 5% 0 5%; font-family:dinpro">
		<div style="margin-bottom:-7px;"><img src="<?=base_url()?>assets/images/logo_putih.png" style="height:50px;"></div>
        <div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-item clearfix" style="margin-bottom:15px">
                <div class="footer-item-content">
                    <h4>About us</h4>
					<p style="font-size:15px; margin-top:25px;">
					<a href="http://www.skateshop.id" style="text-decoration:underline; color:#fff">SkateShop.Id</a> is a cultured skateboarding marketplace to make skateboarding commerce better for every skateboarder. <a href="http://www.skateshop.id" style="text-decoration:underline; color:#fff">SkateShop.Id</a> is owned and operated by skateboarder like you who need best skateboard products from trusted skateboards shop, skateboards distributor and skateboarding brand. 
					</p>
                </div>
            </div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item clearfix" style="margin-bottom:15px">
            </div>
			<!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item clearfix" style="margin-bottom:15px">
                <div class="footer-item-content">
                    <h4>My Account</h4>
					
                </div>
            </div>-->
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item clearfix" style="margin-bottom:15px">
                <div class="footer-item-content">
                    <h4>Connect with us</h4>
					<p align="left" style="margin-top:0px;">
						<a href="https://www.youtube.com/user/enddustries" target="_blank"><img src="<?=base_url()?>assets/images/youtube.png" style="height:25px;"></a>
						<a href="https://www.instagram.com/skateshop_id/" target="_blank"><img src="<?=base_url()?>assets/images/instagram.png" style="height:25px"></a>
						<a href="https://www.facebook.com/SkateShopId-794171360741569/" target="_blank"><img src="<?=base_url()?>assets/images/facebook.png" style="height:25px"></a>
						<a href="https://www.facebook.com/groups/skateshop.id/" target="_blank"><img src="<?=base_url()?>assets/images/facebook_groups.png" style="height:25px"></a>
						<a href="https://plus.google.com/116454431071910315924/" target="_blank"><img src="<?=base_url()?>assets/images/gplus.png" style="height:25px"></a>
						<a href="mailto:info@skateshop.id"><img src="<?=base_url()?>assets/images/gmail.png" style="height:25px" target="_blank"></a>
						<a href="https://api.whatsapp.com/send?phone=628563160756" target="_blank"><img src="<?=base_url()?>assets/images/wa.png" style="height:25px"></a>
					</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End-->
<!-- Sub Footer-->
<div class="sub-footer">
    <div class="container">
        <span style="font-family:dinpro">Made with Passion while Sit and Drink after Shredding.<br><a href="http://www.skateshop.id" style="text-decoration:none; color:#ccc">skateshop.id</a> since 2017</span>
    </div>
</div>
<!-- Sub Footer-->

<script src="<?=base_url()?>assets/js/jquery-2.2.0.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap-slider.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?=base_url()?>assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="<?=base_url()?>assets/js/flatpickr.js"></script>
<!-- Custom javascript -->
<script src="<?=base_url()?>assets/js/app.js"></script>
<script src="<?=base_url()?>assets/js/readmore.js"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(function(){

	   $( "#bio_username" ).bind( 'paste',function()
	   {
		   setTimeout(function()
		   { 
			  //get the value of the input text
			  var data= $( '#bio_username' ).val() ;
			  //replace the special characters to '' 
			  var dataFull = data.replace(/[^a-zA-Z0-9-.]/g, '');
			  //set the new value of the input text without special characters
			  $( '#bio_username' ).val(dataFull);
		   });

		});
		
		$( "#bio_username" ).keypress(function()
	    {
		   setTimeout(function()
		   { 
			  //get the value of the input text
			  var data= $( '#bio_username' ).val() ;
			  //replace the special characters to '' 
			  var dataFull = data.replace(/[^a-zA-Z0-9-.]/g, '');
			  //set the new value of the input text without special characters
			  $( '#bio_username' ).val(dataFull);
		   });

		});
		
		
	});
	if(localStorage['confirmation'] != "complete"){
		if(localStorage['mau'] == null || localStorage['mau'] == "null"){
			document.getElementById('home').style.display = "block";
		}
		else if(localStorage['question'] == null || localStorage['question'] == "null"){
			document.getElementById('question').style.display = "block";
		}
		else{
			if(localStorage['question'] == "yes"){
				if(localStorage['yes_stance_question'] == null || localStorage['yes_stance_question'] == "null"){
					document.getElementById('yes_stance_question').style.display = "block";
				}
				else if(localStorage['detail_answer'] == null || localStorage['detail_answer'] == "null"){
					showStanceQuestion(localStorage['yes_stance_question']);
					document.getElementById('yes_detail_question').style.display = "block";
				}
				else if(localStorage['biodata'] == null || localStorage['biodata'] == "null"){
					//showStanceQuestion(localStorage['yes_stance_question']);
					var w = window,
					d = document,
					e = d.documentElement,
					g = d.getElementsByTagName('body')[0],
					x = w.innerWidth || e.clientWidth || g.clientWidth,
					y = w.innerHeight|| e.clientHeight|| g.clientHeight;
					//alert(x + ' × ' + y);
					if(Number(x)>=320 && Number(x)<=900){
						//alert(Number(x));
						document.getElementById("wrapper_point").style.height = "1100px";
						document.getElementById("border_biodata").style.background = "none";
					}
					document.getElementById('biodata').style.display = "block";
				}
				else if(localStorage['confirmation'] == null || localStorage['confirmation'] == "null"){
					//showStanceQuestion(localStorage['yes_stance_question']);
					document.getElementById('confirmation').style.display = "block";
				}
				else if(localStorage['checklist'] == null || localStorage['checklist'] == "null"){
					//showStanceQuestion(localStorage['yes_stance_question']);
					document.getElementById('checklist').style.display = "block";
					document.getElementById('checklist1').style.visibility = "visible";
					setTimeout(function(){
						document.getElementById('checklist1').src = "../../assets/images/check.png";
						document.getElementById('strip1').style.visibility = "visible";
						document.getElementById('checklist2').style.visibility = "visible";
						setTimeout(function(){
							document.getElementById('checklist2').src = "../../assets/images/check.png";
							document.getElementById('strip2').style.visibility = "visible";
							document.getElementById('checklist3').style.visibility = "visible";
							setTimeout(function(){
								if(localStorage['detail_answer']=="true"){
									document.getElementById('checklist3').src = "../../assets/images/check.png";
								}
								else{
									document.getElementById('checklist3').src = "../../assets/images/cross.png";
								}
								document.getElementById('checklist_lanjut').style.visibility = "visible";
							}, 1500);
						}, 1500);
					}, 1500);
				}
				else{
					document.getElementById("wrapper_point").style.height = "1000px";
					document.getElementById('selamat').style.display = "block";
					if(localStorage['detail_answer']=="true"){
						document.getElementById('congrats').style.display = "block";
						document.getElementById('bailed').style.display = "none";
					}
					else{
						document.getElementById('congrats').style.display = "none";
						document.getElementById('bailed').style.display = "block";
					}
				}
			}
			else if(localStorage['question'] == "no"){
				if(localStorage['no_why_question'] == null || localStorage['no_why_question'] == "null"){
					document.getElementById('no_why_question').style.display = "block";
				}
				else if(localStorage['detail_answer'] == null || localStorage['detail_answer'] == "null"){
					showDetailNoQuestion('random');
					document.getElementById('no_detail_question').style.display = "block";
				}
				else if(localStorage['biodata'] == null || localStorage['biodata'] == "null"){
					//showStanceQuestion(localStorage['yes_stance_question']);
					var w = window,
					d = document,
					e = d.documentElement,
					g = d.getElementsByTagName('body')[0],
					x = w.innerWidth || e.clientWidth || g.clientWidth,
					y = w.innerHeight|| e.clientHeight|| g.clientHeight;
					//alert(x + ' × ' + y);
					if(Number(x)>=320 && Number(x)<=900){
						//alert(Number(x));
						document.getElementById("wrapper_point").style.height = "1100px";
						document.getElementById("border_biodata").style.background = "none";
					}
					document.getElementById('biodata').style.display = "block";
					
				}
				else if(localStorage['confirmation'] == null || localStorage['confirmation'] == "null"){
					//showStanceQuestion(localStorage['yes_stance_question']);
					document.getElementById('confirmation').style.display = "block";
				}
				else if(localStorage['checklist'] == null || localStorage['checklist'] == "null"){
					//showStanceQuestion(localStorage['yes_stance_question']);
					document.getElementById('checklist').style.display = "block";
					document.getElementById('checklist1').style.visibility = "visible";
					setTimeout(function(){
						document.getElementById('checklist1').src = "../../assets/images/check.png";
						document.getElementById('strip1').style.visibility = "visible";
						document.getElementById('checklist2').style.visibility = "visible";
						setTimeout(function(){
							document.getElementById('checklist2').src = "../../assets/images/check.png";
							document.getElementById('strip2').style.visibility = "visible";
							document.getElementById('checklist3').style.visibility = "visible";
							setTimeout(function(){
								if(localStorage['detail_answer']=="true")
									document.getElementById('checklist3').src = "../../assets/images/check.png";
								else
									document.getElementById('checklist3').src = "../../assets/images/cross.png";
								document.getElementById('checklist_lanjut').style.visibility = "visible";
							}, 1500);
						}, 1500);
					}, 1500);
				}
				else{
					document.getElementById("wrapper_point").style.height = "1000px";
					document.getElementById('selamat').style.display = "block";
					if(localStorage['detail_answer']=="true"){
						document.getElementById('congrats').style.display = "block";
						document.getElementById('bailed').style.display = "none";
					}
					else{
						document.getElementById('congrats').style.display = "none";
						document.getElementById('bailed').style.display = "block";
					}
				}
			}
		}
	}
	else{
		if(localStorage['checklist'] == null || localStorage['checklist'] == "null"){
			//showStanceQuestion(localStorage['yes_stance_question']);
			document.getElementById('checklist').style.display = "block";
			document.getElementById('checklist1').style.visibility = "visible";
			setTimeout(function(){
				document.getElementById('checklist1').src = "../../assets/images/check.png";
				document.getElementById('strip1').style.visibility = "visible";
				document.getElementById('checklist2').style.visibility = "visible";
				setTimeout(function(){
					document.getElementById('checklist2').src = "../../assets/images/check.png";
					document.getElementById('strip2').style.visibility = "visible";
					document.getElementById('checklist3').style.visibility = "visible";
					setTimeout(function(){
						if(localStorage['detail_answer']=="true")
							document.getElementById('checklist3').src = "../../assets/images/check.png";
						else
							document.getElementById('checklist3').src = "../../assets/images/cross.png";
						document.getElementById('checklist_lanjut').style.visibility = "visible";
					}, 1500);
				}, 1500);
			}, 1500);
		}
		else{
			document.getElementById("wrapper_point").style.height = "800px";
			document.getElementById('selamat').style.display = "block";
			if(localStorage['detail_answer']=="true"){
				document.getElementById('congrats').style.display = "block";
				document.getElementById('bailed').style.display = "none";
			}
			else{
				document.getElementById('congrats').style.display = "none";
				document.getElementById('bailed').style.display = "block";
			}
			clearCache();
		}
	}
	
	//localStorage['yes_stance_question']
	$(document).ready(function(){
		var datepick=$(".pickdate");
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		datepick.datepicker({
			format: 'dd-mm-yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>

</body>

<!-- Mirrored from sohelrana.me/hotel/green/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Dec 2016 03:22:25 GMT -->
</html>