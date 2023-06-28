<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>
<div class="col-md-10 table-responsive p-3">
<?php 
    $sql = "SELECT * FROM booking natural JOIN booking_type 
    JOIN property ON property.property_id = booking.property_id
    JOIN payment ON payment.pay_id = booking.payment 
    ORDER BY booking.bking_id DESC
    "; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    ?>
        <table class='table table-light align-middle text-center table-bordered'>
            <thead>
                <tr> 
                    <th>Customar Name</th> 
                    <th>Address</th>
                    <th>Buget</th>
                    <th>Apratment</th>
                    <th>Booking Type</th>
                    <th>Payment</th>
                    <th colspan='2'>Action</th>
                </tr>
            </thead>
       <?php while ($row = $result->fetch_assoc()) {?>
            <tbody>
            <tr>
                <td><?=$row['bkng_name']?></td>
                <td><?=$row['bkng_area']?></td>
                <td><?=$row['bkng_cost']?></td>
                <td><?=$row['property_name']?></td>
                <td><?=$row['btype']?></td>
                <td><?=$row['payname']?></td>
                <td>
                  <a class='btn nav-link' href='updatedata.php?id=<?=$row['bking_id']?>'>
                  <i class='fa-regular fa-pen-to-square fa-xl'></i></a>
                   </td>
                
                <td>
                  <a class='btn nav-link' href='Delete.php?id=<?=$row['bking_id']?>'>
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
            </script>
