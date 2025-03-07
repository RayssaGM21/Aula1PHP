<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>ToDo em Dia</title>
</head>

<body>
    <div id="container">
        <div class="add-task-container">
            <button id="btn-add" class="btn">Nova tarefa</button>
        </div>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <div>
                <h2>Nova Tarefa</h2>
                <button id="close-modal">X</button>
            </div>

            <form action="actions.php" method="POST" class="form-modal">
                <input type="text" name="nome" placeholder="Nome do Afazer" require>
                <textarea name="descricao" placeholder="Descrição" require></textarea>
                <input type="date" name="data">
                <select name="status">
                    <option value="Pendente">Pendente</option>
                    <option value="Em Andamento">Em Andamento</option>
                    <option value="Conluido">Concluído</option>
                </select>
                <button type="submit" name="add" class="btn">Salvar</button>
            </form>
        </div>
    </div>

    <div class="kanban-board">
        <div class="column">
            <h2>Pendente</h2>

            <div class="task-list">
                <div class="task-card">
                    <div class="task-header">
                        <?php ?>
                    </div>
                </div>
            </div>

        </div>

        <div class="column">
            <h2>Em Andamento</h2>

            <div class="task-list">
                <div class="task-card">
                    <div class="task-header">
                        <?php ?>
                    </div>
                </div>
            </div>

        </div>

        <div class="column">
            <h2>Concluído</h2>

            <div class="task-list">
                <div class="task-card">
                    <div class="task-header">
                        <?php ?>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <?php

    ?>

    <script>
        document.getElementById("btn-add").addEventListener("click",
            function() {
                document.getElementById("modal").style.display = "block"
            })

        document.getElementById("close-modal").addEventListener("click", 
            function(){
                document.getElementById("modal").style.display = "none"
            }
        )
    </script>
</body>


</html>