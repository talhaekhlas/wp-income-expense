<div class="wrap">
    <?php 
        $page_title        = $url == 'income_sector' ? 'Income Sector Creation Form' : 'Expense Sector Creation Form';
        $sector_name_label = $url == 'income_sector' ? 'Income Sector Name' : 'Expense Sector Name';
        $button_name       = $url == 'income_sector' ? 'Add Income Sector' : 'Add Expense Sector';
        $type              = $url == 'income_sector' ? 1 : 2;
    ?>
    
    <div class="form-position">
        <form action="" method="post">   
            <label for="name"><h2><?php _e( $sector_name_label, 'wpcodal-pf' ); ?></h2></label>
            <input type="text" name="name" id="name" class="regular-text" value="">
            <input type="hidden" name="type" id="name" class="regular-text" value="<?php echo $type; ?>">
            <?php 
                wp_nonce_field( 'new-income-expense-sector' ); 
                submit_button( __( $button_name, 'wpcodal-pf' ), 'primary', 'submit_income_expense_sector' );
            ?>
        </form>
    </div>
    
</div>