<?php
foreach($nav as $row){
    if ($row['lang']=='en'){

echo'
            <div class="pafender">
                <a>Home</a><span> &nbsp>&nbsp</span><a class="activ" href="#">Trade </a>
            </div>
            <br class="clear">
			<div id="container" class="home">
            <div class="baner pading">
                    <div class="big_box_top">
                        <div class="big_box_buttom">
                            <div class="big_box_l_r">
                                <div class="imeg">
                                    <a href="'.base_url().'main/lang/en/tubings">
                                        <img src="/img/Knopka1.png" alt="Тюбинги чугунные">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="baner">
                    <div class="big_box_top">
                        <div class="big_box_buttom">
                            <div class="big_box_l_r">
                                <div class="imeg">
                                    <a href="'.base_url().'main/lang/en/rk">
                                        <img src="/img/Knopka2.png" alt="">

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="baner pading">
                    <div class="big_box_top">
                        <div class="big_box_buttom">
                            <div class="big_box_l_r">
                                <div class="imeg">
                                    <a href="'.base_url().'main/lang/en/pv">
                                        <img src="/img/Knopka3.png" alt="Прокатные валки">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="baner">
                    <div class="big_box_top">
                        <div class="big_box_buttom">
                            <div class="big_box_l_r">
                                <div class="imeg">
                                    <a href="'.base_url().'main/lang/en/ko">
                                        <img src="/img/Knopka4.png" alt="">
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>';
    }
    else{
echo'
            <div class="pafender">
                <a>Главная</a><span> &nbsp>&nbsp</span><a class="activ" href="#">Трейд </a>
            </div>
            <br class="clear">
			<div id="container" class="home">
            <div class="baner pading">
                    <div class="big_box_top">
                        <div class="big_box_buttom">
                            <div class="big_box_l_r">
                                <div class="imeg">
                                    <a href="'.base_url().'main/lang/ru/tubings">
                                        <img src="/img/Knopka1.png" alt="Тюбинги чугунные">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="baner">
                    <div class="big_box_top">
                        <div class="big_box_buttom">
                            <div class="big_box_l_r">
                                <div class="imeg">
                                    <a href="'.base_url().'main/lang/ru/rk">
                                        <img src="/img/Knopka2.png" alt="">

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="baner pading">
                    <div class="big_box_top">
                        <div class="big_box_buttom">
                            <div class="big_box_l_r">
                                <div class="imeg">
                                    <a href="'.base_url().'main/lang/ru/pv">
                                        <img src="/img/Knopka3.png" alt="Прокатные валки">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="baner">
                    <div class="big_box_top">
                        <div class="big_box_buttom">
                            <div class="big_box_l_r">
                                <div class="imeg">
                                    <a href="'.base_url().'main/lang/ru/ko">
                                        <img src="/img/Knopka4.png" alt="">
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>';
    }
break;}

?>