
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->




<form id="formAuthentication" action="trait.php" method="POST">
<?php include "header.php" ?>


    <!-- Email input -->
    <div class ="col-6 p-5 mx-auto">
    <?php if(isset($_GET['error'])){ ?>
			  <p class="mb-4" style="color:red;">Merci de vérifier vos accès !!!</p>
			  <?php }else{ ?>
              <p class="mb-4">Please sign-in to your account and start the adventure</p>
				<?php } ?>
    <div class="form-outline mb-4">
      <input type="email" id="form2Example1" class="form-control" name="email" />
      <label class="form-label" for="form2Example1">Email address</label>
    </div>
  
    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" id="form2Example2" class="form-control" name="password" />
      <label class="form-label" for="form2Example2">Password</label>
    </div>

    <!-- 2 column grid layout for inline styling -->
   
    <!-- Submit button -->
    <button type="submit" class="btn btn-danger btn-block mb-4">Sign in</button>
  
    <!-- Register buttons -->
    <div class="text-center">
      <p>Not a member? <a href="register.php">Register</a></p>
      <p>or sign up with:</p>

      </button>
    </div>
</div>
  </form>