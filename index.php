<!DOCTYPE html>
<html>
<head>
	<title>App Barcelona</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">-->
	<meta name="viewport" content="width=device-width, user-scalable=no" />

	
	<link rel="stylesheet" href="css/jquery.mobile.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fuente.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/messi.min.css" />



        
		


		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/messi.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/jquery.nailthumb.1.1.min.js"></script>
		<script src="js/javascript-video-scrubber.js" type="text/javascript"></script>
		<script src="js/slick.min.js"></script>

		<script src="js/custom-scripting.js"></script>
		<script src="js/jquery.mobile-1.4.5.min.js" ></script>
		<script src="js/index.js" ></script>  
</head>
<body > 

<!--
  |================================================================================|
  | INICIO															 
  |================================================================================|
	-->
<div data-role="page" id="inicio">

	<div data-role="content">
	<div class="oficial col-md-12 text-center">
		<img src="img/un_solo_idolo_blanco.png" />
	</div>

	<div id="overlay"></div>
	
	<img id="video" src="frame/barcelona_00000.jpg" alt="" />
	<!--<img id="video" src="http://barcelonasc.com.ec/barcelona.gif" alt="" dynsrc="http://barcelonasc.com.ec/barcelona.gif" loop=infinite />-->
	<div class="informacion-ne3 col-md-12 text-center">
		<h3>Bienvenidos</h3>
		<p>Regístrate y obtendrás toda información Oficial del Club.</p>
	</div>
	
		<!--<div id="avanzoRegistro"><a href="#registro"><span>PROMO</span></a></div>-->
		<div id="noMeRegistro" style="width:100%; left:0"><a href="#principal"><span>CONTINUAR</span></a></div>
		
	</div><!-- /content -->

</div><!-- /page -->

<!--
  |================================================================================|
  | REGISTRO															 
  |================================================================================|
	-->
<div data-role="page" id="registro">

	<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-bsc">
		<a href="#inicio" data-transition="slide" data-direction="reverse" data-rel="abrir"> <i class="fa fa-chevron-left fa-2x"></i> </a>
		<h1>PROMO</h1>
		<div class="icoBSC_black"></div>
	</div><!-- /header -->

	<div data-role="content">
		<div class="col-md-12 col-xs-12 col-sm-12 text-center">
			<img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/barcelona_logo_gris.png" />
		</div>
		<div class="col-md-12 col-xs-12 col-sm-12 text-center">
			<h3>INGRESA TUS DATOS</h3>
		</div>
		<div class="col-md-12 col-xs-12 col-sm-12">
		<form class="cRegistro" id="cRegistro" method="post" action=""  novalidate="novalidate">
			<div class="col-md-6 col-xs-6 col-sm-6">
				<label>Nombres *</label>
				<input type="text" name="name" id="name">
			</div>
			<div class="col-md-6 col-xs-6 col-sm-6">
				<label>Apellidos *</label>
				<input type="text" name="lastname" id="lastname">
			</div>
			<div class="col-md-6 col-xs-6 col-sm-6">
				<label>Pais</label>
				<select id="country">
					<option value="AF">Afghanistan</option>
					<option value="AX">Åland Islands</option>
					<option value="AL">Albania</option>
					<option value="DZ">Algeria</option>
					<option value="AS">American Samoa</option>
					<option value="AD">Andorra</option>
					<option value="AO">Angola</option>
					<option value="AI">Anguilla</option>
					<option value="AQ">Antarctica</option>
					<option value="AG">Antigua and Barbuda</option>
					<option value="AR">Argentina</option>
					<option value="AM">Armenia</option>
					<option value="AW">Aruba</option>
					<option value="AU">Australia</option>
					<option value="AT">Austria</option>
					<option value="AZ">Azerbaijan</option>
					<option value="BS">Bahamas</option>
					<option value="BH">Bahrain</option>
					<option value="BD">Bangladesh</option>
					<option value="BB">Barbados</option>
					<option value="BY">Belarus</option>
					<option value="BE">Belgium</option>
					<option value="BZ">Belize</option>
					<option value="BJ">Benin</option>
					<option value="BM">Bermuda</option>
					<option value="BT">Bhutan</option>
					<option value="BO">Bolivia, Plurinational State of</option>
					<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
					<option value="BA">Bosnia and Herzegovina</option>
					<option value="BW">Botswana</option>
					<option value="BV">Bouvet Island</option>
					<option value="BR">Brazil</option>
					<option value="IO">British Indian Ocean Territory</option>
					<option value="BN">Brunei Darussalam</option>
					<option value="BG">Bulgaria</option>
					<option value="BF">Burkina Faso</option>
					<option value="BI">Burundi</option>
					<option value="KH">Cambodia</option>
					<option value="CM">Cameroon</option>
					<option value="CA">Canada</option>
					<option value="CV">Cape Verde</option>
					<option value="KY">Cayman Islands</option>
					<option value="CF">Central African Republic</option>
					<option value="TD">Chad</option>
					<option value="CL">Chile</option>
					<option value="CN">China</option>
					<option value="CX">Christmas Island</option>
					<option value="CC">Cocos (Keeling) Islands</option>
					<option value="CO">Colombia</option>
					<option value="KM">Comoros</option>
					<option value="CG">Congo</option>
					<option value="CD">Congo, the Democratic Republic of the</option>
					<option value="CK">Cook Islands</option>
					<option value="CR">Costa Rica</option>
					<option value="CI">Côte d'Ivoire</option>
					<option value="HR">Croatia</option>
					<option value="CU">Cuba</option>
					<option value="CW">Curaçao</option>
					<option value="CY">Cyprus</option>
					<option value="CZ">Czech Republic</option>
					<option value="DK">Denmark</option>
					<option value="DJ">Djibouti</option>
					<option value="DM">Dominica</option>
					<option value="DO">Dominican Republic</option>
					<option value="EC" selected>Ecuador</option>
					<option value="EG">Egypt</option>
					<option value="SV">El Salvador</option>
					<option value="GQ">Equatorial Guinea</option>
					<option value="ER">Eritrea</option>
					<option value="EE">Estonia</option>
					<option value="ET">Ethiopia</option>
					<option value="FK">Falkland Islands (Malvinas)</option>
					<option value="FO">Faroe Islands</option>
					<option value="FJ">Fiji</option>
					<option value="FI">Finland</option>
					<option value="FR">France</option>
					<option value="GF">French Guiana</option>
					<option value="PF">French Polynesia</option>
					<option value="TF">French Southern Territories</option>
					<option value="GA">Gabon</option>
					<option value="GM">Gambia</option>
					<option value="GE">Georgia</option>
					<option value="DE">Germany</option>
					<option value="GH">Ghana</option>
					<option value="GI">Gibraltar</option>
					<option value="GR">Greece</option>
					<option value="GL">Greenland</option>
					<option value="GD">Grenada</option>
					<option value="GP">Guadeloupe</option>
					<option value="GU">Guam</option>
					<option value="GT">Guatemala</option>
					<option value="GG">Guernsey</option>
					<option value="GN">Guinea</option>
					<option value="GW">Guinea-Bissau</option>
					<option value="GY">Guyana</option>
					<option value="HT">Haiti</option>
					<option value="HM">Heard Island and McDonald Islands</option>
					<option value="VA">Holy See (Vatican City State)</option>
					<option value="HN">Honduras</option>
					<option value="HK">Hong Kong</option>
					<option value="HU">Hungary</option>
					<option value="IS">Iceland</option>
					<option value="IN">India</option>
					<option value="ID">Indonesia</option>
					<option value="IR">Iran, Islamic Republic of</option>
					<option value="IQ">Iraq</option>
					<option value="IE">Ireland</option>
					<option value="IM">Isle of Man</option>
					<option value="IL">Israel</option>
					<option value="IT">Italy</option>
					<option value="JM">Jamaica</option>
					<option value="JP">Japan</option>
					<option value="JE">Jersey</option>
					<option value="JO">Jordan</option>
					<option value="KZ">Kazakhstan</option>
					<option value="KE">Kenya</option>
					<option value="KI">Kiribati</option>
					<option value="KP">Korea, Democratic People's Republic of</option>
					<option value="KR">Korea, Republic of</option>
					<option value="KW">Kuwait</option>
					<option value="KG">Kyrgyzstan</option>
					<option value="LA">Lao People's Democratic Republic</option>
					<option value="LV">Latvia</option>
					<option value="LB">Lebanon</option>
					<option value="LS">Lesotho</option>
					<option value="LR">Liberia</option>
					<option value="LY">Libya</option>
					<option value="LI">Liechtenstein</option>
					<option value="LT">Lithuania</option>
					<option value="LU">Luxembourg</option>
					<option value="MO">Macao</option>
					<option value="MK">Macedonia, the former Yugoslav Republic of</option>
					<option value="MG">Madagascar</option>
					<option value="MW">Malawi</option>
					<option value="MY">Malaysia</option>
					<option value="MV">Maldives</option>
					<option value="ML">Mali</option>
					<option value="MT">Malta</option>
					<option value="MH">Marshall Islands</option>
					<option value="MQ">Martinique</option>
					<option value="MR">Mauritania</option>
					<option value="MU">Mauritius</option>
					<option value="YT">Mayotte</option>
					<option value="MX">Mexico</option>
					<option value="FM">Micronesia, Federated States of</option>
					<option value="MD">Moldova, Republic of</option>
					<option value="MC">Monaco</option>
					<option value="MN">Mongolia</option>
					<option value="ME">Montenegro</option>
					<option value="MS">Montserrat</option>
					<option value="MA">Morocco</option>
					<option value="MZ">Mozambique</option>
					<option value="MM">Myanmar</option>
					<option value="NA">Namibia</option>
					<option value="NR">Nauru</option>
					<option value="NP">Nepal</option>
					<option value="NL">Netherlands</option>
					<option value="NC">New Caledonia</option>
					<option value="NZ">New Zealand</option>
					<option value="NI">Nicaragua</option>
					<option value="NE">Niger</option>
					<option value="NG">Nigeria</option>
					<option value="NU">Niue</option>
					<option value="NF">Norfolk Island</option>
					<option value="MP">Northern Mariana Islands</option>
					<option value="NO">Norway</option>
					<option value="OM">Oman</option>
					<option value="PK">Pakistan</option>
					<option value="PW">Palau</option>
					<option value="PS">Palestinian Territory, Occupied</option>
					<option value="PA">Panama</option>
					<option value="PG">Papua New Guinea</option>
					<option value="PY">Paraguay</option>
					<option value="PE">Peru</option>
					<option value="PH">Philippines</option>
					<option value="PN">Pitcairn</option>
					<option value="PL">Poland</option>
					<option value="PT">Portugal</option>
					<option value="PR">Puerto Rico</option>
					<option value="QA">Qatar</option>
					<option value="RE">Réunion</option>
					<option value="RO">Romania</option>
					<option value="RU">Russian Federation</option>
					<option value="RW">Rwanda</option>
					<option value="BL">Saint Barthélemy</option>
					<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
					<option value="KN">Saint Kitts and Nevis</option>
					<option value="LC">Saint Lucia</option>
					<option value="MF">Saint Martin (French part)</option>
					<option value="PM">Saint Pierre and Miquelon</option>
					<option value="VC">Saint Vincent and the Grenadines</option>
					<option value="WS">Samoa</option>
					<option value="SM">San Marino</option>
					<option value="ST">Sao Tome and Principe</option>
					<option value="SA">Saudi Arabia</option>
					<option value="SN">Senegal</option>
					<option value="RS">Serbia</option>
					<option value="SC">Seychelles</option>
					<option value="SL">Sierra Leone</option>
					<option value="SG">Singapore</option>
					<option value="SX">Sint Maarten (Dutch part)</option>
					<option value="SK">Slovakia</option>
					<option value="SI">Slovenia</option>
					<option value="SB">Solomon Islands</option>
					<option value="SO">Somalia</option>
					<option value="ZA">South Africa</option>
					<option value="GS">South Georgia and the South Sandwich Islands</option>
					<option value="SS">South Sudan</option>
					<option value="ES">Spain</option>
					<option value="LK">Sri Lanka</option>
					<option value="SD">Sudan</option>
					<option value="SR">Suriname</option>
					<option value="SJ">Svalbard and Jan Mayen</option>
					<option value="SZ">Swaziland</option>
					<option value="SE">Sweden</option>
					<option value="CH">Switzerland</option>
					<option value="SY">Syrian Arab Republic</option>
					<option value="TW">Taiwan, Province of China</option>
					<option value="TJ">Tajikistan</option>
					<option value="TZ">Tanzania, United Republic of</option>
					<option value="TH">Thailand</option>
					<option value="TL">Timor-Leste</option>
					<option value="TG">Togo</option>
					<option value="TK">Tokelau</option>
					<option value="TO">Tonga</option>
					<option value="TT">Trinidad and Tobago</option>
					<option value="TN">Tunisia</option>
					<option value="TR">Turkey</option>
					<option value="TM">Turkmenistan</option>
					<option value="TC">Turks and Caicos Islands</option>
					<option value="TV">Tuvalu</option>
					<option value="UG">Uganda</option>
					<option value="UA">Ukraine</option>
					<option value="AE">United Arab Emirates</option>
					<option value="GB">United Kingdom</option>
					<option value="US">United States</option>
					<option value="UM">United States Minor Outlying Islands</option>
					<option value="UY">Uruguay</option>
					<option value="UZ">Uzbekistan</option>
					<option value="VU">Vanuatu</option>
					<option value="VE">Venezuela, Bolivarian Republic of</option>
					<option value="VN">Viet Nam</option>
					<option value="VG">Virgin Islands, British</option>
					<option value="VI">Virgin Islands, U.S.</option>
					<option value="WF">Wallis and Futuna</option>
					<option value="EH">Western Sahara</option>
					<option value="YE">Yemen</option>
					<option value="ZM">Zambia</option>
					<option value="ZW">Zimbabwe</option>
				</select>
			</div>
			<div class="col-md-6 col-xs-6 col-sm-6">
				<label>Ciudad *</label>
				<input type="text" name="city" id="city">
			</div>
			<div class="col-md-12 col-xs-12 col-sm-12">
				<label>Teléfono *</label>
				<input type="text" name="phone" id="phone">
			</div>
			<div class="col-md-12 col-xs-12 col-sm-12">
				<label>Correo Eléctronico *</label>
				<input type="text" name="email" id="email">
			</div>
			<div class="col-md-12 col-xs-12 col-sm-12 text-center">
				<input type="submit" value="CONTINUAR" class="submit"/>
			</div>

		</form>
		<script type="text/javascript">
		 $("#cRegistro").validate({
		         rules: {
		            name: "required",
		            lastname: "required",
		            country:"require",
		            city:"required",
		            phone:{
		            	required: true,
		            	number: true 
		            },
		            email: {
		              required: true,
		              email: true
		            }
		          },
		          messages: {
		            name: "Ingrese su nombre",
		            lastname: "Ingrese su apellido",
		            country: "Ingrese su Pais",
		            city: "Ingrese su ciudad",
		            phone: {
		            	required:"Ingrese su Telefono",
		            	number:"Ingrese numeros"
		            },
		            email: {
		              required: "Necesitamos un email valido",
		              email: "Su email debe tener formato valido name@domain.com"
		            }
		          },/*
		          success: function(form){
		          	alert('formulario');
		          },*/
		        submitHandler: function(form) {
		          guardoDatos();
		        }
		       });
		</script>
		</div>
	</div><!-- /content -->

</div><!-- /page -->

<!--
  |================================================================================|
  | PRINCIPAL															 
  |================================================================================|
	-->
<div data-role="page" id="principal">

		
	<div data-role="panel" id="mypanel">
			<div id="reglaSlogan" class="text-center"><a href="#" data-transition="sdivde"><img class="bscLogo" src="https://www.barcelonasc.com.ec/apps/bsc_news/img/un_solo_idolo.png"></a></div>
	    	<!--MENU-->
			<ul class="row">	    		
				<li class="col-md-12 col-sm-12 col-xs-12 text-center"><a href="#my-header" data-rel="close" data-transition="slide"><i class="fa fa-list fa-2x"></i><span>Noticias</span></a></li>
				<li class="col-md-12 col-sm-12 col-xs-12 text-center"><a href="#proximopartido" data-transition="slide"><i class="fa fa-calendar-o fa-2x"></i><span>Calendario</span></a></li>
				<li class="col-md-12 col-sm-12 col-xs-12 text-center"><a href="#plantillas" data-transition="slide"><i class="fa fa-user fa-2x"></i><span>Plantilla</span></a></li>
				<li class="col-md-12 col-sm-12 col-xs-12 text-center"><a href="#estadisticas" data-transition="slide"><i class="fa fa-bar-chart fa-2x"></i><span>Posiciones</span></a></li>
				<li class="col-md-12 col-sm-12 col-xs-12 text-center"><a href="#descargas" data-transition="slide"><i class="fa fa-download fa-2x"></i><span id="mR" >Descargas</span></a></li>
				<li id="link_bscFan" class="col-md-12 col-sm-12 col-xs-12 text-center"><a id="link_bscFan" href="#"><i class="fa fa-bscFan fa-2x"></i><span>BSC FAN</span></a></li>
				<li class="col-md-12 col-sm-12 col-xs-12 text-center m20"><a href="#" onclick="window.open('https://www.facebook.com/barcelonascweb', '_system');"><i class="fa fa-facebook-official fa-2x"></i><span>Facebook</span></a></li>
				<li class="col-md-12 col-sm-12 col-xs-12 text-center"><a href="#" onclick="window.open('https://twitter.com/BarcelonaSCweb', '_system');"><i class="fa fa-twitter-square fa-2x"></i><span>Twitter</span></a></li>
				<li class="col-md-12 col-sm-12 col-xs-12 text-center"><a href="#" onclick="window.open('https://instagram.com/barcelonasc', '_system');"><i class="fa fa-instagram fa-2x"></i><span>Instagram</span></a></li>
			</ul>
	    	<!--<a href="#my-header" data-rel="close">Close panel</a>-->
			<div id="reglaSlogan2" class="col-md-12 col-sm-12 col-xs-12 text-center"><a href="#"><img class="bscLogo" src="https://www.barcelonasc.com.ec/apps/bsc_news/img/appOficial.png" /></a></div>	    
	</div><!-- /panel -->

	<div data-role="header" data-tap-toggle="false" data-position="fixed" class="header-bsc">
		<a href="#mypanel" id="xcv" data-transition="slide" data-direction="reverse" data-rel="abrir" ><i class="fa fa-bars fa-2x"></i></a>
		<h1 class="extraLargo">ÚLTIMAS <strong>NOTICIAS</strong></h1>
		<div class="icoBSC_black"></div>
	</div><!-- /header -->

	<div data-role="content">
		<div class="infVideos"><span>ÚLTIMOS <strong>VIDEOS</strong></span></div>
		<div class="sliderVideo">
			
		</div>
		
		<div class="infNoticias" style="margin-top: 50px;"><span>ÚLTIMAS <strong>NOTICIAS</strong></span></div>
		

		<div class="noti">


			<div class="noticias row"></div>
		</div>
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="footer-bsc">
		<!--<div class="logoMini"></div>-->
	</div><!-- /footer -->
</div><!-- /page -->


<!--
  |================================================================================|
  | PROXIMO PARTIDO
  |================================================================================|
	-->
<div data-role="page" id="proximopartido">

	<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-bsc">
		<a href="#principal" data-transition="slide" data-direction="reverse" data-rel="abrir"> <i class="fa fa-chevron-left fa-2x"></i> </a>
		<h1>PRÓXIMO <strong>PARTIDO</strong></h1>
		<div class="icoBSC_black"></div>
	</div><!-- /header -->

	<div data-role="content">
		<div class="ads-proximo1" ></div>
		<div class="cancha-vs">
			
		</div>
		<div class="col-md-6 col-xs-6 text-center">
			<a href="#distribucion" data-transition="slide" data-rel="abrir">
				<div class="distribucionCancha"></div>
			</a>
		</div>
		<div class="col-md-6 col-xs-6 text-center">
			<a href="#minuto" data-transition="slide" data-rel="abrir">
				<div class="minutoAMinuto"></div>
			</a> 
		</div>
		
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="footer-bsc">
		<div class="ads-proximo2" ></div>
		<!--<div class="logoMini"></div>-->
	</div><!-- /footer -->
</div><!-- /page -->

<!--
  |================================================================================|
  | DISTRIBUCION
  |================================================================================|
	-->
<div data-role="page" id="distribucion">

	<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-bsc">
		<a href="#proximopartido" data-transition="slide" data-direction="reverse" data-rel="abrir"> <i class="fa fa-chevron-left fa-2x"></i> </a>
		<h1>ALINEACIÓN</h1>
		<div class="icoBSC_black"></div>
	</div><!-- /header -->

	<div data-role="content">
		<div class="infVideos"><span>CAMPEONATO ECUATORIANO DE FÚTBOL</span></div>
		<div class="canchaCampeonato">
			<div id="position1" class="row"></div>
			<div id="position2" class="row"></div>
			<div id="position3" class="row"></div>
			<div id="position4" class="row"></div>
		
		<div class="suplentes row"><div class="col-md-12 col-xs-12 col-sm-12 text-center"><strong> SUPLENTES </strong></div></div>
		</div>
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="footer-bsc">
		<div class="ads-distribucion1" ></div>
		<!--<div class="logoMini"></div>-->
	</div><!-- /footer -->
</div><!-- /page -->

<!--
  |================================================================================|
  | MINUTO A MINUTO
  |================================================================================|
	-->
<div data-role="page" id="minuto">

	<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-bsc">
		<a href="#proximopartido" data-transition="slide" data-direction="reverse" data-rel="abrir"> <i class="fa fa-chevron-left fa-2x"></i> </a>
		<h1>MINUTO A MINUTO</h1>
		<div class="icoBSC_black"></div>
	</div><!-- /header -->

	<div data-role="content">
		<div class="infVideos"><span>CAMPEONATO ECUATORIANO DE FÚTBOL</span></div>
		<div class="minutoTwitter"></div>

	</div><!-- /content -->

	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="footer-bsc">
		<div class="ads-minuto1" ></div>
		<!--<div class="logoMini"></div>-->
	</div><!-- /footer -->
</div><!-- /page -->


<!--
  |================================================================================|
  | CARGO NOTICIA
  |================================================================================|
	-->
<div data-role="page" id="noticia">

	<div data-role="header" data-position="fixed" class="header-bsc" data-tap-toggle="false">
		<a href="#principal" data-transition="slide" data-direction="reverse" data-back="true"> <i class="fa fa-chevron-left fa-2x"></i> </a>
		<h1><strong>NOTICIAS</strong></h1>
		<div class="icoBSC_black"></div>
	</div><!-- /header -->

	<div data-role="content">
		<div class="infNoticias2"><span>ÚLTIMAS <strong>NOTICIAS</strong></span></div>
		<div class="noticiaPublicada"></div>
		
		
	</div><!-- /content -->
	
	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="footer-bsc">
		<div class="ads-noticia1"></div>
		<!--<div class="logoMini"></div>-->
	</div><!-- /footer -->
</div><!-- /page -->


<!--
  |================================================================================|
  | PLANTILLAS
  |================================================================================|
	-->
<div data-role="page" id="plantillas">

	<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-bsc">
		<a href="#principal" data-transition="slide" data-direction="reverse" data-back="true"> <i class="fa fa-chevron-left fa-2x"></i> </a>
		<h1>PLANTILLA</h1>
		<div class="icoBSC_black"></div>
	</div><!-- /header -->

	<div data-role="content">
		<div class="infVideos"><span>PRIMER <strong>EQUIPO</strong></span></div>
		<div class="infNoticias"><span>NÚMERO  |<strong>JUGADOR</strong></span></div>
		
	    <div id="cargo-unidad-equipo"></div>
		
	</div><!-- /content -->
	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="footer-bsc">
		<div class="ads_plantilla1"></div>
		<!--<div class="logoMini"></div>-->
	</div><!-- /footer -->
</div><!-- /page -->



<!--
  |================================================================================|
  | ESTADISTICAS
  |================================================================================|
	-->
<div data-role="page" id="estadisticas">

	<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-bsc">
		<a href="#principal" data-transition="slide" data-direction="reverse" data-rel="abrir"> <i class="fa fa-chevron-left fa-2x"></i> </a>
		<h1>ESTADÍSTICAS</h1>
		<div class="icoBSC_black"></div>
	</div><!-- /header -->

	<div data-role="content">
		
		<!--<div class=" estadistica col-md-12 col-xs-12 col-sm-12 text-center"><h4>TABLA DE POSICIONES <span>2015</span></h4></div>
		</div>-->
			<div class="infVideos"><span><strong>TABLA DE POSICIONES</strong> 2015 </span></div>
		
		<div id="tabs" >
			  <ul class="row">
			    <li class="col-md-4 col-xs-4 col-sm-4 text-center"><a href="#tabs-1">ETAPA 1</a></li>
			    <li class="col-md-4 col-xs-4 col-sm-4 text-center ui-tabs-active"><a href="#tabs-2">ETAPA 2</a></li>
			    <li class="col-md-4 col-xs-4 col-sm-4 text-center"><a href="#acumulada">ACUMULADA</a></li>
			  </ul>
			  <div id="tabs-1">
			  		<ul class="tabla_posicionesEtapa1">
			  			<li class="col-md-5 col-xs-5 col-sm-5 text-center"><span>EQUIPO</span></li>
			  			<li class="col-md-2 col-xs-2 col-sm-2 text-center"><span>PJ</span></li>
			  			<li class="col-md-2 col-xs-2 col-sm-2 text-center"><span>GD</span></li>
			  			<li class="col-md-3 col-xs-3 col-sm-3 text-center"><span>PTS</span></li>
			  		</ul>
			  		<ul class="posicionesEtapa1"></ul>
			  </div>
			  <div id="tabs-2">
			  	
			    <ul class="tabla_posicionesEtapa2">
			  			<li class="col-md-5 col-xs-5 col-sm-5 text-center"><span>EQUIPO</span></li>
			  			<li class="col-md-2 col-xs-2 col-sm-2 text-center"><span>PJ</span></li>
			  			<li class="col-md-2 col-xs-2 col-sm-2 text-center"><span>GD</span></li>
			  			<li class="col-md-3 col-xs-3 col-sm-3 text-center"><span>PTS</span></li>
			  		</ul>
			  		<ul class="posicionesEtapa2"></ul>
			  </div>
			  <div id="acumulada">
			    <ul class="tabla_posicionesAcumulada">
			  			<li class="col-md-5 col-xs-5 col-sm-5 text-center"><span>EQUIPO</span></li>
			  			<li class="col-md-2 col-xs-2 col-sm-2 text-center"><span>PJ</span></li>
			  			<li class="col-md-2 col-xs-2 col-sm-2 text-center"><span>GD</span></li>
			  			<li class="col-md-3 col-xs-3 col-sm-3 text-center"><span>PTS</span></li>
			  		</ul>
			  		<ul class="posicionesAcumulada"></ul>
			  </div>
			  
		</div>

	</div><!-- /content -->

	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="footer-bsc">
		<div class="jugador_del_partido"></div>
		<div class="ads_estadisticas1"></div>
		<!--<div class="logoMini"></div>-->
	</div><!-- /footer -->
</div><!-- /page -->



<!--
  |================================================================================|
  | DESCARGA DESCARGAS
  |================================================================================|
	-->
<div data-role="page" id="descargas">

	<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-bsc">
		<a href="#principal" id="regreso" data-transition="slide" data-direction="reverse" data-rel="abrir"> <i class="fa fa-chevron-left fa-2x"></i> </a>
		<h1>DESCARGAS</h1>
		<div class="icoBSC_black"></div>
	</div><!-- /header -->

	<div data-role="content">
		<div id="tabs2">
			<ul class="row">
				<li class="col-md-6 col-xs-6 col-sm-6 text-center ui-tabs-active"><a href="#tabs-1A"><i class="fa fa-chevron-circle-left fa-lg"></i>  WALLPAPERS</a></li>
			    <li class="col-md-6 col-xs-6 col-sm-6 text-center"><a href="#tabs-2A">RINGTONES  <i class="fa fa-chevron-circle-right fa-lg"></i></a></li>
			</ul>
			<div id="tabs-1A">
				<!--<div class="ads-wallpapers1"></div>-->
				<div class="slider-for">
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen1.png&size=200x300" /><div id="desc" onclick="descargo('https://www.barcelonasc.com.ec/apps/bsc_news/img/wallpapers/screen1.png')"><i class="fa fa-silueta-download fa-2x"></i></div></div>
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen2.png&size=200x300" /><div id="desc" onclick="descargo('https://www.barcelonasc.com.ec/apps/bsc_news/img/wallpapers/screen2.png')"><i class="fa fa-silueta-download fa-2x"></i></div></div>
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen3.png&size=200x300" /><div id="desc" onclick="descargo('https://www.barcelonasc.com.ec/apps/bsc_news/img/wallpapers/screen3.png')"><i class="fa fa-silueta-download fa-2x"></i></div></div>
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen4.png&size=200x300" /><div id="desc" onclick="descargo('https://www.barcelonasc.com.ec/apps/bsc_news/img/wallpapers/screen4.png')"><i class="fa fa-silueta-download fa-2x"></i></div></div>
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen5.png&size=200x300" /><div id="desc" onclick="descargo('https://www.barcelonasc.com.ec/apps/bsc_news/img/wallpapers/screen5.png')"><i class="fa fa-silueta-download fa-2x"></i></div></div>
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen6.png&size=200x300" /><div id="desc" onclick="descargo('https://www.barcelonasc.com.ec/apps/bsc_news/img/wallpapers/screen6.png')"><i class="fa fa-silueta-download fa-2x"></i></div></div>
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen7.png&size=200x300" /><div id="desc" onclick="descargo('https://www.barcelonasc.com.ec/apps/bsc_news/img/wallpapers/screen7.png')"><i class="fa fa-silueta-download fa-2x"></i></div></div>
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen8.png&size=200x300" /><div id="desc" onclick="descargo('https://www.barcelonasc.com.ec/apps/bsc_news/img/wallpapers/screen8.png')"><i class="fa fa-silueta-download fa-2x"></i></div></div>
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen9.png&size=200x300" /><div id="desc" onclick="descargo('https://www.barcelonasc.com.ec/apps/bsc_news/img/wallpapers/screen9.png')"><i class="fa fa-silueta-download fa-2x"></i></div></div>
				</div>
				<div class="slider-nav">
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen1.png&size=100x100" alt="" /></div>
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen2.png&size=100x100" alt="" /></div>
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen3.png&size=100x100" alt="" /></div>
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen4.png&size=100x100" alt="" /></div>
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen5.png&size=100x100" alt="" /></div>
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen6.png&size=100x100" alt="" /></div>
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen7.png&size=100x100" alt="" /></div>
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen8.png&size=100x100" alt="" /></div>
					<div><img src="https://www.barcelonasc.com.ec/apps/bsc_news/img/thumb3.php?src=./wallpapers/screen9.png&size=100x100" alt="" /></div>

				</div>
			</div>
			<div id="tabs-2A">
				<!--<div class="ads-wallpapers1"></div>-->
				<div class="play_sounds row">
			    	<div class="boton col-md-4 col-sm-4 col-xs-4 text-right">
			    		<div class="retrocedo_button"><i class="fa fa-backward fa-2x"></i></div>
			    	</div>
			    	<div class="boton2 col-md-4 col-sm-4 col-xs-4 text-center">
			    		<div class="play_button"><i class="fa fa-play fa-3x"></i></div>
			    		<div class="pause_button"><i class="fa fa-pause fa-3x"></i></div>
			    	</div>
			    	<div class="boton col-md-4 col-sm-4 col-xs-4 text-left">
			    		<div class="avanzo_button"><i class="fa fa-forward fa-2x"></i></div>
			    	</div>
				</div>

			    <div class="titulo_Audio col-md-12 col-xs-12 col-sm-12 text-center"><span>Himno de barcelona</span></div>
				<div class="mas_audios col-md-12 col-xs-12 col-sm-12">
					<ul>
						<li><div class="col-md-12 col-xs-12 col-sm-12 text-center"><i class="fa fa-play" onclick="reproducir(0)"></i><i class="fa fa-download fa-lg" onclick="ring('https://www.barcelonasc.com.ec/descargas/ringtones/amarillo_es_mi_color.mp3, amarillo_es_mi_color.mp3')"></i></div><div class="rayaSepara2 col-md-12 col-xs-12 col-sm-12 text-center"><span>Amarillo es mi color</span></div></li>
						<li><div class="col-md-12 col-xs-12 col-sm-12 text-center"><i class="fa fa-play" onclick="reproducir(1)"></i><i class="fa fa-download fa-lg" onclick="ring('https://www.barcelonasc.com.ec/descargas/ringtones/barcelona_soy_yo.mp3, barcelona_soy_yo.mp3')"></i></div><div class="rayaSepara2 col-md-12 col-xs-12 col-sm-12 text-center"><span>Barcelona soy yo</span></div></li>
						<li><div class="col-md-12 col-xs-12 col-sm-12 text-center"><i class="fa fa-play" onclick="reproducir(2)"></i><i class="fa fa-download fa-lg" onclick="ring('https://www.barcelonasc.com.ec/descargas/ringtones/dale_dale_barcelona.mp3, dale_dale_barcelona.mp3')"></i></div><div class="rayaSepara2 col-md-12 col-xs-12 col-sm-12 text-center"><span>Dale Dale Barcelona</span></div></li>
						<li><div class="col-md-12 col-xs-12 col-sm-12 text-center"><i class="fa fa-play" onclick="reproducir(3)"></i><i class="fa fa-download fa-lg" onclick="ring('https://www.barcelonasc.com.ec/descargas/ringtones/himno_de_barcelona.mp3, himno_de_barcelona.mp3')"></i></div><div class="rayaSepara2 col-md-12 col-xs-12 col-sm-12 text-center"><span>Himno de barcelona</span></div></li>
						<li><div class="col-md-12 col-xs-12 col-sm-12 text-center"><i class="fa fa-play" onclick="reproducir(4)"></i><i class="fa fa-download fa-lg" onclick="ring('https://www.barcelonasc.com.ec/descargas/ringtones/sangre_de_campeon.mp3, sangre_de_campeon.mp3')"></i></div><div class="rayaSepara2 col-md-12 col-xs-12 col-sm-12 text-center"><span>Sangre de Campeon</span></div></li>
						<li><div class="col-md-12 col-xs-12 col-sm-12 text-center"><i class="fa fa-play" onclick="reproducir(5)"></i><i class="fa fa-download fa-lg" onclick="ring('https://www.barcelonasc.com.ec/descargas/ringtones/un_solo_idolo.mp3, un_solo_idolo.mp3')"></i></div><div class="rayaSepara2 col-md-12 col-xs-12 col-sm-12 text-center"><span>Un Solo Idolo</span></div></li>
					</ul>
				</div>
			</div>
		</div> 
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="footer-bsc">
		<!--<div class="logoMini"></div>-->
		<div class="ads-wallpapers2"></div>
	</div><!-- /footer -->
</div><!-- /page -->

		<script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="wallpaper.js"></script>
        <script type="text/javascript" src="video.js"></script>

</body>
</html>
	