<x-app-layout>
<div class="container">
    <div class="row form-group">
        <div class="col-md-4 col-sm-1 mb-3">
            <div class="card admin-dashboard shadow bg-info text-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 col-md-4">
                            <div class="card-icon">
                                <i class="fal fa-box-full fa-4x"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <p class="card-number">{{count($borroweds)}}</p>
                            <p class="card-title">Equipment</p>
                        </div>
                    </div>
                    <hr>
                    <a href="">View</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-1 mb-3">
            <div class="card admin-dashboard shadow bg-success text-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 col-md-4">
                            <div class="card-icon">
                                <i class="fal fa-hand-holding-box fa-4x"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <p class="card-number">{{count($borroweds)}}</p>
                            <p class="card-title">Borrowed Equipment</p>
                        </div>
                    </div>
                    <hr>
                    <a href="">View</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-1 mb-3">
            <div class="card admin-dashboard shadow  bg-secondary text-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 col-md-4">
                            <div class="card-icon">
                                <i class="fal fa-times-octagon fa-4x"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <p class="card-number">{{count($borroweds)}}</p>
                            <p class="card-title">Retered Equipment</p>
                        </div>
                    </div>
                    <hr>
                    <a href="">View</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-6">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($borroweds as $borrowed)
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($borroweds as $borrowed)
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>

</div>
</x-app-layout>
