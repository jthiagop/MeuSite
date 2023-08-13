
@extends('layouts.login')


@section('title', 'Dominus')

@section('content')

<div class="pd-ltr-20 xs-pd-20-10">
    <div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-20">
								<div class="title">
									<h4>Documentação</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="/">Ínicio</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											CERF - Certidão de Foro
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-primary dropdown-toggle"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
										Janeiro 2018
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Export List</a>
										<a class="dropdown-item" href="#">Policies</a>
										<a class="dropdown-item" href="#">View Assets</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				<div class="min-height-200px">

					<div class="invoice-wrap">
						<div class="invoice-box">
							<div class="invoice-header">
								<div class="logo text-center">
									<img src="../vendors/images/deskapp-logo.svg" alt="logo dominus" />
								</div>
							</div>
							<h4 class="text-center mb-30 weight-600">CERF - Certidão de Foro</h4>
							<div class="row pb-30">
								<div class="col-md-6">
									<h5 class="mb-15">Número CERF: {{$foro->id}}</h5>
									<p class="font-12 mb-5">
										Responsável Atual: <strong class="weight-600">{{$foro->recebido}}</strong>
									</p>
									<p class="font-12 mb-5">
										CPF/CNPJ: <strong class="weight-600">{{$foro->cpf_cnpj}}</strong>
									</p>
										<p class="font-12 mb-5">Natureza: <strong class="weight-600">Urbano</strong></p>
										<p class="font-12 mb-5">Endereço: <strong class="weight-600">{{$foro->rua}}, {{$foro->numero}}</strong></p>
										<p class="font-12 mb-5">Cidade: <strong class="weight-600">{{$foro->cidade}}</strong></p>

								</div>
								<div class="col-md-6 text-right">
									<h5 class="mb-15">Características Técnicas do imóvel</h5>
									<p class="font-12 mb-5">
										Natureza: <strong class="weight-600">{{$foro->natureza}}</strong>
									</p>
									<p class="font-12 mb-5">
										Fração Ideal <strong class="weight-600">{{$foro->fracao_ideal}}</strong>
									</p>
										<p class="font-12 mb-5">Área Total da Diocese: <strong class="weight-600">{{$foro->area_diocese}}</strong></p>
										<p class="font-12 mb-5">Área Total do Terreno: <strong class="weight-600">{{$foro->area_terreno}}, {{$foro->numero}}</strong></p>								</div>
							</div>
							<div class="invoice-desc pb-30 mb-15"  >
								<div class="invoice-desc-head clearfix">
									<div class="invoice-sub">Nu Débito</div>
									<div class="invoice-rate">Vencimento</div>
									<div class="invoice-hours">Responsável</div>
									<div class="invoice-subtotal">Valor</div>
								</div>
								<div class="invoice-desc-body">
									<ul>
										<li class="clearfix">
											<div class="invoice-sub">17471772</div>
											<div class="invoice-rate">R$ 520,00</div>
											<div class="invoice-hours">100</div>
											<div class="invoice-subtotal">
												<span class="weight-600">$2000</span>
											</div>
										</li>
										<li class="clearfix">
											<div class="invoice-sub">18478548</div>
											<div class="invoice-rate">R$ 2.020,00</div>
											<div class="invoice-hours">100</div>
											<div class="invoice-subtotal">
												<span class="weight-600">$2000</span>
											</div>
										</li>
										<li class="clearfix">
											<div class="invoice-sub">14578788</div>
											<div class="invoice-rate">R$ 15.020,00</div>
											<div class="invoice-hours">100</div>
											<div class="invoice-subtotal">
												<span class="weight-600">$2000</span>
											</div>
										</li>
										<li class="clearfix">
											<div class="invoice-sub">9871772</div>
											<div class="invoice-rate">R$ 2.420,00</div>
											<div class="invoice-hours">100</div>
											<div class="invoice-subtotal">
												<span class="weight-600">$2000</span>
											</div>
										</li>
									</ul>
								</div>
								<div class="invoice-desc-footer">
									<div class="invoice-desc-head clearfix">
										<div class="invoice-sub">Informações Bancárias</div>
										<div class="invoice-rate">Data</div>
										<div class="invoice-subtotal">Total</div>
									</div>
									<div class="invoice-desc-body">
										<ul>
											<li class="clearfix">
												<div class="invoice-sub">
													<p class="font-14 mb-5">
														Account No:
														<strong class="weight-600">123 456 789</strong>
													</p>
													<p class="font-14 mb-5">
														Code: <strong class="weight-600">4556</strong>
													</p>
												</div>
												<div class="invoice-rate font-20 weight-600">
													10 Jan 2018
												</div>
												<div class="invoice-subtotal">
													<span class="weight-600 font-24 text-danger"
														>$8000</span
													>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
              <p class="font-14 text-center mb-5">
							<strong class="weight-600">Obs.: Esta Certidão não é
                          válida para transferência e registro de imóvel
                          junto aos cartórios, órgãos públicos e instituições
                           financeiras.</strong>
              </p>
              <br><br>
              <p class="font-14 text-center mb-5">
										Data e hora da emissão: <strong class="weight-600">{{ date('d/m/Y'), strtotime($foro->data)}}</strong>
							</p>
                            <p class="font-14 text-center mb-5">
										Código de controle da certidão: <strong class="weight-600">350C.146F.EAE3.8599</strong>
							</p>
						</div>
					</div>
				</div>
        <p><br></p><p><br></p><p><br></p>
				</div>
			</div>



@endsection
