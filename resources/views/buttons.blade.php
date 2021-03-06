<!DOCTYPE html>

<html lang="en" class="smart-style-0">
<head>
  <title>Sunnyat Ahmed | Smart Admin 2.0</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,500,700">
  <link rel="shortcut icon" href="assets/img/favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/img/favicon/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" media="screen, print" href="assets/vendors/vendors.bundle.css">
  <link rel="stylesheet" media="screen, print" href="assets/app/app.bundle.css">

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
                  <li class=" "><!-- first-level -->
                    <a class="has-arrow"   href="index.html" title="Dashboard"><span class="fa fa-lg fa-fw fa-home"></span> <span class="menu-item-parent">Dashboard</span> 
                    	<b class="collapse-sign">
                    		<em class="fa fa-plus-square-o"></em>
                    		<em class="fa fa-minus-square-o"></em>
                    	</b>
                    </a>
                    <ul aria-expanded="true" class="sa-sub-nav collapse">
                      <!-- second-level -->
                      <li class="">
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
                    
                </li>            <li class=" active"><!-- first-level -->
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
                      <li class="active">
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
          		<li class="breadcrumb-item"><a href="javascript:void(0)">UI Elements</a></li>
          				<li class="breadcrumb-item"><a href="buttons.html">Buttons</a></li>
          	
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
				<h1 class="page-header"><i class="fa-fw fa fa-desktop"></i> UI Elements <span>> Buttons</span></h1>				
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
						<div class="jarviswidget well" id="wid-id-0" 
							data-widget-colorbutton="false"	
							data-widget-editbutton="false"
							data-widget-togglebutton="false"
							data-widget-deletebutton="false"
							data-widget-fullscreenbutton="false"
							data-widget-custombutton="false"
							data-widget-collapsed="false" 
							data-widget-sortable="false">
						<!-- widget options:
							usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
							
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
									<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
									<h2>Widget Title </h2>
								</div>
							</header>
									
							<!-- widget div-->
							<div>
								
								<!-- widget edit box -->
								<div class="jarviswidget-editbox">
									<!-- This area used as dropdown edit box -->
									<input class="form-control" type="text">	
								</div>
								<!-- end widget edit box -->
								
								<!-- widget content -->
								<div class="widget-body">
									
									<!-- this is what the user will see -->
									<h1>Buttons at a glance...</h1>
									<p>See how aspects of the Bootstrap button system look and feel like at a glance.</p>

									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>Button</th>
													<th>btn-lg Button</th>
													<th>Small Button</th>
													<th>Small Mini</th>
													<th>Disabled Button</th>
													<th>Button with Icon</th>
													<th>Split Button</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a class="btn btn-default" href="javascript:void(0);">Default</a></td>
													<td><a class="btn btn-default btn-lg" href="javascript:void(0);">Default</a></td>
													<td><a class="btn btn-default btn-sm" href="javascript:void(0);">Default</a></td>
													<td><a class="btn btn-default btn-xs" href="javascript:void(0);">Default</a></td>
													<td><a class="btn btn-default disabled" href="javascript:void(0);">Default</a></td>
													<td><a class="btn btn-default" href="javascript:void(0);"><i class="fa fa-cog"></i> Default</a></td>
													<td>
													<div class="btn-group">
														<a class="btn btn-default" href="javascript:void(0);">Default</a>
														<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"></a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Action</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Another action</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
															</li>
															<li class="dropdown-divider"></li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
															</li>
														</ul>
													</div><!-- /btn-group --></td>
												</tr>
												<tr>
													<td><a class="btn sa-btn-primary" href="javascript:void(0);">Primary</a></td>
													<td><a class="btn sa-btn-primary btn-lg" href="javascript:void(0);">Primary</a></td>
													<td><a class="btn sa-btn-primary btn-sm" href="javascript:void(0);">Primary</a></td>
													<td><a class="btn sa-btn-primary btn-xs" href="javascript:void(0);">Primary</a></td>
													<td><a class="btn sa-btn-primary disabled" href="javascript:void(0);">Primary</a></td>
													<td><a class="btn sa-btn-primary" href="javascript:void(0);"><i class="fa fa-shopping-cart"></i> Primary</a></td>
													<td>
													<div class="btn-group">
														<a class="btn sa-btn-primary" href="javascript:void(0);">Primary</a>
														<a class="btn sa-btn-primary dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"></a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Action</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Another action</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
															</li>
															<li class="dropdown-divider"></li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
															</li>
														</ul>
													</div><!-- /btn-group --></td>
												</tr>
												<tr>
													<td><a class="btn sa-btn-info" href="javascript:void(0);">Info</a></td>
													<td><a class="btn sa-btn-info btn-lg" href="javascript:void(0);">Info</a></td>
													<td><a class="btn sa-btn-info btn-sm" href="javascript:void(0);">Info</a></td>
													<td><a class="btn sa-btn-info btn-xs" href="javascript:void(0);">Info</a></td>
													<td><a class="btn sa-btn-info disabled" href="javascript:void(0);">Info</a></td>
													<td><a class="btn sa-btn-info" href="javascript:void(0);"><i class="fa fa-info"></i> Info</a></td>
													<td>
													<div class="btn-group">
														<a class="btn sa-btn-info" href="javascript:void(0);">Info</a>
														<a class="btn sa-btn-info dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"></a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Action</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Another action</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
															</li>
															<li class="dropdown-divider"></li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
															</li>
														</ul>
													</div><!-- /btn-group --></td>
												</tr>
												<tr>
													<td><a class="btn sa-btn-success" href="javascript:void(0);">Success</a></td>
													<td><a class="btn sa-btn-success btn-lg" href="javascript:void(0);">Success</a></td>
													<td><a class="btn sa-btn-success btn-sm" href="javascript:void(0);">Success</a></td>
													<td><a class="btn sa-btn-success btn-xs" href="javascript:void(0);">Success</a></td>
													<td><a class="btn sa-btn-success disabled" href="javascript:void(0);">Success</a></td>
													<td><a class="btn sa-btn-success" href="javascript:void(0);"><i class="fa fa-check"></i> Success</a></td>
													<td>
													<div class="btn-group">
														<a class="btn sa-btn-success" href="javascript:void(0);">Success</a>
														<a class="btn sa-btn-success dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"></a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Action</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Another action</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
															</li>
															<li class="dropdown-divider"></li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
															</li>
														</ul>
													</div><!-- /btn-group --></td>
												</tr>
												<tr>
													<td><a class="btn sa-btn-warning" href="javascript:void(0);">Warning</a></td>
													<td><a class="btn sa-btn-warning btn-lg" href="javascript:void(0);">Warning</a></td>
													<td><a class="btn sa-btn-warning btn-sm" href="javascript:void(0);">Warning</a></td>
													<td><a class="btn sa-btn-warning btn-xs" href="javascript:void(0);">Warning</a></td>
													<td><a class="btn sa-btn-warning disabled" href="javascript:void(0);">Warning</a></td>
													<td><a class="btn sa-btn-warning" href="javascript:void(0);"><i class="fa fa-warning"></i> Warning</a></td>
													<td>
													<div class="btn-group">
														<a class="btn sa-btn-warning" href="javascript:void(0);">Warning</a>
														<a class="btn sa-btn-warning dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"></a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Action</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Another action</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
															</li>
															<li class="dropdown-divider"></li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
															</li>
														</ul>
													</div><!-- /btn-group --></td>
												</tr>
												<tr>
													<td><a class="btn sa-btn-danger" href="javascript:void(0);">Danger</a></td>
													<td><a class="btn sa-btn-danger btn-lg" href="javascript:void(0);">Danger</a></td>
													<td><a class="btn sa-btn-danger btn-sm" href="javascript:void(0);">Danger</a></td>
													<td><a class="btn sa-btn-danger btn-xs" href="javascript:void(0);">Danger</a></td>
													<td><a class="btn sa-btn-danger disabled" href="javascript:void(0);">Danger</a></td>
													<td><a class="btn sa-btn-danger" href="javascript:void(0);"><i class="fa fa-remove"></i> Danger</a></td>
													<td>
													<div class="btn-group">
														<a class="btn sa-btn-danger" href="javascript:void(0);">Danger</a>
														<a class="btn sa-btn-danger dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"></a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Action</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Another action</a>
															</li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
															</li>
															<li class="dropdown-divider"></li>
															<li>
																<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
															</li>
														</ul>
													</div><!-- /btn-group --></td>
												</tr>
											</tbody>
										</table>
									</div>
									
								</div>
								<!-- end widget content -->
								
							</div>
							<!-- end widget div -->
						</div>
						<!-- end widget -->

						
					</article>


						
				</div>
			
				<!-- end row -->


				<div class="row">

						<!-- NEW WIDGET START -->
						<article class="col-xl-6">

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

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
										<span class="widget-icon"> <i class="fa fa-hand-o-up"></i> </span>
										<h2>Basic Buttons</h2>
									</div>
								</header>

								<!-- widget div-->
								<div>

									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->

									</div>
									<!-- end widget edit box -->

									<!-- widget content -->
									<div class="widget-body">
										<p class="alert alert-info">
											The icons below are the most basic ones, without any icons or additional css applied to it
										</p>

										<p>
											Buttons come in 6 different default color sets
											<code>
												.btn .btn-*
											</code>
											<code>
												.btn-default, .btn-primary, .btn-success... etc
											</code>
										</p>
										<a href="javascript:void(0);" class="btn btn-default">Default</a>
										<a href="javascript:void(0);" class="btn sa-btn-primary">Primary</a>
										<a href="javascript:void(0);" class="btn sa-btn-success">Success</a>
										<a href="javascript:void(0);" class="btn sa-btn-info">Info</a>
										<a href="javascript:void(0);" class="btn sa-btn-warning">Warning</a>
										<a href="javascript:void(0);" class="btn sa-btn-danger">Danger</a>
										<a href="javascript:void(0);" class="btn btn-default disabled">Disabled</a>
										<a href="javascript:void(0);" class="btn btn-link">Link</a>

									</div>
									<!-- end widget content -->

								</div>
								<!-- end widget div -->

							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-2" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

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
										<span class="widget-icon"> <i class="fa fa-hand-o-up"></i> </span>
										<h2>Button Sizes </h2>
									</div>
								</header>

								<!-- widget div-->
								<div>

									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->

									</div>
									<!-- end widget edit box -->

									<!-- widget content -->
									<div class="widget-body">
										<p>
											Large buttons to attract call to action
											<code>
												.btn .btn-lg
											</code>
										</p>
										<a href="javascript:void(0);" class="btn sa-btn-primary btn-lg">Large button</a>&nbsp;<a href="javascript:void(0);" class="btn btn-default btn-lg">Large button</a>
										<hr class="simple">

										<p>
											The Default button
											<code>
												.btn .btn-default
											</code>
										</p>
										<a href="javascript:void(0);" class="btn sa-btn-primary">Default button</a>&nbsp;<a href="javascript:void(0);" class="btn btn-default">Default button</a>
										<hr class="simple">

										<p>
											Small button for elegance
											<code>
												.btn .btn-sm
											</code>
										</p>
										<a href="javascript:void(0);" class="btn sa-btn-primary btn-sm">Small button</a>&nbsp;<a href="javascript:void(0);" class="btn btn-default btn-sm">Small button</a>
										<hr class="simple">

										<p>
											Extra small button for added info
											<code>
												.btn .btn-xs
											</code>
										</p>
										<a href="javascript:void(0);" class="btn sa-btn-primary btn-xs">Mini button</a>&nbsp;<a href="javascript:void(0);" class="btn btn-default btn-xs">Mini button</a>

									</div>
									<!-- end widget content -->

								</div>
								<!-- end widget div -->

							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-4" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

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
										<span class="widget-icon"> <i class="fa fa-hand-o-up"></i> </span>
										<h2>Circle Buttons </h2>
									</div>
								</header>

								<!-- widget div-->
								<div>

									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->

									</div>
									<!-- end widget edit box -->

									<!-- widget content -->
									<div class="widget-body">

										<p>
											Extra Large round buttons
											<code>
												.btn-circle .btn-xl
											</code>
										</p>
										<ul class="demo-btns list-inline">
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn sa-btn-primary btn-circle btn-xl"><i class="fa fa-list"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default btn-circle btn-xl"><i class="fa fa-check"></i></a>
											</li>
										</ul>

										<p>
											Large round buttons
											<code>
												.btn-circle .btn-lg
											</code>
										</p>
										<ul class="demo-btns list-inline">
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn sa-btn-primary btn-circle btn-lg"><i class="fa fa-list"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default btn-circle btn-lg"><i class="fa fa-check"></i></a>
											</li>
										</ul>

										<p>
											Default round buttons
											<code>
												.btn-circle
											</code>
										</p>
										<ul class="demo-btns list-inline">
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn sa-btn-primary btn-circle"><i class="fa fa-list"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default btn-circle"><i class="fa fa-check"></i></a>
											</li>
										</ul>

									</div>
									<!-- end widget content -->

								</div>
								<!-- end widget div -->

							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-6" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

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
										<span class="widget-icon"> <i class="fa fa-hand-o-up"></i> </span>
										<h2>Drop Down buttons </h2>
									</div>
								</header>

								<!-- widget div-->
								<div>

									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->

									</div>
									<!-- end widget edit box -->

									<!-- widget content -->
									<div class="widget-body">

										<p>
											Button group with dropup/dropdown toggle
											<code>
												.btn-group
											</code>
										</p>

										<div class="btn-group">
											<button class="btn sa-btn-primary">
												Drop Down
											</button>
											<button class="btn sa-btn-primary dropdown-toggle" data-toggle="dropdown">
												
											</button>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</li>
												<li class="dropdown-divider"></li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
												</li>
											</ul>
										</div>
										<div class="btn-group dropup">
											<button class="btn btn-default">
												Drop Up
											</button>
											<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
												
											</button>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</li>
												<li class="dropdown-divider"></li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
												</li>
											</ul>
										</div>

										<hr class="simple">

										<p>
											Default button dropdowns
											<code>
												.dropdown-toggle
											</code>
										</p>

										<div class="btn-group">
											<button class="btn sa-btn-primary dropdown-toggle" data-toggle="dropdown">
												Action 
											</button>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</li>
												<li class="dropdown-divider"></li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
												</li>
											</ul>
										</div>
										<div class="btn-group">
											<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
												Action 
											</button>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</li>
												<li class="dropdown-divider"></li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
												</li>
											</ul>
										</div>
										<hr class="simple">
										<p>
											Smaller button dropdowns
											<code>
												.btn-sm .dropdown-toggle
											</code>
										</p>
										<div class="btn-group">
											<button class="btn sa-btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
												Action 
											</button>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</li>
												<li class="dropdown-divider"></li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
												</li>
											</ul>
										</div>
										<div class="btn-group">
											<button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
												Action 
											</button>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</li>
												<li class="dropdown-divider"></li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
												</li>
											</ul>
										</div>
										<hr class="simple">

										<p>
											Extra small button dropdowns
											<code>
												.btn-xs .dropdown-toggle
											</code>
										</p>
										<div class="btn-group">
											<button class="btn sa-btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
												Action 
											</button>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</li>
												<li class="dropdown-divider"></li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
												</li>
											</ul>
										</div>
										<div class="btn-group">
											<button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
												Action 
											</button>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</li>
												<li class="dropdown-divider"></li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
												</li>
											</ul>
										</div>

										<hr class="simple">
										<h3>Multiple Level Dropdown <small><span class="label label-warning">New!</span></small></h3>
										<p>
											Custom created Multiple Level dropdown that works with ease! Simply use the class
											<code>
												.dropdown-menu .multi-level
											</code>
										</p>
										<div class="dropdown">
											<a id="dLabel" role="button" data-toggle="dropdown" class="btn sa-btn-primary dropdown-toggle" data-target="#" href="javascript:void(0);"> Multi Level  </a>
											<ul class="dropdown-menu multi-level" role="menu">
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Some action</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0);">Some other action</a>
												</li>
												<li class="dropdown-divider"></li>
												<li class="dropdown-submenu">
													<a tabindex="-1" href="javascript:void(0);">Hover me for more options</a>
													<ul class="dropdown-menu">
														<li>
															<a tabindex="-1" href="javascript:void(0);">Second level</a>
														</li>
														<li class="dropdown-submenu">
															<a href="javascript:void(0);">Even More..</a>
															<ul class="dropdown-menu">
																<li>
																	<a href="javascript:void(0);">3rd level</a>
																</li>
																<li>
																	<a href="javascript:void(0);">3rd level</a>
																</li>
															</ul>
														</li>
														<li>
															<a href="javascript:void(0);">Second level</a>
														</li>
														<li>
															<a href="javascript:void(0);">Second level</a>
														</li>
													</ul>
												</li>
											</ul>
										</div>

									</div>
									<!-- end widget content -->

								</div>
								<!-- end widget div -->

							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-8" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

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
										<span class="widget-icon"> <i class="fa fa-hand-o-up"></i> </span>
										<h2>Button Groups </h2>
									</div>
								</header>

								<!-- widget div-->
								<div>

									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->

									</div>
									<!-- end widget edit box -->

									<!-- widget content -->
									<div class="widget-body">

										<p>
											Group a series of buttons together on a single line with the button group. Wrap a series of buttons with
											<code>
												.btn
											</code>
											in
											<code>
												.btn-group
											</code>
											.
										</p>

										<div class="row">
											<div class="col-md-12">
												<table class="table table-bordered">
													<thead>
														<tr>
															<th style="width:25%">Horizontal Group</th>
															<th style="width:25%">With Icons</th>
															<th style="width:50%">Multiple Button Groups</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
															<div class="btn-group">
																<button type="button" class="btn btn-default">
																	Left
																</button>
																<button type="button" class="btn btn-default">
																	Middle
																</button>
																<button type="button" class="btn btn-default">
																	Right
																</button>
															</div></td>
															<td>
															<div class="btn-group">
																<button type="button" class="btn btn-default">
																	<i class="fa fa-align-left"></i>
																</button>
																<button type="button" class="btn btn-default">
																	<i class="fa fa-align-center"></i>
																</button>
																<button type="button" class="btn btn-default">
																	<i class="fa fa-align-right"></i>
																</button>
																<button type="button" class="btn btn-default">
																	<i class="fa fa-align-justify"></i>
																</button>
															</div></td>
															<td>
																<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
																	<div class="btn-group mr-2" role="group" aria-label="First group">
																		<button type="button" class="btn btn-default">1</button>
																		<button type="button" class="btn btn-default">2</button>
																		<button type="button" class="btn btn-default">3</button>
																		<button type="button" class="btn btn-default">4</button>
																	</div>
																	<div class="btn-group mr-2" role="group" aria-label="Second group">
																		<button type="button" class="btn btn-default">5</button>
																		<button type="button" class="btn btn-default">6</button>
																		<button type="button" class="btn btn-default">7</button>
																	</div>
																	<div class="btn-group" role="group" aria-label="Third group">
																		<button type="button" class="btn btn-default">8</button>
																	</div>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>

										<hr class="simple">
										<p>
											Make a set of buttons appear vertically stacked rather than horizontally by putting it in
											<code>
												.btn-group-vertical
											</code>
											.
										</p>

										<div class="row">
											<div class="col-md-12">
												<table class="table table-bordered">
													<thead>
														<tr>
															<th style="width:25%">Vertical Group</th>
															<th style="width:25%">With Dropdown</th>
															<th style="width:25%">With Icons</th>
															<th style="width:25%">Multiple Button Groups</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
															<div class="btn-group-vertical">
																<button type="button" class="btn btn-default">
																	Top
																</button>
																<button type="button" class="btn btn-default">
																	Middle
																</button>
																<button type="button" class="btn btn-default">
																	Bottom
																</button>
															</div></td>
															<td>
															<div class="btn-group-vertical">
																<button type="button" class="btn sa-btn-primary">
																	Button 1
																</button>
																<button type="button" class="btn sa-btn-primary">
																	Button 2
																</button>
																<button type="button" class="btn sa-btn-primary">
																	Button 3
																</button>
																<button type="button" class="btn sa-btn-primary dropdown-toggle" data-toggle="dropdown">
																	Dropdown
																</button>
																<ul class="dropdown-menu">
																	<li>
																		<a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
																	</li>
																</ul>
															</div></td>
															<td>
															<div class="btn-group-vertical">
																<a class="btn btn-default" href="javascript:void(0);"><i class="fa fa-align-left"></i></a>
																<a class="btn btn-default" href="javascript:void(0);"><i class="fa fa-align-center"></i></a>
																<a class="btn btn-default" href="javascript:void(0);"><i class="fa fa-align-right"></i></a>
																<a class="btn btn-default" href="javascript:void(0);"><i class="fa fa-align-justify"></i></a>
															</div></td>
															<td>
															<div class="btn-toolbar">
																<div class="btn-group-vertical">
																	<button type="button" class="btn sa-btn-primary">
																		Page 1
																	</button>
																	<button type="button" class="btn sa-btn-primary">
																		Page 2
																	</button>
																	<button type="button" class="btn sa-btn-primary">
																		Page 3
																	</button>
																	<button type="button" class="btn sa-btn-primary">
																		Page 4
																	</button>
																</div>

															</div></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>

									</div>
									<!-- end widget content -->

								</div>
								<!-- end widget div -->

							</div>
							<!-- end widget -->

						</article>
						<!-- WIDGET END -->

						<!-- NEW WIDGET START -->
						<article class="col-xl-6">

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

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
										<span class="widget-icon"> <i class="fa fa-hand-o-up"></i> </span>
										<h2> Mix and match colors </h2>
									</div>
								</header>

								<!-- widget div-->
								<div>

									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->

									</div>
									<!-- end widget edit box -->

									<!-- widget content -->
									<div class="widget-body">

										<p class="alert alert-info">
											Custom buttons with core CSS elements. Mix and match existing classes to come up with unique style buttons.
											<strong>For example:</strong>
											<code>
												.btn .bg-blue-light .text-white
											</code>

										</p>

										<ul class="demo-btns list-inline">
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-blue-light text-white">.bg-blue-light</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-blue text-white">.bg-blue</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-teal text-white">.bg-teal</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-blue-dark text-white">.bg-blue-dark</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-green text-white">.bg-green</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-green-dark text-white">.bg-green-dark</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-green-light text-white">.bg-green-light</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-purple text-white">.bg-purple</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-magenta text-white">.bg-magenta</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-pink text-white">.bg-pink</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-pink-dark text-white">.bg-pink-dark</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-yellow text-white">.bg-yellow</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-orange text-white">.bg-orange</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-red text-white">.bg-red</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-red-light text-white">.bg-red-light</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default text-dark">.btn-default</a>
											</li>
										</ul>

									</div>
									<!-- end widget content -->

								</div>
								<!-- end widget div -->

							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-3" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

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
										<span class="widget-icon"> <i class="fa fa-hand-o-up"></i> </span>
										<h2> Mix and match colors </h2>
									</div>
								</header>

								<!-- widget div-->
								<div>

									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->

									</div>
									<!-- end widget edit box -->

									<!-- widget content -->
									<div class="widget-body">

										<p class="alert alert-info">
											Custom text colors can also be applied
											<strong>For example:</strong>
											<code>
												.text-red
											</code>

										</p>

										<ul class="demo-btns list-inline">
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default text-blue-light"><i class="fa fa-gear fa-lg"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default text-blue"><i class="fa fa-gear fa-lg"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default text-teal"><i class="fa fa-gear fa-lg"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default text-blue-dark"><i class="fa fa-gear fa-lg"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default text-green"><i class="fa fa-gear fa-lg"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default text-green-dark"><i class="fa fa-gear fa-lg"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default text-green-light"><i class="fa fa-gear fa-lg"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default text-purple"><i class="fa fa-gear fa-lg"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default text-magenta"><i class="fa fa-gear fa-lg"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default text-pink"><i class="fa fa-gear fa-lg"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default text-pink-dark"><i class="fa fa-gear fa-lg"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default text-yellow"><i class="fa fa-gear fa-lg"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default text-orange"><i class="fa fa-gear fa-lg"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default text-red"><i class="fa fa-gear fa-lg"></i></a>
											</li>

										</ul>

										<hr class="simple">
										<p>
											Mix and match color with backgrounds
											<code>
												.btn .bg-blue-light .text-magenta
											</code>
										</p>
										<ul class="demo-btns list-inline">
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-blue-light text-magenta"><i class="fa fa-gear fa-lg"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-blue-dark text-teal"><i class="fa fa-gear fa-3x"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn bg-red text-white"><i class="fa fa-gear fa-4x fa-spin"></i></a>
											</li>
										</ul>

									</div>
									<!-- end widget content -->

								</div>
								<!-- end widget div -->

							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-5" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

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
										<span class="widget-icon"> <i class="fa fa-hand-o-up"></i> </span>
										<h2>Button with icons </h2>
									</div>
								</header>

								<!-- widget div-->
								<div>

									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->

									</div>
									<!-- end widget edit box -->

									<!-- widget content -->
									<div class="widget-body">

										<p>
											Default buttons have a single line of text with or without one or two icons aligned left or right.
										</p>
										<ul class="demo-btns list-inline">
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn sa-btn-primary"><i class="fa fa-gear"></i> Icon Left</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn sa-btn-success"><i class="fa fa-gear"></i> Both Sides <i class="fa fa-gear"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn sa-btn-danger">Icon Right <i class="fa fa-gear"></i></a>
											</li>
										</ul>
										<ul class="demo-btns list-inline">
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default"><i class="fa fa-gear"></i> Icon Left</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default"><i class="fa fa-gear"></i> Both Sides <i class="fa fa-gear"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default">Icon Right <i class="fa fa-gear"></i></a>
											</li>
										</ul>

										<hr class="simple">

										<ul class="demo-btns list-inline">
											<li class="list-inline-item">

												<div class="btn-group">
													<button class="btn bg-blue-dark text-white">
														<i class="fa fa-gear"></i> Drop Down
													</button>
													<button class="btn sa-btn-primary dropdown-toggle">
														
													</button>
												</div>

											</li>
											<li class="list-inline-item">

												<div class="btn-group">
													<button class="btn bg-blue-dark text-white">
														<i class="fa fa-gear"></i> Drop Down <i class="fa fa-gear"></i>
													</button>
													<button class="btn sa-btn-success dropdown-toggle">
														
													</button>
												</div>

											</li>
											<li class="list-inline-item">

												<div class="btn-group">
													<button class="btn bg-blue-dark text-white">
														Drop Down <i class="fa fa-gear"></i>
													</button>
													<button class="btn sa-btn-danger dropdown-toggle">
														
													</button>
												</div>

											</li>
										</ul>

										<ul class="demo-btns list-inline">
											<li class="list-inline-item">

												<div class="btn-group">
													<button class="btn btn-default">
														<i class="fa fa-gear"></i> Drop Down
													</button>
													<button class="btn btn-default dropdown-toggle">
														
													</button>
												</div>

											</li>
											<li class="list-inline-item">

												<div class="btn-group">
													<button class="btn btn-default">
														<i class="fa fa-gear"></i> Drop Down <i class="fa fa-gear"></i>
													</button>
													<button class="btn btn-default dropdown-toggle">
														
													</button>
												</div>

											</li>
											<li class="list-inline-item">

												<div class="btn-group">
													<button class="btn btn-default">
														Drop Down <i class="fa fa-gear"></i>
													</button>
													<button class="btn btn-default dropdown-toggle">
														
													</button>
												</div>

											</li>
										</ul>

										<hr class="simple">

										<ul class="demo-btns list-inline">

											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn sa-btn-primary btn-xs"><i class="fa fa-gear"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-default btn-sm"><i class="fa fa-gear fa-lg"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn sa-btn-primary"><i class="fa fa-gear fa-lg"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn sa-btn-primary btn-lg"><i class="fa fa-gear fa-lg"></i></a>
											</li>

										</ul>

										<ul class="demo-btns list-inline">

											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn dropdown-toggle sa-btn-primary btn-xs"><i class="fa fa-gear"></i> </a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn dropdown-toggle btn-default btn-sm"><i class="fa fa-gear fa-lg"></i> </a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn dropdown-toggle sa-btn-primary"><i class="fa fa-gear fa-lg"></i> </a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn dropdown-toggle sa-btn-primary btn-lg"><i class="fa fa-gear fa-lg"></i> </a>
											</li>

										</ul>

									</div>
									<!-- end widget content -->

								</div>
								<!-- end widget div -->

							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-7" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

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
										<span class="widget-icon"> <i class="fa fa-hand-o-up"></i> </span>
										<h2>Label Buttons </h2>
									</div>
								</header>

								<!-- widget div-->
								<div>

									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->

									</div>
									<!-- end widget edit box -->

									<!-- widget content -->
									<div class="widget-body">

										<ul class="demo-btns list-inline">
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-labeled sa-btn-success"> <span class="btn-label"><i class="fa fa-check"></i></span>Success </a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-labeled sa-btn-danger"> <span class="btn-label"><i class="fa fa-remove"></i></span>Cancel </a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-labeled sa-btn-warning"> <span class="btn-label"><i class="fa fa-bookmark"></i></span>Bookmark </a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-labeled sa-btn-primary"> <span class="btn-label"><i class="fa fa-camera"></i></span>Camera </a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-labeled btn-default"> <span class="btn-label"><i class="fa fa-chevron-left"></i></span>Left </a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-labeled btn-default"> <span class="btn-label"><i class="fa fa-chevron-right"></i></span> Right </a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-labeled sa-btn-success"> <span class="btn-label"><i class="fa fa-thumbs-up"></i></span>Thumbs
												Up </a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-labeled sa-btn-danger"> <span class="btn-label"><i class="fa fa-thumbs-down"></i></span>Thumbs
												Down </a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-labeled sa-btn-info"> <span class="btn-label"><i class="fa fa-refresh"></i></span>Refresh </a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);" class="btn btn-labeled sa-btn-danger"> <span class="btn-label"><i class="fa fa-trash"></i></span>Trash </a>
											</li>
											<li class="list-inline-item">
												<a class="btn btn-success btn-labeled" href="javascript:void(0);"> <span class="btn-label"><i class="fa fa-info"></i></span>Info Web </a>
											</li>

										</ul>
										<pre>
&lt;button type="button" class="btn btn-labeled btn-success">
 &lt;span class="btn-label">
  &lt;i class="fa fa-check">&lt;/i>
 &lt;/>Success
&lt;/button>
</pre>
										


									</div>
									<!-- end widget content -->

								</div>
								<!-- end widget div -->

							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-9" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

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
										<span class="widget-icon"> <i class="fa fa-hand-o-up"></i> </span>
										<h2>Block Buttons </h2>
									</div>
								</header>

								<!-- widget div-->
								<div>

									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->

									</div>
									<!-- end widget edit box -->

									<!-- widget content -->
									<div class="widget-body">
										<p>
											Block buttons
											<code>
												.btn .btn-block
											</code>
										</p>

										<div class="well">
											<button type="button" class="btn sa-btn-primary btn-lg btn-block">
												Block level button
											</button>
											<button type="button" class="btn btn-default btn-sm btn-block">
												Block level small button
											</button>
											<button type="button" class="btn btn-default btn-xs btn-block">
												Block level extra small button
											</button>
										</div>

										<hr class="simple">

										<p>
											Block group buttons
											<code>
												.btn-group .btn-group-justified
											</code>
										</p>

										<div class="well">

											<div class="btn-group btn-group-justified">
												<a href="javascript:void(0);" class="btn btn-default">Left</a>
												<a href="javascript:void(0);" class="btn btn-default">Middle</a>
												<a href="javascript:void(0);" class="btn btn-default">Right</a>
											</div>
											
										</div>

									</div>
									<!-- end widget content -->

								</div>
								<!-- end widget div -->

							</div>
							<!-- end widget -->

						</article>
						<!-- WIDGET END -->

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


</body>
</html>