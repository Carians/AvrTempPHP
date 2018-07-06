<?php

class temp
{
    private $file;

    protected function fileFlirt ()
    {


        try {
            $flirtedFile = $this->file;
            $keys = 0;
            $save = 0;

            if ( empty($this->file) ) {
                throw new Exception('File is empty!');
            }

            foreach ($flirtedFile as $k => $v) {
                if ( $k > 0 ) {
                    // echo substr($v, 80, 8). "<br>";

                    $save += (int)substr($v, 80, 8);
                    $keys++;
                } //if ($v<100||(is_string($v)==false)&&$k<=0)
            }

                return $this->count($save, $keys);

            // return $flirtedFile;
        } catch (Exception $e) {
            return $e.'<br><span style="color: red"><b>Your file is incorrect!</span></b> ';
        }


        //  echo '<pre>';print_r($flirtedFile);echo '</pre>';
        // echo '<pre>';print_r($save);echo '</pre>';


    }

    protected function count ($sum, $num)
    {
        try {
            if($sum==0&&$num==0)
            {
                throw new Exception("Bad file format!");
            }
            if($sum/$num==0)
            {
                throw new Exception("Bad file format!");
            }
            else
            {
                return $sum / $num;
            }
        } catch (Exception $e)
        {
            echo "<br><span style=\"color: red\"><b>Bad file format!</b></span>";
        }
    }

    public function freeMemory ()
    {
        unset($this->file);
    }

    public function openFile ($path)
    {
        try {
            if ( file_exists($path) == false ) {
                throw new Exception("No file found!");
            } else {
                $this->file = file($path);
                echo '<br>' . $this->fileFlirt();
            }
        } catch (Exception $e) {
            echo "<br><b><span style='color:red'>No file found!</span></b>";
            // return "No file couldn't be found".$e; //Developer info
        }
    }
}

$count = new temp;
$count->openFile('temp.txt');
//$count->openFile('temp2.txt');
//$count->openFile('temp3.txt');
$count->openFile('temp4.txt');
$count->freeMemory();




/*$aa = (int)'heheh';
echo '<br>'.$aa;*/
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04/07/2018
 * Time: 18:34
 */