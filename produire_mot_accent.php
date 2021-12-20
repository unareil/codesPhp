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
 *  \file       produire_mot_accent.php
 */
function supprime_accent($chaine)
{
  $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð',
                'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã',
                'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ',
                'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ',
                'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę',
                'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī',
                'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ',
                'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ',
                'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 
                'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 
                'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ',
                'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');

  $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O',
                'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c',
                'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u',
                'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D',
                'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g',
                'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K',
                'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o',
                'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S',
                's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W',
                'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i',
                'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
  return str_replace($a, $b, $chaine);
}
function produireMotSimilaireAccentOuSans($mot)
{
$motTropLong=$mot;
$mot=trim($mot);
$mot=supprime_accent($mot);// je supprime les accents
$mot=strtolower($mot);
$tailleMot=mb_strlen($mot);
//echo $tailleMot;
if ($tailleMot<=30){
//ensuite les sons composés d'une lettre
//Son « a - á - â - à- ä »
//production des mots nouveaux
$mots[0]="";
$nbMots=0;
// si le mot contient 
for($i=0;$i<strlen($mot);$i=$i+1)
{
	switch (substr($mot,$i,1))
	{
		case "a":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{//a,'à', 'á', 'â',ä'
				$motTmp[]=$m."a";
				$motTmp[]=$m."à";
				$motTmp[]=$m."á";
				$motTmp[]=$m."â";
				$motTmp[]=$m."ä";
			}	
			$mots=$motTmp;
			break;
//e,'é', 'è', 'ê',ë'		
		case "e":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{//e,'é', 'è', 'ê',ë'
				$motTmp[]=$m."e";
				$motTmp[]=$m."é";
				$motTmp[]=$m."è";
				$motTmp[]=$m."ê";
				$motTmp[]=$m."ë";
			}	
			$mots=$motTmp;
			break;	
//'i', 'î', 'ï'
		case "i":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{//'i', 'î', 'ï'
				$motTmp[]=$m."i";
				$motTmp[]=$m."î";
				$motTmp[]=$m."ï";
			}	
			$mots=$motTmp;
			break;
//'o', 'ô', 'ö'			
		case "o":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{//'o', 'ô', 'ö'
				$motTmp[]=$m."o";
				$motTmp[]=$m."ô";
				$motTmp[]=$m."ö";
			}	
			$mots=$motTmp;
			break;	
//'u', 'û', 'ü'
		case "u":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{//'u', 'ô', 'ö'
				$motTmp[]=$m."u";
				$motTmp[]=$m."û";
				$motTmp[]=$m."ü";
			}	
			$mots=$motTmp;
			break;	
		case "c":
			// je reinitialise le tableau temporaire
			$motTmp=array();
			// je duplique le mot initial et lui ajoute le suffixe voulu
			foreach($mots as $m)
			{//'c','ç'
				$motTmp[]=$m."c";
				$motTmp[]=$m."ç";
			}	
			$mots=$motTmp;
			break;
		default :
			$n=0;
			foreach($mots as $m)
			{
				$mots[$n]=$m.substr($mot,$i,1);
				$n++;
			}

	}
}
}
else
{
$mots[0]=$motTropLong;
}
return $mots;
}
