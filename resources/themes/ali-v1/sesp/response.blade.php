<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{$request->destino}}" enctype="multipart/form-data" method="POST" name="form-respose" id="form-respose">
	@csrf
	@foreach($response->all() as $key => $val)
	<input type="hidden" name="{{$key}}" value="{{$val}}">
	@endforeach
	<script type="text/javascript">
		form = document.getElementById('form-respose');
		form.submit();
	</script>
</form>
</body>
</html>