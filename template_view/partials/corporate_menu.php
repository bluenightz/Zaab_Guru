 <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    
                </li>
                
                <?php foreach($menus as $menu): ?>
                <?php if( !preg_match("/category/i",$menu['content_type']) ): ?>
                <li  class="<?php echo (strtolower($menu['content_type']) == $this->uri->segment(3) || strtolower($menu['category_content_type']) == $this->uri->segment(3)) ? 'active':''; ?>">
                    <a href="#"><i class="fa fa-magic"></i> <span class="nav-label"><?php echo ucwords($menu['title']); ?></span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <?php if( $menu['has_category'] ): ?>
                            <li><a href="<?php echo base_url(PROJECT_NAME.'/backend/'.$menu['category_content_type']); ?>"><?php echo $menu['category_title'] ?></a></li>
                        <?php endif ?>
                        <?php if( in_array("read", $permissions ) ): ?>
                            <li><a href="<?php echo base_url(PROJECT_NAME.'/backend/'.$menu['content_type']); ?>">List</a></li>
                        <?php endif ?>
                        <?php if( in_array("create", $permissions ) || in_array("edit", $permissions ) || in_array("delete", $permissions ) ): ?>
                            <li><a href="<?php echo base_url(PROJECT_NAME.'/backend/'.$menu['content_type'].'/create'); ?>">Create new</a></li>
                        <?php endif ?>
                    </ul>
                </li>
                <?php endif ?>
                <?php endforeach ?>
               
            </ul>
        </div>
    </nav>