
	<div class="col-md-3"></div>
	<div class="col-md-9">
		<div class="panel p-body">
			<?php echo $this->session->flashdata('message'); ?>
			<div class="panel-heading"><h4>Personal Information</h4></div>
			<div class="panel-body">
				<div class="col-md-12 pic-con">
					<a data-toggle="modal" data-target=".modal-pic">
						<img class="profile-main" src="<?php echo base_url('assets/images/sample.jpg'); ?>">
					</a><br>
					<h3>Gregorio L. Sonit</h3>
				</div><hr/>
				<div class="col-md-12 det">
    				<div class="col-md-12 pad-bottom-10">
    					<div class="col-md-2">ID</div>
    					<div class="col-md-10 text-main-16">2011-00656</div>
    				</div>
    				
				</div>
			</div>
		</div>
	</div>

    <div class="modal fade modal-pic" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
        	    <form class="form">
        		    <img class="profile-modal" src="/assets/images/profile_pics/<?php //echo $_SESSION['id']; ?>.jpg">
        	    </form>
            </div>
        </div>
    </div>
