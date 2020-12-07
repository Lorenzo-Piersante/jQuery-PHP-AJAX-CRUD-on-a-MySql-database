
$(function() {
	// Index
	$('#index').click( function() {
		$('#content').load("contents/index.php");
	});



    
    // Create
	$('#create').click( function() {
		$('#content').load("contents/create.html");
	});

	// Store
	$('#content').on('click', '#store', function() {    // EVENT DELEGATION !!!
        var countryName = $('#countryName').val();
        var shortDesc = $('#shortDesc').val();
        var longDesc = $('#longDesc').val();

        $.ajax({                             // INVIO DI DATI ALLO SCRIPT PHP METODO POST E FORMATO JSON
        	type: 'POST',
        	url: 'Functions/store.php',
        	data: {'json' : JSON.stringify({ countryName: countryName, shortDesc: shortDesc, longDesc: longDesc })},
        	success: function() { alert('Nazione inserita!'); },
        	error: function() { alert('Errore nell inseriemnto!'); }
        });
	});




    // Edit
	$('#content').on('click', '.edit', function() {       // EVENT DELEGATION !!! POTREI USARE DOCUMENT COME GENITORE !!!
        var id = $(this).attr("value");

       $('#content').load("contents/edit.php", { id:id });   
	});

	// Update
	$('#content').on('click', '#update', function() {    // EVENT DELEGATION !!!
        var updatedCountryName = $('#updatedCountryName').val();
        var updatedShortDesc = $('#updatedShortDesc').val();
        var updatedLongDesc = $('#updatedLongDesc').val();
        var hiddenId = $('#hiddenId').val();

        $.ajax({                             // INVIO DI DATI ALLO SCRIPT PHP METODO POST E FORMATO JSON
        	type: 'POST',
        	url: 'Functions/update.php',
        	data: {'json' : JSON.stringify({ updatedCountryName: updatedCountryName, updatedShortDesc: updatedShortDesc, updatedLongDesc: updatedLongDesc, hiddenId: hiddenId })},
        	success: function() { alert('Nazione aggiornata!'); },
        	error: function() { alert('Errore nell aggiornamento!'); }
        });
	});



    // Destroy
    $('#content').on('click', '.destroy', function() {       // EVENT DELEGATION !!! POTREI USARE DOCUMENT COME GENITORE !!!
        var id = $(this).attr("value");

       $.ajax({
            type: "POST",
            url: 'Functions/destroy.php',
            data: { id : id },
            success: function() { alert('Nazione eliminata!'); },
            error: function() { alert('Errore nell eliminazione!'); }
       });

       $('#content').load("contents/index.php");   
    });



    // Show
    $('#content').on('click', '.show', function() {       // EVENT DELEGATION !!! POTREI USARE DOCUMENT COME GENITORE !!!
        var id = $(this).attr("value");

        $('#content').load("contents/show.php", { id: id });   
    });


});