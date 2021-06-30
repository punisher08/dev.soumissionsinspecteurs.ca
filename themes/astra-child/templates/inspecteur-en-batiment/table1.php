<?php

$tr = get_sub_field('fields');
$page_slug = get_post_field( 'post_name' );

?>
<style>
    td{
        padding:10px;
    }
</style>
</style>
<div class="container">
    <div class="with-padding">
    <table class="table-<?php echo $page_slug?>">
    <tbody class="<?=$page_slug;?>-tbody">
    <tr class="tr-<?php echo $page_slug?> table-head-<?=$page_slug;?>">
        <div class="<?=$page_slug?>-tr-title"><?=$tr['main_title'];?></div>
        <th width="257"><strong><?php echo $tr['th1']; ?></strong></th>
        <th width="224"><strong><?php echo $tr['th2']; ?></strong></th>
    </tr>
    <tr class="tr-<?php echo $page_slug?>">
        <td width="257"><?php echo $tr['table-row1']['column1']; ?></td>
        <td width="224"><?php echo $tr['table-row1']['column2']; ?></td>

    </tr>
    <tr class="tr-<?php echo $page_slug?>">
    <td width="257"><?php echo $tr['table-row2']['column1']; ?></td>
        <td width="224"><?php echo $tr['table-row2']['column2']; ?></td>
      
    </tr>
    <tr class="tr-<?php echo $page_slug?>">
    <td width="257"><?php echo $tr['table-row2']['column1']; ?></td>
        <td width="224"><?php echo $tr['table-row2']['column2']; ?></td>

    </tr>
    <?php 
    if($tr['table-row4']['column1'] != null){
    ?>
    <tr class="tr-<?php echo $page_slug?>">
    <td width="257"><?php echo $tr['table-row4']['column1']; ?></td>
        <td width="224"><?php echo $tr['table-row4']['column2']; ?></td>
        
    </tr>
    <tr class="tr-<?php echo $page_slug?>">
    <td width="257"><?php echo $tr['table-row5']['column1']; ?></td>
        <td width="224"><?php echo $tr['table-row5']['column2']; ?></td>
        
    </tr>
    <tr class="tr-<?php echo $page_slug?>">
    <td width="257"><?php echo $tr['table-row6']['column1']; ?></td>
        <td width="224"><?php echo $tr['table-row6']['column2']; ?></td>
        
    </tr>
    <tr class="tr-<?php echo $page_slug?>">
    <td width="257"><?php echo $tr['table-row7']['column1']; ?></td>
        <td width="224"><?php echo $tr['table-row7']['column2']; ?></td>
        
    </tr>
    <tr class="tr-<?php echo $page_slug?>">
    <td width="257"><?php echo $tr['table-row8']['column1']; ?></td>
        <td width="224"><?php echo $tr['table-row8']['column2']; ?></td>
        
    </tr>
    <?php 
    }
    if($tr['table-row9']['column1'] != null){
    ?>
    <tr class="tr-<?php echo $page_slug?>">
    <td width="257"><?php echo $tr['table-row9']['column1']; ?></td>
        <td width="224"><?php echo $tr['table-row9']['column2']; ?></td>
        
    </tr>
    <tr class="tr-<?php echo $page_slug?>">
    <td width="257"><?php echo $tr['table-row10']['column1']; ?></td>
        <td width="224"><?php echo $tr['table-row10']['column2']; ?></td>
        
    </tr>
    <?php } ?>
    <?php if($tr['table-row11']['column1'] != null){ ?>
    <tr class="tr-<?php echo $page_slug?>">
    <td width="257"><?php echo $tr['table-row11']['column1']; ?></td>
        <td width="224"><?php echo $tr['table-row11']['column2']; ?></td>
        
    </tr>
  <?php } ?>
    </tbody>
    </table>
    
    <div>
     <?php echo $tr['below_content']; ?>
    </div>
    </div>
</div>
   
    

