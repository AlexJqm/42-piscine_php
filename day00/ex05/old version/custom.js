function ft_hidden_login() {
  var login = document.getElementById("login");
  if (login.style.display === "block") {
    login.style.display = "none";
  } else {
    login.style.display = "none";
  }
  var bg = document.getElementById("background");
  if (bg.style.display === "block") {
    bg.style.display = "none";
  } else {
    bg.style.display = "none";
  }
  var info = document.getElementById("info");
  if (info.style.display === "none") {
    info.style.display = "inherit";
  } else {
    info.style.display = "inherit";
  }
  var start = document.getElementById("start");
  if (start.style.display === "none") {
    start.style.display = "block";
  } else {
    start.style.display = "block";
  }
}

function ft_hidden_start() {
  var start2 = document.getElementById("start");
  if (start2.style.display === "block") {
    start2.style.display = "none";
  } else {
    start2.style.display = "none";
  }
  var weapon = document.getElementById("weapon");
  if (weapon.style.display === "none") {
    weapon.style.display = "block";
  } else {
    weapon.style.display = "block";
  }
}

function ft_choose_sheild() {
  var classType = "Chevalier";
  document.getElementById("classType").innerHTML = classType;
}

//function ft_choose_arrow() {
//  var classType = "Archer";
//  document.getElementById("classType").innerHTML = classType;
//}

function ft_hidden_weapon() {
  var position = "Entrer du donjon";
  document.getElementById("position").innerHTML = position;
  var weapon2 = document.getElementById("weapon");
  if (weapon2.style.display === "block") {
    weapon2.style.display = "none";
  } else {
    weapon2.style.display = "none";
  }
  var map = document.getElementById("map");
  if (map.style.display === "none") {
    map.style.display = "block";
  } else {
    map.style.display = "block";
  }
  var inv = document.getElementById("inv");
  if (inv.style.display === "none") {
    inv.style.display = "block";
  } else {
    inv.style.display = "block";
  }
  var inv = document.getElementById("life");
  if (inv.style.display === "none") {
    inv.style.display = "block";
  } else {
    inv.style.display = "block";
  }
}

function ft_hidden_start() {
  var start2 = document.getElementById("start");
  if (start2.style.display === "block") {
    start2.style.display = "none";
  } else {
    start2.style.display = "none";
  }
  var weapon = document.getElementById("weapon");
  if (weapon.style.display === "none") {
    weapon.style.display = "block";
  } else {
    weapon.style.display = "block";
  }
}

function ft_choose_sheild() {
  var classType = "Chevalier";
  document.getElementById("classType").innerHTML = classType;
}

//function ft_choose_arrow() {
//  var classType = "Archer";
//  document.getElementById("classType").innerHTML = classType;
//}

function ft_hidden_map() {
  var position = "Combat";
  document.getElementById("position").innerHTML = position;
  var map = document.getElementById("map");
  if (map.style.display === "block") {
    map.style.display = "none";
  } else {
    map.style.display = "none";
  }
  var combat = document.getElementById("fight");
  if (combat.style.display === "none") {
    combat.style.display = "block";
  } else {
    combat.style.display = "block";
  }
}

function ft_attack(){
  var attaque_monster = document.getElementById("life-monster");
  var life_monster = parseInt(attaque_monster.style.width, 10);
  if (attaque_monster.style.width != "0%") {
    attaque_monster.style.width = (life_monster - Math.floor((Math.random() * 10) + 1)) + "%";
  } else {
    attaque_monster.style.display = "none";
  }
  var attaque_player = document.getElementById("life-player");
  var life_player = parseInt(attaque_player.style.width, 10);
  if (life_player >= 20) {
    attaque_player.style.width = (life_player - Math.floor((Math.random() * 5) + 1)) + "%";
  } else {
    attaque_player.style.width = "20%";
  }
}

function ft_heal() {
  var heal_player = document.getElementById("life-player");
  var heal_potion = parseInt(document.getElementById("potion_heal").value);
  var life_player = parseInt(heal_player.style.width, 10);
  if (document.getElementById("potion_heal").value === "3") {
    heal_player.style.width = (life_player + 100) + "%";
    document.getElementById("potion_heal").value = "2";
  }
  else if (document.getElementById("potion_heal").value === "2") {
    heal_player.style.width = (life_player + 100) + "%";
    document.getElementById("potion_heal").value = "1";
  }
  else if (document.getElementById("potion_heal").value === "1") {
    heal_player.style.width = (life_player + 100) + "%";
    document.getElementById("potion_heal").value = "0";
  }
}

function ft_getName() {
    var pseudo = document.getElementById("inputPseudo").value;
    document.getElementById("pseudo").innerHTML = pseudo;
}
