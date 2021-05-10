<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

<link rel="apple-touch-icon" href="{{ Theme::url('images/favicon/pmpr.ico') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ Theme::url('images/favicon/pmpr.ico') }}">
{!! Theme::css('css/fonts.googleapis.material.css') !!}

{!! Theme::css('vendors/vendors.min.css') !!}
{!! Theme::css('css/layout/dashboard/materialize.css') !!}
{!! Theme::css('css/layout/dashboard/style.css') !!}
{!! Theme::css('css/custom/custom.css') !!}

{!! Theme::css('vendors/data-tables/css/jquery.dataTables.min.css') !!}
{!! Theme::css('vendors/data-tables/css/select.dataTables.min.css') !!}

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>
	{{ config('app.name', 'Laravel') }} - {{isset($bread['name']) ? $bread['name'] : ''}}{{isset($bread['item']) ? ' > '.$bread['item'] : ''}}
</title>