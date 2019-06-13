function criarTabela(classe)
{
    let tabela = document.querySelector("." + classe);
    tabela.innerHTML = `
        <table class="${classe}">
            <tr>
                <th>Nome</th>
                <th>Início</th>
                <th>Fim</th>
                <th>Data</th>
            </tr>
        </table>`

    return tabela;
}

function atualizar()
{
    fetch('../control/control.php?action=preencherTarefas')
        .then(response => response.json())
        .then(tarefas => {
            let feito = criarTabela("feito");
            let emAndamento = criarTabela("emAndamento");
            let stuck = criarTabela("stuck");

            tarefas.forEach(tarefa => {
                let tr = document.createElement("tr");
                tr.innerHTML = `
                    <tr>
                        <td>${tarefa.nome}</td>
                        <td>${tarefa.inicio}</td>
                        <td>${tarefa.fim}</td>
                        <td>${tarefa.data}</td>
                    </tr>`;

                if (tarefa.id_estado == 1)
                    feito.appendChild(tr);
                else if (tarefa.id_estado == 2)
                    emAndamento.appendChild(tr);
                else
                    stuck.appendChild(tr);
            });
        })
}

window.setInterval(atualizar, 3000);