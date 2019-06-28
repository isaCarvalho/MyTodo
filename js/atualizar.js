function atualizar()
{
    fetch('../control/control.php?action=preencherTarefas')
        .then(response => response.json())
        .then(tarefas => {
            let feito = document.getElementById("feito");
            feito.innerHTML = `
                    <tr>
                        <th>Nome</th>
                        <th>Início</th>
                        <th>Fim</th>
                        <th>Data</th>
                    </tr>`

            tarefas.forEach(tarefa => {
                let tr = document.createElement("tr");
                tr.innerHTML = `
                    <tr>
                        <td>${tarefa.nome}</td>
                        <td>${tarefa.inicio}</td>
                        <td>${tarefa.fim}</td>
                        <td>${tarefa.data}</td>
                    </tr>`;
                    
                    feito.appendChild(tr);

                tr.ondblclick  = function event() {
                    fetch(`../control/control.php?action=excluirTarefa&nomeTarefa=${tarefa.nome}`)
                }
            });
        })
}

window.setInterval(atualizar, 3000);