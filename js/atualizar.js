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

                let data = new Date()
                let dia = data.getDate()
                let mes = data.getMonth() + 1
                let ano = data.getFullYear()

                let mesf  = (mes % 10 == mes) ? '0' + mes : mes
                let diaf  = (dia % 10 == dia) ? '0' + dia : dia

                let str_data = ano + '-' + mesf + '-' + diaf
                let str_hora = new Date().toTimeString().replace(/.*(\d{2}:\d{2}:\d{2}).*/, "$1");

                let classe = 'feito'

                tarefa.fim = tarefa.fim.toString().substr(-10, 5)
                tarefa.inicio = tarefa.inicio.toString().substr(-10, 5)
                str_hora = str_hora.substr(-10, 5)

                if (tarefa.data == str_data)
                {
                    classe = 'andamento'

                    if (tarefa.inicio == str_hora)
                    {
                        var audio = new Audio('../audios/Clock-alarm-electronic-beep.mp3')
                        
                        window.setTimeout(() => {
                            audio.play()
                        }, 1000);
                    }                    
                }

                let tr = document.createElement("tr");
                tr.innerHTML = `
                    <tr>
                        <td id="nome${count}" class="${classe}td">${tarefa.nome}</td>
                        <td class="${classe}td">${tarefa.inicio}</td>
                        <td class="${classe}td">${tarefa.fim}</td>
                        <td class="${classe}td">${tarefa.data}</td>
                        <td id="${count}" class="${classe}td"><a href=""><img src="../images/lixeira.png" class="lixo"></a></td>
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

window.setInterval(atualizar, 5000);