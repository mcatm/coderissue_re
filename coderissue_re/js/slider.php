<?php
/*-------------ユーザー定義▼-------------*/
$fpass = "../photo/";				//画像ファイルへのパス
$Ext = ".jpg";						//画像の拡張子
/*-------------ユーザー定義▲-------------*/
	header ("Content-type: text/javascript");
		$i=0;											//パス先、画像データ最大数参照
			while ( file_exists( $fpass . ($i+1) . $Ext) ) {
				$i++;
			}
?>

$(document).ready( function() {

/*-------------ユーザー定義▼-------------*/
var fpass = "./photo/";				//画像ファイルへのパス
var Ext = ".jpg";					//画像の拡張子
/*-------------ユーザー定義▲-------------*/


var number = <?=$i?>;									//画像データの最大数を変数へ格納
var img = new Array();									//1枚目から最大枚数まで配列へ格納
	for ( i=1; i<=number; i++ ) {
		img[i] = fpass+i+Ext;
//alert(img[i]);
	}

$("p").hide();
$("p").delay(500).fadeIn(2000);

		$("#mainview").html('<img class="main" src="'+img[1]+'" alt="" class="target" name="target" width="500" />')



var ichange = function ichange(){							//画像の入れ替え
		$("#mainview img").attr("src", img[i]).fadeIn(2000);
}

				$(".arw_left").click( function(){
					$("#mainview img").fadeOut();
					i--;
						if(i==0){
							i=number;
						};
					setTimeout(	ichange, 380);			//画像表示予約
				});


				$(".arw_right").click( function(){
				$("#mainview img").fadeOut();
					i++;
						if(i>=(number+1)){
							i=1;
						};
					setTimeout( ichange, 380 );			//画像表示予約
				});

}); //End
