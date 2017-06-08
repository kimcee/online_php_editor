<?php

    $response = [ 
        'rendered_code' => $rendered_code
    ];

    if ( isset( $_POST[ 'code' ] ) )
    {
        $code = $_POST[ 'code' ];
        $code = ltrim( $code, '<?php' );
        $code = ltrim( $code, '<?' );
        $code = rtrim( $code, '?>' );
        $code = trim( $code );

        ob_start();
            eval( $code );
            $rendered_code = ob_get_contents();
        ob_end_clean();

        $response[ 'rendered_code' ] = $rendered_code;
    }

    echo json_encode( $response );