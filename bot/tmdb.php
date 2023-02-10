<pre>
<?php

$con = mysqli_connect('localhost','u387328485_filmdata','Filmdata1','u387328485_film');

$data = file_get_contents('https://api.themoviedb.org/3/discover/movie?primary_release_date.gte=2014-01-01&primary_release_date.lte=2022-01-01&api_key=8d623d61ba82c494aaf74d668ba2940f&page=11');
$data= json_decode($data);
$tarix=date('Y-m-d H:i:s');


//print_r($data);

for($i=0; $i<count($data->results); $i++)
{    
    $film_id=$data->results[$i]->id;
    $tamdata=file_get_contents('https://api.themoviedb.org/3/movie/'.$film_id.'?api_key=8d623d61ba82c494aaf74d668ba2940f');
    $tamdata=json_decode($tamdata);
    //print_r($tamdata);
                                                                                      
    $imdb_id=mysqli_real_escape_string($con,$tamdata->imdb_id);
    echo'Imdb_id: '.$imdb_id.'<br>';
    $genres=mysqli_real_escape_string($con,$tamdata->genres[0]->name);
    echo'Genres: '.$genres.'<br>';
    $budget=mysqli_real_escape_string($con,$tamdata->budget); 
    echo'Budget: '.$budget.'<br>';
    $original_title=mysqli_real_escape_string($con,$tamdata->original_title); 
    echo'Original_title: '.$original_title.'<br>';
    $overview=mysqli_real_escape_string($con,$tamdata->overview); 
    echo'Overview: '.$overview.'<br>';
    $runtime=mysqli_real_escape_string($con,$tamdata->runtime); 
    echo'Runtime: '.$runtime.'<br>';
    $popularity=mysqli_real_escape_string($con,$tamdata->popularity); 
    echo'Popularity: '.$popularity.'<br>';
    $language=mysqli_real_escape_string($con,$tamdata->original_language); 
    echo'Language: '.$language.'<br>';
    $vote_count=mysqli_real_escape_string($con,$tamdata->vote_count);
    echo'Vote_count: '.$vote_count.'<br>';
    $vote_average=mysqli_real_escape_string($con,$tamdata->vote_average); 
    echo'Vote_average: '.$vote_average.'<br>';
    $tagline=mysqli_real_escape_string($con,$tamdata->tagline);
    echo'Tagline: '.$tagline.'<br>';
    $title=mysqli_real_escape_string($con,$tamdata->title);
    echo'Title: '.$title.'<br>';
    $poster=mysqli_real_escape_string($con,$tamdata->poster_path); echo'<br>';
    echo'<img width="500" height="300" src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$poster.'"><br>'; 
    $country=mysqli_real_escape_string($con,$tamdata->production_countries[0]->name); 
    echo'Country: '.$country.'<br>';
    $backdrop=mysqli_real_escape_string($con,$tamdata->backdrop_path); echo'<br>';
    echo'<img width="500" height="300" src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$backdrop.'"><br>'; 
    $release_date=mysqli_real_escape_string($con,$tamdata->release_date); 
    echo'Release_date: '.$release_date.'<br><br>';
   
    $vdata=file_get_contents('https://api.themoviedb.org/3/movie/'.$film_id.'/videos?api_key=8d623d61ba82c494aaf74d668ba2940f');
    
    $vdata=json_decode($vdata);
   
    //print_r($vdata);
    
    if($vdata->results[0]->site=='YouTube')
    {$video=mysqli_real_escape_string($con,$vdata->results[0]->key);}
                                                                                 
    else
    {
      $vdata = file_get_contents('https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q='.urlencode($title.'trailer').'&type=video&key=AIzaSyDElPXMGTMuR2UV-2BAsSOxVHSHxhdOt04');
   
       $vdata = json_decode($vdata);
         
       $video=$vdata->items[0]->id->videoId;
    }

    echo'<iframe width="600" height="400" src="https://www.youtube.com/embed/'.$video.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>';
    
   if(!empty($imdb_id) && !empty($genres) && !empty($budget) && !empty($original_title) && !empty($overview) && !empty($runtime) && !empty($popularity) && !empty($language) && !empty($vote_count) && !empty($title) && !empty($poster) && !empty($country) && !empty($backdrop) && !empty($release_date) && !empty($video) && !empty($tagline) && !empty($vote_average))

    {
        $yoxla = mysqli_query($con,"SELECT * FROM film WHERE imdb_id='".$imdb_id."' ");
    
       if(mysqli_num_rows($yoxla)==0)
    {
       $daxil=mysqli_query($con,"INSERT INTO film(imdb_id,genres,budget,original_title,overview,runtime,popularity,language,vote_count,title,poster,country,backdrop,video,tagline,release_date,vote_average,tarix) 
       VALUES('".$imdb_id."','".$genres."','".$budget."','".$original_title."','".$overview."','".$runtime."','".$popularity."','".$language."','".$vote_count."','".$title."','".$poster."','".$country."','".$backdrop."','".$video."','".$tagline."','".$release_date."','".$vote_average."','".$tarix."')");
            
           if($daxil==true)
            {echo'<b>Film elave edildi</b><br><br><br>';}
            else
            {echo'<b>Filmi elave etmek mumkun olmadi</b><br><br><br>';}
         }
         else
        {echo'<b>Bu film artiq movcuddur</b><br><br><br>';}
  
    }
    
    
    }

    
    
    







?>
</pre>