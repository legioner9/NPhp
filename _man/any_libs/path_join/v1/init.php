<?php 

function path_is_absolute( $path ) {
	/*
	 * Check to see if the path is a stream and check to see if its an actual
	 * path or file as realpath() does not support stream wrappers.
	 */
	if ( wp_is_stream( $path ) && ( is_dir( $path ) || is_file( $path ) ) ) {
		return true;
	}

	/*
	 * This is definitive if true but fails if $path does not exist or contains
	 * a symbolic link.
	 */
	if ( realpath( $path ) === $path ) {
		return true;
	}

	if ( strlen( $path ) === 0 || '.' === $path[0] ) {
		return false;
	}

	// Windows allows absolute paths like this.
	if ( preg_match( '#^[a-zA-Z]:\\\\#', $path ) ) {
		return true;
	}

	// A path starting with / or \ is absolute; anything else is relative.
	return ( '/' === $path[0] || '\\' === $path[0] );
}

function path_join( $base, $path ) {
	if ( path_is_absolute( $path ) ) {
		return $path;
	}

	return rtrim( $base, '/' ) . '/' . $path;
}



$path = path_join( '/var/site/wp-content/', $file );
require_once( $path );