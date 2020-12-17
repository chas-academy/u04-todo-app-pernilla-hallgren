// event listener på både ul och checkbox när man klickar på båda dom
// så ska det dras en streck över todos
// FUNKAR NÄR MAN TRYCKER PÅ TEXTEN
var checkedText = document.querySelector('ul');
checkedText.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LABEL') {
    ev.target.classList.add('checked');
  }
}, false);

// var checkedSymbol = document.querySelector('ul');
// checkedSymbol.addEventListener('click', function(ev) {
//   if (ev.target.tagName === 'BUTTON') {
//     ev.target.classList.add('circleChecked');
//   }
// }, false);


// FUNKAR
// let checkedBtn = document.querySelector('button');
// checkedBtn.addEventListener('click', changeColor);

// function changeColor() {
//   let text = document.querySelector('#labelText');
//   text.classList.add('checked');
// }





