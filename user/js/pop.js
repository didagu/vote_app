//var modalHead = $('#modalHead');
var modal = $("#overlay");
//var modalFooter = $('#modalFooter');
//var modalContent = $('#modalContent');
var span = $(".close");
var button = $("#myLink");
button.click(function(){

    modal.show();
    $("#popup").show();
    //alert("hello");
});
span.click(function(){
    modal.hide();
    $("#popup").hide();
});
