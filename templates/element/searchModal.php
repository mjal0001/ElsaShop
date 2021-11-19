<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search for the records' keywords</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <?php

use PhpParser\Node\Name;

echo $this->Form->create(null, ['url' => [ 'controller' => 'Records',  'action' => 'search']]); ?>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <?php echo $this->Form->text('title', ['id' => 'title', 'placeHolder' => 'Record title...' , 'class' => 'form-control']); ?>
                    </div>

                    <div class="row mt-2 mb-2" >
                        <div class="form-group col-6">
                            <label for="artist">Artist</label>
                            <?php echo $this->Form->text('artist', ['id' => 'artist', 'placeHolder' => 'Artist name...' , 'class' => 'form-control']); ?>
                        </div>

                        <div class="form-group col-6">
                            <label for="date">date</label>
                            <?php echo $this->Form->number('date', ['id' => 'date', 'class' => 'form-control' , 'min' => 1963]); ?>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="genre">Genres</label>
                      
                      <?php 
                       $options = [];
                       

                      foreach ($genres as $genre) {
                        $options += [ $genre->genre_name => $genre->genre_name ];
                      }
                      ?>
                      <?php echo $this->Form->select('genre', $options, [  'empty' => "-- No genre --" , 'class' => 'form-select'] );?>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <?php echo $this->Form->button('search' , ['id' => 'search', 'type' => 'submit', 'class' => 'btn btn-primary' , 'name' => 'search']); ?>
                    </div>

                    


                    
                    <?= $this->Form->end(); ?>

                    

      
      </div>

    </div>
  </div>
</div>