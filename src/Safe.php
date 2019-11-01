<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette;


/**
 * PHP functions smarten up to throw exceptions instead of returning false or triggering errors.
 *
 * @method static string apache_get_version() { @throws Safe\ApacheException }
 * @method static string apache_getenv(string $variable, bool $walk_to_top = false) { @throws Safe\ApacheException }
 * @method static array apache_request_headers() { @throws Safe\ApacheException }
 * @method static void apache_reset_timeout() { @throws Safe\ApacheException }
 * @method static array apache_response_headers() { @throws Safe\ApacheException }
 * @method static void apache_setenv(string $variable, string $value, bool $walk_to_top = false) { @throws Safe\ApacheException }
 * @method static array getallheaders() { @throws Safe\ApacheException }
 * @method static void virtual(string $filename) { @throws Safe\ApacheException }
 * @method static void apc_bin_loadfile(string $filename, resource $context = null, int $flags = 0) { @throws Safe\ApcException }
 * @method static array apc_cache_info(string $cache_type = '', bool $limited = false) { @throws Safe\ApcException }
 * @method static void apc_cas(string $key, int $old, int $new) { @throws Safe\ApcException }
 * @method static mixed apc_compile_file(string $filename, bool $atomic = true) { @throws Safe\ApcException }
 * @method static void apc_define_constants(string $key, array $constants, bool $case_sensitive = true) { @throws Safe\ApcException }
 * @method static mixed apc_delete_file($keys) { @throws Safe\ApcException }
 * @method static void apc_delete($key) { @throws Safe\ApcException }
 * @method static void apc_load_constants(string $key, bool $case_sensitive = true) { @throws Safe\ApcException }
 * @method static array apc_sma_info(bool $limited = false) { @throws Safe\ApcException }
 * @method static array apcu_cache_info(bool $limited = false) { @throws Safe\ApcuException }
 * @method static void apcu_cas(string $key, int $old, int $new) { @throws Safe\ApcuException }
 * @method static array apcu_sma_info(bool $limited = false) { @throws Safe\ApcuException }
 * @method static array array_combine(array $keys, array $values) { @throws Safe\ArrayException }
 * @method static array array_flip(array $array) { @throws Safe\ArrayException }
 * @method static array array_replace_recursive(array $array1, array  ...$params) { @throws Safe\ArrayException }
 * @method static array array_replace(array $array1, array  ...$params) { @throws Safe\ArrayException }
 * @method static void bzclose(resource $bz) { @throws Safe\Bzip2Exception }
 * @method static void bzflush(resource $bz) { @throws Safe\Bzip2Exception }
 * @method static string bzread(resource $bz, int $length = 1024) { @throws Safe\Bzip2Exception }
 * @method static int bzwrite(resource $bz, string $data, int $length = null) { @throws Safe\Bzip2Exception }
 * @method static void class_alias(string $original, string $alias, bool $autoload = true) { @throws Safe\ClassobjException }
 * @method static void com_event_sink(object $comobject, object $sinkobject, $sinkinterface = null) { @throws Safe\ComException }
 * @method static void com_load_typelib(string $typelib_name, bool $case_sensitive = true) { @throws Safe\ComException }
 * @method static void com_print_typeinfo(object $comobject, string $dispinterface = null, bool $wantsink = false) { @throws Safe\ComException }
 * @method static void cubrid_free_result(resource $req_identifier) { @throws Safe\CubridException }
 * @method static string cubrid_get_charset(resource $conn_identifier) { @throws Safe\CubridException }
 * @method static string cubrid_get_client_info() { @throws Safe\CubridException }
 * @method static array cubrid_get_db_parameter(resource $conn_identifier) { @throws Safe\CubridException }
 * @method static string cubrid_get_server_info(resource $conn_identifier) { @throws Safe\CubridException }
 * @method static string cubrid_insert_id(resource $conn_identifier = null) { @throws Safe\CubridException }
 * @method static resource cubrid_lob2_new(resource $conn_identifier = null, string $type = "BLOB") { @throws Safe\CubridException }
 * @method static int cubrid_lob2_size(resource $lob_identifier) { @throws Safe\CubridException }
 * @method static string cubrid_lob2_size64(resource $lob_identifier) { @throws Safe\CubridException }
 * @method static int cubrid_lob2_tell(resource $lob_identifier) { @throws Safe\CubridException }
 * @method static string cubrid_lob2_tell64(resource $lob_identifier) { @throws Safe\CubridException }
 * @method static void cubrid_set_db_parameter(resource $conn_identifier, int $param_type, int $param_value) { @throws Safe\CubridException }
 * @method static string curl_escape(resource $ch, string $str) { @throws Safe\CurlException }
 * @method static mixed curl_exec(resource $ch) { @throws Safe\CurlException }
 * @method static mixed curl_getinfo(resource $ch, int $opt = null) { @throws Safe\CurlException }
 * @method static resource curl_init(string $url = null) { @throws Safe\CurlException }
 * @method static int curl_multi_errno(resource $mh) { @throws Safe\CurlException }
 * @method static resource curl_multi_init() { @throws Safe\CurlException }
 * @method static void curl_setopt_array(resource $ch, array $options) { @throws Safe\CurlException }
 * @method static void curl_setopt(resource $ch, int $option, $value) { @throws Safe\CurlException }
 * @method static int curl_share_errno(resource $sh) { @throws Safe\CurlException }
 * @method static void curl_share_setopt(resource $sh, int $option, string $value) { @throws Safe\CurlException }
 * @method static string curl_unescape(resource $ch, string $str) { @throws Safe\CurlException }
 * @method static array date_parse_from_format(string $format, string $date) { @throws Safe\DatetimeException }
 * @method static array date_parse(string $date) { @throws Safe\DatetimeException }
 * @method static array date_sun_info(int $time, float $latitude, float $longitude) { @throws Safe\DatetimeException }
 * @method static mixed date_sunrise(int $timestamp, int $format = SUNFUNCS_RET_STRING, float $latitude = null, float $longitude = null, float $zenith = null, float $gmt_offset = 0) { @throws Safe\DatetimeException }
 * @method static mixed date_sunset(int $timestamp, int $format = SUNFUNCS_RET_STRING, float $latitude = null, float $longitude = null, float $zenith = null, float $gmt_offset = 0) { @throws Safe\DatetimeException }
 * @method static int mktime(int $hour = null, int $minute = null, int $second = null, int $month = null, int $day = null, int $year = null) { @throws Safe\DatetimeException }
 * @method static array strptime(string $date, string $format) { @throws Safe\DatetimeException }
 * @method static int strtotime(string $time, int $now = null) { @throws Safe\DatetimeException }
 * @method static string timezone_name_from_abbr(string $abbr, int $gmtOffset = -1, int $isdst = -1) { @throws Safe\DatetimeException }
 * @method static void chdir(string $directory) { @throws Safe\DirException }
 * @method static void chroot(string $directory) { @throws Safe\DirException }
 * @method static string getcwd() { @throws Safe\DirException }
 * @method static resource opendir(string $path, resource $context = null) { @throws Safe\DirException }
 * @method static void rewinddir(resource $dir_handle = null) { @throws Safe\DirException }
 * @method static array scandir(string $directory, int $sorting_order = SCANDIR_SORT_ASCENDING, resource $context = null) { @throws Safe\DirException }
 * @method static resource eio_busy(int $delay, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_chmod(string $path, int $mode, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_chown(string $path, int $uid, int $gid = -1, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_close($fd, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_custom(callable $execute, int $pri, callable $callback, $data = null) { @throws Safe\EioException }
 * @method static resource eio_dup2($fd, $fd2, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static void eio_event_loop() { @throws Safe\EioException }
 * @method static resource eio_fallocate($fd, int $mode, int $offset, int $length, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_fchmod($fd, int $mode, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_fdatasync($fd, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_fstat($fd, int $pri, callable $callback, $data = null) { @throws Safe\EioException }
 * @method static resource eio_fstatvfs($fd, int $pri, callable $callback, $data = null) { @throws Safe\EioException }
 * @method static resource eio_fsync($fd, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_ftruncate($fd, int $offset = 0, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_futime($fd, float $atime, float $mtime, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_grp(callable $callback, string $data = null) { @throws Safe\EioException }
 * @method static resource eio_lstat(string $path, int $pri, callable $callback, $data = null) { @throws Safe\EioException }
 * @method static resource eio_mkdir(string $path, int $mode, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_mknod(string $path, int $mode, int $dev, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_nop(int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_readahead($fd, int $offset, int $length, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_readdir(string $path, int $flags, int $pri, callable $callback, string $data = null) { @throws Safe\EioException }
 * @method static resource eio_readlink(string $path, int $pri, callable $callback, string $data = null) { @throws Safe\EioException }
 * @method static resource eio_rename(string $path, string $new_path, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_rmdir(string $path, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_seek($fd, int $offset, int $whence, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_sendfile($out_fd, $in_fd, int $offset, int $length, int $pri = null, callable $callback = null, string $data = null) { @throws Safe\EioException }
 * @method static resource eio_stat(string $path, int $pri, callable $callback, $data = null) { @throws Safe\EioException }
 * @method static resource eio_statvfs(string $path, int $pri, callable $callback, $data = null) { @throws Safe\EioException }
 * @method static resource eio_symlink(string $path, string $new_path, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_sync_file_range($fd, int $offset, int $nbytes, int $flags, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_sync(int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_syncfs($fd, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_truncate(string $path, int $offset = 0, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_unlink(string $path, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_utime(string $path, float $atime, float $mtime, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static resource eio_write($fd, string $str, int $length = 0, int $offset = 0, int $pri = EIO_PRI_DEFAULT, callable $callback = null, $data = null) { @throws Safe\EioException }
 * @method static void error_log(string $message, int $message_type = 0, string $destination = null, string $extra_headers = null) { @throws Safe\ErrorfuncException }
 * @method static array proc_get_status(resource $process) { @throws Safe\ExecException }
 * @method static void proc_nice(int $increment) { @throws Safe\ExecException }
 * @method static void finfo_close(resource $finfo) { @throws Safe\FileinfoException }
 * @method static resource finfo_open(int $options = FILEINFO_NONE, string $magic_file = "") { @throws Safe\FileinfoException }
 * @method static string mime_content_type(string $filename) { @throws Safe\FileinfoException }
 * @method static void chgrp(string $filename, $group) { @throws Safe\FilesystemException }
 * @method static void chmod(string $filename, int $mode) { @throws Safe\FilesystemException }
 * @method static void chown(string $filename, $user) { @throws Safe\FilesystemException }
 * @method static void copy(string $source, string $dest, resource $context = null) { @throws Safe\FilesystemException }
 * @method static float disk_free_space(string $directory) { @throws Safe\FilesystemException }
 * @method static float disk_total_space(string $directory) { @throws Safe\FilesystemException }
 * @method static void fclose(resource $handle) { @throws Safe\FilesystemException }
 * @method static void fflush(resource $handle) { @throws Safe\FilesystemException }
 * @method static string file_get_contents(string $filename, bool $use_include_path = false, resource $context = null, int $offset = 0, int $maxlen = null) { @throws Safe\FilesystemException }
 * @method static int file_put_contents(string $filename, $data, int $flags = 0, resource $context = null) { @throws Safe\FilesystemException }
 * @method static array file(string $filename, int $flags = 0, resource $context = null) { @throws Safe\FilesystemException }
 * @method static int fileatime(string $filename) { @throws Safe\FilesystemException }
 * @method static int filectime(string $filename) { @throws Safe\FilesystemException }
 * @method static int fileinode(string $filename) { @throws Safe\FilesystemException }
 * @method static int filemtime(string $filename) { @throws Safe\FilesystemException }
 * @method static int fileowner(string $filename) { @throws Safe\FilesystemException }
 * @method static int filesize(string $filename) { @throws Safe\FilesystemException }
 * @method static resource fopen(string $filename, string $mode, bool $use_include_path = false, resource $context = null) { @throws Safe\FilesystemException }
 * @method static int fputcsv(resource $handle, array $fields, string $delimiter = ",", string $enclosure = '"', string $escape_char = "\\") { @throws Safe\FilesystemException }
 * @method static string fread(resource $handle, int $length) { @throws Safe\FilesystemException }
 * @method static void ftruncate(resource $handle, int $size) { @throws Safe\FilesystemException }
 * @method static int fwrite(resource $handle, string $string, int $length = null) { @throws Safe\FilesystemException }
 * @method static array glob(string $pattern, int $flags = 0) { @throws Safe\FilesystemException }
 * @method static void lchgrp(string $filename, $group) { @throws Safe\FilesystemException }
 * @method static void lchown(string $filename, $user) { @throws Safe\FilesystemException }
 * @method static void link(string $target, string $link) { @throws Safe\FilesystemException }
 * @method static void mkdir(string $pathname, int $mode = 0777, bool $recursive = false, resource $context = null) { @throws Safe\FilesystemException }
 * @method static void move_uploaded_file(string $filename, string $destination) { @throws Safe\FilesystemException }
 * @method static array parse_ini_file(string $filename, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL) { @throws Safe\FilesystemException }
 * @method static array parse_ini_string(string $ini, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL) { @throws Safe\FilesystemException }
 * @method static int readfile(string $filename, bool $use_include_path = false, resource $context = null) { @throws Safe\FilesystemException }
 * @method static string readlink(string $path) { @throws Safe\FilesystemException }
 * @method static string realpath(string $path) { @throws Safe\FilesystemException }
 * @method static void rename(string $oldname, string $newname, resource $context = null) { @throws Safe\FilesystemException }
 * @method static void rewind(resource $handle) { @throws Safe\FilesystemException }
 * @method static void rmdir(string $dirname, resource $context = null) { @throws Safe\FilesystemException }
 * @method static void symlink(string $target, string $link) { @throws Safe\FilesystemException }
 * @method static string tempnam(string $dir, string $prefix) { @throws Safe\FilesystemException }
 * @method static resource tmpfile() { @throws Safe\FilesystemException }
 * @method static void touch(string $filename, int $time = null, int $atime = null) { @throws Safe\FilesystemException }
 * @method static void unlink(string $filename, resource $context = null) { @throws Safe\FilesystemException }
 * @method static void filter_has_var(int $type, string $variable_name) { @throws Safe\FilterException }
 * @method static mixed filter_input_array(int $type, $definition = null, bool $add_empty = true) { @throws Safe\FilterException }
 * @method static mixed filter_var_array(array $data, $definition = null, bool $add_empty = true) { @throws Safe\FilterException }
 * @method static void fastcgi_finish_request() { @throws Safe\FpmException }
 * @method static void ftp_append(resource $ftp, string $remote_file, string $local_file, int $mode = FTP_BINARY) { @throws Safe\FtpException }
 * @method static void ftp_cdup(resource $ftp_stream) { @throws Safe\FtpException }
 * @method static void ftp_chdir(resource $ftp_stream, string $directory) { @throws Safe\FtpException }
 * @method static int ftp_chmod(resource $ftp_stream, int $mode, string $filename) { @throws Safe\FtpException }
 * @method static void ftp_close(resource $ftp_stream) { @throws Safe\FtpException }
 * @method static resource ftp_connect(string $host, int $port = 21, int $timeout = 90) { @throws Safe\FtpException }
 * @method static void ftp_delete(resource $ftp_stream, string $path) { @throws Safe\FtpException }
 * @method static void ftp_exec(resource $ftp_stream, string $command) { @throws Safe\FtpException }
 * @method static void ftp_fget(resource $ftp_stream, resource $handle, string $remote_file, int $mode = FTP_BINARY, int $resumepos = 0) { @throws Safe\FtpException }
 * @method static void ftp_fput(resource $ftp_stream, string $remote_file, resource $handle, int $mode = FTP_BINARY, int $startpos = 0) { @throws Safe\FtpException }
 * @method static void ftp_get(resource $ftp_stream, string $local_file, string $remote_file, int $mode = FTP_BINARY, int $resumepos = 0) { @throws Safe\FtpException }
 * @method static void ftp_login(resource $ftp_stream, string $username, string $password) { @throws Safe\FtpException }
 * @method static string ftp_mkdir(resource $ftp_stream, string $directory) { @throws Safe\FtpException }
 * @method static array ftp_mlsd(resource $ftp_stream, string $directory) { @throws Safe\FtpException }
 * @method static array ftp_nlist(resource $ftp_stream, string $directory) { @throws Safe\FtpException }
 * @method static void ftp_pasv(resource $ftp_stream, bool $pasv) { @throws Safe\FtpException }
 * @method static void ftp_put(resource $ftp_stream, string $remote_file, string $local_file, int $mode = FTP_BINARY, int $startpos = 0) { @throws Safe\FtpException }
 * @method static string ftp_pwd(resource $ftp_stream) { @throws Safe\FtpException }
 * @method static void ftp_rename(resource $ftp_stream, string $oldname, string $newname) { @throws Safe\FtpException }
 * @method static void ftp_rmdir(resource $ftp_stream, string $directory) { @throws Safe\FtpException }
 * @method static void ftp_site(resource $ftp_stream, string $command) { @throws Safe\FtpException }
 * @method static resource ftp_ssl_connect(string $host, int $port = 21, int $timeout = 90) { @throws Safe\FtpException }
 * @method static string ftp_systype(resource $ftp_stream) { @throws Safe\FtpException }
 * @method static string create_function(string $args, string $code) { @throws Safe\FunchandException }
 * @method static void register_tick_function(callable $function,  ...$params) { @throws Safe\FunchandException }
 * @method static \GMP gmp_binomial($n, int $k) { @throws Safe\GmpException }
 * @method static string gmp_export($gmpnumber, int $word_size = 1, int $options) { @throws Safe\GmpException }
 * @method static \GMP gmp_import(string $data, int $word_size = 1, int $options) { @throws Safe\GmpException }
 * @method static void gmp_random_seed($seed) { @throws Safe\GmpException }
 * @method static void gnupg_adddecryptkey(resource $identifier, string $fingerprint, string $passphrase) { @throws Safe\GnupgException }
 * @method static void gnupg_addencryptkey(resource $identifier, string $fingerprint) { @throws Safe\GnupgException }
 * @method static void gnupg_addsignkey(resource $identifier, string $fingerprint, string $passphrase = null) { @throws Safe\GnupgException }
 * @method static void gnupg_cleardecryptkeys(resource $identifier) { @throws Safe\GnupgException }
 * @method static void gnupg_clearencryptkeys(resource $identifier) { @throws Safe\GnupgException }
 * @method static void gnupg_clearsignkeys(resource $identifier) { @throws Safe\GnupgException }
 * @method static void gnupg_setarmor(resource $identifier, int $armor) { @throws Safe\GnupgException }
 * @method static void gnupg_setsignmode(resource $identifier, int $signmode) { @throws Safe\GnupgException }
 * @method static string hash_hkdf(string $algo, string $ikm, int $length = 0, string $info = '', string $salt = '') { @throws Safe\HashException }
 * @method static void hash_update_file(\HashContext $hcontext, string $filename, ?\HashContext $scontext = null) { @throws Safe\HashException }
 * @method static void fbird_blob_cancel(resource $blob_handle) { @throws Safe\IbaseException }
 * @method static void ibase_add_user(resource $service_handle, string $user_name, string $password, string $first_name = null, string $middle_name = null, string $last_name = null) { @throws Safe\IbaseException }
 * @method static mixed ibase_backup(resource $service_handle, string $source_db, string $dest_file, int $options = 0, bool $verbose = false) { @throws Safe\IbaseException }
 * @method static void ibase_blob_cancel(resource $blob_handle) { @throws Safe\IbaseException }
 * @method static string ibase_blob_close(resource $blob_handle) { @throws Safe\IbaseException }
 * @method static resource ibase_blob_create(resource $link_identifier = null) { @throws Safe\IbaseException }
 * @method static string ibase_blob_get(resource $blob_handle, int $len) { @throws Safe\IbaseException }
 * @method static void ibase_close(resource $connection_id = null) { @throws Safe\IbaseException }
 * @method static void ibase_commit_ret(resource $link_or_trans_identifier = null) { @throws Safe\IbaseException }
 * @method static void ibase_commit(resource $link_or_trans_identifier = null) { @throws Safe\IbaseException }
 * @method static resource ibase_connect(string $database = null, string $username = null, string $password = null, string $charset = null, int $buffers = null, int $dialect = null, string $role = null, int $sync = null) { @throws Safe\IbaseException }
 * @method static void ibase_delete_user(resource $service_handle, string $user_name) { @throws Safe\IbaseException }
 * @method static void ibase_drop_db(resource $connection = null) { @throws Safe\IbaseException }
 * @method static void ibase_free_event_handler(resource $event) { @throws Safe\IbaseException }
 * @method static void ibase_free_query(resource $query) { @throws Safe\IbaseException }
 * @method static void ibase_free_result(resource $result_identifier) { @throws Safe\IbaseException }
 * @method static void ibase_maintain_db(resource $service_handle, string $db, int $action, int $argument = 0) { @throws Safe\IbaseException }
 * @method static void ibase_modify_user(resource $service_handle, string $user_name, string $password, string $first_name = null, string $middle_name = null, string $last_name = null) { @throws Safe\IbaseException }
 * @method static void ibase_name_result(resource $result, string $name) { @throws Safe\IbaseException }
 * @method static resource ibase_pconnect(string $database = null, string $username = null, string $password = null, string $charset = null, int $buffers = null, int $dialect = null, string $role = null, int $sync = null) { @throws Safe\IbaseException }
 * @method static mixed ibase_restore(resource $service_handle, string $source_file, string $dest_db, int $options = 0, bool $verbose = false) { @throws Safe\IbaseException }
 * @method static void ibase_rollback_ret(resource $link_or_trans_identifier = null) { @throws Safe\IbaseException }
 * @method static void ibase_rollback(resource $link_or_trans_identifier = null) { @throws Safe\IbaseException }
 * @method static resource ibase_service_attach(string $host, string $dba_username, string $dba_password) { @throws Safe\IbaseException }
 * @method static void ibase_service_detach(resource $service_handle) { @throws Safe\IbaseException }
 * @method static mixed db2_autocommit(resource $connection, int $value = null) { @throws Safe\IbmDb2Exception }
 * @method static void db2_bind_param(resource $stmt, int $parameter_number, string $variable_name, int $parameter_type = null, int $data_type = 0, int $precision = -1, int $scale = 0) { @throws Safe\IbmDb2Exception }
 * @method static object db2_client_info(resource $connection) { @throws Safe\IbmDb2Exception }
 * @method static void db2_close(resource $connection) { @throws Safe\IbmDb2Exception }
 * @method static void db2_commit(resource $connection) { @throws Safe\IbmDb2Exception }
 * @method static void db2_execute(resource $stmt, array $parameters = null) { @throws Safe\IbmDb2Exception }
 * @method static void db2_free_result(resource $stmt) { @throws Safe\IbmDb2Exception }
 * @method static void db2_free_stmt(resource $stmt) { @throws Safe\IbmDb2Exception }
 * @method static string db2_get_option(resource $resource, string $option) { @throws Safe\IbmDb2Exception }
 * @method static void db2_pclose(resource $resource) { @throws Safe\IbmDb2Exception }
 * @method static void db2_rollback(resource $connection) { @throws Safe\IbmDb2Exception }
 * @method static object db2_server_info(resource $connection) { @throws Safe\IbmDb2Exception }
 * @method static void db2_set_option(resource $resource, array $options, int $type) { @throws Safe\IbmDb2Exception }
 * @method static mixed iconv_get_encoding(string $type = "all") { @throws Safe\IconvException }
 * @method static void iconv_set_encoding(string $type, string $charset) { @throws Safe\IconvException }
 * @method static string iconv(string $in_charset, string $out_charset, string $str) { @throws Safe\IconvException }
 * @method static void image2wbmp(resource $image, string $filename = null, int $foreground = null) { @throws Safe\ImageException }
 * @method static resource imageaffine(resource $image, array $affine, array $clip = null) { @throws Safe\ImageException }
 * @method static array imageaffinematrixconcat(array $m1, array $m2) { @throws Safe\ImageException }
 * @method static array imageaffinematrixget(int $type, $options = null) { @throws Safe\ImageException }
 * @method static void imagealphablending(resource $image, bool $blendmode) { @throws Safe\ImageException }
 * @method static void imageantialias(resource $image, bool $enabled) { @throws Safe\ImageException }
 * @method static void imagearc(resource $image, int $cx, int $cy, int $width, int $height, int $start, int $end, int $color) { @throws Safe\ImageException }
 * @method static void imagebmp(resource $image, $to = null, bool $compressed = true) { @throws Safe\ImageException }
 * @method static void imagechar(resource $image, int $font, int $x, int $y, string $c, int $color) { @throws Safe\ImageException }
 * @method static void imagecharup(resource $image, int $font, int $x, int $y, string $c, int $color) { @throws Safe\ImageException }
 * @method static int imagecolorat(resource $image, int $x, int $y) { @throws Safe\ImageException }
 * @method static void imagecolordeallocate(resource $image, int $color) { @throws Safe\ImageException }
 * @method static void imagecolormatch(resource $image1, resource $image2) { @throws Safe\ImageException }
 * @method static void imageconvolution(resource $image, array $matrix, float $div, float $offset) { @throws Safe\ImageException }
 * @method static void imagecopy(resource $dst_im, resource $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_w, int $src_h) { @throws Safe\ImageException }
 * @method static void imagecopymerge(resource $dst_im, resource $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_w, int $src_h, int $pct) { @throws Safe\ImageException }
 * @method static void imagecopymergegray(resource $dst_im, resource $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_w, int $src_h, int $pct) { @throws Safe\ImageException }
 * @method static void imagecopyresampled(resource $dst_image, resource $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_w, int $dst_h, int $src_w, int $src_h) { @throws Safe\ImageException }
 * @method static void imagecopyresized(resource $dst_image, resource $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_w, int $dst_h, int $src_w, int $src_h) { @throws Safe\ImageException }
 * @method static resource imagecreate(int $width, int $height) { @throws Safe\ImageException }
 * @method static resource imagecreatefrombmp(string $filename) { @throws Safe\ImageException }
 * @method static resource imagecreatefromgd(string $filename) { @throws Safe\ImageException }
 * @method static resource imagecreatefromgd2(string $filename) { @throws Safe\ImageException }
 * @method static resource imagecreatefromgd2part(string $filename, int $srcX, int $srcY, int $width, int $height) { @throws Safe\ImageException }
 * @method static resource imagecreatefromgif(string $filename) { @throws Safe\ImageException }
 * @method static resource imagecreatefromjpeg(string $filename) { @throws Safe\ImageException }
 * @method static resource imagecreatefrompng(string $filename) { @throws Safe\ImageException }
 * @method static resource imagecreatefromwbmp(string $filename) { @throws Safe\ImageException }
 * @method static resource imagecreatefromwebp(string $filename) { @throws Safe\ImageException }
 * @method static resource imagecreatefromxbm(string $filename) { @throws Safe\ImageException }
 * @method static resource imagecreatefromxpm(string $filename) { @throws Safe\ImageException }
 * @method static resource imagecreatetruecolor(int $width, int $height) { @throws Safe\ImageException }
 * @method static resource imagecrop(resource $image, array $rect) { @throws Safe\ImageException }
 * @method static resource imagecropauto(resource $image, int $mode = IMG_CROP_DEFAULT, float $threshold = .5, int $color = -1) { @throws Safe\ImageException }
 * @method static void imagedashedline(resource $image, int $x1, int $y1, int $x2, int $y2, int $color) { @throws Safe\ImageException }
 * @method static void imagedestroy(resource $image) { @throws Safe\ImageException }
 * @method static void imageellipse(resource $image, int $cx, int $cy, int $width, int $height, int $color) { @throws Safe\ImageException }
 * @method static void imagefill(resource $image, int $x, int $y, int $color) { @throws Safe\ImageException }
 * @method static void imagefilledarc(resource $image, int $cx, int $cy, int $width, int $height, int $start, int $end, int $color, int $style) { @throws Safe\ImageException }
 * @method static void imagefilledellipse(resource $image, int $cx, int $cy, int $width, int $height, int $color) { @throws Safe\ImageException }
 * @method static void imagefilledpolygon(resource $image, array $points, int $num_points, int $color) { @throws Safe\ImageException }
 * @method static void imagefilledrectangle(resource $image, int $x1, int $y1, int $x2, int $y2, int $color) { @throws Safe\ImageException }
 * @method static void imagefilltoborder(resource $image, int $x, int $y, int $border, int $color) { @throws Safe\ImageException }
 * @method static void imagefilter(resource $image, int $filtertype, int $arg1 = null, int $arg2 = null, int $arg3 = null, int $arg4 = null) { @throws Safe\ImageException }
 * @method static void imageflip(resource $image, int $mode) { @throws Safe\ImageException }
 * @method static void imagegammacorrect(resource $image, float $inputgamma, float $outputgamma) { @throws Safe\ImageException }
 * @method static void imagegd(resource $image, $to = null) { @throws Safe\ImageException }
 * @method static void imagegd2(resource $image, $to = null, int $chunk_size = 128, int $type = IMG_GD2_RAW) { @throws Safe\ImageException }
 * @method static void imagegif(resource $image, $to = null) { @throws Safe\ImageException }
 * @method static resource imagegrabscreen() { @throws Safe\ImageException }
 * @method static resource imagegrabwindow(int $window_handle, int $client_area = 0) { @throws Safe\ImageException }
 * @method static void imagejpeg(resource $image, $to = null, int $quality = -1) { @throws Safe\ImageException }
 * @method static void imagelayereffect(resource $image, int $effect) { @throws Safe\ImageException }
 * @method static void imageline(resource $image, int $x1, int $y1, int $x2, int $y2, int $color) { @throws Safe\ImageException }
 * @method static int imageloadfont(string $file) { @throws Safe\ImageException }
 * @method static void imageopenpolygon(resource $image, array $points, int $num_points, int $color) { @throws Safe\ImageException }
 * @method static void imagepng(resource $image, $to = null, int $quality = -1, int $filters = -1) { @throws Safe\ImageException }
 * @method static void imagepolygon(resource $image, array $points, int $num_points, int $color) { @throws Safe\ImageException }
 * @method static void imagepsencodefont(resource $font_index, string $encodingfile) { @throws Safe\ImageException }
 * @method static void imagepsextendfont(resource $font_index, float $extend) { @throws Safe\ImageException }
 * @method static void imagepsfreefont(resource $font_index) { @throws Safe\ImageException }
 * @method static void imagepsslantfont(resource $font_index, float $slant) { @throws Safe\ImageException }
 * @method static void imagerectangle(resource $image, int $x1, int $y1, int $x2, int $y2, int $color) { @throws Safe\ImageException }
 * @method static resource imagerotate(resource $image, float $angle, int $bgd_color, int $ignore_transparent = 0) { @throws Safe\ImageException }
 * @method static void imagesavealpha(resource $image, bool $saveflag) { @throws Safe\ImageException }
 * @method static resource imagescale(resource $image, int $new_width, int $new_height = -1, int $mode = IMG_BILINEAR_FIXED) { @throws Safe\ImageException }
 * @method static void imagesetbrush(resource $image, resource $brush) { @throws Safe\ImageException }
 * @method static void imagesetclip(resource $im, int $x1, int $y1, int $x2, int $y2) { @throws Safe\ImageException }
 * @method static void imagesetinterpolation(resource $image, int $method = IMG_BILINEAR_FIXED) { @throws Safe\ImageException }
 * @method static void imagesetpixel(resource $image, int $x, int $y, int $color) { @throws Safe\ImageException }
 * @method static void imagesetstyle(resource $image, array $style) { @throws Safe\ImageException }
 * @method static void imagesetthickness(resource $image, int $thickness) { @throws Safe\ImageException }
 * @method static void imagesettile(resource $image, resource $tile) { @throws Safe\ImageException }
 * @method static void imagestring(resource $image, int $font, int $x, int $y, string $string, int $color) { @throws Safe\ImageException }
 * @method static void imagestringup(resource $image, int $font, int $x, int $y, string $string, int $color) { @throws Safe\ImageException }
 * @method static int imagesx(resource $image) { @throws Safe\ImageException }
 * @method static int imagesy(resource $image) { @throws Safe\ImageException }
 * @method static void imagetruecolortopalette(resource $image, bool $dither, int $ncolors) { @throws Safe\ImageException }
 * @method static array imagettfbbox(float $size, float $angle, string $fontfile, string $text) { @throws Safe\ImageException }
 * @method static array imagettftext(resource $image, float $size, float $angle, int $x, int $y, int $color, string $fontfile, string $text) { @throws Safe\ImageException }
 * @method static void imagewbmp(resource $image, $to = null, int $foreground = null) { @throws Safe\ImageException }
 * @method static void imagewebp(resource $image, $to = null, int $quality = 80) { @throws Safe\ImageException }
 * @method static void imagexbm(resource $image, string $filename = null, int $foreground = null) { @throws Safe\ImageException }
 * @method static mixed iptcembed(string $iptcdata, string $jpeg_file_name, int $spool = 0) { @throws Safe\ImageException }
 * @method static array iptcparse(string $iptcblock) { @throws Safe\ImageException }
 * @method static void jpeg2wbmp(string $jpegname, string $wbmpname, int $dest_height, int $dest_width, int $threshold) { @throws Safe\ImageException }
 * @method static void png2wbmp(string $pngname, string $wbmpname, int $dest_height, int $dest_width, int $threshold) { @throws Safe\ImageException }
 * @method static void imap_append(resource $imap_stream, string $mailbox, string $message, string $options = null, string $internal_date = null) { @throws Safe\ImapException }
 * @method static \stdClass imap_check(resource $imap_stream) { @throws Safe\ImapException }
 * @method static void imap_clearflag_full(resource $imap_stream, string $sequence, string $flag, int $options = 0) { @throws Safe\ImapException }
 * @method static void imap_close(resource $imap_stream, int $flag = 0) { @throws Safe\ImapException }
 * @method static void imap_createmailbox(resource $imap_stream, string $mailbox) { @throws Safe\ImapException }
 * @method static void imap_deletemailbox(resource $imap_stream, string $mailbox) { @throws Safe\ImapException }
 * @method static void imap_gc(resource $imap_stream, int $caches) { @throws Safe\ImapException }
 * @method static \stdClass imap_headerinfo(resource $imap_stream, int $msg_number, int $fromlength = 0, int $subjectlength = 0, string $defaulthost = null) { @throws Safe\ImapException }
 * @method static void imap_mail_copy(resource $imap_stream, string $msglist, string $mailbox, int $options = 0) { @throws Safe\ImapException }
 * @method static void imap_mail_move(resource $imap_stream, string $msglist, string $mailbox, int $options = 0) { @throws Safe\ImapException }
 * @method static void imap_mail(string $to, string $subject, string $message, string $additional_headers = null, string $cc = null, string $bcc = null, string $rpath = null) { @throws Safe\ImapException }
 * @method static \stdClass imap_mailboxmsginfo(resource $imap_stream) { @throws Safe\ImapException }
 * @method static string imap_mutf7_to_utf8(string $in) { @throws Safe\ImapException }
 * @method static int imap_num_msg(resource $imap_stream) { @throws Safe\ImapException }
 * @method static resource imap_open(string $mailbox, string $username, string $password, int $options = 0, int $n_retries = 0, array $params = null) { @throws Safe\ImapException }
 * @method static void imap_renamemailbox(resource $imap_stream, string $old_mbox, string $new_mbox) { @throws Safe\ImapException }
 * @method static void imap_savebody(resource $imap_stream, $file, int $msg_number, string $part_number = "", int $options = 0) { @throws Safe\ImapException }
 * @method static void imap_set_quota(resource $imap_stream, string $quota_root, int $quota_limit) { @throws Safe\ImapException }
 * @method static void imap_setacl(resource $imap_stream, string $mailbox, string $id, string $rights) { @throws Safe\ImapException }
 * @method static void imap_setflag_full(resource $imap_stream, string $sequence, string $flag, int $options = NIL) { @throws Safe\ImapException }
 * @method static void imap_subscribe(resource $imap_stream, string $mailbox) { @throws Safe\ImapException }
 * @method static array imap_thread(resource $imap_stream, int $options = SE_FREE) { @throws Safe\ImapException }
 * @method static mixed imap_timeout(int $timeout_type, int $timeout = -1) { @throws Safe\ImapException }
 * @method static void imap_undelete(resource $imap_stream, int $msg_number, int $flags = 0) { @throws Safe\ImapException }
 * @method static void imap_unsubscribe(resource $imap_stream, string $mailbox) { @throws Safe\ImapException }
 * @method static string imap_utf8_to_mutf7(string $in) { @throws Safe\ImapException }
 * @method static mixed assert_options(int $what, $value = null) { @throws Safe\InfoException }
 * @method static void cli_set_process_title(string $title) { @throws Safe\InfoException }
 * @method static void dl(string $library) { @throws Safe\InfoException }
 * @method static int getlastmod() { @throws Safe\InfoException }
 * @method static int getmygid() { @throws Safe\InfoException }
 * @method static int getmyinode() { @throws Safe\InfoException }
 * @method static int getmypid() { @throws Safe\InfoException }
 * @method static int getmyuid() { @throws Safe\InfoException }
 * @method static string ini_get(string $varname) { @throws Safe\InfoException }
 * @method static string ini_set(string $varname, $newvalue) { @throws Safe\InfoException }
 * @method static void phpcredits(int $flag = CREDITS_ALL) { @throws Safe\InfoException }
 * @method static void phpinfo(int $what = INFO_ALL) { @throws Safe\InfoException }
 * @method static void putenv(string $setting) { @throws Safe\InfoException }
 * @method static string set_include_path(string $new_include_path) { @throws Safe\InfoException }
 * @method static void set_time_limit(int $seconds) { @throws Safe\InfoException }
 * @method static void ingres_autocommit(resource $link) { @throws Safe\IngresiiException }
 * @method static void ingres_close(resource $link) { @throws Safe\IngresiiException }
 * @method static void ingres_commit(resource $link) { @throws Safe\IngresiiException }
 * @method static resource ingres_connect(string $database = null, string $username = null, string $password = null, array $options = null) { @throws Safe\IngresiiException }
 * @method static void ingres_execute(resource $result, array $params = null, string $types = null) { @throws Safe\IngresiiException }
 * @method static string ingres_field_name(resource $result, int $index) { @throws Safe\IngresiiException }
 * @method static string ingres_field_type(resource $result, int $index) { @throws Safe\IngresiiException }
 * @method static void ingres_free_result(resource $result) { @throws Safe\IngresiiException }
 * @method static resource ingres_pconnect(string $database = null, string $username = null, string $password = null, array $options = null) { @throws Safe\IngresiiException }
 * @method static void ingres_result_seek(resource $result, int $position) { @throws Safe\IngresiiException }
 * @method static void ingres_rollback(resource $link) { @throws Safe\IngresiiException }
 * @method static void ingres_set_environment(resource $link, array $options) { @throws Safe\IngresiiException }
 * @method static resource inotify_init() { @throws Safe\InotifyException }
 * @method static void inotify_rm_watch(resource $inotify_instance, int $watch_descriptor) { @throws Safe\InotifyException }
 * @method static string json_encode($value, int $options = 0, int $depth = 512) { @throws Safe\JsonException }
 * @method static mixed json_decode(string $json, bool $assoc = false, int $depth = 512, int $options = 0) { @throws Safe\JsonException }
 * @method static resource ldap_add_ext(resource $link_identifier, string $dn, array $entry, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static void ldap_add(resource $link_identifier, string $dn, array $entry, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static resource ldap_bind_ext(resource $link_identifier, string $bind_rdn = null, string $bind_password = null, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static void ldap_bind(resource $link_identifier, string $bind_rdn = null, string $bind_password = null, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static void ldap_control_paged_result(resource $link, int $pagesize, bool $iscritical = false, string $cookie = "") { @throws Safe\LdapException }
 * @method static int ldap_count_entries(resource $link_identifier, resource $result_identifier) { @throws Safe\LdapException }
 * @method static resource ldap_delete_ext(resource $link_identifier, string $dn, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static void ldap_delete(resource $link_identifier, string $dn, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static string ldap_exop_whoami(resource $link) { @throws Safe\LdapException }
 * @method static array ldap_explode_dn(string $dn, int $with_attrib) { @throws Safe\LdapException }
 * @method static string ldap_first_attribute(resource $link_identifier, resource $result_entry_identifier) { @throws Safe\LdapException }
 * @method static resource ldap_first_entry(resource $link_identifier, resource $result_identifier) { @throws Safe\LdapException }
 * @method static void ldap_free_result(resource $result_identifier) { @throws Safe\LdapException }
 * @method static array ldap_get_attributes(resource $link_identifier, resource $result_entry_identifier) { @throws Safe\LdapException }
 * @method static string ldap_get_dn(resource $link_identifier, resource $result_entry_identifier) { @throws Safe\LdapException }
 * @method static array ldap_get_entries(resource $link_identifier, resource $result_identifier) { @throws Safe\LdapException }
 * @method static array ldap_get_values_len(resource $link_identifier, resource $result_entry_identifier, string $attribute) { @throws Safe\LdapException }
 * @method static array ldap_get_values(resource $link_identifier, resource $result_entry_identifier, string $attribute) { @throws Safe\LdapException }
 * @method static resource ldap_list(resource $link_identifier, string $base_dn, string $filter, array $attributes = null, int $attrsonly = 0, int $sizelimit = -1, int $timelimit = -1, int $deref = LDAP_DEREF_NEVER, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static resource ldap_mod_add_ext(resource $link_identifier, string $dn, array $entry, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static void ldap_mod_add(resource $link_identifier, string $dn, array $entry, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static resource ldap_mod_del_ext(resource $link_identifier, string $dn, array $entry, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static void ldap_mod_del(resource $link_identifier, string $dn, array $entry, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static resource ldap_mod_replace_ext(resource $link_identifier, string $dn, array $entry, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static void ldap_mod_replace(resource $link_identifier, string $dn, array $entry, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static void ldap_modify_batch(resource $link_identifier, string $dn, array $entry, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static string ldap_next_attribute(resource $link_identifier, resource $result_entry_identifier) { @throws Safe\LdapException }
 * @method static resource ldap_read(resource $link_identifier, string $base_dn, string $filter, array $attributes = null, int $attrsonly = 0, int $sizelimit = -1, int $timelimit = -1, int $deref = LDAP_DEREF_NEVER, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static resource ldap_rename_ext(resource $link_identifier, string $dn, string $newrdn, string $newparent, bool $deleteoldrdn, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static void ldap_rename(resource $link_identifier, string $dn, string $newrdn, string $newparent, bool $deleteoldrdn, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static void ldap_sasl_bind(resource $link, string $binddn = null, string $password = null, string $sasl_mech = null, string $sasl_realm = null, string $sasl_authc_id = null, string $sasl_authz_id = null, string $props = null) { @throws Safe\LdapException }
 * @method static resource ldap_search($link_identifier, string $base_dn, string $filter, array $attributes = null, int $attrsonly = 0, int $sizelimit = -1, int $timelimit = -1, int $deref = LDAP_DEREF_NEVER, array $serverctrls = null) { @throws Safe\LdapException }
 * @method static void ldap_set_option(resource $link_identifier, int $option, $newval) { @throws Safe\LdapException }
 * @method static void ldap_unbind(resource $link_identifier) { @throws Safe\LdapException }
 * @method static void event_add(resource $event, int $timeout = -1) { @throws Safe\LibeventException }
 * @method static void event_base_loopbreak(resource $event_base) { @throws Safe\LibeventException }
 * @method static void event_base_loopexit(resource $event_base, int $timeout = -1) { @throws Safe\LibeventException }
 * @method static resource event_base_new() { @throws Safe\LibeventException }
 * @method static void event_base_priority_init(resource $event_base, int $npriorities) { @throws Safe\LibeventException }
 * @method static void event_base_reinit(resource $event_base) { @throws Safe\LibeventException }
 * @method static void event_base_set(resource $event, resource $event_base) { @throws Safe\LibeventException }
 * @method static void event_buffer_base_set(resource $bevent, resource $event_base) { @throws Safe\LibeventException }
 * @method static void event_buffer_disable(resource $bevent, int $events) { @throws Safe\LibeventException }
 * @method static void event_buffer_enable(resource $bevent, int $events) { @throws Safe\LibeventException }
 * @method static resource event_buffer_new(resource $stream, $readcb, $writecb, $errorcb, $arg = null) { @throws Safe\LibeventException }
 * @method static void event_buffer_priority_set(resource $bevent, int $priority) { @throws Safe\LibeventException }
 * @method static void event_buffer_set_callback(resource $event, $readcb, $writecb, $errorcb, $arg = null) { @throws Safe\LibeventException }
 * @method static void event_buffer_write(resource $bevent, string $data, int $data_size = -1) { @throws Safe\LibeventException }
 * @method static void event_del(resource $event) { @throws Safe\LibeventException }
 * @method static resource event_new() { @throws Safe\LibeventException }
 * @method static void event_priority_set(resource $event, int $priority) { @throws Safe\LibeventException }
 * @method static void event_set(resource $event, $fd, int $events, $callback, $arg = null) { @throws Safe\LibeventException }
 * @method static void event_timer_set(resource $event, callable $callback, $arg = null) { @throws Safe\LibeventException }
 * @method static \LibXMLError libxml_get_last_error() { @throws Safe\LibxmlException }
 * @method static void libxml_set_external_entity_loader(callable $resolver_function) { @throws Safe\LibxmlException }
 * @method static string lzf_compress(string $data) { @throws Safe\LzfException }
 * @method static string lzf_decompress(string $data) { @throws Safe\LzfException }
 * @method static void mail(string $to, string $subject, string $message, string $additional_headers = null, string $additional_parameters = null) { @throws Safe\MailException }
 * @method static string mailparse_msg_extract_part_file(resource $mimemail, $filename, callable $callbackfunc = null) { @throws Safe\MailparseException }
 * @method static void mailparse_msg_free(resource $mimemail) { @throws Safe\MailparseException }
 * @method static resource mailparse_msg_parse_file(string $filename) { @throws Safe\MailparseException }
 * @method static void mailparse_msg_parse(resource $mimemail, string $data) { @throws Safe\MailparseException }
 * @method static void mailparse_stream_encode(resource $sourcefp, resource $destfp, string $encoding) { @throws Safe\MailparseException }
 * @method static string mb_chr(int $cp, string $encoding = null) { @throws Safe\MbstringException }
 * @method static mixed mb_detect_order($encoding_list = null) { @throws Safe\MbstringException }
 * @method static array mb_encoding_aliases(string $encoding) { @throws Safe\MbstringException }
 * @method static string mb_ereg_replace_callback(string $pattern, callable $callback, string $string, string $option = "msr") { @throws Safe\MbstringException }
 * @method static string mb_ereg_replace(string $pattern, string $replacement, string $string, string $option = "msr") { @throws Safe\MbstringException }
 * @method static array mb_ereg_search_getregs() { @throws Safe\MbstringException }
 * @method static void mb_ereg_search_init(string $string, string $pattern = null, string $option = "msr") { @throws Safe\MbstringException }
 * @method static array mb_ereg_search_regs(string $pattern = null, string $option = "ms") { @throws Safe\MbstringException }
 * @method static void mb_ereg_search_setpos(int $position) { @throws Safe\MbstringException }
 * @method static string mb_eregi_replace(string $pattern, string $replace, string $string, string $option = "msri") { @throws Safe\MbstringException }
 * @method static mixed mb_http_output(string $encoding = null) { @throws Safe\MbstringException }
 * @method static mixed mb_internal_encoding(string $encoding = null) { @throws Safe\MbstringException }
 * @method static int mb_ord(string $str, string $encoding = null) { @throws Safe\MbstringException }
 * @method static mixed mb_regex_encoding(string $encoding = null) { @throws Safe\MbstringException }
 * @method static void mb_send_mail(string $to, string $subject, string $message, string $additional_headers = null, string $additional_parameter = null) { @throws Safe\MbstringException }
 * @method static mixed mb_substitute_character($substchar = null) { @throws Safe\MbstringException }
 * @method static void define(string $name, $value, bool $case_insensitive = false) { @throws Safe\MiscException }
 * @method static mixed highlight_file(string $filename, bool $return = false) { @throws Safe\MiscException }
 * @method static mixed highlight_string(string $str, bool $return = false) { @throws Safe\MiscException }
 * @method static string sapi_windows_cp_conv($in_codepage, $out_codepage, string $subject) { @throws Safe\MiscException }
 * @method static void sapi_windows_cp_set(int $cp) { @throws Safe\MiscException }
 * @method static void sapi_windows_vt100_support(resource $stream, bool $enable = null) { @throws Safe\MiscException }
 * @method static int sleep(int $seconds) { @throws Safe\MiscException }
 * @method static mixed time_nanosleep(int $seconds, int $nanoseconds) { @throws Safe\MiscException }
 * @method static void time_sleep_until(float $timestamp) { @throws Safe\MiscException }
 * @method static int msql_affected_rows(resource $result) { @throws Safe\MsqlException }
 * @method static void msql_close(resource $link_identifier = null) { @throws Safe\MsqlException }
 * @method static resource msql_connect(string $hostname = null) { @throws Safe\MsqlException }
 * @method static void msql_create_db(string $database_name, resource $link_identifier = null) { @throws Safe\MsqlException }
 * @method static void msql_data_seek(resource $result, int $row_number) { @throws Safe\MsqlException }
 * @method static resource msql_db_query(string $database, string $query, resource $link_identifier = null) { @throws Safe\MsqlException }
 * @method static void msql_drop_db(string $database_name, resource $link_identifier = null) { @throws Safe\MsqlException }
 * @method static int msql_field_len(resource $result, int $field_offset) { @throws Safe\MsqlException }
 * @method static string msql_field_name(resource $result, int $field_offset) { @throws Safe\MsqlException }
 * @method static void msql_field_seek(resource $result, int $field_offset) { @throws Safe\MsqlException }
 * @method static int msql_field_table(resource $result, int $field_offset) { @throws Safe\MsqlException }
 * @method static string msql_field_type(resource $result, int $field_offset) { @throws Safe\MsqlException }
 * @method static void msql_free_result(resource $result) { @throws Safe\MsqlException }
 * @method static resource msql_pconnect(string $hostname = null) { @throws Safe\MsqlException }
 * @method static resource msql_query(string $query, resource $link_identifier = null) { @throws Safe\MsqlException }
 * @method static void msql_select_db(string $database_name, resource $link_identifier = null) { @throws Safe\MsqlException }
 * @method static void mssql_close(resource $link_identifier = null) { @throws Safe\MssqlException }
 * @method static resource mssql_connect(string $servername = null, string $username = null, string $password = null, bool $new_link = false) { @throws Safe\MssqlException }
 * @method static void mssql_data_seek(resource $result_identifier, int $row_number) { @throws Safe\MssqlException }
 * @method static int mssql_field_length(resource $result, int $offset = -1) { @throws Safe\MssqlException }
 * @method static string mssql_field_name(resource $result, int $offset = -1) { @throws Safe\MssqlException }
 * @method static void mssql_field_seek(resource $result, int $field_offset) { @throws Safe\MssqlException }
 * @method static string mssql_field_type(resource $result, int $offset = -1) { @throws Safe\MssqlException }
 * @method static void mssql_free_result(resource $result) { @throws Safe\MssqlException }
 * @method static void mssql_free_statement(resource $stmt) { @throws Safe\MssqlException }
 * @method static resource mssql_init(string $sp_name, resource $link_identifier = null) { @throws Safe\MssqlException }
 * @method static resource mssql_pconnect(string $servername = null, string $username = null, string $password = null, bool $new_link = false) { @throws Safe\MssqlException }
 * @method static mixed mssql_query(string $query, resource $link_identifier = null, int $batch_size = 0) { @throws Safe\MssqlException }
 * @method static void mssql_select_db(string $database_name, resource $link_identifier = null) { @throws Safe\MssqlException }
 * @method static void mysql_close(resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static resource mysql_connect(string $server = null, string $username = null, string $password = null, bool $new_link = false, int $client_flags = 0) { @throws Safe\MysqlException }
 * @method static void mysql_create_db(string $database_name, resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static void mysql_data_seek(resource $result, int $row_number) { @throws Safe\MysqlException }
 * @method static string mysql_db_name(resource $result, int $row, $field = null) { @throws Safe\MysqlException }
 * @method static resource mysql_db_query(string $database, string $query, resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static void mysql_drop_db(string $database_name, resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static array mysql_fetch_lengths(resource $result) { @throws Safe\MysqlException }
 * @method static string mysql_field_flags(resource $result, int $field_offset) { @throws Safe\MysqlException }
 * @method static int mysql_field_len(resource $result, int $field_offset) { @throws Safe\MysqlException }
 * @method static string mysql_field_name(resource $result, int $field_offset) { @throws Safe\MysqlException }
 * @method static void mysql_field_seek(resource $result, int $field_offset) { @throws Safe\MysqlException }
 * @method static void mysql_free_result(resource $result) { @throws Safe\MysqlException }
 * @method static string mysql_get_host_info(resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static int mysql_get_proto_info(resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static string mysql_get_server_info(resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static string mysql_info(resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static resource mysql_list_dbs(resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static resource mysql_list_fields(string $database_name, string $table_name, resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static resource mysql_list_processes(resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static resource mysql_list_tables(string $database, resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static int mysql_num_fields(resource $result) { @throws Safe\MysqlException }
 * @method static int mysql_num_rows(resource $result) { @throws Safe\MysqlException }
 * @method static resource mysql_query(string $query, resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static string mysql_real_escape_string(string $unescaped_string, resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static string mysql_result(resource $result, int $row, $field = 0) { @throws Safe\MysqlException }
 * @method static void mysql_select_db(string $database_name, resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static void mysql_set_charset(string $charset, resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static string mysql_tablename(resource $result, int $i) { @throws Safe\MysqlException }
 * @method static int mysql_thread_id(resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static resource mysql_unbuffered_query(string $query, resource $link_identifier = null) { @throws Safe\MysqlException }
 * @method static array mysqli_get_cache_stats() { @throws Safe\MysqliException }
 * @method static array mysqli_get_client_stats() { @throws Safe\MysqliException }
 * @method static array mysqlnd_ms_dump_servers($connection) { @throws Safe\MysqlndMsException }
 * @method static array mysqlnd_ms_fabric_select_global($connection, $table_name) { @throws Safe\MysqlndMsException }
 * @method static array mysqlnd_ms_fabric_select_shard($connection, $table_name, $shard_key) { @throws Safe\MysqlndMsException }
 * @method static array mysqlnd_ms_get_last_used_connection($connection) { @throws Safe\MysqlndMsException }
 * @method static int mysqlnd_ms_xa_gc($connection, string $gtrid = null, bool $ignore_max_retries = null) { @throws Safe\MysqlndMsException }
 * @method static void mysqlnd_qc_clear_cache() { @throws Safe\MysqlndQcException }
 * @method static mixed mysqlnd_qc_set_is_select(string $callback) { @throws Safe\MysqlndQcException }
 * @method static void mysqlnd_qc_set_storage_handler(string $handler) { @throws Safe\MysqlndQcException }
 * @method static void closelog() { @throws Safe\NetworkException }
 * @method static string gethostname() { @throws Safe\NetworkException }
 * @method static int getprotobyname(string $name) { @throws Safe\NetworkException }
 * @method static string getprotobynumber(int $number) { @throws Safe\NetworkException }
 * @method static void header_register_callback(callable $callback) { @throws Safe\NetworkException }
 * @method static string inet_ntop(string $in_addr) { @throws Safe\NetworkException }
 * @method static void openlog(string $ident, int $option, int $facility) { @throws Safe\NetworkException }
 * @method static void syslog(int $priority, string $message) { @throws Safe\NetworkException }
 * @method static void oci_cancel(resource $statement) { @throws Safe\Oci8Exception }
 * @method static void oci_close(resource $connection) { @throws Safe\Oci8Exception }
 * @method static void oci_commit(resource $connection) { @throws Safe\Oci8Exception }
 * @method static resource oci_connect(string $username, string $password, string $connection_string = null, string $character_set = null, int $session_mode = null) { @throws Safe\Oci8Exception }
 * @method static void oci_execute(resource $statement, int $mode = OCI_COMMIT_ON_SUCCESS) { @throws Safe\Oci8Exception }
 * @method static void oci_fetch(resource $statement) { @throws Safe\Oci8Exception }
 * @method static string oci_field_name(resource $statement, $field) { @throws Safe\Oci8Exception }
 * @method static int oci_field_precision(resource $statement, $field) { @throws Safe\Oci8Exception }
 * @method static int oci_field_scale(resource $statement, $field) { @throws Safe\Oci8Exception }
 * @method static int oci_field_size(resource $statement, $field) { @throws Safe\Oci8Exception }
 * @method static int oci_field_type_raw(resource $statement, $field) { @throws Safe\Oci8Exception }
 * @method static mixed oci_field_type(resource $statement, $field) { @throws Safe\Oci8Exception }
 * @method static void oci_free_descriptor(resource $descriptor) { @throws Safe\Oci8Exception }
 * @method static void oci_free_statement(resource $statement) { @throws Safe\Oci8Exception }
 * @method static mixed oci_new_collection(resource $connection, string $tdo, string $schema = null) { @throws Safe\Oci8Exception }
 * @method static resource oci_new_connect(string $username, string $password, string $connection_string = null, string $character_set = null, int $session_mode = null) { @throws Safe\Oci8Exception }
 * @method static resource oci_new_cursor(resource $connection) { @throws Safe\Oci8Exception }
 * @method static mixed oci_new_descriptor(resource $connection, int $type = OCI_DTYPE_LOB) { @throws Safe\Oci8Exception }
 * @method static int oci_num_fields(resource $statement) { @throws Safe\Oci8Exception }
 * @method static int oci_num_rows(resource $statement) { @throws Safe\Oci8Exception }
 * @method static resource oci_parse(resource $connection, string $sql_text) { @throws Safe\Oci8Exception }
 * @method static resource oci_pconnect(string $username, string $password, string $connection_string = null, string $character_set = null, int $session_mode = null) { @throws Safe\Oci8Exception }
 * @method static string oci_result(resource $statement, $field) { @throws Safe\Oci8Exception }
 * @method static void oci_rollback(resource $connection) { @throws Safe\Oci8Exception }
 * @method static string oci_server_version(resource $connection) { @throws Safe\Oci8Exception }
 * @method static void oci_set_action(resource $connection, string $action_name) { @throws Safe\Oci8Exception }
 * @method static void oci_set_call_timeout(resource $connection, int $time_out) { @throws Safe\Oci8Exception }
 * @method static void oci_set_client_identifier(resource $connection, string $client_identifier) { @throws Safe\Oci8Exception }
 * @method static void oci_set_client_info(resource $connection, string $client_info) { @throws Safe\Oci8Exception }
 * @method static void oci_set_db_operation(resource $connection, string $dbop) { @throws Safe\Oci8Exception }
 * @method static void oci_set_edition(string $edition) { @throws Safe\Oci8Exception }
 * @method static void oci_set_module_name(resource $connection, string $module_name) { @throws Safe\Oci8Exception }
 * @method static void oci_set_prefetch(resource $statement, int $rows) { @throws Safe\Oci8Exception }
 * @method static string oci_statement_type(resource $statement) { @throws Safe\Oci8Exception }
 * @method static void oci_unregister_taf_callback(resource $connection) { @throws Safe\Oci8Exception }
 * @method static void opcache_compile_file(string $file) { @throws Safe\OpcacheException }
 * @method static array opcache_get_status(bool $get_scripts = true) { @throws Safe\OpcacheException }
 * @method static int openssl_cipher_iv_length(string $method) { @throws Safe\OpensslException }
 * @method static void openssl_csr_export_to_file($csr, string $outfilename, bool $notext = true) { @throws Safe\OpensslException }
 * @method static array openssl_csr_get_subject($csr, bool $use_shortnames = true) { @throws Safe\OpensslException }
 * @method static resource openssl_csr_sign($csr, $cacert, $priv_key, int $days, array $configargs = null, int $serial = 0) { @throws Safe\OpensslException }
 * @method static string openssl_decrypt(string $data, string $method, string $key, int $options = 0, string $iv = "", string $tag = "", string $aad = "") { @throws Safe\OpensslException }
 * @method static string openssl_dh_compute_key(string $pub_key, resource $dh_key) { @throws Safe\OpensslException }
 * @method static string openssl_digest(string $data, string $method, bool $raw_output = false) { @throws Safe\OpensslException }
 * @method static string openssl_pbkdf2(string $password, string $salt, int $key_length, int $iterations, string $digest_algorithm = "sha1") { @throws Safe\OpensslException }
 * @method static void openssl_pkcs12_export_to_file($x509, string $filename, $priv_key, string $pass, array $args = null) { @throws Safe\OpensslException }
 * @method static void openssl_pkcs7_decrypt(string $infilename, string $outfilename, $recipcert, $recipkey = null) { @throws Safe\OpensslException }
 * @method static void openssl_pkcs7_encrypt(string $infile, string $outfile, $recipcerts, array $headers, int $flags = 0, int $cipherid = OPENSSL_CIPHER_RC2_40) { @throws Safe\OpensslException }
 * @method static void openssl_pkcs7_sign(string $infilename, string $outfilename, $signcert, $privkey, array $headers, int $flags = PKCS7_DETACHED, string $extracerts = null) { @throws Safe\OpensslException }
 * @method static void openssl_pkey_export_to_file($key, string $outfilename, string $passphrase = null, array $configargs = null) { @throws Safe\OpensslException }
 * @method static resource openssl_pkey_get_private(string $key, string $passphrase = "") { @throws Safe\OpensslException }
 * @method static resource openssl_pkey_get_public($certificate) { @throws Safe\OpensslException }
 * @method static resource openssl_pkey_new(array $configargs = null) { @throws Safe\OpensslException }
 * @method static void openssl_x509_export_to_file($x509, string $outfilename, bool $notext = true) { @throws Safe\OpensslException }
 * @method static string openssl_x509_fingerprint($x509, string $hash_algorithm = "sha1", bool $raw_output = false) { @throws Safe\OpensslException }
 * @method static resource openssl_x509_read($x509certdata) { @throws Safe\OpensslException }
 * @method static void ob_end_clean() { @throws Safe\OutcontrolException }
 * @method static void ob_end_flush() { @throws Safe\OutcontrolException }
 * @method static void output_add_rewrite_var(string $name, string $value) { @throws Safe\OutcontrolException }
 * @method static void output_reset_rewrite_vars() { @throws Safe\OutcontrolException }
 * @method static string password_hash(string $password, int $algo, array $options = null) { @throws Safe\PasswordException }
 * @method static void pcntl_exec(string $path, array $args = null, array $envs = null) { @throws Safe\PcntlException }
 * @method static int pcntl_getpriority(int $pid = null, int $process_identifier = PRIO_PROCESS) { @throws Safe\PcntlException }
 * @method static void pcntl_setpriority(int $priority, int $pid = null, int $process_identifier = PRIO_PROCESS) { @throws Safe\PcntlException }
 * @method static void pcntl_signal_dispatch() { @throws Safe\PcntlException }
 * @method static string pcntl_strerror(int $errno) { @throws Safe\PcntlException }
 * @method static array preg_grep(string $pattern, array $input, int $flags = 0) { @throws Safe\PcreException }
 * @method static array preg_split(string $pattern, string $subject, int $limit = -1, int $flags = 0) { @throws Safe\PcreException }
 * @method static void PDF_activate_item(resource $pdfdoc, int $id) { @throws Safe\PdfException }
 * @method static void PDF_add_locallink(resource $pdfdoc, float $lowerleftx, float $lowerlefty, float $upperrightx, float $upperrighty, int $page, string $dest) { @throws Safe\PdfException }
 * @method static void PDF_add_nameddest(resource $pdfdoc, string $name, string $optlist) { @throws Safe\PdfException }
 * @method static void PDF_add_note(resource $pdfdoc, float $llx, float $lly, float $urx, float $ury, string $contents, string $title, string $icon, int $open) { @throws Safe\PdfException }
 * @method static void PDF_add_pdflink(resource $pdfdoc, float $bottom_left_x, float $bottom_left_y, float $up_right_x, float $up_right_y, string $filename, int $page, string $dest) { @throws Safe\PdfException }
 * @method static void PDF_add_thumbnail(resource $pdfdoc, int $image) { @throws Safe\PdfException }
 * @method static void PDF_add_weblink(resource $pdfdoc, float $lowerleftx, float $lowerlefty, float $upperrightx, float $upperrighty, string $url) { @throws Safe\PdfException }
 * @method static void PDF_attach_file(resource $pdfdoc, float $llx, float $lly, float $urx, float $ury, string $filename, string $description, string $author, string $mimetype, string $icon) { @throws Safe\PdfException }
 * @method static void PDF_begin_layer(resource $pdfdoc, int $layer) { @throws Safe\PdfException }
 * @method static void PDF_begin_page_ext(resource $pdfdoc, float $width, float $height, string $optlist) { @throws Safe\PdfException }
 * @method static void PDF_begin_page(resource $pdfdoc, float $width, float $height) { @throws Safe\PdfException }
 * @method static void PDF_circle(resource $pdfdoc, float $x, float $y, float $r) { @throws Safe\PdfException }
 * @method static void PDF_clip(resource $p) { @throws Safe\PdfException }
 * @method static void PDF_close_pdi_page(resource $p, int $page) { @throws Safe\PdfException }
 * @method static void PDF_close_pdi(resource $p, int $doc) { @throws Safe\PdfException }
 * @method static void PDF_close(resource $p) { @throws Safe\PdfException }
 * @method static void PDF_closepath_fill_stroke(resource $p) { @throws Safe\PdfException }
 * @method static void PDF_closepath_stroke(resource $p) { @throws Safe\PdfException }
 * @method static void PDF_closepath(resource $p) { @throws Safe\PdfException }
 * @method static void PDF_concat(resource $p, float $a, float $b, float $c, float $d, float $e, float $f) { @throws Safe\PdfException }
 * @method static void PDF_continue_text(resource $p, string $text) { @throws Safe\PdfException }
 * @method static void PDF_curveto(resource $p, float $x1, float $y1, float $x2, float $y2, float $x3, float $y3) { @throws Safe\PdfException }
 * @method static void PDF_delete(resource $pdfdoc) { @throws Safe\PdfException }
 * @method static void PDF_end_layer(resource $pdfdoc) { @throws Safe\PdfException }
 * @method static void PDF_end_page_ext(resource $pdfdoc, string $optlist) { @throws Safe\PdfException }
 * @method static void PDF_end_page(resource $p) { @throws Safe\PdfException }
 * @method static void PDF_end_pattern(resource $p) { @throws Safe\PdfException }
 * @method static void PDF_end_template(resource $p) { @throws Safe\PdfException }
 * @method static void PDF_fill_stroke(resource $p) { @throws Safe\PdfException }
 * @method static void PDF_fill(resource $p) { @throws Safe\PdfException }
 * @method static void PDF_fit_image(resource $pdfdoc, int $image, float $x, float $y, string $optlist) { @throws Safe\PdfException }
 * @method static void PDF_fit_pdi_page(resource $pdfdoc, int $page, float $x, float $y, string $optlist) { @throws Safe\PdfException }
 * @method static void PDF_fit_textline(resource $pdfdoc, string $text, float $x, float $y, string $optlist) { @throws Safe\PdfException }
 * @method static void PDF_initgraphics(resource $p) { @throws Safe\PdfException }
 * @method static void PDF_lineto(resource $p, float $x, float $y) { @throws Safe\PdfException }
 * @method static int PDF_makespotcolor(resource $p, string $spotname) { @throws Safe\PdfException }
 * @method static void PDF_moveto(resource $p, float $x, float $y) { @throws Safe\PdfException }
 * @method static void PDF_open_file(resource $p, string $filename) { @throws Safe\PdfException }
 * @method static void PDF_place_image(resource $pdfdoc, int $image, float $x, float $y, float $scale) { @throws Safe\PdfException }
 * @method static void PDF_place_pdi_page(resource $pdfdoc, int $page, float $x, float $y, float $sx, float $sy) { @throws Safe\PdfException }
 * @method static void PDF_rect(resource $p, float $x, float $y, float $width, float $height) { @throws Safe\PdfException }
 * @method static void PDF_restore(resource $p) { @throws Safe\PdfException }
 * @method static void PDF_rotate(resource $p, float $phi) { @throws Safe\PdfException }
 * @method static void PDF_save(resource $p) { @throws Safe\PdfException }
 * @method static void PDF_scale(resource $p, float $sx, float $sy) { @throws Safe\PdfException }
 * @method static void PDF_set_border_color(resource $p, float $red, float $green, float $blue) { @throws Safe\PdfException }
 * @method static void PDF_set_border_dash(resource $pdfdoc, float $black, float $white) { @throws Safe\PdfException }
 * @method static void PDF_set_border_style(resource $pdfdoc, string $style, float $width) { @throws Safe\PdfException }
 * @method static void PDF_set_info(resource $p, string $key, string $value) { @throws Safe\PdfException }
 * @method static void PDF_set_layer_dependency(resource $pdfdoc, string $type, string $optlist) { @throws Safe\PdfException }
 * @method static void PDF_set_parameter(resource $p, string $key, string $value) { @throws Safe\PdfException }
 * @method static void PDF_set_text_pos(resource $p, float $x, float $y) { @throws Safe\PdfException }
 * @method static void PDF_set_value(resource $p, string $key, float $value) { @throws Safe\PdfException }
 * @method static void PDF_setcolor(resource $p, string $fstype, string $colorspace, float $c1, float $c2, float $c3, float $c4) { @throws Safe\PdfException }
 * @method static void PDF_setdash(resource $pdfdoc, float $b, float $w) { @throws Safe\PdfException }
 * @method static void PDF_setdashpattern(resource $pdfdoc, string $optlist) { @throws Safe\PdfException }
 * @method static void PDF_setflat(resource $pdfdoc, float $flatness) { @throws Safe\PdfException }
 * @method static void PDF_setfont(resource $pdfdoc, int $font, float $fontsize) { @throws Safe\PdfException }
 * @method static void PDF_setgray_fill(resource $p, float $g) { @throws Safe\PdfException }
 * @method static void PDF_setgray_stroke(resource $p, float $g) { @throws Safe\PdfException }
 * @method static void PDF_setgray(resource $p, float $g) { @throws Safe\PdfException }
 * @method static void PDF_setlinejoin(resource $p, int $value) { @throws Safe\PdfException }
 * @method static void PDF_setlinewidth(resource $p, float $width) { @throws Safe\PdfException }
 * @method static void PDF_setmatrix(resource $p, float $a, float $b, float $c, float $d, float $e, float $f) { @throws Safe\PdfException }
 * @method static void PDF_setmiterlimit(resource $pdfdoc, float $miter) { @throws Safe\PdfException }
 * @method static void PDF_setrgbcolor_fill(resource $p, float $red, float $green, float $blue) { @throws Safe\PdfException }
 * @method static void PDF_setrgbcolor_stroke(resource $p, float $red, float $green, float $blue) { @throws Safe\PdfException }
 * @method static void PDF_setrgbcolor(resource $p, float $red, float $green, float $blue) { @throws Safe\PdfException }
 * @method static void PDF_show_xy(resource $p, string $text, float $x, float $y) { @throws Safe\PdfException }
 * @method static void PDF_show(resource $pdfdoc, string $text) { @throws Safe\PdfException }
 * @method static void PDF_skew(resource $p, float $alpha, float $beta) { @throws Safe\PdfException }
 * @method static void PDF_stroke(resource $p) { @throws Safe\PdfException }
 * @method static void pg_cancel_query(resource $connection) { @throws Safe\PgsqlException }
 * @method static string pg_client_encoding(resource $connection = null) { @throws Safe\PgsqlException }
 * @method static void pg_close(resource $connection = null) { @throws Safe\PgsqlException }
 * @method static resource pg_connect(string $connection_string, int $connect_type = null) { @throws Safe\PgsqlException }
 * @method static void pg_connection_reset(resource $connection) { @throws Safe\PgsqlException }
 * @method static array pg_convert(resource $connection, string $table_name, array $assoc_array, int $options = 0) { @throws Safe\PgsqlException }
 * @method static void pg_copy_from(resource $connection, string $table_name, array $rows, string $delimiter = null, string $null_as = null) { @throws Safe\PgsqlException }
 * @method static array pg_copy_to(resource $connection, string $table_name, string $delimiter = null, string $null_as = null) { @throws Safe\PgsqlException }
 * @method static string pg_dbname(resource $connection = null) { @throws Safe\PgsqlException }
 * @method static mixed pg_delete(resource $connection, string $table_name, array $assoc_array, int $options = PGSQL_DML_EXEC) { @throws Safe\PgsqlException }
 * @method static void pg_end_copy(resource $connection = null) { @throws Safe\PgsqlException }
 * @method static resource pg_execute(resource $connection = null, string $stmtname = null, array $params = null) { @throws Safe\PgsqlException }
 * @method static string pg_field_name(resource $result, int $field_number) { @throws Safe\PgsqlException }
 * @method static mixed pg_field_table(resource $result, int $field_number, bool $oid_only = false) { @throws Safe\PgsqlException }
 * @method static string pg_field_type(resource $result, int $field_number) { @throws Safe\PgsqlException }
 * @method static mixed pg_flush(resource $connection) { @throws Safe\PgsqlException }
 * @method static void pg_free_result(resource $result) { @throws Safe\PgsqlException }
 * @method static string pg_host(resource $connection = null) { @throws Safe\PgsqlException }
 * @method static mixed pg_insert(resource $connection, string $table_name, array $assoc_array, int $options = PGSQL_DML_EXEC) { @throws Safe\PgsqlException }
 * @method static string pg_last_error(resource $connection = null) { @throws Safe\PgsqlException }
 * @method static string pg_last_notice(resource $connection, int $option = PGSQL_NOTICE_LAST) { @throws Safe\PgsqlException }
 * @method static string pg_last_oid(resource $result) { @throws Safe\PgsqlException }
 * @method static void pg_lo_close(resource $large_object) { @throws Safe\PgsqlException }
 * @method static void pg_lo_export(resource $connection = null, int $oid = null, string $pathname = null) { @throws Safe\PgsqlException }
 * @method static int pg_lo_import(resource $connection = null, string $pathname = null, $object_id = null) { @throws Safe\PgsqlException }
 * @method static resource pg_lo_open(resource $connection, int $oid, string $mode) { @throws Safe\PgsqlException }
 * @method static int pg_lo_read_all(resource $large_object) { @throws Safe\PgsqlException }
 * @method static string pg_lo_read(resource $large_object, int $len = 8192) { @throws Safe\PgsqlException }
 * @method static void pg_lo_seek(resource $large_object, int $offset, int $whence = PGSQL_SEEK_CUR) { @throws Safe\PgsqlException }
 * @method static void pg_lo_truncate(resource $large_object, int $size) { @throws Safe\PgsqlException }
 * @method static void pg_lo_unlink(resource $connection, int $oid) { @throws Safe\PgsqlException }
 * @method static int pg_lo_write(resource $large_object, string $data, int $len = null) { @throws Safe\PgsqlException }
 * @method static array pg_meta_data(resource $connection, string $table_name, bool $extended = false) { @throws Safe\PgsqlException }
 * @method static string pg_options(resource $connection = null) { @throws Safe\PgsqlException }
 * @method static string pg_parameter_status(resource $connection = null, string $param_name = null) { @throws Safe\PgsqlException }
 * @method static resource pg_pconnect(string $connection_string, int $connect_type = null) { @throws Safe\PgsqlException }
 * @method static void pg_ping(resource $connection = null) { @throws Safe\PgsqlException }
 * @method static int pg_port(resource $connection = null) { @throws Safe\PgsqlException }
 * @method static resource pg_prepare(resource $connection = null, string $stmtname = null, string $query = null) { @throws Safe\PgsqlException }
 * @method static void pg_put_line(resource $connection = null, string $data = null) { @throws Safe\PgsqlException }
 * @method static resource pg_query_params(resource $connection = null, string $query = null, array $params = null) { @throws Safe\PgsqlException }
 * @method static resource pg_query(resource $connection = null, string $query = null) { @throws Safe\PgsqlException }
 * @method static ?string pg_result_error_field(resource $result, int $fieldcode) { @throws Safe\PgsqlException }
 * @method static void pg_result_seek(resource $result, int $offset) { @throws Safe\PgsqlException }
 * @method static mixed pg_select(resource $connection, string $table_name, array $assoc_array, int $options = PGSQL_DML_EXEC, int $result_type = PGSQL_ASSOC) { @throws Safe\PgsqlException }
 * @method static void pg_send_execute(resource $connection, string $stmtname, array $params) { @throws Safe\PgsqlException }
 * @method static void pg_send_prepare(resource $connection, string $stmtname, string $query) { @throws Safe\PgsqlException }
 * @method static void pg_send_query_params(resource $connection, string $query, array $params) { @throws Safe\PgsqlException }
 * @method static void pg_send_query(resource $connection, string $query) { @throws Safe\PgsqlException }
 * @method static resource pg_socket(resource $connection) { @throws Safe\PgsqlException }
 * @method static void pg_trace(string $pathname, string $mode = "w", resource $connection = null) { @throws Safe\PgsqlException }
 * @method static string pg_tty(resource $connection = null) { @throws Safe\PgsqlException }
 * @method static mixed pg_update(resource $connection, string $table_name, array $data, array $condition, int $options = PGSQL_DML_EXEC) { @throws Safe\PgsqlException }
 * @method static array pg_version(resource $connection = null) { @throws Safe\PgsqlException }
 * @method static void posix_access(string $file, int $mode = POSIX_F_OK) { @throws Safe\PosixException }
 * @method static array posix_getgrnam(string $name) { @throws Safe\PosixException }
 * @method static int posix_getpgid(int $pid) { @throws Safe\PosixException }
 * @method static void posix_initgroups(string $name, int $base_group_id) { @throws Safe\PosixException }
 * @method static void posix_kill(int $pid, int $sig) { @throws Safe\PosixException }
 * @method static void posix_mkfifo(string $pathname, int $mode) { @throws Safe\PosixException }
 * @method static void posix_mknod(string $pathname, int $mode, int $major = 0, int $minor = 0) { @throws Safe\PosixException }
 * @method static void posix_setegid(int $gid) { @throws Safe\PosixException }
 * @method static void posix_seteuid(int $uid) { @throws Safe\PosixException }
 * @method static void posix_setgid(int $gid) { @throws Safe\PosixException }
 * @method static void posix_setpgid(int $pid, int $pgid) { @throws Safe\PosixException }
 * @method static void posix_setrlimit(int $resource, int $softlimit, int $hardlimit) { @throws Safe\PosixException }
 * @method static void posix_setuid(int $uid) { @throws Safe\PosixException }
 * @method static void ps_add_launchlink(resource $psdoc, float $llx, float $lly, float $urx, float $ury, string $filename) { @throws Safe\PsException }
 * @method static void ps_add_locallink(resource $psdoc, float $llx, float $lly, float $urx, float $ury, int $page, string $dest) { @throws Safe\PsException }
 * @method static void ps_add_note(resource $psdoc, float $llx, float $lly, float $urx, float $ury, string $contents, string $title, string $icon, int $open) { @throws Safe\PsException }
 * @method static void ps_add_pdflink(resource $psdoc, float $llx, float $lly, float $urx, float $ury, string $filename, int $page, string $dest) { @throws Safe\PsException }
 * @method static void ps_add_weblink(resource $psdoc, float $llx, float $lly, float $urx, float $ury, string $url) { @throws Safe\PsException }
 * @method static void ps_arc(resource $psdoc, float $x, float $y, float $radius, float $alpha, float $beta) { @throws Safe\PsException }
 * @method static void ps_arcn(resource $psdoc, float $x, float $y, float $radius, float $alpha, float $beta) { @throws Safe\PsException }
 * @method static void ps_begin_page(resource $psdoc, float $width, float $height) { @throws Safe\PsException }
 * @method static int ps_begin_pattern(resource $psdoc, float $width, float $height, float $xstep, float $ystep, int $painttype) { @throws Safe\PsException }
 * @method static int ps_begin_template(resource $psdoc, float $width, float $height) { @throws Safe\PsException }
 * @method static void ps_circle(resource $psdoc, float $x, float $y, float $radius) { @throws Safe\PsException }
 * @method static void ps_clip(resource $psdoc) { @throws Safe\PsException }
 * @method static void ps_close_image(resource $psdoc, int $imageid) { @throws Safe\PsException }
 * @method static void ps_close(resource $psdoc) { @throws Safe\PsException }
 * @method static void ps_closepath_stroke(resource $psdoc) { @throws Safe\PsException }
 * @method static void ps_closepath(resource $psdoc) { @throws Safe\PsException }
 * @method static void ps_continue_text(resource $psdoc, string $text) { @throws Safe\PsException }
 * @method static void ps_curveto(resource $psdoc, float $x1, float $y1, float $x2, float $y2, float $x3, float $y3) { @throws Safe\PsException }
 * @method static void ps_delete(resource $psdoc) { @throws Safe\PsException }
 * @method static void ps_end_page(resource $psdoc) { @throws Safe\PsException }
 * @method static void ps_end_pattern(resource $psdoc) { @throws Safe\PsException }
 * @method static void ps_end_template(resource $psdoc) { @throws Safe\PsException }
 * @method static void ps_fill_stroke(resource $psdoc) { @throws Safe\PsException }
 * @method static void ps_fill(resource $psdoc) { @throws Safe\PsException }
 * @method static string ps_get_parameter(resource $psdoc, string $name, float $modifier = null) { @throws Safe\PsException }
 * @method static array ps_hyphenate(resource $psdoc, string $text) { @throws Safe\PsException }
 * @method static void ps_include_file(resource $psdoc, string $file) { @throws Safe\PsException }
 * @method static void ps_lineto(resource $psdoc, float $x, float $y) { @throws Safe\PsException }
 * @method static void ps_moveto(resource $psdoc, float $x, float $y) { @throws Safe\PsException }
 * @method static resource ps_new() { @throws Safe\PsException }
 * @method static void ps_open_file(resource $psdoc, string $filename = null) { @throws Safe\PsException }
 * @method static void ps_place_image(resource $psdoc, int $imageid, float $x, float $y, float $scale) { @throws Safe\PsException }
 * @method static void ps_rect(resource $psdoc, float $x, float $y, float $width, float $height) { @throws Safe\PsException }
 * @method static void ps_restore(resource $psdoc) { @throws Safe\PsException }
 * @method static void ps_rotate(resource $psdoc, float $rot) { @throws Safe\PsException }
 * @method static void ps_save(resource $psdoc) { @throws Safe\PsException }
 * @method static void ps_scale(resource $psdoc, float $x, float $y) { @throws Safe\PsException }
 * @method static void ps_set_border_color(resource $psdoc, float $red, float $green, float $blue) { @throws Safe\PsException }
 * @method static void ps_set_border_dash(resource $psdoc, float $black, float $white) { @throws Safe\PsException }
 * @method static void ps_set_border_style(resource $psdoc, string $style, float $width) { @throws Safe\PsException }
 * @method static void ps_set_info(resource $p, string $key, string $val) { @throws Safe\PsException }
 * @method static void ps_set_parameter(resource $psdoc, string $name, string $value) { @throws Safe\PsException }
 * @method static void ps_set_text_pos(resource $psdoc, float $x, float $y) { @throws Safe\PsException }
 * @method static void ps_set_value(resource $psdoc, string $name, float $value) { @throws Safe\PsException }
 * @method static void ps_setcolor(resource $psdoc, string $type, string $colorspace, float $c1, float $c2, float $c3, float $c4) { @throws Safe\PsException }
 * @method static void ps_setdash(resource $psdoc, float $on, float $off) { @throws Safe\PsException }
 * @method static void ps_setflat(resource $psdoc, float $value) { @throws Safe\PsException }
 * @method static void ps_setfont(resource $psdoc, int $fontid, float $size) { @throws Safe\PsException }
 * @method static void ps_setgray(resource $psdoc, float $gray) { @throws Safe\PsException }
 * @method static void ps_setlinecap(resource $psdoc, int $type) { @throws Safe\PsException }
 * @method static void ps_setlinejoin(resource $psdoc, int $type) { @throws Safe\PsException }
 * @method static void ps_setlinewidth(resource $psdoc, float $width) { @throws Safe\PsException }
 * @method static void ps_setmiterlimit(resource $psdoc, float $value) { @throws Safe\PsException }
 * @method static void ps_setoverprintmode(resource $psdoc, int $mode) { @throws Safe\PsException }
 * @method static void ps_setpolydash(resource $psdoc, float $arr) { @throws Safe\PsException }
 * @method static int ps_shading_pattern(resource $psdoc, int $shadingid, string $optlist) { @throws Safe\PsException }
 * @method static int ps_shading(resource $psdoc, string $type, float $x0, float $y0, float $x1, float $y1, float $c1, float $c2, float $c3, float $c4, string $optlist) { @throws Safe\PsException }
 * @method static void ps_shfill(resource $psdoc, int $shadingid) { @throws Safe\PsException }
 * @method static void ps_show_xy(resource $psdoc, string $text, float $x, float $y) { @throws Safe\PsException }
 * @method static void ps_show_xy2(resource $psdoc, string $text, int $len, float $xcoor, float $ycoor) { @throws Safe\PsException }
 * @method static void ps_show(resource $psdoc, string $text) { @throws Safe\PsException }
 * @method static void ps_show2(resource $psdoc, string $text, int $len) { @throws Safe\PsException }
 * @method static void ps_stroke(resource $psdoc) { @throws Safe\PsException }
 * @method static void ps_symbol(resource $psdoc, int $ord) { @throws Safe\PsException }
 * @method static void ps_translate(resource $psdoc, float $x, float $y) { @throws Safe\PsException }
 * @method static void pspell_add_to_personal(int $dictionary_link, string $word) { @throws Safe\PspellException }
 * @method static void pspell_add_to_session(int $dictionary_link, string $word) { @throws Safe\PspellException }
 * @method static void pspell_clear_session(int $dictionary_link) { @throws Safe\PspellException }
 * @method static int pspell_config_create(string $language, string $spelling = null, string $jargon = null, string $encoding = null) { @throws Safe\PspellException }
 * @method static void pspell_config_data_dir(int $conf, string $directory) { @throws Safe\PspellException }
 * @method static void pspell_config_dict_dir(int $conf, string $directory) { @throws Safe\PspellException }
 * @method static void pspell_config_ignore(int $dictionary_link, int $n) { @throws Safe\PspellException }
 * @method static void pspell_config_mode(int $dictionary_link, int $mode) { @throws Safe\PspellException }
 * @method static void pspell_config_personal(int $dictionary_link, string $file) { @throws Safe\PspellException }
 * @method static void pspell_config_repl(int $dictionary_link, string $file) { @throws Safe\PspellException }
 * @method static void pspell_config_runtogether(int $dictionary_link, bool $flag) { @throws Safe\PspellException }
 * @method static void pspell_config_save_repl(int $dictionary_link, bool $flag) { @throws Safe\PspellException }
 * @method static int pspell_new_config(int $config) { @throws Safe\PspellException }
 * @method static int pspell_new(string $language, string $spelling = null, string $jargon = null, string $encoding = null, int $mode = 0) { @throws Safe\PspellException }
 * @method static void pspell_save_wordlist(int $dictionary_link) { @throws Safe\PspellException }
 * @method static void pspell_store_replacement(int $dictionary_link, string $misspelled, string $correct) { @throws Safe\PspellException }
 * @method static void readline_add_history(string $line) { @throws Safe\ReadlineException }
 * @method static void readline_callback_handler_install(string $prompt, callable $callback) { @throws Safe\ReadlineException }
 * @method static void readline_clear_history() { @throws Safe\ReadlineException }
 * @method static void readline_completion_function(callable $function) { @throws Safe\ReadlineException }
 * @method static void readline_read_history(string $filename = null) { @throws Safe\ReadlineException }
 * @method static void readline_write_history(string $filename = null) { @throws Safe\ReadlineException }
 * @method static void rrd_create(string $filename, array $options) { @throws Safe\RrdException }
 * @method static void rrd_restore(string $xml_file, string $rrd_file, array $options = null) { @throws Safe\RrdException }
 * @method static void rrd_tune(string $filename, array $options) { @throws Safe\RrdException }
 * @method static void rrd_update(string $filename, array $options) { @throws Safe\RrdException }
 * @method static void msg_queue_exists(int $key) { @throws Safe\SemException }
 * @method static void msg_remove_queue(resource $queue) { @throws Safe\SemException }
 * @method static void msg_set_queue(resource $queue, array $data) { @throws Safe\SemException }
 * @method static void sem_acquire(resource $sem_identifier, bool $nowait = false) { @throws Safe\SemException }
 * @method static resource sem_get(int $key, int $max_acquire = 1, int $perm = 0666, int $auto_release = 1) { @throws Safe\SemException }
 * @method static void sem_release(resource $sem_identifier) { @throws Safe\SemException }
 * @method static void sem_remove(resource $sem_identifier) { @throws Safe\SemException }
 * @method static void shm_put_var(resource $shm_identifier, int $variable_key, $variable) { @throws Safe\SemException }
 * @method static void shm_remove_var(resource $shm_identifier, int $variable_key) { @throws Safe\SemException }
 * @method static void shm_remove(resource $shm_identifier) { @throws Safe\SemException }
 * @method static void session_abort() { @throws Safe\SessionException }
 * @method static void session_decode(string $data) { @throws Safe\SessionException }
 * @method static void session_destroy() { @throws Safe\SessionException }
 * @method static void session_regenerate_id(bool $delete_old_session = false) { @throws Safe\SessionException }
 * @method static void session_reset() { @throws Safe\SessionException }
 * @method static void session_start(array $options = null) { @throws Safe\SessionException }
 * @method static void session_unset() { @throws Safe\SessionException }
 * @method static void session_write_close() { @throws Safe\SessionException }
 * @method static void shmop_delete(resource $shmid) { @throws Safe\ShmopException }
 * @method static string shmop_read(resource $shmid, int $start, int $count) { @throws Safe\ShmopException }
 * @method static int shmop_write(resource $shmid, string $data, int $offset) { @throws Safe\ShmopException }
 * @method static \SimpleXMLElement simplexml_import_dom(\DOMNode $node, string $class_name = "SimpleXMLElement") { @throws Safe\SimplexmlException }
 * @method static \SimpleXMLElement simplexml_load_file(string $filename, string $class_name = "SimpleXMLElement", int $options = 0, string $ns = "", bool $is_prefix = false) { @throws Safe\SimplexmlException }
 * @method static \SimpleXMLElement simplexml_load_string(string $data, string $class_name = "SimpleXMLElement", int $options = 0, string $ns = "", bool $is_prefix = false) { @throws Safe\SimplexmlException }
 * @method static resource socket_accept(resource $socket) { @throws Safe\SocketsException }
 * @method static resource socket_addrinfo_bind(resource $addr) { @throws Safe\SocketsException }
 * @method static resource socket_addrinfo_connect(resource $addr) { @throws Safe\SocketsException }
 * @method static void socket_bind(resource $socket, string $address, int $port = 0) { @throws Safe\SocketsException }
 * @method static void socket_connect(resource $socket, string $address, int $port = 0) { @throws Safe\SocketsException }
 * @method static resource socket_create_listen(int $port, int $backlog = 128) { @throws Safe\SocketsException }
 * @method static resource socket_create(int $domain, int $type, int $protocol) { @throws Safe\SocketsException }
 * @method static resource socket_export_stream(resource $socket) { @throws Safe\SocketsException }
 * @method static mixed socket_get_option(resource $socket, int $level, int $optname) { @throws Safe\SocketsException }
 * @method static resource socket_import_stream(resource $stream) { @throws Safe\SocketsException }
 * @method static void socket_listen(resource $socket, int $backlog = 0) { @throws Safe\SocketsException }
 * @method static string socket_read(resource $socket, int $length, int $type = PHP_BINARY_READ) { @throws Safe\SocketsException }
 * @method static int socket_send(resource $socket, string $buf, int $len, int $flags) { @throws Safe\SocketsException }
 * @method static int socket_sendmsg(resource $socket, array $message, int $flags = 0) { @throws Safe\SocketsException }
 * @method static int socket_sendto(resource $socket, string $buf, int $len, int $flags, string $addr, int $port = 0) { @throws Safe\SocketsException }
 * @method static void socket_set_block(resource $socket) { @throws Safe\SocketsException }
 * @method static void socket_set_nonblock(resource $socket) { @throws Safe\SocketsException }
 * @method static void socket_set_option(resource $socket, int $level, int $optname, $optval) { @throws Safe\SocketsException }
 * @method static void socket_shutdown(resource $socket, int $how = 2) { @throws Safe\SocketsException }
 * @method static int socket_write(resource $socket, string $buffer, int $length = 0) { @throws Safe\SocketsException }
 * @method static string socket_wsaprotocol_info_export(resource  $socket, int $target_pid) { @throws Safe\SocketsException }
 * @method static resource socket_wsaprotocol_info_import(string $info_id) { @throws Safe\SocketsException }
 * @method static void socket_wsaprotocol_info_release(string $info_id) { @throws Safe\SocketsException }
 * @method static string sodium_crypto_pwhash_str(string $password, int $opslimit, int $memlimit) { @throws Safe\SodiumException }
 * @method static string sodium_crypto_pwhash(int $length, string $password, string $salt, int $opslimit, int $memlimit, int $alg = null) { @throws Safe\SodiumException }
 * @method static string solr_get_version() { @throws Safe\SolrException }
 * @method static array class_implements($class, bool $autoload = true) { @throws Safe\SplException }
 * @method static array class_parents($class, bool $autoload = true) { @throws Safe\SplException }
 * @method static array class_uses($class, bool $autoload = true) { @throws Safe\SplException }
 * @method static void spl_autoload_register(callable $autoload_function = null, bool $throw = true, bool $prepend = false) { @throws Safe\SplException }
 * @method static void spl_autoload_unregister($autoload_function) { @throws Safe\SplException }
 * @method static void sqlsrv_begin_transaction(resource $conn) { @throws Safe\SqlsrvException }
 * @method static void sqlsrv_cancel(resource $stmt) { @throws Safe\SqlsrvException }
 * @method static array sqlsrv_client_info(resource $conn) { @throws Safe\SqlsrvException }
 * @method static void sqlsrv_close(resource $conn) { @throws Safe\SqlsrvException }
 * @method static void sqlsrv_commit(resource $conn) { @throws Safe\SqlsrvException }
 * @method static void sqlsrv_configure(string $setting, $value) { @throws Safe\SqlsrvException }
 * @method static void sqlsrv_execute(resource $stmt) { @throws Safe\SqlsrvException }
 * @method static ?bool sqlsrv_fetch(resource $stmt, int $row = null, int $offset = null) { @throws Safe\SqlsrvException }
 * @method static void sqlsrv_free_stmt(resource $stmt) { @throws Safe\SqlsrvException }
 * @method static mixed sqlsrv_get_field(resource $stmt, int $fieldIndex, int $getAsType = null) { @throws Safe\SqlsrvException }
 * @method static ?bool sqlsrv_next_result(resource $stmt) { @throws Safe\SqlsrvException }
 * @method static int sqlsrv_num_fields(resource $stmt) { @throws Safe\SqlsrvException }
 * @method static int sqlsrv_num_rows(resource $stmt) { @throws Safe\SqlsrvException }
 * @method static resource sqlsrv_prepare(resource $conn, string $sql, array $params = null, array $options = null) { @throws Safe\SqlsrvException }
 * @method static resource sqlsrv_query(resource $conn, string $sql, array $params = null, array $options = null) { @throws Safe\SqlsrvException }
 * @method static void sqlsrv_rollback(resource $conn) { @throws Safe\SqlsrvException }
 * @method static int ssdeep_fuzzy_compare(string $signature1, string $signature2) { @throws Safe\SsdeepException }
 * @method static string ssdeep_fuzzy_hash_filename(string $file_name) { @throws Safe\SsdeepException }
 * @method static string ssdeep_fuzzy_hash(string $to_hash) { @throws Safe\SsdeepException }
 * @method static void ssh2_auth_agent(resource $session, string $username) { @throws Safe\Ssh2Exception }
 * @method static void ssh2_auth_hostbased_file(resource $session, string $username, string $hostname, string $pubkeyfile, string $privkeyfile, string $passphrase = null, string $local_username = null) { @throws Safe\Ssh2Exception }
 * @method static void ssh2_auth_password(resource $session, string $username, string $password) { @throws Safe\Ssh2Exception }
 * @method static void ssh2_auth_pubkey_file(resource $session, string $username, string $pubkeyfile, string $privkeyfile, string $passphrase = null) { @throws Safe\Ssh2Exception }
 * @method static resource ssh2_connect(string $host, int $port = 22, array $methods = null, array $callbacks = null) { @throws Safe\Ssh2Exception }
 * @method static void ssh2_disconnect(resource $session) { @throws Safe\Ssh2Exception }
 * @method static resource ssh2_exec(resource $session, string $command, string $pty = null, array $env = null, int $width = 80, int $height = 25, int $width_height_type = SSH2_TERM_UNIT_CHARS) { @throws Safe\Ssh2Exception }
 * @method static void ssh2_publickey_add(resource $pkey, string $algoname, string $blob, bool $overwrite = false, array $attributes = null) { @throws Safe\Ssh2Exception }
 * @method static resource ssh2_publickey_init(resource $session) { @throws Safe\Ssh2Exception }
 * @method static void ssh2_publickey_remove(resource $pkey, string $algoname, string $blob) { @throws Safe\Ssh2Exception }
 * @method static void ssh2_scp_recv(resource $session, string $remote_file, string $local_file) { @throws Safe\Ssh2Exception }
 * @method static void ssh2_scp_send(resource $session, string $local_file, string $remote_file, int $create_mode = 0644) { @throws Safe\Ssh2Exception }
 * @method static void ssh2_sftp_chmod(resource $sftp, string $filename, int $mode) { @throws Safe\Ssh2Exception }
 * @method static void ssh2_sftp_mkdir(resource $sftp, string $dirname, int $mode = 0777, bool $recursive = false) { @throws Safe\Ssh2Exception }
 * @method static void ssh2_sftp_rename(resource $sftp, string $from, string $to) { @throws Safe\Ssh2Exception }
 * @method static void ssh2_sftp_rmdir(resource $sftp, string $dirname) { @throws Safe\Ssh2Exception }
 * @method static void ssh2_sftp_symlink(resource $sftp, string $target, string $link) { @throws Safe\Ssh2Exception }
 * @method static void ssh2_sftp_unlink(resource $sftp, string $filename) { @throws Safe\Ssh2Exception }
 * @method static resource ssh2_sftp(resource $session) { @throws Safe\Ssh2Exception }
 * @method static float stats_covariance(array $a, array $b) { @throws Safe\StatsException }
 * @method static float stats_standard_deviation(array $a, bool $sample = false) { @throws Safe\StatsException }
 * @method static float stats_stat_correlation(array $arr1, array $arr2) { @throws Safe\StatsException }
 * @method static float stats_stat_innerproduct(array $arr1, array $arr2) { @throws Safe\StatsException }
 * @method static float stats_variance(array $a, bool $sample = false) { @throws Safe\StatsException }
 * @method static void stream_context_set_params(resource $stream_or_context, array $params) { @throws Safe\StreamException }
 * @method static int stream_copy_to_stream(resource $source, resource $dest, int $maxlength = -1, int $offset = 0) { @throws Safe\StreamException }
 * @method static resource stream_filter_append(resource $stream, string $filtername, int $read_write = null, $params = null) { @throws Safe\StreamException }
 * @method static resource stream_filter_prepend(resource $stream, string $filtername, int $read_write = null, $params = null) { @throws Safe\StreamException }
 * @method static void stream_filter_register(string $filtername, string $classname) { @throws Safe\StreamException }
 * @method static void stream_filter_remove(resource $stream_filter) { @throws Safe\StreamException }
 * @method static string stream_get_contents(resource $handle, int $maxlength = -1, int $offset = -1) { @throws Safe\StreamException }
 * @method static void stream_isatty(resource $stream) { @throws Safe\StreamException }
 * @method static string stream_resolve_include_path(string $filename) { @throws Safe\StreamException }
 * @method static void stream_set_blocking(resource $stream, bool $mode) { @throws Safe\StreamException }
 * @method static void stream_set_timeout(resource $stream, int $seconds, int $microseconds = 0) { @throws Safe\StreamException }
 * @method static int stream_socket_enable_crypto(resource $stream, bool $enable, int $crypto_type = null, resource $session_stream = null) { @throws Safe\StreamException }
 * @method static iterable stream_socket_pair(int $domain, int $type, int $protocol) { @throws Safe\StreamException }
 * @method static void stream_socket_shutdown(resource $stream, int $how) { @throws Safe\StreamException }
 * @method static void stream_supports_lock(resource $stream) { @throws Safe\StreamException }
 * @method static void stream_wrapper_register(string $protocol, string $classname, int $flags = 0) { @throws Safe\StreamException }
 * @method static void stream_wrapper_restore(string $protocol) { @throws Safe\StreamException }
 * @method static void stream_wrapper_unregister(string $protocol) { @throws Safe\StreamException }
 * @method static string convert_uudecode(string $data) { @throws Safe\StringsException }
 * @method static string convert_uuencode(string $data) { @throws Safe\StringsException }
 * @method static string hex2bin(string $data) { @throws Safe\StringsException }
 * @method static string md5_file(string $filename, bool $raw_output = false) { @throws Safe\StringsException }
 * @method static string metaphone(string $str, int $phonemes = 0) { @throws Safe\StringsException }
 * @method static string sha1_file(string $filename, bool $raw_output = false) { @throws Safe\StringsException }
 * @method static string sprintf(string $format,  ...$params) { @throws Safe\StringsException }
 * @method static string substr(string $string, int $start, int $length = null) { @throws Safe\StringsException }
 * @method static string vsprintf(string $format, array $args) { @throws Safe\StringsException }
 * @method static void swoole_async_write(string $filename, string $content, int $offset = null, callable $callback = null) { @throws Safe\SwooleException }
 * @method static void swoole_async_writefile(string $filename, string $content, callable $callback = null, int $flags = 0) { @throws Safe\SwooleException }
 * @method static void swoole_event_defer(callable $callback) { @throws Safe\SwooleException }
 * @method static void swoole_event_del(int $fd) { @throws Safe\SwooleException }
 * @method static void swoole_event_write(int $fd, string $data) { @throws Safe\SwooleException }
 * @method static mixed odbc_autocommit(resource $connection_id, bool $OnOff = false) { @throws Safe\UodbcException }
 * @method static void odbc_binmode(int $result_id, int $mode) { @throws Safe\UodbcException }
 * @method static resource odbc_columnprivileges(resource $connection_id, string $qualifier, string $owner, string $table_name, string $column_name) { @throws Safe\UodbcException }
 * @method static resource odbc_columns(resource $connection_id, string $qualifier = null, string $schema = null, string $table_name = null, string $column_name = null) { @throws Safe\UodbcException }
 * @method static void odbc_commit(resource $connection_id) { @throws Safe\UodbcException }
 * @method static array odbc_data_source(resource $connection_id, int $fetch_type) { @throws Safe\UodbcException }
 * @method static resource odbc_exec(resource $connection_id, string $query_string, int $flags = null) { @throws Safe\UodbcException }
 * @method static void odbc_execute(resource $result_id, array $parameters_array = null) { @throws Safe\UodbcException }
 * @method static int odbc_field_len(resource $result_id, int $field_number) { @throws Safe\UodbcException }
 * @method static string odbc_field_name(resource $result_id, int $field_number) { @throws Safe\UodbcException }
 * @method static int odbc_field_num(resource $result_id, string $field_name) { @throws Safe\UodbcException }
 * @method static int odbc_field_scale(resource $result_id, int $field_number) { @throws Safe\UodbcException }
 * @method static string odbc_field_type(resource $result_id, int $field_number) { @throws Safe\UodbcException }
 * @method static resource odbc_foreignkeys(resource $connection_id, string $pk_qualifier, string $pk_owner, string $pk_table, string $fk_qualifier, string $fk_owner, string $fk_table) { @throws Safe\UodbcException }
 * @method static resource odbc_gettypeinfo(resource $connection_id, int $data_type = null) { @throws Safe\UodbcException }
 * @method static void odbc_longreadlen(resource $result_id, int $length) { @throws Safe\UodbcException }
 * @method static resource odbc_prepare(resource $connection_id, string $query_string) { @throws Safe\UodbcException }
 * @method static resource odbc_primarykeys(resource $connection_id, string $qualifier, string $owner, string $table) { @throws Safe\UodbcException }
 * @method static int odbc_result_all(resource $result_id, string $format = null) { @throws Safe\UodbcException }
 * @method static mixed odbc_result(resource $result_id, $field) { @throws Safe\UodbcException }
 * @method static void odbc_rollback(resource $connection_id) { @throws Safe\UodbcException }
 * @method static void odbc_setoption(resource $id, int $function, int $option, int $param) { @throws Safe\UodbcException }
 * @method static resource odbc_specialcolumns(resource $connection_id, int $type, string $qualifier, string $table, int $scope, int $nullable) { @throws Safe\UodbcException }
 * @method static resource odbc_statistics(resource $connection_id, string $qualifier, string $owner, string $table_name, int $unique, int $accuracy) { @throws Safe\UodbcException }
 * @method static resource odbc_tableprivileges(resource $connection_id, string $qualifier, string $owner, string $name) { @throws Safe\UodbcException }
 * @method static resource odbc_tables(resource $connection_id, string $qualifier = null, string $owner = null, string $name = null, string $types = null) { @throws Safe\UodbcException }
 * @method static void uopz_extend(string $class, string $parent) { @throws Safe\UopzException }
 * @method static void uopz_implement(string $class, string $interface) { @throws Safe\UopzException }
 * @method static string base64_decode(string $data, bool $strict = false) { @throws Safe\UrlException }
 * @method static array get_headers(string $url, int $format = 0, resource $context = null) { @throws Safe\UrlException }
 * @method static mixed parse_url(string $url, int $component = -1) { @throws Safe\UrlException }
 * @method static void xdiff_file_bdiff(string $old_file, string $new_file, string $dest) { @throws Safe\XdiffException }
 * @method static void xdiff_file_bpatch(string $file, string $patch, string $dest) { @throws Safe\XdiffException }
 * @method static void xdiff_file_diff_binary(string $old_file, string $new_file, string $dest) { @throws Safe\XdiffException }
 * @method static void xdiff_file_diff(string $old_file, string $new_file, string $dest, int $context = 3, bool $minimal = false) { @throws Safe\XdiffException }
 * @method static mixed xdiff_file_merge3(string $old_file, string $new_file1, string $new_file2, string $dest) { @throws Safe\XdiffException }
 * @method static void xdiff_file_patch_binary(string $file, string $patch, string $dest) { @throws Safe\XdiffException }
 * @method static void xdiff_file_rabdiff(string $old_file, string $new_file, string $dest) { @throws Safe\XdiffException }
 * @method static string xdiff_string_bpatch(string $str, string $patch) { @throws Safe\XdiffException }
 * @method static string xdiff_string_patch_binary(string $str, string $patch) { @throws Safe\XdiffException }
 * @method static resource xml_parser_create_ns(string $encoding = null, string $separator = ":") { @throws Safe\XmlException }
 * @method static resource xml_parser_create(string $encoding = null) { @throws Safe\XmlException }
 * @method static void yaml_emit_file(string $filename, $data, int $encoding = YAML_ANY_ENCODING, int $linebreak = YAML_ANY_BREAK, array $callbacks = null) { @throws Safe\YamlException }
 * @method static void yaz_close(resource $id) { @throws Safe\YazException }
 * @method static mixed yaz_connect(string $zurl, $options = null) { @throws Safe\YazException }
 * @method static void yaz_database(resource $id, string $databases) { @throws Safe\YazException }
 * @method static void yaz_element(resource $id, string $elementset) { @throws Safe\YazException }
 * @method static void yaz_present(resource $id) { @throws Safe\YazException }
 * @method static void yaz_search(resource $id, string $type, string $query) { @throws Safe\YazException }
 * @method static void zip_entry_close(resource $zip_entry) { @throws Safe\ZipException }
 * @method static void zip_entry_open(resource $zip, resource $zip_entry, string $mode = null) { @throws Safe\ZipException }
 * @method static string zip_entry_read(resource $zip_entry, int $length = 1024) { @throws Safe\ZipException }
 * @method static string deflate_add(resource $context, string $data, int $flush_mode = ZLIB_SYNC_FLUSH) { @throws Safe\ZlibException }
 * @method static resource deflate_init(int $encoding, array $options = null) { @throws Safe\ZlibException }
 * @method static void gzclose(resource $zp) { @throws Safe\ZlibException }
 * @method static string gzcompress(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_DEFLATE) { @throws Safe\ZlibException }
 * @method static string gzdecode(string $data, int $length = null) { @throws Safe\ZlibException }
 * @method static string gzdeflate(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_RAW) { @throws Safe\ZlibException }
 * @method static string gzencode(string $data, int $level = -1, int $encoding_mode = FORCE_GZIP) { @throws Safe\ZlibException }
 * @method static string gzgets(resource $zp, int $length = null) { @throws Safe\ZlibException }
 * @method static string gzgetss(resource $zp, int $length, string $allowable_tags = null) { @throws Safe\ZlibException }
 * @method static string gzinflate(string $data, int $length = 0) { @throws Safe\ZlibException }
 * @method static int gzpassthru(resource $zp) { @throws Safe\ZlibException }
 * @method static void gzrewind(resource $zp) { @throws Safe\ZlibException }
 * @method static string gzuncompress(string $data, int $length = 0) { @throws Safe\ZlibException }
 * @method static int inflate_get_read_len(resource $resource) { @throws Safe\ZlibException }
 * @method static int inflate_get_status(resource $resource) { @throws Safe\ZlibException }
 * @method static string inflate_add(resource $context, string $encoded_data, int $flush_mode = ZLIB_SYNC_FLUSH) { @throws Safe\ZlibException }
 * @method static resource inflate_init(int $encoding, array $options = null) { @throws Safe\ZlibException }
 * @method static int readgzfile(string $filename, int $use_include_path = 0) { @throws Safe\ZlibException }
 * @method static string zlib_decode(string $data, int $max_decoded_len = null) { @throws Safe\ZlibException }
 */
final class Safe
{
	private static $handlers = [
		'apache_*' => [Safe\ApacheException::class],
		'apache_get_version' => [Safe\ApacheException::class, ''],
		'apache_getenv' => [Safe\ApacheException::class, ''],
		'apache_request_headers' => [Safe\ApacheException::class, ''],
		'apache_reset_timeout' => [Safe\ApacheException::class, ''],
		'apache_response_headers' => [Safe\ApacheException::class, ''],
		'apache_setenv' => [Safe\ApacheException::class, ''],
		'apc_*' => [Safe\ApcException::class],
		'apc_bin_loadfile' => [Safe\ApcException::class, ''],
		'apc_cache_info' => [Safe\ApcException::class, ''],
		'apc_cas' => [Safe\ApcException::class, ''],
		'apc_compile_file' => [Safe\ApcException::class, ''],
		'apc_dec' => [Safe\ApcException::class, ''],
		'apc_define_constants' => [Safe\ApcException::class, ''],
		'apc_delete' => [Safe\ApcException::class, ''],
		'apc_delete_file' => [Safe\ApcException::class, ''],
		'apc_inc' => [Safe\ApcException::class, ''],
		'apc_load_constants' => [Safe\ApcException::class, ''],
		'apc_sma_info' => [Safe\ApcException::class, ''],
		'apcu_*' => [Safe\ApcuException::class],
		'apcu_cache_info' => [Safe\ApcuException::class, ''],
		'apcu_cas' => [Safe\ApcuException::class, ''],
		'apcu_dec' => [Safe\ApcuException::class, ''],
		'apcu_inc' => [Safe\ApcuException::class, ''],
		'apcu_sma_info' => [Safe\ApcuException::class, ''],
		'array_combine' => [Safe\ArrayException::class, ''],
		'array_flip' => [Safe\ArrayException::class, 'nullsy'],
		'array_multisort' => [Safe\ArrayException::class, ''],
		'array_replace' => [Safe\ArrayException::class, 'nullsy'],
		'array_replace_recursive' => [Safe\ArrayException::class, 'nullsy'],
		'array_walk_recursive' => [Safe\ArrayException::class, ''],
		'arsort' => [Safe\ArrayException::class, ''],
		'asort' => [Safe\ArrayException::class, ''],
		'assert_options' => [Safe\InfoException::class, ''],
		'base64_*' => [Safe\UrlException::class],
		'base64_decode' => [Safe\UrlException::class, ''],
		'basename' => [Safe\FilesystemException::class],
		'bcadd' => [Safe\BcException::class],
		'bccomp' => [Safe\BcException::class],
		'bcdiv' => [Safe\BcException::class],
		'bcmod' => [Safe\BcException::class],
		'bcmul' => [Safe\BcException::class],
		'bcpow' => [Safe\BcException::class],
		'bcpowmod' => [Safe\BcException::class],
		'bcscale' => [Safe\BcException::class],
		'bcsqrt' => [Safe\BcException::class],
		'bcsub' => [Safe\BcException::class],
		'bind_*' => [Safe\GettextException::class],
		'bindtextdomain' => [Safe\GettextException::class],
		'blenc_*' => [Safe\BlencException::class],
		'bson_*' => [Safe\MongoException::class],
		'bzclose' => [Safe\Bzip2Exception::class, ''],
		'bzcompress' => [Safe\Bzip2Exception::class],
		'bzdecompress' => [Safe\Bzip2Exception::class],
		'bzerrno' => [Safe\Bzip2Exception::class],
		'bzerror' => [Safe\Bzip2Exception::class],
		'bzerrstr' => [Safe\Bzip2Exception::class],
		'bzflush' => [Safe\Bzip2Exception::class, ''],
		'bzopen' => [Safe\Bzip2Exception::class],
		'bzread' => [Safe\Bzip2Exception::class, ''],
		'bzwrite' => [Safe\Bzip2Exception::class, ''],
		'cal_*' => [Safe\CalendarException::class],
		'chdir' => [Safe\DirException::class, ''],
		'checkdate' => [Safe\DatetimeException::class],
		'checkdnsrr' => [Safe\NetworkException::class],
		'chgrp' => [Safe\FilesystemException::class, ''],
		'chmod' => [Safe\FilesystemException::class, ''],
		'chown' => [Safe\FilesystemException::class, ''],
		'chroot' => [Safe\DirException::class, ''],
		'class_alias' => [Safe\ClassobjException::class, ''],
		'class_implements' => [Safe\SplException::class, ''],
		'class_parents' => [Safe\SplException::class, ''],
		'class_uses' => [Safe\SplException::class, ''],
		'clearstatcache' => [Safe\FilesystemException::class],
		'cli_set_process_title' => [Safe\InfoException::class, ''],
		'closedir' => [Safe\DirException::class],
		'closelog' => [Safe\NetworkException::class, ''],
		'com_*' => [Safe\ComException::class],
		'com_event_sink' => [Safe\ComException::class, ''],
		'com_load_typelib' => [Safe\ComException::class, ''],
		'com_print_typeinfo' => [Safe\ComException::class, ''],
		'convert_uudecode' => [Safe\StringsException::class, ''],
		'convert_uuencode' => [Safe\StringsException::class, ''],
		'copy' => [Safe\FilesystemException::class, ''],
		'create_function' => [Safe\FunchandException::class, ''],
		'ctype_*' => [Safe\CtypeException::class],
		'cubrid_*' => [Safe\CubridException::class],
		'cubrid_free_result' => [Safe\CubridException::class, ''],
		'cubrid_get_charset' => [Safe\CubridException::class, ''],
		'cubrid_get_client_info' => [Safe\CubridException::class, ''],
		'cubrid_get_db_parameter' => [Safe\CubridException::class, ''],
		'cubrid_get_server_info' => [Safe\CubridException::class, ''],
		'cubrid_insert_id' => [Safe\CubridException::class, ''],
		'cubrid_lob2_new' => [Safe\CubridException::class, ''],
		'cubrid_lob2_size' => [Safe\CubridException::class, ''],
		'cubrid_lob2_size64' => [Safe\CubridException::class, ''],
		'cubrid_lob2_tell' => [Safe\CubridException::class, ''],
		'cubrid_lob2_tell64' => [Safe\CubridException::class, ''],
		'cubrid_set_db_parameter' => [Safe\CubridException::class, ''],
		'curl_*' => [Safe\CurlException::class],
		'curl_escape' => [Safe\CurlException::class, 'curl'],
		'curl_exec' => [Safe\CurlException::class, 'curl'],
		'curl_getinfo' => [Safe\CurlException::class, 'curl'],
		'curl_init' => [Safe\CurlException::class, ''],
		'curl_multi_errno' => [Safe\CurlException::class, ''],
		'curl_multi_info_read' => [Safe\CurlException::class, ''],
		'curl_multi_init' => [Safe\CurlException::class, ''],
		'curl_setopt' => [Safe\CurlException::class, 'curl'],
		'curl_setopt_array' => [Safe\CurlException::class, 'curl'],
		'curl_share_errno' => [Safe\CurlException::class, ''],
		'curl_share_setopt' => [Safe\CurlException::class, ''],
		'curl_unescape' => [Safe\CurlException::class, 'curl'],
		'date' => [Safe\DatetimeException::class],
		'date_*' => [Safe\DatetimeException::class],
		'date_parse' => [Safe\DatetimeException::class, ''],
		'date_parse_from_format' => [Safe\DatetimeException::class, ''],
		'date_sun_info' => [Safe\DatetimeException::class, ''],
		'date_sunrise' => [Safe\DatetimeException::class, ''],
		'date_sunset' => [Safe\DatetimeException::class, ''],
		'db2_*' => [Safe\IbmDb2Exception::class],
		'db2_autocommit' => [Safe\IbmDb2Exception::class, ''],
		'db2_bind_param' => [Safe\IbmDb2Exception::class, ''],
		'db2_client_info' => [Safe\IbmDb2Exception::class, ''],
		'db2_close' => [Safe\IbmDb2Exception::class, ''],
		'db2_commit' => [Safe\IbmDb2Exception::class, ''],
		'db2_execute' => [Safe\IbmDb2Exception::class, ''],
		'db2_free_result' => [Safe\IbmDb2Exception::class, ''],
		'db2_free_stmt' => [Safe\IbmDb2Exception::class, ''],
		'db2_get_option' => [Safe\IbmDb2Exception::class, ''],
		'db2_pclose' => [Safe\IbmDb2Exception::class, ''],
		'db2_rollback' => [Safe\IbmDb2Exception::class, ''],
		'db2_server_info' => [Safe\IbmDb2Exception::class, ''],
		'db2_set_option' => [Safe\IbmDb2Exception::class, ''],
		'dcgettext' => [Safe\GettextException::class],
		'dcngettext' => [Safe\GettextException::class],
		'define' => [Safe\MiscException::class, ''],
		'define_*' => [Safe\NetworkException::class],
		'deflate_add' => [Safe\ZlibException::class, ''],
		'deflate_init' => [Safe\ZlibException::class, ''],
		'dgettext' => [Safe\GettextException::class],
		'dir' => [Safe\DirException::class],
		'dirname' => [Safe\FilesystemException::class],
		'disk_free_space' => [Safe\FilesystemException::class, ''],
		'disk_total_space' => [Safe\FilesystemException::class, ''],
		'dl' => [Safe\InfoException::class, ''],
		'dngettext' => [Safe\GettextException::class],
		'dns_get_record' => [Safe\NetworkException::class, ''],
		'dom_*' => [Safe\DomException::class],
		'easter_*' => [Safe\CalendarException::class],
		'eio_*' => [Safe\EioException::class],
		'eio_busy' => [Safe\EioException::class, ''],
		'eio_chmod' => [Safe\EioException::class, ''],
		'eio_chown' => [Safe\EioException::class, ''],
		'eio_close' => [Safe\EioException::class, ''],
		'eio_custom' => [Safe\EioException::class, ''],
		'eio_dup2' => [Safe\EioException::class, ''],
		'eio_event_loop' => [Safe\EioException::class, ''],
		'eio_fallocate' => [Safe\EioException::class, ''],
		'eio_fchmod' => [Safe\EioException::class, ''],
		'eio_fdatasync' => [Safe\EioException::class, ''],
		'eio_fstat' => [Safe\EioException::class, ''],
		'eio_fstatvfs' => [Safe\EioException::class, ''],
		'eio_fsync' => [Safe\EioException::class, ''],
		'eio_ftruncate' => [Safe\EioException::class, ''],
		'eio_futime' => [Safe\EioException::class, ''],
		'eio_grp' => [Safe\EioException::class, ''],
		'eio_lstat' => [Safe\EioException::class, ''],
		'eio_mkdir' => [Safe\EioException::class, ''],
		'eio_mknod' => [Safe\EioException::class, ''],
		'eio_nop' => [Safe\EioException::class, ''],
		'eio_readahead' => [Safe\EioException::class, ''],
		'eio_readdir' => [Safe\EioException::class, ''],
		'eio_readlink' => [Safe\EioException::class, ''],
		'eio_rename' => [Safe\EioException::class, ''],
		'eio_rmdir' => [Safe\EioException::class, ''],
		'eio_seek' => [Safe\EioException::class, ''],
		'eio_sendfile' => [Safe\EioException::class, ''],
		'eio_stat' => [Safe\EioException::class, ''],
		'eio_statvfs' => [Safe\EioException::class, ''],
		'eio_symlink' => [Safe\EioException::class, ''],
		'eio_sync' => [Safe\EioException::class, ''],
		'eio_sync_file_range' => [Safe\EioException::class, ''],
		'eio_syncfs' => [Safe\EioException::class, ''],
		'eio_truncate' => [Safe\EioException::class, ''],
		'eio_unlink' => [Safe\EioException::class, ''],
		'eio_utime' => [Safe\EioException::class, ''],
		'eio_write' => [Safe\EioException::class, ''],
		'ereg' => [Safe\RegexException::class],
		'ereg_*' => [Safe\RegexException::class],
		'eregi' => [Safe\RegexException::class],
		'eregi_*' => [Safe\RegexException::class],
		'error_log' => [Safe\ErrorfuncException::class, ''],
		'escapeshellarg' => [Safe\ExecException::class],
		'escapeshellcmd' => [Safe\ExecException::class],
		'event_*' => [Safe\LibeventException::class],
		'event_add' => [Safe\LibeventException::class, ''],
		'event_base_loopbreak' => [Safe\LibeventException::class, ''],
		'event_base_loopexit' => [Safe\LibeventException::class, ''],
		'event_base_new' => [Safe\LibeventException::class, ''],
		'event_base_priority_init' => [Safe\LibeventException::class, ''],
		'event_base_reinit' => [Safe\LibeventException::class, ''],
		'event_base_set' => [Safe\LibeventException::class, ''],
		'event_buffer_base_set' => [Safe\LibeventException::class, ''],
		'event_buffer_disable' => [Safe\LibeventException::class, ''],
		'event_buffer_enable' => [Safe\LibeventException::class, ''],
		'event_buffer_new' => [Safe\LibeventException::class, ''],
		'event_buffer_priority_set' => [Safe\LibeventException::class, ''],
		'event_buffer_set_callback' => [Safe\LibeventException::class, ''],
		'event_buffer_write' => [Safe\LibeventException::class, ''],
		'event_del' => [Safe\LibeventException::class, ''],
		'event_new' => [Safe\LibeventException::class, ''],
		'event_priority_set' => [Safe\LibeventException::class, ''],
		'event_set' => [Safe\LibeventException::class, ''],
		'event_timer_set' => [Safe\LibeventException::class, ''],
		'exec' => [Safe\ExecException::class],
		'exif_*' => [Safe\ExifException::class],
		'expect_*' => [Safe\ExpectException::class],
		'ezmlm_*' => [Safe\MailException::class],
		'fastcgi_finish_request' => [Safe\FpmException::class, ''],
		'fbird_blob_cancel' => [Safe\IbaseException::class, ''],
		'fclose' => [Safe\FilesystemException::class, ''],
		'feof' => [Safe\FilesystemException::class],
		'fflush' => [Safe\FilesystemException::class, ''],
		'fgetc' => [Safe\FilesystemException::class],
		'fgetcsv' => [Safe\FilesystemException::class],
		'fgets' => [Safe\FilesystemException::class],
		'fgetss' => [Safe\FilesystemException::class],
		'file' => [Safe\FilesystemException::class, ''],
		'file_*' => [Safe\FilesystemException::class],
		'file_get_contents' => [Safe\FilesystemException::class, ''],
		'file_put_contents' => [Safe\FilesystemException::class, ''],
		'fileatime' => [Safe\FilesystemException::class, ''],
		'filectime' => [Safe\FilesystemException::class, ''],
		'filegroup' => [Safe\FilesystemException::class],
		'fileinode' => [Safe\FilesystemException::class, ''],
		'filemtime' => [Safe\FilesystemException::class, ''],
		'fileowner' => [Safe\FilesystemException::class, ''],
		'fileperms' => [Safe\FilesystemException::class],
		'filesize' => [Safe\FilesystemException::class, ''],
		'filetype' => [Safe\FilesystemException::class],
		'filter_*' => [Safe\FilterException::class],
		'filter_has_var' => [Safe\FilterException::class, ''],
		'filter_input_array' => [Safe\FilterException::class, ''],
		'filter_var_array' => [Safe\FilterException::class, ''],
		'finfo_*' => [Safe\FileinfoException::class],
		'finfo_close' => [Safe\FileinfoException::class, ''],
		'finfo_open' => [Safe\FileinfoException::class, ''],
		'flock' => [Safe\FilesystemException::class, ''],
		'flush' => [Safe\OutcontrolException::class],
		'fnmatch' => [Safe\FilesystemException::class],
		'fopen' => [Safe\FilesystemException::class, ''],
		'fpassthru' => [Safe\FilesystemException::class],
		'fputcsv' => [Safe\FilesystemException::class, ''],
		'fread' => [Safe\FilesystemException::class, ''],
		'frenchtojd' => [Safe\CalendarException::class],
		'fscanf' => [Safe\FilesystemException::class],
		'fseek' => [Safe\FilesystemException::class],
		'fsockopen' => [Safe\NetworkException::class, ''],
		'fstat' => [Safe\FilesystemException::class],
		'ftell' => [Safe\FilesystemException::class],
		'ftok' => [Safe\SemException::class],
		'ftp_*' => [Safe\FtpException::class],
		'ftp_alloc' => [Safe\FtpException::class, ''],
		'ftp_append' => [Safe\FtpException::class, ''],
		'ftp_cdup' => [Safe\FtpException::class, ''],
		'ftp_chdir' => [Safe\FtpException::class, ''],
		'ftp_chmod' => [Safe\FtpException::class, ''],
		'ftp_close' => [Safe\FtpException::class, ''],
		'ftp_connect' => [Safe\FtpException::class, ''],
		'ftp_delete' => [Safe\FtpException::class, ''],
		'ftp_exec' => [Safe\FtpException::class, ''],
		'ftp_fget' => [Safe\FtpException::class, ''],
		'ftp_fput' => [Safe\FtpException::class, ''],
		'ftp_get' => [Safe\FtpException::class, ''],
		'ftp_login' => [Safe\FtpException::class, ''],
		'ftp_mkdir' => [Safe\FtpException::class, ''],
		'ftp_mlsd' => [Safe\FtpException::class, ''],
		'ftp_nlist' => [Safe\FtpException::class, ''],
		'ftp_pasv' => [Safe\FtpException::class, ''],
		'ftp_put' => [Safe\FtpException::class, ''],
		'ftp_pwd' => [Safe\FtpException::class, ''],
		'ftp_rename' => [Safe\FtpException::class, ''],
		'ftp_rmdir' => [Safe\FtpException::class, ''],
		'ftp_site' => [Safe\FtpException::class, ''],
		'ftp_ssl_connect' => [Safe\FtpException::class, ''],
		'ftp_systype' => [Safe\FtpException::class, ''],
		'ftruncate' => [Safe\FilesystemException::class, ''],
		'fwrite' => [Safe\FilesystemException::class, ''],
		'gd_*' => [Safe\ImageException::class],
		'geoip_*' => [Safe\GeoipException::class],
		'get_*' => [Safe\UrlException::class],
		'get_headers' => [Safe\UrlException::class, ''],
		'getallheaders' => [Safe\ApacheException::class, ''],
		'getcwd' => [Safe\DirException::class, ''],
		'getdate' => [Safe\DatetimeException::class],
		'gethostbyaddr' => [Safe\NetworkException::class],
		'gethostbyname' => [Safe\NetworkException::class],
		'gethostbynamel' => [Safe\NetworkException::class],
		'gethostname' => [Safe\NetworkException::class, ''],
		'getimagesize' => [Safe\ImageException::class, ''],
		'getimagesizefromstring' => [Safe\ImageException::class],
		'getlastmod' => [Safe\InfoException::class, ''],
		'getmxrr' => [Safe\NetworkException::class],
		'getmygid' => [Safe\InfoException::class, ''],
		'getmyinode' => [Safe\InfoException::class, ''],
		'getmypid' => [Safe\InfoException::class, ''],
		'getmyuid' => [Safe\InfoException::class, ''],
		'getopt' => [Safe\InfoException::class, ''],
		'getprotobyname' => [Safe\NetworkException::class, ''],
		'getprotobynumber' => [Safe\NetworkException::class, ''],
		'getservbyname' => [Safe\NetworkException::class],
		'getservbyport' => [Safe\NetworkException::class],
		'gettext' => [Safe\GettextException::class],
		'gettimeofday' => [Safe\DatetimeException::class],
		'glob' => [Safe\FilesystemException::class, ''],
		'gmdate' => [Safe\DatetimeException::class],
		'gmmktime' => [Safe\DatetimeException::class],
		'gmp_*' => [Safe\GmpException::class],
		'gmp_binomial' => [Safe\GmpException::class, ''],
		'gmp_export' => [Safe\GmpException::class, ''],
		'gmp_import' => [Safe\GmpException::class, ''],
		'gmp_random_seed' => [Safe\GmpException::class, ''],
		'gmstrftime' => [Safe\DatetimeException::class],
		'gnupg_*' => [Safe\GnupgException::class],
		'gnupg_adddecryptkey' => [Safe\GnupgException::class, ''],
		'gnupg_addencryptkey' => [Safe\GnupgException::class, ''],
		'gnupg_addsignkey' => [Safe\GnupgException::class, ''],
		'gnupg_cleardecryptkeys' => [Safe\GnupgException::class, ''],
		'gnupg_clearencryptkeys' => [Safe\GnupgException::class, ''],
		'gnupg_clearsignkeys' => [Safe\GnupgException::class, ''],
		'gnupg_setarmor' => [Safe\GnupgException::class, ''],
		'gnupg_setsignmode' => [Safe\GnupgException::class, ''],
		'gopher_*' => [Safe\NetGopherException::class],
		'gregoriantojd' => [Safe\CalendarException::class],
		'gzclose' => [Safe\ZlibException::class, ''],
		'gzcompress' => [Safe\ZlibException::class, ''],
		'gzdecode' => [Safe\ZlibException::class, ''],
		'gzdeflate' => [Safe\ZlibException::class, ''],
		'gzencode' => [Safe\ZlibException::class, ''],
		'gzeof' => [Safe\ZlibException::class],
		'gzfile' => [Safe\ZlibException::class],
		'gzgetc' => [Safe\ZlibException::class],
		'gzgets' => [Safe\ZlibException::class, ''],
		'gzgetss' => [Safe\ZlibException::class, ''],
		'gzinflate' => [Safe\ZlibException::class, ''],
		'gzopen' => [Safe\ZlibException::class],
		'gzpassthru' => [Safe\ZlibException::class, ''],
		'gzread' => [Safe\ZlibException::class],
		'gzrewind' => [Safe\ZlibException::class, ''],
		'gzseek' => [Safe\ZlibException::class],
		'gztell' => [Safe\ZlibException::class],
		'gzuncompress' => [Safe\ZlibException::class, ''],
		'gzwrite' => [Safe\ZlibException::class],
		'hash' => [Safe\HashException::class],
		'hash_*' => [Safe\HashException::class],
		'hash_hkdf' => [Safe\HashException::class, ''],
		'hash_update_file' => [Safe\HashException::class, ''],
		'header' => [Safe\NetworkException::class],
		'header_*' => [Safe\NetworkException::class],
		'header_register_callback' => [Safe\NetworkException::class, ''],
		'headers_*' => [Safe\NetworkException::class],
		'hex2bin' => [Safe\StringsException::class, ''],
		'highlight_file' => [Safe\MiscException::class, ''],
		'highlight_string' => [Safe\MiscException::class, ''],
		'hwapi_*' => [Safe\HwapiException::class],
		'ibase_*' => [Safe\IbaseException::class],
		'ibase_add_user' => [Safe\IbaseException::class, ''],
		'ibase_backup' => [Safe\IbaseException::class, ''],
		'ibase_blob_cancel' => [Safe\IbaseException::class, ''],
		'ibase_blob_close' => [Safe\IbaseException::class, ''],
		'ibase_blob_create' => [Safe\IbaseException::class, ''],
		'ibase_blob_get' => [Safe\IbaseException::class, ''],
		'ibase_close' => [Safe\IbaseException::class, ''],
		'ibase_commit' => [Safe\IbaseException::class, ''],
		'ibase_commit_ret' => [Safe\IbaseException::class, ''],
		'ibase_connect' => [Safe\IbaseException::class, ''],
		'ibase_delete_user' => [Safe\IbaseException::class, ''],
		'ibase_drop_db' => [Safe\IbaseException::class, ''],
		'ibase_free_event_handler' => [Safe\IbaseException::class, ''],
		'ibase_free_query' => [Safe\IbaseException::class, ''],
		'ibase_free_result' => [Safe\IbaseException::class, ''],
		'ibase_maintain_db' => [Safe\IbaseException::class, ''],
		'ibase_modify_user' => [Safe\IbaseException::class, ''],
		'ibase_name_result' => [Safe\IbaseException::class, ''],
		'ibase_pconnect' => [Safe\IbaseException::class, ''],
		'ibase_restore' => [Safe\IbaseException::class, ''],
		'ibase_rollback' => [Safe\IbaseException::class, ''],
		'ibase_rollback_ret' => [Safe\IbaseException::class, ''],
		'ibase_service_attach' => [Safe\IbaseException::class, ''],
		'ibase_service_detach' => [Safe\IbaseException::class, ''],
		'iconv' => [Safe\IconvException::class, ''],
		'iconv_*' => [Safe\IconvException::class],
		'iconv_get_encoding' => [Safe\IconvException::class, ''],
		'iconv_set_encoding' => [Safe\IconvException::class, ''],
		'idate' => [Safe\DatetimeException::class],
		'iis_*' => [Safe\IisfuncException::class],
		'image2wbmp' => [Safe\ImageException::class, ''],
		'image_*' => [Safe\ImageException::class],
		'imageaffine' => [Safe\ImageException::class, ''],
		'imageaffinematrixconcat' => [Safe\ImageException::class, ''],
		'imageaffinematrixget' => [Safe\ImageException::class, ''],
		'imagealphablending' => [Safe\ImageException::class, ''],
		'imageantialias' => [Safe\ImageException::class, ''],
		'imagearc' => [Safe\ImageException::class, ''],
		'imagebmp' => [Safe\ImageException::class, ''],
		'imagechar' => [Safe\ImageException::class, ''],
		'imagecharup' => [Safe\ImageException::class, ''],
		'imagecolorallocate' => [Safe\ImageException::class],
		'imagecolorallocatealpha' => [Safe\ImageException::class],
		'imagecolorat' => [Safe\ImageException::class, ''],
		'imagecolorclosest' => [Safe\ImageException::class],
		'imagecolorclosestalpha' => [Safe\ImageException::class],
		'imagecolorclosesthwb' => [Safe\ImageException::class],
		'imagecolordeallocate' => [Safe\ImageException::class, ''],
		'imagecolorexact' => [Safe\ImageException::class],
		'imagecolorexactalpha' => [Safe\ImageException::class],
		'imagecolormatch' => [Safe\ImageException::class, ''],
		'imagecolorresolve' => [Safe\ImageException::class],
		'imagecolorresolvealpha' => [Safe\ImageException::class],
		'imagecolorset' => [Safe\ImageException::class],
		'imagecolorsforindex' => [Safe\ImageException::class],
		'imagecolorstotal' => [Safe\ImageException::class],
		'imagecolortransparent' => [Safe\ImageException::class],
		'imageconvolution' => [Safe\ImageException::class, ''],
		'imagecopy' => [Safe\ImageException::class, ''],
		'imagecopymerge' => [Safe\ImageException::class, ''],
		'imagecopymergegray' => [Safe\ImageException::class, ''],
		'imagecopyresampled' => [Safe\ImageException::class, ''],
		'imagecopyresized' => [Safe\ImageException::class, ''],
		'imagecreate' => [Safe\ImageException::class, ''],
		'imagecreatefrombmp' => [Safe\ImageException::class, ''],
		'imagecreatefromgd' => [Safe\ImageException::class, ''],
		'imagecreatefromgd2' => [Safe\ImageException::class, ''],
		'imagecreatefromgd2part' => [Safe\ImageException::class, ''],
		'imagecreatefromgif' => [Safe\ImageException::class, ''],
		'imagecreatefromjpeg' => [Safe\ImageException::class, ''],
		'imagecreatefrompng' => [Safe\ImageException::class, ''],
		'imagecreatefromstring' => [Safe\ImageException::class],
		'imagecreatefromwbmp' => [Safe\ImageException::class, ''],
		'imagecreatefromwebp' => [Safe\ImageException::class, ''],
		'imagecreatefromxbm' => [Safe\ImageException::class, ''],
		'imagecreatefromxpm' => [Safe\ImageException::class, ''],
		'imagecreatetruecolor' => [Safe\ImageException::class, ''],
		'imagecrop' => [Safe\ImageException::class, ''],
		'imagecropauto' => [Safe\ImageException::class, ''],
		'imagedashedline' => [Safe\ImageException::class, ''],
		'imagedestroy' => [Safe\ImageException::class, ''],
		'imageellipse' => [Safe\ImageException::class, ''],
		'imagefill' => [Safe\ImageException::class, ''],
		'imagefilledarc' => [Safe\ImageException::class, ''],
		'imagefilledellipse' => [Safe\ImageException::class, ''],
		'imagefilledpolygon' => [Safe\ImageException::class, ''],
		'imagefilledrectangle' => [Safe\ImageException::class, ''],
		'imagefilltoborder' => [Safe\ImageException::class, ''],
		'imagefilter' => [Safe\ImageException::class, ''],
		'imageflip' => [Safe\ImageException::class, ''],
		'imagefontheight' => [Safe\ImageException::class],
		'imagefontwidth' => [Safe\ImageException::class],
		'imageftbbox' => [Safe\ImageException::class],
		'imagefttext' => [Safe\ImageException::class],
		'imagegammacorrect' => [Safe\ImageException::class, ''],
		'imagegd' => [Safe\ImageException::class, ''],
		'imagegd2' => [Safe\ImageException::class, ''],
		'imagegetclip' => [Safe\ImageException::class],
		'imagegif' => [Safe\ImageException::class, ''],
		'imagegrabscreen' => [Safe\ImageException::class, ''],
		'imagegrabwindow' => [Safe\ImageException::class, ''],
		'imageinterlace' => [Safe\ImageException::class],
		'imageistruecolor' => [Safe\ImageException::class],
		'imagejpeg' => [Safe\ImageException::class, ''],
		'imagelayereffect' => [Safe\ImageException::class, ''],
		'imageline' => [Safe\ImageException::class, ''],
		'imageloadfont' => [Safe\ImageException::class, ''],
		'imageopenpolygon' => [Safe\ImageException::class, ''],
		'imagepalettecopy' => [Safe\ImageException::class],
		'imagepalettetotruecolor' => [Safe\ImageException::class],
		'imagepng' => [Safe\ImageException::class, ''],
		'imagepolygon' => [Safe\ImageException::class, ''],
		'imagepsbbox' => [Safe\ImageException::class],
		'imagepsencodefont' => [Safe\ImageException::class, ''],
		'imagepsextendfont' => [Safe\ImageException::class, ''],
		'imagepsfreefont' => [Safe\ImageException::class, ''],
		'imagepsloadfont' => [Safe\ImageException::class],
		'imagepsslantfont' => [Safe\ImageException::class, ''],
		'imagepstext' => [Safe\ImageException::class],
		'imagerectangle' => [Safe\ImageException::class, ''],
		'imageresolution' => [Safe\ImageException::class],
		'imagerotate' => [Safe\ImageException::class, ''],
		'imagesavealpha' => [Safe\ImageException::class, ''],
		'imagescale' => [Safe\ImageException::class, ''],
		'imagesetbrush' => [Safe\ImageException::class, ''],
		'imagesetclip' => [Safe\ImageException::class, ''],
		'imagesetinterpolation' => [Safe\ImageException::class, ''],
		'imagesetpixel' => [Safe\ImageException::class, ''],
		'imagesetstyle' => [Safe\ImageException::class, ''],
		'imagesetthickness' => [Safe\ImageException::class, ''],
		'imagesettile' => [Safe\ImageException::class, ''],
		'imagestring' => [Safe\ImageException::class, ''],
		'imagestringup' => [Safe\ImageException::class, ''],
		'imagesx' => [Safe\ImageException::class, ''],
		'imagesy' => [Safe\ImageException::class, ''],
		'imagetruecolortopalette' => [Safe\ImageException::class, ''],
		'imagettfbbox' => [Safe\ImageException::class, ''],
		'imagettftext' => [Safe\ImageException::class, ''],
		'imagetypes' => [Safe\ImageException::class],
		'imagewbmp' => [Safe\ImageException::class, ''],
		'imagewebp' => [Safe\ImageException::class, ''],
		'imagexbm' => [Safe\ImageException::class, ''],
		'imap_*' => [Safe\ImapException::class],
		'imap_append' => [Safe\ImapException::class, ''],
		'imap_check' => [Safe\ImapException::class, ''],
		'imap_clearflag_full' => [Safe\ImapException::class, ''],
		'imap_close' => [Safe\ImapException::class, ''],
		'imap_createmailbox' => [Safe\ImapException::class, ''],
		'imap_deletemailbox' => [Safe\ImapException::class, ''],
		'imap_gc' => [Safe\ImapException::class, ''],
		'imap_headerinfo' => [Safe\ImapException::class, ''],
		'imap_mail' => [Safe\ImapException::class, ''],
		'imap_mail_copy' => [Safe\ImapException::class, ''],
		'imap_mail_move' => [Safe\ImapException::class, ''],
		'imap_mailboxmsginfo' => [Safe\ImapException::class, ''],
		'imap_mutf7_to_utf8' => [Safe\ImapException::class, ''],
		'imap_num_msg' => [Safe\ImapException::class, ''],
		'imap_open' => [Safe\ImapException::class, ''],
		'imap_renamemailbox' => [Safe\ImapException::class, ''],
		'imap_savebody' => [Safe\ImapException::class, ''],
		'imap_set_quota' => [Safe\ImapException::class, ''],
		'imap_setacl' => [Safe\ImapException::class, ''],
		'imap_setflag_full' => [Safe\ImapException::class, ''],
		'imap_subscribe' => [Safe\ImapException::class, ''],
		'imap_thread' => [Safe\ImapException::class, ''],
		'imap_timeout' => [Safe\ImapException::class, ''],
		'imap_undelete' => [Safe\ImapException::class, ''],
		'imap_unsubscribe' => [Safe\ImapException::class, ''],
		'imap_utf8_to_mutf7' => [Safe\ImapException::class, ''],
		'inclued_*' => [Safe\IncluedException::class],
		'inet_*' => [Safe\NetworkException::class],
		'inet_ntop' => [Safe\NetworkException::class, ''],
		'inflate_add' => [Safe\ZlibException::class, ''],
		'inflate_get_read_len' => [Safe\ZlibException::class, ''],
		'inflate_get_status' => [Safe\ZlibException::class, ''],
		'inflate_init' => [Safe\ZlibException::class, ''],
		'ingres_*' => [Safe\IngresiiException::class],
		'ingres_autocommit' => [Safe\IngresiiException::class, ''],
		'ingres_close' => [Safe\IngresiiException::class, ''],
		'ingres_commit' => [Safe\IngresiiException::class, ''],
		'ingres_connect' => [Safe\IngresiiException::class, ''],
		'ingres_execute' => [Safe\IngresiiException::class, ''],
		'ingres_field_name' => [Safe\IngresiiException::class, ''],
		'ingres_field_type' => [Safe\IngresiiException::class, ''],
		'ingres_free_result' => [Safe\IngresiiException::class, ''],
		'ingres_pconnect' => [Safe\IngresiiException::class, ''],
		'ingres_result_seek' => [Safe\IngresiiException::class, ''],
		'ingres_rollback' => [Safe\IngresiiException::class, ''],
		'ingres_set_environment' => [Safe\IngresiiException::class, ''],
		'ini_get' => [Safe\InfoException::class, ''],
		'ini_set' => [Safe\InfoException::class, ''],
		'inotify_*' => [Safe\InotifyException::class],
		'inotify_init' => [Safe\InotifyException::class, ''],
		'inotify_rm_watch' => [Safe\InotifyException::class, ''],
		'intl_*' => [Safe\IntlException::class],
		'ip2long' => [Safe\NetworkException::class],
		'iptcembed' => [Safe\ImageException::class, ''],
		'iptcparse' => [Safe\ImageException::class, ''],
		'iterator_*' => [Safe\SplException::class],
		'jddayofweek' => [Safe\CalendarException::class],
		'jdmonthname' => [Safe\CalendarException::class],
		'jdtofrench' => [Safe\CalendarException::class],
		'jdtogregorian' => [Safe\CalendarException::class],
		'jdtojewish' => [Safe\CalendarException::class],
		'jdtojulian' => [Safe\CalendarException::class],
		'jdtounix' => [Safe\CalendarException::class],
		'jewishtojd' => [Safe\CalendarException::class],
		'jpeg2wbmp' => [Safe\ImageException::class, ''],
		'json_*' => [Safe\JsonException::class],
		'json_decode' => [Safe\JsonException::class, 'json'],
		'json_encode' => [Safe\JsonException::class, 'json'],
		'json_last_error_msg' => [Safe\JsonException::class, ''],
		'judy_*' => [Safe\JudyException::class],
		'juliantojd' => [Safe\CalendarException::class],
		'krsort' => [Safe\ArrayException::class, ''],
		'ksort' => [Safe\ArrayException::class, ''],
		'lchgrp' => [Safe\FilesystemException::class, ''],
		'lchown' => [Safe\FilesystemException::class, ''],
		'ldap_*' => [Safe\LdapException::class],
		'ldap_add' => [Safe\LdapException::class, ''],
		'ldap_add_ext' => [Safe\LdapException::class, ''],
		'ldap_bind' => [Safe\LdapException::class, ''],
		'ldap_bind_ext' => [Safe\LdapException::class, ''],
		'ldap_control_paged_result' => [Safe\LdapException::class, ''],
		'ldap_control_paged_result_response' => [Safe\LdapException::class, ''],
		'ldap_count_entries' => [Safe\LdapException::class, ''],
		'ldap_delete' => [Safe\LdapException::class, ''],
		'ldap_delete_ext' => [Safe\LdapException::class, ''],
		'ldap_exop' => [Safe\LdapException::class, ''],
		'ldap_exop_passwd' => [Safe\LdapException::class, ''],
		'ldap_exop_whoami' => [Safe\LdapException::class, ''],
		'ldap_explode_dn' => [Safe\LdapException::class, ''],
		'ldap_first_attribute' => [Safe\LdapException::class, ''],
		'ldap_first_entry' => [Safe\LdapException::class, ''],
		'ldap_free_result' => [Safe\LdapException::class, ''],
		'ldap_get_attributes' => [Safe\LdapException::class, ''],
		'ldap_get_dn' => [Safe\LdapException::class, ''],
		'ldap_get_entries' => [Safe\LdapException::class, ''],
		'ldap_get_option' => [Safe\LdapException::class, ''],
		'ldap_get_values' => [Safe\LdapException::class, ''],
		'ldap_get_values_len' => [Safe\LdapException::class, ''],
		'ldap_list' => [Safe\LdapException::class, ''],
		'ldap_mod_add' => [Safe\LdapException::class, ''],
		'ldap_mod_add_ext' => [Safe\LdapException::class, ''],
		'ldap_mod_del' => [Safe\LdapException::class, ''],
		'ldap_mod_del_ext' => [Safe\LdapException::class, ''],
		'ldap_mod_replace' => [Safe\LdapException::class, ''],
		'ldap_mod_replace_ext' => [Safe\LdapException::class, ''],
		'ldap_modify_batch' => [Safe\LdapException::class, ''],
		'ldap_next_attribute' => [Safe\LdapException::class, ''],
		'ldap_parse_exop' => [Safe\LdapException::class, ''],
		'ldap_parse_result' => [Safe\LdapException::class, ''],
		'ldap_read' => [Safe\LdapException::class, ''],
		'ldap_rename' => [Safe\LdapException::class, ''],
		'ldap_rename_ext' => [Safe\LdapException::class, ''],
		'ldap_sasl_bind' => [Safe\LdapException::class, ''],
		'ldap_search' => [Safe\LdapException::class, ''],
		'ldap_set_option' => [Safe\LdapException::class, ''],
		'ldap_unbind' => [Safe\LdapException::class, ''],
		'libxml_*' => [Safe\LibxmlException::class],
		'libxml_get_last_error' => [Safe\LibxmlException::class, ''],
		'libxml_set_external_entity_loader' => [Safe\LibxmlException::class, ''],
		'link' => [Safe\FilesystemException::class, ''],
		'linkinfo' => [Safe\FilesystemException::class],
		'localtime' => [Safe\DatetimeException::class],
		'long2ip' => [Safe\NetworkException::class],
		'lstat' => [Safe\FilesystemException::class],
		'lzf_*' => [Safe\LzfException::class],
		'lzf_compress' => [Safe\LzfException::class, ''],
		'lzf_decompress' => [Safe\LzfException::class, ''],
		'm_*' => [Safe\McveException::class],
		'mail' => [Safe\MailException::class, ''],
		'mailparse_*' => [Safe\MailparseException::class],
		'mailparse_msg_extract_part_file' => [Safe\MailparseException::class, ''],
		'mailparse_msg_free' => [Safe\MailparseException::class, ''],
		'mailparse_msg_parse' => [Safe\MailparseException::class, ''],
		'mailparse_msg_parse_file' => [Safe\MailparseException::class, ''],
		'mailparse_stream_encode' => [Safe\MailparseException::class, ''],
		'mb_*' => [Safe\MbstringException::class],
		'mb_chr' => [Safe\MbstringException::class, ''],
		'mb_detect_order' => [Safe\MbstringException::class, ''],
		'mb_encoding_aliases' => [Safe\MbstringException::class, ''],
		'mb_ereg_replace' => [Safe\MbstringException::class, ''],
		'mb_ereg_replace_callback' => [Safe\MbstringException::class, ''],
		'mb_ereg_search_getregs' => [Safe\MbstringException::class, ''],
		'mb_ereg_search_init' => [Safe\MbstringException::class, ''],
		'mb_ereg_search_regs' => [Safe\MbstringException::class, ''],
		'mb_ereg_search_setpos' => [Safe\MbstringException::class, ''],
		'mb_eregi_replace' => [Safe\MbstringException::class, ''],
		'mb_http_output' => [Safe\MbstringException::class, ''],
		'mb_internal_encoding' => [Safe\MbstringException::class, ''],
		'mb_ord' => [Safe\MbstringException::class, ''],
		'mb_parse_str' => [Safe\MbstringException::class, ''],
		'mb_regex_encoding' => [Safe\MbstringException::class, ''],
		'mb_send_mail' => [Safe\MbstringException::class, ''],
		'mb_substitute_character' => [Safe\MbstringException::class, ''],
		'md5_file' => [Safe\StringsException::class, ''],
		'memcache_*' => [Safe\MemcacheException::class],
		'metaphone' => [Safe\StringsException::class, ''],
		'microtime' => [Safe\DatetimeException::class],
		'mime_content_type' => [Safe\FileinfoException::class, ''],
		'ming_*' => [Safe\MingException::class],
		'mkdir' => [Safe\FilesystemException::class, ''],
		'mktime' => [Safe\DatetimeException::class, ''],
		'move_uploaded_file' => [Safe\FilesystemException::class, ''],
		'mqseries_*' => [Safe\MqseriesException::class],
		'msession_*' => [Safe\MsessionException::class],
		'msg_*' => [Safe\SemException::class],
		'msg_queue_exists' => [Safe\SemException::class, ''],
		'msg_receive' => [Safe\SemException::class, ''],
		'msg_remove_queue' => [Safe\SemException::class, ''],
		'msg_send' => [Safe\SemException::class, ''],
		'msg_set_queue' => [Safe\SemException::class, ''],
		'msql_*' => [Safe\MsqlException::class],
		'msql_affected_rows' => [Safe\MsqlException::class, ''],
		'msql_close' => [Safe\MsqlException::class, ''],
		'msql_connect' => [Safe\MsqlException::class, ''],
		'msql_create_db' => [Safe\MsqlException::class, ''],
		'msql_data_seek' => [Safe\MsqlException::class, ''],
		'msql_db_query' => [Safe\MsqlException::class, ''],
		'msql_drop_db' => [Safe\MsqlException::class, ''],
		'msql_field_len' => [Safe\MsqlException::class, ''],
		'msql_field_name' => [Safe\MsqlException::class, ''],
		'msql_field_seek' => [Safe\MsqlException::class, ''],
		'msql_field_table' => [Safe\MsqlException::class, ''],
		'msql_field_type' => [Safe\MsqlException::class, ''],
		'msql_free_result' => [Safe\MsqlException::class, ''],
		'msql_pconnect' => [Safe\MsqlException::class, ''],
		'msql_query' => [Safe\MsqlException::class, ''],
		'msql_select_db' => [Safe\MsqlException::class, ''],
		'mssql_*' => [Safe\MssqlException::class],
		'mssql_bind' => [Safe\MssqlException::class, ''],
		'mssql_close' => [Safe\MssqlException::class, ''],
		'mssql_connect' => [Safe\MssqlException::class, ''],
		'mssql_data_seek' => [Safe\MssqlException::class, ''],
		'mssql_field_length' => [Safe\MssqlException::class, ''],
		'mssql_field_name' => [Safe\MssqlException::class, ''],
		'mssql_field_seek' => [Safe\MssqlException::class, ''],
		'mssql_field_type' => [Safe\MssqlException::class, ''],
		'mssql_free_result' => [Safe\MssqlException::class, ''],
		'mssql_free_statement' => [Safe\MssqlException::class, ''],
		'mssql_init' => [Safe\MssqlException::class, ''],
		'mssql_pconnect' => [Safe\MssqlException::class, ''],
		'mssql_query' => [Safe\MssqlException::class, ''],
		'mssql_select_db' => [Safe\MssqlException::class, ''],
		'mysql_*' => [Safe\MysqlException::class],
		'mysql_close' => [Safe\MysqlException::class, ''],
		'mysql_connect' => [Safe\MysqlException::class, ''],
		'mysql_create_db' => [Safe\MysqlException::class, ''],
		'mysql_data_seek' => [Safe\MysqlException::class, ''],
		'mysql_db_name' => [Safe\MysqlException::class, ''],
		'mysql_db_query' => [Safe\MysqlException::class, ''],
		'mysql_drop_db' => [Safe\MysqlException::class, ''],
		'mysql_fetch_lengths' => [Safe\MysqlException::class, ''],
		'mysql_field_flags' => [Safe\MysqlException::class, ''],
		'mysql_field_len' => [Safe\MysqlException::class, ''],
		'mysql_field_name' => [Safe\MysqlException::class, ''],
		'mysql_field_seek' => [Safe\MysqlException::class, ''],
		'mysql_free_result' => [Safe\MysqlException::class, ''],
		'mysql_get_host_info' => [Safe\MysqlException::class, ''],
		'mysql_get_proto_info' => [Safe\MysqlException::class, ''],
		'mysql_get_server_info' => [Safe\MysqlException::class, ''],
		'mysql_info' => [Safe\MysqlException::class, ''],
		'mysql_list_dbs' => [Safe\MysqlException::class, ''],
		'mysql_list_fields' => [Safe\MysqlException::class, ''],
		'mysql_list_processes' => [Safe\MysqlException::class, ''],
		'mysql_list_tables' => [Safe\MysqlException::class, ''],
		'mysql_num_fields' => [Safe\MysqlException::class, ''],
		'mysql_num_rows' => [Safe\MysqlException::class, ''],
		'mysql_query' => [Safe\MysqlException::class, ''],
		'mysql_real_escape_string' => [Safe\MysqlException::class, ''],
		'mysql_result' => [Safe\MysqlException::class, ''],
		'mysql_select_db' => [Safe\MysqlException::class, ''],
		'mysql_set_charset' => [Safe\MysqlException::class, ''],
		'mysql_tablename' => [Safe\MysqlException::class, ''],
		'mysql_thread_id' => [Safe\MysqlException::class, ''],
		'mysql_unbuffered_query' => [Safe\MysqlException::class, ''],
		'mysqli_*' => [Safe\MysqliException::class],
		'mysqli_get_cache_stats' => [Safe\MysqliException::class, ''],
		'mysqli_get_client_stats' => [Safe\MysqliException::class, ''],
		'mysqlnd_ms_dump_servers' => [Safe\MysqlndMsException::class, ''],
		'mysqlnd_ms_fabric_select_global' => [Safe\MysqlndMsException::class, ''],
		'mysqlnd_ms_fabric_select_shard' => [Safe\MysqlndMsException::class, ''],
		'mysqlnd_ms_get_last_used_connection' => [Safe\MysqlndMsException::class, ''],
		'mysqlnd_ms_xa_gc' => [Safe\MysqlndMsException::class, ''],
		'mysqlnd_qc_clear_cache' => [Safe\MysqlndQcException::class, ''],
		'mysqlnd_qc_set_is_select' => [Safe\MysqlndQcException::class, ''],
		'mysqlnd_qc_set_storage_handler' => [Safe\MysqlndQcException::class, ''],
		'mysqlnd_uh_set_connection_proxy' => [Safe\MysqlndUhException::class, ''],
		'mysqlnd_uh_set_statement_proxy' => [Safe\MysqlndUhException::class, ''],
		'natcasesort' => [Safe\ArrayException::class, ''],
		'natsort' => [Safe\ArrayException::class, ''],
		'ngettext' => [Safe\GettextException::class],
		'oauth_*' => [Safe\OauthException::class],
		'ob_*' => [Safe\OutcontrolException::class],
		'ob_end_clean' => [Safe\OutcontrolException::class, ''],
		'ob_end_flush' => [Safe\OutcontrolException::class, ''],
		'oci_*' => [Safe\Oci8Exception::class],
		'oci_bind_array_by_name' => [Safe\Oci8Exception::class, ''],
		'oci_bind_by_name' => [Safe\Oci8Exception::class, ''],
		'oci_cancel' => [Safe\Oci8Exception::class, ''],
		'oci_close' => [Safe\Oci8Exception::class, ''],
		'oci_commit' => [Safe\Oci8Exception::class, ''],
		'oci_connect' => [Safe\Oci8Exception::class, ''],
		'oci_define_by_name' => [Safe\Oci8Exception::class, ''],
		'oci_execute' => [Safe\Oci8Exception::class, ''],
		'oci_fetch' => [Safe\Oci8Exception::class, ''],
		'oci_fetch_all' => [Safe\Oci8Exception::class, ''],
		'oci_field_name' => [Safe\Oci8Exception::class, ''],
		'oci_field_precision' => [Safe\Oci8Exception::class, ''],
		'oci_field_scale' => [Safe\Oci8Exception::class, ''],
		'oci_field_size' => [Safe\Oci8Exception::class, ''],
		'oci_field_type' => [Safe\Oci8Exception::class, ''],
		'oci_field_type_raw' => [Safe\Oci8Exception::class, ''],
		'oci_free_descriptor' => [Safe\Oci8Exception::class, ''],
		'oci_free_statement' => [Safe\Oci8Exception::class, ''],
		'oci_new_collection' => [Safe\Oci8Exception::class, ''],
		'oci_new_connect' => [Safe\Oci8Exception::class, ''],
		'oci_new_cursor' => [Safe\Oci8Exception::class, ''],
		'oci_new_descriptor' => [Safe\Oci8Exception::class, ''],
		'oci_num_fields' => [Safe\Oci8Exception::class, ''],
		'oci_num_rows' => [Safe\Oci8Exception::class, ''],
		'oci_parse' => [Safe\Oci8Exception::class, ''],
		'oci_pconnect' => [Safe\Oci8Exception::class, ''],
		'oci_result' => [Safe\Oci8Exception::class, ''],
		'oci_rollback' => [Safe\Oci8Exception::class, ''],
		'oci_server_version' => [Safe\Oci8Exception::class, ''],
		'oci_set_action' => [Safe\Oci8Exception::class, ''],
		'oci_set_call_timeout' => [Safe\Oci8Exception::class, ''],
		'oci_set_client_identifier' => [Safe\Oci8Exception::class, ''],
		'oci_set_client_info' => [Safe\Oci8Exception::class, ''],
		'oci_set_db_operation' => [Safe\Oci8Exception::class, ''],
		'oci_set_edition' => [Safe\Oci8Exception::class, ''],
		'oci_set_module_name' => [Safe\Oci8Exception::class, ''],
		'oci_set_prefetch' => [Safe\Oci8Exception::class, ''],
		'oci_statement_type' => [Safe\Oci8Exception::class, ''],
		'oci_unregister_taf_callback' => [Safe\Oci8Exception::class, ''],
		'odbc_*' => [Safe\UodbcException::class],
		'odbc_autocommit' => [Safe\UodbcException::class, ''],
		'odbc_binmode' => [Safe\UodbcException::class, ''],
		'odbc_columnprivileges' => [Safe\UodbcException::class, ''],
		'odbc_columns' => [Safe\UodbcException::class, ''],
		'odbc_commit' => [Safe\UodbcException::class, ''],
		'odbc_data_source' => [Safe\UodbcException::class, ''],
		'odbc_exec' => [Safe\UodbcException::class, ''],
		'odbc_execute' => [Safe\UodbcException::class, ''],
		'odbc_fetch_into' => [Safe\UodbcException::class, ''],
		'odbc_field_len' => [Safe\UodbcException::class, ''],
		'odbc_field_name' => [Safe\UodbcException::class, ''],
		'odbc_field_num' => [Safe\UodbcException::class, ''],
		'odbc_field_scale' => [Safe\UodbcException::class, ''],
		'odbc_field_type' => [Safe\UodbcException::class, ''],
		'odbc_foreignkeys' => [Safe\UodbcException::class, ''],
		'odbc_gettypeinfo' => [Safe\UodbcException::class, ''],
		'odbc_longreadlen' => [Safe\UodbcException::class, ''],
		'odbc_prepare' => [Safe\UodbcException::class, ''],
		'odbc_primarykeys' => [Safe\UodbcException::class, ''],
		'odbc_result' => [Safe\UodbcException::class, ''],
		'odbc_result_all' => [Safe\UodbcException::class, ''],
		'odbc_rollback' => [Safe\UodbcException::class, ''],
		'odbc_setoption' => [Safe\UodbcException::class, ''],
		'odbc_specialcolumns' => [Safe\UodbcException::class, ''],
		'odbc_statistics' => [Safe\UodbcException::class, ''],
		'odbc_tableprivileges' => [Safe\UodbcException::class, ''],
		'odbc_tables' => [Safe\UodbcException::class, ''],
		'opcache_*' => [Safe\OpcacheException::class],
		'opcache_compile_file' => [Safe\OpcacheException::class, ''],
		'opcache_get_status' => [Safe\OpcacheException::class, ''],
		'opendir' => [Safe\DirException::class, ''],
		'openlog' => [Safe\NetworkException::class, ''],
		'openssl_*' => [Safe\OpensslException::class],
		'openssl_cipher_iv_length' => [Safe\OpensslException::class, ''],
		'openssl_csr_export' => [Safe\OpensslException::class, ''],
		'openssl_csr_export_to_file' => [Safe\OpensslException::class, ''],
		'openssl_csr_get_subject' => [Safe\OpensslException::class, ''],
		'openssl_csr_new' => [Safe\OpensslException::class, ''],
		'openssl_csr_sign' => [Safe\OpensslException::class, ''],
		'openssl_decrypt' => [Safe\OpensslException::class, ''],
		'openssl_dh_compute_key' => [Safe\OpensslException::class, ''],
		'openssl_digest' => [Safe\OpensslException::class, ''],
		'openssl_open' => [Safe\OpensslException::class, ''],
		'openssl_pbkdf2' => [Safe\OpensslException::class, ''],
		'openssl_pkcs12_export' => [Safe\OpensslException::class, ''],
		'openssl_pkcs12_export_to_file' => [Safe\OpensslException::class, ''],
		'openssl_pkcs12_read' => [Safe\OpensslException::class, ''],
		'openssl_pkcs7_decrypt' => [Safe\OpensslException::class, ''],
		'openssl_pkcs7_encrypt' => [Safe\OpensslException::class, ''],
		'openssl_pkcs7_read' => [Safe\OpensslException::class, ''],
		'openssl_pkcs7_sign' => [Safe\OpensslException::class, ''],
		'openssl_pkey_export' => [Safe\OpensslException::class, ''],
		'openssl_pkey_export_to_file' => [Safe\OpensslException::class, ''],
		'openssl_pkey_get_private' => [Safe\OpensslException::class, ''],
		'openssl_pkey_get_public' => [Safe\OpensslException::class, ''],
		'openssl_pkey_new' => [Safe\OpensslException::class, ''],
		'openssl_private_decrypt' => [Safe\OpensslException::class, ''],
		'openssl_private_encrypt' => [Safe\OpensslException::class, ''],
		'openssl_public_decrypt' => [Safe\OpensslException::class, ''],
		'openssl_public_encrypt' => [Safe\OpensslException::class, ''],
		'openssl_random_pseudo_bytes' => [Safe\OpensslException::class, ''],
		'openssl_seal' => [Safe\OpensslException::class, ''],
		'openssl_sign' => [Safe\OpensslException::class, ''],
		'openssl_x509_export' => [Safe\OpensslException::class, ''],
		'openssl_x509_export_to_file' => [Safe\OpensslException::class, ''],
		'openssl_x509_fingerprint' => [Safe\OpensslException::class, ''],
		'openssl_x509_read' => [Safe\OpensslException::class, ''],
		'output_add_rewrite_var' => [Safe\OutcontrolException::class, ''],
		'output_reset_rewrite_vars' => [Safe\OutcontrolException::class, ''],
		'parse_ini_file' => [Safe\FilesystemException::class, ''],
		'parse_ini_string' => [Safe\FilesystemException::class, ''],
		'parse_url' => [Safe\UrlException::class, ''],
		'parsekit_*' => [Safe\ParsekitException::class],
		'passthru' => [Safe\ExecException::class],
		'password_*' => [Safe\PasswordException::class],
		'password_hash' => [Safe\PasswordException::class, ''],
		'pathinfo' => [Safe\FilesystemException::class],
		'pclose' => [Safe\FilesystemException::class],
		'pcntl_*' => [Safe\PcntlException::class],
		'pcntl_exec' => [Safe\PcntlException::class, ''],
		'pcntl_getpriority' => [Safe\PcntlException::class, ''],
		'pcntl_setpriority' => [Safe\PcntlException::class, ''],
		'pcntl_signal_dispatch' => [Safe\PcntlException::class, ''],
		'pcntl_sigprocmask' => [Safe\PcntlException::class, ''],
		'pcntl_strerror' => [Safe\PcntlException::class, ''],
		'pdf_*' => [Safe\PdfException::class],
		'pdf_activate_item' => [Safe\PdfException::class, ''],
		'pdf_add_locallink' => [Safe\PdfException::class, ''],
		'pdf_add_nameddest' => [Safe\PdfException::class, ''],
		'pdf_add_note' => [Safe\PdfException::class, ''],
		'pdf_add_pdflink' => [Safe\PdfException::class, ''],
		'pdf_add_thumbnail' => [Safe\PdfException::class, ''],
		'pdf_add_weblink' => [Safe\PdfException::class, ''],
		'pdf_attach_file' => [Safe\PdfException::class, ''],
		'pdf_begin_layer' => [Safe\PdfException::class, ''],
		'pdf_begin_page' => [Safe\PdfException::class, ''],
		'pdf_begin_page_ext' => [Safe\PdfException::class, ''],
		'pdf_circle' => [Safe\PdfException::class, ''],
		'pdf_clip' => [Safe\PdfException::class, ''],
		'pdf_close' => [Safe\PdfException::class, ''],
		'pdf_close_pdi' => [Safe\PdfException::class, ''],
		'pdf_close_pdi_page' => [Safe\PdfException::class, ''],
		'pdf_closepath' => [Safe\PdfException::class, ''],
		'pdf_closepath_fill_stroke' => [Safe\PdfException::class, ''],
		'pdf_closepath_stroke' => [Safe\PdfException::class, ''],
		'pdf_concat' => [Safe\PdfException::class, ''],
		'pdf_continue_text' => [Safe\PdfException::class, ''],
		'pdf_curveto' => [Safe\PdfException::class, ''],
		'pdf_delete' => [Safe\PdfException::class, ''],
		'pdf_end_layer' => [Safe\PdfException::class, ''],
		'pdf_end_page' => [Safe\PdfException::class, ''],
		'pdf_end_page_ext' => [Safe\PdfException::class, ''],
		'pdf_end_pattern' => [Safe\PdfException::class, ''],
		'pdf_end_template' => [Safe\PdfException::class, ''],
		'pdf_fill' => [Safe\PdfException::class, ''],
		'pdf_fill_stroke' => [Safe\PdfException::class, ''],
		'pdf_fit_image' => [Safe\PdfException::class, ''],
		'pdf_fit_pdi_page' => [Safe\PdfException::class, ''],
		'pdf_fit_textline' => [Safe\PdfException::class, ''],
		'pdf_initgraphics' => [Safe\PdfException::class, ''],
		'pdf_lineto' => [Safe\PdfException::class, ''],
		'pdf_makespotcolor' => [Safe\PdfException::class, ''],
		'pdf_moveto' => [Safe\PdfException::class, ''],
		'pdf_open_file' => [Safe\PdfException::class, ''],
		'pdf_place_image' => [Safe\PdfException::class, ''],
		'pdf_place_pdi_page' => [Safe\PdfException::class, ''],
		'pdf_rect' => [Safe\PdfException::class, ''],
		'pdf_restore' => [Safe\PdfException::class, ''],
		'pdf_rotate' => [Safe\PdfException::class, ''],
		'pdf_save' => [Safe\PdfException::class, ''],
		'pdf_scale' => [Safe\PdfException::class, ''],
		'pdf_set_border_color' => [Safe\PdfException::class, ''],
		'pdf_set_border_dash' => [Safe\PdfException::class, ''],
		'pdf_set_border_style' => [Safe\PdfException::class, ''],
		'pdf_set_info' => [Safe\PdfException::class, ''],
		'pdf_set_layer_dependency' => [Safe\PdfException::class, ''],
		'pdf_set_parameter' => [Safe\PdfException::class, ''],
		'pdf_set_text_pos' => [Safe\PdfException::class, ''],
		'pdf_set_value' => [Safe\PdfException::class, ''],
		'pdf_setcolor' => [Safe\PdfException::class, ''],
		'pdf_setdash' => [Safe\PdfException::class, ''],
		'pdf_setdashpattern' => [Safe\PdfException::class, ''],
		'pdf_setflat' => [Safe\PdfException::class, ''],
		'pdf_setfont' => [Safe\PdfException::class, ''],
		'pdf_setgray' => [Safe\PdfException::class, ''],
		'pdf_setgray_fill' => [Safe\PdfException::class, ''],
		'pdf_setgray_stroke' => [Safe\PdfException::class, ''],
		'pdf_setlinejoin' => [Safe\PdfException::class, ''],
		'pdf_setlinewidth' => [Safe\PdfException::class, ''],
		'pdf_setmatrix' => [Safe\PdfException::class, ''],
		'pdf_setmiterlimit' => [Safe\PdfException::class, ''],
		'pdf_setrgbcolor' => [Safe\PdfException::class, ''],
		'pdf_setrgbcolor_fill' => [Safe\PdfException::class, ''],
		'pdf_setrgbcolor_stroke' => [Safe\PdfException::class, ''],
		'pdf_show' => [Safe\PdfException::class, ''],
		'pdf_show_xy' => [Safe\PdfException::class, ''],
		'pdf_skew' => [Safe\PdfException::class, ''],
		'pdf_stroke' => [Safe\PdfException::class, ''],
		'pfsockopen' => [Safe\NetworkException::class],
		'pg_*' => [Safe\PgsqlException::class],
		'pg_cancel_query' => [Safe\PgsqlException::class, ''],
		'pg_client_encoding' => [Safe\PgsqlException::class, ''],
		'pg_close' => [Safe\PgsqlException::class, ''],
		'pg_connect' => [Safe\PgsqlException::class, ''],
		'pg_connection_reset' => [Safe\PgsqlException::class, ''],
		'pg_convert' => [Safe\PgsqlException::class, ''],
		'pg_copy_from' => [Safe\PgsqlException::class, ''],
		'pg_copy_to' => [Safe\PgsqlException::class, ''],
		'pg_dbname' => [Safe\PgsqlException::class, ''],
		'pg_delete' => [Safe\PgsqlException::class, ''],
		'pg_end_copy' => [Safe\PgsqlException::class, ''],
		'pg_execute' => [Safe\PgsqlException::class, ''],
		'pg_field_name' => [Safe\PgsqlException::class, ''],
		'pg_field_table' => [Safe\PgsqlException::class, ''],
		'pg_field_type' => [Safe\PgsqlException::class, ''],
		'pg_flush' => [Safe\PgsqlException::class, ''],
		'pg_free_result' => [Safe\PgsqlException::class, ''],
		'pg_host' => [Safe\PgsqlException::class, ''],
		'pg_insert' => [Safe\PgsqlException::class, ''],
		'pg_last_error' => [Safe\PgsqlException::class, ''],
		'pg_last_notice' => [Safe\PgsqlException::class, ''],
		'pg_last_oid' => [Safe\PgsqlException::class, ''],
		'pg_lo_close' => [Safe\PgsqlException::class, ''],
		'pg_lo_export' => [Safe\PgsqlException::class, ''],
		'pg_lo_import' => [Safe\PgsqlException::class, ''],
		'pg_lo_open' => [Safe\PgsqlException::class, ''],
		'pg_lo_read' => [Safe\PgsqlException::class, ''],
		'pg_lo_read_all' => [Safe\PgsqlException::class, ''],
		'pg_lo_seek' => [Safe\PgsqlException::class, ''],
		'pg_lo_truncate' => [Safe\PgsqlException::class, ''],
		'pg_lo_unlink' => [Safe\PgsqlException::class, ''],
		'pg_lo_write' => [Safe\PgsqlException::class, ''],
		'pg_meta_data' => [Safe\PgsqlException::class, ''],
		'pg_options' => [Safe\PgsqlException::class, ''],
		'pg_parameter_status' => [Safe\PgsqlException::class, ''],
		'pg_pconnect' => [Safe\PgsqlException::class, ''],
		'pg_ping' => [Safe\PgsqlException::class, ''],
		'pg_port' => [Safe\PgsqlException::class, ''],
		'pg_prepare' => [Safe\PgsqlException::class, ''],
		'pg_put_line' => [Safe\PgsqlException::class, ''],
		'pg_query' => [Safe\PgsqlException::class, ''],
		'pg_query_params' => [Safe\PgsqlException::class, ''],
		'pg_result_error_field' => [Safe\PgsqlException::class, ''],
		'pg_result_seek' => [Safe\PgsqlException::class, ''],
		'pg_select' => [Safe\PgsqlException::class, ''],
		'pg_send_execute' => [Safe\PgsqlException::class, ''],
		'pg_send_prepare' => [Safe\PgsqlException::class, ''],
		'pg_send_query' => [Safe\PgsqlException::class, ''],
		'pg_send_query_params' => [Safe\PgsqlException::class, ''],
		'pg_socket' => [Safe\PgsqlException::class, ''],
		'pg_trace' => [Safe\PgsqlException::class, ''],
		'pg_tty' => [Safe\PgsqlException::class, ''],
		'pg_update' => [Safe\PgsqlException::class, ''],
		'pg_version' => [Safe\PgsqlException::class, ''],
		'phpcredits' => [Safe\InfoException::class, ''],
		'phpdbg_*' => [Safe\PhpdbgException::class],
		'phpinfo' => [Safe\InfoException::class, ''],
		'png2wbmp' => [Safe\ImageException::class, ''],
		'popen' => [Safe\FilesystemException::class],
		'posix_*' => [Safe\PosixException::class],
		'posix_access' => [Safe\PosixException::class, ''],
		'posix_getgrnam' => [Safe\PosixException::class, ''],
		'posix_getpgid' => [Safe\PosixException::class, ''],
		'posix_initgroups' => [Safe\PosixException::class, ''],
		'posix_kill' => [Safe\PosixException::class, ''],
		'posix_mkfifo' => [Safe\PosixException::class, ''],
		'posix_mknod' => [Safe\PosixException::class, ''],
		'posix_setegid' => [Safe\PosixException::class, ''],
		'posix_seteuid' => [Safe\PosixException::class, ''],
		'posix_setgid' => [Safe\PosixException::class, ''],
		'posix_setpgid' => [Safe\PosixException::class, ''],
		'posix_setrlimit' => [Safe\PosixException::class, ''],
		'posix_setuid' => [Safe\PosixException::class, ''],
		'preg_*' => [Safe\PcreException::class],
		'preg_filter' => [Safe\PcreException::class, 'pcre'],
		'preg_grep' => [Safe\PcreException::class, 'pcre'],
		'preg_match' => [Safe\PcreException::class, 'pcre'],
		'preg_match_all' => [Safe\PcreException::class, 'pcre'],
		'preg_replace' => [Safe\PcreException::class, 'pcre'],
		'preg_replace_callback' => [Safe\PcreException::class, 'pcre'],
		'preg_replace_callback_array' => [Safe\PcreException::class, 'pcre'],
		'preg_split' => [Safe\PcreException::class, 'pcre'],
		'proc_*' => [Safe\ExecException::class],
		'proc_get_status' => [Safe\ExecException::class, ''],
		'proc_nice' => [Safe\ExecException::class, ''],
		'ps_*' => [Safe\PsException::class],
		'ps_add_launchlink' => [Safe\PsException::class, ''],
		'ps_add_locallink' => [Safe\PsException::class, ''],
		'ps_add_note' => [Safe\PsException::class, ''],
		'ps_add_pdflink' => [Safe\PsException::class, ''],
		'ps_add_weblink' => [Safe\PsException::class, ''],
		'ps_arc' => [Safe\PsException::class, ''],
		'ps_arcn' => [Safe\PsException::class, ''],
		'ps_begin_page' => [Safe\PsException::class, ''],
		'ps_begin_pattern' => [Safe\PsException::class, ''],
		'ps_begin_template' => [Safe\PsException::class, ''],
		'ps_circle' => [Safe\PsException::class, ''],
		'ps_clip' => [Safe\PsException::class, ''],
		'ps_close' => [Safe\PsException::class, ''],
		'ps_close_image' => [Safe\PsException::class, ''],
		'ps_closepath' => [Safe\PsException::class, ''],
		'ps_closepath_stroke' => [Safe\PsException::class, ''],
		'ps_continue_text' => [Safe\PsException::class, ''],
		'ps_curveto' => [Safe\PsException::class, ''],
		'ps_delete' => [Safe\PsException::class, ''],
		'ps_end_page' => [Safe\PsException::class, ''],
		'ps_end_pattern' => [Safe\PsException::class, ''],
		'ps_end_template' => [Safe\PsException::class, ''],
		'ps_fill' => [Safe\PsException::class, ''],
		'ps_fill_stroke' => [Safe\PsException::class, ''],
		'ps_get_parameter' => [Safe\PsException::class, ''],
		'ps_hyphenate' => [Safe\PsException::class, ''],
		'ps_include_file' => [Safe\PsException::class, ''],
		'ps_lineto' => [Safe\PsException::class, ''],
		'ps_moveto' => [Safe\PsException::class, ''],
		'ps_new' => [Safe\PsException::class, ''],
		'ps_open_file' => [Safe\PsException::class, ''],
		'ps_place_image' => [Safe\PsException::class, ''],
		'ps_rect' => [Safe\PsException::class, ''],
		'ps_restore' => [Safe\PsException::class, ''],
		'ps_rotate' => [Safe\PsException::class, ''],
		'ps_save' => [Safe\PsException::class, ''],
		'ps_scale' => [Safe\PsException::class, ''],
		'ps_set_border_color' => [Safe\PsException::class, ''],
		'ps_set_border_dash' => [Safe\PsException::class, ''],
		'ps_set_border_style' => [Safe\PsException::class, ''],
		'ps_set_info' => [Safe\PsException::class, ''],
		'ps_set_parameter' => [Safe\PsException::class, ''],
		'ps_set_text_pos' => [Safe\PsException::class, ''],
		'ps_set_value' => [Safe\PsException::class, ''],
		'ps_setcolor' => [Safe\PsException::class, ''],
		'ps_setdash' => [Safe\PsException::class, ''],
		'ps_setflat' => [Safe\PsException::class, ''],
		'ps_setfont' => [Safe\PsException::class, ''],
		'ps_setgray' => [Safe\PsException::class, ''],
		'ps_setlinecap' => [Safe\PsException::class, ''],
		'ps_setlinejoin' => [Safe\PsException::class, ''],
		'ps_setlinewidth' => [Safe\PsException::class, ''],
		'ps_setmiterlimit' => [Safe\PsException::class, ''],
		'ps_setoverprintmode' => [Safe\PsException::class, ''],
		'ps_setpolydash' => [Safe\PsException::class, ''],
		'ps_shading' => [Safe\PsException::class, ''],
		'ps_shading_pattern' => [Safe\PsException::class, ''],
		'ps_shfill' => [Safe\PsException::class, ''],
		'ps_show' => [Safe\PsException::class, ''],
		'ps_show2' => [Safe\PsException::class, ''],
		'ps_show_xy' => [Safe\PsException::class, ''],
		'ps_show_xy2' => [Safe\PsException::class, ''],
		'ps_stroke' => [Safe\PsException::class, ''],
		'ps_symbol' => [Safe\PsException::class, ''],
		'ps_translate' => [Safe\PsException::class, ''],
		'pspell_*' => [Safe\PspellException::class],
		'pspell_add_to_personal' => [Safe\PspellException::class, ''],
		'pspell_add_to_session' => [Safe\PspellException::class, ''],
		'pspell_clear_session' => [Safe\PspellException::class, ''],
		'pspell_config_create' => [Safe\PspellException::class, ''],
		'pspell_config_data_dir' => [Safe\PspellException::class, ''],
		'pspell_config_dict_dir' => [Safe\PspellException::class, ''],
		'pspell_config_ignore' => [Safe\PspellException::class, ''],
		'pspell_config_mode' => [Safe\PspellException::class, ''],
		'pspell_config_personal' => [Safe\PspellException::class, ''],
		'pspell_config_repl' => [Safe\PspellException::class, ''],
		'pspell_config_runtogether' => [Safe\PspellException::class, ''],
		'pspell_config_save_repl' => [Safe\PspellException::class, ''],
		'pspell_new' => [Safe\PspellException::class, ''],
		'pspell_new_config' => [Safe\PspellException::class, ''],
		'pspell_save_wordlist' => [Safe\PspellException::class, ''],
		'pspell_store_replacement' => [Safe\PspellException::class, ''],
		'putenv' => [Safe\InfoException::class, ''],
		'random_*' => [Safe\CsprngException::class],
		'rar_*' => [Safe\RarException::class],
		'rawurldecode' => [Safe\UrlException::class],
		'rawurlencode' => [Safe\UrlException::class],
		'readfile' => [Safe\FilesystemException::class, ''],
		'readgzfile' => [Safe\ZlibException::class, ''],
		'readline' => [Safe\ReadlineException::class],
		'readline_*' => [Safe\ReadlineException::class],
		'readline_add_history' => [Safe\ReadlineException::class, ''],
		'readline_callback_handler_install' => [Safe\ReadlineException::class, ''],
		'readline_clear_history' => [Safe\ReadlineException::class, ''],
		'readline_completion_function' => [Safe\ReadlineException::class, ''],
		'readline_read_history' => [Safe\ReadlineException::class, ''],
		'readline_write_history' => [Safe\ReadlineException::class, ''],
		'readlink' => [Safe\FilesystemException::class, ''],
		'realpath' => [Safe\FilesystemException::class, ''],
		'realpath_*' => [Safe\FilesystemException::class],
		'recode_*' => [Safe\RecodeException::class],
		'register_tick_function' => [Safe\FunchandException::class, ''],
		'rename' => [Safe\FilesystemException::class, ''],
		'rewind' => [Safe\FilesystemException::class, ''],
		'rewinddir' => [Safe\DirException::class, ''],
		'rmdir' => [Safe\FilesystemException::class, ''],
		'rrd_*' => [Safe\RrdException::class],
		'rrd_create' => [Safe\RrdException::class, ''],
		'rrd_restore' => [Safe\RrdException::class, ''],
		'rrd_tune' => [Safe\RrdException::class, ''],
		'rrd_update' => [Safe\RrdException::class, ''],
		'rrdc_*' => [Safe\RrdException::class],
		'rsort' => [Safe\ArrayException::class, ''],
		'sapi_windows_cp_conv' => [Safe\MiscException::class, 'nullsy'],
		'sapi_windows_cp_set' => [Safe\MiscException::class, ''],
		'sapi_windows_vt100_support' => [Safe\MiscException::class, ''],
		'scandir' => [Safe\DirException::class, ''],
		'seaslog_*' => [Safe\SeaslogException::class],
		'sem_acquire' => [Safe\SemException::class, ''],
		'sem_get' => [Safe\SemException::class, ''],
		'sem_release' => [Safe\SemException::class, ''],
		'sem_remove' => [Safe\SemException::class, ''],
		'session_*' => [Safe\SessionException::class],
		'session_abort' => [Safe\SessionException::class, ''],
		'session_decode' => [Safe\SessionException::class, ''],
		'session_destroy' => [Safe\SessionException::class, ''],
		'session_regenerate_id' => [Safe\SessionException::class, ''],
		'session_reset' => [Safe\SessionException::class, ''],
		'session_start' => [Safe\SessionException::class, ''],
		'session_unset' => [Safe\SessionException::class, ''],
		'session_write_close' => [Safe\SessionException::class, ''],
		'set_include_path' => [Safe\InfoException::class, ''],
		'set_time_limit' => [Safe\InfoException::class, ''],
		'setcookie' => [Safe\NetworkException::class],
		'setrawcookie' => [Safe\NetworkException::class],
		'settype' => [Safe\VarException::class, ''],
		'sha1_file' => [Safe\StringsException::class, ''],
		'shell_*' => [Safe\ExecException::class],
		'shm_*' => [Safe\SemException::class],
		'shm_put_var' => [Safe\SemException::class, ''],
		'shm_remove' => [Safe\SemException::class, ''],
		'shm_remove_var' => [Safe\SemException::class, ''],
		'shmop_*' => [Safe\ShmopException::class],
		'shmop_delete' => [Safe\ShmopException::class, ''],
		'shmop_read' => [Safe\ShmopException::class, ''],
		'shmop_write' => [Safe\ShmopException::class, ''],
		'shuffle' => [Safe\ArrayException::class, ''],
		'simplexml_import_dom' => [Safe\SimplexmlException::class, ''],
		'simplexml_load_file' => [Safe\SimplexmlException::class, ''],
		'simplexml_load_string' => [Safe\SimplexmlException::class, ''],
		'sleep' => [Safe\MiscException::class, ''],
		'socket_*' => [Safe\SocketsException::class],
		'socket_accept' => [Safe\SocketsException::class, ''],
		'socket_addrinfo_bind' => [Safe\SocketsException::class, 'nullsy'],
		'socket_addrinfo_connect' => [Safe\SocketsException::class, 'nullsy'],
		'socket_bind' => [Safe\SocketsException::class, ''],
		'socket_connect' => [Safe\SocketsException::class, ''],
		'socket_create' => [Safe\SocketsException::class, ''],
		'socket_create_listen' => [Safe\SocketsException::class, ''],
		'socket_create_pair' => [Safe\SocketsException::class, ''],
		'socket_export_stream' => [Safe\SocketsException::class, ''],
		'socket_get_option' => [Safe\SocketsException::class, ''],
		'socket_getpeername' => [Safe\SocketsException::class, ''],
		'socket_getsockname' => [Safe\SocketsException::class, ''],
		'socket_import_stream' => [Safe\SocketsException::class, 'nullsy'],
		'socket_listen' => [Safe\SocketsException::class, ''],
		'socket_read' => [Safe\SocketsException::class, ''],
		'socket_send' => [Safe\SocketsException::class, ''],
		'socket_sendmsg' => [Safe\SocketsException::class, ''],
		'socket_sendto' => [Safe\SocketsException::class, ''],
		'socket_set_block' => [Safe\SocketsException::class, ''],
		'socket_set_nonblock' => [Safe\SocketsException::class, ''],
		'socket_set_option' => [Safe\SocketsException::class, ''],
		'socket_shutdown' => [Safe\SocketsException::class, ''],
		'socket_write' => [Safe\SocketsException::class, ''],
		'socket_wsaprotocol_info_export' => [Safe\SocketsException::class, ''],
		'socket_wsaprotocol_info_import' => [Safe\SocketsException::class, ''],
		'socket_wsaprotocol_info_release' => [Safe\SocketsException::class, ''],
		'sodium_*' => [Safe\SodiumException::class],
		'sodium_crypto_pwhash' => [Safe\SodiumException::class, ''],
		'sodium_crypto_pwhash_str' => [Safe\SodiumException::class, ''],
		'solr_get_version' => [Safe\SolrException::class, ''],
		'sort' => [Safe\ArrayException::class, ''],
		'spl_*' => [Safe\SplException::class],
		'spl_autoload_register' => [Safe\SplException::class, ''],
		'spl_autoload_unregister' => [Safe\SplException::class, ''],
		'split' => [Safe\RegexException::class],
		'spliti' => [Safe\RegexException::class],
		'sprintf' => [Safe\StringsException::class, ''],
		'sql_*' => [Safe\RegexException::class],
		'sqlsrv_*' => [Safe\SqlsrvException::class],
		'sqlsrv_begin_transaction' => [Safe\SqlsrvException::class, ''],
		'sqlsrv_cancel' => [Safe\SqlsrvException::class, ''],
		'sqlsrv_client_info' => [Safe\SqlsrvException::class, ''],
		'sqlsrv_close' => [Safe\SqlsrvException::class, ''],
		'sqlsrv_commit' => [Safe\SqlsrvException::class, ''],
		'sqlsrv_configure' => [Safe\SqlsrvException::class, ''],
		'sqlsrv_execute' => [Safe\SqlsrvException::class, ''],
		'sqlsrv_fetch' => [Safe\SqlsrvException::class, ''],
		'sqlsrv_free_stmt' => [Safe\SqlsrvException::class, ''],
		'sqlsrv_get_field' => [Safe\SqlsrvException::class, ''],
		'sqlsrv_next_result' => [Safe\SqlsrvException::class, ''],
		'sqlsrv_num_fields' => [Safe\SqlsrvException::class, ''],
		'sqlsrv_num_rows' => [Safe\SqlsrvException::class, ''],
		'sqlsrv_prepare' => [Safe\SqlsrvException::class, ''],
		'sqlsrv_query' => [Safe\SqlsrvException::class, ''],
		'sqlsrv_rollback' => [Safe\SqlsrvException::class, ''],
		'ssdeep_fuzzy_compare' => [Safe\SsdeepException::class, ''],
		'ssdeep_fuzzy_hash' => [Safe\SsdeepException::class, ''],
		'ssdeep_fuzzy_hash_filename' => [Safe\SsdeepException::class, ''],
		'ssh2_*' => [Safe\Ssh2Exception::class],
		'ssh2_auth_agent' => [Safe\Ssh2Exception::class, ''],
		'ssh2_auth_hostbased_file' => [Safe\Ssh2Exception::class, ''],
		'ssh2_auth_password' => [Safe\Ssh2Exception::class, ''],
		'ssh2_auth_pubkey_file' => [Safe\Ssh2Exception::class, ''],
		'ssh2_connect' => [Safe\Ssh2Exception::class, ''],
		'ssh2_disconnect' => [Safe\Ssh2Exception::class, ''],
		'ssh2_exec' => [Safe\Ssh2Exception::class, ''],
		'ssh2_publickey_add' => [Safe\Ssh2Exception::class, ''],
		'ssh2_publickey_init' => [Safe\Ssh2Exception::class, ''],
		'ssh2_publickey_remove' => [Safe\Ssh2Exception::class, ''],
		'ssh2_scp_recv' => [Safe\Ssh2Exception::class, ''],
		'ssh2_scp_send' => [Safe\Ssh2Exception::class, ''],
		'ssh2_sftp' => [Safe\Ssh2Exception::class, ''],
		'ssh2_sftp_chmod' => [Safe\Ssh2Exception::class, ''],
		'ssh2_sftp_mkdir' => [Safe\Ssh2Exception::class, ''],
		'ssh2_sftp_rename' => [Safe\Ssh2Exception::class, ''],
		'ssh2_sftp_rmdir' => [Safe\Ssh2Exception::class, ''],
		'ssh2_sftp_symlink' => [Safe\Ssh2Exception::class, ''],
		'ssh2_sftp_unlink' => [Safe\Ssh2Exception::class, ''],
		'stat' => [Safe\FilesystemException::class],
		'stats_*' => [Safe\StatsException::class],
		'stats_covariance' => [Safe\StatsException::class, ''],
		'stats_standard_deviation' => [Safe\StatsException::class, ''],
		'stats_stat_correlation' => [Safe\StatsException::class, ''],
		'stats_stat_innerproduct' => [Safe\StatsException::class, ''],
		'stats_variance' => [Safe\StatsException::class, ''],
		'stomp_*' => [Safe\StompException::class],
		'stream_*' => [Safe\StreamException::class],
		'stream_context_set_params' => [Safe\StreamException::class, ''],
		'stream_copy_to_stream' => [Safe\StreamException::class, ''],
		'stream_filter_append' => [Safe\StreamException::class, ''],
		'stream_filter_prepend' => [Safe\StreamException::class, ''],
		'stream_filter_register' => [Safe\StreamException::class, ''],
		'stream_filter_remove' => [Safe\StreamException::class, ''],
		'stream_get_contents' => [Safe\StreamException::class, ''],
		'stream_isatty' => [Safe\StreamException::class, ''],
		'stream_resolve_include_path' => [Safe\StreamException::class, ''],
		'stream_set_blocking' => [Safe\StreamException::class, ''],
		'stream_set_timeout' => [Safe\StreamException::class, ''],
		'stream_socket_accept' => [Safe\StreamException::class, ''],
		'stream_socket_client' => [Safe\StreamException::class, ''],
		'stream_socket_enable_crypto' => [Safe\StreamException::class, ''],
		'stream_socket_pair' => [Safe\StreamException::class, ''],
		'stream_socket_server' => [Safe\StreamException::class, ''],
		'stream_socket_shutdown' => [Safe\StreamException::class, ''],
		'stream_supports_lock' => [Safe\StreamException::class, ''],
		'stream_wrapper_register' => [Safe\StreamException::class, ''],
		'stream_wrapper_restore' => [Safe\StreamException::class, ''],
		'stream_wrapper_unregister' => [Safe\StreamException::class, ''],
		'strftime' => [Safe\DatetimeException::class],
		'strptime' => [Safe\DatetimeException::class, ''],
		'strtotime' => [Safe\DatetimeException::class, ''],
		'substr' => [Safe\StringsException::class, ''],
		'swoole_*' => [Safe\SwooleException::class],
		'swoole_async_write' => [Safe\SwooleException::class, ''],
		'swoole_async_writefile' => [Safe\SwooleException::class, ''],
		'swoole_event_defer' => [Safe\SwooleException::class, ''],
		'swoole_event_del' => [Safe\SwooleException::class, ''],
		'swoole_event_write' => [Safe\SwooleException::class, ''],
		'symlink' => [Safe\FilesystemException::class, ''],
		'syslog' => [Safe\NetworkException::class, ''],
		'system' => [Safe\ExecException::class, ''],
		'taint' => [Safe\TaintException::class],
		'tcpwrap_*' => [Safe\TcpwrapException::class],
		'tempnam' => [Safe\FilesystemException::class, ''],
		'textdomain' => [Safe\GettextException::class],
		'time' => [Safe\DatetimeException::class],
		'time_nanosleep' => [Safe\MiscException::class, ''],
		'time_sleep_until' => [Safe\MiscException::class, ''],
		'timezone_*' => [Safe\DatetimeException::class],
		'timezone_name_from_abbr' => [Safe\DatetimeException::class, ''],
		'tmpfile' => [Safe\FilesystemException::class, ''],
		'token_*' => [Safe\TokenizerException::class],
		'touch' => [Safe\FilesystemException::class, ''],
		'trader_*' => [Safe\TraderException::class],
		'uasort' => [Safe\ArrayException::class, ''],
		'uksort' => [Safe\ArrayException::class, ''],
		'umask' => [Safe\FilesystemException::class],
		'unixtojd' => [Safe\CalendarException::class],
		'unlink' => [Safe\FilesystemException::class, ''],
		'untaint' => [Safe\TaintException::class],
		'uopz_*' => [Safe\UopzException::class],
		'uopz_extend' => [Safe\UopzException::class, ''],
		'uopz_implement' => [Safe\UopzException::class, ''],
		'urldecode' => [Safe\UrlException::class],
		'urlencode' => [Safe\UrlException::class],
		'use_*' => [Safe\SoapException::class],
		'usercallbackfn' => [Safe\Oci8Exception::class],
		'usort' => [Safe\ArrayException::class, ''],
		'utf8_*' => [Safe\XmlException::class],
		'variant_*' => [Safe\ComException::class],
		'virtual' => [Safe\ApacheException::class, ''],
		'vpopmail_*' => [Safe\VpopmailException::class],
		'vsprintf' => [Safe\StringsException::class, ''],
		'win32_*' => [Safe\Win32serviceException::class],
		'xdiff_*' => [Safe\XdiffException::class],
		'xdiff_file_bdiff' => [Safe\XdiffException::class, ''],
		'xdiff_file_bpatch' => [Safe\XdiffException::class, ''],
		'xdiff_file_diff' => [Safe\XdiffException::class, ''],
		'xdiff_file_diff_binary' => [Safe\XdiffException::class, ''],
		'xdiff_file_merge3' => [Safe\XdiffException::class, ''],
		'xdiff_file_patch_binary' => [Safe\XdiffException::class, ''],
		'xdiff_file_rabdiff' => [Safe\XdiffException::class, ''],
		'xdiff_string_bpatch' => [Safe\XdiffException::class, ''],
		'xdiff_string_patch' => [Safe\XdiffException::class, ''],
		'xdiff_string_patch_binary' => [Safe\XdiffException::class, ''],
		'xhprof_*' => [Safe\XhprofException::class],
		'xml_*' => [Safe\XmlException::class],
		'xml_parser_create' => [Safe\XmlException::class, ''],
		'xml_parser_create_ns' => [Safe\XmlException::class, ''],
		'xml_set_object' => [Safe\XmlException::class, ''],
		'xmlrpc_*' => [Safe\XmlrpcException::class],
		'xmlrpc_set_type' => [Safe\XmlrpcException::class, ''],
		'xmlwriter_*' => [Safe\XmlwriterException::class],
		'yaml_*' => [Safe\YamlException::class],
		'yaml_emit_file' => [Safe\YamlException::class, ''],
		'yaml_parse' => [Safe\YamlException::class, ''],
		'yaml_parse_file' => [Safe\YamlException::class, ''],
		'yaml_parse_url' => [Safe\YamlException::class, ''],
		'yaz_*' => [Safe\YazException::class],
		'yaz_ccl_parse' => [Safe\YazException::class, ''],
		'yaz_close' => [Safe\YazException::class, ''],
		'yaz_connect' => [Safe\YazException::class, ''],
		'yaz_database' => [Safe\YazException::class, ''],
		'yaz_element' => [Safe\YazException::class, ''],
		'yaz_present' => [Safe\YazException::class, ''],
		'yaz_search' => [Safe\YazException::class, ''],
		'yaz_wait' => [Safe\YazException::class, ''],
		'zip_*' => [Safe\ZipException::class],
		'zip_entry_close' => [Safe\ZipException::class, ''],
		'zip_entry_open' => [Safe\ZipException::class, ''],
		'zip_entry_read' => [Safe\ZipException::class, ''],
		'zlib_*' => [Safe\ZlibException::class],
		'zlib_decode' => [Safe\ZlibException::class, ''],
		'zookeeper_*' => [Safe\ZookeeperException::class],
	];


	/**
	 * @return mixed
	 * @throws Safe\Exception
	 */
	public static function __callStatic(string $func, array $args = [])
	{
		$func = strtolower($func);
		$handler = self::$handlers[$func] ?? '';

		$prev = set_error_handler(function ($severity, $message, $file) use (&$prev, $func, $args, $handler): ?bool {
			if ($file !== __FILE__) {
				return $prev ? $prev(...func_get_args()) : false;
			}

			if (ini_get('html_errors')) {
				$message = html_entity_decode(strip_tags($message));
			}
			$message = preg_replace('#^[\w_]+\(.*?\): #', '', $message);

			$method = 'createException' . ($handler[1] ?? '');
			throw self::$method($func, $message, $severity, $args);
		});

		try {
			$res = $func(...$args);
		} finally {
			restore_error_handler();
		}

		return isset($handler[1])
			? self::{'handleResult' . $handler[1]}($func, $res, $args)
			: $res;
	}


	/**
	 * @return mixed
	 * @throws Safe\Exception
	 */
	public static function invoke(callable $func)
	{
		set_error_handler(function ($severity, $message, $file) {
			if (($severity & error_reporting()) !== $severity) {
				return;
			}
			if (ini_get('html_errors')) {
				$message = html_entity_decode(strip_tags($message));
			}
			throw new Safe\Exception($message, 0, $severity, ...self::getFileLine());
		});

		try {
			return $func();
		} finally {
			restore_error_handler();
		}
	}


	private static function createException(string $func, string $message, int $severity = 0): Safe\Exception
	{
		$class = self::$handlers[$func][0]
			?? self::$handlers[strstr($func, '_', true) . '_*'][0]
			?? Safe\Exception::class;

		return new $class($message, 0, $severity, ...self::getFileLine());
	}


	private static function getFileLine(): array
	{
		foreach (debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS) as $trace) {
			if (isset($trace['file']) && $trace['file'] !== __FILE__) {
				return [$trace['file'], $trace['line']];
			}
		}
		return ['', 0];
	}


	/********************* handlers ****************d*g**/


	/**
	 * @return mixed
	 * @throws Safe\PcreException
	 */
	private static function handleResult(string $func, $res)
	{
		if ($res === false) {
			throw self::createException($func, "$func() failures.");
		}
		return $res === true ? null : $res;
	}


	/**
	 * @return mixed
	 * @throws Safe\Exception
	 */
	private static function handleResultNullsy(string $func, $res)
	{
		if ($res === null) {
			throw self::createException($func, "$func() failures.");
		}
		return $res;
	}


	/**
	 * @return mixed
	 * @throws Safe\PcreException
	 */
	private static function handleResultPcre(string $func, $res, array $args)
	{
		if (($error = preg_last_error()) // run-time error, but preg_last_error & return code are liars
			&& ($res === null || !in_array($func, ['preg_filter', 'preg_replace_callback', 'preg_replace'], true))
		) {
			throw self::createExceptionPcre($func, Safe\PcreException::MESSAGES[$error] ?? 'Unknown error', 0, $args, $error);
		}
		return $res;
	}


	private static function createExceptionPcre(string $func, string $message, int $severity, array $args, int $code = 0): Safe\PcreException
	{
		$message .= is_string($args[0] ?? null) ? " (pattern: $args[0])" : '';
		return new Safe\PcreException($message, $code, $severity, ...self::getFileLine());
	}


	/**
	 * @return mixed
	 * @throws Safe\JsonException
	 */
	private static function handleResultJson(string $func, $res)
	{
		if ($error = json_last_error()) {
			throw new Safe\JsonException(json_last_error_msg(), $error, 0, ...self::getFileLine());
		}
		return $res;
	}


	/**
	 * @return mixed
	 * @throws Safe\CurlException
	 */
	private static function handleResultCurl(string $func, $res, array $args)
	{
		if ($res !== false) {
			return $res === true ? null : $res;
		} elseif (is_resource($args[0] ?? null)) {
			throw new Safe\CurlException(curl_error($args[0]), curl_errno($args[0]), 0, ...self::getFileLine());
		} else {
			throw new Safe\CurlException('Unknown error', 0, 0, ...self::getFileLine());
		}
	}


	/**
	 * @return mixed
	 * @throws Safe\OpensslException
	 */
	private static function handleResultOpenssl(string $func, $res)
	{
		if ($res === false) {
			throw new Safe\OpensslException(openssl_error_string(), 0, 0, ...self::getFileLine());
		}
		return $res === true ? null : $res;
	}


	/********************* arguments by reference ****************d*g**/


	/** @throws Safe\ApcException */
	public static function apc_dec(string $key, int $step = 1, ?bool &$success = null): int
	{
		return self::__callStatic(__FUNCTION__, [$key, $step, &$success]);
	}


	/** @throws Safe\ApcException */
	public static function apc_fetch($key, ?bool &$success = null)
	{
		return self::__callStatic(__FUNCTION__, [$key, &$success]);
	}


	/** @throws Safe\ApcException */
	public static function apc_inc(string $key, int $step = 1, ?bool &$success = null): int
	{
		return self::__callStatic(__FUNCTION__, [$key, $step, &$success]);
	}


	/** @throws Safe\ApcuException */
	public static function apcu_dec(string $key, int $step = 1, ?bool &$success = null, int $ttl = 0): int
	{
		return self::__callStatic(__FUNCTION__, [$key, $step, &$success, $ttl]);
	}


	/** @throws Safe\ApcuException */
	public static function apcu_fetch($key, ?bool &$success = null)
	{
		return self::__callStatic(__FUNCTION__, [$key, &$success]);
	}


	/** @throws Safe\ApcuException */
	public static function apcu_inc(string $key, int $step = 1, ?bool &$success = null, int $ttl = 0): int
	{
		return self::__callStatic(__FUNCTION__, [$key, $step, &$success, $ttl]);
	}


	/** @throws Safe\ArrayException */
	public static function array_multisort(array &$array1, ...$params): void
	{
		$args = func_get_args();
		$args[0] = &$array1;
		self::__callStatic(__FUNCTION__, $args);
	}


	/** @throws Safe\ArrayException */
	public static function array_walk_recursive(array &$array, callable $callback, $userdata = null): void
	{
		self::__callStatic(__FUNCTION__, [&$array, $callback, $userdata]);
	}


	/** @throws Safe\ArrayException */
	public static function arsort(array &$array, int $sort_flags = SORT_REGULAR): void
	{
		self::__callStatic(__FUNCTION__, [&$array, $sort_flags]);
	}


	/** @throws Safe\ArrayException */
	public static function asort(array &$array, int $sort_flags = SORT_REGULAR): void
	{
		self::__callStatic(__FUNCTION__, [&$array, $sort_flags]);
	}


	/** @throws Safe\ArrayException */
	public static function krsort(array &$array, int $sort_flags = SORT_REGULAR): void
	{
		self::__callStatic(__FUNCTION__, [&$array, $sort_flags]);
	}


	/** @throws Safe\ArrayException */
	public static function ksort(array &$array, int $sort_flags = SORT_REGULAR): void
	{
		self::__callStatic(__FUNCTION__, [&$array, $sort_flags]);
	}


	/** @throws Safe\ArrayException */
	public static function natcasesort(array &$array): void
	{
		self::__callStatic(__FUNCTION__, [&$array]);
	}


	/** @throws Safe\ArrayException */
	public static function natsort(array &$array): void
	{
		self::__callStatic(__FUNCTION__, [&$array]);
	}


	/** @throws Safe\ArrayException */
	public static function rsort(array &$array, int $sort_flags = SORT_REGULAR): void
	{
		self::__callStatic(__FUNCTION__, [&$array, $sort_flags]);
	}


	/** @throws Safe\ArrayException */
	public static function shuffle(array &$array): void
	{
		self::__callStatic(__FUNCTION__, [&$array]);
	}


	/** @throws Safe\ArrayException */
	public static function sort(array &$array, int $sort_flags = SORT_REGULAR): void
	{
		self::__callStatic(__FUNCTION__, [&$array, $sort_flags]);
	}


	/** @throws Safe\ArrayException */
	public static function uasort(array &$array, callable $value_compare_func): void
	{
		self::__callStatic(__FUNCTION__, [&$array, $value_compare_func]);
	}


	/** @throws Safe\ArrayException */
	public static function uksort(array &$array, callable $key_compare_func): void
	{
		self::__callStatic(__FUNCTION__, [&$array, $key_compare_func]);
	}


	/** @throws Safe\ArrayException */
	public static function usort(array &$array, callable $value_compare_func): void
	{
		self::__callStatic(__FUNCTION__, [&$array, $value_compare_func]);
	}


	/** @throws Safe\CurlException */
	public static function curl_multi_info_read($mh, ?int &$msgs_in_queue = null): array
	{
		return self::__callStatic(__FUNCTION__, [$mh, &$msgs_in_queue]);
	}


	/** @throws Safe\ExecException */
	public static function system(string $command, int &$return_var = null): string
	{
		return self::__callStatic(__FUNCTION__, [$command, &$return_var]);
	}


	/** @throws Safe\FilesystemException */
	public static function flock($handle, int $operation, ?int &$wouldblock = null): void
	{
		self::__callStatic(__FUNCTION__, [$handle, $operation, &$wouldblock]);
	}


	/** @throws Safe\FtpException */
	public static function ftp_alloc($ftp_stream, int $filesize, string &$result = null): void
	{
		self::__callStatic(__FUNCTION__, [$ftp_stream, $filesize, &$result]);
	}


	/** @throws Safe\ImageException */
	public static function getimagesize(string $filename, array &$imageinfo = null): array
	{
		return self::__callStatic(__FUNCTION__, [$filename, &$imageinfo]);
	}


	/** @throws Safe\InfoException */
	public static function getopt(string $options, array $longopts = null, ?int &$optind = null): array
	{
		return self::__callStatic(__FUNCTION__, [$options, $longopts, &$optind]);
	}


	/** @throws Safe\LdapException */
	public static function ldap_control_paged_result_response($link, $result, ?string &$cookie = null, ?int &$estimated = null): void
	{
		self::__callStatic(__FUNCTION__, [$link, $result, &$cookie, &$estimated]);
	}


	/** @throws Safe\LdapException */
	public static function ldap_exop_passwd($link, string $user = '', string $oldpw = '', string $newpw = '', array &$serverctrls = null)
	{
		return self::__callStatic(__FUNCTION__, [$link, $user, $oldpw, $newpw, &$serverctrls]);
	}


	/** @throws Safe\LdapException */
	public static function ldap_exop($link, string $reqoid, string $reqdata = null, array $serverctrls = null, ?string &$retdata = null, ?string &$retoid = null)
	{
		return self::__callStatic(__FUNCTION__, [$link, $reqoid, $reqdata, $serverctrls, &$retdata, &$retoid]);
	}


	/** @throws Safe\LdapException */
	public static function ldap_get_option($link_identifier, int $option, &$retval): void
	{
		self::__callStatic(__FUNCTION__, [$link_identifier, $option, &$retval]);
	}


	/** @throws Safe\LdapException */
	public static function ldap_parse_exop($link, $result, ?string &$retdata = null, ?string &$retoid = null): void
	{
		self::__callStatic(__FUNCTION__, [$link, $result, &$retdata, &$retoid]);
	}


	/** @throws Safe\LdapException */
	public static function ldap_parse_result($link, $result, ?int &$errcode, ?string &$matcheddn = null, ?string &$errmsg = null, ?array &$referrals = null, ?array &$serverctrls = null): void
	{
		self::__callStatic(__FUNCTION__, [$link, $result, &$errcode, &$matcheddn, &$errmsg, &$referrals, &$serverctrls]);
	}


	/** @throws Safe\MbstringException */
	public static function mb_parse_str(string $encoded_string, ?array &$result = null): void
	{
		self::__callStatic(__FUNCTION__, [$encoded_string, &$result]);
	}


	/** @throws Safe\MssqlException */
	public static function mssql_bind($stmt, string $param_name, &$var, int $type, bool $is_output = false, bool $is_null = false, int $maxlen = -1): void
	{
		self::__callStatic(__FUNCTION__, [$stmt, $param_name, &$var, $type, $is_output, $is_null, $maxlen]);
	}


	/** @throws Safe\MysqlndUhException */
	public static function mysqlnd_uh_set_connection_proxy(\MysqlndUhConnection &$connection_proxy, \mysqli &$mysqli_connection = null): void
	{
		self::__callStatic(__FUNCTION__, [&$connection_proxy, &$mysqli_connection]);
	}


	/** @throws Safe\MysqlndUhException */
	public static function mysqlnd_uh_set_statement_proxy(\MysqlndUhStatement &$statement_proxy): void
	{
		self::__callStatic(__FUNCTION__, [&$statement_proxy]);
	}


	/** @throws Safe\NetworkException */
	public static function dns_get_record(string $hostname, int $type = DNS_ANY, ?array &$authns = null, ?array &$addtl = null, bool $raw = false): array
	{
		return self::__callStatic(__FUNCTION__, [$hostname, $type, &$authns, &$addtl, $raw]);
	}


	/** @throws Safe\NetworkException */
	public static function fsockopen(string $hostname, int $port = -1, ?int &$errno = null, ?string &$errstr = null, float $timeout = null)
	{
		return self::__callStatic(__FUNCTION__, [$hostname, $port, &$errno, &$errstr, $timeout]);
	}


	/** @throws Safe\Oci8Exception */
	public static function oci_bind_array_by_name($statement, string $name, ?array &$var_array, int $max_table_length, int $max_item_length = -1, int $type = SQLT_AFC): void
	{
		self::__callStatic(__FUNCTION__, [$statement, $name, &$var_array, $max_table_length, $max_item_length, $type]);
	}


	/** @throws Safe\Oci8Exception */
	public static function oci_bind_by_name($statement, string $bv_name, &$variable, int $maxlength = -1, int $type = SQLT_CHR): void
	{
		self::__callStatic(__FUNCTION__, [$statement, $bv_name, &$variable, $maxlength, $type]);
	}


	/** @throws Safe\Oci8Exception */
	public static function oci_define_by_name($statement, string $column_name, &$variable, int $type = SQLT_CHR): void
	{
		self::__callStatic(__FUNCTION__, [$statement, $column_name, &$variable, $type]);
	}


	/** @throws Safe\Oci8Exception */
	public static function oci_fetch_all($statement, ?array &$output, int $skip = 0, int $maxrows = -1, int $flags = OCI_FETCHSTATEMENT_BY_COLUMN + OCI_ASSOC): int
	{
		return self::__callStatic(__FUNCTION__, [$statement, &$output, $skip, $maxrows, $flags]);
	}


	/** @throws Safe\OpensslException */
	public static function openssl_csr_export($csr, ?string &$out, bool $notext = true): void
	{
		self::__callStatic(__FUNCTION__, [$csr, &$out, $notext]);
	}


	/** @throws Safe\OpensslException */
	public static function openssl_csr_new(array $dn, &$privkey, array $configargs = null, array $extraattribs = null)
	{
		return self::__callStatic(__FUNCTION__, [$dn, &$privkey, $configargs, $extraattribs]);
	}


	/** @throws Safe\OpensslException */
	public static function openssl_encrypt(string $data, string $method, string $key, int $options = 0, string $iv = '', ?string &$tag = null, string $aad = '', int $tag_length = 16): string
	{
		return self::__callStatic(__FUNCTION__, [$data, $method, $key, $options, $iv, &$tag, $aad, $tag_length]);
	}


	/** @throws Safe\OpensslException */
	public static function openssl_open(string $sealed_data, ?string &$open_data, string $env_key, $priv_key_id, string $method = 'RC4', string $iv = null): void
	{
		self::__callStatic(__FUNCTION__, [$sealed_data, &$open_data, $env_key, $priv_key_id, $method, $iv]);
	}


	/** @throws Safe\OpensslException */
	public static function openssl_pkcs12_export($x509, ?string &$out, $priv_key, string $pass, array $args = null): void
	{
		self::__callStatic(__FUNCTION__, [$x509, &$out, $priv_key, $pass, $args]);
	}


	/** @throws Safe\OpensslException */
	public static function openssl_pkcs12_read(string $pkcs12, ?array &$certs, string $pass): void
	{
		self::__callStatic(__FUNCTION__, [$pkcs12, &$certs, $pass]);
	}


	/** @throws Safe\OpensslException */
	public static function openssl_pkcs7_read(string $infilename, ?array &$certs): void
	{
		self::__callStatic(__FUNCTION__, [$infilename, &$certs]);
	}


	/** @throws Safe\OpensslException */
	public static function openssl_pkey_export($key, ?string &$out, string $passphrase = null, array $configargs = null): void
	{
		self::__callStatic(__FUNCTION__, [$key, &$out, $passphrase, $configargs]);
	}


	/** @throws Safe\OpensslException */
	public static function openssl_private_decrypt(string $data, ?string &$decrypted, $key, int $padding = OPENSSL_PKCS1_PADDING): void
	{
		self::__callStatic(__FUNCTION__, [$data, &$decrypted, $key, $padding]);
	}


	/** @throws Safe\OpensslException */
	public static function openssl_private_encrypt(string $data, ?string &$crypted, $key, int $padding = OPENSSL_PKCS1_PADDING): void
	{
		self::__callStatic(__FUNCTION__, [$data, &$crypted, $key, $padding]);
	}


	/** @throws Safe\OpensslException */
	public static function openssl_public_decrypt(string $data, ?string &$decrypted, $key, int $padding = OPENSSL_PKCS1_PADDING): void
	{
		self::__callStatic(__FUNCTION__, [$data, &$decrypted, $key, $padding]);
	}


	/** @throws Safe\OpensslException */
	public static function openssl_public_encrypt(string $data, ?string &$crypted, $key, int $padding = OPENSSL_PKCS1_PADDING): void
	{
		self::__callStatic(__FUNCTION__, [$data, &$crypted, $key, $padding]);
	}


	/** @throws Safe\OpensslException */
	public static function openssl_random_pseudo_bytes(int $length, ?bool &$crypto_strong = null): string
	{
		return self::__callStatic(__FUNCTION__, [$length, &$crypto_strong]);
	}


	/** @throws Safe\OpensslException */
	public static function openssl_seal(string $data, ?string &$sealed_data, ?array &$env_keys, array $pub_key_ids, string $method = 'RC4', string &$iv = null): int
	{
		return self::__callStatic(__FUNCTION__, [$data, &$sealed_data, &$env_keys, $pub_key_ids, $method, &$iv]);
	}


	/** @throws Safe\OpensslException */
	public static function openssl_sign(string $data, ?string &$signature, $priv_key_id, $signature_alg = OPENSSL_ALGO_SHA1): void
	{
		self::__callStatic(__FUNCTION__, [$data, &$signature, $priv_key_id, $signature_alg]);
	}


	/** @throws Safe\OpensslException */
	public static function openssl_x509_export($x509, ?string &$output, bool $notext = true): void
	{
		self::__callStatic(__FUNCTION__, [$x509, &$output, $notext]);
	}


	/** @throws Safe\PcntlException */
	public static function pcntl_sigprocmask(int $how, array $set, ?array &$oldset = null): void
	{
		self::__callStatic(__FUNCTION__, [$how, $set, &$oldset]);
	}


	/** @throws Safe\PcreException */
	public static function preg_filter($pattern, $replacement, $subject, int $limit = -1, &$count = 0)
	{
		return self::__callStatic(__FUNCTION__, [$pattern, $replacement, $subject, $limit, &$count]);
	}


	/** @throws Safe\PcreException */
	public static function preg_match(string $pattern, string $subject, array &$matches = null, int $flags = 0, int $offset = 0): int
	{
		return self::__callStatic(__FUNCTION__, [$pattern, $subject, &$matches, $flags, $offset]);
	}


	/** @throws Safe\PcreException */
	public static function preg_match_all(string $pattern, string $subject, array &$matches = null, int $flags = PREG_PATTERN_ORDER, int $offset = 0): int
	{
		return self::__callStatic(__FUNCTION__, [$pattern, $subject, &$matches, $flags, $offset]);
	}


	/** @throws Safe\PcreException */
	public static function preg_replace($pattern, $replacement, $subject, int $limit = -1, &$count = 0)
	{
		return self::__callStatic(__FUNCTION__, [$pattern, $replacement, $subject, $limit, &$count]);
	}


	/** @throws Safe\PcreException */
	public static function preg_replace_callback($pattern, callable $callback, $subject, int $limit = -1, &$count = 0)
	{
		return self::__callStatic(__FUNCTION__, [$pattern, $callback, $subject, $limit, &$count]);
	}


	/** @throws Safe\PcreException */
	public static function preg_replace_callback_array(array $patterns_and_callbacks, $subject, int $limit = -1, &$count = 0)
	{
		return self::__callStatic(__FUNCTION__, [$patterns_and_callbacks, $subject, $limit, &$count]);
	}


	/** @throws Safe\SemException */
	public static function msg_receive($queue, int $desiredmsgtype, ?int &$msgtype, int $maxsize, &$message, bool $unserialize = true, int $flags = 0, ?int &$errorcode = null): void
	{
		self::__callStatic(__FUNCTION__, [$queue, $desiredmsgtype, &$msgtype, $maxsize, &$message, $unserialize, $flags, &$errorcode]);
	}


	/** @throws Safe\SemException */
	public static function msg_send($queue, int $msgtype, $message, bool $serialize = true, bool $blocking = true, ?int &$errorcode = null): void
	{
		self::__callStatic(__FUNCTION__, [$queue, $msgtype, $message, $serialize, $blocking, &$errorcode]);
	}


	/** @throws Safe\SocketsException */
	public static function socket_create_pair(int $domain, int $type, int $protocol, ?iterable &$fd): void
	{
		self::__callStatic(__FUNCTION__, [$domain, $type, $protocol, &$fd]);
	}


	/** @throws Safe\SocketsException */
	public static function socket_getpeername($socket, ?string &$address, ?int &$port = null): void
	{
		self::__callStatic(__FUNCTION__, [$socket, &$address, &$port]);
	}


	/** @throws Safe\SocketsException */
	public static function socket_getsockname($socket, ?string &$addr, ?int &$port = null): void
	{
		self::__callStatic(__FUNCTION__, [$socket, &$addr, &$port]);
	}


	/** @throws Safe\StreamException */
	public static function stream_socket_accept($server_socket, float $timeout = null, ?string &$peername = null)
	{
		return self::__callStatic(__FUNCTION__, [$server_socket, $timeout, &$peername]);
	}


	/** @throws Safe\StreamException */
	public static function stream_socket_client(string $remote_socket, int &$errno = null, string &$errstr = null, float $timeout = null, int $flags = STREAM_CLIENT_CONNECT, $context = null)
	{
		return self::__callStatic(__FUNCTION__, [$remote_socket, &$errno, &$errstr, $timeout, $flags, $context]);
	}


	/** @throws Safe\StreamException */
	public static function stream_socket_server(string $local_socket, int &$errno = null, string &$errstr = null, int $flags = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN, $context = null)
	{
		return self::__callStatic(__FUNCTION__, [$local_socket, &$errno, &$errstr, $flags, $context]);
	}


	/** @throws Safe\UodbcException */
	public static function odbc_fetch_into($result_id, ?array &$result_array, int $rownumber = null): int
	{
		return self::__callStatic(__FUNCTION__, [$result_id, &$result_array, $rownumber]);
	}


	/** @throws Safe\VarException */
	public static function settype(&$var, string $type): void
	{
		self::__callStatic(__FUNCTION__, [&$var, $type]);
	}


	/** @throws Safe\XdiffException */
	public static function xdiff_string_patch(string $str, string $patch, int $flags = null, ?string &$error = null): string
	{
		return self::__callStatic(__FUNCTION__, [$str, $patch, $flags, &$error]);
	}


	/** @throws Safe\XmlException */
	public static function xml_set_object($parser, &$object): void
	{
		self::__callStatic(__FUNCTION__, [$parser, &$object]);
	}


	/** @throws Safe\XmlrpcException */
	public static function xmlrpc_set_type(&$value, string $type): void
	{
		self::__callStatic(__FUNCTION__, [&$value, $type]);
	}


	/** @throws Safe\YamlException */
	public static function yaml_parse_file(string $filename, int $pos = 0, ?int &$ndocs = null, array $callbacks = null)
	{
		return self::__callStatic(__FUNCTION__, [$filename, $pos, &$ndocs, $callbacks]);
	}


	/** @throws Safe\YamlException */
	public static function yaml_parse_url(string $url, int $pos = 0, ?int &$ndocs = null, array $callbacks = null)
	{
		return self::__callStatic(__FUNCTION__, [$url, $pos, &$ndocs, $callbacks]);
	}


	/** @throws Safe\YamlException */
	public static function yaml_parse(string $input, int $pos = 0, ?int &$ndocs = null, array $callbacks = null)
	{
		return self::__callStatic(__FUNCTION__, [$input, $pos, &$ndocs, $callbacks]);
	}


	/** @throws Safe\YazException */
	public static function yaz_ccl_parse($id, string $query, ?array &$result): void
	{
		self::__callStatic(__FUNCTION__, [$id, $query, &$result]);
	}


	/** @throws Safe\YazException */
	public static function yaz_wait(array &$options = null)
	{
		return self::__callStatic(__FUNCTION__, [&$options]);
	}
}
