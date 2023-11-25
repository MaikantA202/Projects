<?php   
 $conn=mysqli_connect("localhost","root","","bin"); //database connection
 $query="select * from enter_data order by Percentage DESC";  
 $connect=mysqli_query($conn,$query);  
 $num=mysqli_num_rows($connect); //check in database any data have or not  
 echo $num;
 ?>  
 <!-- <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Bin Data</title>  
      <style>
           .card{
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
            width:80%;
            transition: 0.5s;
            background-color:whitesmoke;
            padding: 5px;
            border-radius: 5px;
            margin:auto;
           }
           .card:hover{
            box-shadow: rgba(14, 30, 37, 0.12) 16px 32px 64px 16px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
           }
           .card>div{
            text-align: center;
            color: teal;
           }
           .card>h2{
            text-align: center;
            color:teal;
           }
           body{  
                width: 100%;  
                background-color:white;  
           }    
           table{  
                border-collapse: collapse;  
                width: 100%; 
                border: radius 10px; 
           }  
           table th{  
                background-color: teal;  
                color: #fff;  
                padding: 10px;  
           }  
           table td{  
                padding: 12px;  
                color: teal;  
                text-align: center;  
           }  
      </style>  
 </head>  
 <body style="background-color: lavenderblush;">  
 <div class="card">  
    <h2>Bin Data</h2>
      <table border="1px">  
           <tr>   
                <th>Block</th>  
                <th>Location</th>  
                <th>Percentage of Bin Filled</th> 
                <th>Cleaning Frequency</th>
                <th>Area Maintainance</th>
           </tr>  
           <?php   
               //  if ($num>0) {  
               //       while($data=mysqli_fetch_assoc($connect)){  
               //            echo "<tr>    
               //                 <td>".$data['Location']."</td>  
               //                 <td>".$data['Area']."</td>  
               //                 <td>".$data['Percentage']."</td>
               //                 <td>".$data['Clean']."</td>  
               //                 <td>".$data['Services']."</td>
               //                 </tr> ";
               //              }
               //          }  
           ?>
      </table> 
 </div>  
 </body>  
 </html>   -->
