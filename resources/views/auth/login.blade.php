<x-layout>

        <div class="conteiner">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="text-center display-1">Accedi</h1>
                </div>
                <div class="col-6">
                    <form method="POST" action="/login">
                        @csrf
                        <div class="mb-3">
                          <label for="email" class="form-label">Email address</label>
                          <input name="email" type="email" class="form-control" id="email" >
                        </div>
                          <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="password">
                          </div>
                        <button type="submit" class="btn btn-primary w-100">Accedi</button>
                      </form>
                </div>
            </div>
        </div>
        
</x-layout>