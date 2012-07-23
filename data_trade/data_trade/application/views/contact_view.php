<?php
if($ln[0]['lang']=='ru'){
echo'
           <div class="pafender">
                <a >Главная</a><span> &nbsp>&nbsp</span><a href="'.base_url().'/main">Трейд </a><span> &nbsp>&nbsp</span><a class="activ" href="#">Контакты </a>
            </div>
            <br class="clear">
			<div id="container">
          <div class="left">
                <h1>Контактная информация</h1>
                <div class="info">
                    <span class="office">Главный офис <div class="polosa"></div> </span><br class="clear">
                    ул. Симферопольская, 21<br>
                    г.Днепропетровск<br>
                    49005, Украина<br>
                    тел.: +38 (056) 770-49-01<br>
                    факс: +38 (056) 770-49-32<br>
                    e-mail: root@dts.dp.ua<br>
                    <div class="polosa_2"></div>

                </div>
                    <div class="block_map">
                    <div class="shadow-top_map">
                        <div class="shadow-bt_map">
                            <div class="map">
                            <iframe width="520" height="456" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ru/maps/ms?msa=0&amp;msid=209272261075665757330.0004c4ebecb85d0ac049a&amp;ie=UTF8&amp;t=m&amp;ll=48.447799,35.065853&amp;spn=0,0&amp;output=embed"></iframe><br /><small>Просмотреть <a href="https://maps.google.ru/maps/ms?msa=0&amp;msid=209272261075665757330.0004c4ebecb85d0ac049a&amp;ie=UTF8&amp;t=m&amp;ll=48.447799,35.065853&amp;spn=0,0&amp;source=embed" style="color:#0000FF;text-align:left">ДТС</a> на карте большего размера</small>
                            </div>
                         </div>
                    </div>
                    </div>
                </div>

                <div class="feetback">
                    <span class="office">Обратная связь</span></br>';
    echo'
                  
                   <form class="send" action="'.base_url().'main/lang/ru/contact/send" method="post">
                       <div class="block_form">
                    <div class="shadow-bt_form">
                        <label class="sp">Текст сообщения:</label></br>';
                        echo'<span style="color:red">'. form_error("text").'</span>';
                   echo'<textarea type="text" class="text" name="text" value="'.set_value("text").'"></textarea>
                    </div>
                        </div>

                    <div class="shadow-bt_form_2">
                    <label class="sp">Ваше имя:</label>';
                    echo'<span style="color:red">'. form_error("username").'</span>';
                    echo'<input type="text" class="fio" name="username" value="'.set_value("username").'">
                     </div>';

                    echo' <div class="shadow-bt_form_3">
                    <label class="sp">Ваша электронная почта:</label>';
                    echo'<span style="color:red">'. form_error("email").'</span>';
                    echo'<input type="text" class="email_tel"name="email"value="'.set_value("email").'">
                    </div>

                    <input type="submit" class="otpr png_all" value="Отправить">
                     <div class="shadow-otpr_form"></div>
                   </form>
                </div></div>';
}else{

echo'           <div class="pafender">
                <a >Home</a><span> &nbsp>&nbsp</span><a href="'.base_url().'/main/lang/en">Trade </a><span> &nbsp>&nbsp</span><a class="activ" href="#">Contacts </a>
            </div>
            <br class="clear">
			<div id="container">
          <div class="left">
                <h1>Contact Information</h1>
                <div class="info">
                    <span class="office">Head Office <div class="polosa"></div> </span><br class="clear">
                    street. Simferopolskaia, 21<br>
                    Dnepropetrovsk<br>
                    49005, Ukrain<br>
                    phone.: +38 (056) 770-49-01<br>
                    fax: +38 (056) 770-49-32<br>
                    e-mail: root@dts.dp.ua<br>
                    <div class="polosa_2"></div>

                </div>
                    <div class="block_map">
                    <div class="shadow-top_map">
                        <div class="shadow-bt_map">
                            <div class="map">
<iframe width="520" height="456" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ru/maps/ms?t=m&amp;msa=0&amp;msid=209272261075665757330.0004c51894d598233157d&amp;source=embed&amp;ie=UTF8&amp;ll=48.447507,35.065205&amp;spn=0.003245,0.005568&amp;z=17&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.ru/maps/ms?t=m&amp;msa=0&amp;msid=209272261075665757330.0004c51894d598233157d&amp;source=embed&amp;ie=UTF8&amp;ll=48.447507,35.065205&amp;spn=0.003245,0.005568&amp;z=17" style="color:#0000FF;text-align:left">DTS</a> a larger map</small>
                            </div>
                         </div>
                    </div>
                    </div>
                </div>

                <div class="feetback">
                    <span class="office">Contact us</span></br>';
    echo'

                   <form class="send" action="'.base_url().'main/lang/en/contact/send" method="post">
                       <div class="block_form">
                    <div class="shadow-bt_form">
                        <label class="sp">Message:</label></br>';
                         echo'<span style="color:red">'. form_error("text").'</span>';
                   echo'<textarea type="text" class="text" name="text" value="'.set_value("text").'"></textarea>
                    </div>
                        </div>

                    <div class="shadow-bt_form_2">
                    <label class="sp">Name:</label>';
                    echo'<span style="color:red">'. form_error("username").'</span>';
                    echo'<input type="text" class="fio" name="username" value="'.set_value("username").'">
                     </div>';

                    echo' <div class="shadow-bt_form_3">
                    <label class="sp">E-mail:</label>';
                    echo'<span style="color:red">'. form_error("email").'</span>';
                    echo'<input type="text" class="email_tel"name="email"value="'.set_value("email").'">
                    </div>

                    <input type="submit" class="otpr png_all" value="Submit">
                     <div class="shadow-otpr_form"></div>
                   </form>
                </div></div>';
}
?>