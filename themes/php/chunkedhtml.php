<?php
class chunkedhtml extends phpweb {
    public function __construct(array $IDs, $filename, $ext = "html") {
        phpdotnet::__construct($IDs, $filename, $ext, true);
        if(!file_exists("html") || is_file("html")) mkdir("html") or die("Can't create the cache directory");
    }
    public function header($id) {
        return "<html><body>\n";
    }
    public function footer($id) {
        return "</body></html>\n";
    }
    public function __destruct() {
        copy("html/manual.html", "html/index.html");
    }
}

/*
 * vim600: sw=4 ts=4 fdm=syntax syntax=php et
 * vim<600: sw=4 ts=4
 */
