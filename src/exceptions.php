<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Safe;


class Exception extends \ErrorException
{
}


class ApacheException extends Exception
{
}


class ApcException extends Exception
{
}


class ApcuException extends Exception
{
}


class ArrayException extends Exception
{
}


class BcException extends Exception
{
}


class BlencException extends Exception
{
}


class Bzip2Exception extends Exception
{
}


class CalendarException extends Exception
{
}


class ClassobjException extends Exception
{
}


class ComException extends Exception
{
}


class CsprngException extends Exception
{
}


class CtypeException extends Exception
{
}


class CubridException extends Exception
{
}


class CurlException extends Exception
{
}


class DatetimeException extends Exception
{
}


class DirException extends Exception
{
}


class DomException extends Exception
{
}


class EioException extends Exception
{
}


class ErrorfuncException extends Exception
{
}


class ExecException extends Exception
{
}


class ExifException extends Exception
{
}


class ExpectException extends Exception
{
}


class FileinfoException extends Exception
{
}


class FilesystemException extends Exception
{
}


class FilterException extends Exception
{
}


class FpmException extends Exception
{
}


class FtpException extends Exception
{
}


class FunchandException extends Exception
{
}


class GeoipException extends Exception
{
}


class GettextException extends Exception
{
}


class GmpException extends Exception
{
}


class GnupgException extends Exception
{
}


class HashException extends Exception
{
}


class HwapiException extends Exception
{
}


class IbaseException extends Exception
{
}


class IbmDb2Exception extends Exception
{
}


class IconvException extends Exception
{
}


class IisfuncException extends Exception
{
}


class ImageException extends Exception
{
}


class ImapException extends Exception
{
}


class IncluedException extends Exception
{
}


class InfoException extends Exception
{
}


class IngresiiException extends Exception
{
}


class InotifyException extends Exception
{
}


class IntlException extends Exception
{
}


class JsonException extends Exception
{
}


class JudyException extends Exception
{
}


class LdapException extends Exception
{
}


class LibeventException extends Exception
{
}


class LibxmlException extends Exception
{
}


class LzfException extends Exception
{
}


class MailException extends Exception
{
}


class MailparseException extends Exception
{
}


class MbstringException extends Exception
{
}


class McveException extends Exception
{
}


class MemcacheException extends Exception
{
}


class MingException extends Exception
{
}


class MiscException extends Exception
{
}


class MongoException extends Exception
{
}


class MqseriesException extends Exception
{
}


class MsessionException extends Exception
{
}


class MsqlException extends Exception
{
}


class MssqlException extends Exception
{
}


class MysqlException extends Exception
{
}


class MysqliException extends Exception
{
}


class MysqlndMsException extends Exception
{
}


class MysqlndQcException extends Exception
{
}


class MysqlndUhException extends Exception
{
}


class NetGopherException extends Exception
{
}


class NetworkException extends Exception
{
}


class OauthException extends Exception
{
}


class Oci8Exception extends Exception
{
}


class OpcacheException extends Exception
{
}


class OpensslException extends Exception
{
}


class OutcontrolException extends Exception
{
}


class ParsekitException extends Exception
{
}


class PasswordException extends Exception
{
}


class PcntlException extends Exception
{
}


class PcreException extends Exception
{
	public const MESSAGES = [
		PREG_INTERNAL_ERROR => 'Internal error',
		PREG_BACKTRACK_LIMIT_ERROR => 'Backtrack limit was exhausted',
		PREG_RECURSION_LIMIT_ERROR => 'Recursion limit was exhausted',
		PREG_BAD_UTF8_ERROR => 'Malformed UTF-8 data',
		PREG_BAD_UTF8_OFFSET_ERROR => 'Offset didn\'t correspond to the begin of a valid UTF-8 code point',
		6 => 'Failed due to limited JIT stack space', // PREG_JIT_STACKLIMIT_ERROR
	];
}


class PdfException extends Exception
{
}


class PgsqlException extends Exception
{
}


class PhpdbgException extends Exception
{
}


class PosixException extends Exception
{
}


class PsException extends Exception
{
}


class PspellException extends Exception
{
}


class RarException extends Exception
{
}


class ReadlineException extends Exception
{
}


class RecodeException extends Exception
{
}


class RegexException extends Exception
{
}


class RrdException extends Exception
{
}


class SeaslogException extends Exception
{
}


class SemException extends Exception
{
}


class SessionException extends Exception
{
}


class ShmopException extends Exception
{
}


class SimplexmlException extends Exception
{
}


class SoapException extends Exception
{
}


class SocketsException extends Exception
{
}


class SodiumException extends Exception
{
}


class SolrException extends Exception
{
}


class SplException extends Exception
{
}


class SqlsrvException extends Exception
{
}


class SsdeepException extends Exception
{
}


class Ssh2Exception extends Exception
{
}


class StatsException extends Exception
{
}


class StompException extends Exception
{
}


class StreamException extends Exception
{
}


class StringsException extends Exception
{
}


class SwooleException extends Exception
{
}


class TaintException extends Exception
{
}


class TcpwrapException extends Exception
{
}


class TokenizerException extends Exception
{
}


class TraderException extends Exception
{
}


class UodbcException extends Exception
{
}


class UopzException extends Exception
{
}


class UrlException extends Exception
{
}


class VarException extends Exception
{
}


class VpopmailException extends Exception
{
}


class Win32serviceException extends Exception
{
}


class XdiffException extends Exception
{
}


class XhprofException extends Exception
{
}


class XmlException extends Exception
{
}


class XmlrpcException extends Exception
{
}


class XmlwriterException extends Exception
{
}


class YamlException extends Exception
{
}


class YazException extends Exception
{
}


class ZipException extends Exception
{
}


class ZlibException extends Exception
{
}


class ZookeeperException extends Exception
{
}
