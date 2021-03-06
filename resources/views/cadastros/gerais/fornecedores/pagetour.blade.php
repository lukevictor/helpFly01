@extends('layouts.default')
@section('title', 'Help Fly01')


@section('content')
  
    <div class="container">
        <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block">Cadastro de Fornecedores</h4>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div id="color-usage" class="section scrollspy">
                    
                  
                    
                    <div class="card-panel teal amber accent-2 app center">Esta é a tela inicial da rotina, nela é possível ver os fornecedores já cadastrados no sistema, também é possível pesquisar por eles</div>
                    <img class="responsive-img z-depth-5" src="{{ url('images/cadastros/fornecedores/Tela2.gif') }}">
                   
                    <div class="card-panel teal amber accent-2 app center">Para editar um forncedor já cadastrado, basta enontrar o mesmo, ir na janela de ações e clicar em "Editar"</div>
                    <img class="responsive-img z-depth-5" src="{{ url('images/cadastros/fornecedores/Tela3.png') }}">
                   
                    <div class="card-panel teal amber accent-2 app center">Para cadastrar um novo usuário, clique em "NOVO"</div>
                    <img class="responsive-img" src="{{ url('images/cadastros/fornecedores/Tela4.png') }}">
                    
                    <div class="card-panel teal amber accent-2 app center">Já na tela de cadastros fique atento com os campos que possuem o "*" no final, eles são obrigatórios.</div>
                    <img class="responsive-img" src="{{ url('images/cadastros/fornecedores/Tela5.gif') }}">

                    <div class="card-panel teal amber accent-2 app center">Com as informações obrigatórias preenchidas você já pode salvar!</div>
                    <img class="responsive-img" src="{{ url('images/cadastros/fornecedores/Tela6.png') }}">

                    <div class="card-panel teal amber accent-2 app center">**Atenção** Caso seu fonrcedor também seja seu cliente, você deverá preencher outros campos para que seja possível a emissão de notas. Veja abaixo os campos destacados.</div>
                    <img class="responsive-img" src="{{ url('images/cadastros/fornecedores/Tela7.png') }}">
                    
                    <div id="ultimaParte">
                        <div class="card-panel teal amber accent-2 app center">Com tudo preenchido basta clicar em "SALVAR"</div>
                        <img class="responsive-img" src="{{ url('images/cadastros/fornecedores/Tela8.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extrascript')

<script>
var options = [

  {selector: '#ultimaParte', offset: 60, callback: function() {
    Materialize.toast('Restou alguma dúvida?', 400000000);      
  }},
  {selector: '#ultimaParte', offset: 100, callback: function() {
    Materialize.toast('Mande um e-mail para suporte.fly01gestao@totvs.com.br', 400000000);      
  }},

];
Materialize.scrollFire(options);

</script> 
@endsection 
