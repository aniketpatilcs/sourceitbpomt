<div id="wrapper">
     <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="">Machine Test</a></h1>         
               </div>
             <div class=" border-bottom">
         
       
            <!-- Brand and toggle get grouped for better mobile display -->
         
           <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
            <div class="clearfix">
       
     </div>
      
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                
                    <li>
                        <a href="{{ route('dashboard') }}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>
                   
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Email</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('composeemail.add') }}" class=" hvr-bounce-to-right"> <i class="fa fa-file-text-o nav_icon"></i>Compose</a></li>
                            
                            <li><a href="{{ route('viewcomposed') }}" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i>View</a></li>
             

                       </ul>
                    </li>
                         
                     
                
                
                    
                  
                 
                </ul>
            </div>
            </div>
        </nav>