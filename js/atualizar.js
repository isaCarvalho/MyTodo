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
                        <th>Excluir</th>
                    </tr>`

            let count = 0;
            tarefas.forEach(tarefa => {
                let tr = document.createElement("tr");
                tr.innerHTML = `
                    <tr>
                        <td id="nome${count}">${tarefa.nome}</td>
                        <td>${tarefa.inicio}</td>
                        <td>${tarefa.fim}</td>
                        <td>${tarefa.data}</td>
                        <td id="${count}"><a href=""><img src="../images/lixeira.png" class="lixo"></a></td>
                    </tr>`;
                    
                    feito.appendChild(tr);

                    //Finalizar isso aqui pra atualizar o nome das tarefas
                    tdNome = document.getElementById(`nome${count}`)
                    
                    tdNome.onclick = function atualizarNome()
                    {
                        tdNome.contentEditable = "true"
                        let novoNome = tdNome.innerHTML;
                        
                        console.log(novoNome)
                    }                    
                    // acaba aqui

                    tdLixo = document.getElementById(`${count}`)
                    tdLixo.onclick  = function exlcuir() {
                        fetch(`../control/control.php?action=excluirTarefa&nomeTarefa=${tarefa.nome}`)
                    }

                    count++;
            });
        })
}

window.setInterval(atualizar, 10000);