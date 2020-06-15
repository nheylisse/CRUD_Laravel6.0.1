<!DOCTYPE html>

<html lang="en" class="smart-style-0">
<head>
  <title>Dashboard | Smart Admin 2.0</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,500,700">
  <link rel="shortcut icon" href="assets/img/favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/img/favicon/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" media="screen, print" href="assets/vendors/vendors.bundle.css">
  <link rel="stylesheet" media="screen, print" href="assets/app/app.bundle.css">
	<link rel="stylesheet" type="text/css" href="assets/pages/homepage.css">

</head>
<body class="   smart-style-0">
  
  <!-- BEGIN .sa-wrapper -->
  <div class="sa-wrapper">
        <!-- BEGIN .sa-shortcuts -->
        
        <div class="sa-shortcuts-section">
        	<ul>
        		<li><a class="bg-blue" href="inbox.html"><span class="fa fa-envelope fa-4x"></span><span class="box-caption">Mail</span><em class="counter">14</em></a></li>
        		<li><a class="bg-orange-dark" href="calendar.html"><span class="fa fa-calendar fa-4x"></span><span class="box-caption">Calendar</span><em class="counter"></em></a></li>
        		<li><a class="bg-purple" href="gmap-xml.html"><span class="fa fa-map-marker fa-4x"></span><span class="box-caption">Maps</span><em class="counter"></em></a></li>
        		<li><a class="bg-blue-dark" href="invoice.html"><span class="fa fa-book fa-4x"></span><span class="box-caption">Invoice</span><em class="counter"></em></a></li>
        		<li><a class="bg-green-light" href="gallery.html"><span class="fa fa-picture-o fa-4x"></span><span class="box-caption">Gallery</span><em class="counter">99</em></a></li>
        		<li><a class="bg-pink-dark selected" href="profile.html"><span class="fa fa-user fa-4x"></span><span class="box-caption">My Profile</span><em class="counter"></em></a></li>
        	</ul>
        </div>
        <!-- END .sa-shortcuts -->
        
        <header class="sa-page-header">
          <div class="sa-header-container h-100">
            <div class="d-table d-table-fixed h-100 w-100">
              <div class="sa-logo-space d-table-cell h-100">
                <div class="flex-row d-flex align-items-center h-100">
                  <a class="sa-logo-link" href="" title="Smart Admin 2.0"><img alt="Smart Admin 2.0" src="assets/img/common/sa-logo.png" class="sa-logo"></a>
                  <div class="dropdown ml-auto">
                    <button class="btn btn-default sa-btn-icon sa-activity-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user"></span><span class="badge bg-red">21</span></button>
                    <div class="dropdown-menu ml-auto ajax-dropdown" aria-labelledby="dropdownMenuButton">
                      <form class="btn-group btn-group-justified" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-default" onclick="loadNotifications(this)" data-url="ajax/mail.html">Msgs (21)</button>
                        <button type="button" class="btn btn-default" onclick="loadNotifications(this)" data-url="ajax/notifications.html">Notify (3)</button>
                        <button type="button" class="btn btn-default" onclick="loadNotifications(this)" data-url="ajax/tasks.html">Tasks (4)</button>
                      </form>
                      <div class="sa-ajax-notification-container">
                        <div class="alert sa-ajax-notification-alert">
                          <h4>Click a button to show messages here</h4>
                          This blank page message helps protect your privacy, or you can show the first message here automatically.
                        </div>
                        <span class="fa fa-lock fa-4x fa-border"></span>
                      </div>
        
                      <form role="group" class="flex-row d-flex align-items-center sa-ajax-notification-footer">
                        <span>Last updated on: 12/12/2013 9:43AM</span>
                        <button class="btn btn-xs btn-default ml-auto" type="button" onclick="toggleReloadButton(this, event)"><span class="fa fa-refresh"></span></button>
                      </form>
        
                    </div>
                  </div>
                </div>  
              </div>
              <div class="d-table-cell h-100 w-100 align-middle">
                <div class="sa-header-menu">
                  <div class="d-flex align-items-center w-100">
                    <div class="sa-header-left-area">
                      <span class="sa-project-label">Projects:</span>
                      <div class="dropdown sa-project-dropdown">
                        <a href=":;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Recent projects <span class="fa fa-angle-down"></span></a>
                        <div class="dropdown-menu ml-auto" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Online e-merchant management system - attaching integration with the iOS</a>
                          <a class="dropdown-item" href="#">Notes on pipeline upgradee</a>
                          <a class="dropdown-item" href="#">Assesment Report for merchant account</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#"><span class="fa fa-power-off"></span> Clear</a>
                        </div>
                      </div>
                    </div>
                    <div class="ml-auto sa-header-right-area">
                      <div class="form-inline">
                        <span class="dropdown sa-country-dropdown">
                          <a href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="flag flag-us"></em> <span>English (US) <span class="fa fa-angle-down"></span></span></a>
                          <span class="dropdown-menu dropdown-menu-right ml-auto" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item active" href="javascript:void(0);"><span class="flag flag-us"></span> English (US)</a>
                            <a class="dropdown-item" href="javascript:void(0);"><span class="flag flag-fr"></span> Français</a>
                            <a class="dropdown-item" href="javascript:void(0);"><span class="flag flag-es"></span> Español</a>
                            <a class="dropdown-item" href="javascript:void(0);"><span class="flag flag-de"></span> Deutsch</a>
                            <a class="dropdown-item" href="javascript:void(0);"><span class="flag flag-jp"></span> 日本語</a>
                            <a class="dropdown-item" href="javascript:void(0);"><span class="flag flag-cn"></span> 中文</a> 
                            <a class="dropdown-item" href="javascript:void(0);"><span class="flag flag-it"></span> Italiano</a> 
                            <a class="dropdown-item" href="javascript:void(0);"><span class="flag flag-pt"></span> Portugal</a>
                            <a class="dropdown-item" href="javascript:void(0);"><span class="flag flag-ru"></span> Русский язык</a>
                            <a class="dropdown-item" href="javascript:void(0);"><span class="flag flag-kr"></span> 한국어</a>
                          </span>
                        </span>
                        <button class="btn btn-light sa-btn-icon sa-btn-micro d-none d-lg-block" type="button"><span class="fa fa-microphone"></span></button>
                        <button class="btn btn-light sa-btn-icon sa-toggle-full-screen d-none d-lg-block" type="button" onclick="toggleFullScreen()"><span class="fa fa-arrows-alt"></span></button>
                        <form class="sa-header-search-form">
                          <input type="text" class="form-control" placeholder="Find reports and more">
                          <button type="submit" class="sa-form-btn"><span class="fa fa-search"></span></button>
                        </form>
                        <button class="btn btn-default sa-logout-header-toggle sa-btn-icon" type="button"><span class="fa fa-sign-out"></span></button>
                        <span class="dropdown sa-user-dropdown">
                          <a href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="sa-user-dropdown-toggle">
                            <img src="assets/img/avatars/sunny.png" alt="John Doe">
                          </a>
                          <span class="dropdown-menu dropdown-menu-right ml-auto" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-cog"></i> Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item padding-10 padding-top-5 padding-bottom-5" href="javascript:void(0);" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                          </span>
                        </span>
                        
                        <button class="btn btn-default sa-btn-icon sa-sidebar-hidden-toggle" onclick="SAtoggleClass(this, 'body', 'sa-hidden-menu')" type="button"><span class="fa fa-reorder"></span></button>
        
                        
                      </div>
                    </div>
                  </div>          
                </div>
              </div>
            </div>
            
          </div>
        </header>
        <!-- END .sa-page-header -->
    <div class="sa-page-body">
    
      
      <!-- BEGIN .sa-aside-left -->
      
      <div class="sa-aside-left">
      
          <a href="javascript:void(0)"  onclick="SAtoggleClass(this, 'body', 'sa-shortcuts-expanded')" class="sa-sidebar-shortcut-toggle">
              <img src="assets/img/avatars/sunny.png" alt="" class="online">
              <span>John.Doe <span class="fa fa-angle-down"></span></span>
          </a>
          <div class="sa-left-menu-outer">
            <ul class="metismenu sa-left-menu" id="menu1">
                  <li class=" active"><!-- first-level -->
                    <a class="has-arrow"   href="index.html" title="Dashboard"><span class="fa fa-lg fa-fw fa-home"></span> <span class="menu-item-parent">Dashboard</span> 
                    	<b class="collapse-sign">
                    		<em class="fa fa-plus-square-o"></em>
                    		<em class="fa fa-minus-square-o"></em>
                    	</b>
                    </a>
                    <ul aria-expanded="true" class="sa-sub-nav collapse">
                      <!-- second-level -->
                      <li class="active">
                        <a   href="index.html" title="Analytics Dashboard"> Analytics Dashboard </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="dashboard-marketing.html" title="Marketing Dashboard"> Marketing Dashboard </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="dashboard-social.html" title="Social Wall"> Social Wall </a>
      
                      </li>      
                    </ul>
                    
                </li>            <li class="top-menu-invisible "><!-- first-level -->
                    <a class="has-arrow"   href="layouts.html" title="SmartAdmin Intel"><span class="fa fa-lg fa-fw fa-cube text-blue"></span> <span class="menu-item-parent">SmartAdmin Intel</span> 
                    	<b class="collapse-sign">
                    		<em class="fa fa-plus-square-o"></em>
                    		<em class="fa fa-minus-square-o"></em>
                    	</b>
                    </a>
                    <ul aria-expanded="true" class="sa-sub-nav collapse">
                      <!-- second-level -->
                      <li class="">
                        <a   href="layouts.html" title="App Layouts"><span class="fa fa-lg fa-fw fa-gear"></span> App Layouts </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="skins.html" title="Prebuilt Skins"><span class="fa fa-lg fa-fw fa-picture-o"></span> Prebuilt Skins </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="applayout.html" title="App Settings"><span class="fa fa-lg fa-fw fa-cube"></span> App Settings </a>
      
                      </li>      
                    </ul>
                    
                </li>            <li class=" "><!-- first-level -->
                    <a   href="inbox.html" title="Outlook"><span class="fa fa-lg fa-fw fa-inbox"></span> <span class="menu-item-parent">Outlook</span> <span class="badge pull-right inbox-badge">14</span></a>
      
                    
                </li>            <li class=" "><!-- first-level -->
                    <a class="has-arrow"   href="flot.html" title="Graphs"><span class="fa fa-lg fa-fw fa-bar-chart-o"></span> <span class="menu-item-parent">Graphs</span> 
                    	<b class="collapse-sign">
                    		<em class="fa fa-plus-square-o"></em>
                    		<em class="fa fa-minus-square-o"></em>
                    	</b>
                    </a>
                    <ul aria-expanded="true" class="sa-sub-nav collapse">
                      <!-- second-level -->
                      <li class="">
                        <a   href="flot.html" title="Flot Chart"> Flot Chart </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="morris.html" title="Morris Charts"> Morris Charts </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="sparkline-charts.html" title="Sparklines"> Sparklines </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="easypie-charts.html" title="EasyPieCharts"> EasyPieCharts </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="dygraphs.html" title="Dygraphs"> Dygraphs </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="chartjs.html" title="Chart.js"> Chart.js </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="hchartable.html" title="HighChartTable"> HighChartTable <span class="badge pull-right inbox-badge bg-yellow">new</span></a>
      
                      </li>      
                    </ul>
                    
                </li>            <li class=" "><!-- first-level -->
                    <a class="has-arrow"   href="flot.html" title="Tables"><span class="fa fa-lg fa-fw fa-table"></span> <span class="menu-item-parent">Tables</span> 
                    	<b class="collapse-sign">
                    		<em class="fa fa-plus-square-o"></em>
                    		<em class="fa fa-minus-square-o"></em>
                    	</b>
                    </a>
                    <ul aria-expanded="true" class="sa-sub-nav collapse">
                      <!-- second-level -->
                      <li class="">
                        <a   href="table.html" title="Normal Tables"> Normal Tables </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="datatables.html" title="Data Tables"> Data Tables <span class="badge inbox-badge bg-green-light hidden-mobile">responsive</span></a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="jqgrid.html" title="Jquery Grid"> Jquery Grid </a>
      
                      </li>      
                    </ul>
                    
                </li>            <li class=" "><!-- first-level -->
                    <a class="has-arrow"   href="form-elements.html" title="Forms"><span class="fa fa-lg fa-fw fa-pencil-square-o"></span> <span class="menu-item-parent">Forms</span> 
                    	<b class="collapse-sign">
                    		<em class="fa fa-plus-square-o"></em>
                    		<em class="fa fa-minus-square-o"></em>
                    	</b>
                    </a>
                    <ul aria-expanded="true" class="sa-sub-nav collapse">
                      <!-- second-level -->
                      <li class="">
                        <a   href="bootstrap-forms.html" title="Bootstrap Form Elements"> Bootstrap Form Elements </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="bootstrap-validator.html" title="Bootstrap Form Validation"> Bootstrap Form Validation </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="plugins.html" title="Form Plugins"> Form Plugins </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="wizard.html" title="Wizards"> Wizards </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="other-editors.html" title="Bootstrap Editors"> Bootstrap Editors </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="dropzone.html" title="Dropzone"> Dropzone </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="image-editor.html" title="Image Cropping"> Image Cropping </a>
      
                      </li>      
                    </ul>
                    
                </li>            <li class=" "><!-- first-level -->
                    <a class="has-arrow"   href="javascript:void(0)" title="UI Elements"><span class="fa fa-lg fa-fw fa-desktop"></span> <span class="menu-item-parent">UI Elements</span> 
                    	<b class="collapse-sign">
                    		<em class="fa fa-plus-square-o"></em>
                    		<em class="fa fa-minus-square-o"></em>
                    	</b>
                    </a>
                    <ul aria-expanded="true" class="sa-sub-nav collapse">
                      <!-- second-level -->
                      <li class="">
                        <a   href="general-elements.html" title="General Elements"> General Elements </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="buttons.html" title="Buttons"> Buttons </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a class="has-arrow"   href="fa.html" title="Icons"> Icons 
                        	<b class="collapse-sign">
                        		<em class="fa fa-plus-square-o"></em>
                        		<em class="fa fa-minus-square-o"></em>
                        	</b>
                        </a>
                        <ul aria-expanded="true" class="sa-sub-nav-second-level">
                          <!-- third-level -->
                          <li class=" ">
                            <a   href="fa.html" title="Font Awesome"><span class="fa fa-plane"></span> Font Awesome </a>
      
                          </li><!-- third-level -->
                          <li class=" ">
                            <a   href="flags.html" title="Flags"><span class="fa fa-flag"></span> Flags </a>
      
                          </li>
                        </ul>
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="grid.html" title="Grid"> Grid </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="treeview.html" title="Tree View"> Tree View </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="nestable-list.html" title="Nestable Lists"> Nestable Lists </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="jqui.html" title="JQuery UI"> JQuery UI </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="typography.html" title="Typography"> Typography </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a class="has-arrow"   href="javascript:void(0)" title="Six Level Menu"> Six Level Menu 
                        	<b class="collapse-sign">
                        		<em class="fa fa-plus-square-o"></em>
                        		<em class="fa fa-minus-square-o"></em>
                        	</b>
                        </a>
                        <ul aria-expanded="true" class="sa-nav-third-level">
                          <!-- third-level -->
                          <li class=" active">
                            <a class="has-arrow"   href="javascript:void(0)" title="Item #2"><span class="fa fa-fw fa-folder-open"></span> Item #2 
                            	<b class="collapse-sign">
                            		<em class="fa fa-plus-square-o"></em>
                            		<em class="fa fa-minus-square-o"></em>
                            	</b>
                            </a>
                            <ul aria-expanded="true" class="sa-nav-forth-level">
                              <!-- forth-level -->
                              <li class="">
                                <a class="has-arrow"   href="javascript:void(0)" title="Sub #2.1"><span class="fa fa-fw fa-folder-open"></span> Sub #2.1 
                                	<b class="collapse-sign">
                                		<em class="fa fa-plus-square-o"></em>
                                		<em class="fa fa-minus-square-o"></em>
                                	</b>
                                </a>
                                <ul aria-expanded="true" class="sa-nav-fifth-level">
                                  <!-- fifth-level -->
                                  <li class="">
                                    <a   href="javascript:void(0)" title="Item #2.1.1"><span class="fa fa-fw fa-file-text"></span> Item #2.1.1 </a>
      
                                  </li><!-- fifth-level -->
                                  <li class="">
                                    <a class="has-arrow"   href="javascript:void(0)" title="Expand"><span class="fa fa-fw fa-file-text"></span> Expand 
                                    	<b class="collapse-sign">
                                    		<em class="fa fa-plus-square-o"></em>
                                    		<em class="fa fa-minus-square-o"></em>
                                    	</b>
                                    </a>
                                    <ul aria-expanded="true" class="sa-nav-sixth-level">
                                      <!-- sixth-level -->
                                      <li class="">
                                        <a   href="javascript:void(0)" title="File"><span class="fa fa-fw fa-file-text"></span> File </a>
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li><!-- third-level -->
                          <li class=" active">
                            <a class="has-arrow"   href="glyph.html" title="Item #3"><span class="fa fa-fw fa-folder-open"></span> Item #3 
                            	<b class="collapse-sign">
                            		<em class="fa fa-plus-square-o"></em>
                            		<em class="fa fa-minus-square-o"></em>
                            	</b>
                            </a>
                            <ul aria-expanded="true" class="sa-nav-forth-level">
                              <!-- forth-level -->
                              <li class="">
                                <a class="has-arrow"   href="javascript:void(0)" title="3ed Level"><span class="fa fa-fw fa-folder-open"></span> 3ed Level 
                                	<b class="collapse-sign">
                                		<em class="fa fa-plus-square-o"></em>
                                		<em class="fa fa-minus-square-o"></em>
                                	</b>
                                </a>
                                <ul aria-expanded="true" class="sa-nav-fifth-level">
                                  <!-- fifth-level -->
                                  <li class="">
                                    <a   href="javascript:void(0)" title="File"><span class="fa fa-fw fa-file-text"></span> File </a>
      
                                  </li><!-- fifth-level -->
                                  <li class="">
                                    <a   href="javascript:void(0)" title="File"><span class="fa fa-fw fa-file-text"></span> File </a>
      
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li><!-- third-level -->
                          <li class=" active">
                            <a class="inactive"   href="javascript:void(0)" title="Item #4 (disabled)"><span class="fa fa-fw fa-folder-open"></span> Item #4 (disabled) </a>
      
                          </li>
                        </ul>
                      </li>      
                    </ul>
                    
                </li>            <li class=" "><!-- first-level -->
                    <a   href="widgets.html" title="Widgets"><span class="fa fa-lg fa-fw fa-list-alt"></span> <span class="menu-item-parent">Widgets</span> </a>
      
                    
                </li>            <li class=" "><!-- first-level -->
                    <a class="has-arrow"   href="javascript:void(0)" title="Cool Features!"><span class="fa fa-lg fa-fw fa-cloud"><em class="round-top">3</em></span> <span class="menu-item-parent">Cool Features!</span> 
                    	<b class="collapse-sign">
                    		<em class="fa fa-plus-square-o"></em>
                    		<em class="fa fa-minus-square-o"></em>
                    	</b>
                    </a>
                    <ul aria-expanded="true" class="sa-sub-nav collapse">
                      <!-- second-level -->
                      <li class="">
                        <a   href="calendar.html" title="Calendar"><span class="fa fa-lg fa-fw fa-calendar"></span> Calendar </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="gmap-xml.html" title="GMap Skins"><span class="fa fa-lg fa-fw fa-map-marker"></span> GMap Skins <span class="badge bg-green-light pull-right inbox-badge">9</span></a>
      
                      </li>      
                    </ul>
                    
                </li>            <li class=" "><!-- first-level -->
                    <a class="has-arrow"   href="javascript:void(0)" title="App Views"><span class="fa fa-lg fa-fw fa-puzzle-piece"></span> <span class="menu-item-parent">App Views</span> 
                    	<b class="collapse-sign">
                    		<em class="fa fa-plus-square-o"></em>
                    		<em class="fa fa-minus-square-o"></em>
                    	</b>
                    </a>
                    <ul aria-expanded="true" class="sa-sub-nav collapse">
                      <!-- second-level -->
                      <li class="">
                        <a   href="projects.html" title="Projects"><span class="fa fa-file-text-o"></span> Projects </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="blog.html" title="Blog"><span class="fa fa-paragraph"></span> Blog </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="gallery.html" title="Gallery"><span class="fa fa-picture-o"></span> Gallery </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a class="has-arrow"   href="javascript:void(0)" title="Forum Layout"><span class="fa fa-comments"></span> Forum Layout 
                        	<b class="collapse-sign">
                        		<em class="fa fa-plus-square-o"></em>
                        		<em class="fa fa-minus-square-o"></em>
                        	</b>
                        </a>
                        <ul aria-expanded="true" class="sa-nav-third-level">
                          <!-- third-level -->
                          <li class=" ">
                            <a   href="forum.html" title="General View"> General View </a>
      
                          </li><!-- third-level -->
                          <li class=" ">
                            <a   href="forum-topic.html" title="Topic View"> Topic View </a>
      
                          </li><!-- third-level -->
                          <li class=" ">
                            <a   href="forum-post.html" title="Post View"> Post View </a>
      
                          </li>
                        </ul>
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="profile.html" title="Profile"><span class="fa fa-group"></span> Profile </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="timeline.html" title="Timeline"><span class="fa fa-clock-o"></span> Timeline </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="search.html" title="Search Page"><span class="fa fa-search"></span> Search Page </a>
      
                      </li>      
                    </ul>
                    
                </li>            <li class=" "><!-- first-level -->
                    <a class="has-arrow"   href="javascript:void(0)" title="E-Commerce"><span class="fa fa-lg fa-fw fa-shopping-cart"></span> <span class="menu-item-parent">E-Commerce</span> 
                    	<b class="collapse-sign">
                    		<em class="fa fa-plus-square-o"></em>
                    		<em class="fa fa-minus-square-o"></em>
                    	</b>
                    </a>
                    <ul aria-expanded="true" class="sa-sub-nav collapse">
                      <!-- second-level -->
                      <li class="">
                        <a   href="orders.html" title="Orders"> Orders </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="products-view.html" title="Products View"> Products View </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="products-detail.html" title="Products Detail"> Products Detail </a>
      
                      </li>      
                    </ul>
                    
                </li>            <li class=" "><!-- first-level -->
                    <a class="has-arrow"   href="javascript:void(0)" title="Miscellaneous"><span class="fa fa-lg fa-fw fa-windows"></span> <span class="menu-item-parent">Miscellaneous</span> 
                    	<b class="collapse-sign">
                    		<em class="fa fa-plus-square-o"></em>
                    		<em class="fa fa-minus-square-o"></em>
                    	</b>
                    </a>
                    <ul aria-expanded="true" class="sa-sub-nav collapse">
                      <!-- second-level -->
                      <li class="">
                        <a  target="_blank" href="../Landing_Page/" title="Landing Page"> Landing Page <span class="fa fa-external-link"></span></a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="pricing-table.html" title="Pricing Tables"> Pricing Tables </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="invoice.html" title="Invoice"> Invoice </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="login.html" title="Login"> Login </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="register.html" title="Register"> Register </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="forgotpassword.html" title="Forgot Password"> Forgot Password </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="lock.html" title="Locked Screen"> Locked Screen </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="error404.html" title="Error 404"> Error 404 </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="error500.html" title="Error 500"> Error 500 </a>
      
                      </li><!-- second-level -->
                      <li class="">
                        <a   href="blank.html" title="Blank Page"> Blank Page </a>
      
                      </li>      
                    </ul>
                    
                </li>            <li class="chat-users top-menu-invisible "><!-- first-level -->
                    <a   href="javascript:void(0)" title="Smart Chat API"><span class="fa fa-lg fa-fw fa-comment-o"><em class="bg-pink flash animated round-top">!</em></span> <span class="menu-item-parent">Smart Chat API <sup>beta</sup></span> 
                    	<b class="collapse-sign">
                    		<em class="fa fa-plus-square-o"></em>
                    		<em class="fa fa-minus-square-o"></em>
                    	</b>
                    </a>
      
                    <ul class="chat-users-dropdown">
                      <li>
                        <div class="display-users">
                            <input class="form-control chat-user-filter" placeholder="Filter" type="text">
                              <a href="javascript:void(0)" class="usr " 
                              	data-chat-id="cha1" 
                              	data-chat-fname="Sadi" 
                              	data-chat-lname="Orlaf" 
                              	data-chat-status="busy" 
                              	data-chat-alertmsg="Sadi Orlaf is in a meeting. Please do not disturb!" 
                              	data-chat-alertshow="true" 
                              	data-rel="popover-hover" 
                              	data-placement="right" 
                              	data-html="true" 
                              	data-trigger="hover"
                              	data-content="
                              		<div class='usr-card busy'>
                              			<img src='assets/img/avatars/5.png' alt='Sadi Orlaf'>
                              			<div class='usr-card-content'>
                              				<h3>Sadi Orlaf</h3>
                              				<p>Marketing Executive </p>
                              			</div>
                              		</div>
                              	"> 
                              	<i></i>Sadi Orlaf 
                              </a>
                              <a href="javascript:void(0)" class="usr " 
                              	data-chat-id="cha2" 
                              	data-chat-fname="Jessica" 
                              	data-chat-lname="Dolof" 
                              	data-chat-status="online" 
                              	data-chat-alertmsg="" 
                              	data-chat-alertshow="false" 
                              	data-rel="popover-hover" 
                              	data-placement="right" 
                              	data-html="true" 
                              	data-trigger="hover"
                              	data-content="
                              		<div class='usr-card online'>
                              			<img src='assets/img/avatars/1.png' alt='Jessica Dolof'>
                              			<div class='usr-card-content'>
                              				<h3>Jessica Dolof</h3>
                              				<p>Sales Administrator </p>
                              			</div>
                              		</div>
                              	"> 
                              	<i></i>Jessica Dolof 
                              </a>
                              <a href="javascript:void(0)" class="usr " 
                              	data-chat-id="cha3" 
                              	data-chat-fname="Zekarburg" 
                              	data-chat-lname="Almandalie" 
                              	data-chat-status="online" 
                              	data-chat-alertmsg="" 
                              	data-chat-alertshow="false" 
                              	data-rel="popover-hover" 
                              	data-placement="right" 
                              	data-html="true" 
                              	data-trigger="hover"
                              	data-content="
                              		<div class='usr-card online'>
                              			<img src='assets/img/avatars/3.png' alt='Zekarburg Almandalie'>
                              			<div class='usr-card-content'>
                              				<h3>Zekarburg Almandalie</h3>
                              				<p>Sales Admin </p>
                              			</div>
                              		</div>
                              	"> 
                              	<i></i>Zekarburg Almandalie 
                              </a>
                              <a href="javascript:void(0)" class="usr " 
                              	data-chat-id="cha4" 
                              	data-chat-fname="Barley" 
                              	data-chat-lname="Krazurkth" 
                              	data-chat-status="away" 
                              	data-chat-alertmsg="" 
                              	data-chat-alertshow="false" 
                              	data-rel="popover-hover" 
                              	data-placement="right" 
                              	data-html="true" 
                              	data-trigger="hover"
                              	data-content="
                              		<div class='usr-card away'>
                              			<img src='assets/img/avatars/4.png' alt='Barley Krazurkth'>
                              			<div class='usr-card-content'>
                              				<h3>Barley Krazurkth</h3>
                              				<p>Sales Director </p>
                              			</div>
                              		</div>
                              	"> 
                              	<i></i>Barley Krazurkth 
                              </a>
                              <a href="javascript:void(0)" class="usr offline" 
                              	data-chat-id="cha5" 
                              	data-chat-fname="Farhana" 
                              	data-chat-lname="Amrin" 
                              	data-chat-status="incognito" 
                              	data-chat-alertmsg="" 
                              	data-chat-alertshow="false" 
                              	data-rel="popover-hover" 
                              	data-placement="right" 
                              	data-html="true" 
                              	data-trigger="hover"
                              	data-content="
                              		<div class='usr-card incognito'>
                              			<img src='assets/img/avatars/female.png' alt='Farhana Amrin'>
                              			<div class='usr-card-content'>
                              				<h3>Farhana Amrin</h3>
                              				<p>Support Admin <span class='card-small-text'><i class='fa fa-music'></i> Playing Beethoven Classics</span></p>
                              			</div>
                              		</div>
                              	"> 
                              	<i></i>Farhana Amrin (offline)
                              </a>
                              <a href="javascript:void(0)" class="usr offline" 
                              	data-chat-id="cha6" 
                              	data-chat-fname="Lezley" 
                              	data-chat-lname="Jacob" 
                              	data-chat-status="incognito" 
                              	data-chat-alertmsg="" 
                              	data-chat-alertshow="false" 
                              	data-rel="popover-hover" 
                              	data-placement="right" 
                              	data-html="true" 
                              	data-trigger="hover"
                              	data-content="
                              		<div class='usr-card incognito'>
                              			<img src='assets/img/avatars/male.png' alt='Lezley Jacob'>
                              			<div class='usr-card-content'>
                              				<h3>Lezley Jacob</h3>
                              				<p>Sales Director </p>
                              			</div>
                              		</div>
                              	"> 
                              	<i></i>Lezley Jacob (offline)
                              </a>
                            <a href="chat.html" class="btn btn-xs sa-btn-dark btn-block chat-learnmore-btn">About the API</a>                    
                        </div>
                      </li>
                    </ul>
                </li>  
            </ul>
          </div>
          <a href="javascript:void(0)" class="minifyme" onclick="SAtoggleClass(this, 'body', 'minified')"> 
              <i class="fa fa-arrow-circle-left hit"></i> 
          </a>
      </div>

      

      <!-- BEGIN .sa-content-wrapper -->
      <div class="sa-content-wrapper">
        
          
          <!-- BEGIN .sa-page-breadcrumb -->
          <ol class="align-items-center sa-page-ribbon breadcrumb" aria-label="breadcrumb" role="navigation">
          	<li><span id="refresh" class="btn sa-ribbon-btn sa-theme-btn" data-action="resetWidgets"><i class="fa fa-refresh"></i></span></li>
          		<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          				<li class="breadcrumb-item"><a href="index.html">Analytics Dashboard</a></li>
          	
          </ol>
          
          <div class="sa-theme-settings">
          	<a href="javascript:void(0)" class="sa-theme-settings-toggle" onclick="SAtoggleClass(this, '.sa-theme-settings', 'active')"><span class="fa fa-cogs fa-spin"></span></a>
          	<h4>Layout Options</h4>
          	<ul class="list-unstyled">
          		<li>
          			<label class="vcheck">
          				<input type="checkbox" id="SAFixedHeader" data-add-class="sa-fixed-header" data-remove-class="sa-fixed-header sa-fixed-navigation sa-fixed-ribbon " onchange="SASetClass(this)"> 
          				<span>Fixed Header</span>
          			</label>
          		</li>
          		<li>
          			<label class="vcheck">
          				<input type="checkbox" id="SAFixedNavigation" data-add-class="sa-fixed-navigation sa-fixed-header" data-remove-class="sa-fixed-navigation sa-fixed-ribbon" onchange="SASetClass(this)">
          				<span>Fixed Navigation</span>
          			</label>
          		</li>
          		<li><label class="vcheck"><input type="checkbox" id="SAFixedRibbon" data-add-class="sa-fixed-navigation sa-fixed-header sa-fixed-ribbon" data-remove-class="sa-fixed-ribbon" onchange="SASetClass(this)"> <span>Fixed Ribbon</span></label></li>
          		<li><label class="vcheck"><input type="checkbox" id="SAFixedFooter" data-add-class="sa-fixed-page-footer" data-remove-class="sa-fixed-page-footer" onchange="SASetClass(this)"> <span>Fixed Footer</span></label></li>
          		<li><label class="vcheck"><input type="checkbox" id="SAContainerInside" data-add-class="sa-inside-container" data-remove-class="sa-inside-container sa-fixed-ribbon" data-remove-class="sa-fixed-navigation" onchange="SASetClass(this)"> <span>Inside <strong>.container</strong></span></label></li>
          		<li><label class="vcheck"><input type="checkbox" id="SAMenuOnTop" data-add-class="sa-menu-on-top" data-remove-class="sa-menu-on-top" onchange="SASetClass(this)"> <span>Menu on <strong>top</strong></span></label></li>
          	</ul>
          	<h4>Clear Localstorage</h4>
          	<a href="javascript:void(0)" class="btn sa-btn-primary btn-block" data-action="resetWidgets"><span class="fa fa-refresh"></span> Factory Reset</a>
          
          	<h6 class="margin-top-10 text-medium margin-bottom-5">SmartAdmin Skins</h6>
          	<section id="smart-styles">
          		<a href="javascript:void(0);" id="smart-style-0" data-skinlogo="assets/img/common/sa-logo.png" class="btn btn-block btn-xs text-white margin-right-5" style="background-color:#4E463F;">
          			<i class="fa fa-check fa-fw" id="skin-checked"></i>Smart Default
          		</a>
          		<a href="javascript:void(0);" id="smart-style-1" data-skinlogo="assets/img/common/sa-logo-white.png" class="btn btn-block btn-xs text-white" style="background:#3A4558;">Dark Elegance</a>
          		<a href="javascript:void(0);" id="smart-style-2" data-skinlogo="assets/img/common/sa-logo-blue.png" class="btn btn-xs btn-block text-darken margin-top-5" style="background:#fff;">Ultra Light</a>
          		<a href="javascript:void(0);" id="smart-style-3" data-skinlogo="assets/img/common/sa-logo-pale.png" class="btn btn-xs btn-block text-white margin-top-5" style="background:#f78c40">Google Skin</a>
          		<a href="javascript:void(0);" id="smart-style-4" data-skinlogo="assets/img/common/sa-logo-pale.png" class="btn btn-xs btn-block text-white margin-top-5" style="background: #bbc0cf; border: 1px solid #59779E; color: #17273D !important;">PixelSmash</a> <a href="javascript:void(0);" id="smart-style-5" data-skinlogo="assets/img/common/sa-logo-pale.png" class="btn btn-xs btn-block text-white margin-top-5" style="background: rgba(153, 179, 204, 0.2); border: 1px solid rgba(121, 161, 221, 0.8); color: #17273D !important;">Glass </a><a href="javascript:void(0);" id="smart-style-6" data-skinlogo="assets/img/common/sa-logo-pale.png" class="btn btn-xs btn-block text-white margin-top-6" style="background: #2196F3; border: 1px solid rgba(0, 0, 0, 0.3); color: #FFF !important;">MaterialDesign <sup>beta</sup> </a>
          	</section>
          </div>
          
          <!-- END .sa-page-breadcrumb -->
        
        <div class="sa-content">
		<div class="d-flex w-100 home-header">
			<div>
				<h1 class="page-header"><i class="fa-fw fa fa-home"></i>  Dashboard <span>> My Dashboard</span></h1>				
			</div>
			<div class="ml-auto">
				<ul class="sa-sparks">
					<li class="sparks-info">
						<h5> <small>My Income</small> <span class="text-blue">$47,171</span></h5>
						<div class="sparkline text-blue d-none d-xl-block">
							1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
						</div>
					</li>
					<li class="sparks-info">
						<h5> <small>Site Traffic</small> <span class="text-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
						<div class="sparkline text-purple d-none d-xl-block">
							110,150,300,130,400,240,220,310,220,300, 270, 210
						</div>
					</li>
					<li class="sparks-info">
						<h5> <small>Site Orders</small> <span class="text-green-dark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
						<div class="sparkline text-green-dark d-none d-xl-block">
							110,150,300,130,400,240,220,310,220,300, 270, 210
						</div>
					</li>
				</ul>				
			</div>
		</div>
		<div class="d-flex w-100">
			<section id="widget-grid" class="w-100">
				<div class="row">
					<article class="col-12 sortable-grid ui-sortable">
					
						<!-- Widget ID (each widget will need unique ID)-->
						<div class="jarviswidget jarviswidget-style-2 no-padding" id="wid-id-1" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
							<!-- widget options:
							usage: <div class="jarviswidget" id="wid-id-2" data-widget-editbutton="false">

							data-widget-colorbutton="false"
							data-widget-editbutton="false"
							data-widget-togglebutton="false"
							data-widget-deletebutton="false"
							data-widget-fullscreenbutton="false"
							data-widget-custombutton="false"
							data-widget-collapsed="true"
							data-widget-sortable="false"

							-->
							<header>
								<div class="widget-header">	
									<span class="widget-icon"> <i class="fa fa-bar-chart"></i> </span>
									<h2>Live Feeds </h2>
								</div>
								<ul class="nav nav-tabs ml-auto in" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" role="tab" data-toggle="tab" href="#s1" aria-controls="s1"><i class="fa fa-clock-o"></i> <span class="d-none d-md-inline-block">Live Stats</span></a>
									</li>

									<li class="nav-item">
										<a class="nav-link" role="tab" data-toggle="tab" href="#s2" aria-controls="s2"><i class="fa fa-facebook"></i> <span class="d-none d-md-inline-block" onclick="applySoicalPlot()">Social Network</span></a>
									</li>

									<li class="nav-item">
										<a class="nav-link" role="tab" data-toggle="tab" href="#s3" aria-controls="s3"><i class="fa fa-dollar"></i> <span class="d-none d-md-inline-block">Revenue</span></a>
									</li>
								</ul>

							</header>
									
							<!-- widget div-->
							<div>
								
								<!-- widget edit box -->
								<div class="jarviswidget-editbox">
									test
								</div>
								<!-- end widget edit box -->
								
								<!-- widget content -->
								<div class="widget-body p-0">
									
									<div id="myTabContent" class="tab-content">
										<div class="tab-pane in active show" id="s1" role="tabpanel">
											<div class="home-first-tab">
												<div class="row m-0">
													<div class="col-12 col-lg-8 p-0">
														<span class="demo-liveupdate-1"> <span class="onoffswitch-title">Live switch</span> <span class="onoffswitch">
																<input type="checkbox" name="start_interval" class="onoffswitch-checkbox" id="start_interval">
																<label class="onoffswitch-label" for="start_interval"> 
																	<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
																	<span class="onoffswitch-switch"></span> </label> </span> </span>
														<div id="updating-chart" class="chart-large text-blue"></div>

													</div>
													<div class="show-stats col-lg-4 col p-0">

														<div class="row">
															<div class="col-6 col-lg-12"> <span class="text"> My Tasks <span class="pull-right">130/200</span> </span>
																<div class="progress progress-xs">
																	<div class="progress-bar bg-blue-dark" style="width: 65%;"></div>
																</div> </div>
															<div class="col-6 col-lg-12"> <span class="text"> Transfered <span class="pull-right">440 GB</span> </span>
																<div class="progress progress-xs">
																	<div class="progress-bar bg-blue" style="width: 34%;"></div>
																</div> </div>
															<div class="col-6 col-lg-12"> <span class="text"> Bugs Squashed<span class="pull-right">77%</span> </span>
																<div class="progress progress-xs">
																	<div class="progress-bar bg-blue" style="width: 77%;"></div>
																</div> </div>
															<div class="col-6 col-lg-12"> <span class="text"> User Testing <span class="pull-right">7 Days</span> </span>
																<div class="progress progress-xs">
																	<div class="progress-bar bg-green-light" style="width: 84%;"></div>
																</div> </div>


														</div>
														<span class="row show-stat-buttons">
															<span class="col-12 col-sm-6">
																<a href="javascript:void(0);" class="btn btn-default btn-block d-none d-md-block">Generate PDF</a>
															</span>
															<span class="col-12 col-sm-6">
																<a href="javascript:void(0);" class="btn btn-default btn-block d-none d-md-block">Report a bug</a>
															</span>
														</span>

													</div>
												</div>
											</div>

											<div class="show-stat-microcharts row m-0">
												<div class="col-12 col-sm-3">

													<div class="easy-pie-chart text-orange-dark" data-width="5" data-bar-color="orange-dark" data-percent="33" data-pie-size="50" >
														<span class="percent percent-sign">35</span>
													</div>
													<span class="easy-pie-title"> Server Load <i class="fa fa-caret-up icon-color-bad"></i> </span>
													<ul class="smaller-stat d-none d-xl-block pull-right">
														<li>
															<span class="label bg-green-light"><i class="fa fa-caret-up"></i> 97%</span>
														</li>
														<li>
															<span class="label bg-blue-light"><i class="fa fa-caret-down"></i> 44%</span>
														</li>
													</ul>
													<div class="sparkline text-green-light d-none d-xl-block pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
														130, 187, 250, 257, 200, 210, 300, 270, 363, 247, 270, 363, 247
													</div>
												</div>
												<div class="col-12 col-sm-3">
													<div class="easy-pie-chart text-green-light" data-percent="78.9" data-width="5" data-bar-color="green-light" data-pie-size="50">
														<span class="percent percent-sign">78.9 </span>
													</div>
													<span class="easy-pie-title"> Disk Space <i class="fa fa-caret-down icon-color-good"></i></span>
													<ul class="smaller-stat d-none d-xl-block pull-right">
														<li>
															<span class="label bg-blue-dark"><i class="fa fa-caret-up"></i> 76%</span>
														</li>
														<li>
															<span class="label bg-blue"><i class="fa fa-caret-down"></i> 3%</span>
														</li>
													</ul>
													<div class="sparkline text-blue d-none d-xl-block pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
														257, 200, 210, 300, 270, 363, 130, 187, 250, 247, 270, 363, 247
													</div>
												</div>
												<div class="col-12 col-sm-3">
													<div class="easy-pie-chart text-blue" data-percent="23" data-width="5" data-bar-color="blue" data-pie-size="50">
														<span class="percent percent-sign">23 </span>
													</div>
													<span class="easy-pie-title"> Transfered <i class="fa fa-caret-up icon-color-good"></i></span>
													<ul class="smaller-stat d-none d-xl-block pull-right">
														<li>
															<span class="label bg-darken">10GB</span>
														</li>
														<li>
															<span class="label bg-blue-dark"><i class="fa fa-caret-up"></i> 10%</span>
														</li>
													</ul>
													<div class="sparkline text-darken d-none d-xl-block pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
														200, 210, 363, 247, 300, 270, 130, 187, 250, 257, 363, 247, 270
													</div>
												</div>
												<div class="col-12 col-sm-3">
													<div class="easy-pie-chart text-darken" data-percent="36" data-width="5" data-bar-color="darken" data-pie-size="50">
														<span class="percent degree-sign">36 <i class="fa fa-caret-up"></i></span>
													</div>
													<span class="easy-pie-title"> Temperature <i class="fa fa-caret-down icon-color-good"></i></span>
													<ul class="smaller-stat d-none d-xl-block pull-right">
														<li>
															<span class="label bg-red"><i class="fa fa-caret-up"></i> 124</span>
														</li>
														<li>
															<span class="label bg-blue"><i class="fa fa-caret-down"></i> 40 F</span>
														</li>
													</ul>
													<div class="sparkline text-red d-none d-xl-block pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
														2700, 3631, 2471, 2700, 3631, 2471, 1300, 1877, 2500, 2577, 2000, 2100, 3000
													</div>
												</div>
											</div>

										</div>
										<!-- end s1 tab pane -->

										<div class="tab-pane" id="s2" role="tabpanel">
											<div class="widget-body-toolbar bg-white">
											
												<form class="form-inline" role="form">
											
													<div class="form-group mr-1">
														<label class="sr-only" for="s123">Show From</label>
														<input type="email" class="form-control form-control-md" id="s123" placeholder="Show From">
													</div>
													<div class="form-group mr-1">
														<input type="email" class="form-control form-control-md" id="s124" placeholder="To">
													</div>
											
													<div class="btn-group hidden-phone ml-auto">
														<a class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown"><i class="fa fa-cog"></i> More <span class="caret"> </span> </a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-file-text-alt"></i> Export to PDF</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-question-sign"></i> Help</a>
														</div>
													</div>
											
												</form>
											
											</div>
											<div class="padding-10">
												<div id="statsChart" class="chart-large has-legend-unique"></div>
											</div>

										</div>
										<!-- end s2 tab pane -->

										<div class="tab-pane" id="s3" role="tabpanel">

											<div class="widget-body-toolbar bg-white" id="rev-toggles">
												<div class="form-inline">
													<div class="form-group mr-3">
														<label for="gra-0" class="vcheck m-0">
															<input type="checkbox" name="gra-0" id="gra-0" checked="checked">
															<span></span> Target </label>
													</div>
													
													<div class="form-group mr-3">
														<label for="gra-1" class="vcheck m-0">
															<input type="checkbox" name="gra-1" id="gra-1" checked="checked">
															<span></span> Actual </label>
													</div>

													<div class="form-group mr-3">
														<label for="gra-2" class="vcheck m-0">
															<input type="checkbox" name="gra-2" id="gra-2" checked="checked">
															<span></span> Signups </label>
													</div>

													<div class="btn-group hidden-phone ml-auto">
														<a class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown"><i class="fa fa-cog"></i> More <span class="caret"> </span> </a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-file-text-alt"></i> Export to PDF</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-question-sign"></i> Help</a>
														</div>
													</div>													
												</div>
											</div>

											<div class="padding-10">
												<div id="flotcontainer" class="chart-large has-legend-unique"></div>
											</div>
										</div>
										<!-- end s3 tab pane -->
									</div>
									
								</div>
								<!-- end widget content -->
								
							</div>
							<!-- end widget div -->
						</div>
						<!-- end widget -->

						
					</article>
				</div>
				<div class="row">
					<div class="col-12 col-xl-6">
						<article class="sortable-grid ui-sortable">
							<div class="jarviswidget jarviswidget-color-blue-dark no-padding" id="wid-id-3" data-widget-editbutton="false" data-widget-fullscreenbutton="false">
								<header>
									<div class="widget-header">	
										<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
										<h2>SmartChat </h2>
									</div>

									<div class="widget-toolbar">
										<!-- add: non-hidden - to disable auto hide -->

										<div class="btn-group">
											<button class="btn dropdown-toggle btn-xs sa-btn-success" data-toggle="dropdown">
												Status
											</button>
											<ul class="dropdown-menu dropdown-menu-right js-status-update">
												<li>
													<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-circle text-green"></i> Online</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-circle text-red"></i> Busy</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-circle text-orange"></i> Away</a>
												</li>
												<li class="divider"></li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-power-off"></i> Log Off</a>
												</li>
											</ul>
										</div>
									</div>
								</header>
								<!-- widget div-->
								<div>
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<div>
											<label>Title:</label>
											<input type="text" />
										</div>
									</div>
									<!-- end widget edit box -->

									<div class="widget-body widget-hide-overflow p-0">
										<!-- content goes here -->

										<!-- CHAT CONTAINER -->
										<div id="chat-container">
											<span class="chat-list-open-close" onclick="SAtoggleClass(this, '#chat-container', 'open')"><i class="fa fa-user"></i><b>!</b></span>

											<div class="chat-list-body custom-scroll">
												<ul id="chat-users">
													<li>
														<a href="javascript:void(0);"><img src="assets/img/avatars/5.png" alt="">Robin Berry <span class="badge badge-inverse">23</span><span class="state"><i class="fa fa-circle text-green pull-right"></i></span></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="assets/img/avatars/male.png" alt="">Mark Zeukartech <span class="state"><i class="last-online pull-right">2hrs</i></span></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="assets/img/avatars/male.png" alt="">Belmain Dolson <span class="state"><i class="last-online pull-right">45m</i></span></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="assets/img/avatars/male.png" alt="">Galvitch Drewbery <span class="state"><i class="fa fa-circle text-green pull-right"></i></span></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="assets/img/avatars/male.png" alt="">Sadi Orlaf <span class="state"><i class="fa fa-circle text-green pull-right"></i></span></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="assets/img/avatars/male.png" alt="">Markus <span class="state"><i class="last-online pull-right">2m</i></span> </a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="assets/img/avatars/sunny.png" alt="">Sunny <span class="state"><i class="last-online pull-right">2m</i></span> </a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="assets/img/avatars/male.png" alt="">Denmark <span class="state"><i class="last-online pull-right">2m</i></span> </a>
													</li>
												</ul>
											</div>
											<div class="chat-list-footer">

												<div class="control-group">

													<form class="smart-form">

														<section>
															<label class="input">
																<input type="text" id="filter-chat-list" placeholder="Filter">
															</label>
														</section>

													</form>

												</div>

											</div>

										</div>

										<!-- CHAT BODY -->
										<div id="chat-body" class="chat-body custom-scroll">
											<ul>
												<li class="message">
													<img src="assets/img/avatars/5.png" class="online" alt="">
													<div class="message-text">
														<time>
															2014-01-13
														</time> <a href="javascript:void(0);" class="username">Sadi Orlaf</a> Hey did you meet the new board of director? He's a bit of an geek if you ask me...anyway here is the report you requested. I am off to launch with Lisa and Andrew, you wanna join?
														<p class="chat-file d-flex">
															<b>
																<i class="fa fa-file"></i>
																report-2013-demographic-report-annual-earnings.xls
															</b>
															<span class="ml-auto">
																<a href="javascript:void(0);" class="btn btn-xs btn-default">cancel</a>
																<a href="javascript:void(0);" class="btn btn-xs sa-btn-success">save</a>
															</span>
														</p>
														<p class="chat-file d-flex">
															<b>
																<i class="fa fa-ok text-green"></i>
																tobacco-report-2012.doc
															</b>
															<span class="ml-auto">
																<a href="javascript:void(0);" class="btn btn-xs sa-btn-primary">open</a>
															</span>
														</p> 
													</div>
												</li>
												<li class="message">
													<img src="assets/img/avatars/sunny.png" class="online" alt="">
													<div class="message-text">
														<time>
															2014-01-13
														</time> <a href="javascript:void(0);" class="username">John Doe</a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o text-orange"></i> 
													</div>
												</li>
											</ul>

										</div>

										<!-- CHAT FOOTER -->
										<div class="chat-footer">

											<!-- CHAT TEXTAREA -->
											<div class="textarea-div">

												<div class="typearea">
													<textarea placeholder="Write a reply..." id="textarea-expand" class="custom-scroll"></textarea>
												</div>

											</div>

											<!-- CHAT REPLY/SEND -->
											<span class="textarea-controls">
												<button class="btn btn-sm sa-btn-primary pull-right"> Reply </button>
												<span class="pull-right smart-form" style="margin-right: 10px;">
													<label class="checkbox pull-right vcheck">
														<input type="checkbox" name="subscription" id="subscription">
														<span></span>Press 
														<strong> ENTER </strong>
														to send 
													</label> 
												</span>
												<a href="javascript:void(0);" class="pull-left"><i class="fa fa-camera fa-fw fa-lg"></i></a>
											</span>

										</div>

										<!-- end content -->
									</div>
								</div>
							</div>
						</article>
						<article class="sortable-grid ui-sortable">
							<div class="jarviswidget jarviswidget-color-blue-dark no-padding" id="wid-id-4" data-widget-colorbutton="false">
								<header>
									<div class="widget-header">	
										<span class="widget-icon"> <i class="fa fa-calendar"></i> </span>
										<h2> My Events </h2>
									</div>

									<div class="widget-toolbar">
										<div class="btn-group">
											<button class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown">
												Showing
											</button>
											<ul class="dropdown-menu js-status-update dropdown-menu-right">
												<li>
													<a class="dropdown-item" href="javascript:void(0);" id="mt">Month</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);" id="ag">Agenda</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);" id="td">Today</a>
												</li>
											</ul>
										</div>									
									</div>
								</header>
								<!-- widget div-->
								<div>
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<div>
											<input class="form-control" type="text">
										</div>
									</div>
									<!-- end widget edit box -->

									<div class="widget-body p-0">
										<!-- content goes here -->
										<div class="widget-body-toolbar">

											<div id="calendar-buttons">
												<div class="btn-group pull-right">
													<a href="javascript:void(0)" class="btn btn-default btn-xs" id="btn-prev"><i class="fa fa-chevron-left"></i></a>
													<a href="javascript:void(0)" class="btn btn-default btn-xs" id="btn-next"><i class="fa fa-chevron-right"></i></a>
												</div>
											</div>
										</div>
										<div id="calendar"></div>

										<!-- end content -->
									</div>
								</div>
							</div>
					</article>
					</div>
					<div class="col-12 col-xl-6">
						<article class="sortable-grid ui-sortable">
							<div class="jarviswidget no-padding" id="wid-id-5" data-widget-editbutton="false" data-widget-colorbutton="false" >
								<header>
									<div class="widget-header">	
										<span class="widget-icon"> <i class="fa fa-map-marker"></i> </span>
										<h2>Birds Eye </h2>
									</div>

									<div class="widget-toolbar hidden-mobile">
										<span class="onoffswitch-title"><i class="fa fa-location-arrow"></i> Realtime</span>
										<span class="onoffswitch">
											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" checked="checked" id="myonoffswitch">
											<label class="onoffswitch-label" for="myonoffswitch">
												<span class="onoffswitch-inner" data-swchon-text="YES" data-swchoff-text="NO"></span>
												<span class="onoffswitch-switch"></span>
											</label>
										</span>
									</div>
								</header>
								<!-- widget div-->
								<div>
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<div>
											<label>Title:</label>
											<input type="text" />
										</div>
									</div>
									<!-- end widget edit box -->

									<div class="widget-body p-0">
										<!-- content goes here -->
										<div id="vector-map" class="vector-map"></div>
										<div id="heat-fill">
											<span class="fill-a">0</span>
											<span class="fill-b">5,000</span>
										</div>

										<table class="table table-striped table-hover table-condensed">
											<thead>
												<tr>
													<th>Country</th>
													<th>Visits</th>
													<th class="text-align-center">User Activity</th>
													<th class="text-align-center d-none d-md-table-cell">Online</th>
													<th class="text-align-center">Demographic</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="javascript:void(0);">USA</a></td>
													<td>4,977</td>
													<td class="text-align-center">
													<div class="sparkline text-blue text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
														2700, 3631, 2471, 1300, 1877, 2500, 2577, 2700, 3631, 2471, 2000, 2100, 3000
													</div></td>
													<td class="text-align-center d-none d-md-table-cell">143</td>
													<td class="text-align-center">
													<div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
														17,83
													</div>
													<div class="btn-group display-inline pull-right text-align-left d-none d-md-block">
														<button class="btn btn-xs btn-default dropdown-toggle dropdown-toggle-without-arrow " data-toggle="dropdown">
															<i class="fa fa-cog fa-lg"></i>
														</button>
														<ul class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
															<li>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw text-green-light"></i> <u>P</u>DF</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw text-red"></i> <u>D</u>elete</a>
															</li>
															<li class="dropdown-divider"></li>
															<li class="text-align-center">
																<a class="dropdown-item" href="javascript:void(0);">Cancel</a>
															</li>
														</ul>
													</div></td>
												</tr>
												<tr>
													<td><a href="javascript:void(0);">Australia</a></td>
													<td>4,873</td>
													<td class="text-align-center">
													<div class="sparkline text-blue text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
														1000, 1100, 3030, 1300, -1877, -2500, -2577, -2700, 3631, 2471, 4700, 1631, 2471
													</div></td>
													<td class="text-align-center  d-none d-md-table-cell">247</td>
													<td class="text-align-center">
													<div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
														22,88
													</div>
													<div class="btn-group display-inline pull-right text-align-left d-none d-md-block">
														<button class="btn btn-xs btn-default dropdown-toggle dropdown-toggle-without-arrow " data-toggle="dropdown">
															<i class="fa fa-cog fa-lg"></i>
														</button>
														<ul class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
															<li>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw text-green-light"></i> <u>P</u>DF</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw text-red"></i> <u>D</u>elete</a>
															</li>
															<li class="dropdown-divider"></li>
															<li class="text-align-center">
																<a class="dropdown-item" href="javascript:void(0);">Cancel</a>
															</li>
														</ul>
													</div></td>
												</tr>
												<tr>
													<td><a href="javascript:void(0);">India</a></td>
													<td>3,671</td>
													<td class="text-align-center">
													<div class="sparkline text-blue text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
														3631, 1471, 2400, 3631, 471, 1300, 1177, 2500, 2577, 3000, 4100, 3000, 7700
													</div></td>
													<td class="text-align-center  d-none d-md-table-cell">373</td>
													<td class="text-align-center">
													<div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
														10,90
													</div>
													<div class="btn-group display-inline pull-right text-align-left d-none d-md-block">
														<button class="btn btn-xs btn-default dropdown-toggle dropdown-toggle-without-arrow " data-toggle="dropdown">
															<i class="fa fa-cog fa-lg"></i>
														</button>
														<ul class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
															<li>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw text-green-light"></i> <u>P</u>DF</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw text-red"></i> <u>D</u>elete</a>
															</li>
															<li class="dropdown-divider"></li>
															<li class="text-align-center">
																<a class="dropdown-item" href="javascript:void(0);">Cancel</a>
															</li>
														</ul>
													</div></td>
												</tr>
												<tr>
													<td><a href="javascript:void(0);">Brazil</a></td>
													<td>2,476</td>
													<td class="text-align-center">
													<div class="sparkline text-blue text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
														2700, 1877, 2500, 2577, 2000, 3631, 2471, -2700, -3631, 2471, 1300, 2100, 3000,
													</div></td>
													<td class="text-align-center  d-none d-md-table-cell ">741</td>
													<td class="text-align-center">
													<div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
														34,66
													</div>
													<div class="btn-group display-inline pull-right text-align-left d-none d-md-block">
														<button class="btn btn-xs btn-default dropdown-toggle dropdown-toggle-without-arrow " data-toggle="dropdown">
															<i class="fa fa-cog fa-lg"></i>
														</button>
														<ul class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
															<li>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw text-green-light"></i> <u>P</u>DF</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw text-red"></i> <u>D</u>elete</a>
															</li>
															<li class="dropdown-divider"></li>
															<li class="text-align-center">
																<a class="dropdown-item" href="javascript:void(0);">Cancel</a>
															</li>
														</ul>
													</div></td>
												</tr>
												<tr>
													<td><a href="javascript:void(0);">Turkey</a></td>
													<td>1,476</td>
													<td class="text-align-center">
													<div class="sparkline text-blue text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
														1300, 1877, 2500, 2577, 2000, 2100, 3000, -2471, -2700, -3631, -2471, 2700, 3631
													</div></td>
													<td class="text-align-center  d-none d-md-table-cell">123</td>
													<td class="text-align-center">
													<div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
														75,25
													</div>
													<div class="btn-group display-inline pull-right text-align-left d-none d-md-block">
														<button class="btn btn-xs btn-default dropdown-toggle dropdown-toggle-without-arrow " data-toggle="dropdown">
															<i class="fa fa-cog fa-lg"></i>
														</button>
														<ul class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
															<li>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw text-green-light"></i> <u>P</u>DF</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw text-red"></i> <u>D</u>elete</a>
															</li>
															<li class="dropdown-divider"></li>
															<li class="text-align-center">
																<a class="dropdown-item" href="javascript:void(0);">Cancel</a>
															</li>
														</ul>
													</div></td>
												</tr>
												<tr>
													<td><a href="javascript:void(0);">Canada</a></td>
													<td>146</td>
													<td class="text-align-center">
													<div class="sparkline text-orange text-align-center" ddata-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
														5, 34, 10, 1, 4, 6, -9, -1, 0, 0, 5, 6, 7
													</div></td>
													<td class="text-align-center  d-none d-md-table-cell">23</td>
													<td class="text-align-center">
													<div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
														50,50
													</div>
													<div class="btn-group display-inline pull-right text-align-left d-none d-md-block">
														<button class="btn btn-xs btn-default dropdown-toggle dropdown-toggle-without-arrow " data-toggle="dropdown">
															<i class="fa fa-cog fa-lg"></i>
														</button>
														<ul class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
															<li>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw text-green-light"></i> <u>P</u>DF</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw text-red"></i> <u>D</u>elete</a>
															</li>
															<li class="dropdown-divider"></li>
															<li class="text-align-center">
																<a class="dropdown-item" href="javascript:void(0);">Cancel</a>
															</li>
														</ul>
													</div></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan=5>
													<ul class="pagination pagination-sm m-0">
														<li class="prev disabled page-item">
															<a class="page-link" href="javascript:void(0);">Previous</a>
														</li>
														<li class="active page-item">
															<a class="page-link" href="javascript:void(0);">1</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="javascript:void(0);">2</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="javascript:void(0);">3</a>
														</li>
														<li class="next page-item">
															<a class="page-link" href="javascript:void(0);">Next</a>
														</li>
													</ul></td>
												</tr>
											</tfoot>
										</table>
										<!-- end content -->
									</div>
								</div>
							</div>
						</article>

						<article class="sortable-grid ui-sortable">
							<div class="jarviswidget jarviswidget-color-blue no-padding" id="wid-id-6" data-widget-editbutton="false" data-widget-colorbutton="false">
								<header>
									<div class="widget-header">	
										<span class="widget-icon"> <i class="fa fa-check"></i> </span>
										<h2> ToDo's </h2>
									</div>									
								</header>
								<!-- widget div-->
								<div>
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<div>
											<label>Title:</label>
											<input type="text" />
										</div>
									</div>
									<!-- end widget edit box -->

									<div class="widget-body p-0">
										<!-- content goes here -->
										<h5 class="todo-group-title"><i class="fa fa-warning"></i> Critical Tasks (<small class="num-of-tasks">1</small>)</h5>
										<ul id="sortable1" class="todo">
											<li>
												<span class="handle"> <label class="vcheck vcheck-20 checkbox">
														<input type="checkbox" name="checkbox-inline">
														<span></span> </label> </span>
												<p>
													<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
													<span class="date">Jan 1, 2014</span>
												</p>
											</li>
										</ul>
										<h5 class="todo-group-title"><i class="fa fa-exclamation"></i> Important Tasks (<small class="num-of-tasks">3</small>)</h5>
										<ul id="sortable2" class="todo">
											<li>
												<span class="handle"> <label class="checkbox vcheck vcheck-20">
														<input type="checkbox" name="checkbox-inline">
														<span></span> </label> </span>
												<p>
													<strong>Ticket #1347</strong> - Inbox email is being sent twice <small>(bug fix)</small> [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="date">Nov 22, 2013</span>
												</p>
											</li>
											<li>
												<span class="handle"> <label class="checkbox vcheck vcheck-20">
														<input type="checkbox" name="checkbox-inline">
														<span></span> </label> </span>
												<p>
													<strong>Ticket #1314</strong> - Call customer support re: Issue <a href="javascript:void(0);" class="font-xs">#6134</a><small>(code review)</small>
													<span class="date">Nov 22, 2013</span>
												</p>
											</li>
											<li>
												<span class="handle"> <label class="checkbox vcheck vcheck-20">
														<input type="checkbox" name="checkbox-inline">
														<span></span> </label> </span>
												<p>
													<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
													<span class="date">Jan 1, 2014</span>
												</p>
											</li>
										</ul>

										<h5 class="todo-group-title"><i class="fa fa-check"></i> Completed Tasks (<small class="num-of-tasks">1</small>)</h5>
										<ul id="sortable3" class="todo">
											<li class="complete">
												<span class="handle" style="display:none"> <label class="checkbox state-disabled vcheck vcheck-20">
														<input type="checkbox" name="checkbox-inline" checked="checked" disabled="disabled">
														<span></span> </label> </span>
												<p>
													<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
													<span class="date">Jan 1, 2014</span>
												</p>
											</li>
										</ul>

										<!-- end content -->
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
			
				<!-- end row -->
			
			</section>
		</div>
        </div>


          <!-- BEGIN .sa-page-footer -->
          <footer class="sa-page-footer">
              <div class="d-flex align-items-center w-100 h-100">
                <div class="footer-left">
                  SmartAdmin 1.9.X - <span class="footer-txt">Web Application Framework</span> &copy; 2017-2019            
                </div>
                <div class="ml-auto footer-right">
                  <i class="hidden-xs text-blue-light">Last account activity <i class="fa fa-clock-o"></i> <strong>52 mins ago &nbsp;</strong> </i>
                  <div class="btn-group dropup">
                    <button class="btn btn-xs dropdown-toggle sa-btn-blue" data-toggle="dropdown">
                      <i class="fa fa-link"></i> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <div class="padding-5">
                          <p class="text-darken font-sm m-0">Download Progress</p>
                          <div class="progress progress-micro m-0">
                            <div class="progress-bar bg-success" style="width: 50%;"></div>
                          </div>
                        </div>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li>
                        <div class="padding-5">
                          <p class="text-darken font-sm m-0">Server Load</p>
                          <div class="progress progress-micro m-0">
                            <div class="progress-bar bg-success" style="width: 20%;"></div>
                          </div>
                        </div>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li>
                        <div class="padding-5">
                          <p class="text-darken font-sm m-0">Memory Load <span class="text-danger">*critical*</span></p>
                          <div class="progress progress-micro m-0">
                            <div class="progress-bar bg-danger" style="width: 70%;"></div>
                          </div>
                        </div>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li>
                        <div class="padding-5">
                          <button class="btn btn-block btn-default">refresh</button>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

          </footer>
          <!-- END .sa-page-footer -->

      
      </div>
      <!-- END .sa-content-wrapper -->


    </div>

   

  </div>
  <!-- END .sa-wrapper -->

  <script src="assets/vendors/vendors.bundle.js"></script>
  <script src="assets/app/app.bundle.js"></script>
  
<script>
  $(function () {
      $('#menu1').metisMenu();
  });
</script>

	<script type="text/javascript">
		/*
		* RUN PAGE GRAPHS
		*/

		/* TAB 1: UPDATING CHART */
		// For the demo we use generated data, but normally it would be coming from the server

		var data = [], totalPoints = 200, $UpdatingChartColors = $("#updating-chart").css('color');

		function getRandomData() {
			if (data.length > 0)
				data = data.slice(1);

			// do a random walk
			while (data.length < totalPoints) {
				var prev = data.length > 0 ? data[data.length - 1] : 50;
				var y = prev + Math.random() * 10 - 5;
				if (y < 0)
					y = 0;
				if (y > 100)
					y = 100;
				data.push(y);
			}

			// zip the generated y values with the x values
			var res = [];
			for (var i = 0; i < data.length; ++i)
				res.push([i, data[i]])
			return res;
		}

		// setup control widget
		var updateInterval = 1500;
		$("#updating-chart").val(updateInterval).change(function() {

			var v = $(this).val();
			if (v && !isNaN(+v)) {
				updateInterval = +v;
				$(this).val("" + updateInterval);
			}

		});

		// setup plot
		var options = {
			yaxis : {
				min : 0,
				max : 100
			},
			xaxis : {
				min : 0,
				max : 100
			},
			colors : [$UpdatingChartColors],
			series : {
				lines : {
					lineWidth : 1,
					fill : true,
					fillColor : {
						colors : [{
							opacity : 0.4
						}, {
							opacity : 0
						}]
					},
					steps : false

				}
			},
			grid: {
			    borderWidth: 0,
			    borderColor: "#ccc",
			    margin: {
				    top: 0,
				    right: 10,
				    bottom: 10,
				    left: 0

				}
			}
		};

		var plot = $.plot($("#updating-chart"), [getRandomData()], options);

		/* live switch */
		$('input[type="checkbox"]#start_interval').click(function() {
			if ($(this).prop('checked')) {
				$on = true;
				updateInterval = 1500;
				update();
			} else {
				clearInterval(updateInterval);
				$on = false;
			}
		});

		function update() {
			if ($on == true) {
				plot.setData([getRandomData()]);
				plot.draw();
				setTimeout(update, updateInterval);

			} else {
				clearInterval(updateInterval)
			}

		}

		var $on = false;

		/*end updating chart*/


		/* TAB 2: Social Network  */

		// jQuery Flot Chart
		var twitter = [[1, 27], [2, 34], [3, 51], [4, 48], [5, 55], [6, 65], [7, 61], [8, 70], [9, 65], [10, 75], [11, 57], [12, 59], [13, 62]], facebook = [[1, 25], [2, 31], [3, 45], [4, 37], [5, 38], [6, 40], [7, 47], [8, 55], [9, 43], [10, 50], [11, 47], [12, 39], [13, 47]], data3 = [{
			label : "Twitter",
			data : twitter,
			lines : {
				show : true,
				lineWidth : 1,
				fill : true,
				fillColor : {
					colors : [{
						opacity : 0.1
					}, {
						opacity : 0.13
					}]
				}
			},
			points : {
				show : true
			}
		}, {
			label : "Facebook",
			data : facebook,
			lines : {
				show : true,
				lineWidth : 1,
				fill : true,
				fillColor : {
					colors : [{
						opacity : 0.1
					}, {
						opacity : 0.13
					}]
				}
			},
			points : {
				show : true
			}
		}];

		var options3 = {
			grid : {
				hoverable : true,
			    borderWidth: 0,
			    borderColor: "#ccc"
			},
			colors : ["#568A89", "#3276B1"],
			tooltip : true,
			tooltipOpts : {
				//content : "Value <b>$x</b> Value <span>$y</span>",
				defaultTheme : false
			},
			xaxis : {
				ticks : [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"], [13, "JAN+1"]]
			},
			yaxes : {

			}
		};

		/*$('body').load(function(){
			var plot3 = $.plot($("#statsChart"), data, options3);
		})*/


		var plot3 = null;

		function applySoicalPlot() {
			if (plot3) {
				plot3.setData(data3);
				plot3.setupGrid();
				plot3.draw();
			} else {
				plot3 = $.plot($("#statsChart"), [], options3);
			}
		}

		applySoicalPlot();
		

		// END TAB 2

		// TAB THREE GRAPH //
		/* TAB 3: Revenew  */

		var trgt = [[1354586000000, 153], [1364587000000, 658], [1374588000000, 198], [1384589000000, 663], [1394590000000, 801], [1404591000000, 1080], [1414592000000, 353], [1424593000000, 749], [1434594000000, 523], [1444595000000, 258], [1454596000000, 688], [1464597000000, 364]], prft = [[1354586000000, 53], [1364587000000, 65], [1374588000000, 98], [1384589000000, 83], [1394590000000, 980], [1404591000000, 808], [1414592000000, 720], [1424593000000, 674], [1434594000000, 23], [1444595000000, 79], [1454596000000, 88], [1464597000000, 36]], sgnups = [[1354586000000, 647], [1364587000000, 435], [1374588000000, 784], [1384589000000, 346], [1394590000000, 487], [1404591000000, 463], [1414592000000, 479], [1424593000000, 236], [1434594000000, 843], [1444595000000, 657], [1454596000000, 241], [1464597000000, 341]], toggles = $("#rev-toggles"), target = $("#flotcontainer");

		var data2 = [{
			label : "Target Profit",
			data : trgt,
			bars : {
				show : true,
				align : "center",
				barWidth : 30 * 30 * 60 * 1000 * 80
			}
		}, {
			label : "Actual Profit",
			data : prft,
			color : '#3276B1',
			lines : {
				show : true,
				lineWidth : 3
			},
			points : {
				show : true
			}
		}, {
			label : "Actual Signups",
			data : sgnups,
			color : '#71843F',
			lines : {
				show : true,
				lineWidth : 1
			},
			points : {
				show : true
			}
		}]

		var options2 = {
			grid : {
				hoverable : true,
			    borderWidth: 0,
			    borderColor: "#ccc",
			},
			tooltip : true,
			tooltipOpts : {
				//content: '%x - %y',
				//dateFormat: '%b %y',
				defaultTheme : false
			},
			xaxis : {
				mode : "time"
			},
			yaxes : {
				tickFormatter : function(val, axis) {
					return "$" + val;
				},
				max : 1200
			}

		};

		plot2 = null;

		function plotNow() {
			var d = [];
			toggles.find(':checkbox').each(function() {
				if ($(this).is(':checked')) {
					d.push(data2[$(this).attr("name").substr(4, 1)]);
				}
			});
			if (d.length > 0) {
				if (plot2) {
					plot2.setData(d);
					plot2.draw();
				} else {
					plot2 = $.plot(target, d, options2);
				}
			}

		};

		toggles.find(':checkbox').on('change', function() {
			plotNow();
		});
		plotNow()



		/*
		 * VECTOR MAP
		 */

		data_array = {
			"US" : 4977,
			"AU" : 4873,
			"IN" : 3671,
			"BR" : 2476,
			"TR" : 1476,
			"CN" : 146,
			"CA" : 134,
			"BD" : 100
		};

		$('#vector-map').vectorMap({
			map : 'world_mill_en',
			backgroundColor : '#fff',
			regionStyle : {
				initial : {
					fill : '#c4c4c4'
				},
				hover : {
					"fill-opacity" : 1
				}
			},
			series : {
				regions : [{
					values : data_array,
					scale : ['#85a8b6', '#4d7686'],
					normalizeFunction : 'polynomial'
				}]
			},
			onRegionLabelShow : function(e, el, code) {
				if ( typeof data_array[code] == 'undefined') {
					e.preventDefault();
				} else {
					var countrylbl = data_array[code];
					el.html(el.html() + ': ' + countrylbl + ' visits');
				}
			}
		});

		/*
		 * PAGE RELATED SCRIPTS
		 */

		$(".js-status-update a").click(function() {
			var selText = $(this).text();
			var $this = $(this);
			$this.parents('.btn-group').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
			$this.parents('.dropdown-menu').find('li').removeClass('active');
			$this.parent().addClass('active');
		});

		/*
		 * FULL CALENDAR JS
		 */

		if ($("#calendar").length) {
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();

			var calendar = $('#calendar').fullCalendar({

				editable : true,
				draggable : true,
				selectable : false,
				selectHelper : true,
				unselectAuto : false,
				disableResizing : false,
				height: "auto",

				header : {
					left : 'title', //,today
					center : '',
					right : '' //month, agendaDay,
				},

				select : function(start, end, allDay) {
					var title = prompt('Event Title:');
					if (title) {
						calendar.fullCalendar('renderEvent', {
							title : title,
							start : start,
							end : end,
							allDay : allDay
						}, true // make the event "stick"
						);
					}
					calendar.fullCalendar('unselect');
				},

				events : [{
					title : 'All Day Event',
					start : new Date(y, m, 1),
					description : 'long description',
					className : ["event", "bg-green-light"],
					icon : 'fa-check'
				}, {
					title : 'Long Event',
					start : new Date(y, m, d - 5),
					end : new Date(y, m, d - 2),
					className : ["event", "bg-red"],
					icon : 'fa-lock'
				}, {
					id : 999,
					title : 'Repeating Event',
					start : new Date(y, m, d - 3, 16, 0),
					allDay : false,
					className : ["event", "bg-blue"],
					icon : 'fa-clock-o'
				}, {
					id : 999,
					title : 'Repeating Event',
					start : new Date(y, m, d + 4, 16, 0),
					allDay : false,
					className : ["event", "bg-blue"],
					icon : 'fa-clock-o'
				}, {
					title : 'Meeting',
					start : new Date(y, m, d, 10, 30),
					allDay : false,
					className : ["event", "bg-darken"]
				}, {
					title : 'Lunch',
					start : new Date(y, m, d, 12, 0),
					end : new Date(y, m, d, 14, 0),
					allDay : false,
					className : ["event", "bg-darken"]
				}, {
					title : 'Birthday Party',
					start : new Date(y, m, d + 1, 19, 0),
					end : new Date(y, m, d + 1, 22, 30),
					allDay : false,
					className : ["event", "bg-darken"]
				}, {
					title : 'Smartadmin Open Day',
					start : new Date(y, m, 28),
					end : new Date(y, m, 29),
					className : ["event", "bg-darken"]
				}],


				eventRender : function(event, element, icon) {
					if (!event.description == "") {
						element.find('.fc-title').append("<br/><span class='ultra-light'>" + event.description + "</span>");
					}
					if (!event.icon == "") {
						element.find('.fc-title').append("<i class='air air-top-right fa " + event.icon + " '></i>");
					}
				}
			});

		};

		/* hide default buttons */
		//$('.fc-toolbar .fc-right, .fc-toolbar .fc-center').hide();

		// calendar prev
		$('#calendar-buttons #btn-prev').click(function() {
			calendar.fullCalendar('prev');
			return false;
		});

		// calendar next
		$('#calendar-buttons #btn-next').click(function() {
			calendar.fullCalendar('next');
			return false;
		});

		// calendar today
		$('#calendar-buttons #btn-today').click(function() {
			calendar.fullCalendar('today');
			return false;
		});

		// calendar month
		$('#mt').click(function() {
			calendar.fullCalendar('changeView', 'month');
		});

		// calendar agenda week
		$('#ag').click(function() {
			calendar.fullCalendar('changeView', 'agendaWeek');
		});

		// calendar agenda day
		$('#td').click(function() {
			calendar.fullCalendar('changeView', 'agendaDay');
		});






		/*
		 * CHAT
		 */

		$.filter_input = $('#filter-chat-list');
		$.chat_users_container = $('#chat-container > .chat-list-body')
		$.chat_users = $('#chat-users')
		$.chat_body = $('#chat-body');

		/*
		* LIST FILTER (CHAT)
		*/

		// custom css expression for a case-insensitive contains()
		jQuery.expr[':'].Contains = function(a, i, m) {
			return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
		};

		function listFilter(list) {// header is any element, list is an unordered list
			// create and add the filter form to the header

			$.filter_input.change(function() {
				var filter = $(this).val();
				if (filter) {
					// this finds all links in a list that contain the input,
					// and hide the ones not containing the input while showing the ones that do
					$.chat_users.find("a:not(:Contains(" + filter + "))").parent().slideUp();
					$.chat_users.find("a:Contains(" + filter + ")").parent().slideDown();
				} else {
					$.chat_users.find("li").slideDown();
				}
				return false;
			}).keyup(function() {
				// fire the above change event after every letter
				$(this).change();

			});

		}

		// on dom ready
		listFilter($.chat_users);

		// open chat list
		
		$.chat_body.animate({
			scrollTop : $.chat_body[0].scrollHeight
		}, 500);




		/*
		* TODO: add a way to add more todo's to list
		*/

		// initialize sortable
		$(function() {
			$("#sortable1, #sortable2").sortable({
				handle : '.handle',
				connectWith : ".todo",
				update : countTasks
			}).disableSelection();
		});

		// check and uncheck
		$('.todo .checkbox > input[type="checkbox"]').click(function() {
			var $this = $(this).parent().parent().parent();

			if ($(this).prop('checked')) {
				$this.addClass("complete");

				// remove this if you want to undo a check list once checked
				//$(this).attr("disabled", true);
				$(this).parent().hide();

				// once clicked - add class, copy to memory then remove and add to sortable3
				$this.slideUp(500, function() {
					$this.clone().prependTo("#sortable3").effect("highlight", {}, 800);
					$this.remove();
					countTasks();
				});
			} else {
				// insert undo code here...
			}

		})
		// count tasks
		function countTasks() {

			$('.todo-group-title').each(function() {
				var $this = $(this);
				$this.find(".num-of-tasks").text($this.next().find("li").size());
			});

		}




	</script>

</body>
</html>