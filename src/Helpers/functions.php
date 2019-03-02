<?php

function mb_json_encode($input) {
		return preg_replace_callback('/\\\\u([0-9a-zA-Z]{4})/',function ($matches) {
			return mb_convert_encoding(pack('H*',$matches[1]),'UTF-8','UTF-16');
		},
			json_encode($input)
		);
}
