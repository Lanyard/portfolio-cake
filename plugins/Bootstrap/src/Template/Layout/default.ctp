<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Raynald Mirville</title>

    <?= $this->Html->meta(
        'favicon',
        '/favicon-32.png',
        ['type' => 'icon', 'sizes' => '32x32']
    ); ?>

    <?= $this->Html->meta(
        'favicon',
        '/favicon-16.png',
        ['type' => 'icon', 'sizes' => '16x16']
    ); ?>

    <!-- Bootstrap Core CSS -->
    <?= $this->Html->css('Bootstrap.bootstrap.min'); ?>

    <?php
        if ($css != ''):
    ?>
    <!-- Template CSS -->
    <?php
            echo $this->Html->css($css);
        endif;
    ?>

    <!-- Custom CSS -->
    <?= $this->Html->css(['styles', 'responsive']); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Plugin CSS -->
    <?= $this->Html->css('colorbox/colorbox'); ?>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Raynald Mirville</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/resume">Resume</a>
                    </li>
                    <li>
                        <a href="m&#x61;&#x69;&#108;&#x74;&#111;&#x3a;&#114;&#x61;&#x79;&#110;&#97;&#x6c;&#x64;&#x2e;mi&#114;vi&#108;&#x6c;&#101;&#64;&#x67;&#109;&#x61;&#x69;l&#46;c&#x6f;&#x6d;">&#114;&#97;y&#110;a&#108;d&#46;mirvi&#108;&#108;e&#x40;&#x67;m&#x61;&#105;&#x6c;.&#x63;&#x6f;&#x6d;</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Projects</h1>
            </div>
        </div>
        <!-- /.row -->

        <?= $this->fetch('content') ?>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Raynald Mirville <?php echo date("Y"); ?></p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>

    <!-- Bootstrap Core JavaScript -->
    <?= $this->Html->script('Bootstrap.bootstrap.min'); ?>

    <!-- Plugin JavaScript -->
    <?= $this->Html->script('colorbox/jquery.colorbox'); ?>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            $(".ajax").colorbox();
            $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
        });
    </script>

</body>

</html>