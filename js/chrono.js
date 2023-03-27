//Voici les variables dont on a besoin

var sp, btn_start, btn_stop, t, ms, mn, s, h;
//sp = span / t = temps / ms = milisec / s = sec / h = heure / mn = minute

//voici la fonction pour inialiser les variables
window.onload = function () {
  sp = document.getElementsByTagName("span");
  btn_start = document.getElementById("start");
  btn_stop = document.getElementById("stop");
  t;
  (ms = 0), (s = 0), (mn = 0), (h = 0);
};

// mettre en place le compteur

function update_chrono() {
  ms += 1;
  if (ms == 10) {
    s += 1;
  }
  if (s == 60) {
    s = 0;
    mn += 1;
  }
  if (mn == 60) {
    mn = 0;
    h += 1;
  }
  //insertion des valeurs dans les spans
  //[0] permet de selectionner le 1er span
  //[1]         le 2emme span ect...
  sp[0].innerHTML = h + "h";
  sp[1].innerHTML = mn + "mn";
  sp[2].innerHTML = s + "s";
  sp[3].innerHTML = ms + "ms";
}

// mettre en place la fonction du bouton start
function start() {
  //cette ligne de code execute la fonction update_chrono()
  //toutes les 100ms
  t = setInterval(update_chrono, 100);
  btn_start.disabled = true;
}

//stoper le chronometre

function stop() {
  clearInterval(t); //suppression de l'intervale t que nous avions créer
  btn_stop.disabled = false;
}

//fonction reset (pour reinitialiser le chrono)

function reset() {
  clearInterval(t);
  btn_start.disabled = false;
  (ms = 0), (s = 0), (mn = 0), (ms = 0);
  //insérer ces nouvelles valeurs dans les spans
  sp[0].innerHTML = h + "h";
  sp[1].innerHTML = mn + "mn";
  sp[2].innerHTML = s + "s";
  sp[3].innerHTML = ms + "ms";
}
