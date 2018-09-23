<?


	function findIndexOfNearest(array $numbers, $search) {
		
		if(empty($numbers)) {
			return null;
		}
		
		$nearestValue = abs($search - $numbers[0]);
		$nearestKey = 0;
		unset($numbers[0]);
		
		foreach($numbers as $index => $number) {
			if(abs($search - $number) < $nearestValue) {
				$nearestValue = abs($search - $number);
				$nearestKey = $index;
			}
		}
		
		return $nearestKey;
	}

	echo findIndexOfNearest([], 2)." ";
	echo findIndexOfNearest([15, 10, 3, 4], 0)." ";
	echo findIndexOfNearest([6], 7)." ";
	echo findIndexOfNearest([6,8,7,3], 7)." ";