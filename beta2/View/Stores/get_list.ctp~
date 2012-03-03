<a id='addLink' class='store' href='#'>
  Add
</a>
<a id='editLink' class='store' href='#'>
  Edit
</a>
<a id='deleteLink' class='store' href='#'>
  Delete
</a>

<table id = 'datatable'>
        <thead>
            <tr>
                <th>id</th>
                <th>Store Name</th>
                <th>Store Location</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
                <td>Row 1 Data 3</td>
            </tr>
            <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 2 Data 3</td>
            </tr>
        </tbody>

</table>

<div id='formContainer' style = 'display:none'>
  <?php echo $this->Form->create('Store', array('action'=> 'edit'));?>
      <?php
          echo $this->Form->input('id', array('type' => 'hidden'));
          echo $this->Form->input('name');
          echo $this->Form->input('location');
      ?>
  <?php echo $this->Form->end(__('Save'));?>
</div>
