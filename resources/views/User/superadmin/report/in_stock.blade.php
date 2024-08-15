@extends('layouts.dashboard')

@section('content')
<div class="card border-0">
    <div class="card-header bg-transparent">
        <div class="">
            <h3 class="card-title">In Stock Medicines</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://demopharma.ayaantec.com/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">In Stock Medicines</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive pt-0">
            <form action="" class="row mb-2">
                <div class="col-lg-4">
                    <input type="text" value="" placeholder="Enter keyword" name="keyword" class="form-control">
                </div>
                <div class="col-lg-4">
                    <button class="btn btn-primary waves-effect waves-float waves-light" type="submit"><i
                            class="fa fa-search"></i></button>
                </div>
            </form>
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Medicine</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Action</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Anaflex 500</td>
                        <td>862</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ashti</td>
                        <td>845</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Brodil 4</td>
                        <td>1168</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Cartilex D</td>
                        <td>68</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>devan</td>
                        <td>112</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Doximar 200</td>
                        <td>835</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Fabutas</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Febus 40</td>
                        <td>24</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Fluclox 500 GM</td>
                        <td>777</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Glutamate</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>jay</td>
                        <td>894</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Magnesio</td>
                        <td>762</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Majuto</td>
                        <td>120</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Napa</td>
                        <td>836</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Panadol</td>
                        <td>64</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Paracetamol 750mg</td>
                        <td>899</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>TEST MED</td>
                        <td>264</td>
                    </tr>
                </tbody>
            </table>
            <div class="pagination">

            </div>
        </div>
    </div>
</div>
@endsection
