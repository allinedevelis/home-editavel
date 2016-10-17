<?php 

$listas = [
 'slider' => 'SLIDER',
 'ultimas' => 'ULTIMAS',
 'jb' => 'JB',
 'saude' => 'SAUDE',
 'belezamoda' => 'BELEZA MODA',
 'diy' => 'DIY',
 'receitas' => 'RECEITAS',
 'famosos' => 'FAMOSOS',
 'resumos' => 'RESUMOS',
 'listas' => 'LISTAS',
 'videos' => 'VIDEOS',
 'testes' => 'TESTES',
 'sexo' => 'SEXO'
];

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Teste Sortable</title>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        <section id="box_home">

            <?php foreach ($listas as $key => $value) : ?>
                <h4> <?=$value;?> </h4>
                <input type="hidden" id="order_<?=$key?>" value="">
                <ul id="box_<?=$key?>" class="sortable-list list-<?=$key?>"></ul>
            <?php endforeach; ?>

        </section>
        <section id="box_busca">
            <h4>Pesquisa</h4>
            <input id="input_busca" type="text" placeholder="in development">
            <ul id="busca_results" class="sortable-list list-results">
                <li id="post1" class="sortable-item">Post 1</li>
                <li id="post2" class="sortable-item">Post 2</li>
                <li id="post3" class="sortable-item">Post 3</li>
                <li id="post4" class="sortable-item">Post 4</li>
                <li id="post5" class="sortable-item">Post 5</li>    
            </ul>

<!--             <div class="box-lixeira">
                <strong>sortable-lixeira</strong>
                <ul id="box_lixeira" class="sortable-list list-lixeira"></ul>
            </div> -->

            <button onclick="javascript:getPosts();">posts</button>
        </section>
    </body>
    <script src="scripts/script.js"></script>

</html>