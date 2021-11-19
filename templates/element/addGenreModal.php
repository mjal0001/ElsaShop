<!-- Modal -->
<div class="modal fade" id="addGenreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Genre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <?php

use PhpParser\Node\Name;

echo $this->Form->create(null, ['url' => [ 'controller' => 'Genres',  'action' => 'add']]); ?>

                

                    <div class="form-group">
                        <label for="title">Title</label>
                        <?php echo $this->Form->text('genre_name', ['id' => 'title', 'placeHolder' => 'Genre name...' , 'class' => 'form-control']); ?>
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