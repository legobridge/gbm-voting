<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->

        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- Bootstrap -->
	    <link href="/css/bootstrap.min.css" rel="stylesheet">
	    <!-- jQuery -->
	    <script src="/js/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="/js/bootstrap.min.js"></script>

	    <link href="/css/styles.css" rel="stylesheet">

        <?php if (isset($title)): ?>
            <title> Pearl GBM : <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title> Pearl GBM </title>
        <?php endif ?>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <a href="/"><img alt="BITS Pilani, Hyderabad Campus" src="/img/bphc_logo.png"/></a>
            <div id="middle">
