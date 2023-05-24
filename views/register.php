<h1>Register</h1>
<form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label>Firstname</label>
                <input type="text" name="firstname" vale="<?php //echo $model->firstname ?>"
                    class="form-control  <?php //echo $model->hasError('firstname') ? 'is-invalid' : '' ?>">
            </div>
            <div class="invalid-feedback">
                <?php //echo $model->getFirstError($attribute)  ?>
            </div>
        </div>

        <div class="col">
            <div class="mb-3">
                <label>Lastname</label>
                <input type="text" name="lastname" class="form-control">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label>Confirm Password</label>
        <input type="password" name="confirmPassword" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
</form>

<p>Already Have an Account <a href="/login">Login Here</a></p>