<?php
include('db_connect.php');
if(isset($_POST['delete']))
{
        $id_delete = mysqli_real_escape_string($conn,$_POST['id_delete']);
        $sql= "DELETE FROM lists WHERE id=$id_delete";
        if(!mysqli_query($conn,$sql))
        echo 'query error:'. mysqli_error($conn);
        
}
$sql='SELECT id,event,store,groceries FROM lists ORDER BY time_created';
$result=mysqli_query($conn,$sql);
$lists=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
 
<?php include('template/header.php');?>
<h4>Lists:</h4>
<div>
    <?php foreach($lists as $list) {?>

                <div >
                    <table>
                        <tr>
                    <td><h5><?php echo htmlspecialchars($list['event']);?></h5> </td>
                    <td><form action="index.php" method="POST">
                    <input type="hidden" name="id_delete" value=" <?php echo $list['id']; ?> ">
                            <input type="submit" name="delete" value="x">
                        </form>
                            </td>
                    </tr>
                    <tr><td><h5><?php echo htmlspecialchars($list['store']);?></h5> </td></tr>
                    <tr><td> <h5><?php echo htmlspecialchars($list['groceries']);?></h5></td></tr> <br><br>
    </table>
                </div>

    <?php } ?>
<?php include('template/footer.php');?> 

</html>