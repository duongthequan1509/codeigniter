<div>
<form method="post" action="file:///C|/xampp/htdocs/www/codeigniter/application/controllers/book.php/them">
<table align="left">
<tr>
<td>Id: </td>
<td><input type="text" name="id" /></td>
</tr>
<tr>
<td>Ten sach: </td>
<td><input type="password" name="name" /></td>
</tr>



<input type="submit" name ="submit " value="them " /></a></td>
</tr>

</table>
</form>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<div>

 <?php    
 echo $this->table->generate($data); // tạo table
 echo $this->pagination->create_links(); // tạo link phân trang
?> 
<div>