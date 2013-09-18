<?php echo'<head>
		<title>ADOM</title>
<link rel=StyleSheet href="style.css" type="text/css">
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="cssverticalmenu.js"></script>

<ul id="verticalmenu" class="glossymenu">
<li><a href="index.php">Etusivu</a></li>
<li><a href="adom.php" class="selected" >Adom</a></li>
<li><a href="tiedot.php">Tietoa meistä</a></li>
<li><a href="kuva.html">Kuvagalleria</a></li>
<li><a href="http://www.adom.de/">Adomin kotisivu</a></li>
</ul>

<script type="text/javascript" language="JavaScript"> 
var cX = 0; var cY = 0; var rX = 0; var rY = 0; 
function UpdateCursorPosition(e){ cX = e.pageX; cY = e.pageY;} 
function UpdateCursorPositionDocAll(e){ cX = event.clientX; cY = event.clientY;} 
if(document.all) { document.onmousemove = UpdateCursorPositionDocAll; } 
else { document.onmousemove = UpdateCursorPosition; } 
function AssignPosition(d) { 
if(self.pageYOffset) { 
rX = self.pageXOffset; 
rY = self.pageYOffset; 
} 
else if(document.documentElement && document.documentElement.scrollTop) { 
rX = document.documentElement.scrollLeft; 
rY = document.documentElement.scrollTop; 
} 
else if(document.body) { 
rX = document.body.scrollLeft; 
rY = document.body.scrollTop; 
} 
if(document.all) { 
cX += rX; 
cY += rY; 
} 
d.style.left = (cX+10) + "px"; 
d.style.top = (cY+10) + "px"; 
} 
function HideText(d) { 
if(d.length < 1) { return; } 
document.getElementById(d).style.display = "none"; 
} 
function ShowText(d) { 
if(d.length < 1) { return; } 
var dd = document.getElementById(d); 
AssignPosition(dd); 
dd.style.display = "block"; 
} 
function ReverseContentDisplay(d) { 
if(d.length < 1) { return; } 
var dd = document.getElementById(d); 
AssignPosition(dd); 
if(dd.style.display == "none") { dd.style.display = "block"; } 
else { dd.style.display = "none"; } 
} 
//--> 
</script> 

</head>';?>

<body>
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">Esittely</li>
    <li class="TabbedPanelsTab" tabindex="0">Adomin historia</li>
    <li class="TabbedPanelsTab" tabindex="0">Tietoa kontrolleista</li>
    <li class="TabbedPanelsTab" tabindex="0">Meidän mielipide pelistä</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent"><hr>
<h1>Esittely</h1>
<hr>
<h2 align="center">ADOM</h2>
<h3 align="center">Ancient Domains of Mystery</h3>
<br>
<p>adom on Saksalaisen Thomas Biskupin kehittelemä roguelike-lajityypin
tietokoneroolipeli pelin ensimmäinen versio on tehty vuonna 1994 ja uusin versio
2002. <br>Ja tältä se näyttää.</p>
<img src="kyla.png">
<h2>Päämäärä</h2>
<p>
Pelihahmon ensisijaisena päämääränä on kerätä jokaista Ancardian viittä elementtiä
(tuli, vesi, ilma, maa ja mana) edustava chaos orb ja niiden avulla päästä sulkemaan
Kaaosportti, jonka kautta Kaaoksen voimat tunkeutuvat Ancardiaan, Tämä riittää
pelin voittamiseen.</p>
<p>Pelin voi kuitenkin voittaa myös haastavammalla tavalla kulkemalla läpi portista ja
voittamalla itse Kaaosjumalan.</p>
<p>Pelattavia hahmoja riittä joka tekee pelistä mielenkiintoisemman.</p>
<img src="attack.png">
<h3>Rodut:</h3>
<br>
<table align="center">
<tr>
<td>Human <span 
onmouseover="ShowText('Message'); return true;" 
onmouseout="HideText('Message'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="mark.gif"> 
</span> 
<div 
id="Message" 
class="box" > 
Humans are fairly generic. They have average stats, with only Learning above average, good
equipment, and gain levels quickly. They perform decently with any class, but are not the best with any.
<br><br>
Granted Skills: Food preservation, Haggling, Swimming<br>
Starting alignment: Neutral<br>
Level Advance: Fast<br>
Lifetime: Average
</div></td>
</tr><tr>
<td>
Troll<span 
onmouseover="ShowText('Message1'); return true;" 
onmouseout="HideText('Message1'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="mark.gif"> 
</span> 
<div 
id="Message1" 
class="box" > 
Trolls are huge, stupid creatures that like to eat the other sentient races. Trolls heal quickly but need
to eat a lot of food. They need much more experience to level than the others. They have excellent Strength
and Toughness and poor mental stats. They make fearsome Barbarians, and are suited to other fighting
classes.
<br><br>
Granted Skills: Athletics, Bridge building , Food preservation, Gemology, Mining<br>
Starting alignment: Chaotic<br>
Level advance: Very slow<br>
Lifetime: Very short 
</div></td>
</tr><tr><td>
High Elf<span 
onmouseover="ShowText('Message2'); return true;" 
onmouseout="HideText('Message2'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="mark.gif"> 
</span> 
<div 
id="Message2" 
class="box" > 
High elves are frivolous and love nature. Thanks to their high agility, they make excellent Archers;
their magical ability also makes them capable spellcasters, even if the class is not specifically centered on
casting, such as the Healer.<br><br>
Granted skills: Dodge, Listening, Literacy, Stealth<br>
Starting alignment: Lawful<br>
Level advance: Fast<br>
Lifetime: Very long
</div></td>
</tr><tr><td>
Grey Elf<span 
onmouseover="ShowText('Message3'); return true;" 
onmouseout="HideText('Message3'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="mark.gif"> 
</span> 
<div 
id="Message3" 
class="box" > 
Aloof, arrogant, and physically weak, but stunningly beautiful, Grey Elves are the most magically-
oriented race. They make powerful Wizards and good Archers.
<br><br>
Granted skills: Dodge, Listening, Literacy, Stealth<br>
Starting alignment: Neutral<br>
Level advance: Average<br>
Lifetime: Very long 
</div></td>
</tr><tr><td>
Dark Elfx<span 
onmouseover="ShowText('Message4'); return true;" 
onmouseout="HideText('Message4'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="mark.gif"> 
</span> 
<div 
id="Message4" 
class="box" > 
Dark Elves are cruel underground denizens that specialize in stealth and magic. They are excellent
Rangers and Archers, but also make surprisingly adept Beastfighters and Paladins. They are not well-liked
among the other races, and despised by dwarves.
<br><br>
Granted skills: Alertness, Find weakness, Stealth<br>
Starting alignment: Chaotic<br>
Level advance: Average<br>
Lifetime: Very long 
</div></td>
</tr><tr><td>
Dwarf<span 
onmouseover="ShowText('Message5'); return true;" 
onmouseout="HideText('Message5'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="mark.gif"> 
</span> 
<div 
id="Message5" 
class="box" > 
Dwarves are a short, stocky race who dwell in underground caverns. Physically strong and tough and
often heavily armored, while low on Mana, they make excellent Fighters, Paladins and Weaponsmiths, but can
do well with any class, even Wizards.
<br><br>
Granted skills: Detect traps, Metallurgy, Mining, Smithing<br>
Starting alignment: Lawful<br>
Level advance: Slow<br>
Lifespan: Long 
</div></td>
</tr><tr><td>
Gnome<span 
onmouseover="ShowText('Message6'); return true;" 
onmouseout="HideText('Message6'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="mark.gif"> 
</span> 
<div 
id="Message6" 
class="box" > 
Gnomes live in rolling hills, are magically adept but still tough, and are deadly shots with crossbows.
They are good Archers, Priests, and Elementalists.
<br><br>
Granted skills: Gemology, Listening, Mining, Pick Pockets, Ventriloquism<br>
Starting alignment: Neutral<br>
Level advance: Very fast<br>
Lifespan: Long
</div></td>
</tr><tr><td>
Hurtling<span 
onmouseover="ShowText('Message7'); return true;" 
onmouseout="HideText('Message7'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="mark.gif"> 
</span> 
<div 
id="Message7" 
class="box" > 
Hurthlings are the smallest race, and are generally not prone to adventure. They are not strong,
but sturdy, and very dextrous. They make good Thieves, Monks, Archers and Assassins.
<br><br>
Granted skills: Archery, Cooking, Food preservation, Gardening, Stealth<br>
Starting alignment: Lawful<br>
Level advance: Very fast<br>
Lifespan: Above average
</div></td>
</tr><tr><td>
Orc<span 
onmouseover="ShowText('Message8'); return true;" 
onmouseout="HideText('Message8'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="mark.gif"> 
</span> 
<div 
id="Message8" 
class="box" > 
Orcs are a hateful, evil race that enjoys killing and pillaging. They are excellent Fighters and Barbarians.
They also make surprisingly good Paladins and Priests.
<br><br>
Granted skills: Backstabbing, Find Weakness, Metallurgy, Mining<br>
Starting alignment: Chaotic<br>
Level advance: Slow<br>
Lifespan: Average
</div></td>
</tr><tr><td>
Darkeling<span 
onmouseover="ShowText('Message9'); return true;" 
onmouseout="HideText('Message9'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="mark.gif"> 
</span> 
<div 
id="Message9" 
class="box" > 
Drakelings are cold-blooded humanoids who are related to dragons and can breathe acid.
Physically strong and tough, they are good Fighters but can excel at any class due to a low number of
weaknesses. They are a popular choice for Mindcrafters.
<br><br>
Granted skills: Alertness, Food preservation, Music, Swimming<br>
Starting alignment: Neutral<br>
Level advance: Slow<br>
Lifespan: Average
</div></td>
</tr><tr><td></table>
<br>

<h3>hahmo luokat:</h3>
<br>
<br>
<table align="center">
<tr><td>
Fighter</td><td><span 
onmouseover="ShowText('Message10'); return true;" 
onmouseout="HideText('Message10'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\fighter.png"> 
</span> 
<div 
id="Message10" 
class="box" > 
Fighter: Piilossa pysyminen, Uiminen, Kahden aseen käyttö 
</div></td>
</tr><tr><td>
Paladin</td><td><span 
onmouseover="ShowText('Message11'); return true;" 
onmouseout="HideText('Message11'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\paladin.png"> 
</span> 
<div 
id="Message11" 
class="box" > 
Paladin: Parantaminen, Lukutaitoisuus, Piilossa pysyminen, Uiminen, Kahden aseen käyttö 
</div></td>
</tr><tr><td>
Ranger</td><td><span 
onmouseover="ShowText('Message12'); return true;" 
onmouseout="HideText('Message12'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\ranger.png"> 
</span> 
<div 
id="Message12" 
class="box" > 
Ranger: Kiipeäminen, Parantaminen, Yrttien käyttö, Uiminen, Kahden aseen käyttö 
</div></td>
</tr><tr><td>
Thief</td><td><span 
onmouseover="ShowText('Message13'); return true;" 
onmouseout="HideText('Message13'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\thief.png"> 
</span> 
<div 
id="Message13" 
class="box" > 
Thief: selkään puukottaminen, Kiipeäminen, Ansojen näkeminen, Ansojen purkaminen, Kuunteleminen, Tiirikoiminen, Näpisteleminen, Piilossa pysyminen 
</div></td>
</tr><tr><td>
Assasin</td><td><span 
onmouseover="ShowText('Message14'); return true;" 
onmouseout="HideText('Message14'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\assasin.png"> 
</span> 
<div 
id="Message14" 
class="box" > 
Assasin: Selkäänpuukottaminen, Kiipeäminen, Ansojen näkeminen, Lukkojen tiirikoiminen, Piilossa pysyminen, Kahden aseen käyttö 
</div></td>
</tr><tr><td>
Wizard</td><td><span 
onmouseover="ShowText('Message15'); return true;" 
onmouseout="HideText('Message15'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\wizard.png"> 
</span> 
<div 
id="Message15" 
class="box" > 
Wizard: parantaminen, Yrttien käyttäminen, Lukutaitoisuus, Piilossa pysyminen 
</div></td>
</tr><tr><td>
Priest</td><td><span 
onmouseover="ShowText('Message16'); return true;" 
onmouseout="HideText('Message16'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\priest.png"> 
</span> 
<div 
id="Message16" 
class="box" > 
Priest: Ensi apu, Parantaminen, Yrttien käyttö, Lukutaitoisuus 
</div></td>
</tr><tr><td>
Bard</td><td><span 
onmouseover="ShowText('Message17'); return true;" 
onmouseout="HideText('Message17'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\bard.png"> 
</span> 
<div 
id="Message17" 
class="box" > 
ei mitään tiedossa olevaa 
</div></td>
</tr><tr><td>
Monk</td><td><span 
onmouseover="ShowText('Message18'); return true;" 
onmouseout="HideText('Message18'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\monk.png"> 
</span> 
<div 
id="Message18" 
class="box" > 
Monk: Parantaminen, Lukutaitoisuus, Piilossa pysyminen 
</div></td>
</tr><tr><td>
Healer</td><td><span 
onmouseover="ShowText('Message19'); return true;" 
onmouseout="HideText('Message19'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\healer.png"> 
</span> 
<div 
id="Message19" 
class="box" > 
Healer: Ensi apu, Parantaminen, yrttien käyttö, Lukutaitoisuus 
</div></td>
</tr><tr><td>
Weaponsmith</td><td><span 
onmouseover="ShowText('Message20'); return true;" 
onmouseout="HideText('Message20'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\weaponsmith.png"> 
</span> 
<div 
id="Message20" 
class="box" > 
Weaponsmith: Ansojen näkeminen, tinkiminen, Varusteiden tekeminen 
</div></td>
</tr><tr><td>
Archer</td><td><span 
onmouseover="ShowText('Message21'); return true;" 
onmouseout="HideText('Message21'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\archer.png"> 
</span> 
<div 
id="Message21" 
class="box" > 
Archer: Kiipeäminen, Kuuntelu, Piilossa pysyminen 
</div></td>
</tr><tr><td>
Merchant</td><td><span 
onmouseover="ShowText('Message22'); return true;" 
onmouseout="HideText('Message22'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\merchant.png"> 
</span> 
<div 
id="Message22" 
class="box" > 
Merchant: tinkiminen, Yrttien käyttö, Lukutaitoisuus, Näpistely 
</div></td>
</tr><tr><td>
Farmer</td><td><span 
onmouseover="ShowText('Message23'); return true;" 
onmouseout="HideText('Message23'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\farmer.png"> 
</span> 
<div 
id="Message23" 
class="box" > 
Farmer: Sillan rakentaminen, Ensi apu, Tinkiminen,  Yrttien käyttäminen, Varusteiden teko, Piilossa pysyminen 
</div></td>
</tr><tr><td>
Mindcrafter</td><td><span 
onmouseover="ShowText('Message24'); return true;" 
onmouseout="HideText('Message24'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\mindcrafter.png"> 
</span> 
<div 
id="Message24" 
class="box" > 
Mindcrafter: tinkiminen, Yrttien käyttö, Lukutaitoisuus, Piilossa pysyminen 
</div></td>
</tr><tr><td>
Barbarian</td><td><span 
onmouseover="ShowText('Message25'); return true;" 
onmouseout="HideText('Message25'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\barbarian.png"> 
</span> 
<div 
id="Message25" 
class="box" > 
Barbarian: Kiipeäminen, Ensi apu, Yrttien käyttäminen, Piilossa pysyminen, Uiminen, Kahden aseen käyttö. 
</div></td>
</tr><tr><td>
Druid</td><td><span 
onmouseover="ShowText('Message26'); return true;" 
onmouseout="HideText('Message26'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\druid.png"> 
</span> 
<div 
id="Message26" 
class="box" > 
Druid: Kiipeäminen, Ensi apu, Parantaminen, Yrttien käyttäminen, Kuunteleminen, Lukutaito, Uiminen 
</div></td>
</tr><tr><td>
Necromancer</td><td><span 
onmouseover="ShowText('Message27'); return true;" 
onmouseout="HideText('Message27'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\necromancer.png"> 
</span> 
<div 
id="Message27" 
class="box" > 
Necromancer: yrttien käyttö, Lukutaitoisuus, Piilossa pysyminen 
</div></td>
</tr><tr><td>
Elementalist</td><td><span 
onmouseover="ShowText('Message27'); return true;" 
onmouseout="HideText('Message27'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\elementalist.png"> 
</span> 
<div 
id="Message27" 
class="box" > 
Elementalist: Kiipeäminen, Parantaminen, Kuunteleminen, Lukutaito, Uiminen 
</div></td>
</tr><tr><td>
Beastfighter</td><td><span 
onmouseover="ShowText('Message28'); return true;" 
onmouseout="HideText('Message28'); return true;" 
href="javascript:ShowText('Message')"> 
<img src="en\image\beastfighter.png"> 
</span> 
<div 
id="Message28" 
class="box" > 
Beastfighter: Kiipeäminen, Parantaminen, Yrttien käyttäminen, Kuunteleminen, Piilossa pysyminen, Uiminen 
</div></td>
</tr></table></div>
    <div class="TabbedPanelsContent"><hr>
<h1>Adomin historia</h1>
<hr>
<p>ADOMin ensimmäiset versiot, silloin nimeltään Ancient Dungeons of Mystery, olivat huomattavasti
suppeampia kuin nykyinen peli. Niiden pelialue koostui vain yhdestä luolastosta Roguen ja NetHackin tapaan.
Vuosien ja versiopäivitysten kuluessa peli kehitettiin nykyiseen muotoonsa. Thomas Biskup ei ole ilmoittanut
kehittävänsä ADOMia enää, mutta hän on työskennellyt toisen Ancardiaan sijoittuvan JADE-nimisen<br> roguelike-
pelin parissa, jonka ensimmäinen versio julkaistiin vuonna 2011.</p><p>
Toisin kuin monilla muilla suosituilla roguelike-peleillä, ADOMin lähdekoodi ei ole avoin. Vaikka Biskup
oli luvannut julkaista lähdekoodin ADOM versio 1.0 jälkeen, hän muuttikin mielensä <br>pitääkseen pelin
ominaisuuksia salassa ja estääkseen toisten tekemien pelivarianttien julkaisun. Hän tosin suostuisi
lisensoimaan lähdekoodia peliteollisuudelle kaupallisiin tarkoituksiin. Vuonna 2009 Biskup kuitenkin ilmoitti
blogissaan, että hän saattaisi olla valmis harkitsemaan lähdekoodin julkaisua.<br> Hän avasi pelin viralliselle
keskustelufoorumille osion,<br> jossa asiasta alettiin käydä keskustelua.</p>
</div>
    <div class="TabbedPanelsContent"><hr>
<h1>Tietoa kontrolleista</h1>
<hr>
<p>\C=Ctrl, \M=Alt, :=Ensin täytyy laittaa: sitten kirjain</p><br>
<p>\Ct Aktivoi ansa<br>
a Ottaa taidon käyttöön<br>
< Nousevat portaat/Poistu paikasta<br>
Z Käytä taikoja<br>
C Juttele<br>
H Vaihtaa Highlight moodille.<br>
T Vaihtaa taktiikkaa<br>
L Tarkistaa lukutaidon<br>
E Puhdistaa korvat<br>
c Sulkee oven<br>
ws Jatkuvaa etsimistä<br>
( Luo lyhyen hahmo logfilen<br>
) Luo jaarittelevan hahmo logfilen<br>
[ Ottaa screenshotin<br>
> Laskevat portaat/Menee paikkaan<br>
:W Kuvailee säätä<br>
! Dippaa (jotain) (potioniin)<br>
:T Näytä kaikki talentit<br>
A Näyttää ja merkitsee nopeasti taidot<br>
B Näyttää taustan<br>
P Näyttää laskun<br>
:b Näyttää kannettavan tavaran painon<br>
= Näyttää asetusten muuttujat<br>
\ Näytä Chaos voimat<br>
@ Näyttää hahmon tiedot<br>
:c Näyttää ryhmäläiset<br>
$ Näyttää nykyisen rahatilanteen<br>
:g Näyttää jumalasi nimen<br>
\Ce Näyttää kuluneen peliajan<br>
/ Näyttää tunnistetut tavarat<br>
K Näyttää potkun tiedot<br>
:k Näyttää tapetut hirviöt<br>
\Ml Näyttää tason mapin<br>
:m Näyttää viestin bufferin<br>
M Näyttää ammusten tehot<br>
:w Näyttää hirviön loukkaantumiset<br>
q Näyttää tehtävän tilan<br>
R Näyttää reseptit<br>
x Näyttää tarvittavan xp(experience) määrän<br>
\Mt Näyttää talentit<br>
V Näyttää version<br>
\Cw Näyttää weapon skillit<br>
W Näyttää aseiden tiedot<br>
D Juo<br>
d Pudottaa tavaran/tavaroita<br>
\Cd Pudottaa tavaran mukavalla tavalla<br>
e Syö<br>
l Tutkii ympäristöä<br>
:d Pitkitetty tiputus<br>
:P Pitkitetty maksaminen<br>
:u Pitkitetty käyttäminen<br>
g Anna tavara jollekin<br>
h Käsittele jotain<br>
i Reppu<br>
\Ci herättää mindcraftin<br>
\Co Anna komento ryhmäläiselle<br>
k Potkaise<br>
\Cl Katso<br>
:Z Merkkaa loistut<br>
I Satunnaiset tavarat<br>
n Nimeä hirviö/itsesi<br>
? Apua<br>
o Avaa ovi<br>
p Maksa<br>
; Nosta tavara kohtalaisen nopeasti<br>
, Nosta tavara<br>
\Cp Nosta tavara mukavasti<br>
_ Rukoile<br>
Q Lopeta peli<br>
r Lue<br>
& Muistele hirviön tietoja<br>
\Cr Punainen ruutu<br>
O Uhraa<br>
S Tallenna ja lopeta peli<br>
s Etsi<br>
\1 Vaihda taktiikka -berserker-<br>
\2 Vaihda taktiikka -todella agressiivinen-<br>
\3 Vaihda taktiikka -agressiivinen-<br>
\4 Vaihda taktiikka -normaali-<br>
\5 Vaihda taktiikka -puolustus-<br>
\6 Vaihda taktiikka -very defensive-<br>
\7 Vaihda taktiikka -pelkuri-<br>
:= asenna muuttuja<br>
t Ammu/heitä<br>
:s Vaihda paikkaa hirviön kanssa<br>
\Ca vaihda automaattiseen nostoon päällä/pois<br>
:t Vaihda dynaaninen näyttö<br>
\Ck Vaihda tarvittavaan avaimeen<br>
\Cu Tiirikoi oven<br>
U Käytä tavara<br>
\Cx Käytä class poweria<br>
m Käytä erikois taitoa<br>
u Käytä työkalua<br>
5 Odota<br>
. Odota<br>
F Pyyhi naama<br>
z Zappaa sauvalla</p></div>
    <div class="TabbedPanelsContent"><hr>
<h1>Meidän mielipide pelistä</h1>
<hr>
<h2>Markku</h2>
<p>Minun mielestä peli on hyvin koukuttava mutta myös hyvin hankala oppia. Kun pelin aloittaa siittä ei tajua
oikeastaan mitään, veikkaisin että tämän takia monet eivät jaksa kokeilla adonia pidemmälle ja pelin hienous
jää kokematta. Itse pääsin aika pitkälle lvl 10 asti mutta en tiennyt että pelissä voi tallentaa ja kuolin.
Peli oli hyvin mielenkiintoinen ja todella haastava vaikka siinä ei olekaan graafista hienoutta yhtään. On
mielenkiintoista miten nuinkin yksinkertaisen näköinen peli voi olla niin iso ja siinä on niin paljon pelattavaa.</p>
<br>
<h2>Jonne</h2>
<p>Adom on mielestäni erittäin hankala pelattava koska saatat kuolla mitä
ihmeellisimmistä syistä aivan yhtäkkiä, esimerkiksi kun kävelet vaikka metsässä,
vuoristossa tai vaikkapa heinikossa niin saatat vain yhtäkkiä kuolla, kuolemalle en
ole löytänyt mitään selitystä siinä vain tulee lukemaan että kuolit.</p>

<p>mutta toisaalta peli on kyllä mielenkiintoinen kun pääsee hieman jyvälle ja saa
hankittua tavaraa hieman tavaraa ja leveliä.</p>

<p>pelin muita hankaluuksia:<br>
- pelissä täytyy syödä, muuten kuolet nälkään ja ruoka on joskus todella hankalasti
löydettävissä/hankittavissa.<br>
- välillä saatat joutua erilaisten otuksien hyökkäämäksi josta ei välttämättä aina voi
paeta<br>
- löytyy myös paljon kuolettavia ansoja.<br>
- Peli ei ole ollenkaan beginner friendly.</p>
<br>
<h2>Toni</h2>
<p>ASCII-merkistöä hyväksikäyttävä Adom on ihan hyvä peli, kunhan vain oppii mitä mikäkin näppäin tekee.
Pelin alussa ei juuri tutoriaalia annettu ja peli aloitetaan metsässä jossa lähes jokainen haluaa tappaa sinut, tämä on välillä liiankin turhauttavaa koska, kun kuolee niin peli loppuu siihen kokonaan.
Pelissä pelattavia rotuja on useita ja jokaisella on omia kykyjä, lisäksi voi valita hahmolleen ammatin joista saa myös erilaisia bonuksia, ja kun hahmo kehittyy, saa valittavaksi erilaisia taitoja jotka vaihtelevat miekankäsittelystä kiipeilyyn.</p>
<p>Jos pelaaja ei halua itse päättää millainen hahmo tulee, pelaaja voi arpoa itselleen hahmon.
Pelimaailmassa on kyliä ja luolastoja tutkittavaksi, kylän asukkailta voi saada tehtäviä suoritettavaksi.
Pelissä täytyy pitää huolta myös mitä hahmo syö, jos hahmo ei syö ollenkaan niin kuolee nälkään, tämä on ärsyttävää varsinkin silloin kun tuntuu että hahmo on nälkäinen puolen minuutin välein.
Pelissä on joitain bugeja jotka vaikeuttavat pelaamista.</p><p>
Pelaaminen parantuisi varmasti jos saisi edes joskus checkpointteja, sillä kuolemisen jälkeen ei aina haluttaisi aloittaa kokonaan uutta peliä.</p>
<br>
<h2>Markus</h2>
<p>Loistava peli.</p></div>
  </div>
</div>
</div>
</div>


<?php echo'<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>';?>
<?php echo'<address><a href="http://dattari.net/topati11/markusj/adom/adom.php" target="_self">
 <img src="fi.gif" />
</a><a href="http://dattari.net/topati11/markusj/adom/en/adom.php" target="_self">
 <img src="uk.gif" />
</a></address>';?>