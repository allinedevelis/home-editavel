
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teste Sortable</title>
	<style>
		h4{
			margin-top: 10px;
		}
		#box_home{
			border: 1px solid;
			padding: 15px;
			width: 50%;
			float: left;
		}
		#box_home > ul{
			border: 1px solid;
			height: 100px;
			margin-bottom: 10px;
		}
		#box_home > ul li{
			float: left;
			margin-right: 25px;
		}
		#box_home > ul:last-child{
			margin-bottom: 0;
		}
		#box_busca{
			float: left;
			width: 300px;
			margin-left: 5px;
		}
		#box_busca li{
			background-color: yellow;
			width: 100;
			border: 1px solid;
			margin-bottom: 5px;
		}
		ul > li{
			list-style: none;
		}
	</style>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<section id="box_home">
	<h4>SLIDER</h4>
	<input type="hidden" id="order_slider" value="">
	<ul id="box_slider" class="sortable-list list-slider"></ul>
	
	<h4>ULTIMAS</h4>
	<input type="hidden" id="order_ultimas" value="">
	<ul id="box_ultimas" class="sortable-list list-ultimas"></ul>

	<h4>JB</h4>
	<input type="hidden" id="order_jb" value="">
	<ul id="box_jb" class="sortable-list list-jb"></ul>

	<h4>SAUDE</h4>
	<input type="hidden" id="order_saude" value="">
	<ul id="box_saude" class="sortable-list list-saude"></ul>

	<h4>BELEZA MODA</h4>
	<input type="hidden" id="order_belezamoda" value="">
	<ul id="box_belezamoda" class="sortable-list list-belezamoda"></ul>

	<h4>DIY</h4>
	<input type="hidden" id="order_diy" value="">
	<ul id="box_diy" class="sortable-list list-diy"></ul>

	<h4>RECEITAS</h4>
	<input type="hidden" id="order_receitas" value="">
	<ul id="box_receitas" class="sortable-list list-receitas"></ul>

	<h4>FAMOSOS</h4>
	<input type="hidden" id="order_famosos" value="">
	<ul id="box_famosos" class="sortable-list list-famosos"></ul>

	<h4>RESUMOS</h4>
	<input type="hidden" id="order_resumos" value="">
	<ul id="box_resumos" class="sortable-list list-resumos"></ul>

	<h4>LISTAS</h4>
	<input type="hidden" id="order_listas" value="">
	<ul id="box_listas" class="sortable-list list-listas"></ul>

	<h4>VIDEOS</h4>
	<input type="hidden" id="order_videos" value="">
	<ul id="box_videos" class="sortable-list list-videos"></ul>

	<h4>TESTES</h4>
	<input type="hidden" id="order_testes" value="">
	<ul id="box_testes" class="sortable-list list-testes"></ul>

	<h4>SEXO</h4>
	<input type="hidden" id="order_sexo" value="">
	<ul id="box_sexo" class="sortable-list list-sexo"></ul>
</section>
<section id="box_busca">
	<h4>SLIDER</h4>
	<ul id="busca_slider" class="sortable-list list-slider">
		<li id="post1" class="sortable-item">Post 1</li>
		<li id="post2" class="sortable-item">Post 2</li>
		<li id="post3" class="sortable-item">Post 3</li>
		<li id="post4" class="sortable-item">Post 4</li>
		<li id="post5" class="sortable-item">Post 5</li>	
	</ul>
	<h4>ULTIMAS</h4>
	<ul id="busca_ultimas" class="sortable-list list-ultimas">
		<li id="post1" class="sortable-item">Post 1</li>
		<li id="post2" class="sortable-item">Post 2</li>
		<li id="post3" class="sortable-item">Post 3</li>
		<li id="post4" class="sortable-item">Post 4</li>
		<li id="post5" class="sortable-item">Post 5</li>
	</ul>
	<h4>JOAO BIDU</h4>
	<ul id="busca_jb" class="sortable-list list-jb">
		<li id="post1" class="sortable-item">Post 1</li>
		<li id="post2" class="sortable-item">Post 2</li>
		<li id="post3" class="sortable-item">Post 3</li>
		<li id="post4" class="sortable-item">Post 4</li>
		<li id="post5" class="sortable-item">Post 5</li>
	</ul>
	<h4>SAUDE</h4>
	<ul id="busca_saude" class="sortable-list list-saude">
		<li id="post1" class="sortable-item">Post 1</li>
		<li id="post2" class="sortable-item">Post 2</li>
		<li id="post3" class="sortable-item">Post 3</li>
		<li id="post4" class="sortable-item">Post 4</li>
		<li id="post5" class="sortable-item">Post 5</li>	
	</ul>
	<h4>BELEZA MODA</h4>
	<ul id="busca_belezamoda" class="sortable-list list-belezamoda">
		<li id="post1" class="sortable-item">Post 1</li>
		<li id="post2" class="sortable-item">Post 2</li>
		<li id="post3" class="sortable-item">Post 3</li>
		<li id="post4" class="sortable-item">Post 4</li>
		<li id="post5" class="sortable-item">Post 5</li>
	</ul>
	<h4>DIY</h4>
	<ul id="busca_diy" class="sortable-list list-diy">
		<li id="post1" class="sortable-item">Post 1</li>
		<li id="post2" class="sortable-item">Post 2</li>
		<li id="post3" class="sortable-item">Post 3</li>
		<li id="post4" class="sortable-item">Post 4</li>
		<li id="post5" class="sortable-item">Post 5</li>
	</ul>
	<h4>RECEITAS</h4>
	<ul id="busca_receitas" class="sortable-list list-receitas">
		<li id="post1" class="sortable-item">Post 1</li>
		<li id="post2" class="sortable-item">Post 2</li>
		<li id="post3" class="sortable-item">Post 3</li>
		<li id="post4" class="sortable-item">Post 4</li>
		<li id="post5" class="sortable-item">Post 5</li>
	</ul>
	<h4>FAMOSOS</h4>
	<ul id="busca_famosos" class="sortable-list list-famosos">
		<li id="post1" class="sortable-item">Post 1</li>
		<li id="post2" class="sortable-item">Post 2</li>
		<li id="post3" class="sortable-item">Post 3</li>
		<li id="post4" class="sortable-item">Post 4</li>
		<li id="post5" class="sortable-item">Post 5</li>
	</ul>
	<h4>RESUMOS</h4>
	<ul id="busca_resumos" class="sortable-list list-resumos">
		<li id="post1" class="sortable-item">Post 1</li>
		<li id="post2" class="sortable-item">Post 2</li>
		<li id="post3" class="sortable-item">Post 3</li>
		<li id="post4" class="sortable-item">Post 4</li>
		<li id="post5" class="sortable-item">Post 5</li>
	</ul>
	<h4>LISTAS</h4>
	<ul id="busca_listas" class="sortable-list list-listas">
		<li id="post1" class="sortable-item">Post 1</li>
		<li id="post2" class="sortable-item">Post 2</li>
		<li id="post3" class="sortable-item">Post 3</li>
		<li id="post4" class="sortable-item">Post 4</li>
		<li id="post5" class="sortable-item">Post 5</li>
	</ul>
	<h4>VIDEOS</h4>
	<ul id="busca_videos" class="sortable-list list-videos">
		<li id="post1" class="sortable-item">Post 1</li>
		<li id="post2" class="sortable-item">Post 2</li>
		<li id="post3" class="sortable-item">Post 3</li>
		<li id="post4" class="sortable-item">Post 4</li>
		<li id="post5" class="sortable-item">Post 5</li>
	</ul>
	<h4>TESTES</h4>
	<ul id="busca_testes" class="sortable-list list-testes">
		<li id="post1" class="sortable-item">Post 1</li>
		<li id="post2" class="sortable-item">Post 2</li>
		<li id="post3" class="sortable-item">Post 3</li>
		<li id="post4" class="sortable-item">Post 4</li>
		<li id="post5" class="sortable-item">Post 5</li>
	</ul>
	<h4>SEXO</h4>
	<ul id="busca_sexo" class="sortable-list list-sexo">
		<li id="post1" class="sortable-item">Post 1</li>
		<li id="post2" class="sortable-item">Post 2</li>
		<li id="post3" class="sortable-item">Post 3</li>
		<li id="post4" class="sortable-item">Post 4</li>
		<li id="post5" class="sortable-item">Post 5</li>
	</ul>
</section>
</body>
</html>
<script>
  $( function() {
  	// Habilitar sortable nas boxes de cada secao
    $("#box_home > ul").sortable({
      cursor: 'pointer',
	  update: function(event, ui){
	  	var id_secao 	= getNomeSecao($(this));
	  	var order 		= $(this).sortable("toArray").toString();
	  	$("#order_"+id_secao).val(order);
	  }
    }).disableSelection()
	.on('click', '.btn_fechar', function() {
		var id_secao 	= getNomeSecao($(this).closest('ul'));
		$(this).closest('li').remove();
		// Encontra id elemento a ser removido e atualiza a variavel order
		var id_delete 	= $(this).closest('li').attr('id');
		var order 		= $("#order_"+id_secao).val();
		var array 		= order.split(",");
		// Deleta elemento do array final
		var indice 		= array.indexOf(id_delete);
		if(indice != -1)
			array.splice(indice, 1);
		order 			= array.join(",");
		$("#order_"+id_secao).val(order);

		// Habilita sortable no item removido
		$("#busca_"+id_secao+" #"+id_delete).removeClass('ui-state-disabled');
	});

	// Habilitar sortable nos resultados de cada secao
	$("#box_busca > ul").sortable({
	  cursor: 'pointer',
      remove: function(event, ui) {
      	var id_secao 	= getNomeSecao($(this), 'busca_');
		ui.item.clone().appendTo('#box_'+id_secao).append("<div class='btn_fechar'>FECHAR</div>");
		ui.item.addClass('ui-state-disabled');
		$(this).sortable( "option", "cancel", ".ui-state-disabled" );
		$(this).sortable('cancel');	  
	  },
	  receive: function(event, ui) {
        ui.sender.sortable("cancel");
	  },
    }).disableSelection();

    $("#busca_slider").sortable({
    	connectWith: ".list-slider"
  	});
    $("#busca_ultimas").sortable({
      connectWith: ".list-ultimas"
    });
    $("#busca_jb").sortable({
      connectWith: ".list-jb"
    });
    $("#busca_saude").sortable({
      connectWith: ".list-saude"
    });
    $("#busca_belezamoda").sortable({
      connectWith: ".list-belezamoda"
    });
    $("#busca_diy").sortable({
      connectWith: ".list-diy"
    });
    $("#busca_receitas").sortable({
      connectWith: ".list-receitas"
    });
    $("#busca_famosos").sortable({
      connectWith: ".list-famosos"
    });
    $("#busca_resumos").sortable({
      connectWith: ".list-resumos"
    });
    $("#busca_listas").sortable({
      connectWith: ".list-listas"
    });
    $("#busca_videos").sortable({
      connectWith: ".list-videos"
    });
    $("#busca_testes").sortable({
      connectWith: ".list-testes"
    });
    $("#busca_sexo").sortable({
      connectWith: ".list-sexo"
    });
  });

  function getNomeSecao(obj, tipoRemove = 'box_'){
  	return obj.attr('id').replace(tipoRemove, "");
  }
  </script>