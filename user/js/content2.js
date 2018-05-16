$.post('events/fetchpolicy2.php', function(ajaxData){
    console.log(ajaxData);
    var fetch = $('#fetch');
    fetch.html (ajaxData);
});
