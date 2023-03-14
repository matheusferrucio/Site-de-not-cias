$(function(){
    carregaDinamico();
    function carregaDinamico() {
        $('a').filter('[pagina]').click(function(){ // pega o meu atributo criado para os links
            var pagAtual = $(this).attr('pagina'); // pega o valor do meu atrinuto página
            $('.container-principal').hide(); // esconde a minha página principal
            $('.container-principal').load(pagina); // carrega a mina página de notícia no lugar da página principal
            $('.container-principal').fadeIn(1000); // plica um efeito de fadeIn com duração de 1s
            return false;
        })
    }
});