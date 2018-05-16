$.post('events/fetchpolicy.php', function(ajaxData){
    console.log(ajaxData);
    var fetch = $('#fetch');
    fetch.html (ajaxData);
});
