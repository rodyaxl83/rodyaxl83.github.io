$('article div.mostrarocultar').hide();
$('article div.mostrarocultar:first').show();

$('article div.enlace a').click(function(){
    
    $('article div.mostrarocultar').hide();
    
    var activeTab = $(this).attr('href');
    $(activeTab).show();
    return false;
})