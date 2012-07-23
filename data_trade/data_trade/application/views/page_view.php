<?php
if($ln[0]['lang']=='ru'){
echo'
            <div class="pafender">
                <a >Главная</a><span> &nbsp>&nbsp</span><a href="'.base_url().'/main">Трейд </a><span> &nbsp>&nbsp</span><a class="activ" href="#">';
                    foreach($page as $res){
                        echo $res["menu"];
                    }echo'</a>
            </div>
            <br class="clear">

			<div id="container">
                <div class="block">
                    <div class="block_menu">
                        <div class="shadow_top_menu">
                            <div class="shadow_bt_menu">
                                <ul class="menu">
                                    <li class="activ_li"><a href="'.base_url().'/main/lang/ru/tubings">ТЮБИНГИ ЧУГУННЫЕ</a></li>
                                    <div class="razdelitel"></div>
                                    <li><a href="'.base_url().'/main/lang/ru/rk">Разгрузочные комплексы</a></li>
                                    <div class="razdelitel"></div>
                                    <li><a href="'.base_url().'/main/lang/ru/pv">прокатные валки</a></li>
                                    <div class="razdelitel"></div>
                                    <li><a href="'.base_url().'/main/lang/ru/ko">коксохимическое оборудование</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="text_block">';
                        foreach($page as $row){
                         echo $row["text"];
                        }

                 echo'  </div>
                <div class="block_catalog">
                    <div class="shadow_top_catalog">
                        <div class="shadow_bt_catalog">
                            <ul class="catalog">
                                <li>Каталог продукции</li>
                                <li><a class="cat_save" href="">Скачать</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>

			</div>';
}else {

echo'
            <div class="pafender">
                <a>Home</a><span> &nbsp>&nbsp</span><a href="'.base_url().'/main/lang/en">Trade </a><span> &nbsp>&nbsp</span><a class="activ" href="#">';
                    foreach($page as $res){
                        echo $res["menu"];
                    }echo'</a>
            </div>
            <br class="clear">

			<div id="container">
                <div class="block">
                    <div class="block_menu">
                        <div class="shadow_top_menu">
                            <div class="shadow_bt_menu">
                                <ul class="menu">
                                    <li class="activ_li"><a href="'.base_url().'/main/lang/en/tubings">Tunnel Lining Rings</a></li>
                                    <div class="razdelitel"></div>
                                    <li><a href="'.base_url().'/main/lang/en/rk">Rotary Railcar Dumper</a></li>
                                    <div class="razdelitel"></div>
                                    <li><a href="'.base_url().'/main/lang/en/pv">Mill rolls</a></li>
                                    <div class="razdelitel"></div>
                                    <li><a href="'.base_url().'/main/lang/en/ko">Coke oven equipment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="text_block">';
                        foreach($page as $row){
                         echo $row["text"];
                        }

                 echo'  </div>
                <div class="block_catalog_en">
                    <div class="shadow_top_catalog">
                        <div class="shadow_bt_catalog_en">
                            <ul class="catalog cat_li_en">
                                <li class="cat_en"><span>Catalog <br>and <br>Specifications</span></li>
                                <li><a class="cat_save_en" href="">save</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>

			</div>';
}
?>