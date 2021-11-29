var nombreCache = 'cuatro';
self.addEventListener(
	'install',
	evento => {
		evento.waitUntil(
			caches.open(nombreCache)
			.then(
				cache => {
					cache.addAll(
						[
							'PWA/inicio.html',
							'PWA/index.php',
							'PWA/js/editar.js',
							'PWA/js/app.js',
							'PWA/js/enviar.js',
							'PWA/js/validar.js',
							'PWA/agregar.php',
							'PWA/sw.js'
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

//self.addEventListener(
//	'fetch', 
//	function(evento) { 
//		console.log("Se produjo evento fetch: " + evento.request.url);
//		evento.respondWith(
//			caches.match(evento.request, {ignoreSearch: true})
//			.then(
//				function(respuesta) {
//					if (respuesta) { 
//						console.log("La respuesta se toma de la caché"); 
//						return respuesta;
//					}
//					console.log("La respuesta no se toma de la caché");
// return fetch(evento.request);
//					var solicitudParaCache = evento.request.clone();
//					return 
//					fetch(solicitudParaCache) // aquí hay un problema
//					.then(
//						function(respuesta) {
//							if ( !respuesta || respuesta.status !== 200 ){
//								console.log("Error:" + respuesta.statusText);
//								return respuesta;
//							}
//							var respuestaParaCache = respuesta.clone();
//							caches.open(nombreCache)
//							.then(
//								function(cache) {
//									console.log("Se coloca en la cache");
//									cache.put(solicitudParaCache, respuestaParaCache);  
//								}
//							);
//							return respuesta;
//						}
//					);
//				}
//			)
//		);
//	}
//);