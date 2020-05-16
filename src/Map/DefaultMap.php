<?php

namespace FileEye\MimeMap\Map;

/**
 * Class for mapping file extensions to MIME types.
 *
 * This is MimeMap's default map.
 */
class DefaultMap extends AbstractMap
{
    /**
     * Singleton instance.
     *
     * @var AbstractMap
     */
    protected static $instance;

    /**
     * Returns this file's fully qualified filename.
     *
     * @return string
     */
    public function getFileName()
    {
        return __FILE__;
    }

    /**
     * Mapping between file extensions and MIME types.
     *
     * The array has three main keys, 't' that stores MIME types, 'e' that map
     * file extensions to MIME types, and 'a' that store MIME type aliases.
     *
     * The entire map is created automatically by running
     *  $ fileye-mimemap update [URL] [YAML] [FILE]
     * on the command line.
     * The utility application fetches the map from the Apache HTTPD
     * documentation website, and integrates its definitions with any further
     * specifications contained in the YAML file.
     *
     * DO NOT CHANGE THE MAPPING ARRAY MANUALLY.
     *
     * @internal
     *
     * @var array
     */
    // phpcs:disable
    protected static $map = array (
  't' =>
  array (
    'application/andrew-inset' =>
    array (
      'desc' =>
      array (
        0 => 'ATK inset',
        1 => 'ATK: Andrew Toolkit',
      ),
      'e' =>
      array (
        0 => 'ez',
      ),
    ),
    'application/annodex' =>
    array (
      'a' =>
      array (
        0 => 'application/x-annodex',
      ),
      'desc' =>
      array (
        0 => 'Annodex exchange format',
      ),
      'e' =>
      array (
        0 => 'anx',
      ),
    ),
    'application/applixware' =>
    array (
      'e' =>
      array (
        0 => 'aw',
      ),
    ),
    'application/atom+xml' =>
    array (
      'desc' =>
      array (
        0 => 'Atom syndication feed',
      ),
      'e' =>
      array (
        0 => 'atom',
      ),
    ),
    'application/atomcat+xml' =>
    array (
      'e' =>
      array (
        0 => 'atomcat',
      ),
    ),
    'application/atomsvc+xml' =>
    array (
      'e' =>
      array (
        0 => 'atomsvc',
      ),
    ),
    'application/ccxml+xml' =>
    array (
      'e' =>
      array (
        0 => 'ccxml',
      ),
    ),
    'application/cdmi-capability' =>
    array (
      'e' =>
      array (
        0 => 'cdmia',
      ),
    ),
    'application/cdmi-container' =>
    array (
      'e' =>
      array (
        0 => 'cdmic',
      ),
    ),
    'application/cdmi-domain' =>
    array (
      'e' =>
      array (
        0 => 'cdmid',
      ),
    ),
    'application/cdmi-object' =>
    array (
      'e' =>
      array (
        0 => 'cdmio',
      ),
    ),
    'application/cdmi-queue' =>
    array (
      'e' =>
      array (
        0 => 'cdmiq',
      ),
    ),
    'application/cu-seeme' =>
    array (
      'e' =>
      array (
        0 => 'cu',
      ),
    ),
    'application/davmount+xml' =>
    array (
      'e' =>
      array (
        0 => 'davmount',
      ),
    ),
    'application/dicom' =>
    array (
      'desc' =>
      array (
        0 => 'DICOM image',
        1 => 'DICOM: Digital Imaging and Communications in Medicine',
      ),
      'e' =>
      array (
        0 => 'dcm',
      ),
    ),
    'application/dssc+der' =>
    array (
      'e' =>
      array (
        0 => 'dssc',
      ),
    ),
    'application/dssc+xml' =>
    array (
      'e' =>
      array (
        0 => 'xdssc',
      ),
    ),
    'application/ecmascript' =>
    array (
      'a' =>
      array (
        0 => 'text/ecmascript',
      ),
      'desc' =>
      array (
        0 => 'ECMAScript program',
      ),
      'e' =>
      array (
        0 => 'ecma',
        1 => 'es',
      ),
    ),
    'application/emma+xml' =>
    array (
      'e' =>
      array (
        0 => 'emma',
      ),
    ),
    'application/epub+zip' =>
    array (
      'desc' =>
      array (
        0 => 'electronic book document',
      ),
      'e' =>
      array (
        0 => 'epub',
      ),
    ),
    'application/exi' =>
    array (
      'e' =>
      array (
        0 => 'exi',
      ),
    ),
    'application/font-tdpfr' =>
    array (
      'e' =>
      array (
        0 => 'pfr',
      ),
    ),
    'application/geo+json' =>
    array (
      'a' =>
      array (
        0 => 'application/vnd.geo+json',
      ),
      'desc' =>
      array (
        0 => 'GeoJSON geospatial data',
      ),
      'e' =>
      array (
        0 => 'geojson',
        1 => 'geo.json',
      ),
    ),
    'application/gml+xml' =>
    array (
      'desc' =>
      array (
        0 => 'GML document',
        1 => 'GML: Geography Markup Language',
      ),
      'e' =>
      array (
        0 => 'gml',
      ),
    ),
    'application/gnunet-directory' =>
    array (
      'desc' =>
      array (
        0 => 'GNUnet search file',
      ),
      'e' =>
      array (
        0 => 'gnd',
      ),
    ),
    'application/gpx+xml' =>
    array (
      'a' =>
      array (
        0 => 'application/gpx',
        1 => 'application/x-gpx+xml',
        2 => 'application/x-gpx',
      ),
      'desc' =>
      array (
        0 => 'GPX geographic data',
        1 => 'GPX: GPS Exchange Format',
      ),
      'e' =>
      array (
        0 => 'gpx',
      ),
    ),
    'application/gxf' =>
    array (
      'e' =>
      array (
        0 => 'gxf',
      ),
    ),
    'application/gzip' =>
    array (
      'a' =>
      array (
        0 => 'application/x-gzip',
      ),
      'desc' =>
      array (
        0 => 'Gzip archive',
      ),
      'e' =>
      array (
        0 => 'gz',
      ),
    ),
    'application/hyperstudio' =>
    array (
      'e' =>
      array (
        0 => 'stk',
      ),
    ),
    'application/illustrator' =>
    array (
      'a' =>
      array (
        0 => 'application/vnd.adobe.illustrator',
      ),
      'desc' =>
      array (
        0 => 'Adobe Illustrator document',
      ),
      'e' =>
      array (
        0 => 'ai',
      ),
    ),
    'application/inkml+xml' =>
    array (
      'e' =>
      array (
        0 => 'ink',
        1 => 'inkml',
      ),
    ),
    'application/ipfix' =>
    array (
      'e' =>
      array (
        0 => 'ipfix',
      ),
    ),
    'application/java-serialized-object' =>
    array (
      'e' =>
      array (
        0 => 'ser',
      ),
    ),
    'application/javascript' =>
    array (
      'a' =>
      array (
        0 => 'application/x-javascript',
        1 => 'text/javascript',
      ),
      'desc' =>
      array (
        0 => 'JavaScript program',
      ),
      'e' =>
      array (
        0 => 'js',
        1 => 'jsm',
        2 => 'mjs',
      ),
    ),
    'application/jrd+json' =>
    array (
      'desc' =>
      array (
        0 => 'JRD document',
        1 => 'JRD: JSON Resource Descriptor',
      ),
      'e' =>
      array (
        0 => 'jrd',
      ),
    ),
    'application/json' =>
    array (
      'desc' =>
      array (
        0 => 'JSON document',
        1 => 'JSON: JavaScript Object Notation',
      ),
      'e' =>
      array (
        0 => 'json',
      ),
    ),
    'application/json-patch+json' =>
    array (
      'desc' =>
      array (
        0 => 'JSON patch',
        1 => 'JSON: JavaScript Object Notation',
      ),
      'e' =>
      array (
        0 => 'json-patch',
      ),
    ),
    'application/jsonml+json' =>
    array (
      'e' =>
      array (
        0 => 'jsonml',
      ),
    ),
    'application/ld+json' =>
    array (
      'desc' =>
      array (
        0 => 'JSON-LD document',
        1 => 'JSON-LD: JavaScript Object Notation for Linked Data',
      ),
      'e' =>
      array (
        0 => 'jsonld',
      ),
    ),
    'application/lost+xml' =>
    array (
      'e' =>
      array (
        0 => 'lostxml',
      ),
    ),
    'application/mac-binhex40' =>
    array (
      'e' =>
      array (
        0 => 'hqx',
      ),
    ),
    'application/mac-compactpro' =>
    array (
      'e' =>
      array (
        0 => 'cpt',
      ),
    ),
    'application/mads+xml' =>
    array (
      'e' =>
      array (
        0 => 'mads',
      ),
    ),
    'application/marc' =>
    array (
      'e' =>
      array (
        0 => 'mrc',
      ),
    ),
    'application/marcxml+xml' =>
    array (
      'e' =>
      array (
        0 => 'mrcx',
      ),
    ),
    'application/mathematica' =>
    array (
      'a' =>
      array (
        0 => 'application/x-mathematica',
      ),
      'desc' =>
      array (
        0 => 'Mathematica Notebook file',
      ),
      'e' =>
      array (
        0 => 'ma',
        1 => 'nb',
        2 => 'mb',
      ),
    ),
    'application/mathml+xml' =>
    array (
      'a' =>
      array (
        0 => 'text/mathml',
      ),
      'desc' =>
      array (
        0 => 'MathML document',
        1 => 'MathML: Mathematical Markup Language',
      ),
      'e' =>
      array (
        0 => 'mathml',
        1 => 'mml',
      ),
    ),
    'application/mbox' =>
    array (
      'desc' =>
      array (
        0 => 'mailbox file',
      ),
      'e' =>
      array (
        0 => 'mbox',
      ),
    ),
    'application/mediaservercontrol+xml' =>
    array (
      'e' =>
      array (
        0 => 'mscml',
      ),
    ),
    'application/metalink+xml' =>
    array (
      'desc' =>
      array (
        0 => 'Metalink file',
      ),
      'e' =>
      array (
        0 => 'metalink',
      ),
    ),
    'application/metalink4+xml' =>
    array (
      'desc' =>
      array (
        0 => 'Metalink file',
      ),
      'e' =>
      array (
        0 => 'meta4',
      ),
    ),
    'application/mets+xml' =>
    array (
      'e' =>
      array (
        0 => 'mets',
      ),
    ),
    'application/mods+xml' =>
    array (
      'e' =>
      array (
        0 => 'mods',
      ),
    ),
    'application/mp21' =>
    array (
      'e' =>
      array (
        0 => 'm21',
        1 => 'mp21',
      ),
    ),
    'application/mp4' =>
    array (
      'e' =>
      array (
        0 => 'mp4s',
      ),
    ),
    'application/msword' =>
    array (
      'a' =>
      array (
        0 => 'application/vnd.ms-word',
        1 => 'application/x-msword',
        2 => 'zz-application/zz-winassoc-doc',
      ),
      'desc' =>
      array (
        0 => 'Word document',
      ),
      'e' =>
      array (
        0 => 'doc',
        1 => 'dot',
      ),
    ),
    'application/msword-template' =>
    array (
      'desc' =>
      array (
        0 => 'Word template',
      ),
      'e' =>
      array (
        0 => 'dot',
      ),
    ),
    'application/mxf' =>
    array (
      'desc' =>
      array (
        0 => 'MXF video',
        1 => 'MXF: Material Exchange Format',
      ),
      'e' =>
      array (
        0 => 'mxf',
      ),
    ),
    'application/octet-stream' =>
    array (
      'e' =>
      array (
        0 => 'bin',
        1 => 'dms',
        2 => 'lrf',
        3 => 'mar',
        4 => 'so',
        5 => 'dist',
        6 => 'distz',
        7 => 'pkg',
        8 => 'bpk',
        9 => 'dump',
        10 => 'elc',
        11 => 'deploy',
      ),
    ),
    'application/oda' =>
    array (
      'desc' =>
      array (
        0 => 'ODA document',
        1 => 'ODA: Office Document Architecture',
      ),
      'e' =>
      array (
        0 => 'oda',
      ),
    ),
    'application/oebps-package+xml' =>
    array (
      'e' =>
      array (
        0 => 'opf',
      ),
    ),
    'application/ogg' =>
    array (
      'a' =>
      array (
        0 => 'application/x-ogg',
      ),
      'desc' =>
      array (
        0 => 'Ogg multimedia file',
      ),
      'e' =>
      array (
        0 => 'ogx',
      ),
    ),
    'application/omdoc+xml' =>
    array (
      'e' =>
      array (
        0 => 'omdoc',
      ),
    ),
    'application/onenote' =>
    array (
      'e' =>
      array (
        0 => 'onetoc',
        1 => 'onetoc2',
        2 => 'onetmp',
        3 => 'onepkg',
      ),
    ),
    'application/owl+xml' =>
    array (
      'desc' =>
      array (
        0 => 'OWL XML file',
        1 => 'OWL: Web Ontology Language',
      ),
      'e' =>
      array (
        0 => 'owx',
      ),
    ),
    'application/oxps' =>
    array (
      'a' =>
      array (
        0 => 'application/vnd.ms-xpsdocument',
        1 => 'application/xps',
      ),
      'desc' =>
      array (
        0 => 'XPS document',
        1 => 'XPS: Open XML Paper Specification',
      ),
      'e' =>
      array (
        0 => 'oxps',
        1 => 'xps',
      ),
    ),
    'application/patch-ops-error+xml' =>
    array (
      'e' =>
      array (
        0 => 'xer',
      ),
    ),
    'application/pdf' =>
    array (
      'a' =>
      array (
        0 => 'application/x-pdf',
        1 => 'image/pdf',
        2 => 'application/acrobat',
        3 => 'application/nappdf',
      ),
      'desc' =>
      array (
        0 => 'PDF document',
        1 => 'PDF: Portable Document Format',
      ),
      'e' =>
      array (
        0 => 'pdf',
      ),
    ),
    'application/pgp-encrypted' =>
    array (
      'a' =>
      array (
        0 => 'application/pgp',
      ),
      'desc' =>
      array (
        0 => 'PGP/MIME-encrypted message header',
      ),
      'e' =>
      array (
        0 => 'pgp',
        1 => 'gpg',
        2 => 'asc',
      ),
    ),
    'application/pgp-keys' =>
    array (
      'desc' =>
      array (
        0 => 'PGP keys',
        1 => 'PGP: Pretty Good Privacy',
      ),
      'e' =>
      array (
        0 => 'skr',
        1 => 'pkr',
        2 => 'asc',
        3 => 'pgp',
        4 => 'gpg',
        5 => 'key',
      ),
    ),
    'application/pgp-signature' =>
    array (
      'desc' =>
      array (
        0 => 'detached OpenPGP signature',
      ),
      'e' =>
      array (
        0 => 'asc',
        1 => 'sig',
        2 => 'pgp',
        3 => 'gpg',
      ),
    ),
    'application/pics-rules' =>
    array (
      'e' =>
      array (
        0 => 'prf',
      ),
    ),
    'application/pkcs10' =>
    array (
      'desc' =>
      array (
        0 => 'PKCS#10 certification request',
        1 => 'PKCS: Public-Key Cryptography Standards',
      ),
      'e' =>
      array (
        0 => 'p10',
      ),
    ),
    'application/pkcs12' =>
    array (
      'a' =>
      array (
        0 => 'application/x-pkcs12',
      ),
      'desc' =>
      array (
        0 => 'PKCS#12 certificate bundle',
        1 => 'PKCS: Public-Key Cryptography Standards',
      ),
      'e' =>
      array (
        0 => 'p12',
        1 => 'pfx',
      ),
    ),
    'application/pkcs7-mime' =>
    array (
      'desc' =>
      array (
        0 => 'PKCS#7 file',
        1 => 'PKCS: Public-Key Cryptography Standards',
      ),
      'e' =>
      array (
        0 => 'p7m',
        1 => 'p7c',
      ),
    ),
    'application/pkcs7-signature' =>
    array (
      'desc' =>
      array (
        0 => 'detached S/MIME signature',
        1 => 'S/MIME: Secure/Multipurpose Internet Mail Extensions',
      ),
      'e' =>
      array (
        0 => 'p7s',
      ),
    ),
    'application/pkcs8' =>
    array (
      'desc' =>
      array (
        0 => 'PKCS#8 private key',
        1 => 'PKCS: Public-Key Cryptography Standards',
      ),
      'e' =>
      array (
        0 => 'p8',
      ),
    ),
    'application/pkcs8-encrypted' =>
    array (
      'desc' =>
      array (
        0 => 'PKCS#8 private key (encrypted)',
        1 => 'PKCS: Public-Key Cryptography Standards',
      ),
      'e' =>
      array (
        0 => 'p8e',
      ),
    ),
    'application/pkix-attr-cert' =>
    array (
      'e' =>
      array (
        0 => 'ac',
      ),
    ),
    'application/pkix-cert' =>
    array (
      'desc' =>
      array (
        0 => 'X.509 certificate',
      ),
      'e' =>
      array (
        0 => 'cer',
      ),
    ),
    'application/pkix-crl' =>
    array (
      'desc' =>
      array (
        0 => 'certificate revocation list',
      ),
      'e' =>
      array (
        0 => 'crl',
      ),
    ),
    'application/pkix-pkipath' =>
    array (
      'desc' =>
      array (
        0 => 'PkiPath certification path',
      ),
      'e' =>
      array (
        0 => 'pkipath',
      ),
    ),
    'application/pkixcmp' =>
    array (
      'e' =>
      array (
        0 => 'pki',
      ),
    ),
    'application/pls+xml' =>
    array (
      'e' =>
      array (
        0 => 'pls',
      ),
    ),
    'application/postscript' =>
    array (
      'desc' =>
      array (
        0 => 'PostScript document',
      ),
      'e' =>
      array (
        0 => 'ai',
        1 => 'eps',
        2 => 'ps',
      ),
    ),
    'application/prs.cww' =>
    array (
      'e' =>
      array (
        0 => 'cww',
      ),
    ),
    'application/pskc+xml' =>
    array (
      'e' =>
      array (
        0 => 'pskcxml',
      ),
    ),
    'application/ram' =>
    array (
      'desc' =>
      array (
        0 => 'RealMedia playlist',
      ),
      'e' =>
      array (
        0 => 'ram',
      ),
    ),
    'application/raml+yaml' =>
    array (
      'desc' =>
      array (
        0 => 'RAML document',
        1 => 'RAML: RESTful API Modeling Language',
      ),
      'e' =>
      array (
        0 => 'raml',
      ),
    ),
    'application/rdf+xml' =>
    array (
      'a' =>
      array (
        0 => 'text/rdf',
      ),
      'desc' =>
      array (
        0 => 'RDF file',
        1 => 'RDF: Resource Description Framework',
      ),
      'e' =>
      array (
        0 => 'rdf',
        1 => 'rdfs',
        2 => 'owl',
      ),
    ),
    'application/reginfo+xml' =>
    array (
      'e' =>
      array (
        0 => 'rif',
      ),
    ),
    'application/relax-ng-compact-syntax' =>
    array (
      'a' =>
      array (
        0 => 'application/x-rnc',
      ),
      'desc' =>
      array (
        0 => 'RELAX NG XML schema',
        1 => 'RELAX NG: REgular LAnguage for XML Next Generation',
      ),
      'e' =>
      array (
        0 => 'rnc',
      ),
    ),
    'application/resource-lists+xml' =>
    array (
      'e' =>
      array (
        0 => 'rl',
      ),
    ),
    'application/resource-lists-diff+xml' =>
    array (
      'e' =>
      array (
        0 => 'rld',
      ),
    ),
    'application/rls-services+xml' =>
    array (
      'e' =>
      array (
        0 => 'rs',
      ),
    ),
    'application/rpki-ghostbusters' =>
    array (
      'e' =>
      array (
        0 => 'gbr',
      ),
    ),
    'application/rpki-manifest' =>
    array (
      'e' =>
      array (
        0 => 'mft',
      ),
    ),
    'application/rpki-roa' =>
    array (
      'e' =>
      array (
        0 => 'roa',
      ),
    ),
    'application/rsd+xml' =>
    array (
      'e' =>
      array (
        0 => 'rsd',
      ),
    ),
    'application/rss+xml' =>
    array (
      'a' =>
      array (
        0 => 'text/rss',
      ),
      'desc' =>
      array (
        0 => 'RSS summary',
        1 => 'RSS: RDF Site Summary',
      ),
      'e' =>
      array (
        0 => 'rss',
      ),
    ),
    'application/rtf' =>
    array (
      'a' =>
      array (
        0 => 'text/rtf',
      ),
      'desc' =>
      array (
        0 => 'RTF document',
        1 => 'RTF: Rich Text Format',
      ),
      'e' =>
      array (
        0 => 'rtf',
      ),
    ),
    'application/sbml+xml' =>
    array (
      'e' =>
      array (
        0 => 'sbml',
      ),
    ),
    'application/scvp-cv-request' =>
    array (
      'e' =>
      array (
        0 => 'scq',
      ),
    ),
    'application/scvp-cv-response' =>
    array (
      'e' =>
      array (
        0 => 'scs',
      ),
    ),
    'application/scvp-vp-request' =>
    array (
      'e' =>
      array (
        0 => 'spq',
      ),
    ),
    'application/scvp-vp-response' =>
    array (
      'e' =>
      array (
        0 => 'spp',
      ),
    ),
    'application/sdp' =>
    array (
      'a' =>
      array (
        0 => 'application/x-sdp',
        1 => 'application/vnd.sdp',
      ),
      'desc' =>
      array (
        0 => 'SDP multicast stream file',
        1 => 'SDP: Session Description Protocol',
      ),
      'e' =>
      array (
        0 => 'sdp',
      ),
    ),
    'application/set-payment-initiation' =>
    array (
      'e' =>
      array (
        0 => 'setpay',
      ),
    ),
    'application/set-registration-initiation' =>
    array (
      'e' =>
      array (
        0 => 'setreg',
      ),
    ),
    'application/shf+xml' =>
    array (
      'e' =>
      array (
        0 => 'shf',
      ),
    ),
    'application/sieve' =>
    array (
      'desc' =>
      array (
        0 => 'Sieve mail filter script',
      ),
      'e' =>
      array (
        0 => 'siv',
      ),
    ),
    'application/smil+xml' =>
    array (
      'a' =>
      array (
        0 => 'application/smil',
      ),
      'desc' =>
      array (
        0 => 'SMIL document',
        1 => 'SMIL: Synchronized Multimedia Integration Language',
      ),
      'e' =>
      array (
        0 => 'smi',
        1 => 'smil',
        2 => 'sml',
        3 => 'kino',
      ),
    ),
    'application/sparql-query' =>
    array (
      'e' =>
      array (
        0 => 'rq',
      ),
    ),
    'application/sparql-results+xml' =>
    array (
      'e' =>
      array (
        0 => 'srx',
      ),
    ),
    'application/sql' =>
    array (
      'a' =>
      array (
        0 => 'text/x-sql',
      ),
      'desc' =>
      array (
        0 => 'SQL code',
      ),
      'e' =>
      array (
        0 => 'sql',
      ),
    ),
    'application/srgs' =>
    array (
      'e' =>
      array (
        0 => 'gram',
      ),
    ),
    'application/srgs+xml' =>
    array (
      'e' =>
      array (
        0 => 'grxml',
      ),
    ),
    'application/sru+xml' =>
    array (
      'e' =>
      array (
        0 => 'sru',
      ),
    ),
    'application/ssdl+xml' =>
    array (
      'e' =>
      array (
        0 => 'ssdl',
      ),
    ),
    'application/ssml+xml' =>
    array (
      'e' =>
      array (
        0 => 'ssml',
      ),
    ),
    'application/tei+xml' =>
    array (
      'e' =>
      array (
        0 => 'tei',
        1 => 'teicorpus',
      ),
    ),
    'application/thraud+xml' =>
    array (
      'e' =>
      array (
        0 => 'tfi',
      ),
    ),
    'application/timestamped-data' =>
    array (
      'e' =>
      array (
        0 => 'tsd',
      ),
    ),
    'application/trig' =>
    array (
      'a' =>
      array (
        0 => 'application/x-trig',
      ),
      'desc' =>
      array (
        0 => 'TriG RDF document',
        1 => 'TriG: TriG RDF Graph Triple Language',
      ),
      'e' =>
      array (
        0 => 'trig',
      ),
    ),
    'application/vnd.3gpp.pic-bw-large' =>
    array (
      'e' =>
      array (
        0 => 'plb',
      ),
    ),
    'application/vnd.3gpp.pic-bw-small' =>
    array (
      'e' =>
      array (
        0 => 'psb',
      ),
    ),
    'application/vnd.3gpp.pic-bw-var' =>
    array (
      'e' =>
      array (
        0 => 'pvb',
      ),
    ),
    'application/vnd.3gpp2.tcap' =>
    array (
      'e' =>
      array (
        0 => 'tcap',
      ),
    ),
    'application/vnd.3m.post-it-notes' =>
    array (
      'e' =>
      array (
        0 => 'pwn',
      ),
    ),
    'application/vnd.accpac.simply.aso' =>
    array (
      'e' =>
      array (
        0 => 'aso',
      ),
    ),
    'application/vnd.accpac.simply.imp' =>
    array (
      'e' =>
      array (
        0 => 'imp',
      ),
    ),
    'application/vnd.acucobol' =>
    array (
      'e' =>
      array (
        0 => 'acu',
      ),
    ),
    'application/vnd.acucorp' =>
    array (
      'e' =>
      array (
        0 => 'atc',
        1 => 'acutc',
      ),
    ),
    'application/vnd.adobe.air-application-installer-package+zip' =>
    array (
      'e' =>
      array (
        0 => 'air',
      ),
    ),
    'application/vnd.adobe.flash.movie' =>
    array (
      'a' =>
      array (
        0 => 'application/x-shockwave-flash',
        1 => 'application/futuresplash',
      ),
      'desc' =>
      array (
        0 => 'Shockwave Flash file',
      ),
      'e' =>
      array (
        0 => 'swf',
        1 => 'spl',
      ),
    ),
    'application/vnd.adobe.formscentral.fcdt' =>
    array (
      'e' =>
      array (
        0 => 'fcdt',
      ),
    ),
    'application/vnd.adobe.fxp' =>
    array (
      'e' =>
      array (
        0 => 'fxp',
        1 => 'fxpl',
      ),
    ),
    'application/vnd.adobe.xdp+xml' =>
    array (
      'e' =>
      array (
        0 => 'xdp',
      ),
    ),
    'application/vnd.adobe.xfdf' =>
    array (
      'e' =>
      array (
        0 => 'xfdf',
      ),
    ),
    'application/vnd.ahead.space' =>
    array (
      'e' =>
      array (
        0 => 'ahead',
      ),
    ),
    'application/vnd.airzip.filesecure.azf' =>
    array (
      'e' =>
      array (
        0 => 'azf',
      ),
    ),
    'application/vnd.airzip.filesecure.azs' =>
    array (
      'e' =>
      array (
        0 => 'azs',
      ),
    ),
    'application/vnd.amazon.ebook' =>
    array (
      'e' =>
      array (
        0 => 'azw',
      ),
    ),
    'application/vnd.amazon.mobi8-ebook' =>
    array (
      'a' =>
      array (
        0 => 'application/x-mobi8-ebook',
      ),
      'desc' =>
      array (
        0 => 'Kindle book document',
      ),
      'e' =>
      array (
        0 => 'azw3',
        1 => 'kfx',
      ),
    ),
    'application/vnd.americandynamics.acc' =>
    array (
      'e' =>
      array (
        0 => 'acc',
      ),
    ),
    'application/vnd.amiga.ami' =>
    array (
      'e' =>
      array (
        0 => 'ami',
      ),
    ),
    'application/vnd.android.package-archive' =>
    array (
      'desc' =>
      array (
        0 => 'Android package',
      ),
      'e' =>
      array (
        0 => 'apk',
      ),
    ),
    'application/vnd.anser-web-certificate-issue-initiation' =>
    array (
      'e' =>
      array (
        0 => 'cii',
      ),
    ),
    'application/vnd.anser-web-funds-transfer-initiation' =>
    array (
      'e' =>
      array (
        0 => 'fti',
      ),
    ),
    'application/vnd.antix.game-component' =>
    array (
      'e' =>
      array (
        0 => 'atx',
      ),
    ),
    'application/vnd.appimage' =>
    array (
      'desc' =>
      array (
        0 => 'AppImage application bundle',
      ),
      'e' =>
      array (
        0 => 'appimage',
      ),
    ),
    'application/vnd.apple.installer+xml' =>
    array (
      'e' =>
      array (
        0 => 'mpkg',
      ),
    ),
    'application/vnd.apple.mpegurl' =>
    array (
      'desc' =>
      array (
        0 => 'HTTP Live Streaming playlist',
      ),
      'e' =>
      array (
        0 => 'm3u8',
        1 => 'm3u',
      ),
    ),
    'application/vnd.aristanetworks.swi' =>
    array (
      'e' =>
      array (
        0 => 'swi',
      ),
    ),
    'application/vnd.astraea-software.iota' =>
    array (
      'e' =>
      array (
        0 => 'iota',
      ),
    ),
    'application/vnd.audiograph' =>
    array (
      'e' =>
      array (
        0 => 'aep',
      ),
    ),
    'application/vnd.blueice.multipass' =>
    array (
      'e' =>
      array (
        0 => 'mpm',
      ),
    ),
    'application/vnd.bmi' =>
    array (
      'e' =>
      array (
        0 => 'bmi',
      ),
    ),
    'application/vnd.businessobjects' =>
    array (
      'e' =>
      array (
        0 => 'rep',
      ),
    ),
    'application/vnd.chemdraw+xml' =>
    array (
      'e' =>
      array (
        0 => 'cdxml',
      ),
    ),
    'application/vnd.chess-pgn' =>
    array (
      'a' =>
      array (
        0 => 'application/x-chess-pgn',
      ),
      'desc' =>
      array (
        0 => 'PGN chess game notation',
        1 => 'PGN: Portable Game Notation',
      ),
      'e' =>
      array (
        0 => 'pgn',
      ),
    ),
    'application/vnd.chipnuts.karaoke-mmd' =>
    array (
      'e' =>
      array (
        0 => 'mmd',
      ),
    ),
    'application/vnd.cinderella' =>
    array (
      'e' =>
      array (
        0 => 'cdy',
      ),
    ),
    'application/vnd.claymore' =>
    array (
      'e' =>
      array (
        0 => 'cla',
      ),
    ),
    'application/vnd.cloanto.rp9' =>
    array (
      'e' =>
      array (
        0 => 'rp9',
      ),
    ),
    'application/vnd.clonk.c4group' =>
    array (
      'e' =>
      array (
        0 => 'c4g',
        1 => 'c4d',
        2 => 'c4f',
        3 => 'c4p',
        4 => 'c4u',
      ),
    ),
    'application/vnd.cluetrust.cartomobile-config' =>
    array (
      'e' =>
      array (
        0 => 'c11amc',
      ),
    ),
    'application/vnd.cluetrust.cartomobile-config-pkg' =>
    array (
      'e' =>
      array (
        0 => 'c11amz',
      ),
    ),
    'application/vnd.coffeescript' =>
    array (
      'desc' =>
      array (
        0 => 'CoffeeScript document',
      ),
      'e' =>
      array (
        0 => 'coffee',
      ),
    ),
    'application/vnd.comicbook+zip' =>
    array (
      'a' =>
      array (
        0 => 'application/x-cbz',
      ),
      'desc' =>
      array (
        0 => 'comic book archive',
      ),
      'e' =>
      array (
        0 => 'cbz',
      ),
    ),
    'application/vnd.comicbook-rar' =>
    array (
      'a' =>
      array (
        0 => 'application/x-cbr',
      ),
      'desc' =>
      array (
        0 => 'comic book archive',
      ),
      'e' =>
      array (
        0 => 'cbr',
        1 => 'cba',
      ),
    ),
    'application/vnd.commonspace' =>
    array (
      'e' =>
      array (
        0 => 'csp',
      ),
    ),
    'application/vnd.contact.cmsg' =>
    array (
      'e' =>
      array (
        0 => 'cdbcmsg',
      ),
    ),
    'application/vnd.corel-draw' =>
    array (
      'a' =>
      array (
        0 => 'application/cdr',
        1 => 'application/coreldraw',
        2 => 'application/x-cdr',
        3 => 'application/x-coreldraw',
        4 => 'image/cdr',
        5 => 'image/x-cdr',
        6 => 'zz-application/zz-winassoc-cdr',
      ),
      'desc' =>
      array (
        0 => 'Corel Draw drawing',
      ),
      'e' =>
      array (
        0 => 'cdr',
      ),
    ),
    'application/vnd.cosmocaller' =>
    array (
      'e' =>
      array (
        0 => 'cmc',
      ),
    ),
    'application/vnd.crick.clicker' =>
    array (
      'e' =>
      array (
        0 => 'clkx',
      ),
    ),
    'application/vnd.crick.clicker.keyboard' =>
    array (
      'e' =>
      array (
        0 => 'clkk',
      ),
    ),
    'application/vnd.crick.clicker.palette' =>
    array (
      'e' =>
      array (
        0 => 'clkp',
      ),
    ),
    'application/vnd.crick.clicker.template' =>
    array (
      'e' =>
      array (
        0 => 'clkt',
      ),
    ),
    'application/vnd.crick.clicker.wordbank' =>
    array (
      'e' =>
      array (
        0 => 'clkw',
      ),
    ),
    'application/vnd.criticaltools.wbs+xml' =>
    array (
      'e' =>
      array (
        0 => 'wbs',
      ),
    ),
    'application/vnd.ctc-posml' =>
    array (
      'e' =>
      array (
        0 => 'pml',
      ),
    ),
    'application/vnd.cups-ppd' =>
    array (
      'e' =>
      array (
        0 => 'ppd',
      ),
    ),
    'application/vnd.curl.car' =>
    array (
      'e' =>
      array (
        0 => 'car',
      ),
    ),
    'application/vnd.curl.pcurl' =>
    array (
      'e' =>
      array (
        0 => 'pcurl',
      ),
    ),
    'application/vnd.dart' =>
    array (
      'e' =>
      array (
        0 => 'dart',
      ),
    ),
    'application/vnd.data-vision.rdz' =>
    array (
      'e' =>
      array (
        0 => 'rdz',
      ),
    ),
    'application/vnd.debian.binary-package' =>
    array (
      'a' =>
      array (
        0 => 'application/x-deb',
        1 => 'application/x-debian-package',
      ),
      'desc' =>
      array (
        0 => 'Debian package',
      ),
      'e' =>
      array (
        0 => 'deb',
        1 => 'udeb',
      ),
    ),
    'application/vnd.dece.data' =>
    array (
      'e' =>
      array (
        0 => 'uvf',
        1 => 'uvvf',
        2 => 'uvd',
        3 => 'uvvd',
      ),
    ),
    'application/vnd.dece.ttml+xml' =>
    array (
      'e' =>
      array (
        0 => 'uvt',
        1 => 'uvvt',
      ),
    ),
    'application/vnd.dece.unspecified' =>
    array (
      'e' =>
      array (
        0 => 'uvx',
        1 => 'uvvx',
      ),
    ),
    'application/vnd.dece.zip' =>
    array (
      'e' =>
      array (
        0 => 'uvz',
        1 => 'uvvz',
      ),
    ),
    'application/vnd.denovo.fcselayout-link' =>
    array (
      'e' =>
      array (
        0 => 'fe_launch',
      ),
    ),
    'application/vnd.dna' =>
    array (
      'e' =>
      array (
        0 => 'dna',
      ),
    ),
    'application/vnd.dolby.mlp' =>
    array (
      'e' =>
      array (
        0 => 'mlp',
      ),
    ),
    'application/vnd.dpgraph' =>
    array (
      'e' =>
      array (
        0 => 'dpg',
      ),
    ),
    'application/vnd.dreamfactory' =>
    array (
      'e' =>
      array (
        0 => 'dfac',
      ),
    ),
    'application/vnd.ds-keypoint' =>
    array (
      'e' =>
      array (
        0 => 'kpxx',
      ),
    ),
    'application/vnd.dvb.ait' =>
    array (
      'e' =>
      array (
        0 => 'ait',
      ),
    ),
    'application/vnd.dvb.service' =>
    array (
      'e' =>
      array (
        0 => 'svc',
      ),
    ),
    'application/vnd.dynageo' =>
    array (
      'e' =>
      array (
        0 => 'geo',
      ),
    ),
    'application/vnd.ecowin.chart' =>
    array (
      'e' =>
      array (
        0 => 'mag',
      ),
    ),
    'application/vnd.emusic-emusic_package' =>
    array (
      'desc' =>
      array (
        0 => 'eMusic download package',
      ),
      'e' =>
      array (
        0 => 'emp',
      ),
    ),
    'application/vnd.enliven' =>
    array (
      'e' =>
      array (
        0 => 'nml',
      ),
    ),
    'application/vnd.epson.esf' =>
    array (
      'e' =>
      array (
        0 => 'esf',
      ),
    ),
    'application/vnd.epson.msf' =>
    array (
      'e' =>
      array (
        0 => 'msf',
      ),
    ),
    'application/vnd.epson.quickanime' =>
    array (
      'e' =>
      array (
        0 => 'qam',
      ),
    ),
    'application/vnd.epson.salt' =>
    array (
      'e' =>
      array (
        0 => 'slt',
      ),
    ),
    'application/vnd.epson.ssf' =>
    array (
      'e' =>
      array (
        0 => 'ssf',
      ),
    ),
    'application/vnd.eszigno3+xml' =>
    array (
      'e' =>
      array (
        0 => 'es3',
        1 => 'et3',
      ),
    ),
    'application/vnd.ezpix-album' =>
    array (
      'e' =>
      array (
        0 => 'ez2',
      ),
    ),
    'application/vnd.ezpix-package' =>
    array (
      'e' =>
      array (
        0 => 'ez3',
      ),
    ),
    'application/vnd.fdf' =>
    array (
      'e' =>
      array (
        0 => 'fdf',
      ),
    ),
    'application/vnd.fdsn.mseed' =>
    array (
      'e' =>
      array (
        0 => 'mseed',
      ),
    ),
    'application/vnd.fdsn.seed' =>
    array (
      'e' =>
      array (
        0 => 'seed',
        1 => 'dataless',
      ),
    ),
    'application/vnd.flatpak' =>
    array (
      'a' =>
      array (
        0 => 'application/vnd.xdgapp',
      ),
      'desc' =>
      array (
        0 => 'Flatpak application bundle',
      ),
      'e' =>
      array (
        0 => 'flatpak',
        1 => 'xdgapp',
      ),
    ),
    'application/vnd.flatpak.ref' =>
    array (
      'desc' =>
      array (
        0 => 'Flatpak repository reference',
      ),
      'e' =>
      array (
        0 => 'flatpakref',
      ),
    ),
    'application/vnd.flatpak.repo' =>
    array (
      'desc' =>
      array (
        0 => 'Flatpak repository description',
      ),
      'e' =>
      array (
        0 => 'flatpakrepo',
      ),
    ),
    'application/vnd.flographit' =>
    array (
      'e' =>
      array (
        0 => 'gph',
      ),
    ),
    'application/vnd.fluxtime.clip' =>
    array (
      'e' =>
      array (
        0 => 'ftc',
      ),
    ),
    'application/vnd.framemaker' =>
    array (
      'a' =>
      array (
        0 => 'application/x-frame',
      ),
      'desc' =>
      array (
        0 => 'Adobe FrameMaker document',
      ),
      'e' =>
      array (
        0 => 'fm',
        1 => 'frame',
        2 => 'maker',
        3 => 'book',
      ),
    ),
    'application/vnd.frogans.fnc' =>
    array (
      'e' =>
      array (
        0 => 'fnc',
      ),
    ),
    'application/vnd.frogans.ltf' =>
    array (
      'e' =>
      array (
        0 => 'ltf',
      ),
    ),
    'application/vnd.fsc.weblaunch' =>
    array (
      'e' =>
      array (
        0 => 'fsc',
      ),
    ),
    'application/vnd.fujitsu.oasys' =>
    array (
      'e' =>
      array (
        0 => 'oas',
      ),
    ),
    'application/vnd.fujitsu.oasys2' =>
    array (
      'e' =>
      array (
        0 => 'oa2',
      ),
    ),
    'application/vnd.fujitsu.oasys3' =>
    array (
      'e' =>
      array (
        0 => 'oa3',
      ),
    ),
    'application/vnd.fujitsu.oasysgp' =>
    array (
      'e' =>
      array (
        0 => 'fg5',
      ),
    ),
    'application/vnd.fujitsu.oasysprs' =>
    array (
      'e' =>
      array (
        0 => 'bh2',
      ),
    ),
    'application/vnd.fujixerox.ddd' =>
    array (
      'e' =>
      array (
        0 => 'ddd',
      ),
    ),
    'application/vnd.fujixerox.docuworks' =>
    array (
      'e' =>
      array (
        0 => 'xdw',
      ),
    ),
    'application/vnd.fujixerox.docuworks.binder' =>
    array (
      'e' =>
      array (
        0 => 'xbd',
      ),
    ),
    'application/vnd.fuzzysheet' =>
    array (
      'e' =>
      array (
        0 => 'fzs',
      ),
    ),
    'application/vnd.genomatix.tuxedo' =>
    array (
      'e' =>
      array (
        0 => 'txd',
      ),
    ),
    'application/vnd.geogebra.file' =>
    array (
      'e' =>
      array (
        0 => 'ggb',
      ),
    ),
    'application/vnd.geogebra.tool' =>
    array (
      'e' =>
      array (
        0 => 'ggt',
      ),
    ),
    'application/vnd.geometry-explorer' =>
    array (
      'e' =>
      array (
        0 => 'gex',
        1 => 'gre',
      ),
    ),
    'application/vnd.geonext' =>
    array (
      'e' =>
      array (
        0 => 'gxt',
      ),
    ),
    'application/vnd.geoplan' =>
    array (
      'e' =>
      array (
        0 => 'g2w',
      ),
    ),
    'application/vnd.geospace' =>
    array (
      'e' =>
      array (
        0 => 'g3w',
      ),
    ),
    'application/vnd.gmx' =>
    array (
      'e' =>
      array (
        0 => 'gmx',
      ),
    ),
    'application/vnd.google-earth.kml+xml' =>
    array (
      'desc' =>
      array (
        0 => 'KML geographic data',
        1 => 'KML: Keyhole Markup Language',
      ),
      'e' =>
      array (
        0 => 'kml',
      ),
    ),
    'application/vnd.google-earth.kmz' =>
    array (
      'desc' =>
      array (
        0 => 'KML geographic compressed data',
        1 => 'KML: Keyhole Markup Language',
      ),
      'e' =>
      array (
        0 => 'kmz',
      ),
    ),
    'application/vnd.grafeq' =>
    array (
      'e' =>
      array (
        0 => 'gqf',
        1 => 'gqs',
      ),
    ),
    'application/vnd.groove-account' =>
    array (
      'e' =>
      array (
        0 => 'gac',
      ),
    ),
    'application/vnd.groove-help' =>
    array (
      'e' =>
      array (
        0 => 'ghf',
      ),
    ),
    'application/vnd.groove-identity-message' =>
    array (
      'e' =>
      array (
        0 => 'gim',
      ),
    ),
    'application/vnd.groove-injector' =>
    array (
      'e' =>
      array (
        0 => 'grv',
      ),
    ),
    'application/vnd.groove-tool-message' =>
    array (
      'e' =>
      array (
        0 => 'gtm',
      ),
    ),
    'application/vnd.groove-tool-template' =>
    array (
      'e' =>
      array (
        0 => 'tpl',
      ),
    ),
    'application/vnd.groove-vcard' =>
    array (
      'e' =>
      array (
        0 => 'vcg',
      ),
    ),
    'application/vnd.hal+xml' =>
    array (
      'e' =>
      array (
        0 => 'hal',
      ),
    ),
    'application/vnd.handheld-entertainment+xml' =>
    array (
      'e' =>
      array (
        0 => 'zmm',
      ),
    ),
    'application/vnd.hbci' =>
    array (
      'e' =>
      array (
        0 => 'hbci',
      ),
    ),
    'application/vnd.hhe.lesson-player' =>
    array (
      'e' =>
      array (
        0 => 'les',
      ),
    ),
    'application/vnd.hp-hpgl' =>
    array (
      'desc' =>
      array (
        0 => 'HPGL file',
        1 => 'HPGL: HP Graphics Language',
      ),
      'e' =>
      array (
        0 => 'hpgl',
      ),
    ),
    'application/vnd.hp-hpid' =>
    array (
      'e' =>
      array (
        0 => 'hpid',
      ),
    ),
    'application/vnd.hp-hps' =>
    array (
      'e' =>
      array (
        0 => 'hps',
      ),
    ),
    'application/vnd.hp-jlyt' =>
    array (
      'e' =>
      array (
        0 => 'jlt',
      ),
    ),
    'application/vnd.hp-pcl' =>
    array (
      'desc' =>
      array (
        0 => 'PCL file',
        1 => 'PCL: HP Printer Control Language',
      ),
      'e' =>
      array (
        0 => 'pcl',
      ),
    ),
    'application/vnd.hp-pclxl' =>
    array (
      'e' =>
      array (
        0 => 'pclxl',
      ),
    ),
    'application/vnd.hydrostatix.sof-data' =>
    array (
      'e' =>
      array (
        0 => 'sfd-hdstx',
      ),
    ),
    'application/vnd.ibm.minipay' =>
    array (
      'e' =>
      array (
        0 => 'mpy',
      ),
    ),
    'application/vnd.ibm.modcap' =>
    array (
      'e' =>
      array (
        0 => 'afp',
        1 => 'listafp',
        2 => 'list3820',
      ),
    ),
    'application/vnd.ibm.rights-management' =>
    array (
      'e' =>
      array (
        0 => 'irm',
      ),
    ),
    'application/vnd.ibm.secure-container' =>
    array (
      'e' =>
      array (
        0 => 'sc',
      ),
    ),
    'application/vnd.iccprofile' =>
    array (
      'desc' =>
      array (
        0 => 'ICC profile',
      ),
      'e' =>
      array (
        0 => 'icc',
        1 => 'icm',
      ),
    ),
    'application/vnd.igloader' =>
    array (
      'e' =>
      array (
        0 => 'igl',
      ),
    ),
    'application/vnd.immervision-ivp' =>
    array (
      'e' =>
      array (
        0 => 'ivp',
      ),
    ),
    'application/vnd.immervision-ivu' =>
    array (
      'e' =>
      array (
        0 => 'ivu',
      ),
    ),
    'application/vnd.insors.igm' =>
    array (
      'e' =>
      array (
        0 => 'igm',
      ),
    ),
    'application/vnd.intercon.formnet' =>
    array (
      'e' =>
      array (
        0 => 'xpw',
        1 => 'xpx',
      ),
    ),
    'application/vnd.intergeo' =>
    array (
      'e' =>
      array (
        0 => 'i2g',
      ),
    ),
    'application/vnd.intu.qbo' =>
    array (
      'e' =>
      array (
        0 => 'qbo',
      ),
    ),
    'application/vnd.intu.qfx' =>
    array (
      'e' =>
      array (
        0 => 'qfx',
      ),
    ),
    'application/vnd.ipunplugged.rcprofile' =>
    array (
      'e' =>
      array (
        0 => 'rcprofile',
      ),
    ),
    'application/vnd.irepository.package+xml' =>
    array (
      'e' =>
      array (
        0 => 'irp',
      ),
    ),
    'application/vnd.is-xpr' =>
    array (
      'e' =>
      array (
        0 => 'xpr',
      ),
    ),
    'application/vnd.isac.fcs' =>
    array (
      'e' =>
      array (
        0 => 'fcs',
      ),
    ),
    'application/vnd.jam' =>
    array (
      'e' =>
      array (
        0 => 'jam',
      ),
    ),
    'application/vnd.jcp.javame.midlet-rms' =>
    array (
      'e' =>
      array (
        0 => 'rms',
      ),
    ),
    'application/vnd.jisp' =>
    array (
      'e' =>
      array (
        0 => 'jisp',
      ),
    ),
    'application/vnd.joost.joda-archive' =>
    array (
      'e' =>
      array (
        0 => 'joda',
      ),
    ),
    'application/vnd.kahootz' =>
    array (
      'e' =>
      array (
        0 => 'ktz',
        1 => 'ktr',
      ),
    ),
    'application/vnd.kde.karbon' =>
    array (
      'e' =>
      array (
        0 => 'karbon',
      ),
    ),
    'application/vnd.kde.kchart' =>
    array (
      'e' =>
      array (
        0 => 'chrt',
      ),
    ),
    'application/vnd.kde.kformula' =>
    array (
      'e' =>
      array (
        0 => 'kfo',
      ),
    ),
    'application/vnd.kde.kivio' =>
    array (
      'e' =>
      array (
        0 => 'flw',
      ),
    ),
    'application/vnd.kde.kontour' =>
    array (
      'e' =>
      array (
        0 => 'kon',
      ),
    ),
    'application/vnd.kde.kpresenter' =>
    array (
      'e' =>
      array (
        0 => 'kpr',
        1 => 'kpt',
      ),
    ),
    'application/vnd.kde.kspread' =>
    array (
      'e' =>
      array (
        0 => 'ksp',
      ),
    ),
    'application/vnd.kde.kword' =>
    array (
      'e' =>
      array (
        0 => 'kwd',
        1 => 'kwt',
      ),
    ),
    'application/vnd.kenameaapp' =>
    array (
      'e' =>
      array (
        0 => 'htke',
      ),
    ),
    'application/vnd.kidspiration' =>
    array (
      'e' =>
      array (
        0 => 'kia',
      ),
    ),
    'application/vnd.kinar' =>
    array (
      'e' =>
      array (
        0 => 'kne',
        1 => 'knp',
      ),
    ),
    'application/vnd.koan' =>
    array (
      'e' =>
      array (
        0 => 'skp',
        1 => 'skd',
        2 => 'skt',
        3 => 'skm',
      ),
    ),
    'application/vnd.kodak-descriptor' =>
    array (
      'e' =>
      array (
        0 => 'sse',
      ),
    ),
    'application/vnd.las.las+xml' =>
    array (
      'e' =>
      array (
        0 => 'lasxml',
      ),
    ),
    'application/vnd.llamagraphics.life-balance.desktop' =>
    array (
      'e' =>
      array (
        0 => 'lbd',
      ),
    ),
    'application/vnd.llamagraphics.life-balance.exchange+xml' =>
    array (
      'e' =>
      array (
        0 => 'lbe',
      ),
    ),
    'application/vnd.lotus-1-2-3' =>
    array (
      'a' =>
      array (
        0 => 'application/x-lotus123',
        1 => 'application/x-123',
        2 => 'application/lotus123',
        3 => 'application/wk1',
        4 => 'zz-application/zz-winassoc-123',
      ),
      'desc' =>
      array (
        0 => 'Lotus 1-2-3 spreadsheet',
      ),
      'e' =>
      array (
        0 => '123',
        1 => 'wk1',
        2 => 'wk3',
        3 => 'wk4',
        4 => 'wks',
      ),
    ),
    'application/vnd.lotus-approach' =>
    array (
      'e' =>
      array (
        0 => 'apr',
      ),
    ),
    'application/vnd.lotus-freelance' =>
    array (
      'e' =>
      array (
        0 => 'pre',
      ),
    ),
    'application/vnd.lotus-notes' =>
    array (
      'e' =>
      array (
        0 => 'nsf',
      ),
    ),
    'application/vnd.lotus-organizer' =>
    array (
      'e' =>
      array (
        0 => 'org',
      ),
    ),
    'application/vnd.lotus-screencam' =>
    array (
      'e' =>
      array (
        0 => 'scm',
      ),
    ),
    'application/vnd.lotus-wordpro' =>
    array (
      'desc' =>
      array (
        0 => 'Lotus Word Pro document',
      ),
      'e' =>
      array (
        0 => 'lwp',
      ),
    ),
    'application/vnd.macports.portpkg' =>
    array (
      'e' =>
      array (
        0 => 'portpkg',
      ),
    ),
    'application/vnd.mcd' =>
    array (
      'e' =>
      array (
        0 => 'mcd',
      ),
    ),
    'application/vnd.medcalcdata' =>
    array (
      'e' =>
      array (
        0 => 'mc1',
      ),
    ),
    'application/vnd.mediastation.cdkey' =>
    array (
      'e' =>
      array (
        0 => 'cdkey',
      ),
    ),
    'application/vnd.mfer' =>
    array (
      'e' =>
      array (
        0 => 'mwf',
      ),
    ),
    'application/vnd.mfmp' =>
    array (
      'e' =>
      array (
        0 => 'mfm',
      ),
    ),
    'application/vnd.micrografx.flo' =>
    array (
      'e' =>
      array (
        0 => 'flo',
      ),
    ),
    'application/vnd.micrografx.igx' =>
    array (
      'e' =>
      array (
        0 => 'igx',
      ),
    ),
    'application/vnd.mif' =>
    array (
      'e' =>
      array (
        0 => 'mif',
      ),
    ),
    'application/vnd.mobius.daf' =>
    array (
      'e' =>
      array (
        0 => 'daf',
      ),
    ),
    'application/vnd.mobius.dis' =>
    array (
      'e' =>
      array (
        0 => 'dis',
      ),
    ),
    'application/vnd.mobius.mbk' =>
    array (
      'e' =>
      array (
        0 => 'mbk',
      ),
    ),
    'application/vnd.mobius.mqy' =>
    array (
      'e' =>
      array (
        0 => 'mqy',
      ),
    ),
    'application/vnd.mobius.msl' =>
    array (
      'e' =>
      array (
        0 => 'msl',
      ),
    ),
    'application/vnd.mobius.plc' =>
    array (
      'e' =>
      array (
        0 => 'plc',
      ),
    ),
    'application/vnd.mobius.txf' =>
    array (
      'e' =>
      array (
        0 => 'txf',
      ),
    ),
    'application/vnd.mophun.application' =>
    array (
      'e' =>
      array (
        0 => 'mpn',
      ),
    ),
    'application/vnd.mophun.certificate' =>
    array (
      'e' =>
      array (
        0 => 'mpc',
      ),
    ),
    'application/vnd.mozilla.xul+xml' =>
    array (
      'desc' =>
      array (
        0 => 'XUL interface document',
        1 => 'XUL: XML User interface markup Language',
      ),
      'e' =>
      array (
        0 => 'xul',
      ),
    ),
    'application/vnd.ms-access' =>
    array (
      'a' =>
      array (
        0 => 'application/x-msaccess',
        1 => 'application/msaccess',
        2 => 'application/vnd.msaccess',
        3 => 'application/mdb',
        4 => 'application/x-mdb',
        5 => 'zz-application/zz-winassoc-mdb',
      ),
      'desc' =>
      array (
        0 => 'JET database',
        1 => 'JET: Joint Engine Technology',
      ),
      'e' =>
      array (
        0 => 'mdb',
      ),
    ),
    'application/vnd.ms-artgalry' =>
    array (
      'e' =>
      array (
        0 => 'cil',
      ),
    ),
    'application/vnd.ms-asf' =>
    array (
      'a' =>
      array (
        0 => 'video/x-ms-wm',
        1 => 'video/x-ms-asf',
        2 => 'video/x-ms-asf-plugin',
      ),
      'desc' =>
      array (
        0 => 'ASF video',
        1 => 'ASF: Advanced Streaming Format',
      ),
      'e' =>
      array (
        0 => 'asf',
        1 => 'wm',
      ),
    ),
    'application/vnd.ms-cab-compressed' =>
    array (
      'a' =>
      array (
        0 => 'zz-application/zz-winassoc-cab',
      ),
      'desc' =>
      array (
        0 => 'Microsoft Cabinet archive',
      ),
      'e' =>
      array (
        0 => 'cab',
      ),
    ),
    'application/vnd.ms-excel' =>
    array (
      'a' =>
      array (
        0 => 'application/msexcel',
        1 => 'application/x-msexcel',
        2 => 'zz-application/zz-winassoc-xls',
      ),
      'desc' =>
      array (
        0 => 'Excel spreadsheet',
      ),
      'e' =>
      array (
        0 => 'xls',
        1 => 'xlm',
        2 => 'xla',
        3 => 'xlc',
        4 => 'xlt',
        5 => 'xlw',
        6 => 'xll',
        7 => 'xld',
      ),
    ),
    'application/vnd.ms-excel.addin.macroenabled.12' =>
    array (
      'desc' =>
      array (
        0 => 'Excel add-in',
      ),
      'e' =>
      array (
        0 => 'xlam',
      ),
    ),
    'application/vnd.ms-excel.sheet.binary.macroenabled.12' =>
    array (
      'desc' =>
      array (
        0 => 'Excel 2007 binary spreadsheet',
      ),
      'e' =>
      array (
        0 => 'xlsb',
      ),
    ),
    'application/vnd.ms-excel.sheet.macroenabled.12' =>
    array (
      'desc' =>
      array (
        0 => 'Excel spreadsheet',
      ),
      'e' =>
      array (
        0 => 'xlsm',
      ),
    ),
    'application/vnd.ms-excel.template.macroenabled.12' =>
    array (
      'desc' =>
      array (
        0 => 'Excel spreadsheet template',
      ),
      'e' =>
      array (
        0 => 'xltm',
      ),
    ),
    'application/vnd.ms-fontobject' =>
    array (
      'e' =>
      array (
        0 => 'eot',
      ),
    ),
    'application/vnd.ms-htmlhelp' =>
    array (
      'a' =>
      array (
        0 => 'application/x-chm',
      ),
      'desc' =>
      array (
        0 => 'CHM document',
        1 => 'CHM: Compiled Help Modules',
      ),
      'e' =>
      array (
        0 => 'chm',
      ),
    ),
    'application/vnd.ms-ims' =>
    array (
      'e' =>
      array (
        0 => 'ims',
      ),
    ),
    'application/vnd.ms-lrm' =>
    array (
      'e' =>
      array (
        0 => 'lrm',
      ),
    ),
    'application/vnd.ms-officetheme' =>
    array (
      'e' =>
      array (
        0 => 'thmx',
      ),
    ),
    'application/vnd.ms-pki.seccat' =>
    array (
      'e' =>
      array (
        0 => 'cat',
      ),
    ),
    'application/vnd.ms-pki.stl' =>
    array (
      'e' =>
      array (
        0 => 'stl',
      ),
    ),
    'application/vnd.ms-powerpoint' =>
    array (
      'a' =>
      array (
        0 => 'application/powerpoint',
        1 => 'application/mspowerpoint',
        2 => 'application/x-mspowerpoint',
      ),
      'desc' =>
      array (
        0 => 'PowerPoint presentation',
      ),
      'e' =>
      array (
        0 => 'ppt',
        1 => 'pps',
        2 => 'pot',
        3 => 'ppz',
      ),
    ),
    'application/vnd.ms-powerpoint.addin.macroenabled.12' =>
    array (
      'desc' =>
      array (
        0 => 'PowerPoint add-in',
      ),
      'e' =>
      array (
        0 => 'ppam',
      ),
    ),
    'application/vnd.ms-powerpoint.presentation.macroenabled.12' =>
    array (
      'desc' =>
      array (
        0 => 'PowerPoint presentation',
      ),
      'e' =>
      array (
        0 => 'pptm',
      ),
    ),
    'application/vnd.ms-powerpoint.slide.macroenabled.12' =>
    array (
      'desc' =>
      array (
        0 => 'PowerPoint slide',
      ),
      'e' =>
      array (
        0 => 'sldm',
      ),
    ),
    'application/vnd.ms-powerpoint.slideshow.macroenabled.12' =>
    array (
      'desc' =>
      array (
        0 => 'PowerPoint presentation',
      ),
      'e' =>
      array (
        0 => 'ppsm',
      ),
    ),
    'application/vnd.ms-powerpoint.template.macroenabled.12' =>
    array (
      'desc' =>
      array (
        0 => 'PowerPoint presentation template',
      ),
      'e' =>
      array (
        0 => 'potm',
      ),
    ),
    'application/vnd.ms-project' =>
    array (
      'e' =>
      array (
        0 => 'mpp',
        1 => 'mpt',
      ),
    ),
    'application/vnd.ms-publisher' =>
    array (
      'desc' =>
      array (
        0 => 'Microsoft Publisher document',
      ),
      'e' =>
      array (
        0 => 'pub',
      ),
    ),
    'application/vnd.ms-tnef' =>
    array (
      'a' =>
      array (
        0 => 'application/ms-tnef',
      ),
      'desc' =>
      array (
        0 => 'TNEF message',
        1 => 'TNEF: Transport Neutral Encapsulation Format',
      ),
      'e' =>
      array (
        0 => 'tnef',
        1 => 'tnf',
      ),
    ),
    'application/vnd.ms-visio.drawing.macroenabled.main+xml' =>
    array (
      'desc' =>
      array (
        0 => 'Office Open XML Visio drawing',
      ),
      'e' =>
      array (
        0 => 'vsdm',
      ),
    ),
    'application/vnd.ms-visio.drawing.main+xml' =>
    array (
      'desc' =>
      array (
        0 => 'Office Open XML Visio drawing',
      ),
      'e' =>
      array (
        0 => 'vsdx',
      ),
    ),
    'application/vnd.ms-visio.stencil.macroenabled.main+xml' =>
    array (
      'desc' =>
      array (
        0 => 'Office Open XML Visio stencil',
      ),
      'e' =>
      array (
        0 => 'vssm',
      ),
    ),
    'application/vnd.ms-visio.stencil.main+xml' =>
    array (
      'desc' =>
      array (
        0 => 'Office Open XML Visio stencil',
      ),
      'e' =>
      array (
        0 => 'vssx',
      ),
    ),
    'application/vnd.ms-visio.template.macroenabled.main+xml' =>
    array (
      'desc' =>
      array (
        0 => 'Office Open XML Visio template',
      ),
      'e' =>
      array (
        0 => 'vstm',
      ),
    ),
    'application/vnd.ms-visio.template.main+xml' =>
    array (
      'desc' =>
      array (
        0 => 'Office Open XML Visio template',
      ),
      'e' =>
      array (
        0 => 'vstx',
      ),
    ),
    'application/vnd.ms-word.document.macroenabled.12' =>
    array (
      'desc' =>
      array (
        0 => 'Word document',
      ),
      'e' =>
      array (
        0 => 'docm',
      ),
    ),
    'application/vnd.ms-word.template.macroenabled.12' =>
    array (
      'desc' =>
      array (
        0 => 'Word document template',
      ),
      'e' =>
      array (
        0 => 'dotm',
      ),
    ),
    'application/vnd.ms-works' =>
    array (
      'desc' =>
      array (
        0 => 'Microsoft Works document',
      ),
      'e' =>
      array (
        0 => 'wps',
        1 => 'wks',
        2 => 'wcm',
        3 => 'wdb',
        4 => 'xlr',
      ),
    ),
    'application/vnd.ms-wpl' =>
    array (
      'desc' =>
      array (
        0 => 'WPL playlist',
        1 => 'WPL: Windows Media Player Playlist',
      ),
      'e' =>
      array (
        0 => 'wpl',
      ),
    ),
    'application/vnd.mseq' =>
    array (
      'e' =>
      array (
        0 => 'mseq',
      ),
    ),
    'application/vnd.musician' =>
    array (
      'e' =>
      array (
        0 => 'mus',
      ),
    ),
    'application/vnd.muvee.style' =>
    array (
      'e' =>
      array (
        0 => 'msty',
      ),
    ),
    'application/vnd.mynfc' =>
    array (
      'e' =>
      array (
        0 => 'taglet',
      ),
    ),
    'application/vnd.neurolanguage.nlu' =>
    array (
      'e' =>
      array (
        0 => 'nlu',
      ),
    ),
    'application/vnd.nintendo.snes.rom' =>
    array (
      'a' =>
      array (
        0 => 'application/x-snes-rom',
      ),
      'desc' =>
      array (
        0 => 'Super NES ROM',
      ),
      'e' =>
      array (
        0 => 'sfc',
        1 => 'smc',
      ),
    ),
    'application/vnd.nitf' =>
    array (
      'e' =>
      array (
        0 => 'ntf',
        1 => 'nitf',
      ),
    ),
    'application/vnd.noblenet-directory' =>
    array (
      'e' =>
      array (
        0 => 'nnd',
      ),
    ),
    'application/vnd.noblenet-sealer' =>
    array (
      'e' =>
      array (
        0 => 'nns',
      ),
    ),
    'application/vnd.noblenet-web' =>
    array (
      'e' =>
      array (
        0 => 'nnw',
      ),
    ),
    'application/vnd.nokia.n-gage.data' =>
    array (
      'e' =>
      array (
        0 => 'ngdat',
      ),
    ),
    'application/vnd.nokia.n-gage.symbian.install' =>
    array (
      'e' =>
      array (
        0 => 'n-gage',
      ),
    ),
    'application/vnd.nokia.radio-preset' =>
    array (
      'e' =>
      array (
        0 => 'rpst',
      ),
    ),
    'application/vnd.nokia.radio-presets' =>
    array (
      'e' =>
      array (
        0 => 'rpss',
      ),
    ),
    'application/vnd.novadigm.edm' =>
    array (
      'e' =>
      array (
        0 => 'edm',
      ),
    ),
    'application/vnd.novadigm.edx' =>
    array (
      'e' =>
      array (
        0 => 'edx',
      ),
    ),
    'application/vnd.novadigm.ext' =>
    array (
      'e' =>
      array (
        0 => 'ext',
      ),
    ),
    'application/vnd.oasis.opendocument.chart' =>
    array (
      'desc' =>
      array (
        0 => 'ODC chart',
        1 => 'ODC: OpenDocument Chart',
      ),
      'e' =>
      array (
        0 => 'odc',
      ),
    ),
    'application/vnd.oasis.opendocument.chart-template' =>
    array (
      'desc' =>
      array (
        0 => 'ODC template',
        1 => 'ODC: OpenDocument Chart',
      ),
      'e' =>
      array (
        0 => 'otc',
      ),
    ),
    'application/vnd.oasis.opendocument.database' =>
    array (
      'a' =>
      array (
        0 => 'application/vnd.sun.xml.base',
      ),
      'desc' =>
      array (
        0 => 'ODB database',
        1 => 'ODB: OpenDocument Database',
      ),
      'e' =>
      array (
        0 => 'odb',
      ),
    ),
    'application/vnd.oasis.opendocument.formula' =>
    array (
      'desc' =>
      array (
        0 => 'ODF formula',
        1 => 'ODF: OpenDocument Formula',
      ),
      'e' =>
      array (
        0 => 'odf',
      ),
    ),
    'application/vnd.oasis.opendocument.formula-template' =>
    array (
      'desc' =>
      array (
        0 => 'ODF template',
        1 => 'ODF: OpenDocument Formula',
      ),
      'e' =>
      array (
        0 => 'odft',
        1 => 'otf',
      ),
    ),
    'application/vnd.oasis.opendocument.graphics' =>
    array (
      'desc' =>
      array (
        0 => 'ODG drawing',
        1 => 'ODG: OpenDocument Drawing',
      ),
      'e' =>
      array (
        0 => 'odg',
      ),
    ),
    'application/vnd.oasis.opendocument.graphics-flat-xml' =>
    array (
      'desc' =>
      array (
        0 => 'ODG drawing (Flat XML)',
        1 => 'FODG: OpenDocument Drawing (Flat XML)',
      ),
      'e' =>
      array (
        0 => 'fodg',
      ),
    ),
    'application/vnd.oasis.opendocument.graphics-template' =>
    array (
      'desc' =>
      array (
        0 => 'ODG template',
        1 => 'ODG: OpenDocument Drawing',
      ),
      'e' =>
      array (
        0 => 'otg',
      ),
    ),
    'application/vnd.oasis.opendocument.image' =>
    array (
      'desc' =>
      array (
        0 => 'ODI image',
        1 => 'ODI: OpenDocument Image',
      ),
      'e' =>
      array (
        0 => 'odi',
      ),
    ),
    'application/vnd.oasis.opendocument.image-template' =>
    array (
      'e' =>
      array (
        0 => 'oti',
      ),
    ),
    'application/vnd.oasis.opendocument.presentation' =>
    array (
      'desc' =>
      array (
        0 => 'ODP presentation',
        1 => 'ODP: OpenDocument Presentation',
      ),
      'e' =>
      array (
        0 => 'odp',
      ),
    ),
    'application/vnd.oasis.opendocument.presentation-flat-xml' =>
    array (
      'desc' =>
      array (
        0 => 'ODP presentation (Flat XML)',
        1 => 'FODP: OpenDocument Presentation (Flat XML)',
      ),
      'e' =>
      array (
        0 => 'fodp',
      ),
    ),
    'application/vnd.oasis.opendocument.presentation-template' =>
    array (
      'desc' =>
      array (
        0 => 'ODP template',
        1 => 'ODP: OpenDocument Presentation',
      ),
      'e' =>
      array (
        0 => 'otp',
      ),
    ),
    'application/vnd.oasis.opendocument.spreadsheet' =>
    array (
      'desc' =>
      array (
        0 => 'ODS spreadsheet',
        1 => 'ODS: OpenDocument Spreadsheet',
      ),
      'e' =>
      array (
        0 => 'ods',
      ),
    ),
    'application/vnd.oasis.opendocument.spreadsheet-flat-xml' =>
    array (
      'desc' =>
      array (
        0 => 'ODS spreadsheet (Flat XML)',
        1 => 'FODS: OpenDocument Spreadsheet (Flat XML)',
      ),
      'e' =>
      array (
        0 => 'fods',
      ),
    ),
    'application/vnd.oasis.opendocument.spreadsheet-template' =>
    array (
      'desc' =>
      array (
        0 => 'ODS template',
        1 => 'ODS: OpenDocument Spreadsheet',
      ),
      'e' =>
      array (
        0 => 'ots',
      ),
    ),
    'application/vnd.oasis.opendocument.text' =>
    array (
      'desc' =>
      array (
        0 => 'ODT document',
        1 => 'ODT: OpenDocument Text',
      ),
      'e' =>
      array (
        0 => 'odt',
      ),
    ),
    'application/vnd.oasis.opendocument.text-flat-xml' =>
    array (
      'desc' =>
      array (
        0 => 'ODT document (Flat XML)',
        1 => 'FODT: OpenDocument Text (Flat XML)',
      ),
      'e' =>
      array (
        0 => 'fodt',
      ),
    ),
    'application/vnd.oasis.opendocument.text-master' =>
    array (
      'desc' =>
      array (
        0 => 'ODM document',
        1 => 'ODM: OpenDocument Master',
      ),
      'e' =>
      array (
        0 => 'odm',
      ),
    ),
    'application/vnd.oasis.opendocument.text-template' =>
    array (
      'desc' =>
      array (
        0 => 'ODT template',
        1 => 'ODT: OpenDocument Text',
      ),
      'e' =>
      array (
        0 => 'ott',
      ),
    ),
    'application/vnd.oasis.opendocument.text-web' =>
    array (
      'desc' =>
      array (
        0 => 'OTH template',
        1 => 'OTH: OpenDocument HTML',
      ),
      'e' =>
      array (
        0 => 'oth',
      ),
    ),
    'application/vnd.olpc-sugar' =>
    array (
      'e' =>
      array (
        0 => 'xo',
      ),
    ),
    'application/vnd.oma.dd2+xml' =>
    array (
      'e' =>
      array (
        0 => 'dd2',
      ),
    ),
    'application/vnd.openofficeorg.extension' =>
    array (
      'desc' =>
      array (
        0 => 'OpenOffice.org extension',
      ),
      'e' =>
      array (
        0 => 'oxt',
      ),
    ),
    'application/vnd.openxmlformats-officedocument.presentationml.presentation' =>
    array (
      'desc' =>
      array (
        0 => 'PowerPoint 2007 presentation',
      ),
      'e' =>
      array (
        0 => 'pptx',
      ),
    ),
    'application/vnd.openxmlformats-officedocument.presentationml.slide' =>
    array (
      'desc' =>
      array (
        0 => 'PowerPoint 2007 slide',
      ),
      'e' =>
      array (
        0 => 'sldx',
      ),
    ),
    'application/vnd.openxmlformats-officedocument.presentationml.slideshow' =>
    array (
      'desc' =>
      array (
        0 => 'PowerPoint 2007 show',
      ),
      'e' =>
      array (
        0 => 'ppsx',
      ),
    ),
    'application/vnd.openxmlformats-officedocument.presentationml.template' =>
    array (
      'desc' =>
      array (
        0 => 'PowerPoint 2007 presentation template',
      ),
      'e' =>
      array (
        0 => 'potx',
      ),
    ),
    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' =>
    array (
      'desc' =>
      array (
        0 => 'Excel 2007 spreadsheet',
      ),
      'e' =>
      array (
        0 => 'xlsx',
      ),
    ),
    'application/vnd.openxmlformats-officedocument.spreadsheetml.template' =>
    array (
      'desc' =>
      array (
        0 => 'Excel 2007 spreadsheet template',
      ),
      'e' =>
      array (
        0 => 'xltx',
      ),
    ),
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document' =>
    array (
      'desc' =>
      array (
        0 => 'Word 2007 document',
      ),
      'e' =>
      array (
        0 => 'docx',
      ),
    ),
    'application/vnd.openxmlformats-officedocument.wordprocessingml.template' =>
    array (
      'desc' =>
      array (
        0 => 'Word 2007 document template',
      ),
      'e' =>
      array (
        0 => 'dotx',
      ),
    ),
    'application/vnd.osgeo.mapguide.package' =>
    array (
      'e' =>
      array (
        0 => 'mgp',
      ),
    ),
    'application/vnd.osgi.dp' =>
    array (
      'e' =>
      array (
        0 => 'dp',
      ),
    ),
    'application/vnd.osgi.subsystem' =>
    array (
      'e' =>
      array (
        0 => 'esa',
      ),
    ),
    'application/vnd.palm' =>
    array (
      'a' =>
      array (
        0 => 'application/x-palm-database',
      ),
      'desc' =>
      array (
        0 => 'Palm OS database',
      ),
      'e' =>
      array (
        0 => 'pdb',
        1 => 'pqa',
        2 => 'oprc',
        3 => 'prc',
      ),
    ),
    'application/vnd.pawaafile' =>
    array (
      'e' =>
      array (
        0 => 'paw',
      ),
    ),
    'application/vnd.pg.format' =>
    array (
      'e' =>
      array (
        0 => 'str',
      ),
    ),
    'application/vnd.pg.osasli' =>
    array (
      'e' =>
      array (
        0 => 'ei6',
      ),
    ),
    'application/vnd.picsel' =>
    array (
      'e' =>
      array (
        0 => 'efif',
      ),
    ),
    'application/vnd.pmi.widget' =>
    array (
      'e' =>
      array (
        0 => 'wg',
      ),
    ),
    'application/vnd.pocketlearn' =>
    array (
      'e' =>
      array (
        0 => 'plf',
      ),
    ),
    'application/vnd.powerbuilder6' =>
    array (
      'e' =>
      array (
        0 => 'pbd',
      ),
    ),
    'application/vnd.previewsystems.box' =>
    array (
      'e' =>
      array (
        0 => 'box',
      ),
    ),
    'application/vnd.proteus.magazine' =>
    array (
      'e' =>
      array (
        0 => 'mgz',
      ),
    ),
    'application/vnd.publishare-delta-tree' =>
    array (
      'e' =>
      array (
        0 => 'qps',
      ),
    ),
    'application/vnd.pvi.ptid1' =>
    array (
      'e' =>
      array (
        0 => 'ptid',
      ),
    ),
    'application/vnd.quark.quarkxpress' =>
    array (
      'e' =>
      array (
        0 => 'qxd',
        1 => 'qxt',
        2 => 'qwd',
        3 => 'qwt',
        4 => 'qxl',
        5 => 'qxb',
      ),
    ),
    'application/vnd.rar' =>
    array (
      'a' =>
      array (
        0 => 'application/x-rar',
        1 => 'application/x-rar-compressed',
      ),
      'desc' =>
      array (
        0 => 'RAR archive',
        1 => 'RAR: Roshal ARchive',
      ),
      'e' =>
      array (
        0 => 'rar',
      ),
    ),
    'application/vnd.realvnc.bed' =>
    array (
      'e' =>
      array (
        0 => 'bed',
      ),
    ),
    'application/vnd.recordare.musicxml' =>
    array (
      'e' =>
      array (
        0 => 'mxl',
      ),
    ),
    'application/vnd.recordare.musicxml+xml' =>
    array (
      'e' =>
      array (
        0 => 'musicxml',
      ),
    ),
    'application/vnd.rig.cryptonote' =>
    array (
      'e' =>
      array (
        0 => 'cryptonote',
      ),
    ),
    'application/vnd.rim.cod' =>
    array (
      'e' =>
      array (
        0 => 'cod',
      ),
    ),
    'application/vnd.rn-realmedia' =>
    array (
      'a' =>
      array (
        0 => 'application/vnd.rn-realmedia-vbr',
      ),
      'desc' =>
      array (
        0 => 'RealMedia document',
      ),
      'e' =>
      array (
        0 => 'rm',
        1 => 'rmj',
        2 => 'rmm',
        3 => 'rms',
        4 => 'rmx',
        5 => 'rmvb',
      ),
    ),
    'application/vnd.route66.link66+xml' =>
    array (
      'e' =>
      array (
        0 => 'link66',
      ),
    ),
    'application/vnd.sailingtracker.track' =>
    array (
      'e' =>
      array (
        0 => 'st',
      ),
    ),
    'application/vnd.seemail' =>
    array (
      'e' =>
      array (
        0 => 'see',
      ),
    ),
    'application/vnd.sema' =>
    array (
      'e' =>
      array (
        0 => 'sema',
      ),
    ),
    'application/vnd.semd' =>
    array (
      'e' =>
      array (
        0 => 'semd',
      ),
    ),
    'application/vnd.semf' =>
    array (
      'e' =>
      array (
        0 => 'semf',
      ),
    ),
    'application/vnd.shana.informed.formdata' =>
    array (
      'e' =>
      array (
        0 => 'ifm',
      ),
    ),
    'application/vnd.shana.informed.formtemplate' =>
    array (
      'e' =>
      array (
        0 => 'itp',
      ),
    ),
    'application/vnd.shana.informed.interchange' =>
    array (
      'e' =>
      array (
        0 => 'iif',
      ),
    ),
    'application/vnd.shana.informed.package' =>
    array (
      'e' =>
      array (
        0 => 'ipk',
      ),
    ),
    'application/vnd.simtech-mindmapper' =>
    array (
      'e' =>
      array (
        0 => 'twd',
        1 => 'twds',
      ),
    ),
    'application/vnd.smart.teacher' =>
    array (
      'e' =>
      array (
        0 => 'teacher',
      ),
    ),
    'application/vnd.snap' =>
    array (
      'desc' =>
      array (
        0 => 'Snap package',
      ),
      'e' =>
      array (
        0 => 'snap',
      ),
    ),
    'application/vnd.solent.sdkm+xml' =>
    array (
      'e' =>
      array (
        0 => 'sdkm',
        1 => 'sdkd',
      ),
    ),
    'application/vnd.spotfire.dxp' =>
    array (
      'e' =>
      array (
        0 => 'dxp',
      ),
    ),
    'application/vnd.spotfire.sfs' =>
    array (
      'e' =>
      array (
        0 => 'sfs',
      ),
    ),
    'application/vnd.sqlite3' =>
    array (
      'a' =>
      array (
        0 => 'application/x-sqlite3',
      ),
      'desc' =>
      array (
        0 => 'SQLite3 database',
      ),
      'e' =>
      array (
        0 => 'sqlite3',
      ),
    ),
    'application/vnd.squashfs' =>
    array (
      'desc' =>
      array (
        0 => 'Squashfs filesystem image',
      ),
      'e' =>
      array (
        0 => 'sqsh',
      ),
    ),
    'application/vnd.stardivision.calc' =>
    array (
      'desc' =>
      array (
        0 => 'StarCalc spreadsheet',
      ),
      'e' =>
      array (
        0 => 'sdc',
      ),
    ),
    'application/vnd.stardivision.chart' =>
    array (
      'desc' =>
      array (
        0 => 'StarChart chart',
      ),
      'e' =>
      array (
        0 => 'sds',
      ),
    ),
    'application/vnd.stardivision.draw' =>
    array (
      'desc' =>
      array (
        0 => 'StarDraw drawing',
      ),
      'e' =>
      array (
        0 => 'sda',
      ),
    ),
    'application/vnd.stardivision.impress' =>
    array (
      'desc' =>
      array (
        0 => 'StarImpress presentation',
      ),
      'e' =>
      array (
        0 => 'sdd',
        1 => 'sdp',
      ),
    ),
    'application/vnd.stardivision.mail' =>
    array (
      'desc' =>
      array (
        0 => 'StarMail email',
      ),
      'e' =>
      array (
        0 => 'smd',
      ),
    ),
    'application/vnd.stardivision.math' =>
    array (
      'desc' =>
      array (
        0 => 'StarMath formula',
      ),
      'e' =>
      array (
        0 => 'smf',
      ),
    ),
    'application/vnd.stardivision.writer' =>
    array (
      'a' =>
      array (
        0 => 'application/vnd.stardivision.writer-global',
      ),
      'desc' =>
      array (
        0 => 'StarWriter document',
      ),
      'e' =>
      array (
        0 => 'sdw',
        1 => 'vor',
        2 => 'sgl',
      ),
    ),
    'application/vnd.stepmania.package' =>
    array (
      'e' =>
      array (
        0 => 'smzip',
      ),
    ),
    'application/vnd.stepmania.stepchart' =>
    array (
      'e' =>
      array (
        0 => 'sm',
      ),
    ),
    'application/vnd.sun.xml.calc' =>
    array (
      'desc' =>
      array (
        0 => 'OpenOffice Calc spreadsheet',
      ),
      'e' =>
      array (
        0 => 'sxc',
      ),
    ),
    'application/vnd.sun.xml.calc.template' =>
    array (
      'desc' =>
      array (
        0 => 'OpenOffice Calc template',
      ),
      'e' =>
      array (
        0 => 'stc',
      ),
    ),
    'application/vnd.sun.xml.draw' =>
    array (
      'desc' =>
      array (
        0 => 'OpenOffice Draw drawing',
      ),
      'e' =>
      array (
        0 => 'sxd',
      ),
    ),
    'application/vnd.sun.xml.draw.template' =>
    array (
      'desc' =>
      array (
        0 => 'OpenOffice Draw template',
      ),
      'e' =>
      array (
        0 => 'std',
      ),
    ),
    'application/vnd.sun.xml.impress' =>
    array (
      'desc' =>
      array (
        0 => 'OpenOffice Impress presentation',
      ),
      'e' =>
      array (
        0 => 'sxi',
      ),
    ),
    'application/vnd.sun.xml.impress.template' =>
    array (
      'desc' =>
      array (
        0 => 'OpenOffice Impress template',
      ),
      'e' =>
      array (
        0 => 'sti',
      ),
    ),
    'application/vnd.sun.xml.math' =>
    array (
      'desc' =>
      array (
        0 => 'OpenOffice Math formula',
      ),
      'e' =>
      array (
        0 => 'sxm',
      ),
    ),
    'application/vnd.sun.xml.writer' =>
    array (
      'desc' =>
      array (
        0 => 'OpenOffice Writer document',
      ),
      'e' =>
      array (
        0 => 'sxw',
      ),
    ),
    'application/vnd.sun.xml.writer.global' =>
    array (
      'desc' =>
      array (
        0 => 'OpenOffice Writer global document',
      ),
      'e' =>
      array (
        0 => 'sxg',
      ),
    ),
    'application/vnd.sun.xml.writer.template' =>
    array (
      'desc' =>
      array (
        0 => 'OpenOffice Writer template',
      ),
      'e' =>
      array (
        0 => 'stw',
      ),
    ),
    'application/vnd.sus-calendar' =>
    array (
      'e' =>
      array (
        0 => 'sus',
        1 => 'susp',
      ),
    ),
    'application/vnd.svd' =>
    array (
      'e' =>
      array (
        0 => 'svd',
      ),
    ),
    'application/vnd.symbian.install' =>
    array (
      'desc' =>
      array (
        0 => 'SIS package',
        1 => 'SIS: Symbian Installation File',
      ),
      'e' =>
      array (
        0 => 'sis',
        1 => 'sisx',
      ),
    ),
    'application/vnd.syncml+xml' =>
    array (
      'e' =>
      array (
        0 => 'xsm',
      ),
    ),
    'application/vnd.syncml.dm+wbxml' =>
    array (
      'e' =>
      array (
        0 => 'bdm',
      ),
    ),
    'application/vnd.syncml.dm+xml' =>
    array (
      'e' =>
      array (
        0 => 'xdm',
      ),
    ),
    'application/vnd.tao.intent-module-archive' =>
    array (
      'e' =>
      array (
        0 => 'tao',
      ),
    ),
    'application/vnd.tcpdump.pcap' =>
    array (
      'a' =>
      array (
        0 => 'application/x-pcap',
        1 => 'application/pcap',
      ),
      'desc' =>
      array (
        0 => 'network packet capture',
      ),
      'e' =>
      array (
        0 => 'pcap',
        1 => 'cap',
        2 => 'dmp',
      ),
    ),
    'application/vnd.tmobile-livetv' =>
    array (
      'e' =>
      array (
        0 => 'tmo',
      ),
    ),
    'application/vnd.trid.tpt' =>
    array (
      'e' =>
      array (
        0 => 'tpt',
      ),
    ),
    'application/vnd.triscape.mxs' =>
    array (
      'e' =>
      array (
        0 => 'mxs',
      ),
    ),
    'application/vnd.trueapp' =>
    array (
      'e' =>
      array (
        0 => 'tra',
      ),
    ),
    'application/vnd.ufdl' =>
    array (
      'e' =>
      array (
        0 => 'ufd',
        1 => 'ufdl',
      ),
    ),
    'application/vnd.uiq.theme' =>
    array (
      'e' =>
      array (
        0 => 'utz',
      ),
    ),
    'application/vnd.umajin' =>
    array (
      'e' =>
      array (
        0 => 'umj',
      ),
    ),
    'application/vnd.unity' =>
    array (
      'e' =>
      array (
        0 => 'unityweb',
      ),
    ),
    'application/vnd.uoml+xml' =>
    array (
      'e' =>
      array (
        0 => 'uoml',
      ),
    ),
    'application/vnd.vcx' =>
    array (
      'e' =>
      array (
        0 => 'vcx',
      ),
    ),
    'application/vnd.visio' =>
    array (
      'desc' =>
      array (
        0 => 'Microsoft Visio document',
      ),
      'e' =>
      array (
        0 => 'vsd',
        1 => 'vst',
        2 => 'vss',
        3 => 'vsw',
      ),
    ),
    'application/vnd.visionary' =>
    array (
      'e' =>
      array (
        0 => 'vis',
      ),
    ),
    'application/vnd.vsf' =>
    array (
      'e' =>
      array (
        0 => 'vsf',
      ),
    ),
    'application/vnd.wap.wbxml' =>
    array (
      'e' =>
      array (
        0 => 'wbxml',
      ),
    ),
    'application/vnd.wap.wmlc' =>
    array (
      'e' =>
      array (
        0 => 'wmlc',
      ),
    ),
    'application/vnd.wap.wmlscriptc' =>
    array (
      'e' =>
      array (
        0 => 'wmlsc',
      ),
    ),
    'application/vnd.webturbo' =>
    array (
      'e' =>
      array (
        0 => 'wtb',
      ),
    ),
    'application/vnd.wolfram.player' =>
    array (
      'e' =>
      array (
        0 => 'nbp',
      ),
    ),
    'application/vnd.wordperfect' =>
    array (
      'a' =>
      array (
        0 => 'application/x-wordperfect',
        1 => 'application/wordperfect',
      ),
      'desc' =>
      array (
        0 => 'WordPerfect document',
      ),
      'e' =>
      array (
        0 => 'wpd',
        1 => 'wp',
        2 => 'wp4',
        3 => 'wp5',
        4 => 'wp6',
        5 => 'wpp',
      ),
    ),
    'application/vnd.wqd' =>
    array (
      'e' =>
      array (
        0 => 'wqd',
      ),
    ),
    'application/vnd.wt.stf' =>
    array (
      'e' =>
      array (
        0 => 'stf',
      ),
    ),
    'application/vnd.xara' =>
    array (
      'e' =>
      array (
        0 => 'xar',
      ),
    ),
    'application/vnd.xfdl' =>
    array (
      'e' =>
      array (
        0 => 'xfdl',
      ),
    ),
    'application/vnd.yamaha.hv-dic' =>
    array (
      'e' =>
      array (
        0 => 'hvd',
      ),
    ),
    'application/vnd.yamaha.hv-script' =>
    array (
      'e' =>
      array (
        0 => 'hvs',
      ),
    ),
    'application/vnd.yamaha.hv-voice' =>
    array (
      'e' =>
      array (
        0 => 'hvp',
      ),
    ),
    'application/vnd.yamaha.openscoreformat' =>
    array (
      'e' =>
      array (
        0 => 'osf',
      ),
    ),
    'application/vnd.yamaha.openscoreformat.osfpvg+xml' =>
    array (
      'e' =>
      array (
        0 => 'osfpvg',
      ),
    ),
    'application/vnd.yamaha.smaf-audio' =>
    array (
      'e' =>
      array (
        0 => 'saf',
      ),
    ),
    'application/vnd.yamaha.smaf-phrase' =>
    array (
      'e' =>
      array (
        0 => 'spf',
      ),
    ),
    'application/vnd.yellowriver-custom-menu' =>
    array (
      'e' =>
      array (
        0 => 'cmp',
      ),
    ),
    'application/vnd.youtube.yt' =>
    array (
      'desc' =>
      array (
        0 => 'YouTube media archive',
      ),
      'e' =>
      array (
        0 => 'yt',
      ),
    ),
    'application/vnd.zul' =>
    array (
      'e' =>
      array (
        0 => 'zir',
        1 => 'zirz',
      ),
    ),
    'application/vnd.zzazz.deck+xml' =>
    array (
      'e' =>
      array (
        0 => 'zaz',
      ),
    ),
    'application/voicexml+xml' =>
    array (
      'e' =>
      array (
        0 => 'vxml',
      ),
    ),
    'application/widget' =>
    array (
      'e' =>
      array (
        0 => 'wgt',
      ),
    ),
    'application/winhlp' =>
    array (
      'a' =>
      array (
        0 => 'zz-application/zz-winassoc-hlp',
      ),
      'desc' =>
      array (
        0 => 'WinHelp help file',
      ),
      'e' =>
      array (
        0 => 'hlp',
      ),
    ),
    'application/wsdl+xml' =>
    array (
      'e' =>
      array (
        0 => 'wsdl',
      ),
    ),
    'application/wspolicy+xml' =>
    array (
      'e' =>
      array (
        0 => 'wspolicy',
      ),
    ),
    'application/x-7z-compressed' =>
    array (
      'desc' =>
      array (
        0 => '7-zip archive',
      ),
      'e' =>
      array (
        0 => '7z',
      ),
    ),
    'application/x-abiword' =>
    array (
      'desc' =>
      array (
        0 => 'AbiWord document',
      ),
      'e' =>
      array (
        0 => 'abw',
        1 => 'abw.crashed',
        2 => 'abw.gz',
        3 => 'zabw',
      ),
    ),
    'application/x-ace' =>
    array (
      'desc' =>
      array (
        0 => 'ACE archive',
      ),
      'e' =>
      array (
        0 => 'ace',
      ),
    ),
    'application/x-ace-compressed' =>
    array (
      'e' =>
      array (
        0 => 'ace',
      ),
    ),
    'application/x-alz' =>
    array (
      'desc' =>
      array (
        0 => 'Alzip archive',
      ),
      'e' =>
      array (
        0 => 'alz',
      ),
    ),
    'application/x-amiga-disk-format' =>
    array (
      'desc' =>
      array (
        0 => 'Amiga disk image',
      ),
      'e' =>
      array (
        0 => 'adf',
      ),
    ),
    'application/x-amipro' =>
    array (
      'desc' =>
      array (
        0 => 'Lotus AmiPro document',
      ),
      'e' =>
      array (
        0 => 'sam',
      ),
    ),
    'application/x-aportisdoc' =>
    array (
      'desc' =>
      array (
        0 => 'AportisDoc document',
      ),
      'e' =>
      array (
        0 => 'pdb',
        1 => 'pdc',
      ),
    ),
    'application/x-apple-diskimage' =>
    array (
      'desc' =>
      array (
        0 => 'Apple disk image',
      ),
      'e' =>
      array (
        0 => 'dmg',
      ),
    ),
    'application/x-apple-systemprofiler+xml' =>
    array (
      'desc' =>
      array (
        0 => 'Apple System Profiler',
      ),
      'e' =>
      array (
        0 => 'spx',
      ),
    ),
    'application/x-appleworks-document' =>
    array (
      'desc' =>
      array (
        0 => 'AppleWorks document',
      ),
      'e' =>
      array (
        0 => 'cwk',
      ),
    ),
    'application/x-applix-spreadsheet' =>
    array (
      'desc' =>
      array (
        0 => 'Applix Spreadsheets spreadsheet',
      ),
      'e' =>
      array (
        0 => 'as',
      ),
    ),
    'application/x-applix-word' =>
    array (
      'desc' =>
      array (
        0 => 'Applix Words document',
      ),
      'e' =>
      array (
        0 => 'aw',
      ),
    ),
    'application/x-archive' =>
    array (
      'desc' =>
      array (
        0 => 'AR archive',
      ),
      'e' =>
      array (
        0 => 'a',
        1 => 'ar',
      ),
    ),
    'application/x-arj' =>
    array (
      'desc' =>
      array (
        0 => 'ARJ archive',
        1 => 'ARJ: Archived by Robert Jung',
      ),
      'e' =>
      array (
        0 => 'arj',
      ),
    ),
    'application/x-asp' =>
    array (
      'desc' =>
      array (
        0 => 'ASP page',
        1 => 'ASP: Active Server Page',
      ),
      'e' =>
      array (
        0 => 'asp',
      ),
    ),
    'application/x-atari-2600-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Atari 2600 ROM',
      ),
      'e' =>
      array (
        0 => 'a26',
      ),
    ),
    'application/x-atari-7800-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Atari 7800 ROM',
      ),
      'e' =>
      array (
        0 => 'a78',
      ),
    ),
    'application/x-atari-lynx-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Atari Lynx ROM',
      ),
      'e' =>
      array (
        0 => 'lnx',
      ),
    ),
    'application/x-authorware-bin' =>
    array (
      'e' =>
      array (
        0 => 'aab',
        1 => 'x32',
        2 => 'u32',
        3 => 'vox',
      ),
    ),
    'application/x-authorware-map' =>
    array (
      'e' =>
      array (
        0 => 'aam',
      ),
    ),
    'application/x-authorware-seg' =>
    array (
      'e' =>
      array (
        0 => 'aas',
      ),
    ),
    'application/x-awk' =>
    array (
      'desc' =>
      array (
        0 => 'AWK script',
      ),
      'e' =>
      array (
        0 => 'awk',
      ),
    ),
    'application/x-bcpio' =>
    array (
      'desc' =>
      array (
        0 => 'BCPIO document',
        1 => 'BCPIO: Binary CPIO',
      ),
      'e' =>
      array (
        0 => 'bcpio',
      ),
    ),
    'application/x-bittorrent' =>
    array (
      'desc' =>
      array (
        0 => 'BitTorrent seed file',
      ),
      'e' =>
      array (
        0 => 'torrent',
      ),
    ),
    'application/x-blender' =>
    array (
      'desc' =>
      array (
        0 => 'Blender scene',
      ),
      'e' =>
      array (
        0 => 'blender',
        1 => 'blend',
      ),
    ),
    'application/x-blorb' =>
    array (
      'e' =>
      array (
        0 => 'blb',
        1 => 'blorb',
      ),
    ),
    'application/x-bps-patch' =>
    array (
      'desc' =>
      array (
        0 => 'BPS patch',
        1 => 'BPS: Binary Patching System',
      ),
      'e' =>
      array (
        0 => 'bps',
      ),
    ),
    'application/x-bsdiff' =>
    array (
      'desc' =>
      array (
        0 => 'binary differences between files',
      ),
      'e' =>
      array (
        0 => 'bsdiff',
      ),
    ),
    'application/x-bzdvi' =>
    array (
      'desc' =>
      array (
        0 => 'TeX DVI document (bzip-compressed)',
      ),
      'e' =>
      array (
        0 => 'dvi.bz2',
      ),
    ),
    'application/x-bzip' =>
    array (
      'a' =>
      array (
        0 => 'application/x-bzip2',
        1 => 'application/bzip2',
      ),
      'desc' =>
      array (
        0 => 'Bzip archive',
      ),
      'e' =>
      array (
        0 => 'bz',
        1 => 'bz2',
        2 => 'boz',
      ),
    ),
    'application/x-bzip-compressed-tar' =>
    array (
      'desc' =>
      array (
        0 => 'Tar archive (bzip-compressed)',
      ),
      'e' =>
      array (
        0 => 'tar.bz2',
        1 => 'tar.bz',
        2 => 'tbz2',
        3 => 'tbz',
        4 => 'tb2',
      ),
    ),
    'application/x-bzpdf' =>
    array (
      'desc' =>
      array (
        0 => 'PDF document (bzip-compressed)',
      ),
      'e' =>
      array (
        0 => 'pdf.bz2',
      ),
    ),
    'application/x-bzpostscript' =>
    array (
      'desc' =>
      array (
        0 => 'PostScript document (bzip-compressed)',
      ),
      'e' =>
      array (
        0 => 'ps.bz2',
      ),
    ),
    'application/x-cb7' =>
    array (
      'desc' =>
      array (
        0 => 'comic book archive',
      ),
      'e' =>
      array (
        0 => 'cb7',
      ),
    ),
    'application/x-cbt' =>
    array (
      'desc' =>
      array (
        0 => 'comic book archive',
      ),
      'e' =>
      array (
        0 => 'cbt',
      ),
    ),
    'application/x-ccmx' =>
    array (
      'desc' =>
      array (
        0 => 'CCMX color correction file',
      ),
      'e' =>
      array (
        0 => 'ccmx',
      ),
    ),
    'application/x-cd-image' =>
    array (
      'a' =>
      array (
        0 => 'application/x-iso9660-image',
      ),
      'desc' =>
      array (
        0 => 'raw CD image',
      ),
      'e' =>
      array (
        0 => 'iso',
        1 => 'iso9660',
      ),
    ),
    'application/x-cdlink' =>
    array (
      'e' =>
      array (
        0 => 'vcd',
      ),
    ),
    'application/x-cdrdao-toc' =>
    array (
      'desc' =>
      array (
        0 => 'CD Table Of Contents',
      ),
      'e' =>
      array (
        0 => 'toc',
      ),
    ),
    'application/x-cfs-compressed' =>
    array (
      'e' =>
      array (
        0 => 'cfs',
      ),
    ),
    'application/x-chat' =>
    array (
      'e' =>
      array (
        0 => 'chat',
      ),
    ),
    'application/x-cisco-vpn-settings' =>
    array (
      'desc' =>
      array (
        0 => 'Cisco VPN settings',
      ),
      'e' =>
      array (
        0 => 'pcf',
      ),
    ),
    'application/x-compress' =>
    array (
      'desc' =>
      array (
        0 => 'UNIX-compressed file',
      ),
      'e' =>
      array (
        0 => 'z',
      ),
    ),
    'application/x-compressed-tar' =>
    array (
      'desc' =>
      array (
        0 => 'Tar archive (gzip-compressed)',
      ),
      'e' =>
      array (
        0 => 'tar.gz',
        1 => 'tgz',
      ),
    ),
    'application/x-conference' =>
    array (
      'e' =>
      array (
        0 => 'nsc',
      ),
    ),
    'application/x-cpio' =>
    array (
      'desc' =>
      array (
        0 => 'CPIO archive',
      ),
      'e' =>
      array (
        0 => 'cpio',
      ),
    ),
    'application/x-cpio-compressed' =>
    array (
      'desc' =>
      array (
        0 => 'CPIO archive (gzip-compressed)',
      ),
      'e' =>
      array (
        0 => 'cpio.gz',
      ),
    ),
    'application/x-csh' =>
    array (
      'desc' =>
      array (
        0 => 'C shell script',
      ),
      'e' =>
      array (
        0 => 'csh',
      ),
    ),
    'application/x-cue' =>
    array (
      'desc' =>
      array (
        0 => 'CD image cuesheet',
      ),
      'e' =>
      array (
        0 => 'cue',
      ),
    ),
    'application/x-dar' =>
    array (
      'desc' =>
      array (
        0 => 'DAR archive',
      ),
      'e' =>
      array (
        0 => 'dar',
      ),
    ),
    'application/x-dbf' =>
    array (
      'a' =>
      array (
        0 => 'application/x-dbase',
        1 => 'application/dbf',
        2 => 'application/dbase',
      ),
      'desc' =>
      array (
        0 => 'Xbase document',
      ),
      'e' =>
      array (
        0 => 'dbf',
      ),
    ),
    'application/x-dc-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Dreamcast disc image',
      ),
      'e' =>
      array (
        0 => 'dc',
      ),
    ),
    'application/x-designer' =>
    array (
      'desc' =>
      array (
        0 => 'Qt Designer interface document',
      ),
      'e' =>
      array (
        0 => 'ui',
      ),
    ),
    'application/x-desktop' =>
    array (
      'a' =>
      array (
        0 => 'application/x-gnome-app-info',
      ),
      'desc' =>
      array (
        0 => 'desktop configuration file',
      ),
      'e' =>
      array (
        0 => 'desktop',
        1 => 'kdelnk',
      ),
    ),
    'application/x-dgc-compressed' =>
    array (
      'e' =>
      array (
        0 => 'dgc',
      ),
    ),
    'application/x-dia-diagram' =>
    array (
      'desc' =>
      array (
        0 => 'Dia diagram',
      ),
      'e' =>
      array (
        0 => 'dia',
      ),
    ),
    'application/x-dia-shape' =>
    array (
      'desc' =>
      array (
        0 => 'Dia shape',
      ),
      'e' =>
      array (
        0 => 'shape',
      ),
    ),
    'application/x-director' =>
    array (
      'e' =>
      array (
        0 => 'dir',
        1 => 'dcr',
        2 => 'dxr',
        3 => 'cst',
        4 => 'cct',
        5 => 'cxt',
        6 => 'w3d',
        7 => 'fgd',
        8 => 'swa',
      ),
    ),
    'application/x-docbook+xml' =>
    array (
      'a' =>
      array (
        0 => 'application/docbook+xml',
        1 => 'application/vnd.oasis.docbook+xml',
      ),
      'desc' =>
      array (
        0 => 'DocBook document',
      ),
      'e' =>
      array (
        0 => 'dbk',
        1 => 'docbook',
      ),
    ),
    'application/x-doom' =>
    array (
      'e' =>
      array (
        0 => 'wad',
      ),
    ),
    'application/x-doom-wad' =>
    array (
      'desc' =>
      array (
        0 => 'Doom WAD file',
        1 => 'WAD: Where\'s All the Data',
      ),
      'e' =>
      array (
        0 => 'wad',
      ),
    ),
    'application/x-dtbncx+xml' =>
    array (
      'e' =>
      array (
        0 => 'ncx',
      ),
    ),
    'application/x-dtbook+xml' =>
    array (
      'e' =>
      array (
        0 => 'dtb',
      ),
    ),
    'application/x-dtbresource+xml' =>
    array (
      'e' =>
      array (
        0 => 'res',
      ),
    ),
    'application/x-dvi' =>
    array (
      'desc' =>
      array (
        0 => 'TeX DVI document',
        1 => 'DVI: Device independent file format',
      ),
      'e' =>
      array (
        0 => 'dvi',
      ),
    ),
    'application/x-e-theme' =>
    array (
      'desc' =>
      array (
        0 => 'Enlightenment theme',
      ),
      'e' =>
      array (
        0 => 'etheme',
      ),
    ),
    'application/x-egon' =>
    array (
      'desc' =>
      array (
        0 => 'Egon Animator animation',
      ),
      'e' =>
      array (
        0 => 'egon',
      ),
    ),
    'application/x-envoy' =>
    array (
      'e' =>
      array (
        0 => 'evy',
      ),
    ),
    'application/x-eva' =>
    array (
      'e' =>
      array (
        0 => 'eva',
      ),
    ),
    'application/x-fds-disk' =>
    array (
      'desc' =>
      array (
        0 => 'Nintendo FDS disk image',
        1 => 'FDS: Famicom Disk System',
      ),
      'e' =>
      array (
        0 => 'fds',
      ),
    ),
    'application/x-fictionbook+xml' =>
    array (
      'a' =>
      array (
        0 => 'application/x-fictionbook',
      ),
      'desc' =>
      array (
        0 => 'FictionBook document',
      ),
      'e' =>
      array (
        0 => 'fb2',
      ),
    ),
    'application/x-fluid' =>
    array (
      'desc' =>
      array (
        0 => 'FLTK Fluid file',
        1 => 'FLTK: Fast Light Toolkit',
      ),
      'e' =>
      array (
        0 => 'fl',
      ),
    ),
    'application/x-font-afm' =>
    array (
      'desc' =>
      array (
        0 => 'Adobe font metrics',
      ),
      'e' =>
      array (
        0 => 'afm',
      ),
    ),
    'application/x-font-bdf' =>
    array (
      'desc' =>
      array (
        0 => 'BDF font',
      ),
      'e' =>
      array (
        0 => 'bdf',
      ),
    ),
    'application/x-font-ghostscript' =>
    array (
      'e' =>
      array (
        0 => 'gsf',
      ),
    ),
    'application/x-font-linux-psf' =>
    array (
      'desc' =>
      array (
        0 => 'Linux PSF console font',
      ),
      'e' =>
      array (
        0 => 'psf',
      ),
    ),
    'application/x-font-pcf' =>
    array (
      'desc' =>
      array (
        0 => 'PCF font',
      ),
      'e' =>
      array (
        0 => 'pcf',
        1 => 'pcf.z',
        2 => 'pcf.gz',
      ),
    ),
    'application/x-font-snf' =>
    array (
      'e' =>
      array (
        0 => 'snf',
      ),
    ),
    'application/x-font-speedo' =>
    array (
      'desc' =>
      array (
        0 => 'Speedo font',
      ),
      'e' =>
      array (
        0 => 'spd',
      ),
    ),
    'application/x-font-ttx' =>
    array (
      'desc' =>
      array (
        0 => 'TrueType XML font',
      ),
      'e' =>
      array (
        0 => 'ttx',
      ),
    ),
    'application/x-font-type1' =>
    array (
      'desc' =>
      array (
        0 => 'PostScript type-1 font',
      ),
      'e' =>
      array (
        0 => 'pfa',
        1 => 'pfb',
        2 => 'pfm',
        3 => 'afm',
        4 => 'gsf',
      ),
    ),
    'application/x-freearc' =>
    array (
      'e' =>
      array (
        0 => 'arc',
      ),
    ),
    'application/x-futuresplash' =>
    array (
      'e' =>
      array (
        0 => 'spl',
      ),
    ),
    'application/x-gameboy-color-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Game Boy Color ROM',
      ),
      'e' =>
      array (
        0 => 'gbc',
        1 => 'cgb',
      ),
    ),
    'application/x-gameboy-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Game Boy ROM',
      ),
      'e' =>
      array (
        0 => 'gb',
        1 => 'sgb',
      ),
    ),
    'application/x-gamecube-rom' =>
    array (
      'a' =>
      array (
        0 => 'application/x-gamecube-iso-image',
      ),
      'desc' =>
      array (
        0 => 'GameCube disc image',
      ),
      'e' =>
      array (
        0 => 'iso',
      ),
    ),
    'application/x-gamegear-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Game Gear ROM',
      ),
      'e' =>
      array (
        0 => 'gg',
      ),
    ),
    'application/x-gba-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Game Boy Advance ROM',
      ),
      'e' =>
      array (
        0 => 'gba',
        1 => 'agb',
      ),
    ),
    'application/x-gca-compressed' =>
    array (
      'e' =>
      array (
        0 => 'gca',
      ),
    ),
    'application/x-gedcom' =>
    array (
      'a' =>
      array (
        0 => 'text/gedcom',
      ),
      'desc' =>
      array (
        0 => 'GEDCOM family history',
        1 => 'GEDCOM: GEnealogical Data COMmunication',
      ),
      'e' =>
      array (
        0 => 'ged',
        1 => 'gedcom',
      ),
    ),
    'application/x-genesis-32x-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Genesis 32X ROM',
      ),
      'e' =>
      array (
        0 => '32x',
        1 => 'mdx',
      ),
    ),
    'application/x-genesis-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Genesis ROM',
      ),
      'e' =>
      array (
        0 => 'gen',
        1 => 'smd',
        2 => 'sgd',
      ),
    ),
    'application/x-gettext-translation' =>
    array (
      'desc' =>
      array (
        0 => 'translated messages (machine-readable)',
      ),
      'e' =>
      array (
        0 => 'gmo',
        1 => 'mo',
      ),
    ),
    'application/x-glade' =>
    array (
      'desc' =>
      array (
        0 => 'Glade project',
      ),
      'e' =>
      array (
        0 => 'glade',
      ),
    ),
    'application/x-glulx' =>
    array (
      'e' =>
      array (
        0 => 'ulx',
      ),
    ),
    'application/x-gnucash' =>
    array (
      'desc' =>
      array (
        0 => 'GnuCash financial data',
      ),
      'e' =>
      array (
        0 => 'gnucash',
        1 => 'gnc',
        2 => 'xac',
      ),
    ),
    'application/x-gnumeric' =>
    array (
      'desc' =>
      array (
        0 => 'Gnumeric spreadsheet',
      ),
      'e' =>
      array (
        0 => 'gnumeric',
      ),
    ),
    'application/x-gnuplot' =>
    array (
      'desc' =>
      array (
        0 => 'Gnuplot document',
      ),
      'e' =>
      array (
        0 => 'gp',
        1 => 'gplt',
        2 => 'gnuplot',
      ),
    ),
    'application/x-go-sgf' =>
    array (
      'desc' =>
      array (
        0 => 'SGF record',
        1 => 'SGF: Smart Game Format',
      ),
      'e' =>
      array (
        0 => 'sgf',
      ),
    ),
    'application/x-gramps-xml' =>
    array (
      'e' =>
      array (
        0 => 'gramps',
      ),
    ),
    'application/x-graphite' =>
    array (
      'desc' =>
      array (
        0 => 'Graphite scientific graph',
      ),
      'e' =>
      array (
        0 => 'gra',
      ),
    ),
    'application/x-gtk-builder' =>
    array (
      'desc' =>
      array (
        0 => 'GTK+ Builder interface document',
      ),
      'e' =>
      array (
        0 => 'ui',
      ),
    ),
    'application/x-gz-font-linux-psf' =>
    array (
      'desc' =>
      array (
        0 => 'Linux PSF console font (gzip-compressed)',
      ),
      'e' =>
      array (
        0 => 'psf.gz',
      ),
    ),
    'application/x-gzdvi' =>
    array (
      'desc' =>
      array (
        0 => 'TeX DVI document (gzip-compressed)',
      ),
      'e' =>
      array (
        0 => 'dvi.gz',
      ),
    ),
    'application/x-gzpdf' =>
    array (
      'desc' =>
      array (
        0 => 'PDF document (gzip-compressed)',
      ),
      'e' =>
      array (
        0 => 'pdf.gz',
      ),
    ),
    'application/x-gzpostscript' =>
    array (
      'desc' =>
      array (
        0 => 'PostScript document (gzip-compressed)',
      ),
      'e' =>
      array (
        0 => 'ps.gz',
      ),
    ),
    'application/x-hdf' =>
    array (
      'desc' =>
      array (
        0 => 'HDF document',
        1 => 'HDF: Hierarchical Data Format',
      ),
      'e' =>
      array (
        0 => 'hdf',
        1 => 'hdf4',
        2 => 'h4',
        3 => 'hdf5',
        4 => 'h5',
      ),
    ),
    'application/x-hfe-floppy-image' =>
    array (
      'a' =>
      array (
        0 => 'application/x-hfe-file',
      ),
      'desc' =>
      array (
        0 => 'HFE floppy disk image',
        1 => 'HFE: HxC Floppy Emulator',
      ),
      'e' =>
      array (
        0 => 'hfe',
      ),
    ),
    'application/x-hwp' =>
    array (
      'a' =>
      array (
        0 => 'application/vnd.haansoft-hwp',
      ),
      'desc' =>
      array (
        0 => 'Haansoft Hangul document',
      ),
      'e' =>
      array (
        0 => 'hwp',
      ),
    ),
    'application/x-hwt' =>
    array (
      'a' =>
      array (
        0 => 'application/vnd.haansoft-hwt',
      ),
      'desc' =>
      array (
        0 => 'Haansoft Hangul document template',
      ),
      'e' =>
      array (
        0 => 'hwt',
      ),
    ),
    'application/x-ica' =>
    array (
      'desc' =>
      array (
        0 => 'Citrix ICA settings file',
        1 => 'ICA: Independent Computing Architecture',
      ),
      'e' =>
      array (
        0 => 'ica',
      ),
    ),
    'application/x-install-instructions' =>
    array (
      'e' =>
      array (
        0 => 'install',
      ),
    ),
    'application/x-ips-patch' =>
    array (
      'desc' =>
      array (
        0 => 'IPS patch',
        1 => 'IPS: International Patching System',
      ),
      'e' =>
      array (
        0 => 'ips',
      ),
    ),
    'application/x-ipynb+json' =>
    array (
      'desc' =>
      array (
        0 => 'Jupyter notebook document',
      ),
      'e' =>
      array (
        0 => 'ipynb',
      ),
    ),
    'application/x-iso9660-appimage' =>
    array (
      'desc' =>
      array (
        0 => 'AppImage application bundle',
      ),
      'e' =>
      array (
        0 => 'appimage',
      ),
    ),
    'application/x-it87' =>
    array (
      'desc' =>
      array (
        0 => 'IT 8.7 color calibration file',
      ),
      'e' =>
      array (
        0 => 'it87',
      ),
    ),
    'application/x-iwork-keynote-sffkey' =>
    array (
      'a' =>
      array (
        0 => 'application/vnd.apple.keynote',
      ),
      'desc' =>
      array (
        0 => 'Apple Keynote 5 presentation',
      ),
      'e' =>
      array (
        0 => 'key',
      ),
    ),
    'application/x-java' =>
    array (
      'a' =>
      array (
        0 => 'application/java',
        1 => 'application/java-byte-code',
        2 => 'application/java-vm',
        3 => 'application/x-java-class',
        4 => 'application/x-java-vm',
      ),
      'desc' =>
      array (
        0 => 'Java class',
      ),
      'e' =>
      array (
        0 => 'class',
      ),
    ),
    'application/x-java-archive' =>
    array (
      'a' =>
      array (
        0 => 'application/x-jar',
        1 => 'application/java-archive',
      ),
      'desc' =>
      array (
        0 => 'Java archive',
      ),
      'e' =>
      array (
        0 => 'jar',
      ),
    ),
    'application/x-java-jce-keystore' =>
    array (
      'desc' =>
      array (
        0 => 'Java JCE keystore',
        1 => 'JCE: Java Cryptography Extension',
      ),
      'e' =>
      array (
        0 => 'jceks',
      ),
    ),
    'application/x-java-jnlp-file' =>
    array (
      'desc' =>
      array (
        0 => 'JNLP file',
        1 => 'JNLP: Java Network Launching Protocol',
      ),
      'e' =>
      array (
        0 => 'jnlp',
      ),
    ),
    'application/x-java-keystore' =>
    array (
      'desc' =>
      array (
        0 => 'Java keystore',
      ),
      'e' =>
      array (
        0 => 'jks',
        1 => 'ks',
      ),
    ),
    'application/x-java-pack200' =>
    array (
      'desc' =>
      array (
        0 => 'Pack200 Java archive',
      ),
      'e' =>
      array (
        0 => 'pack',
      ),
    ),
    'application/x-jbuilder-project' =>
    array (
      'desc' =>
      array (
        0 => 'JBuilder project',
      ),
      'e' =>
      array (
        0 => 'jpr',
        1 => 'jpx',
      ),
    ),
    'application/x-karbon' =>
    array (
      'desc' =>
      array (
        0 => 'Karbon14 drawing',
      ),
      'e' =>
      array (
        0 => 'karbon',
      ),
    ),
    'application/x-kchart' =>
    array (
      'desc' =>
      array (
        0 => 'KChart chart',
      ),
      'e' =>
      array (
        0 => 'chrt',
      ),
    ),
    'application/x-kexi-connectiondata' =>
    array (
      'desc' =>
      array (
        0 => 'Kexi settings',
      ),
      'e' =>
      array (
        0 => 'kexic',
      ),
    ),
    'application/x-kexiproject-shortcut' =>
    array (
      'desc' =>
      array (
        0 => 'Kexi shortcut',
      ),
      'e' =>
      array (
        0 => 'kexis',
      ),
    ),
    'application/x-kexiproject-sqlite2' =>
    array (
      'desc' =>
      array (
        0 => 'Kexi database file',
      ),
      'e' =>
      array (
        0 => 'kexi',
      ),
    ),
    'application/x-kexiproject-sqlite3' =>
    array (
      'a' =>
      array (
        0 => 'application/x-vnd.kde.kexi',
        1 => 'application/x-kexiproject-sqlite',
      ),
      'desc' =>
      array (
        0 => 'Kexi database file',
      ),
      'e' =>
      array (
        0 => 'kexi',
      ),
    ),
    'application/x-kformula' =>
    array (
      'desc' =>
      array (
        0 => 'KFormula formula',
      ),
      'e' =>
      array (
        0 => 'kfo',
      ),
    ),
    'application/x-killustrator' =>
    array (
      'desc' =>
      array (
        0 => 'KIllustrator drawing',
      ),
      'e' =>
      array (
        0 => 'kil',
      ),
    ),
    'application/x-kivio' =>
    array (
      'desc' =>
      array (
        0 => 'Kivio flowchart',
      ),
      'e' =>
      array (
        0 => 'flw',
      ),
    ),
    'application/x-kontour' =>
    array (
      'desc' =>
      array (
        0 => 'Kontour drawing',
      ),
      'e' =>
      array (
        0 => 'kon',
      ),
    ),
    'application/x-kpovmodeler' =>
    array (
      'desc' =>
      array (
        0 => 'KPovModeler scene',
      ),
      'e' =>
      array (
        0 => 'kpm',
      ),
    ),
    'application/x-kpresenter' =>
    array (
      'desc' =>
      array (
        0 => 'KPresenter presentation',
      ),
      'e' =>
      array (
        0 => 'kpr',
        1 => 'kpt',
      ),
    ),
    'application/x-krita' =>
    array (
      'desc' =>
      array (
        0 => 'Krita document',
      ),
      'e' =>
      array (
        0 => 'kra',
      ),
    ),
    'application/x-kspread' =>
    array (
      'desc' =>
      array (
        0 => 'KSpread spreadsheet',
      ),
      'e' =>
      array (
        0 => 'ksp',
      ),
    ),
    'application/x-kugar' =>
    array (
      'desc' =>
      array (
        0 => 'Kugar document',
      ),
      'e' =>
      array (
        0 => 'kud',
      ),
    ),
    'application/x-kword' =>
    array (
      'desc' =>
      array (
        0 => 'KWord document',
      ),
      'e' =>
      array (
        0 => 'kwd',
        1 => 'kwt',
      ),
    ),
    'application/x-latex' =>
    array (
      'e' =>
      array (
        0 => 'latex',
      ),
    ),
    'application/x-lha' =>
    array (
      'a' =>
      array (
        0 => 'application/x-lzh-compressed',
      ),
      'desc' =>
      array (
        0 => 'LHA archive',
      ),
      'e' =>
      array (
        0 => 'lha',
        1 => 'lzh',
      ),
    ),
    'application/x-lhz' =>
    array (
      'desc' =>
      array (
        0 => 'LHZ archive',
      ),
      'e' =>
      array (
        0 => 'lhz',
      ),
    ),
    'application/x-lrzip' =>
    array (
      'desc' =>
      array (
        0 => 'Lrzip archive',
      ),
      'e' =>
      array (
        0 => 'lrz',
      ),
    ),
    'application/x-lrzip-compressed-tar' =>
    array (
      'desc' =>
      array (
        0 => 'Tar archive (lrzip-compressed)',
      ),
      'e' =>
      array (
        0 => 'tar.lrz',
        1 => 'tlrz',
      ),
    ),
    'application/x-lyx' =>
    array (
      'a' =>
      array (
        0 => 'text/x-lyx',
      ),
      'desc' =>
      array (
        0 => 'LyX document',
      ),
      'e' =>
      array (
        0 => 'lyx',
      ),
    ),
    'application/x-lz4' =>
    array (
      'desc' =>
      array (
        0 => 'LZ4 archive',
      ),
      'e' =>
      array (
        0 => 'lz4',
      ),
    ),
    'application/x-lz4-compressed-tar' =>
    array (
      'desc' =>
      array (
        0 => 'Tar archive (LZ4-compressed)',
      ),
      'e' =>
      array (
        0 => 'tar.lz4',
      ),
    ),
    'application/x-lzip' =>
    array (
      'desc' =>
      array (
        0 => 'Lzip archive',
      ),
      'e' =>
      array (
        0 => 'lz',
      ),
    ),
    'application/x-lzip-compressed-tar' =>
    array (
      'desc' =>
      array (
        0 => 'Tar archive (lzip-compressed)',
      ),
      'e' =>
      array (
        0 => 'tar.lz',
      ),
    ),
    'application/x-lzma' =>
    array (
      'desc' =>
      array (
        0 => 'LZMA archive',
        1 => 'LZMA: Lempel-Ziv-Markov chain-Algorithm',
      ),
      'e' =>
      array (
        0 => 'lzma',
      ),
    ),
    'application/x-lzma-compressed-tar' =>
    array (
      'desc' =>
      array (
        0 => 'Tar archive (LZMA-compressed)',
      ),
      'e' =>
      array (
        0 => 'tar.lzma',
        1 => 'tlz',
      ),
    ),
    'application/x-lzop' =>
    array (
      'desc' =>
      array (
        0 => 'LZO archive',
        1 => 'LZO: Lempel-Ziv-Oberhumer',
      ),
      'e' =>
      array (
        0 => 'lzo',
      ),
    ),
    'application/x-lzpdf' =>
    array (
      'desc' =>
      array (
        0 => 'PDF document (lzip-compressed)',
      ),
      'e' =>
      array (
        0 => 'pdf.lz',
      ),
    ),
    'application/x-m4' =>
    array (
      'desc' =>
      array (
        0 => 'M4 macro',
      ),
      'e' =>
      array (
        0 => 'm4',
      ),
    ),
    'application/x-magicpoint' =>
    array (
      'desc' =>
      array (
        0 => 'MagicPoint presentation',
      ),
      'e' =>
      array (
        0 => 'mgp',
      ),
    ),
    'application/x-markaby' =>
    array (
      'desc' =>
      array (
        0 => 'Markaby script',
      ),
      'e' =>
      array (
        0 => 'mab',
      ),
    ),
    'application/x-mie' =>
    array (
      'e' =>
      array (
        0 => 'mie',
      ),
    ),
    'application/x-mif' =>
    array (
      'desc' =>
      array (
        0 => 'Adobe FrameMaker MIF document',
      ),
      'e' =>
      array (
        0 => 'mif',
      ),
    ),
    'application/x-mimearchive' =>
    array (
      'desc' =>
      array (
        0 => 'MHTML web archive',
        1 => 'MHTML: MIME HTML',
      ),
      'e' =>
      array (
        0 => 'mhtml',
        1 => 'mht',
      ),
    ),
    'application/x-mobipocket-ebook' =>
    array (
      'desc' =>
      array (
        0 => 'Mobipocket e-book',
      ),
      'e' =>
      array (
        0 => 'prc',
        1 => 'mobi',
      ),
    ),
    'application/x-ms-application' =>
    array (
      'e' =>
      array (
        0 => 'application',
      ),
    ),
    'application/x-ms-dos-executable' =>
    array (
      'desc' =>
      array (
        0 => 'DOS/Windows executable',
      ),
      'e' =>
      array (
        0 => 'exe',
      ),
    ),
    'application/x-ms-shortcut' =>
    array (
      'e' =>
      array (
        0 => 'lnk',
      ),
    ),
    'application/x-ms-wim' =>
    array (
      'desc' =>
      array (
        0 => 'WIM disk image',
        1 => 'WIM: Windows Imaging Format',
      ),
      'e' =>
      array (
        0 => 'wim',
        1 => 'swm',
      ),
    ),
    'application/x-ms-wmd' =>
    array (
      'e' =>
      array (
        0 => 'wmd',
      ),
    ),
    'application/x-ms-wmz' =>
    array (
      'e' =>
      array (
        0 => 'wmz',
      ),
    ),
    'application/x-ms-xbap' =>
    array (
      'e' =>
      array (
        0 => 'xbap',
      ),
    ),
    'application/x-msbinder' =>
    array (
      'e' =>
      array (
        0 => 'obd',
      ),
    ),
    'application/x-mscardfile' =>
    array (
      'e' =>
      array (
        0 => 'crd',
      ),
    ),
    'application/x-msclip' =>
    array (
      'e' =>
      array (
        0 => 'clp',
      ),
    ),
    'application/x-msdownload' =>
    array (
      'e' =>
      array (
        0 => 'exe',
        1 => 'dll',
        2 => 'com',
        3 => 'bat',
        4 => 'msi',
      ),
    ),
    'application/x-msi' =>
    array (
      'desc' =>
      array (
        0 => 'Windows Installer package',
      ),
      'e' =>
      array (
        0 => 'msi',
      ),
    ),
    'application/x-msmediaview' =>
    array (
      'e' =>
      array (
        0 => 'mvb',
        1 => 'm13',
        2 => 'm14',
      ),
    ),
    'application/x-msmoney' =>
    array (
      'e' =>
      array (
        0 => 'mny',
      ),
    ),
    'application/x-mspublisher' =>
    array (
      'e' =>
      array (
        0 => 'pub',
      ),
    ),
    'application/x-msschedule' =>
    array (
      'e' =>
      array (
        0 => 'scd',
      ),
    ),
    'application/x-msterminal' =>
    array (
      'e' =>
      array (
        0 => 'trm',
      ),
    ),
    'application/x-mswinurl' =>
    array (
      'desc' =>
      array (
        0 => 'Internet shortcut',
      ),
      'e' =>
      array (
        0 => 'url',
      ),
    ),
    'application/x-mswrite' =>
    array (
      'desc' =>
      array (
        0 => 'WRI document',
      ),
      'e' =>
      array (
        0 => 'wri',
      ),
    ),
    'application/x-msx-rom' =>
    array (
      'desc' =>
      array (
        0 => 'MSX ROM',
      ),
      'e' =>
      array (
        0 => 'msx',
      ),
    ),
    'application/x-n64-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Nintendo64 ROM',
      ),
      'e' =>
      array (
        0 => 'n64',
        1 => 'z64',
        2 => 'v64',
      ),
    ),
    'application/x-navi-animation' =>
    array (
      'desc' =>
      array (
        0 => 'Windows animated cursor',
      ),
      'e' =>
      array (
        0 => 'ani',
      ),
    ),
    'application/x-neo-geo-pocket-color-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Neo-Geo Pocket Color ROM',
      ),
      'e' =>
      array (
        0 => 'ngc',
      ),
    ),
    'application/x-neo-geo-pocket-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Neo-Geo Pocket ROM',
      ),
      'e' =>
      array (
        0 => 'ngp',
      ),
    ),
    'application/x-nes-rom' =>
    array (
      'desc' =>
      array (
        0 => 'NES ROM',
      ),
      'e' =>
      array (
        0 => 'nes',
        1 => 'nez',
        2 => 'unf',
        3 => 'unif',
      ),
    ),
    'application/x-netcdf' =>
    array (
      'desc' =>
      array (
        0 => 'Unidata NetCDF document',
        1 => 'NetCDF: Network Common Data Form',
      ),
      'e' =>
      array (
        0 => 'nc',
        1 => 'cdf',
      ),
    ),
    'application/x-netshow-channel' =>
    array (
      'desc' =>
      array (
        0 => 'Windows Media Station file',
      ),
      'e' =>
      array (
        0 => 'nsc',
      ),
    ),
    'application/x-nintendo-ds-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Nintendo DS ROM',
      ),
      'e' =>
      array (
        0 => 'nds',
      ),
    ),
    'application/x-nzb' =>
    array (
      'desc' =>
      array (
        0 => 'NewzBin usenet index',
      ),
      'e' =>
      array (
        0 => 'nzb',
      ),
    ),
    'application/x-object' =>
    array (
      'desc' =>
      array (
        0 => 'object code',
      ),
      'e' =>
      array (
        0 => 'o',
      ),
    ),
    'application/x-oleo' =>
    array (
      'desc' =>
      array (
        0 => 'GNU Oleo spreadsheet',
      ),
      'e' =>
      array (
        0 => 'oleo',
      ),
    ),
    'application/x-pagemaker' =>
    array (
      'desc' =>
      array (
        0 => 'Adobe PageMaker document',
      ),
      'e' =>
      array (
        0 => 'p65',
        1 => 'pm',
        2 => 'pm6',
        3 => 'pmd',
      ),
    ),
    'application/x-pak' =>
    array (
      'desc' =>
      array (
        0 => 'PAK archive',
      ),
      'e' =>
      array (
        0 => 'pak',
      ),
    ),
    'application/x-par2' =>
    array (
      'desc' =>
      array (
        0 => 'Parchive archive',
        1 => 'Parchive: Parity Volume Set Archive',
      ),
      'e' =>
      array (
        0 => 'par2',
      ),
    ),
    'application/x-partial-download' =>
    array (
      'desc' =>
      array (
        0 => 'Partially downloaded file',
      ),
      'e' =>
      array (
        0 => 'wkdownload',
        1 => 'crdownload',
        2 => 'part',
      ),
    ),
    'application/x-pc-engine-rom' =>
    array (
      'desc' =>
      array (
        0 => 'PC Engine ROM',
      ),
      'e' =>
      array (
        0 => 'pce',
      ),
    ),
    'application/x-perl' =>
    array (
      'a' =>
      array (
        0 => 'text/x-perl',
      ),
      'desc' =>
      array (
        0 => 'Perl script',
      ),
      'e' =>
      array (
        0 => 'pl',
        1 => 'pm',
        2 => 'al',
        3 => 'perl',
        4 => 'pod',
        5 => 't',
      ),
    ),
    'application/x-php' =>
    array (
      'desc' =>
      array (
        0 => 'PHP script',
      ),
      'e' =>
      array (
        0 => 'php',
        1 => 'php3',
        2 => 'php4',
        3 => 'php5',
        4 => 'phps',
      ),
    ),
    'application/x-pkcs7-certificates' =>
    array (
      'desc' =>
      array (
        0 => 'PKCS#7 certificate bundle',
        1 => 'PKCS: Public-Key Cryptography Standards',
      ),
      'e' =>
      array (
        0 => 'p7b',
        1 => 'spc',
      ),
    ),
    'application/x-pkcs7-certreqresp' =>
    array (
      'e' =>
      array (
        0 => 'p7r',
      ),
    ),
    'application/x-planperfect' =>
    array (
      'desc' =>
      array (
        0 => 'PlanPerfect spreadsheet',
      ),
      'e' =>
      array (
        0 => 'pln',
      ),
    ),
    'application/x-pocket-word' =>
    array (
      'desc' =>
      array (
        0 => 'Pocket Word document',
      ),
      'e' =>
      array (
        0 => 'psw',
      ),
    ),
    'application/x-pw' =>
    array (
      'desc' =>
      array (
        0 => 'Pathetic Writer document',
      ),
      'e' =>
      array (
        0 => 'pw',
      ),
    ),
    'application/x-pyspread-bz-spreadsheet' =>
    array (
      'desc' =>
      array (
        0 => 'Pyspread spreadsheet (bzip-compressed)',
      ),
      'e' =>
      array (
        0 => 'pys',
      ),
    ),
    'application/x-pyspread-spreadsheet' =>
    array (
      'desc' =>
      array (
        0 => 'Pyspread spreadsheet',
      ),
      'e' =>
      array (
        0 => 'pysu',
      ),
    ),
    'application/x-python-bytecode' =>
    array (
      'desc' =>
      array (
        0 => 'Python bytecode',
      ),
      'e' =>
      array (
        0 => 'pyc',
        1 => 'pyo',
      ),
    ),
    'application/x-qemu-disk' =>
    array (
      'desc' =>
      array (
        0 => 'QEMU QCOW disk image',
        1 => 'QCOW: QEMU Copy On Write',
      ),
      'e' =>
      array (
        0 => 'qcow2',
        1 => 'qcow',
      ),
    ),
    'application/x-qpress' =>
    array (
      'desc' =>
      array (
        0 => 'Qpress archive',
      ),
      'e' =>
      array (
        0 => 'qp',
      ),
    ),
    'application/x-qtiplot' =>
    array (
      'desc' =>
      array (
        0 => 'QtiPlot document',
      ),
      'e' =>
      array (
        0 => 'qti',
        1 => 'qti.gz',
      ),
    ),
    'application/x-quattropro' =>
    array (
      'desc' =>
      array (
        0 => 'Quattro Pro spreadsheet',
      ),
      'e' =>
      array (
        0 => 'wb1',
        1 => 'wb2',
        2 => 'wb3',
      ),
    ),
    'application/x-quicktime-media-link' =>
    array (
      'a' =>
      array (
        0 => 'application/x-quicktimeplayer',
      ),
      'desc' =>
      array (
        0 => 'QuickTime playlist',
      ),
      'e' =>
      array (
        0 => 'qtl',
      ),
    ),
    'application/x-qw' =>
    array (
      'desc' =>
      array (
        0 => 'Quicken document',
      ),
      'e' =>
      array (
        0 => 'qif',
      ),
    ),
    'application/x-raw-disk-image' =>
    array (
      'desc' =>
      array (
        0 => 'Raw disk image',
      ),
      'e' =>
      array (
        0 => 'raw-disk-image',
        1 => 'img',
      ),
    ),
    'application/x-raw-disk-image-xz-compressed' =>
    array (
      'desc' =>
      array (
        0 => 'Raw disk image (XZ-compressed)',
      ),
      'e' =>
      array (
        0 => 'raw-disk-image.xz',
        1 => 'img.xz',
      ),
    ),
    'application/x-raw-floppy-disk-image' =>
    array (
      'a' =>
      array (
        0 => 'application/x-fd-file',
      ),
      'desc' =>
      array (
        0 => 'Floppy disk image',
      ),
      'e' =>
      array (
        0 => 'fd',
        1 => 'qd',
      ),
    ),
    'application/x-research-info-systems' =>
    array (
      'e' =>
      array (
        0 => 'ris',
      ),
    ),
    'application/x-rpm' =>
    array (
      'a' =>
      array (
        0 => 'application/x-redhat-package-manager',
      ),
      'desc' =>
      array (
        0 => 'RPM package',
      ),
      'e' =>
      array (
        0 => 'rpm',
      ),
    ),
    'application/x-ruby' =>
    array (
      'desc' =>
      array (
        0 => 'Ruby script',
      ),
      'e' =>
      array (
        0 => 'rb',
      ),
    ),
    'application/x-sami' =>
    array (
      'desc' =>
      array (
        0 => 'SAMI subtitles',
        1 => 'SAMI: Synchronized Accessible Media Interchange',
      ),
      'e' =>
      array (
        0 => 'smi',
        1 => 'sami',
      ),
    ),
    'application/x-saturn-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Sega Saturn disc image',
      ),
      'e' =>
      array (
        0 => 'iso',
      ),
    ),
    'application/x-sega-cd-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Sega CD disc image',
      ),
      'e' =>
      array (
        0 => 'iso',
      ),
    ),
    'application/x-sg1000-rom' =>
    array (
      'desc' =>
      array (
        0 => 'SG-1000 ROM',
      ),
      'e' =>
      array (
        0 => 'sg',
      ),
    ),
    'application/x-sh' =>
    array (
      'e' =>
      array (
        0 => 'sh',
      ),
    ),
    'application/x-shar' =>
    array (
      'desc' =>
      array (
        0 => 'shell archive',
      ),
      'e' =>
      array (
        0 => 'shar',
      ),
    ),
    'application/x-shared-library-la' =>
    array (
      'desc' =>
      array (
        0 => 'libtool shared library',
      ),
      'e' =>
      array (
        0 => 'la',
      ),
    ),
    'application/x-sharedlib' =>
    array (
      'desc' =>
      array (
        0 => 'shared library',
      ),
      'e' =>
      array (
        0 => 'so',
      ),
    ),
    'application/x-shellscript' =>
    array (
      'a' =>
      array (
        0 => 'text/x-sh',
      ),
      'desc' =>
      array (
        0 => 'shell script',
      ),
      'e' =>
      array (
        0 => 'sh',
      ),
    ),
    'application/x-shorten' =>
    array (
      'a' =>
      array (
        0 => 'audio/x-shorten',
      ),
      'desc' =>
      array (
        0 => 'Shorten audio',
      ),
      'e' =>
      array (
        0 => 'shn',
      ),
    ),
    'application/x-siag' =>
    array (
      'desc' =>
      array (
        0 => 'Siag spreadsheet',
      ),
      'e' =>
      array (
        0 => 'siag',
      ),
    ),
    'application/x-silverlight-app' =>
    array (
      'e' =>
      array (
        0 => 'xap',
      ),
    ),
    'application/x-smaf' =>
    array (
      'a' =>
      array (
        0 => 'application/vnd.smaf',
      ),
      'desc' =>
      array (
        0 => 'SMAF audio',
        1 => 'SMAF: Synthetic music Mobile Application Format',
      ),
      'e' =>
      array (
        0 => 'mmf',
        1 => 'smaf',
      ),
    ),
    'application/x-sms-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Master System ROM',
      ),
      'e' =>
      array (
        0 => 'sms',
      ),
    ),
    'application/x-source-rpm' =>
    array (
      'desc' =>
      array (
        0 => 'Source RPM package',
      ),
      'e' =>
      array (
        0 => 'src.rpm',
        1 => 'spm',
      ),
    ),
    'application/x-spss-por' =>
    array (
      'desc' =>
      array (
        0 => 'SPSS portable data file',
        1 => 'SPSS: Statistical Package for the Social Sciences',
      ),
      'e' =>
      array (
        0 => 'por',
      ),
    ),
    'application/x-spss-sav' =>
    array (
      'a' =>
      array (
        0 => 'application/x-spss-savefile',
      ),
      'desc' =>
      array (
        0 => 'SPSS data file',
        1 => 'SPSS: Statistical Package for the Social Sciences',
      ),
      'e' =>
      array (
        0 => 'sav',
        1 => 'zsav',
      ),
    ),
    'application/x-sql' =>
    array (
      'e' =>
      array (
        0 => 'sql',
      ),
    ),
    'application/x-sqlite2' =>
    array (
      'desc' =>
      array (
        0 => 'SQLite2 database',
      ),
      'e' =>
      array (
        0 => 'sqlite2',
      ),
    ),
    'application/x-stuffit' =>
    array (
      'a' =>
      array (
        0 => 'application/stuffit',
        1 => 'application/x-sit',
      ),
      'desc' =>
      array (
        0 => 'StuffIt archive',
      ),
      'e' =>
      array (
        0 => 'sit',
      ),
    ),
    'application/x-stuffitx' =>
    array (
      'e' =>
      array (
        0 => 'sitx',
      ),
    ),
    'application/x-subrip' =>
    array (
      'a' =>
      array (
        0 => 'application/x-srt',
      ),
      'desc' =>
      array (
        0 => 'SubRip subtitles',
      ),
      'e' =>
      array (
        0 => 'srt',
      ),
    ),
    'application/x-sv4cpio' =>
    array (
      'desc' =>
      array (
        0 => 'SV4 CPIO archive',
      ),
      'e' =>
      array (
        0 => 'sv4cpio',
      ),
    ),
    'application/x-sv4crc' =>
    array (
      'desc' =>
      array (
        0 => 'SV4 CPIO archive (with CRC)',
      ),
      'e' =>
      array (
        0 => 'sv4crc',
      ),
    ),
    'application/x-t3vm-image' =>
    array (
      'e' =>
      array (
        0 => 't3',
      ),
    ),
    'application/x-t602' =>
    array (
      'desc' =>
      array (
        0 => 'T602 document',
      ),
      'e' =>
      array (
        0 => '602',
      ),
    ),
    'application/x-tads' =>
    array (
      'e' =>
      array (
        0 => 'gam',
      ),
    ),
    'application/x-tar' =>
    array (
      'a' =>
      array (
        0 => 'application/x-gtar',
      ),
      'desc' =>
      array (
        0 => 'Tar archive',
      ),
      'e' =>
      array (
        0 => 'tar',
        1 => 'gtar',
        2 => 'gem',
      ),
    ),
    'application/x-tarz' =>
    array (
      'desc' =>
      array (
        0 => 'Tar archive (compressed)',
      ),
      'e' =>
      array (
        0 => 'tar.z',
        1 => 'taz',
      ),
    ),
    'application/x-tcl' =>
    array (
      'e' =>
      array (
        0 => 'tcl',
      ),
    ),
    'application/x-tex-gf' =>
    array (
      'desc' =>
      array (
        0 => 'generic font file',
      ),
      'e' =>
      array (
        0 => 'gf',
      ),
    ),
    'application/x-tex-pk' =>
    array (
      'desc' =>
      array (
        0 => 'packed font file',
      ),
      'e' =>
      array (
        0 => 'pk',
      ),
    ),
    'application/x-tex-tfm' =>
    array (
      'e' =>
      array (
        0 => 'tfm',
      ),
    ),
    'application/x-texinfo' =>
    array (
      'e' =>
      array (
        0 => 'texinfo',
        1 => 'texi',
      ),
    ),
    'application/x-tgif' =>
    array (
      'desc' =>
      array (
        0 => 'TGIF document',
      ),
      'e' =>
      array (
        0 => 'obj',
      ),
    ),
    'application/x-theme' =>
    array (
      'desc' =>
      array (
        0 => 'theme',
      ),
      'e' =>
      array (
        0 => 'theme',
      ),
    ),
    'application/x-thomson-cartridge-memo7' =>
    array (
      'desc' =>
      array (
        0 => 'Thomson Mémo7 cartridge',
      ),
      'e' =>
      array (
        0 => 'm7',
      ),
    ),
    'application/x-thomson-cassette' =>
    array (
      'desc' =>
      array (
        0 => 'Thomson cassette',
      ),
      'e' =>
      array (
        0 => 'k7',
      ),
    ),
    'application/x-thomson-sap-image' =>
    array (
      'a' =>
      array (
        0 => 'application/x-sap-file',
      ),
      'desc' =>
      array (
        0 => 'SAP Thomson floppy disk image',
        1 => 'SAP: Système d\'Archivage Pukall',
      ),
      'e' =>
      array (
        0 => 'sap',
      ),
    ),
    'application/x-trash' =>
    array (
      'desc' =>
      array (
        0 => 'backup file',
      ),
      'e' =>
      array (
        0 => 'bak',
        1 => 'old',
        2 => 'sik',
      ),
    ),
    'application/x-troff-man' =>
    array (
      'desc' =>
      array (
        0 => 'Manpage manual document',
      ),
      'e' =>
      array (
        0 => 'man',
      ),
    ),
    'application/x-tzo' =>
    array (
      'desc' =>
      array (
        0 => 'Tar archive (LZO-compressed)',
      ),
      'e' =>
      array (
        0 => 'tar.lzo',
        1 => 'tzo',
      ),
    ),
    'application/x-ufraw' =>
    array (
      'desc' =>
      array (
        0 => 'UFRaw ID image',
        1 => 'UFRaw: Unidentified Flying Raw',
      ),
      'e' =>
      array (
        0 => 'ufraw',
      ),
    ),
    'application/x-ustar' =>
    array (
      'desc' =>
      array (
        0 => 'Ustar archive',
      ),
      'e' =>
      array (
        0 => 'ustar',
      ),
    ),
    'application/x-virtual-boy-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Virtual Boy ROM',
      ),
      'e' =>
      array (
        0 => 'vb',
      ),
    ),
    'application/x-wais-source' =>
    array (
      'desc' =>
      array (
        0 => 'WAIS source code',
      ),
      'e' =>
      array (
        0 => 'src',
      ),
    ),
    'application/x-wii-rom' =>
    array (
      'a' =>
      array (
        0 => 'application/x-wii-iso-image',
        1 => 'application/x-wbfs',
        2 => 'application/x-wia',
      ),
      'desc' =>
      array (
        0 => 'Wii disc image',
      ),
      'e' =>
      array (
        0 => 'iso',
      ),
    ),
    'application/x-wii-wad' =>
    array (
      'desc' =>
      array (
        0 => 'WiiWare bundle',
      ),
      'e' =>
      array (
        0 => 'wad',
      ),
    ),
    'application/x-windows-themepack' =>
    array (
      'desc' =>
      array (
        0 => 'Microsoft Windows theme pack',
      ),
      'e' =>
      array (
        0 => 'themepack',
      ),
    ),
    'application/x-wonderswan-color-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Bandai WonderSwan Color ROM',
      ),
      'e' =>
      array (
        0 => 'wsc',
      ),
    ),
    'application/x-wonderswan-rom' =>
    array (
      'desc' =>
      array (
        0 => 'Bandai WonderSwan ROM',
      ),
      'e' =>
      array (
        0 => 'ws',
      ),
    ),
    'application/x-wpg' =>
    array (
      'desc' =>
      array (
        0 => 'WordPerfect/Drawperfect image',
      ),
      'e' =>
      array (
        0 => 'wpg',
      ),
    ),
    'application/x-wwf' =>
    array (
      'a' =>
      array (
        0 => 'application/wwf',
      ),
      'desc' =>
      array (
        0 => 'WWF document',
      ),
      'e' =>
      array (
        0 => 'wwf',
      ),
    ),
    'application/x-x509-ca-cert' =>
    array (
      'desc' =>
      array (
        0 => 'DER/PEM/Netscape-encoded X.509 certificate',
      ),
      'e' =>
      array (
        0 => 'der',
        1 => 'crt',
        2 => 'cert',
        3 => 'pem',
      ),
    ),
    'application/x-xar' =>
    array (
      'desc' =>
      array (
        0 => 'XAR archive',
        1 => 'XAR: eXtensible ARchive',
      ),
      'e' =>
      array (
        0 => 'xar',
        1 => 'pkg',
      ),
    ),
    'application/x-xbel' =>
    array (
      'desc' =>
      array (
        0 => 'XBEL bookmarks',
        1 => 'XBEL: XML Bookmark Exchange Language',
      ),
      'e' =>
      array (
        0 => 'xbel',
      ),
    ),
    'application/x-xfig' =>
    array (
      'e' =>
      array (
        0 => 'fig',
      ),
    ),
    'application/x-xliff+xml' =>
    array (
      'e' =>
      array (
        0 => 'xlf',
      ),
    ),
    'application/x-xpinstall' =>
    array (
      'desc' =>
      array (
        0 => 'XPInstall installer module',
      ),
      'e' =>
      array (
        0 => 'xpi',
      ),
    ),
    'application/x-xz' =>
    array (
      'desc' =>
      array (
        0 => 'XZ archive',
      ),
      'e' =>
      array (
        0 => 'xz',
      ),
    ),
    'application/x-xz-compressed-tar' =>
    array (
      'desc' =>
      array (
        0 => 'Tar archive (XZ-compressed)',
      ),
      'e' =>
      array (
        0 => 'tar.xz',
        1 => 'txz',
      ),
    ),
    'application/x-xzpdf' =>
    array (
      'desc' =>
      array (
        0 => 'PDF document (XZ-compressed)',
      ),
      'e' =>
      array (
        0 => 'pdf.xz',
      ),
    ),
    'application/x-yaml' =>
    array (
      'a' =>
      array (
        0 => 'text/yaml',
        1 => 'text/x-yaml',
      ),
      'desc' =>
      array (
        0 => 'YAML document',
        1 => 'YAML: YAML Ain\'t Markup Language',
      ),
      'e' =>
      array (
        0 => 'yaml',
        1 => 'yml',
      ),
    ),
    'application/x-zip-compressed-fb2' =>
    array (
      'desc' =>
      array (
        0 => 'Compressed FictionBook document',
      ),
      'e' =>
      array (
        0 => 'fb2.zip',
      ),
    ),
    'application/x-zmachine' =>
    array (
      'e' =>
      array (
        0 => 'z1',
        1 => 'z2',
        2 => 'z3',
        3 => 'z4',
        4 => 'z5',
        5 => 'z6',
        6 => 'z7',
        7 => 'z8',
      ),
    ),
    'application/x-zoo' =>
    array (
      'desc' =>
      array (
        0 => 'Zoo archive',
      ),
      'e' =>
      array (
        0 => 'zoo',
      ),
    ),
    'application/x-zstd-compressed-tar' =>
    array (
      'desc' =>
      array (
        0 => 'Tar archive (Zstandard-compressed)',
      ),
      'e' =>
      array (
        0 => 'tar.zst',
        1 => 'tzst',
      ),
    ),
    'application/xaml+xml' =>
    array (
      'e' =>
      array (
        0 => 'xaml',
      ),
    ),
    'application/xcap-diff+xml' =>
    array (
      'e' =>
      array (
        0 => 'xdf',
      ),
    ),
    'application/xenc+xml' =>
    array (
      'e' =>
      array (
        0 => 'xenc',
      ),
    ),
    'application/xhtml+xml' =>
    array (
      'desc' =>
      array (
        0 => 'XHTML page',
        1 => 'XHTML: Extensible HyperText Markup Language',
      ),
      'e' =>
      array (
        0 => 'xhtml',
        1 => 'xht',
        2 => 'html',
        3 => 'htm',
      ),
    ),
    'application/xliff+xml' =>
    array (
      'a' =>
      array (
        0 => 'application/x-xliff',
      ),
      'desc' =>
      array (
        0 => 'XLIFF translation file',
        1 => 'XLIFF: XML Localization Interchange File Format',
      ),
      'e' =>
      array (
        0 => 'xlf',
        1 => 'xliff',
      ),
    ),
    'application/xml' =>
    array (
      'a' =>
      array (
        0 => 'text/xml',
      ),
      'desc' =>
      array (
        0 => 'XML document',
        1 => 'XML: eXtensible Markup Language',
      ),
      'e' =>
      array (
        0 => 'xml',
        1 => 'xsl',
        2 => 'xbl',
        3 => 'xsd',
        4 => 'rng',
      ),
    ),
    'application/xml-dtd' =>
    array (
      'a' =>
      array (
        0 => 'text/x-dtd',
      ),
      'desc' =>
      array (
        0 => 'DTD file',
        1 => 'DTD: Document Type Definition',
      ),
      'e' =>
      array (
        0 => 'dtd',
      ),
    ),
    'application/xml-external-parsed-entity' =>
    array (
      'a' =>
      array (
        0 => 'text/xml-external-parsed-entity',
      ),
      'desc' =>
      array (
        0 => 'XML entities document',
        1 => 'XML: eXtensible Markup Language',
      ),
      'e' =>
      array (
        0 => 'ent',
      ),
    ),
    'application/xop+xml' =>
    array (
      'e' =>
      array (
        0 => 'xop',
      ),
    ),
    'application/xproc+xml' =>
    array (
      'e' =>
      array (
        0 => 'xpl',
      ),
    ),
    'application/xslt+xml' =>
    array (
      'desc' =>
      array (
        0 => 'XSLT stylesheet',
        1 => 'XSLT: eXtensible Stylesheet Language Transformation',
      ),
      'e' =>
      array (
        0 => 'xslt',
        1 => 'xsl',
      ),
    ),
    'application/xspf+xml' =>
    array (
      'a' =>
      array (
        0 => 'application/x-xspf+xml',
      ),
      'desc' =>
      array (
        0 => 'XSPF playlist',
        1 => 'XSPF: XML Shareable Playlist Format',
      ),
      'e' =>
      array (
        0 => 'xspf',
      ),
    ),
    'application/xv+xml' =>
    array (
      'e' =>
      array (
        0 => 'mxml',
        1 => 'xhvml',
        2 => 'xvml',
        3 => 'xvm',
      ),
    ),
    'application/yang' =>
    array (
      'e' =>
      array (
        0 => 'yang',
      ),
    ),
    'application/yin+xml' =>
    array (
      'e' =>
      array (
        0 => 'yin',
      ),
    ),
    'application/zip' =>
    array (
      'a' =>
      array (
        0 => 'application/x-zip-compressed',
        1 => 'application/x-zip',
      ),
      'desc' =>
      array (
        0 => 'Zip archive',
      ),
      'e' =>
      array (
        0 => 'zip',
      ),
    ),
    'application/zlib' =>
    array (
      'desc' =>
      array (
        0 => 'Zlib archive',
      ),
      'e' =>
      array (
        0 => 'zz',
      ),
    ),
    'application/zstd' =>
    array (
      'desc' =>
      array (
        0 => 'Zstandard archive',
      ),
      'e' =>
      array (
        0 => 'zst',
      ),
    ),
    'audio/aac' =>
    array (
      'a' =>
      array (
        0 => 'audio/x-aac',
      ),
      'desc' =>
      array (
        0 => 'AAC audio',
        1 => 'AAC: Advanced Audio Coding',
      ),
      'e' =>
      array (
        0 => 'aac',
        1 => 'adts',
        2 => 'ass',
      ),
    ),
    'audio/ac3' =>
    array (
      'desc' =>
      array (
        0 => 'Dolby Digital audio',
      ),
      'e' =>
      array (
        0 => 'ac3',
      ),
    ),
    'audio/adpcm' =>
    array (
      'e' =>
      array (
        0 => 'adp',
      ),
    ),
    'audio/amr' =>
    array (
      'a' =>
      array (
        0 => 'audio/amr-encrypted',
      ),
      'desc' =>
      array (
        0 => 'AMR audio',
        1 => 'AMR: Adaptive Multi-Rate',
      ),
      'e' =>
      array (
        0 => 'amr',
      ),
    ),
    'audio/amr-wb' =>
    array (
      'a' =>
      array (
        0 => 'audio/amr-wb-encrypted',
      ),
      'desc' =>
      array (
        0 => 'AMR-WB audio',
        1 => 'AMR-WB: Adaptive Multi-Rate Wideband',
      ),
      'e' =>
      array (
        0 => 'awb',
      ),
    ),
    'audio/annodex' =>
    array (
      'a' =>
      array (
        0 => 'audio/x-annodex',
      ),
      'desc' =>
      array (
        0 => 'Annodex audio',
      ),
      'e' =>
      array (
        0 => 'axa',
      ),
    ),
    'audio/basic' =>
    array (
      'desc' =>
      array (
        0 => 'ULAW (Sun) audio',
      ),
      'e' =>
      array (
        0 => 'au',
        1 => 'snd',
      ),
    ),
    'audio/flac' =>
    array (
      'a' =>
      array (
        0 => 'audio/x-flac',
      ),
      'desc' =>
      array (
        0 => 'FLAC audio',
      ),
      'e' =>
      array (
        0 => 'flac',
      ),
    ),
    'audio/midi' =>
    array (
      'a' =>
      array (
        0 => 'audio/x-midi',
      ),
      'desc' =>
      array (
        0 => 'MIDI audio',
      ),
      'e' =>
      array (
        0 => 'mid',
        1 => 'midi',
        2 => 'kar',
        3 => 'rmi',
      ),
    ),
    'audio/mp2' =>
    array (
      'a' =>
      array (
        0 => 'audio/x-mp2',
      ),
      'desc' =>
      array (
        0 => 'MP2 audio',
      ),
      'e' =>
      array (
        0 => 'mp2',
      ),
    ),
    'audio/mp4' =>
    array (
      'a' =>
      array (
        0 => 'audio/x-m4a',
        1 => 'audio/m4a',
      ),
      'desc' =>
      array (
        0 => 'MPEG-4 audio',
      ),
      'e' =>
      array (
        0 => 'm4a',
        1 => 'mp4a',
        2 => 'f4a',
      ),
    ),
    'audio/mpeg' =>
    array (
      'a' =>
      array (
        0 => 'audio/x-mp3',
        1 => 'audio/x-mpg',
        2 => 'audio/x-mpeg',
        3 => 'audio/mp3',
      ),
      'desc' =>
      array (
        0 => 'MP3 audio',
      ),
      'e' =>
      array (
        0 => 'mpga',
        1 => 'mp2',
        2 => 'mp2a',
        3 => 'mp3',
        4 => 'm2a',
        5 => 'm3a',
      ),
    ),
    'audio/ogg' =>
    array (
      'a' =>
      array (
        0 => 'audio/x-ogg',
      ),
      'desc' =>
      array (
        0 => 'Ogg audio',
      ),
      'e' =>
      array (
        0 => 'oga',
        1 => 'ogg',
        2 => 'spx',
        3 => 'opus',
      ),
    ),
    'audio/prs.sid' =>
    array (
      'desc' =>
      array (
        0 => 'Commodore 64 audio',
      ),
      'e' =>
      array (
        0 => 'sid',
        1 => 'psid',
      ),
    ),
    'audio/s3m' =>
    array (
      'e' =>
      array (
        0 => 's3m',
      ),
    ),
    'audio/silk' =>
    array (
      'e' =>
      array (
        0 => 'sil',
      ),
    ),
    'audio/usac' =>
    array (
      'desc' =>
      array (
        0 => 'USAC audio',
        1 => 'USAC: Unified Speech and Audio Coding',
      ),
      'e' =>
      array (
        0 => 'loas',
        1 => 'xhe',
      ),
    ),
    'audio/vnd.audible.aax' =>
    array (
      'desc' =>
      array (
        0 => 'Audible Enhanced audio',
      ),
      'e' =>
      array (
        0 => 'aax',
      ),
    ),
    'audio/vnd.dece.audio' =>
    array (
      'e' =>
      array (
        0 => 'uva',
        1 => 'uvva',
      ),
    ),
    'audio/vnd.digital-winds' =>
    array (
      'e' =>
      array (
        0 => 'eol',
      ),
    ),
    'audio/vnd.dra' =>
    array (
      'e' =>
      array (
        0 => 'dra',
      ),
    ),
    'audio/vnd.dts' =>
    array (
      'a' =>
      array (
        0 => 'audio/x-dts',
      ),
      'desc' =>
      array (
        0 => 'DTS audio',
      ),
      'e' =>
      array (
        0 => 'dts',
      ),
    ),
    'audio/vnd.dts.hd' =>
    array (
      'a' =>
      array (
        0 => 'audio/x-dtshd',
      ),
      'desc' =>
      array (
        0 => 'DTSHD audio',
      ),
      'e' =>
      array (
        0 => 'dtshd',
      ),
    ),
    'audio/vnd.lucent.voice' =>
    array (
      'e' =>
      array (
        0 => 'lvp',
      ),
    ),
    'audio/vnd.ms-playready.media.pya' =>
    array (
      'e' =>
      array (
        0 => 'pya',
      ),
    ),
    'audio/vnd.nuera.ecelp4800' =>
    array (
      'e' =>
      array (
        0 => 'ecelp4800',
      ),
    ),
    'audio/vnd.nuera.ecelp7470' =>
    array (
      'e' =>
      array (
        0 => 'ecelp7470',
      ),
    ),
    'audio/vnd.nuera.ecelp9600' =>
    array (
      'e' =>
      array (
        0 => 'ecelp9600',
      ),
    ),
    'audio/vnd.rip' =>
    array (
      'e' =>
      array (
        0 => 'rip',
      ),
    ),
    'audio/vnd.rn-realaudio' =>
    array (
      'a' =>
      array (
        0 => 'audio/x-pn-realaudio',
        1 => 'audio/vnd.m-realaudio',
      ),
      'desc' =>
      array (
        0 => 'RealAudio document',
      ),
      'e' =>
      array (
        0 => 'ra',
        1 => 'rax',
      ),
    ),
    'audio/webm' =>
    array (
      'e' =>
      array (
        0 => 'weba',
      ),
    ),
    'audio/x-aifc' =>
    array (
      'a' =>
      array (
        0 => 'audio/x-aiffc',
      ),
      'desc' =>
      array (
        0 => 'AIFC audio',
        1 => 'AIFC: Audio Interchange File format Compressed',
      ),
      'e' =>
      array (
        0 => 'aifc',
        1 => 'aiffc',
      ),
    ),
    'audio/x-aiff' =>
    array (
      'desc' =>
      array (
        0 => 'AIFF/Amiga/Mac audio',
        1 => 'AIFF: Audio Interchange File Format',
      ),
      'e' =>
      array (
        0 => 'aif',
        1 => 'aiff',
        2 => 'aifc',
      ),
    ),
    'audio/x-amzxml' =>
    array (
      'desc' =>
      array (
        0 => 'AmazonMP3 download file',
      ),
      'e' =>
      array (
        0 => 'amz',
      ),
    ),
    'audio/x-ape' =>
    array (
      'desc' =>
      array (
        0 => 'Monkey\'s audio',
      ),
      'e' =>
      array (
        0 => 'ape',
      ),
    ),
    'audio/x-caf' =>
    array (
      'e' =>
      array (
        0 => 'caf',
      ),
    ),
    'audio/x-flac+ogg' =>
    array (
      'a' =>
      array (
        0 => 'audio/x-oggflac',
      ),
      'desc' =>
      array (
        0 => 'Ogg FLAC audio',
      ),
      'e' =>
      array (
        0 => 'oga',
        1 => 'ogg',
      ),
    ),
    'audio/x-gsm' =>
    array (
      'desc' =>
      array (
        0 => 'GSM 06.10 audio',
        1 => 'GSM: Global System for Mobile communications',
      ),
      'e' =>
      array (
        0 => 'gsm',
      ),
    ),
    'audio/x-iriver-pla' =>
    array (
      'desc' =>
      array (
        0 => 'iRiver playlist',
      ),
      'e' =>
      array (
        0 => 'pla',
      ),
    ),
    'audio/x-it' =>
    array (
      'desc' =>
      array (
        0 => 'Impulse Tracker audio',
      ),
      'e' =>
      array (
        0 => 'it',
      ),
    ),
    'audio/x-m4b' =>
    array (
      'desc' =>
      array (
        0 => 'MPEG-4 audio book',
      ),
      'e' =>
      array (
        0 => 'm4b',
        1 => 'f4b',
      ),
    ),
    'audio/x-m4r' =>
    array (
      'desc' =>
      array (
        0 => 'MPEG-4 ringtone',
      ),
      'e' =>
      array (
        0 => 'm4r',
      ),
    ),
    'audio/x-matroska' =>
    array (
      'desc' =>
      array (
        0 => 'Matroska audio',
      ),
      'e' =>
      array (
        0 => 'mka',
      ),
    ),
    'audio/x-minipsf' =>
    array (
      'desc' =>
      array (
        0 => 'MiniPSF audio',
        1 => 'MiniPSF: Miniature Portable Sound Format',
      ),
      'e' =>
      array (
        0 => 'minipsf',
      ),
    ),
    'audio/x-mo3' =>
    array (
      'desc' =>
      array (
        0 => 'compressed Tracker audio',
      ),
      'e' =>
      array (
        0 => 'mo3',
      ),
    ),
    'audio/x-mod' =>
    array (
      'desc' =>
      array (
        0 => 'Amiga SoundTracker audio',
      ),
      'e' =>
      array (
        0 => 'mod',
        1 => 'ult',
        2 => 'uni',
        3 => 'm15',
        4 => 'mtm',
        5 => '669',
        6 => 'med',
      ),
    ),
    'audio/x-mpegurl' =>
    array (
      'a' =>
      array (
        0 => 'audio/mpegurl',
        1 => 'application/m3u',
        2 => 'audio/x-mp3-playlist',
        3 => 'audio/m3u',
        4 => 'audio/x-m3u',
      ),
      'desc' =>
      array (
        0 => 'MP3 audio (streamed)',
      ),
      'e' =>
      array (
        0 => 'm3u',
        1 => 'm3u8',
        2 => 'vlc',
      ),
    ),
    'audio/x-ms-asx' =>
    array (
      'a' =>
      array (
        0 => 'video/x-ms-wvx',
        1 => 'video/x-ms-wax',
        2 => 'video/x-ms-wmx',
        3 => 'application/x-ms-asx',
      ),
      'desc' =>
      array (
        0 => 'Microsoft ASX playlist',
      ),
      'e' =>
      array (
        0 => 'asx',
        1 => 'wax',
        2 => 'wvx',
        3 => 'wmx',
      ),
    ),
    'audio/x-ms-wax' =>
    array (
      'e' =>
      array (
        0 => 'wax',
      ),
    ),
    'audio/x-ms-wma' =>
    array (
      'a' =>
      array (
        0 => 'audio/wma',
      ),
      'desc' =>
      array (
        0 => 'Windows Media audio',
      ),
      'e' =>
      array (
        0 => 'wma',
      ),
    ),
    'audio/x-musepack' =>
    array (
      'desc' =>
      array (
        0 => 'Musepack audio',
      ),
      'e' =>
      array (
        0 => 'mpc',
        1 => 'mpp',
        2 => 'mp+',
      ),
    ),
    'audio/x-opus+ogg' =>
    array (
      'desc' =>
      array (
        0 => 'Opus audio',
      ),
      'e' =>
      array (
        0 => 'opus',
      ),
    ),
    'audio/x-pn-audibleaudio' =>
    array (
      'a' =>
      array (
        0 => 'audio/vnd.audible',
      ),
      'desc' =>
      array (
        0 => 'Audible.Com audio',
      ),
      'e' =>
      array (
        0 => 'aa',
      ),
    ),
    'audio/x-pn-realaudio-plugin' =>
    array (
      'e' =>
      array (
        0 => 'rmp',
      ),
    ),
    'audio/x-psf' =>
    array (
      'desc' =>
      array (
        0 => 'PSF audio',
        1 => 'PSF: Portable Sound Format',
      ),
      'e' =>
      array (
        0 => 'psf',
      ),
    ),
    'audio/x-psflib' =>
    array (
      'desc' =>
      array (
        0 => 'PSFlib audio library',
        1 => 'PSFlib: Portable Sound Format Library',
      ),
      'e' =>
      array (
        0 => 'psflib',
      ),
    ),
    'audio/x-s3m' =>
    array (
      'desc' =>
      array (
        0 => 'Scream Tracker 3 audio',
      ),
      'e' =>
      array (
        0 => 's3m',
      ),
    ),
    'audio/x-scpls' =>
    array (
      'a' =>
      array (
        0 => 'application/pls',
        1 => 'audio/scpls',
      ),
      'desc' =>
      array (
        0 => 'MP3 ShoutCast playlist',
      ),
      'e' =>
      array (
        0 => 'pls',
      ),
    ),
    'audio/x-speex' =>
    array (
      'desc' =>
      array (
        0 => 'Speex audio',
      ),
      'e' =>
      array (
        0 => 'spx',
      ),
    ),
    'audio/x-speex+ogg' =>
    array (
      'desc' =>
      array (
        0 => 'Ogg Speex audio',
      ),
      'e' =>
      array (
        0 => 'oga',
        1 => 'ogg',
        2 => 'spx',
      ),
    ),
    'audio/x-stm' =>
    array (
      'desc' =>
      array (
        0 => 'Scream Tracker audio',
      ),
      'e' =>
      array (
        0 => 'stm',
      ),
    ),
    'audio/x-tta' =>
    array (
      'a' =>
      array (
        0 => 'audio/tta',
      ),
      'desc' =>
      array (
        0 => 'TrueAudio audio',
      ),
      'e' =>
      array (
        0 => 'tta',
      ),
    ),
    'audio/x-voc' =>
    array (
      'desc' =>
      array (
        0 => 'VOC audio',
      ),
      'e' =>
      array (
        0 => 'voc',
      ),
    ),
    'audio/x-vorbis+ogg' =>
    array (
      'a' =>
      array (
        0 => 'audio/vorbis',
        1 => 'audio/x-vorbis',
      ),
      'desc' =>
      array (
        0 => 'Ogg Vorbis audio',
      ),
      'e' =>
      array (
        0 => 'oga',
        1 => 'ogg',
      ),
    ),
    'audio/x-wav' =>
    array (
      'a' =>
      array (
        0 => 'audio/wav',
        1 => 'audio/vnd.wave',
      ),
      'desc' =>
      array (
        0 => 'WAV audio',
      ),
      'e' =>
      array (
        0 => 'wav',
      ),
    ),
    'audio/x-wavpack' =>
    array (
      'desc' =>
      array (
        0 => 'WavPack audio',
      ),
      'e' =>
      array (
        0 => 'wv',
        1 => 'wvp',
      ),
    ),
    'audio/x-wavpack-correction' =>
    array (
      'desc' =>
      array (
        0 => 'WavPack audio correction file',
      ),
      'e' =>
      array (
        0 => 'wvc',
      ),
    ),
    'audio/x-xi' =>
    array (
      'desc' =>
      array (
        0 => 'Scream Tracker instrument',
      ),
      'e' =>
      array (
        0 => 'xi',
      ),
    ),
    'audio/x-xm' =>
    array (
      'desc' =>
      array (
        0 => 'FastTracker II audio',
      ),
      'e' =>
      array (
        0 => 'xm',
      ),
    ),
    'audio/x-xmf' =>
    array (
      'a' =>
      array (
        0 => 'audio/xmf',
        1 => 'audio/mobile-xmf',
      ),
      'desc' =>
      array (
        0 => 'XMF audio',
        1 => 'XMF: eXtensible Music Format',
      ),
      'e' =>
      array (
        0 => 'xmf',
      ),
    ),
    'audio/xm' =>
    array (
      'e' =>
      array (
        0 => 'xm',
      ),
    ),
    'chemical/x-cdx' =>
    array (
      'e' =>
      array (
        0 => 'cdx',
      ),
    ),
    'chemical/x-cif' =>
    array (
      'e' =>
      array (
        0 => 'cif',
      ),
    ),
    'chemical/x-cmdf' =>
    array (
      'e' =>
      array (
        0 => 'cmdf',
      ),
    ),
    'chemical/x-cml' =>
    array (
      'e' =>
      array (
        0 => 'cml',
      ),
    ),
    'chemical/x-csml' =>
    array (
      'e' =>
      array (
        0 => 'csml',
      ),
    ),
    'chemical/x-xyz' =>
    array (
      'e' =>
      array (
        0 => 'xyz',
      ),
    ),
    'font/collection' =>
    array (
      'desc' =>
      array (
        0 => 'Font collection',
      ),
      'e' =>
      array (
        0 => 'ttc',
      ),
    ),
    'font/otf' =>
    array (
      'a' =>
      array (
        0 => 'application/x-font-otf',
      ),
      'desc' =>
      array (
        0 => 'OpenType font',
      ),
      'e' =>
      array (
        0 => 'otf',
      ),
    ),
    'font/ttf' =>
    array (
      'a' =>
      array (
        0 => 'application/x-font-ttf',
      ),
      'desc' =>
      array (
        0 => 'TrueType font',
      ),
      'e' =>
      array (
        0 => 'ttf',
      ),
    ),
    'font/woff' =>
    array (
      'a' =>
      array (
        0 => 'application/font-woff',
      ),
      'desc' =>
      array (
        0 => 'WOFF font',
        1 => 'WOFF: Web Open Font Format',
      ),
      'e' =>
      array (
        0 => 'woff',
      ),
    ),
    'font/woff2' =>
    array (
      'desc' =>
      array (
        0 => 'WOFF2 font',
        1 => 'WOFF2: Web Open Font Format 2.0',
      ),
      'e' =>
      array (
        0 => 'woff2',
      ),
    ),
    'image/avif' =>
    array (
      'desc' =>
      array (
        0 => 'AV1 Image File Format (AVIF)',
      ),
      'e' =>
      array (
        0 => 'avif',
      ),
    ),
    'image/avif-sequence' =>
    array (
      'desc' =>
      array (
        0 => 'AVIF image sequence',
      ),
      'e' =>
      array (
        0 => 'avifs',
      ),
    ),
    'image/bmp' =>
    array (
      'a' =>
      array (
        0 => 'image/x-bmp',
        1 => 'image/x-ms-bmp',
      ),
      'desc' =>
      array (
        0 => 'Windows BMP image',
      ),
      'e' =>
      array (
        0 => 'bmp',
        1 => 'dib',
      ),
    ),
    'image/cgm' =>
    array (
      'desc' =>
      array (
        0 => 'CGM image',
        1 => 'CGM: Computer Graphics Metafile',
      ),
      'e' =>
      array (
        0 => 'cgm',
      ),
    ),
    'image/emf' =>
    array (
      'a' =>
      array (
        0 => 'image/x-emf',
        1 => 'application/x-emf',
        2 => 'application/emf',
      ),
      'desc' =>
      array (
        0 => 'EMF image',
        1 => 'EMF: Enhanced MetaFile',
      ),
      'e' =>
      array (
        0 => 'emf',
      ),
    ),
    'image/fax-g3' =>
    array (
      'a' =>
      array (
        0 => 'image/g3fax',
      ),
      'desc' =>
      array (
        0 => 'CCITT G3 fax image',
      ),
      'e' =>
      array (
        0 => 'g3',
      ),
    ),
    'image/fits' =>
    array (
      'a' =>
      array (
        0 => 'image/x-fits',
      ),
      'desc' =>
      array (
        0 => 'FITS document',
        1 => 'FITS: Flexible Image Transport System',
      ),
      'e' =>
      array (
        0 => 'fits',
      ),
    ),
    'image/gif' =>
    array (
      'desc' =>
      array (
        0 => 'GIF image',
      ),
      'e' =>
      array (
        0 => 'gif',
      ),
    ),
    'image/heif' =>
    array (
      'a' =>
      array (
        0 => 'image/heic',
        1 => 'image/heic-sequence',
        2 => 'image/heif-sequence',
      ),
      'desc' =>
      array (
        0 => 'HEIF image',
        1 => 'HEIF: High Efficiency Image File',
      ),
      'e' =>
      array (
        0 => 'heic',
        1 => 'heif',
      ),
    ),
    'image/ief' =>
    array (
      'desc' =>
      array (
        0 => 'IEF image',
      ),
      'e' =>
      array (
        0 => 'ief',
      ),
    ),
    'image/jp2' =>
    array (
      'a' =>
      array (
        0 => 'image/jpeg2000',
        1 => 'image/jpeg2000-image',
        2 => 'image/x-jpeg2000-image',
      ),
      'desc' =>
      array (
        0 => 'JPEG-2000 JP2 image',
        1 => 'JP2: JPEG-2000',
      ),
      'e' =>
      array (
        0 => 'jp2',
        1 => 'jpg2',
      ),
    ),
    'image/jpeg' =>
    array (
      'a' =>
      array (
        0 => 'image/pjpeg',
      ),
      'desc' =>
      array (
        0 => 'JPEG image',
      ),
      'e' =>
      array (
        0 => 'jpeg',
        1 => 'jpg',
        2 => 'jpe',
      ),
    ),
    'image/jpm' =>
    array (
      'desc' =>
      array (
        0 => 'JPEG-2000 JPM image',
        1 => 'JPM: JPEG-2000 Mixed',
      ),
      'e' =>
      array (
        0 => 'jpm',
        1 => 'jpgm',
      ),
    ),
    'image/jpx' =>
    array (
      'desc' =>
      array (
        0 => 'JPEG-2000 JPX image',
        1 => 'JPX: JPEG-2000 eXtended',
      ),
      'e' =>
      array (
        0 => 'jpf',
        1 => 'jpx',
      ),
    ),
    'image/ktx' =>
    array (
      'desc' =>
      array (
        0 => 'Khronos texture image',
      ),
      'e' =>
      array (
        0 => 'ktx',
      ),
    ),
    'image/openraster' =>
    array (
      'desc' =>
      array (
        0 => 'OpenRaster image',
      ),
      'e' =>
      array (
        0 => 'ora',
      ),
    ),
    'image/png' =>
    array (
      'desc' =>
      array (
        0 => 'PNG image',
      ),
      'e' =>
      array (
        0 => 'png',
      ),
    ),
    'image/prs.btif' =>
    array (
      'e' =>
      array (
        0 => 'btif',
      ),
    ),
    'image/rle' =>
    array (
      'desc' =>
      array (
        0 => 'RLE bitmap image',
        1 => 'RLE: Run Length Encoded',
      ),
      'e' =>
      array (
        0 => 'rle',
      ),
    ),
    'image/sgi' =>
    array (
      'e' =>
      array (
        0 => 'sgi',
      ),
    ),
    'image/svg+xml' =>
    array (
      'desc' =>
      array (
        0 => 'SVG image',
        1 => 'SVG: Scalable Vector Graphics',
      ),
      'e' =>
      array (
        0 => 'svg',
        1 => 'svgz',
      ),
    ),
    'image/svg+xml-compressed' =>
    array (
      'desc' =>
      array (
        0 => 'compressed SVG image',
        1 => 'SVG: Scalable Vector Graphics',
      ),
      'e' =>
      array (
        0 => 'svgz',
      ),
    ),
    'image/tiff' =>
    array (
      'desc' =>
      array (
        0 => 'TIFF image',
        1 => 'TIFF: Tagged Image File Format',
      ),
      'e' =>
      array (
        0 => 'tiff',
        1 => 'tif',
      ),
    ),
    'image/vnd.adobe.photoshop' =>
    array (
      'a' =>
      array (
        0 => 'image/psd',
        1 => 'image/x-psd',
        2 => 'image/photoshop',
        3 => 'image/x-photoshop',
        4 => 'application/photoshop',
        5 => 'application/x-photoshop',
      ),
      'desc' =>
      array (
        0 => 'Photoshop image',
      ),
      'e' =>
      array (
        0 => 'psd',
      ),
    ),
    'image/vnd.dece.graphic' =>
    array (
      'e' =>
      array (
        0 => 'uvi',
        1 => 'uvvi',
        2 => 'uvg',
        3 => 'uvvg',
      ),
    ),
    'image/vnd.djvu' =>
    array (
      'a' =>
      array (
        0 => 'image/x-djvu',
        1 => 'image/x.djvu',
      ),
      'desc' =>
      array (
        0 => 'DjVu image',
      ),
      'e' =>
      array (
        0 => 'djvu',
        1 => 'djv',
      ),
    ),
    'image/vnd.djvu+multipage' =>
    array (
      'desc' =>
      array (
        0 => 'DjVu document',
      ),
      'e' =>
      array (
        0 => 'djvu',
        1 => 'djv',
      ),
    ),
    'image/vnd.dvb.subtitle' =>
    array (
      'e' =>
      array (
        0 => 'sub',
      ),
    ),
    'image/vnd.dwg' =>
    array (
      'desc' =>
      array (
        0 => 'AutoCAD image',
      ),
      'e' =>
      array (
        0 => 'dwg',
      ),
    ),
    'image/vnd.dxf' =>
    array (
      'desc' =>
      array (
        0 => 'DXF vector image',
      ),
      'e' =>
      array (
        0 => 'dxf',
      ),
    ),
    'image/vnd.fastbidsheet' =>
    array (
      'e' =>
      array (
        0 => 'fbs',
      ),
    ),
    'image/vnd.fpx' =>
    array (
      'e' =>
      array (
        0 => 'fpx',
      ),
    ),
    'image/vnd.fst' =>
    array (
      'e' =>
      array (
        0 => 'fst',
      ),
    ),
    'image/vnd.fujixerox.edmics-mmr' =>
    array (
      'e' =>
      array (
        0 => 'mmr',
      ),
    ),
    'image/vnd.fujixerox.edmics-rlc' =>
    array (
      'e' =>
      array (
        0 => 'rlc',
      ),
    ),
    'image/vnd.microsoft.icon' =>
    array (
      'a' =>
      array (
        0 => 'application/ico',
        1 => 'image/ico',
        2 => 'image/icon',
        3 => 'image/x-ico',
        4 => 'image/x-icon',
        5 => 'text/ico',
      ),
      'desc' =>
      array (
        0 => 'Windows icon',
      ),
      'e' =>
      array (
        0 => 'ico',
      ),
    ),
    'image/vnd.ms-modi' =>
    array (
      'desc' =>
      array (
        0 => 'MDI image',
        1 => 'MDI: Microsoft Document Imaging',
      ),
      'e' =>
      array (
        0 => 'mdi',
      ),
    ),
    'image/vnd.ms-photo' =>
    array (
      'e' =>
      array (
        0 => 'wdp',
      ),
    ),
    'image/vnd.net-fpx' =>
    array (
      'e' =>
      array (
        0 => 'npx',
      ),
    ),
    'image/vnd.rn-realpix' =>
    array (
      'desc' =>
      array (
        0 => 'RealPix document',
      ),
      'e' =>
      array (
        0 => 'rp',
      ),
    ),
    'image/vnd.wap.wbmp' =>
    array (
      'desc' =>
      array (
        0 => 'WBMP image',
        1 => 'WBMP: WAP bitmap',
      ),
      'e' =>
      array (
        0 => 'wbmp',
      ),
    ),
    'image/vnd.xiff' =>
    array (
      'e' =>
      array (
        0 => 'xif',
      ),
    ),
    'image/vnd.zbrush.pcx' =>
    array (
      'a' =>
      array (
        0 => 'image/x-pcx',
      ),
      'desc' =>
      array (
        0 => 'PCX image',
        1 => 'PCX: PiCture eXchange',
      ),
      'e' =>
      array (
        0 => 'pcx',
      ),
    ),
    'image/webp' =>
    array (
      'desc' =>
      array (
        0 => 'WebP image',
      ),
      'e' =>
      array (
        0 => 'webp',
      ),
    ),
    'image/wmf' =>
    array (
      'a' =>
      array (
        0 => 'image/x-wmf',
        1 => 'image/x-win-metafile',
        2 => 'application/x-wmf',
        3 => 'application/wmf',
        4 => 'application/x-msmetafile',
      ),
      'desc' =>
      array (
        0 => 'WMF image',
        1 => 'WMF: Windows Metafile',
      ),
      'e' =>
      array (
        0 => 'wmf',
        1 => 'emz',
      ),
    ),
    'image/x-3ds' =>
    array (
      'desc' =>
      array (
        0 => '3D Studio image',
      ),
      'e' =>
      array (
        0 => '3ds',
      ),
    ),
    'image/x-adobe-dng' =>
    array (
      'desc' =>
      array (
        0 => 'Adobe DNG negative',
        1 => 'DNG: Digital Negative',
      ),
      'e' =>
      array (
        0 => 'dng',
      ),
    ),
    'image/x-applix-graphics' =>
    array (
      'desc' =>
      array (
        0 => 'Applix Graphics image',
      ),
      'e' =>
      array (
        0 => 'ag',
      ),
    ),
    'image/x-bzeps' =>
    array (
      'desc' =>
      array (
        0 => 'EPS image (bzip-compressed)',
      ),
      'e' =>
      array (
        0 => 'eps.bz2',
        1 => 'epsi.bz2',
        2 => 'epsf.bz2',
      ),
    ),
    'image/x-canon-cr2' =>
    array (
      'desc' =>
      array (
        0 => 'Canon CR2 raw image',
        1 => 'CR2: Canon Raw 2',
      ),
      'e' =>
      array (
        0 => 'cr2',
      ),
    ),
    'image/x-canon-crw' =>
    array (
      'desc' =>
      array (
        0 => 'Canon CRW raw image',
        1 => 'CRW: Canon RaW',
      ),
      'e' =>
      array (
        0 => 'crw',
      ),
    ),
    'image/x-cmu-raster' =>
    array (
      'desc' =>
      array (
        0 => 'CMU raster image',
      ),
      'e' =>
      array (
        0 => 'ras',
      ),
    ),
    'image/x-cmx' =>
    array (
      'e' =>
      array (
        0 => 'cmx',
      ),
    ),
    'image/x-compressed-xcf' =>
    array (
      'desc' =>
      array (
        0 => 'compressed GIMP image',
      ),
      'e' =>
      array (
        0 => 'xcf.gz',
        1 => 'xcf.bz2',
      ),
    ),
    'image/x-dds' =>
    array (
      'desc' =>
      array (
        0 => 'DirectDraw surface',
      ),
      'e' =>
      array (
        0 => 'dds',
      ),
    ),
    'image/x-eps' =>
    array (
      'desc' =>
      array (
        0 => 'EPS image',
        1 => 'EPS: Encapsulated PostScript',
      ),
      'e' =>
      array (
        0 => 'eps',
        1 => 'epsi',
        2 => 'epsf',
      ),
    ),
    'image/x-exr' =>
    array (
      'desc' =>
      array (
        0 => 'EXR image',
      ),
      'e' =>
      array (
        0 => 'exr',
      ),
    ),
    'image/x-freehand' =>
    array (
      'e' =>
      array (
        0 => 'fh',
        1 => 'fhc',
        2 => 'fh4',
        3 => 'fh5',
        4 => 'fh7',
      ),
    ),
    'image/x-fuji-raf' =>
    array (
      'desc' =>
      array (
        0 => 'Fuji RAF raw image',
        1 => 'RAF: RAw Format',
      ),
      'e' =>
      array (
        0 => 'raf',
      ),
    ),
    'image/x-gimp-gbr' =>
    array (
      'desc' =>
      array (
        0 => 'GIMP brush',
      ),
      'e' =>
      array (
        0 => 'gbr',
      ),
    ),
    'image/x-gimp-gih' =>
    array (
      'desc' =>
      array (
        0 => 'GIMP brush pipe',
      ),
      'e' =>
      array (
        0 => 'gih',
      ),
    ),
    'image/x-gimp-pat' =>
    array (
      'desc' =>
      array (
        0 => 'GIMP pattern',
      ),
      'e' =>
      array (
        0 => 'pat',
      ),
    ),
    'image/x-gzeps' =>
    array (
      'desc' =>
      array (
        0 => 'EPS image (gzip-compressed)',
      ),
      'e' =>
      array (
        0 => 'eps.gz',
        1 => 'epsi.gz',
        2 => 'epsf.gz',
      ),
    ),
    'image/x-icns' =>
    array (
      'desc' =>
      array (
        0 => 'MacOS X icon',
      ),
      'e' =>
      array (
        0 => 'icns',
      ),
    ),
    'image/x-ilbm' =>
    array (
      'a' =>
      array (
        0 => 'image/x-iff',
      ),
      'desc' =>
      array (
        0 => 'ILBM image',
        1 => 'ILBM: InterLeaved BitMap',
      ),
      'e' =>
      array (
        0 => 'iff',
        1 => 'ilbm',
        2 => 'lbm',
      ),
    ),
    'image/x-jng' =>
    array (
      'desc' =>
      array (
        0 => 'JNG image',
        1 => 'JNG: JPEG Network Graphics',
      ),
      'e' =>
      array (
        0 => 'jng',
      ),
    ),
    'image/x-jp2-codestream' =>
    array (
      'desc' =>
      array (
        0 => 'JPEG-2000 codestream',
      ),
      'e' =>
      array (
        0 => 'j2c',
        1 => 'j2k',
        2 => 'jpc',
      ),
    ),
    'image/x-kodak-dcr' =>
    array (
      'desc' =>
      array (
        0 => 'Kodak DCR raw image',
        1 => 'DCR: Digital Camera Raw',
      ),
      'e' =>
      array (
        0 => 'dcr',
      ),
    ),
    'image/x-kodak-k25' =>
    array (
      'desc' =>
      array (
        0 => 'Kodak K25 raw image',
        1 => 'K25: Kodak DC25',
      ),
      'e' =>
      array (
        0 => 'k25',
      ),
    ),
    'image/x-kodak-kdc' =>
    array (
      'desc' =>
      array (
        0 => 'Kodak KDC raw image',
        1 => 'KDC: Kodak Digital Camera',
      ),
      'e' =>
      array (
        0 => 'kdc',
      ),
    ),
    'image/x-lwo' =>
    array (
      'desc' =>
      array (
        0 => 'LightWave object',
      ),
      'e' =>
      array (
        0 => 'lwo',
        1 => 'lwob',
      ),
    ),
    'image/x-lws' =>
    array (
      'desc' =>
      array (
        0 => 'LightWave scene',
      ),
      'e' =>
      array (
        0 => 'lws',
      ),
    ),
    'image/x-macpaint' =>
    array (
      'desc' =>
      array (
        0 => 'MacPaint Bitmap image',
      ),
      'e' =>
      array (
        0 => 'pntg',
      ),
    ),
    'image/x-minolta-mrw' =>
    array (
      'desc' =>
      array (
        0 => 'Minolta MRW raw image',
        1 => 'MRW: Minolta RaW',
      ),
      'e' =>
      array (
        0 => 'mrw',
      ),
    ),
    'image/x-mrsid-image' =>
    array (
      'e' =>
      array (
        0 => 'sid',
      ),
    ),
    'image/x-msod' =>
    array (
      'desc' =>
      array (
        0 => 'Office drawing',
      ),
      'e' =>
      array (
        0 => 'msod',
      ),
    ),
    'image/x-nikon-nef' =>
    array (
      'desc' =>
      array (
        0 => 'Nikon NEF raw image',
        1 => 'NEF: Nikon Electronic Format',
      ),
      'e' =>
      array (
        0 => 'nef',
      ),
    ),
    'image/x-olympus-orf' =>
    array (
      'desc' =>
      array (
        0 => 'Olympus ORF raw image',
        1 => 'ORF: Olympus Raw Format',
      ),
      'e' =>
      array (
        0 => 'orf',
      ),
    ),
    'image/x-panasonic-rw' =>
    array (
      'a' =>
      array (
        0 => 'image/x-panasonic-raw',
      ),
      'desc' =>
      array (
        0 => 'Panasonic raw image',
      ),
      'e' =>
      array (
        0 => 'raw',
      ),
    ),
    'image/x-panasonic-rw2' =>
    array (
      'a' =>
      array (
        0 => 'image/x-panasonic-raw2',
      ),
      'desc' =>
      array (
        0 => 'Panasonic raw image',
      ),
      'e' =>
      array (
        0 => 'rw2',
      ),
    ),
    'image/x-pentax-pef' =>
    array (
      'desc' =>
      array (
        0 => 'Pentax PEF raw image',
        1 => 'PEF: Pentax Electronic Format',
      ),
      'e' =>
      array (
        0 => 'pef',
      ),
    ),
    'image/x-photo-cd' =>
    array (
      'desc' =>
      array (
        0 => 'PCD image',
        1 => 'PCD: PhotoCD',
      ),
      'e' =>
      array (
        0 => 'pcd',
      ),
    ),
    'image/x-pict' =>
    array (
      'desc' =>
      array (
        0 => 'Macintosh Quickdraw/PICT drawing',
      ),
      'e' =>
      array (
        0 => 'pic',
        1 => 'pct',
        2 => 'pict',
        3 => 'pict1',
        4 => 'pict2',
      ),
    ),
    'image/x-portable-anymap' =>
    array (
      'desc' =>
      array (
        0 => 'PNM image',
      ),
      'e' =>
      array (
        0 => 'pnm',
      ),
    ),
    'image/x-portable-bitmap' =>
    array (
      'desc' =>
      array (
        0 => 'PBM image',
        1 => 'PBM: Portable BitMap',
      ),
      'e' =>
      array (
        0 => 'pbm',
      ),
    ),
    'image/x-portable-graymap' =>
    array (
      'desc' =>
      array (
        0 => 'PGM image',
        1 => 'PGM: Portable GrayMap',
      ),
      'e' =>
      array (
        0 => 'pgm',
      ),
    ),
    'image/x-portable-pixmap' =>
    array (
      'desc' =>
      array (
        0 => 'PPM image',
        1 => 'PPM: Portable PixMap',
      ),
      'e' =>
      array (
        0 => 'ppm',
      ),
    ),
    'image/x-quicktime' =>
    array (
      'desc' =>
      array (
        0 => 'QuickTime image',
      ),
      'e' =>
      array (
        0 => 'qtif',
        1 => 'qif',
      ),
    ),
    'image/x-rgb' =>
    array (
      'desc' =>
      array (
        0 => 'RGB image',
      ),
      'e' =>
      array (
        0 => 'rgb',
      ),
    ),
    'image/x-sgi' =>
    array (
      'desc' =>
      array (
        0 => 'SGI image',
      ),
      'e' =>
      array (
        0 => 'sgi',
      ),
    ),
    'image/x-sigma-x3f' =>
    array (
      'desc' =>
      array (
        0 => 'Sigma X3F raw image',
        1 => 'X3F: X3 Foveon',
      ),
      'e' =>
      array (
        0 => 'x3f',
      ),
    ),
    'image/x-skencil' =>
    array (
      'desc' =>
      array (
        0 => 'Skencil document',
      ),
      'e' =>
      array (
        0 => 'sk',
        1 => 'sk1',
      ),
    ),
    'image/x-sony-arw' =>
    array (
      'desc' =>
      array (
        0 => 'Sony ARW raw image',
        1 => 'ARW: Alpha Raw format',
      ),
      'e' =>
      array (
        0 => 'arw',
      ),
    ),
    'image/x-sony-sr2' =>
    array (
      'desc' =>
      array (
        0 => 'Sony SR2 raw image',
        1 => 'SR2: Sony Raw format 2',
      ),
      'e' =>
      array (
        0 => 'sr2',
      ),
    ),
    'image/x-sony-srf' =>
    array (
      'desc' =>
      array (
        0 => 'Sony SRF raw image',
        1 => 'SRF: Sony Raw Format',
      ),
      'e' =>
      array (
        0 => 'srf',
      ),
    ),
    'image/x-sun-raster' =>
    array (
      'desc' =>
      array (
        0 => 'Sun raster image',
      ),
      'e' =>
      array (
        0 => 'sun',
      ),
    ),
    'image/x-tga' =>
    array (
      'a' =>
      array (
        0 => 'image/x-icb',
      ),
      'desc' =>
      array (
        0 => 'TGA image',
        1 => 'TGA: Truevision Graphics Adapter',
      ),
      'e' =>
      array (
        0 => 'tga',
        1 => 'icb',
        2 => 'tpic',
        3 => 'vda',
        4 => 'vst',
      ),
    ),
    'image/x-win-bitmap' =>
    array (
      'desc' =>
      array (
        0 => 'Windows cursor',
      ),
      'e' =>
      array (
        0 => 'cur',
      ),
    ),
    'image/x-xbitmap' =>
    array (
      'desc' =>
      array (
        0 => 'XBM image',
        1 => 'XBM: X BitMap',
      ),
      'e' =>
      array (
        0 => 'xbm',
      ),
    ),
    'image/x-xcf' =>
    array (
      'desc' =>
      array (
        0 => 'GIMP image',
      ),
      'e' =>
      array (
        0 => 'xcf',
      ),
    ),
    'image/x-xfig' =>
    array (
      'desc' =>
      array (
        0 => 'XFig image',
      ),
      'e' =>
      array (
        0 => 'fig',
      ),
    ),
    'image/x-xpixmap' =>
    array (
      'a' =>
      array (
        0 => 'image/x-xpm',
      ),
      'desc' =>
      array (
        0 => 'XPM image',
        1 => 'XPM: X PixMap',
      ),
      'e' =>
      array (
        0 => 'xpm',
      ),
    ),
    'image/x-xwindowdump' =>
    array (
      'desc' =>
      array (
        0 => 'X window image',
      ),
      'e' =>
      array (
        0 => 'xwd',
      ),
    ),
    'message/rfc822' =>
    array (
      'desc' =>
      array (
        0 => 'email message',
      ),
      'e' =>
      array (
        0 => 'eml',
        1 => 'mime',
      ),
    ),
    'model/iges' =>
    array (
      'desc' =>
      array (
        0 => 'IGES document',
        1 => 'IGES: Initial Graphics Exchange Specification',
      ),
      'e' =>
      array (
        0 => 'igs',
        1 => 'iges',
      ),
    ),
    'model/mesh' =>
    array (
      'e' =>
      array (
        0 => 'msh',
        1 => 'mesh',
        2 => 'silo',
      ),
    ),
    'model/stl' =>
    array (
      'a' =>
      array (
        0 => 'model/x.stl-ascii',
        1 => 'model/x.stl-binary',
      ),
      'desc' =>
      array (
        0 => 'STL 3D model',
        1 => 'STL: StereoLithography',
      ),
      'e' =>
      array (
        0 => 'stl',
      ),
    ),
    'model/vnd.collada+xml' =>
    array (
      'e' =>
      array (
        0 => 'dae',
      ),
    ),
    'model/vnd.dwf' =>
    array (
      'e' =>
      array (
        0 => 'dwf',
      ),
    ),
    'model/vnd.gdl' =>
    array (
      'e' =>
      array (
        0 => 'gdl',
      ),
    ),
    'model/vnd.gtw' =>
    array (
      'e' =>
      array (
        0 => 'gtw',
      ),
    ),
    'model/vnd.mts' =>
    array (
      'e' =>
      array (
        0 => 'mts',
      ),
    ),
    'model/vnd.vtu' =>
    array (
      'e' =>
      array (
        0 => 'vtu',
      ),
    ),
    'model/vrml' =>
    array (
      'desc' =>
      array (
        0 => 'VRML document',
        1 => 'VRML: Virtual Reality Modeling Language',
      ),
      'e' =>
      array (
        0 => 'wrl',
        1 => 'vrml',
        2 => 'vrm',
      ),
    ),
    'model/x3d+binary' =>
    array (
      'e' =>
      array (
        0 => 'x3db',
        1 => 'x3dbz',
      ),
    ),
    'model/x3d+vrml' =>
    array (
      'e' =>
      array (
        0 => 'x3dv',
        1 => 'x3dvz',
      ),
    ),
    'model/x3d+xml' =>
    array (
      'e' =>
      array (
        0 => 'x3d',
        1 => 'x3dz',
      ),
    ),
    'text/cache-manifest' =>
    array (
      'desc' =>
      array (
        0 => 'Web application cache file',
      ),
      'e' =>
      array (
        0 => 'appcache',
        1 => 'manifest',
      ),
    ),
    'text/calendar' =>
    array (
      'a' =>
      array (
        0 => 'text/x-vcalendar',
        1 => 'application/ics',
      ),
      'desc' =>
      array (
        0 => 'VCS/ICS calendar',
        1 => 'VCS/ICS: vCalendar/iCalendar',
      ),
      'e' =>
      array (
        0 => 'ics',
        1 => 'ifb',
        2 => 'vcs',
      ),
    ),
    'text/css' =>
    array (
      'desc' =>
      array (
        0 => 'CSS stylesheet',
        1 => 'CSS: Cascading Style Sheets',
      ),
      'e' =>
      array (
        0 => 'css',
      ),
    ),
    'text/csv' =>
    array (
      'a' =>
      array (
        0 => 'text/x-comma-separated-values',
        1 => 'text/x-csv',
      ),
      'desc' =>
      array (
        0 => 'CSV document',
        1 => 'CSV: Comma Separated Values',
      ),
      'e' =>
      array (
        0 => 'csv',
      ),
    ),
    'text/csv-schema' =>
    array (
      'desc' =>
      array (
        0 => 'CSV Schema document',
        1 => 'CSV: Comma Separated Values',
      ),
      'e' =>
      array (
        0 => 'csvs',
      ),
    ),
    'text/html' =>
    array (
      'desc' =>
      array (
        0 => 'HTML document',
        1 => 'HTML: HyperText Markup Language',
      ),
      'e' =>
      array (
        0 => 'html',
        1 => 'htm',
      ),
    ),
    'text/markdown' =>
    array (
      'a' =>
      array (
        0 => 'text/x-markdown',
      ),
      'desc' =>
      array (
        0 => 'Markdown document',
      ),
      'e' =>
      array (
        0 => 'md',
        1 => 'mkd',
        2 => 'markdown',
      ),
    ),
    'text/n3' =>
    array (
      'e' =>
      array (
        0 => 'n3',
      ),
    ),
    'text/plain' =>
    array (
      'desc' =>
      array (
        0 => 'plain text document',
      ),
      'e' =>
      array (
        0 => 'txt',
        1 => 'text',
        2 => 'conf',
        3 => 'def',
        4 => 'list',
        5 => 'log',
        6 => 'in',
        7 => 'asc',
      ),
    ),
    'text/prs.lines.tag' =>
    array (
      'e' =>
      array (
        0 => 'dsc',
      ),
    ),
    'text/richtext' =>
    array (
      'desc' =>
      array (
        0 => 'rich text document',
      ),
      'e' =>
      array (
        0 => 'rtx',
      ),
    ),
    'text/rust' =>
    array (
      'desc' =>
      array (
        0 => 'Rust source code',
      ),
      'e' =>
      array (
        0 => 'rs',
      ),
    ),
    'text/sgml' =>
    array (
      'desc' =>
      array (
        0 => 'SGML document',
        1 => 'SGML: Standard Generalized Markup Language',
      ),
      'e' =>
      array (
        0 => 'sgml',
        1 => 'sgm',
      ),
    ),
    'text/spreadsheet' =>
    array (
      'desc' =>
      array (
        0 => 'spreadsheet interchange document',
      ),
      'e' =>
      array (
        0 => 'sylk',
        1 => 'slk',
      ),
    ),
    'text/tab-separated-values' =>
    array (
      'desc' =>
      array (
        0 => 'TSV document',
        1 => 'TSV: Tab Separated Values',
      ),
      'e' =>
      array (
        0 => 'tsv',
      ),
    ),
    'text/tcl' =>
    array (
      'a' =>
      array (
        0 => 'text/x-tcl',
      ),
      'desc' =>
      array (
        0 => 'Tcl script',
      ),
      'e' =>
      array (
        0 => 'tcl',
        1 => 'tk',
      ),
    ),
    'text/troff' =>
    array (
      'a' =>
      array (
        0 => 'application/x-troff',
        1 => 'text/x-troff',
      ),
      'desc' =>
      array (
        0 => 'Troff document',
      ),
      'e' =>
      array (
        0 => 't',
        1 => 'tr',
        2 => 'roff',
        3 => 'man',
        4 => 'me',
        5 => 'ms',
      ),
    ),
    'text/turtle' =>
    array (
      'desc' =>
      array (
        0 => 'Turtle document',
      ),
      'e' =>
      array (
        0 => 'ttl',
      ),
    ),
    'text/uri-list' =>
    array (
      'e' =>
      array (
        0 => 'uri',
        1 => 'uris',
        2 => 'urls',
      ),
    ),
    'text/vbscript' =>
    array (
      'a' =>
      array (
        0 => 'text/vbs',
      ),
      'desc' =>
      array (
        0 => 'VBScript program',
      ),
      'e' =>
      array (
        0 => 'vbs',
      ),
    ),
    'text/vcard' =>
    array (
      'a' =>
      array (
        0 => 'text/directory',
        1 => 'text/x-vcard',
      ),
      'desc' =>
      array (
        0 => 'electronic business card',
      ),
      'e' =>
      array (
        0 => 'vcard',
        1 => 'vcf',
        2 => 'vct',
        3 => 'gcrd',
      ),
    ),
    'text/vnd.curl' =>
    array (
      'e' =>
      array (
        0 => 'curl',
      ),
    ),
    'text/vnd.curl.dcurl' =>
    array (
      'e' =>
      array (
        0 => 'dcurl',
      ),
    ),
    'text/vnd.curl.mcurl' =>
    array (
      'e' =>
      array (
        0 => 'mcurl',
      ),
    ),
    'text/vnd.curl.scurl' =>
    array (
      'e' =>
      array (
        0 => 'scurl',
      ),
    ),
    'text/vnd.dvb.subtitle' =>
    array (
      'e' =>
      array (
        0 => 'sub',
      ),
    ),
    'text/vnd.fly' =>
    array (
      'e' =>
      array (
        0 => 'fly',
      ),
    ),
    'text/vnd.fmi.flexstor' =>
    array (
      'e' =>
      array (
        0 => 'flx',
      ),
    ),
    'text/vnd.graphviz' =>
    array (
      'desc' =>
      array (
        0 => 'Graphviz DOT graph',
      ),
      'e' =>
      array (
        0 => 'gv',
        1 => 'dot',
      ),
    ),
    'text/vnd.in3d.3dml' =>
    array (
      'e' =>
      array (
        0 => '3dml',
      ),
    ),
    'text/vnd.in3d.spot' =>
    array (
      'e' =>
      array (
        0 => 'spot',
      ),
    ),
    'text/vnd.qt.linguist' =>
    array (
      'a' =>
      array (
        0 => 'application/x-linguist',
        1 => 'text/vnd.trolltech.linguist',
      ),
      'desc' =>
      array (
        0 => 'message catalog',
      ),
      'e' =>
      array (
        0 => 'ts',
      ),
    ),
    'text/vnd.rn-realtext' =>
    array (
      'desc' =>
      array (
        0 => 'RealText document',
      ),
      'e' =>
      array (
        0 => 'rt',
      ),
    ),
    'text/vnd.senx.warpscript' =>
    array (
      'desc' =>
      array (
        0 => 'WarpScript source code',
      ),
      'e' =>
      array (
        0 => 'mc2',
      ),
    ),
    'text/vnd.sun.j2me.app-descriptor' =>
    array (
      'desc' =>
      array (
        0 => 'JAD document',
        1 => 'JAD: Java Application Descriptor',
      ),
      'e' =>
      array (
        0 => 'jad',
      ),
    ),
    'text/vnd.wap.wml' =>
    array (
      'desc' =>
      array (
        0 => 'WML document',
        1 => 'WML: Wireless Markup Language',
      ),
      'e' =>
      array (
        0 => 'wml',
      ),
    ),
    'text/vnd.wap.wmlscript' =>
    array (
      'desc' =>
      array (
        0 => 'WMLScript program',
      ),
      'e' =>
      array (
        0 => 'wmls',
      ),
    ),
    'text/vtt' =>
    array (
      'desc' =>
      array (
        0 => 'WebVTT subtitles',
        1 => 'VTT: Video Text Tracks',
      ),
      'e' =>
      array (
        0 => 'vtt',
      ),
    ),
    'text/x-adasrc' =>
    array (
      'desc' =>
      array (
        0 => 'Ada source code',
      ),
      'e' =>
      array (
        0 => 'adb',
        1 => 'ads',
      ),
    ),
    'text/x-asm' =>
    array (
      'e' =>
      array (
        0 => 's',
        1 => 'asm',
      ),
    ),
    'text/x-bibtex' =>
    array (
      'desc' =>
      array (
        0 => 'BibTeX document',
      ),
      'e' =>
      array (
        0 => 'bib',
      ),
    ),
    'text/x-c++hdr' =>
    array (
      'desc' =>
      array (
        0 => 'C++ header',
      ),
      'e' =>
      array (
        0 => 'hh',
        1 => 'hp',
        2 => 'hpp',
        3 => 'h++',
        4 => 'hxx',
      ),
    ),
    'text/x-c++src' =>
    array (
      'desc' =>
      array (
        0 => 'C++ source code',
      ),
      'e' =>
      array (
        0 => 'cpp',
        1 => 'cxx',
        2 => 'cc',
        3 => 'c',
        4 => 'c++',
      ),
    ),
    'text/x-chdr' =>
    array (
      'desc' =>
      array (
        0 => 'C header',
      ),
      'e' =>
      array (
        0 => 'h',
      ),
    ),
    'text/x-cmake' =>
    array (
      'desc' =>
      array (
        0 => 'CMake source code',
      ),
      'e' =>
      array (
        0 => 'cmake',
      ),
    ),
    'text/x-cobol' =>
    array (
      'desc' =>
      array (
        0 => 'COBOL source code',
        1 => 'COBOL: COmmon Business Oriented Language',
      ),
      'e' =>
      array (
        0 => 'cbl',
        1 => 'cob',
      ),
    ),
    'text/x-common-lisp' =>
    array (
      'desc' =>
      array (
        0 => 'Common Lisp source code',
      ),
      'e' =>
      array (
        0 => 'asd',
        1 => 'fasl',
        2 => 'lisp',
        3 => 'ros',
      ),
    ),
    'text/x-csharp' =>
    array (
      'desc' =>
      array (
        0 => 'C# source code',
      ),
      'e' =>
      array (
        0 => 'cs',
      ),
    ),
    'text/x-csrc' =>
    array (
      'a' =>
      array (
        0 => 'text/x-c',
      ),
      'desc' =>
      array (
        0 => 'C source code',
      ),
      'e' =>
      array (
        0 => 'c',
        1 => 'dic',
      ),
    ),
    'text/x-dbus-service' =>
    array (
      'desc' =>
      array (
        0 => 'D-Bus service file',
      ),
      'e' =>
      array (
        0 => 'service',
      ),
    ),
    'text/x-dcl' =>
    array (
      'desc' =>
      array (
        0 => 'DCL script',
        1 => 'DCL: Data Conversion Laboratory',
      ),
      'e' =>
      array (
        0 => 'dcl',
      ),
    ),
    'text/x-dsl' =>
    array (
      'desc' =>
      array (
        0 => 'DSSSL document',
        1 => 'DSSSL: Document Style Semantics and Specification Language',
      ),
      'e' =>
      array (
        0 => 'dsl',
      ),
    ),
    'text/x-dsrc' =>
    array (
      'desc' =>
      array (
        0 => 'D source code',
      ),
      'e' =>
      array (
        0 => 'd',
        1 => 'di',
      ),
    ),
    'text/x-eiffel' =>
    array (
      'desc' =>
      array (
        0 => 'Eiffel source code',
      ),
      'e' =>
      array (
        0 => 'e',
        1 => 'eif',
      ),
    ),
    'text/x-emacs-lisp' =>
    array (
      'desc' =>
      array (
        0 => 'Emacs Lisp source code',
      ),
      'e' =>
      array (
        0 => 'el',
      ),
    ),
    'text/x-erlang' =>
    array (
      'desc' =>
      array (
        0 => 'Erlang source code',
      ),
      'e' =>
      array (
        0 => 'erl',
      ),
    ),
    'text/x-fortran' =>
    array (
      'desc' =>
      array (
        0 => 'Fortran source code',
      ),
      'e' =>
      array (
        0 => 'f',
        1 => 'for',
        2 => 'f77',
        3 => 'f90',
        4 => 'f95',
      ),
    ),
    'text/x-genie' =>
    array (
      'desc' =>
      array (
        0 => 'Genie source code',
      ),
      'e' =>
      array (
        0 => 'gs',
      ),
    ),
    'text/x-gettext-translation' =>
    array (
      'a' =>
      array (
        0 => 'text/x-po',
        1 => 'application/x-gettext',
      ),
      'desc' =>
      array (
        0 => 'translation file',
      ),
      'e' =>
      array (
        0 => 'po',
      ),
    ),
    'text/x-gettext-translation-template' =>
    array (
      'a' =>
      array (
        0 => 'text/x-pot',
      ),
      'desc' =>
      array (
        0 => 'translation template',
      ),
      'e' =>
      array (
        0 => 'pot',
      ),
    ),
    'text/x-gherkin' =>
    array (
      'desc' =>
      array (
        0 => 'Gherkin document',
      ),
      'e' =>
      array (
        0 => 'feature',
      ),
    ),
    'text/x-go' =>
    array (
      'desc' =>
      array (
        0 => 'Go source code',
      ),
      'e' =>
      array (
        0 => 'go',
      ),
    ),
    'text/x-google-video-pointer' =>
    array (
      'a' =>
      array (
        0 => 'text/google-video-pointer',
      ),
      'desc' =>
      array (
        0 => 'Google Video Pointer shortcut',
      ),
      'e' =>
      array (
        0 => 'gvp',
      ),
    ),
    'text/x-gradle' =>
    array (
      'desc' =>
      array (
        0 => 'Gradle scripts',
      ),
      'e' =>
      array (
        0 => 'gradle',
      ),
    ),
    'text/x-groovy' =>
    array (
      'desc' =>
      array (
        0 => 'Groovy source code',
      ),
      'e' =>
      array (
        0 => 'groovy',
        1 => 'gvy',
        2 => 'gy',
        3 => 'gsh',
      ),
    ),
    'text/x-haskell' =>
    array (
      'desc' =>
      array (
        0 => 'Haskell source code',
      ),
      'e' =>
      array (
        0 => 'hs',
      ),
    ),
    'text/x-idl' =>
    array (
      'desc' =>
      array (
        0 => 'IDL document',
        1 => 'IDL: Interface Definition Language',
      ),
      'e' =>
      array (
        0 => 'idl',
      ),
    ),
    'text/x-imelody' =>
    array (
      'a' =>
      array (
        0 => 'audio/x-imelody',
        1 => 'audio/imelody',
      ),
      'desc' =>
      array (
        0 => 'iMelody ringtone',
      ),
      'e' =>
      array (
        0 => 'imy',
        1 => 'ime',
      ),
    ),
    'text/x-iptables' =>
    array (
      'desc' =>
      array (
        0 => 'iptables configuration file',
      ),
      'e' =>
      array (
        0 => 'iptables',
      ),
    ),
    'text/x-java' =>
    array (
      'desc' =>
      array (
        0 => 'Java source code',
      ),
      'e' =>
      array (
        0 => 'java',
      ),
    ),
    'text/x-java-source' =>
    array (
      'e' =>
      array (
        0 => 'java',
      ),
    ),
    'text/x-kotlin' =>
    array (
      'desc' =>
      array (
        0 => 'Kotlin source code',
      ),
      'e' =>
      array (
        0 => 'kt',
      ),
    ),
    'text/x-ldif' =>
    array (
      'desc' =>
      array (
        0 => 'LDIF address book',
        1 => 'LDIF: LDAP Data Interchange Format',
      ),
      'e' =>
      array (
        0 => 'ldif',
      ),
    ),
    'text/x-lilypond' =>
    array (
      'desc' =>
      array (
        0 => 'Lilypond music sheet',
      ),
      'e' =>
      array (
        0 => 'ly',
      ),
    ),
    'text/x-literate-haskell' =>
    array (
      'desc' =>
      array (
        0 => 'LHS source code',
        1 => 'LHS: Literate Haskell source code',
      ),
      'e' =>
      array (
        0 => 'lhs',
      ),
    ),
    'text/x-log' =>
    array (
      'desc' =>
      array (
        0 => 'application log',
      ),
      'e' =>
      array (
        0 => 'log',
      ),
    ),
    'text/x-lua' =>
    array (
      'desc' =>
      array (
        0 => 'Lua script',
      ),
      'e' =>
      array (
        0 => 'lua',
      ),
    ),
    'text/x-makefile' =>
    array (
      'desc' =>
      array (
        0 => 'Makefile build file',
      ),
      'e' =>
      array (
        0 => 'mk',
        1 => 'mak',
      ),
    ),
    'text/x-matlab' =>
    array (
      'a' =>
      array (
        0 => 'text/x-octave',
      ),
      'desc' =>
      array (
        0 => 'MATLAB file',
      ),
      'e' =>
      array (
        0 => 'm',
      ),
    ),
    'text/x-microdvd' =>
    array (
      'desc' =>
      array (
        0 => 'MicroDVD subtitles',
      ),
      'e' =>
      array (
        0 => 'sub',
      ),
    ),
    'text/x-moc' =>
    array (
      'desc' =>
      array (
        0 => 'Qt MOC file',
        1 => 'Qt MOC: Qt Meta Object Compiler',
      ),
      'e' =>
      array (
        0 => 'moc',
      ),
    ),
    'text/x-modelica' =>
    array (
      'desc' =>
      array (
        0 => 'Modelica model',
      ),
      'e' =>
      array (
        0 => 'mo',
      ),
    ),
    'text/x-mof' =>
    array (
      'desc' =>
      array (
        0 => 'MOF file',
        1 => 'MOF: Windows Managed Object File',
      ),
      'e' =>
      array (
        0 => 'mof',
      ),
    ),
    'text/x-mpsub' =>
    array (
      'desc' =>
      array (
        0 => 'MPSub subtitles',
        1 => 'MPSub: MPlayer Subtitle',
      ),
      'e' =>
      array (
        0 => 'sub',
      ),
    ),
    'text/x-mrml' =>
    array (
      'desc' =>
      array (
        0 => 'MRML playlist',
        1 => 'MRML: Multimedia Retrieval Markup Language',
      ),
      'e' =>
      array (
        0 => 'mrml',
        1 => 'mrl',
      ),
    ),
    'text/x-ms-regedit' =>
    array (
      'desc' =>
      array (
        0 => 'Windows Registry extract',
      ),
      'e' =>
      array (
        0 => 'reg',
      ),
    ),
    'text/x-mup' =>
    array (
      'desc' =>
      array (
        0 => 'Mup musical composition document',
      ),
      'e' =>
      array (
        0 => 'mup',
        1 => 'not',
      ),
    ),
    'text/x-nfo' =>
    array (
      'desc' =>
      array (
        0 => 'NFO document',
      ),
      'e' =>
      array (
        0 => 'nfo',
      ),
    ),
    'text/x-objcsrc' =>
    array (
      'desc' =>
      array (
        0 => 'Objective-C source code',
      ),
      'e' =>
      array (
        0 => 'm',
      ),
    ),
    'text/x-ocaml' =>
    array (
      'desc' =>
      array (
        0 => 'OCaml source code',
      ),
      'e' =>
      array (
        0 => 'ml',
        1 => 'mli',
      ),
    ),
    'text/x-ocl' =>
    array (
      'desc' =>
      array (
        0 => 'OCL file',
        1 => 'OCL: Object Constraint Language',
      ),
      'e' =>
      array (
        0 => 'ocl',
      ),
    ),
    'text/x-ooc' =>
    array (
      'desc' =>
      array (
        0 => 'OOC source code',
        1 => 'OOC: Out Of Class',
      ),
      'e' =>
      array (
        0 => 'ooc',
      ),
    ),
    'text/x-opencl-src' =>
    array (
      'desc' =>
      array (
        0 => 'OpenCL source code',
        1 => 'OpenCL: Open Computing Language',
      ),
      'e' =>
      array (
        0 => 'cl',
      ),
    ),
    'text/x-opml+xml' =>
    array (
      'a' =>
      array (
        0 => 'text/x-opml',
      ),
      'desc' =>
      array (
        0 => 'OPML syndication feed',
      ),
      'e' =>
      array (
        0 => 'opml',
      ),
    ),
    'text/x-pascal' =>
    array (
      'desc' =>
      array (
        0 => 'Pascal source code',
      ),
      'e' =>
      array (
        0 => 'p',
        1 => 'pas',
      ),
    ),
    'text/x-patch' =>
    array (
      'a' =>
      array (
        0 => 'text/x-diff',
      ),
      'desc' =>
      array (
        0 => 'differences between files',
      ),
      'e' =>
      array (
        0 => 'diff',
        1 => 'patch',
      ),
    ),
    'text/x-python' =>
    array (
      'desc' =>
      array (
        0 => 'Python script',
      ),
      'e' =>
      array (
        0 => 'py',
        1 => 'pyx',
        2 => 'wsgi',
      ),
    ),
    'text/x-python3' =>
    array (
      'desc' =>
      array (
        0 => 'Python 3 script',
      ),
      'e' =>
      array (
        0 => 'py',
        1 => 'py3',
        2 => 'py3x',
      ),
    ),
    'text/x-qml' =>
    array (
      'desc' =>
      array (
        0 => 'Qt Markup Language file',
      ),
      'e' =>
      array (
        0 => 'qml',
        1 => 'qmltypes',
        2 => 'qmlproject',
      ),
    ),
    'text/x-reject' =>
    array (
      'a' =>
      array (
        0 => 'application/x-reject',
      ),
      'desc' =>
      array (
        0 => 'rejected patch',
      ),
      'e' =>
      array (
        0 => 'rej',
      ),
    ),
    'text/x-rpm-spec' =>
    array (
      'desc' =>
      array (
        0 => 'RPM spec file',
        1 => 'RPM: Red Hat Package Manager',
      ),
      'e' =>
      array (
        0 => 'spec',
      ),
    ),
    'text/x-rst' =>
    array (
      'desc' =>
      array (
        0 => 'reStructuredText document',
      ),
      'e' =>
      array (
        0 => 'rst',
      ),
    ),
    'text/x-sass' =>
    array (
      'desc' =>
      array (
        0 => 'Sass CSS pre-processor file',
        1 => 'Sass: Syntactically Awesome Style Sheets',
      ),
      'e' =>
      array (
        0 => 'sass',
      ),
    ),
    'text/x-scala' =>
    array (
      'desc' =>
      array (
        0 => 'Scala source code',
      ),
      'e' =>
      array (
        0 => 'scala',
      ),
    ),
    'text/x-scheme' =>
    array (
      'desc' =>
      array (
        0 => 'Scheme source code',
      ),
      'e' =>
      array (
        0 => 'scm',
        1 => 'ss',
      ),
    ),
    'text/x-scss' =>
    array (
      'desc' =>
      array (
        0 => 'SCSS pre-processor file',
        1 => 'SCSS: Sassy CSS',
      ),
      'e' =>
      array (
        0 => 'scss',
      ),
    ),
    'text/x-setext' =>
    array (
      'desc' =>
      array (
        0 => 'Setext document',
      ),
      'e' =>
      array (
        0 => 'etx',
      ),
    ),
    'text/x-sfv' =>
    array (
      'e' =>
      array (
        0 => 'sfv',
      ),
    ),
    'text/x-ssa' =>
    array (
      'desc' =>
      array (
        0 => 'SSA subtitles',
        1 => 'SSA: SubStation Alpha',
      ),
      'e' =>
      array (
        0 => 'ssa',
        1 => 'ass',
      ),
    ),
    'text/x-subviewer' =>
    array (
      'desc' =>
      array (
        0 => 'SubViewer subtitles',
      ),
      'e' =>
      array (
        0 => 'sub',
      ),
    ),
    'text/x-svhdr' =>
    array (
      'desc' =>
      array (
        0 => 'SystemVerilog header',
      ),
      'e' =>
      array (
        0 => 'svh',
      ),
    ),
    'text/x-svsrc' =>
    array (
      'desc' =>
      array (
        0 => 'SystemVerilog source code',
      ),
      'e' =>
      array (
        0 => 'sv',
      ),
    ),
    'text/x-systemd-unit' =>
    array (
      'desc' =>
      array (
        0 => 'systemd unit file',
      ),
      'e' =>
      array (
        0 => 'automount',
        1 => 'device',
        2 => 'mount',
        3 => 'path',
        4 => 'scope',
        5 => 'service',
        6 => 'slice',
        7 => 'socket',
        8 => 'swap',
        9 => 'target',
        10 => 'timer',
      ),
    ),
    'text/x-tex' =>
    array (
      'a' =>
      array (
        0 => 'application/x-tex',
      ),
      'desc' =>
      array (
        0 => 'TeX document',
      ),
      'e' =>
      array (
        0 => 'tex',
        1 => 'ltx',
        2 => 'sty',
        3 => 'cls',
        4 => 'dtx',
        5 => 'ins',
        6 => 'latex',
      ),
    ),
    'text/x-texinfo' =>
    array (
      'desc' =>
      array (
        0 => 'TeXInfo document',
      ),
      'e' =>
      array (
        0 => 'texi',
        1 => 'texinfo',
      ),
    ),
    'text/x-troff-me' =>
    array (
      'desc' =>
      array (
        0 => 'Troff ME input document',
      ),
      'e' =>
      array (
        0 => 'me',
      ),
    ),
    'text/x-troff-mm' =>
    array (
      'desc' =>
      array (
        0 => 'Troff MM input document',
      ),
      'e' =>
      array (
        0 => 'mm',
      ),
    ),
    'text/x-troff-ms' =>
    array (
      'desc' =>
      array (
        0 => 'Troff MS input document',
      ),
      'e' =>
      array (
        0 => 'ms',
      ),
    ),
    'text/x-twig' =>
    array (
      'desc' =>
      array (
        0 => 'Twig template',
      ),
      'e' =>
      array (
        0 => 'twig',
      ),
    ),
    'text/x-txt2tags' =>
    array (
      'desc' =>
      array (
        0 => 'txt2tags document',
      ),
      'e' =>
      array (
        0 => 't2t',
      ),
    ),
    'text/x-uil' =>
    array (
      'desc' =>
      array (
        0 => 'X-Motif UIL table',
      ),
      'e' =>
      array (
        0 => 'uil',
      ),
    ),
    'text/x-uuencode' =>
    array (
      'a' =>
      array (
        0 => 'zz-application/zz-winassoc-uu',
      ),
      'desc' =>
      array (
        0 => 'uuencoded file',
      ),
      'e' =>
      array (
        0 => 'uu',
        1 => 'uue',
      ),
    ),
    'text/x-vala' =>
    array (
      'desc' =>
      array (
        0 => 'Vala source code',
      ),
      'e' =>
      array (
        0 => 'vala',
        1 => 'vapi',
      ),
    ),
    'text/x-verilog' =>
    array (
      'desc' =>
      array (
        0 => 'Verilog source code',
      ),
      'e' =>
      array (
        0 => 'v',
      ),
    ),
    'text/x-vhdl' =>
    array (
      'desc' =>
      array (
        0 => 'VHDL source code',
        1 => 'VHDL: Very-High-Speed Integrated Circuit Hardware Description Language',
      ),
      'e' =>
      array (
        0 => 'vhd',
        1 => 'vhdl',
      ),
    ),
    'text/x-xmi' =>
    array (
      'desc' =>
      array (
        0 => 'XMI file',
        1 => 'XMI: XML Metadata Interchange',
      ),
      'e' =>
      array (
        0 => 'xmi',
      ),
    ),
    'text/x-xslfo' =>
    array (
      'desc' =>
      array (
        0 => 'XSL FO file',
        1 => 'XSL FO: XSL Formatting Objects',
      ),
      'e' =>
      array (
        0 => 'fo',
        1 => 'xslfo',
      ),
    ),
    'text/x.gcode' =>
    array (
      'desc' =>
      array (
        0 => 'G-code file',
      ),
      'e' =>
      array (
        0 => 'gcode',
      ),
    ),
    'video/3gpp' =>
    array (
      'a' =>
      array (
        0 => 'video/3gp',
        1 => 'audio/3gpp',
        2 => 'video/3gpp-encrypted',
        3 => 'audio/3gpp-encrypted',
        4 => 'audio/x-rn-3gpp-amr',
        5 => 'audio/x-rn-3gpp-amr-encrypted',
        6 => 'audio/x-rn-3gpp-amr-wb',
        7 => 'audio/x-rn-3gpp-amr-wb-encrypted',
      ),
      'desc' =>
      array (
        0 => '3GPP multimedia file',
        1 => '3GPP: 3rd Generation Partnership Project',
      ),
      'e' =>
      array (
        0 => '3gp',
        1 => '3gpp',
        2 => '3ga',
      ),
    ),
    'video/3gpp2' =>
    array (
      'a' =>
      array (
        0 => 'audio/3gpp2',
      ),
      'desc' =>
      array (
        0 => '3GPP2 multimedia file',
        1 => '3GPP2: 3rd Generation Partnership Project 2',
      ),
      'e' =>
      array (
        0 => '3g2',
        1 => '3gp2',
        2 => '3gpp2',
      ),
    ),
    'video/annodex' =>
    array (
      'a' =>
      array (
        0 => 'video/x-annodex',
      ),
      'desc' =>
      array (
        0 => 'Annodex video',
      ),
      'e' =>
      array (
        0 => 'axv',
      ),
    ),
    'video/dv' =>
    array (
      'desc' =>
      array (
        0 => 'DV video',
        1 => 'DV: Digital Video',
      ),
      'e' =>
      array (
        0 => 'dv',
      ),
    ),
    'video/h261' =>
    array (
      'e' =>
      array (
        0 => 'h261',
      ),
    ),
    'video/h263' =>
    array (
      'e' =>
      array (
        0 => 'h263',
      ),
    ),
    'video/h264' =>
    array (
      'e' =>
      array (
        0 => 'h264',
      ),
    ),
    'video/jpeg' =>
    array (
      'e' =>
      array (
        0 => 'jpgv',
      ),
    ),
    'video/jpm' =>
    array (
      'e' =>
      array (
        0 => 'jpm',
        1 => 'jpgm',
      ),
    ),
    'video/mj2' =>
    array (
      'desc' =>
      array (
        0 => 'JPEG-2000 MJ2 video',
        1 => 'MJ2: Motion JPEG-2000',
      ),
      'e' =>
      array (
        0 => 'mj2',
        1 => 'mjp2',
      ),
    ),
    'video/mp2t' =>
    array (
      'desc' =>
      array (
        0 => 'MPEG-2 transport stream',
        1 => 'MPEG-2 TS: Moving Picture Experts Group 2 Transport Stream',
      ),
      'e' =>
      array (
        0 => 'm2t',
        1 => 'm2ts',
        2 => 'ts',
        3 => 'mts',
        4 => 'cpi',
        5 => 'clpi',
        6 => 'mpl',
        7 => 'mpls',
        8 => 'bdm',
        9 => 'bdmv',
      ),
    ),
    'video/mp4' =>
    array (
      'a' =>
      array (
        0 => 'video/mp4v-es',
        1 => 'video/x-m4v',
      ),
      'desc' =>
      array (
        0 => 'MPEG-4 video',
      ),
      'e' =>
      array (
        0 => 'mp4',
        1 => 'mp4v',
        2 => 'mpg4',
        3 => 'm4v',
        4 => 'f4v',
        5 => 'lrv',
      ),
    ),
    'video/mpeg' =>
    array (
      'a' =>
      array (
        0 => 'video/x-mpeg',
        1 => 'video/mpeg-system',
        2 => 'video/x-mpeg-system',
        3 => 'video/x-mpeg2',
      ),
      'desc' =>
      array (
        0 => 'MPEG video',
        1 => 'MPEG: Moving Picture Experts Group',
      ),
      'e' =>
      array (
        0 => 'mpeg',
        1 => 'mpg',
        2 => 'mpe',
        3 => 'm1v',
        4 => 'm2v',
        5 => 'mp2',
        6 => 'vob',
      ),
    ),
    'video/ogg' =>
    array (
      'a' =>
      array (
        0 => 'video/x-ogg',
      ),
      'desc' =>
      array (
        0 => 'Ogg video',
      ),
      'e' =>
      array (
        0 => 'ogv',
        1 => 'ogg',
      ),
    ),
    'video/quicktime' =>
    array (
      'desc' =>
      array (
        0 => 'QuickTime video',
      ),
      'e' =>
      array (
        0 => 'qt',
        1 => 'mov',
        2 => 'moov',
        3 => 'qtvr',
      ),
    ),
    'video/vnd.dece.hd' =>
    array (
      'e' =>
      array (
        0 => 'uvh',
        1 => 'uvvh',
      ),
    ),
    'video/vnd.dece.mobile' =>
    array (
      'e' =>
      array (
        0 => 'uvm',
        1 => 'uvvm',
      ),
    ),
    'video/vnd.dece.pd' =>
    array (
      'e' =>
      array (
        0 => 'uvp',
        1 => 'uvvp',
      ),
    ),
    'video/vnd.dece.sd' =>
    array (
      'e' =>
      array (
        0 => 'uvs',
        1 => 'uvvs',
      ),
    ),
    'video/vnd.dece.video' =>
    array (
      'e' =>
      array (
        0 => 'uvv',
        1 => 'uvvv',
      ),
    ),
    'video/vnd.dvb.file' =>
    array (
      'e' =>
      array (
        0 => 'dvb',
      ),
    ),
    'video/vnd.fvt' =>
    array (
      'e' =>
      array (
        0 => 'fvt',
      ),
    ),
    'video/vnd.mpegurl' =>
    array (
      'a' =>
      array (
        0 => 'video/x-mpegurl',
      ),
      'desc' =>
      array (
        0 => 'MPEG video (streamed)',
      ),
      'e' =>
      array (
        0 => 'mxu',
        1 => 'm4u',
        2 => 'm1u',
      ),
    ),
    'video/vnd.ms-playready.media.pyv' =>
    array (
      'e' =>
      array (
        0 => 'pyv',
      ),
    ),
    'video/vnd.rn-realvideo' =>
    array (
      'a' =>
      array (
        0 => 'video/x-real-video',
      ),
      'desc' =>
      array (
        0 => 'RealVideo document',
      ),
      'e' =>
      array (
        0 => 'rv',
        1 => 'rvx',
      ),
    ),
    'video/vnd.uvvu.mp4' =>
    array (
      'e' =>
      array (
        0 => 'uvu',
        1 => 'uvvu',
      ),
    ),
    'video/vnd.vivo' =>
    array (
      'a' =>
      array (
        0 => 'video/vivo',
      ),
      'desc' =>
      array (
        0 => 'Vivo video',
      ),
      'e' =>
      array (
        0 => 'viv',
        1 => 'vivo',
      ),
    ),
    'video/webm' =>
    array (
      'desc' =>
      array (
        0 => 'WebM video',
      ),
      'e' =>
      array (
        0 => 'webm',
      ),
    ),
    'video/x-anim' =>
    array (
      'desc' =>
      array (
        0 => 'ANIM animation',
      ),
      'e' =>
      array (
        0 => 'anim1',
        1 => 'anim2',
        2 => 'anim3',
        3 => 'anim4',
        4 => 'anim5',
        5 => 'anim6',
        6 => 'anim7',
        7 => 'anim8',
        8 => 'anim9',
        9 => 'animj',
      ),
    ),
    'video/x-f4v' =>
    array (
      'e' =>
      array (
        0 => 'f4v',
      ),
    ),
    'video/x-flic' =>
    array (
      'a' =>
      array (
        0 => 'video/fli',
        1 => 'video/x-fli',
      ),
      'desc' =>
      array (
        0 => 'FLIC animation',
      ),
      'e' =>
      array (
        0 => 'fli',
        1 => 'flc',
      ),
    ),
    'video/x-flv' =>
    array (
      'a' =>
      array (
        0 => 'application/x-flash-video',
        1 => 'flv-application/octet-stream',
        2 => 'video/flv',
      ),
      'desc' =>
      array (
        0 => 'Flash video',
      ),
      'e' =>
      array (
        0 => 'flv',
      ),
    ),
    'video/x-javafx' =>
    array (
      'desc' =>
      array (
        0 => 'JavaFX video',
      ),
      'e' =>
      array (
        0 => 'fxm',
      ),
    ),
    'video/x-matroska' =>
    array (
      'desc' =>
      array (
        0 => 'Matroska video',
      ),
      'e' =>
      array (
        0 => 'mkv',
        1 => 'mk3d',
        2 => 'mks',
      ),
    ),
    'video/x-matroska-3d' =>
    array (
      'desc' =>
      array (
        0 => 'Matroska 3D video',
      ),
      'e' =>
      array (
        0 => 'mk3d',
      ),
    ),
    'video/x-mjpeg' =>
    array (
      'desc' =>
      array (
        0 => 'MJPEG video stream',
        1 => 'MJPEG: Motion JPEG',
      ),
      'e' =>
      array (
        0 => 'mjpeg',
        1 => 'mjpg',
      ),
    ),
    'video/x-mng' =>
    array (
      'desc' =>
      array (
        0 => 'MNG animation',
        1 => 'MNG: Multiple-Image Network Graphics',
      ),
      'e' =>
      array (
        0 => 'mng',
      ),
    ),
    'video/x-ms-vob' =>
    array (
      'e' =>
      array (
        0 => 'vob',
      ),
    ),
    'video/x-ms-wmv' =>
    array (
      'desc' =>
      array (
        0 => 'Windows Media video',
      ),
      'e' =>
      array (
        0 => 'wmv',
      ),
    ),
    'video/x-msvideo' =>
    array (
      'a' =>
      array (
        0 => 'video/x-avi',
        1 => 'video/avi',
        2 => 'video/divx',
        3 => 'video/msvideo',
        4 => 'video/vnd.divx',
      ),
      'desc' =>
      array (
        0 => 'AVI video',
        1 => 'AVI: Audio Video Interleave',
      ),
      'e' =>
      array (
        0 => 'avi',
        1 => 'avf',
        2 => 'divx',
      ),
    ),
    'video/x-nsv' =>
    array (
      'desc' =>
      array (
        0 => 'NullSoft video',
      ),
      'e' =>
      array (
        0 => 'nsv',
      ),
    ),
    'video/x-ogm+ogg' =>
    array (
      'a' =>
      array (
        0 => 'video/x-ogm',
      ),
      'desc' =>
      array (
        0 => 'OGM video',
      ),
      'e' =>
      array (
        0 => 'ogm',
      ),
    ),
    'video/x-sgi-movie' =>
    array (
      'desc' =>
      array (
        0 => 'SGI video',
      ),
      'e' =>
      array (
        0 => 'movie',
      ),
    ),
    'video/x-smv' =>
    array (
      'e' =>
      array (
        0 => 'smv',
      ),
    ),
    'video/x-theora+ogg' =>
    array (
      'a' =>
      array (
        0 => 'video/x-theora',
      ),
      'desc' =>
      array (
        0 => 'Ogg Theora video',
      ),
      'e' =>
      array (
        0 => 'ogg',
      ),
    ),
    'x-conference/x-cooltalk' =>
    array (
      'e' =>
      array (
        0 => 'ice',
      ),
    ),
    'x-epoc/x-sisx-app' =>
    array (
      'desc' =>
      array (
        0 => 'SISX package',
        1 => 'SIS: Symbian Installation File',
      ),
      'e' =>
      array (
        0 => 'sisx',
      ),
    ),
  ),
  'e' =>
  array (
    '32x' =>
    array (
      't' =>
      array (
        0 => 'application/x-genesis-32x-rom',
      ),
    ),
    '3dml' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.in3d.3dml',
      ),
    ),
    '3ds' =>
    array (
      't' =>
      array (
        0 => 'image/x-3ds',
      ),
    ),
    '3g2' =>
    array (
      't' =>
      array (
        0 => 'video/3gpp2',
      ),
    ),
    '3ga' =>
    array (
      't' =>
      array (
        0 => 'video/3gpp',
      ),
    ),
    '3gp' =>
    array (
      't' =>
      array (
        0 => 'video/3gpp',
      ),
    ),
    '3gp2' =>
    array (
      't' =>
      array (
        0 => 'video/3gpp2',
      ),
    ),
    '3gpp' =>
    array (
      't' =>
      array (
        0 => 'video/3gpp',
      ),
    ),
    '3gpp2' =>
    array (
      't' =>
      array (
        0 => 'video/3gpp2',
      ),
    ),
    '7z' =>
    array (
      't' =>
      array (
        0 => 'application/x-7z-compressed',
      ),
    ),
    'a' =>
    array (
      't' =>
      array (
        0 => 'application/x-archive',
      ),
    ),
    'a26' =>
    array (
      't' =>
      array (
        0 => 'application/x-atari-2600-rom',
      ),
    ),
    'a78' =>
    array (
      't' =>
      array (
        0 => 'application/x-atari-7800-rom',
      ),
    ),
    'aa' =>
    array (
      't' =>
      array (
        0 => 'audio/x-pn-audibleaudio',
      ),
    ),
    'aab' =>
    array (
      't' =>
      array (
        0 => 'application/x-authorware-bin',
      ),
    ),
    'aac' =>
    array (
      't' =>
      array (
        0 => 'audio/aac',
      ),
    ),
    'aam' =>
    array (
      't' =>
      array (
        0 => 'application/x-authorware-map',
      ),
    ),
    'aas' =>
    array (
      't' =>
      array (
        0 => 'application/x-authorware-seg',
      ),
    ),
    'aax' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.audible.aax',
      ),
    ),
    'abw' =>
    array (
      't' =>
      array (
        0 => 'application/x-abiword',
      ),
    ),
    'abw.crashed' =>
    array (
      't' =>
      array (
        0 => 'application/x-abiword',
      ),
    ),
    'abw.gz' =>
    array (
      't' =>
      array (
        0 => 'application/x-abiword',
      ),
    ),
    'ac' =>
    array (
      't' =>
      array (
        0 => 'application/pkix-attr-cert',
      ),
    ),
    'ac3' =>
    array (
      't' =>
      array (
        0 => 'audio/ac3',
      ),
    ),
    'acc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.americandynamics.acc',
      ),
    ),
    'ace' =>
    array (
      't' =>
      array (
        0 => 'application/x-ace-compressed',
        1 => 'application/x-ace',
      ),
    ),
    'acu' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.acucobol',
      ),
    ),
    'acutc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.acucorp',
      ),
    ),
    'adb' =>
    array (
      't' =>
      array (
        0 => 'text/x-adasrc',
      ),
    ),
    'adf' =>
    array (
      't' =>
      array (
        0 => 'application/x-amiga-disk-format',
      ),
    ),
    'adp' =>
    array (
      't' =>
      array (
        0 => 'audio/adpcm',
      ),
    ),
    'ads' =>
    array (
      't' =>
      array (
        0 => 'text/x-adasrc',
      ),
    ),
    'adts' =>
    array (
      't' =>
      array (
        0 => 'audio/aac',
      ),
    ),
    'aep' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.audiograph',
      ),
    ),
    'afm' =>
    array (
      't' =>
      array (
        0 => 'application/x-font-type1',
        1 => 'application/x-font-afm',
      ),
    ),
    'afp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ibm.modcap',
      ),
    ),
    'ag' =>
    array (
      't' =>
      array (
        0 => 'image/x-applix-graphics',
      ),
    ),
    'agb' =>
    array (
      't' =>
      array (
        0 => 'application/x-gba-rom',
      ),
    ),
    'ahead' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ahead.space',
      ),
    ),
    'ai' =>
    array (
      't' =>
      array (
        0 => 'application/postscript',
        1 => 'application/illustrator',
      ),
    ),
    'aif' =>
    array (
      't' =>
      array (
        0 => 'audio/x-aiff',
      ),
    ),
    'aifc' =>
    array (
      't' =>
      array (
        0 => 'audio/x-aiff',
        1 => 'audio/x-aifc',
      ),
    ),
    'aiff' =>
    array (
      't' =>
      array (
        0 => 'audio/x-aiff',
      ),
    ),
    'aiffc' =>
    array (
      't' =>
      array (
        0 => 'audio/x-aifc',
      ),
    ),
    'air' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.adobe.air-application-installer-package+zip',
      ),
    ),
    'ait' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dvb.ait',
      ),
    ),
    'al' =>
    array (
      't' =>
      array (
        0 => 'application/x-perl',
      ),
    ),
    'alz' =>
    array (
      't' =>
      array (
        0 => 'application/x-alz',
      ),
    ),
    'ami' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.amiga.ami',
      ),
    ),
    'amr' =>
    array (
      't' =>
      array (
        0 => 'audio/amr',
      ),
    ),
    'amz' =>
    array (
      't' =>
      array (
        0 => 'audio/x-amzxml',
      ),
    ),
    'ani' =>
    array (
      't' =>
      array (
        0 => 'application/x-navi-animation',
      ),
    ),
    'anim1' =>
    array (
      't' =>
      array (
        0 => 'video/x-anim',
      ),
    ),
    'anim2' =>
    array (
      't' =>
      array (
        0 => 'video/x-anim',
      ),
    ),
    'anim3' =>
    array (
      't' =>
      array (
        0 => 'video/x-anim',
      ),
    ),
    'anim4' =>
    array (
      't' =>
      array (
        0 => 'video/x-anim',
      ),
    ),
    'anim5' =>
    array (
      't' =>
      array (
        0 => 'video/x-anim',
      ),
    ),
    'anim6' =>
    array (
      't' =>
      array (
        0 => 'video/x-anim',
      ),
    ),
    'anim7' =>
    array (
      't' =>
      array (
        0 => 'video/x-anim',
      ),
    ),
    'anim8' =>
    array (
      't' =>
      array (
        0 => 'video/x-anim',
      ),
    ),
    'anim9' =>
    array (
      't' =>
      array (
        0 => 'video/x-anim',
      ),
    ),
    'animj' =>
    array (
      't' =>
      array (
        0 => 'video/x-anim',
      ),
    ),
    'anx' =>
    array (
      't' =>
      array (
        0 => 'application/annodex',
      ),
    ),
    'ape' =>
    array (
      't' =>
      array (
        0 => 'audio/x-ape',
      ),
    ),
    'apk' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.android.package-archive',
      ),
    ),
    'appcache' =>
    array (
      't' =>
      array (
        0 => 'text/cache-manifest',
      ),
    ),
    'appimage' =>
    array (
      't' =>
      array (
        0 => 'application/x-iso9660-appimage',
        1 => 'application/vnd.appimage',
      ),
    ),
    'application' =>
    array (
      't' =>
      array (
        0 => 'application/x-ms-application',
      ),
    ),
    'apr' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.lotus-approach',
      ),
    ),
    'ar' =>
    array (
      't' =>
      array (
        0 => 'application/x-archive',
      ),
    ),
    'arc' =>
    array (
      't' =>
      array (
        0 => 'application/x-freearc',
      ),
    ),
    'arj' =>
    array (
      't' =>
      array (
        0 => 'application/x-arj',
      ),
    ),
    'arw' =>
    array (
      't' =>
      array (
        0 => 'image/x-sony-arw',
      ),
    ),
    'as' =>
    array (
      't' =>
      array (
        0 => 'application/x-applix-spreadsheet',
      ),
    ),
    'asc' =>
    array (
      't' =>
      array (
        0 => 'application/pgp-signature',
        1 => 'application/pgp-encrypted',
        2 => 'application/pgp-keys',
        3 => 'text/plain',
      ),
    ),
    'asd' =>
    array (
      't' =>
      array (
        0 => 'text/x-common-lisp',
      ),
    ),
    'asf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-asf',
      ),
    ),
    'asm' =>
    array (
      't' =>
      array (
        0 => 'text/x-asm',
      ),
    ),
    'aso' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.accpac.simply.aso',
      ),
    ),
    'asp' =>
    array (
      't' =>
      array (
        0 => 'application/x-asp',
      ),
    ),
    'ass' =>
    array (
      't' =>
      array (
        0 => 'text/x-ssa',
        1 => 'audio/aac',
      ),
    ),
    'asx' =>
    array (
      't' =>
      array (
        0 => 'audio/x-ms-asx',
      ),
    ),
    'atc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.acucorp',
      ),
    ),
    'atom' =>
    array (
      't' =>
      array (
        0 => 'application/atom+xml',
      ),
    ),
    'atomcat' =>
    array (
      't' =>
      array (
        0 => 'application/atomcat+xml',
      ),
    ),
    'atomsvc' =>
    array (
      't' =>
      array (
        0 => 'application/atomsvc+xml',
      ),
    ),
    'atx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.antix.game-component',
      ),
    ),
    'au' =>
    array (
      't' =>
      array (
        0 => 'audio/basic',
      ),
    ),
    'automount' =>
    array (
      't' =>
      array (
        0 => 'text/x-systemd-unit',
      ),
    ),
    'avf' =>
    array (
      't' =>
      array (
        0 => 'video/x-msvideo',
      ),
    ),
    'avi' =>
    array (
      't' =>
      array (
        0 => 'video/x-msvideo',
      ),
    ),
    'avif' =>
    array (
      't' =>
      array (
        0 => 'image/avif',
      ),
    ),
    'avifs' =>
    array (
      't' =>
      array (
        0 => 'image/avif-sequence',
      ),
    ),
    'aw' =>
    array (
      't' =>
      array (
        0 => 'application/applixware',
        1 => 'application/x-applix-word',
      ),
    ),
    'awb' =>
    array (
      't' =>
      array (
        0 => 'audio/amr-wb',
      ),
    ),
    'awk' =>
    array (
      't' =>
      array (
        0 => 'application/x-awk',
      ),
    ),
    'axa' =>
    array (
      't' =>
      array (
        0 => 'audio/annodex',
      ),
    ),
    'axv' =>
    array (
      't' =>
      array (
        0 => 'video/annodex',
      ),
    ),
    'azf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.airzip.filesecure.azf',
      ),
    ),
    'azs' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.airzip.filesecure.azs',
      ),
    ),
    'azw' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.amazon.ebook',
      ),
    ),
    'azw3' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.amazon.mobi8-ebook',
      ),
    ),
    'bak' =>
    array (
      't' =>
      array (
        0 => 'application/x-trash',
      ),
    ),
    'bat' =>
    array (
      't' =>
      array (
        0 => 'application/x-msdownload',
      ),
    ),
    'bcpio' =>
    array (
      't' =>
      array (
        0 => 'application/x-bcpio',
      ),
    ),
    'bdf' =>
    array (
      't' =>
      array (
        0 => 'application/x-font-bdf',
      ),
    ),
    'bdm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.syncml.dm+wbxml',
        1 => 'video/mp2t',
      ),
    ),
    'bdmv' =>
    array (
      't' =>
      array (
        0 => 'video/mp2t',
      ),
    ),
    'bed' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.realvnc.bed',
      ),
    ),
    'bh2' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.fujitsu.oasysprs',
      ),
    ),
    'bib' =>
    array (
      't' =>
      array (
        0 => 'text/x-bibtex',
      ),
    ),
    'bin' =>
    array (
      't' =>
      array (
        0 => 'application/octet-stream',
      ),
    ),
    'blb' =>
    array (
      't' =>
      array (
        0 => 'application/x-blorb',
      ),
    ),
    'blend' =>
    array (
      't' =>
      array (
        0 => 'application/x-blender',
      ),
    ),
    'blender' =>
    array (
      't' =>
      array (
        0 => 'application/x-blender',
      ),
    ),
    'blorb' =>
    array (
      't' =>
      array (
        0 => 'application/x-blorb',
      ),
    ),
    'bmi' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.bmi',
      ),
    ),
    'bmp' =>
    array (
      't' =>
      array (
        0 => 'image/bmp',
      ),
    ),
    'book' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.framemaker',
      ),
    ),
    'box' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.previewsystems.box',
      ),
    ),
    'boz' =>
    array (
      't' =>
      array (
        0 => 'application/x-bzip',
      ),
    ),
    'bpk' =>
    array (
      't' =>
      array (
        0 => 'application/octet-stream',
      ),
    ),
    'bps' =>
    array (
      't' =>
      array (
        0 => 'application/x-bps-patch',
      ),
    ),
    'bsdiff' =>
    array (
      't' =>
      array (
        0 => 'application/x-bsdiff',
      ),
    ),
    'btif' =>
    array (
      't' =>
      array (
        0 => 'image/prs.btif',
      ),
    ),
    'bz' =>
    array (
      't' =>
      array (
        0 => 'application/x-bzip',
      ),
    ),
    'bz2' =>
    array (
      't' =>
      array (
        0 => 'application/x-bzip',
      ),
    ),
    'c' =>
    array (
      't' =>
      array (
        0 => 'text/x-c++src',
        1 => 'text/x-csrc',
      ),
    ),
    'c++' =>
    array (
      't' =>
      array (
        0 => 'text/x-c++src',
      ),
    ),
    'c11amc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.cluetrust.cartomobile-config',
      ),
    ),
    'c11amz' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.cluetrust.cartomobile-config-pkg',
      ),
    ),
    'c4d' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.clonk.c4group',
      ),
    ),
    'c4f' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.clonk.c4group',
      ),
    ),
    'c4g' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.clonk.c4group',
      ),
    ),
    'c4p' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.clonk.c4group',
      ),
    ),
    'c4u' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.clonk.c4group',
      ),
    ),
    'cab' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-cab-compressed',
      ),
    ),
    'caf' =>
    array (
      't' =>
      array (
        0 => 'audio/x-caf',
      ),
    ),
    'cap' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.tcpdump.pcap',
      ),
    ),
    'car' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.curl.car',
      ),
    ),
    'cat' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-pki.seccat',
      ),
    ),
    'cb7' =>
    array (
      't' =>
      array (
        0 => 'application/x-cb7',
      ),
    ),
    'cba' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.comicbook-rar',
      ),
    ),
    'cbl' =>
    array (
      't' =>
      array (
        0 => 'text/x-cobol',
      ),
    ),
    'cbr' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.comicbook-rar',
      ),
    ),
    'cbt' =>
    array (
      't' =>
      array (
        0 => 'application/x-cbt',
      ),
    ),
    'cbz' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.comicbook+zip',
      ),
    ),
    'cc' =>
    array (
      't' =>
      array (
        0 => 'text/x-c++src',
      ),
    ),
    'ccmx' =>
    array (
      't' =>
      array (
        0 => 'application/x-ccmx',
      ),
    ),
    'cct' =>
    array (
      't' =>
      array (
        0 => 'application/x-director',
      ),
    ),
    'ccxml' =>
    array (
      't' =>
      array (
        0 => 'application/ccxml+xml',
      ),
    ),
    'cdbcmsg' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.contact.cmsg',
      ),
    ),
    'cdf' =>
    array (
      't' =>
      array (
        0 => 'application/x-netcdf',
      ),
    ),
    'cdkey' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mediastation.cdkey',
      ),
    ),
    'cdmia' =>
    array (
      't' =>
      array (
        0 => 'application/cdmi-capability',
      ),
    ),
    'cdmic' =>
    array (
      't' =>
      array (
        0 => 'application/cdmi-container',
      ),
    ),
    'cdmid' =>
    array (
      't' =>
      array (
        0 => 'application/cdmi-domain',
      ),
    ),
    'cdmio' =>
    array (
      't' =>
      array (
        0 => 'application/cdmi-object',
      ),
    ),
    'cdmiq' =>
    array (
      't' =>
      array (
        0 => 'application/cdmi-queue',
      ),
    ),
    'cdr' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.corel-draw',
      ),
    ),
    'cdx' =>
    array (
      't' =>
      array (
        0 => 'chemical/x-cdx',
      ),
    ),
    'cdxml' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.chemdraw+xml',
      ),
    ),
    'cdy' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.cinderella',
      ),
    ),
    'cer' =>
    array (
      't' =>
      array (
        0 => 'application/pkix-cert',
      ),
    ),
    'cert' =>
    array (
      't' =>
      array (
        0 => 'application/x-x509-ca-cert',
      ),
    ),
    'cfs' =>
    array (
      't' =>
      array (
        0 => 'application/x-cfs-compressed',
      ),
    ),
    'cgb' =>
    array (
      't' =>
      array (
        0 => 'application/x-gameboy-color-rom',
      ),
    ),
    'cgm' =>
    array (
      't' =>
      array (
        0 => 'image/cgm',
      ),
    ),
    'chat' =>
    array (
      't' =>
      array (
        0 => 'application/x-chat',
      ),
    ),
    'chm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-htmlhelp',
      ),
    ),
    'chrt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kde.kchart',
        1 => 'application/x-kchart',
      ),
    ),
    'cif' =>
    array (
      't' =>
      array (
        0 => 'chemical/x-cif',
      ),
    ),
    'cii' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.anser-web-certificate-issue-initiation',
      ),
    ),
    'cil' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-artgalry',
      ),
    ),
    'cl' =>
    array (
      't' =>
      array (
        0 => 'text/x-opencl-src',
      ),
    ),
    'cla' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.claymore',
      ),
    ),
    'class' =>
    array (
      't' =>
      array (
        0 => 'application/x-java',
      ),
    ),
    'clkk' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.crick.clicker.keyboard',
      ),
    ),
    'clkp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.crick.clicker.palette',
      ),
    ),
    'clkt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.crick.clicker.template',
      ),
    ),
    'clkw' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.crick.clicker.wordbank',
      ),
    ),
    'clkx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.crick.clicker',
      ),
    ),
    'clp' =>
    array (
      't' =>
      array (
        0 => 'application/x-msclip',
      ),
    ),
    'clpi' =>
    array (
      't' =>
      array (
        0 => 'video/mp2t',
      ),
    ),
    'cls' =>
    array (
      't' =>
      array (
        0 => 'text/x-tex',
      ),
    ),
    'cmake' =>
    array (
      't' =>
      array (
        0 => 'text/x-cmake',
      ),
    ),
    'cmc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.cosmocaller',
      ),
    ),
    'cmdf' =>
    array (
      't' =>
      array (
        0 => 'chemical/x-cmdf',
      ),
    ),
    'cml' =>
    array (
      't' =>
      array (
        0 => 'chemical/x-cml',
      ),
    ),
    'cmp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.yellowriver-custom-menu',
      ),
    ),
    'cmx' =>
    array (
      't' =>
      array (
        0 => 'image/x-cmx',
      ),
    ),
    'cob' =>
    array (
      't' =>
      array (
        0 => 'text/x-cobol',
      ),
    ),
    'cod' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.rim.cod',
      ),
    ),
    'coffee' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.coffeescript',
      ),
    ),
    'com' =>
    array (
      't' =>
      array (
        0 => 'application/x-msdownload',
      ),
    ),
    'conf' =>
    array (
      't' =>
      array (
        0 => 'text/plain',
      ),
    ),
    'cpi' =>
    array (
      't' =>
      array (
        0 => 'video/mp2t',
      ),
    ),
    'cpio' =>
    array (
      't' =>
      array (
        0 => 'application/x-cpio',
      ),
    ),
    'cpio.gz' =>
    array (
      't' =>
      array (
        0 => 'application/x-cpio-compressed',
      ),
    ),
    'cpp' =>
    array (
      't' =>
      array (
        0 => 'text/x-c++src',
      ),
    ),
    'cpt' =>
    array (
      't' =>
      array (
        0 => 'application/mac-compactpro',
      ),
    ),
    'cr2' =>
    array (
      't' =>
      array (
        0 => 'image/x-canon-cr2',
      ),
    ),
    'crd' =>
    array (
      't' =>
      array (
        0 => 'application/x-mscardfile',
      ),
    ),
    'crdownload' =>
    array (
      't' =>
      array (
        0 => 'application/x-partial-download',
      ),
    ),
    'crl' =>
    array (
      't' =>
      array (
        0 => 'application/pkix-crl',
      ),
    ),
    'crt' =>
    array (
      't' =>
      array (
        0 => 'application/x-x509-ca-cert',
      ),
    ),
    'crw' =>
    array (
      't' =>
      array (
        0 => 'image/x-canon-crw',
      ),
    ),
    'cryptonote' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.rig.cryptonote',
      ),
    ),
    'cs' =>
    array (
      't' =>
      array (
        0 => 'text/x-csharp',
      ),
    ),
    'csh' =>
    array (
      't' =>
      array (
        0 => 'application/x-csh',
      ),
    ),
    'csml' =>
    array (
      't' =>
      array (
        0 => 'chemical/x-csml',
      ),
    ),
    'csp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.commonspace',
      ),
    ),
    'css' =>
    array (
      't' =>
      array (
        0 => 'text/css',
      ),
    ),
    'cst' =>
    array (
      't' =>
      array (
        0 => 'application/x-director',
      ),
    ),
    'csv' =>
    array (
      't' =>
      array (
        0 => 'text/csv',
      ),
    ),
    'csvs' =>
    array (
      't' =>
      array (
        0 => 'text/csv-schema',
      ),
    ),
    'cu' =>
    array (
      't' =>
      array (
        0 => 'application/cu-seeme',
      ),
    ),
    'cue' =>
    array (
      't' =>
      array (
        0 => 'application/x-cue',
      ),
    ),
    'cur' =>
    array (
      't' =>
      array (
        0 => 'image/x-win-bitmap',
      ),
    ),
    'curl' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.curl',
      ),
    ),
    'cwk' =>
    array (
      't' =>
      array (
        0 => 'application/x-appleworks-document',
      ),
    ),
    'cww' =>
    array (
      't' =>
      array (
        0 => 'application/prs.cww',
      ),
    ),
    'cxt' =>
    array (
      't' =>
      array (
        0 => 'application/x-director',
      ),
    ),
    'cxx' =>
    array (
      't' =>
      array (
        0 => 'text/x-c++src',
      ),
    ),
    'd' =>
    array (
      't' =>
      array (
        0 => 'text/x-dsrc',
      ),
    ),
    'dae' =>
    array (
      't' =>
      array (
        0 => 'model/vnd.collada+xml',
      ),
    ),
    'daf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mobius.daf',
      ),
    ),
    'dar' =>
    array (
      't' =>
      array (
        0 => 'application/x-dar',
      ),
    ),
    'dart' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dart',
      ),
    ),
    'dataless' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.fdsn.seed',
      ),
    ),
    'davmount' =>
    array (
      't' =>
      array (
        0 => 'application/davmount+xml',
      ),
    ),
    'dbf' =>
    array (
      't' =>
      array (
        0 => 'application/x-dbf',
      ),
    ),
    'dbk' =>
    array (
      't' =>
      array (
        0 => 'application/x-docbook+xml',
      ),
    ),
    'dc' =>
    array (
      't' =>
      array (
        0 => 'application/x-dc-rom',
      ),
    ),
    'dcl' =>
    array (
      't' =>
      array (
        0 => 'text/x-dcl',
      ),
    ),
    'dcm' =>
    array (
      't' =>
      array (
        0 => 'application/dicom',
      ),
    ),
    'dcr' =>
    array (
      't' =>
      array (
        0 => 'application/x-director',
        1 => 'image/x-kodak-dcr',
      ),
    ),
    'dcurl' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.curl.dcurl',
      ),
    ),
    'dd2' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oma.dd2+xml',
      ),
    ),
    'ddd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.fujixerox.ddd',
      ),
    ),
    'dds' =>
    array (
      't' =>
      array (
        0 => 'image/x-dds',
      ),
    ),
    'deb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.debian.binary-package',
      ),
    ),
    'def' =>
    array (
      't' =>
      array (
        0 => 'text/plain',
      ),
    ),
    'deploy' =>
    array (
      't' =>
      array (
        0 => 'application/octet-stream',
      ),
    ),
    'der' =>
    array (
      't' =>
      array (
        0 => 'application/x-x509-ca-cert',
      ),
    ),
    'desktop' =>
    array (
      't' =>
      array (
        0 => 'application/x-desktop',
      ),
    ),
    'device' =>
    array (
      't' =>
      array (
        0 => 'text/x-systemd-unit',
      ),
    ),
    'dfac' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dreamfactory',
      ),
    ),
    'dgc' =>
    array (
      't' =>
      array (
        0 => 'application/x-dgc-compressed',
      ),
    ),
    'di' =>
    array (
      't' =>
      array (
        0 => 'text/x-dsrc',
      ),
    ),
    'dia' =>
    array (
      't' =>
      array (
        0 => 'application/x-dia-diagram',
      ),
    ),
    'dib' =>
    array (
      't' =>
      array (
        0 => 'image/bmp',
      ),
    ),
    'dic' =>
    array (
      't' =>
      array (
        0 => 'text/x-csrc',
      ),
    ),
    'diff' =>
    array (
      't' =>
      array (
        0 => 'text/x-patch',
      ),
    ),
    'dir' =>
    array (
      't' =>
      array (
        0 => 'application/x-director',
      ),
    ),
    'dis' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mobius.dis',
      ),
    ),
    'dist' =>
    array (
      't' =>
      array (
        0 => 'application/octet-stream',
      ),
    ),
    'distz' =>
    array (
      't' =>
      array (
        0 => 'application/octet-stream',
      ),
    ),
    'divx' =>
    array (
      't' =>
      array (
        0 => 'video/x-msvideo',
      ),
    ),
    'djv' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.djvu',
        1 => 'image/vnd.djvu+multipage',
      ),
    ),
    'djvu' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.djvu',
        1 => 'image/vnd.djvu+multipage',
      ),
    ),
    'dll' =>
    array (
      't' =>
      array (
        0 => 'application/x-msdownload',
      ),
    ),
    'dmg' =>
    array (
      't' =>
      array (
        0 => 'application/x-apple-diskimage',
      ),
    ),
    'dmp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.tcpdump.pcap',
      ),
    ),
    'dms' =>
    array (
      't' =>
      array (
        0 => 'application/octet-stream',
      ),
    ),
    'dna' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dna',
      ),
    ),
    'dng' =>
    array (
      't' =>
      array (
        0 => 'image/x-adobe-dng',
      ),
    ),
    'doc' =>
    array (
      't' =>
      array (
        0 => 'application/msword',
      ),
    ),
    'docbook' =>
    array (
      't' =>
      array (
        0 => 'application/x-docbook+xml',
      ),
    ),
    'docm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-word.document.macroenabled.12',
      ),
    ),
    'docx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
      ),
    ),
    'dot' =>
    array (
      't' =>
      array (
        0 => 'application/msword',
        1 => 'application/msword-template',
        2 => 'text/vnd.graphviz',
      ),
    ),
    'dotm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-word.template.macroenabled.12',
      ),
    ),
    'dotx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
      ),
    ),
    'dp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.osgi.dp',
      ),
    ),
    'dpg' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dpgraph',
      ),
    ),
    'dra' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.dra',
      ),
    ),
    'dsc' =>
    array (
      't' =>
      array (
        0 => 'text/prs.lines.tag',
      ),
    ),
    'dsl' =>
    array (
      't' =>
      array (
        0 => 'text/x-dsl',
      ),
    ),
    'dssc' =>
    array (
      't' =>
      array (
        0 => 'application/dssc+der',
      ),
    ),
    'dtb' =>
    array (
      't' =>
      array (
        0 => 'application/x-dtbook+xml',
      ),
    ),
    'dtd' =>
    array (
      't' =>
      array (
        0 => 'application/xml-dtd',
      ),
    ),
    'dts' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.dts',
      ),
    ),
    'dtshd' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.dts.hd',
      ),
    ),
    'dtx' =>
    array (
      't' =>
      array (
        0 => 'text/x-tex',
      ),
    ),
    'dump' =>
    array (
      't' =>
      array (
        0 => 'application/octet-stream',
      ),
    ),
    'dv' =>
    array (
      't' =>
      array (
        0 => 'video/dv',
      ),
    ),
    'dvb' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.dvb.file',
      ),
    ),
    'dvi' =>
    array (
      't' =>
      array (
        0 => 'application/x-dvi',
      ),
    ),
    'dvi.bz2' =>
    array (
      't' =>
      array (
        0 => 'application/x-bzdvi',
      ),
    ),
    'dvi.gz' =>
    array (
      't' =>
      array (
        0 => 'application/x-gzdvi',
      ),
    ),
    'dwf' =>
    array (
      't' =>
      array (
        0 => 'model/vnd.dwf',
      ),
    ),
    'dwg' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.dwg',
      ),
    ),
    'dxf' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.dxf',
      ),
    ),
    'dxp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.spotfire.dxp',
      ),
    ),
    'dxr' =>
    array (
      't' =>
      array (
        0 => 'application/x-director',
      ),
    ),
    'e' =>
    array (
      't' =>
      array (
        0 => 'text/x-eiffel',
      ),
    ),
    'ecelp4800' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.nuera.ecelp4800',
      ),
    ),
    'ecelp7470' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.nuera.ecelp7470',
      ),
    ),
    'ecelp9600' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.nuera.ecelp9600',
      ),
    ),
    'ecma' =>
    array (
      't' =>
      array (
        0 => 'application/ecmascript',
      ),
    ),
    'edm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.novadigm.edm',
      ),
    ),
    'edx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.novadigm.edx',
      ),
    ),
    'efif' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.picsel',
      ),
    ),
    'egon' =>
    array (
      't' =>
      array (
        0 => 'application/x-egon',
      ),
    ),
    'ei6' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.pg.osasli',
      ),
    ),
    'eif' =>
    array (
      't' =>
      array (
        0 => 'text/x-eiffel',
      ),
    ),
    'el' =>
    array (
      't' =>
      array (
        0 => 'text/x-emacs-lisp',
      ),
    ),
    'elc' =>
    array (
      't' =>
      array (
        0 => 'application/octet-stream',
      ),
    ),
    'emf' =>
    array (
      't' =>
      array (
        0 => 'image/emf',
      ),
    ),
    'eml' =>
    array (
      't' =>
      array (
        0 => 'message/rfc822',
      ),
    ),
    'emma' =>
    array (
      't' =>
      array (
        0 => 'application/emma+xml',
      ),
    ),
    'emp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.emusic-emusic_package',
      ),
    ),
    'emz' =>
    array (
      't' =>
      array (
        0 => 'image/wmf',
      ),
    ),
    'ent' =>
    array (
      't' =>
      array (
        0 => 'application/xml-external-parsed-entity',
      ),
    ),
    'eol' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.digital-winds',
      ),
    ),
    'eot' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-fontobject',
      ),
    ),
    'eps' =>
    array (
      't' =>
      array (
        0 => 'application/postscript',
        1 => 'image/x-eps',
      ),
    ),
    'eps.bz2' =>
    array (
      't' =>
      array (
        0 => 'image/x-bzeps',
      ),
    ),
    'eps.gz' =>
    array (
      't' =>
      array (
        0 => 'image/x-gzeps',
      ),
    ),
    'epsf' =>
    array (
      't' =>
      array (
        0 => 'image/x-eps',
      ),
    ),
    'epsf.bz2' =>
    array (
      't' =>
      array (
        0 => 'image/x-bzeps',
      ),
    ),
    'epsf.gz' =>
    array (
      't' =>
      array (
        0 => 'image/x-gzeps',
      ),
    ),
    'epsi' =>
    array (
      't' =>
      array (
        0 => 'image/x-eps',
      ),
    ),
    'epsi.bz2' =>
    array (
      't' =>
      array (
        0 => 'image/x-bzeps',
      ),
    ),
    'epsi.gz' =>
    array (
      't' =>
      array (
        0 => 'image/x-gzeps',
      ),
    ),
    'epub' =>
    array (
      't' =>
      array (
        0 => 'application/epub+zip',
      ),
    ),
    'erl' =>
    array (
      't' =>
      array (
        0 => 'text/x-erlang',
      ),
    ),
    'es' =>
    array (
      't' =>
      array (
        0 => 'application/ecmascript',
      ),
    ),
    'es3' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.eszigno3+xml',
      ),
    ),
    'esa' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.osgi.subsystem',
      ),
    ),
    'esf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.epson.esf',
      ),
    ),
    'et3' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.eszigno3+xml',
      ),
    ),
    'etheme' =>
    array (
      't' =>
      array (
        0 => 'application/x-e-theme',
      ),
    ),
    'etx' =>
    array (
      't' =>
      array (
        0 => 'text/x-setext',
      ),
    ),
    'eva' =>
    array (
      't' =>
      array (
        0 => 'application/x-eva',
      ),
    ),
    'evy' =>
    array (
      't' =>
      array (
        0 => 'application/x-envoy',
      ),
    ),
    'exe' =>
    array (
      't' =>
      array (
        0 => 'application/x-msdownload',
        1 => 'application/x-ms-dos-executable',
      ),
    ),
    'exi' =>
    array (
      't' =>
      array (
        0 => 'application/exi',
      ),
    ),
    'exr' =>
    array (
      't' =>
      array (
        0 => 'image/x-exr',
      ),
    ),
    'ext' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.novadigm.ext',
      ),
    ),
    'ez' =>
    array (
      't' =>
      array (
        0 => 'application/andrew-inset',
      ),
    ),
    'ez2' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ezpix-album',
      ),
    ),
    'ez3' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ezpix-package',
      ),
    ),
    'f' =>
    array (
      't' =>
      array (
        0 => 'text/x-fortran',
      ),
    ),
    'f4a' =>
    array (
      't' =>
      array (
        0 => 'audio/mp4',
      ),
    ),
    'f4b' =>
    array (
      't' =>
      array (
        0 => 'audio/x-m4b',
      ),
    ),
    'f4v' =>
    array (
      't' =>
      array (
        0 => 'video/x-f4v',
        1 => 'video/mp4',
      ),
    ),
    'f77' =>
    array (
      't' =>
      array (
        0 => 'text/x-fortran',
      ),
    ),
    'f90' =>
    array (
      't' =>
      array (
        0 => 'text/x-fortran',
      ),
    ),
    'f95' =>
    array (
      't' =>
      array (
        0 => 'text/x-fortran',
      ),
    ),
    'fasl' =>
    array (
      't' =>
      array (
        0 => 'text/x-common-lisp',
      ),
    ),
    'fb2' =>
    array (
      't' =>
      array (
        0 => 'application/x-fictionbook+xml',
      ),
    ),
    'fb2.zip' =>
    array (
      't' =>
      array (
        0 => 'application/x-zip-compressed-fb2',
      ),
    ),
    'fbs' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.fastbidsheet',
      ),
    ),
    'fcdt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.adobe.formscentral.fcdt',
      ),
    ),
    'fcs' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.isac.fcs',
      ),
    ),
    'fd' =>
    array (
      't' =>
      array (
        0 => 'application/x-raw-floppy-disk-image',
      ),
    ),
    'fdf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.fdf',
      ),
    ),
    'fds' =>
    array (
      't' =>
      array (
        0 => 'application/x-fds-disk',
      ),
    ),
    'fe_launch' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.denovo.fcselayout-link',
      ),
    ),
    'feature' =>
    array (
      't' =>
      array (
        0 => 'text/x-gherkin',
      ),
    ),
    'fg5' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.fujitsu.oasysgp',
      ),
    ),
    'fgd' =>
    array (
      't' =>
      array (
        0 => 'application/x-director',
      ),
    ),
    'fh' =>
    array (
      't' =>
      array (
        0 => 'image/x-freehand',
      ),
    ),
    'fh4' =>
    array (
      't' =>
      array (
        0 => 'image/x-freehand',
      ),
    ),
    'fh5' =>
    array (
      't' =>
      array (
        0 => 'image/x-freehand',
      ),
    ),
    'fh7' =>
    array (
      't' =>
      array (
        0 => 'image/x-freehand',
      ),
    ),
    'fhc' =>
    array (
      't' =>
      array (
        0 => 'image/x-freehand',
      ),
    ),
    'fig' =>
    array (
      't' =>
      array (
        0 => 'application/x-xfig',
        1 => 'image/x-xfig',
      ),
    ),
    'fits' =>
    array (
      't' =>
      array (
        0 => 'image/fits',
      ),
    ),
    'fl' =>
    array (
      't' =>
      array (
        0 => 'application/x-fluid',
      ),
    ),
    'flac' =>
    array (
      't' =>
      array (
        0 => 'audio/flac',
      ),
    ),
    'flatpak' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.flatpak',
      ),
    ),
    'flatpakref' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.flatpak.ref',
      ),
    ),
    'flatpakrepo' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.flatpak.repo',
      ),
    ),
    'flc' =>
    array (
      't' =>
      array (
        0 => 'video/x-flic',
      ),
    ),
    'fli' =>
    array (
      't' =>
      array (
        0 => 'video/x-flic',
      ),
    ),
    'flo' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.micrografx.flo',
      ),
    ),
    'flv' =>
    array (
      't' =>
      array (
        0 => 'video/x-flv',
      ),
    ),
    'flw' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kde.kivio',
        1 => 'application/x-kivio',
      ),
    ),
    'flx' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.fmi.flexstor',
      ),
    ),
    'fly' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.fly',
      ),
    ),
    'fm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.framemaker',
      ),
    ),
    'fnc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.frogans.fnc',
      ),
    ),
    'fo' =>
    array (
      't' =>
      array (
        0 => 'text/x-xslfo',
      ),
    ),
    'fodg' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.graphics-flat-xml',
      ),
    ),
    'fodp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.presentation-flat-xml',
      ),
    ),
    'fods' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.spreadsheet-flat-xml',
      ),
    ),
    'fodt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.text-flat-xml',
      ),
    ),
    'for' =>
    array (
      't' =>
      array (
        0 => 'text/x-fortran',
      ),
    ),
    'fpx' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.fpx',
      ),
    ),
    'frame' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.framemaker',
      ),
    ),
    'fsc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.fsc.weblaunch',
      ),
    ),
    'fst' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.fst',
      ),
    ),
    'ftc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.fluxtime.clip',
      ),
    ),
    'fti' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.anser-web-funds-transfer-initiation',
      ),
    ),
    'fvt' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.fvt',
      ),
    ),
    'fxm' =>
    array (
      't' =>
      array (
        0 => 'video/x-javafx',
      ),
    ),
    'fxp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.adobe.fxp',
      ),
    ),
    'fxpl' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.adobe.fxp',
      ),
    ),
    'fzs' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.fuzzysheet',
      ),
    ),
    'g2w' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.geoplan',
      ),
    ),
    'g3' =>
    array (
      't' =>
      array (
        0 => 'image/fax-g3',
      ),
    ),
    'g3w' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.geospace',
      ),
    ),
    'gac' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.groove-account',
      ),
    ),
    'gam' =>
    array (
      't' =>
      array (
        0 => 'application/x-tads',
      ),
    ),
    'gb' =>
    array (
      't' =>
      array (
        0 => 'application/x-gameboy-rom',
      ),
    ),
    'gba' =>
    array (
      't' =>
      array (
        0 => 'application/x-gba-rom',
      ),
    ),
    'gbc' =>
    array (
      't' =>
      array (
        0 => 'application/x-gameboy-color-rom',
      ),
    ),
    'gbr' =>
    array (
      't' =>
      array (
        0 => 'application/rpki-ghostbusters',
        1 => 'image/x-gimp-gbr',
      ),
    ),
    'gca' =>
    array (
      't' =>
      array (
        0 => 'application/x-gca-compressed',
      ),
    ),
    'gcode' =>
    array (
      't' =>
      array (
        0 => 'text/x.gcode',
      ),
    ),
    'gcrd' =>
    array (
      't' =>
      array (
        0 => 'text/vcard',
      ),
    ),
    'gdl' =>
    array (
      't' =>
      array (
        0 => 'model/vnd.gdl',
      ),
    ),
    'ged' =>
    array (
      't' =>
      array (
        0 => 'application/x-gedcom',
      ),
    ),
    'gedcom' =>
    array (
      't' =>
      array (
        0 => 'application/x-gedcom',
      ),
    ),
    'gem' =>
    array (
      't' =>
      array (
        0 => 'application/x-tar',
      ),
    ),
    'gen' =>
    array (
      't' =>
      array (
        0 => 'application/x-genesis-rom',
      ),
    ),
    'geo' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dynageo',
      ),
    ),
    'geo.json' =>
    array (
      't' =>
      array (
        0 => 'application/geo+json',
      ),
    ),
    'geojson' =>
    array (
      't' =>
      array (
        0 => 'application/geo+json',
      ),
    ),
    'gex' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.geometry-explorer',
      ),
    ),
    'gf' =>
    array (
      't' =>
      array (
        0 => 'application/x-tex-gf',
      ),
    ),
    'gg' =>
    array (
      't' =>
      array (
        0 => 'application/x-gamegear-rom',
      ),
    ),
    'ggb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.geogebra.file',
      ),
    ),
    'ggt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.geogebra.tool',
      ),
    ),
    'ghf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.groove-help',
      ),
    ),
    'gif' =>
    array (
      't' =>
      array (
        0 => 'image/gif',
      ),
    ),
    'gih' =>
    array (
      't' =>
      array (
        0 => 'image/x-gimp-gih',
      ),
    ),
    'gim' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.groove-identity-message',
      ),
    ),
    'glade' =>
    array (
      't' =>
      array (
        0 => 'application/x-glade',
      ),
    ),
    'gml' =>
    array (
      't' =>
      array (
        0 => 'application/gml+xml',
      ),
    ),
    'gmo' =>
    array (
      't' =>
      array (
        0 => 'application/x-gettext-translation',
      ),
    ),
    'gmx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.gmx',
      ),
    ),
    'gnc' =>
    array (
      't' =>
      array (
        0 => 'application/x-gnucash',
      ),
    ),
    'gnd' =>
    array (
      't' =>
      array (
        0 => 'application/gnunet-directory',
      ),
    ),
    'gnucash' =>
    array (
      't' =>
      array (
        0 => 'application/x-gnucash',
      ),
    ),
    'gnumeric' =>
    array (
      't' =>
      array (
        0 => 'application/x-gnumeric',
      ),
    ),
    'gnuplot' =>
    array (
      't' =>
      array (
        0 => 'application/x-gnuplot',
      ),
    ),
    'go' =>
    array (
      't' =>
      array (
        0 => 'text/x-go',
      ),
    ),
    'gp' =>
    array (
      't' =>
      array (
        0 => 'application/x-gnuplot',
      ),
    ),
    'gpg' =>
    array (
      't' =>
      array (
        0 => 'application/pgp-encrypted',
        1 => 'application/pgp-keys',
        2 => 'application/pgp-signature',
      ),
    ),
    'gph' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.flographit',
      ),
    ),
    'gplt' =>
    array (
      't' =>
      array (
        0 => 'application/x-gnuplot',
      ),
    ),
    'gpx' =>
    array (
      't' =>
      array (
        0 => 'application/gpx+xml',
      ),
    ),
    'gqf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.grafeq',
      ),
    ),
    'gqs' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.grafeq',
      ),
    ),
    'gra' =>
    array (
      't' =>
      array (
        0 => 'application/x-graphite',
      ),
    ),
    'gradle' =>
    array (
      't' =>
      array (
        0 => 'text/x-gradle',
      ),
    ),
    'gram' =>
    array (
      't' =>
      array (
        0 => 'application/srgs',
      ),
    ),
    'gramps' =>
    array (
      't' =>
      array (
        0 => 'application/x-gramps-xml',
      ),
    ),
    'gre' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.geometry-explorer',
      ),
    ),
    'groovy' =>
    array (
      't' =>
      array (
        0 => 'text/x-groovy',
      ),
    ),
    'grv' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.groove-injector',
      ),
    ),
    'grxml' =>
    array (
      't' =>
      array (
        0 => 'application/srgs+xml',
      ),
    ),
    'gs' =>
    array (
      't' =>
      array (
        0 => 'text/x-genie',
      ),
    ),
    'gsf' =>
    array (
      't' =>
      array (
        0 => 'application/x-font-ghostscript',
        1 => 'application/x-font-type1',
      ),
    ),
    'gsh' =>
    array (
      't' =>
      array (
        0 => 'text/x-groovy',
      ),
    ),
    'gsm' =>
    array (
      't' =>
      array (
        0 => 'audio/x-gsm',
      ),
    ),
    'gtar' =>
    array (
      't' =>
      array (
        0 => 'application/x-tar',
      ),
    ),
    'gtm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.groove-tool-message',
      ),
    ),
    'gtw' =>
    array (
      't' =>
      array (
        0 => 'model/vnd.gtw',
      ),
    ),
    'gv' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.graphviz',
      ),
    ),
    'gvp' =>
    array (
      't' =>
      array (
        0 => 'text/x-google-video-pointer',
      ),
    ),
    'gvy' =>
    array (
      't' =>
      array (
        0 => 'text/x-groovy',
      ),
    ),
    'gxf' =>
    array (
      't' =>
      array (
        0 => 'application/gxf',
      ),
    ),
    'gxt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.geonext',
      ),
    ),
    'gy' =>
    array (
      't' =>
      array (
        0 => 'text/x-groovy',
      ),
    ),
    'gz' =>
    array (
      't' =>
      array (
        0 => 'application/gzip',
      ),
    ),
    'h' =>
    array (
      't' =>
      array (
        0 => 'text/x-chdr',
      ),
    ),
    'h++' =>
    array (
      't' =>
      array (
        0 => 'text/x-c++hdr',
      ),
    ),
    'h261' =>
    array (
      't' =>
      array (
        0 => 'video/h261',
      ),
    ),
    'h263' =>
    array (
      't' =>
      array (
        0 => 'video/h263',
      ),
    ),
    'h264' =>
    array (
      't' =>
      array (
        0 => 'video/h264',
      ),
    ),
    'h4' =>
    array (
      't' =>
      array (
        0 => 'application/x-hdf',
      ),
    ),
    'h5' =>
    array (
      't' =>
      array (
        0 => 'application/x-hdf',
      ),
    ),
    'hal' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.hal+xml',
      ),
    ),
    'hbci' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.hbci',
      ),
    ),
    'hdf' =>
    array (
      't' =>
      array (
        0 => 'application/x-hdf',
      ),
    ),
    'hdf4' =>
    array (
      't' =>
      array (
        0 => 'application/x-hdf',
      ),
    ),
    'hdf5' =>
    array (
      't' =>
      array (
        0 => 'application/x-hdf',
      ),
    ),
    'heic' =>
    array (
      't' =>
      array (
        0 => 'image/heif',
      ),
    ),
    'heif' =>
    array (
      't' =>
      array (
        0 => 'image/heif',
      ),
    ),
    'hfe' =>
    array (
      't' =>
      array (
        0 => 'application/x-hfe-floppy-image',
      ),
    ),
    'hh' =>
    array (
      't' =>
      array (
        0 => 'text/x-c++hdr',
      ),
    ),
    'hlp' =>
    array (
      't' =>
      array (
        0 => 'application/winhlp',
      ),
    ),
    'hp' =>
    array (
      't' =>
      array (
        0 => 'text/x-c++hdr',
      ),
    ),
    'hpgl' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.hp-hpgl',
      ),
    ),
    'hpid' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.hp-hpid',
      ),
    ),
    'hpp' =>
    array (
      't' =>
      array (
        0 => 'text/x-c++hdr',
      ),
    ),
    'hps' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.hp-hps',
      ),
    ),
    'hqx' =>
    array (
      't' =>
      array (
        0 => 'application/mac-binhex40',
      ),
    ),
    'hs' =>
    array (
      't' =>
      array (
        0 => 'text/x-haskell',
      ),
    ),
    'htke' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kenameaapp',
      ),
    ),
    'htm' =>
    array (
      't' =>
      array (
        0 => 'text/html',
        1 => 'application/xhtml+xml',
      ),
    ),
    'html' =>
    array (
      't' =>
      array (
        0 => 'text/html',
        1 => 'application/xhtml+xml',
      ),
    ),
    'hvd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.yamaha.hv-dic',
      ),
    ),
    'hvp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.yamaha.hv-voice',
      ),
    ),
    'hvs' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.yamaha.hv-script',
      ),
    ),
    'hwp' =>
    array (
      't' =>
      array (
        0 => 'application/x-hwp',
      ),
    ),
    'hwt' =>
    array (
      't' =>
      array (
        0 => 'application/x-hwt',
      ),
    ),
    'hxx' =>
    array (
      't' =>
      array (
        0 => 'text/x-c++hdr',
      ),
    ),
    'i2g' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.intergeo',
      ),
    ),
    'ica' =>
    array (
      't' =>
      array (
        0 => 'application/x-ica',
      ),
    ),
    'icb' =>
    array (
      't' =>
      array (
        0 => 'image/x-tga',
      ),
    ),
    'icc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.iccprofile',
      ),
    ),
    'ice' =>
    array (
      't' =>
      array (
        0 => 'x-conference/x-cooltalk',
      ),
    ),
    'icm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.iccprofile',
      ),
    ),
    'icns' =>
    array (
      't' =>
      array (
        0 => 'image/x-icns',
      ),
    ),
    'ico' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.microsoft.icon',
      ),
    ),
    'ics' =>
    array (
      't' =>
      array (
        0 => 'text/calendar',
      ),
    ),
    'idl' =>
    array (
      't' =>
      array (
        0 => 'text/x-idl',
      ),
    ),
    'ief' =>
    array (
      't' =>
      array (
        0 => 'image/ief',
      ),
    ),
    'ifb' =>
    array (
      't' =>
      array (
        0 => 'text/calendar',
      ),
    ),
    'iff' =>
    array (
      't' =>
      array (
        0 => 'image/x-ilbm',
      ),
    ),
    'ifm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.shana.informed.formdata',
      ),
    ),
    'iges' =>
    array (
      't' =>
      array (
        0 => 'model/iges',
      ),
    ),
    'igl' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.igloader',
      ),
    ),
    'igm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.insors.igm',
      ),
    ),
    'igs' =>
    array (
      't' =>
      array (
        0 => 'model/iges',
      ),
    ),
    'igx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.micrografx.igx',
      ),
    ),
    'iif' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.shana.informed.interchange',
      ),
    ),
    'ilbm' =>
    array (
      't' =>
      array (
        0 => 'image/x-ilbm',
      ),
    ),
    'ime' =>
    array (
      't' =>
      array (
        0 => 'text/x-imelody',
      ),
    ),
    'img' =>
    array (
      't' =>
      array (
        0 => 'application/x-raw-disk-image',
      ),
    ),
    'img.xz' =>
    array (
      't' =>
      array (
        0 => 'application/x-raw-disk-image-xz-compressed',
      ),
    ),
    'imp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.accpac.simply.imp',
      ),
    ),
    'ims' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-ims',
      ),
    ),
    'imy' =>
    array (
      't' =>
      array (
        0 => 'text/x-imelody',
      ),
    ),
    'in' =>
    array (
      't' =>
      array (
        0 => 'text/plain',
      ),
    ),
    'ink' =>
    array (
      't' =>
      array (
        0 => 'application/inkml+xml',
      ),
    ),
    'inkml' =>
    array (
      't' =>
      array (
        0 => 'application/inkml+xml',
      ),
    ),
    'ins' =>
    array (
      't' =>
      array (
        0 => 'text/x-tex',
      ),
    ),
    'install' =>
    array (
      't' =>
      array (
        0 => 'application/x-install-instructions',
      ),
    ),
    'iota' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.astraea-software.iota',
      ),
    ),
    'ipfix' =>
    array (
      't' =>
      array (
        0 => 'application/ipfix',
      ),
    ),
    'ipk' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.shana.informed.package',
      ),
    ),
    'ips' =>
    array (
      't' =>
      array (
        0 => 'application/x-ips-patch',
      ),
    ),
    'iptables' =>
    array (
      't' =>
      array (
        0 => 'text/x-iptables',
      ),
    ),
    'ipynb' =>
    array (
      't' =>
      array (
        0 => 'application/x-ipynb+json',
      ),
    ),
    'irm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ibm.rights-management',
      ),
    ),
    'irp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.irepository.package+xml',
      ),
    ),
    'iso' =>
    array (
      't' =>
      array (
        0 => 'application/x-cd-image',
        1 => 'application/x-sega-cd-rom',
        2 => 'application/x-saturn-rom',
        3 => 'application/x-wii-rom',
        4 => 'application/x-gamecube-rom',
      ),
    ),
    'iso9660' =>
    array (
      't' =>
      array (
        0 => 'application/x-cd-image',
      ),
    ),
    'it' =>
    array (
      't' =>
      array (
        0 => 'audio/x-it',
      ),
    ),
    'it87' =>
    array (
      't' =>
      array (
        0 => 'application/x-it87',
      ),
    ),
    'itp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.shana.informed.formtemplate',
      ),
    ),
    'ivp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.immervision-ivp',
      ),
    ),
    'ivu' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.immervision-ivu',
      ),
    ),
    'j2c' =>
    array (
      't' =>
      array (
        0 => 'image/x-jp2-codestream',
      ),
    ),
    'j2k' =>
    array (
      't' =>
      array (
        0 => 'image/x-jp2-codestream',
      ),
    ),
    'jad' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.sun.j2me.app-descriptor',
      ),
    ),
    'jam' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.jam',
      ),
    ),
    'jar' =>
    array (
      't' =>
      array (
        0 => 'application/x-java-archive',
      ),
    ),
    'java' =>
    array (
      't' =>
      array (
        0 => 'text/x-java-source',
        1 => 'text/x-java',
      ),
    ),
    'jceks' =>
    array (
      't' =>
      array (
        0 => 'application/x-java-jce-keystore',
      ),
    ),
    'jisp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.jisp',
      ),
    ),
    'jks' =>
    array (
      't' =>
      array (
        0 => 'application/x-java-keystore',
      ),
    ),
    'jlt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.hp-jlyt',
      ),
    ),
    'jng' =>
    array (
      't' =>
      array (
        0 => 'image/x-jng',
      ),
    ),
    'jnlp' =>
    array (
      't' =>
      array (
        0 => 'application/x-java-jnlp-file',
      ),
    ),
    'joda' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.joost.joda-archive',
      ),
    ),
    'jp2' =>
    array (
      't' =>
      array (
        0 => 'image/jp2',
      ),
    ),
    'jpc' =>
    array (
      't' =>
      array (
        0 => 'image/x-jp2-codestream',
      ),
    ),
    'jpe' =>
    array (
      't' =>
      array (
        0 => 'image/jpeg',
      ),
    ),
    'jpeg' =>
    array (
      't' =>
      array (
        0 => 'image/jpeg',
      ),
    ),
    'jpf' =>
    array (
      't' =>
      array (
        0 => 'image/jpx',
      ),
    ),
    'jpg' =>
    array (
      't' =>
      array (
        0 => 'image/jpeg',
      ),
    ),
    'jpg2' =>
    array (
      't' =>
      array (
        0 => 'image/jp2',
      ),
    ),
    'jpgm' =>
    array (
      't' =>
      array (
        0 => 'video/jpm',
        1 => 'image/jpm',
      ),
    ),
    'jpgv' =>
    array (
      't' =>
      array (
        0 => 'video/jpeg',
      ),
    ),
    'jpm' =>
    array (
      't' =>
      array (
        0 => 'video/jpm',
        1 => 'image/jpm',
      ),
    ),
    'jpr' =>
    array (
      't' =>
      array (
        0 => 'application/x-jbuilder-project',
      ),
    ),
    'jpx' =>
    array (
      't' =>
      array (
        0 => 'application/x-jbuilder-project',
        1 => 'image/jpx',
      ),
    ),
    'jrd' =>
    array (
      't' =>
      array (
        0 => 'application/jrd+json',
      ),
    ),
    'js' =>
    array (
      't' =>
      array (
        0 => 'application/javascript',
      ),
    ),
    'jsm' =>
    array (
      't' =>
      array (
        0 => 'application/javascript',
      ),
    ),
    'json' =>
    array (
      't' =>
      array (
        0 => 'application/json',
      ),
    ),
    'json-patch' =>
    array (
      't' =>
      array (
        0 => 'application/json-patch+json',
      ),
    ),
    'jsonld' =>
    array (
      't' =>
      array (
        0 => 'application/ld+json',
      ),
    ),
    'jsonml' =>
    array (
      't' =>
      array (
        0 => 'application/jsonml+json',
      ),
    ),
    'k25' =>
    array (
      't' =>
      array (
        0 => 'image/x-kodak-k25',
      ),
    ),
    'k7' =>
    array (
      't' =>
      array (
        0 => 'application/x-thomson-cassette',
      ),
    ),
    'kar' =>
    array (
      't' =>
      array (
        0 => 'audio/midi',
      ),
    ),
    'karbon' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kde.karbon',
        1 => 'application/x-karbon',
      ),
    ),
    'kdc' =>
    array (
      't' =>
      array (
        0 => 'image/x-kodak-kdc',
      ),
    ),
    'kdelnk' =>
    array (
      't' =>
      array (
        0 => 'application/x-desktop',
      ),
    ),
    'kexi' =>
    array (
      't' =>
      array (
        0 => 'application/x-kexiproject-sqlite2',
        1 => 'application/x-kexiproject-sqlite3',
      ),
    ),
    'kexic' =>
    array (
      't' =>
      array (
        0 => 'application/x-kexi-connectiondata',
      ),
    ),
    'kexis' =>
    array (
      't' =>
      array (
        0 => 'application/x-kexiproject-shortcut',
      ),
    ),
    'key' =>
    array (
      't' =>
      array (
        0 => 'application/pgp-keys',
        1 => 'application/x-iwork-keynote-sffkey',
      ),
    ),
    'kfo' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kde.kformula',
        1 => 'application/x-kformula',
      ),
    ),
    'kfx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.amazon.mobi8-ebook',
      ),
    ),
    'kia' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kidspiration',
      ),
    ),
    'kil' =>
    array (
      't' =>
      array (
        0 => 'application/x-killustrator',
      ),
    ),
    'kino' =>
    array (
      't' =>
      array (
        0 => 'application/smil+xml',
      ),
    ),
    'kml' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.google-earth.kml+xml',
      ),
    ),
    'kmz' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.google-earth.kmz',
      ),
    ),
    'kne' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kinar',
      ),
    ),
    'knp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kinar',
      ),
    ),
    'kon' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kde.kontour',
        1 => 'application/x-kontour',
      ),
    ),
    'kpm' =>
    array (
      't' =>
      array (
        0 => 'application/x-kpovmodeler',
      ),
    ),
    'kpr' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kde.kpresenter',
        1 => 'application/x-kpresenter',
      ),
    ),
    'kpt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kde.kpresenter',
        1 => 'application/x-kpresenter',
      ),
    ),
    'kpxx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ds-keypoint',
      ),
    ),
    'kra' =>
    array (
      't' =>
      array (
        0 => 'application/x-krita',
      ),
    ),
    'ks' =>
    array (
      't' =>
      array (
        0 => 'application/x-java-keystore',
      ),
    ),
    'ksp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kde.kspread',
        1 => 'application/x-kspread',
      ),
    ),
    'kt' =>
    array (
      't' =>
      array (
        0 => 'text/x-kotlin',
      ),
    ),
    'ktr' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kahootz',
      ),
    ),
    'ktx' =>
    array (
      't' =>
      array (
        0 => 'image/ktx',
      ),
    ),
    'ktz' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kahootz',
      ),
    ),
    'kud' =>
    array (
      't' =>
      array (
        0 => 'application/x-kugar',
      ),
    ),
    'kwd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kde.kword',
        1 => 'application/x-kword',
      ),
    ),
    'kwt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kde.kword',
        1 => 'application/x-kword',
      ),
    ),
    'la' =>
    array (
      't' =>
      array (
        0 => 'application/x-shared-library-la',
      ),
    ),
    'lasxml' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.las.las+xml',
      ),
    ),
    'latex' =>
    array (
      't' =>
      array (
        0 => 'application/x-latex',
        1 => 'text/x-tex',
      ),
    ),
    'lbd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.llamagraphics.life-balance.desktop',
      ),
    ),
    'lbe' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.llamagraphics.life-balance.exchange+xml',
      ),
    ),
    'lbm' =>
    array (
      't' =>
      array (
        0 => 'image/x-ilbm',
      ),
    ),
    'ldif' =>
    array (
      't' =>
      array (
        0 => 'text/x-ldif',
      ),
    ),
    'les' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.hhe.lesson-player',
      ),
    ),
    'lha' =>
    array (
      't' =>
      array (
        0 => 'application/x-lha',
      ),
    ),
    'lhs' =>
    array (
      't' =>
      array (
        0 => 'text/x-literate-haskell',
      ),
    ),
    'lhz' =>
    array (
      't' =>
      array (
        0 => 'application/x-lhz',
      ),
    ),
    'link66' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.route66.link66+xml',
      ),
    ),
    'lisp' =>
    array (
      't' =>
      array (
        0 => 'text/x-common-lisp',
      ),
    ),
    'list' =>
    array (
      't' =>
      array (
        0 => 'text/plain',
      ),
    ),
    'list3820' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ibm.modcap',
      ),
    ),
    'listafp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ibm.modcap',
      ),
    ),
    'lnk' =>
    array (
      't' =>
      array (
        0 => 'application/x-ms-shortcut',
      ),
    ),
    'lnx' =>
    array (
      't' =>
      array (
        0 => 'application/x-atari-lynx-rom',
      ),
    ),
    'loas' =>
    array (
      't' =>
      array (
        0 => 'audio/usac',
      ),
    ),
    'log' =>
    array (
      't' =>
      array (
        0 => 'text/plain',
        1 => 'text/x-log',
      ),
    ),
    'lostxml' =>
    array (
      't' =>
      array (
        0 => 'application/lost+xml',
      ),
    ),
    'lrf' =>
    array (
      't' =>
      array (
        0 => 'application/octet-stream',
      ),
    ),
    'lrm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-lrm',
      ),
    ),
    'lrv' =>
    array (
      't' =>
      array (
        0 => 'video/mp4',
      ),
    ),
    'lrz' =>
    array (
      't' =>
      array (
        0 => 'application/x-lrzip',
      ),
    ),
    'ltf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.frogans.ltf',
      ),
    ),
    'ltx' =>
    array (
      't' =>
      array (
        0 => 'text/x-tex',
      ),
    ),
    'lua' =>
    array (
      't' =>
      array (
        0 => 'text/x-lua',
      ),
    ),
    'lvp' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.lucent.voice',
      ),
    ),
    'lwo' =>
    array (
      't' =>
      array (
        0 => 'image/x-lwo',
      ),
    ),
    'lwob' =>
    array (
      't' =>
      array (
        0 => 'image/x-lwo',
      ),
    ),
    'lwp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.lotus-wordpro',
      ),
    ),
    'lws' =>
    array (
      't' =>
      array (
        0 => 'image/x-lws',
      ),
    ),
    'ly' =>
    array (
      't' =>
      array (
        0 => 'text/x-lilypond',
      ),
    ),
    'lyx' =>
    array (
      't' =>
      array (
        0 => 'application/x-lyx',
      ),
    ),
    'lz' =>
    array (
      't' =>
      array (
        0 => 'application/x-lzip',
      ),
    ),
    'lz4' =>
    array (
      't' =>
      array (
        0 => 'application/x-lz4',
      ),
    ),
    'lzh' =>
    array (
      't' =>
      array (
        0 => 'application/x-lha',
      ),
    ),
    'lzma' =>
    array (
      't' =>
      array (
        0 => 'application/x-lzma',
      ),
    ),
    'lzo' =>
    array (
      't' =>
      array (
        0 => 'application/x-lzop',
      ),
    ),
    'm' =>
    array (
      't' =>
      array (
        0 => 'text/x-objcsrc',
        1 => 'text/x-matlab',
      ),
    ),
    'm13' =>
    array (
      't' =>
      array (
        0 => 'application/x-msmediaview',
      ),
    ),
    'm14' =>
    array (
      't' =>
      array (
        0 => 'application/x-msmediaview',
      ),
    ),
    'm15' =>
    array (
      't' =>
      array (
        0 => 'audio/x-mod',
      ),
    ),
    'm1u' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.mpegurl',
      ),
    ),
    'm1v' =>
    array (
      't' =>
      array (
        0 => 'video/mpeg',
      ),
    ),
    'm21' =>
    array (
      't' =>
      array (
        0 => 'application/mp21',
      ),
    ),
    'm2a' =>
    array (
      't' =>
      array (
        0 => 'audio/mpeg',
      ),
    ),
    'm2t' =>
    array (
      't' =>
      array (
        0 => 'video/mp2t',
      ),
    ),
    'm2ts' =>
    array (
      't' =>
      array (
        0 => 'video/mp2t',
      ),
    ),
    'm2v' =>
    array (
      't' =>
      array (
        0 => 'video/mpeg',
      ),
    ),
    'm3a' =>
    array (
      't' =>
      array (
        0 => 'audio/mpeg',
      ),
    ),
    'm3u' =>
    array (
      't' =>
      array (
        0 => 'audio/x-mpegurl',
        1 => 'application/vnd.apple.mpegurl',
      ),
    ),
    'm3u8' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.apple.mpegurl',
        1 => 'audio/x-mpegurl',
      ),
    ),
    'm4' =>
    array (
      't' =>
      array (
        0 => 'application/x-m4',
      ),
    ),
    'm4a' =>
    array (
      't' =>
      array (
        0 => 'audio/mp4',
      ),
    ),
    'm4b' =>
    array (
      't' =>
      array (
        0 => 'audio/x-m4b',
      ),
    ),
    'm4r' =>
    array (
      't' =>
      array (
        0 => 'audio/x-m4r',
      ),
    ),
    'm4u' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.mpegurl',
      ),
    ),
    'm4v' =>
    array (
      't' =>
      array (
        0 => 'video/mp4',
      ),
    ),
    'm7' =>
    array (
      't' =>
      array (
        0 => 'application/x-thomson-cartridge-memo7',
      ),
    ),
    'ma' =>
    array (
      't' =>
      array (
        0 => 'application/mathematica',
      ),
    ),
    'mab' =>
    array (
      't' =>
      array (
        0 => 'application/x-markaby',
      ),
    ),
    'mads' =>
    array (
      't' =>
      array (
        0 => 'application/mads+xml',
      ),
    ),
    'mag' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ecowin.chart',
      ),
    ),
    'mak' =>
    array (
      't' =>
      array (
        0 => 'text/x-makefile',
      ),
    ),
    'maker' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.framemaker',
      ),
    ),
    'man' =>
    array (
      't' =>
      array (
        0 => 'text/troff',
        1 => 'application/x-troff-man',
      ),
    ),
    'manifest' =>
    array (
      't' =>
      array (
        0 => 'text/cache-manifest',
      ),
    ),
    'mar' =>
    array (
      't' =>
      array (
        0 => 'application/octet-stream',
      ),
    ),
    'markdown' =>
    array (
      't' =>
      array (
        0 => 'text/markdown',
      ),
    ),
    'mathml' =>
    array (
      't' =>
      array (
        0 => 'application/mathml+xml',
      ),
    ),
    'mb' =>
    array (
      't' =>
      array (
        0 => 'application/mathematica',
      ),
    ),
    'mbk' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mobius.mbk',
      ),
    ),
    'mbox' =>
    array (
      't' =>
      array (
        0 => 'application/mbox',
      ),
    ),
    'mc1' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.medcalcdata',
      ),
    ),
    'mc2' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.senx.warpscript',
      ),
    ),
    'mcd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mcd',
      ),
    ),
    'mcurl' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.curl.mcurl',
      ),
    ),
    'md' =>
    array (
      't' =>
      array (
        0 => 'text/markdown',
      ),
    ),
    'mdb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-access',
      ),
    ),
    'mdi' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.ms-modi',
      ),
    ),
    'mdx' =>
    array (
      't' =>
      array (
        0 => 'application/x-genesis-32x-rom',
      ),
    ),
    'me' =>
    array (
      't' =>
      array (
        0 => 'text/troff',
        1 => 'text/x-troff-me',
      ),
    ),
    'med' =>
    array (
      't' =>
      array (
        0 => 'audio/x-mod',
      ),
    ),
    'mesh' =>
    array (
      't' =>
      array (
        0 => 'model/mesh',
      ),
    ),
    'meta4' =>
    array (
      't' =>
      array (
        0 => 'application/metalink4+xml',
      ),
    ),
    'metalink' =>
    array (
      't' =>
      array (
        0 => 'application/metalink+xml',
      ),
    ),
    'mets' =>
    array (
      't' =>
      array (
        0 => 'application/mets+xml',
      ),
    ),
    'mfm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mfmp',
      ),
    ),
    'mft' =>
    array (
      't' =>
      array (
        0 => 'application/rpki-manifest',
      ),
    ),
    'mgp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.osgeo.mapguide.package',
        1 => 'application/x-magicpoint',
      ),
    ),
    'mgz' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.proteus.magazine',
      ),
    ),
    'mht' =>
    array (
      't' =>
      array (
        0 => 'application/x-mimearchive',
      ),
    ),
    'mhtml' =>
    array (
      't' =>
      array (
        0 => 'application/x-mimearchive',
      ),
    ),
    'mid' =>
    array (
      't' =>
      array (
        0 => 'audio/midi',
      ),
    ),
    'midi' =>
    array (
      't' =>
      array (
        0 => 'audio/midi',
      ),
    ),
    'mie' =>
    array (
      't' =>
      array (
        0 => 'application/x-mie',
      ),
    ),
    'mif' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mif',
        1 => 'application/x-mif',
      ),
    ),
    'mime' =>
    array (
      't' =>
      array (
        0 => 'message/rfc822',
      ),
    ),
    'minipsf' =>
    array (
      't' =>
      array (
        0 => 'audio/x-minipsf',
      ),
    ),
    'mj2' =>
    array (
      't' =>
      array (
        0 => 'video/mj2',
      ),
    ),
    'mjp2' =>
    array (
      't' =>
      array (
        0 => 'video/mj2',
      ),
    ),
    'mjpeg' =>
    array (
      't' =>
      array (
        0 => 'video/x-mjpeg',
      ),
    ),
    'mjpg' =>
    array (
      't' =>
      array (
        0 => 'video/x-mjpeg',
      ),
    ),
    'mjs' =>
    array (
      't' =>
      array (
        0 => 'application/javascript',
      ),
    ),
    'mk' =>
    array (
      't' =>
      array (
        0 => 'text/x-makefile',
      ),
    ),
    'mk3d' =>
    array (
      't' =>
      array (
        0 => 'video/x-matroska',
        1 => 'video/x-matroska-3d',
      ),
    ),
    'mka' =>
    array (
      't' =>
      array (
        0 => 'audio/x-matroska',
      ),
    ),
    'mkd' =>
    array (
      't' =>
      array (
        0 => 'text/markdown',
      ),
    ),
    'mks' =>
    array (
      't' =>
      array (
        0 => 'video/x-matroska',
      ),
    ),
    'mkv' =>
    array (
      't' =>
      array (
        0 => 'video/x-matroska',
      ),
    ),
    'ml' =>
    array (
      't' =>
      array (
        0 => 'text/x-ocaml',
      ),
    ),
    'mli' =>
    array (
      't' =>
      array (
        0 => 'text/x-ocaml',
      ),
    ),
    'mlp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dolby.mlp',
      ),
    ),
    'mm' =>
    array (
      't' =>
      array (
        0 => 'text/x-troff-mm',
      ),
    ),
    'mmd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.chipnuts.karaoke-mmd',
      ),
    ),
    'mmf' =>
    array (
      't' =>
      array (
        0 => 'application/x-smaf',
      ),
    ),
    'mml' =>
    array (
      't' =>
      array (
        0 => 'application/mathml+xml',
      ),
    ),
    'mmr' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.fujixerox.edmics-mmr',
      ),
    ),
    'mng' =>
    array (
      't' =>
      array (
        0 => 'video/x-mng',
      ),
    ),
    'mny' =>
    array (
      't' =>
      array (
        0 => 'application/x-msmoney',
      ),
    ),
    'mo' =>
    array (
      't' =>
      array (
        0 => 'application/x-gettext-translation',
        1 => 'text/x-modelica',
      ),
    ),
    'mo3' =>
    array (
      't' =>
      array (
        0 => 'audio/x-mo3',
      ),
    ),
    'mobi' =>
    array (
      't' =>
      array (
        0 => 'application/x-mobipocket-ebook',
      ),
    ),
    'moc' =>
    array (
      't' =>
      array (
        0 => 'text/x-moc',
      ),
    ),
    'mod' =>
    array (
      't' =>
      array (
        0 => 'audio/x-mod',
      ),
    ),
    'mods' =>
    array (
      't' =>
      array (
        0 => 'application/mods+xml',
      ),
    ),
    'mof' =>
    array (
      't' =>
      array (
        0 => 'text/x-mof',
      ),
    ),
    'moov' =>
    array (
      't' =>
      array (
        0 => 'video/quicktime',
      ),
    ),
    'mount' =>
    array (
      't' =>
      array (
        0 => 'text/x-systemd-unit',
      ),
    ),
    'mov' =>
    array (
      't' =>
      array (
        0 => 'video/quicktime',
      ),
    ),
    'movie' =>
    array (
      't' =>
      array (
        0 => 'video/x-sgi-movie',
      ),
    ),
    'mp+' =>
    array (
      't' =>
      array (
        0 => 'audio/x-musepack',
      ),
    ),
    'mp2' =>
    array (
      't' =>
      array (
        0 => 'audio/mpeg',
        1 => 'audio/mp2',
        2 => 'video/mpeg',
      ),
    ),
    'mp21' =>
    array (
      't' =>
      array (
        0 => 'application/mp21',
      ),
    ),
    'mp2a' =>
    array (
      't' =>
      array (
        0 => 'audio/mpeg',
      ),
    ),
    'mp3' =>
    array (
      't' =>
      array (
        0 => 'audio/mpeg',
      ),
    ),
    'mp4' =>
    array (
      't' =>
      array (
        0 => 'video/mp4',
      ),
    ),
    'mp4a' =>
    array (
      't' =>
      array (
        0 => 'audio/mp4',
      ),
    ),
    'mp4s' =>
    array (
      't' =>
      array (
        0 => 'application/mp4',
      ),
    ),
    'mp4v' =>
    array (
      't' =>
      array (
        0 => 'video/mp4',
      ),
    ),
    'mpc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mophun.certificate',
        1 => 'audio/x-musepack',
      ),
    ),
    'mpe' =>
    array (
      't' =>
      array (
        0 => 'video/mpeg',
      ),
    ),
    'mpeg' =>
    array (
      't' =>
      array (
        0 => 'video/mpeg',
      ),
    ),
    'mpg' =>
    array (
      't' =>
      array (
        0 => 'video/mpeg',
      ),
    ),
    'mpg4' =>
    array (
      't' =>
      array (
        0 => 'video/mp4',
      ),
    ),
    'mpga' =>
    array (
      't' =>
      array (
        0 => 'audio/mpeg',
      ),
    ),
    'mpkg' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.apple.installer+xml',
      ),
    ),
    'mpl' =>
    array (
      't' =>
      array (
        0 => 'video/mp2t',
      ),
    ),
    'mpls' =>
    array (
      't' =>
      array (
        0 => 'video/mp2t',
      ),
    ),
    'mpm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.blueice.multipass',
      ),
    ),
    'mpn' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mophun.application',
      ),
    ),
    'mpp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-project',
        1 => 'audio/x-musepack',
      ),
    ),
    'mpt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-project',
      ),
    ),
    'mpy' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ibm.minipay',
      ),
    ),
    'mqy' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mobius.mqy',
      ),
    ),
    'mrc' =>
    array (
      't' =>
      array (
        0 => 'application/marc',
      ),
    ),
    'mrcx' =>
    array (
      't' =>
      array (
        0 => 'application/marcxml+xml',
      ),
    ),
    'mrl' =>
    array (
      't' =>
      array (
        0 => 'text/x-mrml',
      ),
    ),
    'mrml' =>
    array (
      't' =>
      array (
        0 => 'text/x-mrml',
      ),
    ),
    'mrw' =>
    array (
      't' =>
      array (
        0 => 'image/x-minolta-mrw',
      ),
    ),
    'ms' =>
    array (
      't' =>
      array (
        0 => 'text/troff',
        1 => 'text/x-troff-ms',
      ),
    ),
    'mscml' =>
    array (
      't' =>
      array (
        0 => 'application/mediaservercontrol+xml',
      ),
    ),
    'mseed' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.fdsn.mseed',
      ),
    ),
    'mseq' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mseq',
      ),
    ),
    'msf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.epson.msf',
      ),
    ),
    'msh' =>
    array (
      't' =>
      array (
        0 => 'model/mesh',
      ),
    ),
    'msi' =>
    array (
      't' =>
      array (
        0 => 'application/x-msdownload',
        1 => 'application/x-msi',
      ),
    ),
    'msl' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mobius.msl',
      ),
    ),
    'msod' =>
    array (
      't' =>
      array (
        0 => 'image/x-msod',
      ),
    ),
    'msty' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.muvee.style',
      ),
    ),
    'msx' =>
    array (
      't' =>
      array (
        0 => 'application/x-msx-rom',
      ),
    ),
    'mtm' =>
    array (
      't' =>
      array (
        0 => 'audio/x-mod',
      ),
    ),
    'mts' =>
    array (
      't' =>
      array (
        0 => 'model/vnd.mts',
        1 => 'video/mp2t',
      ),
    ),
    'mup' =>
    array (
      't' =>
      array (
        0 => 'text/x-mup',
      ),
    ),
    'mus' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.musician',
      ),
    ),
    'musicxml' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.recordare.musicxml+xml',
      ),
    ),
    'mvb' =>
    array (
      't' =>
      array (
        0 => 'application/x-msmediaview',
      ),
    ),
    'mwf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mfer',
      ),
    ),
    'mxf' =>
    array (
      't' =>
      array (
        0 => 'application/mxf',
      ),
    ),
    'mxl' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.recordare.musicxml',
      ),
    ),
    'mxml' =>
    array (
      't' =>
      array (
        0 => 'application/xv+xml',
      ),
    ),
    'mxs' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.triscape.mxs',
      ),
    ),
    'mxu' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.mpegurl',
      ),
    ),
    'n-gage' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.nokia.n-gage.symbian.install',
      ),
    ),
    'n3' =>
    array (
      't' =>
      array (
        0 => 'text/n3',
      ),
    ),
    'n64' =>
    array (
      't' =>
      array (
        0 => 'application/x-n64-rom',
      ),
    ),
    'nb' =>
    array (
      't' =>
      array (
        0 => 'application/mathematica',
      ),
    ),
    'nbp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.wolfram.player',
      ),
    ),
    'nc' =>
    array (
      't' =>
      array (
        0 => 'application/x-netcdf',
      ),
    ),
    'ncx' =>
    array (
      't' =>
      array (
        0 => 'application/x-dtbncx+xml',
      ),
    ),
    'nds' =>
    array (
      't' =>
      array (
        0 => 'application/x-nintendo-ds-rom',
      ),
    ),
    'nef' =>
    array (
      't' =>
      array (
        0 => 'image/x-nikon-nef',
      ),
    ),
    'nes' =>
    array (
      't' =>
      array (
        0 => 'application/x-nes-rom',
      ),
    ),
    'nez' =>
    array (
      't' =>
      array (
        0 => 'application/x-nes-rom',
      ),
    ),
    'nfo' =>
    array (
      't' =>
      array (
        0 => 'text/x-nfo',
      ),
    ),
    'ngc' =>
    array (
      't' =>
      array (
        0 => 'application/x-neo-geo-pocket-color-rom',
      ),
    ),
    'ngdat' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.nokia.n-gage.data',
      ),
    ),
    'ngp' =>
    array (
      't' =>
      array (
        0 => 'application/x-neo-geo-pocket-rom',
      ),
    ),
    'nitf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.nitf',
      ),
    ),
    'nlu' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.neurolanguage.nlu',
      ),
    ),
    'nml' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.enliven',
      ),
    ),
    'nnd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.noblenet-directory',
      ),
    ),
    'nns' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.noblenet-sealer',
      ),
    ),
    'nnw' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.noblenet-web',
      ),
    ),
    'not' =>
    array (
      't' =>
      array (
        0 => 'text/x-mup',
      ),
    ),
    'npx' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.net-fpx',
      ),
    ),
    'nsc' =>
    array (
      't' =>
      array (
        0 => 'application/x-conference',
        1 => 'application/x-netshow-channel',
      ),
    ),
    'nsf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.lotus-notes',
      ),
    ),
    'nsv' =>
    array (
      't' =>
      array (
        0 => 'video/x-nsv',
      ),
    ),
    'ntf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.nitf',
      ),
    ),
    'nzb' =>
    array (
      't' =>
      array (
        0 => 'application/x-nzb',
      ),
    ),
    'o' =>
    array (
      't' =>
      array (
        0 => 'application/x-object',
      ),
    ),
    'oa2' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.fujitsu.oasys2',
      ),
    ),
    'oa3' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.fujitsu.oasys3',
      ),
    ),
    'oas' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.fujitsu.oasys',
      ),
    ),
    'obd' =>
    array (
      't' =>
      array (
        0 => 'application/x-msbinder',
      ),
    ),
    'obj' =>
    array (
      't' =>
      array (
        0 => 'application/x-tgif',
      ),
    ),
    'ocl' =>
    array (
      't' =>
      array (
        0 => 'text/x-ocl',
      ),
    ),
    'oda' =>
    array (
      't' =>
      array (
        0 => 'application/oda',
      ),
    ),
    'odb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.database',
      ),
    ),
    'odc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.chart',
      ),
    ),
    'odf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.formula',
      ),
    ),
    'odft' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.formula-template',
      ),
    ),
    'odg' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.graphics',
      ),
    ),
    'odi' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.image',
      ),
    ),
    'odm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.text-master',
      ),
    ),
    'odp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.presentation',
      ),
    ),
    'ods' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.spreadsheet',
      ),
    ),
    'odt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.text',
      ),
    ),
    'oga' =>
    array (
      't' =>
      array (
        0 => 'audio/ogg',
        1 => 'audio/x-vorbis+ogg',
        2 => 'audio/x-flac+ogg',
        3 => 'audio/x-speex+ogg',
      ),
    ),
    'ogg' =>
    array (
      't' =>
      array (
        0 => 'audio/ogg',
        1 => 'video/ogg',
        2 => 'audio/x-vorbis+ogg',
        3 => 'audio/x-flac+ogg',
        4 => 'audio/x-speex+ogg',
        5 => 'video/x-theora+ogg',
      ),
    ),
    'ogm' =>
    array (
      't' =>
      array (
        0 => 'video/x-ogm+ogg',
      ),
    ),
    'ogv' =>
    array (
      't' =>
      array (
        0 => 'video/ogg',
      ),
    ),
    'ogx' =>
    array (
      't' =>
      array (
        0 => 'application/ogg',
      ),
    ),
    'old' =>
    array (
      't' =>
      array (
        0 => 'application/x-trash',
      ),
    ),
    'oleo' =>
    array (
      't' =>
      array (
        0 => 'application/x-oleo',
      ),
    ),
    'omdoc' =>
    array (
      't' =>
      array (
        0 => 'application/omdoc+xml',
      ),
    ),
    'onepkg' =>
    array (
      't' =>
      array (
        0 => 'application/onenote',
      ),
    ),
    'onetmp' =>
    array (
      't' =>
      array (
        0 => 'application/onenote',
      ),
    ),
    'onetoc' =>
    array (
      't' =>
      array (
        0 => 'application/onenote',
      ),
    ),
    'onetoc2' =>
    array (
      't' =>
      array (
        0 => 'application/onenote',
      ),
    ),
    'ooc' =>
    array (
      't' =>
      array (
        0 => 'text/x-ooc',
      ),
    ),
    'opf' =>
    array (
      't' =>
      array (
        0 => 'application/oebps-package+xml',
      ),
    ),
    'opml' =>
    array (
      't' =>
      array (
        0 => 'text/x-opml+xml',
      ),
    ),
    'oprc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.palm',
      ),
    ),
    'opus' =>
    array (
      't' =>
      array (
        0 => 'audio/ogg',
        1 => 'audio/x-opus+ogg',
      ),
    ),
    'ora' =>
    array (
      't' =>
      array (
        0 => 'image/openraster',
      ),
    ),
    'orf' =>
    array (
      't' =>
      array (
        0 => 'image/x-olympus-orf',
      ),
    ),
    'org' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.lotus-organizer',
      ),
    ),
    'osf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.yamaha.openscoreformat',
      ),
    ),
    'osfpvg' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.yamaha.openscoreformat.osfpvg+xml',
      ),
    ),
    'otc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.chart-template',
      ),
    ),
    'otf' =>
    array (
      't' =>
      array (
        0 => 'font/otf',
        1 => 'application/vnd.oasis.opendocument.formula-template',
      ),
    ),
    'otg' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.graphics-template',
      ),
    ),
    'oth' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.text-web',
      ),
    ),
    'oti' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.image-template',
      ),
    ),
    'otp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.presentation-template',
      ),
    ),
    'ots' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.spreadsheet-template',
      ),
    ),
    'ott' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.text-template',
      ),
    ),
    'owl' =>
    array (
      't' =>
      array (
        0 => 'application/rdf+xml',
      ),
    ),
    'owx' =>
    array (
      't' =>
      array (
        0 => 'application/owl+xml',
      ),
    ),
    'oxps' =>
    array (
      't' =>
      array (
        0 => 'application/oxps',
      ),
    ),
    'oxt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.openofficeorg.extension',
      ),
    ),
    'p' =>
    array (
      't' =>
      array (
        0 => 'text/x-pascal',
      ),
    ),
    'p10' =>
    array (
      't' =>
      array (
        0 => 'application/pkcs10',
      ),
    ),
    'p12' =>
    array (
      't' =>
      array (
        0 => 'application/pkcs12',
      ),
    ),
    'p65' =>
    array (
      't' =>
      array (
        0 => 'application/x-pagemaker',
      ),
    ),
    'p7b' =>
    array (
      't' =>
      array (
        0 => 'application/x-pkcs7-certificates',
      ),
    ),
    'p7c' =>
    array (
      't' =>
      array (
        0 => 'application/pkcs7-mime',
      ),
    ),
    'p7m' =>
    array (
      't' =>
      array (
        0 => 'application/pkcs7-mime',
      ),
    ),
    'p7r' =>
    array (
      't' =>
      array (
        0 => 'application/x-pkcs7-certreqresp',
      ),
    ),
    'p7s' =>
    array (
      't' =>
      array (
        0 => 'application/pkcs7-signature',
      ),
    ),
    'p8' =>
    array (
      't' =>
      array (
        0 => 'application/pkcs8',
      ),
    ),
    'p8e' =>
    array (
      't' =>
      array (
        0 => 'application/pkcs8-encrypted',
      ),
    ),
    'pack' =>
    array (
      't' =>
      array (
        0 => 'application/x-java-pack200',
      ),
    ),
    'pak' =>
    array (
      't' =>
      array (
        0 => 'application/x-pak',
      ),
    ),
    'par2' =>
    array (
      't' =>
      array (
        0 => 'application/x-par2',
      ),
    ),
    'part' =>
    array (
      't' =>
      array (
        0 => 'application/x-partial-download',
      ),
    ),
    'pas' =>
    array (
      't' =>
      array (
        0 => 'text/x-pascal',
      ),
    ),
    'pat' =>
    array (
      't' =>
      array (
        0 => 'image/x-gimp-pat',
      ),
    ),
    'patch' =>
    array (
      't' =>
      array (
        0 => 'text/x-patch',
      ),
    ),
    'path' =>
    array (
      't' =>
      array (
        0 => 'text/x-systemd-unit',
      ),
    ),
    'paw' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.pawaafile',
      ),
    ),
    'pbd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.powerbuilder6',
      ),
    ),
    'pbm' =>
    array (
      't' =>
      array (
        0 => 'image/x-portable-bitmap',
      ),
    ),
    'pcap' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.tcpdump.pcap',
      ),
    ),
    'pcd' =>
    array (
      't' =>
      array (
        0 => 'image/x-photo-cd',
      ),
    ),
    'pce' =>
    array (
      't' =>
      array (
        0 => 'application/x-pc-engine-rom',
      ),
    ),
    'pcf' =>
    array (
      't' =>
      array (
        0 => 'application/x-font-pcf',
        1 => 'application/x-cisco-vpn-settings',
      ),
    ),
    'pcf.gz' =>
    array (
      't' =>
      array (
        0 => 'application/x-font-pcf',
      ),
    ),
    'pcf.z' =>
    array (
      't' =>
      array (
        0 => 'application/x-font-pcf',
      ),
    ),
    'pcl' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.hp-pcl',
      ),
    ),
    'pclxl' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.hp-pclxl',
      ),
    ),
    'pct' =>
    array (
      't' =>
      array (
        0 => 'image/x-pict',
      ),
    ),
    'pcurl' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.curl.pcurl',
      ),
    ),
    'pcx' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.zbrush.pcx',
      ),
    ),
    'pdb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.palm',
        1 => 'application/x-aportisdoc',
      ),
    ),
    'pdc' =>
    array (
      't' =>
      array (
        0 => 'application/x-aportisdoc',
      ),
    ),
    'pdf' =>
    array (
      't' =>
      array (
        0 => 'application/pdf',
      ),
    ),
    'pdf.bz2' =>
    array (
      't' =>
      array (
        0 => 'application/x-bzpdf',
      ),
    ),
    'pdf.gz' =>
    array (
      't' =>
      array (
        0 => 'application/x-gzpdf',
      ),
    ),
    'pdf.lz' =>
    array (
      't' =>
      array (
        0 => 'application/x-lzpdf',
      ),
    ),
    'pdf.xz' =>
    array (
      't' =>
      array (
        0 => 'application/x-xzpdf',
      ),
    ),
    'pef' =>
    array (
      't' =>
      array (
        0 => 'image/x-pentax-pef',
      ),
    ),
    'pem' =>
    array (
      't' =>
      array (
        0 => 'application/x-x509-ca-cert',
      ),
    ),
    'perl' =>
    array (
      't' =>
      array (
        0 => 'application/x-perl',
      ),
    ),
    'pfa' =>
    array (
      't' =>
      array (
        0 => 'application/x-font-type1',
      ),
    ),
    'pfb' =>
    array (
      't' =>
      array (
        0 => 'application/x-font-type1',
      ),
    ),
    'pfm' =>
    array (
      't' =>
      array (
        0 => 'application/x-font-type1',
      ),
    ),
    'pfr' =>
    array (
      't' =>
      array (
        0 => 'application/font-tdpfr',
      ),
    ),
    'pfx' =>
    array (
      't' =>
      array (
        0 => 'application/pkcs12',
      ),
    ),
    'pgm' =>
    array (
      't' =>
      array (
        0 => 'image/x-portable-graymap',
      ),
    ),
    'pgn' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.chess-pgn',
      ),
    ),
    'pgp' =>
    array (
      't' =>
      array (
        0 => 'application/pgp-encrypted',
        1 => 'application/pgp-keys',
        2 => 'application/pgp-signature',
      ),
    ),
    'php' =>
    array (
      't' =>
      array (
        0 => 'application/x-php',
      ),
    ),
    'php3' =>
    array (
      't' =>
      array (
        0 => 'application/x-php',
      ),
    ),
    'php4' =>
    array (
      't' =>
      array (
        0 => 'application/x-php',
      ),
    ),
    'php5' =>
    array (
      't' =>
      array (
        0 => 'application/x-php',
      ),
    ),
    'phps' =>
    array (
      't' =>
      array (
        0 => 'application/x-php',
      ),
    ),
    'pic' =>
    array (
      't' =>
      array (
        0 => 'image/x-pict',
      ),
    ),
    'pict' =>
    array (
      't' =>
      array (
        0 => 'image/x-pict',
      ),
    ),
    'pict1' =>
    array (
      't' =>
      array (
        0 => 'image/x-pict',
      ),
    ),
    'pict2' =>
    array (
      't' =>
      array (
        0 => 'image/x-pict',
      ),
    ),
    'pk' =>
    array (
      't' =>
      array (
        0 => 'application/x-tex-pk',
      ),
    ),
    'pkg' =>
    array (
      't' =>
      array (
        0 => 'application/octet-stream',
        1 => 'application/x-xar',
      ),
    ),
    'pki' =>
    array (
      't' =>
      array (
        0 => 'application/pkixcmp',
      ),
    ),
    'pkipath' =>
    array (
      't' =>
      array (
        0 => 'application/pkix-pkipath',
      ),
    ),
    'pkr' =>
    array (
      't' =>
      array (
        0 => 'application/pgp-keys',
      ),
    ),
    'pl' =>
    array (
      't' =>
      array (
        0 => 'application/x-perl',
      ),
    ),
    'pla' =>
    array (
      't' =>
      array (
        0 => 'audio/x-iriver-pla',
      ),
    ),
    'plb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.3gpp.pic-bw-large',
      ),
    ),
    'plc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mobius.plc',
      ),
    ),
    'plf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.pocketlearn',
      ),
    ),
    'pln' =>
    array (
      't' =>
      array (
        0 => 'application/x-planperfect',
      ),
    ),
    'pls' =>
    array (
      't' =>
      array (
        0 => 'application/pls+xml',
        1 => 'audio/x-scpls',
      ),
    ),
    'pm' =>
    array (
      't' =>
      array (
        0 => 'application/x-perl',
        1 => 'application/x-pagemaker',
      ),
    ),
    'pm6' =>
    array (
      't' =>
      array (
        0 => 'application/x-pagemaker',
      ),
    ),
    'pmd' =>
    array (
      't' =>
      array (
        0 => 'application/x-pagemaker',
      ),
    ),
    'pml' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ctc-posml',
      ),
    ),
    'png' =>
    array (
      't' =>
      array (
        0 => 'image/png',
      ),
    ),
    'pnm' =>
    array (
      't' =>
      array (
        0 => 'image/x-portable-anymap',
      ),
    ),
    'pntg' =>
    array (
      't' =>
      array (
        0 => 'image/x-macpaint',
      ),
    ),
    'po' =>
    array (
      't' =>
      array (
        0 => 'text/x-gettext-translation',
      ),
    ),
    'pod' =>
    array (
      't' =>
      array (
        0 => 'application/x-perl',
      ),
    ),
    'por' =>
    array (
      't' =>
      array (
        0 => 'application/x-spss-por',
      ),
    ),
    'portpkg' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.macports.portpkg',
      ),
    ),
    'pot' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-powerpoint',
        1 => 'text/x-gettext-translation-template',
      ),
    ),
    'potm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-powerpoint.template.macroenabled.12',
      ),
    ),
    'potx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.openxmlformats-officedocument.presentationml.template',
      ),
    ),
    'ppam' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-powerpoint.addin.macroenabled.12',
      ),
    ),
    'ppd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.cups-ppd',
      ),
    ),
    'ppm' =>
    array (
      't' =>
      array (
        0 => 'image/x-portable-pixmap',
      ),
    ),
    'pps' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-powerpoint',
      ),
    ),
    'ppsm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-powerpoint.slideshow.macroenabled.12',
      ),
    ),
    'ppsx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.openxmlformats-officedocument.presentationml.slideshow',
      ),
    ),
    'ppt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-powerpoint',
      ),
    ),
    'pptm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-powerpoint.presentation.macroenabled.12',
      ),
    ),
    'pptx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
      ),
    ),
    'ppz' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-powerpoint',
      ),
    ),
    'pqa' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.palm',
      ),
    ),
    'prc' =>
    array (
      't' =>
      array (
        0 => 'application/x-mobipocket-ebook',
        1 => 'application/vnd.palm',
      ),
    ),
    'pre' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.lotus-freelance',
      ),
    ),
    'prf' =>
    array (
      't' =>
      array (
        0 => 'application/pics-rules',
      ),
    ),
    'ps' =>
    array (
      't' =>
      array (
        0 => 'application/postscript',
      ),
    ),
    'ps.bz2' =>
    array (
      't' =>
      array (
        0 => 'application/x-bzpostscript',
      ),
    ),
    'ps.gz' =>
    array (
      't' =>
      array (
        0 => 'application/x-gzpostscript',
      ),
    ),
    'psb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.3gpp.pic-bw-small',
      ),
    ),
    'psd' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.adobe.photoshop',
      ),
    ),
    'psf' =>
    array (
      't' =>
      array (
        0 => 'application/x-font-linux-psf',
        1 => 'audio/x-psf',
      ),
    ),
    'psf.gz' =>
    array (
      't' =>
      array (
        0 => 'application/x-gz-font-linux-psf',
      ),
    ),
    'psflib' =>
    array (
      't' =>
      array (
        0 => 'audio/x-psflib',
      ),
    ),
    'psid' =>
    array (
      't' =>
      array (
        0 => 'audio/prs.sid',
      ),
    ),
    'pskcxml' =>
    array (
      't' =>
      array (
        0 => 'application/pskc+xml',
      ),
    ),
    'psw' =>
    array (
      't' =>
      array (
        0 => 'application/x-pocket-word',
      ),
    ),
    'ptid' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.pvi.ptid1',
      ),
    ),
    'pub' =>
    array (
      't' =>
      array (
        0 => 'application/x-mspublisher',
        1 => 'application/vnd.ms-publisher',
      ),
    ),
    'pvb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.3gpp.pic-bw-var',
      ),
    ),
    'pw' =>
    array (
      't' =>
      array (
        0 => 'application/x-pw',
      ),
    ),
    'pwn' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.3m.post-it-notes',
      ),
    ),
    'py' =>
    array (
      't' =>
      array (
        0 => 'text/x-python3',
        1 => 'text/x-python',
      ),
    ),
    'py3' =>
    array (
      't' =>
      array (
        0 => 'text/x-python3',
      ),
    ),
    'py3x' =>
    array (
      't' =>
      array (
        0 => 'text/x-python3',
      ),
    ),
    'pya' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.ms-playready.media.pya',
      ),
    ),
    'pyc' =>
    array (
      't' =>
      array (
        0 => 'application/x-python-bytecode',
      ),
    ),
    'pyo' =>
    array (
      't' =>
      array (
        0 => 'application/x-python-bytecode',
      ),
    ),
    'pys' =>
    array (
      't' =>
      array (
        0 => 'application/x-pyspread-bz-spreadsheet',
      ),
    ),
    'pysu' =>
    array (
      't' =>
      array (
        0 => 'application/x-pyspread-spreadsheet',
      ),
    ),
    'pyv' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.ms-playready.media.pyv',
      ),
    ),
    'pyx' =>
    array (
      't' =>
      array (
        0 => 'text/x-python',
      ),
    ),
    'qam' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.epson.quickanime',
      ),
    ),
    'qbo' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.intu.qbo',
      ),
    ),
    'qcow' =>
    array (
      't' =>
      array (
        0 => 'application/x-qemu-disk',
      ),
    ),
    'qcow2' =>
    array (
      't' =>
      array (
        0 => 'application/x-qemu-disk',
      ),
    ),
    'qd' =>
    array (
      't' =>
      array (
        0 => 'application/x-raw-floppy-disk-image',
      ),
    ),
    'qfx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.intu.qfx',
      ),
    ),
    'qif' =>
    array (
      't' =>
      array (
        0 => 'application/x-qw',
        1 => 'image/x-quicktime',
      ),
    ),
    'qml' =>
    array (
      't' =>
      array (
        0 => 'text/x-qml',
      ),
    ),
    'qmlproject' =>
    array (
      't' =>
      array (
        0 => 'text/x-qml',
      ),
    ),
    'qmltypes' =>
    array (
      't' =>
      array (
        0 => 'text/x-qml',
      ),
    ),
    'qp' =>
    array (
      't' =>
      array (
        0 => 'application/x-qpress',
      ),
    ),
    'qps' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.publishare-delta-tree',
      ),
    ),
    'qt' =>
    array (
      't' =>
      array (
        0 => 'video/quicktime',
      ),
    ),
    'qti' =>
    array (
      't' =>
      array (
        0 => 'application/x-qtiplot',
      ),
    ),
    'qti.gz' =>
    array (
      't' =>
      array (
        0 => 'application/x-qtiplot',
      ),
    ),
    'qtif' =>
    array (
      't' =>
      array (
        0 => 'image/x-quicktime',
      ),
    ),
    'qtl' =>
    array (
      't' =>
      array (
        0 => 'application/x-quicktime-media-link',
      ),
    ),
    'qtvr' =>
    array (
      't' =>
      array (
        0 => 'video/quicktime',
      ),
    ),
    'qwd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.quark.quarkxpress',
      ),
    ),
    'qwt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.quark.quarkxpress',
      ),
    ),
    'qxb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.quark.quarkxpress',
      ),
    ),
    'qxd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.quark.quarkxpress',
      ),
    ),
    'qxl' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.quark.quarkxpress',
      ),
    ),
    'qxt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.quark.quarkxpress',
      ),
    ),
    'ra' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.rn-realaudio',
      ),
    ),
    'raf' =>
    array (
      't' =>
      array (
        0 => 'image/x-fuji-raf',
      ),
    ),
    'ram' =>
    array (
      't' =>
      array (
        0 => 'application/ram',
      ),
    ),
    'raml' =>
    array (
      't' =>
      array (
        0 => 'application/raml+yaml',
      ),
    ),
    'rar' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.rar',
      ),
    ),
    'ras' =>
    array (
      't' =>
      array (
        0 => 'image/x-cmu-raster',
      ),
    ),
    'raw' =>
    array (
      't' =>
      array (
        0 => 'image/x-panasonic-rw',
      ),
    ),
    'raw-disk-image' =>
    array (
      't' =>
      array (
        0 => 'application/x-raw-disk-image',
      ),
    ),
    'raw-disk-image.xz' =>
    array (
      't' =>
      array (
        0 => 'application/x-raw-disk-image-xz-compressed',
      ),
    ),
    'rax' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.rn-realaudio',
      ),
    ),
    'rb' =>
    array (
      't' =>
      array (
        0 => 'application/x-ruby',
      ),
    ),
    'rcprofile' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ipunplugged.rcprofile',
      ),
    ),
    'rdf' =>
    array (
      't' =>
      array (
        0 => 'application/rdf+xml',
      ),
    ),
    'rdfs' =>
    array (
      't' =>
      array (
        0 => 'application/rdf+xml',
      ),
    ),
    'rdz' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.data-vision.rdz',
      ),
    ),
    'reg' =>
    array (
      't' =>
      array (
        0 => 'text/x-ms-regedit',
      ),
    ),
    'rej' =>
    array (
      't' =>
      array (
        0 => 'text/x-reject',
      ),
    ),
    'rep' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.businessobjects',
      ),
    ),
    'res' =>
    array (
      't' =>
      array (
        0 => 'application/x-dtbresource+xml',
      ),
    ),
    'rgb' =>
    array (
      't' =>
      array (
        0 => 'image/x-rgb',
      ),
    ),
    'rif' =>
    array (
      't' =>
      array (
        0 => 'application/reginfo+xml',
      ),
    ),
    'rip' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.rip',
      ),
    ),
    'ris' =>
    array (
      't' =>
      array (
        0 => 'application/x-research-info-systems',
      ),
    ),
    'rl' =>
    array (
      't' =>
      array (
        0 => 'application/resource-lists+xml',
      ),
    ),
    'rlc' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.fujixerox.edmics-rlc',
      ),
    ),
    'rld' =>
    array (
      't' =>
      array (
        0 => 'application/resource-lists-diff+xml',
      ),
    ),
    'rle' =>
    array (
      't' =>
      array (
        0 => 'image/rle',
      ),
    ),
    'rm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.rn-realmedia',
      ),
    ),
    'rmi' =>
    array (
      't' =>
      array (
        0 => 'audio/midi',
      ),
    ),
    'rmj' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.rn-realmedia',
      ),
    ),
    'rmm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.rn-realmedia',
      ),
    ),
    'rmp' =>
    array (
      't' =>
      array (
        0 => 'audio/x-pn-realaudio-plugin',
      ),
    ),
    'rms' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.jcp.javame.midlet-rms',
        1 => 'application/vnd.rn-realmedia',
      ),
    ),
    'rmvb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.rn-realmedia',
      ),
    ),
    'rmx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.rn-realmedia',
      ),
    ),
    'rnc' =>
    array (
      't' =>
      array (
        0 => 'application/relax-ng-compact-syntax',
      ),
    ),
    'rng' =>
    array (
      't' =>
      array (
        0 => 'application/xml',
      ),
    ),
    'roa' =>
    array (
      't' =>
      array (
        0 => 'application/rpki-roa',
      ),
    ),
    'roff' =>
    array (
      't' =>
      array (
        0 => 'text/troff',
      ),
    ),
    'ros' =>
    array (
      't' =>
      array (
        0 => 'text/x-common-lisp',
      ),
    ),
    'rp' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.rn-realpix',
      ),
    ),
    'rp9' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.cloanto.rp9',
      ),
    ),
    'rpm' =>
    array (
      't' =>
      array (
        0 => 'application/x-rpm',
      ),
    ),
    'rpss' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.nokia.radio-presets',
      ),
    ),
    'rpst' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.nokia.radio-preset',
      ),
    ),
    'rq' =>
    array (
      't' =>
      array (
        0 => 'application/sparql-query',
      ),
    ),
    'rs' =>
    array (
      't' =>
      array (
        0 => 'application/rls-services+xml',
        1 => 'text/rust',
      ),
    ),
    'rsd' =>
    array (
      't' =>
      array (
        0 => 'application/rsd+xml',
      ),
    ),
    'rss' =>
    array (
      't' =>
      array (
        0 => 'application/rss+xml',
      ),
    ),
    'rst' =>
    array (
      't' =>
      array (
        0 => 'text/x-rst',
      ),
    ),
    'rt' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.rn-realtext',
      ),
    ),
    'rtf' =>
    array (
      't' =>
      array (
        0 => 'application/rtf',
      ),
    ),
    'rtx' =>
    array (
      't' =>
      array (
        0 => 'text/richtext',
      ),
    ),
    'rv' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.rn-realvideo',
      ),
    ),
    'rvx' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.rn-realvideo',
      ),
    ),
    'rw2' =>
    array (
      't' =>
      array (
        0 => 'image/x-panasonic-rw2',
      ),
    ),
    's' =>
    array (
      't' =>
      array (
        0 => 'text/x-asm',
      ),
    ),
    's3m' =>
    array (
      't' =>
      array (
        0 => 'audio/s3m',
        1 => 'audio/x-s3m',
      ),
    ),
    'saf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.yamaha.smaf-audio',
      ),
    ),
    'sam' =>
    array (
      't' =>
      array (
        0 => 'application/x-amipro',
      ),
    ),
    'sami' =>
    array (
      't' =>
      array (
        0 => 'application/x-sami',
      ),
    ),
    'sap' =>
    array (
      't' =>
      array (
        0 => 'application/x-thomson-sap-image',
      ),
    ),
    'sass' =>
    array (
      't' =>
      array (
        0 => 'text/x-sass',
      ),
    ),
    'sav' =>
    array (
      't' =>
      array (
        0 => 'application/x-spss-sav',
      ),
    ),
    'sbml' =>
    array (
      't' =>
      array (
        0 => 'application/sbml+xml',
      ),
    ),
    'sc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ibm.secure-container',
      ),
    ),
    'scala' =>
    array (
      't' =>
      array (
        0 => 'text/x-scala',
      ),
    ),
    'scd' =>
    array (
      't' =>
      array (
        0 => 'application/x-msschedule',
      ),
    ),
    'scm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.lotus-screencam',
        1 => 'text/x-scheme',
      ),
    ),
    'scope' =>
    array (
      't' =>
      array (
        0 => 'text/x-systemd-unit',
      ),
    ),
    'scq' =>
    array (
      't' =>
      array (
        0 => 'application/scvp-cv-request',
      ),
    ),
    'scs' =>
    array (
      't' =>
      array (
        0 => 'application/scvp-cv-response',
      ),
    ),
    'scss' =>
    array (
      't' =>
      array (
        0 => 'text/x-scss',
      ),
    ),
    'scurl' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.curl.scurl',
      ),
    ),
    'sda' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.stardivision.draw',
      ),
    ),
    'sdc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.stardivision.calc',
      ),
    ),
    'sdd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.stardivision.impress',
      ),
    ),
    'sdkd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.solent.sdkm+xml',
      ),
    ),
    'sdkm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.solent.sdkm+xml',
      ),
    ),
    'sdp' =>
    array (
      't' =>
      array (
        0 => 'application/sdp',
        1 => 'application/vnd.stardivision.impress',
      ),
    ),
    'sds' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.stardivision.chart',
      ),
    ),
    'sdw' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.stardivision.writer',
      ),
    ),
    'see' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.seemail',
      ),
    ),
    'seed' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.fdsn.seed',
      ),
    ),
    'sema' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.sema',
      ),
    ),
    'semd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.semd',
      ),
    ),
    'semf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.semf',
      ),
    ),
    'ser' =>
    array (
      't' =>
      array (
        0 => 'application/java-serialized-object',
      ),
    ),
    'service' =>
    array (
      't' =>
      array (
        0 => 'text/x-dbus-service',
        1 => 'text/x-systemd-unit',
      ),
    ),
    'setpay' =>
    array (
      't' =>
      array (
        0 => 'application/set-payment-initiation',
      ),
    ),
    'setreg' =>
    array (
      't' =>
      array (
        0 => 'application/set-registration-initiation',
      ),
    ),
    'sfc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.nintendo.snes.rom',
      ),
    ),
    'sfd-hdstx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.hydrostatix.sof-data',
      ),
    ),
    'sfs' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.spotfire.sfs',
      ),
    ),
    'sfv' =>
    array (
      't' =>
      array (
        0 => 'text/x-sfv',
      ),
    ),
    'sg' =>
    array (
      't' =>
      array (
        0 => 'application/x-sg1000-rom',
      ),
    ),
    'sgb' =>
    array (
      't' =>
      array (
        0 => 'application/x-gameboy-rom',
      ),
    ),
    'sgd' =>
    array (
      't' =>
      array (
        0 => 'application/x-genesis-rom',
      ),
    ),
    'sgf' =>
    array (
      't' =>
      array (
        0 => 'application/x-go-sgf',
      ),
    ),
    'sgi' =>
    array (
      't' =>
      array (
        0 => 'image/sgi',
        1 => 'image/x-sgi',
      ),
    ),
    'sgl' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.stardivision.writer',
      ),
    ),
    'sgm' =>
    array (
      't' =>
      array (
        0 => 'text/sgml',
      ),
    ),
    'sgml' =>
    array (
      't' =>
      array (
        0 => 'text/sgml',
      ),
    ),
    'sh' =>
    array (
      't' =>
      array (
        0 => 'application/x-sh',
        1 => 'application/x-shellscript',
      ),
    ),
    'shape' =>
    array (
      't' =>
      array (
        0 => 'application/x-dia-shape',
      ),
    ),
    'shar' =>
    array (
      't' =>
      array (
        0 => 'application/x-shar',
      ),
    ),
    'shf' =>
    array (
      't' =>
      array (
        0 => 'application/shf+xml',
      ),
    ),
    'shn' =>
    array (
      't' =>
      array (
        0 => 'application/x-shorten',
      ),
    ),
    'siag' =>
    array (
      't' =>
      array (
        0 => 'application/x-siag',
      ),
    ),
    'sid' =>
    array (
      't' =>
      array (
        0 => 'image/x-mrsid-image',
        1 => 'audio/prs.sid',
      ),
    ),
    'sig' =>
    array (
      't' =>
      array (
        0 => 'application/pgp-signature',
      ),
    ),
    'sik' =>
    array (
      't' =>
      array (
        0 => 'application/x-trash',
      ),
    ),
    'sil' =>
    array (
      't' =>
      array (
        0 => 'audio/silk',
      ),
    ),
    'silo' =>
    array (
      't' =>
      array (
        0 => 'model/mesh',
      ),
    ),
    'sis' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.symbian.install',
      ),
    ),
    'sisx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.symbian.install',
        1 => 'x-epoc/x-sisx-app',
      ),
    ),
    'sit' =>
    array (
      't' =>
      array (
        0 => 'application/x-stuffit',
      ),
    ),
    'sitx' =>
    array (
      't' =>
      array (
        0 => 'application/x-stuffitx',
      ),
    ),
    'siv' =>
    array (
      't' =>
      array (
        0 => 'application/sieve',
      ),
    ),
    'sk' =>
    array (
      't' =>
      array (
        0 => 'image/x-skencil',
      ),
    ),
    'sk1' =>
    array (
      't' =>
      array (
        0 => 'image/x-skencil',
      ),
    ),
    'skd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.koan',
      ),
    ),
    'skm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.koan',
      ),
    ),
    'skp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.koan',
      ),
    ),
    'skr' =>
    array (
      't' =>
      array (
        0 => 'application/pgp-keys',
      ),
    ),
    'skt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.koan',
      ),
    ),
    'sldm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-powerpoint.slide.macroenabled.12',
      ),
    ),
    'sldx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.openxmlformats-officedocument.presentationml.slide',
      ),
    ),
    'slice' =>
    array (
      't' =>
      array (
        0 => 'text/x-systemd-unit',
      ),
    ),
    'slk' =>
    array (
      't' =>
      array (
        0 => 'text/spreadsheet',
      ),
    ),
    'slt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.epson.salt',
      ),
    ),
    'sm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.stepmania.stepchart',
      ),
    ),
    'smaf' =>
    array (
      't' =>
      array (
        0 => 'application/x-smaf',
      ),
    ),
    'smc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.nintendo.snes.rom',
      ),
    ),
    'smd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.stardivision.mail',
        1 => 'application/x-genesis-rom',
      ),
    ),
    'smf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.stardivision.math',
      ),
    ),
    'smi' =>
    array (
      't' =>
      array (
        0 => 'application/smil+xml',
        1 => 'application/x-sami',
      ),
    ),
    'smil' =>
    array (
      't' =>
      array (
        0 => 'application/smil+xml',
      ),
    ),
    'sml' =>
    array (
      't' =>
      array (
        0 => 'application/smil+xml',
      ),
    ),
    'sms' =>
    array (
      't' =>
      array (
        0 => 'application/x-sms-rom',
      ),
    ),
    'smv' =>
    array (
      't' =>
      array (
        0 => 'video/x-smv',
      ),
    ),
    'smzip' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.stepmania.package',
      ),
    ),
    'snap' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.snap',
      ),
    ),
    'snd' =>
    array (
      't' =>
      array (
        0 => 'audio/basic',
      ),
    ),
    'snf' =>
    array (
      't' =>
      array (
        0 => 'application/x-font-snf',
      ),
    ),
    'so' =>
    array (
      't' =>
      array (
        0 => 'application/octet-stream',
        1 => 'application/x-sharedlib',
      ),
    ),
    'socket' =>
    array (
      't' =>
      array (
        0 => 'text/x-systemd-unit',
      ),
    ),
    'spc' =>
    array (
      't' =>
      array (
        0 => 'application/x-pkcs7-certificates',
      ),
    ),
    'spd' =>
    array (
      't' =>
      array (
        0 => 'application/x-font-speedo',
      ),
    ),
    'spec' =>
    array (
      't' =>
      array (
        0 => 'text/x-rpm-spec',
      ),
    ),
    'spf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.yamaha.smaf-phrase',
      ),
    ),
    'spl' =>
    array (
      't' =>
      array (
        0 => 'application/x-futuresplash',
        1 => 'application/vnd.adobe.flash.movie',
      ),
    ),
    'spm' =>
    array (
      't' =>
      array (
        0 => 'application/x-source-rpm',
      ),
    ),
    'spot' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.in3d.spot',
      ),
    ),
    'spp' =>
    array (
      't' =>
      array (
        0 => 'application/scvp-vp-response',
      ),
    ),
    'spq' =>
    array (
      't' =>
      array (
        0 => 'application/scvp-vp-request',
      ),
    ),
    'spx' =>
    array (
      't' =>
      array (
        0 => 'audio/ogg',
        1 => 'application/x-apple-systemprofiler+xml',
        2 => 'audio/x-speex+ogg',
        3 => 'audio/x-speex',
      ),
    ),
    'sql' =>
    array (
      't' =>
      array (
        0 => 'application/x-sql',
        1 => 'application/sql',
      ),
    ),
    'sqlite2' =>
    array (
      't' =>
      array (
        0 => 'application/x-sqlite2',
      ),
    ),
    'sqlite3' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.sqlite3',
      ),
    ),
    'sqsh' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.squashfs',
      ),
    ),
    'sr2' =>
    array (
      't' =>
      array (
        0 => 'image/x-sony-sr2',
      ),
    ),
    'src' =>
    array (
      't' =>
      array (
        0 => 'application/x-wais-source',
      ),
    ),
    'src.rpm' =>
    array (
      't' =>
      array (
        0 => 'application/x-source-rpm',
      ),
    ),
    'srf' =>
    array (
      't' =>
      array (
        0 => 'image/x-sony-srf',
      ),
    ),
    'srt' =>
    array (
      't' =>
      array (
        0 => 'application/x-subrip',
      ),
    ),
    'sru' =>
    array (
      't' =>
      array (
        0 => 'application/sru+xml',
      ),
    ),
    'srx' =>
    array (
      't' =>
      array (
        0 => 'application/sparql-results+xml',
      ),
    ),
    'ss' =>
    array (
      't' =>
      array (
        0 => 'text/x-scheme',
      ),
    ),
    'ssa' =>
    array (
      't' =>
      array (
        0 => 'text/x-ssa',
      ),
    ),
    'ssdl' =>
    array (
      't' =>
      array (
        0 => 'application/ssdl+xml',
      ),
    ),
    'sse' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.kodak-descriptor',
      ),
    ),
    'ssf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.epson.ssf',
      ),
    ),
    'ssml' =>
    array (
      't' =>
      array (
        0 => 'application/ssml+xml',
      ),
    ),
    'st' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.sailingtracker.track',
      ),
    ),
    'stc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.sun.xml.calc.template',
      ),
    ),
    'std' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.sun.xml.draw.template',
      ),
    ),
    'stf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.wt.stf',
      ),
    ),
    'sti' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.sun.xml.impress.template',
      ),
    ),
    'stk' =>
    array (
      't' =>
      array (
        0 => 'application/hyperstudio',
      ),
    ),
    'stl' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-pki.stl',
        1 => 'model/stl',
      ),
    ),
    'stm' =>
    array (
      't' =>
      array (
        0 => 'audio/x-stm',
      ),
    ),
    'str' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.pg.format',
      ),
    ),
    'stw' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.sun.xml.writer.template',
      ),
    ),
    'sty' =>
    array (
      't' =>
      array (
        0 => 'text/x-tex',
      ),
    ),
    'sub' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.dvb.subtitle',
        1 => 'image/vnd.dvb.subtitle',
        2 => 'text/x-microdvd',
        3 => 'text/x-mpsub',
        4 => 'text/x-subviewer',
      ),
    ),
    'sun' =>
    array (
      't' =>
      array (
        0 => 'image/x-sun-raster',
      ),
    ),
    'sus' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.sus-calendar',
      ),
    ),
    'susp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.sus-calendar',
      ),
    ),
    'sv' =>
    array (
      't' =>
      array (
        0 => 'text/x-svsrc',
      ),
    ),
    'sv4cpio' =>
    array (
      't' =>
      array (
        0 => 'application/x-sv4cpio',
      ),
    ),
    'sv4crc' =>
    array (
      't' =>
      array (
        0 => 'application/x-sv4crc',
      ),
    ),
    'svc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dvb.service',
      ),
    ),
    'svd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.svd',
      ),
    ),
    'svg' =>
    array (
      't' =>
      array (
        0 => 'image/svg+xml',
      ),
    ),
    'svgz' =>
    array (
      't' =>
      array (
        0 => 'image/svg+xml',
        1 => 'image/svg+xml-compressed',
      ),
    ),
    'svh' =>
    array (
      't' =>
      array (
        0 => 'text/x-svhdr',
      ),
    ),
    'swa' =>
    array (
      't' =>
      array (
        0 => 'application/x-director',
      ),
    ),
    'swap' =>
    array (
      't' =>
      array (
        0 => 'text/x-systemd-unit',
      ),
    ),
    'swf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.adobe.flash.movie',
      ),
    ),
    'swi' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.aristanetworks.swi',
      ),
    ),
    'swm' =>
    array (
      't' =>
      array (
        0 => 'application/x-ms-wim',
      ),
    ),
    'sxc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.sun.xml.calc',
      ),
    ),
    'sxd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.sun.xml.draw',
      ),
    ),
    'sxg' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.sun.xml.writer.global',
      ),
    ),
    'sxi' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.sun.xml.impress',
      ),
    ),
    'sxm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.sun.xml.math',
      ),
    ),
    'sxw' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.sun.xml.writer',
      ),
    ),
    'sylk' =>
    array (
      't' =>
      array (
        0 => 'text/spreadsheet',
      ),
    ),
    't' =>
    array (
      't' =>
      array (
        0 => 'text/troff',
        1 => 'application/x-perl',
      ),
    ),
    't2t' =>
    array (
      't' =>
      array (
        0 => 'text/x-txt2tags',
      ),
    ),
    't3' =>
    array (
      't' =>
      array (
        0 => 'application/x-t3vm-image',
      ),
    ),
    'taglet' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mynfc',
      ),
    ),
    'tao' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.tao.intent-module-archive',
      ),
    ),
    'tar' =>
    array (
      't' =>
      array (
        0 => 'application/x-tar',
      ),
    ),
    'tar.bz' =>
    array (
      't' =>
      array (
        0 => 'application/x-bzip-compressed-tar',
      ),
    ),
    'tar.bz2' =>
    array (
      't' =>
      array (
        0 => 'application/x-bzip-compressed-tar',
      ),
    ),
    'tar.gz' =>
    array (
      't' =>
      array (
        0 => 'application/x-compressed-tar',
      ),
    ),
    'tar.lrz' =>
    array (
      't' =>
      array (
        0 => 'application/x-lrzip-compressed-tar',
      ),
    ),
    'tar.lz' =>
    array (
      't' =>
      array (
        0 => 'application/x-lzip-compressed-tar',
      ),
    ),
    'tar.lz4' =>
    array (
      't' =>
      array (
        0 => 'application/x-lz4-compressed-tar',
      ),
    ),
    'tar.lzma' =>
    array (
      't' =>
      array (
        0 => 'application/x-lzma-compressed-tar',
      ),
    ),
    'tar.lzo' =>
    array (
      't' =>
      array (
        0 => 'application/x-tzo',
      ),
    ),
    'tar.xz' =>
    array (
      't' =>
      array (
        0 => 'application/x-xz-compressed-tar',
      ),
    ),
    'tar.z' =>
    array (
      't' =>
      array (
        0 => 'application/x-tarz',
      ),
    ),
    'tar.zst' =>
    array (
      't' =>
      array (
        0 => 'application/x-zstd-compressed-tar',
      ),
    ),
    'target' =>
    array (
      't' =>
      array (
        0 => 'text/x-systemd-unit',
      ),
    ),
    'taz' =>
    array (
      't' =>
      array (
        0 => 'application/x-tarz',
      ),
    ),
    'tb2' =>
    array (
      't' =>
      array (
        0 => 'application/x-bzip-compressed-tar',
      ),
    ),
    'tbz' =>
    array (
      't' =>
      array (
        0 => 'application/x-bzip-compressed-tar',
      ),
    ),
    'tbz2' =>
    array (
      't' =>
      array (
        0 => 'application/x-bzip-compressed-tar',
      ),
    ),
    'tcap' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.3gpp2.tcap',
      ),
    ),
    'tcl' =>
    array (
      't' =>
      array (
        0 => 'application/x-tcl',
        1 => 'text/tcl',
      ),
    ),
    'teacher' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.smart.teacher',
      ),
    ),
    'tei' =>
    array (
      't' =>
      array (
        0 => 'application/tei+xml',
      ),
    ),
    'teicorpus' =>
    array (
      't' =>
      array (
        0 => 'application/tei+xml',
      ),
    ),
    'tex' =>
    array (
      't' =>
      array (
        0 => 'text/x-tex',
      ),
    ),
    'texi' =>
    array (
      't' =>
      array (
        0 => 'application/x-texinfo',
        1 => 'text/x-texinfo',
      ),
    ),
    'texinfo' =>
    array (
      't' =>
      array (
        0 => 'application/x-texinfo',
        1 => 'text/x-texinfo',
      ),
    ),
    'text' =>
    array (
      't' =>
      array (
        0 => 'text/plain',
      ),
    ),
    'tfi' =>
    array (
      't' =>
      array (
        0 => 'application/thraud+xml',
      ),
    ),
    'tfm' =>
    array (
      't' =>
      array (
        0 => 'application/x-tex-tfm',
      ),
    ),
    'tga' =>
    array (
      't' =>
      array (
        0 => 'image/x-tga',
      ),
    ),
    'tgz' =>
    array (
      't' =>
      array (
        0 => 'application/x-compressed-tar',
      ),
    ),
    'theme' =>
    array (
      't' =>
      array (
        0 => 'application/x-theme',
      ),
    ),
    'themepack' =>
    array (
      't' =>
      array (
        0 => 'application/x-windows-themepack',
      ),
    ),
    'thmx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-officetheme',
      ),
    ),
    'tif' =>
    array (
      't' =>
      array (
        0 => 'image/tiff',
      ),
    ),
    'tiff' =>
    array (
      't' =>
      array (
        0 => 'image/tiff',
      ),
    ),
    'timer' =>
    array (
      't' =>
      array (
        0 => 'text/x-systemd-unit',
      ),
    ),
    'tk' =>
    array (
      't' =>
      array (
        0 => 'text/tcl',
      ),
    ),
    'tlrz' =>
    array (
      't' =>
      array (
        0 => 'application/x-lrzip-compressed-tar',
      ),
    ),
    'tlz' =>
    array (
      't' =>
      array (
        0 => 'application/x-lzma-compressed-tar',
      ),
    ),
    'tmo' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.tmobile-livetv',
      ),
    ),
    'tnef' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-tnef',
      ),
    ),
    'tnf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-tnef',
      ),
    ),
    'toc' =>
    array (
      't' =>
      array (
        0 => 'application/x-cdrdao-toc',
      ),
    ),
    'torrent' =>
    array (
      't' =>
      array (
        0 => 'application/x-bittorrent',
      ),
    ),
    'tpic' =>
    array (
      't' =>
      array (
        0 => 'image/x-tga',
      ),
    ),
    'tpl' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.groove-tool-template',
      ),
    ),
    'tpt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.trid.tpt',
      ),
    ),
    'tr' =>
    array (
      't' =>
      array (
        0 => 'text/troff',
      ),
    ),
    'tra' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.trueapp',
      ),
    ),
    'trig' =>
    array (
      't' =>
      array (
        0 => 'application/trig',
      ),
    ),
    'trm' =>
    array (
      't' =>
      array (
        0 => 'application/x-msterminal',
      ),
    ),
    'ts' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.qt.linguist',
        1 => 'video/mp2t',
      ),
    ),
    'tsd' =>
    array (
      't' =>
      array (
        0 => 'application/timestamped-data',
      ),
    ),
    'tsv' =>
    array (
      't' =>
      array (
        0 => 'text/tab-separated-values',
      ),
    ),
    'tta' =>
    array (
      't' =>
      array (
        0 => 'audio/x-tta',
      ),
    ),
    'ttc' =>
    array (
      't' =>
      array (
        0 => 'font/collection',
      ),
    ),
    'ttf' =>
    array (
      't' =>
      array (
        0 => 'font/ttf',
      ),
    ),
    'ttl' =>
    array (
      't' =>
      array (
        0 => 'text/turtle',
      ),
    ),
    'ttx' =>
    array (
      't' =>
      array (
        0 => 'application/x-font-ttx',
      ),
    ),
    'twd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.simtech-mindmapper',
      ),
    ),
    'twds' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.simtech-mindmapper',
      ),
    ),
    'twig' =>
    array (
      't' =>
      array (
        0 => 'text/x-twig',
      ),
    ),
    'txd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.genomatix.tuxedo',
      ),
    ),
    'txf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mobius.txf',
      ),
    ),
    'txt' =>
    array (
      't' =>
      array (
        0 => 'text/plain',
      ),
    ),
    'txz' =>
    array (
      't' =>
      array (
        0 => 'application/x-xz-compressed-tar',
      ),
    ),
    'tzo' =>
    array (
      't' =>
      array (
        0 => 'application/x-tzo',
      ),
    ),
    'tzst' =>
    array (
      't' =>
      array (
        0 => 'application/x-zstd-compressed-tar',
      ),
    ),
    'u32' =>
    array (
      't' =>
      array (
        0 => 'application/x-authorware-bin',
      ),
    ),
    'udeb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.debian.binary-package',
      ),
    ),
    'ufd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ufdl',
      ),
    ),
    'ufdl' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ufdl',
      ),
    ),
    'ufraw' =>
    array (
      't' =>
      array (
        0 => 'application/x-ufraw',
      ),
    ),
    'ui' =>
    array (
      't' =>
      array (
        0 => 'application/x-designer',
        1 => 'application/x-gtk-builder',
      ),
    ),
    'uil' =>
    array (
      't' =>
      array (
        0 => 'text/x-uil',
      ),
    ),
    'ult' =>
    array (
      't' =>
      array (
        0 => 'audio/x-mod',
      ),
    ),
    'ulx' =>
    array (
      't' =>
      array (
        0 => 'application/x-glulx',
      ),
    ),
    'umj' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.umajin',
      ),
    ),
    'unf' =>
    array (
      't' =>
      array (
        0 => 'application/x-nes-rom',
      ),
    ),
    'uni' =>
    array (
      't' =>
      array (
        0 => 'audio/x-mod',
      ),
    ),
    'unif' =>
    array (
      't' =>
      array (
        0 => 'application/x-nes-rom',
      ),
    ),
    'unityweb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.unity',
      ),
    ),
    'uoml' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.uoml+xml',
      ),
    ),
    'uri' =>
    array (
      't' =>
      array (
        0 => 'text/uri-list',
      ),
    ),
    'uris' =>
    array (
      't' =>
      array (
        0 => 'text/uri-list',
      ),
    ),
    'url' =>
    array (
      't' =>
      array (
        0 => 'application/x-mswinurl',
      ),
    ),
    'urls' =>
    array (
      't' =>
      array (
        0 => 'text/uri-list',
      ),
    ),
    'ustar' =>
    array (
      't' =>
      array (
        0 => 'application/x-ustar',
      ),
    ),
    'utz' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.uiq.theme',
      ),
    ),
    'uu' =>
    array (
      't' =>
      array (
        0 => 'text/x-uuencode',
      ),
    ),
    'uue' =>
    array (
      't' =>
      array (
        0 => 'text/x-uuencode',
      ),
    ),
    'uva' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.dece.audio',
      ),
    ),
    'uvd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dece.data',
      ),
    ),
    'uvf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dece.data',
      ),
    ),
    'uvg' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.dece.graphic',
      ),
    ),
    'uvh' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.dece.hd',
      ),
    ),
    'uvi' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.dece.graphic',
      ),
    ),
    'uvm' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.dece.mobile',
      ),
    ),
    'uvp' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.dece.pd',
      ),
    ),
    'uvs' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.dece.sd',
      ),
    ),
    'uvt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dece.ttml+xml',
      ),
    ),
    'uvu' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.uvvu.mp4',
      ),
    ),
    'uvv' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.dece.video',
      ),
    ),
    'uvva' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.dece.audio',
      ),
    ),
    'uvvd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dece.data',
      ),
    ),
    'uvvf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dece.data',
      ),
    ),
    'uvvg' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.dece.graphic',
      ),
    ),
    'uvvh' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.dece.hd',
      ),
    ),
    'uvvi' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.dece.graphic',
      ),
    ),
    'uvvm' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.dece.mobile',
      ),
    ),
    'uvvp' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.dece.pd',
      ),
    ),
    'uvvs' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.dece.sd',
      ),
    ),
    'uvvt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dece.ttml+xml',
      ),
    ),
    'uvvu' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.uvvu.mp4',
      ),
    ),
    'uvvv' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.dece.video',
      ),
    ),
    'uvvx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dece.unspecified',
      ),
    ),
    'uvvz' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dece.zip',
      ),
    ),
    'uvx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dece.unspecified',
      ),
    ),
    'uvz' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.dece.zip',
      ),
    ),
    'v' =>
    array (
      't' =>
      array (
        0 => 'text/x-verilog',
      ),
    ),
    'v64' =>
    array (
      't' =>
      array (
        0 => 'application/x-n64-rom',
      ),
    ),
    'vala' =>
    array (
      't' =>
      array (
        0 => 'text/x-vala',
      ),
    ),
    'vapi' =>
    array (
      't' =>
      array (
        0 => 'text/x-vala',
      ),
    ),
    'vb' =>
    array (
      't' =>
      array (
        0 => 'application/x-virtual-boy-rom',
      ),
    ),
    'vbs' =>
    array (
      't' =>
      array (
        0 => 'text/vbscript',
      ),
    ),
    'vcard' =>
    array (
      't' =>
      array (
        0 => 'text/vcard',
      ),
    ),
    'vcd' =>
    array (
      't' =>
      array (
        0 => 'application/x-cdlink',
      ),
    ),
    'vcf' =>
    array (
      't' =>
      array (
        0 => 'text/vcard',
      ),
    ),
    'vcg' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.groove-vcard',
      ),
    ),
    'vcs' =>
    array (
      't' =>
      array (
        0 => 'text/calendar',
      ),
    ),
    'vct' =>
    array (
      't' =>
      array (
        0 => 'text/vcard',
      ),
    ),
    'vcx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.vcx',
      ),
    ),
    'vda' =>
    array (
      't' =>
      array (
        0 => 'image/x-tga',
      ),
    ),
    'vhd' =>
    array (
      't' =>
      array (
        0 => 'text/x-vhdl',
      ),
    ),
    'vhdl' =>
    array (
      't' =>
      array (
        0 => 'text/x-vhdl',
      ),
    ),
    'vis' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.visionary',
      ),
    ),
    'viv' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.vivo',
      ),
    ),
    'vivo' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.vivo',
      ),
    ),
    'vlc' =>
    array (
      't' =>
      array (
        0 => 'audio/x-mpegurl',
      ),
    ),
    'vob' =>
    array (
      't' =>
      array (
        0 => 'video/x-ms-vob',
        1 => 'video/mpeg',
      ),
    ),
    'voc' =>
    array (
      't' =>
      array (
        0 => 'audio/x-voc',
      ),
    ),
    'vor' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.stardivision.writer',
      ),
    ),
    'vox' =>
    array (
      't' =>
      array (
        0 => 'application/x-authorware-bin',
      ),
    ),
    'vrm' =>
    array (
      't' =>
      array (
        0 => 'model/vrml',
      ),
    ),
    'vrml' =>
    array (
      't' =>
      array (
        0 => 'model/vrml',
      ),
    ),
    'vsd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.visio',
      ),
    ),
    'vsdm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-visio.drawing.macroenabled.main+xml',
      ),
    ),
    'vsdx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-visio.drawing.main+xml',
      ),
    ),
    'vsf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.vsf',
      ),
    ),
    'vss' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.visio',
      ),
    ),
    'vssm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-visio.stencil.macroenabled.main+xml',
      ),
    ),
    'vssx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-visio.stencil.main+xml',
      ),
    ),
    'vst' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.visio',
        1 => 'image/x-tga',
      ),
    ),
    'vstm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-visio.template.macroenabled.main+xml',
      ),
    ),
    'vstx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-visio.template.main+xml',
      ),
    ),
    'vsw' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.visio',
      ),
    ),
    'vtt' =>
    array (
      't' =>
      array (
        0 => 'text/vtt',
      ),
    ),
    'vtu' =>
    array (
      't' =>
      array (
        0 => 'model/vnd.vtu',
      ),
    ),
    'vxml' =>
    array (
      't' =>
      array (
        0 => 'application/voicexml+xml',
      ),
    ),
    'w3d' =>
    array (
      't' =>
      array (
        0 => 'application/x-director',
      ),
    ),
    'wad' =>
    array (
      't' =>
      array (
        0 => 'application/x-doom',
        1 => 'application/x-wii-wad',
        2 => 'application/x-doom-wad',
      ),
    ),
    'wav' =>
    array (
      't' =>
      array (
        0 => 'audio/x-wav',
      ),
    ),
    'wax' =>
    array (
      't' =>
      array (
        0 => 'audio/x-ms-wax',
        1 => 'audio/x-ms-asx',
      ),
    ),
    'wb1' =>
    array (
      't' =>
      array (
        0 => 'application/x-quattropro',
      ),
    ),
    'wb2' =>
    array (
      't' =>
      array (
        0 => 'application/x-quattropro',
      ),
    ),
    'wb3' =>
    array (
      't' =>
      array (
        0 => 'application/x-quattropro',
      ),
    ),
    'wbmp' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.wap.wbmp',
      ),
    ),
    'wbs' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.criticaltools.wbs+xml',
      ),
    ),
    'wbxml' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.wap.wbxml',
      ),
    ),
    'wcm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-works',
      ),
    ),
    'wdb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-works',
      ),
    ),
    'wdp' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.ms-photo',
      ),
    ),
    'weba' =>
    array (
      't' =>
      array (
        0 => 'audio/webm',
      ),
    ),
    'webm' =>
    array (
      't' =>
      array (
        0 => 'video/webm',
      ),
    ),
    'webp' =>
    array (
      't' =>
      array (
        0 => 'image/webp',
      ),
    ),
    'wg' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.pmi.widget',
      ),
    ),
    'wgt' =>
    array (
      't' =>
      array (
        0 => 'application/widget',
      ),
    ),
    'wim' =>
    array (
      't' =>
      array (
        0 => 'application/x-ms-wim',
      ),
    ),
    'wk1' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.lotus-1-2-3',
      ),
    ),
    'wk3' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.lotus-1-2-3',
      ),
    ),
    'wk4' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.lotus-1-2-3',
      ),
    ),
    'wkdownload' =>
    array (
      't' =>
      array (
        0 => 'application/x-partial-download',
      ),
    ),
    'wks' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-works',
        1 => 'application/vnd.lotus-1-2-3',
      ),
    ),
    'wm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-asf',
      ),
    ),
    'wma' =>
    array (
      't' =>
      array (
        0 => 'audio/x-ms-wma',
      ),
    ),
    'wmd' =>
    array (
      't' =>
      array (
        0 => 'application/x-ms-wmd',
      ),
    ),
    'wmf' =>
    array (
      't' =>
      array (
        0 => 'image/wmf',
      ),
    ),
    'wml' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.wap.wml',
      ),
    ),
    'wmlc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.wap.wmlc',
      ),
    ),
    'wmls' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.wap.wmlscript',
      ),
    ),
    'wmlsc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.wap.wmlscriptc',
      ),
    ),
    'wmv' =>
    array (
      't' =>
      array (
        0 => 'video/x-ms-wmv',
      ),
    ),
    'wmx' =>
    array (
      't' =>
      array (
        0 => 'audio/x-ms-asx',
      ),
    ),
    'wmz' =>
    array (
      't' =>
      array (
        0 => 'application/x-ms-wmz',
      ),
    ),
    'woff' =>
    array (
      't' =>
      array (
        0 => 'font/woff',
      ),
    ),
    'woff2' =>
    array (
      't' =>
      array (
        0 => 'font/woff2',
      ),
    ),
    'wp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.wordperfect',
      ),
    ),
    'wp4' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.wordperfect',
      ),
    ),
    'wp5' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.wordperfect',
      ),
    ),
    'wp6' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.wordperfect',
      ),
    ),
    'wpd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.wordperfect',
      ),
    ),
    'wpg' =>
    array (
      't' =>
      array (
        0 => 'application/x-wpg',
      ),
    ),
    'wpl' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-wpl',
      ),
    ),
    'wpp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.wordperfect',
      ),
    ),
    'wps' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-works',
      ),
    ),
    'wqd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.wqd',
      ),
    ),
    'wri' =>
    array (
      't' =>
      array (
        0 => 'application/x-mswrite',
      ),
    ),
    'wrl' =>
    array (
      't' =>
      array (
        0 => 'model/vrml',
      ),
    ),
    'ws' =>
    array (
      't' =>
      array (
        0 => 'application/x-wonderswan-rom',
      ),
    ),
    'wsc' =>
    array (
      't' =>
      array (
        0 => 'application/x-wonderswan-color-rom',
      ),
    ),
    'wsdl' =>
    array (
      't' =>
      array (
        0 => 'application/wsdl+xml',
      ),
    ),
    'wsgi' =>
    array (
      't' =>
      array (
        0 => 'text/x-python',
      ),
    ),
    'wspolicy' =>
    array (
      't' =>
      array (
        0 => 'application/wspolicy+xml',
      ),
    ),
    'wtb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.webturbo',
      ),
    ),
    'wv' =>
    array (
      't' =>
      array (
        0 => 'audio/x-wavpack',
      ),
    ),
    'wvc' =>
    array (
      't' =>
      array (
        0 => 'audio/x-wavpack-correction',
      ),
    ),
    'wvp' =>
    array (
      't' =>
      array (
        0 => 'audio/x-wavpack',
      ),
    ),
    'wvx' =>
    array (
      't' =>
      array (
        0 => 'audio/x-ms-asx',
      ),
    ),
    'wwf' =>
    array (
      't' =>
      array (
        0 => 'application/x-wwf',
      ),
    ),
    'x32' =>
    array (
      't' =>
      array (
        0 => 'application/x-authorware-bin',
      ),
    ),
    'x3d' =>
    array (
      't' =>
      array (
        0 => 'model/x3d+xml',
      ),
    ),
    'x3db' =>
    array (
      't' =>
      array (
        0 => 'model/x3d+binary',
      ),
    ),
    'x3dbz' =>
    array (
      't' =>
      array (
        0 => 'model/x3d+binary',
      ),
    ),
    'x3dv' =>
    array (
      't' =>
      array (
        0 => 'model/x3d+vrml',
      ),
    ),
    'x3dvz' =>
    array (
      't' =>
      array (
        0 => 'model/x3d+vrml',
      ),
    ),
    'x3dz' =>
    array (
      't' =>
      array (
        0 => 'model/x3d+xml',
      ),
    ),
    'x3f' =>
    array (
      't' =>
      array (
        0 => 'image/x-sigma-x3f',
      ),
    ),
    'xac' =>
    array (
      't' =>
      array (
        0 => 'application/x-gnucash',
      ),
    ),
    'xaml' =>
    array (
      't' =>
      array (
        0 => 'application/xaml+xml',
      ),
    ),
    'xap' =>
    array (
      't' =>
      array (
        0 => 'application/x-silverlight-app',
      ),
    ),
    'xar' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.xara',
        1 => 'application/x-xar',
      ),
    ),
    'xbap' =>
    array (
      't' =>
      array (
        0 => 'application/x-ms-xbap',
      ),
    ),
    'xbd' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.fujixerox.docuworks.binder',
      ),
    ),
    'xbel' =>
    array (
      't' =>
      array (
        0 => 'application/x-xbel',
      ),
    ),
    'xbl' =>
    array (
      't' =>
      array (
        0 => 'application/xml',
      ),
    ),
    'xbm' =>
    array (
      't' =>
      array (
        0 => 'image/x-xbitmap',
      ),
    ),
    'xcf' =>
    array (
      't' =>
      array (
        0 => 'image/x-xcf',
      ),
    ),
    'xcf.bz2' =>
    array (
      't' =>
      array (
        0 => 'image/x-compressed-xcf',
      ),
    ),
    'xcf.gz' =>
    array (
      't' =>
      array (
        0 => 'image/x-compressed-xcf',
      ),
    ),
    'xdf' =>
    array (
      't' =>
      array (
        0 => 'application/xcap-diff+xml',
      ),
    ),
    'xdgapp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.flatpak',
      ),
    ),
    'xdm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.syncml.dm+xml',
      ),
    ),
    'xdp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.adobe.xdp+xml',
      ),
    ),
    'xdssc' =>
    array (
      't' =>
      array (
        0 => 'application/dssc+xml',
      ),
    ),
    'xdw' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.fujixerox.docuworks',
      ),
    ),
    'xenc' =>
    array (
      't' =>
      array (
        0 => 'application/xenc+xml',
      ),
    ),
    'xer' =>
    array (
      't' =>
      array (
        0 => 'application/patch-ops-error+xml',
      ),
    ),
    'xfdf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.adobe.xfdf',
      ),
    ),
    'xfdl' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.xfdl',
      ),
    ),
    'xhe' =>
    array (
      't' =>
      array (
        0 => 'audio/usac',
      ),
    ),
    'xht' =>
    array (
      't' =>
      array (
        0 => 'application/xhtml+xml',
      ),
    ),
    'xhtml' =>
    array (
      't' =>
      array (
        0 => 'application/xhtml+xml',
      ),
    ),
    'xhvml' =>
    array (
      't' =>
      array (
        0 => 'application/xv+xml',
      ),
    ),
    'xi' =>
    array (
      't' =>
      array (
        0 => 'audio/x-xi',
      ),
    ),
    'xif' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.xiff',
      ),
    ),
    'xla' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-excel',
      ),
    ),
    'xlam' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-excel.addin.macroenabled.12',
      ),
    ),
    'xlc' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-excel',
      ),
    ),
    'xld' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-excel',
      ),
    ),
    'xlf' =>
    array (
      't' =>
      array (
        0 => 'application/x-xliff+xml',
        1 => 'application/xliff+xml',
      ),
    ),
    'xliff' =>
    array (
      't' =>
      array (
        0 => 'application/xliff+xml',
      ),
    ),
    'xll' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-excel',
      ),
    ),
    'xlm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-excel',
      ),
    ),
    'xlr' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-works',
      ),
    ),
    'xls' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-excel',
      ),
    ),
    'xlsb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-excel.sheet.binary.macroenabled.12',
      ),
    ),
    'xlsm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-excel.sheet.macroenabled.12',
      ),
    ),
    'xlsx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
      ),
    ),
    'xlt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-excel',
      ),
    ),
    'xltm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-excel.template.macroenabled.12',
      ),
    ),
    'xltx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.template',
      ),
    ),
    'xlw' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-excel',
      ),
    ),
    'xm' =>
    array (
      't' =>
      array (
        0 => 'audio/xm',
        1 => 'audio/x-xm',
      ),
    ),
    'xmf' =>
    array (
      't' =>
      array (
        0 => 'audio/x-xmf',
      ),
    ),
    'xmi' =>
    array (
      't' =>
      array (
        0 => 'text/x-xmi',
      ),
    ),
    'xml' =>
    array (
      't' =>
      array (
        0 => 'application/xml',
      ),
    ),
    'xo' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.olpc-sugar',
      ),
    ),
    'xop' =>
    array (
      't' =>
      array (
        0 => 'application/xop+xml',
      ),
    ),
    'xpi' =>
    array (
      't' =>
      array (
        0 => 'application/x-xpinstall',
      ),
    ),
    'xpl' =>
    array (
      't' =>
      array (
        0 => 'application/xproc+xml',
      ),
    ),
    'xpm' =>
    array (
      't' =>
      array (
        0 => 'image/x-xpixmap',
      ),
    ),
    'xpr' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.is-xpr',
      ),
    ),
    'xps' =>
    array (
      't' =>
      array (
        0 => 'application/oxps',
      ),
    ),
    'xpw' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.intercon.formnet',
      ),
    ),
    'xpx' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.intercon.formnet',
      ),
    ),
    'xsd' =>
    array (
      't' =>
      array (
        0 => 'application/xml',
      ),
    ),
    'xsl' =>
    array (
      't' =>
      array (
        0 => 'application/xml',
        1 => 'application/xslt+xml',
      ),
    ),
    'xslfo' =>
    array (
      't' =>
      array (
        0 => 'text/x-xslfo',
      ),
    ),
    'xslt' =>
    array (
      't' =>
      array (
        0 => 'application/xslt+xml',
      ),
    ),
    'xsm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.syncml+xml',
      ),
    ),
    'xspf' =>
    array (
      't' =>
      array (
        0 => 'application/xspf+xml',
      ),
    ),
    'xul' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.mozilla.xul+xml',
      ),
    ),
    'xvm' =>
    array (
      't' =>
      array (
        0 => 'application/xv+xml',
      ),
    ),
    'xvml' =>
    array (
      't' =>
      array (
        0 => 'application/xv+xml',
      ),
    ),
    'xwd' =>
    array (
      't' =>
      array (
        0 => 'image/x-xwindowdump',
      ),
    ),
    'xyz' =>
    array (
      't' =>
      array (
        0 => 'chemical/x-xyz',
      ),
    ),
    'xz' =>
    array (
      't' =>
      array (
        0 => 'application/x-xz',
      ),
    ),
    'yaml' =>
    array (
      't' =>
      array (
        0 => 'application/x-yaml',
      ),
    ),
    'yang' =>
    array (
      't' =>
      array (
        0 => 'application/yang',
      ),
    ),
    'yin' =>
    array (
      't' =>
      array (
        0 => 'application/yin+xml',
      ),
    ),
    'yml' =>
    array (
      't' =>
      array (
        0 => 'application/x-yaml',
      ),
    ),
    'yt' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.youtube.yt',
      ),
    ),
    'z' =>
    array (
      't' =>
      array (
        0 => 'application/x-compress',
      ),
    ),
    'z1' =>
    array (
      't' =>
      array (
        0 => 'application/x-zmachine',
      ),
    ),
    'z2' =>
    array (
      't' =>
      array (
        0 => 'application/x-zmachine',
      ),
    ),
    'z3' =>
    array (
      't' =>
      array (
        0 => 'application/x-zmachine',
      ),
    ),
    'z4' =>
    array (
      't' =>
      array (
        0 => 'application/x-zmachine',
      ),
    ),
    'z5' =>
    array (
      't' =>
      array (
        0 => 'application/x-zmachine',
      ),
    ),
    'z6' =>
    array (
      't' =>
      array (
        0 => 'application/x-zmachine',
      ),
    ),
    'z64' =>
    array (
      't' =>
      array (
        0 => 'application/x-n64-rom',
      ),
    ),
    'z7' =>
    array (
      't' =>
      array (
        0 => 'application/x-zmachine',
      ),
    ),
    'z8' =>
    array (
      't' =>
      array (
        0 => 'application/x-zmachine',
      ),
    ),
    'zabw' =>
    array (
      't' =>
      array (
        0 => 'application/x-abiword',
      ),
    ),
    'zaz' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.zzazz.deck+xml',
      ),
    ),
    'zip' =>
    array (
      't' =>
      array (
        0 => 'application/zip',
      ),
    ),
    'zir' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.zul',
      ),
    ),
    'zirz' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.zul',
      ),
    ),
    'zmm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.handheld-entertainment+xml',
      ),
    ),
    'zoo' =>
    array (
      't' =>
      array (
        0 => 'application/x-zoo',
      ),
    ),
    'zsav' =>
    array (
      't' =>
      array (
        0 => 'application/x-spss-sav',
      ),
    ),
    'zst' =>
    array (
      't' =>
      array (
        0 => 'application/zstd',
      ),
    ),
    'zz' =>
    array (
      't' =>
      array (
        0 => 'application/zlib',
      ),
    ),
    123 =>
    array (
      't' =>
      array (
        0 => 'application/vnd.lotus-1-2-3',
      ),
    ),
    602 =>
    array (
      't' =>
      array (
        0 => 'application/x-t602',
      ),
    ),
    669 =>
    array (
      't' =>
      array (
        0 => 'audio/x-mod',
      ),
    ),
  ),
  'a' =>
  array (
    'application/acrobat' =>
    array (
      't' =>
      array (
        0 => 'application/pdf',
      ),
    ),
    'application/bzip2' =>
    array (
      't' =>
      array (
        0 => 'application/x-bzip',
      ),
    ),
    'application/cdr' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.corel-draw',
      ),
    ),
    'application/coreldraw' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.corel-draw',
      ),
    ),
    'application/dbase' =>
    array (
      't' =>
      array (
        0 => 'application/x-dbf',
      ),
    ),
    'application/dbf' =>
    array (
      't' =>
      array (
        0 => 'application/x-dbf',
      ),
    ),
    'application/docbook+xml' =>
    array (
      't' =>
      array (
        0 => 'application/x-docbook+xml',
      ),
    ),
    'application/emf' =>
    array (
      't' =>
      array (
        0 => 'image/emf',
      ),
    ),
    'application/font-woff' =>
    array (
      't' =>
      array (
        0 => 'font/woff',
      ),
    ),
    'application/futuresplash' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.adobe.flash.movie',
      ),
    ),
    'application/gpx' =>
    array (
      't' =>
      array (
        0 => 'application/gpx+xml',
      ),
    ),
    'application/ico' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.microsoft.icon',
      ),
    ),
    'application/ics' =>
    array (
      't' =>
      array (
        0 => 'text/calendar',
      ),
    ),
    'application/java' =>
    array (
      't' =>
      array (
        0 => 'application/x-java',
      ),
    ),
    'application/java-archive' =>
    array (
      't' =>
      array (
        0 => 'application/x-java-archive',
      ),
    ),
    'application/java-byte-code' =>
    array (
      't' =>
      array (
        0 => 'application/x-java',
      ),
    ),
    'application/java-vm' =>
    array (
      't' =>
      array (
        0 => 'application/x-java',
      ),
    ),
    'application/lotus123' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.lotus-1-2-3',
      ),
    ),
    'application/m3u' =>
    array (
      't' =>
      array (
        0 => 'audio/x-mpegurl',
      ),
    ),
    'application/mdb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-access',
      ),
    ),
    'application/ms-tnef' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-tnef',
      ),
    ),
    'application/msaccess' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-access',
      ),
    ),
    'application/msexcel' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-excel',
      ),
    ),
    'application/mspowerpoint' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-powerpoint',
      ),
    ),
    'application/nappdf' =>
    array (
      't' =>
      array (
        0 => 'application/pdf',
      ),
    ),
    'application/pcap' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.tcpdump.pcap',
      ),
    ),
    'application/pgp' =>
    array (
      't' =>
      array (
        0 => 'application/pgp-encrypted',
      ),
    ),
    'application/photoshop' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.adobe.photoshop',
      ),
    ),
    'application/pls' =>
    array (
      't' =>
      array (
        0 => 'audio/x-scpls',
      ),
    ),
    'application/powerpoint' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-powerpoint',
      ),
    ),
    'application/smil' =>
    array (
      't' =>
      array (
        0 => 'application/smil+xml',
      ),
    ),
    'application/stuffit' =>
    array (
      't' =>
      array (
        0 => 'application/x-stuffit',
      ),
    ),
    'application/vnd.adobe.illustrator' =>
    array (
      't' =>
      array (
        0 => 'application/illustrator',
      ),
    ),
    'application/vnd.apple.keynote' =>
    array (
      't' =>
      array (
        0 => 'application/x-iwork-keynote-sffkey',
      ),
    ),
    'application/vnd.geo+json' =>
    array (
      't' =>
      array (
        0 => 'application/geo+json',
      ),
    ),
    'application/vnd.haansoft-hwp' =>
    array (
      't' =>
      array (
        0 => 'application/x-hwp',
      ),
    ),
    'application/vnd.haansoft-hwt' =>
    array (
      't' =>
      array (
        0 => 'application/x-hwt',
      ),
    ),
    'application/vnd.ms-word' =>
    array (
      't' =>
      array (
        0 => 'application/msword',
      ),
    ),
    'application/vnd.ms-xpsdocument' =>
    array (
      't' =>
      array (
        0 => 'application/oxps',
      ),
    ),
    'application/vnd.msaccess' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-access',
      ),
    ),
    'application/vnd.oasis.docbook+xml' =>
    array (
      't' =>
      array (
        0 => 'application/x-docbook+xml',
      ),
    ),
    'application/vnd.rn-realmedia-vbr' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.rn-realmedia',
      ),
    ),
    'application/vnd.sdp' =>
    array (
      't' =>
      array (
        0 => 'application/sdp',
      ),
    ),
    'application/vnd.smaf' =>
    array (
      't' =>
      array (
        0 => 'application/x-smaf',
      ),
    ),
    'application/vnd.stardivision.writer-global' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.stardivision.writer',
      ),
    ),
    'application/vnd.sun.xml.base' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.oasis.opendocument.database',
      ),
    ),
    'application/vnd.xdgapp' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.flatpak',
      ),
    ),
    'application/wk1' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.lotus-1-2-3',
      ),
    ),
    'application/wmf' =>
    array (
      't' =>
      array (
        0 => 'image/wmf',
      ),
    ),
    'application/wordperfect' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.wordperfect',
      ),
    ),
    'application/wwf' =>
    array (
      't' =>
      array (
        0 => 'application/x-wwf',
      ),
    ),
    'application/x-123' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.lotus-1-2-3',
      ),
    ),
    'application/x-annodex' =>
    array (
      't' =>
      array (
        0 => 'application/annodex',
      ),
    ),
    'application/x-bzip2' =>
    array (
      't' =>
      array (
        0 => 'application/x-bzip',
      ),
    ),
    'application/x-cbr' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.comicbook-rar',
      ),
    ),
    'application/x-cbz' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.comicbook+zip',
      ),
    ),
    'application/x-cdr' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.corel-draw',
      ),
    ),
    'application/x-chess-pgn' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.chess-pgn',
      ),
    ),
    'application/x-chm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-htmlhelp',
      ),
    ),
    'application/x-coreldraw' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.corel-draw',
      ),
    ),
    'application/x-dbase' =>
    array (
      't' =>
      array (
        0 => 'application/x-dbf',
      ),
    ),
    'application/x-deb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.debian.binary-package',
      ),
    ),
    'application/x-debian-package' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.debian.binary-package',
      ),
    ),
    'application/x-emf' =>
    array (
      't' =>
      array (
        0 => 'image/emf',
      ),
    ),
    'application/x-fd-file' =>
    array (
      't' =>
      array (
        0 => 'application/x-raw-floppy-disk-image',
      ),
    ),
    'application/x-fictionbook' =>
    array (
      't' =>
      array (
        0 => 'application/x-fictionbook+xml',
      ),
    ),
    'application/x-flash-video' =>
    array (
      't' =>
      array (
        0 => 'video/x-flv',
      ),
    ),
    'application/x-font-otf' =>
    array (
      't' =>
      array (
        0 => 'font/otf',
      ),
    ),
    'application/x-font-ttf' =>
    array (
      't' =>
      array (
        0 => 'font/ttf',
      ),
    ),
    'application/x-frame' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.framemaker',
      ),
    ),
    'application/x-gamecube-iso-image' =>
    array (
      't' =>
      array (
        0 => 'application/x-gamecube-rom',
      ),
    ),
    'application/x-gettext' =>
    array (
      't' =>
      array (
        0 => 'text/x-gettext-translation',
      ),
    ),
    'application/x-gnome-app-info' =>
    array (
      't' =>
      array (
        0 => 'application/x-desktop',
      ),
    ),
    'application/x-gpx' =>
    array (
      't' =>
      array (
        0 => 'application/gpx+xml',
      ),
    ),
    'application/x-gpx+xml' =>
    array (
      't' =>
      array (
        0 => 'application/gpx+xml',
      ),
    ),
    'application/x-gtar' =>
    array (
      't' =>
      array (
        0 => 'application/x-tar',
      ),
    ),
    'application/x-gzip' =>
    array (
      't' =>
      array (
        0 => 'application/gzip',
      ),
    ),
    'application/x-hfe-file' =>
    array (
      't' =>
      array (
        0 => 'application/x-hfe-floppy-image',
      ),
    ),
    'application/x-iso9660-image' =>
    array (
      't' =>
      array (
        0 => 'application/x-cd-image',
      ),
    ),
    'application/x-jar' =>
    array (
      't' =>
      array (
        0 => 'application/x-java-archive',
      ),
    ),
    'application/x-java-class' =>
    array (
      't' =>
      array (
        0 => 'application/x-java',
      ),
    ),
    'application/x-java-vm' =>
    array (
      't' =>
      array (
        0 => 'application/x-java',
      ),
    ),
    'application/x-javascript' =>
    array (
      't' =>
      array (
        0 => 'application/javascript',
      ),
    ),
    'application/x-kexiproject-sqlite' =>
    array (
      't' =>
      array (
        0 => 'application/x-kexiproject-sqlite3',
      ),
    ),
    'application/x-linguist' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.qt.linguist',
      ),
    ),
    'application/x-lotus123' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.lotus-1-2-3',
      ),
    ),
    'application/x-lzh-compressed' =>
    array (
      't' =>
      array (
        0 => 'application/x-lha',
      ),
    ),
    'application/x-mathematica' =>
    array (
      't' =>
      array (
        0 => 'application/mathematica',
      ),
    ),
    'application/x-mdb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-access',
      ),
    ),
    'application/x-mobi8-ebook' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.amazon.mobi8-ebook',
      ),
    ),
    'application/x-ms-asx' =>
    array (
      't' =>
      array (
        0 => 'audio/x-ms-asx',
      ),
    ),
    'application/x-msaccess' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-access',
      ),
    ),
    'application/x-msexcel' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-excel',
      ),
    ),
    'application/x-msmetafile' =>
    array (
      't' =>
      array (
        0 => 'image/wmf',
      ),
    ),
    'application/x-mspowerpoint' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-powerpoint',
      ),
    ),
    'application/x-msword' =>
    array (
      't' =>
      array (
        0 => 'application/msword',
      ),
    ),
    'application/x-ogg' =>
    array (
      't' =>
      array (
        0 => 'application/ogg',
      ),
    ),
    'application/x-palm-database' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.palm',
      ),
    ),
    'application/x-pcap' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.tcpdump.pcap',
      ),
    ),
    'application/x-pdf' =>
    array (
      't' =>
      array (
        0 => 'application/pdf',
      ),
    ),
    'application/x-photoshop' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.adobe.photoshop',
      ),
    ),
    'application/x-pkcs12' =>
    array (
      't' =>
      array (
        0 => 'application/pkcs12',
      ),
    ),
    'application/x-quicktimeplayer' =>
    array (
      't' =>
      array (
        0 => 'application/x-quicktime-media-link',
      ),
    ),
    'application/x-rar' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.rar',
      ),
    ),
    'application/x-rar-compressed' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.rar',
      ),
    ),
    'application/x-redhat-package-manager' =>
    array (
      't' =>
      array (
        0 => 'application/x-rpm',
      ),
    ),
    'application/x-reject' =>
    array (
      't' =>
      array (
        0 => 'text/x-reject',
      ),
    ),
    'application/x-rnc' =>
    array (
      't' =>
      array (
        0 => 'application/relax-ng-compact-syntax',
      ),
    ),
    'application/x-sap-file' =>
    array (
      't' =>
      array (
        0 => 'application/x-thomson-sap-image',
      ),
    ),
    'application/x-sdp' =>
    array (
      't' =>
      array (
        0 => 'application/sdp',
      ),
    ),
    'application/x-shockwave-flash' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.adobe.flash.movie',
      ),
    ),
    'application/x-sit' =>
    array (
      't' =>
      array (
        0 => 'application/x-stuffit',
      ),
    ),
    'application/x-snes-rom' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.nintendo.snes.rom',
      ),
    ),
    'application/x-spss-savefile' =>
    array (
      't' =>
      array (
        0 => 'application/x-spss-sav',
      ),
    ),
    'application/x-sqlite3' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.sqlite3',
      ),
    ),
    'application/x-srt' =>
    array (
      't' =>
      array (
        0 => 'application/x-subrip',
      ),
    ),
    'application/x-tex' =>
    array (
      't' =>
      array (
        0 => 'text/x-tex',
      ),
    ),
    'application/x-trig' =>
    array (
      't' =>
      array (
        0 => 'application/trig',
      ),
    ),
    'application/x-troff' =>
    array (
      't' =>
      array (
        0 => 'text/troff',
      ),
    ),
    'application/x-vnd.kde.kexi' =>
    array (
      't' =>
      array (
        0 => 'application/x-kexiproject-sqlite3',
      ),
    ),
    'application/x-wbfs' =>
    array (
      't' =>
      array (
        0 => 'application/x-wii-rom',
      ),
    ),
    'application/x-wia' =>
    array (
      't' =>
      array (
        0 => 'application/x-wii-rom',
      ),
    ),
    'application/x-wii-iso-image' =>
    array (
      't' =>
      array (
        0 => 'application/x-wii-rom',
      ),
    ),
    'application/x-wmf' =>
    array (
      't' =>
      array (
        0 => 'image/wmf',
      ),
    ),
    'application/x-wordperfect' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.wordperfect',
      ),
    ),
    'application/x-xliff' =>
    array (
      't' =>
      array (
        0 => 'application/xliff+xml',
      ),
    ),
    'application/x-xspf+xml' =>
    array (
      't' =>
      array (
        0 => 'application/xspf+xml',
      ),
    ),
    'application/x-zip' =>
    array (
      't' =>
      array (
        0 => 'application/zip',
      ),
    ),
    'application/x-zip-compressed' =>
    array (
      't' =>
      array (
        0 => 'application/zip',
      ),
    ),
    'application/xps' =>
    array (
      't' =>
      array (
        0 => 'application/oxps',
      ),
    ),
    'audio/3gpp' =>
    array (
      't' =>
      array (
        0 => 'video/3gpp',
      ),
    ),
    'audio/3gpp-encrypted' =>
    array (
      't' =>
      array (
        0 => 'video/3gpp',
      ),
    ),
    'audio/3gpp2' =>
    array (
      't' =>
      array (
        0 => 'video/3gpp2',
      ),
    ),
    'audio/amr-encrypted' =>
    array (
      't' =>
      array (
        0 => 'audio/amr',
      ),
    ),
    'audio/amr-wb-encrypted' =>
    array (
      't' =>
      array (
        0 => 'audio/amr-wb',
      ),
    ),
    'audio/imelody' =>
    array (
      't' =>
      array (
        0 => 'text/x-imelody',
      ),
    ),
    'audio/m3u' =>
    array (
      't' =>
      array (
        0 => 'audio/x-mpegurl',
      ),
    ),
    'audio/m4a' =>
    array (
      't' =>
      array (
        0 => 'audio/mp4',
      ),
    ),
    'audio/mobile-xmf' =>
    array (
      't' =>
      array (
        0 => 'audio/x-xmf',
      ),
    ),
    'audio/mp3' =>
    array (
      't' =>
      array (
        0 => 'audio/mpeg',
      ),
    ),
    'audio/mpegurl' =>
    array (
      't' =>
      array (
        0 => 'audio/x-mpegurl',
      ),
    ),
    'audio/scpls' =>
    array (
      't' =>
      array (
        0 => 'audio/x-scpls',
      ),
    ),
    'audio/tta' =>
    array (
      't' =>
      array (
        0 => 'audio/x-tta',
      ),
    ),
    'audio/vnd.audible' =>
    array (
      't' =>
      array (
        0 => 'audio/x-pn-audibleaudio',
      ),
    ),
    'audio/vnd.m-realaudio' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.rn-realaudio',
      ),
    ),
    'audio/vnd.wave' =>
    array (
      't' =>
      array (
        0 => 'audio/x-wav',
      ),
    ),
    'audio/vorbis' =>
    array (
      't' =>
      array (
        0 => 'audio/x-vorbis+ogg',
      ),
    ),
    'audio/wav' =>
    array (
      't' =>
      array (
        0 => 'audio/x-wav',
      ),
    ),
    'audio/wma' =>
    array (
      't' =>
      array (
        0 => 'audio/x-ms-wma',
      ),
    ),
    'audio/x-aac' =>
    array (
      't' =>
      array (
        0 => 'audio/aac',
      ),
    ),
    'audio/x-aiffc' =>
    array (
      't' =>
      array (
        0 => 'audio/x-aifc',
      ),
    ),
    'audio/x-annodex' =>
    array (
      't' =>
      array (
        0 => 'audio/annodex',
      ),
    ),
    'audio/x-dts' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.dts',
      ),
    ),
    'audio/x-dtshd' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.dts.hd',
      ),
    ),
    'audio/x-flac' =>
    array (
      't' =>
      array (
        0 => 'audio/flac',
      ),
    ),
    'audio/x-imelody' =>
    array (
      't' =>
      array (
        0 => 'text/x-imelody',
      ),
    ),
    'audio/x-m3u' =>
    array (
      't' =>
      array (
        0 => 'audio/x-mpegurl',
      ),
    ),
    'audio/x-m4a' =>
    array (
      't' =>
      array (
        0 => 'audio/mp4',
      ),
    ),
    'audio/x-midi' =>
    array (
      't' =>
      array (
        0 => 'audio/midi',
      ),
    ),
    'audio/x-mp2' =>
    array (
      't' =>
      array (
        0 => 'audio/mp2',
      ),
    ),
    'audio/x-mp3' =>
    array (
      't' =>
      array (
        0 => 'audio/mpeg',
      ),
    ),
    'audio/x-mp3-playlist' =>
    array (
      't' =>
      array (
        0 => 'audio/x-mpegurl',
      ),
    ),
    'audio/x-mpeg' =>
    array (
      't' =>
      array (
        0 => 'audio/mpeg',
      ),
    ),
    'audio/x-mpg' =>
    array (
      't' =>
      array (
        0 => 'audio/mpeg',
      ),
    ),
    'audio/x-ogg' =>
    array (
      't' =>
      array (
        0 => 'audio/ogg',
      ),
    ),
    'audio/x-oggflac' =>
    array (
      't' =>
      array (
        0 => 'audio/x-flac+ogg',
      ),
    ),
    'audio/x-pn-realaudio' =>
    array (
      't' =>
      array (
        0 => 'audio/vnd.rn-realaudio',
      ),
    ),
    'audio/x-rn-3gpp-amr' =>
    array (
      't' =>
      array (
        0 => 'video/3gpp',
      ),
    ),
    'audio/x-rn-3gpp-amr-encrypted' =>
    array (
      't' =>
      array (
        0 => 'video/3gpp',
      ),
    ),
    'audio/x-rn-3gpp-amr-wb' =>
    array (
      't' =>
      array (
        0 => 'video/3gpp',
      ),
    ),
    'audio/x-rn-3gpp-amr-wb-encrypted' =>
    array (
      't' =>
      array (
        0 => 'video/3gpp',
      ),
    ),
    'audio/x-shorten' =>
    array (
      't' =>
      array (
        0 => 'application/x-shorten',
      ),
    ),
    'audio/x-vorbis' =>
    array (
      't' =>
      array (
        0 => 'audio/x-vorbis+ogg',
      ),
    ),
    'audio/xmf' =>
    array (
      't' =>
      array (
        0 => 'audio/x-xmf',
      ),
    ),
    'flv-application/octet-stream' =>
    array (
      't' =>
      array (
        0 => 'video/x-flv',
      ),
    ),
    'image/cdr' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.corel-draw',
      ),
    ),
    'image/g3fax' =>
    array (
      't' =>
      array (
        0 => 'image/fax-g3',
      ),
    ),
    'image/heic' =>
    array (
      't' =>
      array (
        0 => 'image/heif',
      ),
    ),
    'image/heic-sequence' =>
    array (
      't' =>
      array (
        0 => 'image/heif',
      ),
    ),
    'image/heif-sequence' =>
    array (
      't' =>
      array (
        0 => 'image/heif',
      ),
    ),
    'image/ico' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.microsoft.icon',
      ),
    ),
    'image/icon' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.microsoft.icon',
      ),
    ),
    'image/jpeg2000' =>
    array (
      't' =>
      array (
        0 => 'image/jp2',
      ),
    ),
    'image/jpeg2000-image' =>
    array (
      't' =>
      array (
        0 => 'image/jp2',
      ),
    ),
    'image/pdf' =>
    array (
      't' =>
      array (
        0 => 'application/pdf',
      ),
    ),
    'image/photoshop' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.adobe.photoshop',
      ),
    ),
    'image/pjpeg' =>
    array (
      't' =>
      array (
        0 => 'image/jpeg',
      ),
    ),
    'image/psd' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.adobe.photoshop',
      ),
    ),
    'image/x-bmp' =>
    array (
      't' =>
      array (
        0 => 'image/bmp',
      ),
    ),
    'image/x-cdr' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.corel-draw',
      ),
    ),
    'image/x-djvu' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.djvu',
      ),
    ),
    'image/x-emf' =>
    array (
      't' =>
      array (
        0 => 'image/emf',
      ),
    ),
    'image/x-fits' =>
    array (
      't' =>
      array (
        0 => 'image/fits',
      ),
    ),
    'image/x-icb' =>
    array (
      't' =>
      array (
        0 => 'image/x-tga',
      ),
    ),
    'image/x-ico' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.microsoft.icon',
      ),
    ),
    'image/x-icon' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.microsoft.icon',
      ),
    ),
    'image/x-iff' =>
    array (
      't' =>
      array (
        0 => 'image/x-ilbm',
      ),
    ),
    'image/x-jpeg2000-image' =>
    array (
      't' =>
      array (
        0 => 'image/jp2',
      ),
    ),
    'image/x-ms-bmp' =>
    array (
      't' =>
      array (
        0 => 'image/bmp',
      ),
    ),
    'image/x-panasonic-raw' =>
    array (
      't' =>
      array (
        0 => 'image/x-panasonic-rw',
      ),
    ),
    'image/x-panasonic-raw2' =>
    array (
      't' =>
      array (
        0 => 'image/x-panasonic-rw2',
      ),
    ),
    'image/x-pcx' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.zbrush.pcx',
      ),
    ),
    'image/x-photoshop' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.adobe.photoshop',
      ),
    ),
    'image/x-psd' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.adobe.photoshop',
      ),
    ),
    'image/x-win-metafile' =>
    array (
      't' =>
      array (
        0 => 'image/wmf',
      ),
    ),
    'image/x-wmf' =>
    array (
      't' =>
      array (
        0 => 'image/wmf',
      ),
    ),
    'image/x-xpm' =>
    array (
      't' =>
      array (
        0 => 'image/x-xpixmap',
      ),
    ),
    'image/x.djvu' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.djvu',
      ),
    ),
    'model/x.stl-ascii' =>
    array (
      't' =>
      array (
        0 => 'model/stl',
      ),
    ),
    'model/x.stl-binary' =>
    array (
      't' =>
      array (
        0 => 'model/stl',
      ),
    ),
    'text/directory' =>
    array (
      't' =>
      array (
        0 => 'text/vcard',
      ),
    ),
    'text/ecmascript' =>
    array (
      't' =>
      array (
        0 => 'application/ecmascript',
      ),
    ),
    'text/gedcom' =>
    array (
      't' =>
      array (
        0 => 'application/x-gedcom',
      ),
    ),
    'text/google-video-pointer' =>
    array (
      't' =>
      array (
        0 => 'text/x-google-video-pointer',
      ),
    ),
    'text/ico' =>
    array (
      't' =>
      array (
        0 => 'image/vnd.microsoft.icon',
      ),
    ),
    'text/javascript' =>
    array (
      't' =>
      array (
        0 => 'application/javascript',
      ),
    ),
    'text/mathml' =>
    array (
      't' =>
      array (
        0 => 'application/mathml+xml',
      ),
    ),
    'text/rdf' =>
    array (
      't' =>
      array (
        0 => 'application/rdf+xml',
      ),
    ),
    'text/rss' =>
    array (
      't' =>
      array (
        0 => 'application/rss+xml',
      ),
    ),
    'text/rtf' =>
    array (
      't' =>
      array (
        0 => 'application/rtf',
      ),
    ),
    'text/vbs' =>
    array (
      't' =>
      array (
        0 => 'text/vbscript',
      ),
    ),
    'text/vnd.trolltech.linguist' =>
    array (
      't' =>
      array (
        0 => 'text/vnd.qt.linguist',
      ),
    ),
    'text/x-c' =>
    array (
      't' =>
      array (
        0 => 'text/x-csrc',
      ),
    ),
    'text/x-comma-separated-values' =>
    array (
      't' =>
      array (
        0 => 'text/csv',
      ),
    ),
    'text/x-csv' =>
    array (
      't' =>
      array (
        0 => 'text/csv',
      ),
    ),
    'text/x-diff' =>
    array (
      't' =>
      array (
        0 => 'text/x-patch',
      ),
    ),
    'text/x-dtd' =>
    array (
      't' =>
      array (
        0 => 'application/xml-dtd',
      ),
    ),
    'text/x-lyx' =>
    array (
      't' =>
      array (
        0 => 'application/x-lyx',
      ),
    ),
    'text/x-markdown' =>
    array (
      't' =>
      array (
        0 => 'text/markdown',
      ),
    ),
    'text/x-octave' =>
    array (
      't' =>
      array (
        0 => 'text/x-matlab',
      ),
    ),
    'text/x-opml' =>
    array (
      't' =>
      array (
        0 => 'text/x-opml+xml',
      ),
    ),
    'text/x-perl' =>
    array (
      't' =>
      array (
        0 => 'application/x-perl',
      ),
    ),
    'text/x-po' =>
    array (
      't' =>
      array (
        0 => 'text/x-gettext-translation',
      ),
    ),
    'text/x-pot' =>
    array (
      't' =>
      array (
        0 => 'text/x-gettext-translation-template',
      ),
    ),
    'text/x-sh' =>
    array (
      't' =>
      array (
        0 => 'application/x-shellscript',
      ),
    ),
    'text/x-sql' =>
    array (
      't' =>
      array (
        0 => 'application/sql',
      ),
    ),
    'text/x-tcl' =>
    array (
      't' =>
      array (
        0 => 'text/tcl',
      ),
    ),
    'text/x-troff' =>
    array (
      't' =>
      array (
        0 => 'text/troff',
      ),
    ),
    'text/x-vcalendar' =>
    array (
      't' =>
      array (
        0 => 'text/calendar',
      ),
    ),
    'text/x-vcard' =>
    array (
      't' =>
      array (
        0 => 'text/vcard',
      ),
    ),
    'text/x-yaml' =>
    array (
      't' =>
      array (
        0 => 'application/x-yaml',
      ),
    ),
    'text/xml' =>
    array (
      't' =>
      array (
        0 => 'application/xml',
      ),
    ),
    'text/xml-external-parsed-entity' =>
    array (
      't' =>
      array (
        0 => 'application/xml-external-parsed-entity',
      ),
    ),
    'text/yaml' =>
    array (
      't' =>
      array (
        0 => 'application/x-yaml',
      ),
    ),
    'video/3gp' =>
    array (
      't' =>
      array (
        0 => 'video/3gpp',
      ),
    ),
    'video/3gpp-encrypted' =>
    array (
      't' =>
      array (
        0 => 'video/3gpp',
      ),
    ),
    'video/avi' =>
    array (
      't' =>
      array (
        0 => 'video/x-msvideo',
      ),
    ),
    'video/divx' =>
    array (
      't' =>
      array (
        0 => 'video/x-msvideo',
      ),
    ),
    'video/fli' =>
    array (
      't' =>
      array (
        0 => 'video/x-flic',
      ),
    ),
    'video/flv' =>
    array (
      't' =>
      array (
        0 => 'video/x-flv',
      ),
    ),
    'video/mp4v-es' =>
    array (
      't' =>
      array (
        0 => 'video/mp4',
      ),
    ),
    'video/mpeg-system' =>
    array (
      't' =>
      array (
        0 => 'video/mpeg',
      ),
    ),
    'video/msvideo' =>
    array (
      't' =>
      array (
        0 => 'video/x-msvideo',
      ),
    ),
    'video/vivo' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.vivo',
      ),
    ),
    'video/vnd.divx' =>
    array (
      't' =>
      array (
        0 => 'video/x-msvideo',
      ),
    ),
    'video/x-annodex' =>
    array (
      't' =>
      array (
        0 => 'video/annodex',
      ),
    ),
    'video/x-avi' =>
    array (
      't' =>
      array (
        0 => 'video/x-msvideo',
      ),
    ),
    'video/x-fli' =>
    array (
      't' =>
      array (
        0 => 'video/x-flic',
      ),
    ),
    'video/x-m4v' =>
    array (
      't' =>
      array (
        0 => 'video/mp4',
      ),
    ),
    'video/x-mpeg' =>
    array (
      't' =>
      array (
        0 => 'video/mpeg',
      ),
    ),
    'video/x-mpeg-system' =>
    array (
      't' =>
      array (
        0 => 'video/mpeg',
      ),
    ),
    'video/x-mpeg2' =>
    array (
      't' =>
      array (
        0 => 'video/mpeg',
      ),
    ),
    'video/x-mpegurl' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.mpegurl',
      ),
    ),
    'video/x-ms-asf' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-asf',
      ),
    ),
    'video/x-ms-asf-plugin' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-asf',
      ),
    ),
    'video/x-ms-wax' =>
    array (
      't' =>
      array (
        0 => 'audio/x-ms-asx',
      ),
    ),
    'video/x-ms-wm' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-asf',
      ),
    ),
    'video/x-ms-wmx' =>
    array (
      't' =>
      array (
        0 => 'audio/x-ms-asx',
      ),
    ),
    'video/x-ms-wvx' =>
    array (
      't' =>
      array (
        0 => 'audio/x-ms-asx',
      ),
    ),
    'video/x-ogg' =>
    array (
      't' =>
      array (
        0 => 'video/ogg',
      ),
    ),
    'video/x-ogm' =>
    array (
      't' =>
      array (
        0 => 'video/x-ogm+ogg',
      ),
    ),
    'video/x-real-video' =>
    array (
      't' =>
      array (
        0 => 'video/vnd.rn-realvideo',
      ),
    ),
    'video/x-theora' =>
    array (
      't' =>
      array (
        0 => 'video/x-theora+ogg',
      ),
    ),
    'zz-application/zz-winassoc-123' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.lotus-1-2-3',
      ),
    ),
    'zz-application/zz-winassoc-cab' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-cab-compressed',
      ),
    ),
    'zz-application/zz-winassoc-cdr' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.corel-draw',
      ),
    ),
    'zz-application/zz-winassoc-doc' =>
    array (
      't' =>
      array (
        0 => 'application/msword',
      ),
    ),
    'zz-application/zz-winassoc-hlp' =>
    array (
      't' =>
      array (
        0 => 'application/winhlp',
      ),
    ),
    'zz-application/zz-winassoc-mdb' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-access',
      ),
    ),
    'zz-application/zz-winassoc-uu' =>
    array (
      't' =>
      array (
        0 => 'text/x-uuencode',
      ),
    ),
    'zz-application/zz-winassoc-xls' =>
    array (
      't' =>
      array (
        0 => 'application/vnd.ms-excel',
      ),
    ),
  ),
);
    // phpcs:enable
}
