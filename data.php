<form method="post">
                    
                  <input type="submit" name="num">
                    <input type="hidden" name="val" value="5">

                  </form>

                  <?php 
                    if(isset($_POST['num'])){
                        echo $a =$_POST['val'];
                    }
                  
                  
                  ?>