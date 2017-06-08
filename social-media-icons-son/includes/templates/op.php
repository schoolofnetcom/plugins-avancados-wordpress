<?php 
$smis_opcoes = get_option('smis_op_icons');
print_r($smis_opcoes);
?>
<div class='wrap'>
 <h1>Opções Plugin Social Media Icons - School of Net</h1>
 <hr>
  <form action="options.php" method="post">
   <?php settings_fields('smis_op'); ?>
     <label>Facebook: </label><br>
     <input type='url' name="smis_op_icons[fb_perfil]" id="smis_op_icons[fb_perfil]" value="<?php echo $smis_opcoes['fb_perfil']; ?>"><br>
     Esconder: <input type='checkbox' name='smis_op_icons[fb_hide]' id='smis_op_icons[fb_hide]' value="1" <?php checked( 1, $smis_opcoes['fb_hide']); ?> ><br>
     <label>Twitter: </label><br>
     <input type='url' name="smis_op_icons[tw_perfil]" id="smis_op_icons[tw_perfil]" value="<?php echo $smis_opcoes['tw_perfil']; ?>"><br>
     Esconder: <input type='checkbox' name='smis_op_icons[tw_hide]' id='smis_op_icons[tw_hide]' value="1" <?php checked( 1, $smis_opcoes['tw_hide']); ?> ><br>
     <label>Youtube: </label><br>
     <input type='url' name="smis_op_icons[yt_perfil]" id="smis_op_icons[yt_perfil]" value="<?php echo $smis_opcoes['yt_perfil']; ?>"><br>
     Esconder: <input type='checkbox' name='smis_op_icons[yt_hide]' id='smis_op_icons[yt_hide]' value="1" <?php checked( 1, $smis_opcoes['yt_hide']); ?> ><br>
     <input type="submit" name="submit" value="Salvar">
  </form>
</div>