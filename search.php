  
            

                        <?php
                        $connection = mysqli_connect('localhost','root','','amari');
                       if(isset($_POST['search'])){
                           $searchKey = $_POST['search'];
                           $query = "SELECT * FROM participant_details WHERE participantName LIKE '%$searchKey%'";
                       } else{
                        $query = "SELECT * FROM participant_details";
                        $searchKey = "";
                       }
                        
                        
                        $result = mysqli_query($connection, $query);



                        ?>

                       
