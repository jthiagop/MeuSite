@extends('layouts.main')

@section('title', 'Dominus - Patrimônio')

@section('content')
<div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-500px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Cadastro de Foro</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Cadastro de Foro
										</li>
									</ol>
								</nav>
							</div>

							<!-- Botão Mês -->
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-primary dropdown-toggle"
										href="#"
										role="button"
										data-toggle="modal"
										data-target="#bd-example-modal-lg"
									>
									Cadastro de Foro
									</a>
									<div
									class="modal fade bs-example-modal-lg"
									    id="bd-example-modal-lg"
									    tabindex="-1"
									    role="dialog"
									    aria-labelledby="myLargeModalLabel"
									    aria-hidden="true"
									>
									<div class="modal-dialog modal-lg modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
                          Cadastro de Imóveis
												</h4>
												<button
													type="button"
													class="close"
													data-dismiss="modal"
													aria-hidden="true"
												>
													×
												</button>
											</div>
											<div class="pd-20 card-box mb-30 text-left">
											<form action="/events" method="POST">
                       @csrf
											<div class="row">

												<div class="col-md-6 col-sm-12">
													<div class="form-group">
														<label>Descrição</label>
														<input type="text" id="descricao" name="descricao" class="form-control" placeholder="Descrição do Imovel"/>
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group">
														<label>Patrimônio</label>
                            <select type="text" id="patrimonio_local" name="patrimonio_local" class="form-control" placeholder="Localização">
                                  <option value="Monte Bom Jesus">Monte Bom Jesus</option>
                                  <option value="Nossa S. do Ó">Nossa S. do Ó</option>
                                  <option value="Nossa S. das Dores">Nossa S. das Dores</option>
                                  <option value="Gravatá">Gravatá</option>
                                  <option value="Luiz Gonzaga">Luiz Gonzaga</option>
                                  <option value="Monte Bom Jesus">Monte Bom Jesus</option>
                            </select>
													</div>
												</div>
                        </div>
											<div class="row">

												<div class="col-md-4 col-sm-12">
													<div class="form-group">
														<label>Cep</label>
														<input type="text" id="cep" name="cep" class="form-control" placeholder="00000-000">
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group">
														<label>Endereço</label>
														<input type="text" id="rua" name="rua" class="form-control" />
													</div>
												</div>
												<div class="col-md-2 col-sm-12">
													<div class="form-group">
														<label>Número</label>
														<input type="text" id="numero" name="numero" class="form-control" />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4 col-sm-12">
													<div class="form-group">
														<label>Complemento</label>
														<input type="text" id="complemento" name="complemento" class="form-control" />
													</div>
												</div>
												<div class="col-md-4 col-sm-12">
													<div class="form-group">
														<label>Bairro</label>
														<input type="text" id="bairro" name="bairro" class="form-control" />
													</div>
												</div>
												<div class="col-md-4 col-sm-12">
													<div class="form-group">
														<label>Cidade</label>
														<input type="text" id="cidade" name="cidade" class="form-control" />
													</div>
												</div>
											</div>
                      <div class="row">
												<div class="col-md-4 col-sm-12">
													<div class="form-group">
														<label>Período de Pagamento</label>
														<input type="text" id="pagamento" name="pagamento" class="form-control" />
													</div>
												</div>
												<div class="col-md-8 col-sm-12">
													<div class="form-group">
														<label>Recebido do sr(a)</label>
														<input type="text" id="recebido" name="recebido" class="form-control" />
													</div>
												</div>

												</div>
											</div>
                      <div class="btn-list">
											<input type="submit" class="btn btm-primary" value="Criar">
										  </div>
											</form>

										</div>

					        </div>


										</div>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Barra Centro da página -->
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">

					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Foros Cadastrados</h4>
							<table
								class="table hover multiple-select-row data-table-export nowrap"
							>
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover nowrap">

								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Rua</th>
										<th>Número</th>
										<th>Bairro</th>
										<th>Cidade</th>
										<th>Patrimônio</th>
                    <th>Ano de Pagamento</th>
                    <th>Recebido por:</th>
										<th class="datatable-nosort">Atualizar</th>
									</tr>
								</thead>
               
								<tbody>
                @foreach($foros as $foro) 
									<tr>
										<td class="table-plus">{{$foro->rua}}</td>
										<td>{{$foro->numero}}</td>
										<td>{{$foro->bairro}}</td>
										<td>{{$foro->cidade}}</td>
										<td>{{$foro->patrimonio_local}}</td>
                    <td>{{$foro->pagamento}}</td>
                    <td>{{$foro->recebido}}</td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="#"
														><i class="dw dw-eye"></i> Visualizar</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Editar</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Excluir</a
													>
												</div>
											</div>
										</td>
									</tr>
                  @endforeach
								</tbody>
                
							</table>
						</div>
					</div>
		</div>
@endsection