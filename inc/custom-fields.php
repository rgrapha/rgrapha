<?php

function custom_metabox() {
global $post;

//Dados Currículo-----------------------
  //Cotatos
    $post_metabox = new Odin_Metabox(
      'contato-curriculo', // Slug/ID of the Metabox (Required)
      'Contatos', // Metabox name (Required)
      'curriculo', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
    );
    $post_metabox->set_fields(
      array(
        array(
          'id'          => 'email', // Obrigatório
          'label'       => __( 'E-mail:', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
          'attributes'  => array( // Optional (html input elements)
              'type' => 'email'
          )
        ),
        array(
          'id'          => 'whatsapp', // Obrigatório
          'label'       => __( 'WhatsApp:', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
          'description' => __( 'Digite o numero ex.: (35) xxxx-xxxx', 'odin' ),
          'attributes'  => array( // Optional (html input elements)
            'type' => 'tel'
          )
        ),            
        array(
          'id'          => 'telefone', // Obrigatório
          'label'       => __( 'Telefone:', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
          'description' => __( 'Digite o numero ex.: (35) xxxx-xxxx', 'odin' ),
          'attributes'  => array( // Optional (html input elements)
            'type' => 'tel'
          )
        ),           
      )
    );

  //Sobre mim
    $post_metabox = new Odin_Metabox(
      'sobre-curriculo', // Slug/ID of the Metabox (Required)
      'Sobre Mim', // Metabox name (Required)
      'curriculo', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
    );
    $post_metabox->set_fields(
      array(
        array(
          'id'          => 'sobre-mim', // Obrigatório
          'label'       => __( 'Texto:', 'odin' ), // Obrigatório
          'type'        => 'textarea', // Obrigatório
           'description' => __( 'Descrevar um texto sobre você', 'odin' ),
        ),           
      )
    );

  //Situação prática que revela essa competência:
    $post_metabox = new Odin_Metabox(
      'sobre-competencia', // Slug/ID of the Metabox (Required)
      'Situação prática que revela essa competência', // Metabox name (Required)
      'curriculo', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
    );
    $post_metabox->set_fields(
      array(
        array(
          'id'          => 'sobre-texto', // Obrigatório
          'label'       => __( 'Texto:', 'odin' ), // Obrigatório
          'type'        => 'textarea', // Obrigatório
          'description' => __( 'Descreva uma situação prática que revela as competências marcadas', 'odin' ),
        ), 
      )
    );

  //Cursos
    $post_metabox = new Odin_Metabox(
      'cursos', // Slug/ID of the Metabox (Required)
      'Dados dos cursos', // Metabox name (Required)
      'curriculo', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
    );
    $post_metabox->set_fields(
      array(
        array(
            'id'   => 'Curso1', // Required
            'label'=> __( 'Curso 1', 'odin' ), // Required
            'type' => 'title', // Required
          ),
        array(
          'id'          => 'nome-curso1', // Obrigatório
          'label'       => __( 'Nome do Curso:', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'description' => __( '', 'odin' ),
        ), 
        array(
          'id'          => 'data-curso1', // Required
          'label'       => __( 'Data de conclusão:', 'odin' ), // Required
          'type'        => 'input', // Required
          // 'default'  => 'Default text', // Optional
          'description' => __( 'Adiciona a data de conclusão do curso', 'odin' ), // Optional
          'attributes'  => array( // Optional (html input elements)
            'type' => 'date'
          )
        ),
        array(
          'id'   => 'separator-curso1', // Obrigatório
          'type' => 'separator' // Obrigatório
        ),
        array(
            'id'   => 'Curso2', // Required
            'label'=> __( 'Curso2', 'odin' ), // Required
            'type' => 'title', // Required
          ),
        array(
          'id'          => 'nome-curso2', // Obrigatório
          'label'       => __( 'Nome do Curso:', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'description' => __( '', 'odin' ),
        ), 
        array(
          'id'          => 'data-curso2', // Required
          'label'       => __( 'Data de conclusão:', 'odin' ), // Required
          'type'        => 'input', // Required
          // 'default'  => 'Default text', // Optional
          'description' => __( 'Adiciona a data de conclusão do curso', 'odin' ), // Optional
          'attributes'  => array( // Optional (html input elements)
            'type' => 'date'
          )
        ),
        array(
          'id'   => 'separator-curso2', // Obrigatório
          'type' => 'separator' // Obrigatório
        ),
        array(
            'id'   => 'Curso3', // Required
            'label'=> __( 'Curso 3', 'odin' ), // Required
            'type' => 'title', // Required
          ),
        array(
          'id'          => 'nome-curso3', // Obrigatório
          'label'       => __( 'Nome do Curso:', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'description' => __( '', 'odin' ),
        ), 
        array(
          'id'          => 'data-curso3', // Required
          'label'       => __( 'Data de conclusão:', 'odin' ), // Required
          'type'        => 'input', // Required
          // 'default'  => 'Default text', // Optional
          'description' => __( 'Adiciona a data de conclusão do curso', 'odin' ), // Optional
          'attributes'  => array( // Optional (html input elements)
            'type' => 'date'
          )
        ),
        array(
          'id'   => 'separator-curso3', // Obrigatório
          'type' => 'separator' // Obrigatório
        ),

        array(
            'id'   => 'Curso4', // Required
            'label'=> __( 'Curso 4', 'odin' ), // Required
            'type' => 'title', // Required
          ),
        array(
          'id'          => 'nome-curso4', // Obrigatório
          'label'       => __( 'Nome do Curso:', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'description' => __( '', 'odin' ),
        ), 
        array(
          'id'          => 'data-curso4', // Required
          'label'       => __( 'Data de conclusão:', 'odin' ), // Required
          'type'        => 'input', // Required
          // 'default'  => 'Default text', // Optional
          'description' => __( 'Adiciona a data de conclusão do curso', 'odin' ), // Optional
          'attributes'  => array( // Optional (html input elements)
            'type' => 'date'
          )
        ),
        array(
          'id'   => 'separator-curso4', // Obrigatório
          'type' => 'separator' // Obrigatório
        ),

        array(
            'id'   => 'Curso5', // Required
            'label'=> __( 'Curso 5', 'odin' ), // Required
            'type' => 'title', // Required
          ),
        array(
          'id'          => 'nome-curso5', // Obrigatório
          'label'       => __( 'Nome do Curso:', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'description' => __( '', 'odin' ),
        ), 
        array(
          'id'          => 'data-curso5', // Required
          'label'       => __( 'Data de conclusão:', 'odin' ), // Required
          'type'        => 'input', // Required
          // 'default'  => 'Default text', // Optional
          'description' => __( 'Adiciona a data de conclusão do curso', 'odin' ), // Optional
          'attributes'  => array( // Optional (html input elements)
            'type' => 'date'
          )
        ),
        array(
          'id'   => 'separator-curso5', // Obrigatório
          'type' => 'separator' // Obrigatório
        ),
      )
    );
  
  //Depoimentos
    $post_metabox = new Odin_Metabox(
      'depoimentos', // Slug/ID of the Metabox (Required)
      'Depoimentos', // Metabox name (Required)
      'curriculo', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
    );
    $post_metabox->set_fields(
      array(
        array(
          'id'          => 'depoimento1', // Obrigatório
          'label'       => __( 'Depoimento do professor 1', 'odin' ), // Obrigatório
          'type'        => 'textarea', // Obrigatório
          'description' => __( 'Descreva o Depoimento do professor', 'odin' ),
        ), 
        array(
          'id'          => 'depoimento2', // Obrigatório
          'label'       => __( 'Depoimento do professor 2', 'odin' ), // Obrigatório
          'type'        => 'textarea', // Obrigatório
          'description' => __( 'Descreva o Depoimento do professor', 'odin' ),
        ), 
      )
    );

  //trabalhos escolares
    $post_metabox = new Odin_Metabox(
      'trabalhos-escolares', // Slug/ID of the Metabox (Required)
      'Trabalhos escolares', // Metabox name (Required)
      'curriculo', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
    );
    $post_metabox->set_fields(
      array(
        array(
          'id'          => 'link-trabalho1', // Required
          'label'       => __( 'Link do trabalho 1', 'odin' ), // Required
          'type'        => 'input', // Required
          'description' => __( 'Insira link com https ou http', 'odin' ),
          'attributes'  => array( // Optional (html input elements)
            'type' => 'url'
          )
        ),
        array(
          'id'          => 'link-trabalho2', // Required
          'label'       => __( 'Link do trabalho 2', 'odin' ), // Required
          'type'        => 'input', // Required
          'description' => __( 'Insira link com https ou http', 'odin' ),
          'attributes'  => array( // Optional (html input elements)
            'type' => 'url'
          )
        ),
        array(
          'id'          => 'link-trabalho3', // Required
          'label'       => __( 'Link do trabalho 3', 'odin' ), // Required
          'type'        => 'input', // Required
          'description' => __( 'Insira link com https ou http', 'odin' ),
          'attributes'  => array( // Optional (html input elements)
            'type' => 'url'
          )
        ),
      )
    );

  //Link do Boletim Escolar
    $post_metabox = new Odin_Metabox(
      'boletim-escolares', // Slug/ID of the Metabox (Required)
      'Boletins Escolares', // Metabox name (Required)
      'curriculo', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
    );
    $post_metabox->set_fields(
      array(
        array(
          'id'          => 'link-boletim1', // Required
          'label'       => __( 'Link do 1º Bimestre', 'odin' ), // Required
          'type'        => 'input', // Required
          'description' => __( 'Insira link do boletim do 1º Bimestre', 'odin' ),
          'attributes'  => array( // Optional (html input elements)
            'type' => 'url'
          )
        ),
        array(
          'id'          => 'link-boletim2', // Required
          'label'       => __( 'Link do 2º Bimestre', 'odin' ), // Required
          'type'        => 'input', // Required
          'description' => __( 'Insira link do boletim do 2º Bimestre', 'odin' ),
          'attributes'  => array( // Optional (html input elements)
            'type' => 'url'
          )
        ),
        array(
          'id'          => 'link-boletim3', // Required
          'label'       => __( 'Link do 3º Bimestre', 'odin' ), // Required
          'type'        => 'input', // Required
          'description' => __( 'Insira link do boletim do 3º Bimestre', 'odin' ),
          'attributes'  => array( // Optional (html input elements)
            'type' => 'url'
          )
        ),
        array(
          'id'          => 'link-boletim4', // Required
          'label'       => __( 'Link do 4º Bimestre', 'odin' ), // Required
          'type'        => 'input', // Required
          'description' => __( 'Insira link do boletim do 3º Bimestre', 'odin' ),
          'attributes'  => array( // Optional (html input elements)
            'type' => 'url'
          )
        ),
        array(
          'id'          => 'link-notafinal', // Required
          'label'       => __( 'Link da final do ano', 'odin' ), // Required
          'type'        => 'input', // Required
          'description' => __( 'Insira link do final do ano', 'odin' ),
          'attributes'  => array( // Optional (html input elements)
            'type' => 'url'
          )
        ),
      )
    );
//--------------------------------------

//Banner--------------------------------
  $post_metabox = new Odin_Metabox(
    'titulos', // Slug/ID of the Metabox (Required)
    'Títulos', // Metabox name (Required)
    'banner', // Slug of Post Type (Optional)
    'normal', // Context (options: normal, advanced, or side) (Optional)
    'high' // Priority (options: high, core, default or low) (Optional)
  );
  $post_metabox->set_fields(
    array(
      array(
        'id'          => 'texto-banner', // Obrigatório
        'label'       => __( 'Texto:', 'odin' ), // Obrigatório
        'type'        => 'textarea', // Obrigatório
        'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)        
      ),
      array(
        'id'          => 'botao', // Obrigatório
        'label'       => __( 'Nome do botão:', 'odin' ), // Obrigatório
        'type'        => 'text', // Obrigatório
        'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)        
      ),
      array(
        'id'          => 'link-botao', // Required
        'label'       => __( 'Link do botão', 'odin' ), // Required
        'type'        => 'input', // Required
        'description' => __( 'Insira link com https ou http', 'odin' ),
        'attributes'  => array( // Optional (html input elements)
          'type' => 'url'
        )
      ),
      array(
        'id'          => 'vetor', // Obrigatório
        'label'       => __( 'Vetor', 'odin' ), // Obrigatório
        'type'        => 'image', // Obrigatório
        'description' => __( 'Adicione o ícone', 'odin' ), // Optional
      ),
    )
  );
//--------------------------------------

}
add_action( 'init', 'custom_metabox', 1 );