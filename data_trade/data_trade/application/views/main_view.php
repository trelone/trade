<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>ДТС</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
        <script type="text/javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
<!-- Incompetent Browsers -->
<!--[if gte IE 7]>
    <link rel="stylesheet" type="text/css" media="screen,projection" href="/css/ie.css" />
<![endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33510894-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter15987829 = new Ya.Metrika({id:15987829,
                    clickmap:true,
                    trackLinks:true, webvisor:true});
        } catch(e) {}
    });
    
    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/15987829" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	</head>

	<body>

	<div id="wrapper">
        <div class="lang">
        <ul class="lang_ul">
            <?php
            if(isset($contact)){
                foreach($ln as $res){
                    if($res['lang']=='ru'){
                 echo"    <li><a class='ru activ_ln' href='#'>RU</a></li>
                          <li><a class='en ' href='".base_url()."main/lang/en/contact'>EN</a></li>";
                    }else{
                 echo"    <li><a class='ru' href='".base_url()."main/lang/ru/contact'>RU</a></li>
                          <li><a class='en activ_ln' href=''>EN</a></li>";
                    }
                }
            }else if(isset($o_nas)){
                foreach($ln as $res){
                    if($res['lang']=='ru'){
                 echo"    <li><a class='ru activ_ln' href='#'>RU</a></li>
                          <li><a class='en ' href='".base_url()."main/lang/en/o_nas'>EN</a></li>";
                    }else{
                 echo"    <li><a class='ru' href='".base_url()."main/lang/ru/o_nas'>RU</a></li>
                          <li><a class='en activ_ln' href=''>EN</a></li>";
                    }
                }
             }else if(isset($page)){
                foreach($ln as $res){
                    if($res['lang']=='ru'){
                 echo"    <li><a class='ru activ_ln' href='#'>RU</a></li>
                          <li><a class='en ' href='".base_url()."main/lang/en/".$page[0]['url']."'>EN</a></li>";
                    }else{
                 echo"    <li><a class='ru' href='".base_url()."main/lang/ru/".$page[0]['url']."'>RU</a></li>
                          <li><a class='en activ_ln' href=''>EN</a></li>";
                    }
                }
               }else{
                foreach($ln as $res){
                    if($res['lang']=='ru'){
                 echo"    <li><a class='ru activ_ln' href='#'>RU</a></li>
                          <li><a class='en ' href='".base_url()."main/lang/en/'>EN</a></li>";
                    }else{
                 echo"    <li><a class='ru' href='".base_url()."main/lang/ru/'>RU</a></li>
                          <li><a class='en activ_ln' href=''>EN</a></li>";
                    }
                }
        }
            ?>

        </ul>
            </div>
        <div class="shadow-top"></div>
            <div id="header">
                <div class="logo">
                    <?php if($ln[0]['lang']=='ru'){
                    echo'<img src="/img/logo.png" alt="" usemap="#figure">';
                    echo' <map  name="figure" style="">
                        <area class="lg" shape="poly" coords="0,0,0,80,350,80,350,65,80,65,80,0" alt="" href="'.base_url().'"main" " title="">
                    </map>';
                    }else{echo'<img src="/img/logo_en.png" alt="" usemap="#figure">';
                    echo' <map  name="figure" style="">
                        <area class="lg" shape="poly" coords="0,0,0,80,350,80,350,65,80,65,80,0" alt="" href="'.base_url().'main/lang/en " title="">
                    </map>';
                }
                    ?>
                </div>
                <div class="contact">
                    <div class="phone_block">
                        +38 [056] <span id="phone">770 49 01</span>
                    </div>
                    <div class="email">
                        root@dts.dp.ua
                    </div>
                </div>
                <ul id="nav">
                    <?php
                            foreach($nav as $row){
                                if($menu_activ=='contact'){
                                    if($row['url']=='contact'){
                                         echo"<li class='nav menu_activ' id='".$row['url']."'><a href='".base_url()."main/lang/".$ln[0]['lang']."/".$row['url']."'>".$row['name']."</a></li>";
                                    }
                                    else{
                                         echo"<li class='nav' id='".$row['url']."'><a href='".base_url()."main/lang/".$ln[0]['lang']."/".$row['url']."'>".$row['name']."</a></li>";
                                    }
                                }
                                else if($menu_activ=='o_nas'){
                                    if($row['url']=='o_nas'){
                                         echo"<li class='nav menu_activ' id='".$row['url']."'><a href='".base_url()."main/lang/".$ln[0]['lang']."/".$row['url']."'>".$row['name']."</a></li>";
                                    }
                                    else{
                                         echo"<li class='nav' id='".$row['url']."'><a href='".base_url()."main/lang/".$ln[0]['lang']."/".$row['url']."'>".$row['name']."</a></li>";
                                    }
                                }else if($menu_activ=='none'){
                                        echo"<li class='nav' id='".$row['url']."'><a href='".base_url()."main/lang/".$ln[0]['lang']."/".$row['url']."'>".$row['name']."</a></li>";
                                }
                            }
                        
                    ?>
                </ul>

            </div><!-- #header-->
         <div class="shadow-bt"></div>

		<div id="middle">

               <?php
                if(!isset($contact) and !isset($page) and !isset($o_nas)){
                $this->load->view('main_content');
                }
                if(isset($contact)){
                $this->load->view('contact_view');
                }
                if(isset($page)){
                $this->load->view('page_view');
                }
                if(isset($o_nas)){
                 $this->load->view('o_nas_view');
                }
                ?>
			
		</div><!-- #middle-->

	</div><!-- #wrapper -->

    <div id="footer">
                <div class="shadow-top_ft"></div>
				<?php if($ln[0]['lang']=='ru'){
					echo '<div class="text_ft">© 2012 СПГ “Днепротехсервис”</div>';
				}else{
					echo '<div class="text_ft">© 2012 SPG “Dneprotechservice”</div>';
				}
				?>
            </div>
         <div class="shadow-bt_ft"></div>
	</div><!-- #footer -->

	</body>
</html>