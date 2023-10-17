<!DOCTYPE html>
<!-- 
Jampack
Author: Hencework
Contact: contact@hencework.com
-->
<html lang="en">
<head>
    <!-- Meta Tags -->
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chats | Jampack - Admin CRM Dashboard Template</title>
    <meta name="description" content="A modern CRM Dashboard Template with reusable and flexible components for your SaaS web applications by hencework. Based on Bootstrap."/>
    
	<!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
   	<!-- Wrapper -->
	<div class="hk-wrapper" data-layout="vertical" data-layout-style="collapsed" data-menu="light" data-footer="simple" data-hover="active">
		<!-- Top Navbar -->
		<nav class="hk-navbar navbar navbar-expand-xl navbar-light fixed-top">
			<div class="container-fluid">
			<!-- Start Nav -->
			<div class="nav-start-wrap">
				<button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span></button>
					
				<!-- Search -->
				<form class="dropdown navbar-search">
					<div class="dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside">
						<a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover  d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="search"></i></span></span></a>
						<div class="input-group d-xl-flex d-none">
							<span class="input-affix-wrapper input-search affix-border">
								<input type="text" class="form-control  bg-transparent"  data-navbar-search-close="false" placeholder="Search..." aria-label="Search">
								<span class="input-suffix"><span>/</span>
									<span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
									<span class="spinner-border spinner-border-sm input-loader text-primary" role="status">
										<span class="sr-only">Loading...</span>
									</span>
								</span>
							</span>
						</div>
					</div>
					<div  class="dropdown-menu p-0">
						<!-- Mobile Search -->
						<div class="dropdown-item d-xl-none bg-transparent">
							<div class="input-group mobile-search">
								<span class="input-affix-wrapper input-search">
									<input type="text" class="form-control" placeholder="Search..." aria-label="Search">
									<span class="input-suffix">
										<span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
										<span class="spinner-border spinner-border-sm input-loader text-primary" role="status">
											<span class="sr-only">Loading...</span>
										</span>
									</span>
								</span>
							</div>
						</div>
						<!--/ Mobile Search -->
						<div data-simplebar class="dropdown-body p-2">
							<h6 class="dropdown-header">Recent Search
							</h6>
							<div class="dropdown-item bg-transparent">
								<a href="#" class="badge badge-pill badge-soft-secondary">Grunt</a>
								<a href="#" class="badge badge-pill badge-soft-secondary">Node JS</a>
								<a href="#" class="badge badge-pill badge-soft-secondary">SCSS</a>
							</div>
							<div class="dropdown-divider"></div>
							<h6 class="dropdown-header">Help
							</h6>
							<a href="javascript:void(0);" class="dropdown-item">
								<div class="media align-items-center">
									<div class="media-head me-2">
										<div class="avatar avatar-icon avatar-xs avatar-soft-light avatar-rounded">
											<span class="initial-wrap">
												<span class="svg-icon">
													<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
														<path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
													 </svg>
												</span>
											</span>
										</div>
									</div>
									<div class="media-body">
										How to setup theme?
									</div>
								</div>
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<div class="media align-items-center">
									<div class="media-head me-2">
										<div class="avatar avatar-icon avatar-xs avatar-soft-light avatar-rounded">
											<span class="initial-wrap">
												<span class="svg-icon">
													<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
														<path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
													 </svg>
												</span>
											</span>
										</div>
									</div>
									<div class="media-body">
										View detail documentation
									</div>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<h6 class="dropdown-header">Users
							</h6>
							<a href="javascript:void(0);" class="dropdown-item">
								<div class="media align-items-center">
									<div class="media-head me-2">
										<div class="avatar avatar-xs avatar-rounded">
											<img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
										</div>
									</div>
									<div class="media-body">
										Sarah Jone
									</div>
								</div>
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<div class="media align-items-center">
									<div class="media-head me-2">
										<div class="avatar avatar-xs avatar-soft-primary avatar-rounded">
											<span class="initial-wrap">J</span>
										</div>
									</div>
									<div class="media-body">
										Joe Jackson
									</div>
								</div>
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<div class="media align-items-center">
									<div class="media-head me-2">
										<div class="avatar avatar-xs avatar-rounded">
											<img src="dist/img/avatar4.jpg" alt="user" class="avatar-img">
										</div>
									</div>
									<div class="media-body">
										Maria Richard
									</div>
								</div>
							</a>
						</div>
						<div class="dropdown-footer d-xl-flex d-none"><a href="#"><u>Search all</u></a></div>
					</div>
				</form>
				<!-- /Search -->
			</div>
			<!-- /Start Nav -->
			
			<!-- End Nav -->
			<div class="nav-end-wrap">
				<ul class="navbar-nav flex-row">
					<li class="nav-item">
						<a href="email.html" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover"><span class="icon"><span class=" position-relative"><span class="feather-icon"><i data-feather="inbox"></i></span><span class="badge badge-sm badge-soft-primary badge-sm badge-pill position-top-end-overflow-1">4</span></span></span></a>
					</li>
					<li class="nav-item">
						<div class="dropdown dropdown-notifications">
							<a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation role="button" aria-haspopup="true" aria-expanded="false"><span class="icon"><span class="position-relative"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge badge-success badge-indicator position-top-end-overflow-1"></span></span></span></a>
							<div class="dropdown-menu dropdown-menu-end p-0">
								<h6 class="dropdown-header px-4 fs-6">Notifications<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"><span class="icon"><span class="feather-icon"><i data-feather="settings"></i></span></span></a>
								</h6>
								<div data-simplebar class="dropdown-body  p-2">
									<a href="javascript:void(0);" class="dropdown-item">
										<div class="media">
											<div class="media-head">
												<div class="avatar avatar-rounded avatar-sm">
													<img src="dist/img/avatar2.jpg" alt="user" class="avatar-img">
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="notifications-text">Morgan Freeman accepted your invitation to join the team</div>
													<div class="notifications-info">
														<span class="badge badge-soft-success">Collaboration</span>
														<div class="notifications-time">Today, 10:14 PM</div>
													</div>
												</div>
											</div>
										</div>
									</a>
									<a href="javascript:void(0);" class="dropdown-item">
										<div class="media">
											<div class="media-head">
												<div class="avatar  avatar-icon avatar-sm avatar-success avatar-rounded">
													<span class="initial-wrap">
														<span class="feather-icon"><i data-feather="inbox"></i></span>
													</span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="notifications-text">New message received from Alan Rickman</div>
													<div class="notifications-info">
														<div class="notifications-time">Today, 7:51 AM</div>
													</div>
												</div>
											</div>
										</div>
									</a>
									<a href="javascript:void(0);" class="dropdown-item">
										<div class="media">
											<div class="media-head">
												<div class="avatar  avatar-icon avatar-sm avatar-pink avatar-rounded">
													<span class="initial-wrap">
														<span class="feather-icon"><i data-feather="clock"></i></span>
													</span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="notifications-text">You have a follow up with Jampack Head on Friday, Dec 19 at 9:30 am</div>
													<div class="notifications-info">
														<div class="notifications-time">Yesterday, 9:25 PM</div>
													</div>
												</div>
											</div>
										</div>
									</a>
									<a href="javascript:void(0);" class="dropdown-item">
										<div class="media">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded">
													<img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="notifications-text">Application of Sarah Williams is waiting for your approval</div>
													<div class="notifications-info">
														<div class="notifications-time">Today 10:14 PM</div>
													</div>
												</div>
											</div>
										</div>
									</a>
									<a href="javascript:void(0);" class="dropdown-item">
										<div class="media">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded">
													<img src="dist/img/avatar10.jpg" alt="user" class="avatar-img">
												</div>
											</div>
											<div class="media-body">
												<div>	
													<div class="notifications-text">Winston Churchil shared a document with you</div>
													<div class="notifications-info">
														<span class="badge badge-soft-violet">File Manager</span>
														<div class="notifications-time">2 Oct, 2021</div>
													</div>
												</div>
											</div>
										</div>
									</a>
									<a href="javascript:void(0);" class="dropdown-item">
										<div class="media">
											<div class="media-head">
												<div class="avatar  avatar-icon avatar-sm avatar-danger avatar-rounded">
													<span class="initial-wrap">
														<span class="feather-icon"><i data-feather="calendar"></i></span>
													</span>
												</div>
											</div>
											<div class="media-body">
												<div>	
													<div class="notifications-text">Last 2 days left for the project to be completed</div>
													<div class="notifications-info">
														<span class="badge badge-soft-orange">Updates</span>
														<div class="notifications-time">14 Sep, 2021</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-footer"><a href="#"><u>View all notifications</u></a></div>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<div class="dropdown ps-2">
							<a class=" dropdown-toggle no-caret" href="#" role="button" data-bs-display="static" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside" aria-expanded="false">
								<div class="avatar avatar-rounded avatar-xs">
									<img src="dist/img/avatar12.jpg" alt="user" class="avatar-img">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<div class="p-2">
									<div class="media">
										<div class="media-head me-2">
											<div class="avatar avatar-primary avatar-sm avatar-rounded">
												<span class="initial-wrap">Hk</span>
											</div>
										</div>
										<div class="media-body">
											<div class="dropdown">
												<a href="#" class="d-block dropdown-toggle link-dark fw-medium"  data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="inside">Hencework</a>
												<div class="dropdown-menu dropdown-menu-end">
													<div class="p-2">
														<div class="media align-items-center active-user mb-3">
															<div class="media-head me-2">
																<div class="avatar avatar-primary avatar-xs avatar-rounded">
																	<span class="initial-wrap">Hk</span>
																</div>
															</div>
															<div class="media-body">
																<a href="#" class="d-flex align-items-center link-dark">Hencework <i class="ri-checkbox-circle-fill fs-7 text-primary ms-1"></i></a>
																<a href="#" class="d-block fs-8 link-secondary"><u>Manage your account</u></a>
															</div>
														</div>
														<div class="media align-items-center mb-3">
															<div class="media-head me-2">
																<div class="avatar avatar-xs avatar-rounded">
																	<img src="dist/img/avatar12.jpg" alt="user" class="avatar-img">
																</div>
															</div>
															<div class="media-body">
																<a href="#" class="d-block link-dark">Jampack Team</a>
																<a href="#" class="d-block fs-8 link-secondary">contact@hencework.com</a>
															</div>
														</div>
														<button class="btn btn-block btn-outline-light btn-sm">
															<span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span>
															<span>Add Account</span></span>
														</button>
													</div>
												</div>
											</div>
											<div class="fs-7">contact@hencework.com</div>
											<a href="#" class="d-block fs-8 link-secondary"><u>Sign Out</u></a>
										</div>
									</div>
								</div>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="profile.html">Profile</a>
								<a class="dropdown-item" href="#"><span class="me-2">Offers</span><span class="badge badge-sm badge-soft-pink">2</span></a><div class="dropdown-divider"></div>
								<h6 class="dropdown-header">Manage Account</h6>
								<a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="credit-card"></i></span><span>Payment methods</span></a>
								<a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="check-square"></i></span><span>Subscriptions</span></a>
								<a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="settings"></i></span><span>Settings</span></a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="tag"></i></span><span>Raise a ticket</span></a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Terms & Conditions</a>
								<a class="dropdown-item" href="#">Help & Support</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- /End Nav -->
			</div>									
		</nav>
		<!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <div class="hk-menu">
			<!-- Brand -->
			<div class="menu-header">
				<span>
					<a class="navbar-brand" href="index.html">
						<img class="brand-img img-fluid" src="dist/img/brand-sm.svg" alt="brand" />
						<img class="brand-img img-fluid" src="dist/img/Jampack.svg" alt="brand" />
					</a>
					<button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
						<span class="icon">
							<span class="svg-icon fs-5">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
									<line x1="10" y1="12" x2="20" y2="12"></line>
									<line x1="10" y1="12" x2="14" y2="16"></line>
									<line x1="10" y1="12" x2="14" y2="8"></line>
									<line x1="4" y1="4" x2="4" y2="20"></line>
								</svg>
							</span>
						</span>
					</button>
				</span>
			</div>
			<!-- /Brand -->

			<!-- Main Menu -->
			<div data-simplebar class="nicescroll-bar">
				<div class="menu-content-wrap">
					<div class="menu-group">
						<ul class="navbar-nav flex-column">
							<li class="nav-item">
								<a class="nav-link" href="index.html">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-template" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<rect x="4" y="4" width="16" height="4" rx="1" />
												<rect x="4" y="12" width="6" height="8" rx="1" />
												<line x1="14" y1="12" x2="20" y2="12" />
												<line x1="14" y1="16" x2="20" y2="16" />
												<line x1="14" y1="20" x2="20" y2="20" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Dashboard</span>
									<span class="badge badge-sm badge-soft-pink ms-auto">Hot</span>
								</a>
							</li>
						</ul>	
					</div>
					<div class="menu-gap"></div>
					<div class="menu-group">
						<div class="nav-header">
							<span>Apps</span>
						</div>
						<ul class="navbar-nav flex-column">
							<li class="nav-item active">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_chat">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
												<line x1="12" y1="11" x2="12" y2="11.01" />
												<line x1="8" y1="11" x2="8" y2="11.01" />
												<line x1="16" y1="11" x2="16" y2="11.01" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Chat</span>
								</a>
								<ul id="dash_chat" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item active">
												<a class="nav-link" href="chats.html"><span class="nav-link-text">Chats</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="chats-group.html"><span class="nav-link-text">Groups</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="chats-contact.html"><span class="nav-link-text">Contacts</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>	
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_chatpop">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" />
												<line x1="12" y1="12" x2="12" y2="12.01" />
												<line x1="8" y1="12" x2="8" y2="12.01" />
												<line x1="16" y1="12" x2="16" y2="12.01" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Chat Popup</span>
									
								</a>
								<ul id="dash_chatpop" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="chatpopup.html"><span class="nav-link-text">Direct Message</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="chatbot.html"><span class="nav-link-text">Chatbot</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>	
							<li class="nav-item">
								<a class="nav-link" href="calendar.html">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-time" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" />
												<circle cx="18" cy="18" r="4" />
												<path d="M15 3v4" />
												<path d="M7 3v4" />
												<path d="M3 11h16" />
												<path d="M18 16.496v1.504l1 1" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Calendar</span>
								</a>
							</li>	
							<li class="nav-item">
								<a class="nav-link" href="email.html">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-inbox" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<rect x="4" y="4" width="16" height="16" rx="2" />
												<path d="M4 13h3l3 3h4l3 -3h3" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Email</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_scrumboard">
									<span class="nav-icon-wrap position-relative">
										<span class="badge badge-sm badge-primary badge-sm badge-pill position-top-end-overflow">3</span>
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-kanban" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<line x1="4" y1="4" x2="10" y2="4" />
												<line x1="14" y1="4" x2="20" y2="4" />
												<rect x="4" y="8" width="6" height="12" rx="2" />
												<rect x="14" y="8" width="6" height="6" rx="2" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Scrumboard</span>
								</a>
								<ul id="dash_scrumboard" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="projects-board.html"><span class="nav-link-text">All Boards</span></a>
											</li>
											
											<li class="nav-item">
												<a class="nav-link" href="kanban-board.html"><span class="nav-link-text">Project Kanban</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="pipeline.html"><span class="nav-link-text">Pipeline Kanban</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_contact">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
												<line x1="13" y1="8" x2="15" y2="8" />
												<line x1="13" y1="12" x2="15" y2="12" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Contact</span>
								</a>
								<ul id="dash_contact" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="contact.html"><span class="nav-link-text">Contact List</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="contact-cards.html"><span class="nav-link-text">Contact Cards</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="edit-contact.html"><span class="nav-link-text">Edit Contact</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_file">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M14 3v4a1 1 0 0 0 1 1h4" />
												<path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
												<path d="M9 15l2 2l4 -4" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">File Manager</span>
								</a>
								<ul id="dash_file" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="file-manager-list.html"><span class="nav-link-text">List View</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="file-manager-grid.html"><span class="nav-link-text">Grid View</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="gallery.html">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<line x1="15" y1="8" x2="15.01" y2="8" />
												<rect x="4" y="4" width="16" height="16" rx="3" />
												<path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" />
												<path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Gallery</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_task">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-details" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M13 5h8" />
												<path d="M13 9h5" />
												<path d="M13 15h8" />
												<path d="M13 19h5" />
												<rect x="3" y="4" width="6" height="6" rx="1" />
												<rect x="3" y="14" width="6" height="6" rx="1" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Todo</span>
									<span class="badge badge-soft-success ms-2">2</span>
								</a>
								<ul id="dash_task" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="tasklist.html"><span class="nav-link-text">Tasklist</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="gantt.html"><span class="nav-link-text">Gantt</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_blog">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-browser" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<rect x="4" y="4" width="16" height="16" rx="1" />
												<line x1="4" y1="8" x2="20" y2="8" />
												<line x1="8" y1="4" x2="8" y2="8" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Blog</span>
								</a>
								<ul id="dash_blog" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="posts.html"><span class="nav-link-text">Posts</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="add-new-post.html"><span class="nav-link-text">Add New Post</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="post-detail.html"><span class="nav-link-text">Post Detail</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_invoice">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-digit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M14 3v4a1 1 0 0 0 1 1h4" />
												<rect x="9" y="12" width="3" height="5" rx="1" />
												<path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
												<path d="M15 12v5" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Invoices</span>
								</a>
								<ul id="dash_invoice" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="invoice-list.html"><span class="nav-link-text">Invoice List</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="invoice-templates.html"><span class="nav-link-text">Invoice Templates</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="create-invoice.html"><span class="nav-link-text">Create Invoice</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="invoice-preview.html"><span class="nav-link-text">Invoice Preview</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_integ">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<polyline points="7 8 3 12 7 16" />
												<polyline points="17 8 21 12 17 16" />
												<line x1="14" y1="4" x2="10" y2="20" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Integrations</span>
								</a>
								<ul id="dash_integ" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="all-apps.html"><span class="nav-link-text">All Apps</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="integrations-detail.html"><span class="nav-link-text">App Detail</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="integrations.html"><span class="nav-link-text">Integrations</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
						</ul>
					</div>
					<div class="menu-gap"></div>
					<div class="menu-group">
						<div class="nav-header">
							<span>Pages</span>
						</div>
						<ul class="navbar-nav flex-column">
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_pages">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<circle cx="9" cy="7" r="4" />
												<path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
												<path d="M16 11h6m-3 -3v6" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Authentication</span>
								</a>
								<ul id="dash_pages" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_log">
													<span class="nav-link-text">Log In</span> 
												</a>
												<ul id="dash_log" class="nav flex-column collapse  nav-children">
													<li class="nav-item">
														<ul class="nav flex-column">
															<li class="nav-item">
																<a class="nav-link" href="login.html"><span class="nav-link-text">Login</span></a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="login-simple.html"><span class="nav-link-text">Login Simple</span></a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="login-classic.html"><span class="nav-link-text">Login Classic</span></a>
															</li>
														</ul>	
													</li>	
												</ul>	
											</li>
											<li class="nav-item">
												<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_sign">
													<span class="nav-link-text">Sign Up</span>
												</a>
												<ul id="dash_sign" class="nav flex-column collapse  nav-children">
													<li class="nav-item">
														<ul class="nav flex-column">
															<li class="nav-item">
																<a class="nav-link" href="signup.html"><span class="nav-link-text">Signup</span></a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="signup-simple.html"><span class="nav-link-text">Signup Simple</span></a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="signup-classic.html"><span class="nav-link-text">Signup Classic</span></a>
															</li>
														</ul>		
													</li>	
												</ul>	
											</li>
											<li class="nav-item">
												<a class="nav-link" href="lock-screen.html"><span class="nav-link-text">Lock Screen</span></a>
											</li>
											
											<li class="nav-item">
												<a class="nav-link" href="reset-password.html"><span class="nav-link-text">Reset Password</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="404.html"><span class="nav-link-text">Error 404</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="503.html"><span class="nav-link-text">Error 503</span></a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_profile">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<circle cx="12" cy="7" r="4" />
												<path d="M6 21v-2a4 4 0 0 1 4 -4h1" />
												<circle cx="16.5" cy="17.5" r="2.5" />
												<path d="M18.5 19.5l2.5 2.5" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text position-relative">Profile
										<span class="badge badge-danger badge-indicator position-absolute top-0 start-100"></span>
									</span>
								</a>
								<ul id="dash_profile" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="profile.html">
													<span class="nav-link-text">Profile</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="edit-profile.html">
													<span class="nav-link-text">Edit Profile</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="account.html">
													<span class="nav-link-text">Account</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="menu-gap"></div>
					<div class="menu-group">
						<div class="nav-header">
							<span>Documentation</span>
						</div>
						<ul class="navbar-nav flex-column">
							<li class="nav-item">
								<a class="nav-link" href="https://nubra-ui.hencework.com/" target="_blank">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-code-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M10 12h-1v5h1" />
												<path d="M14 12h1v5h-1" />
												<path d="M14 3v4a1 1 0 0 0 1 1h4" />
												<path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Documentation</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://nubra-ui.hencework.com/avatar.html" target="_blank">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<rect x="4" y="4" width="6" height="5" rx="2" />
												<rect x="4" y="13" width="6" height="7" rx="2" />
												<rect x="14" y="4" width="6" height="16" rx="2" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Components</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="callout card card-flush bg-orange-light-5 text-center mt-5 w-220p mx-auto">
						<div class="card-body">
							<h5 class="h5">Quickly Build Applications</h5>
							<p class="p-sm card-text">Exclusively for webapps Based on Bootstrap</p>
							<a href="https://nubra-ui.hencework.com/" target="_blank" class="btn btn-primary btn-block">Go Nubra-UI</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /Main Menu -->
		</div>
        <div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
        <!-- /Vertical Nav -->

		<!-- Main Content -->
		<div class="hk-pg-wrapper pb-0">
			<!-- Page Body -->
			<div class="hk-pg-body py-0">
				<div class="chatapp-wrap chatapp-info-active">
					<div class="chatapp-content">
						<div class="chatapp-aside">
							<header class="aside-header">
								<a class="chatapp-title dropdown-toggle link-dark" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
									<h1>Chat</h1>
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="chats.html"><span class="feather-icon dropdown-icon"><i data-feather="message-square"></i></span><span>Chats</span></a>
									<a class="dropdown-item" href="chats-contact.html"><span class="feather-icon dropdown-icon"><i data-feather="book"></i></span><span>Contacts</span></a>
									<a class="dropdown-item" href="chats-group.html"><span class="feather-icon dropdown-icon"><i data-feather="users"></i></span><span>Groups</span></a>
									<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Archived</span></a>
									<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="star"></i></span><span>Favorites</span></a>
								</div>
								<div class="d-flex">
									<div class="dropdown">
										<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="settings"></i></span></span></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user-check"></i></span><span>Active Contacts</span></a>
											<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="message-square"></i></span><span>Chat Requests</span></a>
											<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Archived Chats</span></a>
											<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="toggle-right"></i></span><span>Unread Chats</span></a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">Settings</a>
											<a class="dropdown-item" href="#">Help</a>
											<a class="dropdown-item" href="#">Report a problem	</a>
										</div>
									</div>
									<a href="#" class="btn btn-icon btn-rounded btn-primary" data-bs-toggle="modal" data-bs-target="#invite_people"><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></a>
								</div>
							</header>
							<div  data-simplebar class="aside-body">
								<form class="aside-search" role="search">
									<input type="text" class="form-control" placeholder="Search Chats">
								</form>
								<div class="frequent-contact">
									<div class="title-sm text-primary"><span>Frequent contact</span></div>
									<ul class="hk-list">
										<li>
											<div class="avatar avatar-sm avatar-primary position-relative avatar-rounded">
												<span class="initial-wrap">H</span>
												<div class="badge-icon badge-circle badge-icon-xxs text-white position-bottom-end-overflow-1">
													<div class="badge-icon-wrap">
														<i class="ri-group-fill text-light"></i>
													</div>
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 127 127">
														<g data-name="Ellipse 302" transform="translate(8 8)" stroke-width="3">
														<circle cx="55.5" cy="55.5" r="55.5" stroke="currentColor"></circle>
														<circle cx="55.5" cy="55.5" r="59.5" fill="currentColor"></circle>
														</g>
													</svg>
												</div>
											</div>
										</li>
										<li>
											<div class="avatar avatar-sm avatar-primary position-relative avatar-rounded">
												<img src="dist/img/avatar1.jpg" alt="user" class="avatar-img">
												<div class="badge-icon badge-circle badge-icon-xxs text-white position-bottom-end-overflow-1">
													<div class="badge-icon-wrap">
														<i class="ri-group-fill text-light"></i>
													</div>
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 127 127">
														<g data-name="Ellipse 302" transform="translate(8 8)" stroke-width="3">
														<circle cx="55.5" cy="55.5" r="55.5" stroke="currentColor"></circle>
														<circle cx="55.5" cy="55.5" r="59.5" fill="currentColor"></circle>
														</g>
													</svg>
												</div>
											</div>
										</li>
										<li>
											<div class="avatar avatar-sm avatar-soft-danger avatar-rounded position-relative">
												<span class="initial-wrap">W</span>
												<span class="badge badge-success badge-indicator badge-indicator-lg position-bottom-end-overflow-1"></span>
											</div>
										</li>
										<li>
											<div class="avatar avatar-sm avatar-rounded position-relative">
												<img src="dist/img/avatar8.jpg" alt="user" class="avatar-img">
												<span class="badge badge-success badge-indicator badge-indicator-lg position-bottom-end-overflow-1"></span>
											</div>
										</li>
										<li>
											<div class="avatar avatar-sm avatar-rounded">
												<img src="dist/img/avatar15.jpg" alt="user" class="avatar-img">
											</div>
										</li>
									</ul>
								</div>
								<ul class="chat-contacts-list list-group list-group-flush">
									<li class="list-group-item">
										<div class="media">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded position-relative">
													<img src="dist/img/avatar2.jpg" alt="user" class="avatar-img">
													<span class="badge badge-success badge-indicator badge-indicator-lg position-bottom-end-overflow-1"></span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Morgan Freeman</div>
													<div class="user-last-chat">Please send some insights of presentation</div>
												</div>	
												<div>
													<div class="last-chat-time">Yesterday</div>
													<div class="badge badge-primary badge-sm badge-pill">15</div>
													<div class="dropdown action-drp">
														<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Mute Chat</a>
															<a class="dropdown-item" href="#">Archive Chat</a>
															<a class="dropdown-item" href="#">Delete Chat</a>
															<a class="dropdown-item link-danger" href="#">Block</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div  class="media read-chat active-user">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded position-relative">
													<img src="dist/img/avatar8.jpg" alt="user" class="avatar-img">
													<span class="badge badge-success badge-indicator badge-indicator-lg position-bottom-end-overflow-1"></span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Huma Therman</div>
													<div class="user-last-chat">Typing<span class="one">.</span><span class="two">.</span><span class="three">.</span></div>
												</div>	
												<div>
													<div class="last-chat-time">10:25 PM</div>
													<div class="dropdown action-drp">
														<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Mute Chat</a>
															<a class="dropdown-item" href="#">Archive Chat</a>
															<a class="dropdown-item" href="#">Delete Chat</a>
															<a class="dropdown-item link-danger" href="#">Block</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div class="media">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded">
													<img src="dist/img/avatar13.jpg" alt="user" class="avatar-img">
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Charlie Chaplin</div>
													<div class="user-last-chat">Hello mike, thank you for inviting</div>
												</div>	
												<div>
													<div class="last-chat-time">5 min</div>
													<div class="badge badge-primary badge-sm badge-pill">2</div>
													<div class="dropdown action-drp">
														<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Mute Chat</a>
															<a class="dropdown-item" href="#">Archive Chat</a>
															<a class="dropdown-item" href="#">Delete Chat</a>
															<a class="dropdown-item link-danger" href="#">Block</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div class="media  read-chat">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-soft-danger avatar-rounded">
													<span class="initial-wrap">W</span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Winston Churchil</div>
													<div class="user-last-chat">Show me what reports you have left</div>
												</div>	
												<div>
													<div class="last-chat-time">3:15 PM</div>
													<div class="dropdown action-drp">
														<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Mute Chat</a>
															<a class="dropdown-item" href="#">Archive Chat</a>
															<a class="dropdown-item" href="#">Delete Chat</a>
															<a class="dropdown-item link-danger" href="#">Block</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div  class="media read-chat">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-primary position-relative avatar-rounded">
													<img src="dist/img/avatar1.jpg" alt="user" class="avatar-img">
													<div class="badge-icon badge-circle badge-icon-xxs text-white position-bottom-end-overflow-1">
														<div class="badge-icon-wrap">
															<i class="ri-group-fill text-light"></i>
														</div>
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 127 127">
															<g data-name="Ellipse 302" transform="translate(8 8)" stroke-width="3">
															<circle cx="55.5" cy="55.5" r="55.5" stroke="currentColor"></circle>
															<circle cx="55.5" cy="55.5" r="59.5" fill="currentColor"></circle>
															</g>
														</svg>
													</div>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">😐 Office Board</div>
													<div class="user-last-chat">Huma: great work <span class="text-primary">@jaquiline</span> you have done a great job</div>
												</div>	
												<div>
													<div class="last-chat-time">Yesterday</div>
													<div class="dropdown action-drp">
														<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Mute Chat</a>
															<a class="dropdown-item" href="#">Archive Chat</a>
															<a class="dropdown-item" href="#">Delete Chat</a>
															<a class="dropdown-item link-danger" href="#">Block</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div  class="media read-chat">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded position-relative">
													<img src="dist/img/avatar15.jpg" alt="user" class="avatar-img">
													<span class="badge badge-success badge-indicator badge-indicator-lg position-bottom-end-overflow-1"></span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Boss Baby</div>
													<div class="user-last-chat">Meeting in the morning</div>
												</div>	
												<div>
													<div class="last-chat-time">5:23 AM</div>
													<div class="dropdown action-drp">
														<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Mute Chat</a>
															<a class="dropdown-item" href="#">Archive Chat</a>
															<a class="dropdown-item" href="#">Delete Chat</a>
															<a class="dropdown-item link-danger" href="#">Block</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div  class="media read-chat">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-primary avatar-rounded">
													<span class="initial-wrap">H</span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Hencework</div>
													<div class="user-last-chat">give me the last copy of jampack</div>
												</div>	
												<div>
													<div class="last-chat-time">24 Jan</div>
													<div class="dropdown action-drp">
														<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Mute Chat</a>
															<a class="dropdown-item" href="#">Archive Chat</a>
															<a class="dropdown-item" href="#">Delete Chat</a>
															<a class="dropdown-item link-danger" href="#">Block</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div  class="media">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded position-relative">
													<img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
													<span class="badge badge-success badge-indicator badge-indicator-lg position-bottom-end-overflow-1"></span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Jaquiline Joker</div>
													<div class="user-last-chat">This is my test chat msg last one</div>
												</div>	
												<div>
													<div class="last-chat-time">4:05 AM</div>
													<div class="badge badge-primary badge-sm badge-pill">37</div>
													<div class="dropdown action-drp">
														<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Mute Chat</a>
															<a class="dropdown-item" href="#">Archive Chat</a>
															<a class="dropdown-item" href="#">Delete Chat</a>
															<a class="dropdown-item link-danger" href="#">Block</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div  class="media read-chat">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded position-relative">
													<img src="dist/img/avatar7.jpg" alt="user" class="avatar-img">
													<span class="badge badge-success badge-indicator badge-indicator-lg position-bottom-end-overflow-1"></span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Tom Cruz</div>
													<div class="user-last-chat text-danger"><span class="feather-icon fe-x me-1"><i data-feather="phone-call"></i></span>Missed call</div>
												</div>	
												<div>
													<div class="last-chat-time">7:40PM</div>
													<div class="dropdown action-drp">
														<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Mute Chat</a>
															<a class="dropdown-item" href="#">Archive Chat</a>
															<a class="dropdown-item" href="#">Delete Chat</a>
															<a class="dropdown-item link-danger" href="#">Block</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div  class="media read-chat">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded">
													<img src="dist/img/avatar9.jpg" alt="user" class="avatar-img">
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Katherine Jones</div>
													<div class="user-last-chat">Hi!!! I was wondering if you are free</div>
												</div>	
												<div>
													<div class="last-chat-time">Yesterday</div>
													<div class="dropdown action-drp">
														<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Mute Chat</a>
															<a class="dropdown-item" href="#">Archive Chat</a>
															<a class="dropdown-item" href="#">Delete Chat</a>
															<a class="dropdown-item link-danger" href="#">Block</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div  class="media read-chat">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-soft-info avatar-rounded">
													<span class="initial-wrap">D</span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Danial Craig</div>
													<div class="user-last-chat">Boss is looking for you in the office</div>
												</div>	
												<div>
													<div class="last-chat-time">3:15PM</div>
													<div class="dropdown action-drp">
														<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Mute Chat</a>
															<a class="dropdown-item" href="#">Archive Chat</a>
															<a class="dropdown-item" href="#">Delete Chat</a>
															<a class="dropdown-item link-danger" href="#">Block</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="chatapp-single-chat">
							<header class="chat-header">
								<a id="back_user_list" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover back-user-list" href="#">
									<span class="icon"><span class="feather-icon"><i data-feather="chevron-left"></i></span></span>
								</a>
								<div class="media">
									<div class="media-head">
										<div class="avatar avatar-sm avatar-rounded position-relative">
											<img src="dist/img/avatar8.jpg" alt="user" class="avatar-img">
											<span class="badge badge-success badge-indicator badge-indicator-lg position-bottom-end-overflow-1"></span>
										</div>
									</div>
									<div class="media-body">
										<div class="user-name">Huma Therman</div>
										<div class="user-status">Typing<span class="one">.</span><span class="two">.</span><span class="three">.</span></div>
									</div>
								</div>
								<div class="chat-options-wrap">	
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret d-none d-xl-block" href="#" data-bs-toggle="modal" data-bs-target="#invite_people"><span class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Invite people"><span class="feather-icon"><i data-feather="user-plus"></i></span></span></a>
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover d-none d-xl-block" href="#" data-bs-toggle="modal" data-bs-target="#audio_call"><span class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Audio call"><span class="feather-icon"><i data-feather="phone"></i></span></span></a>
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover d-none d-xl-block" href="#"  data-bs-toggle="modal" data-bs-target="#video_call"><span class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Video Call"><span class="feather-icon"><i data-feather="video"></i></span></span></a>
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover chatapp-info-toggle active" href="#"><span class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Info"><span class="feather-icon"><i data-feather="info"></i></span></span></a>
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="More"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="d-xl-none dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#invite_people"><span class="feather-icon dropdown-icon"><i data-feather="user-plus"></i></span><span>Invite People</span></a>
										<a class="d-xl-none dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#audio_call"><span class="feather-icon dropdown-icon"><i data-feather="phone"></i></span><span>Audio Call</span></a>
										<a class="d-xl-none dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#video_call"><span class="feather-icon dropdown-icon"><i data-feather="video"></i></span><span>Video Call</span></a>
										<div class="d-xl-none dropdown-divider"></div>
										<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="star"></i></span><span>Stared Messages</span></a>
										<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="archive"></i></span><span>Archive Messages</span></a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="slash"></i></span><span>Block Content</span></a>
										<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="external-link"></i></span><span>Feedback</span></a>
									</div>
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-none d-xl-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Collapse">
										<span class="icon">
											<span class="feather-icon"><i data-feather="chevron-up"></i></span>
											<span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
										</span>
									</a>
								</div>
							</header>
							<div data-simplebar id="chat_body" class="chat-body">
								<ul id="dummy_avatar" class="list-unstyled chat-single-list">
									<li class="media received">
										<div class="avatar avatar-xs avatar-rounded">
											<img src="dist/img/avatar8.jpg" alt="user" class="avatar-img">
										</div>
										<div class="media-body">
											<div class="msg-box">
												<div>
													<p>Cool, lets talk about it tomorrow</p>
													<span class="chat-time">10:52 PM</span>
												</div>
												<div class="msg-action">
													<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret"><span class="icon"><span class="feather-icon"><i data-feather="corner-up-right"></i></span></span></a>
													<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="#">Forward</a>
														<a class="dropdown-item" href="#">Copy</a>
													</div>
												</div>
											</div>
											<div class="msg-box">
												<div>
													<p>Images for new marketing pages have been sent</p>
													<span class="chat-time">10:53 PM</span>
												</div>
												<div class="msg-action">
													<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret"><span class="icon"><span class="feather-icon"><i data-feather="corner-up-right"></i></span></span></a>
													<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="#">Forward</a>
														<a class="dropdown-item" href="#">Copy</a>
													</div>
												</div>
											</div> 
										</div>
									</li>
									<li class="media media-attachment received">
										<div class="avatar avatar-xs avatar-rounded">
											<img src="dist/img/avatar8.jpg" alt="user" class="avatar-img">
										</div>
										<div class="media-body msg-docs">
											<div class="msg-box">
												<div>
													<div class="media">
														<div class="avatar avatar-icon avatar-sm avatar-blue">
															<span class="initial-wrap fs-3">
																<i class="ri-file-excel-2-fill"></i>
															</span>
														</div>
														<div class="media-body">
															<p class="file-name">Website_content.xls</p>
															<p class="file-size">2,635 KB</p>
														</div>
													</div>
													<div class="file-overlay">
														<button class="btn btn-sm btn-icon btn-rounded btn-primary"><span class="icon"><span class="feather-icon"><i data-feather="arrow-down"></i></span></span></button>
													</div>
												</div>
											</div>
											<div class="msg-box">
												<div>
													<div class="media">
														<div class="avatar avatar-icon avatar-sm avatar-warning">
															<span class="initial-wrap fs-3">
																<i class="ri-file-zip-fill"></i>
															</span>
														</div>
														<div class="media-body">
															<p class="file-name">themeforest-pack.zip</p>
															<p class="file-size">2.45 GB</p>
														</div>
													</div>
													<div class="file-overlay">
														<button class="btn btn-sm btn-icon btn-rounded btn-primary"><span class="icon"><span class="feather-icon"><i data-feather="arrow-down"></i></span></span></button>
													</div>
												</div>
												<div class="msg-action">
													<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret"><span class="icon"><span class="feather-icon"><i data-feather="corner-up-right"></i></span></span></a>
													
													<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="#">Forward</a>
														<a class="dropdown-item" href="#">Copy</a>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="day-sep">
										<span>Today</span>
									</li>
									<li class="media sent">
										<div class="media-body">
											<div class="msg-box">
												<div>
													<p>Anyways, I am working on something that you would like to know. This project is based on angular js and you are the keeda in it. I need you help in it.</p>
													<span class="chat-time">11:52 PM</span>
												</div>
												<div class="msg-action">
													<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret"><span class="icon"><span class="feather-icon"><i data-feather="corner-up-right"></i></span></span></a>
													<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="#">Forward</a>
														<a class="dropdown-item" href="#">Copy</a>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="media media-attachment received">
										<div class="avatar avatar-xs avatar-rounded">
											<img src="dist/img/avatar8.jpg" alt="user" class="avatar-img">
										</div>
										<div class="media-body msg-imgs">
											<div class="msg-box">
												<div>
													<img class="d-block img-fluid" src="dist/img/giphy.gif" alt="gif">
												</div>
												<div class="msg-action">
													<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret"><span class="icon"><span class="feather-icon"><i data-feather="corner-up-right"></i></span></span></a>
													<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="#">Forward</a>
														<a class="dropdown-item" href="#">Copy</a>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="media sent">
										<div class="media-body">
											<div class="msg-box">
												<div>
													<p>Haha, this joke is hilarious. Is it what your heart feel about the salary? 😍</p>
													<span class="chat-time">10:52 PM</span>
												</div>
												<div class="msg-action">
													<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret"><span class="icon"><span class="feather-icon"><i data-feather="corner-up-right"></i></span></span></a>
													<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="#">Forward</a>
														<a class="dropdown-item" href="#">Copy</a>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="media received">
										<div class="avatar avatar-xs avatar-rounded">
											<img src="dist/img/avatar8.jpg" alt="user" class="avatar-img">
										</div>
										<div class="media-body">
											<div class="msg-box">
												<div>
													<p>Hey Ben, just a reminder that you are coming for the meeting today in the conference. We are proposing a change in the client briefing.</p>
													<span class="chat-time">9:20 AM</span>
												</div>
												<div class="msg-action">
													<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret"><span class="icon"><span class="feather-icon"><i data-feather="corner-up-right"></i></span></span></a>
													<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="#">Forward</a>
														<a class="dropdown-item" href="#">Copy</a>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<footer class="chat-footer">
								<button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover flex-shrink-0"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="icon"><span class="feather-icon"><i data-feather="share"></i></span></span>
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">
										<div class="d-flex align-items-center">
											<div class="avatar avatar-icon avatar-xs avatar-soft-primary avatar-rounded me-3">
												<span class="initial-wrap">
													<i class="ri-image-line"></i>
												</span>
											</div>
											<div>
												<span class="h6 mb-0">Photo or Video Library</span>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="#">
										<div class="d-flex align-items-center">
											<div class="avatar avatar-icon avatar-xs avatar-soft-info avatar-rounded me-3">
												<span class="initial-wrap">
													<i class="ri-file-4-line"></i>
												</span>
											</div>
											<div>
												<span class="h6 mb-0">Documents</span>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="#">
										<div class="d-flex align-items-center">
											<div class="avatar avatar-icon avatar-xs avatar-soft-success avatar-rounded me-3">
												<span class="initial-wrap">
													<i class="ri-map-pin-line"></i>
												</span>
											</div>
											<div>
												<span class="h6 mb-0">Location</span>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="#">
										<div class="d-flex align-items-center">
											<div class="avatar avatar-icon avatar-xs avatar-soft-blue avatar-rounded me-3">
												<span class="initial-wrap">
													<i class="ri-contacts-line"></i>
												</span>
											</div>
											<div>
												<span class="h6 mb-0">Contact</span>
											</div>
										</div>
									</a>
								</div>
								<div class="input-group">
									<span class="input-affix-wrapper">
										<input type="text" id="input_msg_send_chatapp" name="send-msg" class="input-msg-send form-control rounded-input" placeholder="Type your message...">
										<span class="input-suffix">
											<button class="btn btn-icon btn-flush-primary btn-rounded btn-send">
												<span class="icon"><span class="feather-icon"><i data-feather="arrow-right"></i></span></span>
											</button>
										</span>
									</span>
								</div>
								<button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover">
									<span class="icon"><span class="feather-icon"><i data-feather="smile"></i></span></span>
								</button>
							</footer>
							<div class="chat-info">
								<div data-simplebar class="nicescroll-bar">
									<button type="button" class="info-close btn-close">
										<span aria-hidden="true">×</span>
									</button>
									<div class="text-center">
										<div class="avatar avatar-xxl avatar-rounded">
											<img src="dist/img/avatar8.jpg" alt="user" class="avatar-img">
										</div>
										<div class="cp-name text-truncate mt-2">Huma Therman</div>
										<p class="text-truncate">No phone calls Always busy</p>
									</div>
									
									<ul class="nav nav-justified nav-light nav-tabs nav-segmented-tabs active-theme mt-4">
										<li class="nav-item">
											<a class="nav-link active" data-bs-toggle="tab" href="#tab_info">
												<span class="nav-link-text">Info</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#tab_files">
												<span class="nav-link-text">Files</span>
											</a>
										</li>
									</ul>
									<div class="tab-content mt-4">
										<div class="tab-pane fade show active" id="tab_info">
											<form role="search">
												<input type="text" class="form-control" placeholder="Search in conversation">
											</form>
											<div class="collapse-simple mt-3">
												<div class="card">
													<div class="card-header">
														<a role="button" data-bs-toggle="collapse" href="#gn_info" aria-expanded="true">General Info</a>
													</div>
													<div id="gn_info" class="collapse show">
														<div class="card-body">
															<ul class="cp-info">
																<li>
																	<a href="javascript:void(0);">
																		<span class="cp-icon-wrap"><span class="feather-icon"><i data-feather="briefcase"></i></span></span>
																		Co-Founder
																	</a>
																</li>
																<li>
																	<a href="javascript:void(0);">
																		<span class="cp-icon-wrap"><span class="feather-icon"><i data-feather="mail"></i></span></span>
																		<span class="text-primary">contact@hencework.com</span>
																	</a>
																</li>
																<li>
																	<a href="javascript:void(0);">
																		<span class="cp-icon-wrap"><span class="feather-icon"><i data-feather="phone"></i></span></span>
																		+91-25-4125-2365
																	</a>
																</li>
																<li>
																	<a href="javascript:void(0);">
																		<span class="cp-icon-wrap"><span class="feather-icon"><i data-feather="map-pin"></i></span></span>
																		Oslo, Canada
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header">
														<a role="button" data-bs-toggle="collapse" href="#social_profile" aria-expanded="true">Social Profile </a>
													</div>
													<div id="social_profile" class="collapse show">
														<div class="card-body">
															<ul class="hk-list hk-list-sm">
																<li>
																	<button class="btn btn-icon btn-rounded btn-primary"><span class="icon"><i class="fab fa-behance"></i></span></button>
																</li>
																<li>
																	<button class="btn btn-icon btn-rounded btn-warning"><span class="icon"><i class="fab fa-google-drive"></i></span></button>
																</li>
																<li>
																	<button class="btn btn-icon btn-rounded btn-info"><span class="icon"><i class="fab fa-dropbox"></i></span></button>
																</li>
																<li>
																	<button class="btn btn-icon btn-rounded btn-dark"><span class="icon"><i class="fab fa-github"></i></span></button>
																</li>
																<li>
																	<button class="btn btn-icon btn-rounded btn-danger"><span class="icon"><i class="fab fa-google"></i></span></button>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header">
														<a role="button" data-bs-toggle="collapse" href="#biography" aria-expanded="true">Biography </a>
													</div>
													<div id="biography" class="collapse show">
														<div class="card-body">
															<p>Hello there, Huma Therman is a brilliant co-founder and a copy writer working for almost a decade for fortune 500 companies. I am well verse with multiple foreign languages and I love to produce good quality stuff. </p>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header">
														<a role="button" data-bs-toggle="collapse" href="#settings" aria-expanded="true">Settings </a>
													</div>
													<div id="settings" class="collapse show">
														<div class="card-body">
															<ul class="cp-action">
																<li>
																	<a href="javascript:void(0);">
																		Clear Chat
																	</a>
																</li>
																<li>
																	<a href="javascript:void(0);">
																		<span class="text-danger">Block Contact</span>
																	</a>
																</li>
																<li>
																	<a href="javascript:void(0);">
																		Somthing's Wrong
																	</a>
																</li>
															</ul>	
															<a href="#" class="d-block text-dark fs-7 mb-10">Give feedback and report conversation</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="tab_files">
											<form role="search">
												<input type="text" class="form-control search-files" placeholder="Search files">
											</form>
											<div class="collapse-simple mt-3">
												<div class="card">
													<div class="card-header">
														<a role="button" data-bs-toggle="collapse" href="#files_collapse" aria-expanded="true">Yesterday</a>
													</div>
													<div id="files_collapse" class="collapse show">
														<div class="card-body">
															<ul class="cp-files">
																<li>
																	<div class="media">
																		<div class="media-head">
																			<div class="avatar avatar-icon avatar-sm avatar-soft-blue">
																				<span class="initial-wrap fs-3">
																					<i class="ri-file-excel-2-fill"></i>
																				</span>
																			</div>
																		</div>
																		<div class="media-body">
																			<div>
																				<p class="file-name">website_content.exl</p>
																				<p class="file-size">2,635 KB</p>
																			</div>
																			<div>
																				<a href="#" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
																				<div class="dropdown-menu dropdown-menu-end">
																					<a class="dropdown-item" href="#">Download</a>
																					<a class="dropdown-item link-danger" href="#">Delete</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="media">
																		<div class="media-head">
																			<div class="avatar avatar-icon avatar-sm avatar-soft-light">
																				<span class="initial-wrap fs-3">
																					<i class="ri-file-text-fill"></i>
																				</span>
																			</div>
																		</div>
																		<div class="media-body">
																			<div>
																				<p class="file-name">jampack.pdf</p>
																				<p class="file-size">1.3 GB</p>
																			</div>
																			<div>
																				<a href="#" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
																				<div class="dropdown-menu dropdown-menu-end">
																					<a class="dropdown-item" href="#">Download</a>
																					<a class="dropdown-item link-danger" href="#">Delete</a>
																				</div>
																			</div>
																		</div>
																	</div>
																	
																</li>
																<li>
																	<div class="media">
																		<div class="media-head">
																			<div class="avatar avatar-icon avatar-sm avatar-soft-warning">
																				<span class="initial-wrap fs-3">
																					<i class="ri-file-zip-fill"></i>
																				</span>
																			</div>
																		</div>
																		<div class="media-body">
																			<div>
																				<p class="file-name">themeforest-pack.zip</p>
																				<p class="file-size">2.45 GB</p>
																			</div>
																			<div>
																				<a href="#" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
																				<div class="dropdown-menu dropdown-menu-end">
																					<a class="dropdown-item" href="#">Download</a>
																					<a class="dropdown-item link-danger" href="#">Delete</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="media">
																		<div class="media-head">
																			<div class="avatar avatar-logo avatar-sm">
																				<span class="initial-wrap">
																					<img src="dist/img/6image.png" alt="user">
																				</span>
																			</div>
																		</div>
																		<div class="media-body">
																			<div>
																				<p class="file-name">bruce-mars-fiEG-Pk6ZASFPk6ZASF</p>
																				<p class="file-size">4,178 KB</p>
																			</div>
																			<div>
																				<a href="#" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
																				<div class="dropdown-menu dropdown-menu-end">
																					<a class="dropdown-item" href="#">Download</a>
																					<a class="dropdown-item link-danger" href="#">Delete</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="media">
																		<div class="media-head">
																			<div class="avatar avatar-logo avatar-sm">
																				<span class="initial-wrap">
																					<img src="dist/img/2image.png" alt="user">
																				</span>
																			</div>
																		</div>
																		<div class="media-body">
																			<div>
																				<p class="file-name">jonas-kakaroto-KIPqvvTKIPqvvT</p>
																				<p class="file-size">951 KB</p>
																			</div>
																			<div>
																				<a href="#" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
																				<div class="dropdown-menu dropdown-menu-end">
																					<a class="dropdown-item" href="#">Download</a>
																					<a class="dropdown-item link-danger" href="#">Delete</a>
																				</div>
																			</div>
																		</div>
																	</div>
																	
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header">
														<a role="button" data-bs-toggle="collapse" href="#files_collapse_1" aria-expanded="true">23 April</a>
													</div>
													<div id="files_collapse_1" class="collapse show">
														<div class="card-body">
															<ul class="cp-files">
																<li>
																	<div class="media">
																		<div class="media-head">
																			<div class="avatar avatar-icon avatar-sm avatar-soft-light">
																				<span class="initial-wrap fs-3">
																					<i class="ri-keynote-fill"></i>
																				</span>
																			</div>
																		</div>
																		<div class="media-body">
																			<div>
																				<p class="file-name">presentation.keynote</p>
																				<p class="file-size">20 KB</p>
																			</div>
																			<div>
																				<a href="#" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
																				<div class="dropdown-menu dropdown-menu-end">
																					<a class="dropdown-item" href="#">Download</a>
																					<a class="dropdown-item link-danger" href="#">Delete</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="media">
																		<div class="media-head">
																			<div class="avatar avatar-icon avatar-sm avatar-soft-warning">
																				<span class="initial-wrap fs-3">
																					<i class="ri-file-zip-fill"></i>
																				</span>
																			</div>
																		</div>
																		<div class="media-body">
																			<div>
																				<p class="file-name">PACK-TRIAL.zip</p>
																				<p class="file-size">2.45 GB</p>
																			</div>
																			<div>
																				<a href="#" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
																				<div class="dropdown-menu dropdown-menu-end">
																					<a class="dropdown-item" href="#">Download</a>
																					<a class="dropdown-item" href="#">Delete</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="media">
																		<div class="media-head">
																			<div class="avatar avatar-sm">
																				<img src="dist/img/img-thumb1.jpg" alt="user" class="avatar-img">
																			</div>
																		</div>
																		<div class="media-body">
																			<div>
																				<p class="file-name">joel-mott-LaK153ghdigaghdi</p>
																				<p class="file-size">3,028 KB</p>
																			</div>
																			<div>
																				<a href="#" class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
																				<div class="dropdown-menu dropdown-menu-end">
																					<a class="dropdown-item" href="#">Download</a>
																					<a class="dropdown-item" href="#">Delete</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!--Audio Call Window -->
						<div id="audio_call" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-xl chatapp-call-window" role="document">
								<div class="modal-content">
									<div class="modal-header header-wth-bg">
										<h6 class="modal-title text-muted">Jampack Audio Call</h6>
										<div class="modal-action">
											<a href="#" class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover modal-fullscreen-togglable">
												<span class="icon">
													<span class="feather-icon"><i data-feather="maximize"></i></span>
													<span class="feather-icon d-none"><i data-feather="minimize"></i></span>
												</span>
											</a>
											<a href="#" class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover">
												<span class="icon">
													<span class="feather-icon"><i data-feather="help-circle"></i></span>
												</span>
											</a>
										</div>
									</div>
									<div class="modal-body">
										<div class="avatar avatar-xxxl avatar-rounded d-20">
											<img src="dist/img/avatar8.jpg" alt="user" class="avatar-img">
										</div>
										<h3 class="mt-3">Huma Therman</h3>
										<p>Audio Calling<span class="one">.</span><span class="two">.</span><span class="three">.</span></p>
									</div>
									<div class="modal-footer">
										<ul class="chatapp-call-action hk-list">
											<li>
												<button class="btn btn-icon btn-lg btn-rounded btn-soft-light"><span class="icon"><span class="feather-icon"><i data-feather="mic"></i></span></span></button>
											</li>
											<li>
												<button class="btn btn-icon btn-lg btn-rounded btn-soft-light"><span class="icon"><span class="feather-icon"><i data-feather="video"></i></span></span></button>
											</li>
											<li>
												<button class="btn btn-icon btn-lg btn-rounded btn-danger" data-bs-dismiss="modal"><span class="icon"><span class="feather-icon"><i data-feather="phone"></i></span></span></button>
											</li>
											<li>
												<button class="btn btn-icon btn-lg btn-rounded btn-soft-light"><span class="icon"><span class="feather-icon"><i data-feather="user-plus"></i></span></span></button>
											</li>
											<li>
												<button class="btn btn-icon btn-lg btn-rounded btn-soft-light"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></button>
											</li>
										</ul>
										<div class="avatar avatar-lg avatar-rounded chatapp-caller-img">
											<img src="dist/img/avatar13.jpg" alt="user" class="avatar-img">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Audio Call Window -->
						
						<!--Video Call Window -->
						<div id="video_call" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-xl chatapp-call-window" role="document">
								<div class="modal-content bg-primary-dark-5">
									<div class="modal-header header-wth-bg bg-primary-dark-3">
										<h6 class="modal-title text-muted">Jampack  Video Call</h6>
										<div class="modal-action">
											<a href="#" class="btn btn-xs btn-icon btn-rounded btn-link link-secondary modal-fullscreen-togglable">
												<span class="icon">
													<span class="feather-icon"><i data-feather="maximize"></i></span>
													<span class="feather-icon d-none"><i data-feather="minimize"></i></span>
												</span>
											</a>
											<a href="#" class="btn btn-xs btn-icon btn-rounded btn-link link-secondary">
												<span class="icon">
													<span class="feather-icon"><i data-feather="help-circle"></i></span>
												</span>
											</a>
										</div>
									</div>
									<div class="modal-body">
										<div class="avatar avatar-xxxl avatar-rounded d-20">
											<img src="dist/img/avatar8.jpg" alt="user" class="avatar-img">
										</div>
										<h3 class="text-white mt-3">Huma Therman</h3>
										<p class="text-white">Video Calling<span class="one">.</span><span class="two">.</span><span class="three">.</span></p>
									</div>
									<div class="modal-footer">
										<ul class="chatapp-call-action hk-list">
											<li>
												<button class="btn btn-icon btn-lg btn-rounded btn-dark"><span class="icon"><span class="feather-icon"><i data-feather="mic"></i></span></span></button>
											</li>
											<li>
												<button class="btn btn-icon btn-lg btn-rounded btn-dark"><span class="icon"><span class="feather-icon"><i data-feather="video"></i></span></span></button>
											</li>
											<li>
												<button class="btn btn-icon btn-lg btn-rounded btn-danger" data-bs-dismiss="modal"><span class="icon"><span class="feather-icon"><i data-feather="phone"></i></span></span></button>
											</li>
											<li>
												<button class="btn btn-icon btn-lg btn-rounded btn-dark"><span class="icon"><span class="feather-icon"><i data-feather="user-plus"></i></span></span></button>
											</li>
											<li>
												<button class="btn btn-icon btn-lg btn-rounded btn-dark"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></button>
											</li>
										</ul>
										<div class="avatar avatar-lg avatar-rounded chatapp-caller-img">
											<img src="dist/img/avatar13.jpg" alt="user" class="avatar-img">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Video Call Window -->
						
						<!-- Invite People -->
						<div class="modal fade" id="invite_people" tabindex="-1" role="dialog">
							<div class="modal-dialog modal-dialog-centered mw-400p" role="document">
								<div class="modal-content">
									<div class="modal-header header-wth-bg-inv">
										<h5 class="modal-title">Invite People</h5>
										<button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>
									<div class="modal-body p-0">
										<form class="m-3" role="search">
											<input type="text" class="form-control rounded-input user-search" placeholder="Search People">
										</form>
										<div class="h-350p">
											<div data-simplebar class="nicescroll-bar">
												<ul class="invite-user-list">
													<li>
														<div class="media d-flex align-items-center">
															<div class="media-head me-3">
																<div class="avatar avatar-sm avatar-rounded">
																	<img src="dist/img/avatar2.jpg" alt="user" class="avatar-img">
																</div>
															</div>
															<div class="media-body">
																<div class="user-name">Morgan Freeman</div>	
															</div>  
														</div>
														<div>
															<input type="checkbox" class="form-check-input" id="customCheck2">
														</div>
													</li>
													<li>
														<div class="media d-flex align-items-center">
															<div class="media-head me-3">
																<div class="avatar avatar-sm avatar-rounded">
																	<img src="dist/img/avatar7.jpg" alt="user" class="avatar-img">
																</div>
															</div>
															<div class="media-body">
																<div class="user-name">Huma Therman</div>	
															</div>
														</div>
														<div>
															<input type="checkbox" class="form-check-input" id="customCheck3">
														</div>
													</li>
													<li>
														<div class="media d-flex align-items-center">
															<div class="media-head me-3">
																<div class="avatar avatar-sm avatar-rounded">
																	<img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
																</div>
															</div>
															<div class="media-body">
																<div class="user-name">Charlie Chaplin</div>
															</div>
														</div>
														<div>
															<input type="checkbox" class="form-check-input" id="customCheck4">
														</div>
													</li>
													<li>
														<div class="media d-flex align-items-center">
															<div class="media-head me-3">
																<div class="avatar avatar-sm avatar-soft-danger avatar-rounded">
																	<span class="initial-wrap">W</span>
																</div>
															</div>
															<div class="media-body">
																<div class="user-name">Winston Churchil</div>	
															</div>
														</div>
														<div>
															<input type="checkbox" class="form-check-input" id="customCheck5">
														</div>
													</li>
													<li>
														<div class="media d-flex align-items-center">
															<div class="media-head me-3">
																<div class="avatar avatar-sm avatar-rounded me-3">
																	<img src="dist/img/avatar1.jpg" alt="user" class="avatar-img">
																</div>
															</div>
															<div class="media-body">
																<div class="user-name">Office Board</div>	
															</div>
														</div>
														<div>
															<input type="checkbox" class="form-check-input" id="customCheck6">
														</div>
													</li>
													<li>
														<div class="media d-flex align-items-center">
															<div class="media-head me-3">
																<div class="avatar avatar-sm avatar-rounded me-3">
																	<img src="dist/img/avatar6.jpg" alt="user" class="avatar-img">
																</div>
															</div>
															<div class="media-body">
																<div class="user-name">Boss Baby</div>
															</div>
														</div>
														<div>
															<input type="checkbox" class="form-check-input" id="customCheck7">
														</div>
													</li>
													<li>
														<div class="media d-flex align-items-center">
															<div class="media-head me-3">
																<div class="avatar avatar-sm avatar-rounded me-3">
																	<img src="dist/img/avatar5.jpg" alt="user" class="avatar-img">
																</div>
															</div>
															<div class="media-body">
																<div class="user-name">Jaquiline Joker</div>
															</div>
														</div>
														<div>
															<input type="checkbox" class="form-check-input" id="customCheck8">
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="modal-footer justify-content-center">
										<button type="button" class="btn flex-fill btn-light flex-1" data-bs-dismiss="modal">Cancel</button>
										<button type="button" class="btn flex-fill btn-primary flex-1">Invite for chat</button>
									</div>
								</div>
							</div>
						</div>
						<!-- /Invite People -->
					</div>
				</div>	
			</div>
			<!-- /Page Body -->
		</div>
		<!-- /Main Content -->
	</div>
    <!-- /Wrapper -->

	<!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
   	<script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FeatherIcons JS -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

	<!-- Simplebar JS -->
	<script src="vendors/simplebar/dist/simplebar.min.js"></script>
		
	<!-- Init JS -->
	<script src="dist/js/init.js"></script>
</body>
</html>