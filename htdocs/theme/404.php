<?php
//header( "location: " . home_url() );
?>

<?php get_header(); ?>

<body id="page">
<?php
include( TEMPLATEPATH . '/navi.php' );
?>

<main>
<style>
main h2 {
	font-size: 30px;
	color: #FF0004;
	text-align: center;
	padding: 160px 0 60px;
}
main p {
	font-size: 20px;
	text-align: center;
	padding-bottom: 100px;
}
</style>
  <h2>ページが見つかりません。</h2>
  <p><a href="<?php echo home_url('/'); ?>">トップへ戻る</a></p>
</main>

<?php get_footer(); ?>