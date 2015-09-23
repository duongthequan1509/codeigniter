
<!DOCTYPE html>
<html lang="en">
 
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>Quản Lý</title>
 	<script src="../../access/bootstrap-3.1.1-dist/js/ie-emulation-modes-warning.js"></script>
	<script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
  
    <script src="../../access/bootstrap-3.1.1-dist/js/ie10-viewport-bug-workaround.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="../../access/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom CSS -->
    <link href="../../access/bootstrap-3.1.1-dist/css/sb-admin.css" rel="stylesheet">
 
    <!-- Morris Charts CSS -->
    <link href="../../access/bootstrap-3.1.1-dist/css/plugins/morris.css" rel="stylesheet">
 
    <!-- Custom Fonts -->
    <link href="../../access/bootstrap-3.1.1-dist/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 
</head>
 
<body>
 
    <div id="wrapper">
 
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://thethaodt.vn/ttdt/quanly">QUẢN LÝ TIN TỨC</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <!--<li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>-->
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                       <!-- <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>-->
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $admin; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://thethaodt.vn/ttdt/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="http://thethaodt.vn/ttdt/quanly"><i class="fa fa-fw fa-dashboard"></i> Danh Mục	</a>
                    </li>
                   <!-- <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Chi tiết</a>
                    </li>-->
                    <!--<li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
 

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row" style="padding:50px; padding-top:20px;">
                    
                    
         <form action="" method="POST" enctype="multipart/form-data"   role="form">
       						 <div class="form-group">
                                <label>Ảnh</label>
        						<input type="file"  name="image"/>
                            </div>
                             <div class="form-group">
                                <label>Kiểu</label><br>
                                <select name='type'>
                                    <option value='Tintuc'>Tin Tức</option>
                                    <option value='Sukien'>Sự Kiện</option>
                                    <option value='Video'>Video </option>
                                    <option value='Sanpham'>Sản Phẩm </option>
                                </select>
                             </div>
                            <div class="form-group">
                                <label>Thể Loại</label><br>
                                <select name='type_dr'>
                                    <option value='LMHT'>LMHT</option>
                                    <option value='FFO3'>FFO3 </option>
                                    <option value='AOE'> AOE </option>
                                    <option value='DOTA'>DOTA </option>
                                     <option value='HOSO'>HỒ SƠ</option>
                                     <option value='SANPHAM'>SẢN PHẨM</option>
                                </select>
                             </div>
                            
                             <div class="form-group">
                                <label>Tiêu Đề</label><br>
                                <input type="text" name="title"   value="<?php echo $title; ?>" size="100px" />
                            </div>
                            <div class="form-group">
                                <label>Tóm Tắt</label><br>
                                <input type="text" name="sumay"   value="<?php echo $sumay; ?>" size="160px" />
                            </div>
            				 <div class="form-group">
                                <label>Nội Dung</label>
					           <textarea id="editor1" name="content"   value="<?php echo $content; ?>"></textarea>
                             </div>
                              <div class="form-group">
 		   						 <input type="submit" class="btn btn-lg btn-primary" name="them" value="Sửa">
      						  </div>
        </form>
          </div>
                <!-- /.row -->
        </div>
            <!-- /.container-fluid -->

     </div>
        <!-- /#page-wrapper -->

  </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../access/bootstrap-3.1.1-dist/js/jquery.js"></script>
	<script type="text/javascript">
    CKEDITOR.replace('editor1');
</script>  
    <!-- Bootstrap Core JavaScript -->
    <script src="../../access/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../access/bootstrap-3.1.1-dist/js/plugins/morris/raphael.min.js"></script>
    <script src="../../access/bootstrap-3.1.1-dist/js/plugins/morris/morris.min.js"></script>
    <script src="../../access/bootstrap-3.1.1-dist/js/plugins/morris/morris-data.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../access/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
    <script src="../../access/bootstrap-3.1.1-dist/js/docs.min.js"></script>

</body>

</html>
