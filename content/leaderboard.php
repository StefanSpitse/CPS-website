<?php

function leaderboard()
{
    $output = "";
    $db = new \database\Database();
    $request = $db->Query("SELECT * FROM `users` ORDER BY score DESC;");
    $fetched = $request->fetch_all();
    for($x = 0; $x < $request->num_rows; $x++)
    {
        $output .= "<tr> <td> " . $fetched[$x][1] . " </td> <td> " . $fetched[$x][3] . "</td> </tr>";
    }
    return '
<div class="container d-flex h-100">
    <div id="leaderboard" class="row justify-content-center mx-auto border h-75 w-75">
        <table class="table table-striped" style="color: white">
            <tr>
                <th>Username</th>
                <th>Highest clicks per second</th>
            </tr>'. $output . '
        </table>
    </div>
</div>';
}