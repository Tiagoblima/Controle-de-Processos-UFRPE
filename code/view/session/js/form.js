
(function($){

  $(function(){


    $('#date').datepicker({
      defaultDate: new Date(),
      setDefaultDate: true,
        format: 'dd/mm/yyyy',
      maxDate: new Date(),
      i18n:{
        months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        weekdays:['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
        weekdaysShort:['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
        weekdaysAbbrev:['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
      }

    });

    $(document).ready(function(){
      $('select').formSelect();
    });


    $('.alert').alert();


      $(function(){
        $(".close").click(function(){
          $("#myAlert").alert('close');
        });
      });


    $('.dropdown-trigger').dropdown();

    $(document).ready(function(){
      $('.modal').modal();
    });


  }); // end of document ready
})(jQuery); // end of jQuery name space
