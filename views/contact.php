<?php
/** */
/** @var $this \app\core\View */
/** @var $model  \app\models\ContactForm */

$this->title = 'Contact Us'; 

?>
<h1>Contact Us</h1>
<?php $form = \app\core\form\Form::begin('','post')  ?>

<?php echo $form->field($model,'subject') ?>

<?php echo $form->field($model,'email') ?>

<?php echo $form->field($model,'body') ?>

<button type="submit" class="btn btn-primary">Submit</button>

<?php \app\core\form\Form::end(); ?>

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