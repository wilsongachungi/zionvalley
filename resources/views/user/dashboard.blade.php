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
                                 <h5>Office Documents</h5>
                                 <form method="POST" action=""
                                     enctype="multipart/form-data">
                                     @csrf
                                     <div class="form-group">
                                         <label for="documentTitle">Document Title</label>
                                         <input type="text" id="documentTitle" name="title" class="form-control"
                                             placeholder="Enter Document Title" required>
                                     </div>
                                     <div class="form-group">
                                         <label for="documentFile">Choose File</label>
                                         <input type="file" id="documentFile" name="file" class="form-control"
                                             accept=".pdf,.docx,.xls,.jpg,.png" required>
                                     </div>
                                     <div class="form-group">
                                         <label for="documentDescription">Description</label>
                                         <textarea id="documentDescription" name="description" class="form-control" rows="4"
                                             placeholder="Enter Document Description"></textarea>
                                     </div>
                                     <button type="submit" class="btn btn-primary mt-3">Upload Document</button>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
 </x-admin-layout>
