
@extends('layouts.login')


@section('title', 'Dominus')

@section('content')

<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
    <div class="row align-items-center">
        <div class="col-md-6 col-lg-7">
            <img src="vendors/images/enter-pana.svg" alt="" />
        </div>

        <div class="col-md-6 col-lg-5">
            <div class="login-box bg-white box-shadow border-radius-10">
                            <div class="login-title">
                                <h2 class="text-center text-primary">Entrar no Dominus</h2>
                            </div>


                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Compo de enserir E-mail -->
                        <div class="input-group custom">
                            <x-input
                                id="email"
                                class="form-control form-control-lg"
                                type="email"
                                placeholder="Seu E-mail"
                                name="email" :value="old('email')"
                                required autofocus autocomplete="username" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"
                                ><i class="icon-copy dw dw-user1"></i
                                ></span>
                            </div>
                        </div>

                        <!-- Entrada de Senha  -->
                        <div class="input-group custom">
                            <x-input
                                id="password"
                                class="form-control form-control-lg"
                                type="password"
                                name="password"
                                placeholder="**********"
                                required autocomplete="current-password" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"
                                    ><i class="dw dw-padlock1"></i
                                ></span>
                            </div>
                        </div>

                        <div class="row pb-30">
                            <div class="col-6">
                                    <label for="remember_me" class="flex items-center">
                                        <x-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Lembre-me') }}</span>
                                    </label>
                            </div>
                            <div class="col-6 text-right">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                            {{ __('Esqueceu sua senha?') }}
                                        </a>
                                    @endif
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button
                                            class="btn btn-primary btn-lg btn-block"

                                            >Entar</button>
                                    </div>
                                    <div
                                    class="font-16 weight-600 pt-10 pb-10 text-center"
                                    data-color="#707373"
                                >
                                    OU
                                </div>

                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="input-group">
                        <a
                            class="btn btn-outline-primary btn-lg btn-block"
                            href="#"
                            data-backdrop="static"
                            data-toggle="modal"
                            data-target="#login-modal"
                            type="button"
                            >Criar uma conta</a>

                    </div>
                    <div
                    class="modal fade"
                    id="login-modal"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="myLargeModalLabel"
                    aria-hidden="true"
                >
                    <div class="modal-dialog modal-dialog-centered col-auto">
                        <div class="modal-content ">
                            <div class="login-box bg-white box-shadow border-radius-10">
                                    <div class="login-title">
                                        <button
                                        type="button"
                                        class="close"
                                        data-dismiss="modal"
                                        aria-hidden="true"
                                    >
                                        ×
                                    </button>
                                        <h2 class="text-left text-primary">
                                            Cadastre-se
                                        </h2>
                                        <div
                                        class="font-16 "
                                        data-color="#707373">
                                        É rápido e fácil.
                                    </div>
                                    </div>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="input-group custom">
                                        <input
                                            id="name"
                                            class="block mt-1 w-full form-control form-control-lg"
                                            type="text"
                                            placeholder="Nome de Usuário"
                                            name="name"
                                            :value="old('name')"
                                            required autofocus autocomplete ="name" />

                                        <div class="input-group-append custom">
                                            <span class="input-group-text"
                                                ><i class="icon-copy dw dw-user1"></i
                                            ></span>
                                        </div>
                                    </div>

                                    <div class="input-group custom">
                                        <input
                                        id="email"
                                        class="block mt-1 w-full form-control form-control-lg"
                                        placeholder="E-mail"
                                        type="email"
                                        name="email"
                                        :value="old('email')"
                                        required autocomplete="username" />

                                        <div class="input-group-append custom">
                                            <span class="input-group-text"
                                                ><i class="icon-copy dw dw-email1"></i></span>
                                        </div>
                                    </div>

                                    <div class="input-group custom">
                                        <input
                                            id="password"
                                            placeholder="Senha"
                                            class="block mt-1 w-full form-control form-control-lg"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />

                                        <div class="input-group-append custom">
                                            <span class="input-group-text"
                                                ><i class="dw dw-padlock1"></i
                                            ></span>
                                        </div>
                                    </div>
                                    <div class="input-group custom">
                                        <input
                                            id="password_confirmation"
                                            placeholder="Repita a senha"
                                            class="form-control form-control-lg"
                                            type="password"
                                            name="password_confirmation"
                                            required autocomplete="new-password" />
                                        <div class="input-group-append custom">
                                            <span class="input-group-text"
                                                ><i class="dw dw-padlock1"></i
                                            ></span>
                                        </div>
                                    </div>

                                    <div
                                        class="font-12 weight-100 text-left input-group custom"
                                        data-color="#707373">
                                            Ao clicar em Cadastre-se, você concorda
                                            com nossos Termos, Política de Privacidade
                                            e Política de Cookies. Você poderá receber
                                            notificações por SMS e cancelar isso quando
                                            quiser.
                                    </div>
                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <x-label for="terms">
                                            <div class="flex items-center">
                                                <x-checkbox name="terms" id="terms" required />

                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </x-label>
                                    </div>
                                    @endif
                                    <div class="row ">
                                        <div class="col-sm-12">
                                                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Registre-se">
                                        </div>
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

@endsection

