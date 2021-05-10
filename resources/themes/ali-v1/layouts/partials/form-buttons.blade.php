<div class="input-field col s12 center-align">
	<button class="btn red accent-2 waves-effect waves-light border-round form_reset @if(isset($modalClose) && $modalClose == true) modal-action modal-close @endif" type="button" name="action">{{Lang::get('common.form_reset')}}
		<i class="material-icons right">clear</i>
	</button>
	<button class="btn green darken-1 waves-effect waves-light border-round submit-all-btn" type="submit" name="action" id="{{isset($idBTN) ? $idBTN : 'submit-all'}}">{{Lang::get('common.form_action')}}
		<i class="material-icons right">send</i>
	</button>
</div>