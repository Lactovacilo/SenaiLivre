$(document).ready(function() {

    $("#header-botao-usuario").on("click", function() {
        $("#header-barralateral").css("right", 0)
        $(".fechaMenu").css("display", "block")
    })

    $(".fechaMenu").on("click", function() {
        $("#header-barralateral").css("right", "-225px")
        $(".fechaMenu").css("display", "none")
    })

}); 