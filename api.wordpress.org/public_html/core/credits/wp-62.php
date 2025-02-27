<?php

class WP_62_Credits extends WP_Credits {

	public function groups() {
		$groups = [
			'core-developers'         => [
				'name'    => 'Noteworthy Contributors',
				'type'    => 'titles',
				'shuffle' => false,
				'data'    => [
					'matt'                => [ 'Matt Mullenweg', 'Release Lead' ],
					'priethor'            => [ 'Héctor Prieto', 'Release Lead' ],
					'francina'            => [ 'Francesca Marano', 'Release Lead' ],
					'hellofromTonya'      => 'Tonya Mork',
					'audrasjb'            => 'Jean-Baptiste Audras',
					'ntsekouras'          => 'Nik Tsekouras',
					'Mamaduka'            => 'George Mamadashvili',
					'costdev'             => 'Colin Stewart',
					'mukesh27'            => 'Mukesh Panchal',
					'annezazu'            => 'Anne McCarthy',
					'ndiego'              => 'Nick Diego',
					'bph'                 => 'Birgit Pauli-Haack',
					'femkreations'        => 'Femy Praseeth',
					'milana_cap'          => 'Milana Cap',
					'webcommsat'          => 'Abha Thakor',
					'jpantani'            => 'Jonathan Pantani',
					'laurlittle'          => 'Lauren Stein',
					'marybaum'            => 'Mary Baum',
					'adeltahri'           => 'Adel Tahri',
					'robinwpdeveloper'    => 'Robin',
					'richtabor'           => 'Rich Tabor',
					'flixos90'            => 'Felix Arntz',
					'matveb'              => 'Matias Ventura',
					'chanthaboune'        => 'Josepha Haden',
					'SergeyBiryukov'      => 'Sergey Biryukov',
					'tyxla'               => 'Marin Atanasov',
					'jrf'                 => 'Juliette Reinders Folmer',
					'poena'               => 'Carolina Nymark',
					'scruffian'           => 'Ben Dwyer',
					'desrosj'             => 'Jonathan Desrosiers',
					'aristath'            => 'Ari Stathopoulos',
					'peterwilsoncc'       => 'Peter Wilson',
					'wildworks'           => 'Aki Hamano',
					'youknowriad'         => 'Riad Benguella',
					'mciampini'           => 'Marco Ciampini',
					'justinahinon'        => 'Justin Ahinon',
				],
			],
			'contributing-developers' => [
				'name'    => false,
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => [
					'get_dave'            => 'David Smith',
					'spacedmonkey'        => 'Jonny Harris',
					'sabernhardt'         => 'Stephen Bernhardt',
					'aaronrobertshaw'     => 'Aaron Robertshaw',
					'azaozz'              => 'Andrew Ozz',
					'ramonopoly'          => 'Ramon James',
					'andraganescu'        => 'Andrei Draganescu',
					'jorgefilipecosta'    => 'Jorge Costa',
					'jsnajdr'             => 'Jarda Snajdr',
					'0mirka00'            => 'Lena Morita',
					'oandregal'           => 'André',
					'andrewserong'        => 'Andrew Serong',
					'ellatrix'            => 'Ella van Durpe',
					'glendaviesnz'        => 'Glen Davies',
					'talldanwp'           => 'Daniel Richards',
 					'Joen'                => 'Joen Asmussen',
					'geriux'              => 'Gerardo Pacheco',
					'joedolson'           => 'Joe Dolson',
					'noisysocks'          => 'Robert Anderson',
					'davidbaumwald'       => 'David Baumwald',
				],
			],
		];

		return $groups;
	}

	public function props() {
		return [
			'0mirka00',
			'10upsimon',
			'254volkan',
			'aaroncampbell',
			'aaronrobertshaw',
			'abidhasan112',
			'abirhasandipu',
			'abitofmind',
			'abtop',
			'ace100',
			'adamsilverstein',
			'adeltahri',
			'adhun',
			'adityaarora010196',
			'admwgn',
			'aduth',
			'aeg0125',
			'afercia',
			'afragen',
			'afrin29',
			'afshanadiya',
			'ahortin',
			'ajayver',
			'ajlende',
			'ajmaurya',
			'alanjacobmathew',
			'albarin',
			'albatross10',
			'alberuni-azad',
			'alecgeatches',
			'aleksganev',
			'alexstine',
			'alshakero',
			'alvastar',
			'alvitazwar052',
			'amin7',
			'amirrezatm',
			'amitbarai013',
			'amustaque97',
			'anantajitjg',
			'andraganescu',
			'andreaboe',
			'andrewserong',
			'andy786',
			'aniketpatel',
			'ankit-k-gupta',
			'ankitmaru',
			'annezazu',
			'antonvlasenko',
			'antonyagrios',
			'antpb',
			'aparnajl',
			'apeatling',
			'apermo',
			'apmatthe',
			'arafatjamil01',
			'aravindajith',
			'aristath',
			'arnolp',
			'arrasel403',
			'artemiosans',
			'arthur791004',
			'artz91',
			'aryamaaru',
			'ashrafulsarkar',
			'audrasjb',
			'ayeshrajans',
			'azaozz',
			'azurseisme',
			'barryceelen',
			'bart',
			'beafialho',
			'bedas',
			'benish74',
			'benjgrolleau',
			'benoitchantre',
			'bernhard-reiter',
			'bgardner',
			'bgin',
			'bgoewert',
			'birgire',
			'bjorn2404',
			'bjorsch',
			'bogdanungureanu',
			'boniu91',
			'bonjour52',
			'bookwyrm',
			'boonebgorges',
			'bosconiandynamics',
			'bph',
			'bradyvercher',
			'bronsonquick',
			'brookedot',
			'brookemk',
			'bueltge',
			'buutqn',
			'cadic',
			'calvinalkan',
			'cameronjonesweb',
			'carazo',
			'carlosgprim',
			'cbirdsong',
			'cbravobernal',
			'cbringmann',
			'chaion07',
			'chaton666',
			'chesio',
			'chintan1896',
			'chiragrathod103',
			'chocofc1',
			'chopinbach',
			'chouby',
			'chrisbaltazar',
			'chrystl',
			'ckanderson22',
			'claytoncollie',
			'clorith',
			'cnspecialcolor',
			'codemonksuvro',
			'codesdnc',
			'codingchicken',
			'colorful-tones',
			'conner_bw',
			'copons',
			'corentingautier',
			'coreyw',
			'costdev',
			'countrymusicchicago',
			'craigfrancis',
			'craiglpeters',
			'critterverse',
			'cu121',
			'cybr',
			'czapla',
			'd-signed',
			'daisyo',
			'dalirajab',
			'dalleyne',
			'danielbachhuber',
			'darerodz',
			'dasnitesh780',
			'datagutten',
			'davefx',
			'davidbaumwald',
			'davidbinda',
			'davidvongries',
			'davilera',
			'dd32',
			'dennisatyoast',
			'derekblank',
			'desrosj',
			'devanshijoshi',
			'devtanbir',
			'dgwyer',
			'dhrupo',
			'dhusakovic',
			'digical',
			'dilipbheda',
			'dimadin',
			'dinhtungdu',
			'dlh',
			'dmsnell',
			'doctorlai',
			'donncha',
			'dpcalhoun',
			'dperonne',
			'dreadlox',
			'drzraf',
			'dsas',
			'dshanske',
			'dunhakdis',
			'dustinrue',
			'dziudek',
			'eboxnet',
			'edanzer',
			'eherman24',
			'ehtmlu',
			'eidolonnight',
			'elifvish',
			'ellatrix',
			'emanuelx',
			'enej',
			'ericlewis',
			'esratpopy',
			'fabiankaegy',
			'faguni22',
			'faisal03',
			'fasuto',
			'fcoveram',
			'felipeelia',
			'felipelavinz',
			'fierevere',
			'flixos90',
			'flootr',
			'fosuahmed',
			'fpodhorsky',
			'francina',
			'franz00',
			'fuadragib',
			'fullofcaffeine',
			'galbaras',
			'gamecreature',
			'garrett-eclipse',
			'geisthanen',
			'geriux',
			'get_dave',
			'gigitux',
			'gisgeo',
			'glendaviesnz',
			'greenshady',
			'griffinjt',
			'grl570810',
			'gvgvgvijayan',
			'gziolo',
			'h4l9k',
			'hakre',
			'hanshenrik',
			'hareesh-pillai',
			'haritpanchal',
			'hasanmisbah',
			'hasanuzzamanshamim',
			'hazdiego',
			'helen',
			'helgatheviking',
			'hellofromtonya',
			'hideokamoto',
			'hilayt24',
			'hiren1094',
			'hiyascout',
			'hughiemolloy',
			'hugodevos',
			'hvar',
			'hztyfoon',
			'iamjaydip',
			'ianbelanger',
			'iandunn',
			'iapial',
			'iazel',
			'ignatggeorgiev',
			'imanish003',
			'inc2734',
			'ingeniumed',
			'initsogar',
			'innovext',
			'inwerpsel',
			'ipajen',
			'iqbalrony',
			'ira2910',
			'ironprogrammer',
			'isabel_brison',
			'itowhid06',
			'itpathsolutions',
			'itsnikhilpatel',
			'ivanjeronimo',
			'jackreichert',
			'jaedm97',
			'jakariaistauk',
			'james-roberts',
			'jameskoster',
			'jamilbd07',
			'janthiel',
			'janusdev',
			'javiarce',
			'javiercasares',
			'jb510',
			'jchambo',
			'jeanphilippegreen',
			'jeawhanlee',
			'jeffmatson',
			'jeffpaul',
			'jeherve',
			'jeremyfelt',
			'jeryj',
			'jffng',
			'jhned',
			'jhoffmann',
			'jigar-bhanushali',
			'jipmoors',
			'jmdodd',
			'joedolson',
			'joelmadigan',
			'joemcgill',
			'joen',
			'johnbillion',
			'johnjamesjacoby',
			'johnwatkins0',
			'jokerrs',
			'jongycastillo',
			'jorbin',
			'jorgefilipecosta',
			'jornp',
			'joshuatf',
			'joyously',
			'jpantani',
			'jrf',
			'jsh4',
			'jsnajdr',
			'juanfra',
			'juanmaguitar',
			'juhise',
			'juliobox',
			'justinahinon',
			'justlevine',
			'kacper3355',
			'kadamwhite',
			'kafleg',
			'kajalgohel',
			'kaneva',
			'kapilpaul',
			'kau-boy',
			'kawserz',
			'kbat82',
			'kebbet',
			'kellychoffman',
			'kevin940726',
			'kjellr',
			'kkoppenhaver',
			'kmadhak',
			'knowingart_com',
			'konyoldeath',
			'kowsar89',
			'kraftbj',
			'krunal265',
			'krupalpanchal',
			'lanacodes',
			'larsmqller',
			'laurelfulford',
			'laurlittle',
			'lenasterg',
			'leonidasmilossis',
			'lifeboat',
			'lkraav',
			'lobeless14',
			'looswebstudio',
			'lopo',
			'lozula',
			'lucius0101',
			'lucymtc',
			'luehrsen',
			'luisherranz',
			'luminuu',
			'madhudollu',
			'mahbubshovan',
			'mahekkalola',
			'mamaduka',
			'manfcarlo',
			'manojkpatil',
			'manooweb',
			'manuilov',
			'marekdedic',
			'marissamakes',
			'markjaquith',
			'markoserb',
			'marksabbath',
			'marybaum',
			'matclayton',
			'matthiasreinholz',
			'mattkeys',
			'matveb',
			'maximej',
			'mburridge',
			'mcaskill',
			'mciampini',
			'mcsf',
			'mdviralsampat',
			'mehulkaklotar',
			'mensmaximus',
			'mercime',
			'meyegui',
			'mgol',
			'mhkuu',
			'michael-kelly',
			'michelmany',
			'miguelaxcar',
			'mikachan',
			'mikeschroder',
			'mikestraw',
			'milana_cap',
			'mista-flo',
			'mitchellaustin',
			'mitogh',
			'mkox',
			'mmaattiiaass ',
			'mmtr86',
			'monzuralam',
			'mrasharirfan',
			'mrdollu',
			'mreishus',
			'mrwweb',
			'mte90',
			'mtias',
			'mujuonly',
			'mukesh27',
			'multidots1896',
			'mw108',
			'mxbclang',
			'nacin',
			'naeemhaque',
			'nalininonstopnewsuk',
			'namithjawahar',
			'nathanatmoz',
			'nazmulhasan103',
			'ndiego',
			'nekojonez',
			'nendeb55',
			'netweb',
			'neychok',
			'nicholaswilson',
			'nick_thegeek',
			'nidhidhandhukiya',
			'nielslange',
			'nithi22',
			'nithins53',
			'nitman43',
			'nmutua',
			'noahtallen',
			'noisysocks',
			'ntsekouras',
			'nuvopoint',
			'oakesjosh',
			'oandregal',
			'obayedmamur',
			'obenland',
			'ocean90',
			'ockham',
			'oglekler',
			'oguzkocer',
			'oh_hello',
			'olliejones',
			'onemaggie',
			'otto42',
			'outrankjames',
			'paaljoachim',
			'paapst',
			'pablohoney',
			'pagelab',
			'patelhitesh',
			'paulamit',
			'paulkevan',
			'paulschreiber',
			'pavelevap',
			'pbearne',
			'pbiron',
			'pbking',
			'pedromendonca',
			'pento',
			'petaryoast',
			'peterwilsoncc',
			'petitphp',
			'phil-webster',
			'phillsav',
			'pkolenbr',
			'poena',
			'polevaultweb',
			'pooja1210',
			'pputzer',
			'pravinparmar2404',
			'presents111',
			'presskopp',
			'priethor',
			'psykro',
			'ptahdunbar',
			'pypwalters',
			'pyrobd',
			'raduiason',
			'rafinkhan',
			'rahmantasnia',
			'rahmohn',
			'rajanpanchal2028',
			'rajeshraval786',
			'rakibwordpress',
			'ramon-fincken',
			'ramonopoly',
			'rarst',
			'ravanh',
			'razthee007',
			're_enter_rupok',
			'reduanmasud',
			'renatoagds',
			'revgeorge',
			'rezakhan995',
			'riccardodicurti',
			'richtabor',
			'rinkychowdhury9',
			'ritteshpatel',
			'rjasdfiii',
			'rnitinb',
			'robin-labadie',
			'robinwpdeveloper',
			'rodage',
			'rodricus',
			'roytanck',
			'rryyaanndd',
			'ruchirj',
			'rudlinkon',
			'ryankienstra',
			'ryelle',
			'ryokuhi',
			'sabernhardt',
			'sakibmd',
			'sam1el',
			'samful',
			'samiamnot',
			'samruddhikhandale',
			'sanjucta',
			'sanketchodavadiya',
			'sannevndrmeulen',
			'santosguillamot',
			'sapayth',
			'sarathar',
			'saumil1611',
			'saxonfletcher',
			'sc0ttkclark',
			'schlessera',
			'scruffian',
			'seakashdiu',
			'seanchayes',
			'sereedmedia',
			'sergeybiryukov',
			'sergiomdgomes',
			'seriouslysenpai',
			'shahidul95',
			'shamayel007',
			'shamimmiashuhagh',
			'shireling',
			'shraboni',
			'shubham1gupta',
			'silicium23',
			'simongomes02',
			'siobhan',
			'sippis',
			'skithund',
			'slieschke',
			'smeunus',
			'soean',
			'soulseekah',
			'spacedmonkey',
			'spaceshipone',
			'sruthi90',
			'stalukder03',
			'starbuck',
			'steelwagstaff',
			'stentibbing',
			'stephym',
			'stephymiehle',
			'stevenkword',
			'subrataemfluence',
			'sumitsingh',
			'sun',
			'sunyatasattva',
			'swissspidy',
			'syamraj24',
			'syhc',
			'synchro',
			'syntaxart',
			'szaqal21',
			'szepeviktor',
			'tahmidulkarim',
			'tahminar27',
			'talldanwp',
			'tanazmasaba',
			'tanjimtc71',
			'tanner-m',
			'teebee',
			'tekapo',
			'thedaysse',
			'thelovekesh',
			'theode',
			'thomask',
			'thomasplevy',
			'timbroddin',
			'timothyblynjacobs',
			'tjnowell',
			'tobiasbg',
			'tobifjellner',
			'toru',
			'travisaxton',
			'triumvirate',
			'tyxla',
			'umesh84',
			'upadalavipul',
			'vcanales',
			'viralsampat',
			'virgar',
			'vladytimy',
			'vtad',
			'vykesmac',
			'walbo',
			'wandering-aramean',
			'webaxones',
			'webcommsat',
			'webmandesign',
			'webrocker',
			'websitegenii',
			'welcher',
			'welenofsky',
			'westonruter',
			'wetah',
			'whaze',
			'wildworks',
			'winterpsv',
			'wirecat',
			'wojsmol',
			'wojtekn',
			'wojtekszkutnik',
			'wppunk',
			'xknown',
			'youknowriad',
			'yuliyan',
			'zebaafiashama',
			'zenaulislam',
			'zevilz',
			'zieladam',
			'zodiac1978',
			'zoonini',
		];
	}

	public function external_libraries() {
		return [
			[ 'Babel Polyfill', 'https://babeljs.io/docs/en/babel-polyfill' ],
			[ 'Backbone.js', 'http://backbonejs.org/' ],
			[ 'Class POP3', 'https://squirrelmail.org/' ],
			[ 'clipboard.js', 'https://clipboardjs.com/' ],
			[ 'Closest', 'https://github.com/jonathantneal/closest' ],
			[ 'CodeMirror', 'https://codemirror.net/' ],
			[ 'Color Animations', 'https://plugins.jquery.com/color/' ],
			[ 'getID3()', 'http://getid3.sourceforge.net/' ],
			[ 'FormData', 'https://github.com/jimmywarting/FormData' ],
			[ 'Horde Text Diff', 'https://pear.horde.org/' ],
			[ 'hoverIntent', 'http://cherne.net/brian/resources/jquery.hoverIntent.html' ],
			[ 'imgAreaSelect', 'http://odyniec.net/projects/imgareaselect/' ],
			[ 'Iris', 'https://github.com/Automattic/Iris' ],
			[ 'jQuery', 'https://jquery.com/' ],
			[ 'jQuery UI', 'https://jqueryui.com/' ],
			[ 'jQuery Hotkeys', 'https://github.com/tzuryby/jquery.hotkeys' ],
			[ 'jQuery serializeObject', 'http://benalman.com/projects/jquery-misc-plugins/' ],
			[ 'jQuery.query', 'https://plugins.jquery.com/query-object/' ],
			[ 'jQuery.suggest', 'https://github.com/pvulgaris/jquery.suggest' ],
			[ 'jQuery UI Touch Punch', 'http://touchpunch.furf.com/' ],
			[ 'json2', 'https://github.com/douglascrockford/JSON-js' ],
			[ 'Lodash', 'https://lodash.com/' ],
			[ 'Masonry', 'http://masonry.desandro.com/' ],
			[ 'MediaElement.js', 'http://mediaelementjs.com/' ],
			[ 'Moment', 'http://momentjs.com/' ],
			[ 'PclZip', 'http://www.phpconcept.net/pclzip/' ],
			[ 'PemFTP', 'https://www.phpclasses.org/package/1743-PHP-FTP-client-in-pure-PHP.html' ],
			[ 'phpass', 'http://www.openwall.com/phpass/' ],
			[ 'PHPMailer', 'https://github.com/PHPMailer/PHPMailer' ],
			[ 'Plupload', 'http://www.plupload.com/' ],
			[ 'random_compat', 'https://github.com/paragonie/random_compat' ],
			[ 'React', 'https://reactjs.org/' ],
			[ 'Redux', 'https://redux.js.org/' ],
			[ 'Requests', 'http://requests.ryanmccue.info/' ],
			[ 'SimplePie', 'http://simplepie.org/' ],
			[ 'The Incutio XML-RPC Library', 'https://code.google.com/archive/p/php-ixr/' ],
			[ 'Thickbox', 'http://codylindley.com/thickbox/' ],
			[ 'TinyMCE', 'https://www.tinymce.com/' ],
			[ 'Twemoji', 'https://github.com/twitter/twemoji' ],
			[ 'Underscore.js', 'http://underscorejs.org/' ],
			[ 'whatwg-fetch', 'https://github.com/github/fetch' ],
			[ 'zxcvbn', 'https://github.com/dropbox/zxcvbn' ],
		];
	}
}

