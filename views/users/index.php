<?php include __DIR__ . '/../partials/header.php' ?>

<a class="btn btn-primary" href="/admin/users/create">Add User</a>

<table class="table table-striped table-hover">
   <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Actions</th>
   </thead>

   <tbody>
      <?php foreach($users as $user): ?>
         <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->password ?></td>
            <td>
               <div class="btn-group" role="group">
                  <a href="/admin/users/show?id=<?= $user->id ?>" class="btn btn-info">View</a>
                  <a href="/admin/users/edit?id=<?= $user->id ?>" class="btn btn-warning">Edit</a>
                  <a href="/admin/users/delete?id=<?= $user->id ?>"class="btn btn-danger">Delete</a>
               </div>
            </td>
         </tr>
      <?php endforeach ?>
   </tbody>
</table>

<?php include __DIR__ . '/../partials/pagefoot.php' ?>