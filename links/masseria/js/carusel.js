jQuery(document).ready(function(){
function slide_show3() {
$(".main-image-3").animate({"opacity":"0"}, 1000)
$(".main-image-2").animate({"opacity":"1"}, 1000),$(".main-image").animate({"opacity":"1"}, 1000),$(".main-image-3").animate({"opacity":"0"}, 1000)
$(".main-image-2").animate({"opacity":"1"}, 3000),$(".main-image").animate({"opacity":"1"}, 3000),$(".main-image-3").animate({"opacity":"0"}, 3000)
$(".main-image-2").animate({"opacity":"0"}, 1000),$(".main-image-3").animate({"opacity":"0"}, 1000)
$(".main-image").animate({"opacity":"1"}, 1000),$(".main-image-2").animate({"opacity":"0"}, 1000),$(".main-image-3").animate({"opacity":"0"}, 1000)
$(".main-image").animate({"opacity":"1"}, 3000),$(".main-image-2").animate({"opacity":"0"}, 3000),$(".main-image-3").animate({"opacity":"0"}, 3000)

$(".main-image").animate({"opacity":"0"}, 3000)
$(".main-image-3").animate({"opacity":"1"}, 1000)
$(".main-image-3").animate({"opacity":"1"}, 3000, slide_show3)
};
slide_show3();
});