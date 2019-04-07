function ft_starter() {
	var pseudo = document.getElementById("player_name").value;
	document.getElementById("pseudo").innerHTML = pseudo;
	document.getElementById("starter").style.pointerEvents = "none";
	document.getElementById("starter").style.opacity = ".3";
	document.getElementById("first_step").style.opacity = "1";
}

function ft_first_step() {
	var classe = document.querySelector('input[name="player_class"]:checked').value;
	document.getElementById("classe").innerHTML = classe;
	document.getElementById("first_step").style.pointerEvents = "none";
	document.getElementById("first_step").style.opacity = ".3";
	document.getElementById("second_step").style.opacity = "1";
}

function ft_attack() {
	var monster = document.getElementById("monster-bar");
	var pdv_monster = parseInt(monster.style.width, 10);
	var player = document.getElementById("player-bar");
	var pdv_player = parseInt(player.style.width, 10);
	if (pdv_monster < 40) {
		monster.style.backgroundColor = "#e74c3c";
	}
	if (pdv_player < 40) {
		player.style.backgroundColor = "#e74c3c";
	}
	else if (pdv_player > 40) {
		player.style.backgroundColor = "#2ecc71";
	}
	if (pdv_monster > 10) {
		var degat_monster = (pdv_monster - Math.floor((Math.random() * 10) + 1));
		monster.style.width = degat_monster + "%";
		var degat_player = (pdv_player - Math.floor((Math.random() * 5) + 1));
		player.style.width = degat_player + "%";
		document.getElementById("monster-percent").innerHTML = degat_monster;
		document.getElementById("player-percent").innerHTML = degat_player;
	}
	else {
		monster.style.opacity = "0";
		document.getElementById("monster-percent").innerHTML = "";
		document.getElementById("alive").style.display = "none";
		document.getElementById("dead").style.display = "block";
	}
}

function ft_heal() {
	var player = document.getElementById("player-bar");
	var pdv_player = parseInt(player.style.width, 10);
	var potions = parseInt(document.getElementById("potions").innerHTML);
	if (potions != 0) {
		if (pdv_player > 80) {
			var potion = (100 - pdv_player);
		}
		else {
			var potion = 20;
		}
		player.style.width = (pdv_player + potion) + "%";
		document.getElementById("player-percent").innerHTML = (pdv_player + potion);
		if (potions <= 2) {
			document.getElementById("potions").innerHTML = potions - 1 + " potion.";
		}
		else {
			document.getElementById("potions").innerHTML = potions - 1 + " potions.";
		}
	}
}
