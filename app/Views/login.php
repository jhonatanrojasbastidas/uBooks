<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="<?= base_url('public/css/estilos.css') ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <header>
		<nav class="navbar navbar-expand-lg navbar-dark fondoPrincipal">
			<div class="container-fluid">
				<a class="navbar-brand fuente" href="#">
					<i class="fas fa-glasses"></i>
					UBooks
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="<?=site_url('/')?>">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="<?=site_url('/login')?>">Iniciar Sesion</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?=site_url('/signin')?>">Registrarse</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

    <main class="mt-5">
        <section class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-5 bordecinho p-4">
                    <form>
                        <div class="mb-3 mt-4">
                            <label for="correo" class="form-label d-flex justify-content-center">Email address</label>
                            <input type="email" class="form-control" name="correo" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 mt-4">
                            <label for="contraseña" class="form-label d-flex justify-content-center">Password</label>
                            <input type="password" class="form-control" id="contraseña">
                        </div>
                        <div class="mb-3 mt-4 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="borderButton mt-4">Iniciar Sesión</button>
                    </form>
                </div>
                <div class="col-0 col-md-5">
                    <img src="<?=base_url('public/img/libros.png')?>" class="img-fluid w-100">
                </div>
            </div>
        </section>
    </main>

    <footer class="fondoDos mt-5 borde_top p-3">
		<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-4">
				<h3 class="fw-bold">Horario de atención:</h3>
				<p>Lunes a viernes 7:00 am - 3:00 pm / Sábado: 7:00 am - 2:30 pm / Domingos y festivos 8:00 am - 3:00 pm</p>
				<br>
				<h3 class="fw-bold">Dirección:</h3>
				<p>Belén Altavista Calle 8A # 112-82 </p>
			</div>

			<div class="col-12 col-md-4">
				<h3 class="fw-bold">Ayudas:</h3>
				<p>Glosario / Correo remoto  /  Monitoreo y desempeño de uso del sitio web</p>
				<br>
				<h3 class="fw-bold">Protección de datos:</h3>
				<p>Protección de datos personales en el Municipio de Medellín </p>
			</div>

			<div class="col-12 col-md-4">
				<h1 class="fw-bold fuente"><span><i class="fa fa-book"></i></span>Digital Imagin Books</h1>
				<br>
				<i class="fab fa-facebook fa-3x"></i>
				<i class="fab fa-instagram fa-3x"></i>
				<i class="fab fa-youtube fa-3x"></i>
				<br>
				<p class="mt-4">© 2021 / NIT: 890905211-1 / Código DANE: 05001 / Código Postal: 050015</p>
				
			</div>
		</div>

	</div>
	</footer>


	
    <script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>