<!DOCTYPE html>

<?php include('db.php');

$sql="SELECT * FROM tasks ";

$rows=$db->query($sql);


 ?>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title</title>
</head>

<body>
      <div class="container">
          <div class="row">
            <center><h1>To do list</h1></center>

    <div class="col-md-10 col-md-offset">
              <table class="table">
                <button class="btn btn-success" data-target="#myModal"  data-toggle="modal">Add Task</button>
                <button class="btn btn-default pull-right" >Print</button>
                <hr><br>
                <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Task</h4>
      </div>
      <div class="modal-body">
        <form action="add.php" method="POST">
           <div class="form-group" >
               <label>Task Name</label>
               <input type="text" name="task"  required class="form-control"></input>
           </div>
              <input type="submit"  name="send" value="send" class="btn btn-success"></input>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<thead>
  <tr>
    <th>N0</th>
    <th>Task</th>
  </tr>
</thead>
<tbody>
  <tr>
    <?php while($row = $rows -> fetch_assoc()) :
    ?>
    <th scope="row"><?php echo $row['id']?></th>
    <td class="col-md-10"><?php echo $row['name']?></td>
    <td>
        <a href="#" class="btn btn-success">Edit</a>
    </td>
    <td>
        <a href="#" class="btn btn-danger">Delete</a>
    </td>
  </tr>
<?php endwhile;?>
</tbody>
</table>
            </div>


          </div>

      </div>
</body>
</html>
