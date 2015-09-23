<head>    
    
</head>
<body>
    <h2 align="center"> NEWS </h2>
   <p align="right"><a href="http://codeigniter.vnn/quiz/Logout"><input type='submit' name='ok' value='Logout' /></a></p>
    <table align='center' width='800' border='1'>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Url</th>
            <th>Desseo</th>
            <th>Content</th>
            <th>Status</th>
            <th><a href="http://codeigniter.vnn/quiz/insert">Insert</a></th>
        </tr>	
        <?php
        foreach ($data as $value) {
            echo '<tr >';
            echo '<td>' . $value['id'] . '</td>';
            echo '<td>' . $value['name'] . '</td>';
            echo '<td>' . $value['url'] . '</td>';
            echo '<td>' . $value['desseo'] . '</td>';
            echo '<td>' . $value['content'] . '</td>';
            echo '<td>' . $value['active'] . '</td>';
            echo '<th ><a href="http://codeigniter.vnn/quiz/edit?newsid=' . $value["id"] . '">Edit</a></th>';
            echo '<th ><a href="http://codeigniter.vnn/quiz/delete?newsid=' . $value["id"] . '">Del</a></th>';
            echo '</tr >';
        }
        ?>

    </table>
</body>