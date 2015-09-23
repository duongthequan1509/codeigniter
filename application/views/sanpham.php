<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sản Phẩm-Thể Thao Điện Tử</title>
	
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
       </div>
</div>                   <!--logo-->     
                    <div class=" t3-mainnav-wrap" style=" margin-bottom:20px;">
	<div class="container">
    	<div class="row">
    		 <div class="col-md-8">
                            <div class="navbar-collapse collapse" >
                              <ul class="nav  navbar-nav focus">
                                <li  ><a href="http://thethaodt.vn/trangchu" style="padding-right:30px;color:#545454;">TRANG CHỦ</a></li>
								<li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-right:30px;color:#545454"">TIN TỨC<span class="caret"></span></a>
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
                                <li ><a href="http://thethaodt.vn/sanpham" style="padding-right:30px;color:#545454"">SẢN PHẨM</a></li>
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
    
     	<div class="navbar-form" >        
           <input type="text" placeholder="Search..."  class="form-control" size="47" >
       
     </div>
     </div>
    </div>
    </div>
</div> 
<!--========================================================================================================================== -->     
   <!--Noi Dung-->
<div class="container">
    <div class="row">
      <div class="col-md-8">
       <?php
                     foreach ($sanphamtop as $value) {
      	echo '<div class="container-fluid tag_follow" style="padding-top:0px;">';
              	echo '<ul>';
                echo '<li><a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '"> <img src="../../public/upload/user/'. $value['img'] . '" ></a></li>';
                echo '<li><a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '"><p><b><h4>'. $value['title'] . '</h4></b>
                            </p></a>
                    <p>'. $value['sumay'] .'</p></li>';  
            	echo '</ul>';
                
        echo '</div>';
					 } ?>
					 <hr>
        <div class="container-fluid">
            <div class="row">
              <?php
                     foreach ($sanpham as $value) {
				     echo    '<div class="col-md-4 md_4"  >';
                     echo    '<ul>';
                     echo    '<li><a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '"> <img src="../../public/upload/user/'. $value['img'] . '"></a></li>';
                     echo    '<li><a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '"><p><b>'. $value['title'] . '</b></p></a><p style="font-size:12px; color: #000;">'. $value['sumay'] .'</p></li>';
                     echo    '</ul>';
					 echo 	 '</div>';
                     }
              ?>
            </div><!--row-->
        </div><!--container -fuild-->
        <div class="container-fluid" style="padding-top:100px;" >
        	 <button type="button" class="btn btn-danger">Xem thêm...</button>
        </div> 
        <div class="container-fluid" style="padding-top:20px;">
        	<ul > <?php
			 foreach ($sanphamthem as $value) {
            echo	  '<li> <hr></li>';
            echo     '<li><a href="http://thethaodt.vn/tin-tuc/'. $value['id'] . '/'. $value['url'] . '"> <p style="color: #999">'. $value['title'] . '</p></a></li>';
			 }
			  ?> 
            </ul>
        </div>
       
                     
      </div><!--md-8-->
<!--====================================================================================================================-->     <div class="col-md-4">
           <div class="container-fluid" style=" padding-bottom:15px;">
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
             
          
          	 <div class="container-fluid tag_follow" style="padding-top:15px;">
              	 <ul>
                    <li><a href=""> <img src="../../access/images/300x250.jpg" ></a></li>
                    <li><a href=""> <img src="../../access/images/300x250_LMMM.png"  ></a></li>
                    
            	</ul>
            </div>      
      </div><!--md-4-->

  </div><!--row chính-->
</div><!--khung noi dung chinh-->  
   
   
   
<!--========================================================================================================================== ViDeo--> 	

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
                    <tr><h3  align="left"><b>Danh sách đối tác</b></h3></tr>
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
</div><!--<div style="background:#000; height:30% auto;">--><!-- ========================================================================================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../access/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
    <script src="../../access/bootstrap-3.1.1-dist/js/docs.min.js"></script>
</body>
</html>
