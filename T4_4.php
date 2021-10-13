<?php //Решение задания по заданию
	for ($i=2; $i<=20;$i++){
    	if ($i%2!=0){
       		continue;
        }
        else{
        	echo "$i ";
        }
    }
?>

<?php //Решение задания через WHILE
    $i=1;
    while($i<20){
        $i++;
        if ($i%2==0) {
        echo $i." ";
        }
    };
?>

