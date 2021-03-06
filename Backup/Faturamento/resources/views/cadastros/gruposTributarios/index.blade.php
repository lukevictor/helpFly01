@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')

<div id="headTop" class="z-depth-0-half">
  <div class="container">
    <div class="row">
      <div class="col s12 fly01-main-header">


        <h4 class="thin inline-block">Grupos Tributários</h4>
        <ul class="right valign-wrapper fly01-buttons">
          <li>
            <a id="new" class="btn " href="{{ url('/financeiro/cadastros/grupostributarios/new') }}">Novo</a>
          </li>
          </ul></div></div></div></div>
          <div class="container"><div class="row"><div id="fly01dt_wrapper" class="col s12 no-footer" data-vivaldi-spatnav-clickable="1"><div class=""></div><div id="fly01dt_processing" class="dataTables_processing" style="display: none;"></div><table class="display striped responsive nowrap dataTable no-footer dtr-inline" width="100%" id="fly01dt" role="grid" aria-describedby="fly01dt_info" style="width: 100%;"><thead><tr id="columns" role="row"><th class="sorting_asc" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 283px;" aria-sort="ascending" aria-label="searchCódigo: Ordenar colunas de forma descendente"><div id="idField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="id" name="id" type="search"></input><i class="material-icons">search</i><label class="truncate" for="id">Código</label></div></th><th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 283px;" aria-label="searchDescrição: Ordenar colunas de forma ascendente"><div id="descriptionField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="description" name="description" type="search" data-index="1"></input><i class="material-icons">search</i><label class="truncate" for="description">Descrição</label></div></th><th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 283px;" aria-label="searchCFOP: Ordenar colunas de forma ascendente"><div id="cfopField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="cfop" name="cfop" type="search" data-index="2"></input><i class="material-icons">search</i><label class="truncate" for="cfop">CFOP</label></div></th><th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 283px;" aria-label="SimNaoMovimenta Estoque: Ordenar colunas de forma ascendente"><div id="updateStockField" class="input-field fly01dt-select "><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-x1gk9gg" value=""><ul id="select-options-x1gk9gg" class="dropdown-content select-dropdown "><li class="" data-vivaldi-spatnav-clickable="1"><span></span></li><li class="" data-vivaldi-spatnav-clickable="1"><span>Sim</span></li><li class="" data-vivaldi-spatnav-clickable="1"><span>Nao</span></li></ul><select id="updateStock" name="updateStock" data-index="3" data-select-id="x1gk9gg" class="initialized"><option value=""></option><option value="1">Sim</option><option value="2">Nao</option></select></div><label class="truncate" for="updateStock">Movimenta Estoque</label></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 4px;" aria-label=""><span></span></th></tr></thead><tbody data-vivaldi-spatnav-clickable="1"><tr class="odd"><td valign="top" colspan="5" class="dataTables_empty" nowrap="nowrap">Nenhum registro encontrado</td></tr></tbody></table><div class=""><div class="dataTables_info" id="fly01dt_info" role="status" aria-live="polite"></div><div class="dataTables_paginate paging_simple_numbers" id="fly01dt_paginate" style="display: none;"><a class="paginate_button previous disabled" aria-controls="fly01dt" data-dt-idx="0" tabindex="0" id="fly01dt_previous" data-vivaldi-spatnav-clickable="1">Anterior</a><span></span><a class="paginate_button next disabled" aria-controls="fly01dt" data-dt-idx="1" tabindex="0" id="fly01dt_next" data-vivaldi-spatnav-clickable="1">Próximo</a></div></div></div></div></div>


@endsection

@section('extrascripts')

<script type="text/javascript">
$('.tap-target').tapTarget('open');
$('.tap-target').tapTarget('close');
</script>

@endsection
