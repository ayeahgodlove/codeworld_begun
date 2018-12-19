
<?php require 'registrationController.php'; if(count($errors)>0): ?>
<div class="errors" style="background-color: lightblue; border-radius: 10px; border: 1px solid #000; color: red; margin-left:30px;">
    <?php foreach($errors as $error): ?>
    <p style="text-align: center;"><?php echo $error; ?></p>
    <?php endforeach; ?>
</div>
<?php endif; ?>

