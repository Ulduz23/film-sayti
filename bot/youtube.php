<pre>
<form method="post">
<h2>Axtarish yeri:</h2>
<input type="text" name="a"><br>

<h3>Region</h3>
<input type="radio" name="r" value="az">AZ<br>
<input type="radio" name="r" value="en">EN<br>
<input type="radio" name="r" value="ru">RU<br>
<input type="radio" name="r" value="tr">TR<br>
<h3>Kateqoriya</h3>
<input type="radio" name="c" value="music">MUSIQI<br>
<input type="radio" name="c" value="kino">KINO<br>
<input type="radio" name="c" value="game">OYUN<br>
<input type="radio" name="c" value="sport">IDMAN<br><br>

<input type="submit" name="d" value="AXTAR">
</form>

<?php

if(isset($_POST['d']) && !empty($_POST['a']))
{
    if($_POST['r']=='az' && $_POST['c']=='music')
    {
        
    }
}

$q = urlencode('Ulduz');
$data =  file_get_contents('https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=10&q='.$q.'&type=video&key=AIzaSyDElPXMGTMuR2UV-2BAsSOxVHSHxhdOt04');

//echo $data;

$data = json_decode($data);

print_r($data);

/*for($i=0; $i<count($data->items); $i++)
{
    echo $data->items[$i]->snippet->title; echo'<br><br>';
    echo'<iframe width="727" height="409" src="https://www.youtube.com/embed/'.$data->items[$i]->id->videoId.'" title="KUŞ UÇUŞU ELEŞTİRİSİ - DONATIN!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>';
    echo $data->items[$i]->snippet->description; echo'<br><br>';

}
*/

?>
</pre>