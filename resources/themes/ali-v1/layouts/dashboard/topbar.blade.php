@include('layouts/partials/barra-local')

{{--  BEGIN: Header --}}
<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-blue-grey-blue-grey-invert gradient-shadow">
            <div class="nav-wrapper">
                {{--
                <div class="header-search-wrapper hide-on-med-and-down">
                    <i class="material-icons">search</i>
                    <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Materialize">
                </div>
                --}}
                <ul class="navbar-list right">
                    {{--
                    <li class="hide-on-med-and-down">
                        <a class="waves-effect waves-block waves-light translation-button" href="javascript:void(0);" data-target="translation-dropdown">
                            <span class="flag-icon flag-icon-gb">
                            </span>

                        </a>
                    </li>
                    <li class="hide-on-med-and-down">
                        <a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
                            <i class="material-icons">settings_overscan</i>

                        </a>
                    </li>
                    --}}
                    <li class="hide-on-large-only">
                        <a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);">
                            <i class="material-icons">search</i>

                        </a>
                    </li>

                    {{--
                    <li>
                        <a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown">
                            <i class="material-icons">notifications_none<small class="notification-badge">5</small>
                            </i>

                        </a>
                    </li>
                    --}}
                    <li>
                        <a class="grey-text text-darken-1 tooltipped" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="height: 4.3em;" data-position="left" data-tooltip="@lang('auth.logout')">
                            <i class="material-icons">exit_to_app</i>
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
                {{--  translation-button --}}
                {{--
                <ul class="dropdown-content" id="translation-dropdown">
                    <li>
                        <a class="grey-text text-darken-1" href="#!">
                            <i class="flag-icon flag-icon-gb"></i> English

                        </a>
                    </li>
                    <li>
                        <a class="grey-text text-darken-1" href="#!">
                            <i class="flag-icon flag-icon-fr">
                            </i> French
                        </a>
                    </li>
                    <li>
                        <a class="grey-text text-darken-1" href="#!">
                            <i class="flag-icon flag-icon-cn">
                            </i> Chinese
                        </a>
                    </li>
                    <li>
                        <a class="grey-text text-darken-1" href="#!">
                            <i class="flag-icon flag-icon-de">
                            </i> German
                        </a>
                    </li>
                </ul>
                --}}
                {{--  notifications-dropdown --}}
                {{--
                <ul class="dropdown-content" id="notifications-dropdown">
                    <li>
                        <h6>@lang('common.notificacoes')<span class="new badge">5</span>
                        </h6>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a class="grey-text text-darken-2" href="#!">
                            <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> Elaborar ordem de busca
                        </a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                    </li>
                    <li>
                        <a class="grey-text text-darken-2" href="#!">
                            <span class="material-icons icon-bg-circle red small">stars</span> Elaborar relatorio da missao
                        </a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                    </li>
                    <li>
                        <a class="grey-text text-darken-2" href="#!">
                            <span class="material-icons icon-bg-circle teal small">settings</span> Enviar email para a seção
                        </a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                    </li>
                    <li>
                        <a class="grey-text text-darken-2" href="#!">
                            <span class="material-icons icon-bg-circle deep-orange small">today</span> Checar informação mala
                        </a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                    </li>
                    <li>
                        <a class="grey-text text-darken-2" href="#!">
                            <span class="material-icons icon-bg-circle amber small">trending_up</span> Troca óleo da VTR 12110
                        </a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                    </li>
                </ul>
                --}}
                {{--  profile-dropdown --}}
                    {{--
                <ul class="dropdown-content" id="profile-dropdown">
                    <li>
                        <a class="grey-text text-darken-1" href="{{route('user.perfil')}}">
                            <i class="material-icons">person_outline</i> @lang('common.profile')
                        </a>
                    </li>
                    <li>
                        <a class="grey-text text-darken-1" href="app-chat.html">
                            <i class="material-icons">chat_bubble_outline</i> Chat
                        </a>
                    </li>
                    <li>
                        <a class="grey-text text-darken-1" href="page-faq.html">
                            <i class="material-icons">help_outline</i> Help
                        </a>
                    </li>
                    --}}
                    <li class="divider">
                    </li>
                    {{--
                    <li>
                        <a class="grey-text text-darken-1" href="user-lock-screen.html">
                            <i class="material-icons">lock_outline</i> Lock
                        </a>
                    </li>
                    <li>
                        <a class="grey-text text-darken-1" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="material-icons">exit_to_app</i> @lang('auth.logout')
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
                    --}}
            </div>
            <nav class="display-none search-sm">
                <div class="nav-wrapper">
                    <form>
                        <div class="input-field">
                            <input class="search-box-sm" type="search" required="">
                            <label class="label-icon" for="search">
                                <i class="material-icons search-sm-icon">search</i>
                            </label>
                            <i class="material-icons search-sm-close">close</i>
                        </div>
                    </form>
                </div>
            </nav>
        </nav>
    </div>
</header>
{{--  END: Header --}}