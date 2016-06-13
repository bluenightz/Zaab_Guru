 <?php 
 $this->load->view('backend/partials/header', $configs);
 $this->load->view('backend/partials/'.$project.'_menu', $configs);
 ?>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><?php echo $menu; ?> Data Tables</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a><?php echo $menu; ?></a>
                        </li>
                        <li class="active">
                            <strong>Ordering List</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            
            
<?php 
                            
        $attributes = array('class' => 'form-horizontal', 'id' => 'ordering_form');
        echo form_open(base_url(PROJECT_NAME.'/backend/'.$menu.'/save_ordering'), $attributes);
?>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Ordering List</h5>
                        <div class="ibox-tools">
                            <div class="custom_list_head">
                               <button class="btn btn-w-m btn-info" type="submit"> <i class="fa fa-save"></i> Save Ordering</button>
                                <a href="<?php echo base_url($project."/backend/".$menu); ?>" class="btn btn-w-m">Cancel</a>
                            </div>
                            <!--
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                            -->
                        </div>
                    </div>
                    <div class="ibox-content">
                        <table id="sortable" class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                            <thead>
                                <tr>
                                    <th >#</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Publish</th>
                                    <th class="text-center">Expire Date</th>
                                    <th class="text-center">Create Date</th>
                                    <!-- <th class="text-center">Action</th> -->
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $no = 0;
                                $menu = str_replace(" ", "_", "$menu");
                                foreach ($list as $index => $item) {
                                    echo '<tr class="sort_element">
                                                <td>' . ( ++$no) . '<input type="hidden" name="ordering_element[]" value="'.$item['id'].'" /></td>
                                                    <td>' . $item['translation_title'] . '</td>
                                                    <td class="center"> ' . ($item['is_published'] == 1 ? '<span class="label label-primary">Enable</span>' : '<span class="label label-danger">Disabled</span>') . '  </td>
                                                    '.expire_text($item['end_date']).'
                                                    <td class="text-center">' . $item['created_date'] . '</td>
                                                    <!-- td class="text-center footable-visible footable-last-column">
                                            <div class="btn-group">
                                        <a href="' . base_url() . 'backend/' . $menu . '/edit/' . $item['id'] . '"><button class="btn btn-outline btn-primary" type="button">Edit</button></a>
                                        <a href="' . base_url() . 'backend/' . $menu . '/delete/' . $item['id'] . '" class="delete_confirm"><button class="btn btn-outline btn-danger" type="button">Delete</button></a>
                                            </div>                                                
                                                    </td -->
                                                </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>     
    </div>
</form>
            
 <?php $this->load->view('backend/partials/footer');?>