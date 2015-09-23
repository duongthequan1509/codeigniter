<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    echo form_open('user-view');
    echo form_fieldset('Đăng ký :');
    echo form_label('User name :');
    echo form_input('username').'<br />';
    echo form_error('username');    
    echo form_label('Password :');
    echo form_password('pass').'<br />';
    echo form_error('username');        
    echo form_label('Email :');
    echo form_password('email').'<br />';
    echo form_error('email');        
    echo form_label('Năm sinh :');
    echo form_input('year').'<br />';
    echo form_error('year');    
    $loc = array (0    => '---------------',
                  1 => 'HCM',
                  2 => 'HN',
                  3 => 'HP'
                  );
    echo form_label('Location : ');
    echo form_dropdown('loc',$loc).'<br />';
    echo form_error('loc');        
    echo form_submit('ok','Lưu');
    echo form_fieldset_close();    
    
    
?>
</body>
</html>