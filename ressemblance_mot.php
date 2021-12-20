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
 *  \file       ressemblance_mot.php
 */

function ressemblance($chaineA, $chaineB) {
//trim() sert a supprimer les espaces potentielles en debut et fin de chaine.
//et strtolower() renvoie la chaîne en minuscules
$chaineA = strtolower(trim($chaineA));
$chaineB = strtolower(trim($chaineB));
$tabChaineA=str_split($chaineA);
//var_dump($tabChaineA); 
$nbCar=count($tabChaineA);
//echo $nbCar."<br>";
$maxPoints=$nbCar*2;
$pos=0;
$points=0;
foreach($tabChaineA as $caractere)
{
//	echo $caractere."<br>";
//	echo "position=".$pos."<br>";
	if ($pos<strlen($chaineB))
	{	

		$trouver=strpos($chaineB,$caractere,$pos);
//		echo $pos.":".$chaineB."->".$caractere.$trouver."<br>";
//double verification à cause du problème false et 0
		if($trouver==0)
		{
//			echo $pos."<->".$trouver;
			if ($pos==$trouver)
			{
				$points=$points+2;
			}
			else
			{
				$points=$points+1;
			}
		}
		if($trouver<>false)
		{
//			echo $pos."<->".$trouver;
			if ($pos==$trouver)
			{
				$points=$points+2;
			}
			else
			{
				$points=$points+1;
			}
		}
//		echo $pos."=".$points."<br>"; 
		$pos++;
	}
}
//echo $points."/".$maxPoints;
return $points/$maxPoints*100;
}
//$chaine1 = 'implantations';
//$chaine2 = 'implantation';
//echo "Chaine 1 = ".$chaine1."<br/>Chaine 2 = ".$chaine2."<br/>";
//echo "Calcul du pourcentage de ressemblance: ".ressemblance($chaine1, $chaine2)."%<br/>";
?>
