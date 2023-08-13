@extends('layouts.login')

@section('title', 'Dominus')

@section('content')

<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="login-title">
            <h1 class="text-center text-primary">CONSULTA DE FORO</h1>
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
</div>

@endsection
