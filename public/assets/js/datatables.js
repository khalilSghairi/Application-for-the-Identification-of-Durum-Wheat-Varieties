$(function(e) {
	//file export datatable
	var table = $('#example').DataTable({
		lengthChange: false,/*lengthChange est défini sur false, ce qui signifie que
        l'utilisateur ne peut pas changer le nombre d'enregistrements affichés par page.
		buttons: [ 'copy', 'excel', 'pdf', 'colvis' ],//buttons est un tableau de types de boutons qui seront affichés sur le tableau. Ces boutons permettent à l'utilisateur d'exporter
        les données du tableau vers différents formats (copie, Excel, PDF) et de contrôler la visibilité des colonnes (colvis).*/
		responsive: true,/*responsive est défini sur true, ce qui active le mode responsive, c'est-à-dire que le
        tableau ajustera sa taille en fonction de l'espace d'écran disponible.*/
		language: {/*language est un objet qui
            contient des paramètres de localisation
            pour le tableau. Dans ce cas, searchPlaceholder dé
            finit le texte de l'espace réservé pour la recherche à "Recherche...",
             sSearch cache le texte par défaut pour la recherche et lengthMenu définit
             le format du menu déroulant pour le nombre d'enregistrements affichés par page.*/
			searchPlaceholder: 'Search...',
			sSearch: '',
			lengthMenu: '_MENU_ ',
		}
	});
	table.buttons().container()
	.appendTo( '#example_wrapper .col-md-6:eq(0)' );

	$('#example1').DataTable({
		language: {
			searchPlaceholder: 'Rechreche...',
			sSearch: '',
			lengthMenu: '_MENU_',
		}
	});
	$('#example2').DataTable({
		responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
			lengthMenu: '_MENU_',
		}
	});
	var table = $('#example-delete').DataTable({
		responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
			lengthMenu: '_MENU_',
		}
	});
    $('#example-delete tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );

    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );

	//Details display datatable
	$('#example-1').DataTable( {
		responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
			lengthMenu: '_MENU_',
		},
		responsive: {
			details: {
				display: $.fn.dataTable.Responsive.display.modal( {
					header: function ( row ) {
						var data = row.data();
						return 'Details for '+data[0]+' '+data[1];
					}
				} ),
				renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
					tableClass: 'table border mb-0'
				} )
			}
		}
	} );
	$('#example4').DataTable();
});
