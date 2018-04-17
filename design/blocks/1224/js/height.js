
    $(document).ready(function () {     
    //Initiate equalize on load     
    equalize();     
    });     
    //Equalize on resizing of window        
    $(window).resize(function () {      
        removeHeights();        
        equalize();     
    });     
    function equalize() {       
        $(".container .row").each(function () {      
            var heights = $(this).find(".ptb-20").map(function () {        
                return $(this).height();        
            }).get(),       
            maxHeight = Math.max.apply(null, heights);      
            $(this).find(".ptb-20").height(maxHeight);     
        });     
    }       
    function removeHeights() {      
        $(".container .row").each(function () {      
            $(this).find(".ptb-20").height("auto");        
        });     
    }    
