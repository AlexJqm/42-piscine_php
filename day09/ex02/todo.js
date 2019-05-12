
const list = document.getElementById('ft_list');
const local = window.localStorage;
const todos = local.getItem('list') ? local.getItem('list').split(',') : [];

//Affiche les todo enregistrer
function fill(arr) {
	let str = '';
  arr.forEach(cur => str += `<div class="todo">${cur}</div>`);
	list.innerHTML = `${str}`;
}

fill(todos);

function addNewTodo() {
  //Ajoute un nouveau todo
  var todo = prompt("Nouvelle tache: ");
  if (todo != null) {
    var first = list.firstChild;
    var div = document.createElement('div');
    list.insertBefore(div, first);
    div.innerHTML += todo;
    //Sauvegarde le nouveau todo
    todos.unshift(todo);
    local.setItem('list', todos);
  }
}
//Supprimer le todo clique
list.addEventListener('click', e => { todos.forEach((cur, i, arr) => cur == e.target.textContent ? arr.splice(i, 1) : 1); local.setItem('list', todos); e.target.remove(); });
