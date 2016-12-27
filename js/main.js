(function () {

    var Pagina = function () {

        function init() {
            initFlip();
        }

        function initFlip() {

          $(".flip-container a").click(function () {
            if ($(this).closest(".flip-container").hasClass("rotate")) { $(this).closest(".flip-container").removeClass("rotate"); }
            else { $(this).closest(".flip-container").addClass("rotate"); }
          });
        }

        init();
    };

    $(document).ready(function () {
        new Pagina();
    });

})();
