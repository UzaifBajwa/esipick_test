<?php 

/**
 * Test #1
 * 
 * Retrieve the answer, follow the leads along.
 * It is expected to code the whole solution below, and make it print the answer.
 * 
 * @file test_1.txt
 */


#e2f64796272757260237960227567737e6160256864502e256d69647023796864702e696770257f69502e24757364727f686370256864702b6f6f6470257f695

echo getFileDecrypted();


function getFileDecrypted ()
	{
		$myfile = fopen("test_1.txt", "a+") or die("Unable to open the file!");
		$text = file_get_contents('test_1.txt');
		$text = nl2br($text);

		$newText = '';
		// conversion from hex to dec goes here
		for ($i=0; $i < strlen($text)-1; $i+=2){
        $newText .= chr(hexdec($text[$i].$text[$i+1]));
    }
    return $newText;
		echo $newText;
    fclose($myfile);
	}
?>
