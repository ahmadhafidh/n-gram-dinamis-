<?php
error_reporting(0);

function ngram($teks, $n=2){
	$token = explode(" ", $teks);
	$wordCount = str_word_count($teks);

	$limit  = $wordCount-1;

	$ngram = [];
	for ($i=0; $i < $limit; $i++) { 
		
		for ($j=$i; $j < ($i+$n); $j++) { 
			$combination .= $token[$j]." ";
		}
		if ( str_word_count($combination) == $n ) {
			$ngram[$i] = $combination;
		}
		$combination = "";
	}

	$x = $wordCount * (count($ngram)-1);

	echo "<pre>";
	print_r($teks);	
	echo "<br><br>";
	echo "ngram = ".$wordCount."*"."(".count($ngram)."-1".")";
	echo "<br><br>";
	print_r($ngram);	
	echo "<br>";
	print_r($x);
	echo "</pre>";
}


ngram("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 3);
?>