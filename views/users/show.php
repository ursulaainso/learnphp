<?php include __DIR__ . '/../partials/header.php' ?>

<table class="table table-striped table-hover">
   <tbody>
      <tr>
         <th>ID</th>
         <td><?= $user->id ?></td>
      </tr>
      <tr>
         <th>Name</th>
         <td><?= $user->name ?></td>
      </tr>
      <tr>
         <th>Password</th>
         <td><?= $user->password ?></td>
      </tr>
   </tbody>
</table>

<?php include __DIR__ . '/../partials/pagefoot.php' ?>