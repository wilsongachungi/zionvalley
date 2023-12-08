<x-base-layout>
    <div class="container" id="harambee-member" style="padding-top: 30px; padding-bottom:30px">
        <a class="btn btn-primary" style="padding: 5px" href="{{ route('contactzion') }}">Back</a>
        <form action="" method="post">
            <h3 style="color: greenyellow"></h3>
            <div class="input-container">
                <label for="username">Full name</label>
                <input type="text" id="username" name="username" required="" placeholder="Name">
            </div>
            <div class="input-container">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required="" placeholder="Email..">
            </div>
            <div class="input-container">
                <label for="email">Phone Number</label>
                <input type="email" id="email" name="email" required="" placeholder="Prefer Mpesa number">
            </div><br>

            <select name="bookfor" id="bookfor" class="input-container"
                style="padding:10px;width:250px;border-radius: 5px;">
                <option value="">--select--</option>
                <option value="">fanacial supporter</option>
                <option value="">Land Owners</option>
                <option value="">Worker</option>
                <option value="">Job Application</option>
                <option value="">Commitee member</option>
            </select><br><br>

            <div class="input-container">
                <label for="email">ID Number</label>
                <input type="idnumber" id="idnumber" name="idnumber" required="" placeholder="ID Number">
            </div>

            <div class="input-container">
                <label for="email">Age</label>
                <input type="idnumber" id="idnumber" name="idnumber" required="" placeholder="Age">
            </div>

            <div class="input-container">
                <label for="email">Passport</label>
                <input type="file" name="fileToUpload" id="fileToUpload" required="">
            </div><br>
            <button type="submit" class="btn btn-primary" style="padding-top: 10px"> Submit</button>
        </form>
    </div>
</x-base-layout>
