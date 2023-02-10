<?php include 'head.php'; ?>

<div class="d-flex align-items-center login-container" id="app">
    <h2>Sign Up</h2>
    <form>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" v-model="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" v-model="password">
      </div>
      <div class="form-group">
        <label for="pwd">Confirm Password:</label>
        <input type="password" class="form-control" id="confirm_pwd" v-model="confirmPassword">
      </div>
      <div class="form-group">
        <label for="firstname">First Name:</label>
        <input type="text" class="form-control" id="firstname" v-model="firstName">
      </div>
      <div class="form-group">
        <label for="lastname">Last Name:</label>
        <input type="text" class="form-control" id="lastname" v-model="lastName">
      </div>
      <button type="submit" class="btn btn-lg btn-primary btn-block" @click.prevent="submitForm">Submit</button>
    </form>
  </div>
  <?php include 'footer.php' ?>