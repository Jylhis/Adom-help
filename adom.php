<?php echo'<head>
		<title>ADOM</title>
<link rel=StyleSheet href="style.css" type="text/css">
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="cssverticalmenu.js"></script>

<ul id="verticalmenu" class="glossymenu">
<li><a href="index.php">Etusivu</a></li>
<li><a href="adom.php" class="selected" >Adom</a></li>
<li><a href="tiedot.php">Tietoa meist‰</a></li>
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
    <li class="TabbedPanelsTab" tabindex="0">Meid‰n mielipide pelist‰</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent"><hr>
<h1>Esittely</h1>
<hr>
<h2 align="center">ADOM</h2>
<h3 align="center">Ancient Domains of Mystery</h3>
<br>
<p>adom on Saksalaisen Thomas Biskupin kehittelem‰ roguelike-lajityypin
tietokoneroolipeli pelin ensimm‰inen versio on tehty vuonna 1994 ja uusin versio
2002. <br>Ja t‰lt‰ se n‰ytt‰‰.</p>
<img src="kyla.png">
<h2>P‰‰m‰‰r‰</h2>
<p>
Pelihahmon ensisijaisena p‰‰m‰‰r‰n‰ on ker‰t‰ jokaista Ancardian viitt‰ elementti‰
(tuli, vesi, ilma, maa ja mana) edustava chaos orb ja niiden avulla p‰‰st‰ sulkemaan
Kaaosportti, jonka kautta Kaaoksen voimat tunkeutuvat Ancardiaan, T‰m‰ riitt‰‰
pelin voittamiseen.</p>
<p>Pelin voi kuitenkin voittaa myˆs haastavammalla tavalla kulkemalla l‰pi portista ja
voittamalla itse Kaaosjumalan.</p>
<p>Pelattavia hahmoja riitt‰ joka tekee pelist‰ mielenkiintoisemman.</p>
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
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
plaplapla 
</div></td>
</tr></table></div>
    <div class="TabbedPanelsContent"><hr>
<h1>Adomin historia</h1>
<hr>
<p>ADOMin ensimm‰iset versiot, silloin nimelt‰‰n Ancient Dungeons of Mystery, olivat huomattavasti
suppeampia kuin nykyinen peli. Niiden pelialue koostui vain yhdest‰ luolastosta Roguen ja NetHackin tapaan.
Vuosien ja versiop‰ivitysten kuluessa peli kehitettiin nykyiseen muotoonsa. Thomas Biskup ei ole ilmoittanut
kehitt‰v‰ns‰ ADOMia en‰‰, mutta h‰n on tyˆskennellyt toisen Ancardiaan sijoittuvan JADE-nimisen<br> roguelike-
pelin parissa, jonka ensimm‰inen versio julkaistiin vuonna 2011.</p><p>
Toisin kuin monilla muilla suosituilla roguelike-peleill‰, ADOMin l‰hdekoodi ei ole avoin. Vaikka Biskup
oli luvannut julkaista l‰hdekoodin ADOM versio 1.0 j‰lkeen, h‰n muuttikin mielens‰ <br>pit‰‰kseen pelin
ominaisuuksia salassa ja est‰‰kseen toisten tekemien pelivarianttien julkaisun. H‰n tosin suostuisi
lisensoimaan l‰hdekoodia peliteollisuudelle kaupallisiin tarkoituksiin. Vuonna 2009 Biskup kuitenkin ilmoitti
blogissaan, ett‰ h‰n saattaisi olla valmis harkitsemaan l‰hdekoodin julkaisua.<br> H‰n avasi pelin viralliselle
keskustelufoorumille osion,<br> jossa asiasta alettiin k‰yd‰ keskustelua.</p>
</div>
    <div class="TabbedPanelsContent"><hr>
<h1>Tietoa kontrolleista</h1>
<hr>
<p>\C=Ctrl, \M=Alt, :=Ensin t‰ytyy laittaa: sitten kirjain</p><br>
<p>\Ct Aktivoi ansa<br>
a Ottaa taidon k‰yttˆˆn<br>
< Nousevat portaat/Poistu paikasta<br>
Z K‰yt‰ taikoja<br>
C Juttele<br>
H Vaihtaa Highlight moodille.<br>
T Vaihtaa taktiikkaa<br>
L Tarkistaa lukutaidon<br>
E Puhdistaa korvat<br>
c Sulkee oven<br>
ws Jatkuvaa etsimist‰<br>
( Luo lyhyen hahmo logfilen<br>
) Luo jaarittelevan hahmo logfilen<br>
[ Ottaa screenshotin<br>
> Laskevat portaat/Menee paikkaan<br>
:W Kuvailee s‰‰t‰<br>
! Dippaa (jotain) (potioniin)<br>
:T N‰yt‰ kaikki talentit<br>
A N‰ytt‰‰ ja merkitsee nopeasti taidot<br>
B N‰ytt‰‰ taustan<br>
P N‰ytt‰‰ laskun<br>
:b N‰ytt‰‰ kannettavan tavaran painon<br>
= N‰ytt‰‰ asetusten muuttujat<br>
\ N‰yt‰ Chaos voimat<br>
@ N‰ytt‰‰ hahmon tiedot<br>
:c N‰ytt‰‰ ryhm‰l‰iset<br>
$ N‰ytt‰‰ nykyisen rahatilanteen<br>
:g N‰ytt‰‰ jumalasi nimen<br>
\Ce N‰ytt‰‰ kuluneen peliajan<br>
/ N‰ytt‰‰ tunnistetut tavarat<br>
K N‰ytt‰‰ potkun tiedot<br>
:k N‰ytt‰‰ tapetut hirviˆt<br>
\Ml N‰ytt‰‰ tason mapin<br>
:m N‰ytt‰‰ viestin bufferin<br>
M N‰ytt‰‰ ammusten tehot<br>
:w N‰ytt‰‰ hirviˆn loukkaantumiset<br>
q N‰ytt‰‰ teht‰v‰n tilan<br>
R N‰ytt‰‰ reseptit<br>
x N‰ytt‰‰ tarvittavan xp(experience) m‰‰r‰n<br>
\Mt N‰ytt‰‰ talentit<br>
V N‰ytt‰‰ version<br>
\Cw N‰ytt‰‰ weapon skillit<br>
W N‰ytt‰‰ aseiden tiedot<br>
D Juo<br>
d Pudottaa tavaran/tavaroita<br>
\Cd Pudottaa tavaran mukavalla tavalla<br>
e Syˆ<br>
l Tutkii ymp‰ristˆ‰<br>
:d Pitkitetty tiputus<br>
:P Pitkitetty maksaminen<br>
:u Pitkitetty k‰ytt‰minen<br>
g Anna tavara jollekin<br>
h K‰sittele jotain<br>
i Reppu<br>
\Ci her‰tt‰‰ mindcraftin<br>
\Co Anna komento ryhm‰l‰iselle<br>
k Potkaise<br>
\Cl Katso<br>
:Z Merkkaa loistut<br>
I Satunnaiset tavarat<br>
n Nime‰ hirviˆ/itsesi<br>
? Apua<br>
o Avaa ovi<br>
p Maksa<br>
; Nosta tavara kohtalaisen nopeasti<br>
, Nosta tavara<br>
\Cp Nosta tavara mukavasti<br>
_ Rukoile<br>
Q Lopeta peli<br>
r Lue<br>
& Muistele hirviˆn tietoja<br>
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
t Ammu/heit‰<br>
:s Vaihda paikkaa hirviˆn kanssa<br>
\Ca vaihda automaattiseen nostoon p‰‰ll‰/pois<br>
:t Vaihda dynaaninen n‰yttˆ<br>
\Ck Vaihda tarvittavaan avaimeen<br>
\Cu Tiirikoi oven<br>
U K‰yt‰ tavara<br>
\Cx K‰yt‰ class poweria<br>
m K‰yt‰ erikois taitoa<br>
u K‰yt‰ tyˆkalua<br>
5 Odota<br>
. Odota<br>
F Pyyhi naama<br>
z Zappaa sauvalla</p></div>
    <div class="TabbedPanelsContent"><hr>
<h1>Meid‰n mielipide pelist‰</h1>
<hr>
<h2>Markku</h2>
<p>Minun mielest‰ peli on hyvin koukuttava mutta myˆs hyvin hankala oppia. Kun pelin aloittaa siitt‰ ei tajua
oikeastaan mit‰‰n, veikkaisin ett‰ t‰m‰n takia monet eiv‰t jaksa kokeilla adonia pidemm‰lle ja pelin hienous
j‰‰ kokematta. Itse p‰‰sin aika pitk‰lle lvl 10 asti mutta en tiennyt ett‰ peliss‰ voi tallentaa ja kuolin.
Peli oli hyvin mielenkiintoinen ja todella haastava vaikka siin‰ ei olekaan graafista hienoutta yht‰‰n. On
mielenkiintoista miten nuinkin yksinkertaisen n‰kˆinen peli voi olla niin iso ja siin‰ on niin paljon pelattavaa.</p>
<br>
<h2>Jonne</h2>
<p>Adom on mielest‰ni eritt‰in hankala pelattava koska saatat kuolla mit‰
ihmeellisimmist‰ syist‰ aivan yht‰kki‰, esimerkiksi kun k‰velet vaikka mets‰ss‰,
vuoristossa tai vaikkapa heinikossa niin saatat vain yht‰kki‰ kuolla, kuolemalle en
ole lˆyt‰nyt mit‰‰n selityst‰ siin‰ vain tulee lukemaan ett‰ kuolit.</p>

<p>mutta toisaalta peli on kyll‰ mielenkiintoinen kun p‰‰see hieman jyv‰lle ja saa
hankittua tavaraa hieman tavaraa ja leveli‰.</p>

<p>pelin muita hankaluuksia:<br>
- peliss‰ t‰ytyy syˆd‰, muuten kuolet n‰lk‰‰n ja ruoka on joskus todella hankalasti
lˆydett‰viss‰/hankittavissa.<br>
- v‰lill‰ saatat joutua erilaisten otuksien hyˆkk‰‰m‰ksi josta ei v‰ltt‰m‰tt‰ aina voi
paeta<br>
- lˆytyy myˆs paljon kuolettavia ansoja.<br>
- Peli ei ole ollenkaan beginner friendly.</p>
<br>
<h2>Toni</h2>
<p>ASCII-merkistˆ‰ hyv‰ksik‰ytt‰v‰ Adom on ihan hyv‰ peli, kunhan vain oppii mit‰ mik‰kin n‰pp‰in tekee.
Pelin alussa ei juuri tutoriaalia annettu ja peli aloitetaan mets‰ss‰ jossa l‰hes jokainen haluaa tappaa sinut, t‰m‰ on v‰lill‰ liiankin turhauttavaa koska, kun kuolee niin peli loppuu siihen kokonaan.
Peliss‰ pelattavia rotuja on useita ja jokaisella on omia kykyj‰, lis‰ksi voi valita hahmolleen ammatin joista saa myˆs erilaisia bonuksia, ja kun hahmo kehittyy, saa valittavaksi erilaisia taitoja jotka vaihtelevat miekank‰sittelyst‰ kiipeilyyn.</p>
<p>Jos pelaaja ei halua itse p‰‰tt‰‰ millainen hahmo tulee, pelaaja voi arpoa itselleen hahmon.
Pelimaailmassa on kyli‰ ja luolastoja tutkittavaksi, kyl‰n asukkailta voi saada teht‰vi‰ suoritettavaksi.
Peliss‰ t‰ytyy pit‰‰ huolta myˆs mit‰ hahmo syˆ, jos hahmo ei syˆ ollenkaan niin kuolee n‰lk‰‰n, t‰m‰ on ‰rsytt‰v‰‰ varsinkin silloin kun tuntuu ett‰ hahmo on n‰lk‰inen puolen minuutin v‰lein.
Peliss‰ on joitain bugeja jotka vaikeuttavat pelaamista.</p><p>
Pelaaminen parantuisi varmasti jos saisi edes joskus checkpointteja, sill‰ kuolemisen j‰lkeen ei aina haluttaisi aloittaa kokonaan uutta peli‰.</p>
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