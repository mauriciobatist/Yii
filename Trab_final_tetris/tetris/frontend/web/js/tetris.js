(function () {

    var tabuleiro;
    var peca;
    var gameLoop;

    addEventListener("keydown", function(e) {
        if (e.key == "ArrowRight" && peca.style.left < "400px") {
            peca.style.left = (parseInt(peca.style.left) + 20) + "px";
        } else if (e.key == "ArrowLeft") {
            peca.style.left = (parseInt(peca.style.left) - 20) + "px";
        }
    });

    function init () {
        createPeca();
        gameLoop = setInterval(run, 100);
    }

    function run () {
        var posicao = parseInt(peca.style.top);
        posicao += 5;
        if (posicao >= 360) {
            clearInterval(gameLoop);
            posicao = -20;
            init();
        }
        peca.style.top = posicao + "px";
    }

    function createPeca () {
        tabuleiro = document.querySelector("#tabuleiro");
        peca = document.createElement("div");
        peca.style.top = "0px";
        peca.style.left = "0px";
        tabuleiro.appendChild(peca);
    }

    init();
})();
