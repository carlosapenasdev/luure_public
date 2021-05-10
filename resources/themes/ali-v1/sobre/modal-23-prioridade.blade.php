<a class="modal-trigger m-0" href="#modal23">
	<h3 class="m-0 p-0">@lang('controller/sobre.prioridade')</h3>
</a>

<div id="modal23" class="modal overflow-y-unset center-align">
	<div class="modal-content">		
		<h4 class="left-align">@lang('controller/sobre.prioridade')</h4>

		<video controls>
			<source src="{{url('/upload/sobre/05-prioridades.webm')}}" type="video/mp4" />
		</video>
		<div class="row mt-1">
			<a class="waves-effect waves-light btn-large mb-1 grey darken-4" href="javascript:backModal('modal23', 'modal22');">
				<i class="material-icons dp48">keyboard_arrow_left</i>
			</a>
			<a class="waves-effect waves-light btn-large mb-1 grey darken-4" href="javascript:nextModal('modal23', 'modal24');">
				<i class="material-icons dp48">keyboard_arrow_right</i>
			</a>
		</div>
	</div>
</div>