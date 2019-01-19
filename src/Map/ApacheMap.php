<?php

namespace FileEye\MimeMap;

/**
 * Class for mapping file extensions to MIME types.
 *
 * This is the default map, taken from the Apache HTTPD documentation website.
 */
class ApacheMap extends AbstractMap
{
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
    'application/gml+xml' =>
    array (
      0 => 'gml',
    ),
    'application/gpx+xml' =>
    array (
      0 => 'gpx',
    ),
    'application/gxf' =>
    array (
      0 => 'gxf',
    ),
    'application/hyperstudio' =>
    array (
      0 => 'stk',
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
    ),
    'application/json' =>
    array (
      0 => 'json',
    ),
    'application/jsonml+json' =>
    array (
      0 => 'jsonml',
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
    'application/oxps' =>
    array (
      0 => 'oxps',
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
    ),
    'application/pgp-signature' =>
    array (
      0 => 'asc',
      1 => 'sig',
    ),
    'application/pics-rules' =>
    array (
      0 => 'prf',
    ),
    'application/pkcs10' =>
    array (
      0 => 'p10',
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
    'application/rdf+xml' =>
    array (
      0 => 'rdf',
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
    'application/smil+xml' =>
    array (
      0 => 'smi',
      1 => 'smil',
    ),
    'application/sparql-query' =>
    array (
      0 => 'rq',
    ),
    'application/sparql-results+xml' =>
    array (
      0 => 'srx',
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
    'application/vnd.apple.installer+xml' =>
    array (
      0 => 'mpkg',
    ),
    'application/vnd.apple.mpegurl' =>
    array (
      0 => 'm3u8',
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
    'application/vnd.commonspace' =>
    array (
      0 => 'csp',
    ),
    'application/vnd.contact.cmsg' =>
    array (
      0 => 'cdbcmsg',
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
    'application/vnd.ms-artgalry' =>
    array (
      0 => 'cil',
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
    ),
    'application/vnd.oasis.opendocument.graphics' =>
    array (
      0 => 'odg',
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
    'application/vnd.oasis.opendocument.presentation-template' =>
    array (
      0 => 'otp',
    ),
    'application/vnd.oasis.opendocument.spreadsheet' =>
    array (
      0 => 'ods',
    ),
    'application/vnd.oasis.opendocument.spreadsheet-template' =>
    array (
      0 => 'ots',
    ),
    'application/vnd.oasis.opendocument.text' =>
    array (
      0 => 'odt',
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
    'application/vnd.stardivision.calc' =>
    array (
      0 => 'sdc',
    ),
    'application/vnd.stardivision.draw' =>
    array (
      0 => 'sda',
    ),
    'application/vnd.stardivision.impress' =>
    array (
      0 => 'sdd',
    ),
    'application/vnd.stardivision.math' =>
    array (
      0 => 'smf',
    ),
    'application/vnd.stardivision.writer' =>
    array (
      0 => 'sdw',
      1 => 'vor',
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
    ),
    'application/x-ace-compressed' =>
    array (
      0 => 'ace',
    ),
    'application/x-apple-diskimage' =>
    array (
      0 => 'dmg',
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
    'application/x-bcpio' =>
    array (
      0 => 'bcpio',
    ),
    'application/x-bittorrent' =>
    array (
      0 => 'torrent',
    ),
    'application/x-blorb' =>
    array (
      0 => 'blb',
      1 => 'blorb',
    ),
    'application/x-bzip' =>
    array (
      0 => 'bz',
    ),
    'application/x-bzip2' =>
    array (
      0 => 'bz2',
      1 => 'boz',
    ),
    'application/x-cbr' =>
    array (
      0 => 'cbr',
      1 => 'cba',
      2 => 'cbt',
      3 => 'cbz',
      4 => 'cb7',
    ),
    'application/x-cdlink' =>
    array (
      0 => 'vcd',
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
    'application/x-conference' =>
    array (
      0 => 'nsc',
    ),
    'application/x-cpio' =>
    array (
      0 => 'cpio',
    ),
    'application/x-csh' =>
    array (
      0 => 'csh',
    ),
    'application/x-debian-package' =>
    array (
      0 => 'deb',
      1 => 'udeb',
    ),
    'application/x-dgc-compressed' =>
    array (
      0 => 'dgc',
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
    'application/x-doom' =>
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
    'application/x-envoy' =>
    array (
      0 => 'evy',
    ),
    'application/x-eva' =>
    array (
      0 => 'eva',
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
    ),
    'application/x-font-snf' =>
    array (
      0 => 'snf',
    ),
    'application/x-font-type1' =>
    array (
      0 => 'pfa',
      1 => 'pfb',
      2 => 'pfm',
      3 => 'afm',
    ),
    'application/x-freearc' =>
    array (
      0 => 'arc',
    ),
    'application/x-futuresplash' =>
    array (
      0 => 'spl',
    ),
    'application/x-gca-compressed' =>
    array (
      0 => 'gca',
    ),
    'application/x-glulx' =>
    array (
      0 => 'ulx',
    ),
    'application/x-gnumeric' =>
    array (
      0 => 'gnumeric',
    ),
    'application/x-gramps-xml' =>
    array (
      0 => 'gramps',
    ),
    'application/x-gtar' =>
    array (
      0 => 'gtar',
    ),
    'application/x-hdf' =>
    array (
      0 => 'hdf',
    ),
    'application/x-install-instructions' =>
    array (
      0 => 'install',
    ),
    'application/x-iso9660-image' =>
    array (
      0 => 'iso',
    ),
    'application/x-java-jnlp-file' =>
    array (
      0 => 'jnlp',
    ),
    'application/x-latex' =>
    array (
      0 => 'latex',
    ),
    'application/x-lzh-compressed' =>
    array (
      0 => 'lzh',
      1 => 'lha',
    ),
    'application/x-mie' =>
    array (
      0 => 'mie',
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
    'application/x-ms-shortcut' =>
    array (
      0 => 'lnk',
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
    'application/x-mswrite' =>
    array (
      0 => 'wri',
    ),
    'application/x-netcdf' =>
    array (
      0 => 'nc',
      1 => 'cdf',
    ),
    'application/x-nzb' =>
    array (
      0 => 'nzb',
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
    'application/x-rar-compressed' =>
    array (
      0 => 'rar',
    ),
    'application/x-research-info-systems' =>
    array (
      0 => 'ris',
    ),
    'application/x-sh' =>
    array (
      0 => 'sh',
    ),
    'application/x-shar' =>
    array (
      0 => 'shar',
    ),
    'application/x-shockwave-flash' =>
    array (
      0 => 'swf',
    ),
    'application/x-silverlight-app' =>
    array (
      0 => 'xap',
    ),
    'application/x-sql' =>
    array (
      0 => 'sql',
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
    'application/x-tads' =>
    array (
      0 => 'gam',
    ),
    'application/x-tar' =>
    array (
      0 => 'tar',
    ),
    'application/x-tcl' =>
    array (
      0 => 'tcl',
    ),
    'application/x-tex' =>
    array (
      0 => 'tex',
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
    'application/x-ustar' =>
    array (
      0 => 'ustar',
    ),
    'application/x-wais-source' =>
    array (
      0 => 'src',
    ),
    'application/x-x509-ca-cert' =>
    array (
      0 => 'der',
      1 => 'crt',
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
    'application/xml' =>
    array (
      0 => 'xml',
      1 => 'xsl',
    ),
    'application/xml-dtd' =>
    array (
      0 => 'dtd',
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
    'audio/adpcm' =>
    array (
      0 => 'adp',
    ),
    'audio/basic' =>
    array (
      0 => 'au',
      1 => 'snd',
    ),
    'audio/midi' =>
    array (
      0 => 'mid',
      1 => 'midi',
      2 => 'kar',
      3 => 'rmi',
    ),
    'audio/mp4' =>
    array (
      0 => 'm4a',
      1 => 'mp4a',
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
    ),
    'audio/s3m' =>
    array (
      0 => 's3m',
    ),
    'audio/silk' =>
    array (
      0 => 'sil',
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
    'audio/webm' =>
    array (
      0 => 'weba',
    ),
    'audio/x-aac' =>
    array (
      0 => 'aac',
    ),
    'audio/x-aiff' =>
    array (
      0 => 'aif',
      1 => 'aiff',
      2 => 'aifc',
    ),
    'audio/x-caf' =>
    array (
      0 => 'caf',
    ),
    'audio/x-flac' =>
    array (
      0 => 'flac',
    ),
    'audio/x-matroska' =>
    array (
      0 => 'mka',
    ),
    'audio/x-mpegurl' =>
    array (
      0 => 'm3u',
    ),
    'audio/x-ms-wax' =>
    array (
      0 => 'wax',
    ),
    'audio/x-ms-wma' =>
    array (
      0 => 'wma',
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
    'audio/x-wav' =>
    array (
      0 => 'wav',
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
    ),
    'font/woff2' =>
    array (
      0 => 'woff2',
    ),
    'image/bmp' =>
    array (
      0 => 'bmp',
    ),
    'image/cgm' =>
    array (
      0 => 'cgm',
    ),
    'image/g3fax' =>
    array (
      0 => 'g3',
    ),
    'image/gif' =>
    array (
      0 => 'gif',
    ),
    'image/ief' =>
    array (
      0 => 'ief',
    ),
    'image/jpeg' =>
    array (
      0 => 'jpeg',
      1 => 'jpg',
      2 => 'jpe',
    ),
    'image/ktx' =>
    array (
      0 => 'ktx',
    ),
    'image/png' =>
    array (
      0 => 'png',
    ),
    'image/prs.btif' =>
    array (
      0 => 'btif',
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
    'image/vnd.wap.wbmp' =>
    array (
      0 => 'wbmp',
    ),
    'image/vnd.xiff' =>
    array (
      0 => 'xif',
    ),
    'image/webp' =>
    array (
      0 => 'webp',
    ),
    'image/x-3ds' =>
    array (
      0 => '3ds',
    ),
    'image/x-cmu-raster' =>
    array (
      0 => 'ras',
    ),
    'image/x-cmx' =>
    array (
      0 => 'cmx',
    ),
    'image/x-freehand' =>
    array (
      0 => 'fh',
      1 => 'fhc',
      2 => 'fh4',
      3 => 'fh5',
      4 => 'fh7',
    ),
    'image/x-icon' =>
    array (
      0 => 'ico',
    ),
    'image/x-mrsid-image' =>
    array (
      0 => 'sid',
    ),
    'image/x-pcx' =>
    array (
      0 => 'pcx',
    ),
    'image/x-pict' =>
    array (
      0 => 'pic',
      1 => 'pct',
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
    'image/x-rgb' =>
    array (
      0 => 'rgb',
    ),
    'image/x-tga' =>
    array (
      0 => 'tga',
    ),
    'image/x-xbitmap' =>
    array (
      0 => 'xbm',
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
    ),
    'text/calendar' =>
    array (
      0 => 'ics',
      1 => 'ifb',
    ),
    'text/css' =>
    array (
      0 => 'css',
    ),
    'text/csv' =>
    array (
      0 => 'csv',
    ),
    'text/html' =>
    array (
      0 => 'html',
      1 => 'htm',
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
    ),
    'text/prs.lines.tag' =>
    array (
      0 => 'dsc',
    ),
    'text/richtext' =>
    array (
      0 => 'rtx',
    ),
    'text/sgml' =>
    array (
      0 => 'sgml',
      1 => 'sgm',
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
    ),
    'text/vnd.in3d.3dml' =>
    array (
      0 => '3dml',
    ),
    'text/vnd.in3d.spot' =>
    array (
      0 => 'spot',
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
    'text/x-asm' =>
    array (
      0 => 's',
      1 => 'asm',
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
    'text/x-fortran' =>
    array (
      0 => 'f',
      1 => 'for',
      2 => 'f77',
      3 => 'f90',
    ),
    'text/x-java-source' =>
    array (
      0 => 'java',
    ),
    'text/x-nfo' =>
    array (
      0 => 'nfo',
    ),
    'text/x-opml' =>
    array (
      0 => 'opml',
    ),
    'text/x-pascal' =>
    array (
      0 => 'p',
      1 => 'pas',
    ),
    'text/x-setext' =>
    array (
      0 => 'etx',
    ),
    'text/x-sfv' =>
    array (
      0 => 'sfv',
    ),
    'text/x-uuencode' =>
    array (
      0 => 'uu',
    ),
    'text/x-vcalendar' =>
    array (
      0 => 'vcs',
    ),
    'text/x-vcard' =>
    array (
      0 => 'vcf',
    ),
    'video/3gpp' =>
    array (
      0 => '3gp',
    ),
    'video/3gpp2' =>
    array (
      0 => '3g2',
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
    'video/mp4' =>
    array (
      0 => 'mp4',
      1 => 'mp4v',
      2 => 'mpg4',
    ),
    'video/mpeg' =>
    array (
      0 => 'mpeg',
      1 => 'mpg',
      2 => 'mpe',
      3 => 'm1v',
      4 => 'm2v',
    ),
    'video/ogg' =>
    array (
      0 => 'ogv',
    ),
    'video/quicktime' =>
    array (
      0 => 'qt',
      1 => 'mov',
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
    ),
    'video/vnd.ms-playready.media.pyv' =>
    array (
      0 => 'pyv',
    ),
    'video/vnd.uvvu.mp4' =>
    array (
      0 => 'uvu',
      1 => 'uvvu',
    ),
    'video/vnd.vivo' =>
    array (
      0 => 'viv',
    ),
    'video/webm' =>
    array (
      0 => 'webm',
    ),
    'video/x-f4v' =>
    array (
      0 => 'f4v',
    ),
    'video/x-fli' =>
    array (
      0 => 'fli',
    ),
    'video/x-flv' =>
    array (
      0 => 'flv',
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
    ),
    'video/x-sgi-movie' =>
    array (
      0 => 'movie',
    ),
    'video/x-smv' =>
    array (
      0 => 'smv',
    ),
    'x-conference/x-cooltalk' =>
    array (
      0 => 'ice',
    ),
  ),
  'extensions' =>
  array (
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
    '3gp' =>
    array (
      0 => 'video/3gpp',
    ),
    '7z' =>
    array (
      0 => 'application/x-7z-compressed',
    ),
    'aab' =>
    array (
      0 => 'application/x-authorware-bin',
    ),
    'aac' =>
    array (
      0 => 'audio/x-aac',
    ),
    'aam' =>
    array (
      0 => 'application/x-authorware-map',
    ),
    'aas' =>
    array (
      0 => 'application/x-authorware-seg',
    ),
    'abw' =>
    array (
      0 => 'application/x-abiword',
    ),
    'ac' =>
    array (
      0 => 'application/pkix-attr-cert',
    ),
    'acc' =>
    array (
      0 => 'application/vnd.americandynamics.acc',
    ),
    'ace' =>
    array (
      0 => 'application/x-ace-compressed',
    ),
    'acu' =>
    array (
      0 => 'application/vnd.acucobol',
    ),
    'acutc' =>
    array (
      0 => 'application/vnd.acucorp',
    ),
    'adp' =>
    array (
      0 => 'audio/adpcm',
    ),
    'aep' =>
    array (
      0 => 'application/vnd.audiograph',
    ),
    'afm' =>
    array (
      0 => 'application/x-font-type1',
    ),
    'afp' =>
    array (
      0 => 'application/vnd.ibm.modcap',
    ),
    'ahead' =>
    array (
      0 => 'application/vnd.ahead.space',
    ),
    'ai' =>
    array (
      0 => 'application/postscript',
    ),
    'aif' =>
    array (
      0 => 'audio/x-aiff',
    ),
    'aifc' =>
    array (
      0 => 'audio/x-aiff',
    ),
    'aiff' =>
    array (
      0 => 'audio/x-aiff',
    ),
    'air' =>
    array (
      0 => 'application/vnd.adobe.air-application-installer-package+zip',
    ),
    'ait' =>
    array (
      0 => 'application/vnd.dvb.ait',
    ),
    'ami' =>
    array (
      0 => 'application/vnd.amiga.ami',
    ),
    'apk' =>
    array (
      0 => 'application/vnd.android.package-archive',
    ),
    'appcache' =>
    array (
      0 => 'text/cache-manifest',
    ),
    'application' =>
    array (
      0 => 'application/x-ms-application',
    ),
    'apr' =>
    array (
      0 => 'application/vnd.lotus-approach',
    ),
    'arc' =>
    array (
      0 => 'application/x-freearc',
    ),
    'asc' =>
    array (
      0 => 'application/pgp-signature',
    ),
    'asf' =>
    array (
      0 => 'video/x-ms-asf',
    ),
    'asm' =>
    array (
      0 => 'text/x-asm',
    ),
    'aso' =>
    array (
      0 => 'application/vnd.accpac.simply.aso',
    ),
    'asx' =>
    array (
      0 => 'video/x-ms-asf',
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
    'avi' =>
    array (
      0 => 'video/x-msvideo',
    ),
    'aw' =>
    array (
      0 => 'application/applixware',
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
    ),
    'bed' =>
    array (
      0 => 'application/vnd.realvnc.bed',
    ),
    'bh2' =>
    array (
      0 => 'application/vnd.fujitsu.oasysprs',
    ),
    'bin' =>
    array (
      0 => 'application/octet-stream',
    ),
    'blb' =>
    array (
      0 => 'application/x-blorb',
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
    ),
    'c' =>
    array (
      0 => 'text/x-c',
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
    ),
    'cba' =>
    array (
      0 => 'application/x-cbr',
    ),
    'cbr' =>
    array (
      0 => 'application/x-cbr',
    ),
    'cbt' =>
    array (
      0 => 'application/x-cbr',
    ),
    'cbz' =>
    array (
      0 => 'application/x-cbr',
    ),
    'cc' =>
    array (
      0 => 'text/x-c',
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
    'cfs' =>
    array (
      0 => 'application/x-cfs-compressed',
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
    'cla' =>
    array (
      0 => 'application/vnd.claymore',
    ),
    'class' =>
    array (
      0 => 'application/java-vm',
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
    'cod' =>
    array (
      0 => 'application/vnd.rim.cod',
    ),
    'com' =>
    array (
      0 => 'application/x-msdownload',
    ),
    'conf' =>
    array (
      0 => 'text/plain',
    ),
    'cpio' =>
    array (
      0 => 'application/x-cpio',
    ),
    'cpp' =>
    array (
      0 => 'text/x-c',
    ),
    'cpt' =>
    array (
      0 => 'application/mac-compactpro',
    ),
    'crd' =>
    array (
      0 => 'application/x-mscardfile',
    ),
    'crl' =>
    array (
      0 => 'application/pkix-crl',
    ),
    'crt' =>
    array (
      0 => 'application/x-x509-ca-cert',
    ),
    'cryptonote' =>
    array (
      0 => 'application/vnd.rig.cryptonote',
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
    'cu' =>
    array (
      0 => 'application/cu-seeme',
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
    ),
    'dae' =>
    array (
      0 => 'model/vnd.collada+xml',
    ),
    'daf' =>
    array (
      0 => 'application/vnd.mobius.daf',
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
    'dbk' =>
    array (
      0 => 'application/docbook+xml',
    ),
    'dcr' =>
    array (
      0 => 'application/x-director',
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
    'deb' =>
    array (
      0 => 'application/x-debian-package',
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
    'dfac' =>
    array (
      0 => 'application/vnd.dreamfactory',
    ),
    'dgc' =>
    array (
      0 => 'application/x-dgc-compressed',
    ),
    'dic' =>
    array (
      0 => 'text/x-c',
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
    'djv' =>
    array (
      0 => 'image/vnd.djvu',
    ),
    'djvu' =>
    array (
      0 => 'image/vnd.djvu',
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
    'doc' =>
    array (
      0 => 'application/msword',
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
    'dump' =>
    array (
      0 => 'application/octet-stream',
    ),
    'dvb' =>
    array (
      0 => 'video/vnd.dvb.file',
    ),
    'dvi' =>
    array (
      0 => 'application/x-dvi',
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
    'ei6' =>
    array (
      0 => 'application/vnd.pg.osasli',
    ),
    'elc' =>
    array (
      0 => 'application/octet-stream',
    ),
    'emf' =>
    array (
      0 => 'application/x-msmetafile',
    ),
    'eml' =>
    array (
      0 => 'message/rfc822',
    ),
    'emma' =>
    array (
      0 => 'application/emma+xml',
    ),
    'emz' =>
    array (
      0 => 'application/x-msmetafile',
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
    ),
    'epub' =>
    array (
      0 => 'application/epub+zip',
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
    ),
    'exi' =>
    array (
      0 => 'application/exi',
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
    'f4v' =>
    array (
      0 => 'video/x-f4v',
    ),
    'f77' =>
    array (
      0 => 'text/x-fortran',
    ),
    'f90' =>
    array (
      0 => 'text/x-fortran',
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
    'fdf' =>
    array (
      0 => 'application/vnd.fdf',
    ),
    'fe_launch' =>
    array (
      0 => 'application/vnd.denovo.fcselayout-link',
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
    ),
    'flac' =>
    array (
      0 => 'audio/x-flac',
    ),
    'fli' =>
    array (
      0 => 'video/x-fli',
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
    'gbr' =>
    array (
      0 => 'application/rpki-ghostbusters',
    ),
    'gca' =>
    array (
      0 => 'application/x-gca-compressed',
    ),
    'gdl' =>
    array (
      0 => 'model/vnd.gdl',
    ),
    'geo' =>
    array (
      0 => 'application/vnd.dynageo',
    ),
    'gex' =>
    array (
      0 => 'application/vnd.geometry-explorer',
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
    'gim' =>
    array (
      0 => 'application/vnd.groove-identity-message',
    ),
    'gml' =>
    array (
      0 => 'application/gml+xml',
    ),
    'gmx' =>
    array (
      0 => 'application/vnd.gmx',
    ),
    'gnumeric' =>
    array (
      0 => 'application/x-gnumeric',
    ),
    'gph' =>
    array (
      0 => 'application/vnd.flographit',
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
    'gsf' =>
    array (
      0 => 'application/x-font-ghostscript',
    ),
    'gtar' =>
    array (
      0 => 'application/x-gtar',
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
    'gxf' =>
    array (
      0 => 'application/gxf',
    ),
    'gxt' =>
    array (
      0 => 'application/vnd.geonext',
    ),
    'h' =>
    array (
      0 => 'text/x-c',
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
    'hh' =>
    array (
      0 => 'text/x-c',
    ),
    'hlp' =>
    array (
      0 => 'application/winhlp',
    ),
    'hpgl' =>
    array (
      0 => 'application/vnd.hp-hpgl',
    ),
    'hpid' =>
    array (
      0 => 'application/vnd.hp-hpid',
    ),
    'hps' =>
    array (
      0 => 'application/vnd.hp-hps',
    ),
    'hqx' =>
    array (
      0 => 'application/mac-binhex40',
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
    'i2g' =>
    array (
      0 => 'application/vnd.intergeo',
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
    'ico' =>
    array (
      0 => 'image/x-icon',
    ),
    'ics' =>
    array (
      0 => 'text/calendar',
    ),
    'ief' =>
    array (
      0 => 'image/ief',
    ),
    'ifb' =>
    array (
      0 => 'text/calendar',
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
    'imp' =>
    array (
      0 => 'application/vnd.accpac.simply.imp',
    ),
    'ims' =>
    array (
      0 => 'application/vnd.ms-ims',
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
    ),
    'java' =>
    array (
      0 => 'text/x-java-source',
    ),
    'jisp' =>
    array (
      0 => 'application/vnd.jisp',
    ),
    'jlt' =>
    array (
      0 => 'application/vnd.hp-jlyt',
    ),
    'jnlp' =>
    array (
      0 => 'application/x-java-jnlp-file',
    ),
    'joda' =>
    array (
      0 => 'application/vnd.joost.joda-archive',
    ),
    'jpe' =>
    array (
      0 => 'image/jpeg',
    ),
    'jpeg' =>
    array (
      0 => 'image/jpeg',
    ),
    'jpg' =>
    array (
      0 => 'image/jpeg',
    ),
    'jpgm' =>
    array (
      0 => 'video/jpm',
    ),
    'jpgv' =>
    array (
      0 => 'video/jpeg',
    ),
    'jpm' =>
    array (
      0 => 'video/jpm',
    ),
    'js' =>
    array (
      0 => 'application/javascript',
    ),
    'json' =>
    array (
      0 => 'application/json',
    ),
    'jsonml' =>
    array (
      0 => 'application/jsonml+json',
    ),
    'kar' =>
    array (
      0 => 'audio/midi',
    ),
    'karbon' =>
    array (
      0 => 'application/vnd.kde.karbon',
    ),
    'kfo' =>
    array (
      0 => 'application/vnd.kde.kformula',
    ),
    'kia' =>
    array (
      0 => 'application/vnd.kidspiration',
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
    ),
    'kpr' =>
    array (
      0 => 'application/vnd.kde.kpresenter',
    ),
    'kpt' =>
    array (
      0 => 'application/vnd.kde.kpresenter',
    ),
    'kpxx' =>
    array (
      0 => 'application/vnd.ds-keypoint',
    ),
    'ksp' =>
    array (
      0 => 'application/vnd.kde.kspread',
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
    'kwd' =>
    array (
      0 => 'application/vnd.kde.kword',
    ),
    'kwt' =>
    array (
      0 => 'application/vnd.kde.kword',
    ),
    'lasxml' =>
    array (
      0 => 'application/vnd.las.las+xml',
    ),
    'latex' =>
    array (
      0 => 'application/x-latex',
    ),
    'lbd' =>
    array (
      0 => 'application/vnd.llamagraphics.life-balance.desktop',
    ),
    'lbe' =>
    array (
      0 => 'application/vnd.llamagraphics.life-balance.exchange+xml',
    ),
    'les' =>
    array (
      0 => 'application/vnd.hhe.lesson-player',
    ),
    'lha' =>
    array (
      0 => 'application/x-lzh-compressed',
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
    'log' =>
    array (
      0 => 'text/plain',
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
    'ltf' =>
    array (
      0 => 'application/vnd.frogans.ltf',
    ),
    'lvp' =>
    array (
      0 => 'audio/vnd.lucent.voice',
    ),
    'lwp' =>
    array (
      0 => 'application/vnd.lotus-wordpro',
    ),
    'lzh' =>
    array (
      0 => 'application/x-lzh-compressed',
    ),
    'm13' =>
    array (
      0 => 'application/x-msmediaview',
    ),
    'm14' =>
    array (
      0 => 'application/x-msmediaview',
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
    ),
    'm3u8' =>
    array (
      0 => 'application/vnd.apple.mpegurl',
    ),
    'm4a' =>
    array (
      0 => 'audio/mp4',
    ),
    'm4u' =>
    array (
      0 => 'video/vnd.mpegurl',
    ),
    'm4v' =>
    array (
      0 => 'video/x-m4v',
    ),
    'ma' =>
    array (
      0 => 'application/mathematica',
    ),
    'mads' =>
    array (
      0 => 'application/mads+xml',
    ),
    'mag' =>
    array (
      0 => 'application/vnd.ecowin.chart',
    ),
    'maker' =>
    array (
      0 => 'application/vnd.framemaker',
    ),
    'man' =>
    array (
      0 => 'text/troff',
    ),
    'mar' =>
    array (
      0 => 'application/octet-stream',
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
    'mdb' =>
    array (
      0 => 'application/x-msaccess',
    ),
    'mdi' =>
    array (
      0 => 'image/vnd.ms-modi',
    ),
    'me' =>
    array (
      0 => 'text/troff',
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
    ),
    'mgz' =>
    array (
      0 => 'application/vnd.proteus.magazine',
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
    ),
    'mime' =>
    array (
      0 => 'message/rfc822',
    ),
    'mj2' =>
    array (
      0 => 'video/mj2',
    ),
    'mjp2' =>
    array (
      0 => 'video/mj2',
    ),
    'mk3d' =>
    array (
      0 => 'video/x-matroska',
    ),
    'mka' =>
    array (
      0 => 'audio/x-matroska',
    ),
    'mks' =>
    array (
      0 => 'video/x-matroska',
    ),
    'mkv' =>
    array (
      0 => 'video/x-matroska',
    ),
    'mlp' =>
    array (
      0 => 'application/vnd.dolby.mlp',
    ),
    'mmd' =>
    array (
      0 => 'application/vnd.chipnuts.karaoke-mmd',
    ),
    'mmf' =>
    array (
      0 => 'application/vnd.smaf',
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
    'mobi' =>
    array (
      0 => 'application/x-mobipocket-ebook',
    ),
    'mods' =>
    array (
      0 => 'application/mods+xml',
    ),
    'mov' =>
    array (
      0 => 'video/quicktime',
    ),
    'movie' =>
    array (
      0 => 'video/x-sgi-movie',
    ),
    'mp2' =>
    array (
      0 => 'audio/mpeg',
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
    'ms' =>
    array (
      0 => 'text/troff',
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
    ),
    'msl' =>
    array (
      0 => 'application/vnd.mobius.msl',
    ),
    'msty' =>
    array (
      0 => 'application/vnd.muvee.style',
    ),
    'mts' =>
    array (
      0 => 'model/vnd.mts',
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
    'nfo' =>
    array (
      0 => 'text/x-nfo',
    ),
    'ngdat' =>
    array (
      0 => 'application/vnd.nokia.n-gage.data',
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
    'npx' =>
    array (
      0 => 'image/vnd.net-fpx',
    ),
    'nsc' =>
    array (
      0 => 'application/x-conference',
    ),
    'nsf' =>
    array (
      0 => 'application/vnd.lotus-notes',
    ),
    'ntf' =>
    array (
      0 => 'application/vnd.nitf',
    ),
    'nzb' =>
    array (
      0 => 'application/x-nzb',
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
    ),
    'ogg' =>
    array (
      0 => 'audio/ogg',
    ),
    'ogv' =>
    array (
      0 => 'video/ogg',
    ),
    'ogx' =>
    array (
      0 => 'application/ogg',
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
    'opf' =>
    array (
      0 => 'application/oebps-package+xml',
    ),
    'opml' =>
    array (
      0 => 'text/x-opml',
    ),
    'oprc' =>
    array (
      0 => 'application/vnd.palm',
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
    'pas' =>
    array (
      0 => 'text/x-pascal',
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
    'pcf' =>
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
    ),
    'pdb' =>
    array (
      0 => 'application/vnd.palm',
    ),
    'pdf' =>
    array (
      0 => 'application/pdf',
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
    ),
    'pgm' =>
    array (
      0 => 'image/x-portable-graymap',
    ),
    'pgn' =>
    array (
      0 => 'application/x-chess-pgn',
    ),
    'pgp' =>
    array (
      0 => 'application/pgp-encrypted',
    ),
    'pic' =>
    array (
      0 => 'image/x-pict',
    ),
    'pkg' =>
    array (
      0 => 'application/octet-stream',
    ),
    'pki' =>
    array (
      0 => 'application/pkixcmp',
    ),
    'pkipath' =>
    array (
      0 => 'application/pkix-pkipath',
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
    'pls' =>
    array (
      0 => 'application/pls+xml',
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
    'portpkg' =>
    array (
      0 => 'application/vnd.macports.portpkg',
    ),
    'pot' =>
    array (
      0 => 'application/vnd.ms-powerpoint',
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
    'pqa' =>
    array (
      0 => 'application/vnd.palm',
    ),
    'prc' =>
    array (
      0 => 'application/x-mobipocket-ebook',
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
    ),
    'pskcxml' =>
    array (
      0 => 'application/pskc+xml',
    ),
    'ptid' =>
    array (
      0 => 'application/vnd.pvi.ptid1',
    ),
    'pub' =>
    array (
      0 => 'application/x-mspublisher',
    ),
    'pvb' =>
    array (
      0 => 'application/vnd.3gpp.pic-bw-var',
    ),
    'pwn' =>
    array (
      0 => 'application/vnd.3m.post-it-notes',
    ),
    'pya' =>
    array (
      0 => 'audio/vnd.ms-playready.media.pya',
    ),
    'pyv' =>
    array (
      0 => 'video/vnd.ms-playready.media.pyv',
    ),
    'qam' =>
    array (
      0 => 'application/vnd.epson.quickanime',
    ),
    'qbo' =>
    array (
      0 => 'application/vnd.intu.qbo',
    ),
    'qfx' =>
    array (
      0 => 'application/vnd.intu.qfx',
    ),
    'qps' =>
    array (
      0 => 'application/vnd.publishare-delta-tree',
    ),
    'qt' =>
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
    ),
    'ram' =>
    array (
      0 => 'audio/x-pn-realaudio',
    ),
    'rar' =>
    array (
      0 => 'application/x-rar-compressed',
    ),
    'ras' =>
    array (
      0 => 'image/x-cmu-raster',
    ),
    'rcprofile' =>
    array (
      0 => 'application/vnd.ipunplugged.rcprofile',
    ),
    'rdf' =>
    array (
      0 => 'application/rdf+xml',
    ),
    'rdz' =>
    array (
      0 => 'application/vnd.data-vision.rdz',
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
    'rm' =>
    array (
      0 => 'application/vnd.rn-realmedia',
    ),
    'rmi' =>
    array (
      0 => 'audio/midi',
    ),
    'rmp' =>
    array (
      0 => 'audio/x-pn-realaudio-plugin',
    ),
    'rms' =>
    array (
      0 => 'application/vnd.jcp.javame.midlet-rms',
    ),
    'rmvb' =>
    array (
      0 => 'application/vnd.rn-realmedia-vbr',
    ),
    'rnc' =>
    array (
      0 => 'application/relax-ng-compact-syntax',
    ),
    'roa' =>
    array (
      0 => 'application/rpki-roa',
    ),
    'roff' =>
    array (
      0 => 'text/troff',
    ),
    'rp9' =>
    array (
      0 => 'application/vnd.cloanto.rp9',
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
    ),
    'rsd' =>
    array (
      0 => 'application/rsd+xml',
    ),
    'rss' =>
    array (
      0 => 'application/rss+xml',
    ),
    'rtf' =>
    array (
      0 => 'application/rtf',
    ),
    'rtx' =>
    array (
      0 => 'text/richtext',
    ),
    's' =>
    array (
      0 => 'text/x-asm',
    ),
    's3m' =>
    array (
      0 => 'audio/s3m',
    ),
    'saf' =>
    array (
      0 => 'application/vnd.yamaha.smaf-audio',
    ),
    'sbml' =>
    array (
      0 => 'application/sbml+xml',
    ),
    'sc' =>
    array (
      0 => 'application/vnd.ibm.secure-container',
    ),
    'scd' =>
    array (
      0 => 'application/x-msschedule',
    ),
    'scm' =>
    array (
      0 => 'application/vnd.lotus-screencam',
    ),
    'scq' =>
    array (
      0 => 'application/scvp-cv-request',
    ),
    'scs' =>
    array (
      0 => 'application/scvp-cv-response',
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
    'setpay' =>
    array (
      0 => 'application/set-payment-initiation',
    ),
    'setreg' =>
    array (
      0 => 'application/set-registration-initiation',
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
    'sgi' =>
    array (
      0 => 'image/sgi',
    ),
    'sgl' =>
    array (
      0 => 'application/vnd.stardivision.writer-global',
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
    ),
    'shar' =>
    array (
      0 => 'application/x-shar',
    ),
    'shf' =>
    array (
      0 => 'application/shf+xml',
    ),
    'sid' =>
    array (
      0 => 'image/x-mrsid-image',
    ),
    'sig' =>
    array (
      0 => 'application/pgp-signature',
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
    ),
    'sit' =>
    array (
      0 => 'application/x-stuffit',
    ),
    'sitx' =>
    array (
      0 => 'application/x-stuffitx',
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
    'slt' =>
    array (
      0 => 'application/vnd.epson.salt',
    ),
    'sm' =>
    array (
      0 => 'application/vnd.stepmania.stepchart',
    ),
    'smf' =>
    array (
      0 => 'application/vnd.stardivision.math',
    ),
    'smi' =>
    array (
      0 => 'application/smil+xml',
    ),
    'smil' =>
    array (
      0 => 'application/smil+xml',
    ),
    'smv' =>
    array (
      0 => 'video/x-smv',
    ),
    'smzip' =>
    array (
      0 => 'application/vnd.stepmania.package',
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
    ),
    'spc' =>
    array (
      0 => 'application/x-pkcs7-certificates',
    ),
    'spf' =>
    array (
      0 => 'application/vnd.yamaha.smaf-phrase',
    ),
    'spl' =>
    array (
      0 => 'application/x-futuresplash',
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
    ),
    'sql' =>
    array (
      0 => 'application/x-sql',
    ),
    'src' =>
    array (
      0 => 'application/x-wais-source',
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
    ),
    'str' =>
    array (
      0 => 'application/vnd.pg.format',
    ),
    'stw' =>
    array (
      0 => 'application/vnd.sun.xml.writer.template',
    ),
    'sub' =>
    array (
      0 => 'text/vnd.dvb.subtitle',
      1 => 'image/vnd.dvb.subtitle',
    ),
    'sus' =>
    array (
      0 => 'application/vnd.sus-calendar',
    ),
    'susp' =>
    array (
      0 => 'application/vnd.sus-calendar',
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
    ),
    'swa' =>
    array (
      0 => 'application/x-director',
    ),
    'swf' =>
    array (
      0 => 'application/x-shockwave-flash',
    ),
    'swi' =>
    array (
      0 => 'application/vnd.aristanetworks.swi',
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
    't' =>
    array (
      0 => 'text/troff',
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
    'tcap' =>
    array (
      0 => 'application/vnd.3gpp2.tcap',
    ),
    'tcl' =>
    array (
      0 => 'application/x-tcl',
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
    ),
    'texi' =>
    array (
      0 => 'application/x-texinfo',
    ),
    'texinfo' =>
    array (
      0 => 'application/x-texinfo',
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
    'tmo' =>
    array (
      0 => 'application/vnd.tmobile-livetv',
    ),
    'torrent' =>
    array (
      0 => 'application/x-bittorrent',
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
    'trm' =>
    array (
      0 => 'application/x-msterminal',
    ),
    'tsd' =>
    array (
      0 => 'application/timestamped-data',
    ),
    'tsv' =>
    array (
      0 => 'text/tab-separated-values',
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
    'twd' =>
    array (
      0 => 'application/vnd.simtech-mindmapper',
    ),
    'twds' =>
    array (
      0 => 'application/vnd.simtech-mindmapper',
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
    'u32' =>
    array (
      0 => 'application/x-authorware-bin',
    ),
    'udeb' =>
    array (
      0 => 'application/x-debian-package',
    ),
    'ufd' =>
    array (
      0 => 'application/vnd.ufdl',
    ),
    'ufdl' =>
    array (
      0 => 'application/vnd.ufdl',
    ),
    'ulx' =>
    array (
      0 => 'application/x-glulx',
    ),
    'umj' =>
    array (
      0 => 'application/vnd.umajin',
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
    ),
    'vcg' =>
    array (
      0 => 'application/vnd.groove-vcard',
    ),
    'vcs' =>
    array (
      0 => 'text/x-vcalendar',
    ),
    'vcx' =>
    array (
      0 => 'application/vnd.vcx',
    ),
    'vis' =>
    array (
      0 => 'application/vnd.visionary',
    ),
    'viv' =>
    array (
      0 => 'video/vnd.vivo',
    ),
    'vob' =>
    array (
      0 => 'video/x-ms-vob',
    ),
    'vor' =>
    array (
      0 => 'application/vnd.stardivision.writer',
    ),
    'vox' =>
    array (
      0 => 'application/x-authorware-bin',
    ),
    'vrml' =>
    array (
      0 => 'model/vrml',
    ),
    'vsd' =>
    array (
      0 => 'application/vnd.visio',
    ),
    'vsf' =>
    array (
      0 => 'application/vnd.vsf',
    ),
    'vss' =>
    array (
      0 => 'application/vnd.visio',
    ),
    'vst' =>
    array (
      0 => 'application/vnd.visio',
    ),
    'vsw' =>
    array (
      0 => 'application/vnd.visio',
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
    ),
    'wav' =>
    array (
      0 => 'audio/x-wav',
    ),
    'wax' =>
    array (
      0 => 'audio/x-ms-wax',
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
    'wks' =>
    array (
      0 => 'application/vnd.ms-works',
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
    ),
    'wpd' =>
    array (
      0 => 'application/vnd.wordperfect',
    ),
    'wpl' =>
    array (
      0 => 'application/vnd.ms-wpl',
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
    'wsdl' =>
    array (
      0 => 'application/wsdl+xml',
    ),
    'wspolicy' =>
    array (
      0 => 'application/wspolicy+xml',
    ),
    'wtb' =>
    array (
      0 => 'application/vnd.webturbo',
    ),
    'wvx' =>
    array (
      0 => 'video/x-ms-wvx',
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
    ),
    'xbap' =>
    array (
      0 => 'application/x-ms-xbap',
    ),
    'xbd' =>
    array (
      0 => 'application/vnd.fujixerox.docuworks.binder',
    ),
    'xbm' =>
    array (
      0 => 'image/x-xbitmap',
    ),
    'xdf' =>
    array (
      0 => 'application/xcap-diff+xml',
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
    'xlf' =>
    array (
      0 => 'application/x-xliff+xml',
    ),
    'xlm' =>
    array (
      0 => 'application/vnd.ms-excel',
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
    ),
    'xpw' =>
    array (
      0 => 'application/vnd.intercon.formnet',
    ),
    'xpx' =>
    array (
      0 => 'application/vnd.intercon.formnet',
    ),
    'xsl' =>
    array (
      0 => 'application/xml',
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
    'yang' =>
    array (
      0 => 'application/yang',
    ),
    'yin' =>
    array (
      0 => 'application/yin+xml',
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
    'z7' =>
    array (
      0 => 'application/x-zmachine',
    ),
    'z8' =>
    array (
      0 => 'application/x-zmachine',
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
    123 =>
    array (
      0 => 'application/vnd.lotus-1-2-3',
    ),
  ),
);
    // phpcs:enable
}
