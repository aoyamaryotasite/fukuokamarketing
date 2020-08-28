<?php get_header(); ?>
<header>
  <nav class="navbar navbar-expand-xl navbar-light bg-light">
      <a class="navbar-brand" href="https://asamini.com/"><img src="<?php echo get_template_directory_uri(); ?>/logos.png" class="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="https://asamini.com/">Home </span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://asamini.com/youtubeacting/">YOUTUBE運用代行</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://asamini.com/operation/">動画編集支援</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="https://asamini.com/sns/">SNS運用支援</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="https://asamini.com/about/">私たちについて</a>
          </li>
          <li class="nav-item">
          <a class="nav-link " href="https://asamini.com/contact/">お問い合わせ</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
<div id="overwrap">
<div class="top-wrapper">
<div id="page_top"><a href="#">↑</a></div>
<div class ="hide"></div>
  <div class="container">
    <h1>お客様のお悩みを<span>YOUTUBE動画</span>の力で解決します</h1>
  </div>
</div>
<div class="box1">
<div class="container">
  <div class="row">
  <div class="col-sm mb-3">
     <a href="https://asamini.com/youtubeacting/"><img src="<?php echo get_template_directory_uri(); ?>/運用代行.png" class="front"></a>
    </div>
    <div class="col-sm mb-3">
      <a href="https://asamini.com/operation/"><img src="<?php echo get_template_directory_uri(); ?>/movie2.png" class="front"></a>
    </div>
    <div class="col-sm mb-3">
    <a href="https://asamini.com/sns/"><img src="<?php echo get_template_directory_uri(); ?>/sns.png" class="front"></a>
    </div>
  </div>
</div>
</div>
<!-- box2,3の統括BOX -->
<div class="boxA">
<!-- お知らせ -->
<div class="blog">
<div class="container">
  <div class="row">
    <div class="col-sm">
    <h4>< お知らせ ></h4>
    </div>
    <div class="col-sm mt-3">

    <div class="dropdown">
  <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    カテゴリー
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="https://asamini.com/tag/blog/">Blog</a>
    <a class="dropdown-item" href="https://asamini.com/tag/works/">Works</a>
    <a class="dropdown-item" href="https://asamini.com/tag/recruitment/">Recruitment</a>
  </div>
</div>
    </div>
  </div>
</div>
<?php while (have_posts()): the_post(); ?>
   <div class="box3">
    <article class ="kiji"><br>
    <div class="txt1">
    <?php the_post_thumbnail('medium'); ?>
    </div>
    <div class="txt2">
    <h4><?php the_title(); ?></a></h4>
    <?php the_time('Y年n月j日（D）'); ?>
      <p>
      <?php the_content(); ?>
      </p>
      </div>
      </div>
      
<?php endwhile; ?>
<?php echo paginate_links(); ?>
    </article>
  </div>
</div>
</div>
<div class="box5">
<div class="container">
  <div class="row">
    <div class="col-sm">
    <h2>お問い合わせはこちらから</h2>
  <a href="https://asamini.com/contact/"><button type="button" name="" value="" class="form">
<p>CONTACT FORM</p>
  </button></a>
    </div>
    <div class="col-sm mb-4">
    <h2>LINEはこちらから</h2>
    <a href="https://lin.ee/69o3XYn"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" height="60" border="0" class="form"></a>
  </div>
</div>
 </div>
</div>
<?php get_footer(); ?>