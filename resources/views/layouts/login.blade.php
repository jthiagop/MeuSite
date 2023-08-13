<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>@yield('title')</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="/vendors/images/apple-touch-icon.svg"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/vendors/images/favicon-32x32.svg"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/endors/images/favicon-16x16.svg"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/vendors/styles/core.css" />

		<link
			rel="stylesheet"
			type="text/css"
			href="/vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="/src/plugins/datatables/css/dataTables.bootstrap4.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="/src/plugins/datatables/css/responsive.bootstrap4.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="/vendors/styles/style.css" />
        <link rel="stylesheet" type="text/css" href="/vendors/styles/cores.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->


		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/jquery-steps/jquery.steps.css"
		/>


		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body class="login-page">
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="/">
						<img src="/vendors/images/deskapp-logo.svg" alt="" />
					</a>
				</div>
                @auth

                <div class="header-right">
                    <div class="dashboard-setting user-notification">
                        <div class="dropdown">
                            <a
                                class="dropdown-toggle no-arrow"
                                href="/dashboard"
                                data-toggle="right-sidebar"
                            >
                            <i class="icon-copy dw dw-house"></i>


                            </a>
                        </div>
                    </div>
                    <div class="user-notification">
                        <div class="dropdown">
                            <a
                                class="dropdown-toggle no-arrow"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                            >
                                <i class="icon-copy dw dw-notification"></i>
                                <span class="badge notification-active"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="notification-list mx-h-350 customscroll">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="/vendors/images/img.jpg" alt="" />
                                                <h3>John Doe</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed...
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/vendors/images/photo1.jpg" alt="" />
                                                <h3>Lea R. Frith</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed...
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/vendors/images/photo2.jpg" alt="" />
                                                <h3>Erik L. Richards</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed...
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/vendors/images/photo3.jpg" alt="" />
                                                <h3>John Doe</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed...
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/vendors/images/photo4.jpg" alt="" />
                                                <h3>Renee I. Hansen</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed...
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/vendors/images/img.jpg" alt="" />
                                                <h3>Vicki M. Coleman</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed...
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-info-dropdown">
                        <div class="dropdown">
                            <a
                                class="dropdown-toggle"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                            >
                                <span class="user-icon">
                                    <img src="/vendors/images/photo1.jpg" alt="" />
                                </span>
                                <span class="user-name">{{ Auth::user()->name }}</span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                            >
                                <a class="dropdown-item" href="profile.html"
                                    ><i class="dw dw-user1"></i> Perfil</a
                                >
                                <a class="dropdown-item" href="user/profile"
                                    ><i class="dw dw-settings2"></i> Configuração</a
                                >
                                <a class="dropdown-item" href="faq.html"
                                    ><i class="dw dw-help"></i> Ajuda</a
                                >
                                <form action="/logout" method="POST">
                                    @csrf
                                <a href="/"
                                    class="dropdown-item"
                                    onclick="event.preventDefault()
                                    this.closest('form').submit();"><i class="dw dw-logout"></i> Sair</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                @endauth
                @guest
				<div class="login-menu btn btn-link">
					<ul>
						<li><a href="/login">Login</a></li>
					</ul>
				</div>
                @endguest
			</div>
		</div>

        @yield('content')
		<!-- welcome modal start -->
		<div class="welcome-modal">
			<button class="welcome-modal-close">
				<i class="bi bi-x-lg"></i>
			</button>
			<iframe
				class="w-100 border-0"
				src="https://embed.lottiefiles.com/animation/51971"
			></iframe>
			<div class="text-center">
				<h2 class="h5 weight-500 text-center mb-2">
					Precisando de Ajuda?
					<span role="img" aria-label="gratitude"></span>
				</h2>
			</div>

			<a
				href="https://github.com/dropways/deskapp"
				target="_blank"
				class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
			>
            Me chama no WhatsApp
            <i class="icon-copy fa fa-whatsapp" aria-hidden="true"></i>
			</a>
			<p class="font-14 text-center mb-1 d-none d-md-block">
				Lá te darei todo suporte!
			</p>
			<div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
				<i class="fa fa-html5"></i>
			</div>
		</div>
		<button class="welcome-modal-btn">
        <i class="icon-copy bi bi-life-preserver"></i></i> Ajuda
		</button>
		<!-- welcome modal end -->
		<!-- js -->
		<script src="/vendors/scripts/core.js"></script>
		<script src="/vendors/scripts/script.min.js"></script>
		<script src="/vendors/scripts/process.js"></script>
		<script src="/vendors/scripts/layout-settings.js"></script>

		<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
		<script src="vendors/scripts/steps-setting.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>

		<script src="/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<!-- buttons for Export datatable -->
		<script src="/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
		<script src="/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
		<script src="/src/plugins/datatables/js/buttons.print.min.js"></script>
		<script src="/src/plugins/datatables/js/buttons.html5.min.js"></script>
		<script src="/src/plugins/datatables/js/buttons.flash.min.js"></script>
		<script src="/src/plugins/datatables/js/pdfmake.min.js"></script>
		<script src="/src/plugins/datatables/js/vfs_fonts.js"></script>
		<!-- Datatable Setting js -->
		<script src="/vendors/scripts/datatable-setting.js"></script>

	</body>
</html>
