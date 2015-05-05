<!doctype HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Web Design Mendoza</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab|Open+Sans:400,300' rel='stylesheet' type='text/css'>

	<!-- CSS -->
	<link type="text/css" rel="stylesheet" href="min/packer.php?type=css&path=css&files=reset,style"/>

	<!--[if lt IE 9]>
	<script src="js/libs/html5-3.4-respond-1.1.0.min.js"></script>
	<![endif]-->
</head>
<body>
	<header class="header-main">
		<div class="brand"></div>
		<div id="menu-btn">Menú</div>
	</header>
	<div id="menu-list">
		<menu>
			<ul>
				<li><a href="#quehacemos">Qué hacemos</a></li>
				<li><a href="#ejemplos">Ejemplos</a></li>
				<li><a href="#nosotros">Quiénes somos</a></li>
				<li><a href="#proyecto">Cotiza ya gratis!</a></li>
			</ul>
		</menu>
	</div>
	<div id="shell">		
		<div id="home" class="frame">
			<div class="frame-content">
				<div class="wrap-centered">
					<h1>Tu sitio web, para vos</h1>
					<h2>Fácil, rápido y aquí en Mendoza</h2>
				</div>				
			</div>
		</div>
		<div id="what" class="frame">
			<div class="frame-content">
				<div class="blueprint-tex"></div>
				<div class="wrap-centered">
					<div id="slide-what" class="slide">
						<div class="slw current">
							<img src="img/2.gif">
							<h1>Diseñamos tu sitio web</h1>
							<h2>Creamos y desarrollamos lo que necesitás:<br>
								un sitio bello, efectivo y fácil de usar</h2>
						</div>
						<div class="slw">
							<div class="clearfix">
								<div class="slw-col">
									<img src="img/what1.png">
									<p>Conectamos tu sitio con las redes sociales<br>
										(Facebook, Twitter, etc.)
									</p>
								</div>
								<div class="slw-col">
									<img src="img/what1.png">
									<p>Hacemos que tu sitio web sea una sucursal más para tu negocio
									</p>
								</div>
								<div class="slw-col">
									<img src="img/what1.png">
									<p>Posicionamos tu sitio en los buscadores<br>
										(Google, Yahoo)
									</p>
								</div>
							</div>
						</div>
						<div class="tex"><div class="blueprint-tex"></div></div>				
					</div>
					
				</div>
				
			</div>
		</div>
		<div id="examples" class="frame">
			<div class="frame-content">
				<div class="wrap-centered">
					<h1>Ejemplos</h1>
				</div>
			</div>
		</div>
		<div id="about" class="frame">
			<div class="frame-content">
				<div class="wrap-centered">
					<h1>Nosotros</h1>
				</div>
			</div>
		</div>
		<div id="prop" class="frame">
			<div class="frame-content scrolled">
				<div class="wrap">
					<div class="prop-header">
						<h1>Envíanos tu proyecto</h1>
					<h2>Cuéntanos qué necesitas y te enviaremos gratuitamente un presupuesto</h2>
					</div>
					<div class="prop-paper">
						<form>
							<section>
								<h3>¿Qué tipo de sitio web necesitas?</h3>
								<ul>
									<li>
										<input type="radio" name="op-type" id="op-personal" value="type-personal" checked/>
										<label for="op-personal">Personal (profesionales, artistas, portfolios).</label>
									</li>
									<li>
										<input type="radio" name="op-type" id="op-empresa" value="type-empresa"/>
										<label for="op-empresa">Empresa (productos, servicios, contacto).</label>
									</li>
									<li>
										<input type="radio" name="op-type" id="op-ecommerce" value="type-ecommerce"/>
										<label for="op-ecommerce">E-commerce (tienda on-line de productos).</label>
									</li>
									<li>
										<input type="radio" name="op-type" id="op-otro" value="type-otro"/>
										<label for="op-otro">Otro:</label><input type="text" value="" id="op-otro-text">
									</li>
								</ul>
							</section>
							<section>
								<h3>Cuéntanos sobre tu proyecto</h3>
								<p>Explícanos un poco de qué se trata, cuál es tu idea y en que consiste (puedes agregar ejemplos):</p>
								<textarea></textarea>
								<p>¿Tienes alguna imagen ó documento que quieras adjuntar?</p>
								<input type="file"/>
							</section>
							<section>
								<h3>Tus datos</h3>
								<p>Nombre:</p>
								<input type="text" value="">
								<p>Email:</p>
								<input type="email" value="">
								<p>¿Cómo te enteraste de nosotros?</p>
								<input type="text" value="">
								<p>Escribe las letras que ves en el cuadro:</p>
								<input type="text" value="">
								<input type="submit" value="Enviar">
							</section>
						</form>
					</div>
				</div>
			</div>
		</div>			
	</div>
	
	<script src="js/libs/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="min/packer.php?type=js&path=js&files=app"></script>
</body>
</html>