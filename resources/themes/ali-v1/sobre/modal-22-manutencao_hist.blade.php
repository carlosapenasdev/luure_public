<a class="modal-trigger m-0 less" href="#modal22">
	<h3 class="m-0 p-0">@lang('controller/sobre.manutencao_hist')</h3>
</a>

<div id="modal22" class="modal overflow-y-unset center-align">
	<div class="modal-content">		
		<h4 class="left-align">@lang('controller/sobre.manutencao_hist')</h4>

		<video controls>
			<source src="{{url('/upload/sobre/04-historico.webm')}}" type="video/mp4" />
		</video> 
		<div class="row mt-1">
			<a class="waves-effect waves-light btn-large mb-1 grey darken-4" href="javascript:backModal('modal22', 'modal21');">
				<i class="material-icons dp48">keyboard_arrow_left</i>
			</a>
			<a class="waves-effect waves-light btn-large mb-1 grey darken-4" href="javascript:nextModal('modal22', 'modal23');">
				<i class="material-icons dp48">keyboard_arrow_right</i>
			</a>
		</div>
	</div>
</div>