<x-base-layout>
    <div class="container" id="cbo-member" style="padding-top: 30px; padding-bottom:30px;">
        <h5 style="color: greenyellow">CBO Member</h5>

        <a class="btn btn-primary" style="padding: 5px" href="{{ route('contactzion') }}">Back</a>

        <form action="" method="post">
            <h3 style="color: greenyellow">Registration Form</h3>
            <div class="input-container">
                <label for="username">Full name</label>
                <input type="text" id="username" name="username" required="" placeholder="Name..">
            </div>
            <div class="input-container">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required="" placeholder="Email..">
            </div>
            <div class="input-container">
                <label for="email">Phone Number</label>
                <input type="email" id="email" name="email" required="" placeholder="Phone..">
            </div>
            <div class="input-container">
                <label for="email">ID Number</label>
                <input type="idnumber" id="idnumber" name="idnumber" required="" placeholder="ID..">
            </div>
            <div class="input-container">
                <label for="email">Plot Number</label>
                <input type="" id="" name="" required="" placeholder="Plot..">
            </div>
            <div class="input-container">
                <label for="email">Next of Kin</label>
                <input type="" id="" name="" required="" placeholder="Next of kin">
            </div>
            <div class="input-container">
                <label for="email">Passport</label>
                <input type="file" name="fileToUpload" id="fileToUpload" required=""
                    placeholder="Prefer Mpesa number">
            </div><br>
            <div class="input-container">
                <label for="email">Original tile</label>
                <input type="file" name="fileToUpload" id="fileToUpload" required=""
                    placeholder="Prefer Mpesa number">
            </div><br>

            <button type="submit" class="btn btn-primary" style="padding-top: 10px">Submit</button>
        </form>
    </div>
</x-base-layout>
