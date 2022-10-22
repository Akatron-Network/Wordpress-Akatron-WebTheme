<?php get_header(); ?>

<div class="container-fluid stage">
  <div class="row justify-content-md-center">
    <div class="col-xl-5 col-lg-6 col-md-12" style="text-align: left; padding: 20px; background-image: url('/wp-content/themes/akatron-theme/assets/img/akt-3d-bg.png'); background-repeat: no-repeat; background-size: contain; background-position: left;">
      <div  style="text-align: left;">
        <img src="<?php echo get_template_directory_uri().'/assets'; ?>/img/debi-icon.png" alt="debi" style="width: 200px; margin-bottom: 5px;">
        <h1>Yönetim Asistanınız</h1>
      </div>
      <div>
        <p>Debi, bilinçli kararlar verebilmeniz için verilerinizi görselleştirmenizi sağlar.</p>
        <p>Kullanımı herhangi bir nitelik ve bilgi gerektirmez!</p>
        <button type="button" class="btn btn-stage">İncele</button>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 stage-r">
      <img src="<?php echo get_template_directory_uri().'/assets'; ?>/img/debi-desktop.png" alt="debi-desktop">
    </div>
  </div>
</div>


<div class="container-fluid" style="padding: 30px;">

  <div class="row justify-content-evenly">

    <div class="col ref-col">
      <a href="https://argesta.com.tr" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets'; ?>/img/ref/argesta.png" alt="argesta makine"></a>
    </div>

    <div class="col ref-col">
      <a href="https://www.petradrilling.com" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets'; ?>/img/ref/petra.png" alt="petra mühendislik"></a>
    </div>

    <div class="col ref-col">
      <a href="https://corpitall.com" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets'; ?>/img/ref/corpitall.png" alt="corpitall işletme hastanesi"></a>
    </div>

    <div class="col ref-col">
      <a href="https://aconplus.com" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets'; ?>/img/ref/aconplus.png" alt="aconplus yazılım"></a>
    </div>

    <div style="text-align: center; padding-top: 20px;">
      <a href="" style="text-decoration: none; color: gray;">Tüm referansları görüntüle</a>
    </div>

  </div>
</div>



<div class="container-fluid comp-bg">
  <div class="row justify-content-end">
    <div class="col-xl-6 col-lg-8 col-md-12 comp-col">
      <div class="comp-title">
        <h2>Bulut Tabanlı Uygulamalar</h2>
        <h3>Her Yerde Erişim</h3>
        <p>İnternet bağlantınız olduğu sürece dünyanın her yerinden bulut uygulamalarınıza erişebilirsiniz.</p>
        <h3>Hep Güncel Versiyon</h3>
        <p>Bulut uygulamalarıyla, yazılımınızı manuel olarak güncelleme konusunda asla endişelenmenize gerek kalmaz. Güncellemeler otomatik olarak gerçekleşir, böylece her zaman en son sürüme sahip olursunuz.</p>
        <h3>Arttırılmış İşbirliği</h3>
        <p>Bulut uygulamaları, ekip üyelerinin projeler üzerinde gerçek zamanlı olarak işbirliği yapmasını kolaylaştırır. Bu, üretkenliği ve yaratıcılığı artırmaya yardımcı olabilir.</p>
      </div>
    </div>
  </div>
</div>


<div class="divider"></div>

<div class="container-fluid op-so">
  <div class="container">
    <h2>Açık Kaynak Kodları</h2>
    <p>
      Tüm ürünlerimiz açık kaynak kodludur ve güvenlik açısından incelenebilir. 
      Ürünlerimiz, açık kaynak olduğu için, herkesin kodu görüntülemesine ve gizli kötü amaçlı işlevler olmadığından emin olmasına olanak tanır. 
      Bu, onu güvenli bir yazılım seçeneği arayanlar için güvenli bir seçim haline getirir.
    </p>

    <p>
      Kaynak kodlarını incelemek için: <a href="https://github.com/Akatron-Network" target="_blank">GitHub</a>
    </p>
  </div>
</div>

<div class="divider-lg"></div>

<div class="container-fluid api-bg">
  <div class="aca-stage">
    <img class="aca-stage-img" src="<?php echo get_template_directory_uri().'/assets'; ?>/img/akt-academy.png" alt="akatron academy blog">
    <h1 class="aca-heading">Akatron Akademi</h1>
  </div>
  <div class="row justify-content-center" style="margin-top: -100px">

<?php query_posts("showposts=3"); ?>
<?php while(have_posts()) : the_post(); ?>

    <div class="col-xl-3 col-lg-4 col-md-6 aca-card">
      <div class="aca-post"><i class="fa-regular fa-paste"></i></div>
      <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
      <p>
        <?php the_excerpt(); ?>
      </p>
      <div class="row">
        <div class="col aca-author">
          <?php the_author() ?>
        </div>
        <div class="col aca-footer">
          <a href="<?php the_permalink() ?>">Devamını Oku...</a>
        </div>
      </div>
    </div>

<?php endwhile; ?>

  </div>
  <div class="aca-show">
    <a href="/category/yazilim/">Akademiyi Görüntüle</a>
  </div>
</div>

<div class="divider"></div>

<div class="container-fluid op-so akt-bg">
  <div class="container">
    <h2>Bize Ulaşın!</h2>
    <form class="row row-cols-lg-auto g-3 align-items-center">
      <div class="col-12">
        <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
        <div class="input-group">
          <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="İsminiz">
        </div>
      </div>

      <div class="col-12">
        <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
        <div class="input-group">
          <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Mail Adresiniz">
        </div>
      </div>
    
      <div class="col-12">
        <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
        <select class="form-select" id="inlineFormSelectPref">
          <option selected disabled>İletişim Sebebi</option>
          <option value="1">Genel Bilgi</option>
          <option value="2">Bayilik</option>
          <option value="3">Kariyer/İşe Alım</option>
        </select>
      </div>
    
      <div class="col-12">
        <button type="submit" class="btn btn-success">Gönder</button>
      </div>
    </form>
  </div>
</div>

<div class="divider"></div>

<?php get_footer(); ?>