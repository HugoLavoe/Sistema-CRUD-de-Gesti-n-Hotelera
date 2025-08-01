
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto Fiesta Inn</title>
    <link rel="shortcut icon" href="img/logofavicon.png" type="image/x-icon">
    <link rel="stylesheet" href="r_user/css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <a href="r_user/includes/login.php">Fiesta Inn Parque Puebla</a>
            <a href="r_user2/includes/login.php">Fiesta Inn Las Animas</a>
            <a href="r_user3/includes/login.php">Fiesta Inn Explanada</a>

        </nav>
        <section class="textos-header">
            <h1>Fiesta Inn</h1>
            <h2>Registro Y Control de Usuarios</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</svg></div>
    </header>
    <main>
    <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Galeria</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="r_user/img/img8.jpg" alt="">

                    </div>
                    <div class="imagen-port">
                        <img src="r_user/img/img2.jpg" alt="">

                    </div>
                    <div class="imagen-port">
                        <img src="r_user/img/img3.jpg" alt="">

                    </div>
                    <div class="imagen-port">
                        <img src="r_user/img/img1.jpg" alt="">

                    </div>
                    <div class="imagen-port">
                        <img src="r_user/img/img4.jpg" alt="">
                    </div>
                    <div class="imagen-port">
                        <img src="r_user/img/img5.jpg" alt="">

                    </div>
                    <div class="imagen-port">
                        <img src="r_user/img/img6.jpg" alt="">

                    </div>
                    <div class="imagen-port">
                        <img src="r_user/img/img7.jpg" alt="">

                    </div>
                </div>
            </div>
        </section>


    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Phone</h4>
                <p>8296312</p>
            </div>


           
