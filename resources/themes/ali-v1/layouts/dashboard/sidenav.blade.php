{{--  BEGIN: SideNav --}}
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded ">
	<div class="brand-sidebar">
		<h1 class="logo-wrapper">
			<a class="brand-logo darken-1" href="/">
				{!!Theme::img('images/logo/materialize-logo.png', config('app.name', 'Luure')) !!}
				<span class="logo-text hide-on-med-and-down">{{config('app.name', 'Luure')}}</span>

			</a>
			<a class="navbar-toggler" href="#">
				<i class="material-icons">radio_button_checked</i>

			</a>
		</h1>
	</div>
	<ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">

		<li class="navigation-header">
			{{Lang::get('common.logado_como', ['usuario' => auth()->user()->email])}}
		</li>

		<li class="bold {{ (request()->is('dashboard*')) ? 'active' : '' }}">
			<a class="waves-effect waves-cyan link-pmpr {{ (request()->is('dashboard*')) ? 'active' : '' }}" href="{{route('dashboard')}}">
				<i class="material-icons">dashboard</i>
				<span class="menu-title" data-i18n="">@lang('common.dashboard')</span>
			</a>
		</li>
		
		<li class="bold {{ request()->is('efetivo*') ? 'active' : '' }}">
			<a class="waves-effect waves-cyan link-pmpr {{ (request()->is('efetivo*')) ? 'active' : '' }}" href="{{route('efetivo.index')}}">
				<i class="material-icons">people</i>
				<span class="menu-title" data-i18n="">@lang('controller/efetivo.name')</span>
			</a>
		</li>

		@role('root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto|analista-subsecao|analista-regional|analista-local')
		<li class="bold {{ request()->is('estatistica*') ? 'active' : '' }}">
			<a class="waves-effect waves-cyan link-pmpr {{ (request()->is('estatistica*')) ? 'active' : '' }}" href="{{route('estatistica.index')}}">
				<i class="material-icons">trending_up</i>
				<span class="menu-title" data-i18n="">@lang('controller/estatistica.name')</span>
			</a>
		</li>
		@endrole
		
		<li class="bold {{ request()->is('individuo*') ? 'active' : '' }}">
			<a class="waves-effect waves-cyan link-pmpr {{ (request()->is('individuo*') && !request()->is('paramim')) ? 'active' : '' }}" href="{{route('individuo.index')}}">
				<i class="material-icons">directions_walk</i>
				<span class="menu-title" data-i18n="">@lang('controller/individuo.name')</span>
			</a>
		</li>
		@role('root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto|analista-subsecao|analista-regional|analista-local')
		<li class="bold {{ request()->is('publico-interno*') ? 'active' : '' }}">
			<a class="waves-effect waves-cyan link-pmpr {{ request()->is('publico-interno*') ? 'active' : '' }}" href="{{route('publico-interno.index')}}">
				<i class="material-icons">perm_contact_calendar</i>
				<span class="menu-title" data-i18n="">@lang('controller/publicointerno.name')</span>
			</a>
		</li>
		@endrole

		<li class="bold {{ request()->is('ocorrencia*') ? 'active' : '' }}">
			<a class="waves-effect waves-cyan link-pmpr {{ request()->is('ocorrencia*') ? 'active' : '' }}" href="{{route('ocorrencias.index')}}">
				<i class="material-icons">filter_frames</i>
				<span class="menu-title" data-i18n="">@lang('controller/ocorrencia.name')</span>
			</a>
		</li>

		@role('root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto|analista-subsecao|analista-regional|analista-local')
		<li class="bold {{ (request()->is('operacao*') ) ? 'active' : '' }}">
			<a class="waves-effect waves-cyan link-pmpr {{ (request()->is('operacao*') ) ? 'active' : '' }}" href="{{route('operacao.index')}}">
				<i class="material-icons">bubble_chart</i>
				<span class="menu-title" data-i18n="">@lang('controller/operacao.name')</span>
			</a>
		</li>
		@endrole

		@role('root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto')
		<li class="bold {{ (request()->is('protocolo*') && !request()->is('paramim')) ? 'active' : '' }}">
			<a class="waves-effect waves-cyan link-pmpr {{ (request()->is('protocolo*') && !request()->is('paramim')) ? 'active' : '' }}" href="{{route('protocolo.index')}}">
				<i class="material-icons">developer_board</i>
				<span class="menu-title" data-i18n="">@lang('controller/protocolo.name')</span>
			</a>
		</li>
		@endrole
		
		<li class="bold {{ (request()->is('paramim')) ? 'active' : '' }}">
			<a class="waves-effect waves-cyan link-pmpr {{ (request()->is('paramim')) ? 'active' : '' }}" href="{{route('protocolo.paramim')}}">
				<i class="material-icons">device_hub</i>
				<span class="menu-title" data-i18n="">@lang('controller/protocolo.paramim')</span>
			</a>
		</li>

		<li class="bold {{ (request()->is('sistemas')) ? 'active' : '' }}">
			<a class="waves-effect waves-cyan link-pmpr {{ (request()->is('sistemas')) ? 'active' : '' }}" href="{{route('sistemas.exibe')}}">
				<i class="material-icons">laptop</i>
				<span class="menu-title" data-i18n="">@lang('controller/sistema.name')</span>
				<span class="badge badge pill yellow-pmpr float-right mr-2">novo</span>
			</a>
		</li>

		@if(auth()->user()->agencia->isContraIn())
		<li class="bold {{ request()->is('contrainteligencia*') ? 'active' : '' }}">
			<a class="waves-effect waves-cyan link-pmpr {{ request()->is('contrainteligencia*') ? 'active' : '' }}" href="{{route('contrainteligencia.index')}}">
				<i class="material-icons">markunread_mailbox</i>
				<span class="menu-title" data-i18n="">@lang('controller/contrainteligencia.name')</span>
				<span class="badge badge pill yellow-pmpr float-right mr-2">novo</span>
			</a>
		</li>
		@endif


		<li class="navigation-header">
			<a class="navigation-header-text">
				{{Auth::user()->role()->name}}
			</a>
			<i class="navigation-header-icon material-icons">more_horiz</i>
		</li>

		@role('root|sysadmin')
		<li class="bold {{ (request()->is('gestao/efetivo/*')) ? 'active' : '' }}">
			<a class="collapsible-header waves-effect waves-cyan link-pmpr " href="#">
				<i class="material-icons">people</i>
				<span class="menu-title" data-i18n="">@Lang('common.gestao-efetivo')</span>
			</a>
			<div class="collapsible-body">
				<ul class="collapsible collapsible-sub" data-collapsible="accordion">
					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('gestao/efetivo/area-formacao*')) ? 'active' : '' }}" href="{{route('area-formacao.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/areaformacao.name')</span>

						</a>
					</li>
					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('gestao/efetivo/escolaridade*')) ? 'active' : '' }}" href="{{route('escolaridade.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/escolaridade.name')</span>

						</a>
					</li>
					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('gestao/efetivo/posto-graduacao*')) ? 'active' : '' }}" href="{{route('posto-graduacao.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/postograduacao.name')</span>

						</a>
					</li>
					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('gestao/efetivo/user*')) ? 'active' : '' }}" href="{{route('user.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/user.name')</span>

						</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="bold {{ (request()->is('gestao/estatistica/*')) ? 'active' : '' }}">
			<a class="collapsible-header waves-effect waves-cyan link-pmpr " href="#">
				<i class="material-icons">insert_chart</i>
				<span class="menu-title" data-i18n="">@Lang('common.gestao-estatistica')</span>
			</a>
			<div class="collapsible-body">
				<ul class="collapsible collapsible-sub" data-collapsible="accordion">
					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('gestao/estatistica/acao-estatistica*')) ? 'active' : '' }}" href="{{route('acao-estatistica.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/acaoestatistica.name')</span>

						</a>
					</li>
					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('gestao/estatistica/origem-estatistica*')) ? 'active' : '' }}" href="{{route('origem-estatistica.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/origemestatistica.name')</span>

						</a>
					</li>
					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('gestao/estatistica/natureza-estatistica*')) ? 'active' : '' }}" href="{{route('natureza-estatistica.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/naturezaestatistica.name')</span>

						</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="bold {{ (request()->is('management/*') || (request()->is('gestao/*') )) ? 'active' : '' }}">
			<a class="collapsible-header waves-effect waves-cyan link-pmpr " href="#">
				<i class="material-icons">content_paste</i>
				<span class="menu-title" data-i18n="">@Lang('common.gestao')</span>

			</a>
			<div class="collapsible-body">
				<ul class="collapsible collapsible-sub" data-collapsible="accordion">
					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('management/ambiente*')) ? 'active' : '' }}" href="{{route('ambiente.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/ambiente.name')</span>
						</a>
					</li>

					@role('root')

					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('gestao/agencia*')) ? 'active' : '' }}" href="{{route('agencias.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/agencia.name')</span>

						</a>
					</li>

					@endrole

					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('gestao/canal*')) ? 'active' : '' }}" href="{{route('canal.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/canal.name')</span>
						</a>
					</li>

					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('management/estabelecimento-prisional*')) ? 'active' : '' }}" href="{{route('estabelecimento-prisional.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/estabelecimentoprisional.name')</span>
						</a>
					</li>
					
					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('management/faccao-criminosa*')) ? 'active' : '' }}" href="{{route('faccao-criminosa.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/faccaocriminosa.name')</span>
						</a>
					</li>
					
					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('management/natureza-crime*')) ? 'active' : '' }}" href="{{route('natureza-crime.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/naturezacrime.name')</span>
						</a>
					</li>
					
					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('management/origin*')) ? 'active' : '' }}" href="{{route('origin.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/origin.name')</span>

						</a>
					</li>
					
					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('management/padrao-desenho*')) ? 'active' : '' }}" href="{{route('padrao-desenho.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/padraodesenho.name')</span>

						</a>
					</li>
					
					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('management/regiao-corpo*')) ? 'active' : '' }}" href="{{route('regiao-corpo.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/regiaocorpo.name')</span>

						</a>
					</li>

					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('management/thematic*')) ? 'active' : '' }}" href="{{route('thematic.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/thematic.name')</span>

						</a>
					</li>

					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('management/documentotipo*')) ? 'active' : '' }}" href="{{route('documentotipo.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/documentotipo.name')</span>

						</a>
					</li>

					@role('root')
					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('management/role*')) ? 'active' : '' }}" href="{{route('role.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/role.name')</span>

						</a>
					</li>
					@endrole
					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('gestao/opm*')) ? 'active' : '' }}" href="{{route('opm.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/opm.name')</span>

						</a>
					</li>
					<li>
						<a class="collapsible-body link-pmpr {{ (request()->is('gestao/sistemas*')) ? 'active' : '' }}" href="{{route('sistemas.index')}}" data-i18n="">
							<i class="material-icons">radio_button_unchecked</i>
							<span>@Lang('controller/sistema.name')</span>

						</a>
					</li>
				</ul>
			</div>
		</li>
		@endrole
		
		@role('chefe-subsecao|chefe-regional|chefe-local')
		{{--
			<li class="bold">
				<a class="waves-effect waves-cyan " href="app-email.html">
					<i class="material-icons">mail_outline</i>
					<span class="menu-title" data-i18n="">Missoẽs</span>
					<span class="badge new badge pill pink accent-2 float-right mr-10">5</span>
				</a>
			</li>
			<li class="bold">
				<a class="waves-effect waves-cyan " href="app-chat.html">
					<i class="material-icons">chat_bubble_outline</i>
					<span class="menu-title" data-i18n="">Relatorios</span>

				</a>
			</li>
			<li class="bold">
				<a class="waves-effect waves-cyan" href="app-todo.html">
					<i class="material-icons">check</i>
					<span class="menu-title" data-i18n="">BI</span>

				</a>
			</li>
			--}}
			@endrole

			@role('agente')
			<li class="navigation-header">
				<a class="navigation-header-text">Agentes
				</a>
				<i class="navigation-header-icon material-icons">more_horiz</i>
			</li>

			<li class="bold">
				<a class="collapsible-header waves-effect waves-cyan " href="#">
					<i class="material-icons">content_paste</i>
					<span class="menu-title" data-i18n="">Agentes</span>

				</a>
				<div class="collapsible-body">
					<ul class="collapsible collapsible-sub" data-collapsible="accordion">
						<li>
							<a class="collapsible-body" href="page-contact.html" data-i18n="">
								<i class="material-icons">radio_button_unchecked</i>
								<span>Menu 1</span>

							</a>
						</li>
						<li>
							<a class="collapsible-body" href="page-blog-list.html" data-i18n="">
								<i class="material-icons">radio_button_unchecked</i>
								<span>Menu 2</span>

							</a>
						</li>
						<li>
							<a class="collapsible-body" href="page-search.html" data-i18n="">
								<i class="material-icons">radio_button_unchecked</i>
								<span>Menu 3</span>

							</a>
						</li>

					</ul>
				</div>
			</li>
			<li class="bold">
				<a class="collapsible-header waves-effect waves-cyan " href="#">
					<i class="material-icons">crop_original</i>
					<span class="menu-title" data-i18n="">Medias</span>

				</a>
				<div class="collapsible-body">
					<ul class="collapsible collapsible-sub" data-collapsible="accordion">
						<li>
							<a class="collapsible-body" href="media-gallery-page.html" data-i18n="">
								<i class="material-icons">radio_button_unchecked</i>
								<span>Gallery Page</span>

							</a>
						</li>
						<li>
							<a class="collapsible-body" href="media-hover-effects.html" data-i18n="">
								<i class="material-icons">radio_button_unchecked</i>
								<span>Media Hover Effects</span>

							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="bold">
				<a class="collapsible-header waves-effect waves-cyan " href="#">
					<i class="material-icons">face</i>
					<span class="menu-title" data-i18n="">User</span>
					<span class="badge badge pill purple float-right mr-10">10</span>

				</a>
				<div class="collapsible-body">
					<ul class="collapsible collapsible-sub" data-collapsible="accordion">
						<li>
							<a class="collapsible-body" href="user-profile-page.html" data-i18n="">
								<i class="material-icons">radio_button_unchecked</i>
								<span>User Profile</span>

							</a>
						</li>
						<li>
							<a class="collapsible-body" href="user-login.html" data-i18n="">
								<i class="material-icons">radio_button_unchecked</i>
								<span>Login</span>

							</a>
						</li>
						<li>
							<a class="collapsible-body" href="user-register.html" data-i18n="">
								<i class="material-icons">radio_button_unchecked</i>
								<span>Register</span>

							</a>
						</li>
						<li>
							<a class="collapsible-body" href="user-forgot-password.html" data-i18n="">
								<i class="material-icons">radio_button_unchecked</i>
								<span>Forgot Password</span>

							</a>
						</li>
						<li>
							<a class="collapsible-body" href="user-lock-screen.html" data-i18n="">
								<i class="material-icons">radio_button_unchecked</i>
								<span>Lock Screen</span>

							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="bold">
				<a class="collapsible-header waves-effect waves-cyan " href="#">
					<i class="material-icons">filter_tilt_shift</i>
					<span class="menu-title" data-i18n="">Misc</span>

				</a>
				<div class="collapsible-body">
					<ul class="collapsible collapsible-sub" data-collapsible="accordion">
						<li>
							<a class="collapsible-body" href="page-404.html" data-i18n="">
								<i class="material-icons">radio_button_unchecked</i>
								<span>404</span>

							</a>
						</li>
						<li>
							<a class="collapsible-body" href="page-maintenance.html" data-i18n="">
								<i class="material-icons">radio_button_unchecked</i>
								<span>Page Maintenanace</span>

							</a>
						</li>
						<li>
							<a class="collapsible-body" href="page-500.html" data-i18n="">
								<i class="material-icons">radio_button_unchecked</i>
								<span>500</span>

							</a>
						</li>
					</ul>
				</div>
			</li>
			@endrole

		</ul>
		<div class="hide-ps"></div>
		<div class="navigation-background">
		</div>
		<a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out">
			<i class="material-icons">menu</i>

		</a>
	</aside>
	{{--  END: SideNav --}}