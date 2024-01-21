 
<!DOCTYPE HTML>
<html>
<head>
<title>Machine Test</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<script src="{{asset('js/jquery.min.js')}}"> </script>
<script src="{{asset('js/bootstrap.min.js')}}"> </script>
  
<!-- Mainly scripts -->
<script src="{{asset('js/jquery.metisMenu.js')}}"></script>
<script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>
<!-- Custom and plugin javascript -->
<link href="{{asset('css/custom.css')}}" rel="stylesheet">
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/screenfull.js')}}"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

<style type="text/css">
table.dataTable tr.odd {
    background-color: #fff !important;
}
table.dataTable tr.odd td.sorting_1 {
    background-color: #fff !important;
}
table.dataTable {
    margin: 25px auto;
}

.table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    color: #333 !important;
}
table.dataTable tr.even td.sorting_1 {
    background-color: #fff !important;
}
</style>
</head>