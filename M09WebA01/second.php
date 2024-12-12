<!DOCTYPE html>
<html lang = "ca" >

	<head>

		<meta charset = "UTF-8" >
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" >

		<title>M09</title>

		<!-- Bootstrap CSS -->
		<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" >

	</head>

	<body>

        <header class = "mb-3" >

            <nav class = "navbar navbar-expand-lg navbar-light bg-light" >

                <div class = "container" >

                    <a class = "navbar-brand" href = "/M09" >M09</a>

                    <button class = "navbar-toggler" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navbarNav" aria-controls = "navbarNav" aria-expanded = "false" aria-label = "Toggle navigation" >

                        <span class = "navbar-toggler-icon" ></span>

                    </button>

                    <div class = "collapse navbar-collapse" id = "navbarNav" >

                        <ul class = "navbar-nav me-auto" >

                            <li class = "nav-item" >

                                <a class = "nav-link" href = "/M09" >Inici</a>

                            </li>

                            <li class = "nav-item" >

                                <a class = "nav-link" href = "/M09/about.html" >About</a>

                            </li>

                        </ul>

                    </div>

                </div>

            </nav>

        </header>

		<div class = "d-flex justify-content-center" >

            <div class = "container" >

                <div class = "row" >

                    <div class = "col-lg-6 col-12" >

                        <p>En aquesta pàgina pots observar la informació que has introduit al formulari de l'<a href = "/M09" >inici</a>.</p>

                        <p>Fíxa't en que la informació arriba d'igual forma aquí, però la manera de transportar-se és diferent. Amb GET la informació és a dins de la URL, mentre que amb POST no.</p>

                        <p>Més endavant entrarem en com tractar la informació amb PHP. l'objectiu actual és que et fixis en com s'envien les dades amb els diferents mètodes.</p>

                        <p>També et deixo aquí informació sobre la versió de PHP que has instal·lat: <b><?php echo phpversion(); ?></b>.</p>

                    </div>

                    <div class = "col-lg-6 col-12" >

                        <div class = "text-center" >

                            <p>Nom: <?php echo $_REQUEST['nom'] ?></p>

                            <p>Clau: <?php echo $_REQUEST['pass'] ?></p>

                        </div>

                    </div>

                </div>

            </div>

		</div>

	</body>

</html>

<!-- Bootstrap JS -->
<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
