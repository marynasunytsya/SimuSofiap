$( document ).ready(function() {
    
    $("#form_simu").submit(function(event) {
        event.preventDefault();

        const queryString = window.location.search;

        const urlParams = new URLSearchParams(queryString);

        const page = urlParams.get('page');

        var next_page = parseInt(page)+1;
        document.location.href="./simu.php?page="+next_page;
        
    });

    /*
    function Callpage(page_number, event) {
        event.preventDefault();
        document.location.href="./simu.php?page="+page_number+1; 
    }
    */
});