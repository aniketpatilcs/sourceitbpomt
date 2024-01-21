 @extends('layouts.app')

@section('title', 'Home')

@section('content')
<div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
    <!--banner-->   
             <div class="banner">
                <h2>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
                <span>Dashboard</span>
                </h2>
            </div>
        <!--//banner-->
    <!--grid-->
    <div class="content-top">
            
            
            <div class="col-md-4 ">
                <div class="content-top-1">
                <div class="col-md-6 top-content">
                    <h5>Email Send</h5>
                    <label>{{ $emails}}</label>
                </div>
                 
                 <div class="clearfix"> </div>
                </div>
                


                 


                

            </div>  

            
            
         
        <div class="clearfix"> </div>
        </div>
    <!--//grid-->
        <!---->
 
        </div>
        </div>
        @endsection

@section('scripts')
    
@endsection
