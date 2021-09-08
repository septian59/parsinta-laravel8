<x-app-layout>
    <div class="container">

        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">Sign In</div>
                    <div class="card-body">
                        <form action="{{route('login')}}" method="post">
                           @csrf
                            <div class="mb-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" value="{{old("email")}}" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                <span class="invalid-feedback">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>

                           
                            <div class="mb-2">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                <span class="invalid-feedback">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>