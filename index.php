
<html lang="sd" dir="rtl">
<head><head><meta charset="UTF-8">
<title>Sindhi Transliteration سنڌي ٽرانسلٽريشن، Sindhi Script Converter سنڌي لپي مٽائيندڙ</title>
 <meta name="ROBOTS" content="INDEX, FOLLOW">
 <meta name="keywords" content="Sindhi Romanization, Sindhi Language Transliteration, Transliteration of Sindhi Scripts, South Asian Language Transliteration Engine, Roman Sindhi, Romanization of Sindhi Script, Sindhi Devanagri, Devanagri, Sindhi language, Sindhi Transliteration, Transliteration, Devanagri Transliteration, Sindhi to Roman, Sindhi to Devanagri, Fahad Memon, Sindhi Script converter, Sindhi Translitration, Sindhi Romanization سنڌي الٿي ڪندڙ، سنڌي لپي مٽائيندڙ، سنڌي رومنائيزيشن">

  
  <meta name="description" content = "Sindhi Transliteration is a program which convert many natural languages in to other languages, Sindhi Transliteration, Roman Transliteration, Arabic Sindhi script converter, Hindi transliteration, Urdu Transliteration, Hindi Transliteration, IPA Transliteration International Phonetic Alphabet script Converter to Sindhi language, سنڌي ٽرانسلٽريشن ھڪ پراجيڪٽ آھي جنھن ذريعي اوھان سنڌي ٻوليءَ کان اردو، انگريزي/رومن، ھندي/ديوناگري، آءِ پي اي، ۾ متن کي ٽرانسلٽريٽ ڪنورٽ يا الٿي ڪري سگھو ٿا" />
 <link rel="stylesheet" href="css.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
<section id="contact">
			<div class="section-content">
				<h1 class="section-header"> <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Sindhi Transliteration </span> سنڌي ٽرانسلٽريشن</h1>
				<h3>Write and click <b>TRANSLITRATE</b></h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form method='POST' action='index.php'>	
					<div class="col-md-6 form-line">
					    <div class="form-group"> 
					    <BR> </div>
			  			<div class="form-group">
			  			<script type="text/javascript">
function replacer()
{
var x=document.getElementById("original");
x.value=x.value.replace(/(\r\n|\n|\r)/gm," <BR> ");
}
</script>	
<textarea  rows='4' cols='50' name="textt" class="form-control" onblur="replacer()" id="original" placeholder="Enter Your Text">
<?PHP
if (isset($_POST['textt'])){$textt=$_POST['textt']; echo $textt;} ?></textarea>
			  			</div>
			  		</div>
			  		<div class="col-md-6">
			  		     <div class="form-group"> 
<dir='ltr'><label for ="from"> From</label>
			  				
					    <select name="script" id="script">
    <option value="sin_roman">Sindhi to Roman</option>
    <option value="roman_sin">Roman to Sindhi</option>
    
	<option value="sin_dev">Sindhi to Devanagri</option>
    <option value="dev_sin">Devanagri to Sindhi</option>
	
	<option value="sin_urdu">Sindhi to Urdu</option>
    <option value="urdu_sin">Urdu to Sindhi</option>
	
	<option value="sin_ipa">Sindhi to IPA</option>
    <option value="ipa_sin">IPA to Sindhi</option>
	
	<option value="urdu_hin">Urdu to Hindi</option>
    <option value="hin_urdu">Hindi to Urdu</option>
	
  </select> </div>

						
						<?php
						
						
							if (isset($_POST['button1'])){
								if($_POST['script']=='sin_roman' OR $_POST['script']=='roman_sin'){
									echo "<h2><p style='color:black;background-color:white;'>"; include("translitrationbabagoodeng/word.php"); echo "</p></h2><br>";

							
							
							}
							
							if($_POST['script']=='sin_dev' OR $_POST['script']=='dev_sin'){
									echo "<h2><p style='color:black;background-color:white;'>"; include("translitrationbabagooddev/word.php"); echo "</p></h2><br>";

							
							
							}
							if($_POST['script']=='sin_ipa' OR $_POST['script']=='ipa_sin'){
									echo "<h2><p style='color:black;background-color:white;'>"; include("translitrationbabagoodipa/word.php"); echo "</p></h2><br>";

							
							
							}
							
							if($_POST['script']=='sin_urdu' OR $_POST['script']=='urdu_sin'){
									echo "<h2><p style='color:black;background-color:white;'>"; include("translitrationbabagoodurdu/word.php"); echo "</p></h2><br>";

							
							
							}
							
							
							if($_POST['script']=='urdu_hin' OR $_POST['script']=='hin_urdu'){
									echo "<h2><p style='color:black;background-color:white;'>"; include("translitrationbabagoodhin/word.php"); echo "</p></h2><br>";

							
							
							}
							
							}?>
			  			<div>

			  				<input type="submit" name='button1' class="btn btn-default submit" value='Translate'>
							
				 
			  			</div>
			  			
					</div>
				</form>
				<?php
							if (isset($_POST['button1'])){
								if($_POST['script']=='sin_roman' OR $_POST['script']=='roman_sin'){
							
							?><select onchange="location = this.value;">
                                <option value="index.php">سيٽنگ ڪريو</option>
				<option value="translitrationbabagoodeng/units.php">بنيادي ايڪا لکو</option>
				<option value="translitrationbabagoodeng/starting_vowels.php">شروعاتي حرف علت/صحي</option>
				<option value="translitrationbabagoodeng/ending_vowels.php">آواز جي خاتمي وارا حرف علت</option>
                <option value="translitrationbabagoodeng/indexsin.php">سنڌي لفظن کي سُر يا حرف عِلت لکو</option>
                <option value="translitrationbabagoodeng/indexeng.php">انگريزي لفظن کي سُر يا حرڪتون ڏيو</option>
               
</select><?PHP
							
							
							}
							
							if($_POST['script']=='sin_dev' OR $_POST['script']=='dev_sin'){
							
							?><select onchange="location = this.value;">
<option value="index.php">سيٽنگ ڪريو</option>				
				<option value="translitrationbabagooddev/units.php">بنيادي ايڪا لکو</option>
                <option value="translitrationbabagooddev/indexsin.php">سنڌي لفظن کي سُر يا حرف عِلت لکو</option>
                <option value="translitrationbabagooddev/indexeng.php">ديوناگري لفظن کي سُر يا حرڪتون ڏيو</option>
               
</select><?PHP
							
							
							}
							
							
							if($_POST['script']=='sin_ipa' OR $_POST['script']=='ipa_sin'){
							
							?><select onchange="location = this.value;">
<option value="index.php">سيٽنگ ڪريو</option>
<option value="translitrationbabagoodipa/units.php">بنيادي ايڪا لکو</option>
                <option value="translitrationbabagoodipa/index.php">سنڌي لفظن کي سُر يا حرف عِلت لکو</option>
                
               
</select><?PHP
							
							
							}
							
							if($_POST['script']=='sin_urdu' OR $_POST['script']=='urdu_sin'){
							
							?><select onchange="location = this.value;">
<option value="index.php">سيٽنگ ڪريو</option>
				<option value="translitrationbabagoodurdu/units.php">بنيادي ايڪا لکو</option>
                <option value="translitrationbabagoodurdu/indexsin.php">سنڌي لفظن کي سُر يا حرف عِلت لکو</option>
				<option value="translitrationbabagoodurdu/indexeng.php">اردو لفظن کي سُر يا حرف عِلت لکو</option>
				
                
               
</select><?PHP
							
							
							}
							
							
						if($_POST['script']=='urdu_hin' OR $_POST['script']=='hin_urdu'){
							
							?><select onchange="location = this.value;">
<option value="index.php">سيٽنگ ڪريو</option>
				<option value="translitrationbabagoodhin/units.php">بنيادي ايڪا لکو</option>
                <option value="translitrationbabagoodhin/indexsin.php">اردہ لفظن کي سُر يا حرف عِلت لکو</option>
				<option value="translitrationbabagoodhin/indexeng.php">ھندي/ديوناگري لفظن کي سُر يا حرف عِلت لکو</option>
				
                
               
</select><?PHP
							
							
							}	
							
							
							
							}?>
				</div></div>
</section><center><h3><font face='tahoma'><BR>
<h3>Sindhi Translitration سنڌي ٽرانسلٽريشن، Sindhi Script Converter سنڌي لپي مٽائيندڙ</h3><BR>
<h3><a href="Sindhi Transliteration سنڌي ٽرانسلٽريشن.docx">مددگار فائيل</a> - - - <a href="sindhitransliteration.zip">ڊائون لوڊ پي ايڇ پي -ماءِ ايس ڪيو ايل فائيل</a></h3>
<!-------
<div class="container">
  <div class="row">
    <div class="col-sm-3 bg-success">
<a href=http://www.sindhiocr.com/>سنڌي اکر شناس (OCR)
سنڌي ٻوليءَ جي ڦوٽو يا اسڪين ٿيل مواد کي ٽيڪسٽ ۾ بدليندڙ</a>
</div>
<div class="col-sm-3 bg-warning">
<a href=http://pos.sindhila.edu.pk/>لفظن جي ترڪيبڪاري
گرامر ۾ سنڌي ٻوليءَ جي لفظن جي ترڪيبڪاري</a>
</div>
<div class="col-sm-3 bg-success">
<a href=http://4kids.sindhila.edu.pk/>ٻاراڻا ٻول
ٻارن لاءِ درسي ڪتابن ۾ موجود گيتن جو آڊيو پورٽل</a>
</div>
<div class="col-sm-3 bg-success">
<a href=http://learn.sindhila.edu.pk/>آن لائن سنڌي سکيا
سنڌي رومن، انگريزي ۽ اردو ذريعي سنڌي سکيا جو پورٽل</a>
</div>
</div><BR>
<div class="row">
<div class="col-sm-3 bg-success">
<a href=https://play.google.com/store/apps/dev?id=6572220615273903682>سمارٽ ايپس
سنڌي ٻوليءَ جي بااختيار اداري جي لغتن ۽ پهاڪن جي ڪتابن جون اينڊرائيڊ ايپليڪيشنز</a>
</div>
<div class="col-sm-3 bg-success">
<a href=http://dic.sindhila.edu.pk/>آنلائن لغتون
سنڌي کان انگريزي ۽ انگريزيءَ کان سنڌي ٻوليءَ جون آنلائن ڊڪشنريون</a>
</div>
<div class="col-sm-3 bg-success">
<a href=https://chrome.google.com/webstore/detail/sla-dictionary/phpjjbogglpbjgnlldjdlinieejiamel?hl=en-GB>برائوزر ايڪسٽينشن
هڪ ڪلڪ سان ڪنهن به ويبسائٽ تان انگريزيءَ جي معنيٰ سنڌيءَ ۾ ڏسيندڙ</a>
</div>
<div class="col-sm-3 bg-success">
<a href=https://www.youtube.com/channel/UCp-iFqp8SwR91cfOvM7FPPg>سرگرمين جون وڊيوز
يوٽيوب تي سنڌي ٻوليءَ جي بااختيار اداري جا پروگرام</a>
</div></div></div>

سنڌي ٻوليءَ جي بااختيار اداري وٽ سڀ حق ۽ واسطا محفوظ آهن ||| رابطي لاءِ مُک ويبسائٽ ڏسي سگھو ٿا
		</html>
		------>