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
     * The array has two main keys, 'types' that maps MIME types to file
     * extensions, and 'extensions' that map file extensions to MIME types.
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
  'types' =>
  array (
    'application/andrew-inset' =>
    array (
      0 => 'ez',
    ),
    'application/annodex' =>
    array (
      0 => 'anx',
    ),
    'application/applixware' =>
    array (
      0 => 'aw',
    ),
    'application/atom+xml' =>
    array (
      0 => 'atom',
    ),
    'application/atomcat+xml' =>
    array (
      0 => 'atomcat',
    ),
    'application/atomsvc+xml' =>
    array (
      0 => 'atomsvc',
    ),
    'application/ccxml+xml' =>
    array (
      0 => 'ccxml',
    ),
    'application/cdmi-capability' =>
    array (
      0 => 'cdmia',
    ),
    'application/cdmi-container' =>
    array (
      0 => 'cdmic',
    ),
    'application/cdmi-domain' =>
    array (
      0 => 'cdmid',
    ),
    'application/cdmi-object' =>
    array (
      0 => 'cdmio',
    ),
    'application/cdmi-queue' =>
    array (
      0 => 'cdmiq',
    ),
    'application/cu-seeme' =>
    array (
      0 => 'cu',
    ),
    'application/davmount+xml' =>
    array (
      0 => 'davmount',
    ),
    'application/dicom' =>
    array (
      0 => 'dcm',
    ),
    'application/docbook+xml' =>
    array (
      0 => 'dbk',
    ),
    'application/dssc+der' =>
    array (
      0 => 'dssc',
    ),
    'application/dssc+xml' =>
    array (
      0 => 'xdssc',
    ),
    'application/ecmascript' =>
    array (
      0 => 'ecma',
      1 => 'es',
    ),
    'application/emma+xml' =>
    array (
      0 => 'emma',
    ),
    'application/epub+zip' =>
    array (
      0 => 'epub',
    ),
    'application/exi' =>
    array (
      0 => 'exi',
    ),
    'application/font-tdpfr' =>
    array (
      0 => 'pfr',
    ),
    'application/geo+json' =>
    array (
      0 => 'geojson',
      1 => 'geo.json',
    ),
    'application/gml+xml' =>
    array (
      0 => 'gml',
    ),
    'application/gnunet-directory' =>
    array (
      0 => 'gnd',
    ),
    'application/gpx+xml' =>
    array (
      0 => 'gpx',
    ),
    'application/gxf' =>
    array (
      0 => 'gxf',
    ),
    'application/gzip' =>
    array (
      0 => 'gz',
    ),
    'application/hyperstudio' =>
    array (
      0 => 'stk',
    ),
    'application/illustrator' =>
    array (
      0 => 'ai',
    ),
    'application/inkml+xml' =>
    array (
      0 => 'ink',
      1 => 'inkml',
    ),
    'application/ipfix' =>
    array (
      0 => 'ipfix',
    ),
    'application/java-archive' =>
    array (
      0 => 'jar',
    ),
    'application/java-serialized-object' =>
    array (
      0 => 'ser',
    ),
    'application/java-vm' =>
    array (
      0 => 'class',
    ),
    'application/javascript' =>
    array (
      0 => 'js',
      1 => 'jsm',
      2 => 'mjs',
    ),
    'application/jrd+json' =>
    array (
      0 => 'jrd',
    ),
    'application/json' =>
    array (
      0 => 'json',
    ),
    'application/json-patch+json' =>
    array (
      0 => 'json-patch',
    ),
    'application/jsonml+json' =>
    array (
      0 => 'jsonml',
    ),
    'application/ld+json' =>
    array (
      0 => 'jsonld',
    ),
    'application/lost+xml' =>
    array (
      0 => 'lostxml',
    ),
    'application/mac-binhex40' =>
    array (
      0 => 'hqx',
    ),
    'application/mac-compactpro' =>
    array (
      0 => 'cpt',
    ),
    'application/mads+xml' =>
    array (
      0 => 'mads',
    ),
    'application/marc' =>
    array (
      0 => 'mrc',
    ),
    'application/marcxml+xml' =>
    array (
      0 => 'mrcx',
    ),
    'application/mathematica' =>
    array (
      0 => 'ma',
      1 => 'nb',
      2 => 'mb',
    ),
    'application/mathml+xml' =>
    array (
      0 => 'mathml',
      1 => 'mml',
    ),
    'application/mbox' =>
    array (
      0 => 'mbox',
    ),
    'application/mediaservercontrol+xml' =>
    array (
      0 => 'mscml',
    ),
    'application/metalink+xml' =>
    array (
      0 => 'metalink',
    ),
    'application/metalink4+xml' =>
    array (
      0 => 'meta4',
    ),
    'application/mets+xml' =>
    array (
      0 => 'mets',
    ),
    'application/mods+xml' =>
    array (
      0 => 'mods',
    ),
    'application/mp21' =>
    array (
      0 => 'm21',
      1 => 'mp21',
    ),
    'application/mp4' =>
    array (
      0 => 'mp4s',
    ),
    'application/msword' =>
    array (
      0 => 'doc',
      1 => 'dot',
    ),
    'application/msword-template' =>
    array (
      0 => 'dot',
    ),
    'application/mxf' =>
    array (
      0 => 'mxf',
    ),
    'application/octet-stream' =>
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
    'application/oda' =>
    array (
      0 => 'oda',
    ),
    'application/oebps-package+xml' =>
    array (
      0 => 'opf',
    ),
    'application/ogg' =>
    array (
      0 => 'ogx',
    ),
    'application/omdoc+xml' =>
    array (
      0 => 'omdoc',
    ),
    'application/onenote' =>
    array (
      0 => 'onetoc',
      1 => 'onetoc2',
      2 => 'onetmp',
      3 => 'onepkg',
    ),
    'application/owl+xml' =>
    array (
      0 => 'owx',
    ),
    'application/oxps' =>
    array (
      0 => 'oxps',
      1 => 'xps',
    ),
    'application/patch-ops-error+xml' =>
    array (
      0 => 'xer',
    ),
    'application/pdf' =>
    array (
      0 => 'pdf',
    ),
    'application/pgp-encrypted' =>
    array (
      0 => 'pgp',
      1 => 'gpg',
      2 => 'asc',
    ),
    'application/pgp-keys' =>
    array (
      0 => 'skr',
      1 => 'pkr',
      2 => 'asc',
      3 => 'pgp',
      4 => 'gpg',
    ),
    'application/pgp-signature' =>
    array (
      0 => 'asc',
      1 => 'sig',
      2 => 'pgp',
      3 => 'gpg',
    ),
    'application/pics-rules' =>
    array (
      0 => 'prf',
    ),
    'application/pkcs10' =>
    array (
      0 => 'p10',
    ),
    'application/pkcs12' =>
    array (
      0 => 'p12',
      1 => 'pfx',
    ),
    'application/pkcs7-mime' =>
    array (
      0 => 'p7m',
      1 => 'p7c',
    ),
    'application/pkcs7-signature' =>
    array (
      0 => 'p7s',
    ),
    'application/pkcs8' =>
    array (
      0 => 'p8',
    ),
    'application/pkcs8-encrypted' =>
    array (
      0 => 'p8e',
    ),
    'application/pkix-attr-cert' =>
    array (
      0 => 'ac',
    ),
    'application/pkix-cert' =>
    array (
      0 => 'cer',
    ),
    'application/pkix-crl' =>
    array (
      0 => 'crl',
    ),
    'application/pkix-pkipath' =>
    array (
      0 => 'pkipath',
    ),
    'application/pkixcmp' =>
    array (
      0 => 'pki',
    ),
    'application/pls+xml' =>
    array (
      0 => 'pls',
    ),
    'application/postscript' =>
    array (
      0 => 'ai',
      1 => 'eps',
      2 => 'ps',
    ),
    'application/prs.cww' =>
    array (
      0 => 'cww',
    ),
    'application/pskc+xml' =>
    array (
      0 => 'pskcxml',
    ),
    'application/ram' =>
    array (
      0 => 'ram',
    ),
    'application/raml+yaml' =>
    array (
      0 => 'raml',
    ),
    'application/rdf+xml' =>
    array (
      0 => 'rdf',
      1 => 'rdfs',
      2 => 'owl',
    ),
    'application/reginfo+xml' =>
    array (
      0 => 'rif',
    ),
    'application/relax-ng-compact-syntax' =>
    array (
      0 => 'rnc',
    ),
    'application/resource-lists+xml' =>
    array (
      0 => 'rl',
    ),
    'application/resource-lists-diff+xml' =>
    array (
      0 => 'rld',
    ),
    'application/rls-services+xml' =>
    array (
      0 => 'rs',
    ),
    'application/rpki-ghostbusters' =>
    array (
      0 => 'gbr',
    ),
    'application/rpki-manifest' =>
    array (
      0 => 'mft',
    ),
    'application/rpki-roa' =>
    array (
      0 => 'roa',
    ),
    'application/rsd+xml' =>
    array (
      0 => 'rsd',
    ),
    'application/rss+xml' =>
    array (
      0 => 'rss',
    ),
    'application/rtf' =>
    array (
      0 => 'rtf',
    ),
    'application/sbml+xml' =>
    array (
      0 => 'sbml',
    ),
    'application/scvp-cv-request' =>
    array (
      0 => 'scq',
    ),
    'application/scvp-cv-response' =>
    array (
      0 => 'scs',
    ),
    'application/scvp-vp-request' =>
    array (
      0 => 'spq',
    ),
    'application/scvp-vp-response' =>
    array (
      0 => 'spp',
    ),
    'application/sdp' =>
    array (
      0 => 'sdp',
    ),
    'application/set-payment-initiation' =>
    array (
      0 => 'setpay',
    ),
    'application/set-registration-initiation' =>
    array (
      0 => 'setreg',
    ),
    'application/shf+xml' =>
    array (
      0 => 'shf',
    ),
    'application/sieve' =>
    array (
      0 => 'siv',
    ),
    'application/smil+xml' =>
    array (
      0 => 'smi',
      1 => 'smil',
      2 => 'sml',
      3 => 'kino',
    ),
    'application/sparql-query' =>
    array (
      0 => 'rq',
    ),
    'application/sparql-results+xml' =>
    array (
      0 => 'srx',
    ),
    'application/sql' =>
    array (
      0 => 'sql',
    ),
    'application/srgs' =>
    array (
      0 => 'gram',
    ),
    'application/srgs+xml' =>
    array (
      0 => 'grxml',
    ),
    'application/sru+xml' =>
    array (
      0 => 'sru',
    ),
    'application/ssdl+xml' =>
    array (
      0 => 'ssdl',
    ),
    'application/ssml+xml' =>
    array (
      0 => 'ssml',
    ),
    'application/tei+xml' =>
    array (
      0 => 'tei',
      1 => 'teicorpus',
    ),
    'application/thraud+xml' =>
    array (
      0 => 'tfi',
    ),
    'application/timestamped-data' =>
    array (
      0 => 'tsd',
    ),
    'application/trig' =>
    array (
      0 => 'trig',
    ),
    'application/vnd.3gpp.pic-bw-large' =>
    array (
      0 => 'plb',
    ),
    'application/vnd.3gpp.pic-bw-small' =>
    array (
      0 => 'psb',
    ),
    'application/vnd.3gpp.pic-bw-var' =>
    array (
      0 => 'pvb',
    ),
    'application/vnd.3gpp2.tcap' =>
    array (
      0 => 'tcap',
    ),
    'application/vnd.3m.post-it-notes' =>
    array (
      0 => 'pwn',
    ),
    'application/vnd.accpac.simply.aso' =>
    array (
      0 => 'aso',
    ),
    'application/vnd.accpac.simply.imp' =>
    array (
      0 => 'imp',
    ),
    'application/vnd.acucobol' =>
    array (
      0 => 'acu',
    ),
    'application/vnd.acucorp' =>
    array (
      0 => 'atc',
      1 => 'acutc',
    ),
    'application/vnd.adobe.air-application-installer-package+zip' =>
    array (
      0 => 'air',
    ),
    'application/vnd.adobe.flash.movie' =>
    array (
      0 => 'swf',
      1 => 'spl',
    ),
    'application/vnd.adobe.formscentral.fcdt' =>
    array (
      0 => 'fcdt',
    ),
    'application/vnd.adobe.fxp' =>
    array (
      0 => 'fxp',
      1 => 'fxpl',
    ),
    'application/vnd.adobe.xdp+xml' =>
    array (
      0 => 'xdp',
    ),
    'application/vnd.adobe.xfdf' =>
    array (
      0 => 'xfdf',
    ),
    'application/vnd.ahead.space' =>
    array (
      0 => 'ahead',
    ),
    'application/vnd.airzip.filesecure.azf' =>
    array (
      0 => 'azf',
    ),
    'application/vnd.airzip.filesecure.azs' =>
    array (
      0 => 'azs',
    ),
    'application/vnd.amazon.ebook' =>
    array (
      0 => 'azw',
    ),
    'application/vnd.americandynamics.acc' =>
    array (
      0 => 'acc',
    ),
    'application/vnd.amiga.ami' =>
    array (
      0 => 'ami',
    ),
    'application/vnd.android.package-archive' =>
    array (
      0 => 'apk',
    ),
    'application/vnd.anser-web-certificate-issue-initiation' =>
    array (
      0 => 'cii',
    ),
    'application/vnd.anser-web-funds-transfer-initiation' =>
    array (
      0 => 'fti',
    ),
    'application/vnd.antix.game-component' =>
    array (
      0 => 'atx',
    ),
    'application/vnd.appimage' =>
    array (
      0 => 'appimage',
    ),
    'application/vnd.apple.installer+xml' =>
    array (
      0 => 'mpkg',
    ),
    'application/vnd.apple.mpegurl' =>
    array (
      0 => 'm3u8',
      1 => 'm3u',
    ),
    'application/vnd.aristanetworks.swi' =>
    array (
      0 => 'swi',
    ),
    'application/vnd.astraea-software.iota' =>
    array (
      0 => 'iota',
    ),
    'application/vnd.audiograph' =>
    array (
      0 => 'aep',
    ),
    'application/vnd.blueice.multipass' =>
    array (
      0 => 'mpm',
    ),
    'application/vnd.bmi' =>
    array (
      0 => 'bmi',
    ),
    'application/vnd.businessobjects' =>
    array (
      0 => 'rep',
    ),
    'application/vnd.chemdraw+xml' =>
    array (
      0 => 'cdxml',
    ),
    'application/vnd.chess-pgn' =>
    array (
      0 => 'pgn',
    ),
    'application/vnd.chipnuts.karaoke-mmd' =>
    array (
      0 => 'mmd',
    ),
    'application/vnd.cinderella' =>
    array (
      0 => 'cdy',
    ),
    'application/vnd.claymore' =>
    array (
      0 => 'cla',
    ),
    'application/vnd.cloanto.rp9' =>
    array (
      0 => 'rp9',
    ),
    'application/vnd.clonk.c4group' =>
    array (
      0 => 'c4g',
      1 => 'c4d',
      2 => 'c4f',
      3 => 'c4p',
      4 => 'c4u',
    ),
    'application/vnd.cluetrust.cartomobile-config' =>
    array (
      0 => 'c11amc',
    ),
    'application/vnd.cluetrust.cartomobile-config-pkg' =>
    array (
      0 => 'c11amz',
    ),
    'application/vnd.coffeescript' =>
    array (
      0 => 'coffee',
    ),
    'application/vnd.comicbook+zip' =>
    array (
      0 => 'cbz',
    ),
    'application/vnd.comicbook-rar' =>
    array (
      0 => 'cbr',
    ),
    'application/vnd.commonspace' =>
    array (
      0 => 'csp',
    ),
    'application/vnd.contact.cmsg' =>
    array (
      0 => 'cdbcmsg',
    ),
    'application/vnd.corel-draw' =>
    array (
      0 => 'cdr',
    ),
    'application/vnd.cosmocaller' =>
    array (
      0 => 'cmc',
    ),
    'application/vnd.crick.clicker' =>
    array (
      0 => 'clkx',
    ),
    'application/vnd.crick.clicker.keyboard' =>
    array (
      0 => 'clkk',
    ),
    'application/vnd.crick.clicker.palette' =>
    array (
      0 => 'clkp',
    ),
    'application/vnd.crick.clicker.template' =>
    array (
      0 => 'clkt',
    ),
    'application/vnd.crick.clicker.wordbank' =>
    array (
      0 => 'clkw',
    ),
    'application/vnd.criticaltools.wbs+xml' =>
    array (
      0 => 'wbs',
    ),
    'application/vnd.ctc-posml' =>
    array (
      0 => 'pml',
    ),
    'application/vnd.cups-ppd' =>
    array (
      0 => 'ppd',
    ),
    'application/vnd.curl.car' =>
    array (
      0 => 'car',
    ),
    'application/vnd.curl.pcurl' =>
    array (
      0 => 'pcurl',
    ),
    'application/vnd.dart' =>
    array (
      0 => 'dart',
    ),
    'application/vnd.data-vision.rdz' =>
    array (
      0 => 'rdz',
    ),
    'application/vnd.debian.binary-package' =>
    array (
      0 => 'deb',
      1 => 'udeb',
    ),
    'application/vnd.dece.data' =>
    array (
      0 => 'uvf',
      1 => 'uvvf',
      2 => 'uvd',
      3 => 'uvvd',
    ),
    'application/vnd.dece.ttml+xml' =>
    array (
      0 => 'uvt',
      1 => 'uvvt',
    ),
    'application/vnd.dece.unspecified' =>
    array (
      0 => 'uvx',
      1 => 'uvvx',
    ),
    'application/vnd.dece.zip' =>
    array (
      0 => 'uvz',
      1 => 'uvvz',
    ),
    'application/vnd.denovo.fcselayout-link' =>
    array (
      0 => 'fe_launch',
    ),
    'application/vnd.dna' =>
    array (
      0 => 'dna',
    ),
    'application/vnd.dolby.mlp' =>
    array (
      0 => 'mlp',
    ),
    'application/vnd.dpgraph' =>
    array (
      0 => 'dpg',
    ),
    'application/vnd.dreamfactory' =>
    array (
      0 => 'dfac',
    ),
    'application/vnd.ds-keypoint' =>
    array (
      0 => 'kpxx',
    ),
    'application/vnd.dvb.ait' =>
    array (
      0 => 'ait',
    ),
    'application/vnd.dvb.service' =>
    array (
      0 => 'svc',
    ),
    'application/vnd.dynageo' =>
    array (
      0 => 'geo',
    ),
    'application/vnd.ecowin.chart' =>
    array (
      0 => 'mag',
    ),
    'application/vnd.emusic-emusic_package' =>
    array (
      0 => 'emp',
    ),
    'application/vnd.enliven' =>
    array (
      0 => 'nml',
    ),
    'application/vnd.epson.esf' =>
    array (
      0 => 'esf',
    ),
    'application/vnd.epson.msf' =>
    array (
      0 => 'msf',
    ),
    'application/vnd.epson.quickanime' =>
    array (
      0 => 'qam',
    ),
    'application/vnd.epson.salt' =>
    array (
      0 => 'slt',
    ),
    'application/vnd.epson.ssf' =>
    array (
      0 => 'ssf',
    ),
    'application/vnd.eszigno3+xml' =>
    array (
      0 => 'es3',
      1 => 'et3',
    ),
    'application/vnd.ezpix-album' =>
    array (
      0 => 'ez2',
    ),
    'application/vnd.ezpix-package' =>
    array (
      0 => 'ez3',
    ),
    'application/vnd.fdf' =>
    array (
      0 => 'fdf',
    ),
    'application/vnd.fdsn.mseed' =>
    array (
      0 => 'mseed',
    ),
    'application/vnd.fdsn.seed' =>
    array (
      0 => 'seed',
      1 => 'dataless',
    ),
    'application/vnd.flatpak' =>
    array (
      0 => 'flatpak',
      1 => 'xdgapp',
    ),
    'application/vnd.flatpak.ref' =>
    array (
      0 => 'flatpakref',
    ),
    'application/vnd.flatpak.repo' =>
    array (
      0 => 'flatpakrepo',
    ),
    'application/vnd.flographit' =>
    array (
      0 => 'gph',
    ),
    'application/vnd.fluxtime.clip' =>
    array (
      0 => 'ftc',
    ),
    'application/vnd.framemaker' =>
    array (
      0 => 'fm',
      1 => 'frame',
      2 => 'maker',
      3 => 'book',
    ),
    'application/vnd.frogans.fnc' =>
    array (
      0 => 'fnc',
    ),
    'application/vnd.frogans.ltf' =>
    array (
      0 => 'ltf',
    ),
    'application/vnd.fsc.weblaunch' =>
    array (
      0 => 'fsc',
    ),
    'application/vnd.fujitsu.oasys' =>
    array (
      0 => 'oas',
    ),
    'application/vnd.fujitsu.oasys2' =>
    array (
      0 => 'oa2',
    ),
    'application/vnd.fujitsu.oasys3' =>
    array (
      0 => 'oa3',
    ),
    'application/vnd.fujitsu.oasysgp' =>
    array (
      0 => 'fg5',
    ),
    'application/vnd.fujitsu.oasysprs' =>
    array (
      0 => 'bh2',
    ),
    'application/vnd.fujixerox.ddd' =>
    array (
      0 => 'ddd',
    ),
    'application/vnd.fujixerox.docuworks' =>
    array (
      0 => 'xdw',
    ),
    'application/vnd.fujixerox.docuworks.binder' =>
    array (
      0 => 'xbd',
    ),
    'application/vnd.fuzzysheet' =>
    array (
      0 => 'fzs',
    ),
    'application/vnd.genomatix.tuxedo' =>
    array (
      0 => 'txd',
    ),
    'application/vnd.geogebra.file' =>
    array (
      0 => 'ggb',
    ),
    'application/vnd.geogebra.tool' =>
    array (
      0 => 'ggt',
    ),
    'application/vnd.geometry-explorer' =>
    array (
      0 => 'gex',
      1 => 'gre',
    ),
    'application/vnd.geonext' =>
    array (
      0 => 'gxt',
    ),
    'application/vnd.geoplan' =>
    array (
      0 => 'g2w',
    ),
    'application/vnd.geospace' =>
    array (
      0 => 'g3w',
    ),
    'application/vnd.gmx' =>
    array (
      0 => 'gmx',
    ),
    'application/vnd.google-earth.kml+xml' =>
    array (
      0 => 'kml',
    ),
    'application/vnd.google-earth.kmz' =>
    array (
      0 => 'kmz',
    ),
    'application/vnd.grafeq' =>
    array (
      0 => 'gqf',
      1 => 'gqs',
    ),
    'application/vnd.groove-account' =>
    array (
      0 => 'gac',
    ),
    'application/vnd.groove-help' =>
    array (
      0 => 'ghf',
    ),
    'application/vnd.groove-identity-message' =>
    array (
      0 => 'gim',
    ),
    'application/vnd.groove-injector' =>
    array (
      0 => 'grv',
    ),
    'application/vnd.groove-tool-message' =>
    array (
      0 => 'gtm',
    ),
    'application/vnd.groove-tool-template' =>
    array (
      0 => 'tpl',
    ),
    'application/vnd.groove-vcard' =>
    array (
      0 => 'vcg',
    ),
    'application/vnd.hal+xml' =>
    array (
      0 => 'hal',
    ),
    'application/vnd.handheld-entertainment+xml' =>
    array (
      0 => 'zmm',
    ),
    'application/vnd.hbci' =>
    array (
      0 => 'hbci',
    ),
    'application/vnd.hhe.lesson-player' =>
    array (
      0 => 'les',
    ),
    'application/vnd.hp-hpgl' =>
    array (
      0 => 'hpgl',
    ),
    'application/vnd.hp-hpid' =>
    array (
      0 => 'hpid',
    ),
    'application/vnd.hp-hps' =>
    array (
      0 => 'hps',
    ),
    'application/vnd.hp-jlyt' =>
    array (
      0 => 'jlt',
    ),
    'application/vnd.hp-pcl' =>
    array (
      0 => 'pcl',
    ),
    'application/vnd.hp-pclxl' =>
    array (
      0 => 'pclxl',
    ),
    'application/vnd.hydrostatix.sof-data' =>
    array (
      0 => 'sfd-hdstx',
    ),
    'application/vnd.ibm.minipay' =>
    array (
      0 => 'mpy',
    ),
    'application/vnd.ibm.modcap' =>
    array (
      0 => 'afp',
      1 => 'listafp',
      2 => 'list3820',
    ),
    'application/vnd.ibm.rights-management' =>
    array (
      0 => 'irm',
    ),
    'application/vnd.ibm.secure-container' =>
    array (
      0 => 'sc',
    ),
    'application/vnd.iccprofile' =>
    array (
      0 => 'icc',
      1 => 'icm',
    ),
    'application/vnd.igloader' =>
    array (
      0 => 'igl',
    ),
    'application/vnd.immervision-ivp' =>
    array (
      0 => 'ivp',
    ),
    'application/vnd.immervision-ivu' =>
    array (
      0 => 'ivu',
    ),
    'application/vnd.insors.igm' =>
    array (
      0 => 'igm',
    ),
    'application/vnd.intercon.formnet' =>
    array (
      0 => 'xpw',
      1 => 'xpx',
    ),
    'application/vnd.intergeo' =>
    array (
      0 => 'i2g',
    ),
    'application/vnd.intu.qbo' =>
    array (
      0 => 'qbo',
    ),
    'application/vnd.intu.qfx' =>
    array (
      0 => 'qfx',
    ),
    'application/vnd.ipunplugged.rcprofile' =>
    array (
      0 => 'rcprofile',
    ),
    'application/vnd.irepository.package+xml' =>
    array (
      0 => 'irp',
    ),
    'application/vnd.is-xpr' =>
    array (
      0 => 'xpr',
    ),
    'application/vnd.isac.fcs' =>
    array (
      0 => 'fcs',
    ),
    'application/vnd.jam' =>
    array (
      0 => 'jam',
    ),
    'application/vnd.jcp.javame.midlet-rms' =>
    array (
      0 => 'rms',
    ),
    'application/vnd.jisp' =>
    array (
      0 => 'jisp',
    ),
    'application/vnd.joost.joda-archive' =>
    array (
      0 => 'joda',
    ),
    'application/vnd.kahootz' =>
    array (
      0 => 'ktz',
      1 => 'ktr',
    ),
    'application/vnd.kde.karbon' =>
    array (
      0 => 'karbon',
    ),
    'application/vnd.kde.kchart' =>
    array (
      0 => 'chrt',
    ),
    'application/vnd.kde.kformula' =>
    array (
      0 => 'kfo',
    ),
    'application/vnd.kde.kivio' =>
    array (
      0 => 'flw',
    ),
    'application/vnd.kde.kontour' =>
    array (
      0 => 'kon',
    ),
    'application/vnd.kde.kpresenter' =>
    array (
      0 => 'kpr',
      1 => 'kpt',
    ),
    'application/vnd.kde.kspread' =>
    array (
      0 => 'ksp',
    ),
    'application/vnd.kde.kword' =>
    array (
      0 => 'kwd',
      1 => 'kwt',
    ),
    'application/vnd.kenameaapp' =>
    array (
      0 => 'htke',
    ),
    'application/vnd.kidspiration' =>
    array (
      0 => 'kia',
    ),
    'application/vnd.kinar' =>
    array (
      0 => 'kne',
      1 => 'knp',
    ),
    'application/vnd.koan' =>
    array (
      0 => 'skp',
      1 => 'skd',
      2 => 'skt',
      3 => 'skm',
    ),
    'application/vnd.kodak-descriptor' =>
    array (
      0 => 'sse',
    ),
    'application/vnd.las.las+xml' =>
    array (
      0 => 'lasxml',
    ),
    'application/vnd.llamagraphics.life-balance.desktop' =>
    array (
      0 => 'lbd',
    ),
    'application/vnd.llamagraphics.life-balance.exchange+xml' =>
    array (
      0 => 'lbe',
    ),
    'application/vnd.lotus-1-2-3' =>
    array (
      0 => '123',
      1 => 'wk1',
      2 => 'wk3',
      3 => 'wk4',
      4 => 'wks',
    ),
    'application/vnd.lotus-approach' =>
    array (
      0 => 'apr',
    ),
    'application/vnd.lotus-freelance' =>
    array (
      0 => 'pre',
    ),
    'application/vnd.lotus-notes' =>
    array (
      0 => 'nsf',
    ),
    'application/vnd.lotus-organizer' =>
    array (
      0 => 'org',
    ),
    'application/vnd.lotus-screencam' =>
    array (
      0 => 'scm',
    ),
    'application/vnd.lotus-wordpro' =>
    array (
      0 => 'lwp',
    ),
    'application/vnd.macports.portpkg' =>
    array (
      0 => 'portpkg',
    ),
    'application/vnd.mcd' =>
    array (
      0 => 'mcd',
    ),
    'application/vnd.medcalcdata' =>
    array (
      0 => 'mc1',
    ),
    'application/vnd.mediastation.cdkey' =>
    array (
      0 => 'cdkey',
    ),
    'application/vnd.mfer' =>
    array (
      0 => 'mwf',
    ),
    'application/vnd.mfmp' =>
    array (
      0 => 'mfm',
    ),
    'application/vnd.micrografx.flo' =>
    array (
      0 => 'flo',
    ),
    'application/vnd.micrografx.igx' =>
    array (
      0 => 'igx',
    ),
    'application/vnd.mif' =>
    array (
      0 => 'mif',
    ),
    'application/vnd.mobius.daf' =>
    array (
      0 => 'daf',
    ),
    'application/vnd.mobius.dis' =>
    array (
      0 => 'dis',
    ),
    'application/vnd.mobius.mbk' =>
    array (
      0 => 'mbk',
    ),
    'application/vnd.mobius.mqy' =>
    array (
      0 => 'mqy',
    ),
    'application/vnd.mobius.msl' =>
    array (
      0 => 'msl',
    ),
    'application/vnd.mobius.plc' =>
    array (
      0 => 'plc',
    ),
    'application/vnd.mobius.txf' =>
    array (
      0 => 'txf',
    ),
    'application/vnd.mophun.application' =>
    array (
      0 => 'mpn',
    ),
    'application/vnd.mophun.certificate' =>
    array (
      0 => 'mpc',
    ),
    'application/vnd.mozilla.xul+xml' =>
    array (
      0 => 'xul',
    ),
    'application/vnd.ms-access' =>
    array (
      0 => 'mdb',
    ),
    'application/vnd.ms-artgalry' =>
    array (
      0 => 'cil',
    ),
    'application/vnd.ms-asf' =>
    array (
      0 => 'asf',
    ),
    'application/vnd.ms-cab-compressed' =>
    array (
      0 => 'cab',
    ),
    'application/vnd.ms-excel' =>
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
    'application/vnd.ms-excel.addin.macroenabled.12' =>
    array (
      0 => 'xlam',
    ),
    'application/vnd.ms-excel.sheet.binary.macroenabled.12' =>
    array (
      0 => 'xlsb',
    ),
    'application/vnd.ms-excel.sheet.macroenabled.12' =>
    array (
      0 => 'xlsm',
    ),
    'application/vnd.ms-excel.template.macroenabled.12' =>
    array (
      0 => 'xltm',
    ),
    'application/vnd.ms-fontobject' =>
    array (
      0 => 'eot',
    ),
    'application/vnd.ms-htmlhelp' =>
    array (
      0 => 'chm',
    ),
    'application/vnd.ms-ims' =>
    array (
      0 => 'ims',
    ),
    'application/vnd.ms-lrm' =>
    array (
      0 => 'lrm',
    ),
    'application/vnd.ms-officetheme' =>
    array (
      0 => 'thmx',
    ),
    'application/vnd.ms-pki.seccat' =>
    array (
      0 => 'cat',
    ),
    'application/vnd.ms-pki.stl' =>
    array (
      0 => 'stl',
    ),
    'application/vnd.ms-powerpoint' =>
    array (
      0 => 'ppt',
      1 => 'pps',
      2 => 'pot',
      3 => 'ppz',
    ),
    'application/vnd.ms-powerpoint.addin.macroenabled.12' =>
    array (
      0 => 'ppam',
    ),
    'application/vnd.ms-powerpoint.presentation.macroenabled.12' =>
    array (
      0 => 'pptm',
    ),
    'application/vnd.ms-powerpoint.slide.macroenabled.12' =>
    array (
      0 => 'sldm',
    ),
    'application/vnd.ms-powerpoint.slideshow.macroenabled.12' =>
    array (
      0 => 'ppsm',
    ),
    'application/vnd.ms-powerpoint.template.macroenabled.12' =>
    array (
      0 => 'potm',
    ),
    'application/vnd.ms-project' =>
    array (
      0 => 'mpp',
      1 => 'mpt',
    ),
    'application/vnd.ms-publisher' =>
    array (
      0 => 'pub',
    ),
    'application/vnd.ms-tnef' =>
    array (
      0 => 'tnef',
      1 => 'tnf',
    ),
    'application/vnd.ms-visio.drawing.macroenabled.main+xml' =>
    array (
      0 => 'vsdm',
    ),
    'application/vnd.ms-visio.drawing.main+xml' =>
    array (
      0 => 'vsdx',
    ),
    'application/vnd.ms-visio.stencil.macroenabled.main+xml' =>
    array (
      0 => 'vssm',
    ),
    'application/vnd.ms-visio.stencil.main+xml' =>
    array (
      0 => 'vssx',
    ),
    'application/vnd.ms-visio.template.macroenabled.main+xml' =>
    array (
      0 => 'vstm',
    ),
    'application/vnd.ms-visio.template.main+xml' =>
    array (
      0 => 'vstx',
    ),
    'application/vnd.ms-word.document.macroenabled.12' =>
    array (
      0 => 'docm',
    ),
    'application/vnd.ms-word.template.macroenabled.12' =>
    array (
      0 => 'dotm',
    ),
    'application/vnd.ms-works' =>
    array (
      0 => 'wps',
      1 => 'wks',
      2 => 'wcm',
      3 => 'wdb',
      4 => 'xlr',
    ),
    'application/vnd.ms-wpl' =>
    array (
      0 => 'wpl',
    ),
    'application/vnd.ms-xpsdocument' =>
    array (
      0 => 'xps',
    ),
    'application/vnd.mseq' =>
    array (
      0 => 'mseq',
    ),
    'application/vnd.musician' =>
    array (
      0 => 'mus',
    ),
    'application/vnd.muvee.style' =>
    array (
      0 => 'msty',
    ),
    'application/vnd.mynfc' =>
    array (
      0 => 'taglet',
    ),
    'application/vnd.neurolanguage.nlu' =>
    array (
      0 => 'nlu',
    ),
    'application/vnd.nintendo.snes.rom' =>
    array (
      0 => 'sfc',
      1 => 'smc',
    ),
    'application/vnd.nitf' =>
    array (
      0 => 'ntf',
      1 => 'nitf',
    ),
    'application/vnd.noblenet-directory' =>
    array (
      0 => 'nnd',
    ),
    'application/vnd.noblenet-sealer' =>
    array (
      0 => 'nns',
    ),
    'application/vnd.noblenet-web' =>
    array (
      0 => 'nnw',
    ),
    'application/vnd.nokia.n-gage.data' =>
    array (
      0 => 'ngdat',
    ),
    'application/vnd.nokia.n-gage.symbian.install' =>
    array (
      0 => 'n-gage',
    ),
    'application/vnd.nokia.radio-preset' =>
    array (
      0 => 'rpst',
    ),
    'application/vnd.nokia.radio-presets' =>
    array (
      0 => 'rpss',
    ),
    'application/vnd.novadigm.edm' =>
    array (
      0 => 'edm',
    ),
    'application/vnd.novadigm.edx' =>
    array (
      0 => 'edx',
    ),
    'application/vnd.novadigm.ext' =>
    array (
      0 => 'ext',
    ),
    'application/vnd.oasis.opendocument.chart' =>
    array (
      0 => 'odc',
    ),
    'application/vnd.oasis.opendocument.chart-template' =>
    array (
      0 => 'otc',
    ),
    'application/vnd.oasis.opendocument.database' =>
    array (
      0 => 'odb',
    ),
    'application/vnd.oasis.opendocument.formula' =>
    array (
      0 => 'odf',
    ),
    'application/vnd.oasis.opendocument.formula-template' =>
    array (
      0 => 'odft',
      1 => 'otf',
    ),
    'application/vnd.oasis.opendocument.graphics' =>
    array (
      0 => 'odg',
    ),
    'application/vnd.oasis.opendocument.graphics-flat-xml' =>
    array (
      0 => 'fodg',
    ),
    'application/vnd.oasis.opendocument.graphics-template' =>
    array (
      0 => 'otg',
    ),
    'application/vnd.oasis.opendocument.image' =>
    array (
      0 => 'odi',
    ),
    'application/vnd.oasis.opendocument.image-template' =>
    array (
      0 => 'oti',
    ),
    'application/vnd.oasis.opendocument.presentation' =>
    array (
      0 => 'odp',
    ),
    'application/vnd.oasis.opendocument.presentation-flat-xml' =>
    array (
      0 => 'fodp',
    ),
    'application/vnd.oasis.opendocument.presentation-template' =>
    array (
      0 => 'otp',
    ),
    'application/vnd.oasis.opendocument.spreadsheet' =>
    array (
      0 => 'ods',
    ),
    'application/vnd.oasis.opendocument.spreadsheet-flat-xml' =>
    array (
      0 => 'fods',
    ),
    'application/vnd.oasis.opendocument.spreadsheet-template' =>
    array (
      0 => 'ots',
    ),
    'application/vnd.oasis.opendocument.text' =>
    array (
      0 => 'odt',
    ),
    'application/vnd.oasis.opendocument.text-flat-xml' =>
    array (
      0 => 'fodt',
    ),
    'application/vnd.oasis.opendocument.text-master' =>
    array (
      0 => 'odm',
    ),
    'application/vnd.oasis.opendocument.text-template' =>
    array (
      0 => 'ott',
    ),
    'application/vnd.oasis.opendocument.text-web' =>
    array (
      0 => 'oth',
    ),
    'application/vnd.olpc-sugar' =>
    array (
      0 => 'xo',
    ),
    'application/vnd.oma.dd2+xml' =>
    array (
      0 => 'dd2',
    ),
    'application/vnd.openofficeorg.extension' =>
    array (
      0 => 'oxt',
    ),
    'application/vnd.openxmlformats-officedocument.presentationml.presentation' =>
    array (
      0 => 'pptx',
    ),
    'application/vnd.openxmlformats-officedocument.presentationml.slide' =>
    array (
      0 => 'sldx',
    ),
    'application/vnd.openxmlformats-officedocument.presentationml.slideshow' =>
    array (
      0 => 'ppsx',
    ),
    'application/vnd.openxmlformats-officedocument.presentationml.template' =>
    array (
      0 => 'potx',
    ),
    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' =>
    array (
      0 => 'xlsx',
    ),
    'application/vnd.openxmlformats-officedocument.spreadsheetml.template' =>
    array (
      0 => 'xltx',
    ),
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document' =>
    array (
      0 => 'docx',
    ),
    'application/vnd.openxmlformats-officedocument.wordprocessingml.template' =>
    array (
      0 => 'dotx',
    ),
    'application/vnd.osgeo.mapguide.package' =>
    array (
      0 => 'mgp',
    ),
    'application/vnd.osgi.dp' =>
    array (
      0 => 'dp',
    ),
    'application/vnd.osgi.subsystem' =>
    array (
      0 => 'esa',
    ),
    'application/vnd.palm' =>
    array (
      0 => 'pdb',
      1 => 'pqa',
      2 => 'oprc',
      3 => 'prc',
    ),
    'application/vnd.pawaafile' =>
    array (
      0 => 'paw',
    ),
    'application/vnd.pg.format' =>
    array (
      0 => 'str',
    ),
    'application/vnd.pg.osasli' =>
    array (
      0 => 'ei6',
    ),
    'application/vnd.picsel' =>
    array (
      0 => 'efif',
    ),
    'application/vnd.pmi.widget' =>
    array (
      0 => 'wg',
    ),
    'application/vnd.pocketlearn' =>
    array (
      0 => 'plf',
    ),
    'application/vnd.powerbuilder6' =>
    array (
      0 => 'pbd',
    ),
    'application/vnd.previewsystems.box' =>
    array (
      0 => 'box',
    ),
    'application/vnd.proteus.magazine' =>
    array (
      0 => 'mgz',
    ),
    'application/vnd.publishare-delta-tree' =>
    array (
      0 => 'qps',
    ),
    'application/vnd.pvi.ptid1' =>
    array (
      0 => 'ptid',
    ),
    'application/vnd.quark.quarkxpress' =>
    array (
      0 => 'qxd',
      1 => 'qxt',
      2 => 'qwd',
      3 => 'qwt',
      4 => 'qxl',
      5 => 'qxb',
    ),
    'application/vnd.rar' =>
    array (
      0 => 'rar',
    ),
    'application/vnd.realvnc.bed' =>
    array (
      0 => 'bed',
    ),
    'application/vnd.recordare.musicxml' =>
    array (
      0 => 'mxl',
    ),
    'application/vnd.recordare.musicxml+xml' =>
    array (
      0 => 'musicxml',
    ),
    'application/vnd.rig.cryptonote' =>
    array (
      0 => 'cryptonote',
    ),
    'application/vnd.rim.cod' =>
    array (
      0 => 'cod',
    ),
    'application/vnd.rn-realmedia' =>
    array (
      0 => 'rm',
      1 => 'rmj',
      2 => 'rmm',
      3 => 'rms',
      4 => 'rmx',
      5 => 'rmvb',
    ),
    'application/vnd.rn-realmedia-vbr' =>
    array (
      0 => 'rmvb',
    ),
    'application/vnd.route66.link66+xml' =>
    array (
      0 => 'link66',
    ),
    'application/vnd.sailingtracker.track' =>
    array (
      0 => 'st',
    ),
    'application/vnd.seemail' =>
    array (
      0 => 'see',
    ),
    'application/vnd.sema' =>
    array (
      0 => 'sema',
    ),
    'application/vnd.semd' =>
    array (
      0 => 'semd',
    ),
    'application/vnd.semf' =>
    array (
      0 => 'semf',
    ),
    'application/vnd.shana.informed.formdata' =>
    array (
      0 => 'ifm',
    ),
    'application/vnd.shana.informed.formtemplate' =>
    array (
      0 => 'itp',
    ),
    'application/vnd.shana.informed.interchange' =>
    array (
      0 => 'iif',
    ),
    'application/vnd.shana.informed.package' =>
    array (
      0 => 'ipk',
    ),
    'application/vnd.simtech-mindmapper' =>
    array (
      0 => 'twd',
      1 => 'twds',
    ),
    'application/vnd.smaf' =>
    array (
      0 => 'mmf',
    ),
    'application/vnd.smart.teacher' =>
    array (
      0 => 'teacher',
    ),
    'application/vnd.snap' =>
    array (
      0 => 'snap',
    ),
    'application/vnd.solent.sdkm+xml' =>
    array (
      0 => 'sdkm',
      1 => 'sdkd',
    ),
    'application/vnd.spotfire.dxp' =>
    array (
      0 => 'dxp',
    ),
    'application/vnd.spotfire.sfs' =>
    array (
      0 => 'sfs',
    ),
    'application/vnd.sqlite3' =>
    array (
      0 => 'sqlite3',
    ),
    'application/vnd.squashfs' =>
    array (
      0 => 'sqsh',
    ),
    'application/vnd.stardivision.calc' =>
    array (
      0 => 'sdc',
    ),
    'application/vnd.stardivision.chart' =>
    array (
      0 => 'sds',
    ),
    'application/vnd.stardivision.draw' =>
    array (
      0 => 'sda',
    ),
    'application/vnd.stardivision.impress' =>
    array (
      0 => 'sdd',
      1 => 'sdp',
    ),
    'application/vnd.stardivision.mail' =>
    array (
      0 => 'smd',
    ),
    'application/vnd.stardivision.math' =>
    array (
      0 => 'smf',
    ),
    'application/vnd.stardivision.writer' =>
    array (
      0 => 'sdw',
      1 => 'vor',
      2 => 'sgl',
    ),
    'application/vnd.stardivision.writer-global' =>
    array (
      0 => 'sgl',
    ),
    'application/vnd.stepmania.package' =>
    array (
      0 => 'smzip',
    ),
    'application/vnd.stepmania.stepchart' =>
    array (
      0 => 'sm',
    ),
    'application/vnd.sun.xml.calc' =>
    array (
      0 => 'sxc',
    ),
    'application/vnd.sun.xml.calc.template' =>
    array (
      0 => 'stc',
    ),
    'application/vnd.sun.xml.draw' =>
    array (
      0 => 'sxd',
    ),
    'application/vnd.sun.xml.draw.template' =>
    array (
      0 => 'std',
    ),
    'application/vnd.sun.xml.impress' =>
    array (
      0 => 'sxi',
    ),
    'application/vnd.sun.xml.impress.template' =>
    array (
      0 => 'sti',
    ),
    'application/vnd.sun.xml.math' =>
    array (
      0 => 'sxm',
    ),
    'application/vnd.sun.xml.writer' =>
    array (
      0 => 'sxw',
    ),
    'application/vnd.sun.xml.writer.global' =>
    array (
      0 => 'sxg',
    ),
    'application/vnd.sun.xml.writer.template' =>
    array (
      0 => 'stw',
    ),
    'application/vnd.sus-calendar' =>
    array (
      0 => 'sus',
      1 => 'susp',
    ),
    'application/vnd.svd' =>
    array (
      0 => 'svd',
    ),
    'application/vnd.symbian.install' =>
    array (
      0 => 'sis',
      1 => 'sisx',
    ),
    'application/vnd.syncml+xml' =>
    array (
      0 => 'xsm',
    ),
    'application/vnd.syncml.dm+wbxml' =>
    array (
      0 => 'bdm',
    ),
    'application/vnd.syncml.dm+xml' =>
    array (
      0 => 'xdm',
    ),
    'application/vnd.tao.intent-module-archive' =>
    array (
      0 => 'tao',
    ),
    'application/vnd.tcpdump.pcap' =>
    array (
      0 => 'pcap',
      1 => 'cap',
      2 => 'dmp',
    ),
    'application/vnd.tmobile-livetv' =>
    array (
      0 => 'tmo',
    ),
    'application/vnd.trid.tpt' =>
    array (
      0 => 'tpt',
    ),
    'application/vnd.triscape.mxs' =>
    array (
      0 => 'mxs',
    ),
    'application/vnd.trueapp' =>
    array (
      0 => 'tra',
    ),
    'application/vnd.ufdl' =>
    array (
      0 => 'ufd',
      1 => 'ufdl',
    ),
    'application/vnd.uiq.theme' =>
    array (
      0 => 'utz',
    ),
    'application/vnd.umajin' =>
    array (
      0 => 'umj',
    ),
    'application/vnd.unity' =>
    array (
      0 => 'unityweb',
    ),
    'application/vnd.uoml+xml' =>
    array (
      0 => 'uoml',
    ),
    'application/vnd.vcx' =>
    array (
      0 => 'vcx',
    ),
    'application/vnd.visio' =>
    array (
      0 => 'vsd',
      1 => 'vst',
      2 => 'vss',
      3 => 'vsw',
    ),
    'application/vnd.visionary' =>
    array (
      0 => 'vis',
    ),
    'application/vnd.vsf' =>
    array (
      0 => 'vsf',
    ),
    'application/vnd.wap.wbxml' =>
    array (
      0 => 'wbxml',
    ),
    'application/vnd.wap.wmlc' =>
    array (
      0 => 'wmlc',
    ),
    'application/vnd.wap.wmlscriptc' =>
    array (
      0 => 'wmlsc',
    ),
    'application/vnd.webturbo' =>
    array (
      0 => 'wtb',
    ),
    'application/vnd.wolfram.player' =>
    array (
      0 => 'nbp',
    ),
    'application/vnd.wordperfect' =>
    array (
      0 => 'wpd',
      1 => 'wp',
      2 => 'wp4',
      3 => 'wp5',
      4 => 'wp6',
      5 => 'wpp',
    ),
    'application/vnd.wqd' =>
    array (
      0 => 'wqd',
    ),
    'application/vnd.wt.stf' =>
    array (
      0 => 'stf',
    ),
    'application/vnd.xara' =>
    array (
      0 => 'xar',
    ),
    'application/vnd.xfdl' =>
    array (
      0 => 'xfdl',
    ),
    'application/vnd.yamaha.hv-dic' =>
    array (
      0 => 'hvd',
    ),
    'application/vnd.yamaha.hv-script' =>
    array (
      0 => 'hvs',
    ),
    'application/vnd.yamaha.hv-voice' =>
    array (
      0 => 'hvp',
    ),
    'application/vnd.yamaha.openscoreformat' =>
    array (
      0 => 'osf',
    ),
    'application/vnd.yamaha.openscoreformat.osfpvg+xml' =>
    array (
      0 => 'osfpvg',
    ),
    'application/vnd.yamaha.smaf-audio' =>
    array (
      0 => 'saf',
    ),
    'application/vnd.yamaha.smaf-phrase' =>
    array (
      0 => 'spf',
    ),
    'application/vnd.yellowriver-custom-menu' =>
    array (
      0 => 'cmp',
    ),
    'application/vnd.youtube.yt' =>
    array (
      0 => 'yt',
    ),
    'application/vnd.zul' =>
    array (
      0 => 'zir',
      1 => 'zirz',
    ),
    'application/vnd.zzazz.deck+xml' =>
    array (
      0 => 'zaz',
    ),
    'application/voicexml+xml' =>
    array (
      0 => 'vxml',
    ),
    'application/widget' =>
    array (
      0 => 'wgt',
    ),
    'application/winhlp' =>
    array (
      0 => 'hlp',
    ),
    'application/wsdl+xml' =>
    array (
      0 => 'wsdl',
    ),
    'application/wspolicy+xml' =>
    array (
      0 => 'wspolicy',
    ),
    'application/x-7z-compressed' =>
    array (
      0 => '7z',
    ),
    'application/x-abiword' =>
    array (
      0 => 'abw',
      1 => 'abw.crashed',
      2 => 'abw.gz',
      3 => 'zabw',
    ),
    'application/x-ace' =>
    array (
      0 => 'ace',
    ),
    'application/x-ace-compressed' =>
    array (
      0 => 'ace',
    ),
    'application/x-alz' =>
    array (
      0 => 'alz',
    ),
    'application/x-amiga-disk-format' =>
    array (
      0 => 'adf',
    ),
    'application/x-amipro' =>
    array (
      0 => 'sam',
    ),
    'application/x-aportisdoc' =>
    array (
      0 => 'pdb',
      1 => 'pdc',
    ),
    'application/x-apple-diskimage' =>
    array (
      0 => 'dmg',
    ),
    'application/x-applix-spreadsheet' =>
    array (
      0 => 'as',
    ),
    'application/x-applix-word' =>
    array (
      0 => 'aw',
    ),
    'application/x-archive' =>
    array (
      0 => 'a',
      1 => 'ar',
    ),
    'application/x-arj' =>
    array (
      0 => 'arj',
    ),
    'application/x-asp' =>
    array (
      0 => 'asp',
    ),
    'application/x-atari-2600-rom' =>
    array (
      0 => 'a26',
    ),
    'application/x-atari-7800-rom' =>
    array (
      0 => 'a78',
    ),
    'application/x-atari-lynx-rom' =>
    array (
      0 => 'lnx',
    ),
    'application/x-authorware-bin' =>
    array (
      0 => 'aab',
      1 => 'x32',
      2 => 'u32',
      3 => 'vox',
    ),
    'application/x-authorware-map' =>
    array (
      0 => 'aam',
    ),
    'application/x-authorware-seg' =>
    array (
      0 => 'aas',
    ),
    'application/x-awk' =>
    array (
      0 => 'awk',
    ),
    'application/x-bcpio' =>
    array (
      0 => 'bcpio',
    ),
    'application/x-bittorrent' =>
    array (
      0 => 'torrent',
    ),
    'application/x-blender' =>
    array (
      0 => 'blender',
      1 => 'blend',
    ),
    'application/x-blorb' =>
    array (
      0 => 'blb',
      1 => 'blorb',
    ),
    'application/x-bsdiff' =>
    array (
      0 => 'bsdiff',
    ),
    'application/x-bzdvi' =>
    array (
      0 => 'dvi.bz2',
    ),
    'application/x-bzip' =>
    array (
      0 => 'bz',
      1 => 'bz2',
    ),
    'application/x-bzip-compressed-tar' =>
    array (
      0 => 'tar.bz2',
      1 => 'tar.bz',
      2 => 'tbz2',
      3 => 'tbz',
      4 => 'tb2',
    ),
    'application/x-bzip2' =>
    array (
      0 => 'bz2',
      1 => 'boz',
    ),
    'application/x-bzpdf' =>
    array (
      0 => 'pdf.bz2',
    ),
    'application/x-bzpostscript' =>
    array (
      0 => 'ps.bz2',
    ),
    'application/x-cb7' =>
    array (
      0 => 'cb7',
    ),
    'application/x-cbr' =>
    array (
      0 => 'cbr',
      1 => 'cba',
      2 => 'cbt',
      3 => 'cbz',
      4 => 'cb7',
    ),
    'application/x-cbt' =>
    array (
      0 => 'cbt',
    ),
    'application/x-ccmx' =>
    array (
      0 => 'ccmx',
    ),
    'application/x-cd-image' =>
    array (
      0 => 'iso',
      1 => 'iso9660',
    ),
    'application/x-cdlink' =>
    array (
      0 => 'vcd',
    ),
    'application/x-cdrdao-toc' =>
    array (
      0 => 'toc',
    ),
    'application/x-cfs-compressed' =>
    array (
      0 => 'cfs',
    ),
    'application/x-chat' =>
    array (
      0 => 'chat',
    ),
    'application/x-chess-pgn' =>
    array (
      0 => 'pgn',
    ),
    'application/x-cisco-vpn-settings' =>
    array (
      0 => 'pcf',
    ),
    'application/x-compress' =>
    array (
      0 => 'z',
    ),
    'application/x-compressed-tar' =>
    array (
      0 => 'tar.gz',
      1 => 'tgz',
    ),
    'application/x-conference' =>
    array (
      0 => 'nsc',
    ),
    'application/x-cpio' =>
    array (
      0 => 'cpio',
    ),
    'application/x-cpio-compressed' =>
    array (
      0 => 'cpio.gz',
    ),
    'application/x-csh' =>
    array (
      0 => 'csh',
    ),
    'application/x-cue' =>
    array (
      0 => 'cue',
    ),
    'application/x-dar' =>
    array (
      0 => 'dar',
    ),
    'application/x-dbf' =>
    array (
      0 => 'dbf',
    ),
    'application/x-dc-rom' =>
    array (
      0 => 'dc',
    ),
    'application/x-debian-package' =>
    array (
      0 => 'deb',
      1 => 'udeb',
    ),
    'application/x-designer' =>
    array (
      0 => 'ui',
    ),
    'application/x-desktop' =>
    array (
      0 => 'desktop',
      1 => 'kdelnk',
    ),
    'application/x-dgc-compressed' =>
    array (
      0 => 'dgc',
    ),
    'application/x-dia-diagram' =>
    array (
      0 => 'dia',
    ),
    'application/x-dia-shape' =>
    array (
      0 => 'shape',
    ),
    'application/x-director' =>
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
    'application/x-docbook+xml' =>
    array (
      0 => 'dbk',
      1 => 'docbook',
    ),
    'application/x-doom' =>
    array (
      0 => 'wad',
    ),
    'application/x-doom-wad' =>
    array (
      0 => 'wad',
    ),
    'application/x-dtbncx+xml' =>
    array (
      0 => 'ncx',
    ),
    'application/x-dtbook+xml' =>
    array (
      0 => 'dtb',
    ),
    'application/x-dtbresource+xml' =>
    array (
      0 => 'res',
    ),
    'application/x-dvi' =>
    array (
      0 => 'dvi',
    ),
    'application/x-e-theme' =>
    array (
      0 => 'etheme',
    ),
    'application/x-egon' =>
    array (
      0 => 'egon',
    ),
    'application/x-envoy' =>
    array (
      0 => 'evy',
    ),
    'application/x-eva' =>
    array (
      0 => 'eva',
    ),
    'application/x-fds-disk' =>
    array (
      0 => 'fds',
    ),
    'application/x-fictionbook+xml' =>
    array (
      0 => 'fb2',
    ),
    'application/x-fluid' =>
    array (
      0 => 'fl',
    ),
    'application/x-font-afm' =>
    array (
      0 => 'afm',
    ),
    'application/x-font-bdf' =>
    array (
      0 => 'bdf',
    ),
    'application/x-font-ghostscript' =>
    array (
      0 => 'gsf',
    ),
    'application/x-font-linux-psf' =>
    array (
      0 => 'psf',
    ),
    'application/x-font-pcf' =>
    array (
      0 => 'pcf',
      1 => 'pcf.z',
      2 => 'pcf.gz',
    ),
    'application/x-font-snf' =>
    array (
      0 => 'snf',
    ),
    'application/x-font-speedo' =>
    array (
      0 => 'spd',
    ),
    'application/x-font-ttx' =>
    array (
      0 => 'ttx',
    ),
    'application/x-font-type1' =>
    array (
      0 => 'pfa',
      1 => 'pfb',
      2 => 'pfm',
      3 => 'afm',
      4 => 'gsf',
    ),
    'application/x-freearc' =>
    array (
      0 => 'arc',
    ),
    'application/x-futuresplash' =>
    array (
      0 => 'spl',
    ),
    'application/x-gameboy-color-rom' =>
    array (
      0 => 'gbc',
      1 => 'cgb',
    ),
    'application/x-gameboy-rom' =>
    array (
      0 => 'gb',
      1 => 'sgb',
    ),
    'application/x-gamecube-rom' =>
    array (
      0 => 'iso',
    ),
    'application/x-gamegear-rom' =>
    array (
      0 => 'gg',
    ),
    'application/x-gba-rom' =>
    array (
      0 => 'gba',
      1 => 'agb',
    ),
    'application/x-gca-compressed' =>
    array (
      0 => 'gca',
    ),
    'application/x-gedcom' =>
    array (
      0 => 'ged',
      1 => 'gedcom',
    ),
    'application/x-genesis-32x-rom' =>
    array (
      0 => '32x',
      1 => 'mdx',
    ),
    'application/x-genesis-rom' =>
    array (
      0 => 'gen',
      1 => 'smd',
    ),
    'application/x-gettext-translation' =>
    array (
      0 => 'gmo',
      1 => 'mo',
    ),
    'application/x-glade' =>
    array (
      0 => 'glade',
    ),
    'application/x-glulx' =>
    array (
      0 => 'ulx',
    ),
    'application/x-gnucash' =>
    array (
      0 => 'gnucash',
      1 => 'gnc',
      2 => 'xac',
    ),
    'application/x-gnumeric' =>
    array (
      0 => 'gnumeric',
    ),
    'application/x-gnuplot' =>
    array (
      0 => 'gp',
      1 => 'gplt',
      2 => 'gnuplot',
    ),
    'application/x-go-sgf' =>
    array (
      0 => 'sgf',
    ),
    'application/x-gramps-xml' =>
    array (
      0 => 'gramps',
    ),
    'application/x-graphite' =>
    array (
      0 => 'gra',
    ),
    'application/x-gtar' =>
    array (
      0 => 'gtar',
    ),
    'application/x-gtk-builder' =>
    array (
      0 => 'ui',
    ),
    'application/x-gz-font-linux-psf' =>
    array (
      0 => 'psf.gz',
    ),
    'application/x-gzdvi' =>
    array (
      0 => 'dvi.gz',
    ),
    'application/x-gzpdf' =>
    array (
      0 => 'pdf.gz',
    ),
    'application/x-gzpostscript' =>
    array (
      0 => 'ps.gz',
    ),
    'application/x-hdf' =>
    array (
      0 => 'hdf',
      1 => 'hdf4',
      2 => 'h4',
      3 => 'hdf5',
      4 => 'h5',
    ),
    'application/x-hfe-floppy-image' =>
    array (
      0 => 'hfe',
    ),
    'application/x-hwp' =>
    array (
      0 => 'hwp',
    ),
    'application/x-hwt' =>
    array (
      0 => 'hwt',
    ),
    'application/x-ica' =>
    array (
      0 => 'ica',
    ),
    'application/x-install-instructions' =>
    array (
      0 => 'install',
    ),
    'application/x-ipynb+json' =>
    array (
      0 => 'ipynb',
    ),
    'application/x-iso9660-appimage' =>
    array (
      0 => 'appimage',
    ),
    'application/x-iso9660-image' =>
    array (
      0 => 'iso',
    ),
    'application/x-it87' =>
    array (
      0 => 'it87',
    ),
    'application/x-iwork-keynote-sffkey' =>
    array (
      0 => 'key',
    ),
    'application/x-java' =>
    array (
      0 => 'class',
    ),
    'application/x-java-archive' =>
    array (
      0 => 'jar',
    ),
    'application/x-java-jce-keystore' =>
    array (
      0 => 'jceks',
    ),
    'application/x-java-jnlp-file' =>
    array (
      0 => 'jnlp',
    ),
    'application/x-java-keystore' =>
    array (
      0 => 'jks',
      1 => 'ks',
    ),
    'application/x-java-pack200' =>
    array (
      0 => 'pack',
    ),
    'application/x-jbuilder-project' =>
    array (
      0 => 'jpr',
      1 => 'jpx',
    ),
    'application/x-karbon' =>
    array (
      0 => 'karbon',
    ),
    'application/x-kchart' =>
    array (
      0 => 'chrt',
    ),
    'application/x-kexi-connectiondata' =>
    array (
      0 => 'kexic',
    ),
    'application/x-kexiproject-shortcut' =>
    array (
      0 => 'kexis',
    ),
    'application/x-kexiproject-sqlite2' =>
    array (
      0 => 'kexi',
    ),
    'application/x-kexiproject-sqlite3' =>
    array (
      0 => 'kexi',
    ),
    'application/x-kformula' =>
    array (
      0 => 'kfo',
    ),
    'application/x-killustrator' =>
    array (
      0 => 'kil',
    ),
    'application/x-kivio' =>
    array (
      0 => 'flw',
    ),
    'application/x-kontour' =>
    array (
      0 => 'kon',
    ),
    'application/x-kpovmodeler' =>
    array (
      0 => 'kpm',
    ),
    'application/x-kpresenter' =>
    array (
      0 => 'kpr',
      1 => 'kpt',
    ),
    'application/x-krita' =>
    array (
      0 => 'kra',
    ),
    'application/x-kspread' =>
    array (
      0 => 'ksp',
    ),
    'application/x-kugar' =>
    array (
      0 => 'kud',
    ),
    'application/x-kword' =>
    array (
      0 => 'kwd',
      1 => 'kwt',
    ),
    'application/x-latex' =>
    array (
      0 => 'latex',
    ),
    'application/x-lha' =>
    array (
      0 => 'lha',
      1 => 'lzh',
    ),
    'application/x-lhz' =>
    array (
      0 => 'lhz',
    ),
    'application/x-lrzip' =>
    array (
      0 => 'lrz',
    ),
    'application/x-lrzip-compressed-tar' =>
    array (
      0 => 'tar.lrz',
      1 => 'tlrz',
    ),
    'application/x-lyx' =>
    array (
      0 => 'lyx',
    ),
    'application/x-lz4' =>
    array (
      0 => 'lz4',
    ),
    'application/x-lz4-compressed-tar' =>
    array (
      0 => 'tar.lz4',
    ),
    'application/x-lzh-compressed' =>
    array (
      0 => 'lzh',
      1 => 'lha',
    ),
    'application/x-lzip' =>
    array (
      0 => 'lz',
    ),
    'application/x-lzip-compressed-tar' =>
    array (
      0 => 'tar.lz',
    ),
    'application/x-lzma' =>
    array (
      0 => 'lzma',
    ),
    'application/x-lzma-compressed-tar' =>
    array (
      0 => 'tar.lzma',
      1 => 'tlz',
    ),
    'application/x-lzop' =>
    array (
      0 => 'lzo',
    ),
    'application/x-lzpdf' =>
    array (
      0 => 'pdf.lz',
    ),
    'application/x-m4' =>
    array (
      0 => 'm4',
    ),
    'application/x-magicpoint' =>
    array (
      0 => 'mgp',
    ),
    'application/x-markaby' =>
    array (
      0 => 'mab',
    ),
    'application/x-mie' =>
    array (
      0 => 'mie',
    ),
    'application/x-mif' =>
    array (
      0 => 'mif',
    ),
    'application/x-mimearchive' =>
    array (
      0 => 'mhtml',
      1 => 'mht',
    ),
    'application/x-mobipocket-ebook' =>
    array (
      0 => 'prc',
      1 => 'mobi',
    ),
    'application/x-ms-application' =>
    array (
      0 => 'application',
    ),
    'application/x-ms-dos-executable' =>
    array (
      0 => 'exe',
    ),
    'application/x-ms-shortcut' =>
    array (
      0 => 'lnk',
    ),
    'application/x-ms-wim' =>
    array (
      0 => 'wim',
      1 => 'swm',
    ),
    'application/x-ms-wmd' =>
    array (
      0 => 'wmd',
    ),
    'application/x-ms-wmz' =>
    array (
      0 => 'wmz',
    ),
    'application/x-ms-xbap' =>
    array (
      0 => 'xbap',
    ),
    'application/x-msaccess' =>
    array (
      0 => 'mdb',
    ),
    'application/x-msbinder' =>
    array (
      0 => 'obd',
    ),
    'application/x-mscardfile' =>
    array (
      0 => 'crd',
    ),
    'application/x-msclip' =>
    array (
      0 => 'clp',
    ),
    'application/x-msdownload' =>
    array (
      0 => 'exe',
      1 => 'dll',
      2 => 'com',
      3 => 'bat',
      4 => 'msi',
    ),
    'application/x-msi' =>
    array (
      0 => 'msi',
    ),
    'application/x-msmediaview' =>
    array (
      0 => 'mvb',
      1 => 'm13',
      2 => 'm14',
    ),
    'application/x-msmetafile' =>
    array (
      0 => 'wmf',
      1 => 'wmz',
      2 => 'emf',
      3 => 'emz',
    ),
    'application/x-msmoney' =>
    array (
      0 => 'mny',
    ),
    'application/x-mspublisher' =>
    array (
      0 => 'pub',
    ),
    'application/x-msschedule' =>
    array (
      0 => 'scd',
    ),
    'application/x-msterminal' =>
    array (
      0 => 'trm',
    ),
    'application/x-mswinurl' =>
    array (
      0 => 'url',
    ),
    'application/x-mswrite' =>
    array (
      0 => 'wri',
    ),
    'application/x-msx-rom' =>
    array (
      0 => 'msx',
    ),
    'application/x-n64-rom' =>
    array (
      0 => 'n64',
      1 => 'z64',
      2 => 'v64',
    ),
    'application/x-navi-animation' =>
    array (
      0 => 'ani',
    ),
    'application/x-neo-geo-pocket-color-rom' =>
    array (
      0 => 'ngc',
    ),
    'application/x-neo-geo-pocket-rom' =>
    array (
      0 => 'ngp',
    ),
    'application/x-nes-rom' =>
    array (
      0 => 'nes',
      1 => 'nez',
      2 => 'unf',
      3 => 'unif',
    ),
    'application/x-netcdf' =>
    array (
      0 => 'nc',
      1 => 'cdf',
    ),
    'application/x-netshow-channel' =>
    array (
      0 => 'nsc',
    ),
    'application/x-nintendo-ds-rom' =>
    array (
      0 => 'nds',
    ),
    'application/x-nzb' =>
    array (
      0 => 'nzb',
    ),
    'application/x-object' =>
    array (
      0 => 'o',
    ),
    'application/x-oleo' =>
    array (
      0 => 'oleo',
    ),
    'application/x-pagemaker' =>
    array (
      0 => 'p65',
      1 => 'pm',
      2 => 'pm6',
      3 => 'pmd',
    ),
    'application/x-pak' =>
    array (
      0 => 'pak',
    ),
    'application/x-par2' =>
    array (
      0 => 'par2',
    ),
    'application/x-partial-download' =>
    array (
      0 => 'wkdownload',
      1 => 'crdownload',
      2 => 'part',
    ),
    'application/x-pc-engine-rom' =>
    array (
      0 => 'pce',
    ),
    'application/x-perl' =>
    array (
      0 => 'pl',
      1 => 'pm',
      2 => 'al',
      3 => 'perl',
      4 => 'pod',
      5 => 't',
    ),
    'application/x-php' =>
    array (
      0 => 'php',
      1 => 'php3',
      2 => 'php4',
      3 => 'php5',
      4 => 'phps',
    ),
    'application/x-pkcs12' =>
    array (
      0 => 'p12',
      1 => 'pfx',
    ),
    'application/x-pkcs7-certificates' =>
    array (
      0 => 'p7b',
      1 => 'spc',
    ),
    'application/x-pkcs7-certreqresp' =>
    array (
      0 => 'p7r',
    ),
    'application/x-planperfect' =>
    array (
      0 => 'pln',
    ),
    'application/x-pocket-word' =>
    array (
      0 => 'psw',
    ),
    'application/x-pw' =>
    array (
      0 => 'pw',
    ),
    'application/x-python-bytecode' =>
    array (
      0 => 'pyc',
      1 => 'pyo',
    ),
    'application/x-qpress' =>
    array (
      0 => 'qp',
    ),
    'application/x-qtiplot' =>
    array (
      0 => 'qti',
      1 => 'qti.gz',
    ),
    'application/x-quattropro' =>
    array (
      0 => 'wb1',
      1 => 'wb2',
      2 => 'wb3',
    ),
    'application/x-quicktime-media-link' =>
    array (
      0 => 'qtl',
    ),
    'application/x-qw' =>
    array (
      0 => 'qif',
    ),
    'application/x-rar-compressed' =>
    array (
      0 => 'rar',
    ),
    'application/x-raw-disk-image' =>
    array (
      0 => 'raw-disk-image',
      1 => 'img',
    ),
    'application/x-raw-disk-image-xz-compressed' =>
    array (
      0 => 'raw-disk-image.xz',
      1 => 'img.xz',
    ),
    'application/x-raw-floppy-disk-image' =>
    array (
      0 => 'fd',
      1 => 'qd',
    ),
    'application/x-research-info-systems' =>
    array (
      0 => 'ris',
    ),
    'application/x-rpm' =>
    array (
      0 => 'rpm',
    ),
    'application/x-ruby' =>
    array (
      0 => 'rb',
    ),
    'application/x-sami' =>
    array (
      0 => 'smi',
      1 => 'sami',
    ),
    'application/x-saturn-rom' =>
    array (
      0 => 'bin',
      1 => 'iso',
    ),
    'application/x-sega-cd-rom' =>
    array (
      0 => 'bin',
      1 => 'iso',
    ),
    'application/x-sg1000-rom' =>
    array (
      0 => 'sg',
    ),
    'application/x-sh' =>
    array (
      0 => 'sh',
    ),
    'application/x-shar' =>
    array (
      0 => 'shar',
    ),
    'application/x-shared-library-la' =>
    array (
      0 => 'la',
    ),
    'application/x-sharedlib' =>
    array (
      0 => 'so',
    ),
    'application/x-shellscript' =>
    array (
      0 => 'sh',
    ),
    'application/x-shockwave-flash' =>
    array (
      0 => 'swf',
    ),
    'application/x-shorten' =>
    array (
      0 => 'shn',
    ),
    'application/x-siag' =>
    array (
      0 => 'siag',
    ),
    'application/x-silverlight-app' =>
    array (
      0 => 'xap',
    ),
    'application/x-smaf' =>
    array (
      0 => 'mmf',
      1 => 'smaf',
    ),
    'application/x-sms-rom' =>
    array (
      0 => 'sms',
    ),
    'application/x-source-rpm' =>
    array (
      0 => 'src.rpm',
      1 => 'spm',
    ),
    'application/x-spss-por' =>
    array (
      0 => 'por',
    ),
    'application/x-spss-sav' =>
    array (
      0 => 'sav',
      1 => 'zsav',
    ),
    'application/x-sql' =>
    array (
      0 => 'sql',
    ),
    'application/x-sqlite2' =>
    array (
      0 => 'sqlite2',
    ),
    'application/x-stuffit' =>
    array (
      0 => 'sit',
    ),
    'application/x-stuffitx' =>
    array (
      0 => 'sitx',
    ),
    'application/x-subrip' =>
    array (
      0 => 'srt',
    ),
    'application/x-sv4cpio' =>
    array (
      0 => 'sv4cpio',
    ),
    'application/x-sv4crc' =>
    array (
      0 => 'sv4crc',
    ),
    'application/x-t3vm-image' =>
    array (
      0 => 't3',
    ),
    'application/x-t602' =>
    array (
      0 => '602',
    ),
    'application/x-tads' =>
    array (
      0 => 'gam',
    ),
    'application/x-tar' =>
    array (
      0 => 'tar',
      1 => 'gtar',
      2 => 'gem',
    ),
    'application/x-tarz' =>
    array (
      0 => 'tar.z',
      1 => 'taz',
    ),
    'application/x-tcl' =>
    array (
      0 => 'tcl',
    ),
    'application/x-tex' =>
    array (
      0 => 'tex',
    ),
    'application/x-tex-gf' =>
    array (
      0 => 'gf',
    ),
    'application/x-tex-pk' =>
    array (
      0 => 'pk',
    ),
    'application/x-tex-tfm' =>
    array (
      0 => 'tfm',
    ),
    'application/x-texinfo' =>
    array (
      0 => 'texinfo',
      1 => 'texi',
    ),
    'application/x-tgif' =>
    array (
      0 => 'obj',
    ),
    'application/x-theme' =>
    array (
      0 => 'theme',
    ),
    'application/x-thomson-cartridge-memo7' =>
    array (
      0 => 'm7',
    ),
    'application/x-thomson-cassette' =>
    array (
      0 => 'k7',
    ),
    'application/x-thomson-sap-image' =>
    array (
      0 => 'sap',
    ),
    'application/x-trash' =>
    array (
      0 => 'bak',
      1 => 'old',
      2 => 'sik',
    ),
    'application/x-troff-man' =>
    array (
      0 => 'man',
    ),
    'application/x-tzo' =>
    array (
      0 => 'tar.lzo',
      1 => 'tzo',
    ),
    'application/x-ufraw' =>
    array (
      0 => 'ufraw',
    ),
    'application/x-ustar' =>
    array (
      0 => 'ustar',
    ),
    'application/x-virtual-boy-rom' =>
    array (
      0 => 'vb',
    ),
    'application/x-wais-source' =>
    array (
      0 => 'src',
    ),
    'application/x-wii-rom' =>
    array (
      0 => 'iso',
    ),
    'application/x-wii-wad' =>
    array (
      0 => 'wad',
    ),
    'application/x-windows-themepack' =>
    array (
      0 => 'themepack',
    ),
    'application/x-wonderswan-color-rom' =>
    array (
      0 => 'wsc',
    ),
    'application/x-wonderswan-rom' =>
    array (
      0 => 'ws',
    ),
    'application/x-wpg' =>
    array (
      0 => 'wpg',
    ),
    'application/x-wwf' =>
    array (
      0 => 'wwf',
    ),
    'application/x-x509-ca-cert' =>
    array (
      0 => 'der',
      1 => 'crt',
      2 => 'cert',
      3 => 'pem',
    ),
    'application/x-xar' =>
    array (
      0 => 'xar',
      1 => 'pkg',
    ),
    'application/x-xbel' =>
    array (
      0 => 'xbel',
    ),
    'application/x-xfig' =>
    array (
      0 => 'fig',
    ),
    'application/x-xliff+xml' =>
    array (
      0 => 'xlf',
    ),
    'application/x-xpinstall' =>
    array (
      0 => 'xpi',
    ),
    'application/x-xz' =>
    array (
      0 => 'xz',
    ),
    'application/x-xz-compressed-tar' =>
    array (
      0 => 'tar.xz',
      1 => 'txz',
    ),
    'application/x-xzpdf' =>
    array (
      0 => 'pdf.xz',
    ),
    'application/x-yaml' =>
    array (
      0 => 'yaml',
      1 => 'yml',
    ),
    'application/x-zip-compressed-fb2' =>
    array (
      0 => 'fb2.zip',
    ),
    'application/x-zmachine' =>
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
    'application/x-zoo' =>
    array (
      0 => 'zoo',
    ),
    'application/xaml+xml' =>
    array (
      0 => 'xaml',
    ),
    'application/xcap-diff+xml' =>
    array (
      0 => 'xdf',
    ),
    'application/xenc+xml' =>
    array (
      0 => 'xenc',
    ),
    'application/xhtml+xml' =>
    array (
      0 => 'xhtml',
      1 => 'xht',
    ),
    'application/xliff+xml' =>
    array (
      0 => 'xlf',
      1 => 'xliff',
    ),
    'application/xml' =>
    array (
      0 => 'xml',
      1 => 'xsl',
      2 => 'xbl',
      3 => 'xsd',
      4 => 'rng',
    ),
    'application/xml-dtd' =>
    array (
      0 => 'dtd',
    ),
    'application/xml-external-parsed-entity' =>
    array (
      0 => 'ent',
    ),
    'application/xop+xml' =>
    array (
      0 => 'xop',
    ),
    'application/xproc+xml' =>
    array (
      0 => 'xpl',
    ),
    'application/xslt+xml' =>
    array (
      0 => 'xslt',
      1 => 'xsl',
    ),
    'application/xspf+xml' =>
    array (
      0 => 'xspf',
    ),
    'application/xv+xml' =>
    array (
      0 => 'mxml',
      1 => 'xhvml',
      2 => 'xvml',
      3 => 'xvm',
    ),
    'application/yang' =>
    array (
      0 => 'yang',
    ),
    'application/yin+xml' =>
    array (
      0 => 'yin',
    ),
    'application/zip' =>
    array (
      0 => 'zip',
    ),
    'application/zlib' =>
    array (
      0 => 'zz',
    ),
    'audio/aac' =>
    array (
      0 => 'aac',
      1 => 'adts',
      2 => 'ass',
    ),
    'audio/ac3' =>
    array (
      0 => 'ac3',
    ),
    'audio/adpcm' =>
    array (
      0 => 'adp',
    ),
    'audio/amr' =>
    array (
      0 => 'amr',
    ),
    'audio/amr-wb' =>
    array (
      0 => 'awb',
    ),
    'audio/annodex' =>
    array (
      0 => 'axa',
    ),
    'audio/basic' =>
    array (
      0 => 'au',
      1 => 'snd',
    ),
    'audio/flac' =>
    array (
      0 => 'flac',
    ),
    'audio/midi' =>
    array (
      0 => 'mid',
      1 => 'midi',
      2 => 'kar',
      3 => 'rmi',
    ),
    'audio/mp2' =>
    array (
      0 => 'mp2',
    ),
    'audio/mp4' =>
    array (
      0 => 'm4a',
      1 => 'mp4a',
      2 => 'f4a',
    ),
    'audio/mpeg' =>
    array (
      0 => 'mpga',
      1 => 'mp2',
      2 => 'mp2a',
      3 => 'mp3',
      4 => 'm2a',
      5 => 'm3a',
    ),
    'audio/ogg' =>
    array (
      0 => 'oga',
      1 => 'ogg',
      2 => 'spx',
      3 => 'opus',
    ),
    'audio/prs.sid' =>
    array (
      0 => 'sid',
      1 => 'psid',
    ),
    'audio/s3m' =>
    array (
      0 => 's3m',
    ),
    'audio/silk' =>
    array (
      0 => 'sil',
    ),
    'audio/usac' =>
    array (
      0 => 'loas',
      1 => 'xhe',
    ),
    'audio/vnd.dece.audio' =>
    array (
      0 => 'uva',
      1 => 'uvva',
    ),
    'audio/vnd.digital-winds' =>
    array (
      0 => 'eol',
    ),
    'audio/vnd.dra' =>
    array (
      0 => 'dra',
    ),
    'audio/vnd.dts' =>
    array (
      0 => 'dts',
    ),
    'audio/vnd.dts.hd' =>
    array (
      0 => 'dtshd',
    ),
    'audio/vnd.lucent.voice' =>
    array (
      0 => 'lvp',
    ),
    'audio/vnd.ms-playready.media.pya' =>
    array (
      0 => 'pya',
    ),
    'audio/vnd.nuera.ecelp4800' =>
    array (
      0 => 'ecelp4800',
    ),
    'audio/vnd.nuera.ecelp7470' =>
    array (
      0 => 'ecelp7470',
    ),
    'audio/vnd.nuera.ecelp9600' =>
    array (
      0 => 'ecelp9600',
    ),
    'audio/vnd.rip' =>
    array (
      0 => 'rip',
    ),
    'audio/vnd.rn-realaudio' =>
    array (
      0 => 'ra',
      1 => 'rax',
    ),
    'audio/webm' =>
    array (
      0 => 'weba',
    ),
    'audio/x-aac' =>
    array (
      0 => 'aac',
    ),
    'audio/x-aifc' =>
    array (
      0 => 'aifc',
      1 => 'aiffc',
    ),
    'audio/x-aiff' =>
    array (
      0 => 'aif',
      1 => 'aiff',
      2 => 'aifc',
    ),
    'audio/x-amzxml' =>
    array (
      0 => 'amz',
    ),
    'audio/x-ape' =>
    array (
      0 => 'ape',
    ),
    'audio/x-caf' =>
    array (
      0 => 'caf',
    ),
    'audio/x-flac' =>
    array (
      0 => 'flac',
    ),
    'audio/x-flac+ogg' =>
    array (
      0 => 'oga',
      1 => 'ogg',
    ),
    'audio/x-gsm' =>
    array (
      0 => 'gsm',
    ),
    'audio/x-iriver-pla' =>
    array (
      0 => 'pla',
    ),
    'audio/x-it' =>
    array (
      0 => 'it',
    ),
    'audio/x-m4b' =>
    array (
      0 => 'm4b',
      1 => 'f4b',
    ),
    'audio/x-m4r' =>
    array (
      0 => 'm4r',
    ),
    'audio/x-matroska' =>
    array (
      0 => 'mka',
    ),
    'audio/x-minipsf' =>
    array (
      0 => 'minipsf',
    ),
    'audio/x-mo3' =>
    array (
      0 => 'mo3',
    ),
    'audio/x-mod' =>
    array (
      0 => 'mod',
      1 => 'ult',
      2 => 'uni',
      3 => 'm15',
      4 => 'mtm',
      5 => '669',
      6 => 'med',
    ),
    'audio/x-mpegurl' =>
    array (
      0 => 'm3u',
      1 => 'm3u8',
      2 => 'vlc',
    ),
    'audio/x-ms-asx' =>
    array (
      0 => 'asx',
      1 => 'wax',
      2 => 'wvx',
      3 => 'wmx',
    ),
    'audio/x-ms-wax' =>
    array (
      0 => 'wax',
    ),
    'audio/x-ms-wma' =>
    array (
      0 => 'wma',
    ),
    'audio/x-musepack' =>
    array (
      0 => 'mpc',
      1 => 'mpp',
      2 => 'mp+',
    ),
    'audio/x-opus+ogg' =>
    array (
      0 => 'opus',
    ),
    'audio/x-pn-audibleaudio' =>
    array (
      0 => 'aa',
      1 => 'aax',
    ),
    'audio/x-pn-realaudio' =>
    array (
      0 => 'ram',
      1 => 'ra',
    ),
    'audio/x-pn-realaudio-plugin' =>
    array (
      0 => 'rmp',
    ),
    'audio/x-psf' =>
    array (
      0 => 'psf',
    ),
    'audio/x-psflib' =>
    array (
      0 => 'psflib',
    ),
    'audio/x-s3m' =>
    array (
      0 => 's3m',
    ),
    'audio/x-scpls' =>
    array (
      0 => 'pls',
    ),
    'audio/x-speex' =>
    array (
      0 => 'spx',
    ),
    'audio/x-speex+ogg' =>
    array (
      0 => 'oga',
      1 => 'ogg',
    ),
    'audio/x-stm' =>
    array (
      0 => 'stm',
    ),
    'audio/x-tta' =>
    array (
      0 => 'tta',
    ),
    'audio/x-voc' =>
    array (
      0 => 'voc',
    ),
    'audio/x-vorbis+ogg' =>
    array (
      0 => 'oga',
      1 => 'ogg',
    ),
    'audio/x-wav' =>
    array (
      0 => 'wav',
    ),
    'audio/x-wavpack' =>
    array (
      0 => 'wv',
      1 => 'wvp',
    ),
    'audio/x-wavpack-correction' =>
    array (
      0 => 'wvc',
    ),
    'audio/x-xi' =>
    array (
      0 => 'xi',
    ),
    'audio/x-xm' =>
    array (
      0 => 'xm',
    ),
    'audio/x-xmf' =>
    array (
      0 => 'xmf',
    ),
    'audio/xm' =>
    array (
      0 => 'xm',
    ),
    'chemical/x-cdx' =>
    array (
      0 => 'cdx',
    ),
    'chemical/x-cif' =>
    array (
      0 => 'cif',
    ),
    'chemical/x-cmdf' =>
    array (
      0 => 'cmdf',
    ),
    'chemical/x-cml' =>
    array (
      0 => 'cml',
    ),
    'chemical/x-csml' =>
    array (
      0 => 'csml',
    ),
    'chemical/x-xyz' =>
    array (
      0 => 'xyz',
    ),
    'font/collection' =>
    array (
      0 => 'ttc',
    ),
    'font/otf' =>
    array (
      0 => 'otf',
    ),
    'font/ttf' =>
    array (
      0 => 'ttf',
    ),
    'font/woff' =>
    array (
      0 => 'woff',
      1 => 'woff2',
    ),
    'font/woff2' =>
    array (
      0 => 'woff2',
    ),
    'image/bmp' =>
    array (
      0 => 'bmp',
      1 => 'dib',
    ),
    'image/cgm' =>
    array (
      0 => 'cgm',
    ),
    'image/emf' =>
    array (
      0 => 'emf',
    ),
    'image/fax-g3' =>
    array (
      0 => 'g3',
    ),
    'image/fits' =>
    array (
      0 => 'fits',
    ),
    'image/g3fax' =>
    array (
      0 => 'g3',
    ),
    'image/gif' =>
    array (
      0 => 'gif',
    ),
    'image/heif' =>
    array (
      0 => 'heic',
      1 => 'heif',
    ),
    'image/ief' =>
    array (
      0 => 'ief',
    ),
    'image/jp2' =>
    array (
      0 => 'jp2',
      1 => 'jpg2',
    ),
    'image/jpeg' =>
    array (
      0 => 'jpeg',
      1 => 'jpg',
      2 => 'jpe',
    ),
    'image/jpm' =>
    array (
      0 => 'jpm',
      1 => 'jpgm',
    ),
    'image/jpx' =>
    array (
      0 => 'jpf',
      1 => 'jpx',
    ),
    'image/ktx' =>
    array (
      0 => 'ktx',
    ),
    'image/openraster' =>
    array (
      0 => 'ora',
    ),
    'image/png' =>
    array (
      0 => 'png',
    ),
    'image/prs.btif' =>
    array (
      0 => 'btif',
    ),
    'image/rle' =>
    array (
      0 => 'rle',
    ),
    'image/sgi' =>
    array (
      0 => 'sgi',
    ),
    'image/svg+xml' =>
    array (
      0 => 'svg',
      1 => 'svgz',
    ),
    'image/svg+xml-compressed' =>
    array (
      0 => 'svgz',
    ),
    'image/tiff' =>
    array (
      0 => 'tiff',
      1 => 'tif',
    ),
    'image/vnd.adobe.photoshop' =>
    array (
      0 => 'psd',
    ),
    'image/vnd.dece.graphic' =>
    array (
      0 => 'uvi',
      1 => 'uvvi',
      2 => 'uvg',
      3 => 'uvvg',
    ),
    'image/vnd.djvu' =>
    array (
      0 => 'djvu',
      1 => 'djv',
    ),
    'image/vnd.djvu+multipage' =>
    array (
      0 => 'djvu',
      1 => 'djv',
    ),
    'image/vnd.dvb.subtitle' =>
    array (
      0 => 'sub',
    ),
    'image/vnd.dwg' =>
    array (
      0 => 'dwg',
    ),
    'image/vnd.dxf' =>
    array (
      0 => 'dxf',
    ),
    'image/vnd.fastbidsheet' =>
    array (
      0 => 'fbs',
    ),
    'image/vnd.fpx' =>
    array (
      0 => 'fpx',
    ),
    'image/vnd.fst' =>
    array (
      0 => 'fst',
    ),
    'image/vnd.fujixerox.edmics-mmr' =>
    array (
      0 => 'mmr',
    ),
    'image/vnd.fujixerox.edmics-rlc' =>
    array (
      0 => 'rlc',
    ),
    'image/vnd.microsoft.icon' =>
    array (
      0 => 'ico',
    ),
    'image/vnd.ms-modi' =>
    array (
      0 => 'mdi',
    ),
    'image/vnd.ms-photo' =>
    array (
      0 => 'wdp',
    ),
    'image/vnd.net-fpx' =>
    array (
      0 => 'npx',
    ),
    'image/vnd.rn-realpix' =>
    array (
      0 => 'rp',
    ),
    'image/vnd.wap.wbmp' =>
    array (
      0 => 'wbmp',
    ),
    'image/vnd.xiff' =>
    array (
      0 => 'xif',
    ),
    'image/vnd.zbrush.pcx' =>
    array (
      0 => 'pcx',
    ),
    'image/webp' =>
    array (
      0 => 'webp',
    ),
    'image/wmf' =>
    array (
      0 => 'wmf',
    ),
    'image/x-3ds' =>
    array (
      0 => '3ds',
    ),
    'image/x-adobe-dng' =>
    array (
      0 => 'dng',
    ),
    'image/x-applix-graphics' =>
    array (
      0 => 'ag',
    ),
    'image/x-bzeps' =>
    array (
      0 => 'eps.bz2',
      1 => 'epsi.bz2',
      2 => 'epsf.bz2',
    ),
    'image/x-canon-cr2' =>
    array (
      0 => 'cr2',
    ),
    'image/x-canon-crw' =>
    array (
      0 => 'crw',
    ),
    'image/x-cmu-raster' =>
    array (
      0 => 'ras',
    ),
    'image/x-cmx' =>
    array (
      0 => 'cmx',
    ),
    'image/x-compressed-xcf' =>
    array (
      0 => 'xcf.gz',
      1 => 'xcf.bz2',
    ),
    'image/x-dds' =>
    array (
      0 => 'dds',
    ),
    'image/x-eps' =>
    array (
      0 => 'eps',
      1 => 'epsi',
      2 => 'epsf',
    ),
    'image/x-exr' =>
    array (
      0 => 'exr',
    ),
    'image/x-freehand' =>
    array (
      0 => 'fh',
      1 => 'fhc',
      2 => 'fh4',
      3 => 'fh5',
      4 => 'fh7',
    ),
    'image/x-fuji-raf' =>
    array (
      0 => 'raf',
    ),
    'image/x-gimp-gbr' =>
    array (
      0 => 'gbr',
    ),
    'image/x-gimp-gih' =>
    array (
      0 => 'gih',
    ),
    'image/x-gimp-pat' =>
    array (
      0 => 'pat',
    ),
    'image/x-gzeps' =>
    array (
      0 => 'eps.gz',
      1 => 'epsi.gz',
      2 => 'epsf.gz',
    ),
    'image/x-icns' =>
    array (
      0 => 'icns',
    ),
    'image/x-icon' =>
    array (
      0 => 'ico',
    ),
    'image/x-ilbm' =>
    array (
      0 => 'iff',
      1 => 'ilbm',
      2 => 'lbm',
    ),
    'image/x-jng' =>
    array (
      0 => 'jng',
    ),
    'image/x-jp2-codestream' =>
    array (
      0 => 'j2c',
      1 => 'j2k',
      2 => 'jpc',
    ),
    'image/x-kodak-dcr' =>
    array (
      0 => 'dcr',
    ),
    'image/x-kodak-k25' =>
    array (
      0 => 'k25',
    ),
    'image/x-kodak-kdc' =>
    array (
      0 => 'kdc',
    ),
    'image/x-lwo' =>
    array (
      0 => 'lwo',
      1 => 'lwob',
    ),
    'image/x-lws' =>
    array (
      0 => 'lws',
    ),
    'image/x-macpaint' =>
    array (
      0 => 'pntg',
    ),
    'image/x-minolta-mrw' =>
    array (
      0 => 'mrw',
    ),
    'image/x-mrsid-image' =>
    array (
      0 => 'sid',
    ),
    'image/x-msod' =>
    array (
      0 => 'msod',
    ),
    'image/x-nikon-nef' =>
    array (
      0 => 'nef',
    ),
    'image/x-olympus-orf' =>
    array (
      0 => 'orf',
    ),
    'image/x-panasonic-rw' =>
    array (
      0 => 'raw',
    ),
    'image/x-panasonic-rw2' =>
    array (
      0 => 'rw2',
    ),
    'image/x-pcx' =>
    array (
      0 => 'pcx',
    ),
    'image/x-pentax-pef' =>
    array (
      0 => 'pef',
    ),
    'image/x-photo-cd' =>
    array (
      0 => 'pcd',
    ),
    'image/x-pict' =>
    array (
      0 => 'pic',
      1 => 'pct',
      2 => 'pict',
      3 => 'pict1',
      4 => 'pict2',
    ),
    'image/x-portable-anymap' =>
    array (
      0 => 'pnm',
    ),
    'image/x-portable-bitmap' =>
    array (
      0 => 'pbm',
    ),
    'image/x-portable-graymap' =>
    array (
      0 => 'pgm',
    ),
    'image/x-portable-pixmap' =>
    array (
      0 => 'ppm',
    ),
    'image/x-quicktime' =>
    array (
      0 => 'qtif',
      1 => 'qif',
    ),
    'image/x-rgb' =>
    array (
      0 => 'rgb',
    ),
    'image/x-sgi' =>
    array (
      0 => 'sgi',
    ),
    'image/x-sigma-x3f' =>
    array (
      0 => 'x3f',
    ),
    'image/x-skencil' =>
    array (
      0 => 'sk',
      1 => 'sk1',
    ),
    'image/x-sony-arw' =>
    array (
      0 => 'arw',
    ),
    'image/x-sony-sr2' =>
    array (
      0 => 'sr2',
    ),
    'image/x-sony-srf' =>
    array (
      0 => 'srf',
    ),
    'image/x-sun-raster' =>
    array (
      0 => 'sun',
    ),
    'image/x-tga' =>
    array (
      0 => 'tga',
      1 => 'icb',
      2 => 'tpic',
      3 => 'vda',
      4 => 'vst',
    ),
    'image/x-win-bitmap' =>
    array (
      0 => 'cur',
    ),
    'image/x-xbitmap' =>
    array (
      0 => 'xbm',
    ),
    'image/x-xcf' =>
    array (
      0 => 'xcf',
    ),
    'image/x-xfig' =>
    array (
      0 => 'fig',
    ),
    'image/x-xpixmap' =>
    array (
      0 => 'xpm',
    ),
    'image/x-xwindowdump' =>
    array (
      0 => 'xwd',
    ),
    'message/rfc822' =>
    array (
      0 => 'eml',
      1 => 'mime',
    ),
    'model/iges' =>
    array (
      0 => 'igs',
      1 => 'iges',
    ),
    'model/mesh' =>
    array (
      0 => 'msh',
      1 => 'mesh',
      2 => 'silo',
    ),
    'model/stl' =>
    array (
      0 => 'stl',
    ),
    'model/vnd.collada+xml' =>
    array (
      0 => 'dae',
    ),
    'model/vnd.dwf' =>
    array (
      0 => 'dwf',
    ),
    'model/vnd.gdl' =>
    array (
      0 => 'gdl',
    ),
    'model/vnd.gtw' =>
    array (
      0 => 'gtw',
    ),
    'model/vnd.mts' =>
    array (
      0 => 'mts',
    ),
    'model/vnd.vtu' =>
    array (
      0 => 'vtu',
    ),
    'model/vrml' =>
    array (
      0 => 'wrl',
      1 => 'vrml',
      2 => 'vrm',
    ),
    'model/x3d+binary' =>
    array (
      0 => 'x3db',
      1 => 'x3dbz',
    ),
    'model/x3d+vrml' =>
    array (
      0 => 'x3dv',
      1 => 'x3dvz',
    ),
    'model/x3d+xml' =>
    array (
      0 => 'x3d',
      1 => 'x3dz',
    ),
    'text/cache-manifest' =>
    array (
      0 => 'appcache',
      1 => 'manifest',
    ),
    'text/calendar' =>
    array (
      0 => 'ics',
      1 => 'ifb',
      2 => 'vcs',
    ),
    'text/css' =>
    array (
      0 => 'css',
    ),
    'text/csv' =>
    array (
      0 => 'csv',
    ),
    'text/csv-schema' =>
    array (
      0 => 'csvs',
    ),
    'text/html' =>
    array (
      0 => 'html',
      1 => 'htm',
    ),
    'text/markdown' =>
    array (
      0 => 'md',
      1 => 'mkd',
      2 => 'markdown',
    ),
    'text/n3' =>
    array (
      0 => 'n3',
    ),
    'text/plain' =>
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
    'text/prs.lines.tag' =>
    array (
      0 => 'dsc',
    ),
    'text/richtext' =>
    array (
      0 => 'rtx',
    ),
    'text/rust' =>
    array (
      0 => 'rs',
    ),
    'text/sgml' =>
    array (
      0 => 'sgml',
      1 => 'sgm',
    ),
    'text/spreadsheet' =>
    array (
      0 => 'sylk',
      1 => 'slk',
    ),
    'text/tab-separated-values' =>
    array (
      0 => 'tsv',
    ),
    'text/troff' =>
    array (
      0 => 't',
      1 => 'tr',
      2 => 'roff',
      3 => 'man',
      4 => 'me',
      5 => 'ms',
    ),
    'text/turtle' =>
    array (
      0 => 'ttl',
    ),
    'text/uri-list' =>
    array (
      0 => 'uri',
      1 => 'uris',
      2 => 'urls',
    ),
    'text/vcard' =>
    array (
      0 => 'vcard',
      1 => 'vcf',
      2 => 'vct',
      3 => 'gcrd',
    ),
    'text/vnd.curl' =>
    array (
      0 => 'curl',
    ),
    'text/vnd.curl.dcurl' =>
    array (
      0 => 'dcurl',
    ),
    'text/vnd.curl.mcurl' =>
    array (
      0 => 'mcurl',
    ),
    'text/vnd.curl.scurl' =>
    array (
      0 => 'scurl',
    ),
    'text/vnd.dvb.subtitle' =>
    array (
      0 => 'sub',
    ),
    'text/vnd.fly' =>
    array (
      0 => 'fly',
    ),
    'text/vnd.fmi.flexstor' =>
    array (
      0 => 'flx',
    ),
    'text/vnd.graphviz' =>
    array (
      0 => 'gv',
      1 => 'dot',
    ),
    'text/vnd.in3d.3dml' =>
    array (
      0 => '3dml',
    ),
    'text/vnd.in3d.spot' =>
    array (
      0 => 'spot',
    ),
    'text/vnd.qt.linguist' =>
    array (
      0 => 'ts',
    ),
    'text/vnd.rn-realtext' =>
    array (
      0 => 'rt',
    ),
    'text/vnd.sun.j2me.app-descriptor' =>
    array (
      0 => 'jad',
    ),
    'text/vnd.wap.wml' =>
    array (
      0 => 'wml',
    ),
    'text/vnd.wap.wmlscript' =>
    array (
      0 => 'wmls',
    ),
    'text/vtt' =>
    array (
      0 => 'vtt',
    ),
    'text/x-adasrc' =>
    array (
      0 => 'adb',
      1 => 'ads',
    ),
    'text/x-asm' =>
    array (
      0 => 's',
      1 => 'asm',
    ),
    'text/x-bibtex' =>
    array (
      0 => 'bib',
    ),
    'text/x-c' =>
    array (
      0 => 'c',
      1 => 'cc',
      2 => 'cxx',
      3 => 'cpp',
      4 => 'h',
      5 => 'hh',
      6 => 'dic',
    ),
    'text/x-c++hdr' =>
    array (
      0 => 'hh',
      1 => 'hp',
      2 => 'hpp',
      3 => 'h++',
      4 => 'hxx',
    ),
    'text/x-c++src' =>
    array (
      0 => 'cpp',
      1 => 'cxx',
      2 => 'cc',
      3 => 'c',
      4 => 'c++',
    ),
    'text/x-chdr' =>
    array (
      0 => 'h',
    ),
    'text/x-cmake' =>
    array (
      0 => 'cmake',
    ),
    'text/x-cobol' =>
    array (
      0 => 'cbl',
      1 => 'cob',
    ),
    'text/x-csharp' =>
    array (
      0 => 'cs',
    ),
    'text/x-csrc' =>
    array (
      0 => 'c',
    ),
    'text/x-dbus-service' =>
    array (
      0 => 'service',
    ),
    'text/x-dcl' =>
    array (
      0 => 'dcl',
    ),
    'text/x-dsl' =>
    array (
      0 => 'dsl',
    ),
    'text/x-dsrc' =>
    array (
      0 => 'd',
      1 => 'di',
    ),
    'text/x-eiffel' =>
    array (
      0 => 'e',
      1 => 'eif',
    ),
    'text/x-emacs-lisp' =>
    array (
      0 => 'el',
    ),
    'text/x-erlang' =>
    array (
      0 => 'erl',
    ),
    'text/x-fortran' =>
    array (
      0 => 'f',
      1 => 'for',
      2 => 'f77',
      3 => 'f90',
      4 => 'f95',
    ),
    'text/x-genie' =>
    array (
      0 => 'gs',
    ),
    'text/x-gettext-translation' =>
    array (
      0 => 'po',
    ),
    'text/x-gettext-translation-template' =>
    array (
      0 => 'pot',
    ),
    'text/x-gherkin' =>
    array (
      0 => 'feature',
    ),
    'text/x-go' =>
    array (
      0 => 'go',
    ),
    'text/x-google-video-pointer' =>
    array (
      0 => 'gvp',
    ),
    'text/x-haskell' =>
    array (
      0 => 'hs',
    ),
    'text/x-idl' =>
    array (
      0 => 'idl',
    ),
    'text/x-imelody' =>
    array (
      0 => 'imy',
      1 => 'ime',
    ),
    'text/x-iptables' =>
    array (
      0 => 'iptables',
    ),
    'text/x-java' =>
    array (
      0 => 'java',
    ),
    'text/x-java-source' =>
    array (
      0 => 'java',
    ),
    'text/x-ldif' =>
    array (
      0 => 'ldif',
    ),
    'text/x-lilypond' =>
    array (
      0 => 'ly',
    ),
    'text/x-literate-haskell' =>
    array (
      0 => 'lhs',
    ),
    'text/x-log' =>
    array (
      0 => 'log',
    ),
    'text/x-lua' =>
    array (
      0 => 'lua',
    ),
    'text/x-makefile' =>
    array (
      0 => 'mk',
      1 => 'mak',
    ),
    'text/x-matlab' =>
    array (
      0 => 'm',
    ),
    'text/x-microdvd' =>
    array (
      0 => 'sub',
    ),
    'text/x-moc' =>
    array (
      0 => 'moc',
    ),
    'text/x-modelica' =>
    array (
      0 => 'mo',
    ),
    'text/x-mof' =>
    array (
      0 => 'mof',
    ),
    'text/x-mpsub' =>
    array (
      0 => 'sub',
    ),
    'text/x-mrml' =>
    array (
      0 => 'mrml',
      1 => 'mrl',
    ),
    'text/x-ms-regedit' =>
    array (
      0 => 'reg',
    ),
    'text/x-mup' =>
    array (
      0 => 'mup',
      1 => 'not',
    ),
    'text/x-nfo' =>
    array (
      0 => 'nfo',
    ),
    'text/x-objcsrc' =>
    array (
      0 => 'm',
    ),
    'text/x-ocaml' =>
    array (
      0 => 'ml',
      1 => 'mli',
    ),
    'text/x-ocl' =>
    array (
      0 => 'ocl',
    ),
    'text/x-ooc' =>
    array (
      0 => 'ooc',
    ),
    'text/x-opencl-src' =>
    array (
      0 => 'cl',
    ),
    'text/x-opml' =>
    array (
      0 => 'opml',
    ),
    'text/x-opml+xml' =>
    array (
      0 => 'opml',
    ),
    'text/x-pascal' =>
    array (
      0 => 'p',
      1 => 'pas',
    ),
    'text/x-patch' =>
    array (
      0 => 'diff',
      1 => 'patch',
    ),
    'text/x-python' =>
    array (
      0 => 'py',
      1 => 'pyx',
      2 => 'wsgi',
    ),
    'text/x-python3' =>
    array (
      0 => 'py',
      1 => 'py3',
      2 => 'py3x',
    ),
    'text/x-qml' =>
    array (
      0 => 'qml',
      1 => 'qmltypes',
      2 => 'qmlproject',
    ),
    'text/x-reject' =>
    array (
      0 => 'rej',
    ),
    'text/x-rpm-spec' =>
    array (
      0 => 'spec',
    ),
    'text/x-sass' =>
    array (
      0 => 'sass',
    ),
    'text/x-scala' =>
    array (
      0 => 'scala',
    ),
    'text/x-scheme' =>
    array (
      0 => 'scm',
      1 => 'ss',
    ),
    'text/x-scss' =>
    array (
      0 => 'scss',
    ),
    'text/x-setext' =>
    array (
      0 => 'etx',
    ),
    'text/x-sfv' =>
    array (
      0 => 'sfv',
    ),
    'text/x-ssa' =>
    array (
      0 => 'ssa',
      1 => 'ass',
    ),
    'text/x-subviewer' =>
    array (
      0 => 'sub',
    ),
    'text/x-svhdr' =>
    array (
      0 => 'svh',
    ),
    'text/x-svsrc' =>
    array (
      0 => 'sv',
    ),
    'text/x-systemd-unit' =>
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
    'text/x-tcl' =>
    array (
      0 => 'tcl',
      1 => 'tk',
    ),
    'text/x-tex' =>
    array (
      0 => 'tex',
      1 => 'ltx',
      2 => 'sty',
      3 => 'cls',
      4 => 'dtx',
      5 => 'ins',
      6 => 'latex',
    ),
    'text/x-texinfo' =>
    array (
      0 => 'texi',
      1 => 'texinfo',
    ),
    'text/x-troff-me' =>
    array (
      0 => 'me',
    ),
    'text/x-troff-mm' =>
    array (
      0 => 'mm',
    ),
    'text/x-troff-ms' =>
    array (
      0 => 'ms',
    ),
    'text/x-twig' =>
    array (
      0 => 'twig',
    ),
    'text/x-txt2tags' =>
    array (
      0 => 't2t',
    ),
    'text/x-uil' =>
    array (
      0 => 'uil',
    ),
    'text/x-uuencode' =>
    array (
      0 => 'uu',
      1 => 'uue',
    ),
    'text/x-vala' =>
    array (
      0 => 'vala',
      1 => 'vapi',
    ),
    'text/x-vcalendar' =>
    array (
      0 => 'vcs',
    ),
    'text/x-vcard' =>
    array (
      0 => 'vcf',
    ),
    'text/x-verilog' =>
    array (
      0 => 'v',
    ),
    'text/x-vhdl' =>
    array (
      0 => 'vhd',
      1 => 'vhdl',
    ),
    'text/x-xmi' =>
    array (
      0 => 'xmi',
    ),
    'text/x-xslfo' =>
    array (
      0 => 'fo',
      1 => 'xslfo',
    ),
    'text/x.gcode' =>
    array (
      0 => 'gcode',
    ),
    'video/3gpp' =>
    array (
      0 => '3gp',
      1 => '3gpp',
      2 => '3ga',
    ),
    'video/3gpp2' =>
    array (
      0 => '3g2',
      1 => '3gp2',
      2 => '3gpp2',
    ),
    'video/annodex' =>
    array (
      0 => 'axv',
    ),
    'video/dv' =>
    array (
      0 => 'dv',
    ),
    'video/h261' =>
    array (
      0 => 'h261',
    ),
    'video/h263' =>
    array (
      0 => 'h263',
    ),
    'video/h264' =>
    array (
      0 => 'h264',
    ),
    'video/jpeg' =>
    array (
      0 => 'jpgv',
    ),
    'video/jpm' =>
    array (
      0 => 'jpm',
      1 => 'jpgm',
    ),
    'video/mj2' =>
    array (
      0 => 'mj2',
      1 => 'mjp2',
    ),
    'video/mp2t' =>
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
    'video/mp4' =>
    array (
      0 => 'mp4',
      1 => 'mp4v',
      2 => 'mpg4',
      3 => 'm4v',
      4 => 'f4v',
      5 => 'lrv',
    ),
    'video/mpeg' =>
    array (
      0 => 'mpeg',
      1 => 'mpg',
      2 => 'mpe',
      3 => 'm1v',
      4 => 'm2v',
      5 => 'mp2',
      6 => 'vob',
    ),
    'video/ogg' =>
    array (
      0 => 'ogv',
      1 => 'ogg',
    ),
    'video/quicktime' =>
    array (
      0 => 'qt',
      1 => 'mov',
      2 => 'moov',
      3 => 'qtvr',
    ),
    'video/vnd.dece.hd' =>
    array (
      0 => 'uvh',
      1 => 'uvvh',
    ),
    'video/vnd.dece.mobile' =>
    array (
      0 => 'uvm',
      1 => 'uvvm',
    ),
    'video/vnd.dece.pd' =>
    array (
      0 => 'uvp',
      1 => 'uvvp',
    ),
    'video/vnd.dece.sd' =>
    array (
      0 => 'uvs',
      1 => 'uvvs',
    ),
    'video/vnd.dece.video' =>
    array (
      0 => 'uvv',
      1 => 'uvvv',
    ),
    'video/vnd.dvb.file' =>
    array (
      0 => 'dvb',
    ),
    'video/vnd.fvt' =>
    array (
      0 => 'fvt',
    ),
    'video/vnd.mpegurl' =>
    array (
      0 => 'mxu',
      1 => 'm4u',
      2 => 'm1u',
    ),
    'video/vnd.ms-playready.media.pyv' =>
    array (
      0 => 'pyv',
    ),
    'video/vnd.rn-realvideo' =>
    array (
      0 => 'rv',
      1 => 'rvx',
    ),
    'video/vnd.uvvu.mp4' =>
    array (
      0 => 'uvu',
      1 => 'uvvu',
    ),
    'video/vnd.vivo' =>
    array (
      0 => 'viv',
      1 => 'vivo',
    ),
    'video/webm' =>
    array (
      0 => 'webm',
    ),
    'video/x-anim' =>
    array (
      0 => 'anim[1-9j]',
    ),
    'video/x-f4v' =>
    array (
      0 => 'f4v',
    ),
    'video/x-fli' =>
    array (
      0 => 'fli',
    ),
    'video/x-flic' =>
    array (
      0 => 'fli',
      1 => 'flc',
    ),
    'video/x-flv' =>
    array (
      0 => 'flv',
    ),
    'video/x-javafx' =>
    array (
      0 => 'fxm',
    ),
    'video/x-m4v' =>
    array (
      0 => 'm4v',
    ),
    'video/x-matroska' =>
    array (
      0 => 'mkv',
      1 => 'mk3d',
      2 => 'mks',
    ),
    'video/x-matroska-3d' =>
    array (
      0 => 'mk3d',
    ),
    'video/x-mjpeg' =>
    array (
      0 => 'mjpeg',
      1 => 'mjpg',
    ),
    'video/x-mng' =>
    array (
      0 => 'mng',
    ),
    'video/x-ms-asf' =>
    array (
      0 => 'asf',
      1 => 'asx',
    ),
    'video/x-ms-vob' =>
    array (
      0 => 'vob',
    ),
    'video/x-ms-wm' =>
    array (
      0 => 'wm',
    ),
    'video/x-ms-wmv' =>
    array (
      0 => 'wmv',
    ),
    'video/x-ms-wmx' =>
    array (
      0 => 'wmx',
    ),
    'video/x-ms-wvx' =>
    array (
      0 => 'wvx',
    ),
    'video/x-msvideo' =>
    array (
      0 => 'avi',
      1 => 'avf',
      2 => 'divx',
    ),
    'video/x-nsv' =>
    array (
      0 => 'nsv',
    ),
    'video/x-ogm+ogg' =>
    array (
      0 => 'ogm',
    ),
    'video/x-sgi-movie' =>
    array (
      0 => 'movie',
    ),
    'video/x-smv' =>
    array (
      0 => 'smv',
    ),
    'video/x-theora+ogg' =>
    array (
      0 => 'ogg',
    ),
    'x-conference/x-cooltalk' =>
    array (
      0 => 'ice',
    ),
    'x-epoc/x-sisx-app' =>
    array (
      0 => 'sisx',
    ),
  ),
  'extensions' =>
  array (
    '32x' =>
    array (
      0 => 'application/x-genesis-32x-rom',
    ),
    '3dml' =>
    array (
      0 => 'text/vnd.in3d.3dml',
    ),
    '3ds' =>
    array (
      0 => 'image/x-3ds',
    ),
    '3g2' =>
    array (
      0 => 'video/3gpp2',
    ),
    '3ga' =>
    array (
      0 => 'video/3gpp',
    ),
    '3gp' =>
    array (
      0 => 'video/3gpp',
    ),
    '3gp2' =>
    array (
      0 => 'video/3gpp2',
    ),
    '3gpp' =>
    array (
      0 => 'video/3gpp',
    ),
    '3gpp2' =>
    array (
      0 => 'video/3gpp2',
    ),
    '7z' =>
    array (
      0 => 'application/x-7z-compressed',
    ),
    'a' =>
    array (
      0 => 'application/x-archive',
    ),
    'a26' =>
    array (
      0 => 'application/x-atari-2600-rom',
    ),
    'a78' =>
    array (
      0 => 'application/x-atari-7800-rom',
    ),
    'aa' =>
    array (
      0 => 'audio/x-pn-audibleaudio',
    ),
    'aab' =>
    array (
      0 => 'application/x-authorware-bin',
    ),
    'aac' =>
    array (
      0 => 'audio/x-aac',
      1 => 'audio/aac',
    ),
    'aam' =>
    array (
      0 => 'application/x-authorware-map',
    ),
    'aas' =>
    array (
      0 => 'application/x-authorware-seg',
    ),
    'aax' =>
    array (
      0 => 'audio/x-pn-audibleaudio',
    ),
    'abw' =>
    array (
      0 => 'application/x-abiword',
    ),
    'abw.crashed' =>
    array (
      0 => 'application/x-abiword',
    ),
    'abw.gz' =>
    array (
      0 => 'application/x-abiword',
    ),
    'ac' =>
    array (
      0 => 'application/pkix-attr-cert',
    ),
    'ac3' =>
    array (
      0 => 'audio/ac3',
    ),
    'acc' =>
    array (
      0 => 'application/vnd.americandynamics.acc',
    ),
    'ace' =>
    array (
      0 => 'application/x-ace-compressed',
      1 => 'application/x-ace',
    ),
    'acu' =>
    array (
      0 => 'application/vnd.acucobol',
    ),
    'acutc' =>
    array (
      0 => 'application/vnd.acucorp',
    ),
    'adb' =>
    array (
      0 => 'text/x-adasrc',
    ),
    'adf' =>
    array (
      0 => 'application/x-amiga-disk-format',
    ),
    'adp' =>
    array (
      0 => 'audio/adpcm',
    ),
    'ads' =>
    array (
      0 => 'text/x-adasrc',
    ),
    'adts' =>
    array (
      0 => 'audio/aac',
    ),
    'aep' =>
    array (
      0 => 'application/vnd.audiograph',
    ),
    'afm' =>
    array (
      0 => 'application/x-font-type1',
      1 => 'application/x-font-afm',
    ),
    'afp' =>
    array (
      0 => 'application/vnd.ibm.modcap',
    ),
    'ag' =>
    array (
      0 => 'image/x-applix-graphics',
    ),
    'agb' =>
    array (
      0 => 'application/x-gba-rom',
    ),
    'ahead' =>
    array (
      0 => 'application/vnd.ahead.space',
    ),
    'ai' =>
    array (
      0 => 'application/postscript',
      1 => 'application/illustrator',
    ),
    'aif' =>
    array (
      0 => 'audio/x-aiff',
    ),
    'aifc' =>
    array (
      0 => 'audio/x-aiff',
      1 => 'audio/x-aifc',
    ),
    'aiff' =>
    array (
      0 => 'audio/x-aiff',
    ),
    'aiffc' =>
    array (
      0 => 'audio/x-aifc',
    ),
    'air' =>
    array (
      0 => 'application/vnd.adobe.air-application-installer-package+zip',
    ),
    'ait' =>
    array (
      0 => 'application/vnd.dvb.ait',
    ),
    'al' =>
    array (
      0 => 'application/x-perl',
    ),
    'alz' =>
    array (
      0 => 'application/x-alz',
    ),
    'ami' =>
    array (
      0 => 'application/vnd.amiga.ami',
    ),
    'amr' =>
    array (
      0 => 'audio/amr',
    ),
    'amz' =>
    array (
      0 => 'audio/x-amzxml',
    ),
    'ani' =>
    array (
      0 => 'application/x-navi-animation',
    ),
    'anim[1-9j]' =>
    array (
      0 => 'video/x-anim',
    ),
    'anx' =>
    array (
      0 => 'application/annodex',
    ),
    'ape' =>
    array (
      0 => 'audio/x-ape',
    ),
    'apk' =>
    array (
      0 => 'application/vnd.android.package-archive',
    ),
    'appcache' =>
    array (
      0 => 'text/cache-manifest',
    ),
    'appimage' =>
    array (
      0 => 'application/x-iso9660-appimage',
      1 => 'application/vnd.appimage',
    ),
    'application' =>
    array (
      0 => 'application/x-ms-application',
    ),
    'apr' =>
    array (
      0 => 'application/vnd.lotus-approach',
    ),
    'ar' =>
    array (
      0 => 'application/x-archive',
    ),
    'arc' =>
    array (
      0 => 'application/x-freearc',
    ),
    'arj' =>
    array (
      0 => 'application/x-arj',
    ),
    'arw' =>
    array (
      0 => 'image/x-sony-arw',
    ),
    'as' =>
    array (
      0 => 'application/x-applix-spreadsheet',
    ),
    'asc' =>
    array (
      0 => 'application/pgp-signature',
      1 => 'application/pgp-encrypted',
      2 => 'application/pgp-keys',
      3 => 'text/plain',
    ),
    'asf' =>
    array (
      0 => 'video/x-ms-asf',
      1 => 'application/vnd.ms-asf',
    ),
    'asm' =>
    array (
      0 => 'text/x-asm',
    ),
    'aso' =>
    array (
      0 => 'application/vnd.accpac.simply.aso',
    ),
    'asp' =>
    array (
      0 => 'application/x-asp',
    ),
    'ass' =>
    array (
      0 => 'text/x-ssa',
      1 => 'audio/aac',
    ),
    'asx' =>
    array (
      0 => 'video/x-ms-asf',
      1 => 'audio/x-ms-asx',
    ),
    'atc' =>
    array (
      0 => 'application/vnd.acucorp',
    ),
    'atom' =>
    array (
      0 => 'application/atom+xml',
    ),
    'atomcat' =>
    array (
      0 => 'application/atomcat+xml',
    ),
    'atomsvc' =>
    array (
      0 => 'application/atomsvc+xml',
    ),
    'atx' =>
    array (
      0 => 'application/vnd.antix.game-component',
    ),
    'au' =>
    array (
      0 => 'audio/basic',
    ),
    'automount' =>
    array (
      0 => 'text/x-systemd-unit',
    ),
    'avf' =>
    array (
      0 => 'video/x-msvideo',
    ),
    'avi' =>
    array (
      0 => 'video/x-msvideo',
    ),
    'aw' =>
    array (
      0 => 'application/applixware',
      1 => 'application/x-applix-word',
    ),
    'awb' =>
    array (
      0 => 'audio/amr-wb',
    ),
    'awk' =>
    array (
      0 => 'application/x-awk',
    ),
    'axa' =>
    array (
      0 => 'audio/annodex',
    ),
    'axv' =>
    array (
      0 => 'video/annodex',
    ),
    'azf' =>
    array (
      0 => 'application/vnd.airzip.filesecure.azf',
    ),
    'azs' =>
    array (
      0 => 'application/vnd.airzip.filesecure.azs',
    ),
    'azw' =>
    array (
      0 => 'application/vnd.amazon.ebook',
    ),
    'bak' =>
    array (
      0 => 'application/x-trash',
    ),
    'bat' =>
    array (
      0 => 'application/x-msdownload',
    ),
    'bcpio' =>
    array (
      0 => 'application/x-bcpio',
    ),
    'bdf' =>
    array (
      0 => 'application/x-font-bdf',
    ),
    'bdm' =>
    array (
      0 => 'application/vnd.syncml.dm+wbxml',
      1 => 'video/mp2t',
    ),
    'bdmv' =>
    array (
      0 => 'video/mp2t',
    ),
    'bed' =>
    array (
      0 => 'application/vnd.realvnc.bed',
    ),
    'bh2' =>
    array (
      0 => 'application/vnd.fujitsu.oasysprs',
    ),
    'bib' =>
    array (
      0 => 'text/x-bibtex',
    ),
    'bin' =>
    array (
      0 => 'application/octet-stream',
      1 => 'application/x-sega-cd-rom',
      2 => 'application/x-saturn-rom',
    ),
    'blb' =>
    array (
      0 => 'application/x-blorb',
    ),
    'blend' =>
    array (
      0 => 'application/x-blender',
    ),
    'blender' =>
    array (
      0 => 'application/x-blender',
    ),
    'blorb' =>
    array (
      0 => 'application/x-blorb',
    ),
    'bmi' =>
    array (
      0 => 'application/vnd.bmi',
    ),
    'bmp' =>
    array (
      0 => 'image/bmp',
    ),
    'book' =>
    array (
      0 => 'application/vnd.framemaker',
    ),
    'box' =>
    array (
      0 => 'application/vnd.previewsystems.box',
    ),
    'boz' =>
    array (
      0 => 'application/x-bzip2',
    ),
    'bpk' =>
    array (
      0 => 'application/octet-stream',
    ),
    'bsdiff' =>
    array (
      0 => 'application/x-bsdiff',
    ),
    'btif' =>
    array (
      0 => 'image/prs.btif',
    ),
    'bz' =>
    array (
      0 => 'application/x-bzip',
    ),
    'bz2' =>
    array (
      0 => 'application/x-bzip2',
      1 => 'application/x-bzip',
    ),
    'c' =>
    array (
      0 => 'text/x-c',
      1 => 'text/x-c++src',
      2 => 'text/x-csrc',
    ),
    'c++' =>
    array (
      0 => 'text/x-c++src',
    ),
    'c11amc' =>
    array (
      0 => 'application/vnd.cluetrust.cartomobile-config',
    ),
    'c11amz' =>
    array (
      0 => 'application/vnd.cluetrust.cartomobile-config-pkg',
    ),
    'c4d' =>
    array (
      0 => 'application/vnd.clonk.c4group',
    ),
    'c4f' =>
    array (
      0 => 'application/vnd.clonk.c4group',
    ),
    'c4g' =>
    array (
      0 => 'application/vnd.clonk.c4group',
    ),
    'c4p' =>
    array (
      0 => 'application/vnd.clonk.c4group',
    ),
    'c4u' =>
    array (
      0 => 'application/vnd.clonk.c4group',
    ),
    'cab' =>
    array (
      0 => 'application/vnd.ms-cab-compressed',
    ),
    'caf' =>
    array (
      0 => 'audio/x-caf',
    ),
    'cap' =>
    array (
      0 => 'application/vnd.tcpdump.pcap',
    ),
    'car' =>
    array (
      0 => 'application/vnd.curl.car',
    ),
    'cat' =>
    array (
      0 => 'application/vnd.ms-pki.seccat',
    ),
    'cb7' =>
    array (
      0 => 'application/x-cbr',
      1 => 'application/x-cb7',
    ),
    'cba' =>
    array (
      0 => 'application/x-cbr',
    ),
    'cbl' =>
    array (
      0 => 'text/x-cobol',
    ),
    'cbr' =>
    array (
      0 => 'application/x-cbr',
      1 => 'application/vnd.comicbook-rar',
    ),
    'cbt' =>
    array (
      0 => 'application/x-cbr',
      1 => 'application/x-cbt',
    ),
    'cbz' =>
    array (
      0 => 'application/x-cbr',
      1 => 'application/vnd.comicbook+zip',
    ),
    'cc' =>
    array (
      0 => 'text/x-c',
      1 => 'text/x-c++src',
    ),
    'ccmx' =>
    array (
      0 => 'application/x-ccmx',
    ),
    'cct' =>
    array (
      0 => 'application/x-director',
    ),
    'ccxml' =>
    array (
      0 => 'application/ccxml+xml',
    ),
    'cdbcmsg' =>
    array (
      0 => 'application/vnd.contact.cmsg',
    ),
    'cdf' =>
    array (
      0 => 'application/x-netcdf',
    ),
    'cdkey' =>
    array (
      0 => 'application/vnd.mediastation.cdkey',
    ),
    'cdmia' =>
    array (
      0 => 'application/cdmi-capability',
    ),
    'cdmic' =>
    array (
      0 => 'application/cdmi-container',
    ),
    'cdmid' =>
    array (
      0 => 'application/cdmi-domain',
    ),
    'cdmio' =>
    array (
      0 => 'application/cdmi-object',
    ),
    'cdmiq' =>
    array (
      0 => 'application/cdmi-queue',
    ),
    'cdr' =>
    array (
      0 => 'application/vnd.corel-draw',
    ),
    'cdx' =>
    array (
      0 => 'chemical/x-cdx',
    ),
    'cdxml' =>
    array (
      0 => 'application/vnd.chemdraw+xml',
    ),
    'cdy' =>
    array (
      0 => 'application/vnd.cinderella',
    ),
    'cer' =>
    array (
      0 => 'application/pkix-cert',
    ),
    'cert' =>
    array (
      0 => 'application/x-x509-ca-cert',
    ),
    'cfs' =>
    array (
      0 => 'application/x-cfs-compressed',
    ),
    'cgb' =>
    array (
      0 => 'application/x-gameboy-color-rom',
    ),
    'cgm' =>
    array (
      0 => 'image/cgm',
    ),
    'chat' =>
    array (
      0 => 'application/x-chat',
    ),
    'chm' =>
    array (
      0 => 'application/vnd.ms-htmlhelp',
    ),
    'chrt' =>
    array (
      0 => 'application/vnd.kde.kchart',
      1 => 'application/x-kchart',
    ),
    'cif' =>
    array (
      0 => 'chemical/x-cif',
    ),
    'cii' =>
    array (
      0 => 'application/vnd.anser-web-certificate-issue-initiation',
    ),
    'cil' =>
    array (
      0 => 'application/vnd.ms-artgalry',
    ),
    'cl' =>
    array (
      0 => 'text/x-opencl-src',
    ),
    'cla' =>
    array (
      0 => 'application/vnd.claymore',
    ),
    'class' =>
    array (
      0 => 'application/java-vm',
      1 => 'application/x-java',
    ),
    'clkk' =>
    array (
      0 => 'application/vnd.crick.clicker.keyboard',
    ),
    'clkp' =>
    array (
      0 => 'application/vnd.crick.clicker.palette',
    ),
    'clkt' =>
    array (
      0 => 'application/vnd.crick.clicker.template',
    ),
    'clkw' =>
    array (
      0 => 'application/vnd.crick.clicker.wordbank',
    ),
    'clkx' =>
    array (
      0 => 'application/vnd.crick.clicker',
    ),
    'clp' =>
    array (
      0 => 'application/x-msclip',
    ),
    'clpi' =>
    array (
      0 => 'video/mp2t',
    ),
    'cls' =>
    array (
      0 => 'text/x-tex',
    ),
    'cmake' =>
    array (
      0 => 'text/x-cmake',
    ),
    'cmc' =>
    array (
      0 => 'application/vnd.cosmocaller',
    ),
    'cmdf' =>
    array (
      0 => 'chemical/x-cmdf',
    ),
    'cml' =>
    array (
      0 => 'chemical/x-cml',
    ),
    'cmp' =>
    array (
      0 => 'application/vnd.yellowriver-custom-menu',
    ),
    'cmx' =>
    array (
      0 => 'image/x-cmx',
    ),
    'cob' =>
    array (
      0 => 'text/x-cobol',
    ),
    'cod' =>
    array (
      0 => 'application/vnd.rim.cod',
    ),
    'coffee' =>
    array (
      0 => 'application/vnd.coffeescript',
    ),
    'com' =>
    array (
      0 => 'application/x-msdownload',
    ),
    'conf' =>
    array (
      0 => 'text/plain',
    ),
    'cpi' =>
    array (
      0 => 'video/mp2t',
    ),
    'cpio' =>
    array (
      0 => 'application/x-cpio',
    ),
    'cpio.gz' =>
    array (
      0 => 'application/x-cpio-compressed',
    ),
    'cpp' =>
    array (
      0 => 'text/x-c',
      1 => 'text/x-c++src',
    ),
    'cpt' =>
    array (
      0 => 'application/mac-compactpro',
    ),
    'cr2' =>
    array (
      0 => 'image/x-canon-cr2',
    ),
    'crd' =>
    array (
      0 => 'application/x-mscardfile',
    ),
    'crdownload' =>
    array (
      0 => 'application/x-partial-download',
    ),
    'crl' =>
    array (
      0 => 'application/pkix-crl',
    ),
    'crt' =>
    array (
      0 => 'application/x-x509-ca-cert',
    ),
    'crw' =>
    array (
      0 => 'image/x-canon-crw',
    ),
    'cryptonote' =>
    array (
      0 => 'application/vnd.rig.cryptonote',
    ),
    'cs' =>
    array (
      0 => 'text/x-csharp',
    ),
    'csh' =>
    array (
      0 => 'application/x-csh',
    ),
    'csml' =>
    array (
      0 => 'chemical/x-csml',
    ),
    'csp' =>
    array (
      0 => 'application/vnd.commonspace',
    ),
    'css' =>
    array (
      0 => 'text/css',
    ),
    'cst' =>
    array (
      0 => 'application/x-director',
    ),
    'csv' =>
    array (
      0 => 'text/csv',
    ),
    'csvs' =>
    array (
      0 => 'text/csv-schema',
    ),
    'cu' =>
    array (
      0 => 'application/cu-seeme',
    ),
    'cue' =>
    array (
      0 => 'application/x-cue',
    ),
    'cur' =>
    array (
      0 => 'image/x-win-bitmap',
    ),
    'curl' =>
    array (
      0 => 'text/vnd.curl',
    ),
    'cww' =>
    array (
      0 => 'application/prs.cww',
    ),
    'cxt' =>
    array (
      0 => 'application/x-director',
    ),
    'cxx' =>
    array (
      0 => 'text/x-c',
      1 => 'text/x-c++src',
    ),
    'd' =>
    array (
      0 => 'text/x-dsrc',
    ),
    'dae' =>
    array (
      0 => 'model/vnd.collada+xml',
    ),
    'daf' =>
    array (
      0 => 'application/vnd.mobius.daf',
    ),
    'dar' =>
    array (
      0 => 'application/x-dar',
    ),
    'dart' =>
    array (
      0 => 'application/vnd.dart',
    ),
    'dataless' =>
    array (
      0 => 'application/vnd.fdsn.seed',
    ),
    'davmount' =>
    array (
      0 => 'application/davmount+xml',
    ),
    'dbf' =>
    array (
      0 => 'application/x-dbf',
    ),
    'dbk' =>
    array (
      0 => 'application/docbook+xml',
      1 => 'application/x-docbook+xml',
    ),
    'dc' =>
    array (
      0 => 'application/x-dc-rom',
    ),
    'dcl' =>
    array (
      0 => 'text/x-dcl',
    ),
    'dcm' =>
    array (
      0 => 'application/dicom',
    ),
    'dcr' =>
    array (
      0 => 'application/x-director',
      1 => 'image/x-kodak-dcr',
    ),
    'dcurl' =>
    array (
      0 => 'text/vnd.curl.dcurl',
    ),
    'dd2' =>
    array (
      0 => 'application/vnd.oma.dd2+xml',
    ),
    'ddd' =>
    array (
      0 => 'application/vnd.fujixerox.ddd',
    ),
    'dds' =>
    array (
      0 => 'image/x-dds',
    ),
    'deb' =>
    array (
      0 => 'application/x-debian-package',
      1 => 'application/vnd.debian.binary-package',
    ),
    'def' =>
    array (
      0 => 'text/plain',
    ),
    'deploy' =>
    array (
      0 => 'application/octet-stream',
    ),
    'der' =>
    array (
      0 => 'application/x-x509-ca-cert',
    ),
    'desktop' =>
    array (
      0 => 'application/x-desktop',
    ),
    'device' =>
    array (
      0 => 'text/x-systemd-unit',
    ),
    'dfac' =>
    array (
      0 => 'application/vnd.dreamfactory',
    ),
    'dgc' =>
    array (
      0 => 'application/x-dgc-compressed',
    ),
    'di' =>
    array (
      0 => 'text/x-dsrc',
    ),
    'dia' =>
    array (
      0 => 'application/x-dia-diagram',
    ),
    'dib' =>
    array (
      0 => 'image/bmp',
    ),
    'dic' =>
    array (
      0 => 'text/x-c',
    ),
    'diff' =>
    array (
      0 => 'text/x-patch',
    ),
    'dir' =>
    array (
      0 => 'application/x-director',
    ),
    'dis' =>
    array (
      0 => 'application/vnd.mobius.dis',
    ),
    'dist' =>
    array (
      0 => 'application/octet-stream',
    ),
    'distz' =>
    array (
      0 => 'application/octet-stream',
    ),
    'divx' =>
    array (
      0 => 'video/x-msvideo',
    ),
    'djv' =>
    array (
      0 => 'image/vnd.djvu',
      1 => 'image/vnd.djvu+multipage',
    ),
    'djvu' =>
    array (
      0 => 'image/vnd.djvu',
      1 => 'image/vnd.djvu+multipage',
    ),
    'dll' =>
    array (
      0 => 'application/x-msdownload',
    ),
    'dmg' =>
    array (
      0 => 'application/x-apple-diskimage',
    ),
    'dmp' =>
    array (
      0 => 'application/vnd.tcpdump.pcap',
    ),
    'dms' =>
    array (
      0 => 'application/octet-stream',
    ),
    'dna' =>
    array (
      0 => 'application/vnd.dna',
    ),
    'dng' =>
    array (
      0 => 'image/x-adobe-dng',
    ),
    'doc' =>
    array (
      0 => 'application/msword',
    ),
    'docbook' =>
    array (
      0 => 'application/x-docbook+xml',
    ),
    'docm' =>
    array (
      0 => 'application/vnd.ms-word.document.macroenabled.12',
    ),
    'docx' =>
    array (
      0 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    ),
    'dot' =>
    array (
      0 => 'application/msword',
      1 => 'application/msword-template',
      2 => 'text/vnd.graphviz',
    ),
    'dotm' =>
    array (
      0 => 'application/vnd.ms-word.template.macroenabled.12',
    ),
    'dotx' =>
    array (
      0 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
    ),
    'dp' =>
    array (
      0 => 'application/vnd.osgi.dp',
    ),
    'dpg' =>
    array (
      0 => 'application/vnd.dpgraph',
    ),
    'dra' =>
    array (
      0 => 'audio/vnd.dra',
    ),
    'dsc' =>
    array (
      0 => 'text/prs.lines.tag',
    ),
    'dsl' =>
    array (
      0 => 'text/x-dsl',
    ),
    'dssc' =>
    array (
      0 => 'application/dssc+der',
    ),
    'dtb' =>
    array (
      0 => 'application/x-dtbook+xml',
    ),
    'dtd' =>
    array (
      0 => 'application/xml-dtd',
    ),
    'dts' =>
    array (
      0 => 'audio/vnd.dts',
    ),
    'dtshd' =>
    array (
      0 => 'audio/vnd.dts.hd',
    ),
    'dtx' =>
    array (
      0 => 'text/x-tex',
    ),
    'dump' =>
    array (
      0 => 'application/octet-stream',
    ),
    'dv' =>
    array (
      0 => 'video/dv',
    ),
    'dvb' =>
    array (
      0 => 'video/vnd.dvb.file',
    ),
    'dvi' =>
    array (
      0 => 'application/x-dvi',
    ),
    'dvi.bz2' =>
    array (
      0 => 'application/x-bzdvi',
    ),
    'dvi.gz' =>
    array (
      0 => 'application/x-gzdvi',
    ),
    'dwf' =>
    array (
      0 => 'model/vnd.dwf',
    ),
    'dwg' =>
    array (
      0 => 'image/vnd.dwg',
    ),
    'dxf' =>
    array (
      0 => 'image/vnd.dxf',
    ),
    'dxp' =>
    array (
      0 => 'application/vnd.spotfire.dxp',
    ),
    'dxr' =>
    array (
      0 => 'application/x-director',
    ),
    'e' =>
    array (
      0 => 'text/x-eiffel',
    ),
    'ecelp4800' =>
    array (
      0 => 'audio/vnd.nuera.ecelp4800',
    ),
    'ecelp7470' =>
    array (
      0 => 'audio/vnd.nuera.ecelp7470',
    ),
    'ecelp9600' =>
    array (
      0 => 'audio/vnd.nuera.ecelp9600',
    ),
    'ecma' =>
    array (
      0 => 'application/ecmascript',
    ),
    'edm' =>
    array (
      0 => 'application/vnd.novadigm.edm',
    ),
    'edx' =>
    array (
      0 => 'application/vnd.novadigm.edx',
    ),
    'efif' =>
    array (
      0 => 'application/vnd.picsel',
    ),
    'egon' =>
    array (
      0 => 'application/x-egon',
    ),
    'ei6' =>
    array (
      0 => 'application/vnd.pg.osasli',
    ),
    'eif' =>
    array (
      0 => 'text/x-eiffel',
    ),
    'el' =>
    array (
      0 => 'text/x-emacs-lisp',
    ),
    'elc' =>
    array (
      0 => 'application/octet-stream',
    ),
    'emf' =>
    array (
      0 => 'application/x-msmetafile',
      1 => 'image/emf',
    ),
    'eml' =>
    array (
      0 => 'message/rfc822',
    ),
    'emma' =>
    array (
      0 => 'application/emma+xml',
    ),
    'emp' =>
    array (
      0 => 'application/vnd.emusic-emusic_package',
    ),
    'emz' =>
    array (
      0 => 'application/x-msmetafile',
    ),
    'ent' =>
    array (
      0 => 'application/xml-external-parsed-entity',
    ),
    'eol' =>
    array (
      0 => 'audio/vnd.digital-winds',
    ),
    'eot' =>
    array (
      0 => 'application/vnd.ms-fontobject',
    ),
    'eps' =>
    array (
      0 => 'application/postscript',
      1 => 'image/x-eps',
    ),
    'eps.bz2' =>
    array (
      0 => 'image/x-bzeps',
    ),
    'eps.gz' =>
    array (
      0 => 'image/x-gzeps',
    ),
    'epsf' =>
    array (
      0 => 'image/x-eps',
    ),
    'epsf.bz2' =>
    array (
      0 => 'image/x-bzeps',
    ),
    'epsf.gz' =>
    array (
      0 => 'image/x-gzeps',
    ),
    'epsi' =>
    array (
      0 => 'image/x-eps',
    ),
    'epsi.bz2' =>
    array (
      0 => 'image/x-bzeps',
    ),
    'epsi.gz' =>
    array (
      0 => 'image/x-gzeps',
    ),
    'epub' =>
    array (
      0 => 'application/epub+zip',
    ),
    'erl' =>
    array (
      0 => 'text/x-erlang',
    ),
    'es' =>
    array (
      0 => 'application/ecmascript',
    ),
    'es3' =>
    array (
      0 => 'application/vnd.eszigno3+xml',
    ),
    'esa' =>
    array (
      0 => 'application/vnd.osgi.subsystem',
    ),
    'esf' =>
    array (
      0 => 'application/vnd.epson.esf',
    ),
    'et3' =>
    array (
      0 => 'application/vnd.eszigno3+xml',
    ),
    'etheme' =>
    array (
      0 => 'application/x-e-theme',
    ),
    'etx' =>
    array (
      0 => 'text/x-setext',
    ),
    'eva' =>
    array (
      0 => 'application/x-eva',
    ),
    'evy' =>
    array (
      0 => 'application/x-envoy',
    ),
    'exe' =>
    array (
      0 => 'application/x-msdownload',
      1 => 'application/x-ms-dos-executable',
    ),
    'exi' =>
    array (
      0 => 'application/exi',
    ),
    'exr' =>
    array (
      0 => 'image/x-exr',
    ),
    'ext' =>
    array (
      0 => 'application/vnd.novadigm.ext',
    ),
    'ez' =>
    array (
      0 => 'application/andrew-inset',
    ),
    'ez2' =>
    array (
      0 => 'application/vnd.ezpix-album',
    ),
    'ez3' =>
    array (
      0 => 'application/vnd.ezpix-package',
    ),
    'f' =>
    array (
      0 => 'text/x-fortran',
    ),
    'f4a' =>
    array (
      0 => 'audio/mp4',
    ),
    'f4b' =>
    array (
      0 => 'audio/x-m4b',
    ),
    'f4v' =>
    array (
      0 => 'video/x-f4v',
      1 => 'video/mp4',
    ),
    'f77' =>
    array (
      0 => 'text/x-fortran',
    ),
    'f90' =>
    array (
      0 => 'text/x-fortran',
    ),
    'f95' =>
    array (
      0 => 'text/x-fortran',
    ),
    'fb2' =>
    array (
      0 => 'application/x-fictionbook+xml',
    ),
    'fb2.zip' =>
    array (
      0 => 'application/x-zip-compressed-fb2',
    ),
    'fbs' =>
    array (
      0 => 'image/vnd.fastbidsheet',
    ),
    'fcdt' =>
    array (
      0 => 'application/vnd.adobe.formscentral.fcdt',
    ),
    'fcs' =>
    array (
      0 => 'application/vnd.isac.fcs',
    ),
    'fd' =>
    array (
      0 => 'application/x-raw-floppy-disk-image',
    ),
    'fdf' =>
    array (
      0 => 'application/vnd.fdf',
    ),
    'fds' =>
    array (
      0 => 'application/x-fds-disk',
    ),
    'fe_launch' =>
    array (
      0 => 'application/vnd.denovo.fcselayout-link',
    ),
    'feature' =>
    array (
      0 => 'text/x-gherkin',
    ),
    'fg5' =>
    array (
      0 => 'application/vnd.fujitsu.oasysgp',
    ),
    'fgd' =>
    array (
      0 => 'application/x-director',
    ),
    'fh' =>
    array (
      0 => 'image/x-freehand',
    ),
    'fh4' =>
    array (
      0 => 'image/x-freehand',
    ),
    'fh5' =>
    array (
      0 => 'image/x-freehand',
    ),
    'fh7' =>
    array (
      0 => 'image/x-freehand',
    ),
    'fhc' =>
    array (
      0 => 'image/x-freehand',
    ),
    'fig' =>
    array (
      0 => 'application/x-xfig',
      1 => 'image/x-xfig',
    ),
    'fits' =>
    array (
      0 => 'image/fits',
    ),
    'fl' =>
    array (
      0 => 'application/x-fluid',
    ),
    'flac' =>
    array (
      0 => 'audio/x-flac',
      1 => 'audio/flac',
    ),
    'flatpak' =>
    array (
      0 => 'application/vnd.flatpak',
    ),
    'flatpakref' =>
    array (
      0 => 'application/vnd.flatpak.ref',
    ),
    'flatpakrepo' =>
    array (
      0 => 'application/vnd.flatpak.repo',
    ),
    'flc' =>
    array (
      0 => 'video/x-flic',
    ),
    'fli' =>
    array (
      0 => 'video/x-fli',
      1 => 'video/x-flic',
    ),
    'flo' =>
    array (
      0 => 'application/vnd.micrografx.flo',
    ),
    'flv' =>
    array (
      0 => 'video/x-flv',
    ),
    'flw' =>
    array (
      0 => 'application/vnd.kde.kivio',
      1 => 'application/x-kivio',
    ),
    'flx' =>
    array (
      0 => 'text/vnd.fmi.flexstor',
    ),
    'fly' =>
    array (
      0 => 'text/vnd.fly',
    ),
    'fm' =>
    array (
      0 => 'application/vnd.framemaker',
    ),
    'fnc' =>
    array (
      0 => 'application/vnd.frogans.fnc',
    ),
    'fo' =>
    array (
      0 => 'text/x-xslfo',
    ),
    'fodg' =>
    array (
      0 => 'application/vnd.oasis.opendocument.graphics-flat-xml',
    ),
    'fodp' =>
    array (
      0 => 'application/vnd.oasis.opendocument.presentation-flat-xml',
    ),
    'fods' =>
    array (
      0 => 'application/vnd.oasis.opendocument.spreadsheet-flat-xml',
    ),
    'fodt' =>
    array (
      0 => 'application/vnd.oasis.opendocument.text-flat-xml',
    ),
    'for' =>
    array (
      0 => 'text/x-fortran',
    ),
    'fpx' =>
    array (
      0 => 'image/vnd.fpx',
    ),
    'frame' =>
    array (
      0 => 'application/vnd.framemaker',
    ),
    'fsc' =>
    array (
      0 => 'application/vnd.fsc.weblaunch',
    ),
    'fst' =>
    array (
      0 => 'image/vnd.fst',
    ),
    'ftc' =>
    array (
      0 => 'application/vnd.fluxtime.clip',
    ),
    'fti' =>
    array (
      0 => 'application/vnd.anser-web-funds-transfer-initiation',
    ),
    'fvt' =>
    array (
      0 => 'video/vnd.fvt',
    ),
    'fxm' =>
    array (
      0 => 'video/x-javafx',
    ),
    'fxp' =>
    array (
      0 => 'application/vnd.adobe.fxp',
    ),
    'fxpl' =>
    array (
      0 => 'application/vnd.adobe.fxp',
    ),
    'fzs' =>
    array (
      0 => 'application/vnd.fuzzysheet',
    ),
    'g2w' =>
    array (
      0 => 'application/vnd.geoplan',
    ),
    'g3' =>
    array (
      0 => 'image/g3fax',
      1 => 'image/fax-g3',
    ),
    'g3w' =>
    array (
      0 => 'application/vnd.geospace',
    ),
    'gac' =>
    array (
      0 => 'application/vnd.groove-account',
    ),
    'gam' =>
    array (
      0 => 'application/x-tads',
    ),
    'gb' =>
    array (
      0 => 'application/x-gameboy-rom',
    ),
    'gba' =>
    array (
      0 => 'application/x-gba-rom',
    ),
    'gbc' =>
    array (
      0 => 'application/x-gameboy-color-rom',
    ),
    'gbr' =>
    array (
      0 => 'application/rpki-ghostbusters',
      1 => 'image/x-gimp-gbr',
    ),
    'gca' =>
    array (
      0 => 'application/x-gca-compressed',
    ),
    'gcode' =>
    array (
      0 => 'text/x.gcode',
    ),
    'gcrd' =>
    array (
      0 => 'text/vcard',
    ),
    'gdl' =>
    array (
      0 => 'model/vnd.gdl',
    ),
    'ged' =>
    array (
      0 => 'application/x-gedcom',
    ),
    'gedcom' =>
    array (
      0 => 'application/x-gedcom',
    ),
    'gem' =>
    array (
      0 => 'application/x-tar',
    ),
    'gen' =>
    array (
      0 => 'application/x-genesis-rom',
    ),
    'geo' =>
    array (
      0 => 'application/vnd.dynageo',
    ),
    'geo.json' =>
    array (
      0 => 'application/geo+json',
    ),
    'geojson' =>
    array (
      0 => 'application/geo+json',
    ),
    'gex' =>
    array (
      0 => 'application/vnd.geometry-explorer',
    ),
    'gf' =>
    array (
      0 => 'application/x-tex-gf',
    ),
    'gg' =>
    array (
      0 => 'application/x-gamegear-rom',
    ),
    'ggb' =>
    array (
      0 => 'application/vnd.geogebra.file',
    ),
    'ggt' =>
    array (
      0 => 'application/vnd.geogebra.tool',
    ),
    'ghf' =>
    array (
      0 => 'application/vnd.groove-help',
    ),
    'gif' =>
    array (
      0 => 'image/gif',
    ),
    'gih' =>
    array (
      0 => 'image/x-gimp-gih',
    ),
    'gim' =>
    array (
      0 => 'application/vnd.groove-identity-message',
    ),
    'glade' =>
    array (
      0 => 'application/x-glade',
    ),
    'gml' =>
    array (
      0 => 'application/gml+xml',
    ),
    'gmo' =>
    array (
      0 => 'application/x-gettext-translation',
    ),
    'gmx' =>
    array (
      0 => 'application/vnd.gmx',
    ),
    'gnc' =>
    array (
      0 => 'application/x-gnucash',
    ),
    'gnd' =>
    array (
      0 => 'application/gnunet-directory',
    ),
    'gnucash' =>
    array (
      0 => 'application/x-gnucash',
    ),
    'gnumeric' =>
    array (
      0 => 'application/x-gnumeric',
    ),
    'gnuplot' =>
    array (
      0 => 'application/x-gnuplot',
    ),
    'go' =>
    array (
      0 => 'text/x-go',
    ),
    'gp' =>
    array (
      0 => 'application/x-gnuplot',
    ),
    'gpg' =>
    array (
      0 => 'application/pgp-encrypted',
      1 => 'application/pgp-keys',
      2 => 'application/pgp-signature',
    ),
    'gph' =>
    array (
      0 => 'application/vnd.flographit',
    ),
    'gplt' =>
    array (
      0 => 'application/x-gnuplot',
    ),
    'gpx' =>
    array (
      0 => 'application/gpx+xml',
    ),
    'gqf' =>
    array (
      0 => 'application/vnd.grafeq',
    ),
    'gqs' =>
    array (
      0 => 'application/vnd.grafeq',
    ),
    'gra' =>
    array (
      0 => 'application/x-graphite',
    ),
    'gram' =>
    array (
      0 => 'application/srgs',
    ),
    'gramps' =>
    array (
      0 => 'application/x-gramps-xml',
    ),
    'gre' =>
    array (
      0 => 'application/vnd.geometry-explorer',
    ),
    'grv' =>
    array (
      0 => 'application/vnd.groove-injector',
    ),
    'grxml' =>
    array (
      0 => 'application/srgs+xml',
    ),
    'gs' =>
    array (
      0 => 'text/x-genie',
    ),
    'gsf' =>
    array (
      0 => 'application/x-font-ghostscript',
      1 => 'application/x-font-type1',
    ),
    'gsm' =>
    array (
      0 => 'audio/x-gsm',
    ),
    'gtar' =>
    array (
      0 => 'application/x-gtar',
      1 => 'application/x-tar',
    ),
    'gtm' =>
    array (
      0 => 'application/vnd.groove-tool-message',
    ),
    'gtw' =>
    array (
      0 => 'model/vnd.gtw',
    ),
    'gv' =>
    array (
      0 => 'text/vnd.graphviz',
    ),
    'gvp' =>
    array (
      0 => 'text/x-google-video-pointer',
    ),
    'gxf' =>
    array (
      0 => 'application/gxf',
    ),
    'gxt' =>
    array (
      0 => 'application/vnd.geonext',
    ),
    'gz' =>
    array (
      0 => 'application/gzip',
    ),
    'h' =>
    array (
      0 => 'text/x-c',
      1 => 'text/x-chdr',
    ),
    'h++' =>
    array (
      0 => 'text/x-c++hdr',
    ),
    'h261' =>
    array (
      0 => 'video/h261',
    ),
    'h263' =>
    array (
      0 => 'video/h263',
    ),
    'h264' =>
    array (
      0 => 'video/h264',
    ),
    'h4' =>
    array (
      0 => 'application/x-hdf',
    ),
    'h5' =>
    array (
      0 => 'application/x-hdf',
    ),
    'hal' =>
    array (
      0 => 'application/vnd.hal+xml',
    ),
    'hbci' =>
    array (
      0 => 'application/vnd.hbci',
    ),
    'hdf' =>
    array (
      0 => 'application/x-hdf',
    ),
    'hdf4' =>
    array (
      0 => 'application/x-hdf',
    ),
    'hdf5' =>
    array (
      0 => 'application/x-hdf',
    ),
    'heic' =>
    array (
      0 => 'image/heif',
    ),
    'heif' =>
    array (
      0 => 'image/heif',
    ),
    'hfe' =>
    array (
      0 => 'application/x-hfe-floppy-image',
    ),
    'hh' =>
    array (
      0 => 'text/x-c',
      1 => 'text/x-c++hdr',
    ),
    'hlp' =>
    array (
      0 => 'application/winhlp',
    ),
    'hp' =>
    array (
      0 => 'text/x-c++hdr',
    ),
    'hpgl' =>
    array (
      0 => 'application/vnd.hp-hpgl',
    ),
    'hpid' =>
    array (
      0 => 'application/vnd.hp-hpid',
    ),
    'hpp' =>
    array (
      0 => 'text/x-c++hdr',
    ),
    'hps' =>
    array (
      0 => 'application/vnd.hp-hps',
    ),
    'hqx' =>
    array (
      0 => 'application/mac-binhex40',
    ),
    'hs' =>
    array (
      0 => 'text/x-haskell',
    ),
    'htke' =>
    array (
      0 => 'application/vnd.kenameaapp',
    ),
    'htm' =>
    array (
      0 => 'text/html',
    ),
    'html' =>
    array (
      0 => 'text/html',
    ),
    'hvd' =>
    array (
      0 => 'application/vnd.yamaha.hv-dic',
    ),
    'hvp' =>
    array (
      0 => 'application/vnd.yamaha.hv-voice',
    ),
    'hvs' =>
    array (
      0 => 'application/vnd.yamaha.hv-script',
    ),
    'hwp' =>
    array (
      0 => 'application/x-hwp',
    ),
    'hwt' =>
    array (
      0 => 'application/x-hwt',
    ),
    'hxx' =>
    array (
      0 => 'text/x-c++hdr',
    ),
    'i2g' =>
    array (
      0 => 'application/vnd.intergeo',
    ),
    'ica' =>
    array (
      0 => 'application/x-ica',
    ),
    'icb' =>
    array (
      0 => 'image/x-tga',
    ),
    'icc' =>
    array (
      0 => 'application/vnd.iccprofile',
    ),
    'ice' =>
    array (
      0 => 'x-conference/x-cooltalk',
    ),
    'icm' =>
    array (
      0 => 'application/vnd.iccprofile',
    ),
    'icns' =>
    array (
      0 => 'image/x-icns',
    ),
    'ico' =>
    array (
      0 => 'image/x-icon',
      1 => 'image/vnd.microsoft.icon',
    ),
    'ics' =>
    array (
      0 => 'text/calendar',
    ),
    'idl' =>
    array (
      0 => 'text/x-idl',
    ),
    'ief' =>
    array (
      0 => 'image/ief',
    ),
    'ifb' =>
    array (
      0 => 'text/calendar',
    ),
    'iff' =>
    array (
      0 => 'image/x-ilbm',
    ),
    'ifm' =>
    array (
      0 => 'application/vnd.shana.informed.formdata',
    ),
    'iges' =>
    array (
      0 => 'model/iges',
    ),
    'igl' =>
    array (
      0 => 'application/vnd.igloader',
    ),
    'igm' =>
    array (
      0 => 'application/vnd.insors.igm',
    ),
    'igs' =>
    array (
      0 => 'model/iges',
    ),
    'igx' =>
    array (
      0 => 'application/vnd.micrografx.igx',
    ),
    'iif' =>
    array (
      0 => 'application/vnd.shana.informed.interchange',
    ),
    'ilbm' =>
    array (
      0 => 'image/x-ilbm',
    ),
    'ime' =>
    array (
      0 => 'text/x-imelody',
    ),
    'img' =>
    array (
      0 => 'application/x-raw-disk-image',
    ),
    'img.xz' =>
    array (
      0 => 'application/x-raw-disk-image-xz-compressed',
    ),
    'imp' =>
    array (
      0 => 'application/vnd.accpac.simply.imp',
    ),
    'ims' =>
    array (
      0 => 'application/vnd.ms-ims',
    ),
    'imy' =>
    array (
      0 => 'text/x-imelody',
    ),
    'in' =>
    array (
      0 => 'text/plain',
    ),
    'ink' =>
    array (
      0 => 'application/inkml+xml',
    ),
    'inkml' =>
    array (
      0 => 'application/inkml+xml',
    ),
    'ins' =>
    array (
      0 => 'text/x-tex',
    ),
    'install' =>
    array (
      0 => 'application/x-install-instructions',
    ),
    'iota' =>
    array (
      0 => 'application/vnd.astraea-software.iota',
    ),
    'ipfix' =>
    array (
      0 => 'application/ipfix',
    ),
    'ipk' =>
    array (
      0 => 'application/vnd.shana.informed.package',
    ),
    'iptables' =>
    array (
      0 => 'text/x-iptables',
    ),
    'ipynb' =>
    array (
      0 => 'application/x-ipynb+json',
    ),
    'irm' =>
    array (
      0 => 'application/vnd.ibm.rights-management',
    ),
    'irp' =>
    array (
      0 => 'application/vnd.irepository.package+xml',
    ),
    'iso' =>
    array (
      0 => 'application/x-iso9660-image',
      1 => 'application/x-cd-image',
      2 => 'application/x-sega-cd-rom',
      3 => 'application/x-saturn-rom',
      4 => 'application/x-wii-rom',
      5 => 'application/x-gamecube-rom',
    ),
    'iso9660' =>
    array (
      0 => 'application/x-cd-image',
    ),
    'it' =>
    array (
      0 => 'audio/x-it',
    ),
    'it87' =>
    array (
      0 => 'application/x-it87',
    ),
    'itp' =>
    array (
      0 => 'application/vnd.shana.informed.formtemplate',
    ),
    'ivp' =>
    array (
      0 => 'application/vnd.immervision-ivp',
    ),
    'ivu' =>
    array (
      0 => 'application/vnd.immervision-ivu',
    ),
    'j2c' =>
    array (
      0 => 'image/x-jp2-codestream',
    ),
    'j2k' =>
    array (
      0 => 'image/x-jp2-codestream',
    ),
    'jad' =>
    array (
      0 => 'text/vnd.sun.j2me.app-descriptor',
    ),
    'jam' =>
    array (
      0 => 'application/vnd.jam',
    ),
    'jar' =>
    array (
      0 => 'application/java-archive',
      1 => 'application/x-java-archive',
    ),
    'java' =>
    array (
      0 => 'text/x-java-source',
      1 => 'text/x-java',
    ),
    'jceks' =>
    array (
      0 => 'application/x-java-jce-keystore',
    ),
    'jisp' =>
    array (
      0 => 'application/vnd.jisp',
    ),
    'jks' =>
    array (
      0 => 'application/x-java-keystore',
    ),
    'jlt' =>
    array (
      0 => 'application/vnd.hp-jlyt',
    ),
    'jng' =>
    array (
      0 => 'image/x-jng',
    ),
    'jnlp' =>
    array (
      0 => 'application/x-java-jnlp-file',
    ),
    'joda' =>
    array (
      0 => 'application/vnd.joost.joda-archive',
    ),
    'jp2' =>
    array (
      0 => 'image/jp2',
    ),
    'jpc' =>
    array (
      0 => 'image/x-jp2-codestream',
    ),
    'jpe' =>
    array (
      0 => 'image/jpeg',
    ),
    'jpeg' =>
    array (
      0 => 'image/jpeg',
    ),
    'jpf' =>
    array (
      0 => 'image/jpx',
    ),
    'jpg' =>
    array (
      0 => 'image/jpeg',
    ),
    'jpg2' =>
    array (
      0 => 'image/jp2',
    ),
    'jpgm' =>
    array (
      0 => 'video/jpm',
      1 => 'image/jpm',
    ),
    'jpgv' =>
    array (
      0 => 'video/jpeg',
    ),
    'jpm' =>
    array (
      0 => 'video/jpm',
      1 => 'image/jpm',
    ),
    'jpr' =>
    array (
      0 => 'application/x-jbuilder-project',
    ),
    'jpx' =>
    array (
      0 => 'application/x-jbuilder-project',
      1 => 'image/jpx',
    ),
    'jrd' =>
    array (
      0 => 'application/jrd+json',
    ),
    'js' =>
    array (
      0 => 'application/javascript',
    ),
    'jsm' =>
    array (
      0 => 'application/javascript',
    ),
    'json' =>
    array (
      0 => 'application/json',
    ),
    'json-patch' =>
    array (
      0 => 'application/json-patch+json',
    ),
    'jsonld' =>
    array (
      0 => 'application/ld+json',
    ),
    'jsonml' =>
    array (
      0 => 'application/jsonml+json',
    ),
    'k25' =>
    array (
      0 => 'image/x-kodak-k25',
    ),
    'k7' =>
    array (
      0 => 'application/x-thomson-cassette',
    ),
    'kar' =>
    array (
      0 => 'audio/midi',
    ),
    'karbon' =>
    array (
      0 => 'application/vnd.kde.karbon',
      1 => 'application/x-karbon',
    ),
    'kdc' =>
    array (
      0 => 'image/x-kodak-kdc',
    ),
    'kdelnk' =>
    array (
      0 => 'application/x-desktop',
    ),
    'kexi' =>
    array (
      0 => 'application/x-kexiproject-sqlite2',
      1 => 'application/x-kexiproject-sqlite3',
    ),
    'kexic' =>
    array (
      0 => 'application/x-kexi-connectiondata',
    ),
    'kexis' =>
    array (
      0 => 'application/x-kexiproject-shortcut',
    ),
    'key' =>
    array (
      0 => 'application/x-iwork-keynote-sffkey',
    ),
    'kfo' =>
    array (
      0 => 'application/vnd.kde.kformula',
      1 => 'application/x-kformula',
    ),
    'kia' =>
    array (
      0 => 'application/vnd.kidspiration',
    ),
    'kil' =>
    array (
      0 => 'application/x-killustrator',
    ),
    'kino' =>
    array (
      0 => 'application/smil+xml',
    ),
    'kml' =>
    array (
      0 => 'application/vnd.google-earth.kml+xml',
    ),
    'kmz' =>
    array (
      0 => 'application/vnd.google-earth.kmz',
    ),
    'kne' =>
    array (
      0 => 'application/vnd.kinar',
    ),
    'knp' =>
    array (
      0 => 'application/vnd.kinar',
    ),
    'kon' =>
    array (
      0 => 'application/vnd.kde.kontour',
      1 => 'application/x-kontour',
    ),
    'kpm' =>
    array (
      0 => 'application/x-kpovmodeler',
    ),
    'kpr' =>
    array (
      0 => 'application/vnd.kde.kpresenter',
      1 => 'application/x-kpresenter',
    ),
    'kpt' =>
    array (
      0 => 'application/vnd.kde.kpresenter',
      1 => 'application/x-kpresenter',
    ),
    'kpxx' =>
    array (
      0 => 'application/vnd.ds-keypoint',
    ),
    'kra' =>
    array (
      0 => 'application/x-krita',
    ),
    'ks' =>
    array (
      0 => 'application/x-java-keystore',
    ),
    'ksp' =>
    array (
      0 => 'application/vnd.kde.kspread',
      1 => 'application/x-kspread',
    ),
    'ktr' =>
    array (
      0 => 'application/vnd.kahootz',
    ),
    'ktx' =>
    array (
      0 => 'image/ktx',
    ),
    'ktz' =>
    array (
      0 => 'application/vnd.kahootz',
    ),
    'kud' =>
    array (
      0 => 'application/x-kugar',
    ),
    'kwd' =>
    array (
      0 => 'application/vnd.kde.kword',
      1 => 'application/x-kword',
    ),
    'kwt' =>
    array (
      0 => 'application/vnd.kde.kword',
      1 => 'application/x-kword',
    ),
    'la' =>
    array (
      0 => 'application/x-shared-library-la',
    ),
    'lasxml' =>
    array (
      0 => 'application/vnd.las.las+xml',
    ),
    'latex' =>
    array (
      0 => 'application/x-latex',
      1 => 'text/x-tex',
    ),
    'lbd' =>
    array (
      0 => 'application/vnd.llamagraphics.life-balance.desktop',
    ),
    'lbe' =>
    array (
      0 => 'application/vnd.llamagraphics.life-balance.exchange+xml',
    ),
    'lbm' =>
    array (
      0 => 'image/x-ilbm',
    ),
    'ldif' =>
    array (
      0 => 'text/x-ldif',
    ),
    'les' =>
    array (
      0 => 'application/vnd.hhe.lesson-player',
    ),
    'lha' =>
    array (
      0 => 'application/x-lzh-compressed',
      1 => 'application/x-lha',
    ),
    'lhs' =>
    array (
      0 => 'text/x-literate-haskell',
    ),
    'lhz' =>
    array (
      0 => 'application/x-lhz',
    ),
    'link66' =>
    array (
      0 => 'application/vnd.route66.link66+xml',
    ),
    'list' =>
    array (
      0 => 'text/plain',
    ),
    'list3820' =>
    array (
      0 => 'application/vnd.ibm.modcap',
    ),
    'listafp' =>
    array (
      0 => 'application/vnd.ibm.modcap',
    ),
    'lnk' =>
    array (
      0 => 'application/x-ms-shortcut',
    ),
    'lnx' =>
    array (
      0 => 'application/x-atari-lynx-rom',
    ),
    'loas' =>
    array (
      0 => 'audio/usac',
    ),
    'log' =>
    array (
      0 => 'text/plain',
      1 => 'text/x-log',
    ),
    'lostxml' =>
    array (
      0 => 'application/lost+xml',
    ),
    'lrf' =>
    array (
      0 => 'application/octet-stream',
    ),
    'lrm' =>
    array (
      0 => 'application/vnd.ms-lrm',
    ),
    'lrv' =>
    array (
      0 => 'video/mp4',
    ),
    'lrz' =>
    array (
      0 => 'application/x-lrzip',
    ),
    'ltf' =>
    array (
      0 => 'application/vnd.frogans.ltf',
    ),
    'ltx' =>
    array (
      0 => 'text/x-tex',
    ),
    'lua' =>
    array (
      0 => 'text/x-lua',
    ),
    'lvp' =>
    array (
      0 => 'audio/vnd.lucent.voice',
    ),
    'lwo' =>
    array (
      0 => 'image/x-lwo',
    ),
    'lwob' =>
    array (
      0 => 'image/x-lwo',
    ),
    'lwp' =>
    array (
      0 => 'application/vnd.lotus-wordpro',
    ),
    'lws' =>
    array (
      0 => 'image/x-lws',
    ),
    'ly' =>
    array (
      0 => 'text/x-lilypond',
    ),
    'lyx' =>
    array (
      0 => 'application/x-lyx',
    ),
    'lz' =>
    array (
      0 => 'application/x-lzip',
    ),
    'lz4' =>
    array (
      0 => 'application/x-lz4',
    ),
    'lzh' =>
    array (
      0 => 'application/x-lzh-compressed',
      1 => 'application/x-lha',
    ),
    'lzma' =>
    array (
      0 => 'application/x-lzma',
    ),
    'lzo' =>
    array (
      0 => 'application/x-lzop',
    ),
    'm' =>
    array (
      0 => 'text/x-objcsrc',
      1 => 'text/x-matlab',
    ),
    'm13' =>
    array (
      0 => 'application/x-msmediaview',
    ),
    'm14' =>
    array (
      0 => 'application/x-msmediaview',
    ),
    'm15' =>
    array (
      0 => 'audio/x-mod',
    ),
    'm1u' =>
    array (
      0 => 'video/vnd.mpegurl',
    ),
    'm1v' =>
    array (
      0 => 'video/mpeg',
    ),
    'm21' =>
    array (
      0 => 'application/mp21',
    ),
    'm2a' =>
    array (
      0 => 'audio/mpeg',
    ),
    'm2t' =>
    array (
      0 => 'video/mp2t',
    ),
    'm2ts' =>
    array (
      0 => 'video/mp2t',
    ),
    'm2v' =>
    array (
      0 => 'video/mpeg',
    ),
    'm3a' =>
    array (
      0 => 'audio/mpeg',
    ),
    'm3u' =>
    array (
      0 => 'audio/x-mpegurl',
      1 => 'application/vnd.apple.mpegurl',
    ),
    'm3u8' =>
    array (
      0 => 'application/vnd.apple.mpegurl',
      1 => 'audio/x-mpegurl',
    ),
    'm4' =>
    array (
      0 => 'application/x-m4',
    ),
    'm4a' =>
    array (
      0 => 'audio/mp4',
    ),
    'm4b' =>
    array (
      0 => 'audio/x-m4b',
    ),
    'm4r' =>
    array (
      0 => 'audio/x-m4r',
    ),
    'm4u' =>
    array (
      0 => 'video/vnd.mpegurl',
    ),
    'm4v' =>
    array (
      0 => 'video/x-m4v',
      1 => 'video/mp4',
    ),
    'm7' =>
    array (
      0 => 'application/x-thomson-cartridge-memo7',
    ),
    'ma' =>
    array (
      0 => 'application/mathematica',
    ),
    'mab' =>
    array (
      0 => 'application/x-markaby',
    ),
    'mads' =>
    array (
      0 => 'application/mads+xml',
    ),
    'mag' =>
    array (
      0 => 'application/vnd.ecowin.chart',
    ),
    'mak' =>
    array (
      0 => 'text/x-makefile',
    ),
    'maker' =>
    array (
      0 => 'application/vnd.framemaker',
    ),
    'man' =>
    array (
      0 => 'text/troff',
      1 => 'application/x-troff-man',
    ),
    'manifest' =>
    array (
      0 => 'text/cache-manifest',
    ),
    'mar' =>
    array (
      0 => 'application/octet-stream',
    ),
    'markdown' =>
    array (
      0 => 'text/markdown',
    ),
    'mathml' =>
    array (
      0 => 'application/mathml+xml',
    ),
    'mb' =>
    array (
      0 => 'application/mathematica',
    ),
    'mbk' =>
    array (
      0 => 'application/vnd.mobius.mbk',
    ),
    'mbox' =>
    array (
      0 => 'application/mbox',
    ),
    'mc1' =>
    array (
      0 => 'application/vnd.medcalcdata',
    ),
    'mcd' =>
    array (
      0 => 'application/vnd.mcd',
    ),
    'mcurl' =>
    array (
      0 => 'text/vnd.curl.mcurl',
    ),
    'md' =>
    array (
      0 => 'text/markdown',
    ),
    'mdb' =>
    array (
      0 => 'application/x-msaccess',
      1 => 'application/vnd.ms-access',
    ),
    'mdi' =>
    array (
      0 => 'image/vnd.ms-modi',
    ),
    'mdx' =>
    array (
      0 => 'application/x-genesis-32x-rom',
    ),
    'me' =>
    array (
      0 => 'text/troff',
      1 => 'text/x-troff-me',
    ),
    'med' =>
    array (
      0 => 'audio/x-mod',
    ),
    'mesh' =>
    array (
      0 => 'model/mesh',
    ),
    'meta4' =>
    array (
      0 => 'application/metalink4+xml',
    ),
    'metalink' =>
    array (
      0 => 'application/metalink+xml',
    ),
    'mets' =>
    array (
      0 => 'application/mets+xml',
    ),
    'mfm' =>
    array (
      0 => 'application/vnd.mfmp',
    ),
    'mft' =>
    array (
      0 => 'application/rpki-manifest',
    ),
    'mgp' =>
    array (
      0 => 'application/vnd.osgeo.mapguide.package',
      1 => 'application/x-magicpoint',
    ),
    'mgz' =>
    array (
      0 => 'application/vnd.proteus.magazine',
    ),
    'mht' =>
    array (
      0 => 'application/x-mimearchive',
    ),
    'mhtml' =>
    array (
      0 => 'application/x-mimearchive',
    ),
    'mid' =>
    array (
      0 => 'audio/midi',
    ),
    'midi' =>
    array (
      0 => 'audio/midi',
    ),
    'mie' =>
    array (
      0 => 'application/x-mie',
    ),
    'mif' =>
    array (
      0 => 'application/vnd.mif',
      1 => 'application/x-mif',
    ),
    'mime' =>
    array (
      0 => 'message/rfc822',
    ),
    'minipsf' =>
    array (
      0 => 'audio/x-minipsf',
    ),
    'mj2' =>
    array (
      0 => 'video/mj2',
    ),
    'mjp2' =>
    array (
      0 => 'video/mj2',
    ),
    'mjpeg' =>
    array (
      0 => 'video/x-mjpeg',
    ),
    'mjpg' =>
    array (
      0 => 'video/x-mjpeg',
    ),
    'mjs' =>
    array (
      0 => 'application/javascript',
    ),
    'mk' =>
    array (
      0 => 'text/x-makefile',
    ),
    'mk3d' =>
    array (
      0 => 'video/x-matroska',
      1 => 'video/x-matroska-3d',
    ),
    'mka' =>
    array (
      0 => 'audio/x-matroska',
    ),
    'mkd' =>
    array (
      0 => 'text/markdown',
    ),
    'mks' =>
    array (
      0 => 'video/x-matroska',
    ),
    'mkv' =>
    array (
      0 => 'video/x-matroska',
    ),
    'ml' =>
    array (
      0 => 'text/x-ocaml',
    ),
    'mli' =>
    array (
      0 => 'text/x-ocaml',
    ),
    'mlp' =>
    array (
      0 => 'application/vnd.dolby.mlp',
    ),
    'mm' =>
    array (
      0 => 'text/x-troff-mm',
    ),
    'mmd' =>
    array (
      0 => 'application/vnd.chipnuts.karaoke-mmd',
    ),
    'mmf' =>
    array (
      0 => 'application/vnd.smaf',
      1 => 'application/x-smaf',
    ),
    'mml' =>
    array (
      0 => 'application/mathml+xml',
    ),
    'mmr' =>
    array (
      0 => 'image/vnd.fujixerox.edmics-mmr',
    ),
    'mng' =>
    array (
      0 => 'video/x-mng',
    ),
    'mny' =>
    array (
      0 => 'application/x-msmoney',
    ),
    'mo' =>
    array (
      0 => 'application/x-gettext-translation',
      1 => 'text/x-modelica',
    ),
    'mo3' =>
    array (
      0 => 'audio/x-mo3',
    ),
    'mobi' =>
    array (
      0 => 'application/x-mobipocket-ebook',
    ),
    'moc' =>
    array (
      0 => 'text/x-moc',
    ),
    'mod' =>
    array (
      0 => 'audio/x-mod',
    ),
    'mods' =>
    array (
      0 => 'application/mods+xml',
    ),
    'mof' =>
    array (
      0 => 'text/x-mof',
    ),
    'moov' =>
    array (
      0 => 'video/quicktime',
    ),
    'mount' =>
    array (
      0 => 'text/x-systemd-unit',
    ),
    'mov' =>
    array (
      0 => 'video/quicktime',
    ),
    'movie' =>
    array (
      0 => 'video/x-sgi-movie',
    ),
    'mp+' =>
    array (
      0 => 'audio/x-musepack',
    ),
    'mp2' =>
    array (
      0 => 'audio/mpeg',
      1 => 'audio/mp2',
      2 => 'video/mpeg',
    ),
    'mp21' =>
    array (
      0 => 'application/mp21',
    ),
    'mp2a' =>
    array (
      0 => 'audio/mpeg',
    ),
    'mp3' =>
    array (
      0 => 'audio/mpeg',
    ),
    'mp4' =>
    array (
      0 => 'video/mp4',
    ),
    'mp4a' =>
    array (
      0 => 'audio/mp4',
    ),
    'mp4s' =>
    array (
      0 => 'application/mp4',
    ),
    'mp4v' =>
    array (
      0 => 'video/mp4',
    ),
    'mpc' =>
    array (
      0 => 'application/vnd.mophun.certificate',
      1 => 'audio/x-musepack',
    ),
    'mpe' =>
    array (
      0 => 'video/mpeg',
    ),
    'mpeg' =>
    array (
      0 => 'video/mpeg',
    ),
    'mpg' =>
    array (
      0 => 'video/mpeg',
    ),
    'mpg4' =>
    array (
      0 => 'video/mp4',
    ),
    'mpga' =>
    array (
      0 => 'audio/mpeg',
    ),
    'mpkg' =>
    array (
      0 => 'application/vnd.apple.installer+xml',
    ),
    'mpl' =>
    array (
      0 => 'video/mp2t',
    ),
    'mpls' =>
    array (
      0 => 'video/mp2t',
    ),
    'mpm' =>
    array (
      0 => 'application/vnd.blueice.multipass',
    ),
    'mpn' =>
    array (
      0 => 'application/vnd.mophun.application',
    ),
    'mpp' =>
    array (
      0 => 'application/vnd.ms-project',
      1 => 'audio/x-musepack',
    ),
    'mpt' =>
    array (
      0 => 'application/vnd.ms-project',
    ),
    'mpy' =>
    array (
      0 => 'application/vnd.ibm.minipay',
    ),
    'mqy' =>
    array (
      0 => 'application/vnd.mobius.mqy',
    ),
    'mrc' =>
    array (
      0 => 'application/marc',
    ),
    'mrcx' =>
    array (
      0 => 'application/marcxml+xml',
    ),
    'mrl' =>
    array (
      0 => 'text/x-mrml',
    ),
    'mrml' =>
    array (
      0 => 'text/x-mrml',
    ),
    'mrw' =>
    array (
      0 => 'image/x-minolta-mrw',
    ),
    'ms' =>
    array (
      0 => 'text/troff',
      1 => 'text/x-troff-ms',
    ),
    'mscml' =>
    array (
      0 => 'application/mediaservercontrol+xml',
    ),
    'mseed' =>
    array (
      0 => 'application/vnd.fdsn.mseed',
    ),
    'mseq' =>
    array (
      0 => 'application/vnd.mseq',
    ),
    'msf' =>
    array (
      0 => 'application/vnd.epson.msf',
    ),
    'msh' =>
    array (
      0 => 'model/mesh',
    ),
    'msi' =>
    array (
      0 => 'application/x-msdownload',
      1 => 'application/x-msi',
    ),
    'msl' =>
    array (
      0 => 'application/vnd.mobius.msl',
    ),
    'msod' =>
    array (
      0 => 'image/x-msod',
    ),
    'msty' =>
    array (
      0 => 'application/vnd.muvee.style',
    ),
    'msx' =>
    array (
      0 => 'application/x-msx-rom',
    ),
    'mtm' =>
    array (
      0 => 'audio/x-mod',
    ),
    'mts' =>
    array (
      0 => 'model/vnd.mts',
      1 => 'video/mp2t',
    ),
    'mup' =>
    array (
      0 => 'text/x-mup',
    ),
    'mus' =>
    array (
      0 => 'application/vnd.musician',
    ),
    'musicxml' =>
    array (
      0 => 'application/vnd.recordare.musicxml+xml',
    ),
    'mvb' =>
    array (
      0 => 'application/x-msmediaview',
    ),
    'mwf' =>
    array (
      0 => 'application/vnd.mfer',
    ),
    'mxf' =>
    array (
      0 => 'application/mxf',
    ),
    'mxl' =>
    array (
      0 => 'application/vnd.recordare.musicxml',
    ),
    'mxml' =>
    array (
      0 => 'application/xv+xml',
    ),
    'mxs' =>
    array (
      0 => 'application/vnd.triscape.mxs',
    ),
    'mxu' =>
    array (
      0 => 'video/vnd.mpegurl',
    ),
    'n-gage' =>
    array (
      0 => 'application/vnd.nokia.n-gage.symbian.install',
    ),
    'n3' =>
    array (
      0 => 'text/n3',
    ),
    'n64' =>
    array (
      0 => 'application/x-n64-rom',
    ),
    'nb' =>
    array (
      0 => 'application/mathematica',
    ),
    'nbp' =>
    array (
      0 => 'application/vnd.wolfram.player',
    ),
    'nc' =>
    array (
      0 => 'application/x-netcdf',
    ),
    'ncx' =>
    array (
      0 => 'application/x-dtbncx+xml',
    ),
    'nds' =>
    array (
      0 => 'application/x-nintendo-ds-rom',
    ),
    'nef' =>
    array (
      0 => 'image/x-nikon-nef',
    ),
    'nes' =>
    array (
      0 => 'application/x-nes-rom',
    ),
    'nez' =>
    array (
      0 => 'application/x-nes-rom',
    ),
    'nfo' =>
    array (
      0 => 'text/x-nfo',
    ),
    'ngc' =>
    array (
      0 => 'application/x-neo-geo-pocket-color-rom',
    ),
    'ngdat' =>
    array (
      0 => 'application/vnd.nokia.n-gage.data',
    ),
    'ngp' =>
    array (
      0 => 'application/x-neo-geo-pocket-rom',
    ),
    'nitf' =>
    array (
      0 => 'application/vnd.nitf',
    ),
    'nlu' =>
    array (
      0 => 'application/vnd.neurolanguage.nlu',
    ),
    'nml' =>
    array (
      0 => 'application/vnd.enliven',
    ),
    'nnd' =>
    array (
      0 => 'application/vnd.noblenet-directory',
    ),
    'nns' =>
    array (
      0 => 'application/vnd.noblenet-sealer',
    ),
    'nnw' =>
    array (
      0 => 'application/vnd.noblenet-web',
    ),
    'not' =>
    array (
      0 => 'text/x-mup',
    ),
    'npx' =>
    array (
      0 => 'image/vnd.net-fpx',
    ),
    'nsc' =>
    array (
      0 => 'application/x-conference',
      1 => 'application/x-netshow-channel',
    ),
    'nsf' =>
    array (
      0 => 'application/vnd.lotus-notes',
    ),
    'nsv' =>
    array (
      0 => 'video/x-nsv',
    ),
    'ntf' =>
    array (
      0 => 'application/vnd.nitf',
    ),
    'nzb' =>
    array (
      0 => 'application/x-nzb',
    ),
    'o' =>
    array (
      0 => 'application/x-object',
    ),
    'oa2' =>
    array (
      0 => 'application/vnd.fujitsu.oasys2',
    ),
    'oa3' =>
    array (
      0 => 'application/vnd.fujitsu.oasys3',
    ),
    'oas' =>
    array (
      0 => 'application/vnd.fujitsu.oasys',
    ),
    'obd' =>
    array (
      0 => 'application/x-msbinder',
    ),
    'obj' =>
    array (
      0 => 'application/x-tgif',
    ),
    'ocl' =>
    array (
      0 => 'text/x-ocl',
    ),
    'oda' =>
    array (
      0 => 'application/oda',
    ),
    'odb' =>
    array (
      0 => 'application/vnd.oasis.opendocument.database',
    ),
    'odc' =>
    array (
      0 => 'application/vnd.oasis.opendocument.chart',
    ),
    'odf' =>
    array (
      0 => 'application/vnd.oasis.opendocument.formula',
    ),
    'odft' =>
    array (
      0 => 'application/vnd.oasis.opendocument.formula-template',
    ),
    'odg' =>
    array (
      0 => 'application/vnd.oasis.opendocument.graphics',
    ),
    'odi' =>
    array (
      0 => 'application/vnd.oasis.opendocument.image',
    ),
    'odm' =>
    array (
      0 => 'application/vnd.oasis.opendocument.text-master',
    ),
    'odp' =>
    array (
      0 => 'application/vnd.oasis.opendocument.presentation',
    ),
    'ods' =>
    array (
      0 => 'application/vnd.oasis.opendocument.spreadsheet',
    ),
    'odt' =>
    array (
      0 => 'application/vnd.oasis.opendocument.text',
    ),
    'oga' =>
    array (
      0 => 'audio/ogg',
      1 => 'audio/x-vorbis+ogg',
      2 => 'audio/x-flac+ogg',
      3 => 'audio/x-speex+ogg',
    ),
    'ogg' =>
    array (
      0 => 'audio/ogg',
      1 => 'video/ogg',
      2 => 'audio/x-vorbis+ogg',
      3 => 'audio/x-flac+ogg',
      4 => 'audio/x-speex+ogg',
      5 => 'video/x-theora+ogg',
    ),
    'ogm' =>
    array (
      0 => 'video/x-ogm+ogg',
    ),
    'ogv' =>
    array (
      0 => 'video/ogg',
    ),
    'ogx' =>
    array (
      0 => 'application/ogg',
    ),
    'old' =>
    array (
      0 => 'application/x-trash',
    ),
    'oleo' =>
    array (
      0 => 'application/x-oleo',
    ),
    'omdoc' =>
    array (
      0 => 'application/omdoc+xml',
    ),
    'onepkg' =>
    array (
      0 => 'application/onenote',
    ),
    'onetmp' =>
    array (
      0 => 'application/onenote',
    ),
    'onetoc' =>
    array (
      0 => 'application/onenote',
    ),
    'onetoc2' =>
    array (
      0 => 'application/onenote',
    ),
    'ooc' =>
    array (
      0 => 'text/x-ooc',
    ),
    'opf' =>
    array (
      0 => 'application/oebps-package+xml',
    ),
    'opml' =>
    array (
      0 => 'text/x-opml',
      1 => 'text/x-opml+xml',
    ),
    'oprc' =>
    array (
      0 => 'application/vnd.palm',
    ),
    'opus' =>
    array (
      0 => 'audio/ogg',
      1 => 'audio/x-opus+ogg',
    ),
    'ora' =>
    array (
      0 => 'image/openraster',
    ),
    'orf' =>
    array (
      0 => 'image/x-olympus-orf',
    ),
    'org' =>
    array (
      0 => 'application/vnd.lotus-organizer',
    ),
    'osf' =>
    array (
      0 => 'application/vnd.yamaha.openscoreformat',
    ),
    'osfpvg' =>
    array (
      0 => 'application/vnd.yamaha.openscoreformat.osfpvg+xml',
    ),
    'otc' =>
    array (
      0 => 'application/vnd.oasis.opendocument.chart-template',
    ),
    'otf' =>
    array (
      0 => 'font/otf',
      1 => 'application/vnd.oasis.opendocument.formula-template',
    ),
    'otg' =>
    array (
      0 => 'application/vnd.oasis.opendocument.graphics-template',
    ),
    'oth' =>
    array (
      0 => 'application/vnd.oasis.opendocument.text-web',
    ),
    'oti' =>
    array (
      0 => 'application/vnd.oasis.opendocument.image-template',
    ),
    'otp' =>
    array (
      0 => 'application/vnd.oasis.opendocument.presentation-template',
    ),
    'ots' =>
    array (
      0 => 'application/vnd.oasis.opendocument.spreadsheet-template',
    ),
    'ott' =>
    array (
      0 => 'application/vnd.oasis.opendocument.text-template',
    ),
    'owl' =>
    array (
      0 => 'application/rdf+xml',
    ),
    'owx' =>
    array (
      0 => 'application/owl+xml',
    ),
    'oxps' =>
    array (
      0 => 'application/oxps',
    ),
    'oxt' =>
    array (
      0 => 'application/vnd.openofficeorg.extension',
    ),
    'p' =>
    array (
      0 => 'text/x-pascal',
    ),
    'p10' =>
    array (
      0 => 'application/pkcs10',
    ),
    'p12' =>
    array (
      0 => 'application/x-pkcs12',
      1 => 'application/pkcs12',
    ),
    'p65' =>
    array (
      0 => 'application/x-pagemaker',
    ),
    'p7b' =>
    array (
      0 => 'application/x-pkcs7-certificates',
    ),
    'p7c' =>
    array (
      0 => 'application/pkcs7-mime',
    ),
    'p7m' =>
    array (
      0 => 'application/pkcs7-mime',
    ),
    'p7r' =>
    array (
      0 => 'application/x-pkcs7-certreqresp',
    ),
    'p7s' =>
    array (
      0 => 'application/pkcs7-signature',
    ),
    'p8' =>
    array (
      0 => 'application/pkcs8',
    ),
    'p8e' =>
    array (
      0 => 'application/pkcs8-encrypted',
    ),
    'pack' =>
    array (
      0 => 'application/x-java-pack200',
    ),
    'pak' =>
    array (
      0 => 'application/x-pak',
    ),
    'par2' =>
    array (
      0 => 'application/x-par2',
    ),
    'part' =>
    array (
      0 => 'application/x-partial-download',
    ),
    'pas' =>
    array (
      0 => 'text/x-pascal',
    ),
    'pat' =>
    array (
      0 => 'image/x-gimp-pat',
    ),
    'patch' =>
    array (
      0 => 'text/x-patch',
    ),
    'path' =>
    array (
      0 => 'text/x-systemd-unit',
    ),
    'paw' =>
    array (
      0 => 'application/vnd.pawaafile',
    ),
    'pbd' =>
    array (
      0 => 'application/vnd.powerbuilder6',
    ),
    'pbm' =>
    array (
      0 => 'image/x-portable-bitmap',
    ),
    'pcap' =>
    array (
      0 => 'application/vnd.tcpdump.pcap',
    ),
    'pcd' =>
    array (
      0 => 'image/x-photo-cd',
    ),
    'pce' =>
    array (
      0 => 'application/x-pc-engine-rom',
    ),
    'pcf' =>
    array (
      0 => 'application/x-font-pcf',
      1 => 'application/x-cisco-vpn-settings',
    ),
    'pcf.gz' =>
    array (
      0 => 'application/x-font-pcf',
    ),
    'pcf.z' =>
    array (
      0 => 'application/x-font-pcf',
    ),
    'pcl' =>
    array (
      0 => 'application/vnd.hp-pcl',
    ),
    'pclxl' =>
    array (
      0 => 'application/vnd.hp-pclxl',
    ),
    'pct' =>
    array (
      0 => 'image/x-pict',
    ),
    'pcurl' =>
    array (
      0 => 'application/vnd.curl.pcurl',
    ),
    'pcx' =>
    array (
      0 => 'image/x-pcx',
      1 => 'image/vnd.zbrush.pcx',
    ),
    'pdb' =>
    array (
      0 => 'application/vnd.palm',
      1 => 'application/x-aportisdoc',
    ),
    'pdc' =>
    array (
      0 => 'application/x-aportisdoc',
    ),
    'pdf' =>
    array (
      0 => 'application/pdf',
    ),
    'pdf.bz2' =>
    array (
      0 => 'application/x-bzpdf',
    ),
    'pdf.gz' =>
    array (
      0 => 'application/x-gzpdf',
    ),
    'pdf.lz' =>
    array (
      0 => 'application/x-lzpdf',
    ),
    'pdf.xz' =>
    array (
      0 => 'application/x-xzpdf',
    ),
    'pef' =>
    array (
      0 => 'image/x-pentax-pef',
    ),
    'pem' =>
    array (
      0 => 'application/x-x509-ca-cert',
    ),
    'perl' =>
    array (
      0 => 'application/x-perl',
    ),
    'pfa' =>
    array (
      0 => 'application/x-font-type1',
    ),
    'pfb' =>
    array (
      0 => 'application/x-font-type1',
    ),
    'pfm' =>
    array (
      0 => 'application/x-font-type1',
    ),
    'pfr' =>
    array (
      0 => 'application/font-tdpfr',
    ),
    'pfx' =>
    array (
      0 => 'application/x-pkcs12',
      1 => 'application/pkcs12',
    ),
    'pgm' =>
    array (
      0 => 'image/x-portable-graymap',
    ),
    'pgn' =>
    array (
      0 => 'application/x-chess-pgn',
      1 => 'application/vnd.chess-pgn',
    ),
    'pgp' =>
    array (
      0 => 'application/pgp-encrypted',
      1 => 'application/pgp-keys',
      2 => 'application/pgp-signature',
    ),
    'php' =>
    array (
      0 => 'application/x-php',
    ),
    'php3' =>
    array (
      0 => 'application/x-php',
    ),
    'php4' =>
    array (
      0 => 'application/x-php',
    ),
    'php5' =>
    array (
      0 => 'application/x-php',
    ),
    'phps' =>
    array (
      0 => 'application/x-php',
    ),
    'pic' =>
    array (
      0 => 'image/x-pict',
    ),
    'pict' =>
    array (
      0 => 'image/x-pict',
    ),
    'pict1' =>
    array (
      0 => 'image/x-pict',
    ),
    'pict2' =>
    array (
      0 => 'image/x-pict',
    ),
    'pk' =>
    array (
      0 => 'application/x-tex-pk',
    ),
    'pkg' =>
    array (
      0 => 'application/octet-stream',
      1 => 'application/x-xar',
    ),
    'pki' =>
    array (
      0 => 'application/pkixcmp',
    ),
    'pkipath' =>
    array (
      0 => 'application/pkix-pkipath',
    ),
    'pkr' =>
    array (
      0 => 'application/pgp-keys',
    ),
    'pl' =>
    array (
      0 => 'application/x-perl',
    ),
    'pla' =>
    array (
      0 => 'audio/x-iriver-pla',
    ),
    'plb' =>
    array (
      0 => 'application/vnd.3gpp.pic-bw-large',
    ),
    'plc' =>
    array (
      0 => 'application/vnd.mobius.plc',
    ),
    'plf' =>
    array (
      0 => 'application/vnd.pocketlearn',
    ),
    'pln' =>
    array (
      0 => 'application/x-planperfect',
    ),
    'pls' =>
    array (
      0 => 'application/pls+xml',
      1 => 'audio/x-scpls',
    ),
    'pm' =>
    array (
      0 => 'application/x-perl',
      1 => 'application/x-pagemaker',
    ),
    'pm6' =>
    array (
      0 => 'application/x-pagemaker',
    ),
    'pmd' =>
    array (
      0 => 'application/x-pagemaker',
    ),
    'pml' =>
    array (
      0 => 'application/vnd.ctc-posml',
    ),
    'png' =>
    array (
      0 => 'image/png',
    ),
    'pnm' =>
    array (
      0 => 'image/x-portable-anymap',
    ),
    'pntg' =>
    array (
      0 => 'image/x-macpaint',
    ),
    'po' =>
    array (
      0 => 'text/x-gettext-translation',
    ),
    'pod' =>
    array (
      0 => 'application/x-perl',
    ),
    'por' =>
    array (
      0 => 'application/x-spss-por',
    ),
    'portpkg' =>
    array (
      0 => 'application/vnd.macports.portpkg',
    ),
    'pot' =>
    array (
      0 => 'application/vnd.ms-powerpoint',
      1 => 'text/x-gettext-translation-template',
    ),
    'potm' =>
    array (
      0 => 'application/vnd.ms-powerpoint.template.macroenabled.12',
    ),
    'potx' =>
    array (
      0 => 'application/vnd.openxmlformats-officedocument.presentationml.template',
    ),
    'ppam' =>
    array (
      0 => 'application/vnd.ms-powerpoint.addin.macroenabled.12',
    ),
    'ppd' =>
    array (
      0 => 'application/vnd.cups-ppd',
    ),
    'ppm' =>
    array (
      0 => 'image/x-portable-pixmap',
    ),
    'pps' =>
    array (
      0 => 'application/vnd.ms-powerpoint',
    ),
    'ppsm' =>
    array (
      0 => 'application/vnd.ms-powerpoint.slideshow.macroenabled.12',
    ),
    'ppsx' =>
    array (
      0 => 'application/vnd.openxmlformats-officedocument.presentationml.slideshow',
    ),
    'ppt' =>
    array (
      0 => 'application/vnd.ms-powerpoint',
    ),
    'pptm' =>
    array (
      0 => 'application/vnd.ms-powerpoint.presentation.macroenabled.12',
    ),
    'pptx' =>
    array (
      0 => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
    ),
    'ppz' =>
    array (
      0 => 'application/vnd.ms-powerpoint',
    ),
    'pqa' =>
    array (
      0 => 'application/vnd.palm',
    ),
    'prc' =>
    array (
      0 => 'application/x-mobipocket-ebook',
      1 => 'application/vnd.palm',
    ),
    'pre' =>
    array (
      0 => 'application/vnd.lotus-freelance',
    ),
    'prf' =>
    array (
      0 => 'application/pics-rules',
    ),
    'ps' =>
    array (
      0 => 'application/postscript',
    ),
    'ps.bz2' =>
    array (
      0 => 'application/x-bzpostscript',
    ),
    'ps.gz' =>
    array (
      0 => 'application/x-gzpostscript',
    ),
    'psb' =>
    array (
      0 => 'application/vnd.3gpp.pic-bw-small',
    ),
    'psd' =>
    array (
      0 => 'image/vnd.adobe.photoshop',
    ),
    'psf' =>
    array (
      0 => 'application/x-font-linux-psf',
      1 => 'audio/x-psf',
    ),
    'psf.gz' =>
    array (
      0 => 'application/x-gz-font-linux-psf',
    ),
    'psflib' =>
    array (
      0 => 'audio/x-psflib',
    ),
    'psid' =>
    array (
      0 => 'audio/prs.sid',
    ),
    'pskcxml' =>
    array (
      0 => 'application/pskc+xml',
    ),
    'psw' =>
    array (
      0 => 'application/x-pocket-word',
    ),
    'ptid' =>
    array (
      0 => 'application/vnd.pvi.ptid1',
    ),
    'pub' =>
    array (
      0 => 'application/x-mspublisher',
      1 => 'application/vnd.ms-publisher',
    ),
    'pvb' =>
    array (
      0 => 'application/vnd.3gpp.pic-bw-var',
    ),
    'pw' =>
    array (
      0 => 'application/x-pw',
    ),
    'pwn' =>
    array (
      0 => 'application/vnd.3m.post-it-notes',
    ),
    'py' =>
    array (
      0 => 'text/x-python3',
      1 => 'text/x-python',
    ),
    'py3' =>
    array (
      0 => 'text/x-python3',
    ),
    'py3x' =>
    array (
      0 => 'text/x-python3',
    ),
    'pya' =>
    array (
      0 => 'audio/vnd.ms-playready.media.pya',
    ),
    'pyc' =>
    array (
      0 => 'application/x-python-bytecode',
    ),
    'pyo' =>
    array (
      0 => 'application/x-python-bytecode',
    ),
    'pyv' =>
    array (
      0 => 'video/vnd.ms-playready.media.pyv',
    ),
    'pyx' =>
    array (
      0 => 'text/x-python',
    ),
    'qam' =>
    array (
      0 => 'application/vnd.epson.quickanime',
    ),
    'qbo' =>
    array (
      0 => 'application/vnd.intu.qbo',
    ),
    'qd' =>
    array (
      0 => 'application/x-raw-floppy-disk-image',
    ),
    'qfx' =>
    array (
      0 => 'application/vnd.intu.qfx',
    ),
    'qif' =>
    array (
      0 => 'application/x-qw',
      1 => 'image/x-quicktime',
    ),
    'qml' =>
    array (
      0 => 'text/x-qml',
    ),
    'qmlproject' =>
    array (
      0 => 'text/x-qml',
    ),
    'qmltypes' =>
    array (
      0 => 'text/x-qml',
    ),
    'qp' =>
    array (
      0 => 'application/x-qpress',
    ),
    'qps' =>
    array (
      0 => 'application/vnd.publishare-delta-tree',
    ),
    'qt' =>
    array (
      0 => 'video/quicktime',
    ),
    'qti' =>
    array (
      0 => 'application/x-qtiplot',
    ),
    'qti.gz' =>
    array (
      0 => 'application/x-qtiplot',
    ),
    'qtif' =>
    array (
      0 => 'image/x-quicktime',
    ),
    'qtl' =>
    array (
      0 => 'application/x-quicktime-media-link',
    ),
    'qtvr' =>
    array (
      0 => 'video/quicktime',
    ),
    'qwd' =>
    array (
      0 => 'application/vnd.quark.quarkxpress',
    ),
    'qwt' =>
    array (
      0 => 'application/vnd.quark.quarkxpress',
    ),
    'qxb' =>
    array (
      0 => 'application/vnd.quark.quarkxpress',
    ),
    'qxd' =>
    array (
      0 => 'application/vnd.quark.quarkxpress',
    ),
    'qxl' =>
    array (
      0 => 'application/vnd.quark.quarkxpress',
    ),
    'qxt' =>
    array (
      0 => 'application/vnd.quark.quarkxpress',
    ),
    'ra' =>
    array (
      0 => 'audio/x-pn-realaudio',
      1 => 'audio/vnd.rn-realaudio',
    ),
    'raf' =>
    array (
      0 => 'image/x-fuji-raf',
    ),
    'ram' =>
    array (
      0 => 'audio/x-pn-realaudio',
      1 => 'application/ram',
    ),
    'raml' =>
    array (
      0 => 'application/raml+yaml',
    ),
    'rar' =>
    array (
      0 => 'application/x-rar-compressed',
      1 => 'application/vnd.rar',
    ),
    'ras' =>
    array (
      0 => 'image/x-cmu-raster',
    ),
    'raw' =>
    array (
      0 => 'image/x-panasonic-rw',
    ),
    'raw-disk-image' =>
    array (
      0 => 'application/x-raw-disk-image',
    ),
    'raw-disk-image.xz' =>
    array (
      0 => 'application/x-raw-disk-image-xz-compressed',
    ),
    'rax' =>
    array (
      0 => 'audio/vnd.rn-realaudio',
    ),
    'rb' =>
    array (
      0 => 'application/x-ruby',
    ),
    'rcprofile' =>
    array (
      0 => 'application/vnd.ipunplugged.rcprofile',
    ),
    'rdf' =>
    array (
      0 => 'application/rdf+xml',
    ),
    'rdfs' =>
    array (
      0 => 'application/rdf+xml',
    ),
    'rdz' =>
    array (
      0 => 'application/vnd.data-vision.rdz',
    ),
    'reg' =>
    array (
      0 => 'text/x-ms-regedit',
    ),
    'rej' =>
    array (
      0 => 'text/x-reject',
    ),
    'rep' =>
    array (
      0 => 'application/vnd.businessobjects',
    ),
    'res' =>
    array (
      0 => 'application/x-dtbresource+xml',
    ),
    'rgb' =>
    array (
      0 => 'image/x-rgb',
    ),
    'rif' =>
    array (
      0 => 'application/reginfo+xml',
    ),
    'rip' =>
    array (
      0 => 'audio/vnd.rip',
    ),
    'ris' =>
    array (
      0 => 'application/x-research-info-systems',
    ),
    'rl' =>
    array (
      0 => 'application/resource-lists+xml',
    ),
    'rlc' =>
    array (
      0 => 'image/vnd.fujixerox.edmics-rlc',
    ),
    'rld' =>
    array (
      0 => 'application/resource-lists-diff+xml',
    ),
    'rle' =>
    array (
      0 => 'image/rle',
    ),
    'rm' =>
    array (
      0 => 'application/vnd.rn-realmedia',
    ),
    'rmi' =>
    array (
      0 => 'audio/midi',
    ),
    'rmj' =>
    array (
      0 => 'application/vnd.rn-realmedia',
    ),
    'rmm' =>
    array (
      0 => 'application/vnd.rn-realmedia',
    ),
    'rmp' =>
    array (
      0 => 'audio/x-pn-realaudio-plugin',
    ),
    'rms' =>
    array (
      0 => 'application/vnd.jcp.javame.midlet-rms',
      1 => 'application/vnd.rn-realmedia',
    ),
    'rmvb' =>
    array (
      0 => 'application/vnd.rn-realmedia-vbr',
      1 => 'application/vnd.rn-realmedia',
    ),
    'rmx' =>
    array (
      0 => 'application/vnd.rn-realmedia',
    ),
    'rnc' =>
    array (
      0 => 'application/relax-ng-compact-syntax',
    ),
    'rng' =>
    array (
      0 => 'application/xml',
    ),
    'roa' =>
    array (
      0 => 'application/rpki-roa',
    ),
    'roff' =>
    array (
      0 => 'text/troff',
    ),
    'rp' =>
    array (
      0 => 'image/vnd.rn-realpix',
    ),
    'rp9' =>
    array (
      0 => 'application/vnd.cloanto.rp9',
    ),
    'rpm' =>
    array (
      0 => 'application/x-rpm',
    ),
    'rpss' =>
    array (
      0 => 'application/vnd.nokia.radio-presets',
    ),
    'rpst' =>
    array (
      0 => 'application/vnd.nokia.radio-preset',
    ),
    'rq' =>
    array (
      0 => 'application/sparql-query',
    ),
    'rs' =>
    array (
      0 => 'application/rls-services+xml',
      1 => 'text/rust',
    ),
    'rsd' =>
    array (
      0 => 'application/rsd+xml',
    ),
    'rss' =>
    array (
      0 => 'application/rss+xml',
    ),
    'rt' =>
    array (
      0 => 'text/vnd.rn-realtext',
    ),
    'rtf' =>
    array (
      0 => 'application/rtf',
    ),
    'rtx' =>
    array (
      0 => 'text/richtext',
    ),
    'rv' =>
    array (
      0 => 'video/vnd.rn-realvideo',
    ),
    'rvx' =>
    array (
      0 => 'video/vnd.rn-realvideo',
    ),
    'rw2' =>
    array (
      0 => 'image/x-panasonic-rw2',
    ),
    's' =>
    array (
      0 => 'text/x-asm',
    ),
    's3m' =>
    array (
      0 => 'audio/s3m',
      1 => 'audio/x-s3m',
    ),
    'saf' =>
    array (
      0 => 'application/vnd.yamaha.smaf-audio',
    ),
    'sam' =>
    array (
      0 => 'application/x-amipro',
    ),
    'sami' =>
    array (
      0 => 'application/x-sami',
    ),
    'sap' =>
    array (
      0 => 'application/x-thomson-sap-image',
    ),
    'sass' =>
    array (
      0 => 'text/x-sass',
    ),
    'sav' =>
    array (
      0 => 'application/x-spss-sav',
    ),
    'sbml' =>
    array (
      0 => 'application/sbml+xml',
    ),
    'sc' =>
    array (
      0 => 'application/vnd.ibm.secure-container',
    ),
    'scala' =>
    array (
      0 => 'text/x-scala',
    ),
    'scd' =>
    array (
      0 => 'application/x-msschedule',
    ),
    'scm' =>
    array (
      0 => 'application/vnd.lotus-screencam',
      1 => 'text/x-scheme',
    ),
    'scope' =>
    array (
      0 => 'text/x-systemd-unit',
    ),
    'scq' =>
    array (
      0 => 'application/scvp-cv-request',
    ),
    'scs' =>
    array (
      0 => 'application/scvp-cv-response',
    ),
    'scss' =>
    array (
      0 => 'text/x-scss',
    ),
    'scurl' =>
    array (
      0 => 'text/vnd.curl.scurl',
    ),
    'sda' =>
    array (
      0 => 'application/vnd.stardivision.draw',
    ),
    'sdc' =>
    array (
      0 => 'application/vnd.stardivision.calc',
    ),
    'sdd' =>
    array (
      0 => 'application/vnd.stardivision.impress',
    ),
    'sdkd' =>
    array (
      0 => 'application/vnd.solent.sdkm+xml',
    ),
    'sdkm' =>
    array (
      0 => 'application/vnd.solent.sdkm+xml',
    ),
    'sdp' =>
    array (
      0 => 'application/sdp',
      1 => 'application/vnd.stardivision.impress',
    ),
    'sds' =>
    array (
      0 => 'application/vnd.stardivision.chart',
    ),
    'sdw' =>
    array (
      0 => 'application/vnd.stardivision.writer',
    ),
    'see' =>
    array (
      0 => 'application/vnd.seemail',
    ),
    'seed' =>
    array (
      0 => 'application/vnd.fdsn.seed',
    ),
    'sema' =>
    array (
      0 => 'application/vnd.sema',
    ),
    'semd' =>
    array (
      0 => 'application/vnd.semd',
    ),
    'semf' =>
    array (
      0 => 'application/vnd.semf',
    ),
    'ser' =>
    array (
      0 => 'application/java-serialized-object',
    ),
    'service' =>
    array (
      0 => 'text/x-dbus-service',
      1 => 'text/x-systemd-unit',
    ),
    'setpay' =>
    array (
      0 => 'application/set-payment-initiation',
    ),
    'setreg' =>
    array (
      0 => 'application/set-registration-initiation',
    ),
    'sfc' =>
    array (
      0 => 'application/vnd.nintendo.snes.rom',
    ),
    'sfd-hdstx' =>
    array (
      0 => 'application/vnd.hydrostatix.sof-data',
    ),
    'sfs' =>
    array (
      0 => 'application/vnd.spotfire.sfs',
    ),
    'sfv' =>
    array (
      0 => 'text/x-sfv',
    ),
    'sg' =>
    array (
      0 => 'application/x-sg1000-rom',
    ),
    'sgb' =>
    array (
      0 => 'application/x-gameboy-rom',
    ),
    'sgf' =>
    array (
      0 => 'application/x-go-sgf',
    ),
    'sgi' =>
    array (
      0 => 'image/sgi',
      1 => 'image/x-sgi',
    ),
    'sgl' =>
    array (
      0 => 'application/vnd.stardivision.writer-global',
      1 => 'application/vnd.stardivision.writer',
    ),
    'sgm' =>
    array (
      0 => 'text/sgml',
    ),
    'sgml' =>
    array (
      0 => 'text/sgml',
    ),
    'sh' =>
    array (
      0 => 'application/x-sh',
      1 => 'application/x-shellscript',
    ),
    'shape' =>
    array (
      0 => 'application/x-dia-shape',
    ),
    'shar' =>
    array (
      0 => 'application/x-shar',
    ),
    'shf' =>
    array (
      0 => 'application/shf+xml',
    ),
    'shn' =>
    array (
      0 => 'application/x-shorten',
    ),
    'siag' =>
    array (
      0 => 'application/x-siag',
    ),
    'sid' =>
    array (
      0 => 'image/x-mrsid-image',
      1 => 'audio/prs.sid',
    ),
    'sig' =>
    array (
      0 => 'application/pgp-signature',
    ),
    'sik' =>
    array (
      0 => 'application/x-trash',
    ),
    'sil' =>
    array (
      0 => 'audio/silk',
    ),
    'silo' =>
    array (
      0 => 'model/mesh',
    ),
    'sis' =>
    array (
      0 => 'application/vnd.symbian.install',
    ),
    'sisx' =>
    array (
      0 => 'application/vnd.symbian.install',
      1 => 'x-epoc/x-sisx-app',
    ),
    'sit' =>
    array (
      0 => 'application/x-stuffit',
    ),
    'sitx' =>
    array (
      0 => 'application/x-stuffitx',
    ),
    'siv' =>
    array (
      0 => 'application/sieve',
    ),
    'sk' =>
    array (
      0 => 'image/x-skencil',
    ),
    'sk1' =>
    array (
      0 => 'image/x-skencil',
    ),
    'skd' =>
    array (
      0 => 'application/vnd.koan',
    ),
    'skm' =>
    array (
      0 => 'application/vnd.koan',
    ),
    'skp' =>
    array (
      0 => 'application/vnd.koan',
    ),
    'skr' =>
    array (
      0 => 'application/pgp-keys',
    ),
    'skt' =>
    array (
      0 => 'application/vnd.koan',
    ),
    'sldm' =>
    array (
      0 => 'application/vnd.ms-powerpoint.slide.macroenabled.12',
    ),
    'sldx' =>
    array (
      0 => 'application/vnd.openxmlformats-officedocument.presentationml.slide',
    ),
    'slice' =>
    array (
      0 => 'text/x-systemd-unit',
    ),
    'slk' =>
    array (
      0 => 'text/spreadsheet',
    ),
    'slt' =>
    array (
      0 => 'application/vnd.epson.salt',
    ),
    'sm' =>
    array (
      0 => 'application/vnd.stepmania.stepchart',
    ),
    'smaf' =>
    array (
      0 => 'application/x-smaf',
    ),
    'smc' =>
    array (
      0 => 'application/vnd.nintendo.snes.rom',
    ),
    'smd' =>
    array (
      0 => 'application/vnd.stardivision.mail',
      1 => 'application/x-genesis-rom',
    ),
    'smf' =>
    array (
      0 => 'application/vnd.stardivision.math',
    ),
    'smi' =>
    array (
      0 => 'application/smil+xml',
      1 => 'application/x-sami',
    ),
    'smil' =>
    array (
      0 => 'application/smil+xml',
    ),
    'sml' =>
    array (
      0 => 'application/smil+xml',
    ),
    'sms' =>
    array (
      0 => 'application/x-sms-rom',
    ),
    'smv' =>
    array (
      0 => 'video/x-smv',
    ),
    'smzip' =>
    array (
      0 => 'application/vnd.stepmania.package',
    ),
    'snap' =>
    array (
      0 => 'application/vnd.snap',
    ),
    'snd' =>
    array (
      0 => 'audio/basic',
    ),
    'snf' =>
    array (
      0 => 'application/x-font-snf',
    ),
    'so' =>
    array (
      0 => 'application/octet-stream',
      1 => 'application/x-sharedlib',
    ),
    'socket' =>
    array (
      0 => 'text/x-systemd-unit',
    ),
    'spc' =>
    array (
      0 => 'application/x-pkcs7-certificates',
    ),
    'spd' =>
    array (
      0 => 'application/x-font-speedo',
    ),
    'spec' =>
    array (
      0 => 'text/x-rpm-spec',
    ),
    'spf' =>
    array (
      0 => 'application/vnd.yamaha.smaf-phrase',
    ),
    'spl' =>
    array (
      0 => 'application/x-futuresplash',
      1 => 'application/vnd.adobe.flash.movie',
    ),
    'spm' =>
    array (
      0 => 'application/x-source-rpm',
    ),
    'spot' =>
    array (
      0 => 'text/vnd.in3d.spot',
    ),
    'spp' =>
    array (
      0 => 'application/scvp-vp-response',
    ),
    'spq' =>
    array (
      0 => 'application/scvp-vp-request',
    ),
    'spx' =>
    array (
      0 => 'audio/ogg',
      1 => 'audio/x-speex',
    ),
    'sql' =>
    array (
      0 => 'application/x-sql',
      1 => 'application/sql',
    ),
    'sqlite2' =>
    array (
      0 => 'application/x-sqlite2',
    ),
    'sqlite3' =>
    array (
      0 => 'application/vnd.sqlite3',
    ),
    'sqsh' =>
    array (
      0 => 'application/vnd.squashfs',
    ),
    'sr2' =>
    array (
      0 => 'image/x-sony-sr2',
    ),
    'src' =>
    array (
      0 => 'application/x-wais-source',
    ),
    'src.rpm' =>
    array (
      0 => 'application/x-source-rpm',
    ),
    'srf' =>
    array (
      0 => 'image/x-sony-srf',
    ),
    'srt' =>
    array (
      0 => 'application/x-subrip',
    ),
    'sru' =>
    array (
      0 => 'application/sru+xml',
    ),
    'srx' =>
    array (
      0 => 'application/sparql-results+xml',
    ),
    'ss' =>
    array (
      0 => 'text/x-scheme',
    ),
    'ssa' =>
    array (
      0 => 'text/x-ssa',
    ),
    'ssdl' =>
    array (
      0 => 'application/ssdl+xml',
    ),
    'sse' =>
    array (
      0 => 'application/vnd.kodak-descriptor',
    ),
    'ssf' =>
    array (
      0 => 'application/vnd.epson.ssf',
    ),
    'ssml' =>
    array (
      0 => 'application/ssml+xml',
    ),
    'st' =>
    array (
      0 => 'application/vnd.sailingtracker.track',
    ),
    'stc' =>
    array (
      0 => 'application/vnd.sun.xml.calc.template',
    ),
    'std' =>
    array (
      0 => 'application/vnd.sun.xml.draw.template',
    ),
    'stf' =>
    array (
      0 => 'application/vnd.wt.stf',
    ),
    'sti' =>
    array (
      0 => 'application/vnd.sun.xml.impress.template',
    ),
    'stk' =>
    array (
      0 => 'application/hyperstudio',
    ),
    'stl' =>
    array (
      0 => 'application/vnd.ms-pki.stl',
      1 => 'model/stl',
    ),
    'stm' =>
    array (
      0 => 'audio/x-stm',
    ),
    'str' =>
    array (
      0 => 'application/vnd.pg.format',
    ),
    'stw' =>
    array (
      0 => 'application/vnd.sun.xml.writer.template',
    ),
    'sty' =>
    array (
      0 => 'text/x-tex',
    ),
    'sub' =>
    array (
      0 => 'text/vnd.dvb.subtitle',
      1 => 'image/vnd.dvb.subtitle',
      2 => 'text/x-microdvd',
      3 => 'text/x-mpsub',
      4 => 'text/x-subviewer',
    ),
    'sun' =>
    array (
      0 => 'image/x-sun-raster',
    ),
    'sus' =>
    array (
      0 => 'application/vnd.sus-calendar',
    ),
    'susp' =>
    array (
      0 => 'application/vnd.sus-calendar',
    ),
    'sv' =>
    array (
      0 => 'text/x-svsrc',
    ),
    'sv4cpio' =>
    array (
      0 => 'application/x-sv4cpio',
    ),
    'sv4crc' =>
    array (
      0 => 'application/x-sv4crc',
    ),
    'svc' =>
    array (
      0 => 'application/vnd.dvb.service',
    ),
    'svd' =>
    array (
      0 => 'application/vnd.svd',
    ),
    'svg' =>
    array (
      0 => 'image/svg+xml',
    ),
    'svgz' =>
    array (
      0 => 'image/svg+xml',
      1 => 'image/svg+xml-compressed',
    ),
    'svh' =>
    array (
      0 => 'text/x-svhdr',
    ),
    'swa' =>
    array (
      0 => 'application/x-director',
    ),
    'swap' =>
    array (
      0 => 'text/x-systemd-unit',
    ),
    'swf' =>
    array (
      0 => 'application/x-shockwave-flash',
      1 => 'application/vnd.adobe.flash.movie',
    ),
    'swi' =>
    array (
      0 => 'application/vnd.aristanetworks.swi',
    ),
    'swm' =>
    array (
      0 => 'application/x-ms-wim',
    ),
    'sxc' =>
    array (
      0 => 'application/vnd.sun.xml.calc',
    ),
    'sxd' =>
    array (
      0 => 'application/vnd.sun.xml.draw',
    ),
    'sxg' =>
    array (
      0 => 'application/vnd.sun.xml.writer.global',
    ),
    'sxi' =>
    array (
      0 => 'application/vnd.sun.xml.impress',
    ),
    'sxm' =>
    array (
      0 => 'application/vnd.sun.xml.math',
    ),
    'sxw' =>
    array (
      0 => 'application/vnd.sun.xml.writer',
    ),
    'sylk' =>
    array (
      0 => 'text/spreadsheet',
    ),
    't' =>
    array (
      0 => 'text/troff',
      1 => 'application/x-perl',
    ),
    't2t' =>
    array (
      0 => 'text/x-txt2tags',
    ),
    't3' =>
    array (
      0 => 'application/x-t3vm-image',
    ),
    'taglet' =>
    array (
      0 => 'application/vnd.mynfc',
    ),
    'tao' =>
    array (
      0 => 'application/vnd.tao.intent-module-archive',
    ),
    'tar' =>
    array (
      0 => 'application/x-tar',
    ),
    'tar.bz' =>
    array (
      0 => 'application/x-bzip-compressed-tar',
    ),
    'tar.bz2' =>
    array (
      0 => 'application/x-bzip-compressed-tar',
    ),
    'tar.gz' =>
    array (
      0 => 'application/x-compressed-tar',
    ),
    'tar.lrz' =>
    array (
      0 => 'application/x-lrzip-compressed-tar',
    ),
    'tar.lz' =>
    array (
      0 => 'application/x-lzip-compressed-tar',
    ),
    'tar.lz4' =>
    array (
      0 => 'application/x-lz4-compressed-tar',
    ),
    'tar.lzma' =>
    array (
      0 => 'application/x-lzma-compressed-tar',
    ),
    'tar.lzo' =>
    array (
      0 => 'application/x-tzo',
    ),
    'tar.xz' =>
    array (
      0 => 'application/x-xz-compressed-tar',
    ),
    'tar.z' =>
    array (
      0 => 'application/x-tarz',
    ),
    'target' =>
    array (
      0 => 'text/x-systemd-unit',
    ),
    'taz' =>
    array (
      0 => 'application/x-tarz',
    ),
    'tb2' =>
    array (
      0 => 'application/x-bzip-compressed-tar',
    ),
    'tbz' =>
    array (
      0 => 'application/x-bzip-compressed-tar',
    ),
    'tbz2' =>
    array (
      0 => 'application/x-bzip-compressed-tar',
    ),
    'tcap' =>
    array (
      0 => 'application/vnd.3gpp2.tcap',
    ),
    'tcl' =>
    array (
      0 => 'application/x-tcl',
      1 => 'text/x-tcl',
    ),
    'teacher' =>
    array (
      0 => 'application/vnd.smart.teacher',
    ),
    'tei' =>
    array (
      0 => 'application/tei+xml',
    ),
    'teicorpus' =>
    array (
      0 => 'application/tei+xml',
    ),
    'tex' =>
    array (
      0 => 'application/x-tex',
      1 => 'text/x-tex',
    ),
    'texi' =>
    array (
      0 => 'application/x-texinfo',
      1 => 'text/x-texinfo',
    ),
    'texinfo' =>
    array (
      0 => 'application/x-texinfo',
      1 => 'text/x-texinfo',
    ),
    'text' =>
    array (
      0 => 'text/plain',
    ),
    'tfi' =>
    array (
      0 => 'application/thraud+xml',
    ),
    'tfm' =>
    array (
      0 => 'application/x-tex-tfm',
    ),
    'tga' =>
    array (
      0 => 'image/x-tga',
    ),
    'tgz' =>
    array (
      0 => 'application/x-compressed-tar',
    ),
    'theme' =>
    array (
      0 => 'application/x-theme',
    ),
    'themepack' =>
    array (
      0 => 'application/x-windows-themepack',
    ),
    'thmx' =>
    array (
      0 => 'application/vnd.ms-officetheme',
    ),
    'tif' =>
    array (
      0 => 'image/tiff',
    ),
    'tiff' =>
    array (
      0 => 'image/tiff',
    ),
    'timer' =>
    array (
      0 => 'text/x-systemd-unit',
    ),
    'tk' =>
    array (
      0 => 'text/x-tcl',
    ),
    'tlrz' =>
    array (
      0 => 'application/x-lrzip-compressed-tar',
    ),
    'tlz' =>
    array (
      0 => 'application/x-lzma-compressed-tar',
    ),
    'tmo' =>
    array (
      0 => 'application/vnd.tmobile-livetv',
    ),
    'tnef' =>
    array (
      0 => 'application/vnd.ms-tnef',
    ),
    'tnf' =>
    array (
      0 => 'application/vnd.ms-tnef',
    ),
    'toc' =>
    array (
      0 => 'application/x-cdrdao-toc',
    ),
    'torrent' =>
    array (
      0 => 'application/x-bittorrent',
    ),
    'tpic' =>
    array (
      0 => 'image/x-tga',
    ),
    'tpl' =>
    array (
      0 => 'application/vnd.groove-tool-template',
    ),
    'tpt' =>
    array (
      0 => 'application/vnd.trid.tpt',
    ),
    'tr' =>
    array (
      0 => 'text/troff',
    ),
    'tra' =>
    array (
      0 => 'application/vnd.trueapp',
    ),
    'trig' =>
    array (
      0 => 'application/trig',
    ),
    'trm' =>
    array (
      0 => 'application/x-msterminal',
    ),
    'ts' =>
    array (
      0 => 'text/vnd.qt.linguist',
      1 => 'video/mp2t',
    ),
    'tsd' =>
    array (
      0 => 'application/timestamped-data',
    ),
    'tsv' =>
    array (
      0 => 'text/tab-separated-values',
    ),
    'tta' =>
    array (
      0 => 'audio/x-tta',
    ),
    'ttc' =>
    array (
      0 => 'font/collection',
    ),
    'ttf' =>
    array (
      0 => 'font/ttf',
    ),
    'ttl' =>
    array (
      0 => 'text/turtle',
    ),
    'ttx' =>
    array (
      0 => 'application/x-font-ttx',
    ),
    'twd' =>
    array (
      0 => 'application/vnd.simtech-mindmapper',
    ),
    'twds' =>
    array (
      0 => 'application/vnd.simtech-mindmapper',
    ),
    'twig' =>
    array (
      0 => 'text/x-twig',
    ),
    'txd' =>
    array (
      0 => 'application/vnd.genomatix.tuxedo',
    ),
    'txf' =>
    array (
      0 => 'application/vnd.mobius.txf',
    ),
    'txt' =>
    array (
      0 => 'text/plain',
    ),
    'txz' =>
    array (
      0 => 'application/x-xz-compressed-tar',
    ),
    'tzo' =>
    array (
      0 => 'application/x-tzo',
    ),
    'u32' =>
    array (
      0 => 'application/x-authorware-bin',
    ),
    'udeb' =>
    array (
      0 => 'application/x-debian-package',
      1 => 'application/vnd.debian.binary-package',
    ),
    'ufd' =>
    array (
      0 => 'application/vnd.ufdl',
    ),
    'ufdl' =>
    array (
      0 => 'application/vnd.ufdl',
    ),
    'ufraw' =>
    array (
      0 => 'application/x-ufraw',
    ),
    'ui' =>
    array (
      0 => 'application/x-designer',
      1 => 'application/x-gtk-builder',
    ),
    'uil' =>
    array (
      0 => 'text/x-uil',
    ),
    'ult' =>
    array (
      0 => 'audio/x-mod',
    ),
    'ulx' =>
    array (
      0 => 'application/x-glulx',
    ),
    'umj' =>
    array (
      0 => 'application/vnd.umajin',
    ),
    'unf' =>
    array (
      0 => 'application/x-nes-rom',
    ),
    'uni' =>
    array (
      0 => 'audio/x-mod',
    ),
    'unif' =>
    array (
      0 => 'application/x-nes-rom',
    ),
    'unityweb' =>
    array (
      0 => 'application/vnd.unity',
    ),
    'uoml' =>
    array (
      0 => 'application/vnd.uoml+xml',
    ),
    'uri' =>
    array (
      0 => 'text/uri-list',
    ),
    'uris' =>
    array (
      0 => 'text/uri-list',
    ),
    'url' =>
    array (
      0 => 'application/x-mswinurl',
    ),
    'urls' =>
    array (
      0 => 'text/uri-list',
    ),
    'ustar' =>
    array (
      0 => 'application/x-ustar',
    ),
    'utz' =>
    array (
      0 => 'application/vnd.uiq.theme',
    ),
    'uu' =>
    array (
      0 => 'text/x-uuencode',
    ),
    'uue' =>
    array (
      0 => 'text/x-uuencode',
    ),
    'uva' =>
    array (
      0 => 'audio/vnd.dece.audio',
    ),
    'uvd' =>
    array (
      0 => 'application/vnd.dece.data',
    ),
    'uvf' =>
    array (
      0 => 'application/vnd.dece.data',
    ),
    'uvg' =>
    array (
      0 => 'image/vnd.dece.graphic',
    ),
    'uvh' =>
    array (
      0 => 'video/vnd.dece.hd',
    ),
    'uvi' =>
    array (
      0 => 'image/vnd.dece.graphic',
    ),
    'uvm' =>
    array (
      0 => 'video/vnd.dece.mobile',
    ),
    'uvp' =>
    array (
      0 => 'video/vnd.dece.pd',
    ),
    'uvs' =>
    array (
      0 => 'video/vnd.dece.sd',
    ),
    'uvt' =>
    array (
      0 => 'application/vnd.dece.ttml+xml',
    ),
    'uvu' =>
    array (
      0 => 'video/vnd.uvvu.mp4',
    ),
    'uvv' =>
    array (
      0 => 'video/vnd.dece.video',
    ),
    'uvva' =>
    array (
      0 => 'audio/vnd.dece.audio',
    ),
    'uvvd' =>
    array (
      0 => 'application/vnd.dece.data',
    ),
    'uvvf' =>
    array (
      0 => 'application/vnd.dece.data',
    ),
    'uvvg' =>
    array (
      0 => 'image/vnd.dece.graphic',
    ),
    'uvvh' =>
    array (
      0 => 'video/vnd.dece.hd',
    ),
    'uvvi' =>
    array (
      0 => 'image/vnd.dece.graphic',
    ),
    'uvvm' =>
    array (
      0 => 'video/vnd.dece.mobile',
    ),
    'uvvp' =>
    array (
      0 => 'video/vnd.dece.pd',
    ),
    'uvvs' =>
    array (
      0 => 'video/vnd.dece.sd',
    ),
    'uvvt' =>
    array (
      0 => 'application/vnd.dece.ttml+xml',
    ),
    'uvvu' =>
    array (
      0 => 'video/vnd.uvvu.mp4',
    ),
    'uvvv' =>
    array (
      0 => 'video/vnd.dece.video',
    ),
    'uvvx' =>
    array (
      0 => 'application/vnd.dece.unspecified',
    ),
    'uvvz' =>
    array (
      0 => 'application/vnd.dece.zip',
    ),
    'uvx' =>
    array (
      0 => 'application/vnd.dece.unspecified',
    ),
    'uvz' =>
    array (
      0 => 'application/vnd.dece.zip',
    ),
    'v' =>
    array (
      0 => 'text/x-verilog',
    ),
    'v64' =>
    array (
      0 => 'application/x-n64-rom',
    ),
    'vala' =>
    array (
      0 => 'text/x-vala',
    ),
    'vapi' =>
    array (
      0 => 'text/x-vala',
    ),
    'vb' =>
    array (
      0 => 'application/x-virtual-boy-rom',
    ),
    'vcard' =>
    array (
      0 => 'text/vcard',
    ),
    'vcd' =>
    array (
      0 => 'application/x-cdlink',
    ),
    'vcf' =>
    array (
      0 => 'text/x-vcard',
      1 => 'text/vcard',
    ),
    'vcg' =>
    array (
      0 => 'application/vnd.groove-vcard',
    ),
    'vcs' =>
    array (
      0 => 'text/x-vcalendar',
      1 => 'text/calendar',
    ),
    'vct' =>
    array (
      0 => 'text/vcard',
    ),
    'vcx' =>
    array (
      0 => 'application/vnd.vcx',
    ),
    'vda' =>
    array (
      0 => 'image/x-tga',
    ),
    'vhd' =>
    array (
      0 => 'text/x-vhdl',
    ),
    'vhdl' =>
    array (
      0 => 'text/x-vhdl',
    ),
    'vis' =>
    array (
      0 => 'application/vnd.visionary',
    ),
    'viv' =>
    array (
      0 => 'video/vnd.vivo',
    ),
    'vivo' =>
    array (
      0 => 'video/vnd.vivo',
    ),
    'vlc' =>
    array (
      0 => 'audio/x-mpegurl',
    ),
    'vob' =>
    array (
      0 => 'video/x-ms-vob',
      1 => 'video/mpeg',
    ),
    'voc' =>
    array (
      0 => 'audio/x-voc',
    ),
    'vor' =>
    array (
      0 => 'application/vnd.stardivision.writer',
    ),
    'vox' =>
    array (
      0 => 'application/x-authorware-bin',
    ),
    'vrm' =>
    array (
      0 => 'model/vrml',
    ),
    'vrml' =>
    array (
      0 => 'model/vrml',
    ),
    'vsd' =>
    array (
      0 => 'application/vnd.visio',
    ),
    'vsdm' =>
    array (
      0 => 'application/vnd.ms-visio.drawing.macroenabled.main+xml',
    ),
    'vsdx' =>
    array (
      0 => 'application/vnd.ms-visio.drawing.main+xml',
    ),
    'vsf' =>
    array (
      0 => 'application/vnd.vsf',
    ),
    'vss' =>
    array (
      0 => 'application/vnd.visio',
    ),
    'vssm' =>
    array (
      0 => 'application/vnd.ms-visio.stencil.macroenabled.main+xml',
    ),
    'vssx' =>
    array (
      0 => 'application/vnd.ms-visio.stencil.main+xml',
    ),
    'vst' =>
    array (
      0 => 'application/vnd.visio',
      1 => 'image/x-tga',
    ),
    'vstm' =>
    array (
      0 => 'application/vnd.ms-visio.template.macroenabled.main+xml',
    ),
    'vstx' =>
    array (
      0 => 'application/vnd.ms-visio.template.main+xml',
    ),
    'vsw' =>
    array (
      0 => 'application/vnd.visio',
    ),
    'vtt' =>
    array (
      0 => 'text/vtt',
    ),
    'vtu' =>
    array (
      0 => 'model/vnd.vtu',
    ),
    'vxml' =>
    array (
      0 => 'application/voicexml+xml',
    ),
    'w3d' =>
    array (
      0 => 'application/x-director',
    ),
    'wad' =>
    array (
      0 => 'application/x-doom',
      1 => 'application/x-wii-wad',
      2 => 'application/x-doom-wad',
    ),
    'wav' =>
    array (
      0 => 'audio/x-wav',
    ),
    'wax' =>
    array (
      0 => 'audio/x-ms-wax',
      1 => 'audio/x-ms-asx',
    ),
    'wb1' =>
    array (
      0 => 'application/x-quattropro',
    ),
    'wb2' =>
    array (
      0 => 'application/x-quattropro',
    ),
    'wb3' =>
    array (
      0 => 'application/x-quattropro',
    ),
    'wbmp' =>
    array (
      0 => 'image/vnd.wap.wbmp',
    ),
    'wbs' =>
    array (
      0 => 'application/vnd.criticaltools.wbs+xml',
    ),
    'wbxml' =>
    array (
      0 => 'application/vnd.wap.wbxml',
    ),
    'wcm' =>
    array (
      0 => 'application/vnd.ms-works',
    ),
    'wdb' =>
    array (
      0 => 'application/vnd.ms-works',
    ),
    'wdp' =>
    array (
      0 => 'image/vnd.ms-photo',
    ),
    'weba' =>
    array (
      0 => 'audio/webm',
    ),
    'webm' =>
    array (
      0 => 'video/webm',
    ),
    'webp' =>
    array (
      0 => 'image/webp',
    ),
    'wg' =>
    array (
      0 => 'application/vnd.pmi.widget',
    ),
    'wgt' =>
    array (
      0 => 'application/widget',
    ),
    'wim' =>
    array (
      0 => 'application/x-ms-wim',
    ),
    'wk1' =>
    array (
      0 => 'application/vnd.lotus-1-2-3',
    ),
    'wk3' =>
    array (
      0 => 'application/vnd.lotus-1-2-3',
    ),
    'wk4' =>
    array (
      0 => 'application/vnd.lotus-1-2-3',
    ),
    'wkdownload' =>
    array (
      0 => 'application/x-partial-download',
    ),
    'wks' =>
    array (
      0 => 'application/vnd.ms-works',
      1 => 'application/vnd.lotus-1-2-3',
    ),
    'wm' =>
    array (
      0 => 'video/x-ms-wm',
    ),
    'wma' =>
    array (
      0 => 'audio/x-ms-wma',
    ),
    'wmd' =>
    array (
      0 => 'application/x-ms-wmd',
    ),
    'wmf' =>
    array (
      0 => 'application/x-msmetafile',
      1 => 'image/wmf',
    ),
    'wml' =>
    array (
      0 => 'text/vnd.wap.wml',
    ),
    'wmlc' =>
    array (
      0 => 'application/vnd.wap.wmlc',
    ),
    'wmls' =>
    array (
      0 => 'text/vnd.wap.wmlscript',
    ),
    'wmlsc' =>
    array (
      0 => 'application/vnd.wap.wmlscriptc',
    ),
    'wmv' =>
    array (
      0 => 'video/x-ms-wmv',
    ),
    'wmx' =>
    array (
      0 => 'video/x-ms-wmx',
      1 => 'audio/x-ms-asx',
    ),
    'wmz' =>
    array (
      0 => 'application/x-msmetafile',
      1 => 'application/x-ms-wmz',
    ),
    'woff' =>
    array (
      0 => 'font/woff',
    ),
    'woff2' =>
    array (
      0 => 'font/woff2',
      1 => 'font/woff',
    ),
    'wp' =>
    array (
      0 => 'application/vnd.wordperfect',
    ),
    'wp4' =>
    array (
      0 => 'application/vnd.wordperfect',
    ),
    'wp5' =>
    array (
      0 => 'application/vnd.wordperfect',
    ),
    'wp6' =>
    array (
      0 => 'application/vnd.wordperfect',
    ),
    'wpd' =>
    array (
      0 => 'application/vnd.wordperfect',
    ),
    'wpg' =>
    array (
      0 => 'application/x-wpg',
    ),
    'wpl' =>
    array (
      0 => 'application/vnd.ms-wpl',
    ),
    'wpp' =>
    array (
      0 => 'application/vnd.wordperfect',
    ),
    'wps' =>
    array (
      0 => 'application/vnd.ms-works',
    ),
    'wqd' =>
    array (
      0 => 'application/vnd.wqd',
    ),
    'wri' =>
    array (
      0 => 'application/x-mswrite',
    ),
    'wrl' =>
    array (
      0 => 'model/vrml',
    ),
    'ws' =>
    array (
      0 => 'application/x-wonderswan-rom',
    ),
    'wsc' =>
    array (
      0 => 'application/x-wonderswan-color-rom',
    ),
    'wsdl' =>
    array (
      0 => 'application/wsdl+xml',
    ),
    'wsgi' =>
    array (
      0 => 'text/x-python',
    ),
    'wspolicy' =>
    array (
      0 => 'application/wspolicy+xml',
    ),
    'wtb' =>
    array (
      0 => 'application/vnd.webturbo',
    ),
    'wv' =>
    array (
      0 => 'audio/x-wavpack',
    ),
    'wvc' =>
    array (
      0 => 'audio/x-wavpack-correction',
    ),
    'wvp' =>
    array (
      0 => 'audio/x-wavpack',
    ),
    'wvx' =>
    array (
      0 => 'video/x-ms-wvx',
      1 => 'audio/x-ms-asx',
    ),
    'wwf' =>
    array (
      0 => 'application/x-wwf',
    ),
    'x32' =>
    array (
      0 => 'application/x-authorware-bin',
    ),
    'x3d' =>
    array (
      0 => 'model/x3d+xml',
    ),
    'x3db' =>
    array (
      0 => 'model/x3d+binary',
    ),
    'x3dbz' =>
    array (
      0 => 'model/x3d+binary',
    ),
    'x3dv' =>
    array (
      0 => 'model/x3d+vrml',
    ),
    'x3dvz' =>
    array (
      0 => 'model/x3d+vrml',
    ),
    'x3dz' =>
    array (
      0 => 'model/x3d+xml',
    ),
    'x3f' =>
    array (
      0 => 'image/x-sigma-x3f',
    ),
    'xac' =>
    array (
      0 => 'application/x-gnucash',
    ),
    'xaml' =>
    array (
      0 => 'application/xaml+xml',
    ),
    'xap' =>
    array (
      0 => 'application/x-silverlight-app',
    ),
    'xar' =>
    array (
      0 => 'application/vnd.xara',
      1 => 'application/x-xar',
    ),
    'xbap' =>
    array (
      0 => 'application/x-ms-xbap',
    ),
    'xbd' =>
    array (
      0 => 'application/vnd.fujixerox.docuworks.binder',
    ),
    'xbel' =>
    array (
      0 => 'application/x-xbel',
    ),
    'xbl' =>
    array (
      0 => 'application/xml',
    ),
    'xbm' =>
    array (
      0 => 'image/x-xbitmap',
    ),
    'xcf' =>
    array (
      0 => 'image/x-xcf',
    ),
    'xcf.bz2' =>
    array (
      0 => 'image/x-compressed-xcf',
    ),
    'xcf.gz' =>
    array (
      0 => 'image/x-compressed-xcf',
    ),
    'xdf' =>
    array (
      0 => 'application/xcap-diff+xml',
    ),
    'xdgapp' =>
    array (
      0 => 'application/vnd.flatpak',
    ),
    'xdm' =>
    array (
      0 => 'application/vnd.syncml.dm+xml',
    ),
    'xdp' =>
    array (
      0 => 'application/vnd.adobe.xdp+xml',
    ),
    'xdssc' =>
    array (
      0 => 'application/dssc+xml',
    ),
    'xdw' =>
    array (
      0 => 'application/vnd.fujixerox.docuworks',
    ),
    'xenc' =>
    array (
      0 => 'application/xenc+xml',
    ),
    'xer' =>
    array (
      0 => 'application/patch-ops-error+xml',
    ),
    'xfdf' =>
    array (
      0 => 'application/vnd.adobe.xfdf',
    ),
    'xfdl' =>
    array (
      0 => 'application/vnd.xfdl',
    ),
    'xhe' =>
    array (
      0 => 'audio/usac',
    ),
    'xht' =>
    array (
      0 => 'application/xhtml+xml',
    ),
    'xhtml' =>
    array (
      0 => 'application/xhtml+xml',
    ),
    'xhvml' =>
    array (
      0 => 'application/xv+xml',
    ),
    'xi' =>
    array (
      0 => 'audio/x-xi',
    ),
    'xif' =>
    array (
      0 => 'image/vnd.xiff',
    ),
    'xla' =>
    array (
      0 => 'application/vnd.ms-excel',
    ),
    'xlam' =>
    array (
      0 => 'application/vnd.ms-excel.addin.macroenabled.12',
    ),
    'xlc' =>
    array (
      0 => 'application/vnd.ms-excel',
    ),
    'xld' =>
    array (
      0 => 'application/vnd.ms-excel',
    ),
    'xlf' =>
    array (
      0 => 'application/x-xliff+xml',
      1 => 'application/xliff+xml',
    ),
    'xliff' =>
    array (
      0 => 'application/xliff+xml',
    ),
    'xll' =>
    array (
      0 => 'application/vnd.ms-excel',
    ),
    'xlm' =>
    array (
      0 => 'application/vnd.ms-excel',
    ),
    'xlr' =>
    array (
      0 => 'application/vnd.ms-works',
    ),
    'xls' =>
    array (
      0 => 'application/vnd.ms-excel',
    ),
    'xlsb' =>
    array (
      0 => 'application/vnd.ms-excel.sheet.binary.macroenabled.12',
    ),
    'xlsm' =>
    array (
      0 => 'application/vnd.ms-excel.sheet.macroenabled.12',
    ),
    'xlsx' =>
    array (
      0 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    ),
    'xlt' =>
    array (
      0 => 'application/vnd.ms-excel',
    ),
    'xltm' =>
    array (
      0 => 'application/vnd.ms-excel.template.macroenabled.12',
    ),
    'xltx' =>
    array (
      0 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.template',
    ),
    'xlw' =>
    array (
      0 => 'application/vnd.ms-excel',
    ),
    'xm' =>
    array (
      0 => 'audio/xm',
      1 => 'audio/x-xm',
    ),
    'xmf' =>
    array (
      0 => 'audio/x-xmf',
    ),
    'xmi' =>
    array (
      0 => 'text/x-xmi',
    ),
    'xml' =>
    array (
      0 => 'application/xml',
    ),
    'xo' =>
    array (
      0 => 'application/vnd.olpc-sugar',
    ),
    'xop' =>
    array (
      0 => 'application/xop+xml',
    ),
    'xpi' =>
    array (
      0 => 'application/x-xpinstall',
    ),
    'xpl' =>
    array (
      0 => 'application/xproc+xml',
    ),
    'xpm' =>
    array (
      0 => 'image/x-xpixmap',
    ),
    'xpr' =>
    array (
      0 => 'application/vnd.is-xpr',
    ),
    'xps' =>
    array (
      0 => 'application/vnd.ms-xpsdocument',
      1 => 'application/oxps',
    ),
    'xpw' =>
    array (
      0 => 'application/vnd.intercon.formnet',
    ),
    'xpx' =>
    array (
      0 => 'application/vnd.intercon.formnet',
    ),
    'xsd' =>
    array (
      0 => 'application/xml',
    ),
    'xsl' =>
    array (
      0 => 'application/xml',
      1 => 'application/xslt+xml',
    ),
    'xslfo' =>
    array (
      0 => 'text/x-xslfo',
    ),
    'xslt' =>
    array (
      0 => 'application/xslt+xml',
    ),
    'xsm' =>
    array (
      0 => 'application/vnd.syncml+xml',
    ),
    'xspf' =>
    array (
      0 => 'application/xspf+xml',
    ),
    'xul' =>
    array (
      0 => 'application/vnd.mozilla.xul+xml',
    ),
    'xvm' =>
    array (
      0 => 'application/xv+xml',
    ),
    'xvml' =>
    array (
      0 => 'application/xv+xml',
    ),
    'xwd' =>
    array (
      0 => 'image/x-xwindowdump',
    ),
    'xyz' =>
    array (
      0 => 'chemical/x-xyz',
    ),
    'xz' =>
    array (
      0 => 'application/x-xz',
    ),
    'yaml' =>
    array (
      0 => 'application/x-yaml',
    ),
    'yang' =>
    array (
      0 => 'application/yang',
    ),
    'yin' =>
    array (
      0 => 'application/yin+xml',
    ),
    'yml' =>
    array (
      0 => 'application/x-yaml',
    ),
    'yt' =>
    array (
      0 => 'application/vnd.youtube.yt',
    ),
    'z' =>
    array (
      0 => 'application/x-compress',
    ),
    'z1' =>
    array (
      0 => 'application/x-zmachine',
    ),
    'z2' =>
    array (
      0 => 'application/x-zmachine',
    ),
    'z3' =>
    array (
      0 => 'application/x-zmachine',
    ),
    'z4' =>
    array (
      0 => 'application/x-zmachine',
    ),
    'z5' =>
    array (
      0 => 'application/x-zmachine',
    ),
    'z6' =>
    array (
      0 => 'application/x-zmachine',
    ),
    'z64' =>
    array (
      0 => 'application/x-n64-rom',
    ),
    'z7' =>
    array (
      0 => 'application/x-zmachine',
    ),
    'z8' =>
    array (
      0 => 'application/x-zmachine',
    ),
    'zabw' =>
    array (
      0 => 'application/x-abiword',
    ),
    'zaz' =>
    array (
      0 => 'application/vnd.zzazz.deck+xml',
    ),
    'zip' =>
    array (
      0 => 'application/zip',
    ),
    'zir' =>
    array (
      0 => 'application/vnd.zul',
    ),
    'zirz' =>
    array (
      0 => 'application/vnd.zul',
    ),
    'zmm' =>
    array (
      0 => 'application/vnd.handheld-entertainment+xml',
    ),
    'zoo' =>
    array (
      0 => 'application/x-zoo',
    ),
    'zsav' =>
    array (
      0 => 'application/x-spss-sav',
    ),
    'zz' =>
    array (
      0 => 'application/zlib',
    ),
    123 =>
    array (
      0 => 'application/vnd.lotus-1-2-3',
    ),
    602 =>
    array (
      0 => 'application/x-t602',
    ),
    669 =>
    array (
      0 => 'audio/x-mod',
    ),
  ),
);
    // phpcs:enable
}
