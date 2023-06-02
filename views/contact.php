<?php
/** */
/** @var $this \app\core\View */
/** @var $model  \app\models\ContactForm */
use app\core\form\TextareaField;

use app\core\form\Form;

$this->title = 'Contact Us'; 

?>
<h1>Contact Us</h1>
<?php $form = Form::begin('','post')  ?>

<?php echo $form->field($model,'subject') ?>

<?php echo $form->field($model,'email') ?>

<?php echo new  TextareaField($model,'body') ?>
<br>
<button type="submit" class="btn btn-primary">Submit</button>

<?php Form::end(); ?>

<!-- 
<form action="" method="post">
    <div class="mb-3">
        <label>Subject</label>
        <input type="text" name="subject" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>Body</label>
        <textarea name="body" class="form-control">

        </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> -->