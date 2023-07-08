<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>
<div class="col-md-10 table-responsive-sm p-3 res">
<?php 
    $sql = "SELECT * FROM land natural JOIN land_agent Natural JOIN land_status"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    ?>
        <table class='table table-light align-middle text-center table-bordered'>
            <thead>
                <tr> 
                    <th>Name</th> 
                    <th>Area</th>
                    <th>Cost</th>
                    <th>Land Masurement</th>
                    <th>Agent</th>
                    <th>Status</th>
                    <th>Photo</th>
                  <?php if($_SESSION['role']==1){?>  
                    <th colspan='2'>Action</th>
                  <?php }?>
                </tr>
            </thead>
       <?php while ($row = $result->fetch_assoc()) {?>
            <tbody>
            <tr>
                <td><?=$row['land_name']?></td>
                <td><?=$row['land_area']?></td>
                <td><?=$row['land_cost']?></td>
                <td><?=$row['lme']?></td>
                <td value="<?=$row['land_agent_id']?>"><?=$row['land_agent_name']?></td>
                <td value="<?=$row['ls_id']?>"><?=$row['is_name']?></td>
                <td>
                     <?php if($row['land_img']!=''){ 
                    echo "<img height='50' src='../../dist/images/agent/$row[land_img]'>";
                   }else{ 
                     echo '<img height="50" src="../../dist/images/pic/avatar.png" alt="Image">';
                   }
                   ?>
                </td>
                <?php if($_SESSION['role']==1){?>
                <td>
                  <a class='btn nav-link' href='updatedata.php?id=<?=$row['land_id']?>'>
                  <i class='fa-regular fa-pen-to-square fa-xl'></i></a>
                   </td>
                
                <td>
                  <a class='btn nav-link' href='Delete.php?id=<?=$row['land_id']?>'>
                  <i class='fa-solid fa-trash fa-xl' style='color: #ff0000;'></i></a>
                </td>
                <?php } ?>
            <tr>
            
            
            </tbody>
            <?php }?>
        </table>
        <?php }
                
        ?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<script type='text/javascript'>
            $(document).ready(function(){
                $('.userinfo').click(function(){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'updatedata.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#exampleModal').modal('show'); 
                        }
                    });
                });
            });
            </script> -->
        </div>
    </div>
</div>