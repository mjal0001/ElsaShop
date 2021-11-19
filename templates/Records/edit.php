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
        </div>

        <h2>Record -- <?php echo $record->record_name;?> --</h2>
        <div class="table-responsive">        
        </div>

        <?php

use PhpParser\Node\Name;

echo $this->Form->create($record)  ?>

                
<?php echo $this->Form->hidden('record_id', ['value' => $record->record_id]); ?>


                    <div class="form-group">
                        <label for="title">Title</label>
                        <?php echo $this->Form->text('record_name', ['id' => 'title', 'placeHolder' => 'Record title...' , 'class' => 'form-control', 'value' => $record->record_name]); ?>
                    </div>

                    <div class="row mt-2 mb-2" >
                        <div class="form-group col-6">
                            <label for="artist">Artist</label>
                            <?php echo $this->Form->text('artist', ['id' => 'artist', 'placeHolder' => 'Artist name...' , 'class' => 'form-control' ,'value' => $record->artist]); ?>
                        </div>

                        <div class="form-group col-6">
                            <label for="date">Date</label>
                            <?php echo $this->Form->number('year', ['id' => 'date', 'class' => 'form-control' , 'min' => 0, 'value' => $record->year]); ?>
                        </div>


                    </div>

                    <div class="row mt-2 mb-2" >
                        <div class="form-group col-6">
                        <label for="genre">Genres</label>
                        <?php 
                            $options = [];
                            foreach ($genres as $genre) {
                                $options += [ $genre->genre_name => $genre->genre_name ];
                            }
                        ?>
                        <?php echo $this->Form->select('genre', $options, [  'empty' => "-- Choose a genre --" , 'class' => 'form-select', 'value' => $record->genre] );?>
                        </div>

                        <div class="form-group col-6">
                            <label for="disks">Number of disks</label>
                            <?php echo $this->Form->number('number_of_disks', ['id' => 'date', 'class' => 'form-control' , 'min' => 0, 'value' => $record->number_of_disks]); ?>
                        </div>
                    </div>

              
                        <?php echo $this->Form->button('Edit' , ['id' => 'search', 'type' => 'submit', 'class' => 'btn btn-primary float-right' , 'name' => 'edit']); ?>
                   
               
                    <?= $this->Form->end(); ?>

      </div>
		</div>

    <?php echo $this->Html->script('jquery.min');?>
    <?php echo $this->Html->script('popper');?>
    <?php echo $this->Html->script('bootstrap');?>
    <?php echo $this->Html->script('main');?>
    <?php echo $this->element('searchModal'); ?>
    <?php echo $this->element('addRecordModal'); ?>

  
</body></html>