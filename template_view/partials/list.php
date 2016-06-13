<?php
    $this->load->view('backend/partials/header', $configs);
    echo $this->session->userdata('menus');
?>
<div id="page-wrapper" class="gray-bg">
    <?php
    	
        $this->load->view('backend/partials/main', $configs);
    ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2><?php echo $headtitle; ?> Data Tables</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a><?php echo $headtitle; ?></a>
                </li>
                <li class="active">
                    <strong><?php echo $headtitle; ?> List Tables</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>



    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Data List</h5>
                        <div class="ibox-tools">
                            <div class="custom_list_head">
                                <!--<a href="<?php echo base_url(''.$uri.'/backend') . '/' . strtolower($menu) . '/deleted_list'; ?>" title="Deleted"><button class="btn btn-w-m btn-danger" type="button"> <i class="fa fa-trash"></i> Deleted</button></a>-->
                                <?php if( $configs['ordering_able'] && in_array("edit", $this->session->userdata('permissions') )): ?>
                                <a href="<?php echo base_url($uri.'/'.PROJECT_NAME.'/backend') . '/' . strtolower($menu) . '/ordering'; ?>" title="Ordering"><button class="btn btn-w-m btn-info" type="button"> <i class="fa fa-random"></i> Ordering</button></a>
                                <?php endif ?>
                                <?php if( in_array("create",$this->session->userdata('permissions')) ): ?>
                                <a href="<?php echo base_url($uri.'/'.PROJECT_NAME.'/backend') . '/' . strtolower($menu) . '/create'; ?>" title="Create New"><button class="btn btn-w-m btn-info" type="button"> <i class="fa fa-plus"></i> Create New </button></a>
                                <?php endif ?>
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
                        <form action="<?php echo base_url("backend/$menu/create"); ?>" method="post" accept-charset="utf-8">
                            <input type="hidden" name="content_type" value="<?php echo $content_type; ?>" />

                        </form>

                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <?php echo $content; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php $this->view('backend/partials/footer'); ?>