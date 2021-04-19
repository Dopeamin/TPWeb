<?php
class LogWriter{
    private $path;
    private $toadd;
    private $user;
    public function __construct($content,$user){
        $this->path = "./logs/log.txt";
        $this->toadd = $content;
        $this->user = $user;
    }
    public function writeLog(){
        $file = fopen($this->path,"a") or die("Unable to Open File");
        $d2 = new Datetime("now");
        $time = $d2->format('d/m/Y - G:i:s');

        fwrite($file,$time." : ".$this->user." ".$this->toadd.PHP_EOL);
        fclose($file);
    }
    public function readLog(){
        $file = fopen($this->path,"r") or die("Unable to Open File");
        //$cont = fread($file,filesize("logs/log.txt"));
        while (($line = stream_get_line($file, 1024 * 1024, "\n")) !== false) {
            echo $line."</br>";
          }
        fclose($file);
    }
}
?>