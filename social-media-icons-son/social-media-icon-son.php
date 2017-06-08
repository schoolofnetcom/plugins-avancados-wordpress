<?php 

/*
 Plugin Name: Social Media Icons - School of Net
 Description: Um Plugin que exibe os icones de rede social no footer de artigos
 Version: 0.1 
 Author: Victor Lima - School of Net
 Author URI: http://schoolofnet.com
*/


// Medidas de segurança

if(!defined('ABSPATH')){
    exit("Acesso negado");
}

// Definição da constante do diretorio absoluto

 define('SMIS_DIRETORIO_ABSOLUTO_DO_PLUGIN',plugin_dir_path(__FILE__));

// Includes
require_once(SMIS_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/social-media-icon-son-conteudo.php');
require_once(SMIS_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/social-media-icon-son-opcoes.php');