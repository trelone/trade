$(document).ready(function(){

w=$(window).width();
$( function(){
	if(w>1900){
        $(".home").css("position","absolute")
        $(".home").css("top","50%")
        $(".home").css("left","50%")
	    $(".home").css("margin-top","-215px")
        $(".home").css("margin-left","-500px")
		$(".home").css("height","515px")

	}
	if(w<1025 ){
        $(".pafender").css("padding-left","5px")
        $(".logo").css("padding-left","5px")
        $(".block_menu").css("margin-left","0px")
        $(".block_catalog").css("margin-left","0px")
        $(".text_block").css("width","645px")
        $(".text_block").css("padding","0 10px")
        $(".block").css("width","1000px")

	}
	if(w>1025 && w<1281){
        $(".text_block").css("padding","0 20px")
        $(".text_block").css("width","680px")
        $(".block").css("width","1060px")
	}
});
	
     });