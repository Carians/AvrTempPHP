<?php

class temp
{
    private $file;

    protected function fileFlirt()
    {
         $flirtedFile = $this->file;
         $keys = 0;
         $save = 0;
         $val = true;
             if (empty($this->file))
            {
                $val = false;
            }

        try {
            foreach ($flirtedFile as $k => $v) {
                if ( $k > 0 ) {
                    // echo substr($v, 80, 8). "<br>";

                    $save += (int)substr($v, 80, 8 );
                    $keys++;
                } //if ($v<100||(is_string($v)==false)&&$k<=0)
                if ($v=="")
                {
                    $val = false;
                    throw new Exception('Podano litele lol?'.$k."||".$save);
                }
                if ($k<=0&&$v>100)
                {
                    $val = false;
                    throw new Exception('Podano litele lol?'.$k."||".$save);
                }

            }
            if ($val == true) {
                return $this->count($save, $keys);
            }else echo "<br><b><span style='color:red'>File is empty!</span></b>";

           // return $flirtedFile;
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
        try {
            if (file_exists($path)==false){
                throw new Exception("No file found!");
            }
            else
            {
                $this->file=file($path);
                echo '<br>' . $this->fileFlirt();
            }
        } catch (Exception $e)
        {
            echo "<br><b><span style='color:red'>No file found!</span></b>";
           // return "No file couldn't be found".$e; //Developer info
        }
    }
}

$count = new temp;
$count->openFile('temp.txt');
$count->openFile('temp2.txt');
$count->openFile('temp3.txt');
$count->openFile('temp42.txt');
$count->freeMemory();




/*$aa = (int)'heheh';
echo '<br>'.$aa;*/
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04/07/2018
 * Time: 18:34
 */