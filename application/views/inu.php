<?php 
$data=array('アメリカン・コッカースパニエル',
'アメリカン・エスキモー',
'オーストラリアン・キャトル・ドッグ',
'オーストラリアン・シェパード',
'オーストラリアン・スタンピーテイル・キャトル・ドッグ',
'ェサピーク・ベイ・レトリーバー',
'イニーズ・クレステッド',
'イングリッシュ・コッカースパニエル',
'エントレブック・マウンテンドッグ',
'フィニシュ・ラップフンド',
'ゴールデン・レトリーバー（一部）',
'クーバース',
'ラブラドール・レトリーバー',
'ラポニアン・ハーダー',
'ミニチュア・プードル',
'ノバ・スコシア・ダック・トーリング・レトリーバー',
'ポーチュギース・ウオーター・ドッグ',
'シルキー･テリア',
'スパニッシュ・ウオーター・ドッグ',
'スウィーディッシュ・ラップフンド',
'トイ・プードル・コリー',
'シェルティー',
'ボーダーコリー',
'オーストラリアンシェパード・イングリッシュセッター・ボーダーコリー・ボクサー',
'ジャーマンシェパード',
'コーギー・ウエルシュコーギー・ペンブローク',
'ドーベルマン・ピンシャー',
'スコティッシュテリア');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>犬の遺伝子検査依頼書オーダーフォーム</title>
		<link type="text/css" rel="stylesheet" href="css/style.css" />
		<link type="text/css" rel="stylesheet" href="css/common.css" />
		<script src='js/jquery-1.9.0.min.js'></script>
		
		
		<!-- navigation mobile--->
		<link rel="stylesheet" type="text/css" href="css/slidebars.css">
		<script src="js/slidebars.js"></script>
		<script>
			( function ( $ ) {
				$( document ).ready( function () {
					// Create a new instance of Slidebars
					var controller = new slidebars();
					// Initialize Slidebars
					controller.init();
					/**
					 * Control Classes
					 */
					// Toggle left
					$( '.toggle-left' ).on( 'click', function ( event ) {
						// Stop default behaviour and propagation
						event.preventDefault();
						event.stopPropagation();
						
						// Toggle Slidebar
						controller.toggle( 'sb-1' );
					} );
					// Close any
					$( '.close-any' ).on( 'click', function ( event ) {
						// Check if a Slidebar is open
						if ( controller.active( 'slidebar' ) ) {
							// Stop default behaviour and propagation
							event.preventDefault();
							event.stopPropagation();
							
							// Close any Slidebar
							controller.close();
					   	}
					} );
				} );
			} ) ( jQuery );
		</script>
		
		
	</head>

	<body>
		<!-- navigation mobile-->
		<ul  off-canvas="sb-1 left reveal" id="menu_mobile">
			<li>
				<a href="#">トップページ<br>
				<span>Top Page</span></a>
			</li>
			<li>
				<a href="#">犬の遺伝病検査<br>
				<span>Genetic Disease Testing</span></a>
			</li>
			<li>
				<a href="#">遺伝子型判定 （家畜育種・生産管理）<br>
				<span>Genotyping and Genetic Testing</span></a>
			</li>
			<li>
				<a href="#">その他<br>
				<span>Other Various</span></a>
			</li>
			<li>
				<a href="#">会社情報<br>
				<span>Company Info</span></a>
			</li>
			<li>
				<a href="#">お問い合せ<br>
				<span>Inquiry</span></a>
			</li>
		</ul>
		<div  canvas="container" class="close-any">
			<div class="border_top box1" id="top">
				<header class="wrap">
					<a class="f_left" href="#"  id="top"><img src="images/common/logo.png"></a>
					<div class="f_right">
						<p class="f_left">
							<span>松山本社</span><img src="images/common/n1.jpg"><br>
							<span>大阪支社</span><img src="images/common/n1.jpg">
						</p>
						<button class="button_cm">お問合せ・資料請求</button>
					</div>
					<div class="clear"></div>
					<nav>
						<ul>
							<li>
								<a href="#">トップページ<br>
								<span>Top Page</span></a>
							</li>
							<li>
								<a href="#">犬の遺伝病検査<br>
								<span>Genetic Disease Testing</span></a>
							</li>
							<li>
								<a href="#">遺伝子型判定 <br>（家畜育種・生産管理）<br>
								<span>Genotyping and Genetic Testing</span></a>
							</li>
							<li>
								<a href="#">その他<br>
								<span>Other Various</span></a>
							</li>
							<li>
								<a href="#">会社情報<br>
								<span>Company Info</span></a>
							</li>
							<li>
								<a href="#">お問い合せ<br>
								<span>Inquiry</span></a>
							</li>
						</ul>
					</nav>
				</header><!-- end wrapper-->
				<!-- nav mobile-->
				<div class="box1 nav_m">
					<div class="toggle-left">
						<a class="f_left" href="index.html"><img src="images/common/logo.png"></a>
						<a class="f_right" href="#">Menu</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="wrap2 banner">
				<img src="images/img1.jpg">
			</div><!-- end banner-->
			<div class="main wrap">
				<div class="title1"><span>検査お申し込み</span></div>
				<div class="title2" style="margin-top:20px;"><span>お客様に関する情報</span></div>
				<table class="table_cm" cellspacing="10">
					<tr>
						<td class="t_margin">施設名</td>
						<td><input type="text" class="box3 input"></td>
					</tr>
					<tr>
						<td><span class="textform">必須</span>郵便番号</td>
						<td><input type="text" class="box2 input" placeholder="111"> - 
							<input type="text" class="box2 input" placeholder="0000">
						</td>
					</tr>
					<tr>
						<td><span class="textform">必須</span>住所</td>
						<td><input type="text" class="box3 input"></td>
					</tr>
					<tr>
						<td><span class="textform">必須</span>電話番号</td>
						<td><input type="text" class="box3 input" placeholder="例）　0111223333 （半角入力）"></td>
					</tr>
					<tr>
						<td class="t_margin">ファックス</td>
						<td><input type="text" class="box3 input" placeholder="例）　0111223333 （半角入力）"></td>
					</tr>
					<tr>
						<td class="t_margin">携帯番号</td>
						<td><input type="text" class="box3 input" placeholder="例）　09011112222 （半角入力）"></td>
					</tr>
					<tr>
						<td class="padding0"><span class="textform">必須</span>メール <br>アドレス</td>
						<td><input type="text" class="box3 input" placeholder="半角入力"></td>
					</tr>
					<tr>
						<td class="padding0"><span class="textform">必須</span>メールアド<br>レス確認用</td>
						<td><input type="text" class="box3 input" placeholder="半角入力"></td>
					</tr>
				</table>
				<div class="clear"></div>
				<div class="top_content2">
					<div class="title2"><span>ペットに関する情報</span></div>
					<table class="table_cm" cellspacing="10">
						<tr>
							<td><span class="textform">必須</span>ペット名前</td>
							<td><input type="text" class="box3 input"></td>
						</tr>
						<tr>
							<td><span class="textform">必須</span>犬種</td>
							<td><input type="text" class="box3 input"></td>
						</tr>
						<tr>
							<td><span class="textform">必須</span>ペット年齢</td>
							<td><div class="box2" style="float:left;position:relative;"><input type="text" class="input box1" /><span style="position:absolute; right:5px; bottom:3px;">才</span></div></td>
						</tr>
						<tr>
							<td class="padding0"><span class="textform">必須</span>性別/去勢</td>
							<td>
								<input type="radio">男の子
								<input type="radio">去勢している
								<input type="radio">去勢していない
							</td>
						</tr>
						<tr>
							<td class="padding0"><span class="textform">必須</span>性別/避妊</td>
							<td>
								<input type="radio">女の子
								<input type="radio">避妊している
								<input type="radio">避妊していない
							</td>
						</tr>
						<tr>
							<td><span class="textform">必須</span>気になること</td>
							<td>
								<textarea class="box3 textarea" rows="4"></textarea>
							</td>
						</tr>
					</table>
				</div><!-- end content 2-->
				<div class="clear"></div>
				<div class="top_content3">
					<div class="title2"><span>検査に関する情報</span></div>
					<table class="table_cm" cellspacing="10">
						<tr>
							<td><span class="textform">必須</span>犬種</td>
							<td>
								<p>右の▼をクリックして犬種を選択してください。</p>
								<select class="box3 input">
                                     <?php
			            				foreach ($data as $value) {
										echo '<option><a href="">'. $value . ',</a></option>';
                												  }
									 ?>
								</select>
								<p>どちらかを選択してください。</p>
							</td>
						</tr>
						<tr>
							<td class="padding0"><span class="textform">必須</span>遺伝子<br>検査項目</td>
							<td>
								<input type="radio">単品検査のみ   &nbsp;&nbsp; 4,500 円（内税）
								<input type="radio">セット検査  &nbsp;&nbsp;8,000円（内税）
								<div class="clear"></div>
								<div class="box1">
									<input class="f_left input2" value="PRA-prcd（遺伝性進行性網膜委縮症）"> + 
									<input class="input2">
								</div>
								<div>
									<span class="box1 f_left">主な伝染病</span>
									<table class="table_cm2">
										<tr>
											<td>記号</td>
											<td>病名</td>
											<td>説明</td>
										</tr>
										<tr>
											<td>PRA-prcd</td>
											<td>遺伝性進行性網膜委縮症</td>
											<td>トイプードルなど洋犬の多くに見られ、目で光を感じる網膜が生後しばらくしてから委縮し、夜間などで見えづらくなり、やがて昼間でも視力に支障をきたし、物にぶつかったりします。最終的には失明することが多い遺伝病です。</td>
										</tr>
										<tr>
											<td>CEA</td>
											<td>コリーアイ</td>
											<td>眼球後半部を包む脈絡膜の局所的な発育不全や網膜内の過剰な血管新生などにより視力障害を起こす病気です。</td>
										</tr>
										<tr>
											<td>CL</td>
											<td>セ ロイドリポフスチン症</td>
											<td>老廃物が脳内神経細胞に蓄積し、知覚や運動機能が失われる病気です。</td>
										</tr>
										<tr>
											<td>TNS</td>
											<td>遺伝性好中球減少症</td>
											<td>感染症菌に抵抗する好中球が次第に減少し、やがて重い感染症をわずらい死亡する。</td>
										</tr>
										<tr>
											<td>DM</td>
											<td>変性性脊髄委縮症</td>
											<td>６-10歳齢で発症し、後肢足の麻痺から前肢足麻痺、呼吸障害へと進行します。　診断には症状の獣医師による確定診断が必要です。</td>
										</tr>
										<tr>
											<td>VWD</td>
											<td>フォンビルブランド病</td>
											<td>一般的な出血性の遺伝性疾患です。 血液凝固の過程において重要な役割を担う、vWD因子（以下vWF）の不足によって引き起こされます。鼻血や出産後出血が長引くなど出血時間が長引いたり大量出血により致死のタイプもあります。 本検査では、ｖWD因子の遺伝変異を報告します。</td>
										</tr>
									</table>
									<span>※１項目4,500円（内税）　　※１度に２項目以上分析時は１項目4,000円（内税）</span>
								</div>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><button class="bg_blue button1">内容を確認をする</button></td>
						</tr>
					</table>
					
				</div><!-- end content 2-->
			</div><!-- end main content-->
			<div class="clear"></div>
			<footer>
				<div class="box1">
					<ul class="wrap3">
						<li>
							<img src="images/common/logo.png">
							<span></span>
							<p>
								<b>本社</b><br>
								〒790-0905 愛媛県松山市樽味3-5-7<br>
								国立大学法人 愛媛大学 農学部内<br>
								TEL：0120-822-942<br>
								FAX：089-977-4364<br>
							</p>
							<p>
								<b>大阪支社（大阪試験室）</b><br>
								〒590-0906 大阪府堺市堺区三宝町4-230<br>
								TEL：072-228-6121<br>
								FAX：072-226-7176<br>
							</p>
						</li>
						<li>
							<ul>
								<li><a href="#">トップページ</a></li>
								<li><a href="#">最新情報</a></li>
								<li><a href="#">犬の遺伝病検査</a></li>
								<li><a href="#">遺伝子型判定（家畜育種）</a></li>
								<li><a href="#">その他</a></li>
								<li><a href="#">会社情報</a></li>
							</ul>
						</li>
						<li>
							<div>
								<h3>お問合せ、資料請求は下記まで</h3>
								<div>
									<p>
										フリーダイヤル<br>
										<span></span>
									</p>
									<p>
										メールフォーム<br>
										<button class="button_cm">お問合せ・資料請求</button>
									</p>
								</div>
							</div>
							
						</li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="box1" style="background-color:#e57525;">
					<p style="text-align:center;padding-top:6px;padding-bottom:6px;color:#fff;font-size:11px">Copyright （C） VEQTA Co. ,Ltd . All Rights Reserved.</p>
				</div>
				<div>
					<a href="#top" id="top-link"></a>
				</div>
			</footer>
		
		</div><!-- end canvas -->
	</body>
</html>
