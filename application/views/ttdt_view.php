<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Thể Thao Điện Tử</title>
	
    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" href="../../access/images/Untitled.png" type="image/png" />
    <link href="../../access/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">

 
    <script src="../../access/bootstrap-3.1.1-dist/js/ie-emulation-modes-warning.js"></script>

  
    <script src="../../access/bootstrap-3.1.1-dist/js/ie10-viewport-bug-workaround.js"></script>

   
    <link href="../../access/bootstrap-3.1.1-dist/css/carousel.css" rel="stylesheet">
    
    <link href="../../access/css/style.css" rel="stylesheet">
  </head>

<body >
<!--========================================================================================================================== --> 
    <!-- Thanh trang chủ -->

<div class="container">
      <div class=" col-md-12" style="margin-top:30px; margin-bottom:10px"> 
                        <nav class="navbar">
                                <a id="logo" href="http://thethaodt.vn/trangchu"><img src="../../access/images/TTDT_whiteBg-01-resize.png"/></a>
                                <a ><img src="../../access/images/850x90_LMMM.png" align="right"></a>
                         </nav>
                           <!--logo-->                 
  	</div><!--col-md-12-->   
</div><!--container-->
<div class=" t3-mainnav-wrap" style=" margin-bottom:20px;">
	<div class="container">
    	<div class="row">
    		 <div class="col-md-8">
                            <div class="navbar-collapse collapse" >
                              <ul class="nav  navbar-nav focus">
                                <li  ><a href="http://thethaodt.vn/trangchu" style="padding-right:30px;color:#545454;">TRANG CHỦ</a></li>
								<li class="dropdown">
                                  <a href="" class="dropdown-toggle" data-toggle="dropdown" style="padding-right:30px;color:#545454"">TIN TỨC<span class="caret"></span></a>
                                  <ul class="dropdown-menu" >
                                    <li><a href="http://thethaodt.vn/tintuc-lmht" style="padding-bottom:20px">Liên Minh Huyền Thoại</a></li>
                                
                                    <li><a href="http://thethaodt.vn/tintuc-ff"  style="padding-bottom:20px">Fifa Online 3</a></li>
                                   
                                    <li><a href="#"  style="padding-bottom:20px">Dota</a></li>
                                  
                                    <li><a href="#"  style="padding-bottom:20px">Hon</a></li>
                                     <li><a href="LMHT_news" style="padding-bottom:20px">Starcraft II</a></li>
                                
                                    <li><a href="#"  style="padding-bottom:20px">Age Of Empires</a></li>
                                   
                                    <li><a href="#"  style="padding-bottom:20px">Hồ Sơ Esports</a></li>
                                  
                                    <li><a href="#"  style="padding-bottom:20px">Khác</a></li>
                                    
                                  </ul>
                                </li>
                                <li ><a href="sanpham" style="padding-right:30px;color:#545454"">SẢN PHẨM</a></li>
                                <li><a href="http://thethaodt.vn/video" style="padding-right:30px;color:#545454"">VIDEO</a></li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-right:30px;color:#545454"">HÌNH ẢNH<span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#"  style="padding-bottom:20px">COSPLAY</a></li>
                                    
                                    <li><a href="#"  style="padding-bottom:20px">GAME</a></li>
                                    
                                  </ul>
                                </li>
                                <li><a href="sukien" style="padding-right:30px;color:#545454"">SỰ KIỆN</a></li>
                              </ul>
                            </div> 
     </div>
     <div class="col-md-4">
    
     	<div class="navbar-form col-md-6" > 
        
          <form action="http://thethaodt.vn/ttdt/search" name="login" method="post"  onsubmit="return check_submit()">
                <input type="text" class="form-control" placeholder="search" name="name">
                <input type="submit" name="submit" value="Gửi" class="btn btn-primary">
        </form>
</div>
        <script language="javascript" type="text/javascript">
    document.forms['login'].name.focus();
    function set_focus()
    {
        document.forms['login'].name.focus();
    }
    function check_submit()
    {
        var frm = window.document.login;
        if (frm.name.value == '')
        {
            alert('Xin vui lòng nhập dữ liệu cần tìm!');
            document.forms['login'].name.focus();
            return false;
        }
        
        else
            return true;
    }
</script>
     </div>
     </div>
    </div>
    </div>
</div>
<!--========================================================================================================================== -->     
   <!--Noi Dung-->
<div class="container" style="padding-top:20px;">
    <div class="row">
      <div class="col-md-8">
      	<div class="container-fluid" >
        	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height:440px;" >
  			<!-- Indicators -->
          <!-- Wrapper for slides -->
          <div class="carousel-inner" style="height:440px;">
                     
                    <div class="item active">
                      <img src="../../access/images/xpeke_2.jpg">
                      <div class="carousel-caption">
                        <a href=""><p style=" text-transform: uppercase;"><b>[LMHT]Xpeke -Huyền thoại một thời đã trở lại đấu trường danh vọng</b></p></a><p style="font-size:14px;margin-bottom: 30px;margin-top: 15px;">Huyền thoại một thời đã trở lại đấu trường danh vọng</p>
                      </div>
                    </div>            
                       <?php
					   
                            foreach ($tin as $value) {
                                echo ' <div class="item">';
                                echo '<a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '">   <img style=" width:100%;height:440px;" src="../../public/upload/user/'. $value['img'] . '" ></a>';
                                echo '<div class="carousel-caption">';
								echo '<a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '"><p style=" text-transform: uppercase;"><b>['. $value['type_dr'] . '] '. $value['title'] . '</b></p></a>';
								echo '<p style="font-size:14px;margin-bottom: 30px;margin-top: 15px;">'. $value['sumay'] . '</p>';
								echo '</div>';
								echo '</div>';
                                }
                          ?>
                  </div><!-- class="carousel-inner"-->
                
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                  <!--controlls-->
             </div><!--carousel-example-generic-->
        </div><!--slide-->
        <div class="container-fluid" style="padding-bottom:15px;" >
        	<ul class="nav nav-tabs" role="tablist"  style="height:34px;">
                <li role="presentation" class="active" style="height:34px;">
                    <a href="#home_news_tab_1" role="tab" data-toggle="tab" style="height:34px; font-size:16px;font-family:Arial; line-height:0.5">MỚI NHẤT</a>
                </li>
                <li role="presentation">
                    <a href="#home_news_tab_2" role="tab"  data-toggle="tab" style="height:34px; font-size:16px;font-family:Arial; line-height:0.5">ĐỌC NHIỀU</a>
                </li>
                <li role="presentation">
                    <a href="#home_news_tab_3" role="tab" data-toggle="tab" style="height:34px; font-size:16px;font-family:Arial; line-height:0.5">NGẪU NHIÊN</a>
                </li>
            </ul>
        </div>
        <div class="container-fluid ">
        	<div class="row">
             <?php
             foreach ($moitrai as $value) {
             echo '<div class="col-md-6 md_4">';
             echo '<ul>';	
                     echo   '<li><a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '"> <img src="../../public/upload/user/'. $value['img'] . '"> </a></li>';
                     echo   '<li><a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '"> <p><b><h4>['. $value['type_dr'] . ']'. $value['title'] . '</h4></a></b>
                        '. $value['sumay'] . '  </p><li>';
              echo '</ul>';
              echo  '</div>';
			 }
			   ?>
                 <?php
                	 
					 
			            foreach ($moi as $value) {
							echo '<div class="col-md-6 news1">';
							echo ' <table>';
            			    echo '<tr >';
                			echo '<td ><a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '"><img " src="../../public/upload/user/'. $value['img'] . '"></td>';
                			echo '<td><p><b><a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '">['. $value['type_dr'] . ']'. $value['title'] . '</a></b></p></td>';
                			echo '<tr >';
							echo '  </table>';
							echo '</div>';
							
                			}
					
                	  ?>
            </div><!--row-->
        </div><!--container-fluid-->
        <div class="container-fluid" style="padding-bottom:15px; padding-top:55px;">
        	<ul class="nav nav-tabs tintuc" role="tablist"  style="height:34px;">
                <li role="presentation" class="active" style="height:34px;">
                    <a href="#home_news_tab_1" role="tab" data-toggle="tab" style="height:34px; font-size:16px;font-family:Arial; line-height:0.5">TIN TỨC</a>
                </li>
            </ul>
        </div>
        <div class="container-fluid">
        	<div class="row">
            <?php
			foreach ($tintren as $value) {
            echo	'<div class="col-md-6 md_44">';
            echo    '<ul>';
            echo    '<li><a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '"><img " src="../../public/upload/user/'. $value['img'] . '"></a></li>';
            echo    '</ul>';
            echo    '</div>';
            echo    '<div class="col-md-6 md_44" >';
            echo    '<p><b> <a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '" style="font-size:16px;">['. $value['type_dr'] . ']'. $value['title'] . ' </a></b><br/>'. $value['sumay'] . '</p>';
            echo     '</div>';
        	echo     '</div>';
			}
			?>
        </div><!--container-->
        <div class="container-fluid" style="padding-top:15px;">
        	<div class="row">
            	 <?php
			            foreach ($tin as $value) {
							echo '<div class="col-md-6 news">';
							echo ' <table>';
            			    echo '<tr >';
                			echo '<td ><a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '"><img " src="../../public/upload/user/'. $value['img'] . '"></td>';
                			echo '<td><p><b><a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '">['. $value['type_dr'] . ']'. $value['title'] . '</a></b></p></td>';
                			echo '<tr >';
							echo '  </table>';
							echo '</div>';
							
                			}
					
                	  ?>
                 
              
                          
              
        	</div><!--row-->
        </div><!--container-->
      </div><!--md-8-->
<!--====================================================================================================================-->      
      <div class="col-md-4">
      		<div class="container-fluid top_ads">
                <ul>
                    <li><a href="http://thethaodt.vn/tintuc-lmht"> <img src="../../access/images/LMHT.jpg"  style="padding-right:10px; margin-bottom:20px"></a></li>
                    <li><a href="http://thethaodt.vn/tintuc-ff"> <img src="../../access/images/FF3.jpg"  style="padding-left:10px;margin-bottom:20px" ></a></li>
                    <li><a href="http://thethaodt.vn/sanpham"> <img src="../../access/images/sp.jpg"           style="padding-right:10px"></a></li>
                    <li><a href="http://thethaodt.vn/video"> <img src="../../access/images/video.jpg" style="padding-left:10px"></a></li>
                    
                </ul>
			</div><!--md-4-->
           <div class="container-fluid" style="padding-top:60px; padding-bottom:15px;">
               <ul class="nav nav-tabs" role="tablist"  style="height:34px;border-width:1px;">
                <li role="presentation" style="height:34px; background:none; ">
                    <a href="#home_news_tab_1" role="tab" data-toggle="tab" style="height:34px; font-size:14px;font-family:Arial; line-height:0.5"><b>THEO DÕI CHÚNG TÔI</b></a>
                </li>
            </ul>
            </div>
            
              <div class="container-fluid fb">
            	 <table>
                        <tr>
                        <td><a href=""> <img src="../../access/images/fb.png" ></a></td>
                       
                        </tr>
                        <tr>
                        <td><a href=""> <img src="../../access/images/gm.png" ></a></td>
                        
                        </tr>
                        
                    </table>
            </div>    
             <div class="container-fluid" style="padding-bottom:10px; padding-top:15px">
                <ul class="nav nav-tabs" role="tablist"  style="height:34px;">
                <li role="presentation" class="active" style="height:34px;">
                    <a href="#home_news_tab_1" role="tab" data-toggle="tab" style="height:34px; font-size:16px;font-family:Arial; line-height:0.5">HAY</a>
                </li>
                <li role="presentation">
                    <a href="#home_news_tab_2" role="tab"  data-toggle="tab" style="height:34px; font-size:16px;font-family:Arial; line-height:0.5">BÌNH LUẬN GẦN ĐÂY</a>
                </li>
            </ul>
            </div>
            <div class="container-fluid news">
                 <table>
					  <?php
			            foreach ($hot as $value) {
            			    echo '<tr >';
                			echo '<td ><a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '"><img " src="../../public/upload/user/'. $value['img'] . '"></td>';
                			echo '<td><p><b><a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '">['. $value['type_dr'] . ']'. $value['title'] . '</a></b></p></td>';
                			echo '<tr >';
                			}
                	  ?>
                 </table>
                           
            </div>
              <div class="container-fluid" style="padding-top:50px;">
                <ul class="nav nav-tabs" role="tablist"  style="height:34px;border-width:1px;">
                <li role="presentation" style="height:34px; background:none; ">
                    <a href="#home_news_tab_1" role="tab" data-toggle="tab" style="height:34px; font-size:14px;font-family:Arial; line-height:0.5"><b>TAG CLOUD</b></a>
                </li>
            </ul>
            </div> 
             
          
      </div><!--md-4-->
  </div><!--row chính-->
</div><!--khung noi dung chinh-->  
   
   
   
<!--========================================================================================================================== ViDeo--> 	
<div class="container">
	
      <div class=" col-md-12" style="margin-top:30px; margin-bottom:15px"> 
                     <ul class="nav nav-tabs tintuc" role="tablist"  style="height:34px;">
                        <li role="presentation" class="active" style="height:34px;">
                            <a href="#home_news_tab_1" role="tab" data-toggle="tab" style="height:34px; font-size:16px;font-family:Arial; line-height:0.5">VIDEO</a>
                        </li>
                    </ul>
      </div><!--col-md-12--> 
<!-- ================================================================================================================ -->     		
<div>
                      <?php
                     foreach ($videott as $value) {
				     echo    '<div class="col-md-3 md_42" >';
                     echo    '<ul>';
                     echo    '<li><a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '"> <img src="../../public/upload/user/'. $value['img'] . '"></a></li>';
                     echo    '<li><a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '"><b style="font-size:14px;">['. $value['type_dr'] . ']'. $value['title'] . '</b></a></li>';
                     echo    '</ul>';
					 echo 	 '</div>';
					 echo	 '<hr>';
                     }
                     ?>
                  
</div>

        
</div><!--container-->       
<!--===========================================================================================================================-->    
<!--Footer-->

<div style="background: #111111; height:30% auto; margin-top:30px;position: absolute; width:100%; border-top: 25px solid #333;">
    <div class="container">
    		<div class="col-md-3 news ">
                <ul>
                    <li><a href=""> <img src="../../access/images/ava.jpg" style="width:100%;" ></a></li>
                    <li><p align="left"> <b>Công ty Cổ phần Tin học Hòa Bình</b>
                            Bài viết cộng tác và ý kiến phản hồi vui lòng gửi về <u><a href="" style="color:#F90">banbientap@thethaodientu.vn</u></a> </p>               
                </ul>
			</div><!--class="col-md-3 logo_footer "-->
        
    		<div class="col-md-3 logo_footer ">
                <Table>
                    <tr><h4  align="left"><b>Danh sách đối tác</b></h4></tr>
                     <tr>   
                    <td ><a href=""> <img src="../../access/images/TNG_logo.png" ></a></td>
                     <td><a href=""> <img src="../../access/images/Infogame1.PNG"  ></a></td>
                     </tr>          
                </table>
			</div><!--class="col-md-3 logo_footer "-->
            <div class="col-md-6">
                 
                   <div class="row">
                   <div class="col-md-11 footer_anh">
                      <h4  align="left" style="padding-left:5px;"><b>Thư viện hình ảnh</b></h4>
                      <?php
                            foreach ($sanpham as $value) {
                                echo '<ul >';
                                echo '<li><a href=""><img " src="../../public/upload/user/'. $value['img'] . '"></a></li>';
                                echo '</ul >';
                                }
                          ?>
                    
                   </div>
                    
               </div><!--row-->
            </div><!--class="col-md-6"-->      
    	</div><!--<div class="container">-->
        <div align="center" style="margin-top:30px"><p>Copyright © 2015 Thể Thao Điện Tử. All Rights Reserved. <p></div>
</div><!--<div style="background:#000; height:30% auto;">--><!--========================================================================================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../access/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
    <script src="../../access/bootstrap-3.1.1-dist/js/docs.min.js"></script>
</body>
</html>
