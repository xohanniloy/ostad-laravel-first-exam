<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DemoMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle( Request $request, Closure $next ): Response {

        // $key = $request->key;
        // if ( $key == 'xyz123' ) {
        //     return $next( $request );
        // } else {
        //     return response()->json( ['message' => 'Invalid'], 401 );
        // }

        // $request->headers->add( ['email' => 'test@test.com'] );
        // $request->headers->replace( ['email' => 'test@test.com'] );
        $request->headers->remove( 'email' );
        return $next( $request );

    }
}
