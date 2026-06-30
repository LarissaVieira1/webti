let expressao = '0';

function add(valor) {
    expressao += valor;
    atualizarTela();
}

function limpar() {
    expressao = '0';
    atualizarTela();
}

function calcular() {
    try {
        let resultado = eval(expressao);
        expressao = resultado.toString();
        atualizarTela();
    } catch (e) {
        atualizarTela('Error');
        expressao = '';
    }
}

function atualizarTela(valor) {
    document.getElementById('tela').innerHTML = valor || expressao;
}