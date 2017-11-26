<script language="javascript">
setTimeout(function(){
   window.location.reload(1);
}, 15000);
</script>



<div class="row">
	<div class="col-md-6">
		<?=$this->view('page/admins',$data);?>
	 <br>
		<?=$this->view('page/alumni',$data);?>
	</div>
	<div class="col-md-3">
		<?=$this->view('page/events',$data);?>
	</div>
	
	
</div>

 