<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<div class="container">
    <div class="col-6">
        <form action="/save" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" value="Muhammad Raihan Fahrifi" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="muhammadraihanfahrifi@gmail.com" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="12345" class="form-control">
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
</div>