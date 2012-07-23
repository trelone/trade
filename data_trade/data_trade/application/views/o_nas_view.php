<?php
if($ln[0]['lang']=='ru'){
echo'
            <div class="pafender">
                <a>Главная</a><span> &nbsp>&nbsp</span><a href="'.base_url().'/main">Трейд</a><span> &nbsp>&nbsp</span><a class="activ" href="#">';
                    foreach($o_nas as $res){
                        echo $res["menu"];
                    }echo'</a>
            </div>
            <br class="clear">

			<div id="container">
                <div class="block">

                    <div class="text_block">';
                        foreach($o_nas as $row){
                         echo $row["text"];
                        }

                 echo'  </div>

                </div>

			</div>';
}else{
echo'
            <div class="pafender">
                <a >Home</a><span> &nbsp>&nbsp</span><a href="'.base_url().'/main/lang/en">Trade</a><span> &nbsp>&nbsp</span><a class="activ" href="#">';
                    foreach($o_nas as $res){
                        echo $res["menu"];
                    }echo'</a>
            </div>
            <br class="clear">

			<div id="container">
                <div class="block">

                    <div class="text_block">';
                        foreach($o_nas as $row){
                         echo $row["text"];
                        }

                 echo'  </div>

                </div>

			</div>';
}
?>