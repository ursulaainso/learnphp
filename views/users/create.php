<?php include __DIR__ . '/../partials/header.php' ?>

<form action="/admin/users" method="POST">
   <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input name="name" type="text" class="form-control" id="name" placeholder="Name">
   </div>

   <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input name="email" type="text" class="form-control" id="email" placeholder="name@example.com">
   </div>

   <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input name="password" type="text" class="form-control" id="password">
   </div>

   <input type="submit" class="btn btn-primary" value="Add">
</form>

<?php include __DIR__ . '/../partials/pagefoot.php' ?>