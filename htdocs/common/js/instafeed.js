/*
*	Instagram BASIC Display APIを使用したInstagram表示プログラム
* Since 2020/11/10
*
* 仕様が大幅に変わり、「Facebookアプリの中に作ったInstagramアプリ」で動くようになっている。
* 長期アクセストークンの取得方法は https://www.e-pokke.com/blog/instagram-basic-display-api.html を参考に
* アクセストークンは60日で切れるため、再取得する必要がある。
*/

$(function () {
	// 長期アクセストークン
	var token_long = 'xxx';
	// JSON取得
	var api_url = 'https://graph.instagram.com/me/media?fields=id,caption,permalink,media_url&access_token='+ token_long;

	// 表示
  $.ajax({
		type: 'GET',
		url: api_url,
		dataType: 'json',
		success: function(json) {

		  var html = '';
			var gallery_data = json.data;
			var gallery_length = gallery_data.length;
			var gallery_length = 5; // 表示させる枚数。指定がなければコメントアウトする。
			for (var i = 0; i < gallery_length; i++) {
				html += '<li><a href="' + gallery_data[i].permalink + '" target="_blank"><img src="' + gallery_data[i].media_url + '"></a></li>';
			}
			$("#instafeed").append(html);
		},
		error: function() {
		  $("#instafeed").append('<li>エラー<//li>');
		}
	});
});