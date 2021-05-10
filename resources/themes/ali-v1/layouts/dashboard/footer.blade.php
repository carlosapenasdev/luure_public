{{--  BEGIN: Footer --}}
<footer class="page-footer footer footer-static footer-dark gradient-45deg-blue-grey-blue-grey-invert gradient-shadow navbar-border navbar-shadow">
    <div class="footer-copyright">
        <div class="container">
            <span>
            	<a href="mailto:{{config('luure.developer')}}" target="_blank" class="strong link-pmpr">{{Lang::get('common.developer', ['usuario' => 'Sd. QPMG 1-0 Eduardo'])}}</a>
            </span>
            <span class="right hide-on-small-only grey-text text-darken-3 strong">
            	{{Lang::get('common.local')}}
                {{\Carbon\Carbon::now()->year}}
            </span>
        </div>
    </div>
</footer>
{{--  END: Footer --}}