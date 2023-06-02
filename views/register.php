<?php
/** @var $model \app\models\User */

/** @var $this \app\core\View */

use app\core\form\Form;
$this->title = 'Register'; 



?>
<h1>Create an Account</h1>

<?php $form = Form::begin('',"post")?>
<div class="row">
    <div class="col">
        <?php  echo $form->field($model,'firstname')?>
    </div>
    <div class="col">
        <?php  echo $form->field($model,'lastname')?>
    </div>
</div>

<?php  echo $form->field($model,'email')?>

<?php  echo $form->field($model,'password')->passwordField() ?>

<?php  echo $form->field($model,'confirmPassword')->passwordField() ?>

<button type="submit" class="btn btn-primary">Register</button>

<?php echo Form::end()?>


<!-- <form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label>Firstname</label>
                <input type="text" name="firstname" value="<?php //echo $model->firstname ?>"
                    class="form-control<?php //echo $model->hasError('firstname') ? '  is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?php //echo $model->getFirstError('firstname')  ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="mb-3">
            <label>Lastname</label>
            <input type="text" name="lastname" value="<?php //echo $model->lastname ?>"
                class="form-control <?php //echo $model->hasError('lastname') ? '  is-invalid' : '' ?>">
            <div class="invalid-feedback">
                <?php //echo $model->getFirstError('lastname')  ?>
            </div>
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
-->
<p>Already Have an Account <a href="/login">Login Here</a></p>