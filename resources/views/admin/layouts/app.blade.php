<!DOCTYPE html>
<html lang="en">
<head>
	@yield('link')
	@section('session','Admin')
	@include('layouts.head')
	<?php $allRequests=\App\Model\Capturer::where('status','=','0')->get(); ?>
	<?php $admin01=\App\Model\Admin::where('id',Auth::user()->id)->get(); ?>

</head>
<body class="hold-transition skin-blue sidebar-mini layout-fixed">
	<div class="wrapper">
		@include('admin.layouts.header')
		@include('admin.layouts.sidebar')

		<div class="content-wrapper">

			@yield('content')

			@if(Session::has('a.toast'))
				<div id="toast" class="mx-auto container row justify-content-center">
					<div class="alert bg-dark text-white" id="toast-body">
						{{ Session::get('a.toast') }}

					</div>
				</div>
				<script>setTimeout(function() { $('#toast').fadeOut('slow'); }, 3500);</script>
			@endif
			
		</div>
		@include('layouts.footer')
	</div>
	@yield('jquery')
</body>
</html>