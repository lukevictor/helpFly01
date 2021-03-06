  <script src="{{ url('js/1.0.2/fly01ui.js') }}"></script>
  <script src="{{ url('js/enjoyhint.js') }}"></script>
  <script src="{{ url('js/materialize.js') }}"></script>

  <script>
    function initTour() {
     /* var element = document.getElementById("tour");
      element.classList.remove("pulse"); */
      var tour = JSON.stringify('1');
      sessionStorage.setItem('tour', tour);

      $('html,body').scrollTop(0);
      
      var enjoyhint_instance = null;
    
      enjoyhint_instance = new EnjoyHint({});
      enjoyhint_instance.setScript(enjoyhint_script_data);
        
      enjoyhint_instance.runScript();

    }

    function atualizar()
    {
      window.location.reload();
    }


  $(document).ready(function(){


    $('.scrollspy').scrollSpy();
    $(".button-collapse").sideNav();
    $('select').material_select();
    


    $('.datepicker').pickadate({
        labelMonthNext: 'Próximo',
        labelMonthPrev: 'Anterior',
        labelMonthSelect: 'Selecione um mes',
        labelYearSelect: 'Selecione um ano',
        monthsFull: [ 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' ],
        monthsShort: [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' ],
        weekdaysFull: [ 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado' ],
        weekdaysShort: [ 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab' ],
        weekdaysLetter: [ 'D', 'S', 'T', 'Q', 'Q', 'S', 'S' ],
        today: 'Hoje',
        clear: 'Limpar',
        close: 'Fechar',
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year
        dateFormat: 'dd/MM/yy',
        onSet: function( arg ){
            if ( 'select' in arg ){ //prevent closing on selecting month/year
                this.close();
            }
        }
    });

    $('.datepickerMonth').pickadate({
        selectMonths: true,
        format: 'mmmm',
        selectYears: false,
        buttonImageOnly: false,
        disable: [true],
        labelMonthNext: 'Próximo',
        labelMonthPrev: 'Anterior',
        labelMonthSelect: 'Selecione um mes',
        labelYearSelect: 'Selecione um ano',
        monthsFull: [ 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' ],
        monthsShort: [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' ],
        weekdaysFull: [ 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado' ],
        weekdaysShort: [ 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab' ],
        weekdaysLetter: [ 'D', 'S', 'T', 'Q', 'Q', 'S', 'S' ],
        today: 'Hoje',
        clear: 'Limpar',
        close: 'Fechar',

      onOpen: function() {
        $(".picker__nav--prev, .picker__nav--next").remove();
      },
      onSet: function( arg ){
    var selectedMonth = parseInt(arg.highlight[1]);
    var selectedYear = arg.highlight[0];
    var selectedDate = arg.highlight[2];
    this.close();
    this.set('select', [selectedYear, selectedMonth, selectedDate,{ format: 'yyyy/mm/dd' }]);
    }
    });

     $('input.autocomplete').autocomplete({
        data: {
            @if(isset($dados))
                @foreach($dados as $dado)
                "{{ $dado->name }}": null,
                @endforeach
            @endif
        },
        limit: 20, // O maximo de resultados. Padrão: Infinito.
        onAutocomplete: function(val) {
        // Callback function quando a funcao é autocomplete.
        },
        minLength: 1, // O tamanho minimo de inserção para devoluão de autocomplete. Padrão: 1.
    });
        
  });


  </script>



 
