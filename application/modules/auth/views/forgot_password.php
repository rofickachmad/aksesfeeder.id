<div class="panel panel-info" style="margin-top:30px">
	  
	  <div class="panel-body" >
 <p class="text-center"><img style="width:100px;" alt="logo STIE PGRI Dewantara" class="image img-reponsive" src="<?php echo assets_url('images/logo.png'); ?> "> </p>
<h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div <?php ( ! empty($message)) && print('class="alert alert-info"'); ?> id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password");?>

    <p>
        <label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> <br />
        <?php echo bs_form_input($email);?>
    </p>

    <p><?php echo bs_form_submit('submit', lang('forgot_password_submit_btn'));?></p>
    
<?php echo form_close();?>
	  </div>
</div>
