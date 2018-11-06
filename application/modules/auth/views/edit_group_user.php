<h1><?php echo lang('edit_user_heading');?></h1>
<p><?php echo lang('edit_user_subheading');?></p>

<?php echo form_open(uri_string());?>

  
    <?php if ($this->ion_auth->is_admin()): ?>

        <h3><?php echo lang('edit_user_groups_heading');?></h3>
        <?php foreach ($groups as $group):?>
            <label class="checkbox">
                <?php
                $gID=$group['id'];
                $checked = null;
                $item = null;
                foreach($currentGroups as $grp) {
                    if ($gID == $grp->id) {
                        $checked= ' checked="checked"';
                        break;
                    }
                }
                ?>
                <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                <?php echo $group['name'];?>
            </label>
        <?php endforeach?>

    <?php endif ?>

    <?php echo form_hidden('id', $user->id);?>
   
    <p><?php echo bs_form_submit('submit', lang('edit_user_submit_btn'));?></p>

<?php echo form_close();?>
