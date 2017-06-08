<?php $smis_opcoes = get_option('smis_op_icons'); ?>

<?php if(!$smis_opcoes['fb_hide'] or !$smis_opcoes['tw_hide'] or !$smis_opcoes['yt_hide']): ?>
<style>
  
  .smis-conteudo .smis-icones img{
     width: 40px;
     height: auto;
     padding: 8px;

  }

</style>
<div class="smis-conteudo">
   Me enconte nas redes sociais:
   <hr>
   
      <div class="smis-icones">
       <?php if(!$smis_opcoes['fb_hide']): ?>
         <a href="<?php echo $smis_opcoes['fb_perfil']; ?>"><img src="<?php echo plugin_dir_url(__FILE__).'img/fb.png' ?>"></a>
      <?php endif; ?>
      <?php if(!$smis_opcoes['tw_hide']): ?>
         <a href="<?php echo $smis_opcoes['tw_perfil']; ?>"><img src="<?php echo plugin_dir_url(__FILE__).'img/tw.png' ?>"></a>
       <?php endif; ?>
      <?php if(!$smis_opcoes['yt_hide']): ?>
         <a href="<?php echo $smis_opcoes['yt_perfil']; ?>"><img src="<?php echo plugin_dir_url(__FILE__).'img/yt.png' ?>"></a>
       <?php endif; ?>
      </div>
</div>

<?php endif; ?>