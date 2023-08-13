@extends('layouts.login')


@section('title', 'Dominus')

@section('content')

<div
class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
>
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="vendors/images/forgot-password-cuate.svg" alt="" />
        </div>
        <div class="col-md-6">
            <div class="login-box bg-white box-shadow border-radius-10">
                <div class="login-title ">
                    <h2 class="text-center text-primary">Esqueceu sua senha?</h2>
                </div>
                <p class="mb-20 ">
                    Basta nos informar seu e-mail e enviaremos um e-mail com um link de redefinição de senha.
                </p>
                <form>
                    <div class="input-group custom">
                        <input
                            type="text"
                            class="form-control form-control-lg"
                            placeholder="Email"
                        />
                        <div class="input-group-append custom">
                            <span class="input-group-text"
                                ><i class="fa fa-envelope-o" aria-hidden="true"></i
                            ></span>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-5">
                            <div class="input-group mb-0">
                                <!--
                                use code for form submit
                                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
                            -->
                                <a
                                    class="btn btn-primary btn-lg btn-block"
                                    href="index.html"
                                    >Recuperar</a
                                >
                            </div>
                        </div>
                        <div class="col-2">
                            <div
                                class="font-16 weight-600 text-center"
                                data-color="#707373"
                            >
                                ou
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="input-group mb-0">
                                <a
                                    class="btn btn-outline-primary btn-lg btn-block"
                                    href="login"
                                    >Login</a
                                >
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
