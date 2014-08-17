<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="<?php bloginfo('html_type'); ?>"; charset=<?php bloginfo('charset');?> />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon; charset=binary">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon; charset=binary">
	<title>
		<?php if ( is_home() ) { ?>Universidad Nacional de Colombia: <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>
	    <?php if ( is_author() ) { ?>Universidad Nacional de Colombia: <?php bloginfo('name'); ?> | Archivo por autor<?php } ?>
	    <?php if ( is_single() ) { ?>Universidad Nacional de Colombia: <?php wp_title(''); ?> | <?php wp_title(''); ?><?php } ?>
	    <?php if ( is_page() ) { ?>Universidad Nacional de Colombia: <?php bloginfo('name'); ?> | <?php wp_title(''); ?><?php } ?>
	    <?php if ( is_category() ) { ?>Universidad Nacional de Colombia: <?php bloginfo('name'); ?> | Archivo por Categoría | <?php single_cat_title(); ?><?php } ?>
	    <?php if ( is_month() ) { ?>Universidad Nacional de Colombia: <?php bloginfo('name'); ?> | Archivo por Mes | <?php the_time('F'); ?><?php } ?>
	    <?php if ( is_search() ) { ?>Universidad Nacional de Colombia: <?php bloginfo('name'); ?> | Resultados<?php } ?>
	    <?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> | Archivo por Tag | <?php  single_tag_title("", true); } } ?>
	</title>
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" media="all" />
	<!--CSS Universidad Nacional-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/unal.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/base.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/tablet.css" media="only screen and (min-width: 992px) and (max-width: 1199px)">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/phone.css" media="only screen and (min-width: 768px) and (max-width: 991px)">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/small.css" media="only screen and (max-width: 767px)">
	<!-- FIN CSS Universidad Nacional-->
	<!-- acciones para formularios con la clase ".unal-form" -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/form.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-select.min.css" media="all">
	<!-- fin acciones para formulario -->
	<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script><![endif]-->
	<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/js/respond.js" type="text/javascript"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<!-- CSS proyecto Tenemos que Hablar -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor/slick.css">
	<!-- fin CSS proyecto Tenemos que Hablar-->
	
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>
<body data-spy="scroll" data-target="#menuPrincipaltqh" <?php body_class(); ?>>
	<!-- encabezado UN -->
	<?php include('inc/headerUN.php')?>
	<!-- FIN encabezado UN-->
	
	<!-- fondo UN -->
	<div id="home-image">
		<img src="<?php echo get_template_directory_uri(); ?>/images/img_demo.jpg" width="2000" height="80" border="0" alt="">
	</div>
	<!-- FIN fondo UN-->
	
	
	<!-- imagen tqhablar-->
	<div class="row">
	    <h1>aca la imagen principal de la página</h1>
	    <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio perferendis laborum necessitatibus, magni iure iusto totam autem rem. Esse ut voluptates consectetur veniam modi ducimus, blanditiis pariatur quo! Vero, cupiditate.</span>
	    <span>Placeat consectetur rem excepturi voluptates voluptatum saepe id debitis aliquam sapiente nulla ratione, velit temporibus eius ut voluptate iure, dolore alias laudantium. Obcaecati, explicabo voluptas amet ducimus alias pariatur vero.</span>
	    <span>Aspernatur maiores debitis veniam modi nobis cumque, eligendi nemo laborum, iusto ipsam dolorum cum reiciendis magnam consectetur doloribus minima? Sequi assumenda officiis sit voluptas adipisci, a aliquam fuga animi molestiae?</span>
	    <span>Similique doloribus repellat error mollitia minima, quos quidem doloremque animi recusandae cum. Enim nam minima provident praesentium esse error modi consectetur illo ratione optio. Fugiat magni at a, cupiditate expedita!</span>
	    <span>Nostrum hic iure, sit architecto, debitis voluptate, assumenda eligendi voluptates porro quod a doloribus, pariatur culpa quasi odio laboriosam! Debitis animi, quaerat ipsam dolor consectetur sed enim possimus totam voluptates!</span>
	    <span>Inventore blanditiis eum nulla corporis laboriosam nostrum explicabo, doloribus, ducimus, pariatur repellendus numquam optio dicta facilis, quaerat minus error culpa eligendi molestias. Dicta laborum laboriosam earum praesentium officia modi sit!</span>
	    <span>Voluptatem sint, quas sed natus ratione. Aspernatur nobis quo aut architecto, dolorem at neque qui soluta maiores reprehenderit minima, dolores explicabo quas. Ab, dolor voluptatem eius officia dicta tenetur officiis?</span>
	    <span>Tenetur blanditiis odit magni deserunt ad hic sed quaerat voluptas excepturi ipsam ab quibusdam nam iusto cupiditate iure velit nulla explicabo laudantium dolore adipisci, impedit ipsum, eveniet omnis. Facere, non!</span>
	    <span>Quod esse nulla rerum similique natus obcaecati aliquid, nam excepturi quo ratione assumenda unde amet aut eos architecto earum laborum. Delectus illum aspernatur consequuntur repudiandae totam hic in magnam pariatur.</span>
	    <span>Soluta vitae esse ratione ut incidunt praesentium non facilis repudiandae, suscipit voluptatum, necessitatibus omnis iste. Commodi possimus temporibus, quas porro incidunt atque ut veniam, soluta corporis necessitatibus dolorem quos quod.</span>
	    <span>Enim consequatur tempore beatae hic, fuga nulla quaerat natus animi voluptatem vitae, dolorum corporis. Accusamus fuga ipsam officiis neque obcaecati nesciunt beatae perspiciatis dicta possimus voluptatum corporis, provident fugit nulla!</span>
	    <span>Sequi veniam aut recusandae deleniti, sapiente repellendus assumenda est debitis perspiciatis nemo quod laborum! Enim animi minus illum tenetur repudiandae, numquam praesentium similique delectus dolore omnis, ratione libero. Doloremque, voluptatum.</span>
	    <span>Suscipit, natus iure perferendis cumque quidem sunt hic ratione reiciendis consequatur veritatis repellendus atque facilis explicabo dolorem. Autem possimus nisi, maxime assumenda nemo, ipsam blanditiis pariatur tenetur reprehenderit libero, ratione.</span>
	    <span>Totam quidem tempora odio alias, commodi placeat eius perferendis porro deserunt amet! Aspernatur quae asperiores, vitae esse rem minus fugiat quo. Magnam aperiam explicabo dolorem fugiat nulla pariatur atque nostrum!</span>
	    <span>Quisquam rerum quo, fugit nulla nobis laboriosam voluptate fugiat reiciendis nesciunt, quasi deleniti ducimus cupiditate! Facilis voluptatum nesciunt similique sunt eius dignissimos optio voluptates laboriosam adipisci, hic veritatis cum dicta.</span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem facilis quibusdam sed totam, cumque voluptate, quam corrupti temporibus quae porro. Quibusdam necessitatibus, illo! Labore maiores eius velit sit natus, commodi!</span>
	    <span>Eius delectus, ad animi nihil, mollitia quas. Asperiores sequi, accusamus tempora error delectus quos ea dolorem quam culpa quod accusantium velit iusto quasi dolore in repellat officiis sit perferendis mollitia!</span>
	    <span>Voluptates laudantium, doloremque dolore soluta facere optio, labore sed tenetur enim inventore, et alias hic, accusamus esse magnam quod! Natus est aliquid iure, consequatur doloremque error cupiditate explicabo hic fugiat.</span>
	    <span>Ducimus corrupti, velit a excepturi quidem voluptas sed numquam dicta facere! Excepturi doloribus ea consequatur voluptatum expedita illo odio natus quod, maxime optio repudiandae explicabo adipisci enim praesentium deleniti id!</span>
	    <span>Expedita molestias, impedit. Dolorum officiis quaerat delectus impedit, eligendi voluptates quae atque quibusdam nulla error voluptatibus autem, labore veniam asperiores nobis, aliquid esse velit et odit fuga. Numquam, rem. Delectus!</span>
	    <span>Optio sed quos cum sint error, placeat id dolorem tenetur veritatis. Qui natus nesciunt corporis repellendus voluptatibus, delectus, vero omnis possimus a quas, dicta quasi nam atque sunt ut obcaecati.</span>
	    <span>Officiis nulla quasi veritatis dolore, eveniet ab nobis rerum! Sapiente cupiditate accusamus eveniet quasi totam tempore similique corporis. Aspernatur unde cumque, perferendis velit similique quod numquam temporibus quos modi, iure.</span>
	    <span>Nobis quis placeat natus, eaque mollitia harum, dignissimos perspiciatis vel nulla iure nesciunt expedita incidunt laborum, cumque est esse a. Cum nisi aperiam, natus veritatis, placeat perferendis itaque odit quam.</span>
	    <span>Facere, voluptatibus cumque quis et, iusto suscipit quam maxime amet in ratione inventore? Pariatur tempore sed veniam illo dolorem similique dolore alias, iure nisi earum vel voluptatem! Molestiae, repudiandae, architecto.</span>
	    <span>Deserunt velit soluta totam dolorum mollitia aliquam quisquam autem illum dolor quae fuga consequuntur pariatur harum, voluptatibus dicta saepe nemo, quis laboriosam aperiam tempora ipsum molestias enim unde nesciunt! Debitis.</span>
	    <span>Saepe cupiditate corrupti similique error, praesentium, nesciunt maxime. Ipsam qui, vitae. Quam accusantium a odit quo, voluptatum porro sed nobis molestiae enim quos expedita non reprehenderit, repudiandae adipisci dicta suscipit.</span>
	    <span>Deserunt necessitatibus, deleniti consequatur soluta voluptatibus dolore vitae maxime tempora, minima magnam unde a veniam corporis ex. Qui ducimus rerum est ipsa, aliquid aut sit, in reprehenderit quas, accusamus blanditiis.</span>
	    <span>Magnam eligendi dignissimos nesciunt at harum, aut cupiditate quae dicta, asperiores mollitia nisi sit quam natus. Illum non suscipit iste officia necessitatibus, eaque tempore a aperiam, accusantium eius corporis error!</span>
	    <span>Praesentium laborum ipsa dolorum nisi quae quos quam hic aut consectetur a architecto, quod recusandae est id, libero dicta doloremque vitae animi, consequuntur assumenda repellendus quaerat, commodi deserunt nemo? Ipsam?</span>
	    <span>Earum, deleniti voluptatum ipsa! Optio laudantium nostrum facere placeat ducimus possimus consequatur, ullam quibusdam, vero porro officia, sed soluta cum libero consectetur! Atque dignissimos corporis delectus. Quas a doloremque nesciunt!</span>
	    <span>Quasi quae reprehenderit excepturi nisi libero eum minima necessitatibus corporis, blanditiis tempore laboriosam deserunt inventore itaque aut sed quo, at ducimus non corrupti, et adipisci, quis repudiandae velit. Laborum, facilis.</span>
	    <span>Doloremque minus sequi cumque quo maxime, commodi eveniet! Ea numquam, architecto dolor itaque cupiditate voluptatum, tempore et odio quis. Soluta, praesentium. Dolore suscipit quis minima similique corporis exercitationem impedit rerum.</span>
	    <span>Incidunt, omnis et recusandae veritatis quaerat aliquam, ullam dolorum soluta voluptates enim consectetur cum. Eaque cumque perferendis illo. Quas, unde. Molestiae eligendi facilis error optio culpa corporis, nostrum ipsam eaque.</span>
	    <span>Sequi qui suscipit commodi eos laborum amet adipisci recusandae placeat est harum quaerat pariatur, repellat enim dolor possimus soluta consectetur perspiciatis officiis, nihil ad officia cupiditate ullam culpa. Aspernatur, a?</span>
	    <span>Iure voluptate, harum, explicabo obcaecati, dolor odit facere nemo possimus sed eaque architecto corrupti ipsum quam nobis. Possimus consequuntur pariatur dolor nostrum. A ullam consequatur ipsam nobis voluptate ab voluptatem.</span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis adipisci, eaque necessitatibus eligendi aspernatur, delectus voluptas molestias sed dignissimos error laborum autem perferendis cupiditate qui labore minus in excepturi.</span>
	    <span>Eveniet laboriosam pariatur autem vitae numquam, assumenda doloribus quibusdam neque ducimus, sit! Animi libero harum explicabo officiis eveniet ullam, mollitia quasi officia, error ab modi facere repudiandae, debitis quod eius!</span>
	    <span>Nesciunt iusto quidem officiis incidunt neque laborum voluptatibus eius iure harum, recusandae atque facere excepturi praesentium, sunt eveniet autem. Error maiores veritatis atque dolorem laboriosam aliquam, voluptatem nesciunt quam nisi!</span>
	    <span>Eligendi perferendis illum dignissimos ipsa sapiente ex commodi fuga, veniam dolores aliquam quod. Quam, atque, nihil. Quasi reiciendis, nam, consequatur animi odio eos soluta magnam culpa id quaerat, aut, ipsa.</span>
	    <span>Repellendus totam atque id facere! Animi, dicta impedit adipisci sint fugit esse consequuntur quam sit rerum optio. Explicabo placeat dolorum voluptate deleniti architecto, numquam ipsam in neque! Molestias, labore, officia!</span>
	    <span>Amet eligendi aperiam autem magnam quibusdam facilis, error sequi quidem natus. Optio aliquam voluptatem consequuntur explicabo fugiat laboriosam aut, temporibus porro architecto, dolor alias in praesentium ipsa dignissimos impedit voluptate.</span>
	    <span>Nulla nostrum quidem inventore, optio perspiciatis quos molestias. Nostrum cumque pariatur vel rerum, fugiat quaerat, sed repellat voluptas, quasi laudantium veniam id eum, voluptates soluta at illum aut nam similique!</span>
	    <span>Veritatis doloribus, unde veniam sed, fuga dolorum quisquam soluta non reprehenderit, saepe assumenda, error placeat quo ex impedit repudiandae quasi sint! Necessitatibus architecto tempora porro deleniti et nesciunt, praesentium illo!</span>
	    <span>Eligendi natus quas adipisci explicabo sed, vero nesciunt eius quasi voluptatem ea quod, sit repellat totam veritatis iste quae, praesentium voluptate quisquam, modi saepe perspiciatis fugit consectetur. Quas, cupiditate, aliquam.</span>
	    <span>Aspernatur animi cum iure eos consequatur quo incidunt sapiente veniam laboriosam amet quidem, aliquam, fuga quam quasi ab voluptatibus harum, libero atque et laudantium odit sint molestiae! Numquam, earum, reprehenderit!</span>
	    <span>Veritatis ducimus deserunt perferendis nam eveniet, odit blanditiis officiis quasi necessitatibus. Sed ipsum ad ea deserunt neque beatae possimus necessitatibus maiores aliquid saepe incidunt quas quo, odio tempora accusamus nobis!</span>
	    <span>Obcaecati dignissimos quisquam eius ducimus pariatur, doloremque quis harum beatae, blanditiis facere autem tempora ratione alias eveniet quos. Placeat et numquam, repudiandae eius enim pariatur atque laboriosam consectetur ratione cupiditate.</span>
	    <span>Numquam quibusdam officiis rem a quia placeat. Nihil sit tempore, hic veritatis nostrum quam. Ullam libero placeat accusantium dolores sit commodi illum officia, praesentium pariatur quos asperiores! Eum, architecto. Perspiciatis!</span>
	    <span>Id error pariatur veniam delectus at dolor recusandae aliquid, est neque ratione. Perferendis soluta, veniam praesentium molestias porro illum blanditiis, inventore esse sed debitis, libero, minima. Consequatur dolores, magni eveniet.</span>
	    <span>Dolores animi libero magni dicta minus reprehenderit iste fuga laboriosam aliquid maxime quod, neque eos explicabo laudantium cupiditate iusto corporis fugiat voluptas quibusdam quasi aspernatur est saepe. Quidem, laborum, iure.</span>
	    <span>Hic odit ullam mollitia dolorum repellendus. Eius expedita vitae ut praesentium quisquam commodi quos impedit, quam adipisci eaque recusandae sequi possimus blanditiis, eum dicta et cum, veniam, nisi dolor voluptates?</span>
	    <span>Repellendus quos exercitationem sunt et fuga autem accusamus, laboriosam facilis voluptatem deleniti repellat, similique optio est commodi cum odit perspiciatis enim nisi possimus aperiam. Adipisci aliquam assumenda sapiente modi, libero!</span>
	    <span>Consequuntur blanditiis quasi enim ducimus. Vero expedita laboriosam cum cupiditate delectus maxime ut inventore nihil qui eveniet! Minima dolorum nobis, aliquid, omnis, quas expedita amet, dicta distinctio ducimus recusandae eligendi.</span>
	    <span>Illum voluptate vero magni dolor saepe excepturi dolorem, deserunt commodi odit, iusto sapiente beatae animi, culpa nulla repudiandae optio minima nostrum. Blanditiis iure eos labore maiores rerum adipisci, tempore. Autem.</span>
	    <span>Quod ipsum sunt iste magni molestiae optio veritatis aspernatur voluptatum nulla, temporibus numquam atque. Atque libero molestiae recusandae obcaecati, vero laudantium, nihil consequuntur cupiditate temporibus laborum ratione? Tenetur porro, doloribus.</span></p>
	</div>
	<!-- FIN imagen tqhablar-->
	
	
	<!-- menu tqhablar-->
	<nav class="navbar navbar-tqhablar" role="navigation" data-spy="affix" data-offset-top="850" >
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuPrincipaltqh">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        
        
        
        
        <div class="collapse navbar-collapse" id="menuPrincipaltqh">
          <ul class="nav navbar-nav" role="tablist">
            <?php $paginas = get_pages(array('sort_order'=>'ASC','sort_column'=>'menu_order'));?>
            <?php foreach($paginas as $pagina): ?>
               <li class="menu-<?php echo $pagina->post_name ?>" ><a href="#<?php echo $pagina->post_name ?>"><?php echo $pagina->post_title ?></a></li>
            <?php endforeach?>
            <li class="menu-noticias" ><a href="#noticias">Noticias</a></li>
            <li class="menu-videos" ><a href="#videos">Videos</a></li>
            <li class="menu-contacto"><a href="#contacto">Participe</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
	<!-- FIN menu tqhablar -->
	
	<!-- serviciosUN -->
	<?php include('inc/serviciosUN.php')?>
	<!-- FIN serviciosUN-->






