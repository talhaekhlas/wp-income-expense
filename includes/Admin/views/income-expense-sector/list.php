
<div class="wrap">
    <div>
        <?php $page_name = strtolower($page); ?>
        <span align="center" class="income-expense-sector-list-title"><?php _e("$page List","wpcodal-pf"); ?></span>
        <a href="<?php echo admin_url( "admin.php?page={$page_name}_sector&action=new" ); ?>" class="page-title-action">
            Add New
        </a>
    </div>
    
    <table border="1" width="50%" class="income-expense-sector-table">
        <caption><h1 align="center"><?php _e("$page List","wpcodal-pf"); ?></h1></caption>
        <thead>
            <tr>
                <th>Sl</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Salary</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Business1</td>
            </tr>
        </tbody>
    </table>
    
</div>