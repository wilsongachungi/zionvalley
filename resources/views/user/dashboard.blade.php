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
						<div class="col-sm-4 grid-margin">
							<div class="card">
								<div class="card-body">
									<h5>Revenue</h5>
									<div class="row">
										<div class="col-8 col-sm-12 col-xl-8 my-auto">
											<div class="d-flex d-sm-block d-md-flex align-items-center">
												<h2 class="mb-0">$32123</h2>
												<p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
											</div>
											<h6 class="text-muted font-weight-normal">11.38% Since last month
											</h6>
										</div>
										<div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
											<i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 grid-margin">
							<div class="card">
								<div class="card-body">
									<h5>Sales</h5>
									<div class="row">
										<div class="col-8 col-sm-12 col-xl-8 my-auto">
											<div class="d-flex d-sm-block d-md-flex align-items-center">
												<h2 class="mb-0">$45850</h2>
												<p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p>
											</div>
											<h6 class="text-muted font-weight-normal"> 9.61% Since last month
											</h6>
										</div>
										<div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
											<i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 grid-margin">
							<div class="card">
								<div class="card-body">
									<h5>Purchase</h5>
									<div class="row">
										<div class="col-8 col-sm-12 col-xl-8 my-auto">
											<div class="d-flex d-sm-block d-md-flex align-items-center">
												<h2 class="mb-0">$2039</h2>
												<p class="text-danger ms-2 mb-0 font-weight-medium">-2.1% </p>
											</div>
											<h6 class="text-muted font-weight-normal">2.27% Since last month
											</h6>
										</div>
										<div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
											<i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

        </div>
    </div>
</x-admin-layout>
