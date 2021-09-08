<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">Welcome</div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nisi officiis recusandae iusto minus dolor quae! Sint nisi quam laboriosam aspernatur. Optio exercitationem maiores necessitatibus?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>