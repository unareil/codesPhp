<?php
/* Copyright (C) 2021 Aurélien MARTINEAU <contact@unareil.eu>
 /* the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

/**
 *  \file       produire_mot.php
 */
function produireMotMemeSon($mot)
{
// je mets le mot à produire en minuscule
$mot=strtolower($mot);
// j'enleve tous les caractères impossible à analyser
$mot=str_replace(array("&","~","#",'"',"{","[","-","|","`","_","\\","^","@","°",")","]","+","=","}","€","¨","$","£","%","³",",","?",";",".",":","!","¡","§","µ",),"",$mot);
//on commence par les chiffres
$mot=str_replace("4","[44]",$mot);
$mot=str_replace("0","[40]",$mot);
$mot=str_replace("1","[41]",$mot);
$mot=str_replace("2","[42]",$mot);
$mot=str_replace("3","[43]",$mot);
$mot=str_replace("5","[45]",$mot);
$mot=str_replace("6","[46]",$mot);
$mot=str_replace("7","[47]",$mot);
$mot=str_replace("8","[48]",$mot);
$mot=str_replace("9","[49]",$mot);
$mot=str_replace(" ","[50]",$mot);
$mot=str_replace("'","[51]",$mot);
$mot=str_replace("ç","[52]",$mot);
// on commence par les sons composés de trois lettres.
//Son [j] avec « i – y – il – ill »
$mot=str_replace("ill","[01]",$mot);
//Son « oin »
$mot=str_replace("oin","[02]",$mot);
//Son « ien »
$mot=str_replace("ien","[03]",$mot);
//Son « o – au -eau »
$mot=str_replace("eau","[04]",$mot);
//Son « è – ai – ei – et – ê -est»
$mot=str_replace("est","[05]",$mot);
//ensuite les sons composés de deux lettres
//Son « an – en – am – em »
$mot=str_replace(array("an","en","am","em"),"[06]",$mot);
//Son « on – om »
$mot=str_replace(array("on","om"),"[07]",$mot);
//Son « ou »
$mot=str_replace("ou","[08]",$mot);
//Son « oe »
$mot=str_replace("oe","[09]",$mot);
//Son ph
$mot=str_replace("ph","[10]",$mot);
//Son « oi »
$mot=str_replace("oi","[11]",$mot);
//Son «ein - ain - in»
$mot=str_replace(array("ein","ain","in"),"[12]",$mot);
//Son «ai – ei – et -es»
$mot=str_replace(array("ai","ei","et","es"),"[05]",$mot);
//Son « au »
$mot=str_replace("au","[04]",$mot);
//Son « ch »
$mot=str_replace(array("ch","sch"),"[13]",$mot);
//Son « se - ce »
$mot=str_replace(array("ce","se"),"[14]",$mot);
//Son « ci - si - cy - sy »
$mot=str_replace(array("ci","si","cy","sy"),"[15]",$mot);
//Son « ge - gé - gè - gê - je -jé -jè - jê »
$mot=str_replace(array("ge","gé","gè","gê","gë","je","jé","jè","jê","jë"),"[16]",$mot);
//Son « gi - gy»
$mot=str_replace(array("gi","gy"),"[17]",$mot);
//Son « gn »
$mot=str_replace("gn","[18]",$mot);
//ensuite les sons composés d'une lettre
//Son « a - á - â - à- ä »
$mot=str_replace(array("a","á","â","à","ä"),"[21]",$mot);
//Son « b »
$mot=str_replace("b","[22]",$mot);
//Son « c ou k ou q»
$mot=str_replace(array("c","k","q"),"[23]",$mot);
//Son « d »
$mot=str_replace("d","[24]",$mot);
//Son « e - é - ê - è - ë»
$mot=str_replace(array("e","é","ê","è","ë"),"[05]",$mot);
//Son « f »
$mot=str_replace("f","[10]",$mot);
//Son « g comme ga »
$mot=str_replace("g","[25]",$mot);
//Son « h »
$mot=str_replace("h","[26]",$mot);
//Son [i] avec « i – y »
$mot=str_replace(array("i","y"),"[27]",$mot);
//Son « j »
$mot=str_replace("j","[28]",$mot);
//Son « k voir c »
//Son « l »
$mot=str_replace("l","[29]",$mot);
//Son « m »
$mot=str_replace("m","[30]",$mot);
//Son « n »
$mot=str_replace("n","[31]",$mot);
//Son « o »
$mot=str_replace("o","[04]",$mot);
//Son « p »
$mot=str_replace("p","[32]",$mot);
//Son « q voir c»
//Son « r »
$mot=str_replace("r","[33]",$mot);
//Son « s »
$mot=str_replace("s","[34]",$mot);
//Son « t »
$mot=str_replace("t","[35]",$mot);
//Son « u »
$mot=str_replace("u","[36]",$mot);
//Son « v »
$mot=str_replace(array("v","w"),"[37]",$mot);
//Son « w voir v »
//Son « x »
$mot=str_replace("x","[38]",$mot);
//Son « y voir i »
//Son « z »
$mot=str_replace("z","[39]",$mot);
//production des mots nouveaux
$mots[0]="";
for($i=0;$i<strlen($mot);$i=$i+4)
{
	switch (substr($mot,$i,4))
	{
		case "[01]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{//i – y – il – ill
				$motTmp[]=$m."i";
				$motTmp[]=$m."y";
				$motTmp[]=$m."il";
				$motTmp[]=$m."ill";
			}	
			$mots=$motTmp;
			break;		
		case "[02]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."oin";
			}	
			$mots=$motTmp;
			break;	
		case "[03]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."ien";
			}	
			$mots=$motTmp;
			break;		
		case "[04]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."o";
				$motTmp[]=$m."au";
				$motTmp[]=$m."eau";
			}	
			$mots=$motTmp;
			break;	
		case "[05]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."oe";
				$motTmp[]=$m."e";
				$motTmp[]=$m."ai";
				$motTmp[]=$m."ei";
				$motTmp[]=$m."et";
				$motTmp[]=$m."es";
				$motTmp[]=$m."è";
				$motTmp[]=$m."ê";
				$motTmp[]=$m."é";
				$motTmp[]=$m."ez";
			}	
			$mots=$motTmp;
			break;		
		case "[06]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."an";
				$motTmp[]=$m."en";
				$motTmp[]=$m."am";
				$motTmp[]=$m."em";
			}	
			$mots=$motTmp;
			break;	
		case "[07]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{//Son « on – om »
				$motTmp[]=$m."on";
				$motTmp[]=$m."om";
			}	
			$mots=$motTmp;
			break;		
		case "[08]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."ou";
			}	
			$mots=$motTmp;
			break;	
		case "[09]":	
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."oe";
				$motTmp[]=$m."e";
				$motTmp[]=$m."ai";
				$motTmp[]=$m."ei";
				$motTmp[]=$m."et";
				$motTmp[]=$m."es";
				$motTmp[]=$m."è";
				$motTmp[]=$m."ê";
				$motTmp[]=$m."ë";
				$motTmp[]=$m."é";
				$motTmp[]=$m."ez";
			}	
			$mots=$motTmp;
			break;		
		case "[10]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."ph";
				$motTmp[]=$m."f";
			}	
			$mots=$motTmp;
			break;	
		case "[11]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."oi";
			}	
			$mots=$motTmp;
			break;		
		case "[12]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."ein";
				$motTmp[]=$m."ain";
				$motTmp[]=$m."in";
			}	
			$mots=$motTmp;
			break;	
		case "[13]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."ch";
				$motTmp[]=$m."sch";
			}	
			$mots=$motTmp;
			break;
		case "[14]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."ce";
				$motTmp[]=$m."se";
			}	
			$mots=$motTmp;
			break;	
		case "[15]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."ci";
				$motTmp[]=$m."si";
				$motTmp[]=$m."cy";
				$motTmp[]=$m."sy";
			}	
			$mots=$motTmp;
			break;	
		case "[16]":
						// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{
				//Son « ge - gé - gè - gê - je -jé -jè - jê »
				$motTmp[]=$m."ge";
				$motTmp[]=$m."gé";
				$motTmp[]=$m."gè";
				$motTmp[]=$m."gê";
				$motTmp[]=$m."gë";
				$motTmp[]=$m."je";
				$motTmp[]=$m."jé";
				$motTmp[]=$m."jè";
				$motTmp[]=$m."jê";
				$motTmp[]=$m."jë";
			}	
			$mots=$motTmp;
			break;
		case "[17]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."gi";
				$motTmp[]=$m."gy";
			}	
			$mots=$motTmp;
			break;		
		case "[18]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."gn";
			}	
			$mots=$motTmp;
			break;	
		case "[21]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."a";
				$motTmp[]=$m."á";
				$motTmp[]=$m."à";
				$motTmp[]=$m."â";
				$motTmp[]=$m."ä";
			}	
			$mots=$motTmp;
			break;		
		case "[22]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."b";
			}	
			$mots=$motTmp;
			break;	
		case "[23]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."c";
				$motTmp[]=$m."q";
				$motTmp[]=$m."k";
			}	
			$mots=$motTmp;
			break;		
		case "[24]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."d";
			}	
			$mots=$motTmp;
			break;	
		case "[25]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."g";
			}	
			$mots=$motTmp;
			break;		
		case "[26]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."h";
			}	
			$mots=$motTmp;
			break;	
		case "[27]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."i";
				$motTmp[]=$m."y";
			}	
			$mots=$motTmp;
			break;		
		case "[28]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."j";
			}	
			$mots=$motTmp;
			break;	
		case "[29]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."l";
			}	
			$mots=$motTmp;
			break;
		case "[30]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."m";
			}	
			$mots=$motTmp;
			break;	
		case "[31]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."n";
			}	
			$mots=$motTmp;
			break;
		case "[32]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."p";
			}	
			$mots=$motTmp;
			break;
		case "[33]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."r";
			}	
			$mots=$motTmp;
			break;	
		case "[34]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."s";
			}	
			$mots=$motTmp;
			break;		
		case "[35]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."t";
			}	
			$mots=$motTmp;
			break;
		case "[36]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."u";
			}	
			$mots=$motTmp;
			break;	
		case "[37]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."v";
				$motTmp[]=$m."w";
			}	
			$mots=$motTmp;
			break;	
		case "[38]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."x";
			}	
			$mots=$motTmp;
			break;	
		case "[39]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."z";
			}	
			$mots=$motTmp;
			break;
		case "[40]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."0";
			}	
			$mots=$motTmp;
			break;
		case "[41]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."1";
			}	
			$mots=$motTmp;
			break;
		case "[42]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."2";
			}	
			$mots=$motTmp;
			break;
		case "[43]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."3";
			}	
			$mots=$motTmp;
			break;
		case "[44]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."4";
			}	
			$mots=$motTmp;
			break;
		case "[45]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."5";
			}	
			$mots=$motTmp;
			break;
		case "[46]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."6";
			}	
			$mots=$motTmp;
			break;
		case "[47]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."7";
			}	
			$mots=$motTmp;
			break;
		case "[48]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."8";
			}	
			$mots=$motTmp;
			break;
		case "[49]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."9";
			}	
			$mots=$motTmp;
			break;
		case "[50]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m." ";
			}	
			$mots=$motTmp;
			break;
		case "[51]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."'";
			}	
			$mots=$motTmp;
			break;
		case "[52]":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// j'ajoute le suffixe voulu
			foreach($mots as $m)
			{
				$motTmp[]=$m."ç";
				$motTmp[]=$m."c";
			}	
			$mots=$motTmp;
			break;
		default :
			$mots=$mots;
		}
//		if (count($mots)>800)
//		{
//			return $mots;		
//		}
	}

return $mots;
}
