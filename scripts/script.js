"use strict";

//Busca as ids de todas as 'sortable-list'
var idArr = [];
$( ".sortable-list" ).each(function( index ) {
	idArr.push($(this).attr('id'));
});

//Transforma o vetor numa string como no ex: '#id1, #id2'
var idsString = idArr.map(function(val){
	return '#' + val + ' ';
}).join(',');
console.log(idsString);

$(".sortable-list").sortable({
	connectWith: idsString,
	receive: function(event, ui) {
		
	}
})

$('.sortable-lixeira').sortable({
  connectWith: idsString,
  receive: function(event, ui) {
    
  }
})

function getPosts() {
  var items = {};
  $( ".sortable-list" ).each(function( index ) {
    var elem = $(this);
    if (elem.children().length>0) {
      var key = elem.attr('id');
      console.log(key)
      var value = [];
      elem.children().each(function(){
        value.push( $(this).attr('id') );
      })

      items[key] = value;
    }
  });

  alert(JSON.stringify(items));
}

//TODO => Autocomplete
$( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#input_busca" ).autocomplete({
      source: availableTags
    });
});