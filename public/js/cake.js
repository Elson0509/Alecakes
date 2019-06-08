function changeLanguage(lang, id){
    /*Changing the active class of the language selector*/
    $(".dropdown-item").each(function(){
        $(this).removeClass("active");
    });
    $("#"+lang+"sl").addClass("active");
    /*end Changing the active class*/
    
    /*geting data language by ajax*/
    $.getJSON('/api/'+lang+'/cake/'+id, function(data){
        /*Changing menu data*/
        $('.navbar-brand').attr('href', data.info_about_language.index_link);
        $('#menu li a').each(function(i=0){
            $(this).attr('href', data.info_about_language.menu_links[i].link);
            $(this).text(data.info_about_language.menu_links[i++].name);
            
        });
        /*Changing text*/
        $('.cake-title').text(data.cake.title);
        $('.cake-text').text(data.cake.text);
        /*changing footer text*/
        $('.text-footer ').text(data.info_about_language.footer_info.text);
    });
}