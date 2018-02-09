@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<div id="headTop" class="z-depth-0-half">
	<div class="container">
		<div class="row">
			<div class="col s12 fly01-main-header">
				<h4 class="thin inline-block">Extrato</h4>
				<ul class="right valign-wrapper fly01-buttons">
					<li>
						<a id="save" class="btn " onclick="fnAtualizar();">Atualizar</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<form id="fly01frm" class="col s12" method="post" novalidate="novalidate">
			<input id="contaBancariaId" type="hidden" name="contaBancariaId">
				<div id="dataInicialField" class="input-field col s6 m3 l4">
					<div class="picker" id="dataInicial_root" tabindex="0" aria-hidden="true">
						<div class="picker__holder">
							<div class="picker__frame">
								<div class="picker__wrap">
									<div class="picker__box">
										<div class="picker__date-display">
											<div class="picker__year-display">
												<div>2018</div>
											</div>
											<span class="picker__weekday-display">Seg, </span>
											<span class="picker__day-display">1 </span>
											<span class="picker__month-display">Jan</span>
										</div>
										<div class="picker__container__wrapper">
											<div class="picker__calendar-container">
												<div class="picker__header">
													<div class="picker__month">Janeiro</div>
													<div class="picker__year">2018</div>
													<div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="dataInicial_table" title="Anterior"> </div>
													<div class="picker__nav--next picker__nav--disabled" data-nav="1" role="button" aria-controls="dataInicial_table" title="Proximo"> </div>
												</div>
												<table class="picker__table" id="dataInicial_table" role="grid" aria-controls="dataInicial" aria-readonly="true">
													<thead>
														<tr>
															<th class="picker__weekday" scope="col" title="Domingo">D</th>
															<th class="picker__weekday" scope="col" title="Segunda">S</th>
															<th class="picker__weekday" scope="col" title="Ter�a">T</th>
															<th class="picker__weekday" scope="col" title="Quarta">Q</th>
															<th class="picker__weekday" scope="col" title="Quinta">Q</th>
															<th class="picker__weekday" scope="col" title="Sexta">S</th>
															<th class="picker__weekday" scope="col" title="S�bado">S</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td role="presentation">
																<div class="picker__day picker__day--outfocus" data-pick="1514685600000" role="gridcell" aria-label="31/12/2017" tabindex="0">31</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1514772000000" role="gridcell" aria-label="01/01/2018" aria-selected="true" aria-activedescendant="true" tabindex="0">1</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1514858400000" role="gridcell" aria-label="02/01/2018" tabindex="0">2</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1514944800000" role="gridcell" aria-label="03/01/2018" tabindex="0">3</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515031200000" role="gridcell" aria-label="04/01/2018" tabindex="0">4</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515117600000" role="gridcell" aria-label="05/01/2018" tabindex="0">5</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515204000000" role="gridcell" aria-label="06/01/2018" tabindex="0">6</div>
															</td>
														</tr>
														<tr>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515290400000" role="gridcell" aria-label="07/01/2018" tabindex="0">7</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515376800000" role="gridcell" aria-label="08/01/2018" tabindex="0">8</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515463200000" role="gridcell" aria-label="09/01/2018" tabindex="0">9</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515549600000" role="gridcell" aria-label="10/01/2018" tabindex="0">10</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515636000000" role="gridcell" aria-label="11/01/2018" tabindex="0">11</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515722400000" role="gridcell" aria-label="12/01/2018" tabindex="0">12</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515808800000" role="gridcell" aria-label="13/01/2018" tabindex="0">13</div>
															</td>
														</tr>
														<tr>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515895200000" role="gridcell" aria-label="14/01/2018" tabindex="0">14</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515981600000" role="gridcell" aria-label="15/01/2018" tabindex="0">15</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1516068000000" role="gridcell" aria-label="16/01/2018" tabindex="0">16</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1516154400000" role="gridcell" aria-label="17/01/2018" tabindex="0">17</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1516240800000" role="gridcell" aria-label="18/01/2018" tabindex="0">18</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1516327200000" role="gridcell" aria-label="19/01/2018" tabindex="0">19</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1516413600000" role="gridcell" aria-label="20/01/2018" tabindex="0">20</div>
															</td>
														</tr>
														<tr>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1516500000000" role="gridcell" aria-label="21/01/2018" tabindex="0">21</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1516586400000" role="gridcell" aria-label="22/01/2018" tabindex="0">22</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1516672800000" role="gridcell" aria-label="23/01/2018" tabindex="0">23</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus picker__day--today" data-pick="1516759200000" role="gridcell" aria-label="24/01/2018" tabindex="0">24</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1516845600000" role="gridcell" aria-label="25/01/2018" aria-disabled="true">25</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1516932000000" role="gridcell" aria-label="26/01/2018" aria-disabled="true">26</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517018400000" role="gridcell" aria-label="27/01/2018" aria-disabled="true">27</div>
															</td>
														</tr>
														<tr>
															<td role="presentation">
																<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517104800000" role="gridcell" aria-label="28/01/2018" aria-disabled="true">28</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517191200000" role="gridcell" aria-label="29/01/2018" aria-disabled="true">29</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517277600000" role="gridcell" aria-label="30/01/2018" aria-disabled="true">30</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517364000000" role="gridcell" aria-label="31/01/2018" aria-disabled="true">31</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517450400000" role="gridcell" aria-label="01/02/2018" aria-disabled="true">1</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517536800000" role="gridcell" aria-label="02/02/2018" aria-disabled="true">2</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517623200000" role="gridcell" aria-label="03/02/2018" aria-disabled="true">3</div>
															</td>
														</tr>
														<tr>
															<td role="presentation">
																<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517709600000" role="gridcell" aria-label="04/02/2018" aria-disabled="true">4</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517796000000" role="gridcell" aria-label="05/02/2018" aria-disabled="true">5</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517882400000" role="gridcell" aria-label="06/02/2018" aria-disabled="true">6</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517968800000" role="gridcell" aria-label="07/02/2018" aria-disabled="true">7</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1518055200000" role="gridcell" aria-label="08/02/2018" aria-disabled="true">8</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1518141600000" role="gridcell" aria-label="09/02/2018" aria-disabled="true">9</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1518228000000" role="gridcell" aria-label="10/02/2018" aria-disabled="true">10</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="picker__footer">
												<button class="picker__today btn-flat waves-effect" type="button" data-pick="1516759200000" disabled="" aria-controls="dataInicial">Hoje</button>
												<button class="picker__clear btn-flat waves-effect" type="button" data-clear="1" disabled="" aria-controls="dataInicial">Limpar</button>
												<button class="picker__close btn-flat waves-effect" type="button" data-close="true" disabled="" aria-controls="dataInicial">Fechar</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<input id="dataInicial" type="text" name="dataInicial" class="datepicker picker__input" value="01/01/2018" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataInicial_root">
						<label class="truncate active" for="dataInicial">Data Inicial</label>
					</div>
					<div id="dataFinalField" class="input-field col s6 m3 l4">
						<div class="picker" id="dataFinal_root" tabindex="0" aria-hidden="true">
							<div class="picker__holder">
								<div class="picker__frame">
									<div class="picker__wrap">
										<div class="picker__box">
											<div class="picker__date-display">
												<div class="picker__year-display">
													<div>2018</div>
												</div>
												<span class="picker__weekday-display">Qua, </span>
												<span class="picker__day-display">24 </span>
												<span class="picker__month-display">Jan</span>
											</div>
											<div class="picker__container__wrapper">
												<div class="picker__calendar-container">
													<div class="picker__header">
														<div class="picker__month">Janeiro</div>
														<div class="picker__year">2018</div>
														<div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="dataFinal_table" title="Anterior"> </div>
														<div class="picker__nav--next picker__nav--disabled" data-nav="1" role="button" aria-controls="dataFinal_table" title="Proximo"> </div>
													</div>
													<table class="picker__table" id="dataFinal_table" role="grid" aria-controls="dataFinal" aria-readonly="true">
														<thead>
															<tr>
																<th class="picker__weekday" scope="col" title="Domingo">D</th>
																<th class="picker__weekday" scope="col" title="Segunda">S</th>
																<th class="picker__weekday" scope="col" title="Ter�a">T</th>
																<th class="picker__weekday" scope="col" title="Quarta">Q</th>
																<th class="picker__weekday" scope="col" title="Quinta">Q</th>
																<th class="picker__weekday" scope="col" title="Sexta">S</th>
																<th class="picker__weekday" scope="col" title="S�bado">S</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td role="presentation">
																	<div class="picker__day picker__day--outfocus" data-pick="1514685600000" role="gridcell" aria-label="31/12/2017" tabindex="0">31</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1514772000000" role="gridcell" aria-label="01/01/2018" tabindex="0">1</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1514858400000" role="gridcell" aria-label="02/01/2018" tabindex="0">2</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1514944800000" role="gridcell" aria-label="03/01/2018" tabindex="0">3</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1515031200000" role="gridcell" aria-label="04/01/2018" tabindex="0">4</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1515117600000" role="gridcell" aria-label="05/01/2018" tabindex="0">5</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1515204000000" role="gridcell" aria-label="06/01/2018" tabindex="0">6</div>
																</td>
															</tr>
															<tr>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1515290400000" role="gridcell" aria-label="07/01/2018" tabindex="0">7</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1515376800000" role="gridcell" aria-label="08/01/2018" tabindex="0">8</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1515463200000" role="gridcell" aria-label="09/01/2018" tabindex="0">9</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1515549600000" role="gridcell" aria-label="10/01/2018" tabindex="0">10</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1515636000000" role="gridcell" aria-label="11/01/2018" tabindex="0">11</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1515722400000" role="gridcell" aria-label="12/01/2018" tabindex="0">12</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1515808800000" role="gridcell" aria-label="13/01/2018" tabindex="0">13</div>
																</td>
															</tr>
															<tr>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1515895200000" role="gridcell" aria-label="14/01/2018" tabindex="0">14</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1515981600000" role="gridcell" aria-label="15/01/2018" tabindex="0">15</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1516068000000" role="gridcell" aria-label="16/01/2018" tabindex="0">16</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1516154400000" role="gridcell" aria-label="17/01/2018" tabindex="0">17</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1516240800000" role="gridcell" aria-label="18/01/2018" tabindex="0">18</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1516327200000" role="gridcell" aria-label="19/01/2018" tabindex="0">19</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1516413600000" role="gridcell" aria-label="20/01/2018" tabindex="0">20</div>
																</td>
															</tr>
															<tr>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1516500000000" role="gridcell" aria-label="21/01/2018" tabindex="0">21</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1516586400000" role="gridcell" aria-label="22/01/2018" tabindex="0">22</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus" data-pick="1516672800000" role="gridcell" aria-label="23/01/2018" tabindex="0">23</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted" data-pick="1516759200000" role="gridcell" aria-label="24/01/2018" aria-selected="true" aria-activedescendant="true" tabindex="0">24</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1516845600000" role="gridcell" aria-label="25/01/2018" aria-disabled="true">25</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1516932000000" role="gridcell" aria-label="26/01/2018" aria-disabled="true">26</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517018400000" role="gridcell" aria-label="27/01/2018" aria-disabled="true">27</div>
																</td>
															</tr>
															<tr>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517104800000" role="gridcell" aria-label="28/01/2018" aria-disabled="true">28</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517191200000" role="gridcell" aria-label="29/01/2018" aria-disabled="true">29</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517277600000" role="gridcell" aria-label="30/01/2018" aria-disabled="true">30</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517364000000" role="gridcell" aria-label="31/01/2018" aria-disabled="true">31</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517450400000" role="gridcell" aria-label="01/02/2018" aria-disabled="true">1</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517536800000" role="gridcell" aria-label="02/02/2018" aria-disabled="true">2</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517623200000" role="gridcell" aria-label="03/02/2018" aria-disabled="true">3</div>
																</td>
															</tr>
															<tr>
																<td role="presentation">
																	<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517709600000" role="gridcell" aria-label="04/02/2018" aria-disabled="true">4</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517796000000" role="gridcell" aria-label="05/02/2018" aria-disabled="true">5</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517882400000" role="gridcell" aria-label="06/02/2018" aria-disabled="true">6</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517968800000" role="gridcell" aria-label="07/02/2018" aria-disabled="true">7</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1518055200000" role="gridcell" aria-label="08/02/2018" aria-disabled="true">8</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1518141600000" role="gridcell" aria-label="09/02/2018" aria-disabled="true">9</div>
																</td>
																<td role="presentation">
																	<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1518228000000" role="gridcell" aria-label="10/02/2018" aria-disabled="true">10</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="picker__footer">
													<button class="picker__today btn-flat waves-effect" type="button" data-pick="1516759200000" disabled="" aria-controls="dataFinal">Hoje</button>
													<button class="picker__clear btn-flat waves-effect" type="button" data-clear="1" disabled="" aria-controls="dataFinal">Limpar</button>
													<button class="picker__close btn-flat waves-effect" type="button" data-close="true" disabled="" aria-controls="dataFinal">Fechar</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<input id="dataFinal" type="text" name="dataFinal" class="datepicker picker__input" value="24/01/2018"
readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataFinal_root">
							<label class="truncate active" for="dataFinal">Data Final</label>
						</div>
						<div id="fly01btngrpField" class="input-field col s12 m6 l4">
							<label class="truncate active" for="fly01btngrp">Selecione o per�odo</label>
							<div id="fly01btngrp" class="btn-group input-field">
								<input id="btnDia" type="button" name="btnDia" class="btn col s4 " onclick="fnAtualizarPeriodo(&quot;0&quot;)" value="Dia">
									<input id="btnSemana" type="button" name="btnSemana" class="btn col s4 " onclick="fnAtualizarPeriodo(&quot;6&quot;)" value="Semana">
										<input id="btnMes" type="button" name="btnMes" class="btn col s4 active" onclick="fnAtualizarPeriodo(&quot;30&quot;)" value="M�s">
										</div>
									</div>
								</form>
								<div id="contasBancariasList_wrapper" class="col s12 m12 l4 no-footer DTS">
									<div class=""/>
									<div id="contasBancariasList_processing" class="dataTables_processing" style="display: none;"/>
									<div class="dataTables_scroll">
										<div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
											<div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 328px; padding-right: 17px;">
												<table class="display striped responsive nowrap dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 328px;">
													<thead>
														<tr id="columns" role="row">
															<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 328px;">
																<span>Contas Banc�rias - Saldo Atual</span>
															</th>
														</tr>
													</thead>
												</table>
											</div>
										</div>
										<div class="dataTables_scrollBody" style="position: relative; overflow: auto; height: 300px; width: 100%;">
											<table class="display striped responsive nowrap dataTable no-footer dtr-inline" width="100%" id="contasBancariasList" role="grid" aria-describedby="contasBancariasList_info" style="width: 100%; position: absolute; top: 0px; left: 0px;">
												<thead>
													<tr id="columns" role="row" style="height: 0px;">
														<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 328px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
															<div class="dataTables_sizing" style="height:0;overflow:hidden;">
																<span>Contas Banc�rias - Saldo Atual</span>
															</div>
														</th>
													</tr>
												</thead>
												<tbody>
													<tr role="row" class="odd">
														<td tabindex="0">
															<div class="tooltipped" data-position="top" data-tooltip="Representa��o: 100%" data-conta-id="">
																<span class="left">Todas as Contas</span>
																<strong class="right green-text">-R$2.658,34</strong>
																<div class="progress">
																	<div class="determinate" style="width: 100%"/>
																</div>
															</div>
														</td>
													</tr>
													<tr role="row" class="even">
														<td tabindex="0">
															<div class="tooltipped" data-position="top" data-tooltip="Representa��o: 73.11%" data-conta-id="a67a7c28-173c-4922-98b6-a4f2b27e4398">
																<span class="left">Conta Demonstra��o</span>
																<strong class="right green-text">-R$4.205,00</strong>
																<div class="progress">
																	<div class="determinate" style="width: 73.11%"/>
																</div>
															</div>
														</td>
													</tr>
													<tr role="row" class="odd">
														<td tabindex="0">
															<div class="tooltipped" data-position="top" data-tooltip="Representa��o: 24.86%" data-conta-id="f5e2ee99-91e0-4c73-9a89-760c7074e5c2">
																<span class="left">CONTA 2</span>
																<strong class="right green-text">R$1.430,00</strong>
																<div class="progress">
																	<div class="determinate" style="width: 24.86%"/>
																</div>
															</div>
														</td>
													</tr>
													<tr role="row" class="even">
														<td tabindex="0">
															<div class="tooltipped" data-position="top" data-tooltip="Representa��o: 2.03%" data-conta-id="d365c361-55d3-44f4-bdb5-d185486e27fe">
																<span class="left">CONTA 1</span>
																<strong class="right green-text">R$116,66</strong>
																<div class="progress">
																	<div class="determinate" style="width: 2.03%"/>
																</div>
															</div>
														</td>
													</tr>
													<tr role="row" class="odd">
														<td tabindex="0">
															<div class="tooltipped" data-position="top" data-tooltip="Representa��o: 0%" data-conta-id="a8682cd6-415c-46bc-adc1-b0a3b422159f">
																<span class="left">Conta Demontrativa</span>
																<strong class="right green-text">R$0,00</strong>
																<div class="progress">
																	<div class="determinate" style="width: 0%"/>
																</div>
															</div>
														</td>
													</tr>
													<tr role="row" class="even">
														<td tabindex="0">
															<div class="tooltipped" data-position="top" data-tooltip="Representa��o: 0%" data-conta-id="2d4d453f-f9e6-44e9-9993-fe4e0003d02b">
																<span class="left">Conta Suporte</span>
																<strong class="right green-text">R$0,00</strong>
																<div class="progress">
																	<div class="determinate" style="width: 0%"/>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
											<div style="position: relative; top: 0px; left: 0px; width: 1px; height: 390px;"/>
										</div>
									</div>
									<div class="">
										<div class="dataTables_info" id="contasBancariasList_info" role="status" aria-live="polite" style="display: none;"/>
										<div class="dataTables_paginate paging_simple_numbers" id="contasBancariasList_paginate" style="display: none;">
											<a class="paginate_button previous disabled" aria-controls="contasBancariasList" data-dt-idx="0" tabindex="0" id="contasBancariasList_previous">Anterior</a>
											<span>
												<a class="paginate_button current" aria-controls="contasBancariasList" data-dt-idx="1" tabindex="0">1</a>
											</span><a class="paginate_button next disabled" aria-controls="contasBancariasList" data-dt-idx="2" tabindex="0" id="contasBancariasList_next">Pr�ximo</a>
										</div>
									</div>
								</div>
								<div id="dfly01chart" class="col s12 m12 l8">
									<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
										<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
											<div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"/>
										</div>
										<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
											<div style="position:absolute;width:200%;height:200%;left:0; top:0"/>
										</div>
									</div>
									<h6/>
									<canvas id="fly01chart" width="715" height="357" class="chartjs-render-monitor" style="display: block; width: 715px; height: 357px;"/>
								</div>
								<form id="fly01frm" class="col s12" method="post">
									<div id="btnNovoPagamentoField" class="input-field col s12 m4 l4">
										<input id="btnNovoPagamento" type="button" name="btnNovoPagamento" class="btn undefined" value="Novo pagamento">
										</div>
										<div id="btnNovoRecebimentoField" class="input-field col s12 m4 l4">
											<input id="btnNovoRecebimento" type="button" name="btnNovoRecebimento" class="btn undefined" value="Novo recebimento">
											</div>
											<div id="btnNovaTransferenciaField" class="input-field col s12 m4 l4">
												<input id="btnNovaTransferencia" type="button" name="btnNovaTransferencia" class="btn undefined" value="Nova transfer�ncia">
												</div>
											</form>
											<div id="dtExtratoDetalhe_wrapper" class="col s12 no-footer">
												<div class=""/>
												<div id="dtExtratoDetalhe_processing" class="dataTables_processing" style="display: none;"/>
												<table class="display striped responsive nowrap dataTable no-footer dtr-inline" width="100%" id="dtExtratoDetalhe" role="grid" aria-describedby="dtExtratoDetalhe_info" style="width: 100%;">
													<thead>
														<tr id="columns" role="row">
															<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 207px;">
																<span>Data</span>
															</th>
															<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 367px;">
																<span>Lan�amento</span>
															</th>
															<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 264px;">
																<span>Conta Banc�ria</span>
															</th>
															<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 176px;">
																<span>Valor</span>
															</th>
															<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 12px;">
																<span/>
															</th>
														</tr>
													</thead>
													<tbody>
														<tr role="row" class="odd">
															<td tabindex="0">03/01/2018</td>
															<td>Transf. de CONTA 1</td>
															<td>CONTA 2</td>
															<td>R$600,00</td>
															<td>
																<input type="hidden" class="rowRecordId" value="undefined">
																</td>
															</tr>
															<tr role="row" class="even">
																<td tabindex="0">03/01/2018</td>
																<td>Transf. para CONTA 2</td>
																<td>CONTA 1</td>
																<td>-R$600,00</td>
																<td>
																	<input type="hidden" class="rowRecordId" value="undefined">
																	</td>
																</tr>
															</tbody>
														</table>
														<div class="">
															<div class="dataTables_info" id="dtExtratoDetalhe_info" role="status" aria-live="polite"/>
															<div class="dataTables_paginate paging_simple_numbers" id="dtExtratoDetalhe_paginate" style="display: none;">
																<a class="paginate_button previous disabled" aria-controls="dtExtratoDetalhe" data-dt-idx="0" tabindex="0" id="dtExtratoDetalhe_previous">Anterior</a>
																<span>
																	<a class="paginate_button current" aria-controls="dtExtratoDetalhe" data-dt-idx="1" tabindex="0">1</a>
																</span><a class="paginate_button next disabled" aria-controls="dtExtratoDetalhe" data-dt-idx="2" tabindex="0" id="dtExtratoDetalhe_next">Pr�ximo</a>
															</div>
														</div>
													</div>
												</div>
											</div>
@endsection


@section('extrascript')

											<script>
     var barChartData = {
            labels: ["31/12/2017", "03/01/2018", "31/01/2018"],
            datasets: [{
                type: 'bar',
                label: 'Recebimentos',
                backgroundColor: "#4BC0C0",
                data: [
                    0,
                    600,
                    0
                ]
            }, {
                type: 'bar',
                label: 'Pagamentos',
                backgroundColor: "#FF6384",
                data: [
                    0,
                    -600,
                    0
                ]
            }, {
                type: 'line',
                label: 'Saldo Consolidado',
                backgroundColor: "#000000",
                borderWidth: 3,
                fill: false,
                data: [
                    -2658.34,
                    -2658.34,
                    -2658.34
                ]
            }]
        };




            var ctx = document.getElementById("fly01chart");
            var myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    title:{
                        display:true,
                        text:"Saldo do Per�odo"
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            stacked: true,
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    }
                }
            });
											</script>

@endsection
											