<?php include __DIR__ . '/../partials/header.php' ?>

<form action="/admin/users/edit?id=<?=$user->id?>" method="POST">
   <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input name="name" type="text" class="form-control" id="name" placeholder="Name" value="<?=$user->name?>">
   </div>

   <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input name="email" type="text" class="form-control" id="email" placeholder="name@example.com" value="<?=$user->email?>">
   </div>

   <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input name="password" type="text" class="form-control" id="password">
   </div>

   <input type="submit" class="btn btn-primary" value="Update">
</form>

<?php include __DIR__ . '/../partials/pagefoot.php' ?>