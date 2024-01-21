 @extends('layouts.app')

@section('title', 'Home')

@section('content')
<script src="https://cdn.tiny.cloud/1/rw97030x1z1bzyg5bmqsal43jdgcwwcuwgo2tn8huq50ej1z/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
    <!--banner-->   
             <div class="banner">
                <h2>
                <a href="/dashboard">Home</a>
                <i class="fa fa-angle-right"></i>
                <span>Compose</span>
                </h2>
            </div>
        <!--//banner-->
    <!--grid-->
    <div class="grid-form">
        <div class="grid-form1">
     <h3 id="forms-example" class="">Compose Email</h3>
                 @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif

         @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif


       <form method="post" action="{{ route('composeemail.insert') }}" enctype="multipart/form-data">
         <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
         <div class="form-group">
             <label for="exampleInputPassword1">Recipient Email</label>
             <input type="email" class="form-control" name="recipient"  >
         </div>
         <div class="form-group">
            <label for="exampleInputPassword1">Subject</label>
            <input type="text" class="form-control" name="subject"  >
          </div>
         <div class="form-group">
            <label for="exampleInputPassword1">Attachment</label>
            <input type="file" name="image" class="form-control">
        </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Message</label>
            <textarea id="message" name="message"></textarea>
         </div>

         <button type="submit" class="btn btn-danger" name="univer_submit" >Submit</button>
            </form>
            </div>
        </div>
        </div>
        </div>
<script>
    tinymce.init({
      selector: '#message'
    });
</script>
        @endsection

@section('scripts')
    
@endsection
