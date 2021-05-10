{{--  Search for small screen --}}
<div class="container">
	<div class="row">
		@if(!Request::is('dashboard*') )
		<div class="col s10 m6 l6 breadcrumbs-left">
			<h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down">
				{{isset($bread['name']) ? $bread['name'] : ''}}
			</h5>
			<ol class="breadcrumbs mb-0">
				<li class="breadcrumb-item">
					<a href="/" class="link-pmpr">Início
					</a>
				</li>
				@if(isset($bread['rota']))
				<li class="breadcrumb-item">
					<a class="link-pmpr" href="{{Route::has($bread['rota'].'.index') ? route($bread['rota'].'.index', $bread['routeParams']) : ''}}">{{$bread['name']}}</a>
				</li>
				@endif
				<li class="breadcrumb-item active">{{isset($bread['item']) ? $bread['item'] : ''}}
				</li>
			</ol>
		</div>
		<div class="col s2 m6 l6">
			@if(isset($bread['rota']))
			<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4" href="{{Route::has($bread['rota'].'.create') ? route($bread['rota'].'.create', $bread['routeParams']) : ''}}" data-position="top" data-tooltip="{{Lang::get('common.bread_insert')}} {{$bread['name']}}">
				<i class="material-icons">add</i>
			</a>
			@endif
		</div>
		@endif
	</div>
</div>