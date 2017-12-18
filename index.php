<?php
// Shared on J2Team Community
// by HTTZIP

header("Content-Type: text/plain");

$url = 'http://www.petrolimex.com.vn/';
$content = file_get_contents($url);
$first_step = explode( '<div id="vie_p5_PortletContent">' , $content );
$second_step = explode("</div>" , $first_step[1] );

 // "Xăng 95 IV: <br />";
 $xang_95_4_v1 = strip_tags($second_step[4]);
  $xang_95_4_v2 = strip_tags($second_step[5]);

  // "Xăng 95 III <br />";
  $xang_95_3_v1 = strip_tags($second_step[8]);
  $xang_95_3_v2 = strip_tags($second_step[9]);

  // "Xăng 95 II <br />";
   $xang_95_2_v1 = strip_tags($second_step[12]);
   $xang_95_2_v2 = strip_tags($second_step[13]);

  // "E5 RON 92-II <br />";
   $xang_92_2_v1 = strip_tags($second_step[16]);
   $xang_92_2_v2 = strip_tags($second_step[17]);

  // "DO 0,05S <br />";
   $xang_do_v1 = strip_tags($second_step[20]);
   $xang_do_v2 = strip_tags($second_step[21]);
  // "Dầu hỏa <br />";
   $dauhoa_v1 = strip_tags($second_step[24]);
   $dauhoa_v2 = strip_tags($second_step[25]);

$result = Array (

					"0" => array(
						"attachment" => array(
							"type" => "template",
							"payload" => array(
								"template_type" => "generic",
								"elements" => array(
									"0" => array(
										"title" => "Xăng RON 95-IV",
										"image_url" => "https://fs.petrolimex.com.vn/Files/6783DC1271FF449E95B74A9520964169/image=jpeg/90cab911f8a0497ba9b264fe4bffd30d/02.jpg",
										"subtitle" => "Vùng 1 : ".$xang_95_4_v1. "đ -  Vùng 2 : ".$xang_95_4_v2."đ",
										
											), // End 
									"1" => array(
				"title" => "Xăng RON 95-III",
				"image_url" => "https://fs.petrolimex.com.vn/Files/6783DC1271FF449E95B74A9520964169/image=jpeg/90cab911f8a0497ba9b264fe4bffd30d/02.jpg",
				"subtitle" => "Vùng 1 : ".$xang_95_3_v1. "đ -  Vùng 2 : ".$xang_95_3_v2."đ",
				
					), // End 
										"2" => array(
				"title" => "Xăng RON 92-II",
				"image_url" => "https://fs.petrolimex.com.vn/Files/6783DC1271FF449E95B74A9520964169/image=jpeg/90cab911f8a0497ba9b264fe4bffd30d/02.jpg",
				"subtitle" => "Vùng 1 : ".$xang_95_2_v1. "đ -  Vùng 2 : ".$xang_95_2_v2."đ",
				
					), // End 
										"3" => array(
				"title" => "E5 RON 92-II",
				"image_url" => "https://fs.petrolimex.com.vn/Files/6783DC1271FF449E95B74A9520964169/image=jpeg/90cab911f8a0497ba9b264fe4bffd30d/02.jpg",
				"subtitle" => "Vùng 1 : ".$xang_92_2_v1. "đ -  Vùng 2 : ".$xang_92_2_v2."đ",
				
					), // End 
										
										"4" => array(
				"title" => "DO 0,05S",
				"image_url" => "https://fs.petrolimex.com.vn/Files/6783DC1271FF449E95B74A9520964169/image=jpeg/90cab911f8a0497ba9b264fe4bffd30d/02.jpg",
				"subtitle" => "Vùng 1 : ".$xang_do_v1. "đ -  Vùng 2 : ".$xang_do_v2."đ",
				
					), // End 
										"5" => array(
				"title" => "Dầu hỏa",
				"image_url" => "https://fs.petrolimex.com.vn/Files/6783DC1271FF449E95B74A9520964169/image=jpeg/90cab911f8a0497ba9b264fe4bffd30d/02.jpg",
				"subtitle" => "Vùng 1 : ".$dauhoa_v1. "đ -  Vùng 2 : ".$dauhoa_v2."đ",
				
					), // End 
													),	
												),	
													),	
									),
							);
			echo json_encode($result, JSON_PRETTY_PRINT);



?>
