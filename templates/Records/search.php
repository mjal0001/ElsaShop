<html lang="en"><head>
  	<title>Sidebar 01</title>
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
	          <li class="active">
            <?= $this->Html->link(__('Records'), ['action' => 'index']) ?>
	          </li>
	          <li>
            <?= $this->Html->link(__('Genres'), ['controller' => 'Genres' , 'action' => 'index']) ?>
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
              <?= $this->Html->link(__('ADD'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
            </div>
            <div class="btn-group mr-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#searchModal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
              </svg>
              Search
            </button>
            </div>
          </div>
        </div>


        <h2>Records</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Artist</th>
                <th>Year</th>
                <th>Genre</th>
                <th>Number of Disks</th>
                <th></th>
              </tr>
            </thead>
            <tbody>

              <!-- records selection start -->
              <?php foreach($records as $record): ?>

              <tr>
                <td><?= $record->record_id; ?></td>
                <td><?= $record->record_name; ?></td>
                <td><?= $record->artist; ?></td>
                <td><?= $record->year; ?></td>
                <td><?= $record->genre; ?></td>
                <td><?= $record->number_of_disks; ?></td>
                <td>

                  <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit' , $record->record_id], ['class' => 'btn btn-secondary']) ?>
                    </div>
                    <div class="btn-group mr-2">
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $record->record_id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->record_id) , 'class' => 'btn btn-secondary']) ?>
                    </div>
                  </div>
                </td>

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
    <?php echo $this->element('searchModal'); ?>

  
</body></html>