<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Telkom Indonesia Backbone Route</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="telko.ico" type="image/x-icon" />     
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/datatables/jquery.dataTables.min.css"/>
        
    </head>
    <body>
        <div class="page-container">
            <div class="page-sidebar">
                <ul class="x-navigation">
				<?php
					require 'menu.php';
					getMenu(4);
				?>					
                </ul>
            </div>
            <div class="page-content">
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>  
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                </ul>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Maps</li>
                </ul>
                <div class="page-content-wrap">                
                    <div class="row">
                        <div class="col-md-12">                        
                        </div>         
				    <div class="row">
                        <div class="col-md-12">
							<div class="panel panel-default">
                                <div class="panel-heading">
                                    <ul class="panel-controls">
										<li><a href="#" id="panel-fullscreen" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
										<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body" id="mapPanel">
                                    <div class="map"  id="map" style="width: 100%; height: 400px;"></div>
                                </div>                            
                            </div>
							<div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Route data</h3>
                                    <div class="btn-group pull-right">
                                        <button id="AddRoute" class="btn btn-primary"><i class="fa fa-plus"></i> Add </button>
                                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>                                    
                                    
                                </div>
                                <div class="panel-body">
                                    <table id="example"  class="table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
												
                                                <th><p style="text-align:center;">Ne A</p></th>
												<th><p style="text-align:center;">Ne Z</p></th>
                                                <th><p style="text-align:center;">Desc A</p></th>
												<th><p style="text-align:center;">Desc Z</p></th>
												<th><p style="text-align:center;">Customer</p></th>
												<th><p style="text-align:center;">Kapasitas</p></th>
												<th><p style="text-align:center;">Route</p></th>
												<th><p style="text-align:center;">Edit</p></th>
												<th><p style="text-align:center;">Delete</p></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>              
                    </div>
                    </div>
                    
                </div>
            </div>            
        </div>
		
		<div class="modal" id="modal_large" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="largeModalHead">Add Route</h4>
                    </div>
                    <div class="modal-body">
						<div class="block">                                
							<div class="col-md-2">
								<label class="control-label select">Transmisi A</label>
								<select class="form-control select" data-live-search="true" id="slcTraA"></select>
							</div>                             
							<div class="col-md-2">
								<label class="control-label select"  disabled>Ne A</label>
								<select class="form-control select" data-live-search="true" id="slcNeA"></option></select>
							</div>
							<div class="col-md-2">
								<label class="control-label select">Transmisi Z</label>
								<select class="form-control select" data-live-search="true" id="slcTraZ"></option></select>
							</div>                             
							<div class="col-md-2">
								<label class="control-label select"  disabled>Ne Z</label>
								<select class="form-control select" data-live-search="true" id="slcNeZ"></option></select>
							</div>
							<div class="col-md-2">
								<label class="control-label select">Type</label>
								<select class="form-control select" data-live-search="true">
									<option data-hidden="true"></option>
									<option value="IP">IP/EtherNet</option>
									<option value="SDH">SDH/SONET</option>
								</select>
							</div>
							<div class="col-md-2">
								<label class="control-label select">Customer</label>
								<select class="form-control" data-live-search="true"  id="slcCust">
									<option data-hidden="true"></option>
								</select>
							</div>	
							<div class="col-md-13">
								<label class="control-label select">Description</label>
								<input type="text" class="form-control"/>
							</div>	
						</div>
						
						<div class="block">	
							<h4>Route Detil</h4>
							<hr>
							<div class="col-md-3">
								<label>Transmisi</label>
								<select class="form-control select" data-live-search="true" id="slcTraDetil">
								</select>
							</div>
							<div class="col-md-3">
								<label>NE</label>
								<select class="form-control select" data-live-search="true" id="slcNeDetil">
								</select>
							</div>
							<div class="col-md-3">
								<label>Direction</label>
								<select class="form-control select" data-live-search="true" id="slcDir">
								</select>
							</div>	
							<div class="col-md-3">
								<label>Card</label>
								<select class="form-control select" data-live-search="true" id="slcCard">
								</select>
							</div>							
							<div class="col-md-1">
									<label >Rack</label>
									<select class="form-control select" data-live-search="true" id="slcRack">
										<option data-hidden="true"></option>
									</select>
							</div>                                 
							<div class="col-md-1">
									<label >Subrack</label>
									<select class="form-control select" data-live-search="true" id="slcSubrack">
										<option data-hidden="true"></option>
									</select>
							</div>                                 
							<div class="col-md-1">
									<label >Slot</label>
									<select class="form-control select" data-live-search="true" id="slcSlot">
										<option data-hidden="true"></option>
									</select>
							</div>                                 
							<div class="col-md-1">
									<label >Port</label>
									<select class="form-control select" data-live-search="true" id="slcPort">
										<option data-hidden="true"></option>
									</select>
							</div>
								  
							<div class="col-md-7">
									<label >Description</label>
									<input type="text" class="form-control" id="detilDesc"/>
							</div>								
							<div class="col-md-1">
									<label><font color="white">amin</font></label>
									<button id="AddDetilRoute" class="btn btn-primary"><i class="fa fa-plus"></i> Add </button>
							</div>
						</div>
						 
						<div class="block">
						<table id="tblDetilCrud"  class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Transmisi</th>
										<th>Ne</th>
										<th>Direction</th>
										<th>Card</th>
										<th>Rack</th>
										<th>Slot</th>
										<th>Port</th>
										<th>Description</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								
							</table>
						</div>
						<div class="panel-body">
							
							
						</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>                        
                    </div>
                </div>
            </div>
        </div>
		
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS         
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAv5kJOWkkLSJMbJLtBGUayJNVbtlY9qlc&region=EN"></script>
		<!-- <script src="js/plugins/gmap3/gmap3.min.js"></script>-->
		
		<link rel="stylesheet" type="text/css" href="js/plugins/gmaps/examples.css" />
        <script type='text/javascript' src='js/plugins/gmaps/CustomGoogleMapMarker.js'></script>
        <script type='text/javascript' src='js/plugins/gmaps/gmaps.js'></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>  
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>
		
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/plugins/tableexport/jquery.base64.js"></script>
	<script type="text/javascript" src="js/plugins/tableexport/html2canvas.js"></script>
	<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="js/plugins/tableexport/jspdf/jspdf.js"></script>
	<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/base64.js"></script>   
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        <script type="text/javascript" src="js/demo_maps.js"></script>
        <!-- END TEMPLATE -->
        <script type="text/javascript" src="js/Tabelroute.js"></script>
    <!-- END SCRIPTS -->          
        
    </body>
</html>






