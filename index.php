<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Casa Saranto</title>
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	

	<!-- Hojas de estilo de Bootstrap -->
	<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">-->

	<!-- JavaScript de Bootstrap (opcional, pero necesario para algunas funcionalidades) -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css2?family=Acumin+Variable+Concept:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">

</head>
<body>
	 <nav class="navbar navbar-expand-lg navbar-transparent fixed-top">
    <div class="container-fluid">
        <!-- Imagen a la izquierda -->
        <a class="navbar-brand" href="#">
            <img src="ruta_de_la_imagen.jpg" alt="Logo" width="50">
        </a>
        <!-- Opciones de navegación a la derecha -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: red;">NOSOTROS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CATEGORIAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACTO</a>
                </li>
                <!-- Agrega aquí más opciones de navegación si es necesario -->
            </ul>
        </div>
    </div>
</nav>


	<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- JavaScript para aplicar la clase .active a la opción actual -->
<script>
    // Obtiene todas las opciones de navegación
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    // Recorre todas las opciones y agrega un evento de clic
    navLinks.forEach(link => {
        link.addEventListener("click", function() {
            // Remueve la clase .active de todas las opciones
            navLinks.forEach(link => link.parentElement.classList.remove("active"));
            // Agrega la clase .active a la opción actual
            this.parentElement.classList.add("active");
        });
    });
</script>

</body>

</html>