<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="h_notice">

    <?php for ($i=0; $i<$list_count; $i++) {  ?>
        <p class="">
            <?php
         

            echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\" class='text-white'> ";
          
            echo $list[$i]['subject'];

            echo "</a>";
			
		
            ?>
           
    </p>
    <?php }  ?>

</div>
