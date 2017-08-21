<?php  
 $connect = mysqli_connect("localhost", "root", "", "regpage");  
 $query ="SELECT * FROM `student_details`";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>GLOBAL INFOTECH | ADMIN-PANAL</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">All Entries Related to Admissions</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="student_details" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Reg_no</td>  
                                    <td>Name</td>  
                                    <td>Phone</td>  
                                    <td>Dob</td>  
                                    <td>Email</td>
				                    <td>Course Selected</td>
                                    <td>Total fees</td>
                               </tr>  
                          </thead>  
                          <?php  
                         if($result)
                          while($row =  mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["reg_no"].'</td>  
                                    <td>'.$row["name"].'</td>  
                                    <td>'.$row["phone_number"].'</td>  
                                    <td>'.$row["dob"].'</td>  
                                    <td>'.$row["email"].'</td>
				            <td>'.$row["course_selected"].'</td>
                            <td>'.$row["total_fees"].'</td>
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#student_details').DataTable();  
 });  
 </script>  