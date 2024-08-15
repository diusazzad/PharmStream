@extends('layouts.dashboard')

@section('content')
<div class="card border-0">
    <div class="card-header bg-transparent">
        <div class="">
            <h3 class="card-title">Customers</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://demopharma.ayaantec.com/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Customers</li>
                </ol>
            </nav>
        </div>
        <a class="btn btn-primary waves-effect waves-float waves-light"
            href="https://demopharma.ayaantec.com/customers/create">Add New</a>
    </div>
    <div class="card-body">
        <div class="table-responsive pt-0">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Due</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Dharmveer Singh</td>
                        <td></td>
                        <td>₹0.00</td>
                        <td></td>
                        <td class="d-flex gap-1">
                            <a class="edit-button btn btn-sm btn-info waves-effect waves-float waves-light"
                                href="https://demopharma.ayaantec.com/customers/edit/61">
                                <i class="fa fa-edit"></i>
                            </a> <a class="show-button btn btn-sm btn-warning  waves-effect waves-float waves-light"
                                href="https://demopharma.ayaantec.com/customers/show/61">
                                <i class="fa fa-eye"></i>
                            </a>
                            <form onclick="return confirm('Are you sure?')" class="delete"
                                action="https://demopharma.ayaantec.com/customers/delete/61" method="POST">
                                <input type="hidden" name="_method" value="delete"> <input type="hidden" name="_token"
                                    value="4H5hzs2neWWQ1hVId52OC5FeyQ5lIRnRzxVEFMgx"> <button type="submit"
                                    class="delete-button btn btn-sm btn-danger waves-effect waves-float waves-light">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Joan</td>
                        <td>0789812000</td>
                        <td>₹680.00</td>
                        <td>ki</td>
                        <td class="d-flex gap-1">
                            <a class="edit-button btn btn-sm btn-info waves-effect waves-float waves-light"
                                href="https://demopharma.ayaantec.com/customers/edit/60">
                                <i class="fa fa-edit"></i>
                            </a> <a class="show-button btn btn-sm btn-warning  waves-effect waves-float waves-light"
                                href="https://demopharma.ayaantec.com/customers/show/60">
                                <i class="fa fa-eye"></i>
                            </a>
                            <form onclick="return confirm('Are you sure?')" class="delete"
                                action="https://demopharma.ayaantec.com/customers/delete/60" method="POST">
                                <input type="hidden" name="_method" value="delete"> <input type="hidden" name="_token"
                                    value="4H5hzs2neWWQ1hVId52OC5FeyQ5lIRnRzxVEFMgx"> <button type="submit"
                                    class="delete-button btn btn-sm btn-danger waves-effect waves-float waves-light">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>test</td>
                        <td>7003438796</td>
                        <td>₹570.00</td>
                        <td>kolkata</td>
                        <td class="d-flex gap-1">
                            <a class="edit-button btn btn-sm btn-info waves-effect waves-float waves-light"
                                href="https://demopharma.ayaantec.com/customers/edit/59">
                                <i class="fa fa-edit"></i>
                            </a> <a class="show-button btn btn-sm btn-warning  waves-effect waves-float waves-light"
                                href="https://demopharma.ayaantec.com/customers/show/59">
                                <i class="fa fa-eye"></i>
                            </a>
                            <form onclick="return confirm('Are you sure?')" class="delete"
                                action="https://demopharma.ayaantec.com/customers/delete/59" method="POST">
                                <input type="hidden" name="_method" value="delete"> <input type="hidden" name="_token"
                                    value="4H5hzs2neWWQ1hVId52OC5FeyQ5lIRnRzxVEFMgx"> <button type="submit"
                                    class="delete-button btn btn-sm btn-danger waves-effect waves-float waves-light">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>jay</td>
                        <td>25479909856</td>
                        <td>₹901.00</td>
                        <td>e</td>
                        <td class="d-flex gap-1">
                            <a class="edit-button btn btn-sm btn-info waves-effect waves-float waves-light"
                                href="https://demopharma.ayaantec.com/customers/edit/58">
                                <i class="fa fa-edit"></i>
                            </a> <a class="show-button btn btn-sm btn-warning  waves-effect waves-float waves-light"
                                href="https://demopharma.ayaantec.com/customers/show/58">
                                <i class="fa fa-eye"></i>
                            </a>
                            <form onclick="return confirm('Are you sure?')" class="delete"
                                action="https://demopharma.ayaantec.com/customers/delete/58" method="POST">
                                <input type="hidden" name="_method" value="delete"> <input type="hidden" name="_token"
                                    value="4H5hzs2neWWQ1hVId52OC5FeyQ5lIRnRzxVEFMgx"> <button type="submit"
                                    class="delete-button btn btn-sm btn-danger waves-effect waves-float waves-light">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>jay</td>
                        <td>0788099099</td>
                        <td>₹250.00</td>
                        <td>kiar</td>
                        <td class="d-flex gap-1">
                            <a class="edit-button btn btn-sm btn-info waves-effect waves-float waves-light"
                                href="https://demopharma.ayaantec.com/customers/edit/57">
                                <i class="fa fa-edit"></i>
                            </a> <a class="show-button btn btn-sm btn-warning  waves-effect waves-float waves-light"
                                href="https://demopharma.ayaantec.com/customers/show/57">
                                <i class="fa fa-eye"></i>
                            </a>
                            <form onclick="return confirm('Are you sure?')" class="delete"
                                action="https://demopharma.ayaantec.com/customers/delete/57" method="POST">
                                <input type="hidden" name="_method" value="delete"> <input type="hidden" name="_token"
                                    value="4H5hzs2neWWQ1hVId52OC5FeyQ5lIRnRzxVEFMgx"> <button type="submit"
                                    class="delete-button btn btn-sm btn-danger waves-effect waves-float waves-light">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="pagination">
                <nav>
                    <ul class="pagination">

                        <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                            <span class="page-link" aria-hidden="true">‹</span>
                        </li>





                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link"
                                href="https://demopharma.ayaantec.com/customers/index?page=2">2</a></li>
                        <li class="page-item"><a class="page-link"
                                href="https://demopharma.ayaantec.com/customers/index?page=3">3</a></li>
                        <li class="page-item"><a class="page-link"
                                href="https://demopharma.ayaantec.com/customers/index?page=4">4</a></li>
                        <li class="page-item"><a class="page-link"
                                href="https://demopharma.ayaantec.com/customers/index?page=5">5</a></li>
                        <li class="page-item"><a class="page-link"
                                href="https://demopharma.ayaantec.com/customers/index?page=6">6</a></li>
                        <li class="page-item"><a class="page-link"
                                href="https://demopharma.ayaantec.com/customers/index?page=7">7</a></li>
                        <li class="page-item"><a class="page-link"
                                href="https://demopharma.ayaantec.com/customers/index?page=8">8</a></li>
                        <li class="page-item"><a class="page-link"
                                href="https://demopharma.ayaantec.com/customers/index?page=9">9</a></li>
                        <li class="page-item"><a class="page-link"
                                href="https://demopharma.ayaantec.com/customers/index?page=10">10</a></li>
                        <li class="page-item"><a class="page-link"
                                href="https://demopharma.ayaantec.com/customers/index?page=11">11</a></li>
                        <li class="page-item"><a class="page-link"
                                href="https://demopharma.ayaantec.com/customers/index?page=12">12</a></li>


                        <li class="page-item">
                            <a class="page-link" href="https://demopharma.ayaantec.com/customers/index?page=2"
                                rel="next" aria-label="Next »">›</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>
@endsection
