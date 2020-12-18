
var checkedText = document.querySelector('ul');
checkedText.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LABEL') {
    ev.target.classList.add('checked');
  }
}, false);






