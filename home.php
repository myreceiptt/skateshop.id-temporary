<!-- Recent Rooms Start-->
<div id="wrapper_point" class="content-area clearfix" style="background:#fff; padding-top:0px; position:relative; height:600px">
    <div id="home" class="container" style="padding:0px; display:none; position:absolute; top:0px; height:100%">
		<div style="width:100%; height:100%; background:url('<?=base_url()?>assets/images/gallery1.png') no-repeat left; background-size:cover">
			<div class="row" style="width:100%">
				<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12" style="text-align:center">
					<input type="hidden" id="recaptcha_response" value="0">
					<img src="<?=base_url()?>assets/images/logo_gallery1.png" style="width:65%; min-width:350px; margin-top:7vh;">
					<p id="ft_resp" align="center" style="color:#fff; font-family:molleat; margin-left:10%;">Dapatkan Skateboard Gratis!</p>
					<p id="ft_resp2" style="color:#fff; font-family:dklemon; margin:auto; padding-left:10%; color:#ccc; width:75%">Dapatkan sebuah skateboard deck dan berbagai<br>aksesoris skateboard gratis* dari skateshop.id</p>
					<div id="recaptcha" style="margin:auto; margin-top:10px; margin-bottom:10px; width:300px; padding-left:5%; text-align:center" class="g-recaptcha"></div>
					<p align="center" style="font-family:dklemon; font-weight:bold; margin-left:10%;"><button type="button" class="btn btn-info" style="background:#fff; border:none; color:#666; margin-top:10px; font-size:20px; font-weight:bold; padding:2px 18px;" onclick="mau()">MAU</button></p>
				</div>
			</div>
        </div>
    </div>
	<div id="question" class="container" style="display:none; position:absolute; top:0px; height:100%; width:100%; background:url('assets/images/bg_landing_page.jpg'); background-size:cover">
		<div style="width:100%; height:100%; padding-top:120px;">
			<div style="text-align:center; width:100%">
				<input type="hidden" name="ans_question" id="ans_question">
				<img src="<?=base_url()?>assets/images/99.png" style="width:125px; -ms-transform: rotate(-25deg); -webkit-transform: rotate(-25deg); transform: rotate(-25deg);">
				<p style="color:#333; font-family:dklemon; margin-top:20px; margin-bottom:25px;" id="ft_resp3" align="center">Apakah Kamu skateboarder?</p>
				<div style="width:50%; float:left; text-align:right">
					<div id="ans_question1" style="width:75px; margin-right:17%; float:right; cursor:pointer; opacity:0.5" onclick="setAnswer('question','1')">
						<img src="<?=base_url()?>assets/images/12.png" style="width:100%; -ms-transform: rotate(10deg); -webkit-transform: rotate(10deg); transform: rotate(10deg)">
						<p style="color:#333; font-family:dklemon; font-size:18px" align="center">Ya</p>
					</div>
				</div>
				<div style="width:50%; float:left; text-align:left">
					<div id="ans_question2" style="width:60px; margin-left:17%; float:left; cursor:pointer; opacity:0.5" onclick="setAnswer('question','2')">
						<img src="<?=base_url()?>assets/images/21.png" style="width:100%">
						<p style="color:#333; font-family:dklemon; font-size:18px" align="center">Tidak</p>
					</div>
				</div>
				<div style="text-align:center; position:absolute; bottom:10px; right:0px; width:100%"><font style="cursor:pointer; font-family:dklemon;" id="ft_resp2" onclick="checkQuestion()">Lanjut>></font></div>
			</div>
        </div>
    </div>
	<div id="yes_stance_question" class="container" style="display:none; position:absolute; top:0px; height:100%; width:100%; background:url('assets/images/bg_landing_page.jpg'); background-size:cover">
		<div style="width:100%; height:100%; padding-top:120px;">
			<div style="text-align:center; width:100%">
				<input type="hidden" name="ans_yes_stance_question" id="ans_yes_stance_question">
				<img src="<?=base_url()?>assets/images/16.png" style="width:75px; -ms-transform: rotate(15deg); -webkit-transform: rotate(15deg); transform: rotate(15deg);">
				<p style="color:#333; font-family:dklemon; margin-top:20px; margin-bottom:25px;" id="ft_resp3" align="center">Apa stance mu?</p>
				<div style="width:50%; float:left; text-align:right">
					<div id="ans_yes_stance_question1" style="width:100px; margin-right:8%; text-align:center; float:right; cursor:pointer; opacity:0.5" onclick="setAnswer('yes_stance_question','1')">
						<img src="<?=base_url()?>assets/images/44.png" style="height:40px; -ms-transform: rotate(25deg); -webkit-transform: rotate(25deg); transform: rotate(25deg)">
						<p style="color:#333; font-family:dklemon; font-size:18px" align="center">Regular</p>
					</div>
				</div>
				<div style="width:50%; float:left; text-align:left">
					<div id="ans_yes_stance_question2" style="width:100px; margin-left:8%; text-align:center; float:left; cursor:pointer; opacity:0.5" onclick="setAnswer('yes_stance_question','2')">
						<img src="<?=base_url()?>assets/images/28.png" style="width:100px; margin-top:10px;">
						<p style="color:#333; font-family:dklemon; font-size:18px" align="center">Goofy</p>
					</div>
				</div>
				<div style="text-align:center; position:absolute; bottom:10px; right:0px; width:100%"><font style="cursor:pointer; font-family:dklemon;" id="ft_resp2" onclick="checkYesStanceQuestion()">Lanjut>></font></div>
			</div>
        </div>
    </div>
	<div id="yes_detail_question" class="container" style="display:none; position:absolute; top:0px; height:100%; width:100%; background:url('assets/images/bg_landing_page.jpg'); background-size:cover">
		<div style="width:100%; height:100%; padding-top:10px;">
			<div style="text-align:center; width:100%">
				<input type="hidden" name="ans_yes_detail_question" id="ans_yes_detail_question">
				<img src="<?=base_url()?>assets/images/16.png" style="width:75px; -ms-transform: rotate(15deg); -webkit-transform: rotate(15deg); transform: rotate(15deg);">
				<div id="content_yes_question" style="width:90%; margin:auto">
					<p style="color:#333; font-family:dklemon; margin-top:20px; margin-bottom:25px;" id="ft_resp3a" align="center"></p>
				</div>
				<div style="width:50%; float:left; text-align:right">
					<div id="ans_yes_detail_question1" style="width:150px; height: 65px; margin-right:17%; float:right; cursor:pointer; opacity:0.5; text-align:center" onclick="setAnswer('yes_detail_question','a')">
						<img src="<?=base_url()?>assets/images/13.png" style="height:40px; -ms-transform: rotate(25deg); -webkit-transform: rotate(25deg); transform: rotate(25deg)">
						<p style="color:#333; font-family:dklemon; font-size:18px; margin-top:10px" align="center"></p>
					</div>
				</div>
				<div style="width:50%; float:left; text-align:left">
					<div id="ans_yes_detail_question2" style="width:150px; height: 65px; margin-left:8%; float:left; cursor:pointer; opacity:0.5; text-align:center" onclick="setAnswer('yes_detail_question','b')">
						<img src="<?=base_url()?>assets/images/19.png" style="height:30px; margin-top:10px">
						<p style="color:#333; font-family:dklemon; font-size:18px; margin-top:10px" align="center"></p>
					</div>
				</div>
				<div style="width:50%; float:left; text-align:right; margin-top:40px;">
					<div id="ans_yes_detail_question3" style="width:150px; height: 65px; margin-right:17%; float:right; cursor:pointer; opacity:0.5; text-align:center" onclick="setAnswer('yes_detail_question','c')">
						<img src="<?=base_url()?>assets/images/77.png" style="height:40px; -ms-transform: rotate(25deg); -webkit-transform: rotate(25deg); transform: rotate(25deg)">
						<p style="color:#333; font-family:dklemon; font-size:18px; margin-top:10px" align="center"></p>
					</div>
				</div>
				<div style="width:50%; float:left; text-align:left; margin-top:40px;">
					<div id="ans_yes_detail_question4" style="width:150px; height: 65px; margin-left:8%; float:left; cursor:pointer; opacity:0.5; text-align:center" onclick="setAnswer('yes_detail_question','d')">
						<img src="<?=base_url()?>assets/images/18.png" style="height:30px; margin-top:10px">
						<p style="color:#333; font-family:dklemon; font-size:18px; margin-top:10px" align="center"></p>
					</div>
				</div>
				<div style="text-align:center; position:absolute; bottom:10px; right:0px; width:100%"><font style="cursor:pointer; font-family:dklemon;" id="ft_resp2" onclick="checkYesDetailQuestion()">Lanjut>></font></div>
			</div>
        </div>
    </div>
	<div id="no_why_question" class="container" style="display:none; position:absolute; top:0px; height:100%; width:100%; background:url('assets/images/bg_landing_page.jpg'); background-size:cover">
		<div style="width:100%; height:100%; padding-top:70px;">
			<div style="text-align:center; width:100%">
				<input type="hidden" name="ans_no_why_question" id="ans_no_why_question">
				<img src="<?=base_url()?>assets/images/16.png" style="width:75px; -ms-transform: rotate(15deg); -webkit-transform: rotate(15deg); transform: rotate(15deg);">
				<p style="color:#333; font-family:dklemon; margin-top:20px; margin-bottom:25px;" id="ft_resp3" align="center">Lalu kenapa Kamu menginginkan sebuah skateboard deck?</p>
				<div style="width:50%; float:left; text-align:right">
					<div id="ans_no_why_question1" style="width:150px; margin-right:17%; float:right; cursor:pointer; opacity:0.5; text-align:center" onclick="setAnswer('no_why_question','1')">
						<img src="<?=base_url()?>assets/images/44.png" style="height:40px; -ms-transform: rotate(25deg); -webkit-transform: rotate(25deg); transform: rotate(25deg)">
						<p style="color:#333; font-family:dklemon; font-size:18px" align="center">Skateboarder wanna be</p>
					</div>
				</div>
				<div style="width:50%; float:left; text-align:left">
					<div id="ans_no_why_question2" style="width:150px; margin-left:8%; float:left; cursor:pointer; opacity:0.5; text-align:center" onclick="setAnswer('no_why_question','2')">
						<img src="<?=base_url()?>assets/images/28.png" style="height:30px; margin-top:10px;">
						<p style="color:#333; font-family:dklemon; font-size:18px" align="center">Penggemar culture skateboarding</p>
					</div>
				</div>
				<div style="width:50%; float:left; text-align:right">
					<div id="ans_no_why_question3" style="width:150px; margin-right:17%; float:right; cursor:pointer; opacity:0.5; text-align:center" onclick="setAnswer('no_why_question','3')">
						<img src="<?=base_url()?>assets/images/20.png" style="height:40px; -ms-transform: rotate(25deg); -webkit-transform: rotate(25deg); transform: rotate(25deg)">
						<p style="color:#333; font-family:dklemon; font-size:18px" align="center">Iseng-iseng berhadiah</p>
					</div>
				</div>
				<div style="text-align:center; position:absolute; bottom:10px; right:0px; width:100%"><font style="cursor:pointer; font-family:dklemon;" id="ft_resp2" onclick="checkNoWhyQuestion()">Lanjut>></font></div>
			</div>
        </div>
    </div>
	<div id="no_detail_question" class="container" style="display:none; position:absolute; top:0px; height:100%; width:100%; background:url('assets/images/bg_landing_page.jpg'); background-size:cover">
		<div style="width:100%; height:100%; padding-top:10px;">
			<div style="text-align:center; width:100%">
				<input type="hidden" name="ans_no_detail_question" id="ans_no_detail_question">
				<img src="<?=base_url()?>assets/images/16.png" style="width:75px; -ms-transform: rotate(15deg); -webkit-transform: rotate(15deg); transform: rotate(15deg);">
				<div id="content_no_question" style="width:70%; margin:auto">
					<p style="color:#333; font-family:dklemon; margin-top:20px; margin-bottom:25px;" id="ft_resp3a" align="center"></p>
				</div>
				<div style="width:50%; float:left; text-align:right">
					<div id="ans_no_detail_question1" style="width:150px; height: 65px; margin-right:17%; float:right; cursor:pointer; opacity:0.5; text-align:center" onclick="setAnswer('no_detail_question','a')">
						<img src="<?=base_url()?>assets/images/13.png" style="height:40px; -ms-transform: rotate(25deg); -webkit-transform: rotate(25deg); transform: rotate(25deg)">
						<p style="color:#333; font-family:dklemon; font-size:18px; margin-top:10px" align="center"></p>
					</div>
				</div>
				<div style="width:50%; float:left; text-align:left">
					<div id="ans_no_detail_question2" style="width:150px; height: 65px; margin-left:8%; float:left; cursor:pointer; opacity:0.5; text-align:center" onclick="setAnswer('no_detail_question','b')">
						<img src="<?=base_url()?>assets/images/19.png" style="height:30px; margin-top:10px">
						<p style="color:#333; font-family:dklemon; font-size:18px; margin-top:10px" align="center"></p>
					</div>
				</div>
				<div style="width:50%; float:left; text-align:right; margin-top:40px;">
					<div id="ans_no_detail_question3" style="width:150px; height: 65px; margin-right:17%; float:right; cursor:pointer; opacity:0.5; text-align:center" onclick="setAnswer('no_detail_question','c')">
						<img src="<?=base_url()?>assets/images/77.png" style="height:40px; -ms-transform: rotate(25deg); -webkit-transform: rotate(25deg); transform: rotate(25deg)">
						<p style="color:#333; font-family:dklemon; font-size:18px; margin-top:10px" align="center"></p>
					</div>
				</div>
				<div style="width:50%; float:left; text-align:left; margin-top:40px;">
					<div id="ans_no_detail_question4" style="width:150px; height: 65px; margin-left:8%; float:left; cursor:pointer; opacity:0.5; text-align:center" onclick="setAnswer('no_detail_question','d')">
						<img src="<?=base_url()?>assets/images/18.png" style="height:30px; margin-top:10px">
						<p style="color:#333; font-family:dklemon; font-size:18px; margin-top:10px" align="center"></p>
					</div>
				</div>
				<div style="text-align:center; position:absolute; bottom:10px; right:0px; width:100%"><font style="cursor:pointer; font-family:dklemon;" id="ft_resp2" onclick="checkNoDetailQuestion()">Lanjut>></font></div>
			</div>
        </div>
    </div>
	<div id="biodata" class="container" style="padding-top:20px; padding-bottom:20px; display:none; position:absolute; top:0px; height:100%; width:100%; background:url('assets/images/bg_landing_page.jpg'); background-size:cover">
		<div style="width:90%;  margin:auto; background:url('<?=base_url()?>assets/images/frame.png'); background-size:100% 100%; padding:50px 10%;">
			<div style="text-align:left; font-family:dklemon; width:100%" id="ft_resp3">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" id="border_biodata" style="background:url('<?=base_url()?>assets/images/border.png'); background-size: 100% 100%; padding-right:35px">
						<div style="margin-bottom:20px; margin-top:20px;">
						<img src="<?=base_url()?>assets/images/23.png" style="width:85px;">Isi Biodatamu
						</div>
						
						<div style="width:30%; float:left">
							<p id="ft_resp4" style="margin-bottom:0px; line-height:40px">Nama</p>
						</div>
						<div style="width:70%; float:left; height:35px; position:relative; margin-bottom:5px">
							<input type="text" class="input-text" name="bio_nama" id="bio_nama" style="top:3px; position:absolute; width:95%;font-family:dinpro" value="">
						</div>
						
						<div style="width:30%; float:left">
							<p id="ft_resp4" style="margin-bottom:0px; line-height:40px">Username</p>
						</div>
						<div style="width:70%; float:left; height:35px; position:relative; margin-bottom:5px">
							<input type="text" class="input-text" name="bio_username" id="bio_username" style="top:3px; position:absolute; width:95%;font-family:dinpro" value="">
						</div>
						
						<div style="width:30%; float:left">
							<p id="ft_resp4" style="margin-bottom:0px; line-height:40px">Email</p>
						</div>
						<div style="width:70%; float:left; height:35px; position:relative; margin-bottom:5px">
							<input type="text" class="input-text" name="bio_email" id="bio_email" style="top:3px; position:absolute; width:95%;font-family:dinpro" value="">
						</div>
						
						<div style="width:30%; float:left">
							<p id="ft_resp4" style="margin-bottom:0px; line-height:40px">Phone</p>
						</div>
						<div style="width:70%; float:left; height:35px; position:relative; margin-bottom:5px">
							<input type="text" class="input-text" name="bio_phone" id="bio_phone" style="top:3px; position:absolute; width:95%;font-family:dinpro" value="">
						</div>
						
						<div style="width:30%; float:left">
							<p id="ft_resp4" style="margin-bottom:0px; line-height:40px">Alamat</p>
						</div>
						<div style="width:70%; float:left; height:35px; position:relative; margin-bottom:5px">
							<input type="text" class="input-text" name="bio_alamat" id="bio_alamat" style="top:3px; position:absolute; width:95%;font-family:dinpro" value="">
						</div>
						
						<div style="width:30%; float:left">
							<p id="ft_resp4" style="margin-bottom:0px; line-height:40px">Kota</p>
						</div>
						<div style="width:70%; float:left; height:35px; position:relative; margin-bottom:5px">
							<input type="text" class="input-text" name="bio_kota" id="bio_kota" style="top:3px; position:absolute; width:95%;font-family:dinpro" value="">
						</div>
						
						<div style="width:30%; float:left">
							<p id="ft_resp4" style="margin-bottom:0px; line-height:40px">Kodepos</p>
						</div>
						<div style="width:70%; float:left; height:35px; position:relative; margin-bottom:5px">
							<input type="text" class="input-text" name="bio_kodepos" id="bio_kodepos" style="top:3px; position:absolute; width:95%;font-family:dinpro" value="">
						</div>
						
						<div style="width:30%; float:left">
							<p id="ft_resp4" style="margin-bottom:0px; line-height:40px">Provinsi</p>
						</div>
						<div style="width:70%; float:left; height:35px; position:relative; margin-bottom:5px">
							<input type="text" class="input-text" name="bio_provinsi" id="bio_provinsi" style="top:3px; position:absolute; width:95%;font-family:dinpro" value="">
						</div>
						
						<div style="width:30%; float:left; margin-bottom:20px;">
							<p id="ft_resp4" style="margin-bottom:0px; line-height:40px">Negara</p>
						</div>
						<div style="width:70%; float:left; height:35px; position:relative;">
							<input type="text" class="input-text" name="bio_negara" id="bio_negara" style="top:3px; position:absolute; width:95%;font-family:dinpro" value="">
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="margin-bottom:100px">
						<input type="hidden" id="sex" name="sex">
						<p id="ft_resp4" style="margin-bottom:0px; margin-top:60px;" align="center">Oiya sampe lupa, jenis kelaminmu apa?</p>
						<div style="width:50%; float:left">
							<p id="ft_resp4" style="cursor:pointer; width:50px; margin:auto; margin-bottom:0px; margin-top:10px;" onclick="setSex('cewek','<?=base_url()?>assets/images/')" align="center">
								<img id="down_arrow" src="<?=base_url()?>assets/images/down.png" style="height:30px;"><br>
								Cewek
							</p>
						</div>
						<div style="width:50%; float:left">
							<p id="ft_resp4" style="cursor:pointer; width:50px; margin:auto; margin-bottom:0px; margin-top:10px;" onclick="setSex('cowok','<?=base_url()?>assets/images/')" align="center">
								<img id="up_arrow" src="<?=base_url()?>assets/images/up.png" style="height:30px;"><br>
								Cowok
							</p>
						</div>
						<div style="margin-top:80px; position:relative">
							<p id="ft_resp4" style="width:100px; margin:auto; margin-bottom:0px;" align="center">
								<img id="down_arrow" src="<?=base_url()?>assets/images/11.png" style="height:75px;"><br>
								<button type="button" class="btn btn-info" style="background:#fff; border-color:#aaa; color:#666; margin-top:10px; font-size:18px; font-weight:bold; padding:2px 18px; margin-left:10px" onclick="save_biodata()">Submit</button>
							</p>
							<img id="down_arrow" src="<?=base_url()?>assets/images/27.png" style="height:40px; position:absolute; left:0px; bottom:-60px; opacity:0.3">
							<img id="down_arrow" src="<?=base_url()?>assets/images/18.png" style="height:45px; position:absolute; right:-20px; bottom:-85px; opacity:0.3">
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
	<div id="confirmation" class="container" style="padding-top:50px; padding-bottom:20px; display:none; position:absolute; top:0px; height:100%; width:100%; background:url('<?=base_url()?>assets/images/bg_landing_page.jpg'); background-size:cover">
		<!--<img src="<?=base_url()?>assets/images/14.png" style="height:100px; position:absolute; left:25px; top:15px; opacity:0.3">
		<img src="<?=base_url()?>assets/images/15.png" style="width:100px; position:absolute; right:20px; top:15px; opacity:0.3; -ms-transform: rotate(-80deg); -webkit-transform: rotate(-80deg); transform: rotate(-80deg)">
		<img src="<?=base_url()?>assets/images/24.png" style="width:70px; position:absolute; left:75px; bottom:55px; opacity:0.3">
		<img src="<?=base_url()?>assets/images/19.png" style="width:60px; position:absolute; right:40px; bottom:25px; opacity:0.3">-->
		<div style="width:90%;  margin:auto;">
			<div style="text-align:center; font-family:dklemon; margin-top:5%" id="ft_resp3">
				<div>
				<p align="center" style="width:50%;  margin:auto; color:#333" id="ft_resp2">
					<br>
					Silahkan Kamu check dalam inbox emailmu, <strong style="text-decoration:underline">SkateShop.Id</strong> telah mengirimkan link konfirmasi ke emailmu. Silahkan buka link tersebut untuk memastikan alamat emailmu sudah benar.
				</p>
				</div>
				<p align="center" style="margin-top:25px;">
					<a href="http://www.skateshop.id/freeskateboards" style="font-family:dinpro; text-decoration:none; color:#333; font-size:14px; border:dashed 2px #333; padding:10px 15px 12px 15px; border-radius:3px">http://www.skateshop.id/freeskateboards</a>
				</p>
				<p align="center" style="margin-top:20px;">
					<!-- AddToAny BEGIN -->
					<div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="http://www.skateshop.id/" data-a2a-title="Free Skateboards For You" style="margin:auto; width:180px; ">
					<a class="a2a_button_facebook"></a>
					<a class="a2a_button_twitter"></a>
					<a class="a2a_button_google_plus"></a>
					<a class="a2a_button_pinterest"></a>
					<a class="a2a_button_tumblr"></a>
					</div>
					<div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="http://www.skateshop.id/" data-a2a-title="Free Skateboards For You" style="margin:auto; width:180px; margin-top:10px">
					<a class="a2a_button_whatsapp"></a>
					<a class="a2a_button_stumbleupon"></a>
					<a class="a2a_button_reddit"></a>
					<a class="a2a_button_wordpress"></a>
					<a class="a2a_button_email"></a>
					</div>
					<script async src="https://static.addtoany.com/menu/page.js"></script>
					<!-- AddToAny END -->
				</p>
			</div>
        </div>
    </div>
	<div id="checklist" class="container" style="padding-top:20px; padding-bottom:20px; display:none; position:absolute; top:0px; height:100%; width:100%; background:url('<?=base_url()?>assets/images/bg_landing_page.jpg'); background-size:cover">
		<!--<img id="down_arrow" src="<?=base_url()?>assets/images/88.png" style="width:100px; position:absolute; left:25px; top:25px; opacity:0.3">
		<img id="down_arrow" src="<?=base_url()?>assets/images/77.png" style="width:50px; position:absolute; right:40px; top:25px; opacity:0.3">
		<img id="down_arrow" src="<?=base_url()?>assets/images/25.png" style="width:40px; position:absolute; left:35px; bottom:25px; opacity:0.3">
		<img id="down_arrow" src="<?=base_url()?>assets/images/55.png" style="width:50px; position:absolute; right:40px; bottom:25px; opacity:0.3">-->
		<div style="width:90%;  margin:auto;">
			<div style="text-align:center; font-family:dklemon; margin-top:20%" id="ft_resp3">
				<img id="checklist1" src="<?=base_url()?>assets/images/loading.gif" style="height:50px; visibility:hidden"><img id="strip1" src="<?=base_url()?>assets/images/strip.png" style="height:50px; visibility:hidden"><img id="checklist2" src="<?=base_url()?>assets/images/loading.gif" style="height:50px; visibility:hidden"><img id="strip2" src="<?=base_url()?>assets/images/strip.png" style="height:50px; visibility:hidden"><img id="checklist3" src="<?=base_url()?>assets/images/loading.gif" style="height:50px; visibility:hidden">
			</div>
			<p id="checklist_lanjut" style="width:100px; margin:auto; margin-bottom:0px; margin-top:50px; cursor:pointer; visibility:hidden" align="center" onclick="setChecklist()">
				<input type="hidden" id="link_email">
				<img id="down_arrow" src="<?=base_url()?>assets/images/26.png" style="width:100px;"><br>
				<font style="font-family:dklemon;" id="ft_resp2">Lanjut!</font>
			</p>
        </div>
    </div>
	<div id="selamat" class="container" style="padding-top:20px; padding-bottom:20px; display:none; position:absolute; top:0px; height:100%; width:100%; background:url('<?=base_url()?>assets/images/bg_landing_page.jpg'); background-size:cover">
		<!--<img src="<?=base_url()?>assets/images/14.png" style="height:100px; position:absolute; left:25px; top:15px; opacity:0.3">
		<img src="<?=base_url()?>assets/images/15.png" style="width:100px; position:absolute; right:20px; top:15px; opacity:0.3; -ms-transform: rotate(-80deg); -webkit-transform: rotate(-80deg); transform: rotate(-80deg)">
		<img src="<?=base_url()?>assets/images/24.png" style="width:70px; position:absolute; left:75px; bottom:55px; opacity:0.3">
		<img src="<?=base_url()?>assets/images/19.png" style="width:60px; position:absolute; right:40px; bottom:25px; opacity:0.3">-->
		<div style="width:90%;  margin:auto;">
			<div style="text-align:center; font-family:dklemon; margin-top:5%" id="ft_resp3">
				<img src="<?=base_url()?>assets/images/20.png" style="height:75px">
				<div id="congrats" style="display:none">
				<p align="center" style="width:50%;  margin:auto; color:#333" id="ft_resp2">
					<font id="ft_resp3">Selamat</font><br>
					Kamu sudah menjadi member <a href="http://www.skateshop.id" style="text-decoration:none;">SkateShop.id</a><br>
					Dan Kamu adalah salah satu dari <?=$user?> yang berkesempatan memenangkan skateboard deck dan aksessories skateboard gratis* dari <a href="http://www.skateshop.id" style="text-decoration:none;">SkateShop.id</a>
				</p>
				</div>
				<div id="bailed" style="display:none">
				<p align="center" style="width:50%;  margin:auto; color:#333" id="ft_resp2">
					<font id="ft_resp3">Selamat</font><br>
					Kamu sudah terdaftar menjadi salah satu dari <?=$user?> member <a href="http://www.skateshop.id" style="text-decoration:none;">SkateShop.id</a> tapi Kamu belum beruntung untuk mendapatkan skateboard deck dan aksesories skateboard gratis.<br>
					Silahkan lebih banyak berlatih skateboard, berteman dengan skateboarder dan menambah wawasan tentang skateboarding.
				</p>
				</div>
				<p align="center" style="margin-top:25px;">
					<a href="http://www.skateshop.id" style="font-family:dinpro; text-decoration:none; color:#333; font-size:14px; border:dashed 2px #333; padding:10px 15px 12px 15px; border-radius:3px">http://www.skateshop.id/</a>
				</p>
				<p align="center" style="margin-top:20px;">
					<img src="<?=base_url()?>assets/images/header_skate.png" style="width:300px;">
				</p>
				<p align="center" style="margin-top:20px;">
					<!-- AddToAny BEGIN -->
					<div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="http://www.skateshop.id/" data-a2a-title="Free Skateboards For You" style="margin:auto; width:180px; ">
					<a class="a2a_button_facebook"></a>
					<a class="a2a_button_twitter"></a>
					<a class="a2a_button_google_plus"></a>
					<a class="a2a_button_pinterest"></a>
					<a class="a2a_button_tumblr"></a>
					</div>
					<div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="http://www.skateshop.id/" data-a2a-title="Free Skateboards For You" style="margin:auto; width:180px; margin-top:10px">
					<a class="a2a_button_whatsapp"></a>
					<a class="a2a_button_stumbleupon"></a>
					<a class="a2a_button_reddit"></a>
					<a class="a2a_button_wordpress"></a>
					<a class="a2a_button_email"></a>
					</div>
					<script async src="https://static.addtoany.com/menu/page.js"></script>
					<!-- AddToAny END -->
				</p>
				<!--<p style="width:100px; margin:auto; margin-bottom:0px; margin-top:0px; cursor:pointer;" align="center" onclick="clearCache()">-->
				<p style="width:100%; margin:auto; margin-bottom:0px; margin-top:0px; cursor:pointer;" align="center">
					<font style="font-family:dklemon;" id="ft_resp2">Ajak teman disebelahmu untuk mengikuti kesempatan ini</font>
				</p>
			</div>
        </div>
    </div>
</div>
<!--<div id="biodata_bottom" style="display:block; position:absolute; height:700px; width:100%">
</div>-->

