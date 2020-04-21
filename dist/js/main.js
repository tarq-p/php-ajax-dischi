$(document).ready(function() {
    var source = document.getElementById("#cds-template").innerHTML;
    var musicTemplate = Handlebars.compile(source);


    $.ajax ({
        url: "server.php",
        method: "GET",
        success: function(data) {
            console.log(data);
			var dischi = data;
			for (var i = 0; i < dischi.length; i++) {
				var disco = dischi[i];
				var playlistTemplate = {
                    poster: disco.poster,
                    title: disco.title,
                    author: disco.author,
                    year: disco.year
                    console.log(playlistTemplate);
                };
				var cardAlbum = musicTemplate(playlistTemplate);
                $('.container1').append(cardAlbum);
			}

		},
        
		error: function () {
            alert('non va');
        }

    });

});
