<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>
<div class="col-md-10 table-responsive p-3">
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
                    <th>Agent</th>
                    <th>Status</th>
                    <th>Photo</th>
                    <th colspan='2'>Action</th>
                </tr>
            </thead>
       <?php while ($row = $result->fetch_assoc()) {?>
            <tbody>
            <tr>
                <td><?=$row['land_name']?></td>
                <td><?=$row['land_area']?></td>
                <td><?=$row['land_cost']?></td>
                <td value="<?=$row['land_agent_id']?>"><?=$row['land_agent_name']?></td>
                <td value="<?=$row['ls_id']?>"><?=$row['is_name']?></td>
                <td>
                     <?php if($row['land_img']!=''){ 
                    echo "<img height='50' src='../../dist/images/land/$row[land_img]'>";
                   }else{ 
                     echo '<img height="50" src="../../dist/images/pic/avatar.png" alt="Image">';
                   }
                   ?>
                </td>
                <td>
                <a class='btn nav-link' href='updatedata.php?id=<?=$row['land_id']?>'>
                  <i class='fa-regular fa-pen-to-square fa-xl'></i></a>
                </td>

                <td>
                  <a class='btn nav-link' id ="sub" data-id="<?=$row['land_id']?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class='fa-regular fa-pen-to-square fa-xl'></i></a>
                </td>
                
                <td>
                  <a class='btn nav-link' href='Delete.php?id=<?=$row['land_id']?>'>
                  <i class='fa-solid fa-trash fa-xl' style='color: #ff0000;'></i></a>
                </td>
            <tr>
            
            
            </tbody>
            <?php }?>
        </table>
        <?php }
                
        ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<script type='text/javascript'>
            $(document).ready(function(){
                $('#sub').click(function(){
                    var userid = $("#sub").attr("data-id");
                    $.ajax({
                        url: 'updatedatacopy.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#exampleModal').modal('show'); 
                        }
                    });
                });
            });
            </script>
        </div>
    </div>
</div>

Modal
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>