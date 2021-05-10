{{--  BEGIN: Page Main --}}
<div id="main">
	<div class="row">
		<div class="breadcrumbs-inline pb-1" id="breadcrumbs-wrapper">
			{{--  Search for small screen --}}
			@include('layouts/dashboard/breadcrumbs')
		</div>


		<div class="col s12">
			<div class="container">
				<div class="section">
					<div class="card">
						@yield('content')
					</div>
				</div>
				{{-- #{todo-remover} botão mais flutuante todas as paginas
				<div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
					<a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
						<i class="material-icons">add</i>

					</a>
					<ul>
						<li>
							<a href="css-helpers.html" class="btn-floating blue">
								<i class="material-icons">help_outline</i>

							</a>
						</li>
						<li>
							<a href="cards-extended.html" class="btn-floating green">
								<i class="material-icons">widgets</i>

							</a>
						</li>
						<li>
							<a href="app-calendar.html" class="btn-floating amber">
								<i class="material-icons">today</i>

							</a>
						</li>
						<li>
							<a href="app-email.html" class="btn-floating red">
								<i class="material-icons">mail_outline</i>

							</a>
						</li>
					</ul>
				</div>
				--}}

			</div>
		</div>
	</div>
</div>
{{--  END: Page Main --}}