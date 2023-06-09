<header class="header_lhl_1_0_0">
    <div class="container">
        <div class="header_lhl_1_0_0__box">
            <div class="header_lhl_1_0_0__nav" id="headerMenuBtn">
                <img width="30" height="30" src="<?php echo $path ?>images/header-menu.svg" alt="">
            </div>
            <?php
                $postId = get_the_ID();
                if($postId == 10){
                    $div = 'h1';
                } else {
                    $div = 'div';
                }
                echo '
                    <'.$div.' class="header_lhl_1_0_0__logo">
                        <a href="/">
                            <img width="120" height="120" src="'.$path.'images/logo.svg" alt="">
                        </a>
                    </'.$div.'>
                ';
            ?>
            <div class="header_lhl_1_0_0__boxMenu">
                <div class="header_lhl_1_0_0__boxTop">
                    <div class="header_lhl_1_0_0__boxCall">
                        <span class="header_lhl_1_0_0__boxCallText">Hotline: + 84024.63.28.47.68</span>
                        <span class="header_lhl_1_0_0__boxCallIcon header_lhl_1_0_0__boxCallIconHotline"></span>
                    </div>
                    <div class="header_lhl_1_0_0__boxCall">
                        <span class="header_lhl_1_0_0__boxCallText">Tel: + 84024.63.28.47.68</span>
                        <span class="header_lhl_1_0_0__boxCallIcon header_lhl_1_0_0__boxCallIconPhone"></span>
                    </div>
                    <form action="/" id="searchform" name="searchform" method="get" onsubmit="return checkSearch()">
                        <div class="header_lhl_1_0_0__search">
                            <input id="s" name="s" type="text" placeholder="Type your keyword here... ...">
                            <button type="submit">
                                <img width="14" height="14" src="<?php echo $path ?>images/search.png" alt="search">
                            </button>
                        </div>
                    </form>
                    <div class="header_lhl_1_0_0__lang">
                        <div class="header_lhl_1_0_0__langActive">
                            <span>Languages: </span>
                            <img src="<?php echo $path ?>images/en.png" title="Languages" alt="Languages">
                            <span class="arrow"></span>
                        </div>
                        <ul class="header_lhl_1_0_0__langShadow">
                            <li>
                                <a href="/" title="English">
                                    <span>English</span>
                                    <img src="<?php echo $path ?>images/en.png" title="English" alt="English">
                                </a>
                            </li>
                            <li>
                                <a href="/vi/" title="Vietnam">
                                    <span>Vietnam</span>
                                    <img src="<?php echo $path ?>images/vi.png" title="English" alt="English">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="header_lhl_1_0_0__list" id="headerSideBar">
                    <div class="header_lhl_1_0_0__logoMb">
                        <a href="/">
                            <img width="120" height="120" src="<?php echo $path ?>images/logo.svg" alt="">
                        </a>
                    </div>
                    <li class="header_lhl_1_0_0__item">
                        <a class="header_lhl_1_0_0__link" href="/">home</a>
                    </li>
                    <?php
                        foreach( $field as $key => $value){
                            foreach($value as $key2 => $list){
                                if( $list['acf_fc_layout'] == 'menu_don' ):
                                    $main_tt = explode(" | ",  $list["title"]);
                                    echo '
                                        <li class="header_lhl_1_0_0__item">
                                            <a class="header_lhl_1_0_0__link" href="'.$main_tt[1].'">'.$main_tt[0].'</a>
                                        </li>
                                    ';
                                elseif( $list['acf_fc_layout'] == 'menu_sub' ):
                                    $main_tt = explode(" | ",  $list["title"]);
                                    echo '
                                        <li class="header_lhl_1_0_0__item">
                                            <a class="header_lhl_1_0_0__link" href="#">'.$main_tt[0].'</a> 
                                            <div class="header_lhl_1_0_0__dropdown">
                                                '.$list["col1"].'
                                            </div>
                                        </li>
                                    ';
                                elseif ( $list['acf_fc_layout'] == 'menu_sub_full' ):
                                    $main_tt = explode(" | ",  $list["title"]);
                                    $main_ct = explode("&nbsp;",  $list["col1"]);
                                    echo '
                                        <div class="header_lhl_1_0_0__menuItem haveDropdown">
                                            <a class="header_lhl_1_0_0__menuTitle" href="'.$main_tt[1].'">'.$main_tt[0].'</a>
                                            <div class="header_lhl_1_0_0__dropdown">
                                                <div class="header_lhl_1_0_0__dropdownBox">
                                    ';
                                        foreach($main_ct as $num => $value){
                                            echo '
                                                <div class="header_lhl_1_0_0__dropdownCate">
                                                    '.$value.'
                                                </div>
                                            ';
                                        }
                                    echo '
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                endif;
                            }
                        }
                    ?>
                </ul>
            </div>
            <div class="header_lhl_1_0_0__bg" id="headerBg"></div>
        </div>
    </div>
</header>