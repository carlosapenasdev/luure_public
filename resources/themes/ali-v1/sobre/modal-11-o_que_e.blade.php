<a class="modal-trigger m-0 less" href="#modal11">
	<h3 class="m-0 p-0">@lang('controller/sobre.o_que_e')</h3>
</a>

<div id="modal11" class="modal overflow-y-unset center-align">
	<div class="modal-content">
		<div class="row">
			<h4 class="left-align">@lang('controller/sobre.o_que_e')</h4>

			<video controls>
				<source src="{{url('/upload/sobre/01-oque-e.webm')}}" type="video/mp4" />
			</video>
		</div>
		<div class="row mt-1">
			<a class="waves-effect waves-light btn-large mb-1 grey darken-4" href="javascript:nextModal('modal11', 'modal12');">
				<i class="material-icons dp48">keyboard_arrow_right</i>
			</a>
		</div>
	</div>
</div>