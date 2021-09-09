<?php
vc_map(array(
    "name" 			=> "Advanced News Tickers",
    "category" 		=> 'Advanced Elements',
    "description"	=> "Animated News",
    "base" 			=> "awavc_news_style",
    "class" 		=> "",
    "icon" 			=> "awavc_news_ticker_icon",

    "params" 	=> array(


        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("News Ticker Styles", "awavcl"),
            "param_name" => "news_ticker",
            "description" => __("Ps: In a page you can use one tab section...We are on fixing this bug ASAP . then you will use more then one tsb box", "awavcl"),
            "value" => array(
                __("Style 1","awavcl") => 'newsticker-1',
                __("Style 2  (RSS Feed)","awavcl") => 'newsticker-2',
                __("Style 3 (RTL)","awavcl") => 'newsticker-3',
                __("Style 4 (RTL RSS Feed) upcoming","awavcl") => 'newsticker-4',
            ),
            "admin_label"        => true,
        ),

        array(
            "type" => "textfield",
            "heading" => __("Tab Lable", "awavcl"),
            "param_name" => "tab_lbl",
            "value" => "News",
            "description" => __("Ex: Breaking News", "awavcl"),
        ),
        array(
            'type' => 'param_group',
            'heading' => __( 'News Contents', 'awavcl' ),
            'param_name' => 'news_contents',
            "dependency"    => array( 'element' => "news_ticker", 'value' => array('newsticker-1','newsticker-3',) ),
            'params' => array(

                    array(
                        "type" => "textfield",
                        "heading" => __("Highlighted text", "awavcl"),
                        "param_name" => "highlite_txt",
                        "value" => "Law And Order Breaks Down: ",
                        "description" => __("", "awavcl"),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Headlines", "awavcl"),
                        "param_name" => "headline",
                        "value" => "Yellow vest' protests across France trigger spurts of violence, calls for calm",
                        "description" => __("", "awavcl"),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Healine Numbering", "awavcl"),
                        "param_name" => "num",
                        "value" => "1.1",
                        "description" => __("If dont Want any any numbering then leave it empty", "awavcl"),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("News Details Link Here", "awavcl"),
                        "param_name" => "url",
                        "value" => "https://edition.cnn.com/",
                        "description" => __("must inclued https:// or http://", "awavcl"),
                    ),

                    array(
                        "type" => "dropdown",
                        "heading" => __("Open in", "awavcl"),
                        "param_name" => "target",
                        "value" => array(
                            __("Same Window","awavcl") => "bbb",
                            __("New Window","awavcl") => "_blank",
                        ),
                    ),



            ),
        ),
        array(
            "type" => "textfield",
            "heading" => __("RSS Feed Link Here", "awavcl"),
            "param_name" => "rss_url",
            "value" => "http://rss.cnn.com/rss/edition.rss",
            "description" => __("Default Cnn Feed: http://rss.cnn.com/rss/edition.rss", "awavcl"),
            "dependency"    => array( 'element' => "news_ticker", 'value' => array('newsticker-2','newsticker-4',) ),
        ),

        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Height', 'awavcl' ),
            'param_name'       => 'height',
            "value" => 45,
            "min" => 5,
            "max" => 400,
            "step" => 1,
            "unit" => "px",
            "description" => __("Default height is 40px", "awavcl"),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Play and Pause Button Enabled", "awavcl"),
            "param_name" => "enabled",
            "value" => array(
                __("No Button","awavcl") => "empty",
                __("Next And Previous Button only","awavcl") => "no_btn",
                __("Next And Previous With Pause Button","awavcl") => "yes_btn",

            ),
            "group" => __("Button", 'awavcl'),
        ),
        
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Scroll Speed', 'awavcl' ),
            'param_name'       => 'scrl_speed',
            "value" => 1,
            "min" => 1,
            "max" => 10,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Lable Font Size', 'awavcl' ),
            'param_name'       => 'lable_size',
            "value" => 20,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
        ),
        
        array(
        "type"              => "dropdown",
        "heading"           => __( "Heading Font", "awavcl" ),
        "param_name"        => "font_family",
        "value"             => array(
            "Theme Default" => "",
            "ABeeZee" => "ABeeZee",
            "Abel" => "Abel",
            "Abril Fatface" => "Abril+Fatface",
            "Aclonica" => "Aclonica",
            "Acme" => "Acme",
            "Actor" => "Actor",
            "Adamina" => "Adamina",
            "Advent Pro" => "Advent+Pro",
            "Aguafina Script" => "Aguafina+Script",
            "Akronim" => "Akronim",
            "Aladin" => "Aladin",
            "Aldrich" => "Aldrich",
            "Alegreya" => "Alegreya",
            "Alegreya SC" => "Alegreya+SC",
            "Alex Brush" => "Alex+Brush",
            "Alfa Slab One" => "Alfa+Slab+One",
            "Alice" => "Alice",
            "Alike" => "Alike",
            "Alike Angular" => "Alike+Angular",
            "Allan" => "Allan",
            "Allerta" => "Allerta",
            "Allerta Stencil" => "Allerta+Stencil",
            "Allura" => "Allura",
            "Almendra" => "Almendra",
            "Almendra Display" => "Almendra+Display",
            "Almendra SC" => "Almendra+SC",
            "Amarante" => "Amarante",
            "Amaranth" => "Amaranth",
            "Amatic SC" => "Amatic+SC",
            "Amethysta" => "Amethysta",
            "Anaheim" => "Anaheim",
            "Andada" => "Andada",
            "Andika" => "Andika",
            "Angkor" => "Angkor",
            "Annie Use Your Telescope" => "Annie+Use+Your+Telescope",
            "Anonymous Pro" => "Anonymous+Pro",
            "Antic" => "Antic",
            "Antic Didone" => "Antic+Didone",
            "Antic Slab" => "Antic+Slab",
            "Anton" => "Anton",
            "Arapey" => "Arapey",
            "Arbutus" => "Arbutus",
            "Arbutus Slab" => "Arbutus+Slab",
            "Architects Daughter" => "Architects+Daughter",
            "Archivo Black" => "Archivo+Black",
            "Archivo Narrow" => "Archivo+Narrow",
            "Arimo" => "Arimo",
            "Arizonia" => "Arizonia",
            "Armata" => "Armata",
            "Artifika" => "Artifika",
            "Arvo" => "Arvo",
            "Asap" => "Asap",
            "Asset" => "Asset",
            "Astloch" => "Astloch",
            "Asul" => "Asul",
            "Atomic Age" => "Atomic+Age",
            "Aubrey" => "Aubrey",
            "Audiowide" => "Audiowide",
            "Autour One" => "Autour+One",
            "Average" => "Average",
            "Average Sans" => "Average+Sans",
            "Averia Gruesa Libre" => "Averia+Gruesa+Libre",
            "Averia Libre" => "Averia+Libre",
            "Averia Sans Libre" => "Averia+Sans+Libre",
            "Averia Serif Libre" => "Averia+Serif+Libre",
            "Bad Script" => "Bad+Script",
            "Balthazar" => "Balthazar",
            "Bangers" => "Bangers",
            "Basic" => "Basic",
            "Battambang" => "Battambang",
            "Baumans" => "Baumans",
            "Bayon" => "Bayon",
            "Belgrano" => "Belgrano",
            "Belleza" => "Belleza",
            "BenchNine" => "BenchNine",
            "Bentham" => "Bentham",
            "Berkshire Swash" => "Berkshire+Swash",
            "Bevan" => "Bevan",
            "Bigelow Rules" => "Bigelow+Rules",
            "Bigshot One" => "Bigshot+One",
            "Bilbo" => "Bilbo",
            "Bilbo Swash Caps" => "Bilbo+Swash+Caps",
            "Bitter" => "Bitter",
            "Black Ops One" => "Black+Ops+One",
            "Bokor" => "Bokor",
            "Bonbon" => "Bonbon",
            "Boogaloo" => "Boogaloo",
            "Bowlby One" => "Bowlby+One",
            "Bowlby One SC" => "Bowlby+One+SC",
            "Brawler" => "Brawler",
            "Bree Serif" => "Bree+Serif",
            "Bubblegum Sans" => "Bubblegum+Sans",
            "Bubbler One" => "Bubbler+One",
            "Buda" => "Buda",
            "Buenard" => "Buenard",
            "Butcherman" => "Butcherman",
            "Butterfly Kids" => "Butterfly+Kids",
            "Cabin" => "Cabin",
            "Cabin Condensed" => "Cabin+Condensed",
            "Cabin Sketch" => "Cabin+Sketch",
            "Caesar Dressing" => "Caesar+Dressing",
            "Cagliostro" => "Cagliostro",
            "Calligraffitti" => "Calligraffitti",
            "Cambo" => "Cambo",
            "Candal" => "Candal",
            "Cantarell" => "Cantarell",
            "Cantata One" => "Cantata+One",
            "Cantora One" => "Cantora+One",
            "Capriola" => "Capriola",
            "Cardo" => "Cardo",
            "Carme" => "Carme",
            "Carrois Gothic" => "Carrois+Gothic",
            "Carrois Gothic SC" => "Carrois+Gothic+SC",
            "Carter One" => "Carter+One",
            "Caudex" => "Caudex",
            "Cedarville Cursive" => "Cedarville+Cursive",
            "Ceviche One" => "Ceviche+One",
            "Changa One" => "Changa+One",
            "Chango" => "Chango",
            "Chau Philomene One" => "Chau+Philomene+One",
            "Chela One" => "Chela+One",
            "Chelsea Market" => "Chelsea+Market",
            "Chenla" => "Chenla",
            "Cherry Cream Soda" => "Cherry+Cream+Soda",
            "Cherry Swash" => "Cherry+Swash",
            "Chewy" => "Chewy",
            "Chicle" => "Chicle",
            "Chivo" => "Chivo",
            "Cinzel" => "Cinzel",
            "Cinzel Decorative" => "Cinzel+Decorative",
            "Clicker Script" => "Clicker+Script",
            "Coda" => "Coda",
            "Coda Caption" => "Coda+Caption",
            "Codystar" => "Codystar",
            "Combo" => "Combo",
            "Comfortaa" => "Comfortaa",
            "Coming Soon" => "Coming+Soon",
            "Concert One" => "Concert+One",
            "Condiment" => "Condiment",
            "Content" => "Content",
            "Contrail One" => "Contrail+One",
            "Convergence" => "Convergence",
            "Cookie" => "Cookie",
            "Copse" => "Copse",
            "Corben" => "Corben",
            "Courgette" => "Courgette",
            "Cousine" => "Cousine",
            "Coustard" => "Coustard",
            "Covered By Your Grace" => "Covered+By+Your+Grace",
            "Crafty Girls" => "Crafty+Girls",
            "Creepster" => "Creepster",
            "Crete Round" => "Crete+Round",
            "Crimson Text" => "Crimson+Text",
            "Croissant One" => "Croissant+One",
            "Crushed" => "Crushed",
            "Cuprum" => "Cuprum",
            "Cutive" => "Cutive",
            "Cutive Mono" => "Cutive+Mono",
            "Damion" => "Damion",
            "Dancing Script" => "Dancing+Script",
            "Dangrek" => "Dangrek",
            "Dawning of a New Day" => "Dawning+of+a+New+Day",
            "Days One" => "Days+One",
            "Delius" => "Delius",
            "Delius Swash Caps" => "Delius+Swash+Caps",
            "Delius Unicase" => "Delius+Unicase",
            "Della Respira" => "Della+Respira",
            "Denk One" => "Denk+One",
            "Devonshire" => "Devonshire",
            "Didact Gothic" => "Didact+Gothic",
            "Diplomata" => "Diplomata",
            "Diplomata SC" => "Diplomata+SC",
            "Domine" => "Domine",
            "Donegal One" => "Donegal+One",
            "Doppio One" => "Doppio+One",
            "Dorsa" => "Dorsa",
            "Dosis" => "Dosis",
            "Dr Sugiyama" => "Dr+Sugiyama",
            "Droid Sans" => "Droid+Sans",
            "Droid Sans Mono" => "Droid+Sans+Mono",
            "Droid Serif" => "Droid+Serif",
            "Duru Sans" => "Duru+Sans",
            "Dynalight" => "Dynalight",
            "EB Garamond" => "EB+Garamond",
            "Eagle Lake" => "Eagle+Lake",
            "Eater" => "Eater",
            "Economica" => "Economica",
            "Electrolize" => "Electrolize",
            "Elsie" => "Elsie",
            "Elsie Swash Caps" => "Elsie+Swash+Caps",
            "Emblema One" => "Emblema+One",
            "Emilys Candy" => "Emilys+Candy",
            "Engagement" => "Engagement",
            "Englebert" => "Englebert",
            "Enriqueta" => "Enriqueta",
            "Erica One" => "Erica+One",
            "Esteban" => "Esteban",
            "Euphoria Script" => "Euphoria+Script",
            "Ewert" => "Ewert",
            "Exo" => "Exo",
            "Expletus Sans" => "Expletus+Sans",
            "Fanwood Text" => "Fanwood+Text",
            "Fascinate" => "Fascinate",
            "Fascinate Inline" => "Fascinate+Inline",
            "Faster One" => "Faster+One",
            "Fasthand" => "Fasthand",
            "Federant" => "Federant",
            "Federo" => "Federo",
            "Felipa" => "Felipa",
            "Fenix" => "Fenix",
            "Finger Paint" => "Finger+Paint",
            "Fjalla One" => "Fjalla+One",
            "Fjord One" => "Fjord+One",
            "Flamenco" => "Flamenco",
            "Flavors" => "Flavors",
            "Fondamento" => "Fondamento",
            "Fontdiner Swanky" => "Fontdiner+Swanky",
            "Forum" => "Forum",
            "Francois One" => "Francois+One",
            "Freckle Face" => "Freckle+Face",
            "Fredericka the Great" => "Fredericka+the+Great",
            "Fredoka One" => "Fredoka+One",
            "Freehand" => "Freehand",
            "Fresca" => "Fresca",
            "Frijole" => "Frijole",
            "Fruktur" => "Fruktur",
            "Fugaz One" => "Fugaz+One",
            "GFS Didot" => "GFS+Didot",
            "GFS Neohellenic" => "GFS+Neohellenic",
            "Gabriela" => "Gabriela",
            "Gafata" => "Gafata",
            "Galdeano" => "Galdeano",
            "Galindo" => "Galindo",
            "Gentium Basic" => "Gentium+Basic",
            "Gentium Book Basic" => "Gentium+Book+Basic",
            "Geo" => "Geo",
            "Geostar" => "Geostar",
            "Geostar Fill" => "Geostar+Fill",
            "Germania One" => "Germania+One",
            "Gilda Display" => "Gilda+Display",
            "Give You Glory" => "Give+You+Glory",
            "Glass Antiqua" => "Glass+Antiqua",
            "Glegoo" => "Glegoo",
            "Gloria Hallelujah" => "Gloria+Hallelujah",
            "Goblin One" => "Goblin+One",
            "Gochi Hand" => "Gochi+Hand",
            "Gorditas" => "Gorditas",
            "Goudy Bookletter 1911" => "Goudy+Bookletter+1911",
            "Graduate" => "Graduate",
            "Grand Hotel" => "Grand+Hotel",
            "Gravitas One" => "Gravitas+One",
            "Great Vibes" => "Great+Vibes",
            "Griffy" => "Griffy",
            "Gruppo" => "Gruppo",
            "Gudea" => "Gudea",
            "Habibi" => "Habibi",
            "Hammersmith One" => "Hammersmith+One",
            "Hanalei" => "Hanalei",
            "Hanalei Fill" => "Hanalei+Fill",
            "Handlee" => "Handlee",
            "Hanuman" => "Hanuman",
            "Happy Monkey" => "Happy+Monkey",
            "Headland One" => "Headland+One",
            "Henny Penny" => "Henny+Penny",
            "Herr Von Muellerhoff" => "Herr+Von+Muellerhoff",
            "Holtwood One SC" => "Holtwood+One+SC",
            "Homemade Apple" => "Homemade+Apple",
            "Homenaje" => "Homenaje",
            "IM Fell DW Pica" => "IM+Fell+DW+Pica",
            "IM Fell DW Pica SC" => "IM+Fell+DW+Pica+SC",
            "IM Fell Double Pica" => "IM+Fell+Double+Pica",
            "IM Fell Double Pica SC" => "IM+Fell+Double+Pica+SC",
            "IM Fell English" => "IM+Fell+English",
            "IM Fell English SC" => "IM+Fell+English+SC",
            "IM Fell French Canon" => "IM+Fell+French+Canon",
            "IM Fell French Canon SC" => "IM+Fell+French+Canon+SC",
            "IM Fell Great Primer" => "IM+Fell+Great+Primer",
            "IM Fell Great Primer SC" => "IM+Fell+Great+Primer+SC",
            "Iceberg" => "Iceberg",
            "Iceland" => "Iceland",
            "Imprima" => "Imprima",
            "Inconsolata" => "Inconsolata",
            "Inder" => "Inder",
            "Indie Flower" => "Indie+Flower",
            "Inika" => "Inika",
            "Irish Grover" => "Irish+Grover",
            "Istok Web" => "Istok+Web",
            "Italiana" => "Italiana",
            "Italianno" => "Italianno",
            "Jacques Francois" => "Jacques+Francois",
            "Jacques Francois Shadow" => "Jacques+Francois+Shadow",
            "Jim Nightshade" => "Jim+Nightshade",
            "Jockey One" => "Jockey+One",
            "Jolly Lodger" => "Jolly+Lodger",
            "Josefin Sans" => "Josefin+Sans",
            "Josefin Slab" => "Josefin+Slab",
            "Joti One" => "Joti+One",
            "Judson" => "Judson",
            "Julee" => "Julee",
            "Julius Sans One" => "Julius+Sans+One",
            "Junge" => "Junge",
            "Jura" => "Jura",
            "Just Another Hand" => "Just+Another+Hand",
            "Just Me Again Down Here" => "Just+Me+Again+Down+Here",
            "Kameron" => "Kameron",
            "Karla" => "Karla",
            "Kaushan Script" => "Kaushan+Script",
            "Kavoon" => "Kavoon",
            "Keania One" => "Keania+One",
            "Kelly Slab" => "Kelly+Slab",
            "Kenia" => "Kenia",
            "Khmer" => "Khmer",
            "Kite One" => "Kite+One",
            "Knewave" => "Knewave",
            "Kotta One" => "Kotta+One",
            "Koulen" => "Koulen",
            "Kranky" => "Kranky",
            "Kreon" => "Kreon",
            "Kristi" => "Kristi",
            "Krona One" => "Krona+One",
            "La Belle Aurore" => "La+Belle+Aurore",
            "Lancelot" => "Lancelot",
            "Lato" => "Lato",
            "League Script" => "League+Script",
            "Leckerli One" => "Leckerli+One",
            "Ledger" => "Ledger",
            "Lekton" => "Lekton",
            "Lemon" => "Lemon",
            "Libre Baskerville" => "Libre+Baskerville",
            "Life Savers" => "Life+Savers",
            "Lilita One" => "Lilita+One",
            "Limelight" => "Limelight",
            "Linden Hill" => "Linden+Hill",
            "Lobster" => "Lobster",
            "Lobster Two" => "Lobster+Two",
            "Londrina Outline" => "Londrina+Outline",
            "Londrina Shadow" => "Londrina+Shadow",
            "Londrina Sketch" => "Londrina+Sketch",
            "Londrina Solid" => "Londrina+Solid",
            "Lora" => "Lora",
            "Love Ya Like A Sister" => "Love+Ya+Like+A+Sister",
            "Loved by the King" => "Loved+by+the+King",
            "Lovers Quarrel" => "Lovers+Quarrel",
            "Luckiest Guy" => "Luckiest+Guy",
            "Lusitana" => "Lusitana",
            "Lustria" => "Lustria",
            "Macondo" => "Macondo",
            "Macondo Swash Caps" => "Macondo+Swash+Caps",
            "Magra" => "Magra",
            "Maiden Orange" => "Maiden+Orange",
            "Mako" => "Mako",
            "Marcellus" => "Marcellus",
            "Marcellus SC" => "Marcellus+SC",
            "Marck Script" => "Marck+Script",
            "Margarine" => "Margarine",
            "Marko One" => "Marko+One",
            "Marmelad" => "Marmelad",
            "Marvel" => "Marvel",
            "Mate" => "Mate",
            "Mate SC" => "Mate+SC",
            "Maven Pro" => "Maven+Pro",
            "McLaren" => "McLaren",
            "Meddon" => "Meddon",
            "MedievalSharp" => "MedievalSharp",
            "Medula One" => "Medula+One",
            "Megrim" => "Megrim",
            "Meie Script" => "Meie+Script",
            "Merienda" => "Merienda",
            "Merienda One" => "Merienda+One",
            "Merriweather" => "Merriweather",
            "Merriweather Sans" => "Merriweather+Sans",
            "Metal" => "Metal",
            "Metal Mania" => "Metal+Mania",
            "Metamorphous" => "Metamorphous",
            "Metrophobic" => "Metrophobic",
            "Michroma" => "Michroma",
            "Milonga" => "Milonga",
            "Miltonian" => "Miltonian",
            "Miltonian Tattoo" => "Miltonian+Tattoo",
            "Miniver" => "Miniver",
            "Miss Fajardose" => "Miss+Fajardose",
            "Modern Antiqua" => "Modern+Antiqua",
            "Molengo" => "Molengo",
            "Molle" => "Molle",
            "Monda" => "Monda",
            "Monofett" => "Monofett",
            "Monoton" => "Monoton",
            "Monsieur La Doulaise" => "Monsieur+La+Doulaise",
            "Montaga" => "Montaga",
            "Montez" => "Montez",
            "Montserrat" => "Montserrat",
            "Montserrat Alternates" => "Montserrat+Alternates",
            "Montserrat Subrayada" => "Montserrat+Subrayada",
            "Moul" => "Moul",
            "Moulpali" => "Moulpali",
            "Mountains of Christmas" => "Mountains+of+Christmas",
            "Mouse Memoirs" => "Mouse+Memoirs",
            "Mr Bedfort" => "Mr+Bedfort",
            "Mr Dafoe" => "Mr+Dafoe",
            "Mr De Haviland" => "Mr+De+Haviland",
            "Mrs Saint Delafield" => "Mrs+Saint+Delafield",
            "Mrs Sheppards" => "Mrs+Sheppards",
            "Muli" => "Muli",
            "Mystery Quest" => "Mystery+Quest",
            "Neucha" => "Neucha",
            "Neuton" => "Neuton",
            "New Rocker" => "New+Rocker",
            "News Cycle" => "News+Cycle",
            "Niconne" => "Niconne",
            "Nixie One" => "Nixie+One",
            "Nobile" => "Nobile",
            "Nokora" => "Nokora",
            "Norican" => "Norican",
            "Nosifer" => "Nosifer",
            "Nothing You Could Do" => "Nothing+You+Could+Do",
            "Noticia Text" => "Noticia+Text",
            "Nova Cut" => "Nova+Cut",
            "Nova Flat" => "Nova+Flat",
            "Nova Mono" => "Nova+Mono",
            "Nova Oval" => "Nova+Oval",
            "Nova Round" => "Nova+Round",
            "Nova Script" => "Nova+Script",
            "Nova Slim" => "Nova+Slim",
            "Nova Square" => "Nova+Square",
            "Numans" => "Numans",
            "Nunito" => "Nunito",
            "Odor Mean Chey" => "Odor+Mean+Chey",
            "Offside" => "Offside",
            "Old Standard TT" => "Old+Standard+TT",
            "Oldenburg" => "Oldenburg",
            "Oleo Script" => "Oleo+Script",
            "Oleo Script Swash Caps" => "Oleo+Script+Swash+Caps",
            "Open Sans" => "Open+Sans",
            "Open Sans Condensed" => "Open+Sans+Condensed",
            "Oranienbaum" => "Oranienbaum",
            "Orbitron" => "Orbitron",
            "Oregano" => "Oregano",
            "Orienta" => "Orienta",
            "Original Surfer" => "Original+Surfer",
            "Oswald" => "Oswald",
            "Over the Rainbow" => "Over+the+Rainbow",
            "Overlock" => "Overlock",
            "Overlock SC" => "Overlock+SC",
            "Ovo" => "Ovo",
            "Oxygen" => "Oxygen",
            "Oxygen Mono" => "Oxygen+Mono",
            "PT Mono" => "PT+Mono",
            "PT Sans" => "PT+Sans",
            "PT Sans Caption" => "PT+Sans+Caption",
            "PT Sans Narrow" => "PT+Sans+Narrow",
            "PT Serif" => "PT+Serif",
            "PT Serif Caption" => "PT+Serif+Caption",
            "Pacifico" => "Pacifico",
            "Paprika" => "Paprika",
            "Parisienne" => "Parisienne",
            "Passero One" => "Passero+One",
            "Passion One" => "Passion+One",
            "Patrick Hand" => "Patrick+Hand",
            "Patrick Hand SC" => "Patrick+Hand+SC",
            "Patua One" => "Patua+One",
            "Paytone One" => "Paytone+One",
            "Peralta" => "Peralta",
            "Permanent Marker" => "Permanent+Marker",
            "Petit Formal Script" => "Petit+Formal+Script",
            "Petrona" => "Petrona",
            "Philosopher" => "Philosopher",
            "Piedra" => "Piedra",
            "Pinyon Script" => "Pinyon+Script",
            "Pirata One" => "Pirata+One",
            "Plaster" => "Plaster",
            "Play" => "Play",
            "Playball" => "Playball",
            "Playfair Display" => "Playfair+Display",
            "Playfair Display SC" => "Playfair+Display+SC",
            "Podkova" => "Podkova",
            "Poiret One" => "Poiret+One",
            "Poller One" => "Poller+One",
            "Poly" => "Poly",
            "Pompiere" => "Pompiere",
            "Pontano Sans" => "Pontano+Sans",
            "Port Lligat Sans" => "Port+Lligat+Sans",
            "Port Lligat Slab" => "Port+Lligat+Slab",
            "Prata" => "Prata",
            "Preahvihear" => "Preahvihear",
            "Press Start 2P" => "Press+Start+2P",
            "Princess Sofia" => "Princess+Sofia",
            "Prociono" => "Prociono",
            "Prosto One" => "Prosto+One",
            "Puritan" => "Puritan",
            "Purple Purse" => "Purple+Purse",
            "Quando" => "Quando",
            "Quantico" => "Quantico",
            "Quattrocento" => "Quattrocento",
            "Quattrocento Sans" => "Quattrocento+Sans",
            "Questrial" => "Questrial",
            "Quicksand" => "Quicksand",
            "Quintessential" => "Quintessential",
            "Qwigley" => "Qwigley",
            "Racing Sans One" => "Racing+Sans+One",
            "Radley" => "Radley",
            "Raleway" => "Raleway",
            "Raleway Dots" => "Raleway+Dots",
            "Rambla" => "Rambla",
            "Rammetto One" => "Rammetto+One",
            "Ranchers" => "Ranchers",
            "Rancho" => "Rancho",
            "Rationale" => "Rationale",
            "Redressed" => "Redressed",
            "Reenie Beanie" => "Reenie+Beanie",
            "Revalia" => "Revalia",
            "Ribeye" => "Ribeye",
            "Ribeye Marrow" => "Ribeye+Marrow",
            "Righteous" => "Righteous",
            "Risque" => "Risque",
            "Roboto" => "Roboto",
            "Roboto Condensed" => "Roboto+Condensed",
            "Rochester" => "Rochester",
            "Rock Salt" => "Rock+Salt",
            "Rokkitt" => "Rokkitt",
            "Romanesco" => "Romanesco",
            "Ropa Sans" => "Ropa+Sans",
            "Rosario" => "Rosario",
            "Rosarivo" => "Rosarivo",
            "Rouge Script" => "Rouge+Script",
            "Ruda" => "Ruda",
            "Rufina" => "Rufina",
            "Ruge Boogie" => "Ruge+Boogie",
            "Ruluko" => "Ruluko",
            "Rum Raisin" => "Rum+Raisin",
            "Ruslan Display" => "Ruslan+Display",
            "Russo One" => "Russo+One",
            "Ruthie" => "Ruthie",
            "Rye" => "Rye",
            "Sacramento" => "Sacramento",
            "Sail" => "Sail",
            "Salsa" => "Salsa",
            "Sanchez" => "Sanchez",
            "Sancreek" => "Sancreek",
            "Sansita One" => "Sansita+One",
            "Sarina" => "Sarina",
            "Satisfy" => "Satisfy",
            "Scada" => "Scada",
            "Schoolbell" => "Schoolbell",
            "Seaweed Script" => "Seaweed+Script",
            "Sevillana" => "Sevillana",
            "Seymour One" => "Seymour+One",
            "Shadows Into Light" => "Shadows+Into+Light",
            "Shadows Into Light Two" => "Shadows+Into+Light+Two",
            "Shanti" => "Shanti",
            "Share" => "Share",
            "Share Tech" => "Share+Tech",
            "Share Tech Mono" => "Share+Tech+Mono",
            "Shojumaru" => "Shojumaru",
            "Short Stack" => "Short+Stack",
            "Siemreap" => "Siemreap",
            "Sigmar One" => "Sigmar+One",
            "Signika" => "Signika",
            "Signika Negative" => "Signika+Negative",
            "Simonetta" => "Simonetta",
            "Sintony" => "Sintony",
            "Sirin Stencil" => "Sirin+Stencil",
            "Six Caps" => "Six+Caps",
            "Skranji" => "Skranji",
            "Slackey" => "Slackey",
            "Smokum" => "Smokum",
            "Smythe" => "Smythe",
            "Sniglet" => "Sniglet",
            "Snippet" => "Snippet",
            "Snowburst One" => "Snowburst+One",
            "Sofadi One" => "Sofadi+One",
            "Sofia" => "Sofia",
            "Sonsie One" => "Sonsie+One",
            "Sorts Mill Goudy" => "Sorts+Mill+Goudy",
            "Source Code Pro" => "Source+Code+Pro",
            "Source Sans Pro" => "Source+Sans+Pro",
            "Special Elite" => "Special+Elite",
            "Spicy Rice" => "Spicy+Rice",
            "Spinnaker" => "Spinnaker",
            "Spirax" => "Spirax",
            "Squada One" => "Squada+One",
            "Stalemate" => "Stalemate",
            "Stalinist One" => "Stalinist+One",
            "Stardos Stencil" => "Stardos+Stencil",
            "Stint Ultra Condensed" => "Stint+Ultra+Condensed",
            "Stint Ultra Expanded" => "Stint+Ultra+Expanded",
            "Stoke" => "Stoke",
            "Strait" => "Strait",
            "Sue Ellen Francisco" => "Sue+Ellen+Francisco",
            "Sunshiney" => "Sunshiney",
            "Supermercado One" => "Supermercado+One",
            "Suwannaphum" => "Suwannaphum",
            "Swanky and Moo Moo" => "Swanky+and+Moo+Moo",
            "Syncopate" => "Syncopate",
            "Tangerine" => "Tangerine",
            "Taprom" => "Taprom",
            "Tauri" => "Tauri",
            "Telex" => "Telex",
            "Tenor Sans" => "Tenor+Sans",
            "Text Me One" => "Text+Me+One",
            "The Girl Next Door" => "The+Girl+Next+Door",
            "Tienne" => "Tienne",
            "Tinos" => "Tinos",
            "Titan One" => "Titan+One",
            "Titillium Web" => "Titillium+Web",
            "Trade Winds" => "Trade+Winds",
            "Trocchi" => "Trocchi",
            "Trochut" => "Trochut",
            "Trykker" => "Trykker",
            "Tulpen One" => "Tulpen+One",
            "Ubuntu" => "Ubuntu",
            "Ubuntu Condensed" => "Ubuntu+Condensed",
            "Ubuntu Mono" => "Ubuntu+Mono",
            "Ultra" => "Ultra",
            "Uncial Antiqua" => "Uncial+Antiqua",
            "Underdog" => "Underdog",
            "Unica One" => "Unica+One",
            "UnifrakturCook" => "UnifrakturCook",
            "UnifrakturMaguntia" => "UnifrakturMaguntia",
            "Unkempt" => "Unkempt",
            "Unlock" => "Unlock",
            "Unna" => "Unna",
            "VT323" => "VT323",
            "Vampiro One" => "Vampiro+One",
            "Varela" => "Varela",
            "Varela Round" => "Varela+Round",
            "Vast Shadow" => "Vast+Shadow",
            "Vibur" => "Vibur",
            "Vidaloka" => "Vidaloka",
            "Viga" => "Viga",
            "Voces" => "Voces",
            "Volkhov" => "Volkhov",
            "Vollkorn" => "Vollkorn",
            "Voltaire" => "Voltaire",
            "Waiting for the Sunrise" => "Waiting+for+the+Sunrise",
            "Wallpoet" => "Wallpoet",
            "Walter Turncoat" => "Walter+Turncoat",
            "Warnes" => "Warnes",
            "Wellfleet" => "Wellfleet",
            "Wendy One" => "Wendy+One",
            "Wire One" => "Wire+One",
            "Yanone Kaffeesatz" => "Yanone+Kaffeesatz",
            "Yellowtail" => "Yellowtail",
            "Yeseva One" => "Yeseva+One",
            "Yesteryear" => "Yesteryear",
            "Zeyada" => "Zeyada",                    

        ),
        "description" 			=> "Need help to choose video check from https://fonts.google.com/ ",
        "group" 			=> "",
        
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Headline Font Size', 'awavcl' ),
            'param_name'       => 'heading_size',
            "value" => 16,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Heading Font style", "awavcl"),
            "param_name" => "heading_style",
            "value" => array(
                __("Normal","awavcl") => "",
                __("Italic","awavcl") => "italic",
            ),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Tab Lable Padding: Top+Bottom', 'awavcl' ),
            'param_name'       => 'pad_tb',
            "value" => 5,
            "min" => 0,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Title Font Size as Pixel. Default is 26px", "awavcl"),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Lable Background Color/Theme Color", 'awavcl'),
            "param_name" => "lbl_bg_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),

        array(
            "type" => "colorpicker",
            "heading" => __("Lable Color", 'awavcl'),
            "param_name" => "lable_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),

        array(
            "type" => "colorpicker",
            "heading" => __("Heading Color", 'awavcl'),
            "param_name" => "heading_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("hilighted Heading Color", 'awavcl'),
            "param_name" => "high_heading_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Heading Background", 'awavcl'),
            "param_name" => "heading_bg",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Border Color", 'awavcl'),
            "param_name" => "brdr_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "news_ticker", 'value' => array('newsticker-1','newsticker-3',) ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Text Hover Color", 'awavcl'),
            "param_name" => "hvr_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Color", 'awavcl'),
            "param_name" => "btn_clr",
            "value" => "",
            "group" => __("Button", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Border Color", 'awavcl'),
            "param_name" => "btn_brdr_clr",
            "value" => "",
            "group" => __("Button", 'awavcl'),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_attr__("Extra class name", 'awavcl'),
            "param_name" => "el_class",
            "description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'awavcl'),
        ),

    )

));

function awavc_news_style_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(


                'news_ticker' => 'newsticker-1',
                'tab_lbl' => 'Breaking News',
                'news_contents' => '',
                'scrl_speed' => '2',
                'lable_size' => '',
                'font_family' => '',
                'heading_size' => '',
                'heading_style' => '',
                'pad_tb' => '',
                'lbl_bg_clr' => '#CE2525',
                'lable_clr' => '',
                'high_heading_clr' => '',
                'heading_clr' => '',
                'heading_bg' => '',
                'brdr_clr' => '',
                'hvr_clr' => '',
                'enabled' => 'yes_btn',
                '$height' => '',
                'btn_clr' => '',
                'height' => '',
                'btn_brdr_clr' => '',
                'rss_url' => 'http://rss.cnn.com/rss/edition.rss',
                'el_class' => '',
    ), $atts));


    wp_register_style( 'awavcl-tcp', plugins_url( '/css/awavc-news-ticker.min.css',  __FILE__) );
    wp_enqueue_style( 'awavcl-tcp' );

    wp_register_script('awavc-tjs', plugins_url('/js/news.js', __FILE__), array('jquery'));
    wp_enqueue_script('awavc-tjs');

    $news_contents = vc_param_group_parse_atts($news_contents);

    $html = '';
     if( $font_family != '' ){$html .= '<style>@import url(https://fonts.googleapis.com/css?family='.$font_family.');</style>';}
    if($news_ticker == 'newsticker-1') {
               $q = rand(99,99999);
    $html .= '
            <div class="demo-box">
                <div class="awavc-ticker-news awavc-ticker-'.$q.'" id="awavcTicker1-'.$q.'">';
                	if (!empty($tab_lbl)){$html .= ' <div class="bn-label" style="padding:'.$pad_tb.'px; font-size:'.$lable_size.'px; color:'.$lable_clr.'; background:'.$lbl_bg_clr.'">'.$tab_lbl.'</div>'; }
                	$html .= ' <div class="bn-news" style="background:'.$heading_bg.';">
                		<ul>';

                        foreach($news_contents as $news_content){

                            $hihglite       ='';
                            $highlite_txt   = $news_content['highlite_txt'];
                            $headline       = $news_content['headline'];
                            $url       = $news_content['url'];
                            $target       = '';
                            if(!empty($news_content['target'])){$target = $news_content['target'];}
                            $num       ='';
                            if(!empty($news_content['num'])){$num = $news_content['num'];}
                            if(!empty($highlite_txt)){ $hihglite .= '<span class="bn-prefix" style="transition: all 0.3s ease-in-out 0s;color:'.$high_heading_clr.';">'.$highlite_txt.'</span>';}

                               $html .= '<li style="padding:'.$pad_tb.'px;"><a href="'.$url.'" target="'.$target.'" style="font-family:'.$font_family.';font-size:'.$heading_size.'px; color:'.$heading_clr.'; background:'.$heading_bg.';font-style='.$heading_style.';">'.$hihglite.' '.$num.' '.$headline.'</a></li> ';
                        }
                	$html .= '
                		</ul>
                	</div> ';
                  if($enabled == 'yes_btn'){
                $html .= '<div class="bn-controls">
                    		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-prev"></span></button>
                    		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-action"></span></button>
                    		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-next"></span></button>
                    	</div>';
                }
                if($enabled == 'no_btn'){
                $html .= '<div class="bn-controls">
                        		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-prev"></span></button>
                                <button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-next"></span></button>
                        	</div>';
                }

    $html .= '      </div>

            <style>#awavcTicker1-'.$q.' {height: '.$height.'px !important;border-color:'.$brdr_clr.';}.awavc-ticker-'.$q.' .bn-arrow::after{border-color:'.$btn_clr.'!important;}.awavc-ticker-'.$q.' .bn-pause::after,.awavc-ticker-'.$q.' .bn-pause::before{border-color:'.$btn_clr.'!important;background-color:'.$btn_clr.'!important;}.awavc-ticker-'.$q.' .bn-controls button{border-color:'.$heading_bg.'!important;}.awavc-ticker-'.$q.' .bn-controls button.aw-left-brdr{border-left-color:'.$btn_brdr_clr.'!important;}.awavc-ticker-'.$q.' .bn-news a:hover .bn-prefix,.awavc-ticker-'.$q.' .bn-news a:hover{color: '.$hvr_clr.'!important;}</style>
            </div> ';


}

    if($news_ticker == 'newsticker-2') {
               $q = rand(99,99999);
        $html .= '
            <div class="demo-box">
                <div class="awavc-ticker-news awavc-ticker-'.$q.'" id="newsTicker4-'.$q.'">';
                	if (!empty($tab_lbl)){$html .= ' <div class="bn-label" style="padding:'.$pad_tb.'px; font-size:'.$lable_size.'px; color:'.$lable_clr.'; background:'.$lbl_bg_clr.'">'.$tab_lbl.'</div>'; }
                	$html .= '
                	<div class="bn-news" style="background:'.$heading_bg.';">
                		<ul>
                            <li><span class="bn-loader-text">Data loading...</span></li>
                		</ul>
                	</div> ';
                  if($enabled == 'yes_btn'){
                $html .= '<div class="bn-controls">
                    		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-prev"></span></button>
                    		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-action"></span></button>
                    		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-next"></span></button>
                    	</div>';
                }
                if($enabled == 'no_btn'){
                $html .= '<div class="bn-controls">
                        		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-prev"></span></button>
                                <button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-next"></span></button>
                        	</div>';
                }

    $html .= '      </div>

            <style>#newsTicker4-'.$q.' {height: '.$height.'px !important;border-color:'.$brdr_clr.';}.awavc-ticker-'.$q.' .bn-arrow::after{border-color:'.$btn_clr.'!important;}.awavc-ticker-'.$q.' .bn-pause::after,.awavc-ticker-'.$q.' .bn-pause::before{border-color:'.$btn_clr.'!important;background-color:'.$btn_clr.'!important;}.awavc-ticker-'.$q.' .bn-controls button{border-color:'.$heading_bg.'!important;}.awavc-ticker-'.$q.' .bn-controls button.aw-left-brdr{border-left-color:'.$btn_brdr_clr.'!important;}.awavc-ticker-'.$q.' .bn-news a:hover .bn-prefix,.awavc-ticker-'.$q.' .bn-news a:hover{color: '.$hvr_clr.'!important;}.awavc-ticker-'.$q.' .bn-news ul li a{padding:'.$pad_tb.'px!important;font-size:'.$heading_size.'px!important; color:'.$heading_clr.'!important; background:'.$heading_bg.'!important;font-style='.$heading_style.'!important;}#newsTicker4-'.$q.' ul li{font-family:'.$font_family.'!important;}</style>
            </div> ';


}
    
    if($news_ticker == 'newsticker-3') {
               $q = rand(99,99999);
    $html .= '
            <div class="demo-box">
                <div class="awavc-ticker-news awavc-ticker-'.$q.'" id="newsTicker2-'.$q.'">';
                	if (!empty($tab_lbl)){$html .= ' <div class="bn-label" style="padding:'.$pad_tb.'px; font-size:'.$lable_size.'px; color:'.$lable_clr.'; background:'.$lbl_bg_clr.'">'.$tab_lbl.'</div>'; }
                	$html .= '
                	<div class="bn-news" style="background:'.$heading_bg.';">
                		<ul>';

                        foreach($news_contents as $news_content){

                            $hihglite       ='';
                            $highlite_txt   = $news_content['highlite_txt'];
                            $headline       = $news_content['headline'];
                            $url       = $news_content['url'];
                            $target       = '';
                            if(!empty($news_content['target'])){$target = $news_content['target'];}
                            $num       ='';
                            if(!empty($news_content['num'])){$num = $news_content['num'];}
                            if(!empty($highlite_txt)){ $hihglite .= '<span class="bn-prefix" style="transition: all 0.3s ease-in-out 0s;color:'.$high_heading_clr.';">'.$highlite_txt.'</span>';}

                               $html .= '<li style="padding:'.$pad_tb.'px;"><a href="'.$url.'" target="'.$target.'" style="font-family:'.$font_family.';font-size:'.$heading_size.'px; color:'.$heading_clr.'; background:'.$heading_bg.';font-style='.$heading_style.';">'.$hihglite.' '.$num.' '.$headline.'</a></li> ';
                        }
                	$html .= '
                		</ul>
                	</div> ';
                  if($enabled == 'yes_btn'){
                $html .= '<div class="bn-controls">
                    		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-prev"></span></button>
                    		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-action"></span></button>
                    		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-next"></span></button>
                    	</div>';
                }
                if($enabled == 'no_btn'){
                $html .= '<div class="bn-controls">
                        		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-prev"></span></button>
                                <button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-next"></span></button>
                        	</div>';
                }

    $html .= '      </div>

            <style>#newsTicker2-'.$q.' {height: '.$height.'px !important;border-color:'.$brdr_clr.';}.awavc-ticker-'.$q.' .bn-arrow::after{border-color:'.$btn_clr.'!important;}.awavc-ticker-'.$q.' .bn-pause::after,.awavc-ticker-'.$q.' .bn-pause::before{border-color:'.$btn_clr.'!important;background-color:'.$btn_clr.'!important;}.awavc-ticker-'.$q.' .bn-controls button{border-color:'.$heading_bg.'!important;}.awavc-ticker-'.$q.' .bn-controls button.aw-left-brdr{border-left-color:'.$btn_brdr_clr.'!important;}.awavc-ticker-'.$q.' .bn-news a:hover .bn-prefix,.awavc-ticker-'.$q.' .bn-news a:hover{color: '.$hvr_clr.'!important;}</style>
            </div> ';


}

/*    if($news_ticker == 'newsticker-4') {
               $q = rand(99,99999);
        $html .= '
            <div class="demo-box">
                <div class="awavc-ticker-news awavc-ticker-'.$q.'" id="newsTicker4-'.$q.'">';
                                    if($enabled == 'yes_btn'){
                                $html .= '<div class="bn-controls">
                                        		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-prev"></span></button>
                                        		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-action"></span></button>
                                        		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-next"></span></button>
                                        	</div>';
                                }
                                if($enabled == 'no_btn'){
                                $html .= '<div class="bn-controls">
                                                		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-prev"></span></button>
                                                                <button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-next"></span></button>
                                                	</div>';
                                }

        $html .= '

                	<div class="bn-news" style="background:'.$heading_bg.';">
                		<ul>
                            <li><span class="bn-loader-text">Data loading...</span></li>
                		</ul>
                	</div>';
                	if (!empty($tab_lbl)){$html .= ' <div class="bn-label" style="padding:'.$pad_tb.'px; font-size:'.$lable_size.'px; color:'.$lable_clr.'; background:'.$lbl_bg_clr.'">'.$tab_lbl.'</div>'; }
                	$html .= '
                     ';
                  if($enabled == 'yes_btn'){
                $html .= '<div class="bn-controls">
                    		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-prev"></span></button>
                    		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-action"></span></button>
                    		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-next"></span></button>
                    	</div>';
                }
                if($enabled == 'no_btn'){
                $html .= '<div class="bn-controls">
                        		<button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-prev"></span></button>
                                <button class="aw-left-brdr" style="background:'.$heading_bg.';"><span class="bn-arrow bn-next"></span></button>
                        	</div>';
                }

    $html .= '      </div>

            <style>#newsTicker4-'.$q.' {height: '.$height.'px !important;border-color:'.$brdr_clr.';}.awavc-ticker-'.$q.' .bn-arrow::after{border-color:'.$btn_clr.'!important;}.awavc-ticker-'.$q.' .bn-pause::after,.awavc-ticker-'.$q.' .bn-pause::before{border-color:'.$btn_clr.'!important;background-color:'.$btn_clr.'!important;}.awavc-ticker-'.$q.' .bn-controls button{border-color:'.$heading_bg.'!important;}.awavc-ticker-'.$q.' .bn-controls button.aw-left-brdr{border-left-color:'.$btn_brdr_clr.'!important;}.awavc-ticker-'.$q.' .bn-news a:hover .bn-prefix,.awavc-ticker-'.$q.' .bn-news a:hover{color: '.$hvr_clr.'!important;}.awavc-ticker-'.$q.' .bn-news ul li a{padding:'.$pad_tb.'px!important;font-size:'.$heading_size.'px!important; color:'.$heading_clr.'!important; background:'.$heading_bg.'!important;font-style='.$heading_style.'!important;}</style>
            </div> ';


}*/

$html .= '
    <script type="text/javascript">

        jQuery(document).ready(function(){

            jQuery("#awavcTicker1-'.$q.'").breakingNews({
                    scrollSpeed: '.$scrl_speed.'
            
            });
            jQuery("#newsTicker2-'.$q.'").breakingNews({
                direction: "rtl",
                scrollSpeed: '.$scrl_speed.'
                
            });
            jQuery("#newsTicker3").breakingNews({
                themeColor: "#f9a828",
                scrollSpeed: 3,
                effect: "slide-left",
                scrollSpeed: '.$scrl_speed.'
            });

            jQuery("#newsTicker4-'.$q.'").breakingNews({
                themeColor: \''.$lbl_bg_clr.'\',
                scrollSpeed: '.$scrl_speed.',
                source: {
                    type:\'rss\',
                    usingApi:\'rss2json\',
                    rss2jsonApiKey: \'5ivfzdrkuqwmoe0dgxeqvhfz0knlo7yq4fw20bt0\',
                    url:\''.$rss_url.'\',
                    limit:7,
                    
                    showingField:\'title\',
                    linkEnabled: true,
                    target:\'_blank\',
                    seperator: \'<span class="bn-seperator" style="background-image:url(img/cnn-logo.png);"></span>\',
                    errorMsg: \'RSS Feed not loaded. Please try again.\',
                
                }
            });

            jQuery("#newsTicker5").breakingNews({
                effect: \'typography\',
                scrollSpeed: '.$scrl_speed.'
            });


            jQuery("#newsTicker6").breakingNews({
                source: {
                    type:\'json\',
                    url:\'https://jsonplaceholder.typicode.com/posts\',
                    limit:20,
                    showingField:\'title\',
                    linkEnabled: false,
                    target:\'_blank\',
                    seperator: \'<span class="bn-seperator" style="background-image:url(img/cnn-logo.png);"></span>\',
                    errorMsg: \'Json file not loaded. Please check the settings.\',
                    scrollSpeed: '.$scrl_speed.'
                }
            });

            jQuery("#newsTicker7").breakingNews({
                themeColor: \'#11cbd7\',
                background: \'transparent\',
                borderWidth: 0,
                source: {
                    type:\'rss\',
                    usingApi:\'YQL\',
                    url:\'http://feeds.bbci.co.uk/news/rss.xml\',
                    limit:20,
                    showingField:\'title\',
                    linkEnabled: true,
                    target:\'_blank\',
                    seperator: \'<span class="bn-seperator bn-news-dot"></span>\',
                    errorMsg: \'Json file not loaded. Please check the settings.\'
                }
            });


            jQuery("#newsTicker8").breakingNews({
                height:56,
                borderWidth:0,
                background: \'url(img/background-pattern-example.png)\'
            });

            jQuery("#newsTicker9").breakingNews({
                effect: \'fade\',
                themeColor: \'#ef7b7b\'
            });

            jQuery("#newsTicker10").breakingNews({
                effect: \'slide-down\',
                themeColor: \'#2eb872\',
                height: 50,
                fontSize: \'18px\'
            });

            jQuery("#newsTicker11").breakingNews({
                effect: \'slide-up\'
            });


            jQuery("#newsTicker12").breakingNews({
                effect: \'typography\',
                direction: \'rtl\',
                themeColor: \'#08c299\'
            });

            jQuery("#newsTicker13").breakingNews({
                effect: \'slide-right\'
            });

            jQuery("#newsTicker14").breakingNews();

            jQuery("#newsTicker15").breakingNews({
                position : \'fixed-bottom\',
                borderWidth: 3,
                height: 50,
                themeColor: \'#ce2525\'
            });


        });

    </script>';











    return $html;
}

add_shortcode("awavc_news_style", "awavc_news_style_shortcode");