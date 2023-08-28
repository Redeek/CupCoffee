/*!
* Start Bootstrap - Modern Business v5.0.0 (https://startbootstrap.com/template-overviews/modern-business)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-modern-business/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project


function slideSwitch() {
 var $active = $('#slideshow IMG.active');
 if ($active.length === 0)
 $active = $('#slideshow IMG:last');
 var $next = $active.next().length ? $active.next()
 : $('#slideshow IMG:first');
 $active.addClass('last-active');
 $next.css({opacity: 0.0})
 .addClass('active')
 .animate({opacity: 1.0}, 1000, function () {
 $active.removeClass('active last-active');
 });
}
$(function () {
 setInterval("slideSwitch()", 8000);
});


//SLIDER

var czysc = document.getElementById('czysc');
var form = document.querySelector('form');
var sprawdz = document.getElementById('sprawdz');



form.addEventListener('submit', e =>{
	
	zapisz();
	
});



// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.addEventListener('click', e=>{
	e.preventDefault();
	modal.style.display = "block";
	var zamowienie = JSON.parse(localStorage.getItem('zamowienie'));
	var el=document.getElementById('dane');
	var str="<h6>Zawartość koszyka</h6>";
	if (zamowienie===null) el.innerHTML=str+"<p>Koszyk jest pusty</p>";
	else {
	for(i=0;i<zamowienie.length;i++) //pobierz informacje o produktach z listy
	{
		str+="<button class='btn btn-anuluj' onclick='usunprodukt("+i+")' > <i class='bi bi-trash-fill'></i> </button>"+
		"<button class='btn btn-primary' onclick='edycja("+i+")' > <i class='bi bi-pencil-square'></i> </button>";
		str+="  <i class='bi bi-caret-right-square-fill'></i> Kawa: "+zamowienie[i].kawa +"  <i class='bi bi-caret-right-square-fill'></i> Ciastko: "+zamowienie[i].ciastko +"<i class='bi bi-caret-right-square-fill'></i> Śniadanie: "+zamowienie[i].sniadanie + "  <i class='bi bi-caret-right-square-fill'></i> Dodatki: "+zamowienie[i].dodatek +"</br>";
	}
	el.innerHTML=str;
	}
});

// When the user clicks on <span> (x), close the modal
span.addEventListener('click',e=>{
	e.preventDefault();
	modal.style.display = "none";
});

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}





function zapisz(){
	let item = {};
	let dane= "";	
	var v1 = document.getElementById('mleko');
    var v2 = document.getElementById('cukierek');
    var v3 = document.getElementById('chleb');
	if(v1.checked == true){
        dane+=" "+document.getElementById('mleko').value;
    }
    if(v2.checked == true){
        dane+=" "+ document.getElementById('cukierek').value;
    }
    if(v3.checked == true){
        dane+=" "+ document.getElementById('chleb').value;
    }
    
		
	item.imie = document.getElementById('imie').value;
    item.nazwisko = document.getElementById('nazwisko').value;
	item.email = document.getElementById('email').value;
    item.telefon = document.getElementById('telefon').value;
    item.ulica = document.getElementById('ulica').value;
	item.kod = document.getElementById('kod').value;
	item.miasto = document.getElementById('miasto').value;
	item.wiadomosc = document.getElementById('wiadomosc').value;
	item.kawa = document.getElementById('kawa').value;
	item.ciastko = document.getElementById('ciastka').value;
	item.sniadanie = document.getElementById('sniadanie').value;
	item.dodatek = dane;
	item.platnosc = document.querySelector('input[name="platnosc"]:checked').value;
	
   
	var zamowienie = JSON.parse(localStorage.getItem('zamowienie'));
	if (zamowienie===null) zamowienie=[]; //pracujemy z tablicą obiektów
	zamowienie.push(item); //dodaj nowy obiekt do listy
	localStorage.setItem('zamowienie', JSON.stringify(zamowienie));
}

function pokaz(){
	var zamowienie = JSON.parse(localStorage.getItem('zamowienie'));
	var el=document.getElementById('dane');
	var str="<h6>Zawartość koszyka</h6>";
	if (zamowienie===null) el.innerHTML=str+"<p>Koszyk jest pusty</p>";
	else {
	for(i=0;i<zamowienie.length;i++) //pobierz informacje o produktach z listy
	{
		str+="<button class='btn btn-anuluj' onclick='usunprodukt("+i+")' > <i class='bi bi-trash-fill'></i> </button>"+
		"<button class='btn btn-primary' onclick='edycja("+i+")' > <i class='bi bi-pencil-square'></i> </button>";
		str+="  <i class='bi bi-caret-right-square-fill'></i> Kawa: "+zamowienie[i].kawa +"  <i class='bi bi-caret-right-square-fill'></i> Ciastko: "+zamowienie[i].ciastko +"<i class='bi bi-caret-right-square-fill'></i> Śniadanie: "+zamowienie[i].sniadanie + "  <i class='bi bi-caret-right-square-fill'></i> Dodatki: "+zamowienie[i].dodatek +"</br>";
	}
	el.innerHTML=str;
	}
	
}

function usunprodukt(i){ 
	var zamowienie = JSON.parse(localStorage.getItem('zamowienie'));
	//usuń i-ty element z listy produktów:
	if (confirm("Usunąć produkt?")) zamowienie.splice(i,1);
	//zapisz zaktualizowaną listę w localStorage:
	localStorage.setItem('zamowienie', JSON.stringify(zamowienie)); //zapisz listę
	pokaz(); //zaktualizuj widok na stronie
}


function edycja(i){
	var zamowienie = JSON.parse(localStorage.getItem('zamowienie'));
	var el=document.getElementById('dane');
	var str="<h6>Zawartość koszyka</h6>";
	if (zamowienie===null) el.innerHTML=str+"<p>Koszyk jest pusty</p>";
	else {
	for(j=0;j<zamowienie.length;j++) //pobierz informacje o produktach z listy
	{
		if(j==i)
		{
		str+="<button class='btn btn-anuluj' onclick='usunprodukt("+i+")' > <i class='bi bi-trash-fill'></i> </button>"+
		"<button class='btn btn-primary' onclick='akceptacja("+i+")' > <i class='bi bi-check-lg'></i> </button>";
		
		str+="<select class='form-select' id='nowakawa'> <option>Wybierz kawę</option> <option>Latte</option> <option>Cappuccino</option> <option>Americana</option> </select>" + "<select class='form-select' id='noweciastka'> <option >Wybierz ciastko</option><option>Sernik</option><option>Jabłecznik</option><option>Karpatka</option></select>" +"<select class='form-select' id='nowesniadanie'><option value=''>Wybierz sniadanie</option><option>Jajecznica</option><option>Omlet</option><option>Kanapki</option></select>" + "<div class='mx-auto'><input type='checkbox' id='nowemleko' value='mleko' /><label for='mleko'> Mleko bez laktozy </label></div><div class='mx-auto'><input type='checkbox' id='nowycukierek' value='cukierek' /><label for='cukierek'> Cukierek </label></div><div class='mx-auto'><input type='checkbox' id='nowychleb' value='chleb' /><label for='chleb'> Chleb </label></div>" + "</br>";
		}
		if(j!=i){
		str+="<button class='btn btn-anuluj' onclick='usunprodukt("+i+")' > <i class='bi bi-trash-fill'></i> </button>"+
		"<button class='btn btn-primary' onclick='edycja("+i+")' > <i class='bi bi-pencil-square'></i> </button>";
		str+="  <i class='bi bi-caret-right-square-fill'></i> Kawa: "+zamowienie[i].kawa +"  <i class='bi bi-caret-right-square-fill'></i> Ciastko: "+zamowienie[i].ciastko +"<i class='bi bi-caret-right-square-fill'></i> Śniadanie: "+zamowienie[i].sniadanie + "  <i class='bi bi-caret-right-square-fill'></i> Dodatki: "+zamowienie[i].dodatek +"</br>";
		}
	}
	el.innerHTML=str;
	}
}


function akceptacja(i){
	var zamowienie = JSON.parse(localStorage.getItem('zamowienie'));
	let dane= "";	
	var v1 = document.getElementById('nowemleko');
    var v2 = document.getElementById('nowycukierek');
    var v3 = document.getElementById('nowychleb');
	if(v1.checked == true){
        dane+=" "+document.getElementById('nowemleko').value;
    }
    if(v2.checked == true){
        dane+=" "+ document.getElementById('nowycukierek').value;
    }
    if(v3.checked == true){
        dane+=" "+ document.getElementById('nowychleb').value;
    }
	
	if(confirm("Czy na pewno edytować produkt?")){ 
	zamowienie[i].kawa = document.getElementById('nowakawa').value;
    zamowienie[i].ciastko = document.getElementById('noweciastka').value;
    zamowienie[i].sniadanie = document.getElementById('nowesniadanie').value;
    zamowienie[i].dodatek = dane;
	}
	localStorage.setItem('zamowienie', JSON.stringify(zamowienie)); //zapisz listę
	pokaz();
	
}






