<div class="container">
<h1 class="heading">Signup </h1>

<form method="post" action="./server/requests.php">
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="username" class="form-label">User Name</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="enter user name">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="email" class="form-label">User Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="enter user email">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="password" class="form-label">User Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="enter user password">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="address" class="form-label">User Address</label>
    <input type="text" name="address" class="form-control" id="address" placeholder="enter user address">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
  <button type="submit" name="signup" class="btn btn-primary">Signup</button>

  </div>

</form>

</div>