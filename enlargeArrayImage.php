<?

	function print_array_image(array $image){
		$size_x = count($image[0]);
		$size_y = count($image);
		
		$string = '';
		
		for($i = 0; $i < $size_y; $i++) {
			for($j = 0; $j < $size_x; $j++) {
				$string .= $image[$i][$j];
			}
			$string .= "\n";
		}
		
		return $string;
	}

	function enlargeArrayImage(array $image) {
		$size_x = count($image[0]);
		$size_y = count($image);
		
		$new_image = [];
		
		for($i = 0; $i < $size_y; $i++) {
			for($j = 0; $j < $size_x; $j++) {
				$new_image[$i * 2][$j * 2 + 1] = $new_image[$i * 2][$j * 2] = $image[$i][$j];
			}
			$new_image[$i * 2 + 1] = $new_image[$i * 2];
		}
		
		return $new_image;
	}

	$arr = [
		['*','*','*','*'],
		['*',' ',' ','*'],
		['*',' ',' ','*'],
		['*','*','*','*']
	];
	// ****
	// *  *
	// *  *
	// ****

	echo "<pre>";
	$new_arr = enlargeArrayImage($arr);

	echo print_array_image($arr)."\n\n";
	echo print_array_image($new_arr)."\n\n";

	$new_arr = enlargeArrayImage($new_arr);

	echo print_array_image($new_arr)."\n\n";
	echo "</pre>";