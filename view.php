<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
        img{
            width: 1454px;
            height: 290px;
            margin-left: -8px; 
            margin-top: -8px;

        }

        #nav{
            height: 50px;
            background:linear-gradient(white,blue); 
        }
        #nav ul{
            list-style: none;
        }
        #nav ul li a{
            float: left;
            text-decoration: none;
            color: black;
            padding: 0px; 40px; 
            text-align: center;
            line-height: 50px;
            height: 50px;
            padding-left:20px;
        padding-right:20px; 
        }
        #nav ul li a:hover{
            background-color: grey;
            color: black;

        }
        #nav ul li h5{
            float: right;
            margin-top: -0px;
            margin-right: 10px;
        }
        #nav ul li h5 a:hover{
            background-color: grey;
            color: white;
        }
        #nav ul li a.active{
            background-color: grey;
            color: black;
        }
        li{
        display:inline-block;
        
        }
        img{
        width:70%;
        }
    </style>
</head>
<body>
<div id="header">

</div>
<div id="body">
 <table width="80%" border="1">
    <tr>
    <th colspan="4">your uploads...<label><a href="upload.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
 $sql="SELECT * FROM tbl_uploads";
 $result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    
</div>
</body>
</html>