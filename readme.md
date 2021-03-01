# gulpについて
gulpは主にscssのコンパイルと、browser-syncのみに使用しています。
gulpfile.jsのあるディレクトリへ移動し、
```
npm install
```
でインストールしたあと、
```
gulp
```
で動きます。

XAMPPを使用する場合は、gulpfile.js内の変数"use_xampp"を切り換え、
proxyを設定してください。


# コーディングルール
**★必須ルールと任意ルールがあります★**


## 以下必須

### サポートブラウザ
・PC…Windows/Mac　Chrome,Firefox,Edge,IE,Safari 各ブラウザ最新版  
・スマホ…Android 5.0以上 / iOS 9以上  
※横幅は1920pxまでサポート  


### ディレクトリ構造
・htdocs直下をルートとする  
・common > css 内に全スタイルシートの格納  
・common > js 内に全javascriptファイルの格納  
・common > img 内に全imgファイル格納  
※imgディレクトリ直下は共通で使用する画像（ロゴやアイコン、ヘッダーフッター等共通部分）を置き、
ページごとに単独で使用する画像は各ページ用ディレクトリ(top,about等)を作成し格納  
・themeフォルダはWP用なので、静的コーディングのみの場合は無視してOK


### 画像について
jpgとpngを適宜使い分ける。jpgは画質80で切り出す。  
アイコン等、svgで出せるものはsvgでもOK。


### レスポンシブについて
viewportは固定（例：<meta name="viewport" content="width=750">）にせず、  
<meta name="viewport" content="width=device-width">  
とする。別途指示がある場合はそちらを優先すること。  
ブレイクポイントは特に指定がない限り、750pxとする。その他必要があれば適宜追加する。  


### HTML記述ルール
・インデントはTabで


### CSS記述ルール
・可能な限り全要素にclassをつけ、要素自体にスタイルを指定しない。  
（※td,li,dt等、親がほぼ確実に決まっているものについてはその限りではない）  
・できるだけidにもスタイルをつけない。  

※以下は慣れてないと時間がかかると思うので、できればでOK  
・子孫セレクタはできればあまり使わないようにし、子セレクタを使うようにする。  
・入れ子は２つまでを心掛ける。（３階層まで）  
・レスポンシブの記述は、各記述のすぐ下に書く。  
・_vend以外は"!important"を使用しない。（どうしてもという場合は仕方ない）


### Sass(scss)を使用しない場合
cssは、特に理由がない限りなるべく "htdocs > common > css > style.css"内に全て記述すること。  
ライブラリやフレームワーク等、別途用意されているものは普通に別途読み込む。  
既に書き込まれているスタイルは消さないように。（再スタイリングによる上書きは可）  
reset.cssが使われているので、normalize.cssに変更しても良い。


### Sass(scss)を使用する場合
以下は当フォルダの構造。どこに書くかは難しく考えず、ふわっとでＯＫ。  
ただし、元々あるファイルを削除しないこと。  
・/lib  
→_font.scss …ウェブフォント等、特殊なフォント使用時に記述  
→_mixin.scss …mixinを記述  
→_setting.scss …各種設定  

・/normalize  
_normalize.scss or _reset.scss、どちらかの読み込みを選択する。  
（デフォルトはreset。使いやすいほうで）  

・_base.scss  
デフォルトスタイル及びセレクタそのものへのスタイル指定。  

・/layout  
headerやfooter、sideなど共通部分はここに。  
例：  
_header.scss  
_footer.scss  

・_common.scss  
どのサイトでも使用する汎用クラス（mb0、pc-non等）  

・/module  
再利用可能なパーツ。ページを構成する個々のコンポーネント（部品）。  
モジュールはさまざまな要素で利用される可能性があるので、特定の要素に依存しないようにする。  
例：  
_btn.scss  
_form.scss  

・page …各ページごとのスタイル  
例：  
_about.scss  
_recruit.scss  

・_vend.scss  
外部ライブラリ（bootstrap、jQueryプラグイン等）の上書きをしたい場合。  



## 以下任意

### 命名規則（BEM基盤）
class名は、  
.block__element_modifier  
のように記述。  
キャメルケース使用可  
例：.blockHere__elementInner_modifierHow  
  
再利用可能なパーツについては、BEMではなく単独でclass名をつける。  

#### moduleの場合
命名規則は、{category}-{element}  
例：  
btn-primary  
form-text  
バリエーションをつける場合は、別途バリエーション用スタイルをつける  
例：  
class="btn-primary -brown"