<?php
if (isset($_GET['roll'])) {
	if ($_GET['roll']=="1") {
	$dice1 = rand(1,6);
	$dice2 = rand(1,6);
	$dice3 = rand(1,6);
	$dice4 = rand(1,6);
	$dice5 = rand(1,6);
	$dice6 = rand(1,6);
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Petals around the Rose Generator</title><link rel="stylesheet" type="text/css" href="style.css"/>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="SpryAssets/SpryEffects.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_effectAppearFade(targetElement, duration, from, to, toggle)
{
	Spry.Effect.DoFade(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
}
</script>
</head>

<body>
<div id="credits"><h1>petals around the rose generator v2.0</h1>
<p>Engine by: Matt Sowden</p>
<p>Beta Testing by: Brad Fellmeth</p>
<p>Pictures: From the internet</p>
<p>Special Thanks:</p>
<p>-Brad Fellmeth</p>
<p>-Aj Renner</p>
<p>&copy; <?php echo date('Y'); ?></p>
<p>&nbsp;</p>
<p><a href="#" onclick="MM_effectAppearFade('credits', 1000, 100, 0, false);MM_effectAppearFade('wrapper', 1000, 0, 100, false)">Close Ze Window</a></p>
</div>
<div id="wrapper">
  <h1>petals around the rose</h1>
  <p>the name of the game is petals around the rose.</p>
  <p>the name of the game is very important.</p>
  <p>the answer is always zero or an even number.</p>
  <p><a href="index.php?roll=1">Click here to <?php if(isset($_GET['roll'])||isset($_POST['roll'])){ ?>roll again.<?php } else { ?>begin.<?php } ?></a></p>
  <?php if(isset($_GET['roll'])) { ?>
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td align="center" valign="top">
	<?php if($dice1=="1"){ ?><img src="images/one.png" width="20" height="20" /><?php } ?>
    <?php if($dice1=="2"){ ?><img src="images/two.png" width="20" height="20" /><?php } ?>
    <?php if($dice1=="3"){ ?><img src="images/three.png" width="20" height="20" /><?php } ?>
    <?php if($dice1=="4"){ ?><img src="images/four.png" width="20" height="20" /><?php } ?>
    <?php if($dice1=="5"){ ?><img src="images/five.png" width="20" height="20" /><?php } ?>
    <?php if($dice1=="6"){ ?><img src="images/six.png" width="20" height="20" /><?php } ?>
    </td>
    <td align="center" valign="top"><?php if($dice2=="1"){ ?><img src="images/one.png" width="20" height="20" /><?php } ?>
    <?php if($dice2=="2"){ ?><img src="images/two.png" width="20" height="20" /><?php } ?>
    <?php if($dice2=="3"){ ?><img src="images/three.png" width="20" height="20" /><?php } ?>
    <?php if($dice2=="4"){ ?><img src="images/four.png" width="20" height="20" /><?php } ?>
    <?php if($dice2=="5"){ ?><img src="images/five.png" width="20" height="20" /><?php } ?>
    <?php if($dice2=="6"){ ?><img src="images/six.png" width="20" height="20" /><?php } ?></td>
    <td align="center" valign="top"><?php if($dice3=="1"){ ?><img src="images/one.png" width="20" height="20" /><?php } ?>
    <?php if($dice3=="2"){ ?><img src="images/two.png" width="20" height="20" /><?php } ?>
    <?php if($dice3=="3"){ ?><img src="images/three.png" width="20" height="20" /><?php } ?>
    <?php if($dice3=="4"){ ?><img src="images/four.png" width="20" height="20" /><?php } ?>
    <?php if($dice3=="5"){ ?><img src="images/five.png" width="20" height="20" /><?php } ?>
    <?php if($dice3=="6"){ ?><img src="images/six.png" width="20" height="20" /><?php } ?></td>
    <td align="center" valign="top"><?php if($dice4=="1"){ ?><img src="images/one.png" width="20" height="20" /><?php } ?>
    <?php if($dice4=="2"){ ?><img src="images/two.png" width="20" height="20" /><?php } ?>
    <?php if($dice4=="3"){ ?><img src="images/three.png" width="20" height="20" /><?php } ?>
    <?php if($dice4=="4"){ ?><img src="images/four.png" width="20" height="20" /><?php } ?>
    <?php if($dice4=="5"){ ?><img src="images/five.png" width="20" height="20" /><?php } ?>
    <?php if($dice4=="6"){ ?><img src="images/six.png" width="20" height="20" /><?php } ?></td>
    <td align="center" valign="top"><?php if($dice5=="1"){ ?><img src="images/one.png" width="20" height="20" /><?php } ?>
    <?php if($dice5=="2"){ ?><img src="images/two.png" width="20" height="20" /><?php } ?>
    <?php if($dice5=="3"){ ?><img src="images/three.png" width="20" height="20" /><?php } ?>
    <?php if($dice5=="4"){ ?><img src="images/four.png" width="20" height="20" /><?php } ?>
    <?php if($dice5=="5"){ ?><img src="images/five.png" width="20" height="20" /><?php } ?>
    <?php if($dice5=="6"){ ?><img src="images/six.png" width="20" height="20" /><?php } ?></td>
    <td align="center" valign="top"><?php if($dice6=="1"){ ?><img src="images/one.png" width="20" height="20" /><?php } ?>
    <?php if($dice6=="2"){ ?><img src="images/two.png" width="20" height="20" /><?php } ?>
    <?php if($dice6=="3"){ ?><img src="images/three.png" width="20" height="20" /><?php } ?>
    <?php if($dice6=="4"){ ?><img src="images/four.png" width="20" height="20" /><?php } ?>
    <?php if($dice6=="5"){ ?><img src="images/five.png" width="20" height="20" /><?php } ?>
    <?php if($dice6=="6"){ ?><img src="images/six.png" width="20" height="20" /><?php } ?></td>
  </tr>
</table>
<?php 

if($dice1==3){
	$add1=2;
}elseif($dice1==5){
	$add1=4;
}else{
	$add1=0;
}
if($dice2==3){
	$add2=2;
}elseif($dice2==5){
	$add2=4;
}else{
	$add2=0;
}
if($dice3==3){
	$add3=2;
}elseif($dice3==5){
	$add3=4;
}else{
	$add3=0;
}
if($dice4==3){
	$add4=2;
}elseif($dice4==5){
	$add4=4;
}else{
	$add4=0;
}
if($dice5==3){
	$add5=2;
}elseif($dice5==5){
	$add5=4;
}else{
	$add5=0;
}
if($dice6==3){
	$add6=2;
}elseif($dice6==5){
	$add6=4;
}else{
	$add6=0;
}
$answer=$add1+$add2+$add3+$add4+$add5+$add6;
?>
<h2>what is the answer?</h2>
<form action="index.php" method="post">
<input name="number" type="text" />
<input type="submit" name="Submit" id="Submit" value="Submit" /><input name="roll" type="hidden" value="2" />
<input name="ans" type="hidden" value="<?php echo $answer; ?>" />
</form>
  <?php } ?>
  <?php if(isset($_POST['roll'])){
	  if($_POST['roll']=="2"){ ?>
      <h2>what is the answer?</h2>
      <p>you guessed: <?php echo $_POST['number']; ?></p>
      <p>the correct answer is: <span id="fadeans"><?php echo $_POST['ans']; ?></span></p>
      <p><?php if($_POST['number']==$_POST['ans']){ ?>congratulations! you guessed correctly!<?php }else{ ?>sorry, you guessed incorrectly.<?php } ?>
      <?php } } ?>
  <span class="smallcenter"><a href="#" onclick="MM_effectAppearFade('credits', 1000, 0, 100, false);MM_effectAppearFade('wrapper', 1000, 100, 0, false)">Credits</a></span>
</div>
</body>
</html>