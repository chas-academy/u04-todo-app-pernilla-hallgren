// event listener på både ul och checkbox när man klickar på båda dom
// så ska det dras en streck över todos

var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);