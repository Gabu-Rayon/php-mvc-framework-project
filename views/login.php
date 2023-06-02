<?php
/** @var $this \app\core\View */
$this->title = 'Login'; 


/** @var $model \app\models\User */

?>
<h1>Login</h1>

<?php $form = \app\core\form\Form::begin('',"post")?>

<?php  echo $form->field($model,'email')?>

<?php  echo $form->field($model,'password')->passwordField() ?>

<button type="submit" class="btn btn-primary">Login</button>

<?php echo \app\core\form\Form::end()?>

<p>Don't Have an Account <a href="/register">Register Here</a></p>