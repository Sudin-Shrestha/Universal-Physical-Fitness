<?php
    
    class File {

		public static $error = [];

		private static $file;
		
		private static $mime;
		
        private static $types = array (
			'3dmf'		=> 'x-world/x-3dmf',
			'3dm'		=> 'x-world/x-3dmf',
			'avi'		=> 'video/x-msvideo',
			'ai'		=> 'application/postscript',
			'bin'		=> 'application/octet-stream',
			'bin'		=> 'application/x-macbinary',
			'bmp'		=> 'image/bmp',
			'cab'		=> 'application/x-shockwave-flash',
			'c'			=> 'text/plain',
			'c++'		=> 'text/plain',
			'class'		=> 'application/java',
			'css'		=> 'text/css',
			'csv'		=> 'text/comma-separated-values',
			'cdr'		=> 'application/cdr',
			'doc'		=> 'application/msword',
			'dot'		=> 'application/msword',
			'docx'		=> 'application/msword',
			'dwg'		=> 'application/acad',
			'eps'		=> 'application/postscript',
			'exe'		=> 'application/octet-stream',
			'gif'		=> 'image/gif',
			'gz'		=> 'application/gzip',
			'gtar'		=> 'application/x-gtar',
			'flv'		=> 'video/x-flv',
			'fh4'		=> 'image/x-freehand',
			'fh5'		=> 'image/x-freehand',
			'fhc'		=> 'image/x-freehand',
			'help'		=> 'application/x-helpfile',
			'hlp'		=> 'application/x-helpfile',
			'html'		=> 'text/html',
			'htm'		=> 'text/html',
			'ico'		=> 'image/x-icon',
			'imap'		=> 'application/x-httpd-imap',
			'inf'		=> 'application/inf',
			'jpe'		=> 'image/jpeg',
			'jpeg'		=> 'image/jpeg',
			'jpg'		=> 'image/jpeg',
			'js'		=> 'application/x-javascript',
			'java'		=> 'text/x-java-source',
			'latex'		=> 'application/x-latex',
			'log'		=> 'text/plain',
			'm3u'		=> 'audio/x-mpequrl',
			'midi'		=> 'audio/midi',
			'mid'		=> 'audio/midi',
			'mov'		=> 'video/quicktime',
			'mp3'		=> 'audio/mpeg',
			'mpeg'		=> 'video/mpeg',
			'mpg'		=> 'video/mpeg',
			'mp2'		=> 'video/mpeg',
			'ogg'		=> 'application/ogg',
			'phtml'		=> 'application/x-httpd-php',
			'php'		=> 'application/x-httpd-php',
			'pdf'		=> 'application/pdf',
			'pgp'		=> 'application/pgp',
			'png'		=> 'image/png',
			'pps'		=> 'application/mspowerpoint',
			'ppt'		=> 'application/mspowerpoint',
			'ppz'		=> 'application/mspowerpoint',
			'pot'		=> 'application/mspowerpoint',
			'ps'		=> 'application/postscript',
			'qt'		=> 'video/quicktime',
			'qd3d'		=> 'x-world/x-3dmf',
			'qd3'		=> 'x-world/x-3dmf',
			'qxd'		=> 'application/x-quark-express',
			'rar'		=> 'application/x-rar-compressed',
			'ra'		=> 'audio/x-realaudio',
			'ram'		=> 'audio/x-pn-realaudio',
			'rm'		=> 'audio/x-pn-realaudio',
			'rtf'		=> 'text/rtf',
			'spr'		=> 'application/x-sprite',
			'sprite'	=> 'application/x-sprite',
			'stream'	=> 'audio/x-qt-stream',
			'swf'		=> 'application/x-shockwave-flash',
			'svg'		=> 'text/xml-svg',
			'sgml'		=> 'text/x-sgml',
			'sgm'		=> 'text/x-sgml',
			'tar'		=> 'application/x-tar',
			'tiff'		=> 'image/tiff',
			'tif'		=> 'image/tiff',
			'tgz'		=> 'application/x-compressed',
			'tex'		=> 'application/x-tex',
			'txt'		=> 'text/plain',
			'vob'		=> 'video/x-mpg',
			'wav'		=> 'audio/x-wav',
			'wrl'		=> 'model/vrml',
			'wrl'		=> 'x-world/x-vrml',
			'xla'		=> 'application/msexcel',
			'xls'		=> 'application/msexcel',
			'xls'		=> 'application/vnd.ms-excel',
			'xlc'		=> 'application/vnd.ms-excel',
			'xml'		=> 'text/xml',
			'zip'		=> 'application/x-zip-compressed',
			'zip'		=> 'application/zip',
		);
		


        public static function check(...$extensions){

			try{

				self::$file = reset($_FILES);
				if(!self::$file) {
					self::$error['EMPTY'] = 'No file was detected';
					return FALSE;
				}

				// Extracting the mime-type of the file
				self::$mime = finfo_file(finfo_open(FILEINFO_MIME_TYPE), (string) self::$file['tmp_name']);

			} catch( Exception $e){

				return FALSE;

			} // Try-catch

			// Loop checking file's mime to $extension array
			foreach($extensions as $extension){

				if(self::$types[(string)$extension] == self::$mime){

					return TRUE;

				} // If condition

			} // Foreach loop

			return FALSE;

        } // check()


		// Function to save the file
		public static function save(){

            // Extracting the extension of file
			$extension = explode(".", basename(self::$file['name']));
			
			// Generating new name for the file
			$name = Config::FILE_NAME_PREFIX.time().bin2hex(random_bytes(32)).Config::FILE_NAME_SUFFIX;

			// Renaming the file's name finally
			self::$file['name'] = $name.'.'.end($extension);

            // Generating the full dir to move
			$target = Config::FILE_STORAGE_DIR.'/'.self::$file['name'];

			// Moving & checking the file here
			if(move_uploaded_file(self::$file['tmp_name'], $target)) {

				// Returning the file's new name
				return self::$file['name'];

			}else{

				// Return false if moving failed
				return FALSE;

			} // If-else condition

        } // save()

    } // File{}

?>