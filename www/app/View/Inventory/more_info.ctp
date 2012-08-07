<?php echo $this->Html->link('Home', array('action' => 'home')); ?> |
<?php echo $this->Html->link('Edit', array('action' => 'edit', $computer['Computer']['id'])); ?>
<table>
    <tr>
        <th style="width: 200px;">Computer Name</th>
        <th style="width: 250px;">Location</th>
        <th style="width: 250px;">Current User</th>
        <th style="width: 250px;">Serial Number</th>
        <th style="width: 250px;">Asset ID</th>
     
    </tr>

    <tr>
        <td><?php echo $computer['Computer']['ComputerName']?></td>
        <td><?php echo $this->Html->link( $computer['Location']['location'], array('controller'=>'search','action' => 'search', 0, $computer['Computer']['ComputerLocation'])); ?></td>
         
          <td><?php echo $computer['Computer']['CurrentUser']?></td>
           <td><?php echo $computer['Computer']['SerialNumber']?></td>
            <td><?php echo $computer['Computer']['AssetId']?> </td>

    </tr>

</table>

<table>
    <tr>
        <th style="width: 200px;">Model</th>
        <th style="width: 250px;">Operating System</th>
        <th style="width: 250px;">CPU</th>
        <th style="width: 250px;">Memory</th>
        <th style="width: 250px;">Number of Monitors</th>
     
    </tr>
	    <tr>
        <td> <?php echo $this->Html->link($computer['Computer']['Model'], array('controller'=>'search','action' => 'search', 1, $computer['Computer']['Model'])); ?></td>
       
        <td><?php echo $this->Html->link( $computer['Computer']['OS'], array('controller'=>'search','action' => 'search', 2, $computer['Computer']['OS'])); ?></td> <!--  $comparisonID,$columnID,$modelID,$nameID -->
      
          <td><?php echo $computer['Computer']['CPU']?></td>
    
           <td> <?php echo $this->Html->link($computer['Computer']['Memory'] . " GB", array('controller'=>'search','action' => 'search', 3, $computer['Computer']['Memory'])); ?></td>
        

             <td> <?php echo $this->Html->link( $computer['Computer']['NumberOfMonitors'], array('controller'=>'search','action' => 'search', 4, $computer['Computer']['NumberOfMonitors'])); ?></td>
         </tr>
        
	
</table>

<table>
		
    <tr>
        <th style="width: 200px;">IP Address</th>
        <th style="width: 250px;">MAC Address</th>
 		<th style="width: 250px;">Disk Space</th>
 		<th style="width: 250px;">Last Updated</th>
 		<th style="width: 250px;"></th>
     
    </tr>
    <tr>
		<td><?php echo $computer['Computer']['IPaddress']?></td>
		<td><?php echo $computer['Computer']['MACaddress']?></td>
		<td><?php echo $this->DiskSpace->toString($computer['Computer']['DiskSpace']) ?></td>
		<td><?php echo $this->Time->niceShort($computer['Computer']['LastUpdated']);?></td>
		<td></td> 
     </tr>
       
</table> 

<?php if($computer['Computer']['notes'] != ''): ?>
<table>
	<tr>
		<th>Notes</th>
	</tr>
	<tr>
		<td><?php echo $computer['Computer']['notes']?></td>
	</tr>
</table> 
 <?php endif; ?>
 
<div id="programDiv">
<table>
    <tr>
        <th><h1>Programs</h1></th>
       
     
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->
	
    <?php foreach ($programs as $post): ?>
    <tr>
    	
   
			
        <td> <?php echo $this->Html->link( $post['Programs']['program'] , '/search/searchProgram/' . $post['Programs']['program']); ?></td>
 
    </tr>
    
    <?php endforeach; ?>
   </table>
</div>	
