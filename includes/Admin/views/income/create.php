<div class="wrap">
    <h1><?php _e( 'New Income', 'light2-inex' ); ?></h1>

    <form action="" method="post">
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="name"><?php _e( 'Name', 'light2-inex' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="name" id="name" class="regular-text" value="">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="address"><?php _e( 'Address', 'light2-inex' ); ?></label>
                    </th>
                    <td>
                        <textarea class="regular-text" name="address" id="address"></textarea>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="phone"><?php _e( 'Phone', 'light2-inex' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="phone" id="phone" class="regular-text" value="">
                    </td>
                </tr>
            </tbody>
        </table>

        <?php wp_nonce_field( 'new-income' ); ?>
        <?php submit_button( __( 'Add Income', 'light2-inex' ), 'primary', 'submit_income' ); ?>
    </form>
</div>