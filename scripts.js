$( document ).ready( function() {

    // defaults
    var _ajax_url       = "ajax.php";
    var _default_loader = "<em>loading...</em>";
    var _textarea_id    = "code";

    // objects
    var $format_code      = $( "#format_code" );
    var $render_code      = $( "#render_code" );
    var $rendered_results = $( "#rendered_results" );
    var $code             = $( "#" + _textarea_id );

    // code editor
    var _editor = CodeMirror.fromTextArea( document.getElementById( _textarea_id ), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "application/x-httpd-php",
        indentUnit: 4,
        indentWithTabs: true,
        enterMode: "keep",
        tabMode: "shift"
    });

    // render php
    $render_code.click( function() {
        // save code from editor to textarea
        _editor.save();

        // show loading icon
        $rendered_results.html( _default_loader );

        // call ajax to render code
        $.ajax({
            type: "POST", 
            url: _ajax_url, 
            data: {
                // pass code from textarea
                code: $code.val()
            }, 
            dataType: "json", 
            success:  function( response ) {
                // display results on page
                $rendered_results.html( response.rendered_code );
            }
        });
    });

    // format code
    $format_code.click( function() {
        _editor.execCommand( 'selectAll' );
        
        var selected_code = get_selected_code();

        _editor.autoFormatRange( 
            selected_code.from, 
            selected_code.to 
        );

        return false;
    });

    // function to get selected code
    function get_selected_code() 
    {
        return { 
            from: _editor.getCursor( true ), 
            to: _editor.getCursor( false ) 
        };
    }    
});