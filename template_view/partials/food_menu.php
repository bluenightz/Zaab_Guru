 <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="#">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <!-- <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Home Food</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="index.html">Banner</a></li>
                        <li><a href="dashboard_2.html">Video</a></li>
                    </ul>
                </li> -->
                <li class="<?php echo (strtolower($menu) == 'home') ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Home </span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url($project.'/backend/home'); ?>">Listing</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/home/create'); ?>">Create New</a></li>
                    </ul>
                </li>
                
                
                <!-- <li  class="<?php echo (strtolower($menu) == 'subscribe') ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-magic"></i> <span class="nav-label">Subscribe</span><span class="fa arrow"></span></a>
                    
                </li> -->
            </ul>
        </div>
    </nav>