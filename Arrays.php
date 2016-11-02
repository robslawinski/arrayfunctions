<?php
	function array_keys_example()
	{
		$list = array('red','green','blue');
		print_r(array_key_exists($list,'blue'));
		echo "<br/>";
	}

	function array_search_example()
	{
		$haystack = array('red','green','blue');
		$key = array_search('green', $haystack);
		print_r(key);
		echo "<br/>";
	}

	//help
	function array_walk_example()
	{
		$fruits = array('apples','oranges','bananas');
		$newfruits = array_walk($fruits, $callback);
		return $newfruits;
		echo "<br/>";
	}

	//
	function array_pop_example()
	{
		$array = array("orange","banana","apple","pear");
		$fruit =array_pop($array);
		echo $array;
		echo $fruit;
		echo "<br/>";
	}


	function array_push_example()
	{
		$stack = array("apples","oranges");
		array_push($stack, "bananas","pears");
		print_r($stack);
		echo "<br/>";
	}

	function array_combine_example()
	{
		$a = array("light","dark");
		$b = array("white","black");
		$c = array_combine($a,$b);

		print_r(c);
		echo "<br/>";
	}

	function explode_example()
	{
		$str = "I love to sing-a About the moon-a and the June-a and the spring-a";
		$song = explode("-a", $str);
		foreach($song as $verse)
		{
			return $verse;
		}
		echo "<br/>";
	}

	function implode_example()
	{
		$str = array("a","b","c");
		echo implode(' : ', $str);
		echo "<br>";
	}

	function array_intersect_example()
	{
		$array1 = array("green","red","blue");
		$array2 = array("green","yellow","red");
		$result = array_intersect($array1,$array2);
		print_r($result);
		echo "<br/>";
	}

	function array_fill_example()
	{
		$a = array_fill(5,5, 'foo');
		$b = array_fill(-1,3,'bar');
		print_r($a);
		print_r($b);
		echo "<br/>";
	}

	function array_merge_example()
	{
		$beg = array(1 => "foo");
		$end = array(1 => "bar");
		$result = array_merge($beg,$end);
		return $result;
		echo "<br/>";
	}

	function array_reverse_example()
	{
		$alphabet = array("a","b","c","d");
		
		$lebahpla = array_reverse($alphabet);
		
		return $lebahpla;
		echo "<br/>";
	}

	function array_sum_example()
	{
		$a = array(2,3,4,5);
		echo "the sum of a is ". array_sum($a) . "\n";

		$b = array(1.1,3.14,22);
		echo "the sum of b is". array_sum($b) ."\n";
		
		echo "<br/>";
	}

	function asort_example()
	{
		$froot = array("pear","orange","banana","apple");
		asort($froot);
		foreach($froot as $key => $val)
		{
			echo "$key = $val\n";
		}
		echo "<br/>";
	}
	
print_r( array_keys_example());
print_r(array_search_example());
print_r(array_walk_example());
print_r(array_pop_example());
print_r(array_push_example());
print_r( array_combine_example());
print_r( explode_example());
print_r( implode_example());
print_r( array_intersect_example());
print_r(array_fill_example());
print_r(array_merge_example());
print_r(array_reverse_example());
print_r(array_sum_example());
print_r(asort_example());

?>