<a class="modal-trigger m-0" href="#modal12">
	<h3 class="m-0 p-0">@lang('controller/sobre.significa')</h3>
</a>

<div id="modal12" class="modal overflow-y-unset center-align">
	<div class="modal-content">		
		<h4 class="left-align">@lang('controller/sobre.significa')</h4>

		<video controls>
			<source src="{{url('/upload/sobre/02-nome-luure.webm')}}" type="video/mp4" />
		</video>
		<div class="row mt-1">
			<a class="waves-effect waves-light btn-large mb-1 grey darken-4" href="javascript:backModal('modal12', 'modal11');">
				<i class="material-icons dp48">keyboard_arrow_left</i>
			</a>
			<a class="waves-effect waves-light btn-large mb-1 grey darken-4" href="javascript:nextModal('modal12', 'modal21');">
				<i class="material-icons dp48">keyboard_arrow_right</i>
			</a>
		</div>
	</div>
</div>