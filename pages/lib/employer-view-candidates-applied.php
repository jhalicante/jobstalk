		<!-- Pending Notice -->
		<div class="modal fade bs-modal-lg" aria-hidden="true" aria-labelledby="myTabContent"  id="employer-view-candidates-applied" role="dialog" tabindex="-1" data-backdrop="static">
	        <div class="modal-dialog modal-dialog-centered modal-lg login-signup-modal">
	            <div class="modal-content">
					<div class="modal-header">
						<!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
						<h4 class="modal-title text-primary">Candidates Applied</h4>
					</div>
	                <div class="modal-body"> 
						<p class="employer-view-candidates-loading" style="display:none;">Fetching data...</p>
						<table id="employer-view-candidates-applied-table" class="table table-hover employer-view-candidates-content" style="display:none;width: 100%;">
							<thead>
								<tr>
								<th>No.</th>
								<th>Full Name</th>
								<th>Gender</th>
								<th>Experience</th>
								<th>Date Applied</th>
								<th>Qualification</th>
								<th>Application Status</th>
								<th>Action</th>
								</tr>
							</thead>
							<tbody class="employer-view-candidates-lists"> 
								<!--Content goes here  -->
							</tbody>
						</table>
	                </div> <!-- end .modal-body -->
	            </div> <!-- end .modal-content -->
	        </div> <!-- end .modal-dialog -->
	    </div> <!-- end .modal -->