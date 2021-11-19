<html lang="en"><head>
  	<title>Genres</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<?php echo $this->Html->css('style'); ?>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<div class="p-4 pt-5">
		  		<?php echo $this->Html->image('logo.jpg', ['alt' => 'CakePHP' , 'class' => 'img logo rounded-circle mb-5']); ?>
	        <ul class="list-unstyled components mb-5">
            <li>
            <?= $this->Html->link(__('Records'), ['controller'=> 'Records', 'action' => 'index']) ?>
	          </li>
	          <li class="active">
            <?= $this->Html->link(__('Genres'), ['action' => 'index']) ?>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright ©<script>document.write(new Date().getFullYear());</script>2021 All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

          </div>
        </nav>

        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Elsa Antique Collection Store</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            <?= $this->Form->button('Add', ['type' => 'button', 'class' => 'btn btn-secondary', 'data-toggle' => 'modal' , 'data-target' => '#addGenreModal']); ?>
            </div>
          </div>
        </div>


        <h2>Genres</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <div class="container">
                    <div class="row">
                    <div class="col-sm">
                        <th>ID</th>
                    </div>
                    <div class="col-sm float-centre">
                        <th>Name</th>
                    </div>
                    <div class="col-sm">
                        <th></th>
                    </div>
                    </div>
                </div>
              </tr>
            </thead>
            <tbody>

              <!-- records selection start -->
              <?php foreach($genres as $genre): ?>

              <tr>
                <div class="row">
                    <div class="col-sm">
                        <td><?= $genre->genre_id; ?></td>
                    </div>
                    <div class="col-sm float-centre">
                        <td><?= $genre->genre_name; ?></td>
                    </div>
                    <div class="col-sm">
                        <td>
                            <div class="btn-toolbar mb-2 mb-md-0 float-right">
                                <div class="btn-group mr-2">
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit' , $genre->genre_id], ['class' => 'btn btn-secondary float-right']) ?>
                                </div>
                                <div class="btn-group mr-2">
                                    <?= $this->Html->link(__('View'), [ 'controller' => 'Genres' , 'action' => 'view' , $genre->genre_id], ['class' => 'btn btn-dark float-right']) ?>
                                </div>
                                <div class="btn-group mr-2">
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $genre->genre_id], ['confirm' => __('Are you sure you want to delete # {0}?', $genre->genre_id) , 'class' => 'btn btn-primary float-right', 'i:bi bi-trash']) ?>
                                </div>
                            </div>
                        </td>
                    </div>
                

                </div>

              </tr>

            <?php endforeach; ?>
            <!-- record selection end -->
            </tbody>
          </table>
        </div>

      </div>
		</div>

    <?php echo $this->Html->script('jquery.min');?>
    <?php echo $this->Html->script('popper');?>
    <?php echo $this->Html->script('bootstrap');?>
    <?php echo $this->Html->script('main');?>
    <?php echo $this->element('addGenreModal'); ?>
    

  
</body></html>