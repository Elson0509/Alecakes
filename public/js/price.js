function changeLanguage(lang){
    /*Changing the active class of the language selector*/
    $(".dropdown-item").each(function(){
        $(this).removeClass("active");
    });
    $("#"+lang+"sl").addClass("active");
    /*end Changing the active class*/

    /*geting data language by ajax*/
    $.getJSON('/api/'+lang+'/price', function(data){
        
        /*Changing menu data*/
        $('.navbar-brand').attr('href', data.index_link);
        $('#menu li a').each(function(i=0){
            $(this).attr('href', data.menu_links[i].link);
            $(this).text(data.menu_links[i++].name);
        });
        
        /*changing text price*/
        $('#text_price').text(data.price_info.text);

        /*changing people and price info*/
        for(i=0;i<data.prices.length;i++){
            $('#price'+(i+1)).text(data.prices[i].people+" "+data.price_info.people_text+" - "+data.currency+data.prices[i].price);
        }
        
        /*changing footer text*/
        $('.text-footer ').text(data.footer_info.text);
    });
}

