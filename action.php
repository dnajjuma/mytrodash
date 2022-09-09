<?php 
include('security.php');
//session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php'); 


 ?>




<?php
include('database/dbconfig.php');

$output='';

if(isset($_POST['query'])){
    $search=$_POST['query'];
    $stmt=$connection->prepare("SELECT * FROM participant_details WHERE participantName LIKE %$search%");

}
else{
    $stmt=$connection->prepare("SELECT * FROM participant_details");

}
$stmt->execute();
$result=$stmt->get_result();

if($result->num_rows>0){
    $output ="
    
                <thead>
                        <tr>
                        <th>#</th>
                        <!-- <th> Image </th> -->
                        <th> Participant </th>
                        <th> Parent </th>
                        <th> Age </th>
                        <th> School </th>
                        <th> Contact </th>
                        <th> Event </th>
                        <th> EDIT </th>
                        <th> DELETE </th>
                        
                    </tr>
                </thead>
                <tbody>";
                while($row=$result->fetch_assoc()){
                    $output .="
                    <tr>
                        <td>".$row['participantName']."</td>
                        <td>".$row['parentName']."</td>
                        <td>".$row['age']."</td>
                        <td>".$row['school']."</td>
                        <td>".$row['contact']."</td>
                        <td>".$row['event']."</td>              
                </tr>";
                        }
                        $output .="</tbody>";
                        echo $output;
                    }
                    else{
                        echo "<h3>No record found</h3>";
                    }

?>

<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>