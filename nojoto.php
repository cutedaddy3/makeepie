<body style='background-color:White'>

   <html><head><title>Technical Akshay</title> <meta name="viewport" content="width=device-width"><style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}input[type=submit] {
    width: 60%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;}input[type=submit]:hover {
    background-color: #45a049;}div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}.error {background:#ffebe8; border:1px solid #dd3c10; padding:2px; text-align:center; font-weight:normal; color:maroon;}.success {background:#fff8cc; border:1px solid #ffe222; padding:10px; text-align:center; font-weight:normal; color:#000;}</head>

</style></head><title></title><body><center><b><font color='black' size='4'><br>Nojoto Added Script<center><br>
   <?php
error_reporting(0);
$url="https://telegram.me/TechnicalAkshay3";
$refer=$_GET['refer'];
$le=file_get_contents("rell.txt");
if($refer){
	$file="ab/$refer.txt";

	$s=file_get_contents($file);
	$s1=$s+1;
	if($s>=30){
		echo'<h1 class="error">Your Refer Limit Over</h1>';
		heeader("Refresh:0.1 url=$url");
	}else{
	
	
function Rando($length) {
    $characters = '0123456789abcdefghijklmno';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function httpCall($url, $data = "", $headers = array(), $method = "GET", $headerReturn = 0) {
  if(empty($headers)){
  	$ip = long2ip(rand());
    $headers=["User-Agent: okhttp/3.12.1","Accept-Encoding: gzip, deflate","X-Forwarded-For: $ip"];
  }
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HEADER, $headerReturn);
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
  $output = curl_exec($ch);
  return $output;
}
$f = array("Vasu","Nirmal","Akshay","Chander","Rupinder","Akhil","Shanti","Ravi","Kunal","Chandrakant","Sulabha","Mahinder","Swapnil","Deepa","Sulabha","Neelima","Vijaya","Nikhil","Isha","Siddhi","Ajeet","Kshitija","Anila","Jitender","Sumeet","Preethi","Priti","Gayathri","Dhaval","Mukesh","Lalita","Rachana","Rakhi","Harshal","Shekhar","Rajiv","Balakrishna","Ajeet","Tara","Chander","Deepa","Prabhu","Rajendra","Jeetendra","Nandu","Aniket","Sumati","Prabhu","Vimal","Indira","Laxman","Agni","Kapil","Kailash","Puneet","Pratik","Pankaj","Ishore","Swati","Rupa","Hardeep","Prabhu","Khushi","Gurmeet","Nishant","Rishi","Naveen");
$fname = $f[mt_rand(0,60)];
 $l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$lname = $l[mt_rand(0,50)];
$a1=mt_rand(63,99);
$a2=mt_rand(11111111,88888888);
$number="$a1$a2";
$de=Rando(16);
$app_version="2.0.58";
$hash=md5("|njt|-$de-|njt|-$de-|njt|-$app_version-|njt|");
$output=httpCall("https://nojoto.com/api/v1/auth.php?njtDeviceId=$de&njtDeviceName=$de&njtAppVersion=2.0.58&njtSecurityKey=$hash&xtoken=&languageId=");
$xtoken=json_decode($output,1)['result']['xtoken'];
$ip = long2ip(rand());
$headers=["User-Agent: okhttp/3.12.1","Accept-Encoding: gzip, deflate","content-type: application/x-www-form-urlencoded","X-Forwarded-For: $ip"];
$url="https://nojoto.com/api/v1/auth.php";


$data="socialLongLiveAccessToken=EAAaLL7L7Tm0BAIA8Nh1oN5eln0voPadnYZClEWnvEYjIzODZBFjEZCmzW18HB7ZBEN9YSW2F7tM4u8yQYfGqzSweuJiU5wJLYzIYxbOV7zexNZA1hB2YHqkM62oSnVYfru9Pviz9GHYutg8PU3fYZBdZA1Bu5LEa6vm2izZBi636jicCZC1FNhsIr6BZAk7EgzdupVoIH14diP2skLNOteYdix95iGtyk4w9A24rZA9WInpyjKgeCz8ZAq7z&gender=&isSocialEmail=yes&socialUniqueId=14039630".mt_rand(1111111,9999999)."&languageId=1&photo=https%3A%2F%2Fplatform-lookaside.fbsbx.com%2Fplatform%2Fprofilepic%2F%3Fasid%3D140396302038756%26height%3D50%26width%3D50%26ext%3D1667536817%26hash%3DAeQ0ImTiHI8otGOdwcc&type=FB&isMultiAccountLogin=1&socialAccessToken=EAAaLL7L7Tm0BAIA8Nh1oN5eln0voPadnYZClEWnvEYjIzODZBFjEZCmzW18HB7ZBEN9YSW2F7tM4u8yQYfGqzSweuJiU5wJLYzIYxbOV7zexNZA1hB2YHqkM62oSnVYfru9Pviz9GHYutg8PU3fYZBdZA1Bu5LEa6vm2izZBi636jicCZC1FNhsIr6BZAk7EgzdupVoIH14diP2skLNOteYdix95iGtyk4w9A24rZA9WInpyjKgeCz8ZAq7z&dob=&v=1&name=$fname$lname&location=&xtoken=$xtoken&email=$fname$lname$number%40gmail.com";

$output=httpCall($url,$data,$headers,"POST",0);
$headers=["User-Agent: okhttp/3.12.1","Accept-Encoding: gzip, deflate","content-type: application/x-www-form-urlencoded","X-Forwarded-For: $ip"];
$url="https://nojoto.com/api/v1/auth.php";
$data="socialLongLiveAccessToken=EAAaLL7L7Tm0BAIA8Nh1oN5eln0voPadnYZClEWnvEYjIzODZBFjEZCmzW18HB7ZBEN9YSW2F7tM4u8yQYfGqzSweuJiU5wJLYzIYxbOV7zexNZA1hB2YHqkM62oSnVYfru9Pviz9GHYutg8PU3fYZBdZA1Bu5LEa6vm2izZBi636jicCZC1FNhsIr6BZAk7EgzdupVoIH14diP2skLNOteYdix95iGtyk4w9A24rZA9WInpyjKgeCz8ZAq7z&gender=&isSocialEmail=yes&socialUniqueId=14039630".mt_rand(1111111,9999999)."&languageId=1&photo=https%3A%2F%2Fplatform-lookaside.fbsbx.com%2Fplatform%2Fprofilepic%2F%3Fasid%3D140396302038756%26height%3D50%26width%3D50%26ext%3D1667536817%26hash%3DAeQ0ImTiHI8otGOdwcc&type=FB&isMultiAccountLogin=1&socialAccessToken=EAAaLL7L7Tm0BAIA8Nh1oN5eln0voPadnYZClEWnvEYjIzODZBFjEZCmzW18HB7ZBEN9YSW2F7tM4u8yQYfGqzSweuJiU5wJLYzIYxbOV7zexNZA1hB2YHqkM62oSnVYfru9Pviz9GHYutg8PU3fYZBdZA1Bu5LEa6vm2izZBi636jicCZC1FNhsIr6BZAk7EgzdupVoIH14diP2skLNOteYdix95iGtyk4w9A24rZA9WInpyjKgeCz8ZAq7z&dob=&v=1&name=$fname%20$lname&location=&xtoken=$xtoken&email=$fname$lname$number%40gmail.com";

$output=httpCall($url,$data,$headers,"POST",0);
$j=json_decode($output,1);
$cid=$j['cid'];
if($cid){

$output=httpCall("https://nojoto.com/api/v1/referral.php?cid=$cid&xtoken=$xtoken&rewardCode=$refer&isManualScratch=1",'','',"GET",0);
$j=json_decode($output,1)["message"];
if($j=="Reward Redeemed Successfully"){
	echo "<div class=''><center>
<font color='green' size='3'><b>Refer Done Successfully!</b></font></div></center>";
$ma=file_get_contents("rell.txt");
$r=$ma+1;
$mjj=file_put_contents("rell.txt","$r");
	echo"<hr class='style5'></font></center><meta http-equiv='refresh' content=0;url=>";
	mkdir("ab");
	file_put_contents($file,$s1);
	header("Refresh:5.1");
}else{
	echo "<div class=''><center>
<font color='red' size='3'><b>Refer Failed</b></font></div></center>";
	header("Refresh:5.1");
echo"</font></center><meta http-equiv='refresh' content=0;url=>";
}
}else{
	echo "<div class=''><center>
<font color='red' size='3'><b>Refer Failed</b></font></div></center>";
	header("Refresh:5.1");
	echo"</font></center><meta http-equiv='refresh' content=0;url=>";
}

}
}else{
	echo '	
	<form action="" method="GET">
<div>	<input type="text" name="refer" placeholder="Enter Refer Code" required>
	
	<input type="submit" class="submit">
		  
		  </form>
		  
	  ';
echo "</div><br><center>
<font color='red' size='3'><b>Total Success Refer- $le</b></font></div></center>";
}

?>
