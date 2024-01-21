<!DOCTYPE html>
<html>

{{-- Include Head --}}
@include('common.head')

<body> 
            <!-- Topbar -->
            @include('common.header')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            @yield('content')
            
     <script src="{{asset('js/scripts.js')}}"></script>
    @yield('scripts')
    <div class="clearfix"> </div>
       </div>
</body>
</html>