<?php
include('db_connect.php');
$groceries='';
$event='';
$store='';
$error=array('event'=>'','store'=>'','groceries'=>'');
  if(isset($_POST['submit'])){
      $event=$_POST['event'];
      $store=$_POST['store'];
      if(empty($event))
      $error['event']='Please enter the name of the event';
   // echo htmlspecialchars($_POST['event']);
    if(empty($store))
    $error['store']='Please enter the name of the store';
    if(empty($_POST['groceries']))
    $error['groceries']='Please enter your required groceries';
    if(!empty($_POST['groceries']))
    {  $groceries=$_POST['groceries'];
    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$groceries))
    $error['groceries']='Please use commas!';
    }
    if(!array_filter($error))
    {       
            $event=mysqli_real_escape_string($conn,$_POST['event']);
           $groceries=mysqli_real_escape_string($conn,$_POST['groceries']);
           $store=mysqli_real_escape_string($conn,$_POST['store']);

           $sql="INSERT INTO lists(event,store,groceries) VALUES('$event','$store','$groceries')";
           if(mysqli_query($conn,$sql))
           {

           }
           else{
               echo 'query error:' . mysqli_error($conn);
           }
           
    }
}
?>
<!DOCTYPE html>
<html>
 
<?php include('template/header.php');?>
<section>
    <h4>Add a Grocery List</h4>
    <form action="add.php" method="POST">
        <label>Event:</label>
        <input type="text" name="event" value="<?php echo $event?>">
        <div class="error"><?php echo $error['event']; ?></div>
        <label>Store Name:</label>
        <input type="text" name="store"  value="<?php echo $store?>">
        <div class="error"><?php echo $error['store']; ?></div>
        <label>Groceries (use commas)</label>
        <input type="text" name="groceries" value="<?php echo $groceries?>">
        <div class="error"><?php echo $error['groceries']; ?></div>
    <div>
        <input type="submit" name="submit" value="submit">
</div>
</form>
</section>
<?php include('template/footer.php');?> 

</html>