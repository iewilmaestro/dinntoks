<?php
class Modul{
	public $host = "https://dinntoks.com";
	public $reg = "https://bit.ly/3fDZe8Y";
	public $a = ["iewil","dinntoks","1.1"];
	public $disable = "
	Script mati karena web update / scam!
	Support Channel saya dengan cara
	Subscribe https://www.youtube.com/c/iewil
	karena subscribe itu gratis :D
	Untuk mendapatkan info Script terbaru
	Join grub via telegram ~> https://t.me/Iewil_G
	ðŸ‡®ðŸ‡© Family-Team-Function-INDO
	\n";
	public function __construct(){
		$this->api=[
		"dash"=>"/dashboard",
		"gfct"=>"/faucet",
		"gmad"=>"/madfaucet",
		"vrf"=>"/verify",
		"auto"=>"/auto",
		"gptc"=>"/ptc",
		"vptc"=>"/view/",
		"aciv"=>"/achievements",
		"wd"=>"/withdraw"
		];
	}
	public function Run($url, $httpheader = 0, $post = 0, $proxy = 0){ // url, postdata, http headers, proxy, uagent
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		//curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_COOKIE,TRUE);
		//curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
		//curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
		if($post){
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		}
		if($httpheader){
			curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
		}
		if($proxy){
			curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
			//curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
		}
		curl_setopt($ch, CURLOPT_HEADER, true);
		$response = curl_exec($ch);
		$httpcode = curl_getinfo($ch);
		if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
			$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			curl_close($ch);
			return array($header, $body)[1];
		}
	}
	public function col($str,$color){
		if($color==5){$color=['h','k','b','u','m'][array_rand(['h','k','b','u','m'])];}
		$war=array('rw'=>"\033[107m\033[1;31m",'rt'=>"\033[106m\033[1;31m",'ht'=>"\033[0;30m",'p'=>"\033[1;37m",'a'=>"\033[1;30m",'m'=>"\033[1;31m",'h'=>"\033[1;32m",'k'=>"\033[1;33m",'b'=>"\033[1;34m",'u'=>"\033[1;35m",'c'=>"\033[1;36m",'rr'=>"\033[101m\033[1;37m",'rg'=>"\033[102m\033[1;34m",'ry'=>"\033[103m\033[1;30m",'rp1'=>"\033[104m\033[1;37m",'rp2'=>"\033[105m\033[1;37m");return $war[$color].$str."\033[0m";
	}
	public function Slow($msg){$slow = str_split($msg);
		foreach( $slow as $slowmo ){echo $slowmo; usleep(70000);}
	}
	public function Save($namadata){
		if(file_exists(trim($this->a[1])."/".$namadata)){
			$datauser=file_get_contents(trim($this->a[1])."/".$namadata);
		}else{
			$datauser=readline("Input ".$namadata." > ");echo "\n";
			file_put_contents(trim($this->a[1])."/".$namadata,$datauser);
		}
		return $datauser;
	}
	public function tmr($tmr){
		$timr=time()+$tmr;
		while(true){
			echo "\r                       \r";$res=$timr-time(); 
			if($res < 1){break;}
			echo $this->col(date('i:s',$res),"5");
			sleep(1);
		}
	}
	public function line(){
		$u="\033[1;35m";$h="\033[1;32m";$p="\033[1;37m";$m="\033[1;31m";$k="\033[1;33m";$b="\033[1;34m";$c="\033[1;36m";$len = 36;$var = $p.'─';
		echo str_repeat($var,$len)."\n";
	}
	public function bn(){
		system('clear');
		$u="\033[1;35m";$h="\033[1;32m";$p="\033[1;37m";$m="\033[1;31m";$k="\033[1;33m";$b="\033[1;34m";$c="\033[1;36m";
		$mp="\033[101m\033[1;37m";$cl="\033[0m";$mm="\033[101m\033[1;31m";$hp="\033[1;7m";
		$z=strtoupper($this->a[1]);$x=18;$y=strlen($z);$line=str_repeat('_',$x-$y);
		echo "\n{$m}[{$p}Script{$m}]->{$k}[".$h.$z."{$k}]-[".$h.$this->a[2].$k."]".$p.$line.".\n";
		echo "{$u}.__              .__.__ 	    {$p}| \n";
		echo "{$u}|__| ______  _  _|__|  |	\n|  |/ __ \ \/ \/ /  |  |\n";
		echo "|  \  ___/\     /|  |  |__\n|__|\___  >\/\_/ |__|____/\n";
		echo "        \/\n";
        echo "{$mm}[{$mp}▶{$mm}]{$cl} {$k}https://www.youtube.com/c/iewil\n";
        echo "{$c}{$hp} >_{$cl}{$b} Team-Function-INDO\n";
        echo "{$p}────────────────────────────────────\n";
	}
	public function Short(){
		/*Reset*/
		$d=date("D");
		if(file_exists($_SERVER["TMPDIR"]."/".trim($this->a[1]))){
			$day=trim(file_get_contents($_SERVER["TMPDIR"]."/".trim($this->a[1])));
		}else{
			file_put_contents($_SERVER["TMPDIR"]."/".trim($this->a[1]),$d);
			$day=trim(file_get_contents($_SERVER["TMPDIR"]."/".trim($this->a[1])));
		}
		if($d==$day){}else{
			unlink(trim($this->a[1])."/key.txt");
			unlink($_SERVER["TMPDIR"]."/".trim($this->a[1]));
			
		}
		/*Short*/
		$script = file_get_contents('https://pastebin.com/raw/5mri6gAM');
		$status = explode('|',explode('#'.trim($this->a[1]).':',$script)[1])[0];
		if($status == "on"){RETRY:
			$rand = rand(0,14);
			$short = json_decode(file_get_contents('https://pastebin.com/raw/EiKBhp8U'),1);
			$link = file_get_contents($short[$rand]['url']);
			$pass = trim(explode(' ',explode('Password: ',$link)[1])[0]);
			$read = file_get_contents(trim($this->a[1])."/key.txt");
			if(file_exists(trim($this->a[1])."/key.txt")){
			}else{
				self::bn();echo $this->col(" Link Password : ","h").$this->col($short[$rand]['short'],'k')."\n";
				$p = readline($this->col(" Password : ","h"));
				if($pass == $p){
					file_put_contents(trim($this->a[1])."/key.txt",$p);
				}else{
					echo $this->col(" Password salah!","m")."\n";self::line();goto RETRY;
				}
			}
		}elseif($status == "off" or $status == null){
			$this->bn();
			echo $this->col("The script is disabled","m")."\n\n";
			echo self::Slow($this->disable);
			exit;
		}
	}
	public function Vision($img){$content=base64_encode(file_get_contents($img));
		$head=["content-type: application/json"];
		$data=json_encode(["requests"=>[["image"=>["content"=>$content],"features"=>[["type"=>"TEXT_DETECTION"]]]]]);
		$result=$this->Run("https://vision.googleapis.com/v1/images:annotate?key=AIzaSyC3y-Em42htSB8UEZPqptJ78rlvL58_h6Y",$head,$data);
		$respon=strpos($result,'Enter the following:\n');
		if($respon){$respon=substr($result,$respon);$respon=str_replace('Enter the following:\n','',$respon);$respon= preg_replace("/[^a-zA-Z]/", "",str_replace('\n','',substr($respon,strpos($respon,'"'))));}
		if(strlen($respon) > 25){}else{return $respon;}
	}
	public function Ocr($img,$img2){
		$apikey=$this->Aocr();
		$respon=$this->Vision($img);
		if($respon==null){system('convert '.$img.' -gravity North -chop x15 '.$img2.' 2>/dev/null');$hasil=json_decode(shell_exec('curl --silent -H "apikey:'.$apikey.'" --form "file=@'.$img2.'" --form "language=eng" --form "ocrengine=2" --form "isOverlayRequired=false" --form "iscreatesearchablepdf=false" https://api.ocr.space/Parse/Image'))->ParsedResults[0]->ParsedText;$respon = preg_replace("/[^a-zA-Z]/","", $hasil);}
		return $respon;
	}
	public function Aocr(){
		$a = "0123456789abcdef";
		$b = substr(str_shuffle($a), 0, 10);
		$c = $b."88957";
		return $c;
	}
	public function r($m){
		$n=strlen($m);
		$o=str_repeat(' ',$n);
		echo "\r".$o."\r";
	}
}

class Site extends Modul{
	public function H1(){
		$user_agent=$this->Save('User_Agent');
		$cookie=$this->Save('Cookie');
		$h[]="Host: dinntoks.com";
		$h[]="user-agent: ".$user_agent;
		$h[]="cookie: ".$cookie;
		return $h;
	}
	public function H2(){
		$h[]="Host: api-secure.solvemedia.com";
		$h[]="user-agent: Mozilla/5.0 (Linux; Android 9; Redmi 6A) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.99 Mobile Safari/537.36";
		$h[]="accept: */*";
		return $h;
	}
	public function dash(){
		$url=$this->host.$this->api["dash"];
		$r = $this->Run($url,$this->H1());
		$cs=explode('"',explode('csrf_token_name" value="',$r)[1])[0];
		$user=explode('<vie',explode("siteUserFullName: '",$r)[1])[0];
		preg_match_all('#<h4 class="mb-0">(.*?)</h4>#i',$r,$s);
        return ["cs"=>$cs,"user"=>$user,"bal"=>$s[1][0],"en"=>$s[1][1]];
	}
	public function gfct($api){
		$url=$this->host.$api;
		$r = $this->Run($url,$this->H1());
		$left = explode('/',explode('<p class="lh-1 mb-1 font-weight-bold">',$r)[3])[0];
		$tmr = explode(';',explode('var wait =',$r)[1])[0];
		$b = explode('<a href=\"#\" rel=\"',$r);
		$b1 = explode('\">',$b[1])[0];
		$b2 = explode('\">',$b[2])[0];
		$b3 = explode('\">',$b[3])[0];
		$cs = explode('"',explode('id="token" value="',$r)[1])[0];
		$tk = explode('"',explode('name="token" value="',$r)[1])[0];
		return ["left"=>$left,"tmr"=>$tmr,"bot"=>"+".$b1."+".$b2."+".$b3,"cs"=>$cs,"tk"=>$tk];
	}
	public function verif($api,$data){
		$url=$this->host.$api;
		return $this->Run($url,$this->H1(),$data);
	}
	public function gsolv(){
		$url=$this->Save('Url_Solvemedia');
		$r=$this->Run($url,$this->H2());
		$ca=explode('"',$r)[5];
		return $ca;
	}
	public function gmed($ca){
		$url="https://api-secure.solvemedia.com/papi/media?c=".$ca.";w=300;h=150;fg=000000;bg=f8f8f8";
		$r=$this->Run($url,$this->H2());
		return $r;
	}
	public function auto(){
		$url=$this->host.$this->api["auto"];
		return $this->Run($url,$this->H1());
	}
	public function gptc(){
		$url=$this->host.$this->api["gptc"];
		$run=$this->Run($url,$this->H1());
		$id=explode("'",explode("/view/",$run)[1])[0];
		return $id;
	}
	public function vptc($id){
		$url=$this->host.$this->api["gptc"].$this->api["vptc"].$id;
		$run=$this->Run($url,$this->H1());
		$tmr=explode(';',explode('var timer = ',$run)[1])[0];
		$cs=explode('"',explode('_token_name" value="',$run)[1])[0];
		$tk=explode('"',explode('name="token" value="',$run)[1])[0];
		return ["tmr"=>$tmr,"cs"=>$cs,"tk"=>$tk];
	}
	public function aptc($id,$rp,$ca,$csrf,$token){
		$url=$this->host.$this->api["gptc"].$this->api["vrf"]."/".$id;
		$data="captcha=solvemedia&adcopy_response=".$rp."&adcopy_challenge=".$ca."&g-recaptcha-response=&h-captcha-response=&csrf_token_name=".$csrf."&token=".$token;
		return $this->Run($url,$this->H1(),$data);
	}
	public function aciv(){
		$url=$this->host.$this->api["aciv"];
		return $this->Run($url,$this->H1());
	}
	public function cciv($csrf,$id){
		$url=$this->host.$this->api["aciv"]."/claim/".$id;
		$data="csrf_token_name=".$csrf;
		return $this->Run($url,$this->H1(),$data);
	}
	public function wd($csrf,$metod,$amm,$em){
		$data=http_build_query(["csrf_token_name"=>$csrf,"method"=>$metod,"amount"=>$amm,"wallet"=>$em]);
		$url=$this->host.$this->api["dash"].$this->api["wd"];
		return $this->Run($url,$this->H1(),$data);
	}
}
class Bot extends Site{
	public function _run(){
		error_reporting(0);
		$r="\r                                                              \r";
		$api = json_decode(file_get_contents("http://ip-api.com/json"),1);
		$zone = $api["timezone"];
		if($zone){
			date_default_timezone_set($zone);
		}
		self::Short();
		self::bn();
		echo "Link Register : ".$this->reg."\n\n";
		cookie:
		
		$cookie = $this->Save('Cookie');
		$user_agent = $this->Save('User_Agent');
		$this->Save('Url_Solvemedia');
		$em = $this->Save('Wallet_Fp');
		system("termux-open-url  https://www.youtube.com/c/iewil");
		self::bn();
		
		$mo=$this->dash();
		echo $this->col("Username ","h")."~> ".$this->col($mo["user"],"k")."\n";
		echo $this->col("Wallet ","h")."~> ".$this->col($em,"k")."\n";
		echo $this->col("Balance ","h")."~> ".$this->col($mo["bal"],"k")."\n";
		echo $this->col("Energy ","h")."~> ".$this->col($mo["en"],"k")."\n";
		self::line();
		
		menu:
		echo $this->col("1 >","m")." faucet\n";
		echo $this->col("2 >","m")." mad faucet\n";
		echo $this->col("3 >","m")." auto faucet\n";
		echo $this->col("4 >","m")." visit ptc\n";
		echo $this->col("5 >","m")." achievements\n";
		echo $this->col("6 >","m")." withdraw\n";
		echo $this->col("7 >","m")." Update cookie\n";
		$p=readline($this->col("Input Number ","h").$this->col("> ","m"));
		self::line();
		if($p==1){goto ucet;
		}elseif($p==2){goto mad;
		}elseif($p==3){goto auto;
		}elseif($p==4){goto ptc;
		}elseif($p==5){goto aciv;
		}elseif($p==6){goto widraw;
		}elseif($p==7){unlink(trim($this->a[1])."/Cookie");goto cookie;
		}else{
			echo $this->col('Bad Number','m')."\n";self::line();
			goto menu;
		}
		
		ucet:
		while(true){
			echo $cek=$this->col("Checking Faucet","c");
			$f=$this->gfct($this->api["gfct"]);
			if($f["left"]<1){
				$this->r($cek);
				echo $this->col("You has Claim all Faucet","m")."\n";
				self::line();goto menu;
			}
			if($f["tmr"]){$this->tmr($f["tmr"]);goto ucet;
			}
			$this->r($cek);
			echo $bip=$this->col("trying bypass","k");
			$ca=$this->gsolv();
			$gmed=$this->gmed($ca);
			file_put_contents(trim($this->a[1]).'/fct.png',$gmed);
			
			$cap=$this->Ocr(trim($this->a[1]).'/fct.png',trim($this->a[1]).'/fc.png');
			if($cap<=null){
				$this->r($bip);
				echo $this->col("image rusak","m");
				sleep(2);
				$this->r("image rusak");
				goto ucet;
			}
			$data="antibotlinks=".$f["bot"]."&csrf_token_name=".$f["cs"]."&token=".$f["tk"]."&captcha=solvemedia&g-recaptcha-response=&adcopy_response=".$cap."&adcopy_challenge=".$ca;
			
			$g=$this->verif($this->api["gfct"].$this->api["vrf"],$data);
			$ss=explode('has',explode("'Good job!', '",$g)[1])[0];
			$war=explode('</div>',explode('<i class="fas fa-exclamation-circle"></i>',$g)[1])[0];
			if($war){$this->r($bip);echo $war;sleep(2);$this->r($war);
			}else{
				$this->r($bip);
				if($ss){
					echo $this->col("Success ","h")."~> ".$ss."\n";
					echo $this->col("Claim left ","h")."~> ".$this->gfct($this->api["gfct"])["left"]."\n";
					echo $this->col("New Balance ","h")."~> ".$this->dash()["bal"]."\n";
					$this->line();
				}else{
					echo $this->col("An Error","m");sleep(5);
					$this->r("An Error");
				}
			}
			
		}
		mad:
		while(true){
			echo $cek=$this->col("Checking Faucet","c");
			$f=$this->gfct($this->api["gmad"]);
			if($f["left"]<1){
				$this->r($cek);
				echo $this->col("You has Claim all Faucet","m")."\n";
				self::line();goto menu;
			}
			if($f["tmr"]){$this->tmr($f["tmr"]);goto mad;
			}
			$this->r($cek);
			echo $bip=$this->col("trying bypass","k");
			$ca=$this->gsolv();
			$gmed=$this->gmed($ca);
			file_put_contents(trim($this->a[1]).'/mad.png',$gmed);
			
			$cap=$this->Ocr(trim($this->a[1]).'/mad.png',trim($this->a[1]).'/md.png');
			if($cap<=null){
				$this->r($bip);
				echo $this->col("image rusak","m");
				sleep(2);
				$this->r("image rusak");
				goto mad;
			}
			$data="antibotlinks=".$f["bot"]."&csrf_token_name=".$f["cs"]."&token=".$f["tk"]."&captcha=solvemedia&g-recaptcha-response=&adcopy_response=".$cap."&adcopy_challenge=".$ca;
			
			$g=$this->verif($this->api["gmad"].$this->api["vrf"],$data);
			$ss=explode('has',explode("'Good job!', '",$g)[1])[0];
			$war=explode('</div>',explode('<i class="fas fa-exclamation-circle"></i>',$g)[1])[0];
			if($war){$this->r($bip);echo $war;sleep(2);$this->r($war);
			}else{
				$this->r($bip);
				if($ss){
					echo $this->col("Success ","h")."~> ".$ss."\n";
					echo $this->col("Claim left ","h")."~> ".$this->gfct($this->api["gmad"])["left"]."\n";
					echo $this->col("New Balance ","h")."~> ".$this->dash()["bal"]."\n";
					$this->line();
				}else{
					echo $this->col("An Error","m");sleep(5);
					$this->r("An Error");
				}
			}
			
		}
		auto:
		while(true){
			$au=$this->auto();
			if(preg_match("/You don't have enough energy/",$au)){
				echo $this->col("You don't have enough energy","m")."\n";$this->line();goto menu;
			}
			$tmr=explode(',',explode('let timer = ',$au)[1])[0];
			if($tmr){$this->tmr($tmr);}
			$token=explode('"',explode('name="token" value="',$au)[1])[0];
			$data="token=".$token;
			$g=$this->verif($this->api["auto"].$this->api["vrf"],$data);
			$ss=explode('has',explode("'Good job!', '",$g)[1])[0];
			$war=explode('</div>',explode('<i class="fas fa-exclamation-circle"></i>',$g)[1])[0];
			if($war){$this->r($bip);echo $war;sleep(2);$this->r($war);
			}else{
				$this->r($bip);
				if($ss){
					echo $this->col("Success ","h")."~> ".$ss."\n";
					echo $this->col("Energy ","h")."~> ".$this->dash()["en"]."\n";
					echo $this->col("New Balance ","h")."~> ".$this->dash()["bal"]."\n";
					$this->line();
				}else{
					echo $this->col("An Error","m");sleep(5);
					$this->r("An Error");
				}
			}
		}
		ptc:
		echo $this->col("1 >","m")." bypass\n";
		echo $this->col("2 >","m")." manual\n";
		echo $this->col("3 >","m")." back\n";
		$pul=readline($this->col('Input Number > ','h'));
		self::line();
		if($pul==1){goto ptc1;
		}elseif($pul==2){goto ptc2;
		}elseif($pul==3){goto menu;
		}else{echo $this->col('Bad Number','m')."\n";self::line();goto ptc;
		}
		ptc1:
		while(true){
			echo $cek=$this->col("Checking ads","c");
			$id=$this->gptc();
			if($id){
				$this->r($cek);
				echo $bip=$this->col("visit ptc","b");
				$vr=$this->vptc($id);
				if($vr["tmr"]){$this->tmr($vr["tmr"]);}
				$ca=$this->gsolv();
				$gmed=$this->gmed($ca);
				file_put_contents(trim($this->a[1]).'/ptc.png',$gmed);
				
				$rp=$this->Ocr(trim($this->a[1]).'/ptc.png',trim($this->a[1]).'/pt.png');
				if($cap<=null){
					$this->r($bip);
					echo $this->col("image rusak","m");
					sleep(2);
					$this->r("image rusak");
					goto ptc;
				}
				
				$ac=$this->aptc($id,$rp,$ca,$vr["cs"],$vr["tk"]);
				$ss=explode('has',explode("'Good job!', '",$ac)[1])[0];
				$war=explode('</div>',explode('<i class="fas fa-exclamation-circle"></i>',$ac)[1])[0];
				$this->r($bip);
				if($war){echo $this->col($war,"m");sleep(2);$this->r($war);
				}else{
					if($ss){
						echo $this->col("Success ","h")."~> ".$ss."\n";
						echo $this->col("New Balance ","h")."~> ".$this->dash()["bal"]."\n";
						$this->line();
					}else{
						echo $this->col("An Error","m");sleep(5);
						$this->r("An Error");
					}
				}
			}else{
				$this->r($cek);
				echo $this->col("All ptc has finished","m")."\n";$this->line();goto menu;
			}
		}
		ptc2:
		while(true){
			echo $cek=$this->col("Checking ads","c");
			$id=$this->gptc();
			if($id){
				$this->r($cek);
				echo $bip=$this->col("visit ptc","b");
				$vr=$this->vptc($id);
				if($vr["tmr"]){$this->tmr($vr["tmr"]);}
				$ca=$this->gsolv();
				$gmed=$this->gmed($ca);
				file_put_contents(trim($this->a[1]).'/ptr.png',$gmed);
				
				system('termux-open '.trim($this->a[1]).'/ptr.png');
				$rp=readline($this->col('Input Captch > ','h'));
				
				$ac=$this->aptc($id,$rp,$ca,$vr["cs"],$vr["tk"]);
				$ss=explode('has',explode("'Good job!', '",$ac)[1])[0];
				$war=explode('</div>',explode('<i class="fas fa-exclamation-circle"></i>',$ac)[1])[0];
				$this->r($bip);
				if($war){echo $this->col($war,"m")."\n";self::line();
				}else{
					if($ss){
						echo $this->col("Success ","h")."~> ".$ss."\n";
						echo $this->col("New Balance ","h")."~> ".$this->dash()["bal"]."\n";
						$this->line();
					}else{
						echo $this->col("An Error","m")."\n";
						self::line();
					}
				}
			}else{
				$this->r($cek);
				echo $this->col("All ptc has finished","m")."\n";$this->line();goto menu;
			}
		}
		aciv:
		$res=$this->aciv();
		$csrf=explode('"',explode('_token_name" value="',$res)[1])[0];
		$misi=explode('<tr>',$res);
		for($x=2;$x<count($misi);$x++){
			$y=$x-1;
			$ms=explode('</td>',explode('<td>',$misi[$x])[1])[0];
			$ex=explode('</div>',explode('aria-valuemax="100">',$misi[$x])[1])[0];
			echo $this->col($y." > ","m").$this->col($ms,"h")." ~> ".$this->col($ex,"k")."\n";
			
		}
		echo $this->col('back > ','m').$this->col('Main Menu','h')."\n";
		$chuck=readline($this->col('Input ','h').'> ');
		self::line();
		$check=strtoupper($chuck);
		if($check=="BACK"){
			goto menu;
		}
		$tot=count($misi)-2;
		if($check == 0 or $check > $tot){
			echo $this->col("serah lu ","m")."\n";$this->line();goto aciv;
		}
		$cuk=$check+1;
		$tea=$misi[$cuk];
		$ms=explode('</td>',explode('<td>',$tea)[1])[0];
		$id=explode('"',explode('achievements/claim/',$tea)[1])[0];
		$ceck=$this->cciv($csrf,$id);
		
		$ss=explode('have',explode("'Good job!', '",$ceck)[1])[0];
		if(preg_match('/Good job/',$ceck)){
			$ss=str_replace("and","\n          ",$ss);
			echo $this->col("Success ","h")."~> ".$ss."\n";
		}else{
			echo $this->col("An Error","m")."\n";
		}
		$this->line();
		goto aciv;
		
		widraw:
		$in=$this->Run($this->host,$this->H1());
		$rad=explode('<div class="card-radio">',$in);
		for($ri=1;$ri<count($rad);$ri++){
			$cur=explode('</span>',explode('<span>',$rad[$ri])[1])[0];
			echo $this->col($ri." > ","m").$this->col($cur,"k")."\n";
		}
		$me=readline($this->col('Input Number ','h').$this->col('> ','m'));
		self::line();
		$metod=explode("']",explode("currencies['",$rad[$me])[1])[0];
		$amm=explode('"',explode('id="tokenBalance" value="',$in)[1])[0];
		$en=$this->dash();
		$ab=$this->wd($en["cs"],$metod,$amm,$em);
		if(preg_match('/Good job!/',$ab)){
			$ss=explode('has',explode("'Good job!', '",$ab)[1])[0];
			echo $this->col('Success ','h')."~> ".$ss."\n";
		}else{
			$war=explode('</div>',explode('<i class="fas fa-exclamation-circle"></i>',$ab)[1])[0];
			echo $this->col($war,'m')."\n";
		}
		self::line();goto menu;
	}
}
$play = new Bot();
$play -> _run();
