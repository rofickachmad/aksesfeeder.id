<div class="row" style="margin-top:40px;">
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 ">
    
</div>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
    
    <div class="panel panel-default" style="">
        <div class="panel-body">
            <p class="text-center"> </p>
            <p class="text-center"><img width="200px" src="<?= assets_url('images/logo.png')?>"> </p>
            <h2 class="text-center">SIKA PGRI DEWANTARA</h2>
            <h1><?php echo lang('login_heading');?></h1>
    <p><?php echo lang('login_subheading');?></p>

    <div <?php ( ! empty($message)) && print('class="alert alert-info"'); ?> id="infoMessage"><?php echo $message;?></div>

          
    <?php echo form_open("auth/login");?>

        <p>
            <?php echo lang('login_identity_label', 'identity');?>
            <?php echo bs_form_input($identity);?>
        </p>

        <p>
            <?php echo lang('login_password_label', 'password');?>
            <?php echo bs_form_input($password);?>
        </p>

        <p>
            <?php echo lang('login_remember_label', 'remember');?>
            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
        </p>

        <p><?php echo bs_form_submit('submit', lang('login_submit_btn'));?></p>
<div class="pull-right">
        
        <a href="<?php echo domain() ?>pmb" class="btn btn-block btn-info"><i class="fa fa-star"></i> Modul PMB</a>
    </div>
    
    <?php echo form_close();?>


    <p><a href="auth/forgot_password" rel="async" ajaxify="<?php echo site_url('auth/auth_ajax/ion_auth_dialog/forgot_password'); ?>"><?php echo lang('login_forgot_password');?></a></p>

        
        </div>
    </div>
    </div>

</div>