/**
 * @param array
 * @return float
 * takes an array with scores from participants
*/
 
function output_real_nps($nps_array)
{
    $detractors=0;
    $promoters=0;
    $arr_length=count($nps_array);

    for ($i=0;$i<$arr_length;$i++)
    {
        if (is_numeric($nps_array[$i]))
        {
            if ($nps_array[$i]<=6 && $nps_array[$i]>=0)
                $detractors++;
            if ($nps_array[$i]>= 9 && $nps_array[$i]<=10)
                $promoters++;
        }
    }

    // div by 0 not allowed
    if ($arr_length>0)
      $nps_score=(($promoters-$detractors)/$arr_length)*100;
    else
        $nps_score='0';

    return round($nps_score,1);
}
