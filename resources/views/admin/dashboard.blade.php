 <br> <x-admin-layout>
     <div class="flex justify-center w-full">
         <div class="main-panel">
             <div class="content-wrapper">
                 <div class="row">

                 </div>
                 <div class="row">
                     <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                         <div class="card">
                             <div class="card-body">
                                 <div class="row">
                                     <div class="col-9">
                                         <div class="d-flex align-items-center align-self-start">
                                             <h3 class="mb-0">{{ $userCount }}</h3>

                                         </div>
                                     </div>
                                     <div class="col-3">
                                         <div class="icon icon-box-success">
                                             <span class="mdi mdi-arrow-top-right icon-item"></span>
                                         </div>
                                     </div>
                                 </div>
                                 <h6 class="text-muted font-weight-normal">Number of users</h6>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                         <div class="card">
                             <div class="card-body">
                                 <div class="row">
                                     <div class="col-9">
                                         <div class="d-flex align-items-center align-self-start">
                                             <h3 class="mb-0">{{ $peopleWithHarambees }}</h3>
                                             <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                         </div>
                                     </div>
                                     <div class="col-3">
                                         <div class="icon icon-box-success">
                                             <span class="mdi mdi-arrow-top-right icon-item"></span>
                                         </div>
                                     </div>
                                 </div>
                                 <h6 class="text-muted font-weight-normal">People with Harambees</h6>
                             </div>
                         </div>

                     </div>
                     <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                         <div class="card">
                             <div class="card-body">
                                 <div class="row">
                                     <div class="col-9">
                                         <div class="d-flex align-items-center align-self-start">
                                             <h3 class="mb-0">{{ $existingTotal }}</h3>
                                             <p class="text-danger ms-2 mb-0 font-weight-medium"></p>
                                         </div>
                                     </div>
                                     <div class="col-3">
                                         <div class="icon icon-box-danger">
                                             <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                                         </div>
                                     </div>
                                 </div>
                                 <h6 class="text-muted font-weight-normal">Internal Harambees</h6>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                         <div class="card">
                             <div class="card-body">
                                 <div class="row">
                                     <div class="col-9">
                                         <div class="d-flex align-items-center align-self-start">
                                             <h3 class="mb-0">Ksh31.53</h3>
                                             <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                         </div>
                                     </div>
                                     <div class="col-3">
                                         <div class="icon icon-box-success ">
                                             <span class="mdi mdi-arrow-top-right icon-item"></span>
                                         </div>
                                     </div>
                                 </div>
                                 <h6 class="text-muted font-weight-normal">Money Through Paybill</h6>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                    <div class="col-sm-12 grid-margin">
						<div class="card">
							<div class="card-body">
								<h5 style="color: greenyellow">Office Documents</h5>
								<form method="POST" action="{{ route('documents.store') }}" enctype="multipart/form-data" onsubmit="return validatePassword()">
									@csrf

									<!-- Document upload section -->
									<div class="form-group">
										<label for="documentFile">Choose File</label>
										<input type="file" name="file" id="documentFile" class="form-control" style="color:antiquewhite" accept=".pdf,.docx,.xls,.jpg,.png" required>
									</div>
									<div class="form-group">
										<label for="documentTitle">Document Title</label>
										<input type="text" name="name" id="documentTitle" class="form-control" style="color:antiquewhite" placeholder="Enter Document Title" required>
									</div>
									<div class="form-group">
										<label for="description">Description</label>
										<textarea id="description" name="description" class="form-control" style="color:antiquewhite" rows="4" placeholder="Enter Document Description"></textarea>
									</div>

										<!-- Password field -->
										<div class="form-group">
											<label for="password">Enter Password</label>
											<input type="password" name="password" id="password" class="form-control" style="color:antiquewhite" placeholder="Enter Password" required>
										</div>
									<button type="submit" class="btn btn-primary mt-3">Upload Document</button>
								</form>
							</div>
						</div>
					</div>

					<script>
						function validatePassword() {
							const password = document.getElementById("password").value;
							const correctPassword = "zionadmin"; // Replace with your actual password

							if (password !== correctPassword) {
								alert("Incorrect password!");
								return false;  // Prevent form submission
							}
							return true;  // Allow form submission
						}
					</script>


                     <div class="col-sm-12 grid-margin">
                         <div class="card">
                             <div class="card-body">
                                 <h5 style="color: greenyellow">Office Documents List</h5>
                                 <div class="table-responsive"> <!-- Enables scrolling on small screens -->
                                     <table class="table table-bordered">
                                         <thead>
                                             <tr>
                                                 <th>#</th>
                                                 <th>Document Name</th>
                                                 <th>Description</th>
                                                 <th>File Type</th>
                                                 <th>Date</th>
                                                 <th>Actions</th>
                                             </tr>
                                         </thead>
										 <tbody>
											@foreach ($documents as $document)
												<tr>
													<td>{{ $loop->iteration }}</td>
													<td>{{ $document->name }}</td>
													<td>{{ $document->description }}</td>
													<td>{{ $document->mime_type }}</td>
													<td>{{ $document->created_at }}</td>
													<td>
														<!-- View button: Calls confirmAction function -->
														<button onclick="confirmAction('view', {{ $document->id }})" class="btn btn-primary btn-sm">
															View
														</button>

														<!-- Download button: Calls confirmAction function -->
														<button onclick="confirmAction('download', {{ $document->id }})" class="btn btn-success btn-sm">
															Download
														</button>

														<!-- Delete button: Standard form submission -->
														<form action="{{ route('documents.destroy', $document->id) }}" method="POST" style="display:inline;">
															@csrf
															@method('DELETE')
															<button type="submit" class="btn btn-danger btn-sm">Delete</button>
														</form>
													</td>
												</tr>
											@endforeach
										</tbody>

                                         </tbody>
                                     </table>
                                 </div> <!-- End of .table-responsive -->
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

			 <script>
				function confirmAction(action, documentId) {
					const password = prompt("Please enter the password:");

					if (password === "zionadmin") {
						// Action to open the document (view or download)
						let url = '';

						if (action === 'view') {
							// Construct the URL for the view action
							url = `/${documentId}?password=${password}`;
							window.open(url, "_blank");
						} else if (action === 'download') {
							// Construct the URL for the download action
							url = `/${documentId}?download=true&password=${password}`;
							window.location.href = url;
						}
					} else {
						alert("Incorrect password! Please try again.");
					}
				}
			</script>

 </x-admin-layout>
