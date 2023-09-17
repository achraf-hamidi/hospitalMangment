<div class="sidebar-background">

	<div class="primary-sidebar-background">

	</div>

</div>

<div class="primary-sidebar">

	<!-- Main nav -->

    <br />

    <div style="text-align:center;">

    	<a href="<?php echo base_url();?>">

        	<img src="<?php echo base_url();?>uploads/2.png" style="width: 150px; height : 150px"> />

        </a>

    </div>

   	<br />

	<ul class="nav nav-collapse collapse nav-collapse-primary">

    

        

        <!------dashboard----->

		<li class="<?php if($page_name == 'dashboard')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?admin/dashboard" >

					<i class="icon-desktop icon-2x"></i>

					<span><?php echo ('Dashboard');?></span>

				</a>

		</li>

        

        <!------department----->

		<li class="<?php if($page_name == 'manage_department')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?admin/manage_department" >

					<i class="icon-sitemap icon-2x"></i>

					<span><?php echo ('Department');?></span>

				</a>

		</li>

        

        <!------doctor----->

		<li class="<?php if($page_name == 'manage_doctor')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?admin/manage_doctor" >

					<i class="icon-user-md icon-2x"></i>

					<span><?php echo ('Doctor');?></span>

				</a>

		</li>

        

        <!------patient----->

		<li class="<?php if($page_name == 'manage_patient')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?admin/manage_patient" >

					<i class="icon-user icon-2x"></i>

					<span><?php echo ('Patient');?></span>

				</a>

		</li>

        

        <!------nurse----->

		<li class="<?php if($page_name == 'manage_nurse')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?admin/manage_nurse" >

					<i class="icon-plus-sign-alt icon-2x"></i>

					<span><?php echo ('Nurse');?></span>

				</a>

		</li>

		<!------pharmacist----->

		<li class="<?php if($page_name == 'RH')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?admin/manage_human_resources" >

					<i class="icon-medkit icon-2x"></i>

					<span><?php echo ('RH');?></span>

				</a>

		</li>
        

        

		<!------manage hospital------>

		<li class="dark-nav <?php if(	$page_name == 'view_appointment' 	|| 

										$page_name == 'view_payment' 		|| 

										$page_name == 'view_bed_status' 	|| 

										$page_name == 'view_blood_bank' 	|| 

										$page_name == 'view_medicine' 		|| 

										$page_name == 'view_report'  )echo 'active';?>">

			<span class="glow"></span>

            <a class="accordion-toggle  " data-toggle="collapse" href="#view_hospital_submenu" >

                <i class="icon-screenshot icon-2x"></i>

                <span><?php echo ('Monitor Hospital');?><i class="icon-caret-down"></i></span>

            </a>

            

            <ul id="view_hospital_submenu" class="collapse <?php if(	$page_name == 'view_appointment' 	|| 

																		$page_name == 'view_payment' 		|| 

																		$page_name == 'view_bed_status' 	|| 

																		$page_name == 'view_blood_bank' 	|| 

																		$page_name == 'view_medicine' 		|| 

																		$page_name == 'view_report'  )echo 'in';?>">

                <li class="<?php if($page_name == 'view_appointment')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?admin/view_appointment">

                      <i class="icon-exchange"></i> <?php echo ('View Appointment');?>

                  </a>

                </li>

                <li class="<?php if($page_name == 'view_bed_status')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?admin/view_bed_status">

                      <i class="icon-hdd"></i> <?php echo ('View Bed Status');?>

                  </a>

                </li>


                <li class="<?php if($page_name == 'view_report' && $report_type	==	'operation')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?admin/view_report/operation">

                      <i class="icon-reorder"></i> <?php echo ('View Operation');?>

                  </a>

                </li>

            </ul>

		</li>




		<!------manage own profile--->

		<li class="<?php if($page_name == 'manage_profile')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?admin/manage_profile" >

					<i class="icon-lock icon-2x"></i>

					<span><?php echo ('Profile');?></span>

				</a>

		</li>

		

	</ul>

	

</div>