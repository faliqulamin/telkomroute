<?php
	function getMenu($active) {
		echo "$active";
		echo '<li class="xn-logo">
						
						<a href="#" class="x-navigation-control"></a>
						    <img src="img/telkom/Telkom.png" alt="Telkom"/>
                        
                        
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">Aminion</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                            
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>';
		switch ($active) {
			case 1:
				echo '<li class="active">
                        <a href="transmisi.php"><span class="fa fa-desktop"></span> <span class="xn-text">Transmisi</span></a>
                    </li>                     
                    <li>
                        <a href="ne.php"><span class="fa fa-cogs"></span> <span class="xn-text">NE</span></a>
                    </li>                     
                    <li>
                        <a href="vendor.php"><span class="fa fa-columns"></span> <span class="xn-text">Vendor</span></a>
                    </li>                                          
                    <li>
                        <a href="maps.php"><span class="fa fa-map-marker"></span> <span class="xn-text">Route</span></a>
                    </li> 
					<li>
                        <a href="user.php"><span class="fa fa-users"></span> <span class="xn-text">User</span></a>
                    </li>';
				break;
			case 2:
				echo '<li>
                        <a href="transmisi.php"><span class="fa fa-desktop"></span> <span class="xn-text">Transmisi</span></a>
                    </li>                     
                    <li class="active">
                        <a href="ne.php"><span class="fa fa-cogs"></span> <span class="xn-text">NE</span></a>
                    </li>                     
                    <li>
                        <a href="vendor.php"><span class="fa fa-columns"></span> <span class="xn-text">Vendor</span></a>
                    </li>                                          
                    <li>
                        <a href="maps.php"><span class="fa fa-map-marker"></span> <span class="xn-text">Route</span></a>
                    </li> 
					<li>
                        <a href="user.php"><span class="fa fa-users"></span> <span class="xn-text">User</span></a>
                    </li>';
				break;
			case 3:
				echo '<li>
                        <a href="transmisi.php"><span class="fa fa-desktop"></span> <span class="xn-text">Transmisi</span></a>
                    </li>                     
                    <li>
                        <a href="ne.php"><span class="fa fa-cogs"></span> <span class="xn-text">NE</span></a>
                    </li>                     
                    <li  class="active">
                        <a href="vendor.php"><span class="fa fa-columns"></span> <span class="xn-text">Vendor</span></a>
                    </li>                                          
                    <li>
                        <a href="maps.php"><span class="fa fa-map-marker"></span> <span class="xn-text">Route</span></a>
                    </li> 
					<li>
                        <a href="user.php"><span class="fa fa-users"></span> <span class="xn-text">User</span></a>
                    </li>';
				break;
			case 4:
				echo '<li>
                        <a href="transmisi.php"><span class="fa fa-desktop"></span> <span class="xn-text">Transmisi</span></a>
                    </li>                     
                    <li>
                        <a href="ne.php"><span class="fa fa-cogs"></span> <span class="xn-text">NE</span></a>
                    </li>                     
                    <li>
                        <a href="vendor.php"><span class="fa fa-columns"></span> <span class="xn-text">Vendor</span></a>
                    </li>                                          
                    <li class="active">
                        <a href="maps.php"><span class="fa fa-map-marker"></span> <span class="xn-text">Route</span></a>
                    </li> 
					<li>
                        <a href="user.php"><span class="fa fa-users"></span> <span class="xn-text">User</span></a>
                    </li>';
				break;
			case 5:
				echo '<li>
                        <a href="transmisi.php"><span class="fa fa-desktop"></span> <span class="xn-text">Transmisi</span></a>
                    </li>                     
                    <li>
                        <a href="ne.php"><span class="fa fa-cogs"></span> <span class="xn-text">NE</span></a>
                    </li>                     
                    <li>
                        <a href="vendor.php"><span class="fa fa-columns"></span> <span class="xn-text">Vendor</span></a>
                    </li>                                          
                    <li>
                        <a href="maps.php"><span class="fa fa-map-marker"></span> <span class="xn-text">Route</span></a>
                    </li> 
					<li class="active">
                        <a href="user.php" ><span class="fa fa-users"></span> <span class="xn-text">User</span></a>
                    </li>';
				break;
			default:'<li>
                        <a href="transmisi.php"><span class="fa fa-desktop"></span> <span class="xn-text">Transmisi</span></a>
                    </li>                     
                    <li>
                        <a href="ne.php"><span class="fa fa-cogs"></span> <span class="xn-text">NE</span></a>
                    </li>                     
                    <li>
                        <a href="vendor.php"><span class="fa fa-columns"></span> <span class="xn-text">Vendor</span></a>
                    </li>                                          
                    <li>
                        <a href="maps.php"><span class="fa fa-map-marker"></span> <span class="xn-text">Route</span></a>
                    </li> 
					<li>
                        <a href="user.php"><span class="fa fa-users"></span> <span class="xn-text">User</span></a>
                    </li>';
		}
	}
	/*
	echo '
                    <li class="xn-logo">
						
						<a href="#" class="x-navigation-control"></a>
						    <img src="img/telkom/Telkom.png" alt="Telkom"/>
                        
                        
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">Aminion</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                            
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>                    
                    <li>
                        <a href="transmisi.php"><span class="fa fa-desktop"></span> <span class="xn-text">Transmisi</span></a>
                    </li>                     
                    <li>
                        <a href="ne.php"><span class="fa fa-cogs"></span> <span class="xn-text">NE</span></a>
                    </li>                     
                    <li>
                        <a href="vendor.php"><span class="fa fa-columns"></span> <span class="xn-text">Vendor</span></a>
                    </li>                                          
                    <li class="active">
                        <a href="maps.php"><span class="fa fa-map-marker"></span> <span class="xn-text">Route</span></a>
                    </li> 
					<li>
                        <a href="user.php"><span class="fa fa-users"></span> <span class="xn-text">User</span></a>
                    </li>
	
	';
	/*echo '
                    <li class="xn-logo">
					<a href="#" class="profile-mini">
                            <img src="img/telkom/Telkom.png" alt="Telkom"/>
                        </a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/no-image.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                        </div>                                                                        
                    </li>               
                    <li class="xn-title">Components</li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">UI Kits</span></a>
                        <ul>
                            <li><a href="ui-widgets.html"><span class="fa fa-heart"></span> Widgets</a></li>                            
                            <li><a href="ui-elements.html"><span class="fa fa-cogs"></span> Elements</a></li>
                            <li><a href="ui-buttons.html"><span class="fa fa-square-o"></span> Buttons</a></li>                            
                            <li><a href="ui-panels.html"><span class="fa fa-pencil-square-o"></span> Panels</a></li>
                            <li><a href="ui-icons.html"><span class="fa fa-magic"></span> Icons</a><div class="informer informer-warning">+679</div></li>
                            <li><a href="ui-typography.html"><span class="fa fa-pencil"></span> Typography</a></li>
                            <li><a href="ui-portlet.html"><span class="fa fa-th"></span> Portlet</a></li>
                            <li><a href="ui-sliders.html"><span class="fa fa-arrows-h"></span> Sliders</a></li>
                            <li><a href="ui-alerts-popups.html"><span class="fa fa-warning"></span> Alerts & Popups</a></li>                            
                            <li><a href="ui-lists.html"><span class="fa fa-list-ul"></span> Lists</a></li>
                            <li><a href="ui-tour.html"><span class="fa fa-random"></span> Tour</a></li>
                        </ul>
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Forms</span></a>
                        <ul>
                            <li>
                                <a href="form-layouts-two-column.html"><span class="fa fa-tasks"></span> Form Layouts</a>
                                <div class="informer informer-danger">New</div>
                                <ul>
                                    <li><a href="form-layouts-one-column.html"><span class="fa fa-align-justify"></span> One Column</a></li>
                                    <li><a href="form-layouts-two-column.html"><span class="fa fa-th-large"></span> Two Column</a></li>
                                    <li><a href="form-layouts-tabbed.html"><span class="fa fa-table"></span> Tabbed</a></li>
                                    <li><a href="form-layouts-separated.html"><span class="fa fa-th-list"></span> Separated Rows</a></li>
                                </ul> 
                            </li>
                            <li><a href="form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a></li>
                            <li><a href="form-validation.html"><span class="fa fa-list-alt"></span> Validation</a></li>
                            <li><a href="form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                            <li><a href="form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                            <li><a href="form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
                        <ul>                            
                            <li><a href="table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
                            <li><a href="table-datatables.html"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>
                            <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>                            
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
                        <ul>
                            <li><a href="charts-morris.html"><span class="xn-text">Morris</span></a></li>
                            <li><a href="charts-nvd3.html"><span class="xn-text">NVD3</span></a></li>
                            <li><a href="charts-rickshaw.html"><span class="xn-text">Rickshaw</span></a></li>
                            <li><a href="charts-other.html"><span class="xn-text">Other</span></a></li>
                        </ul>
                    </li>                  
                    <li class="active">
                        <a href="maps.html"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Navigation Levels</span></a>
                        <ul>                            
                            <li class="xn-openable">
                                <a href="#">Second Level</a>
                                <ul>
                                    <li class="xn-openable">
                                        <a href="#">Third Level</a>
                                        <ul>
                                            <li class="xn-openable">
                                                <a href="#">Fourth Level</a>
                                                <ul>
                                                    <li><a href="#">Fifth Level</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>                            
                        </ul>
                    </li> ';*/
?>