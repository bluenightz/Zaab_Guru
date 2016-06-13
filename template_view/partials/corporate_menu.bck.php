 <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <!-- <div class="dropdown profile-element"> <span>
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
                    </div> -->
                    <!-- <div class="logo-element">
                        IN+
                    </div> -->
                </li>
                <!-- <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Home Food</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="index.html">Banner</a></li>
                        <li><a href="dashboard_2.html">Video</a></li>
                    </ul>
                </li> -->
                <li  class="<?php echo (strtolower($menu) == 'new_banner') ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-magic"></i> <span class="nav-label">Banner</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url($project.'/backend/new_banner'); ?>">List</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/new_banner/create'); ?>">Create new</a></li>
                    </ul>
                </li>
                <li class="<?php echo (strtolower($menu) == 'product' || strtolower($menu) == 'product_category' || strtolower($menu) == 'brand') ? 'active':''; ?>">
                    <a href="#"><i class="fa fa fa-flask"></i> <span class="nav-label">Product</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        
                        <li><a href="<?php echo base_url($project.'/backend/product_category'); ?>">Category</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/product'); ?>">Listing</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/product/create'); ?>">Create New</a></li>
                    </ul>
                </li>
                
                <li class="<?php echo (strtolower($menu) == 'grow_with_betagro' || (strtolower($menu) == 'recruit_activity' || strtolower($menu) == 'student')) ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Join with Betagro</span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="<?php echo (strtolower($menu) == 'grow_with_betagro') ? 'active':''; ?>">
                            <a class="<?php echo (strtolower($menu) == 'grow_with_betagro') ? 'active':''; ?>" href="#">Grow with Betagro</a>
                            <ul class="nav nav-third-level collapse">
                                <li><a href="<?php echo base_url($project.'/backend/grow_with_betagro'); ?>">Listing</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/grow_with_betagro/create'); ?>">Create New</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo (strtolower($menu) == 'recruit_activity') ? 'active':''; ?>">
                            <a class="<?php echo (strtolower($menu) == 'recruit_activity') ? 'active':''; ?>" href="#">Recruit Activity</a>
                            <ul class="nav nav-third-level collapse">
                                <li><a href="<?php echo base_url($project.'/backend/recruit_activity'); ?>">Listing</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/recruit_activity/create'); ?>">Create New</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo (strtolower($menu) == 'student') ? 'active':''; ?>">
                            <a class="<?php echo (strtolower($menu) == 'student') ? 'active':''; ?>" href="#">Student</a>
                            <ul class="nav nav-third-level collapse">
                                
                                <li><a href="<?php echo base_url($project.'/backend/student'); ?>">Listing</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/student/create'); ?>">Create New</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="<?php echo (strtolower($menu) == 'news_event' || (strtolower($menu) == 'photo_album' || strtolower($menu) == 'e_magazine' || strtolower($menu) == 'calendar_activity' || strtolower($menu) == 'tvc')) ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Press Room</span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="<?php echo (strtolower($menu) == 'news_event') ? 'active':''; ?>">
                            <a class="<?php echo (strtolower($menu) == 'news_event') ? 'active':''; ?>" href="#">News & Events</a>
                            <ul class="nav nav-third-level collapse">
                                <li><a href="<?php echo base_url($project.'/backend/news_event'); ?>">Listing</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/news_event/create'); ?>">Create New</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo (strtolower($menu) == 'photo_album') ? 'active':''; ?>">
                            <a class="<?php echo (strtolower($menu) == 'photo_album') ? 'active':''; ?>" href="#">Photo Albums</a>
                            <ul class="nav nav-third-level collapse">
                                <li><a href="<?php echo base_url($project.'/backend/photo_album'); ?>">Listing</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/photo_album/create'); ?>">Create New</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo (strtolower($menu) == 'e_magazine') ? 'active':''; ?>">
                            <a class="<?php echo (strtolower($menu) == 'e_magazine') ? 'active':''; ?>" href="#">E-magazine</a>
                            <ul class="nav nav-third-level collapse">
                                <li><a href="<?php echo base_url($project.'/backend/e_magazine'); ?>">Listing</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/e_magazine/create'); ?>">Create New</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo (strtolower($menu) == 'tvc') ? 'active':''; ?>">
                            <a class="<?php echo (strtolower($menu) == 'tvc') ? 'active':''; ?>" href="#">TVC</a>
                            <ul class="nav nav-third-level collapse">
                                
                                <li><a href="<?php echo base_url($project.'/backend/tvc'); ?>">Listing</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/tvc/create'); ?>">Create New</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo (strtolower($menu) == 'calendar_activity') ? 'active':''; ?>">
                            <a class="<?php echo (strtolower($menu) == 'calendar_activity') ? 'active':''; ?>" href="#">Calenda Activities</a>
                            <ul class="nav nav-third-level collapse">
                                
                                <li><a href="<?php echo base_url($project.'/backend/calendar_activity'); ?>">Listing</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/calendar_activity/create'); ?>">Create New</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

               
                <li class="<?php echo (strtolower($menu) == 'office_domestic' || (strtolower($menu) == 'office_country' || strtolower($menu) == 'office_inter')) ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Office</span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="<?php echo (strtolower($menu) == 'office_domestic') ? 'active':''; ?>">
                            <a class="<?php echo (strtolower($menu) == 'office_domestic') ? 'active':''; ?>" href="#">Domestic</a>
                            <ul class="nav nav-third-level collapse">
                                <li><a href="<?php echo base_url($project.'/backend/office_domestic'); ?>">Listing</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/office_domestic/create'); ?>">Create New</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo (strtolower($menu) == 'office_country') ? 'active':''; ?>">
                            <a class="<?php echo (strtolower($menu) == 'office_country') ? 'active':''; ?>" href="#">International</a>
                            <ul class="nav nav-third-level collapse">
                                <li><a href="<?php echo base_url($project.'/backend/office_country'); ?>">Country</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/office_inter'); ?>">Listing</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/office_inter/create'); ?>">Create New</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li  class="<?php echo (strtolower($menu) == 'link_to_social' || strtolower($menu) == 'social_category') ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-magic"></i> <span class="nav-label">Link to social</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url($project.'/backend/social_category'); ?>">Category</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/link_to_social'); ?>">Listing</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/link_to_social/create'); ?>">Create New</a></li>
                    </ul>
                </li>

                <li  class="<?php echo (preg_match("/^contact/", strtolower($menu))) ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-magic"></i> <span class="nav-label">Contact</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url($project.'/backend/contact_topic'); ?>">List</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/contact_topic/create'); ?>">Create new</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/contact_person'); ?>">Contact person</a></li>
                    </ul>
                </li>

                <li  class="<?php echo (strtolower($menu) == 'subscribe') ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-magic"></i> <span class="nav-label">Subscriber</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url($project.'/backend/subscribe'); ?>">List</a></li>
                    </ul>
                </li>
               
            </ul>
        </div>
    </nav>