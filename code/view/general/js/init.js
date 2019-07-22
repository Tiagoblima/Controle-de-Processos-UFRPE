(function($){

  $(function(){


    $(document).ready( function () {

      $('#publicProcessTable').dataTable( {
        "ajax": {
          "serverSide": true,
          "url": "data/public_process.json",
        },

        "rowCallback": function( row, data ) {


          if ( data[6] === 1) {
            $('td:eq(5)', row).html( 'Ativo' );

          }else if(data[6] === 0 ){
            $('td:eq(5)', row).html( 'Inativo');
          }

          $('td:eq(1)', row).html(data[3]);
          $('td:eq(3)', row).html(data[1]);
          $('td:eq(2)', row).html(data[4]);
          $('td:eq(4)', row).html(data[2]);
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

      $(function(){
        $(".close").click(function(){
          $("#myAlert").alert('close');
        });
      });



  }); // end of document ready
})(jQuery); // end of jQuery name space
