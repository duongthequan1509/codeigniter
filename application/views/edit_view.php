<head>
    <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
</head>
<body>
<center>
    <p><h3>EDIT NEWS</h3></p>

<p align="right"><a href="http://codeigniter.vnn/quiz/Logout"><input type='submit' name='ok' value='Logout' /></a></p>
<form  action="http://codeigniter.vnn/quiz/edit" method="post" >
    <table>
        <tr>
            <td style="color:#00C">Name: </td>
            <td><input name="name" type="text" size="160" value="<?php echo $name; ?>" ></td>
        </tr>
        <td style="color:#00C">Desseo:</td>
        <td><input type="text" name="desseo" size="160" value="<?php echo $desseo; ?>"/></td>
        </tr>
        <tr>
            <td style="color:#00C">Content:</td>
            <td><textarea id="editor1" name="content"><?php echo $content; ?></textarea></td>
        </tr>
        <tr>
            <td style="color:#00C">Active:
            <td>
                <input type="checkbox" name="active" value="1" <?php if ($active == 1) echo "checked"; ?> >
            </td>
        <tr>
            <td><div></div></td>
            <td><input name="submit" type="submit" value="Edit " /></td>
        <input type="hidden" name="id" value=" <?php echo $id ?>">
        </tr>
    </table>
    </tr>
</form>
</center>      
</tr>
<script type="text/javascript">
    CKEDITOR.replace('editor1');
</script>
</body>           
</table>



