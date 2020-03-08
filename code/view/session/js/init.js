
(function($){

  $(function(){

    $(document).ready( function () {

      $(document).ready(function() {
        // Setup - add a text input to each footer cell

        $('#publicProcessTable thead tr:eq(0) th').each( function (i) {
          var title = $(this).text();

          if( i === 0 || i === 4) {


            $(this).html( '<input type="text" placeholder="'+title+'" />' );

            $( 'input', this ).on( 'keyup change', function () {
              if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
              }
            } );
          }

        } );
        $('#publicProcessTable thead th:eq(6) tr').each( function (i) {
          var title = $(this).text();



        } );
        var table = $('#publicProcessTable').DataTable( {

          "ajax": {
            "url": "data/session_process.json",
          },

          "rowCallback": function( row, data ) {

            $('td:eq(6)', row).html(
                '<div>' +
                '<div id="label"> </div>'

                + '<script> function show_alert_label(param) { document.getElementById("label").innerHTML = "<h6>Alerta</h6>" }'
                +   'function hide_label(param) { document.getElementById("label").innerText = "" }' +
                'function show_details_label(param) { document.getElementById("label").innerHTML = "<h6>Histórico</h6>" }' +
                'function show_forward_label(param) { document.getElementById("label").innerHTML = "<h6>Encaminhar</h6>" }  </script>'  +



                '<a href="#"><img onmouseover="show_details_label(this)" value="Open a Popup Window" onclick="window.open(\'record_process.php\',\'popUpWindow\',\'height=500,width=400,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes\');" onmouseout="hide_label(this)" src="https://img.icons8.com/metro/26/000000/details.png" alt="details"></a>' +
                '<a id=\'alert\' href="#" ><img value="Open a Popup Window" onclick="window.open(\'send_alert.php\',\'popUpWindow\',\'height=500,width=400,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes\');" onmouseover="show_alert_label(this)" onmouseout="hide_label(this)" src="https://img.icons8.com/metro/26/000000/box-important.png" alt="alert"></a>' +
                '<a href="#"><img value="Open a Popup Window" onclick="window.open(\'forward_process.php\',\'popUpWindow\',\'height=500,width=400,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes\');" onmouseover="show_forward_label(this)" onmouseout="hide_label(this)" src="https://img.icons8.com/material-outlined/24/000000/forward-message.png" alt="forward"></a>' +
                '</div>');

            $('td:eq(5)', row).html(data[7]);
            $('td:eq(5)', row).css('font-weight','bold');
            $('td:eq(5)', row).html( 'Ok');

            if ( data[7] === 2 ) {
              $('td:eq(5)', row).html( 'ATRASADO');
              $('td:eq(5)', row).css( 'background-color', 'red' );

            }else if(data[7] === 1){
              $('td:eq(5)', row).html( 'CRÍTICO');
              $('td:eq(5)', row).css( 'background-color', 'yellow' );
            }

            if(data[6] === 0){
              $(row).hide().on('search.dt', function () {
                $(row).show()
              })
            }



          },



          "oLanguage":{
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ Resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
              "sNext": "Próximo",
              "sPrevious": "Anterior",
              "sFirst": "Primeiro",
              "sLast": "Último"
            } },
          "oAria": {
            "sSortAscending": ": Ordenar colunas de forma ascendente",
            "sSortDescending": ": Ordenar colunas de forma descendente"
          },

          'sDom': 't<"bottom"p>',
          orderCellsTop: true,
          fixedHeader: true,

        } );
      } );

    } );


      $(function(){
        $(".close").click(function(){
          $("#myAlert").alert('close');
        });
      });


  }); // end of document ready
})(jQuery); // end of jQuery name space
