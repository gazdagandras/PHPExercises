<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
<body>
<?php

/* 
 * Feltételes elágazások gyakorlása.
 * Egészítsd ki az alábbi programkódokat a leírások alapján!
 */

/*
 * A felétel zárójelében szereplő true értéket cseréld ki a helyes kifejezésre,
 * ami megvizsgálja hogy a $homerseklet változó értéke alapján fagy-e vagy sem!
 * A teszteléshez írd át szabadon a $homerseklet változó értékét!
 */
echo '<h3>Hőmérséklet:</h3>';
$homerseklet = -13;

echo '<p>Hőmérséklet: ' + $homerseklet + 'C</p>';

if (true) {
  echo '<p>nincs fagy</p>';
} else {
  echo '<p>fagy van!</p>';
}

/*
 * A felétel zárójelében szereplő true értéket cseréld ki a helyes kifejezésre,
 * ami megvizsgálja hogy a $szam változó értéke páros vagy páratlan!
 * A teszteléshez írd át szabadon a $szam változó értékét!
 */
echo '<h3>Páros / páratlan:</h3>';
$szam = 23;

echo '<p>A szám: ' + $szam + '</p>';

if (true) {
  echo '<p>páros</p>';
} else {
  echo '<p>páratlan</p>';
}

/*
 * A felételek zárójeleiben szereplő true értékeket cseréld ki a helyes kifejezésekre!
 * A teszteléshez írd át szabadon az $a és $b változók értékét!
 */
echo '<h3>Egyenlő?</h3>';
$a = 23;
$b = 21;

echo '<p>A: ' + $a + '</p>';
echo '<p>B: ' + $b + '</p>';

if (true) {
  echo '<p>A és B egyenlő</p>';
} elseif (true) {
  echo '<p>A a nagyobb</p>';
} else {
  echo '<p>B a nagyobb</p>';
}


/*
 * A programkódot egészítsd ki úgy, hogy a felételeknél a true értékek helyére
 * a helyes feltételes kifejezések kerüljenek, az echo "..." sorokban pedig 
 * a ... helyére a megfelelő szövegek!
 * Az alábbi megoldás működik, de az 5db különálló feltétel miatt nem igazán jó
 * megoldás, alább ezen még finomítunk.
 */
echo '<h3>Osztályzatok - nem túl jó megoldás:</h3>';
$jegy = 3;

if ($jegy == 1) {
  echo "<p>elégtelen (1)</p>";
}
if (true) {
  echo "<p>elégséges (2)</p>";
}
if (true) {
  echo "...";
}
if (true) {
  echo "...";
}
if (true) {
  echo "...";
}

/*
 * A programkódot egészítsd ki úgy, hogy a felételeknél a true értékek helyére
 * a helyes feltételes kifejezések kerüljenek, az echo "..." sorokban pedig 
 * a ... helyére a megfelelő szövegek!
 * Az alábbi megoldás valamivel jobb mint az előző. Ha az egyik feltétel igaz, a
 * többit már nem vizsgálja meg a program, így valamivel hatékonyabb.
 * Az utolsó esetnél már nem kell írunk feltételt, hiszen ha az első 4 feltétel nem igaz,
 * akkor már csak jeles lehet az osztályzat.
 */
echo '<h3>Osztályzatok - kicsit jobb megoldás:</h3>';
$jegy = 3;

if ($jegy == 1) {
  echo "<p>elégtelen (1)</p>";
} elseif (true) {
  echo "<p>elégséges (2)</p>";
} elseif (true) {
  echo "...";
} elseif (true) {
  echo "...";
} else {
  echo "...";
}

/*
 * Ebben az esetben a switch-case szerkezet az igazán jó megoldás.
 * Egészítsd ki az alábbi kódot, a // ... sort töröld és ott folytasd!
 */
echo '<h3>Osztályzatok - igazán jó megoldás:</h3>';
$jegy = 3;

switch ($jegy) {
  case 1:
    echo "<p>elégtelen (1)</p>";
    break;
  case 2:
    // ...
}



?>
</body>
</html>