<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Админ</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/js/media/css/demo_table_jui.css" type="text/css" />
    <link rel="stylesheet" href="/js/media/css/jquery.dataTables_themeroller.css" type="text/css" />
    <link rel="stylesheet" href="/js/media/themes/jquery-ui-1.8.21.custom/css/custom-theme/jquery-ui-1.8.21.custom.css" type="text/css" />
    <script type="text/javascript" src="/js/media/js/jquery.js"></script>
    <script type="text/javascript" src="/js/media/js/jquery.dataTables.js"></script>
    <!--        <script type="text/javascript" src="/js/jquery.js"></script>-->
    <script type="text/javascript" src="/js/main.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/jscripts/tiny_mce/jquery.tinymce.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jscripts/tiny_mce/tiny_mce_popup.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jscripts/tiny_mce/tiny_mce.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jscripts/tiny_mce/tiny_mce_src.js"></script>
    <!-- Incompetent Browsers -->
    <!--[if gte IE 7]>
    <link rel="stylesheet" type="text/css" media="screen,projection" href="/css/ie.css" />

    <![endif]-->
		<script type="text/javascript">
			$().ready(function() {
				tinyMCE.init({
					// General options
					mode : "textareas",
					theme : "advanced",
					plugins : "imagemanager,filemanager,autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

					language : "ru",
					theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
					theme_advanced_buttons2 : "tablecontrols,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor,|,fullscreen",
					theme_advanced_buttons3 : "styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage|,ltr,rtl,|,cut,copy,paste,pastetext,pasteword,|,insertlayer,moveforward,movebackward,absolute,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print",


					theme_advanced_toolbar_location : "top",
					theme_advanced_toolbar_align : "left",
					theme_advanced_statusbar_location : "bottom",
					//theme_advanced_resizing : true,

					// Skin options
					skin : "o2k7",
					skin_variant : "silver",

					// Example content CSS (should be your site CSS)
					content_css : "css/example.css",

					// Drop lists for link/image/media/template dialogs
					template_external_list_url : "js/template_list.js",
					external_link_list_url : "js/link_list.js",
					external_image_list_url : "js/image_list.js",
					media_external_list_url : "js/media_list.js",
					width:"800",
					height:"700",
					// Replace values for the template plugin
					template_replace_values : {
							username : "Some User",
							staffid : "991234"
					}
				});
                $('#send_table').dataTable({
                    "bJQueryUI":true,
                    "sPaginationType":"full_numbers"
                });
			});

		</script>
	</head>

	<body>

	<div id="wrapper">
    <form id='exit' method="post" action="/main"></br>
       <input type="submit" value="Выход из админки">
   </form>
        <div class="lang">
        <ul class="lang_ul">
            <?php
                foreach($ln as $res){
                    if($res['lang']=='ru'){
                 echo"    <li><a class='ru activ_ln' href='#'>RU</a></li>
                          <li><a class='en ' href='".base_url()."admin/lang/en/'>EN</a></li>";
                    }else{
                 echo"    <li><a class='ru' href='".base_url()."admin/lang/ru/'>RU</a></li>
                          <li><a class='en activ_ln' href=''>EN</a></li>";
                    }
                }

            ?>

        </ul>
            </div>
        <div class="shadow-top"></div>
            <div id="header">
                <!--<div class="logo">

                    <img src="/img/logo.png" alt="" usemap="#figure">
                     <map  name="figure" style="">
                        <area class="lg" shape="poly" coords="0,0,0,80,350,80,350,65,80,65,80,0" alt=""  title="">
                    </map>


                </div>
                <div class="contact">
                    <div class="phone_block">
                        +38 [056] <span id="phone">770 49 01</span>
                    </div>
                    <div class="email">
                        root@dts.dp.ua
                    </div>
                </div>-->
                <ul id="nav">
                    <?php
                     foreach($menu as $row){
                         echo"<li class='admin_menu nav ' id='".$row['url']."'><a href='".base_url()."admin/lang/".$ln[0]['lang']."/".$row['url']."'>".$row['menu']."</a></li>";
                     }
                    echo "<li class='admin_menu nav'><a href='".base_url()."admin/lang/ru/report'>Письма </a></li>";
                    ?>
                </ul>
            </div><!-- #header-->
         <div class="shadow-bt"></div>

		<div id="middle">
            <div id="container">
            <?php
                 if(isset($page)){
                     foreach($page as $row){
                          echo" <form class='edit' method='post' action='".base_url()."admin/lang/".$row['lang']."/update/".$row['id']."'>
                                 <label for='main_editor'>При загрузке картинки необходимо:</br> 1.Выбрать картинку через кнопку меню 'Добавить/изменить изображение'<br />2.Ширина изображение не должна превышать размеры основного контента т.е. 635px <br />3. Нажать кнопку вставить </label><br />4.Размер изображения можете просмотреть в параметрах изображения вкладка Положение </label><br />
                                 <textarea id='main_editor' name='text'>".$row['text']."</textarea><br />
                                <input type='submit' >
                            </form>";
                     }
                 }
                if(isset($sendSet) and ($type=='report')){
                    $i=0;
                    echo "<table id='send_table'><thead><th>Id</th><th>Тема</th><th>Имя</th><th>Email</th><th>Текст</th><th>Дата</th></thead>";
                    echo "<tbody>";
                    foreach($sendSet as $row){
                        echo "<tr><td>".++$i."</td><td>".$row['tema']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['text']."</td><td>".$row['date_time']."</td></tr>";
                    }
                    /*foreach($sendSet as $row){
                        {
                            echo "<tr>";
                            foreach($row as $item){
                              echo "<td>".$item."</td>";
                            }
                            echo "</tr>";
                        }
                    }*/
                    //echo $this->table->generate($sendSet);
                    echo "</tbody>";
                    echo "</table>";
                }
            ?>

        </div>
		</div><!-- #middle-->

	</div><!-- #wrapper -->


            <div id="footer">
                <div class="shadow-top_ft"></div>
                <div class="text_ft">© 2012 SPG “Dnieprotechservice”</div>
            </div>
         <div class="shadow-bt_ft"></div>
	</div><!-- #footer -->

	</body>
</html>