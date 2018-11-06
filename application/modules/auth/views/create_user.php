<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
       
        <h1><?php echo lang('create_user_heading');?></h1>
        <p><?php echo lang('create_user_subheading');?></p>

        <div <?php ( ! empty($message)) && print('class="alert alert-info"'); ?> id="infoMessage"><?php echo $message;?></div>
    </div>

    <?php echo form_open("auth/create_user");?>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        
        <p>
            <?php echo lang('create_user_fname_label', 'first_name');?> <br />
            <?php echo bs_form_input($first_name);?>
        </p>

        <p>
            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
            <?php echo bs_form_input($last_name);?>
        </p>

        <p>
            <?php echo lang('create_user_company_label', 'company');?> <br />
            <?php echo bs_form_input($company);?>
        </p>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        
    
        <p>
            <?php echo lang('create_user_email_label', 'email');?> <br />
            <?php echo bs_form_input($email);?>
        </p>

        <p>
            <?php echo lang('create_user_phone_label', 'phone');?> <br />
            <?php echo bs_form_input($phone);?>
        </p>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        
    
        <p>
            <?php echo lang('create_user_password_label', 'password');?> <br />
            <?php echo bs_form_input($password);?>
        </p>

        <p>
            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
            <?php echo bs_form_input($password_confirm);?>
        </p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <p><?php echo bs_form_submit('submit', lang('create_user_submit_btn'));?></p>

    </div>


    <?php echo form_close();?>
</div>