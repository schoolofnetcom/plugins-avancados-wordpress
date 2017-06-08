<?php 

class GithubWidget extends WP_Widget {

	
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'GithubWidget',
			'description' => 'Widget do plugin Github School of Net',
		);
		parent::__construct( 'githubwidget', 'Github Widget', $widget_ops );
	}

	public function widget( $args, $instance ) {
		   
                 // Criando Função de request

        function gaps_convert_json($request_url){
              $options = array("http"=>array("user_agent" => $_SERVER['HTTP_USER_AGENT']));
              $context = stream_context_create($options);
              $response = file_get_contents($request_url, false,$context);
              $dados = json_decode($response);
              return $dados;

           }
              
              $user = $instance['user'];
              $qtd =  $instance['qtd'];


            $request_url = "https://api.github.com/users/".$user."/repos?sort=createdDate&per_page=".$qtd;

            $repos = gaps_convert_json($request_url);
            
            $request_url = "https://api.github.com/users/".$user; 

            $usuario = gaps_convert_json($request_url);
           

        ?>          
             
        <div class="usuario">
          <hr>
          <h4>Repositórios:</h4><br>
          
          <img src="<?php echo $usuario->avatar_url; ?>" style="width: 60px !important;"><br>
          Nickname: <?php echo $usuario->login; ?><br>
          Email: <?php echo $usuario->email; ?><br>
          <hr>
        </div>


        <?php foreach($repos as $repo): ?>
            <h4><?php echo $repo->name; ?></h4><br>
            Linguagem: <?php echo $repo->language; ?><br>
            <a href="<?php echo $repo->html_url; ?>"><button>Ver</button></a><br>
            <hr>

        <?php endforeach; ?>
        <?php 

	}

	public function form( $instance ) {
		
       $user = $instance['user'];
       $qtd = $instance['qtd'];

       ?> 
        
         <h4>Widget:</h4>
         <label>Usuário: </label><br>
         <input type="text" id="<?php echo $this->get_field_id('user'); ?>" name="<?php echo $this->get_field_name('user'); ?>" value="<?php echo $user ?>"><br>
        <label>Quantidade de repositórios: </label>
         <input type="text" id="<?php echo $this->get_field_id('qtd'); ?>" name="<?php echo $this->get_field_name('qtd'); ?>" value="<?php echo $qtd ?>">
       <?php 

	}


	public function update( $new_instance, $old_instance ) {
		
          $instance = array();
          $instance['user'] = $new_instance['user'];
          $instance['qtd'] = $new_instance['qtd'];
          return $instance;

	}
}