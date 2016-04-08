<?php

//Query of matriculas database
$matriculas = mysql_query('SELECT * FROM matriculas')
or die(mysql_error());
 
//Output results
if(!$matriculas)
{
    mysql_close();
    echo json_encode('Hubo un error ejecutando el QUERY: ' . mysql_error());
}
elseif(!mysql_num_rows($matriculas))
{
    mysql_close();
    echo json_encode('No hay data disponible.');
}
else
{
    $header = false;
	$output_string = '';
    $output_string .=  '<table border='1'>\n';
    while($row = mysql_fetch_assoc($matriculas))
    {
        if(!$header)
        {
            $output_string .= '<tr>\n';
            foreach($row as $header => $value)
            {
                $output_string .= '<th>{$header}</th>\n';
            }
            $output_string .= '</tr>\n';
        }
        $output_string .= '<tr>\n';
        foreach($row as $value)
        {
            $output_string .= '<th>{$value}</th>\n';
        }
        $output_string .= '</tr>\n';
    }
    $output_string .= '</table>\n';
}
 
mysql_close();
// El siguiente echo es para devolver el resultado
echo json_encode($output_string);
 
?>