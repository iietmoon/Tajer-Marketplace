<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        // jQuery code
        // Prevent closing from click inside dropdown
        $(document).on('click', '.dropdown-menu', function (e) { 
           e.stopPropagation();
        });
    </script>
    <script>
    $("[data-trigger]").on("click", function(){

var trigger_id =  $(this).attr('data-trigger');

$(trigger_id).toggleClass("show");

$('body').toggleClass("offcanvas-active");

});



// close button 

$(".btn-close").click(function(e){

$(".navbar-collapse").removeClass("show");

$("body").removeClass("offcanvas-active");

}); 
    </script>

    <!-- Counter Down for "weekly promotions" -->
    <script src="assets/javascript/counter-time-down.js"></script>