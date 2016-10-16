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

$(".sortable-list").sortable({ // begin sortable
	connectWith: idsString,
	receive: function(event, ui) { // begin receive
		
	}
})

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