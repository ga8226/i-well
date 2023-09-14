<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
$thumb_width = 362.5;
$thumb_height = 1000;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="container-garim">
    <div class="h4 d-flex justify-content-between">
        <p class="main_p"><?php echo $bo_subject; ?></p>
       <span>
        <a href="http://ga8226.dothome.co.kr/bbs/board.php?bo_table=event_gallery" class="main-a">
            MORE VIEW
            <span class="main_span"><i class="bi bi-arrow-right-short"></i></span>
        </a>
       </span>
    </div>
    <div class="mainborder"></div>
    <div class="h4"></div>
    <div class="swiper swiper<?php echo $bo_table; ?>" >
  
        <div class="swiper-wrapper d-flex">
        <?php
        for ($i=0; $i<$list_count; $i++) {
        $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

        if($thumb['src']) {
        $img = $thumb['ori']; // 오리지널파일의 경로
        } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
        }
        $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="d-block" >';
        $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
        ?>
            <div class="swiper-slide">
                <a href="<?php echo $wr_href; ?>" class="me_img">
                <?php echo run_replace('thumb_image_tag', $img_content, $thumb);?>
                </a>
            </div>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
        <div class="empty_li">게시물이 없습니다.</div>
    <?php }  ?>
    </div>
  

    </div>
</div>
<script>
    var  swiper<?php echo $bo_table; ?> = new Swiper(".swiper<?php echo $bo_table; ?>"
  , {
      slidesPerView: 4,
      spaceBetween: 30,
      freeMode: true,
      autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
      pagination: {
        el: ".swiper<?php echo $bo_table; ?> .swiper-pagination",
        clickable: true,
      },
    });
  </script>
