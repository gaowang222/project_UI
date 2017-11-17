/**
 * Created by Administrator on 2017/11/16.
 */
$(function () {
    var map;
    initMap();
});
function initMap(){
    map = new BMap.Map("map");
    map.centerAndZoom("北京", 15);
}