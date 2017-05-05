$(_=>{
    //Make main the full height of the screen
    
    let main_height = $(window).height() 
    
    main_height = main_height - $('header').outerHeight() 
    main_height = main_height - $('footer').outerHeight() 

    if ($('#wpadminbar').outerHeight()) {
        main_height = main_height - $('#wpadminbar').outerHeight() 
    }

    $('main').css({'min-height' : main_height})
})

