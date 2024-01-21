 @extends('layouts.app')

@section('title', 'Home')

@section('content')
<div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
    <!--banner-->   
             <div class="banner">
                <h2>
                <a href="/dashboard">Home</a>
                <i class="fa fa-angle-right"></i>
                <span>View</span>
                </h2>
            </div>
        <!--//banner-->
    <!--grid-->
<div class="grid-form">
<div class="tab-pane active text-style" id="tab1">
  <div class="inbox-right">
            
            <div class="mailbox-content">
                
                <table class="table cell-border dataTable  compact stripe" id="myTable">
                    <thead>
                    <tr>
                    <th>Sr No</th>
                    <th>Created </th>
                    <th>Recipient email </th>
                    <th>Subject</th>
                     <th>Attachment</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($emails as $k => $email)
                        <tr class="table-row">
                            <td class="table-img">
                               {{++$k}}
                            </td>
                             <td >
                            {{$email->created_at}}
                            </td>

                            <td class="table-text">
                                 {{$email->recipient}}
                            </td>
                            <td>
                            {{$email->subject}}
                            </td>
                           
                           <td>
                            @if($email->image)
                                 <a href="{{ asset('images/' . $email->image) }}" target="_blank">View Image</a>
                            @else
                             No Image
                            @endif
                            </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
               </div>
            </div>
</div>
</div>
   </div>
    </div>

<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"/>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
     console.log('ready');
    $('#myTable').DataTable({
            paging: true,
             rowReorder: true
        });
}); 
</script>
        @endsection

@section('scripts')
    
@endsection
