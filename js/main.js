$(document).ready(function(event) {
    // Entrou
    $('img#maiker').mouseenter(function() {
        $('#dev').text("Maiker Helmet");
        $('#infodev').text("Desenvolvedor do framework do site!");
    });
    $('img#hagatta').mouseenter(function() {
        $('#dev').text("Hagatta Thaynara");
        $('#infodev').text("Desenvolvedora da estilistica do site!");
    });
    $('img#mayque').mouseenter(function() {
        $('#dev').text("Mayque Oliveira");
        $('#infodev').text("Desenvolvedor do wireframe do site!");
    });
    $('img#kassio').mouseenter(function() {
        $('#dev').text("Kassio Santos");
        $('#infodev').text("Desenvolvedor da funcionalidade do site!");
    });
    // Saiu
    $('img#maiker').mouseout(function() {
        $('#dev').text("Desenvolvedores");
        $('#infodev').text("Desenvolvedores que fizeram o site baseado no programa Desktop COP!");
    });
    $('img#hagatta').mouseout(function() {
        $('#dev').text("Desenvolvedores");
        $('#infodev').text("Desenvolvedores que fizeram o site baseado no programa Desktop COP!");
    });
    $('img#kassio').mouseout(function() {
        $('#dev').text("Desenvolvedores");
        $('#infodev').text("Desenvolvedores que fizeram o site baseado no programa Desktop COP!");
    });
    $('img#mayque').mouseout(function() {
        $('#dev').text("Desenvolvedores");
        $('#infodev').text("Desenvolvedores que fizeram o site baseado no programa Desktop COP!");
    });
});