@extends('layout')
   
   <!-- END: Side Navigation -->
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Dashboard <small>Welcome back <span class="text-primary">Maria Fällström</span></small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
           
                
                <div class="row">
                    
                    <!-- <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fs-bars"></i> Live Feeds</h3>
                                <div class="tools">
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>	                                
                                </div>
                            </div>
                            <div class="panel-body">
                                
                                <div class="col-md-8">
                                    <div class="chartDashboard" id="chartLive"></div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="row">
                                        
                                        <div class="col-sm-6 col-md-12 pt-md">
                                            My Tasks <strong class="pull-right">12/20</strong>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-12 pt-md">
                                            Storage <strong class="pull-right">8/20 GB</strong>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-success" style="width: 40%;"></div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-12 pt-md">
                                            Bugs  <strong class="pull-right">90/100</strong>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-danger" style="width: 90%;"></div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-12 pt-md">
                                            User Testing <strong class="pull-right">7 Days</strong>
                                            <div class="progress progress-sm progress-striped active">
                                                <div class="progress-bar progress-bar-warning" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div> -->
                    
                </div>
                
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-body text-center">
                                
                                <h4>Absence</h4>
                                
                                <input class="chart-knob" 
                                       data-angleArc=360 
                                       data-bgColor="rgba(255,72,89,0.1)" 
                                       data-fgColor="#FF4859" 
                                       data-thickness=".2" 
                                       value="{{$perabsence}}" 
                                       data-end="{{$perabsence}}" 
                                       data-width="100" 
                                       data-height="100" 
                                       data-readonly="true">
                                
                                <div class="db-details pt-md">
                                    <ul class="list-unstyled text-left">
                                        <li class="text-danger">
                                            <i class="fa fa-square"></i> &nbsp;Today ({{$absence}})
                                            <span class="pull-right">{{$perabsence}}%</span>
                                        </li>
                                        <li class="text-success">
                                            <i class="fa fa-square"></i> &nbsp;Yesterday ({{$absence2}})
                                            <span class="pull-right">{{$perabsence2}}%</span>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-body text-center">
                                
                                <h4>Bar Chart</h4>
                                
                                <span class="sparkline-bar" 
                                      data-height="100" 
                                      data-barColor="#00C9E6" 
                                      data-lineColor="#32c8de" 
                                      data-barWidth="15">90,80,70,60,50,40,30,20,10</span>
                                
                                <div class="pt-md mb-sm text-lg">
                                    <span> 140 <i class="fa fa-angle-double-up text-success"></i></span> &nbsp; 
                                    <span> 250 <i class="fa fa-angle-double-down text-danger"></i></span> 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <!-- <div class="col-md-3 col-sm-6 col-xs-6 col-mob">
                        <div class="panel">
                            <div class="panel-body text-center">
                                <h4>Settings</h4>
                                <ul class="text-left list-unstyled list-quick-setting-1">
                                    <li><i class="fa fa-wifi"></i> &nbsp; Wifi <a href="#" class="btn btn-danger btn-xs">Off</a></li>
                                    <li><i class="fa fa-envelope"></i> &nbsp; Email <a href="#" class="btn btn-success btn-xs">On</a></li>
                                    <li><i class="fa fa-linux"></i> &nbsp; Linux <a href="#" class="btn btn-success btn-xs">On</a></li>
                                    <li><i class="fa fa-book"></i> &nbsp; Book <a href="#" class="btn btn-danger btn-xs">Off</a></li>
                                    <li><i class="fa fa-dropbox"></i> &nbsp; Dropbox <a href="#" class="btn btn-success btn-xs">On</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-body text-center">
                                
                                <h4>Personnels Chart ({{$sum}})</h4>
                                
                                <span class="sparkline-pie" 
                                      data-height="100" 
                                      data-width="120" 
                                      data-sliceColors="['#ed5441','#609cec', '#51d466', '#fcd419']">{{ $homme }},{{ $femme }}</span>
                                      
                                <div class="pt-md mb-sm text-lg">
                                    <span> {{ $homme }}% <i class="fa fa-mars text-success"></i></span> &nbsp; 
                                    <span> {{ $femme }}% <i class="fa fa-venus text-danger"></i></span> 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="monthly" id="mycalendar"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- <div class="col-md-4">
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <div id="browser-chart" style="height:370px;"></div>
                            </div>
                        </div>
                    </div> -->
                    
                    
                        
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">TO-DO List</h3>
                                <div class="tools">
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>                                
                                </div>
                            </div>
                            <div class="panel-body todoapp">
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 id="todo-message">
                                            <span id="todo-remaining"></span>of <span id="todo-total"></span>remaining
                                        </h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="javascript:;" class="pull-right btn btn-success btn-sm" id="btn-archive">Archive</a>
                                    </div>
                                </div>
                                
                                <div class="scroller" data-height="290px">
                                    <ul class="list-group no-margn todo-list" id="todo-list">

                                    </ul>
                                </div>
                                    
                            </div>
                            <div class="panel-footer">
                                <form name="todo-form" id="todo-form" role="form" class="m-t-20">
                                    <div class="row">
                                        <div class="col-sm-9 todo-inputbar">
                                            <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo">
                                        </div>
                                        <div class="col-sm-3 todo-send">
                                            <button class="btn-primary btn-block btn waves-effect waves-light" type="button" id="todo-btn-submit">Add</button>
                                        </div>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    
                    <!-- <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tickets</h3>
                            </div>
                            <div class="panel-body">
                                
                                <ul class="list-supportTickets">
                                    
                                    <li>
                                        <a href="#"><img src="demo/users/img-user-15.jpg" alt="" class="img-responsive" /></a>
                                        <div class="ticket-details">
                                            <h4><a href="#">Something is not working in my project</a></h4>
                                            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque <span class="label label-danger">Open</span></p>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-external-link"></i></a>
                                                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-times"></i></a>
                                                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <a href="#"><img src="demo/users/img-user-14.jpg" alt="" class="img-responsive" /></a>
                                        <div class="ticket-details">
                                            <h4><a href="#">What is going on now in my project?</a></h4>
                                            <p>Vivamus diam elit diam, consecstetur dapibus adipiscing elit. <span class="label label-success">Closed</span></p>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-external-link"></i></a>
                                                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-times"></i></a>
                                                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <a href="#"><img src="demo/users/img-user-13.jpg" alt="" class="img-responsive" /></a>
                                        <div class="ticket-details">
                                            <h4><a href="#">Why it is not working on IE9?</a></h4>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <span class="label label-warning">Active</span></p>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-external-link"></i></a>
                                                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-times"></i></a>
                                                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <a href="#"><img src="demo/users/img-user-12.jpg" alt="" class="img-responsive" /></a>
                                        <div class="ticket-details">
                                            <h4><a href="#">Aliquam nec ultricies velit?</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean viverra placerat mauris id <span class="label label-warning">Active</span></p>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-external-link"></i></a>
                                                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-times"></i></a>
                                                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
                                
                            </div>
                        </div>
                    </div> -->
                    
                    <!-- <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">TO-DO List</h3>
                                <div class="tools">
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>                                
                                </div>
                            </div>
                            <div class="panel-body todoapp">
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 id="todo-message">
                                            <span id="todo-remaining"></span>of <span id="todo-total"></span>remaining
                                        </h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="javascript:;" class="pull-right btn btn-success btn-sm" id="btn-archive">Archive</a>
                                    </div>
                                </div>
                                
                                <div class="scroller" data-height="290px">
                                    <ul class="list-group no-margn todo-list" id="todo-list">

                                    </ul>
                                </div>
                                    
                            </div>
                            <div class="panel-footer">
                                <form name="todo-form" id="todo-form" role="form" class="m-t-20">
                                    <div class="row">
                                        <div class="col-sm-9 todo-inputbar">
                                            <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo">
                                        </div>
                                        <div class="col-sm-3 todo-send">
                                            <button class="btn-primary btn-block btn waves-effect waves-light" type="button" id="todo-btn-submit">Add</button>
                                        </div>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div> -->
                    
                    <!-- <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-body ">
                                <div class="chat-conversation scroller" data-height="315px">
                                    <ul class="conversation-list">
                                        
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="demo/users/img-user-03.jpg" alt="male">
                                                <i>10:00</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>John Deo</i>
                                                    <p>Hello! ✋</p>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="demo/users/img-user-01.jpg" alt="Female">
                                                <i>10:01</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>Marco Lopes</i>
                                                    <p>Hi, How are you?☺ What about our next meeting?😼</p>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="demo/users/img-user-03.jpg" alt="male">
                                                <i>10:01</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>John Deo</i>
                                                    <p>Yeah everything is fine 👍</p>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="demo/users/img-user-01.jpg" alt="male">
                                                <i>10:02</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>Marco Lopes</i>
                                                    <p>Wow that's great 👏</p>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="demo/users/img-user-03.jpg" alt="male">
                                                <i>10:01</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>John Deo</i>
                                                    <p>What can you do with HTML VIEWER ?</p>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="demo/users/img-user-01.jpg" alt="male">
                                                <i>10:02</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>Marco Lopes</i>
                                                    <p>It helps to beautify/format your HTML.</p>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="demo/users/img-user-01.jpg" alt="male">
                                                <i>10:02</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>Marco Lopes</i>
                                                    <p>It helps to save and share HTML content and show the HTML output</p>
                                                </div>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="input-group">
                                    <input type="text" class="form-control txt-emoji" placeholder="Your Message. . . ">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">Send</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
                </div>
                
            </div>  <!--END: Content Wrap-->
            
        </div>  <!-- END: Main Container -->
        
        