<?php

class temp
{
    public $file;

    protected function fileFlirt()
    {
        try {
            $flirtedFile = $this->file;
            $keys = 0;
            $save = 0;
            foreach ($flirtedFile as $k => $v) {
                if ( $k > 0 ) {
                    // echo substr($v, 80, 8). "<br>";

                    $save += (int)substr($v, 80, 8 );
                    $keys++;
                } if ((is_int($v)==0)&&$k<0)
                {
                    throw new Exception('Podano litele lol?'.$k."||".$save);
                }

                //return $flirtedFile;

            } return $this->count($save, $keys);

        } catch (Exception $e)
        {
            return $e;
        }


      //  echo '<pre>';print_r($flirtedFile);echo '</pre>';
       // echo '<pre>';print_r($save);echo '</pre>';


    }

    protected function count($sum, $num)
    {
        return $sum/$num;
    }

    public function freeMemory()
    {
        unset($this->file);
    }

    public function openFile($path)
    {
        $this->file = file($path);
        echo '<br>'.$this->fileFlirt();
    }
}

$count = new temp;
$count->openFile('temp.txt');
$count->freeMemory();
$count->openFile('temp2.txt');
$count->freeMemory();
$count->openFile('temp3.txt');
$count->freeMemory();
$count->openFile('temp4.txt');
$count->freeMemory();




$aa = (int)'heheh';
echo '<br>'.$aa;
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04/07/2018
 * Time: 18:34
 */