/*** PÁGINA DE TURISMOS ****/

$(document).ready(function(){
	var classActive = 'active';

    $('#tab-menu a').first().addClass(classActive);
	$('.item').first().addClass(classActive);


 	$('#tab-menu a').click(function(e){
		e.preventDefault();
		var itemId = $(this).attr('href');

		$('#tab-menu a, .item').removeClass(classActive);
		$(this).addClass(classActive);
		$(itemId).addClass(classActive);

		console.log("OSISISDISDO");

    });

});


/*** PÁGINA NOSSA FROTA ***/

$(document).ready(function(){
	var classActive = 'active';

    $('#tab-menu_frota a').first().addClass(classActive);
	$('.item_frota').first().addClass(classActive);


 	$('#tab-menu_frota a').click(function(e){
		e.preventDefault();
		var itemId = $(this).attr('href');

		$('#tab-menu_frota a, .item_frota').removeClass(classActive);
		$(this).addClass(classActive);
		$(itemId).addClass(classActive);

		console.log("OSISISDISDO");

    });

});


/*** PÁGINA CONTATOS ***/

var coll = document.getElementsByClassName("perguntas_frequentes");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var resposta_pergunta = this.nextElementSibling;
    if (resposta_pergunta.style.display === "block") {
      resposta_pergunta.style.display = "none";
    } else {
      resposta_pergunta.style.display = "block";
    }
  });
}
