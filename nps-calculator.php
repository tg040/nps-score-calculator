/**
 * @param array
 * @return float
 * takes an array with scores from participants (e.g. array(1,10,4,5,9))
 * procedural way
 */

function return_nps_score($nps_array)
{
    $detractors=0;
    $promoters=0;
    $arr_length=count($nps_array);

    for ($i=0;$i<$arr_length;$i++)
    {
        // let`s make sure all elements are numeric
        if (is_numeric($nps_array[$i]))
        {
            if ($nps_array[$i]<=6 && $nps_array[$i]>=0)
                $detractors++;
            if ($nps_array[$i]>= 9 && $nps_array[$i]<=10)
                $promoters++;
        }
    }

    // if array is empty, then return 0 since div by 0 is not allowed
    if ($arr_length>0)
        $nps_score=(($promoters-$detractors)/$arr_length)*100;
    else
        $nps_score='0';

    return round($nps_score,1);
}

// here is how you call it
echo 'NPS Score: '.return_nps_score(array(0,3,4,10,10,4,10,10,10,10)).'<br />';

?>
