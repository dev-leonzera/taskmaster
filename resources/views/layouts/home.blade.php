<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoApp</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png" alt="">
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">Criar Tarefa</a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph-header">
                        <h2>Progresso do Dia</h2>
                        <hr class="linha-header"/>
                        Data
                    </div>
                    <div class="graph-header-tasks">
                        Tarefas <b>3/6</b>
                    </div>
                    <div class="graph-area">
                        <img src="/assets/images/graph.png" alt="" srcset="">
                    </div>
                    <p class="tasks-left">Restam 3 tarefas para serem realizadas</p>
                </section>
                <section class="list">
                    <div class="list-header">
                        <select class="list-select" name="" id="">
                            <option value="1">Todas as Tarefas</option>
                        </select>
                    </div>
                    <div class="task-list">
                        <div class="task-item">
                            <div class="title">
                                <input type="checkbox" name="" id="">
                                <div class="task-title">Título da Tarefa</div>
                            </div>
                            <div class="priority">
                                <div class="sphere"></div>
                                <div>Título da Tarefa</div>
                            </div>
                            <div class="actions">
                                <a href="#">
                                    <img src="/assets/images/icon-edit.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="/assets/images/icon-delete.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="task-item">
                            <div class="title">
                                <input type="checkbox" name="" id="">
                                <div class="task-title">Título da Tarefa</div>
                            </div>
                            <div class="priority">
                                <div class="sphere"></div>
                                <div>Título da Tarefa</div>
                            </div>
                            <div class="actions">
                                <a href="#">
                                    <img src="/assets/images/icon-edit.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="/assets/images/icon-delete.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="task-item">
                            <div class="title">
                                <input type="checkbox" name="" id="">
                                <div class="task-title">Título da Tarefa</div>
                            </div>
                            <div class="priority">
                                <div class="sphere"></div>
                                <div>Título da Tarefa</div>
                            </div>
                            <div class="actions">
                                <a href="#">
                                    <img src="/assets/images/icon-edit.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="/assets/images/icon-delete.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>
</html>
