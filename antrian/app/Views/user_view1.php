

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TIKET BUS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<center><h1>TIKET EKSLUSIF</h1></center>
<div class="container mt-4">
<div class="d-flex justify-content-end">
	</div>
    <div class="d-flex justify-content-end">
    <a href="<?php echo ('/uasloket/antrian/public/user-form1') ?>" class="btn btn-success mb-2">Add User</a>
	</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-bordered" id="users-list1">
       <thead>
          <tr>
             <th>User Id</th>
             <th>Name</th>
             <th>Email</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($users1): ?>
          <?php foreach($users1 as $user1): ?>
          <tr>
             <td><?php echo $user1['id']; ?></td>
             <td><?php echo $user1['name']; ?></td>
             <td><?php echo $user1['email']; ?></td>
             <td>
             <a href="<?php echo ('/uasloket/antrian/public/edit-view1/'.$user1['id']);?>" class="btn btn-primary btn-sm">Edit</a>
            <a href="<?php echo ('/uasloket/antrian/public/delete1/'.$user1['id']);?>" class="btn btn-danger btn-sm">Delete</a>
            <a href="<?php echo ('/uasloket/antrian/public/pritn1/'.$user1['id']);?>" class="btn btn-primary btn-sm">Print</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#users-list1').DataTable();
  } );
</script>
</body>
</html>