
 


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

<?php 
$connection=mysqli_connect("localhost","root","","student_db") or die(mysqli_error($connection));
        


$q=mysqli_query($connection,"
    select * from student where is_delete=0

") or die(mysqli_error($connection));

echo "<center>";
echo "<table id='myTable' border='1'>";
echo "<tr>";
echo "<th>Student Id</th>";
echo "<th>Student Name</th>";
echo "<th>Student Gender</th>";
echo "<th>Student DOB</th>";
echo "<th>Email</th>";
echo "<th>Mobile No</th>";
echo "<th>Adress</th>";
echo "<th>Area</th>";
echo "<th>Pincode</th>";
echo "<th>BloodGroup</th>";
echo "<th>Action</th>";


echo "</tr>";

$i=0;
while($row=mysqli_fetch_array($q))
{
    $i++;
    echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>{$row['st_name']}</td>";
        echo "<td>{$row['st_gender']}</td>";
        echo "<td>{$row['st_dob']}</td>";
        echo "<td>{$row['st_email']}</td>";
        echo "<td>{$row['st_mobile']}</td>";
        echo "<td>{$row['st_address']}</td>"; 
        echo "<td>{$row['st_area']}</td>";
        echo "<td>{$row['st_pincode']}</td>";
        echo "<td>{$row['st_bloodgroup']}</td>";
        echo "<td><a href='edit.php?id={$row['st_id']}'>Edit</a> | <a href='del.php?delid={$row['st_id']}'>Delete</a></td>";
        
    echo "</tr>";
    
}

echo "</table>";
echo "</center>";

echo "<a  href='studentsignup.php'>Add record</a>";

 ?>


 <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
 </script>