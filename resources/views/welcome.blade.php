@extends('layouts.login')

@section('title', 'Dominus')

@section('content')

<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="login-title">
            <h1 class="text-center text-primary">ENVIO DE DOCUMENTOS</h1>
        </div>

        <div class="row align-items-center">

            <div class="col-md-6 col-lg-7">
                <img src="vendors/images/browsing-online-pana.svg" alt="" />
            </div>

            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">BUSCA DE PATRIMÔNIO</h2>
                        </div>

                        <div id="search-container" class="col-md-12">
                            <form action="">
                                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
                            </form>
                        </div>
                </div>


                <div class="faq-wrap ">
                    <h4 class="mb-30 h4 text-blue padding-top-30">Venda de imóvel e pagamento de Laudêmio</h4>
                    <div class="padding-bottom-30 border-radius-10">
                        <div class="card">
                            <div class="card-header ">
                                <button
                                    class="btn btn-block "
                                    data-toggle="collapse"
                                    data-target="#faq2-2"
                                >
                                Como solicitar?
                                </button>
                            </div>
                            <div id="faq2-2" class="collapse">
                                <div class="card-body">
                                    Preencha o requerimento de solicitação do aviso do foreiro
                                    e envie juntamente com os documentos descritos nele.
                                    A documentação deverá ser digitalizada e enviada em formato PDF.<br><br>
                                    Clique em ACESSE AQUI para enviar o requerimento e os documentos.<br><br>

                                    Na aba “arquivo para”, selecione a opção “abertura de processos”.<br><br>

                                    Na aba “assunto”, selecione “aviso do foreiro”.

                                </div>
                                <div class="btn-list text-center">
                                    <a href="/cadastro_enfiteuta">
                                    <button type="button" class="btn btn-primary btn-lg">
										Acesse Aqui <i class="icon-copy ion-android-open"></i>
									</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <button
                                    class="btn btn-block"
                                    data-toggle="collapse"
                                    data-target="#faq1-1"
                                >
                                Descrição do serviço
                                </button>
                            </div>
                            <div id="faq1-1" class="collapse">
                                <div class="card-body">
                                    Informações sobre como proceder na compra ou venda de imóvel
                                    foreiro e pagamento do Laudêmio. Laudêmio é o valor que o
                                    proprietário do domínio útil paga a Diocese – senhorio do domínio
                                    direto – quando vende seu imóvel.<br><br>

                                    O laudêmio só é devido quando o imóvel for foreiro a Diocese e
                                    deve ser pago antes da lavratura da Escritura de Compra e Venda ou
                                    quando ocorrer qualquer transação com o domínio útil do imóvel de
                                    natureza onerosa, por exemplo, integralização de capital, dação em
                                    pagamento, arrematação, adjudicação compulsória e etc.<br><br>

                                    O valor do Laudêmio é de 2,5% sobre o valor declarado para a venda
                                    ou sobre a avaliação praticada pela Diocese.<br><br>

                                    Quem deve pagar é o proprietário do domínio útil, o vendedor.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            </div>

        </div>
    </div>

    <div class="container">
    <div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<!-- Simple Datatable start -->
					<div class="card-box mb-30">
						<div class="pd-20">
                        <h2 class="text-center text-primary">Patrimônios Encontrados</h2>
						</div>

						<div class="pb-20">
							<table class="data-table table stripe hover nowrap">
								<thead>
									<tr class="text-center">
										<th class="table-plus datatable-nosort">Rua</th>
										<th>Número</th>
										<th>Bairro</th>
										<th>Patrimônio</th>
										<th>Cidade</th>
										<th class="datatable-nosort">Visualizar</th>
									</tr>
								</thead>
								<tbody>
                                @foreach($foros as $foro)
									<tr class="text-center">
										<td class="table-plus">{{$foro->rua}}</td>
										<td>{{$foro->numero}}</td>
										<td>{{$foro->bairro}}</td>
										<td>{{$foro->patrimonio_local}}</td>
										<td>{{$foro->cidade}}</td>
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
													<a class="dropdown-item" href="/events/{{ $foro->id }}"
														><i class="dw dw-eye"></i> View</a
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
	</div>
    <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
        <div class="pd-20 card-box">
            <h5 class="h4 text-blue mb-20">Default Tab</h5>
            <div class="tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a
                            class="nav-link active text-blue"
                            data-toggle="tab"
                            href="#home"
                            role="tab"
                            aria-selected="true"
                            >Home</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link text-blue"
                            data-toggle="tab"
                            href="#profile"
                            role="tab"
                            aria-selected="false"
                            >Profile</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link text-blue"
                            data-toggle="tab"
                            href="#contact"
                            role="tab"
                            aria-selected="false"
                            >Entenda</a
                        >
                    </li>
                </ul>
                <div class="tab-content">
                    <div
                        class="tab-pane fade show active"
                        id="home"
                        role="tabpanel"
                    >
                        <div class="pd-20">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum.
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel">
                        <div class="pd-20">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum.
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel">
                        <div class="pd-20">
                            Informações sobre como proceder na compra ou venda
                            de imóvel foreiro e pagamento do Laudêmio. <br><br>
                            Laudêmio é o valor que o proprietário do domínio útil paga
                            a Diocese de Caruaru – senhorio do domínio direto
                            – quando vende seu imóvel. O laudêmio só é devido quando o
                            imóvel for foreiro a diocese e deve ser pago antes da
                            lavratura da Escritura de Compra e Venda ou quando ocorrer
                            qualquer transação com o domínio útil do imóvel de natureza
                            onerosa, por exemplo, integralização de capital, dação em
                            pagamento, arrematação, adjudicação compulsória e etc. <br><br>
                            O valor do Laudêmio é de 2,5% sobre o valor declarado para a
                            venda ou sobre a avaliação praticada pela Secretaria Municipal
                            de Fazenda e Planejamento, o que for maior.<br><br>

                            Quem deve pagar é o proprietário do domínio útil, o vendedor.

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
<p><p><p><p>
@endsection

