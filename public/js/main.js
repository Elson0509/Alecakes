function changeLanguage(lang){
    /*Changing the active class of the language selector*/
    $(".dropdown-item").each(function(){
        $(this).removeClass("active");
    });
    $("#"+lang+"sl").addClass("active");
    /*end Changing the active class*/
    console.log(lang);
    /*geting data language by ajax*/
    $.getJSON('/api/'+lang, function(data){
        /*Changing menu data*/
        $('.navbar-brand').attr('href', data.index_link);
        $('#menu li a').each(function(i=0){
            $(this).attr('href', data.menu_links[i].link);
            $(this).text(data.menu_links[i++].name);
        });
        /*Changing Parallax data*/
        $('.parallax h1').text(data.parallax_info.title);
        $('#par1').text(data.parallax_info.text1);
        $('#par2').text(data.parallax_info.text2);
        $('#par3').text(data.parallax_info.text3);
        /*Changing cards TODO apenas link funciona*/
        $('.card').each(function(i=0){
            //href
            $(this).children('a').attr('href', data.card_infos[i].href);
            //alt
            $(this).children('a').children('img').attr('alt', data.card_infos[i].imgalt);
            //title
            $(this).children('.card-body').children('h3').text(data.card_infos[i].title);
            //date
            //$(this).children('.card-body').children('.card-text').children('.text-muted').text(data['cards'][i]['textsmall']);
            //card description
            $(this).children('.card-body').children('.card-description').text(data.card_infos[i].text);
        });
        /*changing footer text*/
        $('.text-footer ').text(data.footer_info.text);
    });
}