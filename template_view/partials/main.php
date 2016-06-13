<div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <?php if( $configs['site_search'] == true ): ?>
                <form role="search" class="navbar-form-custom" action="search_results.html">
                    <div class="form-group">
                        <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                    </div>
                </form>
                <?php endif ?>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <?php echo anchor($project.'/backend/logout', '<i class="fa fa-sign-out"></i> Log out');?>
                </li>
            </ul>

        </nav>
    </div>