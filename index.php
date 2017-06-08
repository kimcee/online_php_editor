<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>PHP Editor</title>

    <!-- Bootstrap 4 core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">

    <!-- CodeMirror -->
    <link href="codemirror/codemirror.css" rel="stylesheet">
</head>
<body>

    <div class="collapse bg-inverse" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 py-4">
                    <h4 class="text-white">How To</h4>
                    <p class="text-muted">Type in your php code like you would in a file, press "Render" and view results in the gray-ish area.  Yup, that simple.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar navbar-inverse bg-inverse">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand">PHP Editor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>

    <section class="jumbotron">
        <div class="container">
            <textarea name="code" class="form-control" id="code" autofocus></textarea>
            <br />
            <input type="button" value="Format" id="format_code" class="btn btn-default float-sm-right" />
            <input type="button" value="Render" id="render_code" class="btn btn-primary" /> 
            <div class="clearfix"></div>
        </div>
    </section>

    <div class="results text-muted">
        <div class="container">
            <h1 class="display-4">Results</h1>
            <div id="rendered_results"><em>[press "render" to view rendered results here]</div>
        </div>
    </div>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
        </div>
    </footer>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Tether (bootstrap js needs this) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <!-- Bootstrap 4 js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <!-- CodeMirror -->
    <script src="codemirror/codemirror.js"></script>
    <script src="codemirror/matchbrackets.js"></script>
    <script src="codemirror/htmlmixed.js"></script>
    <script src="codemirror/xml.js"></script>
    <script src="codemirror/javascript.js"></script>
    <script src="codemirror/css.js"></script>
    <script src="codemirror/clike.js"></script>
    <script src="codemirror/php.js"></script>
    <script src="codemirror/format.js"></script>

    <!-- Custom Scripts -->
    <script src="scripts.js"></script>

</body>
</html>

