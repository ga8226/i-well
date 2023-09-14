<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');

?>

<!-- 상단 시작 { -->
<div id="hd" class="fixed-top    ">
    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    
    <div id="hd_wrapper" class=" d-flex justify-content-between align-items-center mw-100 py-3 px-4  position-relative bg-white">
        <h1 id="logo">
            <a href="<?php echo G5_URL ?>">
            <?php echo latest('theme/fts','logo', 1 , 100); ?>
           
           </a>
        </h1>
        <nav id="gnb" class="col">
            <div class="gnb_wrap">
                <ul id="gnb_1dul" class="d-flex justify-content-center">
            
                    <li class="gnb_1dli gnb_mnal"><button type="button" class="gnb_menu_btn" title="전체메뉴"><i class="bi bi-list"></i><span class="">진료과목</span></button></li>
                    <?php
                    $menu_datas = get_menu_db(0, true);
                    $i = 0;
                    foreach( $menu_datas as $row ){
                        if( empty($row) ) continue;
                        $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                        $nm_arr = explode("|", $row['me_name']);  
                    ?>
                    <li class="gnb_1dli <?php echo $add_class; ?> <?php echo $nm_arr[1]; ?>" <?php echo $gnb_zindex--; ?>>
                        <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da">
                        <?php 

                        echo $nm_arr[0];
                         ?>
                       </a>
                        <?php
                        $k = 0;
                        foreach( (array) $row['sub'] as $row2 ){

                            if( empty($row2) ) continue; 

                            if($k == 0)
                                echo '<span class="bg">하위분류</span><div class="gnb_2dul"><ul class="gnb_2dul_box">'.PHP_EOL;
                        ?>
                            <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                        <?php
                        $k++;
                        }   //end foreach $row2

                        if($k > 0)
                            echo '</ul></div>'.PHP_EOL;
                        ?>
                    </li>
                    <?php
                    $i++;
                    }   //end foreach $row

                    if ($i == 0) {  ?>
                        <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                    <?php } ?>
                </ul>
                <div id="gnb_all">
                    <ul class="gnb_al_ul d-flex">
                        <?php
                        
                        $i = 0;
                        foreach( $menu_datas as $row ){

                            $nm_arr = explode("|", $row['me_name']);  
                            
                        ?>
                        <li class="gnb_al_li <?php echo $nm_arr[1];?>
                          ">
                            <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_al_a">
                            <?php echo $nm_arr[0] ?></a>
                            <?php
                            $k = 0;
                            foreach( (array) $row['sub'] as $row2 ){
                                if($k == 0)
                                    echo '<ul>'.PHP_EOL;
                            ?>
                                <li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>">
                                <?php echo $row2['me_name']
                                 ?></a></li>
                            <?php
                            $k++;
                            }   //end foreach $row2

                            if($k > 0)
                                echo '</ul>'.PHP_EOL;
                            ?>
                        </li>
                        <?php
                        $i++;
                        }   //end foreach $row

                        if ($i == 0) {  ?>
                            <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                        <?php } ?>
                    </ul>
                </div>
                <div id="gnb_all_bg"></div>
            </div>
        </nav>      
        <ul class="hd_login d-flex">        
            <?php if ($is_member) {  ?>
                
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
              
                <?php if ($is_admin) {  ?>
                <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
            <?php }  ?>
            <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
           
            <?php }  ?>

        </ul>
    </div>

    <div class="bg-dark text-center mx-n4 py-2 ad ">
        <?php echo latest('theme/notice_h','notice',1,100);?>
    </div>
    
   
    <script>
    
    $(function(){
        $(".gnb_menu_btn").click(function(){
            $("#gnb_all, #gnb_all_bg").show();
        });
        $(".gnb_close_btn, #gnb_all_bg").click(function(){
            $("#gnb_all, #gnb_all_bg").hide();
        });
      
         const hd_h = $("#hd").outerHeight();
         $("#wrapper").css('padding-top',  hd_h)

    });

    </script>
</div>
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper" class=<?php echo $loginpage; ?> >
<?php if (!defined("_INDEX_")) { ?>
    <!-- 메인뺀 나머지 -->
    <div id="container_wr" class="<?php echo $bo_table; ?>  <?php echo $co_id; ?>  mw-100 ">
   
    <div id="container" class="container-lg" >
       
        <!-- <h2 id="container_title">
            <span title="<?php //echo get_text($g5['title']); ?>">
            <?php //echo get_head_title($g5['title']); ?></span>
        </h2> -->
        <?php }