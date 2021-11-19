<!-- Modal -->
<div class="modal fade" id="addRecordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new records</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <?php

use PhpParser\Node\Name;

echo $this->Form->create(null, ['url' => [ 'controller' => 'Records',  'action' => 'add']]); ?>

                

                    <div class="form-group">
                        <label for="title">Title</label>
                        <?php echo $this->Form->text('record_name', ['id' => 'title', 'placeHolder' => 'Record title...' , 'class' => 'form-control']); ?>
                    </div>

                    <div class="row mt-2 mb-2" >
                        <div class="form-group col-6">
                            <label for="artist">Artist</label>
                            <?php echo $this->Form->text('artist', ['id' => 'artist', 'placeHolder' => 'Artist name...' , 'class' => 'form-control']); ?>
                        </div>

                        <div class="form-group col-6">
                            <label for="date">Date</label>
                            <?php echo $this->Form->number('year', ['id' => 'date', 'class' => 'form-control' , 'min' => 1963]); ?>
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
                        <?php echo $this->Form->select('genre', $options, [  'empty' => "-- Choose a genre --" , 'class' => 'form-select'] );?>
                        </div>

                        <div class="form-group col-6">
                            <label for="disks">Number of disks</label>
                            <?php echo $this->Form->number('number_of_disks', ['id' => 'date', 'class' => 'form-control' , 'min' => 0]); ?>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <?php echo $this->Form->button('Add' , ['id' => 'search', 'type' => 'submit', 'class' => 'btn btn-primary' , 'name' => 'add']); ?>
                    </div>
               
                    <?= $this->Form->end(); ?>
      </div>

    </div>
  </div>
</div>