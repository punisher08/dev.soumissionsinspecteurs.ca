<?php

$tr = get_sub_field('fields');

$page_slug = get_post_field( 'post_name' );

?>
    <div>
     <?php echo $tr['top_content'];?>
    </div>

    <table class="table-<?php echo $page_slug?>">
    <tbody>
    <tr class="tr-<?php echo $page_slug?>">
        <th width="257"><strong><?php echo $tr['th1']; ?></strong></th>
        <th width="224"><strong><?php echo $tr['th2']; ?></strong></th>
        <th width="272"><strong><?php echo $tr['th3']; ?></strong></th>
    </tr>
    <tr class="tr-<?php echo $page_slug?>">
        <td width="257"><?php echo $tr['tr1-column1']; ?></td>
        <td width="224"><?php echo $tr['tr1-column2']; ?></td>
        <td width="272"><?php echo $tr['tr1-column3']; ?></td>
    </tr>
    <tr class="tr-<?php echo $page_slug?>">
        <td width="257"><?php echo $tr['tr2-column1']; ?></td>
        <td width="224"><?php echo $tr['tr2-column2']; ?></td>
        <td width="272"><?php echo $tr['tr2-column3']; ?></td>
    </tr>
    </tbody>
    </table>
    
    <div>
     <?php echo $tr['below_content']; ?>
    </div>
    

