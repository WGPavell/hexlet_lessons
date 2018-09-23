<?

	function decode(string $signal){
		$splitted_signal = preg_split("//u", $signal, -1, PREG_SPLIT_NO_EMPTY);
		$signal_changed = false;
		$binary = '';
		foreach ($splitted_signal as $char) {
			if ($char === '|') $signal_changed = true;
			else {
				if($signal_changed) {
					$signal_changed = false;
					$binary .= '1';
				}
				else $binary .= '0';
			}
		}
		
		return $binary;
	}

	$signal = '_|¯|____|¯|__|¯¯¯';
	echo decode($signal)." "; // => '011000110100'

	$signal_2 = '|¯|___|¯¯¯¯¯|___|¯|_|¯';
	echo decode($signal_2)." "; // => '110010000100111'

	$signal_3 = '¯|___|¯¯¯¯¯|___|¯|_|¯';
	echo decode($signal_3)." "; // => '010010000100111'