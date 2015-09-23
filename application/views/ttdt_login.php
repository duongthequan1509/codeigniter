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
 
 
 <body>
<div class="col-md-3 col-md-offset-4" style="padding-top:100px;">
<h3>Đăng Nhập</h3>
 <form action="" name="login" method="post" style="margin-bottom:15px" onsubmit="return check_submit()">
                Name:<br>
                <input type="text" class="form-control" placeholder="Name" name="name">
                Password: <br>
                <input type="password" class="form-control" placeholder="Password" name="password"><br>
               
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
            alert('Xin vui lòng nhập tên !');
            document.forms['login'].name.focus();
            return false;
        }
        else if (frm.password.value == '')
        {
            alert('Xin vui lòng nhập password !');
            document.forms['login'].password.focus();
            return false;
        }
       
        else
            return true;
    }
</script>
 
</body>                                  