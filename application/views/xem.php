<head>    
    
</head>
<body>
    <h2 align="center"> NEWS </h2>
    <p align="right"><a href="http://codeigniter.vnn/quiz/Logout"><input type='submit' name='ok' value='Logout' /></a></p>
    <table align='center' width='400' border='1'>
        <tr>
           
            <th>Name</th>
            
            <th>Content</th>
          
        </tr>	
        <?php
       
        foreach ($data as $value) {
            echo '<tr >';
            
            echo '<td>' . $value['name'] . '</td>';
            
            echo '<td> <a href="http://codeigniter.vnn/quiz/tin?tinid=' . $value["id"] . '" >Link</a></td>';
           
            echo '</tr >';
        }
        ?>

    </table>
</body><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

