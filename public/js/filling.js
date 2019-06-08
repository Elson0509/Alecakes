function changeLanguage(lang){
    /*Changing the active class of the language selector*/
    $(".dropdown-item").each(function(){
        $(this).removeClass("active");
    });
    $("#"+lang+"sl").addClass("active");
    /*end Changing the active class*/
    
    /*geting data language by ajax*/
    $.getJSON('/api/'+lang+'/fillings', function(data){
        /*Changing menu data*/
        $('.navbar-brand').attr('href', data.index_link);
        $('#menu li a').each(function(i=0){
            $(this).attr('href', data.menu_links[i].link);
            $(this).text(data.menu_links[i++].name);
            
        });
        /*Changing text*/
        $('.recheios h1').text(data.filling_data.title);
        $('.recheios p').text(data.filling_data.text);
        /*Changing Table*/
        $('tbody tr').remove();
        data.fillings.forEach(function(recheio){
            $('tbody').append("<tr><td>" + recheio.name + "</td><td>");
        });
        /*changing footer text*/
        $('.text-footer ').text(data.footer_info.text);
    });
}