<a id='addLink' class='user' href='#'>
  Add
</a>
<a id='editLink' class='user' href='#'>
  Edit
</a>
<a id='deleteLink' class='user' href='#'>
  Delete
</a>

<table id = 'datatable'>
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
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
  <?php echo $this->Form->create('User', array('action'=> 'save'));?>
      <?php
          echo $this->Form->input('id', array('type' => 'hidden'));
          echo $this->Form->input('username');
          echo $this->Form->input('email');
      ?>
  <?php echo $this->Form->end(__('Save'));?>
</div>
