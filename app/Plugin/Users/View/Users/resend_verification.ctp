<?php
$this->set("title_for_layout","Request Password");
?>
<div class="users form">
	<h1><?php echo __d('users', 'Resend the Email Verification'); ?></h1>
	<p><?php echo __d('users', 'Please enter the email you used for registration and you\'ll get an email with further instructions.'); ?></p>
	<?php
	echo $this->Form->create($model, array(
		'url' => array(
			'admin' => false,
			'action' => 'resend_verification')));
	echo $this->Form->input('email', array(
		'label' => __d('users', 'Your Email'),
		'type' => 'email'));
	echo $this->Form->submit(__d('users', 'Submit'));
	echo $this->Form->end();
	?>
</div>
<?php echo $this->element('Users.Users/sidebar'); ?>