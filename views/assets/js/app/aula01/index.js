
const calcularAula01 = () => {
    let valor1 = $('[name=valor1]').val()
    let valor2 = $('[name=valor2]').val()
    let operacao = $('[name=operacao]').val()
    if ((Number(valor1) || Number(valor2)) && operacao) {
        __ajaxPost('router/web.php?action=basico', { valor1, valor2, operacao })
            .then((resp) => {
                renderResult(resp)
            })
            .catch((err) => {
                console.log(err)
            })
    } else {
        alert("Por favor informe todos os valores")
    }
}

const renderResult = (result) => {
    $('#resultado').html(result)
}

const aula01 = () => {
    $('[aula01]').click(calcularAula01)
}

const clearAula01 = () => {
    $('[name=valor1]').val('')
    $('[name=valor2]').val('')
    renderResult('')
}

$(() => {
    aula01()
})