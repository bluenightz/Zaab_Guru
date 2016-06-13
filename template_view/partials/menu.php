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

                <li class="<?php echo (strtolower($menu) == 'product' || strtolower($menu) == 'product_category' || strtolower($menu) == 'brand') ? 'active':''; ?>">
                    <a href="#"><i class="fa fa fa-flask"></i> <span class="nav-label">Product</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url($project.'/backend/brand'); ?>">Brand</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/product_category'); ?>">Category</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/product'); ?>">Listing</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/product/create'); ?>">Create New</a></li>
                    </ul>
                </li>
                <li class="<?php echo (strtolower($menu) == 'promotion') ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Promotion </span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url($project.'/backend/promotion'); ?>">Listing</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/promotion/create'); ?>">Create New</a></li>
                    </ul>
                </li>
                <li class="<?php echo (strtolower($menu) == 'news_event') ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">News & Event </span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url($project.'/backend/news_event'); ?>">Listing</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/news_event/create'); ?>">Create New</a></li>
                    </ul>
                </li>
               
                <li class="<?php echo (strtolower($menu) == 'betagro_shop_domestic' || (strtolower($menu) == 'betagro_shop_inter' || strtolower($menu) == 'betagro_shop_country')) ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Betagro Shop</span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="<?php echo (strtolower($menu) == 'betagro_shop_domestic') ? 'active':''; ?>">
                            <a class="<?php echo (strtolower($menu) == 'betagro_shop_domestic') ? 'active':''; ?>" href="#">Domestic</a>
                            <ul class="nav nav-third-level collapse">
                                <li><a href="<?php echo base_url($project.'/backend/betagro_shop_domestic'); ?>">Listing</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/betagro_shop_domestic/create'); ?>">Create New</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo (strtolower($menu) == 'betagro_shop_country') ? 'active':''; ?>">
                            <a class="<?php echo (strtolower($menu) == 'betagro_shop_country') ? 'active':''; ?>" href="#">International</a>
                            <ul class="nav nav-third-level collapse">
                                <li><a href="<?php echo base_url($project.'/backend/betagro_shop_country'); ?>">Country</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/betagro_shop_inter'); ?>">Listing</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/betagro_shop_inter/create'); ?>">Create New</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="<?php echo (strtolower($menu) == 'betagro_deli_country' || strtolower($menu) == 'betagro_deli_domestic' || (strtolower($menu) == 'betagro_deli_inter')) ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Betagro Deli</span><span class="fa arrow"></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="<?php echo (strtolower($menu) == 'betagro_deli_domestic') ? 'active':''; ?>">
                            <a class="<?php echo (strtolower($menu) == 'betagro_deli_domestic') ? 'active':''; ?>" href="#">Domestic</a>
                            <ul class="nav nav-third-level collapse">
                                <li><a href="<?php echo base_url($project.'/backend/betagro_deli_domestic'); ?>">Listing</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/betagro_deli_domestic/create'); ?>">Create New</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="<?php echo (strtolower($menu) == 'betagro_deli_inter') ? 'active':''; ?>" href="#">International</a>
                            <ul class="nav nav-third-level collapse">
                                <li><a href="<?php echo base_url($project.'/backend/betagro_deli_country'); ?>">Country</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/betagro_deli_inter'); ?>">Listing</a></li>
                                <li><a href="<?php echo base_url($project.'/backend/betagro_deli_inter/create'); ?>">Create New</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo (strtolower($menu) == 'restaurant') ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Restaurant</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url($project.'/backend/restaurant'); ?>">Listing</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/restaurant/create'); ?>">Create New</a></li>
                    </ul>
                </li>
                <li  class="<?php echo (strtolower($menu) == 'menu_recipe' || strtolower($menu) == 'menu_category') ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-magic"></i> <span class="nav-label">Menu &amp; Reclipes</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url($project.'/backend/menu_category'); ?>">Category</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/menu_recipe'); ?>">Listing</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/menu_recipe/create'); ?>">Create New</a></li>
                    </ul>
                </li>

                <li  class="<?php echo (strtolower($menu) == 'contact') ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-magic"></i> <span class="nav-label">Contact</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url($project.'/backend/contact'); ?>">Contact Form</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/contact/create'); ?>">Location</a></li>
                        <li><a href="<?php echo base_url($project.'/backend/contact'); ?>">Link to social</a></li>
                    </ul>
                </li>
                
                <li  class="<?php echo (strtolower($menu) == 'subscribe') ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-magic"></i> <span class="nav-label">Subscribe</span><span class="fa arrow"></span></a>
                    
                </li>
            </ul>
        </div>
    </nav>