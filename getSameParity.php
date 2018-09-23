<?

	function getSameParity(array $numbers) {
		
		$result = [];
		
		if(!empty($numbers))
			$parity = abs($numbers[0] % 2);
		
		
		foreach($numbers as $number) {
			if(abs($number % 2) === $parity) {
				$result[] = $number;
			}
		}
		
		return $result;
	}

	print_r(getSameParity([]));
	print_r(getSameParity([-1, 0, 1, -3, 10, -2])); // => [-1, 1, -3])
	print_r(getSameParity([0, -1, 1, -3, 10, -2])); // => [0, 10, -2])