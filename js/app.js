/*
if (window.caches) {
    caches.open('Caches de paginas').then(cache => {
        cache.addAll([
            'PWA/inicio.html',
            'PWA/index.php',
            'PWA/js/editar.js',
            'PWA/js/app.js',
            'PWA/js/enviar.js',
            'PWA/js/validar.js',
            'PWA/agregar.php',
            'PWA/sw.js'
        ]);
        console.log('Cache cargado');
    });
    console.log('Cache cargado');
}

*/

// Archivo: C:\xampp\htdocs\pwa4\sw.js
if (window.caches) {
    var nombreCache = 'lol';
    self.addEventListener(
        'install',
        evento => {
            evento.waitUntil(
                caches.open(nombreCache)
                .then(
                    cache => {
                        cache.addAll(
                            [
                                //'./bootstrap-5.0.2-dist/css/bootstrap.min.css',
                                //'./img/sw.jpg'//,
                                //'./script.js'
                            ]
                        );
                    }
                )
            );
        }
    );

    // Si funciona
    self.addEventListener(
        'fetch',
        function (evento) {
            console.log("Se produjo evento fetch: " + evento.request.url);
            evento.respondWith(
                caches.match(evento.request)
                .then(
                    function (respuesta) {
                        if (respuesta) {
                            console.log("La respuesta se toma de la caché");
                            return respuesta;
                        }
                        console.log("La respuesta se toma del servidor");
                        return fetch(evento.request);
                    }
                )
            );
        }
    );
}