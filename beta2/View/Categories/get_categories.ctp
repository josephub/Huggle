<a id='addLink' class='category' href='#'>
  Add
</a>
<a id='editLink' class='category' href='#'>
  Edit
</a>
<a id='deleteLink' class='category' href='#'>
  Delete
</a>

<table id = 'datatable'>
        <thead>
            <tr>
                <th>id</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
            </tr>
            <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
            </tr>
        </tbody>

</table>

<div id='formContainer' style = 'display:none'>
  <?php echo $this->Form->create('Category', array('action'=> 'edit'));?>
      <?php
          echo $this->Form->input('id', array('type' => 'hidden'));
          echo $this->Form->input('category');
      ?>
  <?php echo $this->Form->end(__('Save'));?>
</div>
