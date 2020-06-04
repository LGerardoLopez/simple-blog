(function(_, $) {
	// este consumidor sera mediante una api en JS en lugar de php
	// se lanzara para asignar un nombre del autor ramdon a
	// cada noticia

	var randomuser = {};

	function random() {
		return $.ajax({
			url      : 'https://randomuser.me/api?results=10',
			dataType : 'json'
		});
	}

	function set() {
		var usersrandom = random();
		usersrandom.done(function(data) {
			// obteniendo los 10 usuarios randoms
			// se asignan a cada uno de los autores
			var i = 0,
				results = data.results,
				total = results.length;
			for (i; i < total; i++) {
				var result = results[i],
					nombre = // concatenamos nombre
						result.name.title +
						' ' +
						result.name.first +
						' ' +
						result.name.last;
				$($('.autor')[i]).html(nombre); // solo asignamos
				// en vista el nombre del autor, se puede personalizar
				// para poner mas info por usuario
			}
		});

		usersrandom.fail(function(error) {
			console.log(error);
			console.log('Problemas al obtener usuarios'); // de manera
		});
	}

	_.setRamdonUser = set; // hacemos publica la funcion
})(window, jQuery);
