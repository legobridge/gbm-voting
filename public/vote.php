<?php

    // configuration
    require("../includes/config.php");

    $vote_row = ($mysqli -> query("SELECT * FROM gbm")) -> fetch_assoc();

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // render voting form
        render("form.php", ["title" => "Voting"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $vote = $_POST["vote"];
        $str_vote = $vote;
        $votes = $vote_row[$str_vote] + 1;
        $query_string = sprintf("UPDATE gbm SET %s = %d", $str_vote, $votes);
        $mysqli -> query($query_string);
        redirect("thanks.php");
    }

?>
